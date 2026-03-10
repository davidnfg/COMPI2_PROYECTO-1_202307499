<?php

/**
 * Clase para gestionar y reportar errores léxicos, sintácticos y semánticos
 */
class ManejadorErrores {
    private $errores = [];
    
    /**
     * Agrega un error al reporte
     */
    public function agregarError($tipo, $descripcion, $linea, $columna) {
        $this->errores[] = [
            'tipo' => $tipo,           // 'Léxico', 'Sintáctico', 'Semántico'
            'descripcion' => $descripcion,
            'linea' => $linea,
            'columna' => $columna
        ];
    }

    /**
     * Retorna todos los errores registrados
     */
    public function obtenerErrores() {
        return $this->errores;
    }

    /**
     * Verifica si hay errores
     */
    public function hayErrores() {
        return count($this->errores) > 0;
    }

    /**
     * Genera el reporte de errores en formato tabla HTML
     */
    public function generarReporteHTML() {
        if (count($this->errores) === 0) {
            return '<p>No se encontraron errores.</p>';
        }

        $html = '<table border="1" cellpadding="5" cellspacing="0">';
        $html .= '<thead><tr>';
        $html .= '<th>#</th>';
        $html .= '<th>Tipo</th>';
        $html .= '<th>Descripción</th>';
        $html .= '<th>Línea</th>';
        $html .= '<th>Columna</th>';
        $html .= '</tr></thead><tbody>';

        foreach ($this->errores as $i => $error) {
            $html .= '<tr>';
            $html .= '<td>' . ($i + 1) . '</td>';
            $html .= '<td>' . htmlspecialchars($error['tipo']) . '</td>';
            $html .= '<td>' . htmlspecialchars($error['descripcion']) . '</td>';
            $html .= '<td>' . $error['linea'] . '</td>';
            $html .= '<td>' . $error['columna'] . '</td>';
            $html .= '</tr>';
        }

        $html .= '</tbody></table>';
        return $html;
    }

    /**
     * Genera el reporte de errores en formato texto plano
     */
    public function generarReporteTexto() {
        if (count($this->errores) === 0) {
            return 'No se encontraron errores.';
        }

        $texto = sprintf("%-5s %-15s %-50s %-8s %-8s\n", '#', 'Tipo', 'Descripción', 'Línea', 'Columna');
        $texto .= str_repeat('-', 90) . "\n";

        foreach ($this->errores as $i => $error) {
            $texto .= sprintf(
                "%-5d %-15s %-50s %-8d %-8d\n",
                $i + 1,
                $error['tipo'],
                $error['descripcion'],
                $error['linea'],
                $error['columna']
            );
        }

        return $texto;
    }

    /**
     * Limpia todos los errores
     */
    public function limpiar() {
        $this->errores = [];
    }
}
