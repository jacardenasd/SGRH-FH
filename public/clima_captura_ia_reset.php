<?php
// public/clima_captura_ia_reset.php
// Limpia el formulario y recarga la página sin datos de OCR

session_start();

// Limpiar cookie de sesión si existe
if (isset($_SESSION['ocr_resultados'])) {
    unset($_SESSION['ocr_resultados']);
}

// Redirigir a la página principal sin parámetros
header('Location: clima_captura_ia.php');
exit;
?>
