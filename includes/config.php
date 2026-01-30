<?php
// includes/config.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ✅ SEGURIDAD: APP_ENV por defecto es 'prod' para seguridad
// Cambiar a 'dev' SOLO en desarrollo local
define('APP_ENV', 'prod');

// ✅ SEGURIDAD: Nunca mostrar errores en producción
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);

// ✅ SEGURIDAD: Configurar logging de errores
ini_set('log_errors', '1');
$log_dir = dirname(__DIR__) . '/storage/logs';
if (!is_dir($log_dir)) {
    @mkdir($log_dir, 0755, true);
}
ini_set('error_log', $log_dir . '/php_errors.log');


define('APP_URL', 'http://localhost/'); // ajusta si tu ruta es distinta

define('BASE_PATH', dirname(__DIR__));              // /ruta/proyecto
define('PUBLIC_PATH', BASE_PATH . '/public');
date_default_timezone_set('America/Mexico_City');
define('ASSET_BASE', '/sgrh/'); 

// Ejecutar migraciones si es necesario
require_once __DIR__ . '/migrations.php';require_once __DIR__ . '/../vendor/autoload.php';

