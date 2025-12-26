<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';

require_login();
require_empresa();

if (!isset($pdo)) {
    http_response_code(500);
    exit;
}

$empresa_id  = (int)$_SESSION['empresa_id'];
$usuario_id  = (int)$_SESSION['usuario_id'];
$empleado_id = isset($_GET['empleado_id']) ? (int)$_GET['empleado_id'] : 0;

if ($empleado_id <= 0) {
    http_response_code(400);
    exit;
}

// Solo permitir ver foto del empleado vinculado al usuario en la empresa activa
$stmt = $pdo->prepare("
    SELECT e.foto_path
    FROM usuario_empresas ue
    JOIN empleados e ON e.empleado_id = ue.empleado_id
    WHERE ue.usuario_id = :usuario_id
      AND ue.empresa_id = :empresa_id
      AND ue.estatus = 1
      AND ue.empleado_id = :empleado_id
    LIMIT 1
");
$stmt->execute([
    ':usuario_id' => $usuario_id,
    ':empresa_id' => $empresa_id,
    ':empleado_id' => $empleado_id
]);
$foto_path = $stmt->fetchColumn();

if (!$foto_path) {
    http_response_code(404);
    exit;
}

$storage_base = realpath(__DIR__ . '/../storage');
if ($storage_base === false) {
    http_response_code(500);
    exit;
}

$path = $storage_base . '/' . $foto_path;
$real = realpath($path);

// Anti-traversal: asegurar que está dentro de storage
if ($real === false || strpos($real, $storage_base) !== 0 || !is_file($real)) {
    http_response_code(404);
    exit;
}

$info = @getimagesize($real);
if ($info === false) {
    http_response_code(415);
    exit;
}

header('Content-Type: ' . $info['mime']);
header('Content-Length: ' . filesize($real));
header('Cache-Control: private, max-age=86400');
readfile($real);
exit;
