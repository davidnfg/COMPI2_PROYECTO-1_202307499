# Manual Tecnico - Interprete Golampi

## 1. Descripcion General

Este proyecto implementa un interprete del lenguaje Golampi usando:

- PHP 8.x como runtime principal.
- ANTLR4 para analisis lexico y sintactico.
- Patron Visitor para la ejecucion semantica.
- Interfaz web (frontend + backend PHP) para ejecutar codigo desde navegador.

El sistema permite ejecutar programas Golampi con soporte de funciones, estructuras de control, arreglos, funciones embebidas, punteros por referencia y reporte de errores/simbolos.

---

## 2. Arquitectura del Proyecto

Estructura principal:

- `Gramatica.g4`: definicion formal del lenguaje (parser + lexer).
- `GramaticaLexer.php`, `GramaticaParser.php`, `GramaticaBaseVisitor.php`: codigo generado por ANTLR.
- `Interprete.php`: ejecucion semantica (Visitor principal).
- `Valor.php`: representacion tipada de valores en tiempo de ejecucion.
- `TablaSimbolos.php`: gestion de simbolos y ambitos.
- `ManejadorErrores.php`: registro y reporte de errores.
- `ejecutar.php`: entrada por linea de comandos (CLI).
- `index.php`: backend AJAX + frontend web integrado.
- `start.sh`: script para levantar servidor web local.
- `pruebas/*.golampi`: set de programas de validacion funcional.

### 2.1 Flujo de Ejecucion

1. Se recibe codigo fuente (`index.php` o `ejecutar.php`).
2. ANTLR tokeniza con `GramaticaLexer`.
3. ANTLR parsea con `GramaticaParser` iniciando en regla `inicio`.
4. `Interprete` visita el arbol y ejecuta:
	 - hoisting de funciones,
	 - declaracion/actualizacion de simbolos,
	 - evaluacion de expresiones,
	 - control de flujo,
	 - built-ins.
5. Se generan reportes de salida, errores y tabla de simbolos.

---

## 3. Componentes Tecnicos

## 3.1 Interprete (`Interprete.php`)

Clase central del runtime. Extiende `GramaticaBaseVisitor`.

Responsabilidades:

- Ejecutar programa principal (`visitInicio`).
- Hoisting de funciones (`recolectarFuncion`).
- Llamadas a funciones de usuario y embebidas (`visitExprCall`, `ejecutarFuncion`, `ejecutarBuiltin`).
- Manejo de ambitos, `return`, `break`, `continue`.
- Soporte de:
	- declaraciones (`var`, `const`, `:=`),
	- asignaciones simples/compuestas (`=`, `+=`, `-=`, `*=`, `/=`, `%=`, `++`, `--`),
	- condicionales (`if`, `else if`, `else`),
	- ciclos (`for` clasico, condicional, infinito),
	- `switch/case/default`,
	- arreglos 1D y multidimensionales,
	- punteros por referencia (`&id` como argumento para parametros `*tipo`),
	- multiples valores de retorno (tuplas internas),
	- `fmt.Println` y `fmt.Print`.

Funciones embebidas implementadas:

- `len(x)`: longitud de arreglo o string.
- `now()`: fecha/hora actual en formato `Y-m-d H:i:s`.
- `substr(s, inicio, longitud)`: subcadena.
- `typeOf(x)`: tipo interno Golampi.

## 3.2 Valor (`Valor.php`)

Encapsula:

- `tipo`
- `valor`
- `linea` y `columna` (contexto de error)

Incluye conversion a string para impresion (`toString`) y valores por defecto (`valorPorDefecto`).

## 3.3 Tabla de Simbolos (`TablaSimbolos.php`)

Implementa stack de ambitos.

Operaciones clave:

- `entrarAmbito`, `salirAmbito`
- `insertar`, `buscar`, `actualizar`
- `insertarFuncion`
- reportes:
	- `generarReporteHTML`
	- `generarReporteTexto`

## 3.4 Manejador de Errores (`ManejadorErrores.php`)

Registro centralizado de errores:

- lexico,
- sintactico,
- semantico.

Reportes disponibles en HTML y texto plano.

---

## 4. Gramatica y Lenguaje

Archivo: `Gramatica.g4`

Regla inicial:

- `inicio : declaracionNivelSuperior* EOF`

Caracteristicas relevantes de gramatica:

- Declaracion de funciones con parametros y uno/multiples retornos.
- Declaraciones globales: variables, constantes, structs.
- Bloques y sentencias tipicas de Golampi.
- Asignaciones:
	- simple,
	- compuesta,
	- incremento/decremento (`++`, `--`),
	- asignacion de arreglo,
	- asignacion de struct,
	- asignacion por puntero (`*id = expr`) definida en gramatica.
- Expresiones:
	- aritmeticas, relacionales, logicas,
	- llamadas,
	- acceso a arreglo y struct,
	- literales de arreglo (`[N]tipo{...}`),
	- literales anidados para matrices (`{...}`),
	- direccion (`&id`) y dereferencia (`*expr`),
	- `nil`.
- `listaExpresiones` admite coma final para literales multilinea.

Tipos base soportados:

- `int32`
- `float32`
- `bool`
- `rune`
- `string`
- arreglos `[N]tipo`
- punteros `*tipo`

---

## 5. Frontend y Backend Web

Archivo unico: `index.php`.

## 5.1 Backend (API AJAX)

Cuando recibe `POST` con campo `codigo`:

1. Parsea y ejecuta el codigo.
2. Devuelve JSON con:
	 - `exito`
	 - `salida`
	 - `reporteErrores`
	 - `reporteSimbolos`

## 5.2 Frontend

Interfaz integrada con:

- editor con numeracion de lineas,
- botones: Nuevo, Cargar, Guardar, Ejecutar, Limpiar,
- pestañas de salida:
	- Consola,
	- Errores,
	- Tabla de Simbolos,
- descarga de reportes,
- indicador de estado y tiempo de ejecucion,
- diseno responsive.

Atajos:

- `Ctrl + Enter` para ejecutar.
- `Tab` inserta espacios en editor.

---

## 6. Ejecucion del Proyecto

## 6.1 Requisitos

- PHP 8.x
- Composer
- Java + ANTLR4 CLI (para regenerar parser)

Instalacion de dependencias:

```bash
composer install
```

## 6.2 Ejecucion CLI

```bash
php ejecutar.php pruebas/basicos.golampi
```

Salida esperada:

- bloque de salida del programa,
- reporte de errores (si existen),
- tabla de simbolos.

## 6.3 Ejecucion Web

Opcion recomendada:

```bash
./start.sh
```

Esto:

- libera puerto 8080,
- levanta `php -S localhost:8080`,
- abre navegador automaticamente.

URL:

- `http://localhost:8080`

---

## 7. Regeneracion del Parser

Cuando se modifica `Gramatica.g4`, regenerar:

```bash
antlr4 -Dlanguage=PHP -visitor Gramatica.g4
```

Archivos actualizados:

- lexer,
- parser,
- visitor/listener base,
- tokens/interp.

---

## 8. Pruebas Funcionales

Casos de prueba incluidos (`pruebas/`):

- `basicos.golampi`
- `intermedio.golampi`
- `embebidas.golampi`
- `arreglos.golampi`
- `funciones.golampi`

Cobertura verificada:

- tipos primitivos y operaciones,
- control de flujo,
- funciones (incluyendo recursion y multiples retornos),
- arreglos y matrices,
- built-ins,
- referencia por puntero en llamadas.

---

## 9. Decisiones de Implementacion

- Hoisting real: funciones se recolectan en una primera pasada.
- Multiples retornos: se modelan como `Valor('tuple', [...])`.
- Arreglos: almacenados como arrays nativos de PHP y tipo logico `array` en runtime.
- Punteros en parametros: se manejan como referencia semantica (`&id`) con write-back al finalizar la funcion.
- `fmt.Println` y `fmt.Print`: implementados por deteccion de `fmt.<metodo>` en llamada de expresion estructurada.

---

## 10. Limitaciones Actuales

- El soporte de punteros esta orientado al modelo requerido por el proyecto (paso por referencia), no a todo el modelo completo de Go.
- Aunque la gramatica incluye declaracion/asignacion de structs, su semantica puede requerir ampliaciones segun nuevas pruebas.
- No hay pipeline automatizado de CI dentro del repositorio para correr todas las pruebas en lote.

---

## 11. Recomendaciones de Mantenimiento

- Mantener sincronizado `Gramatica.g4` con los metodos `visit*` en `Interprete.php`.
- Tras cambios semanticos, ejecutar al menos los 5 archivos de `pruebas/`.
- Evitar cambios directos en archivos generados por ANTLR; siempre regenerarlos.
- Documentar nuevos built-ins en esta guia para mantener trazabilidad tecnica.

---

## 12. Comandos Rapidos

```bash
# Dependencias
composer install

# Regenerar parser/visitor
antlr4 -Dlanguage=PHP -visitor Gramatica.g4

# Ejecutar prueba individual
php ejecutar.php pruebas/funciones.golampi

# Levantar version web
./start.sh
```
