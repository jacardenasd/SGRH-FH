<?php
// Script para ejecutar la migración de usuarios_accesos
require_once __DIR__ . '/includes/env.php';

$host = getenv('DB_HOST') ?: 'localhost';
$db   = getenv('DB_NAME') ?: 'sgrh';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    $sql = file_get_contents(__DIR__ . '/migrations/20250128_crear_tabla_usuarios_accesos.sql');
    $pdo->exec($sql);
    echo "✓ Tabla usuarios_accesos creada exitosamente.\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
