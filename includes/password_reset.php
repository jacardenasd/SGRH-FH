<?php
// includes/password_reset.php
require_once __DIR__ . '/conexion.php';

function pr_find_user_by_rfc_noemp($rfc_raw, $no_emp) {
    global $pdo;

    $rfc = strtoupper(trim($rfc_raw));
    $rfc = preg_replace('/[^A-Z0-9]/', '', $rfc);
    $rfc = substr($rfc, 0, 10);
    $no_emp = trim($no_emp);

    $sql = "
      SELECT u.usuario_id, u.estatus, u.empleado_id,
             COALESCE(e.correo, u.correo) AS correo
      FROM usuarios u
      LEFT JOIN empleados e ON e.empleado_id = u.empleado_id
      WHERE u.rfc_base = :rfc AND u.no_emp = :no_emp
      LIMIT 1
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':rfc' => $rfc, ':no_emp' => $no_emp]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function pr_create_token($usuario_id, $ip = null) {
    global $pdo;

    $token = bin2hex(random_bytes(32)); // 64 chars
    $token_hash = hash('sha256', $token);

    // Vigencia: 60 minutos
    $expires_at = (new DateTime('+60 minutes'))->format('Y-m-d H:i:s');

    // Invalida tokens anteriores no usados (opcional, recomendado)
    $stmt = $pdo->prepare("UPDATE password_resets SET used_at = NOW() WHERE usuario_id = :uid AND used_at IS NULL");
    $stmt->execute([':uid' => (int)$usuario_id]);

    $stmt = $pdo->prepare("
      INSERT INTO password_resets (usuario_id, token_hash, expires_at, requested_ip)
      VALUES (:uid, :th, :exp, :ip)
    ");
    $stmt->execute([
        ':uid' => (int)$usuario_id,
        ':th'  => $token_hash,
        ':exp' => $expires_at,
        ':ip'  => $ip
    ]);

    return $token; // token plano solo para enviar por correo
}

function pr_validate_token($token) {
    global $pdo;

    $token = trim($token);
    if ($token === '' || strlen($token) < 20) return false;

    $token_hash = hash('sha256', $token);

    $stmt = $pdo->prepare("
      SELECT reset_id, usuario_id, expires_at, used_at
      FROM password_resets
      WHERE token_hash = :th
      LIMIT 1
    ");
    $stmt->execute([':th' => $token_hash]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) return false;
    if (!empty($row['used_at'])) return false;
    if (strtotime($row['expires_at']) < time()) return false;

    return $row; // contiene reset_id y usuario_id
}

function pr_mark_used($reset_id) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE password_resets SET used_at = NOW() WHERE reset_id = :rid");
    $stmt->execute([':rid' => (int)$reset_id]);
}

function pr_update_password($usuario_id, $new_password) {
    global $pdo;

    $new_password = trim($new_password);
    if (strlen($new_password) < 8 || !preg_match('/[A-Za-z]/', $new_password) || !preg_match('/[0-9]/', $new_password)) {
        return [false, 'La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.'];
    }

    $hash = password_hash($new_password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("
      UPDATE usuarios
      SET password_hash = :h,
          debe_cambiar_pass = 0,
          pass_cambiada = 1
      WHERE usuario_id = :uid
    ");
    $stmt->execute([':h' => $hash, ':uid' => (int)$usuario_id]);

    return [true, 'OK'];
}
