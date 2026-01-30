<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/conexion.php';

if (!isset($pdo)) {
    echo "ERROR: \$pdo no definida\n";
    exit;
}

echo "Verificando tablas...\n\n";

// Verificar tabla empleados
echo "=== TABLA empleados ===\n";
$result = $pdo->query('SHOW COLUMNS FROM empleados');
while ($col = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $col['Field'] . " (" . $col['Type'] . ")\n";
}

echo "\n=== TABLA empleados_demograficos ===\n";
$result = $pdo->query('SHOW COLUMNS FROM empleados_demograficos');
while ($col = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $col['Field'] . " (" . $col['Type'] . ")\n";
}

echo "\n=== FUNCIONES SQL disponibles ===\n";
$result = $pdo->query('SHOW FUNCTION STATUS WHERE DB = DATABASE()');
$funcs = $result->fetchAll(PDO::FETCH_ASSOC);
if (empty($funcs)) {
    echo "Sin funciones SQL encontradas\n";
} else {
    foreach($funcs as $func) {
        echo "- " . $func['Name'] . "\n";
    }
}
?>
