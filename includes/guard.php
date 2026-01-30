<?php
// includes/guard.php
require_once __DIR__ . '/auth.php';

function require_login() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }
}

function require_empresa() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['empresa_id'])) {
        header('Location: seleccionar_empresa.php');
        exit;
    }

    // Asegurar que es_admin_empresa y permisos estén cargados
    if (!isset($_SESSION['es_admin_empresa']) || !isset($_SESSION['permisos'])) {
        global $pdo;
        if (!isset($pdo)) {
            require_once __DIR__ . '/conexion.php';
        }
        
        // Obtener es_admin de usuario_empresas
        $stmt = $pdo->prepare("SELECT es_admin FROM usuario_empresas WHERE usuario_id = ? AND empresa_id = ? LIMIT 1");
        $stmt->execute([(int)$_SESSION['usuario_id'], (int)$_SESSION['empresa_id']]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            $_SESSION['es_admin_empresa'] = (int)$row['es_admin'];
        } else {
            $_SESSION['es_admin_empresa'] = 0;
        }
        
        // Cargar permisos
        cargar_permisos_sesion((int)$_SESSION['usuario_id']);
    }
}

function require_password_change_redirect() {
    if (session_status() === PHP_SESSION_NONE) session_start();

    $self = basename($_SERVER['PHP_SELF']);
    $permitidos = ['cambiar_password.php', 'logout.php', 'recuperar_contrasena.php', 'terminos.php', 'login.php'];

    if (!empty($_SESSION['usuario_id']) && !empty($_SESSION['debe_cambiar_pass']) && !in_array($self, $permitidos, true)) {
        header('Location: cambiar_password.php');
        exit;
    }
}

function require_demograficos_redirect() {
    if (session_status() === PHP_SESSION_NONE) session_start();

    $self = basename($_SERVER['PHP_SELF']);
    $permitidos = ['mi_perfil.php', 'cambiar_password.php', 'logout.php', 'recuperar_contrasena.php', 'terminos.php', 'login.php', 'seleccionar_empresa.php', 'cambiar_empresa.php'];

    // Solo verificar si el usuario está logueado, tiene empresa y no está en cambio de password
    if (!empty($_SESSION['usuario_id']) && 
        !empty($_SESSION['empresa_id']) && 
        empty($_SESSION['debe_cambiar_pass']) && 
        !in_array($self, $permitidos, true)) {
        
        // Verificar si el empleado tiene datos demográficos
        $empleado_id = isset($_SESSION['empleado_id']) ? (int)$_SESSION['empleado_id'] : 0;
        
        if ($empleado_id > 0) {
            global $pdo;
            if (!isset($pdo)) {
                require_once __DIR__ . '/conexion.php';
            }
            
            $stmt = $pdo->prepare("SELECT empleado_id FROM empleados_demograficos WHERE empleado_id = ? LIMIT 1");
            $stmt->execute([$empleado_id]);
            
            if (!$stmt->fetch()) {
                header('Location: mi_perfil.php?completar_demograficos=1');
                exit;
            }
        }
    }
}
