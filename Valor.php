<?php

/**
 * Clase que representa un valor en el intérprete
 * Encapsula el tipo y el valor de una variable/expresión
 */
class Valor {
    public $tipo;      // 'int32', 'float32', 'bool', 'rune', 'string', 'array', 'nil', 'function'
    public $valor;     // El valor real
    public $linea;     // Para reportes de error
    public $columna;   // Para reportes de error

    public function __construct($tipo, $valor, $linea = 0, $columna = 0) {
        $this->tipo = $tipo;
        $this->valor = $valor;
        $this->linea = $linea;
        $this->columna = $columna;
    }

    /**
     * Retorna el valor por defecto para un tipo dado
     */
    public static function valorPorDefecto($tipo) {
        switch($tipo) {
            case 'int32':
            case 'rune':
                return new Valor($tipo, 0);
            case 'float32':
                return new Valor($tipo, 0.0);
            case 'bool':
                return new Valor($tipo, false);
            case 'string':
                return new Valor($tipo, '');
            default:
                return new Valor('nil', null);
        }
    }

    /**
     * Verifica si este valor es nil
     */
    public function esNil() {
        return $this->tipo === 'nil' || $this->valor === null;
    }

    /**
     * Convierte el valor a string para impresión
     */
    public function toString() {
        if ($this->esNil()) {
            return 'nil';
        }
        
        if ($this->tipo === 'bool') {
            return $this->valor ? 'true' : 'false';
        }
        
        if ($this->tipo === 'rune') {
            return "'" . $this->valor . "'";
        }
        
        if ($this->tipo === 'string') {
            return $this->valor;
        }
        
        if ($this->tipo === 'array') {
            return json_encode($this->valor);
        }
        
        return (string)$this->valor;
    }
}
