<?php


require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';

// Valores por defecto
$active_menu = 'dashboard';
$page_title      = isset($page_title) ? $page_title : 'Dashboard';
$breadcrumb_home = isset($breadcrumb_home) ? $breadcrumb_home : 'Home';
$breadcrumb_lvl1 = isset($breadcrumb_lvl1) ? $breadcrumb_lvl1 : null;


// Si esta pantalla requiere JS extra:
$extra_js = [
  'global_assets/js/demo_pages/dashboard.js'
];

include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';
include __DIR__ . '/../includes/layout/page_header.php';

?>

<!-- Aquí empieza tu contenido real -->
  <div class="content">
    <!-- contenido -->
  </div>

<?php
include __DIR__ . '/../includes/layout/footer.php';
?>


<?php
include __DIR__ . '/../includes/layout/scripts.php';
