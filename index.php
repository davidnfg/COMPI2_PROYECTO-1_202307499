<?php

require_once 'vendor/autoload.php';
require_once 'GramaticaLexer.php';
require_once 'GramaticaParser.php';
require_once 'Interprete.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

/**
 * Punto de entrada principal del intérprete
 */

// Código de prueba por defecto
$codigoPrueba = '
func main() {
    println("Hola Golampi")
    var x int32 = 10
    var y int32 = 20
    println("La suma es:", x + y)
}
';

// Si se recibe código por POST
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $entrada = $_POST['codigo'] ?? '';
} else {
    $entrada = $codigoPrueba;
}

try {
    // Crear el input stream
    $input = InputStream::fromString($entrada);
    
    // Crear el lexer
    $lexer = new GramaticaLexer($input);
    
    // Crear el stream de tokens
    $tokens = new CommonTokenStream($lexer);
    
    // Crear el parser
    $parser = new GramaticaParser($tokens);
    
    // Deshabilitar mensajes de error por defecto (los manejaremos nosotros)
    $parser->removeErrorListeners();
    
    // Parsear el código (obtener el árbol sintáctico)
    $tree = $parser->inicio();
    
    // Crear el intérprete
    $interprete = new Interprete();
    
    // Ejecutar el intérprete
    $interprete->visit($tree);
    
    // Obtener resultados
    $salida = $interprete->obtenerSalida();
    $manejadorErrores = $interprete->obtenerManejadorErrores();
    $tablaSimbolos = $interprete->obtenerTablaSimbolos();
    
    // Generar respuesta
    $respuesta = [
        'exito' => !$manejadorErrores->hayErrores(),
        'salida' => $salida,
        'errores' => $manejadorErrores->obtenerErrores(),
        'reporteErrores' => $manejadorErrores->generarReporteHTML(),
        'reporteSimbolos' => $tablaSimbolos->generarReporteHTML()
    ];
    
    // Si es petición AJAX, devolver JSON
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($respuesta);
        exit;
    }
    
    // Si no, mostrar resultado simple
    echo "<h2>Salida del programa:</h2>";
    echo "<pre>" . htmlspecialchars($salida) . "</pre>";
    
    echo "<h2>Errores:</h2>";
    echo $manejadorErrores->generarReporteHTML();
    
    echo "<h2>Tabla de Símbolos:</h2>";
    echo $tablaSimbolos->generarReporteHTML();
    
} catch (Exception $e) {
    $respuesta = [
        'exito' => false,
        'salida' => '',
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ];
    
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($respuesta);
    } else {
        echo "<h2>Error:</h2>";
        echo "<pre>" . htmlspecialchars($e->getMessage()) . "</pre>";
        echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    }
}
