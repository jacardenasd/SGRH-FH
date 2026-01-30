<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/conexion.php';

echo "=== TABLA usuarios ===\n";
$result = $pdo->query('SHOW COLUMNS FROM usuarios');
while ($col = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $col['Field'] . " (" . $col['Type'] . ")\n";
}

echo "\n=== TABLA empleados_demograficos ===\n";
$result = $pdo->query('SHOW COLUMNS FROM empleados_demograficos');
while ($col = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $col['Field'] . " (" . $col['Type'] . ")\n";
}
?>
