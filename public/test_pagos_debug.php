<?php
// Test para ver el error
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "1. Incluyendo config...<br>";
require_once __DIR__ . '/../includes/config.php';

echo "2. Incluyendo guard...<br>";
require_once __DIR__ . '/../includes/guard.php';

echo "3. Incluyendo permisos...<br>";
require_once __DIR__ . '/../includes/permisos.php';

echo "4. Incluyendo conexion...<br>";
require_once __DIR__ . '/../includes/conexion.php';

echo "5. Verificando funciones...<br>";
echo "- require_login existe: " . (function_exists('require_login') ? 'SI' : 'NO') . "<br>";
echo "- require_empresa existe: " . (function_exists('require_empresa') ? 'SI' : 'NO') . "<br>";
echo "- require_perm existe: " . (function_exists('require_perm') ? 'SI' : 'NO') . "<br>";
echo "- can existe: " . (function_exists('can') ? 'SI' : 'NO') . "<br>";

echo "6. Verificando sesión...<br>";
echo "- Session activa: " . (session_status() === PHP_SESSION_ACTIVE ? 'SI' : 'NO') . "<br>";
echo "- Usuario ID: " . (isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : 'NO LOGUEADO') . "<br>";

echo "7. Verificando permisos en BD...<br>";
try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM permisos WHERE clave LIKE 'pagos_proveedores%'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "- Permisos encontrados: " . $result['total'] . "<br>";
} catch (Exception $e) {
    echo "- ERROR: " . $e->getMessage() . "<br>";
}

echo "<br><strong>Todo OK hasta aquí. Intentando require_login()...</strong><br>";

try {
    require_login();
    echo "✅ require_login() OK<br>";
} catch (Exception $e) {
    echo "❌ ERROR en require_login(): " . $e->getMessage() . "<br>";
}

try {
    require_empresa();
    echo "✅ require_empresa() OK<br>";
} catch (Exception $e) {
    echo "❌ ERROR en require_empresa(): " . $e->getMessage() . "<br>";
}

echo "<br><strong>Verificando si el permiso existe...</strong><br>";
try {
    $stmt = $pdo->prepare("SELECT * FROM permisos WHERE clave = 'pagos_proveedores.admin'");
    $stmt->execute();
    $permiso = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($permiso) {
        echo "✅ Permiso existe: " . $permiso['descripcion'] . "<br>";
    } else {
        echo "❌ Permiso NO existe en BD. Debes ejecutar la migración SQL primero.<br>";
    }
} catch (Exception $e) {
    echo "❌ ERROR: " . $e->getMessage() . "<br>";
}

echo "<br><strong>Test completado.</strong>";
?>
