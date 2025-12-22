<?php
require_once __DIR__ . '/../includes/mailer.php';

$ok = enviar_correo('test@local', 'Prueba SGRH', '<p>Hola. Esto es una prueba.</p>');

echo $ok ? 'OK' : 'FAIL';
