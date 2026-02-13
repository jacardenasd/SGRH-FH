<?php
/**
 * Script de verificación rápida del sistema OCR completo
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "\n";
echo "========================================\n";
echo " VERIFICACIÓN SISTEMA OCR COMPLETO\n";
echo "========================================\n\n";

// 1. Verificar Imagick
echo "1. PHP Imagick: ";
if (extension_loaded('imagick')) {
    echo "✓ INSTALADO\n";
    $version = Imagick::getVersion();
    echo "   Versión: " . $version['versionString'] . "\n";
} else {
    echo "✗ NO INSTALADO\n";
    exit(1);
}

echo "\n";

// 2. Verificar Ghostscript
echo "2. Ghostscript: ";
$posibles_rutas = [
    'C:\\Program Files\\gs\\gs10.06.0\\bin\\gswin64c.exe',
    'C:\\Program Files\\gs\\gs10.02.1\\bin\\gswin64c.exe',
    'C:\\Program Files\\gs\\gs10.02.0\\bin\\gswin64c.exe',
    'C:\\Program Files\\gs\\gs10.01.2\\bin\\gswin64c.exe',
    'C:\\Program Files\\gs\\gs9.56.1\\bin\\gswin64c.exe',
];

$gs_path = false;
foreach ($posibles_rutas as $ruta) {
    if (file_exists($ruta)) {
        $gs_path = $ruta;
        break;
    }
}

if ($gs_path) {
    echo "✓ ENCONTRADO\n";
    echo "   Ruta: $gs_path\n";
    
    // Verificar versión
    exec("\"$gs_path\" --version", $output, $return_code);
    if ($return_code === 0 && !empty($output)) {
        echo "   Versión: " . $output[0] . "\n";
    }
} else {
    echo "✗ NO ENCONTRADO\n";
    exit(1);
}

echo "\n";

// 3. Verificar Tesseract
echo "3. Tesseract OCR: ";
$tesseract_path = 'C:\\Program Files\\Tesseract-OCR\\tesseract.exe';
if (file_exists($tesseract_path)) {
    echo "✓ INSTALADO\n";
    echo "   Ruta: $tesseract_path\n";
    
    // Verificar versión
    exec("\"$tesseract_path\" --version 2>&1", $output, $return_code);
    if (!empty($output)) {
        echo "   Versión: " . trim($output[0]) . "\n";
    }
} else {
    echo "✗ NO ENCONTRADO\n";
    exit(1);
}

echo "\n";

// 4. VerificarBase de Datos
echo "4. Base de Datos: ";
try {
    require_once __DIR__ . '/includes/db_connect.php';
    
    // Verificar reactivos
    $stmt = $pdo->query("SELECT COUNT(*) FROM clima_reactivos WHERE activo = 1");
    $count_reactivos = $stmt->fetchColumn();
    
    echo "✓ CONECTADA\n";
    echo "   Reactivos activos: $count_reactivos\n";
    
    if ($count_reactivos == 0) {
        echo "   ⚠ ADVERTENCIA: No hay reactivos en la BD\n";
        echo "   El sistema generará reactivos genéricos automáticamente\n";
    }
} catch (Exception $e) {
    echo "✗ ERROR: " . $e->getMessage() . "\n";
}

echo "\n";
echo "========================================\n";
echo " SISTEMA LISTO PARA PROCESAR PDFs\n";
echo "========================================\n\n";

echo "Siguiente paso:\n";
echo "1. Ve a: http://localhost:8888/sgrh/public/clima_captura_ia.php\n";
echo "2. Arrastra tu archivo PDF\n";
echo "3. El sistema lo procesará automáticamente\n\n";

echo "Si hay problemas, revisa los logs en:\n";
echo "C:\\MAMP\\logs\\php_error.log\n\n";
?>
