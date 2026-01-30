<?php
// CSRF helper
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_input() {
    $t = csrf_token();
    echo '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($t, ENT_QUOTES, 'UTF-8') . '">';
}

function csrf_validate() {
    $session = $_SESSION['csrf_token'] ?? '';
    $posted  = $_POST['csrf_token'] ?? '';
    if (!$session || !$posted || !hash_equals($session, $posted)) {
        http_response_code(400);
        exit('Solicitud inválida (CSRF)');
    }
}
