<?php
// Direct CLI test without session dependency
define('__DIR_ROOT__', dirname(__DIR__));

// Load environment
$env_file = __DIR_ROOT__ . '/.env';
if (file_exists($env_file)) {
    $lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && $line[0] !== '#') {
            list($key, $value) = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($value));
        }
    }
}

// Database connection
$host = getenv('DB_HOST') ?: 'localhost';
$db   = getenv('DB_NAME') ?: 'sgrh';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: 'root';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    echo "=== DIAGNÓSTICO CLIMA LABORAL DEMO ===\n\n";
    
    // Check data
    $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM org_unidades");
    $unidades = $stmt->fetch()['cnt'];
    echo "1. Unidades: $unidades\n";
    
    if ($unidades == 0) {
        echo "   ❌ PROBLEMA: No hay unidades. Creando una de prueba...\n";
        $pdo->exec("INSERT INTO org_unidades (nombre, descripcion) VALUES ('Unidad Demo', 'Para pruebas')");
        echo "   ✅ Unidad creada\n\n";
    }
    
    $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM empleados WHERE estatus='activo'");
    $activos = $stmt->fetch()['cnt'];
    echo "2. Empleados activos: $activos\n";
    
    if ($activos == 0) {
        echo "   ➜ Creando 20 empleados de demo...\n";
        
        // Get first unit
        $stmt = $pdo->query("SELECT unidad_id FROM org_unidades LIMIT 1");
        $unit = $stmt->fetch();
        $unit_id = $unit['unidad_id'];
        
        for ($i = 1; $i <= 20; $i++) {
            $no_emp = "DEMO" . str_pad($i, 5, '0', STR_PAD_LEFT);
            $rfc = "RFC" . str_pad($i, 7, '0', STR_PAD_LEFT);
            $stmt = $pdo->prepare("INSERT IGNORE INTO empleados (empresa_id, no_emp, rfc_base, nombre, estatus, unidad_id, es_activo) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([1, $no_emp, $rfc, "Empleado Demo $i", 'activo', $unit_id, 1]);
        }
        
        echo "   ✅ 20 empleados creados\n\n";
        
        $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM empleados WHERE estatus='activo'");
        $activos = $stmt->fetch()['cnt'];
        echo "   Empleados activos ahora: $activos\n\n";
    }
    
    $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM clima_reactivos");
    $reactivos = $stmt->fetch()['cnt'];
    echo "3. Reactivos: $reactivos\n\n";
    
    $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM clima_periodos");
    $periodos = $stmt->fetch()['cnt'];
    echo "4. Períodos: $periodos\n\n";
    
    if ($periodos == 0) {
        echo "   ⚠️ ADVERTENCIA: No hay períodos. Se necesita crear uno.\n";
    }
    
    echo "=== LISTO ===\n";
    echo "Ahora ejecuta: http://localhost/sgrh/public/clima_generar_demo.php?action=generate\n";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
?>
