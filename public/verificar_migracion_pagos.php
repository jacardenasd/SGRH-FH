<?php
// Verificar qué tablas se crearon
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';

echo "<h2>🔍 Estado de la Migración</h2><hr>";

// 1. Verificar tablas
$tablas = ['proveedores', 'pago_proveedores', 'pago_proveedores_documentos', 'pago_proveedores_historial'];

echo "<h3>📊 Tablas:</h3>";
foreach ($tablas as $tabla) {
    $stmt = $pdo->query("SHOW TABLES LIKE '$tabla'");
    if ($stmt->rowCount() > 0) {
        // Contar registros
        $count = $pdo->query("SELECT COUNT(*) as total FROM $tabla")->fetch()['total'];
        echo "<p style='color: green;'>✅ <strong>$tabla</strong> existe ($count registros)</p>";
    } else {
        echo "<p style='color: red;'>❌ <strong>$tabla</strong> NO existe</p>";
    }
}

// 2. Verificar permisos
echo "<hr><h3>🔐 Permisos:</h3>";
$stmt = $pdo->query("SELECT * FROM permisos WHERE clave LIKE 'pagos_proveedores%'");
$permisos = $stmt->fetchAll();

if (count($permisos) > 0) {
    echo "<p style='color: green;'>✅ " . count($permisos) . " permisos creados</p>";
    echo "<ul>";
    foreach ($permisos as $p) {
        echo "<li><strong>" . htmlspecialchars($p['clave']) . "</strong>: " . htmlspecialchars($p['descripcion']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p style='color: red;'>❌ No se crearon permisos</p>";
}

// 3. Verificar vista
echo "<hr><h3>👁️ Vista:</h3>";
try {
    $stmt = $pdo->query("SHOW FULL TABLES WHERE Table_type = 'VIEW' AND Tables_in_" . $pdo->query("SELECT DATABASE()")->fetchColumn() . " = 'v_pagos_proveedores_resumen'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Vista <strong>v_pagos_proveedores_resumen</strong> existe</p>";
    } else {
        echo "<p style='color: orange;'>⚠️ Vista NO existe (no es crítico)</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: orange;'>⚠️ No se pudo verificar vista: " . htmlspecialchars($e->getMessage()) . "</p>";
}

// 4. Verificar estructura de pago_proveedores
echo "<hr><h3>🔧 Estructura de pago_proveedores:</h3>";
try {
    $stmt = $pdo->query("DESCRIBE pago_proveedores");
    $columnas = $stmt->fetchAll();
    echo "<p style='color: green;'>✅ Tabla tiene " . count($columnas) . " columnas</p>";
    echo "<details><summary>Ver columnas</summary><ul>";
    foreach ($columnas as $col) {
        echo "<li><strong>" . htmlspecialchars($col['Field']) . "</strong>: " . htmlspecialchars($col['Type']) . "</li>";
    }
    echo "</ul></details>";
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}

// 5. Verificar foreign keys
echo "<hr><h3>🔗 Foreign Keys:</h3>";
try {
    $stmt = $pdo->query("
        SELECT 
            CONSTRAINT_NAME,
            TABLE_NAME,
            COLUMN_NAME,
            REFERENCED_TABLE_NAME,
            REFERENCED_COLUMN_NAME
        FROM information_schema.KEY_COLUMN_USAGE
        WHERE TABLE_SCHEMA = DATABASE()
        AND TABLE_NAME IN ('proveedores', 'pago_proveedores', 'pago_proveedores_documentos', 'pago_proveedores_historial')
        AND REFERENCED_TABLE_NAME IS NOT NULL
    ");
    $fks = $stmt->fetchAll();
    if (count($fks) > 0) {
        echo "<p style='color: green;'>✅ " . count($fks) . " foreign keys creadas</p>";
        echo "<ul>";
        foreach ($fks as $fk) {
            echo "<li>" . htmlspecialchars($fk['TABLE_NAME']) . "." . htmlspecialchars($fk['COLUMN_NAME']) . 
                 " → " . htmlspecialchars($fk['REFERENCED_TABLE_NAME']) . "." . htmlspecialchars($fk['REFERENCED_COLUMN_NAME']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color: orange;'>⚠️ No se encontraron foreign keys (puede ser normal)</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: orange;'>⚠️ " . htmlspecialchars($e->getMessage()) . "</p>";
}

echo "<hr>";
echo "<h3>🎯 Resumen:</h3>";

$todos_ok = true;
foreach ($tablas as $tabla) {
    $stmt = $pdo->query("SHOW TABLES LIKE '$tabla'");
    if ($stmt->rowCount() == 0) {
        $todos_ok = false;
        break;
    }
}

$stmt = $pdo->query("SELECT COUNT(*) as total FROM permisos WHERE clave LIKE 'pagos_proveedores%'");
$permisos_count = $stmt->fetch()['total'];

if ($todos_ok && $permisos_count >= 5) {
    echo "<p style='color: green; font-size: 18px; font-weight: bold;'>✅ ¡Migración completada exitosamente!</p>";
    echo "<p><a href='admin_pagos_proveedores.php' style='display: inline-block; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;'>Ir al Módulo →</a></p>";
} else {
    echo "<p style='color: red; font-size: 18px; font-weight: bold;'>❌ La migración tiene problemas</p>";
    if (!$todos_ok) {
        echo "<p>Faltan tablas por crear.</p>";
    }
    if ($permisos_count < 5) {
        echo "<p>Faltan permisos (esperados: 5, encontrados: $permisos_count).</p>";
    }
    echo "<p><a href='ejecutar_migracion_pagos.php' style='display: inline-block; padding: 10px 20px; background: #dc3545; color: white; text-decoration: none; border-radius: 5px;'>Ejecutar Migración →</a></p>";
}
?>
