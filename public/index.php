<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}

// Forzar cambio de contraseña
if (!empty($_SESSION['debe_cambiar_pass'])) {
    header('Location: cambiar_password.php');
    exit;
}

// Selección de empresa (multi-razón social)
if (empty($_SESSION['empresa_id'])) {
    header('Location: seleccionar_empresa.php');
    exit;
}

// Verificar datos demográficos
if (!empty($_SESSION['empleado_id'])) {
    $stmt = $pdo->prepare("SELECT empleado_id FROM empleados_demograficos WHERE empleado_id = ? LIMIT 1");
    $stmt->execute([(int)$_SESSION['empleado_id']]);
    if (!$stmt->fetch()) {
        header('Location: mi_perfil.php?completar_demograficos=1');
        exit;
    }
}

// Todo OK
header('Location: dashboard.php');
exit;
