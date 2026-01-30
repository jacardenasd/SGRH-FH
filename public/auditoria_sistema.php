<?php
// public/auditoria_sistema.php
// Script de auditoría para verificar la integridad del sistema antes de arrancar

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';

// Solo admin puede ejecutar esto
session_start();
if (empty($_SESSION['es_admin_empresa']) && empty($_GET['bypass'])) {
    die('Solo administradores pueden ejecutar la auditoría.');
}

set_time_limit(300); // 5 minutos

$errores = [];
$advertencias = [];
$exitos = [];

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// ==========================================
// 1. VERIFICAR TABLAS PRINCIPALES
// ==========================================
$tablas_requeridas = [
    'usuarios', 'usuario_empresas', 'empleados', 'empleados_demograficos',
    'empresas', 'roles', 'permisos', 'usuario_roles', 'rol_permisos',
    'org_unidades', 'org_adscripciones', 'org_puestos',
    'clima_periodos', 'clima_elegibles', 'clima_respuestas',
    'contratos_documentos', 'bitacora'
];

foreach ($tablas_requeridas as $tabla) {
    try {
        $stmt = $pdo->query("SELECT 1 FROM `$tabla` LIMIT 1");
        $exitos[] = "✓ Tabla <strong>$tabla</strong> existe";
    } catch (Exception $e) {
        $errores[] = "✗ Tabla <strong>$tabla</strong> NO existe o no es accesible";
    }
}

// ==========================================
// 2. VERIFICAR COLUMNAS CRÍTICAS
// ==========================================
$verificaciones_columnas = [
    ['tabla' => 'empleados', 'columna' => 'curp', 'tipo' => 'char(18)'],
    ['tabla' => 'empleados', 'columna' => 'no_emp', 'tipo' => 'varchar'],
    ['tabla' => 'empleados', 'columna' => 'salario_diario', 'tipo' => 'decimal'],
    ['tabla' => 'empleados', 'columna' => 'salario_mensual', 'tipo' => 'decimal'],
    ['tabla' => 'empleados', 'columna' => 'puesto_nombre', 'tipo' => 'varchar'],
    ['tabla' => 'usuarios', 'columna' => 'nombre', 'tipo' => 'varchar'],
    ['tabla' => 'usuarios', 'columna' => 'apellido_paterno', 'tipo' => 'varchar'],
    ['tabla' => 'usuarios', 'columna' => 'rfc_base', 'tipo' => 'char(10)'],
    ['tabla' => 'usuario_empresas', 'columna' => 'es_admin', 'tipo' => 'tinyint'],
];

foreach ($verificaciones_columnas as $vc) {
    try {
        $stmt = $pdo->query("SHOW COLUMNS FROM `{$vc['tabla']}` LIKE '{$vc['columna']}'");
        if ($stmt->fetch()) {
            $exitos[] = "✓ Columna <strong>{$vc['tabla']}.{$vc['columna']}</strong> existe";
        } else {
            $errores[] = "✗ Columna <strong>{$vc['tabla']}.{$vc['columna']}</strong> NO existe";
        }
    } catch (Exception $e) {
        $errores[] = "✗ Error verificando {$vc['tabla']}.{$vc['columna']}: " . $e->getMessage();
    }
}

// ==========================================
// 3. VERIFICAR QUE NO EXISTEN COLUMNAS OBSOLETAS
// ==========================================
$columnas_no_deben_existir = [
    ['tabla' => 'empleados_demograficos', 'columna' => 'correo'],
    ['tabla' => 'empleados_demograficos', 'columna' => 'telefono'],
    ['tabla' => 'empleados_demograficos', 'columna' => 'sexo'],
    ['tabla' => 'empleados_demograficos', 'columna' => 'fecha_nacimiento'],
];

foreach ($columnas_no_deben_existir as $vc) {
    try {
        $stmt = $pdo->query("SHOW COLUMNS FROM `{$vc['tabla']}` LIKE '{$vc['columna']}'");
        if ($stmt->fetch()) {
            $advertencias[] = "⚠ Columna obsoleta <strong>{$vc['tabla']}.{$vc['columna']}</strong> todavía existe (debería haberse eliminado)";
        } else {
            $exitos[] = "✓ Columna obsoleta <strong>{$vc['tabla']}.{$vc['columna']}</strong> correctamente eliminada";
        }
    } catch (Exception $e) {
        // Tabla no existe, está bien
    }
}

// ==========================================
// 4. VERIFICAR DATOS BÁSICOS
// ==========================================
try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM empresas WHERE estatus = 1");
    $row = $stmt->fetch();
    if ($row['total'] > 0) {
        $exitos[] = "✓ Hay {$row['total']} empresa(s) activa(s) en el sistema";
    } else {
        $errores[] = "✗ No hay empresas activas en el sistema";
    }
} catch (Exception $e) {
    $errores[] = "✗ Error verificando empresas: " . $e->getMessage();
}

try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM usuarios WHERE estatus = 'activo'");
    $row = $stmt->fetch();
    if ($row['total'] > 0) {
        $exitos[] = "✓ Hay {$row['total']} usuario(s) activo(s)";
    } else {
        $advertencias[] = "⚠ No hay usuarios activos";
    }
} catch (Exception $e) {
    $errores[] = "✗ Error verificando usuarios: " . $e->getMessage();
}

try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM roles WHERE estatus = 1");
    $row = $stmt->fetch();
    if ($row['total'] > 0) {
        $exitos[] = "✓ Hay {$row['total']} rol(es) configurado(s)";
    } else {
        $advertencias[] = "⚠ No hay roles configurados";
    }
} catch (Exception $e) {
    $errores[] = "✗ Error verificando roles: " . $e->getMessage();
}

// ==========================================
// 5. VERIFICAR RELACIONES CRÍTICAS
// ==========================================
try {
    $stmt = $pdo->query("
        SELECT COUNT(*) as total 
        FROM usuario_empresas ue 
        INNER JOIN usuarios u ON u.usuario_id = ue.usuario_id 
        WHERE u.estatus = 'activo'
    ");
    $row = $stmt->fetch();
    if ($row['total'] > 0) {
        $exitos[] = "✓ Hay {$row['total']} relación(es) usuario-empresa activa(s)";
    } else {
        $advertencias[] = "⚠ No hay relaciones usuario-empresa";
    }
} catch (Exception $e) {
    $errores[] = "✗ Error verificando relaciones usuario-empresa: " . $e->getMessage();
}

// ==========================================
// 6. VERIFICAR ARCHIVOS CRÍTICOS
// ==========================================
$archivos_criticos = [
    __DIR__ . '/../includes/config.php',
    __DIR__ . '/../includes/conexion.php',
    __DIR__ . '/../includes/guard.php',
    __DIR__ . '/../includes/permisos.php',
    __DIR__ . '/../includes/auth.php',
    __DIR__ . '/login.php',
    __DIR__ . '/dashboard.php',
];

foreach ($archivos_criticos as $archivo) {
    if (file_exists($archivo)) {
        $exitos[] = "✓ Archivo <strong>" . basename($archivo) . "</strong> existe";
    } else {
        $errores[] = "✗ Archivo crítico <strong>" . basename($archivo) . "</strong> NO existe";
    }
}

// ==========================================
// 7. VERIFICAR CONSULTAS SQL PROBLEMÁTICAS
// ==========================================
$archivos_php = glob(__DIR__ . '/*.php');
// Excluir el propio archivo de auditoría
$archivos_php = array_filter($archivos_php, function($archivo) {
    return basename($archivo) !== 'auditoria_sistema.php';
});

$referencias_problematicas = [
    'curp_extraer_sexo' => 'Función SQL que debe reemplazarse por PHP',
    'curp_extraer_fecha_nacimiento' => 'Función SQL que debe reemplazarse por PHP',
    'curp_extraer_nacionalidad' => 'Función SQL que debe reemplazarse por PHP',
    'curp_extraer_lugar_nacimiento' => 'Función SQL que debe reemplazarse por PHP',
    'ed.correo' => 'Columna obsoleta en empleados_demograficos',
    'ed.telefono' => 'Columna obsoleta en empleados_demograficos',
    'ed.sexo' => 'Columna obsoleta en empleados_demograficos',
    'ed.fecha_nacimiento' => 'Columna obsoleta en empleados_demograficos',
];

$archivos_con_problemas = [];
foreach ($archivos_php as $archivo) {
    $contenido = file_get_contents($archivo);
    foreach ($referencias_problematicas as $patron => $descripcion) {
        if (stripos($contenido, $patron) !== false) {
            $archivos_con_problemas[] = basename($archivo) . " contiene: <strong>$patron</strong> ($descripcion)";
        }
    }
}

if (empty($archivos_con_problemas)) {
    $exitos[] = "✓ No se encontraron referencias SQL problemáticas en archivos PHP";
} else {
    foreach ($archivos_con_problemas as $problema) {
        $advertencias[] = "⚠ " . $problema;
    }
}

// ==========================================
// 8. VERIFICAR PERMISOS
// ==========================================
try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM permisos");
    $row = $stmt->fetch();
    if ($row['total'] > 0) {
        $exitos[] = "✓ Hay {$row['total']} permiso(s) definido(s)";
    } else {
        $advertencias[] = "⚠ No hay permisos definidos en el sistema";
    }
} catch (Exception $e) {
    $errores[] = "✗ Error verificando permisos: " . $e->getMessage();
}

// ==========================================
// GENERAR REPORTE HTML
// ==========================================
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auditoría del Sistema SGRH</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #f5f7fa;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 32px;
        }
        .subtitle {
            color: #7f8c8d;
            margin-bottom: 30px;
            font-size: 16px;
        }
        .summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        .summary-card {
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .summary-card.success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
        }
        .summary-card.warning {
            background: #fff3cd;
            border: 1px solid #ffeeba;
        }
        .summary-card.error {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
        }
        .summary-card h2 {
            font-size: 42px;
            margin-bottom: 5px;
        }
        .summary-card p {
            font-size: 14px;
            color: #495057;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h3 {
            color: #34495e;
            margin-bottom: 15px;
            font-size: 20px;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 8px;
        }
        .item {
            padding: 10px 15px;
            margin-bottom: 8px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }
        .item.success {
            background: #d4edda;
            color: #155724;
        }
        .item.warning {
            background: #fff3cd;
            color: #856404;
        }
        .item.error {
            background: #f8d7da;
            color: #721c24;
        }
        .item-icon {
            margin-right: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .actions {
            margin-top: 40px;
            padding: 20px;
            background: #e3f2fd;
            border-radius: 8px;
            border-left: 4px solid #2196f3;
        }
        .actions h3 {
            color: #1976d2;
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            margin-top: 10px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #2980b9;
        }
        .btn-success {
            background: #27ae60;
        }
        .btn-success:hover {
            background: #229954;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Auditoría del Sistema SGRH</h1>
        <p class="subtitle">Reporte generado el <?php echo date('d/m/Y H:i:s'); ?></p>

        <!-- Resumen -->
        <div class="summary">
            <div class="summary-card success">
                <h2><?php echo count($exitos); ?></h2>
                <p>Verificaciones exitosas</p>
            </div>
            <div class="summary-card warning">
                <h2><?php echo count($advertencias); ?></h2>
                <p>Advertencias</p>
            </div>
            <div class="summary-card error">
                <h2><?php echo count($errores); ?></h2>
                <p>Errores críticos</p>
            </div>
        </div>

        <?php if (!empty($errores)): ?>
        <div class="section">
            <h3>❌ Errores Críticos (Deben corregirse antes de arrancar)</h3>
            <?php foreach ($errores as $error): ?>
            <div class="item error">
                <span class="item-icon">✗</span>
                <span><?php echo $error; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($advertencias)): ?>
        <div class="section">
            <h3>⚠️ Advertencias (Revisar antes de producción)</h3>
            <?php foreach ($advertencias as $advertencia): ?>
            <div class="item warning">
                <span class="item-icon">⚠</span>
                <span><?php echo $advertencia; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="section">
            <h3>✅ Verificaciones Exitosas</h3>
            <?php foreach ($exitos as $exito): ?>
            <div class="item success">
                <span class="item-icon">✓</span>
                <span><?php echo $exito; ?></span>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="actions">
            <h3>📋 Próximos Pasos</h3>
            <?php if (count($errores) > 0): ?>
                <p><strong>⚠️ HAY ERRORES CRÍTICOS.</strong> Debes corregirlos antes de usar el sistema en producción.</p>
                <a href="#" onclick="window.print(); return false;" class="btn">Imprimir Reporte</a>
                <a href="auditoria_sistema.php" class="btn">Actualizar Auditoría</a>
            <?php elseif (count($advertencias) > 0): ?>
                <p><strong>✓ No hay errores críticos.</strong> Revisa las advertencias antes de continuar.</p>
                <a href="dashboard.php" class="btn btn-success">Ir al Dashboard</a>
                <a href="auditoria_sistema.php" class="btn">Actualizar Auditoría</a>
            <?php else: ?>
                <p><strong>🎉 Sistema listo para producción!</strong> Todas las verificaciones pasaron exitosamente.</p>
                <a href="dashboard.php" class="btn btn-success">Ir al Dashboard</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
