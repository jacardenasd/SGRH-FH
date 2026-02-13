#!/usr/bin/env php
<?php
/**
 * Script CLI para verificar y probar conversión de PDF a imagen
 * Uso: php test_pdf_conversion.php ruta/al/archivo.pdf
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "\n";
echo "========================================\n";
echo " TEST DE CONVERSION PDF → IMAGEN\n";
echo "========================================\n";
echo "\n";

// Verificar argumentos
if ($argc < 2) {
    echo "❌ ERROR: Debes proporcionar la ruta al PDF\n";
    echo "\nUso: php test_pdf_conversion.php ruta/al/archivo.pdf\n";
    echo "\nEjemplo: php test_pdf_conversion.php 3_Parte3.pdf\n\n";
    exit(1);
}

$pdfPath = $argv[1];

// Verificar que el archivo existe
if (!file_exists($pdfPath)) {
    echo "❌ ERROR: El archivo no existe: $pdfPath\n\n";
    exit(1);
}

if (!is_readable($pdfPath)) {
    echo "❌ ERROR: No se puede leer el archivo: $pdfPath\n\n";
    exit(1);
}

echo "📄 Archivo PDF: $pdfPath\n";
echo "📊 Tamaño: " . formatBytes(filesize($pdfPath)) . "\n";
echo "\n";

// 1. Verificar extensiones PHP
echo "=== VERIFICANDO EXTENSIONES PHP ===\n";

$imagickLoaded = extension_loaded('imagick');
echo $imagickLoaded ? "✅ Imagick: INSTALADO\n" : "❌ Imagick: NO INSTALADO\n";

if ($imagickLoaded) {
    echo "   Versión: " . Imagick::getVersion()['versionString'] . "\n";
}

echo "\n";

// 2. Verificar Ghostscript
echo "=== VERIFICANDO GHOSTSCRIPT ===\n";

$gsPath = verificarGhostscript();
if ($gsPath) {
    echo "✅ Ghostscript encontrado: $gsPath\n";
    
    // Probar versión
    exec("\"$gsPath\" --version", $output, $returnCode);
    if ($returnCode === 0 && !empty($output)) {
        echo "   Versión: " . $output[0] . "\n";
    }
} else {
    echo "❌ Ghostscript NO encontrado\n";
    echo "\n";
    echo "SOLUCIÓN:\n";
    echo "1. Descarga desde: https://ghostscript.com/releases/gsdnld.html\n";
    echo "2. O ejecuta: instalar_ghostscript.bat\n";
    echo "\n";
}

echo "\n";

// 3. Intentar conversión si todo está disponible
if (!$imagickLoaded) {
    echo "⚠ No se puede continuar: Imagick no está instalado\n\n";
    exit(1);
}

if (!$gsPath) {
    echo "⚠ No se puede continuar: Ghostscript no está instalado\n\n";
    exit(1);
}

echo "=== INTENTANDO CONVERSIÓN ===\n";

try {
    $imagick = new Imagick();
    
    // Configurar para mejor calidad
    $imagick->setResolution(300, 300);
    
    echo "⏳ Leyendo PDF...\n";
    $imagick->readImage($pdfPath . "[0]"); // Solo primera página
    
    echo "✅ PDF leído correctamente\n";
    
    // Configurar formato de salida
    $imagick->setImageFormat('png');
    $imagick->setImageCompressionQuality(95);
    
    // Convertir a escala de grises si es necesario
    $imagick->transformImageColorspace(Imagick::COLORSPACE_GRAY);
    
    // Generar nombre de salida
    $outputPath = pathinfo($pdfPath, PATHINFO_FILENAME) . '_convertido.png';
    
    echo "⏳ Guardando imagen PNG...\n";
    $imagick->writeImage($outputPath);
    
    echo "✅ Imagen guardada: $outputPath\n";
    echo "📊 Tamaño: " . formatBytes(filesize($outputPath)) . "\n";
    echo "📐 Dimensiones: " . $imagick->getImageWidth() . "x" . $imagick->getImageHeight() . " px\n";
    
    $imagick->clear();
    $imagick->destroy();
    
    echo "\n";
    echo "========================================\n";
    echo " ✅ CONVERSIÓN EXITOSA\n";
    echo "========================================\n";
    echo "\nAhora puedes usar: $outputPath\n";
    echo "en el sistema OCR de clima laboral.\n\n";
    
} catch (Exception $e) {
    echo "❌ ERROR durante la conversión:\n";
    echo "   " . $e->getMessage() . "\n";
    echo "\n";
    
    if (strpos($e->getMessage(), 'FailedToExecuteCommand') !== false) {
        echo "CAUSA: Ghostscript no está funcionando correctamente\n";
        echo "SOLUCIÓN:\n";
        echo "1. Reinstala Ghostscript\n";
        echo "2. Reinicia MAMP después de instalar\n";
        echo "3. Verifica que esté en: C:\\Program Files\\gs\\gs10.02.1\\bin\\gswin64c.exe\n";
    }
    
    echo "\n";
    exit(1);
}

/**
 * Verificar si Ghostscript está instalado
 */
function verificarGhostscript() {
    $posiblesPaths = array(
        "C:\\Program Files\\gs\\gs10.03.1\\bin\\gswin64c.exe",
        "C:\\Program Files\\gs\\gs10.03.0\\bin\\gswin64c.exe",
        "C:\\Program Files\\gs\\gs10.02.1\\bin\\gswin64c.exe",
        "C:\\Program Files\\gs\\gs10.02.0\\bin\\gswin64c.exe",
        "C:\\Program Files\\gs\\gs10.01.2\\bin\\gswin64c.exe",
        "C:\\Program Files\\gs\\gs9.56.1\\bin\\gswin64c.exe",
        "C:\\Program Files (x86)\\gs\\gs10.02.1\\bin\\gswin32c.exe",
        "C:\\Program Files (x86)\\gs\\gs10.02.0\\bin\\gswin32c.exe"
    );
    
    foreach ($posiblesPaths as $path) {
        if (file_exists($path)) {
            return $path;
        }
    }
    
    // Buscar en PATH del sistema
    exec('where gswin64c 2>nul', $output, $returnCode);
    if ($returnCode === 0 && !empty($output[0])) {
        return trim($output[0]);
    }
    
    return false;
}

/**
 * Formatear bytes a formato legible
 */
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB');
    
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    
    $bytes /= pow(1024, $pow);
    
    return round($bytes, $precision) . ' ' . $units[$pow];
}
