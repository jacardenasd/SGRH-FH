<?php
/**
 * Script para ejecutar migración de campos a org_plantilla_autorizada
 */

// Configurar conexión directamente si los includes no funcionan
$host = 'localhost';
$db   = 'sgrh';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('Error de conexión BD: ' . $e->getMessage());
}

// Leer el archivo de migración
$migracion = file_get_contents(__DIR__ . '/migrations/add_plantilla_campos.sql');

// Dividir por puntos y coma y ejecutar cada sentencia
$sentencias = array_filter(array_map('trim', explode(';', $migracion)));

$errores = [];
$exito = 0;

foreach ($sentencias as $sentencia) {
    if (!empty($sentencia)) {
        try {
            $pdo->exec($sentencia);
            $exito++;
            echo "[✓] Sentencia ejecutada\n";
        } catch (Exception $e) {
            $errores[] = $e->getMessage();
            echo "[✗] Error: " . $e->getMessage() . "\n";
        }
    }
}

echo "\n=== RESUMEN ===\n";
echo "Sentencias ejecutadas: $exito\n";
if (!empty($errores)) {
    echo "Errores encontrados: " . count($errores) . "\n";
    foreach ($errores as $error) {
        echo "  - $error\n";
    }
}

// Verificar que los campos se agregaron correctamente
echo "\n=== VERIFICACIÓN DE CAMPOS ===\n";
$cols = $pdo->query("DESCRIBE org_plantilla_autorizada")->fetchAll(PDO::FETCH_ASSOC);
foreach ($cols as $col) {
    if (in_array($col['Field'], ['sindicalizado', 'tipo_plaza', 'nivel'])) {
        echo "[✓] Campo '{$col['Field']}' - Tipo: {$col['Type']}, Default: {$col['Default']}\n";
    }
}
?>
