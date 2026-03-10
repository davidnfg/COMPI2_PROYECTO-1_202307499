<?php

require_once 'Valor.php';

/**
 * Clase que representa un símbolo en la tabla
 */
class Simbolo {
    public $identificador;
    public $tipo;
    public $valor;
    public $ambito;
    public $linea;
    public $columna;
    public $esConstante;
    public $esFuncion;
    public $parametros;     // Para funciones
    public $tipoRetorno;    // Para funciones

    public function __construct($identificador, $tipo, $valor, $ambito, $linea, $columna, $esConstante = false) {
        $this->identificador = $identificador;
        $this->tipo = $tipo;
        $this->valor = $valor;
        $this->ambito = $ambito;
        $this->linea = $linea;
        $this->columna = $columna;
        $this->esConstante = $esConstante;
        $this->esFuncion = false;
    }
}

/**
 * Clase que maneja la tabla de símbolos con soporte para ámbitos anidados
 */
class TablaSimbolos {
    private $tablas = [];           // Stack de tablas (cada una es un ámbito)
    private $ambitoActual = 'global';
    private $contadorAmbitos = 0;
    private $todosLosSimbolos = []; // Para el reporte final

    public function __construct() {
        // Crear el ámbito global
        $this->tablas[] = [];
    }

    /**
     * Entra a un nuevo ámbito
     */
    public function entrarAmbito($nombreAmbito = null) {
        $this->tablas[] = [];
        $this->contadorAmbitos++;
        
        if ($nombreAmbito === null) {
            $this->ambitoActual = 'bloque_' . $this->contadorAmbitos;
        } else {
            $this->ambitoActual = $nombreAmbito;
        }
    }

    /**
     * Sale del ámbito actual
     */
    public function salirAmbito() {
        if (count($this->tablas) > 1) {
            array_pop($this->tablas);
            $this->ambitoActual = count($this->tablas) > 1 ? 'bloque_' . (count($this->tablas) - 1) : 'global';
        }
    }

    /**
     * Inserta un símbolo en el ámbito actual
     */
    public function insertar($identificador, $tipo, $valor, $linea, $columna, $esConstante = false) {
        // Verificar si ya existe en el ámbito actual
        $tablaActual = &$this->tablas[count($this->tablas) - 1];
        
        if (isset($tablaActual[$identificador])) {
            return false; // Ya existe
        }

        $simbolo = new Simbolo($identificador, $tipo, $valor, $this->ambitoActual, $linea, $columna, $esConstante);
        $tablaActual[$identificador] = $simbolo;
        $this->todosLosSimbolos[] = $simbolo;
        
        return true;
    }

    /**
     * Inserta una función
     */
    public function insertarFuncion($identificador, $parametros, $tipoRetorno, $linea, $columna) {
        $simbolo = new Simbolo($identificador, 'function', null, 'global', $linea, $columna);
        $simbolo->esFuncion = true;
        $simbolo->parametros = $parametros;
        $simbolo->tipoRetorno = $tipoRetorno;
        
        $this->tablas[0][$identificador] = $simbolo;
        $this->todosLosSimbolos[] = $simbolo;
        
        return true;
    }

    /**
     * Busca un símbolo en todos los ámbitos (del actual hacia arriba)
     */
    public function buscar($identificador) {
        // Buscar desde el ámbito actual hacia arriba
        for ($i = count($this->tablas) - 1; $i >= 0; $i--) {
            if (isset($this->tablas[$i][$identificador])) {
                return $this->tablas[$i][$identificador];
            }
        }
        return null;
    }

    /**
     * Actualiza el valor de un símbolo existente
     */
    public function actualizar($identificador, $nuevoValor) {
        // Buscar desde el ámbito actual hacia arriba
        for ($i = count($this->tablas) - 1; $i >= 0; $i--) {
            if (isset($this->tablas[$i][$identificador])) {
                $simbolo = $this->tablas[$i][$identificador];
                
                if ($simbolo->esConstante) {
                    return false; // No se puede modificar una constante
                }
                
                $simbolo->valor = $nuevoValor;
                return true;
            }
        }
        return false; // No existe
    }

    /**
     * Genera el reporte de tabla de símbolos en HTML
     */
    public function generarReporteHTML() {
        if (count($this->todosLosSimbolos) === 0) {
            return '<p>No hay símbolos registrados.</p>';
        }

        $html = '<table border="1" cellpadding="5" cellspacing="0">';
        $html .= '<thead><tr>';
        $html .= '<th>Identificador</th>';
        $html .= '<th>Tipo</th>';
        $html .= '<th>Ámbito</th>';
        $html .= '<th>Valor</th>';
        $html .= '<th>Línea</th>';
        $html .= '<th>Columna</th>';
        $html .= '</tr></thead><tbody>';

        foreach ($this->todosLosSimbolos as $simbolo) {
            $html .= '<tr>';
            $html .= '<td>' . htmlspecialchars($simbolo->identificador) . '</td>';
            $html .= '<td>' . htmlspecialchars($simbolo->tipo) . '</td>';
            $html .= '<td>' . htmlspecialchars($simbolo->ambito) . '</td>';
            
            if ($simbolo->esFuncion) {
                $html .= '<td>—</td>';
            } else {
                $valorStr = $simbolo->valor instanceof Valor ? $simbolo->valor->toString() : (string)$simbolo->valor;
                $html .= '<td>' . htmlspecialchars($valorStr) . '</td>';
            }
            
            $html .= '<td>' . $simbolo->linea . '</td>';
            $html .= '<td>' . $simbolo->columna . '</td>';
            $html .= '</tr>';
        }

        $html .= '</tbody></table>';
        return $html;
    }

    /**
     * Genera el reporte de tabla de símbolos en texto plano
     */
    public function generarReporteTexto() {
        if (count($this->todosLosSimbolos) === 0) {
            return 'No hay símbolos registrados.';
        }

        $texto = sprintf("%-20s %-15s %-15s %-20s %-8s %-8s\n", 
            'Identificador', 'Tipo', 'Ámbito', 'Valor', 'Línea', 'Columna');
        $texto .= str_repeat('-', 100) . "\n";

        foreach ($this->todosLosSimbolos as $simbolo) {
            $valorStr = '—';
            if (!$simbolo->esFuncion) {
                $valorStr = $simbolo->valor instanceof Valor ? $simbolo->valor->toString() : (string)$simbolo->valor;
                $valorStr = substr($valorStr, 0, 20); // Limitar longitud
            }

            $texto .= sprintf(
                "%-20s %-15s %-15s %-20s %-8d %-8d\n",
                $simbolo->identificador,
                $simbolo->tipo,
                $simbolo->ambito,
                $valorStr,
                $simbolo->linea,
                $simbolo->columna
            );
        }

        return $texto;
    }

    /**
     * Obtiene el ámbito actual
     */
    public function obtenerAmbitoActual() {
        return $this->ambitoActual;
    }
}
