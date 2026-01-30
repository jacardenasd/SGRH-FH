<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<pre>";
require_once __DIR__ . '/../includes/conexion.php';

if (!isset($pdo)) {
    echo "ERROR: \$pdo no definida\n";
    exit;
}

echo "=== TABLA empleados_demograficos ===\n";
try {
    $result = $pdo->query('SHOW COLUMNS FROM empleados_demograficos');
    $cols = $result->fetchAll(PDO::FETCH_ASSOC);
    echo "Columnas encontradas: " . count($cols) . "\n";
    foreach($cols as $col) {
        echo "  - " . $col['Field'] . " (" . $col['Type'] . ")\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== FUNCIONES SQL ===\n";
try {
    $result = $pdo->query('SELECT ROUTINE_NAME FROM INFORMATION_SCHEMA.ROUTINES WHERE ROUTINE_SCHEMA = DATABASE()');
    $funcs = $result->fetchAll(PDO::FETCH_ASSOC);
    if (empty($funcs)) {
        echo "Sin funciones encontradas\n";
    } else {
        foreach($funcs as $func) {
            echo "  - " . $func['ROUTINE_NAME'] . "\n";
        }
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "</pre>";
?>
