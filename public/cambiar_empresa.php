<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();

// Sin ?? (compatibilidad)
$empresas   = isset($_SESSION['empresas']) ? $_SESSION['empresas'] : [];
$empresa_id = isset($_POST['empresa_id']) ? (int)$_POST['empresa_id'] : 0;

$found = null;
foreach ($empresas as $e) {
    if ((int)$e['empresa_id'] === $empresa_id) {
        $found = $e;
        break;
    }
}

if (!$found) {
    header('Location: seleccionar_empresa.php');
    exit;
}

$_SESSION['empresa_id']       = (int)$found['empresa_id'];
$_SESSION['empresa_nombre']   = $found['nombre'];
$_SESSION['empresa_alias']    = $found['alias'];
$_SESSION['es_admin_empresa'] = (int)$found['es_admin'];

// NUEVO: recalcular empleado_id por empresa (multi-empresa)
$usuario_id = (int)$_SESSION['usuario_id'];

if (!isset($pdo)) {
    // guard.php incluye auth.php; debería existir $pdo.
    // Si por alguna razón no existe, al menos no rompemos el flujo.
    $_SESSION['empleado_id'] = null;
} else {
    $stmt = $pdo->prepare("
        SELECT empleado_id
        FROM usuario_empresas
        WHERE usuario_id = :usuario_id
          AND empresa_id = :empresa_id
          AND estatus = 1
        LIMIT 1
    ");
    $stmt->execute([
        ':usuario_id' => $usuario_id,
        ':empresa_id' => (int)$_SESSION['empresa_id']
    ]);
    $tmp = $stmt->fetchColumn();
    $_SESSION['empleado_id'] = $tmp ? (int)$tmp : null;
}

// Recalcular permisos para el contexto actual
cargar_permisos_sesion($usuario_id);

header('Location: index.php');
exit;
