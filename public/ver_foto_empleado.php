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

// Placeholder por defecto cuando no hay foto
$placeholder = realpath(__DIR__ . '/../global_assets/images/placeholders/user.png');
if ($placeholder === false || !is_file($placeholder)) {
    // Fallback secundario
    $placeholder = realpath(__DIR__ . '/../global_assets/images/placeholders/placeholder.jpg');
}

$storage_base = realpath(__DIR__ . '/../storage');
if ($storage_base === false) {
    http_response_code(500);
    exit;
}

$real = null;
if ($foto_path) {
    $path = $storage_base . '/' . $foto_path;
    $candidate = realpath($path);
    // Anti-traversal: asegurar que está dentro de storage
    if ($candidate !== false && strpos($candidate, $storage_base) === 0 && is_file($candidate)) {
        $real = $candidate;
    }
}

// Si no hay foto válida, usar placeholder
if ($real === null) {
    $real = $placeholder;
}

$info = @getimagesize($real);
if ($info === false) {
    // Si incluso el placeholder falla, devolver 404
    http_response_code(404);
    exit;
}

header('Content-Type: ' . $info['mime']);
header('Content-Length: ' . filesize($real));
header('Cache-Control: private, max-age=86400');
readfile($real);
exit;
