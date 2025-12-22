<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/password_reset.php';

$token = $_POST['token'] ?? '';
$p1 = $_POST['password1'] ?? '';
$p2 = $_POST['password2'] ?? '';

$valid = pr_validate_token($token);
if (!$valid) {
    header('Location: resetear.php?token=' . urlencode($token));
    exit;
}

if ($p1 !== $p2) {
    header('Location: resetear.php?token=' . urlencode($token));
    exit;
}

[$ok, $msg] = pr_update_password((int)$valid['usuario_id'], $p1);
if (!$ok) {
    // Podrías pasar el mensaje por sesión; aquí simplifico
    header('Location: resetear.php?token=' . urlencode($token));
    exit;
}

pr_mark_used((int)$valid['reset_id']);

header('Location: login.php?reset=1');
exit;
