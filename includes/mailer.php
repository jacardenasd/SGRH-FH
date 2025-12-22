<?php
require_once __DIR__ . '/config.php';

function enviar_correo($to, $subject, $html) {

    // Siempre intentamos modo archivo en DEV
    if (defined('APP_ENV') && APP_ENV === 'dev') {

        // Ruta absoluta al proyecto (1 nivel arriba de /includes)
        $baseDir = realpath(__DIR__ . '/..'); // /sgrh
        $dir = $baseDir . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'mails';

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $safeTo = preg_replace('/[^a-zA-Z0-9_\-\.@]/', '_', (string)$to);
        $file = $dir . DIRECTORY_SEPARATOR . date('Ymd_His') . '__' . $safeTo . '.html';

        $content = "<h3>TO: " . htmlspecialchars($to) . "</h3>"
                 . "<h3>SUBJECT: " . htmlspecialchars($subject) . "</h3><hr>"
                 . $html;

        $ok = @file_put_contents($file, $content);

        // Log para depurar
        @error_log('[SGRH][mailer] dir=' . $dir);
        @error_log('[SGRH][mailer] file=' . $file);
        @error_log('[SGRH][mailer] write=' . ($ok !== false ? 'OK' : 'FAIL'));

        return ($ok !== false);
    }

    // PROD (si lo usas después)
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: SGRH <no-reply@tu-dominio.com>\r\n";
    return mail($to, $subject, $html, $headers);
}
