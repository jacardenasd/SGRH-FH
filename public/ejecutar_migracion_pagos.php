<?php
// Script para ejecutar la migración de Pagos a Proveedores
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

// Verificar que sea admin
require_login();
if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_id'] != 1) {
    die("❌ Solo el usuario admin (ID=1) puede ejecutar migraciones.");
}

echo "<h2>🔧 Ejecutando Migración: Pagos a Proveedores</h2>";
echo "<hr>";

// Leer el archivo SQL
$sql_file = __DIR__ . '/../migrations/05_tramite_pago_proveedores.sql';

if (!file_exists($sql_file)) {
    die("❌ ERROR: No se encuentra el archivo: $sql_file");
}

$sql_content = file_get_contents($sql_file);

// Remover comentarios de bloque /* */
$sql_content = preg_replace('#/\*.*?\*/#s', '', $sql_content);

// Remover comentarios de línea --
$sql_content = preg_replace('/--[^\r\n]*/', '', $sql_content);

// Dividir en queries individuales por punto y coma
$queries = explode(';', $sql_content);

// Limpiar y filtrar queries vacías
$queries = array_filter(array_map('trim', $queries), function($q) {
    return !empty($q) && 
           stripos($q, 'DELIMITER') === false &&
           strlen($q) > 10; // Ignorar fragmentos muy cortos
});

echo "<p><strong>Total de queries a ejecutar:</strong> " . count($queries) . "</p>";
echo "<hr>";

$success = 0;
$errors = 0;

foreach ($queries as $index => $query) {
    // Validación adicional
    if (empty(trim($query))) {
        continue;
    }
    
    echo "<div style='margin-bottom: 15px; padding: 10px; border-left: 3px solid #ccc;'>";
    echo "<strong>Query " . ($index + 1) . ":</strong><br>";
    echo "<code>" . htmlspecialchars(substr($query, 0, 100)) . "...</code><br>";
    
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        echo "<span style='color: green;'>✅ Ejecutado exitosamente</span>";
        $success++;
    } catch (PDOException $e) {
        // Si el error es "ya existe", no es crítico
        if (strpos($e->getMessage(), 'already exists') !== false || 
            strpos($e->getMessage(), 'Duplicate') !== false) {
            echo "<span style='color: orange;'>⚠️ Ya existe (omitido): " . htmlspecialchars($e->getMessage()) . "</span>";
        } else {
            echo "<span style='color: red;'>❌ ERROR: " . htmlspecialchars($e->getMessage()) . "</span>";
            $errors++;
        }
    }
    echo "</div>";
}

echo "<hr>";
echo "<h3>📊 Resumen de Ejecución:</h3>";
echo "<ul>";
echo "<li>✅ <strong>Exitosos:</strong> $success</li>";
echo "<li>❌ <strong>Errores:</strong> $errors</li>";
echo "</ul>";

// Verificar que los permisos se crearon
echo "<hr>";
echo "<h3>🔍 Verificación de Permisos:</h3>";

try {
    $stmt = $pdo->query("SELECT * FROM permisos WHERE clave LIKE 'pagos_proveedores%' ORDER BY clave");
    $permisos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($permisos) > 0) {
        echo "<p style='color: green; font-weight: bold;'>✅ Permisos creados correctamente (" . count($permisos) . " permisos)</p>";
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
        echo "<tr><th>ID</th><th>Clave</th><th>Descripción</th></tr>";
        foreach ($permisos as $p) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($p['permiso_id']) . "</td>";
            echo "<td><strong>" . htmlspecialchars($p['clave']) . "</strong></td>";
            echo "<td>" . htmlspecialchars($p['descripcion']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>❌ No se encontraron permisos. La migración falló.</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error al verificar: " . htmlspecialchars($e->getMessage()) . "</p>";
}

// Verificar tablas
echo "<hr>";
echo "<h3>🗄️ Verificación de Tablas:</h3>";

$tablas_requeridas = [
    'proveedores',
    'pago_proveedores',
    'pago_proveedores_documentos',
    'pago_proveedores_historial'
];

foreach ($tablas_requeridas as $tabla) {
    try {
        $stmt = $pdo->query("SHOW TABLES LIKE '$tabla'");
        if ($stmt->rowCount() > 0) {
            echo "<p style='color: green;'>✅ Tabla <strong>$tabla</strong> existe</p>";
        } else {
            echo "<p style='color: red;'>❌ Tabla <strong>$tabla</strong> NO existe</p>";
        }
    } catch (Exception $e) {
        echo "<p style='color: red;'>❌ Error al verificar tabla $tabla: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}

echo "<hr>";
echo "<h3>🎉 Migración Completada</h3>";
echo "<p><a href='admin_pagos_proveedores.php' style='display: inline-block; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;'>➡️ Ir al Módulo de Pagos</a></p>";
echo "<p><a href='test_pagos_debug.php' style='display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;'>🔍 Ejecutar Test de Diagnóstico</a></p>";
?>
