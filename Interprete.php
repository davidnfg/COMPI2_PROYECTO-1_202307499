<?php

require_once 'vendor/autoload.php';
require_once 'GramaticaBaseVisitor.php';
require_once 'Valor.php';
require_once 'TablaSimbolos.php';
require_once 'ManejadorErrores.php';

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * Intérprete del lenguaje Golampi
 * Extiende GramaticaBaseVisitor para implementar el patrón Visitor
 */
class Interprete extends GramaticaBaseVisitor {
    private $tablaSimbolos;
    private $manejadorErrores;
    private $salida = '';
    private $funciones = [];           // Almacena las funciones declaradas (hoisting)
    private $valorRetorno = null;      // Para manejar return
    private $enFuncion = false;
    private $break = false;            // Para manejar break
    private $continue = false;         // Para manejar continue

    public function __construct() {
        $this->tablaSimbolos = new TablaSimbolos();
        $this->manejadorErrores = new ManejadorErrores();
    }

    /**
     * Obtiene la salida generada por el programa
     */
    public function obtenerSalida() {
        return $this->salida;
    }

    /**
     * Obtiene el manejador de errores
     */
    public function obtenerManejadorErrores() {
        return $this->manejadorErrores;
    }

    /**
     * Obtiene la tabla de símbolos
     */
    public function obtenerTablaSimbolos() {
        return $this->tablaSimbolos;
    }

    /**
     * Punto de entrada del programa
     */
    public function visitInicio($ctx) {
        // Primera pasada: recolectar todas las funciones (hoisting)
        $declsNivelSup = $ctx->declaracionNivelSuperior();
        if ($declsNivelSup !== null) {
            foreach ($declsNivelSup as $decl) {
                if ($decl->declaracionFuncion() !== null) {
                    $this->recolectarFuncion($decl);
                }
            }
        }

        // Segunda pasada: ejecutar declaraciones globales
        if ($declsNivelSup !== null) {
            foreach ($declsNivelSup as $decl) {
                if ($decl->declaracionFuncion() === null) {
                    $this->visit($decl);
                }
            }
        }

        // Buscar y ejecutar la función main
        if (isset($this->funciones['main'])) {
            $this->ejecutarFuncion('main', []);
        } else {
            $this->manejadorErrores->agregarError(
                'Semántico',
                'No se encontró la función main',
                0,
                0
            );
        }

        return null;
    }

    /**
     * Visita una declaración de función (no hace nada por hoisting)
     */
    public function visitDeclFunction($ctx) {
        // Las funciones ya fueron recolectadas en la primera pasada
        return null;
    }

    /**
     * Recolecta información de funciones para hoisting
     */
    private function recolectarFuncion($ctx) {
        $funcDecl = $ctx->declaracionFuncion();
        $nombreFuncion = $funcDecl->ID()->getText();
        
        // Verificar duplicados
        if (isset($this->funciones[$nombreFuncion])) {
            $this->manejadorErrores->agregarError(
                'Semántico',
                "La función '$nombreFuncion' ya ha sido declarada",
                $funcDecl->getStart()->getLine(),
                $funcDecl->getStart()->getCharPositionInLine()
            );
            return;
        }

        // Extraer parámetros
        $parametros = [];
        if ($funcDecl->listaParametros() !== null) {
            foreach ($funcDecl->listaParametros()->parametro() as $param) {
                $nombreParam = $param->ID()->getText();
                $tipoParam = $param->tipo()->getText();
                $parametros[] = ['nombre' => $nombreParam, 'tipo' => $tipoParam];
            }
        }

        // Extraer tipos de retorno
        $tiposRetorno = [];
        if ($funcDecl->tiposRetorno() !== null) {
            $tiposRetornoCtx = $funcDecl->tiposRetorno();
            foreach ($tiposRetornoCtx->tipo() as $tipo) {
                $tiposRetorno[] = $tipo->getText();
            }
        }

        $this->funciones[$nombreFuncion] = [
            'contexto' => $funcDecl,
            'parametros' => $parametros,
            'tiposRetorno' => $tiposRetorno
        ];
        
        // Registrar en tabla de símbolos
        $this->tablaSimbolos->insertarFuncion(
            $nombreFuncion,
            $parametros,
            $tiposRetorno,
            $funcDecl->getStart()->getLine(),
            $funcDecl->getStart()->getCharPositionInLine()
        );
    }

    /**
     * Ejecuta una función
     */
    private function ejecutarFuncion($nombre, $argumentos) {
        if (!isset($this->funciones[$nombre])) {
            return new Valor('nil', null);
        }

        $func = $this->funciones[$nombre];
        $funcDecl = $func['contexto'];
        $parametros = $func['parametros'];
        
        // Verificar cantidad de argumentos
        if (count($argumentos) !== count($parametros)) {
            $this->manejadorErrores->agregarError(
                'Semántico',
                "La función '$nombre' espera " . count($parametros) . " argumentos, pero se proporcionaron " . count($argumentos),
                0, 0
            );
            return new Valor('nil', null);
        }
        
        // Crear nuevo ámbito para la función
        $this->tablaSimbolos->entrarAmbito($nombre);
        $this->enFuncion = true;

        // Procesar parámetros: crear variables locales con los valores de los argumentos
        for ($i = 0; $i < count($parametros); $i++) {
            $nombreParam = $parametros[$i]['nombre'];
            $tipoParam = $parametros[$i]['tipo'];
            $valorArg = $argumentos[$i];
            
            // Validar tipo del argumento
            if ($valorArg->tipo !== $tipoParam) {
                $this->manejadorErrores->agregarError(
                    'Semántico',
                    "El parámetro '$nombreParam' espera tipo '$tipoParam' pero se recibió '{$valorArg->tipo}'",
                    0, 0
                );
            }
            
            // Insertar parámetro como variable local
            $this->tablaSimbolos->insertar(
                $nombreParam,
                $tipoParam,
                $valorArg->valor,
                0,
                0
            );
        }

        // Ejecutar el cuerpo de la función
        $this->visit($funcDecl->bloque());

        // Capturar valor de retorno
        $resultado = $this->valorRetorno;
        $this->valorRetorno = null;
        $this->enFuncion = false;

        // Salir del ámbito
        $this->tablaSimbolos->salirAmbito();

        return $resultado ?? new Valor('nil', null);
    }

    /**
     * Visita una declaración de impresión (print/println)
     */
    public function visitStmtPrint($ctx) {
        $valores = [];
        
        if ($ctx->sentenciaPrint()->listaExpresiones() !== null) {
            foreach ($ctx->sentenciaPrint()->listaExpresiones()->expresion() as $expr) {
                $valor = $this->visit($expr);
                if ($valor instanceof Valor) {
                    $valores[] = $valor->toString();
                }
            }
        }

        $this->salida .= implode(' ', $valores);
        
        // Agregar salto de línea si es println
        if ($ctx->sentenciaPrint()->KW_PRINTLN() !== null) {
            $this->salida .= "\n";
        }

        return null;
    }

    /**
     * Visita un literal
     */
    public function visitExprLiteral($ctx) {
        $literal = $ctx->literal();
        
        if ($literal->DECIMAL_LITERAL() !== null) {
            return new Valor('int32', intval($literal->getText()));
        }
        
        if ($literal->FLOAT_LITERAL() !== null) {
            return new Valor('float32', floatval($literal->getText()));
        }
        
        if ($literal->STRING_LITERAL() !== null) {
            $texto = $literal->getText();
            // Quitar comillas y procesar escapes
            $texto = substr($texto, 1, -1);
            $texto = stripcslashes($texto);
            return new Valor('string', $texto);
        }
        
        if ($literal->RUNE_LITERAL() !== null) {
            $texto = $literal->getText();
            $char = substr($texto, 1, -1);
            return new Valor('rune', $char);
        }
        
        if ($literal->TRUE() !== null) {
            return new Valor('bool', true);
        }
        
        if ($literal->FALSE() !== null) {
            return new Valor('bool', false);
        }
        
        return new Valor('nil', null);
    }

    /**
     * Visita un bloque de sentencias
     */
    public function visitStmtBlock($ctx) {
        $this->tablaSimbolos->entrarAmbito();
        $this->visit($ctx->bloque());
        $this->tablaSimbolos->salirAmbito();
        return null;
    }

    /**
     * Visita operaciones suma/resta
     */
    public function visitExprAddSub($ctx) {
        $izq = $this->visit($ctx->expresion(0));
        $der = $this->visit($ctx->expresion(1));
        
        if ($izq->esNil() || $der->esNil()) {
            return new Valor('nil', null);
        }

        $operador = $ctx->getChild(1)->getText();
        
        if ($operador === '+') {
            // Suma
            if ($izq->tipo === 'int32' && $der->tipo === 'int32') {
                return new Valor('int32', $izq->valor + $der->valor);
            } elseif (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                      ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                return new Valor('float32', floatval($izq->valor) + floatval($der->valor));
            } elseif ($izq->tipo === 'string' || $der->tipo === 'string') {
                // Concatenación de strings - permite cualquier tipo y lo convierte a string
                return new Valor('string', $izq->toString() . $der->toString());
            }
        } elseif ($operador === '-') {
            // Resta
            if ($izq->tipo === 'int32' && $der->tipo === 'int32') {
                return new Valor('int32', $izq->valor - $der->valor);
            } elseif (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                      ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                return new Valor('float32', floatval($izq->valor) - floatval($der->valor));
            }
        }
        
        return new Valor('nil', null);
    }

    /**
     * Visita operaciones multiplicación/división/módulo
     */
    public function visitExprMulDiv($ctx) {
        $izq = $this->visit($ctx->expresion(0));
        $der = $this->visit($ctx->expresion(1));
        
        if ($izq->esNil() || $der->esNil()) {
            return new Valor('nil', null);
        }

        $operador = $ctx->getChild(1)->getText();
        
        if ($operador === '*') {
            if ($izq->tipo === 'int32' && $der->tipo === 'int32') {
                return new Valor('int32', $izq->valor * $der->valor);
            } elseif (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                      ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                return new Valor('float32', floatval($izq->valor) * floatval($der->valor));
            }
        } elseif ($operador === '/') {
            if ($der->valor == 0) {
                return new Valor('nil', null);
            }
            if ($izq->tipo === 'int32' && $der->tipo === 'int32') {
                return new Valor('int32', intval($izq->valor / $der->valor));
            } elseif (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                      ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                return new Valor('float32', floatval($izq->valor) / floatval($der->valor));
            }
        } elseif ($operador === '%') {
            if ($izq->tipo === 'int32' && $der->tipo === 'int32') {
                return new Valor('int32', $izq->valor % $der->valor);
            }
        }
        
        return new Valor('nil', null);
    }

    /**
     * Visita un identificador
     */
    public function visitExprId($ctx) {
        $nombre = $ctx->ID()->getText();
        $simbolo = $this->tablaSimbolos->buscar($nombre);
        
        if ($simbolo === null) {
            $this->manejadorErrores->agregarError(
                'Semántico',
                "Variable '$nombre' no declarada",
                $ctx->getStart()->getLine(),
                $ctx->getStart()->getCharPositionInLine()
            );
            return new Valor('nil', null);
        }
        
        // Devolver un objeto Valor construido a partir del símbolo
        return new Valor($simbolo->tipo, $simbolo->valor);
    }

    /**
     * Visita declaración de variable
     */
    public function visitStmtVar($ctx) {
        $varCtx = $ctx->declaracionVariable();
        $ids = $varCtx->ID();
        $tipo = $this->obtenerTipo($varCtx->tipo());
        
        $valores = [];
        if ($varCtx->listaExpresiones() !== null) {
            foreach ($varCtx->listaExpresiones()->expresion() as $expr) {
                $valores[] = $this->visit($expr);
            }
        }
        
        foreach ($ids as $i => $idNode) {
            $nombre = $idNode->getText();
            $valor = isset($valores[$i]) ? $valores[$i] : Valor::valorPorDefecto($tipo);
            
            $exito = $this->tablaSimbolos->insertar(
                $nombre,
                $tipo,
                $valor->valor,
                $idNode->getSymbol()->getLine(),
                $idNode->getSymbol()->getCharPositionInLine()
            );
            
            if (!$exito) {
                $this->manejadorErrores->agregarError(
                    'Semántico',
                    "Variable '$nombre' ya declarada en este ámbito",
                    $idNode->getSymbol()->getLine(),
                    $idNode->getSymbol()->getCharPositionInLine()
                );
            }
        }
        
        return null;
    }

    /**
     * Obtiene el tipo a partir de un contexto de tipo
     */
    private function obtenerTipo($typeCtx) {
        if ($typeCtx->TYPE_INT() !== null) return 'int32';
        if ($typeCtx->TYPE_FLOAT() !== null) return 'float32';
        if ($typeCtx->TYPE_BOOL() !== null) return 'bool';
        if ($typeCtx->TYPE_RUNE() !== null) return 'rune';
        if ($typeCtx->TYPE_STRING() !== null) return 'string';
        return 'unknown';
    }

    /**
     * Visita declaración corta (:=)
     */
    public function visitStmtShortDecl($ctx) {
        $shortDecl = $ctx->declaracionCorta();
        $ids = $shortDecl->ID();
        $valores = [];
        
        foreach ($shortDecl->listaExpresiones()->expresion() as $expr) {
            $valores[] = $this->visit($expr);
        }
        
        foreach ($ids as $i => $idNode) {
            $nombre = $idNode->getText();
            
            if (!isset($valores[$i])) {
                $this->manejadorErrores->agregarError(
                    'Semántico',
                    "Número de valores no coincide con número de variables",
                    $idNode->getSymbol()->getLine(),
                    $idNode->getSymbol()->getCharPositionInLine()
                );
                continue;
            }
            
            $valor = $valores[$i];
            $tipo = $valor->tipo;
            
            $exito = $this->tablaSimbolos->insertar(
                $nombre,
                $tipo,
                $valor->valor,
                $idNode->getSymbol()->getLine(),
                $idNode->getSymbol()->getCharPositionInLine()
            );
            
            if (!$exito) {
                $this->manejadorErrores->agregarError(
                    'Semántico',
                    "Variable '$nombre' ya declarada en este ámbito",
                    $idNode->getSymbol()->getLine(),
                    $idNode->getSymbol()->getCharPositionInLine()
                );
            }
        }
        
        return null;
    }

    /**
     * Visita asignación simple
     */
    public function visitAssignSimple($ctx) {
        // ctx ya es un AssignSimpleContext que extiende AsignacionContext
        return $this->visitAsignacion($ctx);
    }

    /**
     * Visita un asignacion context directamente
     */
    public function visitAsignacion($assignCtx) {
        // Verificar si es asignación simple usando el método ASSIGN()
        $classname = get_class($assignCtx);
        
        if (strpos($classname, 'AssignSimpleContext') !== false) {
            // Asignación simple
            $ids = $assignCtx->ID();
            $valores = [];
            
            foreach ($assignCtx->listaExpresiones()->expresion() as $expr) {
                $valores[] = $this->visit($expr);
            }
            
            foreach ($ids as $i => $idNode) {
                $nombre = $idNode->getText();
                
                if (!isset($valores[$i])) {
                    continue;
                }
                
                $exito = $this->tablaSimbolos->actualizar($nombre, $valores[$i]->valor);
                
                if (!$exito) {
                    $this->manejadorErrores->agregarError(
                        'Semántico',
                        "Variable '$nombre' no existe o es constante",
                        $idNode->getSymbol()->getLine(),
                        $idNode->getSymbol()->getCharPositionInLine()
                    );
                }
            }
        } else {
            // Asignación compuesta (AssignCompoundContext)
            $nombre = $assignCtx->ID()->getText();
            $simbolo = $this->tablaSimbolos->buscar($nombre);
            
            if ($simbolo === null) {
                $this->manejadorErrores->agregarError(
                    'Semántico',
                    "Variable '$nombre' no declarada",
                    $assignCtx->getStart()->getLine(),
                    $assignCtx->getStart()->getCharPositionInLine()
                );
                return null;
            }
            
            $valorActual = $simbolo->valor;
            $valorNuevo = $this->visit($assignCtx->expresion());
            
            // Determinar el operador
            $operador = null;
            if ($assignCtx->PLUS_ASSIGN() !== null) $operador = '+=';
            elseif ($assignCtx->MINUS_ASSIGN() !== null) $operador = '-=';
            elseif ($assignCtx->MUL_ASSIGN() !== null) $operador = '*=';
            elseif ($assignCtx->DIV_ASSIGN() !== null) $operador = '/=';
            elseif ($assignCtx->MOD_ASSIGN() !== null) $operador = '%=';
            
            $resultado = null;
            
            switch ($operador) {
                case '+=':
                    if ($valorActual->tipo === 'int32' && $valorNuevo->tipo === 'int32') {
                        $resultado = new Valor('int32', $valorActual->valor + $valorNuevo->valor);
                    } elseif (($valorActual->tipo === 'float32' || $valorActual->tipo === 'int32') && 
                              ($valorNuevo->tipo === 'float32' || $valorNuevo->tipo === 'int32')) {
                        $resultado = new Valor('float32', floatval($valorActual->valor) + floatval($valorNuevo->valor));
                    }
                    break;
                case '-=':
                    if ($valorActual->tipo === 'int32' && $valorNuevo->tipo === 'int32') {
                        $resultado = new Valor('int32', $valorActual->valor - $valorNuevo->valor);
                    }
                    break;
                case '*=':
                    if ($valorActual->tipo === 'int32' && $valorNuevo->tipo === 'int32') {
                        $resultado = new Valor('int32', $valorActual->valor * $valorNuevo->valor);
                    }
                    break;
                case '/=':
                    if ($valorNuevo->valor != 0 && $valorActual->tipo === 'int32' && $valorNuevo->tipo === 'int32') {
                        $resultado = new Valor('int32', intval($valorActual->valor / $valorNuevo->valor));
                    }
                    break;
                case '%=':
                    if ($valorActual->tipo === 'int32' && $valorNuevo->tipo === 'int32') {
                        $resultado = new Valor('int32', $valorActual->valor % $valorNuevo->valor);
                    }
                    break;
            }
            
            if ($resultado !== null) {
                $this->tablaSimbolos->actualizar($nombre, $resultado->valor);
            }
        }
        
        return null;
    }

    /**
     * Visita asignación compuesta
     */
    public function visitAssignCompound($ctx) {
        // ctx ya es un AssignCompoundContext que extiende AsignacionContext
        return $this->visitAsignacion($ctx);
    }

    /**
     * Visita declaración de constante
     */
    public function visitStmtConst($ctx) {
        $constDecl = $ctx->declaracionConstante();
        $nombre = $constDecl->ID()->getText();
        $tipo = $this->obtenerTipo($constDecl->tipo());
        $valor = $this->visit($constDecl->expresion());
        
        $exito = $this->tablaSimbolos->insertar(
            $nombre,
            $tipo,
            $valor->valor,
            $constDecl->ID()->getSymbol()->getLine(),
            $constDecl->ID()->getSymbol()->getCharPositionInLine(),
            true  // es constante
        );
        
        if (!$exito) {
            $this->manejadorErrores->agregarError(
                'Semántico',
                "Identificador '$nombre' ya declarado en este ámbito",
                $constDecl->ID()->getSymbol()->getLine(),
                $constDecl->ID()->getSymbol()->getCharPositionInLine()
            );
        }
        
        return null;
    }

    /**
     * Visita if/else
     */
    public function visitStmtIf($ctx) {
        $ifCtx = $ctx->sentenciaIf();
        $condicion = $this->visit($ifCtx->expresion());
        
        if ($condicion->tipo !== 'bool') {
            $this->manejadorErrores->agregarError(
                'Semántico',
                'La condición del if debe ser booleana',
                $ifCtx->expresion()->getStart()->getLine(),
                $ifCtx->expresion()->getStart()->getCharPositionInLine()
            );
            return null;
        }
        
        if ($condicion->valor === true) {
            $this->tablaSimbolos->entrarAmbito('if');
            $this->visit($ifCtx->bloque(0));
            $this->tablaSimbolos->salirAmbito();
            
            // Si hubo return, no ejecutar más
            if ($this->valorRetorno !== null) {
                return null;
            }
        } elseif ($ifCtx->KW_ELSE() !== null) {
            $this->tablaSimbolos->entrarAmbito('else');
            // Puede ser otro if o un bloque
            if ($ifCtx->sentenciaIf() !== null) {
                $this->visitStmtIf($ifCtx->sentenciaIf());
            } elseif (count($ifCtx->bloque()) > 1) {
                $this->visit($ifCtx->bloque(1));
            }
            $this->tablaSimbolos->salirAmbito();
        }
        
        return null;
    }

    /**
     * Visita for loop
     */
    public function visitStmtFor($ctx) {
        $forCtx = $ctx->sentenciaFor();
        $this->tablaSimbolos->entrarAmbito('for');
        
        // For con inicialización, condición y actualización
        if ($forCtx->declaracionVariable() !== null) {
            // for var i int32 = 0; i < 5; i++
            // Crear un statement context simulado
            $varDeclCtx = $forCtx->declaracionVariable();
            $ids = $varDeclCtx->ID();
            $tipo = $this->obtenerTipo($varDeclCtx->tipo());
            
            $valores = [];
            if ($varDeclCtx->listaExpresiones() !== null) {
                foreach ($varDeclCtx->listaExpresiones()->expresion() as $expr) {
                    $valores[] = $this->visit($expr);
                }
            }
            
            foreach ($ids as $i => $idNode) {
                $nombre = $idNode->getText();
                $valor = isset($valores[$i]) ? $valores[$i] : Valor::valorPorDefecto($tipo);
                $this->tablaSimbolos->insertar(
                    $nombre,
                    $tipo,
                    $valor->valor,
                    $idNode->getSymbol()->getLine(),
                    $idNode->getSymbol()->getCharPositionInLine()
                );
            }
            
            while (true) {
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                $condicion = $this->visit($forCtx->expresion());
                if ($condicion->tipo !== 'bool' || $condicion->valor === false) {
                    break;
                }
                
                $this->visit($forCtx->bloque());
                
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                if ($this->continue) {
                    $this->continue = false;
                }
                
                // Ejecutar el incremento
                $this->visitAsignacion($forCtx->asignacion());
            }
        } elseif ($forCtx->declaracionCorta() !== null) {
            // for i := 0; i < 5; i++
            $shortDeclCtx = $forCtx->declaracionCorta();
            $ids = $shortDeclCtx->ID();
            $valores = [];
            
            foreach ($shortDeclCtx->listaExpresiones()->expresion() as $expr) {
                $valores[] = $this->visit($expr);
            }
            
            foreach ($ids as $i => $idNode) {
                $nombre = $idNode->getText();
                if (isset($valores[$i])) {
                    $valor = $valores[$i];
                    $tipo = $valor->tipo;
                    $this->tablaSimbolos->insertar(
                        $nombre,
                        $tipo,
                        $valor->valor,
                        $idNode->getSymbol()->getLine(),
                        $idNode->getSymbol()->getCharPositionInLine()
                    );
                }
            }
            
            while (true) {
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                $condicion = $this->visit($forCtx->expresion());
                if ($condicion->tipo !== 'bool' || $condicion->valor === false) {
                    break;
                }
                
                $this->visit($forCtx->bloque());
                
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                if ($this->continue) {
                    $this->continue = false;
                }
                
                // Ejecutar el incremento
                $this->visitAsignacion($forCtx->asignacion());
            }
        } elseif ($forCtx->expresion() !== null) {
            // for x > 0 (while)
            while (true) {
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                $condicion = $this->visit($forCtx->expresion());
                if ($condicion->tipo !== 'bool' || $condicion->valor === false) {
                    break;
                }
                
                $this->visit($forCtx->bloque());
                
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                if ($this->continue) {
                    $this->continue = false;
                }
            }
        } else {
            // for {} (infinito)
            while (true) {
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                $this->visit($forCtx->bloque());
                
                if ($this->break) {
                    $this->break = false;
                    break;
                }
                
                if ($this->continue) {
                    $this->continue = false;
                }
                
                if ($this->valorRetorno !== null) {
                    break;
                }
            }
        }
        
        $this->tablaSimbolos->salirAmbito();
        return null;
    }

    /**
     * Visita break
     */
    public function visitStmtBreak($ctx) {
        $this->break = true;
        return null;
    }

    /**
     * Visita continue
     */
    public function visitStmtContinue($ctx) {
        $this->continue = true;
        return null;
    }

    /**
     * Visita return
     */
    public function visitStmtReturn($ctx) {
        $returnCtx = $ctx->sentenciaReturn();
        
        if ($returnCtx->listaExpresiones() !== null) {
            $valores = [];
            foreach ($returnCtx->listaExpresiones()->expresion() as $expr) {
                $valores[] = $this->visit($expr);
            }
            
            if (count($valores) === 1) {
                $this->valorRetorno = $valores[0];
            } else {
                $this->valorRetorno = new Valor('tuple', $valores);
            }
        } else {
            $this->valorRetorno = new Valor('nil', null);
        }
        
        return null;
    }

    /**
     * Visita operadores relacionales
     */
    public function visitExprRelational($ctx) {
        $izq = $this->visit($ctx->expresion(0));
        $der = $this->visit($ctx->expresion(1));
        
        if ($izq->esNil() || $der->esNil()) {
            return new Valor('nil', null);
        }
        
        $operador = $ctx->getChild(1)->getText();
        $resultado = false;
        
        switch ($operador) {
            case '<':
                if (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                    ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                    $resultado = floatval($izq->valor) < floatval($der->valor);
                } elseif ($izq->tipo === 'string' && $der->tipo === 'string') {
                    $resultado = $izq->valor < $der->valor;
                }
                break;
            case '>':
                if (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                    ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                    $resultado = floatval($izq->valor) > floatval($der->valor);
                } elseif ($izq->tipo === 'string' && $der->tipo === 'string') {
                    $resultado = $izq->valor > $der->valor;
                }
                break;
            case '<=':
                if (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                    ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                    $resultado = floatval($izq->valor) <= floatval($der->valor);
                } elseif ($izq->tipo === 'string' && $der->tipo === 'string') {
                    $resultado = $izq->valor <= $der->valor;
                }
                break;
            case '>=':
                if (($izq->tipo === 'int32' || $izq->tipo === 'float32') && 
                    ($der->tipo === 'int32' || $der->tipo === 'float32')) {
                    $resultado = floatval($izq->valor) >= floatval($der->valor);
                } elseif ($izq->tipo === 'string' && $der->tipo === 'string') {
                    $resultado = $izq->valor >= $der->valor;
                }
                break;
        }
        
        return new Valor('bool', $resultado);
    }

    /**
     * Visita operadores de igualdad
     */
    public function visitExprEquality($ctx) {
        $izq = $this->visit($ctx->expresion(0));
        $der = $this->visit($ctx->expresion(1));
        
        $operador = $ctx->getChild(1)->getText();
        $resultado = false;
        
        if ($operador === '==') {
            if ($izq->tipo === $der->tipo) {
                $resultado = $izq->valor == $der->valor;
            }
        } elseif ($operador === '!=') {
            if ($izq->tipo === $der->tipo) {
                $resultado = $izq->valor != $der->valor;
            } else {
                $resultado = true;
            }
        }
        
        return new Valor('bool', $resultado);
    }

    /**
     * Visita operador AND con cortocircuito
     */
    public function visitExprAnd($ctx) {
        $izq = $this->visit($ctx->expresion(0));
        
        if ($izq->tipo !== 'bool') {
            return new Valor('nil', null);
        }
        
        // Cortocircuito: si izq es false, no evaluar der
        if ($izq->valor === false) {
            return new Valor('bool', false);
        }
        
        $der = $this->visit($ctx->expresion(1));
        
        if ($der->tipo !== 'bool') {
            return new Valor('nil', null);
        }
        
        return new Valor('bool', $izq->valor && $der->valor);
    }

    /**
     * Visita operador OR con cortocircuito
     */
    public function visitExprOr($ctx) {
        $izq = $this->visit($ctx->expresion(0));
        
        if ($izq->tipo !== 'bool') {
            return new Valor('nil', null);
        }
        
        // Cortocircuito: si izq es true, no evaluar der
        if ($izq->valor === true) {
            return new Valor('bool', true);
        }
        
        $der = $this->visit($ctx->expresion(1));
        
        if ($der->tipo !== 'bool') {
            return new Valor('nil', null);
        }
        
        return new Valor('bool', $izq->valor || $der->valor);
    }

    /**
     * Visita operador NOT
     */
    public function visitExprNot($ctx) {
        $expr = $this->visit($ctx->expresion());
        
        if ($expr->tipo !== 'bool') {
            return new Valor('nil', null);
        }
        
        return new Valor('bool', !$expr->valor);
    }

    /**
     * Visita negación unaria
     */
    public function visitExprNegate($ctx) {
        $expr = $this->visit($ctx->expresion());
        
        if ($expr->tipo === 'int32') {
            return new Valor('int32', -$expr->valor);
        } elseif ($expr->tipo === 'float32') {
            return new Valor('float32', -$expr->valor);
        }
        
        return new Valor('nil', null);
    }

    /**
     * Visita expresión entre paréntesis
     */
    public function visitExprParenthesis($ctx) {
        return $this->visit($ctx->expresion());
    }

    /**
     * Visita llamada a función
     */
    public function visitExprCall($ctx) {
        // Obtener el nombre de la función
        $exprFunc = $ctx->expresion();
        $className = get_class($exprFunc);
        
        // Verificar si la expresión es un ID
        $nombreFuncion = null;
        if (strpos($className, 'ExprIdContext') !== false) {
            $nombreFuncion = $exprFunc->ID()->getText();
        } else {
            // Intentar evaluar la expresión y ver si es una función
            $this->manejadorErrores->agregarError(
                'Semántico',
                "Se esperaba un identificador de función, se recibió: $className",
                $ctx->getStart()->getLine(),
                $ctx->getStart()->getCharPositionInLine()
            );
            return new Valor('nil', null);
        }
        
        // Verificar que la función existe
        if (!isset($this->funciones[$nombreFuncion])) {
            $this->manejadorErrores->agregarError(
                'Semántico',
                "La función '$nombreFuncion' no está definida",
                $ctx->getStart()->getLine(),
                $ctx->getStart()->getCharPositionInLine()
            );
            return new Valor('nil', null);
        }
        
        // Evaluar argumentos
        $argumentos = [];
        if ($ctx->listaExpresiones() !== null) {
            foreach ($ctx->listaExpresiones()->expresion() as $expr) {
                $argumentos[] = $this->visit($expr);
            }
        }
        
        // Ejecutar la función
        return $this->ejecutarFuncion($nombreFuncion, $argumentos);
    }

    /**
     * Visita sentencia vacía
     */
    public function visitStmtEmpty($ctx) {
        return null;
    }

    /**
     * Visita bloque - sobrescribe comportamiento por defecto para manejar return correctamente
     */
    public function visitBloque($ctx) {
        // Visitar cada sentencia dentro del bloque
        if ($ctx->sentencia() !== null) {
            foreach ($ctx->sentencia() as $stmt) {
                $this->visit($stmt);
                
                // Si  se ejecutó un return, break o continue, detener la ejecución del bloque
                if ($this->valorRetorno !== null || $this->break || $this->continue) {
                    break;
                }
            }
        }
        
        return null;
    }
}
