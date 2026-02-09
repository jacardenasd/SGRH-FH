<?php
require_once 'includes/conexion.php';

echo "=== VERIFICACIÓN DE DATOS PARA DEMO CLIMA ===\n\n";

// Check employees
$stmt = $pdo->query('SELECT COUNT(*) FROM empleados');
$emp_count = $stmt->fetchColumn();

$stmt = $pdo->query('SELECT COUNT(*) FROM empleados WHERE estatus="activo"');
$active_count = $stmt->fetchColumn();

$stmt = $pdo->query('SELECT COUNT(*) FROM clima_periodos');
$periods = $stmt->fetchColumn();

$stmt = $pdo->query('SELECT COUNT(*) FROM clima_reactivos');
$reactivos = $stmt->fetchColumn();

echo "Total empleados: $emp_count\n";
echo "Empleados activos (estatus='activo'): $active_count\n";
echo "Períodos de clima: $periods\n";
echo "Reactivos: $reactivos\n";

// Check all estatus values
echo "\nValores únicos de estatus en empleados:\n";
$stmt = $pdo->query('SELECT DISTINCT estatus, COUNT(*) FROM empleados GROUP BY estatus');
foreach ($stmt->fetchAll() as $row) {
    echo "  {$row['estatus']}: {$row['COUNT(*)']} empleados\n";
}

// Check periods
echo "\nPeríodos disponibles:\n";
$stmt = $pdo->query('SELECT periodo_id, nombre FROM clima_periodos LIMIT 5');
foreach ($stmt->fetchAll() as $row) {
    echo "  ID: {$row['periodo_id']}, Nombre: {$row['nombre']}\n";
}

// Check sample employees
echo "\nPrimeros empleados:\n";
$stmt = $pdo->query('SELECT empleado_id, nombres, estatus FROM empleados LIMIT 3');
foreach ($stmt->fetchAll() as $row) {
    echo "  ID: {$row['empleado_id']}, Nombre: {$row['nombres']}, Status: {$row['estatus']}\n";
}
?>
