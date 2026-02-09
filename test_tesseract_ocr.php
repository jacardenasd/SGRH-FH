<?php
// test_tesseract_ocr.php
// Script de prueba para verificar instalación de Tesseract OCR

echo "=== TEST TESSERACT OCR - SGRH ===\n\n";

// 1. Verificar rutas posibles de Tesseract
echo "1. Buscando Tesseract OCR...\n";

$rutas_posibles = [
    'C:\\Program Files\\Tesseract-OCR\\tesseract.exe',
    'C:\\Program Files (x86)\\Tesseract-OCR\\tesseract.exe',
    getenv('TESSERACT_PATH')
];

$tesseract_path = null;

foreach ($rutas_posibles as $ruta) {
    if ($ruta && file_exists($ruta)) {
        echo "   ✓ Encontrado en: $ruta\n";
        $tesseract_path = $ruta;
        break;
    } else {
        echo "   ✗ No encontrado en: " . ($ruta ?: 'Variable de entorno TESSERACT_PATH no definida') . "\n";
    }
}

// Intentar con PATH del sistema
if (!$tesseract_path) {
    echo "\n   Buscando en PATH del sistema...\n";
    exec('where tesseract 2>nul', $output, $return_code);
    if ($return_code === 0 && !empty($output)) {
        $tesseract_path = trim($output[0]);
        echo "   ✓ Encontrado en PATH: $tesseract_path\n";
    } else {
        echo "   ✗ No encontrado en PATH del sistema\n";
    }
}

if (!$tesseract_path) {
    echo "\n❌ ERROR: Tesseract OCR no está instalado o no se encuentra.\n";
    echo "\nPara instalarlo:\n";
    echo "1. Descargue desde: https://github.com/UB-Mannheim/tesseract/wiki\n";
    echo "2. Ejecute el instalador\n";
    echo "3. Seleccione idioma 'Spanish' durante la instalación\n";
    echo "4. Vuelva a ejecutar este script\n\n";
    exit(1);
}

echo "\n✓ Tesseract encontrado exitosamente!\n\n";

// 2. Verificar versión
echo "2. Verificando versión...\n";
$command = sprintf('"%s" --version 2>&1', $tesseract_path);
exec($command, $version_output, $return_code);

if ($return_code === 0) {
    echo "   " . implode("\n   ", array_slice($version_output, 0, 3)) . "\n";
} else {
    echo "   ⚠ No se pudo obtener la versión\n";
}

// 3. Verificar idiomas instalados
echo "\n3. Verificando idiomas instalados...\n";
$command = sprintf('"%s" --list-langs 2>&1', $tesseract_path);
exec($command, $langs_output, $return_code);

if ($return_code === 0) {
    $idiomas = array_slice($langs_output, 1); // Saltar primera línea
    
    if (in_array('spa', $idiomas)) {
        echo "   ✓ Español (spa) instalado ✓\n";
    } else {
        echo "   ⚠ Español (spa) NO instalado\n";
        echo "   Idiomas disponibles: " . implode(', ', $idiomas) . "\n";
        echo "\n   ACCIÓN REQUERIDA: Reinstalar Tesseract seleccionando idioma Spanish\n";
    }
    
    if (in_array('eng', $idiomas)) {
        echo "   ✓ Inglés (eng) instalado\n";
    }
} else {
    echo "   ⚠ No se pudo obtener lista de idiomas\n";
}

// 4. Crear imagen de prueba simple
echo "\n4. Creando imagen de prueba...\n";

if (extension_loaded('gd')) {
    echo "   ✓ Extensión GD disponible\n";
    
    // Crear imagen con texto
    $img = imagecreate(800, 200);
    $bg = imagecolorallocate($img, 255, 255, 255);
    $text_color = imagecolorallocate($img, 0, 0, 0);
    
    $texto_prueba = "Encuesta de Clima Laboral 2026";
    $texto_prueba2 = "Empleado ID: 12345";
    $texto_prueba3 = "1. [X] Totalmente de acuerdo [ ] Parcial [ ] Desacuerdo";
    
    imagestring($img, 5, 50, 30, $texto_prueba, $text_color);
    imagestring($img, 4, 50, 70, $texto_prueba2, $text_color);
    imagestring($img, 3, 50, 110, $texto_prueba3, $text_color);
    
    $test_image = __DIR__ . '/test_ocr_image.png';
    imagepng($img, $test_image);
    imagedestroy($img);
    
    echo "   ✓ Imagen de prueba creada: $test_image\n";
    
    // 5. Probar OCR en la imagen
    echo "\n5. Probando OCR en imagen de prueba...\n";
    
    $output_file = __DIR__ . '/test_ocr_output';
    $command = sprintf(
        '"%s" "%s" "%s" -l spa --psm 6 2>&1',
        $tesseract_path,
        $test_image,
        $output_file
    );
    
    exec($command, $ocr_output, $return_code);
    
    if ($return_code === 0 && file_exists($output_file . '.txt')) {
        $texto_extraido = file_get_contents($output_file . '.txt');
        
        echo "   ✓ OCR ejecutado exitosamente\n";
        echo "\n   Texto extraído:\n";
        echo "   " . str_repeat("-", 60) . "\n";
        echo "   " . str_replace("\n", "\n   ", trim($texto_extraido)) . "\n";
        echo "   " . str_repeat("-", 60) . "\n";
        
        // Verificar que reconoció palabras clave
        $texto_upper = mb_strtoupper($texto_extraido, 'UTF-8');
        $palabras_clave = ['CLIMA', 'LABORAL', 'EMPLEADO', '12345'];
        $palabras_encontradas = 0;
        
        echo "\n   Verificando reconocimiento:\n";
        foreach ($palabras_clave as $palabra) {
            if (strpos($texto_upper, $palabra) !== false) {
                echo "   ✓ '$palabra' reconocida\n";
                $palabras_encontradas++;
            } else {
                echo "   ✗ '$palabra' no reconocida\n";
            }
        }
        
        if ($palabras_encontradas >= 2) {
            echo "\n   ✓ OCR funcionando correctamente!\n";
        } else {
            echo "\n   ⚠ OCR puede necesitar ajustes. Reconocimiento bajo.\n";
        }
        
        // Limpiar archivos temporales
        @unlink($test_image);
        @unlink($output_file . '.txt');
        
    } else {
        echo "   ❌ Error al ejecutar OCR\n";
        if (!empty($ocr_output)) {
            echo "   Salida: " . implode("\n   ", $ocr_output) . "\n";
        }
    }
    
} else {
    echo "   ⚠ Extensión GD no disponible. No se puede crear imagen de prueba.\n";
    echo "   Pero Tesseract está instalado y funcionará con imágenes reales.\n";
}

// 6. Verificar extensiones PHP opcionales
echo "\n6. Verificando extensiones PHP opcionales...\n";

if (extension_loaded('imagick')) {
    echo "   ✓ Imagick instalado (puede procesar PDFs)\n";
} else {
    echo "   ✗ Imagick no instalado (solo puede procesar imágenes)\n";
    echo "     Para procesar PDFs, instale php_imagick\n";
}

if (extension_loaded('gd')) {
    echo "   ✓ GD instalado (puede mejorar imágenes)\n";
} else {
    echo "   ⚠ GD no instalado (recomendado)\n";
}

// 7. Verificar directorio temporal
echo "\n7. Verificando directorios del sistema...\n";

$temp_dir = __DIR__ . '/storage/temp_ocr';
if (!is_dir($temp_dir)) {
    if (mkdir($temp_dir, 0755, true)) {
        echo "   ✓ Directorio temporal creado: $temp_dir\n";
    } else {
        echo "   ❌ No se pudo crear directorio temporal: $temp_dir\n";
        echo "      Verifique permisos de escritura\n";
    }
} else {
    echo "   ✓ Directorio temporal existe: $temp_dir\n";
}

if (is_writable($temp_dir)) {
    echo "   ✓ Directorio tiene permisos de escritura\n";
} else {
    echo "   ❌ Directorio no tiene permisos de escritura\n";
    echo "      Ejecute: icacls \"$temp_dir\" /grant Everyone:F /T\n";
}

// Resumen final
echo "\n" . str_repeat("=", 70) . "\n";
echo "RESUMEN DEL TEST\n";
echo str_repeat("=", 70) . "\n\n";

$puntos_exitosos = 0;
$puntos_totales = 5;

if ($tesseract_path) {
    echo "✓ Tesseract OCR instalado\n";
    $puntos_exitosos++;
}

if (isset($idiomas) && in_array('spa', $idiomas)) {
    echo "✓ Idioma español configurado\n";
    $puntos_exitosos++;
}

if (isset($palabras_encontradas) && $palabras_encontradas >= 2) {
    echo "✓ OCR funcional (test exitoso)\n";
    $puntos_exitosos++;
}

if (extension_loaded('gd')) {
    echo "✓ Extensión GD disponible\n";
    $puntos_exitosos++;
}

if (is_writable($temp_dir)) {
    echo "✓ Permisos de directorio OK\n";
    $puntos_exitosos++;
}

echo "\nPuntaje: $puntos_exitosos/$puntos_totales\n\n";

if ($puntos_exitosos >= 4) {
    echo "🎉 ¡SISTEMA LISTO PARA USAR!\n\n";
    echo "Puede acceder al módulo en:\n";
    echo "http://localhost/sgrh/public/clima_captura_ia.php\n\n";
} elseif ($puntos_exitosos >= 3) {
    echo "⚠ SISTEMA FUNCIONAL CON LIMITACIONES\n\n";
    echo "El sistema funcionará, pero algunas características pueden no estar disponibles.\n";
    echo "Revise las advertencias arriba.\n\n";
} else {
    echo "❌ SISTEMA REQUIERE CONFIGURACIÓN\n\n";
    echo "Por favor, complete la instalación siguiendo:\n";
    echo "CLIMA_OCR_INSTALACION.md\n\n";
}

echo str_repeat("=", 70) . "\n";
