<?php
/**
 * Script para corregir el nombre de columna tamaño_bytes → tamano_bytes
 */

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

echo "<h2>🔧 Corrección de Columna tamano_bytes</h2>";
echo "<hr>";

try {
    // Verificar si la tabla existe
    $stmt = $pdo->query("SHOW TABLES LIKE 'pago_proveedores_documentos'");
    
    if ($stmt->rowCount() == 0) {
        echo "<p style='color: orange;'>⚠️ La tabla pago_proveedores_documentos no existe aún. No hay nada que corregir.</p>";
        echo "<p><a href='ejecutar_migracion_pagos.php'>Ejecutar migración completa</a></p>";
        exit;
    }
    
    // Verificar las columnas actuales
    $stmt = $pdo->query("SHOW COLUMNS FROM pago_proveedores_documentos");
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h3>📋 Columnas actuales:</h3>";
    echo "<ul>";
    $tiene_tamano_bytes = false;
    $tiene_tamano_con_enie = false;
    
    foreach ($columns as $col) {
        echo "<li><code>" . htmlspecialchars($col['Field']) . "</code> - " . htmlspecialchars($col['Type']) . "</li>";
        
        if ($col['Field'] == 'tamano_bytes') {
            $tiene_tamano_bytes = true;
        }
        if ($col['Field'] == 'tamaño_bytes') {
            $tiene_tamano_con_enie = true;
        }
    }
    echo "</ul>";
    
    echo "<hr>";
    
    // Aplicar corrección según el caso
    if ($tiene_tamano_bytes) {
        echo "<p style='color: green; font-weight: bold;'>✅ La columna <code>tamano_bytes</code> ya existe correctamente.</p>";
        echo "<p>No se requiere ninguna acción.</p>";
        
    } elseif ($tiene_tamano_con_enie) {
        echo "<p style='color: orange; font-weight: bold;'>⚠️ Se detectó la columna con ñ: <code>tamaño_bytes</code></p>";
        echo "<p>Renombrando columna...</p>";
        
        $pdo->exec("ALTER TABLE pago_proveedores_documentos CHANGE COLUMN `tamaño_bytes` `tamano_bytes` INT UNSIGNED DEFAULT NULL");
        
        echo "<p style='color: green; font-weight: bold;'>✅ Columna renombrada exitosamente: <code>tamaño_bytes</code> → <code>tamano_bytes</code></p>";
        
    } else {
        echo "<p style='color: red; font-weight: bold;'>❌ No se encontró ninguna columna para el tamaño de archivo.</p>";
        echo "<p>Esto puede indicar que la tabla no se creó correctamente. Considera eliminarla y recrearla.</p>";
        echo "<pre>DROP TABLE IF EXISTS pago_proveedores_documentos;</pre>";
    }
    
    echo "<hr>";
    echo "<h3>🔄 Siguiente paso:</h3>";
    echo "<p><a href='admin_pagos_proveedores.php' style='display: inline-block; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;'>Ir al Módulo de Pagos</a></p>";
    echo "<p><a href='test_pagos_funcionalidad.php' style='display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Ejecutar Test</a></p>";
    
} catch (Exception $e) {
    echo "<p style='color: red; font-weight: bold;'>❌ Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
