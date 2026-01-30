<?php
require 'includes/config.php';

echo "=== TABLA: empleados_demograficos ===\n";
try {
    $result = $pdo->query('DESC empleados_demograficos');
    $cols = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach($cols as $col) {
        echo $col['Field'] . ' - ' . $col['Type'] . "\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== TABLA: empleados ===\n";
try {
    $result = $pdo->query('DESC empleados');
    $cols = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach($cols as $col) {
        echo $col['Field'] . ' - ' . $col['Type'] . "\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== PROBAR FUNCIONES CURP ===\n";
try {
    $stmt = $pdo->query("SELECT curp_extraer_sexo('HELN000101HDFXXX00') as sexo");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "curp_extraer_sexo result: " . json_encode($result) . "\n";
} catch (Exception $e) {
    echo "ERROR en CURP function: " . $e->getMessage() . "\n";
}
?>
