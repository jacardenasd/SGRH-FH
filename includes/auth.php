<?php
// includes/auth.php
require_once __DIR__ . '/conexion.php';
require_once __DIR__ . '/permisos.php';

function normaliza_rfc_base($rfc_raw) {
    $r = strtoupper(trim((string)$rfc_raw));
    $r = preg_replace('/[^A-Z0-9]/', '', $r); // quita guiones/espacios
    return substr($r, 0, 10);
}

/**
 * Registrar intento de acceso al sistema
 */
function registrar_acceso($usuario_id, $rfc_intento, $exitoso, $mensaje = null, $empresa_id = null) {
    global $pdo;
    
    $ip = $_SERVER['REMOTE_ADDR'] ?? null;
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? substr($_SERVER['HTTP_USER_AGENT'], 0, 255) : null;
    
    try {
        $stmt = $pdo->prepare("
            INSERT INTO usuarios_accesos 
            (usuario_id, rfc_intento, exitoso, ip_address, user_agent, empresa_id, mensaje)
            VALUES 
            (:usuario_id, :rfc_intento, :exitoso, :ip, :user_agent, :empresa_id, :mensaje)
        ");
        
        $stmt->execute([
            ':usuario_id' => $usuario_id,
            ':rfc_intento' => $rfc_intento,
            ':exitoso' => $exitoso ? 1 : 0,
            ':ip' => $ip,
            ':user_agent' => $user_agent,
            ':empresa_id' => $empresa_id,
            ':mensaje' => $mensaje
        ]);
    } catch (Exception $e) {
        // Registrar error pero no interrumpir el flujo de login
        error_log("Error al registrar acceso: " . $e->getMessage());
    }
}

/**
 * Login con RFC + password.
 * Nota: el password inicial puede ser NoEmp, pero ya NO se pide NoEmp en login.
 *
 * @return array [bool $ok, string $msg]
 */
function login_intento($rfc_raw, $password) {
    global $pdo;

    $rfc_base = normaliza_rfc_base($rfc_raw);
    $password = (string)$password;

    if (strlen($rfc_base) !== 10 || $password === '') {
        // Registrar intento fallido
        registrar_acceso(null, $rfc_base, false, 'RFC o contraseña inválidos');
        return [false, 'RFC o contraseña inválidos.'];
    }

    // Traer usuarios activos por RFC base
    // (Puede haber más de uno en casos raros; se resolverá por match del password hash)
    $sql = "SELECT usuario_id, no_emp, rfc_base, nombre, apellido_paterno, apellido_materno,
                   password_hash, debe_cambiar_pass, estatus
            FROM usuarios
            WHERE rfc_base = :rfc_base
              AND estatus = 'activo'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':rfc_base' => $rfc_base]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$rows) {
        // Registrar intento fallido - usuario no encontrado
        registrar_acceso(null, $rfc_base, false, 'Credenciales incorrectas');
        return [false, 'Credenciales incorrectas.'];
    }

    // Buscar el registro que haga match por contraseña
    $u_match = null;
    foreach ($rows as $u) {
        if (!empty($u['password_hash']) && password_verify($password, $u['password_hash'])) {
            if ($u_match !== null) {
                // Caso extremo: dos usuarios con mismo RFC base y misma contraseña
                registrar_acceso(null, $rfc_base, false, 'Conflicto de autenticación');
                return [false, 'No fue posible autenticar. Contacta a RH.'];
            }
            $u_match = $u;
        }
    }

    if (!$u_match) {
        // Registrar intento fallido - contraseña incorrecta
        // Intentamos obtener el usuario_id del primer registro para registrar el intento
        $usuario_id_intento = isset($rows[0]['usuario_id']) ? (int)$rows[0]['usuario_id'] : null;
        registrar_acceso($usuario_id_intento, $rfc_base, false, 'Contraseña incorrecta');
        return [false, 'Credenciales incorrectas.'];
    }

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    session_regenerate_id(true);

    $_SESSION['usuario_id'] = (int)$u_match['usuario_id'];
    $_SESSION['no_emp'] = $u_match['no_emp'];
    $_SESSION['rfc_base'] = $u_match['rfc_base'];
    $_SESSION['nombre_usuario'] = $u_match['nombre'];
    $_SESSION['nombre_usuario_completo'] = trim(
        $u_match['nombre'] . ' ' . ($u_match['apellido_paterno'] ?? '') . ' ' . ($u_match['apellido_materno'] ?? '')
    );

    $_SESSION['debe_cambiar_pass'] = (int)$u_match['debe_cambiar_pass'];

    // Cargar empresas a sesión
    $stmt2 = $pdo->prepare("
        SELECT ue.empresa_id, ue.empleado_id, e.nombre, e.alias, ue.es_admin
        FROM usuario_empresas ue
        INNER JOIN empresas e ON e.empresa_id = ue.empresa_id
        WHERE ue.usuario_id = :uid AND ue.estatus = 1 AND e.estatus = 1
        ORDER BY e.nombre
    ");
    $stmt2->execute([':uid' => (int)$u_match['usuario_id']]);
    $empresas = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['empresas'] = $empresas;

    // Determinar empresa_id para el registro
    $empresa_id_acceso = null;
    
    // Si tiene 1 empresa, setearla
    if (count($empresas) === 1) {
        $_SESSION['empresa_id'] = (int)$empresas[0]['empresa_id'];
        $_SESSION['empresa_nombre'] = $empresas[0]['nombre'];
        $_SESSION['empresa_alias'] = $empresas[0]['alias'];
        $_SESSION['es_admin_empresa'] = (int)$empresas[0]['es_admin'];
        $_SESSION['empleado_id'] = $empresas[0]['empleado_id'] ? (int)$empresas[0]['empleado_id'] : null;
        
        $empresa_id_acceso = (int)$empresas[0]['empresa_id'];

        // Cargar permisos
        cargar_permisos_sesion((int)$u_match['usuario_id']);
    } else {
        // limpiar selección previa
        unset($_SESSION['empresa_id'], $_SESSION['empresa_nombre'], $_SESSION['empresa_alias'], $_SESSION['es_admin_empresa']);

        // Aún no hay empresa seleccionada
        $_SESSION['permisos'] = [];
    }

    // Registrar acceso exitoso
    registrar_acceso(
        (int)$u_match['usuario_id'], 
        $rfc_base, 
        true, 
        'Acceso exitoso',
        $empresa_id_acceso
    );

    return [true, 'OK'];
}

function logout() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
}

function cambiar_password($usuario_id, $new_password) {
    global $pdo;
    $new_password = trim((string)$new_password);

    if (strlen($new_password) < 8 || !preg_match('/[A-Za-z]/', $new_password) || !preg_match('/[0-9]/', $new_password)) {
        return [false, 'La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.'];
    }

    $hash = password_hash($new_password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("
        UPDATE usuarios
        SET password_hash = :h, debe_cambiar_pass = 0, pass_cambiada = 1
        WHERE usuario_id = :uid
    ");
    $stmt->execute([':h' => $hash, ':uid' => (int)$usuario_id]);

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['debe_cambiar_pass'] = 0;

    return [true, 'Contraseña actualizada.'];
}
