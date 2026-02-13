<?php
/**
 * Script de Verificación Rápida - Módulo de Pagos a Proveedores
 * Funcionalidades: Documentos e Historial
 * 
 * Ejecutar desde: http://localhost/sgrh/public/test_pagos_funcionalidad.php
 */

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

$empresa_id = (int)($_SESSION['empresa_id'] ?? 1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test - Módulo de Pagos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
        .test-item { margin: 20px 0; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        .success { background: #d4edda; border-color: #c3e6cb; color: #155724; }
        .error { background: #f8d7da; border-color: #f5c6cb; color: #721c24; }
        .info { background: #d1ecf1; border-color: #bee5eb; color: #0c5460; }
        .warning { background: #fff3cd; border-color: #ffeaa7; color: #856404; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 4px; overflow: auto; }
        code { background: #e9ecef; padding: 2px 6px; border-radius: 3px; font-family: monospace; }
        .btn { padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; display: inline-block; margin: 5px; }
        .btn:hover { background: #0056b3; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; font-weight: bold; }
        .badge { padding: 4px 8px; border-radius: 3px; font-size: 12px; display: inline-block; }
        .badge-success { background: #28a745; color: white; }
        .badge-danger { background: #dc3545; color: white; }
        .badge-info { background: #17a2b8; color: white; }
    </style>
</head>
<body>

<div class="container">
    <h2>🧪 Verificación de Funcionalidad - Pagos a Proveedores</h2>
    
    <?php
    $tests_passed = 0;
    $tests_failed = 0;
    ?>

    <!-- Test 1: Verificar tablas -->
    <div class="test-item">
        <h3>1️⃣ Verificar Estructura de Base de Datos</h3>
        <?php
        $tablas_requeridas = [
            'proveedores',
            'pago_proveedores',
            'pago_proveedores_documentos',
            'pago_proveedores_historial'
        ];
        
        $tablas_ok = true;
        foreach ($tablas_requeridas as $tabla) {
            try {
                $stmt = $pdo->query("SHOW TABLES LIKE '$tabla'");
                if ($stmt->rowCount() > 0) {
                    echo "<span class='badge badge-success'>✓ $tabla</span> ";
                    $tests_passed++;
                } else {
                    echo "<span class='badge badge-danger'>✗ $tabla (NO EXISTE)</span> ";
                    $tablas_ok = false;
                    $tests_failed++;
                }
            } catch (Exception $e) {
                echo "<span class='badge badge-danger'>✗ $tabla (ERROR)</span> ";
                $tablas_ok = false;
                $tests_failed++;
            }
        }
        ?>
        <br><br>
        <?php if ($tablas_ok): ?>
            <div class="success">✅ Todas las tablas existen correctamente</div>
        <?php else: ?>
            <div class="error">❌ Faltan tablas. Ejecutar migración: <code>migrations/05_tramite_pago_proveedores.sql</code></div>
        <?php endif; ?>
    </div>

    <!-- Test 2: Verificar directorio de almacenamiento -->
    <div class="test-item">
        <h3>2️⃣ Verificar Directorio de Almacenamiento</h3>
        <?php
        $storage_dir = __DIR__ . '/../storage/pagos_documentos/';
        if (is_dir($storage_dir)) {
            if (is_writable($storage_dir)) {
                echo "<div class='success'>✅ Directorio existe y es escribible: <code>$storage_dir</code></div>";
                $tests_passed++;
            } else {
                echo "<div class='warning'>⚠️ Directorio existe pero NO es escribible. Permisos: " . substr(sprintf('%o', fileperms($storage_dir)), -4) . "</div>";
                $tests_failed++;
            }
        } else {
            echo "<div class='error'>❌ Directorio NO existe. Se creará automáticamente al subir el primer documento.</div>";
            $tests_failed++;
        }
        ?>
    </div>

    <!-- Test 3: Verificar archivos PHP -->
    <div class="test-item">
        <h3>3️⃣ Verificar Archivos del Sistema</h3>
        <?php
        $archivos_requeridos = [
            'admin_pagos_proveedores.php' => 'Interfaz principal',
            'get_pago_documentos.php' => 'API obtener documentos',
            'get_pago_historial.php' => 'API obtener historial',
            'download_documento.php' => 'Descarga de documentos'
        ];
        
        $archivos_ok = true;
        foreach ($archivos_requeridos as $archivo => $desc) {
            if (file_exists(__DIR__ . '/' . $archivo)) {
                echo "<span class='badge badge-success'>✓ $archivo</span> $desc<br>";
                $tests_passed++;
            } else {
                echo "<span class='badge badge-danger'>✗ $archivo</span> $desc<br>";
                $archivos_ok = false;
                $tests_failed++;
            }
        }
        ?>
        <br>
        <?php if ($archivos_ok): ?>
            <div class="success">✅ Todos los archivos necesarios están presentes</div>
        <?php else: ?>
            <div class="error">❌ Faltan archivos del sistema</div>
        <?php endif; ?>
    </div>

    <!-- Test 4: Verificar datos de prueba -->
    <div class="test-item">
        <h3>4️⃣ Datos de Prueba</h3>
        <?php
        // Verificar si hay pagos
        $stmt = $pdo->prepare("SELECT COUNT(*) as total FROM pago_proveedores WHERE empresa_id = ?");
        $stmt->execute([$empresa_id]);
        $total_pagos = $stmt->fetch()['total'];
        
        // Verificar documentos
        $stmt = $pdo->query("SELECT COUNT(*) as total FROM pago_proveedores_documentos");
        $total_docs = $stmt->fetch()['total'];
        
        // Verificar historial
        $stmt = $pdo->query("SELECT COUNT(*) as total FROM pago_proveedores_historial");
        $total_hist = $stmt->fetch()['total'];
        ?>
        
        <table>
            <tr>
                <th>Elemento</th>
                <th>Cantidad</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>Solicitudes de Pago</td>
                <td><strong><?php echo $total_pagos; ?></strong></td>
                <td>
                    <?php if ($total_pagos > 0): ?>
                        <span class="badge badge-success">✓ Datos disponibles</span>
                    <?php else: ?>
                        <span class="badge badge-info">ℹ Sin datos (crear solicitud de prueba)</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>Documentos Adjuntos</td>
                <td><strong><?php echo $total_docs; ?></strong></td>
                <td>
                    <?php if ($total_docs > 0): ?>
                        <span class="badge badge-success">✓ Documentos subidos</span>
                    <?php else: ?>
                        <span class="badge badge-info">ℹ Sin documentos (subir documento de prueba)</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>Registros de Historial</td>
                <td><strong><?php echo $total_hist; ?></strong></td>
                <td>
                    <?php if ($total_hist > 0): ?>
                        <span class="badge badge-success">✓ Historial registrado</span>
                    <?php else: ?>
                        <span class="badge badge-info">ℹ Sin historial (cambiar estatus de prueba)</span>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        
        <?php
        if ($total_pagos > 0) {
            echo "<div class='success'>✅ Sistema con datos. Listo para probar funcionalidad.</div>";
            $tests_passed++;
        } else {
            echo "<div class='info'>ℹ️ Crear una solicitud de pago de prueba para verificar las funcionalidades.</div>";
        }
        ?>
    </div>

    <!-- Test 5: Ejemplo de uso -->
    <div class="test-item">
        <h3>5️⃣ Prueba Manual Recomendada</h3>
        <div class="info">
            <p><strong>Para probar la funcionalidad completa, sigue estos pasos:</strong></p>
            <ol>
                <li>Ir al <a href="admin_pagos_proveedores.php" class="btn">Módulo de Pagos</a></li>
                <li><strong>Crear una solicitud de pago de prueba</strong> (si no existe ninguna)</li>
                <li><strong>Subir documento:</strong> Clic en el botón 📄 → Seleccionar tipo "Factura" → Subir un PDF de prueba</li>
                <li><strong>Cambiar estatus:</strong> Clic en el botón 📝 → Cambiar de "Borrador" a "Pendiente" → Agregar comentario "Prueba de historial"</li>
                <li><strong>Ver historial:</strong> Clic en el botón ⏱️ → Verificar que aparece el cambio de estatus</li>
                <li><strong>Ver documentos:</strong> Clic en el botón 📄 → Verificar que aparece el documento subido</li>
                <li><strong>Descargar documento:</strong> Clic en el botón de descarga 📥</li>
            </ol>
        </div>
    </div>

    <!-- Resumen -->
    <div class="test-item">
        <h3>📊 Resumen de Pruebas</h3>
        <table>
            <tr>
                <th>Pruebas Exitosas</th>
                <td><span class="badge badge-success"><?php echo $tests_passed; ?></span></td>
            </tr>
            <tr>
                <th>Pruebas Fallidas</th>
                <td><span class="badge badge-danger"><?php echo $tests_failed; ?></span></td>
            </tr>
            <tr>
                <th>Estado General</th>
                <td>
                    <?php if ($tests_failed === 0): ?>
                        <span class="badge badge-success">✅ Sistema Listo</span>
                    <?php else: ?>
                        <span class="badge badge-danger">⚠️ Requiere Atención</span>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>

    <!-- Enlaces útiles -->
    <div class="test-item info">
        <h3>🔗 Enlaces Útiles</h3>
        <a href="admin_pagos_proveedores.php" class="btn">💰 Módulo de Pagos</a>
        <a href="../mds/PAGOS_PROVEEDORES_README.md" class="btn">📖 Documentación</a>
        <a href="../mds/NUEVA_FUNCIONALIDAD_DOCUMENTOS_HISTORIAL.md" class="btn">📄 Guía de Nueva Funcionalidad</a>
    </div>

</div>

</body>
</html>
