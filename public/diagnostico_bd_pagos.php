<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';

echo "<h2>🔍 Verificación de Base de Datos</h2><hr>";

// 1. Verificar tabla empresas
echo "<h3>1️⃣ Tabla empresas:</h3>";
try {
    $stmt = $pdo->query("SHOW TABLES LIKE 'empresas'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ La tabla <strong>empresas</strong> existe</p>";
        $stmt = $pdo->query("DESCRIBE empresas");
        $cols = $stmt->fetchAll();
        echo "<details><summary>Ver estructura</summary><ul>";
        foreach ($cols as $col) {
            if ($col['Field'] == 'empresa_id') {
                echo "<li style='font-weight: bold; color: green;'>" . $col['Field'] . " - " . $col['Type'] . "</li>";
            } else {
                echo "<li>" . $col['Field'] . " - " . $col['Type'] . "</li>";
            }
        }
        echo "</ul></details>";
    } else {
        echo "<p style='color: red;'>❌ La tabla <strong>empresas</strong> NO existe</p>";
        echo "<p>Se debe crear sin foreign key a empresas o usar otra tabla base.</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}

// 2. Verificar tabla permisos
echo "<hr><h3>2️⃣ Tabla permisos:</h3>";
try {
    $stmt = $pdo->query("DESCRIBE permisos");
    $cols = $stmt->fetchAll();
    echo "<p style='color: green;'>✅ La tabla <strong>permisos</strong> existe</p>";
    echo "<ul>";
    $tiene_created_at = false;
    foreach ($cols as $col) {
        echo "<li><strong>" . $col['Field'] . "</strong>: " . $col['Type'];
        if ($col['Field'] == 'created_at') {
            $tiene_created_at = true;
            echo " ✅";
        }
        echo "</li>";
    }
    echo "</ul>";
    
    if (!$tiene_created_at) {
        echo "<p style='color: orange;'>⚠️ La columna <strong>created_at</strong> NO existe. Se usará NOW() en su lugar.</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}

// 3. Verificar tabla usuarios
echo "<hr><h3>3️⃣ Tabla usuarios (para claves foráneas):</h3>";
try {
    $stmt = $pdo->query("SHOW TABLES LIKE 'usuarios'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ La tabla <strong>usuarios</strong> existe</p>";
    } else {
        echo "<p style='color: orange;'>⚠️ La tabla <strong>usuarios</strong> NO existe (se quitarán FKs relacionadas)</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}

// 4. Verificar org_unidades
echo "<hr><h3>4️⃣ Tabla org_unidades:</h3>";
try {
    $stmt = $pdo->query("SHOW TABLES LIKE 'org_unidades'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ La tabla <strong>org_unidades</strong> existe</p>";
    } else {
        echo "<p style='color: orange;'>⚠️ La tabla <strong>org_unidades</strong> NO existe (se quitará FK relacionada)</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<p><strong>Generando SQL corregido...</strong></p>";
echo "<p><a href='ejecutar_migracion_pagos_corregida.php' style='display: inline-block; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;'>Ejecutar Migración Corregida →</a></p>";
?>
