<?php

require_once 'vendor/autoload.php';
require_once 'GramaticaLexer.php';
require_once 'GramaticaParser.php';
require_once 'Interprete.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

if ($argc < 2) {
    echo "Uso: php ejecutar.php <archivo.golampi>\n";
    exit(1);
}

$archivo = $argv[1];

if (!file_exists($archivo)) {
    echo "Error: El archivo '$archivo' no existe\n";
    exit(1);
}

$codigo = file_get_contents($archivo);

try {
    // Crear el input stream
    $input = InputStream::fromString($codigo);
    
    // Crear el lexer
    $lexer = new GramaticaLexer($input);
    
    // Crear el stream de tokens
    $tokens = new CommonTokenStream($lexer);
    
    // Crear el parser
    $parser = new GramaticaParser($tokens);
    
    // Deshabilitar mensajes de error por defecto
    $parser->removeErrorListeners();
    
    // Parsear el código
    $tree = $parser->inicio();
    
    // Crear el intérprete
    $interprete = new Interprete();
    
    // Ejecutar el intérprete
    $interprete->visit($tree);
    
    // Obtener resultados
    $salida = $interprete->obtenerSalida();
    $manejadorErrores = $interprete->obtenerManejadorErrores();
    $tablaSimbolos = $interprete->obtenerTablaSimbolos();
    
    // Mostrar salida
    echo "=== SALIDA DEL PROGRAMA ===\n";
    echo $salida;
    echo "\n";
    
    // Mostrar errores si hay
    if ($manejadorErrores->hayErrores()) {
        echo "\n=== ERRORES ===\n";
        echo $manejadorErrores->generarReporteTexto();
        echo "\n";
    }
    
    // Mostrar tabla de símbolos
    echo "\n=== TABLA DE SÍMBOLOS ===\n";
    echo $tablaSimbolos->generarReporteTexto();
    echo "\n";
    
} catch (Exception $e) {
    echo "Error fatal: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
    exit(1);
}
