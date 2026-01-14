<?php
// Carga helpers de contratos (PDF) basados en Dompdf
require_once __DIR__ . '/contratos/pdf_generator.php';

// Función auxiliar: convierte número a letra (para salario en contratos)
function contrato_numero_a_letra($num) {
    $entero = (int)floor($num);
    $decimal = round(($num - $entero) * 100);
    
    $unidades = array('', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve');
    $decenas = array('', 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa');
    $centenas = array('', 'ciento', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos');
    $escalas = array(1000000000 => 'mil millones', 1000000 => 'millones', 1000 => 'mil', 100 => 'cientos');
    
    if ($entero == 0) {
        return 'cero pesos';
    }
    
    $resultado = '';
    foreach ($escalas as $escala => $nombre) {
        if ($entero >= $escala) {
            $cociente = (int)($entero / $escala);
            if ($escala == 100) {
                $resultado .= $centenas[$cociente] . ' ';
            } else {
                if ($cociente < 10) {
                    $resultado .= $unidades[$cociente] . ' ';
                } elseif ($cociente < 20) {
                    $especiales = array('diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve');
                    $resultado .= $especiales[$cociente - 10] . ' ';
                } else {
                    $dec = (int)($cociente / 10);
                    $uni = $cociente % 10;
                    $resultado .= $decenas[$dec] . ($uni > 0 ? ' y ' . $unidades[$uni] : '') . ' ';
                }
                $resultado .= $nombre . ' ';
            }
            $entero = $entero % $escala;
        }
    }
    
    if ($entero >= 100) {
        $resultado .= $centenas[(int)($entero / 100)] . ' ';
        $entero = $entero % 100;
    }
    if ($entero >= 20) {
        $resultado .= $decenas[(int)($entero / 10)] . ($entero % 10 > 0 ? ' y ' . $unidades[$entero % 10] : '') . ' ';
    } elseif ($entero > 0) {
        $resultado .= $unidades[$entero] . ' ';
    }
    
    $resultado = trim($resultado) . ' pesos ';
    if ($decimal > 0) {
        $resultado .= 'con ' . $decimal . ' centavos';
    }
    
    return $resultado;
}

