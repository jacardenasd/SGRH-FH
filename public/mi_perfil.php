<?php
// public/mi_perfil.php

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';

require_login();
require_password_change_redirect();
require_empresa();

// $pdo debe venir desde includes/auth.php (incluido por guard.php)
if (!isset($pdo)) {
    die('No hay conexión a base de datos ($pdo). Revisa includes/auth.php.');
}

// Layout vars (alineado a tu page_header)
$active_menu     = 'mi_perfil';
$page_title      = 'Mi Perfil';
$breadcrumb_home = 'Home';
$breadcrumb_lvl1 = 'Cuenta';

$usuario_id = (int)$_SESSION['usuario_id'];
$empresa_id = (int)$_SESSION['empresa_id'];

function h($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

function alert_html($tipo, $mensaje) {
    return '<div class="alert alert-' . $tipo . '">' . $mensaje . '</div>';
}

// Helper: obtener empleado_id por usuario + empresa
function obtener_empleado_id($pdo, $usuario_id, $empresa_id) {
    $stmt = $pdo->prepare("
        SELECT empleado_id
        FROM usuario_empresas
        WHERE usuario_id = :usuario_id
          AND empresa_id = :empresa_id
          AND estatus = 1
        LIMIT 1
    ");
    $stmt->execute([
        ':usuario_id' => (int)$usuario_id,
        ':empresa_id' => (int)$empresa_id
    ]);
    $tmp = $stmt->fetchColumn();
    return $tmp ? (int)$tmp : null;
}

// Obtener empleado_id por empresa (desde sesión si ya está, si no, desde BD)
$empleado_id = null;
if (isset($_SESSION['empleado_id']) && (int)$_SESSION['empleado_id'] > 0) {
    $empleado_id = (int)$_SESSION['empleado_id'];
} else {
    $empleado_id = obtener_empleado_id($pdo, $usuario_id, $empresa_id);
    $_SESSION['empleado_id'] = $empleado_id;
}

// Cargar datos del usuario + relación usuario_empresa + empleado
$stmt = $pdo->prepare("
    SELECT
        u.usuario_id, u.no_emp, u.rfc_base, u.estatus,
        u.debe_cambiar_pass, u.pass_cambiada,
        ue.empresa_id, ue.es_admin, ue.estatus AS ue_estatus,
        ue.empleado_id,
        e.nombre, e.apellido_paterno, e.apellido_materno,
        e.es_activo, e.estatus AS estatus_empleado,
        e.foto_path,
        ed.correo, ed.telefono
    FROM usuarios u
    JOIN usuario_empresas ue
      ON ue.usuario_id = u.usuario_id
     AND ue.empresa_id = :empresa_id
     AND ue.estatus = 1
    LEFT JOIN empleados e
      ON e.empleado_id = ue.empleado_id
    LEFT JOIN empleados_demograficos ed
      ON ed.empleado_id = ue.empleado_id
    WHERE u.usuario_id = :usuario_id
    LIMIT 1
");
$stmt->execute([
    ':usuario_id' => $usuario_id,
    ':empresa_id' => $empresa_id
]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    die('No tienes acceso activo a la empresa seleccionada. Reingresa o selecciona empresa nuevamente.');
}

// Determinar si se puede editar (requiere empleado_id vinculado)
$puede_editar = (!empty($row['empleado_id']) && (int)$row['empleado_id'] > 0);

// Cargar datos demográficos (si existen)
$demograficos = null;
if ($puede_editar) {
    $stmt = $pdo->prepare("
        SELECT sexo, fecha_nacimiento, escolaridad, estado_civil, num_hijos
        FROM empleados_demograficos
        WHERE empleado_id = :empleado_id
        LIMIT 1
    ");
    $stmt->execute([':empleado_id' => (int)$row['empleado_id']]);
    $demograficos = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Detectar si viene del redirect de guard.php
$requiere_demograficos = isset($_GET['completar_demograficos']) && (int)$_GET['completar_demograficos'] === 1;

$mensaje = '';
$errores = [];

// Procesar POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Bloquear edición si no hay empleado vinculado
    if (!$puede_editar) {
        $errores[] = 'Tu usuario no está vinculado a un empleado para esta empresa. Contacta al administrador.';
    } else {

        // Campos de empleado
        $nombre           = isset($_POST['nombre']) ? trim((string)$_POST['nombre']) : '';
        $apellido_paterno = isset($_POST['apellido_paterno']) ? trim((string)$_POST['apellido_paterno']) : '';
        $apellido_materno = isset($_POST['apellido_materno']) ? trim((string)$_POST['apellido_materno']) : '';
        $correo           = isset($_POST['correo']) ? trim((string)$_POST['correo']) : '';
        $telefono         = isset($_POST['telefono']) ? trim((string)$_POST['telefono']) : '';

        if ($nombre === '') {
            $errores[] = 'El nombre es obligatorio.';
        }

        // Correo: opcional, pero si viene debe ser válido
        if ($correo !== '' && !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El correo no tiene un formato válido.';
        }

        // Validación lógica de correo por empresa (no hay UNIQUE en BD)
        if ($correo !== '') {
            $stmt = $pdo->prepare("
                SELECT COUNT(*)
                FROM empleados
                WHERE empresa_id = :empresa_id
                  AND correo = :correo
                  AND empleado_id <> :empleado_id
            ");
            $stmt->execute([
                ':empresa_id' => $empresa_id,
                ':correo' => $correo,
                ':empleado_id' => (int)$row['empleado_id']
            ]);
            if ((int)$stmt->fetchColumn() > 0) {
                $errores[] = 'El correo ya está en uso por otro empleado en esta empresa.';
            }
        }

        // =========================
        // CARGA DE FOTO (storage)
        // =========================
        if (isset($_FILES['foto']) && is_array($_FILES['foto']) && $_FILES['foto']['error'] !== UPLOAD_ERR_NO_FILE) {

            if ($_FILES['foto']['error'] !== UPLOAD_ERR_OK) {
                $errores[] = 'Error al subir la foto.';
            } else {

                $tmp  = $_FILES['foto']['tmp_name'];
                $size = (int)$_FILES['foto']['size'];

                // Máx 2MB
                if ($size > 2 * 1024 * 1024) {
                    $errores[] = 'La foto no debe exceder 2 MB.';
                } else {

                    $info = @getimagesize($tmp);
                    if ($info === false) {
                        $errores[] = 'El archivo no es una imagen válida.';
                    } else {

                        $mime = $info['mime'];
                        if (!in_array($mime, ['image/jpeg', 'image/png'])) {
                            $errores[] = 'Solo se permiten imágenes JPG o PNG.';
                        } else {

                            $ext = ($mime === 'image/png') ? 'png' : 'jpg';

                            $storage_base = realpath(__DIR__ . '/../storage');
                            if ($storage_base === false) {
                                $errores[] = 'No existe la carpeta storage.';
                            } else {

                                $dir = $storage_base . '/empleados_fotos/empresa_' . $empresa_id;
                                if (!is_dir($dir)) {
                                    @mkdir($dir, 0755, true);
                                }

                                if (!is_dir($dir)) {
                                    $errores[] = 'No se pudo crear la carpeta para fotos en storage.';
                                } else {

                                    $filename = 'emp_' . (int)$row['empleado_id'] . '.' . $ext;
                                    $destino  = $dir . '/' . $filename;

                                    if (!move_uploaded_file($tmp, $destino)) {
                                        $errores[] = 'No se pudo guardar la foto.';
                                    } else {
                                        // Ruta relativa dentro de storage
                                        $foto_path = 'empleados_fotos/empresa_' . $empresa_id . '/' . $filename;

                                        $stmt = $pdo->prepare("
                                            UPDATE empleados
                                            SET foto_path = :foto_path
                                            WHERE empleado_id = :empleado_id
                                              AND empresa_id = :empresa_id
                                            LIMIT 1
                                        ");
                                        $stmt->execute([
                                            ':foto_path' => $foto_path,
                                            ':empleado_id' => (int)$row['empleado_id'],
                                            ':empresa_id' => $empresa_id
                                        ]);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        // Cambio de contraseña
        $cambiar_password = isset($_POST['cambiar_password']) ? (int)$_POST['cambiar_password'] : 0;

        if ($cambiar_password === 1) {
            $pass_actual = isset($_POST['pass_actual']) ? (string)$_POST['pass_actual'] : '';
            $pass_nueva  = isset($_POST['pass_nueva']) ? (string)$_POST['pass_nueva'] : '';
            $pass_conf   = isset($_POST['pass_conf']) ? (string)$_POST['pass_conf'] : '';

            if ($pass_actual === '' || $pass_nueva === '' || $pass_conf === '') {
                $errores[] = 'Para cambiar contraseña, llena los 3 campos.';
            } elseif ($pass_nueva !== $pass_conf) {
                $errores[] = 'La nueva contraseña y la confirmación no coinciden.';
            } elseif (strlen($pass_nueva) < 8) {
                $errores[] = 'La nueva contraseña debe tener al menos 8 caracteres.';
            }
        }

        // Guardar si no hay errores
        if (count($errores) === 0) {

            // 1) Actualizar EMPLEADO (maestro RH)
            $stmt = $pdo->prepare("
                UPDATE empleados
                SET
                    nombre = :nombre,
                    apellido_paterno = :ap_paterno,
                    apellido_materno = :ap_materno
                WHERE empleado_id = :empleado_id
                  AND empresa_id = :empresa_id
                LIMIT 1
            ");
            $ok_emp = $stmt->execute([
                ':nombre' => $nombre,
                ':ap_paterno' => ($apellido_paterno === '' ? null : $apellido_paterno),
                ':ap_materno' => ($apellido_materno === '' ? null : $apellido_materno),
                ':empleado_id' => (int)$row['empleado_id'],
                ':empresa_id' => $empresa_id
            ]);

            if (!$ok_emp) {
                $errores[] = 'No se pudo actualizar la información del empleado.';
            }

            // 1.5) GUARDAR DATOS DEMOGRÁFICOS
            if (count($errores) === 0) {
                $sexo            = isset($_POST['sexo']) ? trim((string)$_POST['sexo']) : '';
                $fecha_nac       = isset($_POST['fecha_nacimiento']) ? trim((string)$_POST['fecha_nacimiento']) : '';
                $escolaridad     = isset($_POST['escolaridad']) ? trim((string)$_POST['escolaridad']) : '';
                $estado_civil    = isset($_POST['estado_civil']) ? trim((string)$_POST['estado_civil']) : '';
                $num_hijos_raw   = isset($_POST['num_hijos']) ? trim((string)$_POST['num_hijos']) : '';
                $num_hijos       = ($num_hijos_raw === '') ? 0 : (int)$num_hijos_raw;

                // Validar campos requeridos demográficos
                if ($sexo === '' || $fecha_nac === '' || $escolaridad === '' || $estado_civil === '') {
                    $errores[] = 'Los datos demográficos son obligatorios (sexo, fecha de nacimiento, escolaridad, estado civil).';
                }

                // Validar sexo enum
                if ($sexo !== '' && !in_array($sexo, ['M', 'F', 'X'])) {
                    $errores[] = 'El sexo debe ser M, F o X.';
                }

                // Validar fecha de nacimiento
                if ($fecha_nac !== '') {
                    $fecha_valida = DateTime::createFromFormat('Y-m-d', $fecha_nac);
                    if (!$fecha_valida || $fecha_valida->format('Y-m-d') !== $fecha_nac) {
                        $errores[] = 'La fecha de nacimiento no es válida.';
                    } else {
                        // Verificar edad razonable (entre 18 y 100 años)
                        $hoy = new DateTime();
                        $edad = $hoy->diff($fecha_valida)->y;
                        if ($edad < 18 || $edad > 100) {
                            $errores[] = 'La fecha de nacimiento debe corresponder a una edad entre 18 y 100 años.';
                        }
                    }
                }

                if (count($errores) === 0) {
                    // Verificar si ya existe registro demográfico
                    $stmt = $pdo->prepare("
                        SELECT COUNT(*) FROM empleados_demograficos WHERE empleado_id = :empleado_id
                    ");
                    $stmt->execute([':empleado_id' => (int)$row['empleado_id']]);
                    $existe = (int)$stmt->fetchColumn() > 0;

                    if ($existe) {
                        // UPDATE
                        $stmt = $pdo->prepare("
                            UPDATE empleados_demograficos
                            SET
                                sexo = :sexo,
                                fecha_nacimiento = :fecha_nac,
                                escolaridad = :escolaridad,
                                estado_civil = :estado_civil,
                                num_hijos = :num_hijos,
                                correo = :correo,
                                telefono = :telefono,
                                updated_at = NOW()
                            WHERE empleado_id = :empleado_id
                            LIMIT 1
                        ");
                    } else {
                        // INSERT
                        $stmt = $pdo->prepare("
                            INSERT INTO empleados_demograficos
                            (empleado_id, sexo, fecha_nacimiento, escolaridad, estado_civil, num_hijos, correo, telefono, created_at, updated_at)
                            VALUES
                            (:empleado_id, :sexo, :fecha_nac, :escolaridad, :estado_civil, :num_hijos, :correo, :telefono, NOW(), NOW())
                        ");
                    }

                    $ok_demo = $stmt->execute([
                        ':empleado_id' => (int)$row['empleado_id'],
                        ':sexo' => $sexo,
                        ':fecha_nac' => ($fecha_nac === '' ? null : $fecha_nac),
                        ':escolaridad' => $escolaridad,
                        ':estado_civil' => $estado_civil,
                        ':num_hijos' => $num_hijos,
                        ':correo' => ($correo === '' ? null : $correo),
                        ':telefono' => ($telefono === '' ? null : $telefono)
                    ]);

                    if (!$ok_demo) {
                        $errores[] = 'No se pudo guardar la información demográfica.';
                    }
                }
            }

            // 2) Actualizar PASSWORD (si aplica) en USUARIOS
            if (count($errores) === 0 && $cambiar_password === 1) {

                // traer hash actual
                $stmt = $pdo->prepare("SELECT password_hash FROM usuarios WHERE usuario_id = :usuario_id LIMIT 1");
                $stmt->execute([':usuario_id' => $usuario_id]);
                $hash_actual = (string)$stmt->fetchColumn();

                $pass_actual = (string)$_POST['pass_actual'];
                $pass_nueva  = (string)$_POST['pass_nueva'];

                if ($hash_actual === '' || !password_verify($pass_actual, $hash_actual)) {
                    $errores[] = 'La contraseña actual no es correcta.';
                } else {
                    $hash_nuevo = password_hash($pass_nueva, PASSWORD_DEFAULT);

                    $stmt = $pdo->prepare("
                        UPDATE usuarios
                        SET
                            password_hash = :password_hash,
                            debe_cambiar_pass = 0,
                            pass_cambiada = 1
                        WHERE usuario_id = :usuario_id
                        LIMIT 1
                    ");
                    $ok_pass = $stmt->execute([
                        ':password_hash' => $hash_nuevo,
                        ':usuario_id' => $usuario_id
                    ]);

                    if ($ok_pass) {
                        $_SESSION['debe_cambiar_pass'] = 0;
                    } else {
                        $errores[] = 'No se pudo actualizar la contraseña.';
                    }
                }
            }

            if (count($errores) === 0) {
                $mensaje = alert_html('success', 'Tu perfil se actualizó correctamente.');
            } else {
                $mensaje = alert_html('danger', '<strong>Revisa lo siguiente:</strong><br>' . implode('<br>', $errores));
            }

            // Recargar datos
            $stmt = $pdo->prepare("
                SELECT
                    u.usuario_id, u.no_emp, u.rfc_base, u.estatus,
                    u.debe_cambiar_pass, u.pass_cambiada,
                    ue.empresa_id, ue.es_admin, ue.estatus AS ue_estatus,
                    ue.empleado_id,
                    e.nombre, e.apellido_paterno, e.apellido_materno,
                    e.es_activo, e.estatus AS estatus_empleado,
                    e.foto_path,
                    ed.correo, ed.telefono
                FROM usuarios u
                JOIN usuario_empresas ue
                  ON ue.usuario_id = u.usuario_id
                 AND ue.empresa_id = :empresa_id
                 AND ue.estatus = 1
                LEFT JOIN empleados e
                  ON e.empleado_id = ue.empleado_id
                LEFT JOIN empleados_demograficos ed
                  ON ed.empleado_id = ue.empleado_id
                WHERE u.usuario_id = :usuario_id
                LIMIT 1
            ");
            $stmt->execute([
                ':usuario_id' => $usuario_id,
                ':empresa_id' => $empresa_id
            ]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $puede_editar = (!empty($row['empleado_id']) && (int)$row['empleado_id'] > 0);

            // Recargar datos demográficos
            if ($puede_editar) {
                $stmt = $pdo->prepare("
                    SELECT sexo, fecha_nacimiento, escolaridad, estado_civil, num_hijos
                    FROM empleados_demograficos
                    WHERE empleado_id = :empleado_id
                    LIMIT 1
                ");
                $stmt->execute([':empleado_id' => (int)$row['empleado_id']]);
                $demograficos = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } else {
            $mensaje = alert_html('danger', '<strong>Revisa lo siguiente:</strong><br>' . implode('<br>', $errores));
        }
    }

    if (count($errores) > 0 && $mensaje === '') {
        $mensaje = alert_html('danger', '<strong>Revisa lo siguiente:</strong><br>' . implode('<br>', $errores));
    }
}

// Render layout
include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';
include __DIR__ . '/../includes/layout/content_open.php';
?>

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-user mr-2"></i> <span class="font-weight-semibold"><?php echo h($page_title); ?></span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> <?php echo h($breadcrumb_home); ?></a>
                <?php if ($breadcrumb_lvl1): ?>
                    <a href="#" class="breadcrumb-item"><?php echo h($breadcrumb_lvl1); ?></a>
                <?php endif; ?>
                <span class="breadcrumb-item active"><?php echo h($page_title); ?></span>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->

<div class="content">

    <?php echo $mensaje; ?>

    <?php if ($requiere_demograficos && !$demograficos): ?>
        <div class="alert alert-danger alert-styled-left alert-arrow-left">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <span class="font-weight-semibold">¡Atención!</span>
            Para continuar usando el sistema, es necesario que completes tus <strong>datos demográficos</strong> en este formulario.
            Esta información es confidencial y se utiliza únicamente para análisis estadísticos.
        </div>
    <?php endif; ?>

    <?php if (!$puede_editar): ?>
        <div class="alert alert-warning">
            Tu usuario no está vinculado a un registro de empleado para la empresa seleccionada.
            Pide al administrador que asigne <code>usuario_empresas.empleado_id</code>.
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Mi perfil (Empresa: <?php echo h(isset($_SESSION['empresa_alias']) && $_SESSION['empresa_alias'] ? $_SESSION['empresa_alias'] : (isset($_SESSION['empresa_nombre']) ? $_SESSION['empresa_nombre'] : '')); ?>)</h5>
        </div>

        <div class="card-body" style="max-height: none; overflow: visible;">

            <div class="row mb-4">
                <div class="col-md-3 text-center">

                    <?php if ($puede_editar && !empty($row['foto_path'])): ?>
                        <img src="ver_foto_empleado.php?empleado_id=<?php echo (int)$row['empleado_id']; ?>"
                             class="rounded-circle"
                             style="width:120px;height:120px;object-fit:cover;"
                             alt="Foto de perfil">
                    <?php else: ?>
                        <div class="rounded-circle bg-secondary text-white d-inline-flex align-items-center justify-content-center"
                             style="width:120px;height:120px;">
                            <span style="font-size:36px;">
                                <?php echo strtoupper(substr((string)$row['nombre'], 0, 1)); ?>
                            </span>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div><strong>No. Empleado (login):</strong> <?php echo h($row['no_emp']); ?></div>
                            <div><strong>RFC base (login):</strong> <?php echo h($row['rfc_base']); ?></div>
                            <div><strong>Estatus usuario:</strong> <?php echo h($row['estatus']); ?></div>
                        </div>
                        <div class="col-md-8">
                            <div><strong>Empleado ID (empresa activa):</strong> <?php echo h($row['empleado_id']); ?></div>
                            <div><strong>Estatus empleado:</strong> <?php echo h($row['estatus_empleado']); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" action="mi_perfil.php" enctype="multipart/form-data">

                <h6 class="font-weight-semibold">Datos del empleado (empresa activa)</h6>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="nombre" class="form-control" required
                                   value="<?php echo h($row['nombre']); ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Apellido paterno</label>
                            <input type="text" name="apellido_paterno" class="form-control"
                                   value="<?php echo h($row['apellido_paterno']); ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Apellido materno</label>
                            <input type="text" name="apellido_materno" class="form-control"
                                   value="<?php echo h($row['apellido_materno']); ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" class="form-control"
                                   value="<?php echo h($row['correo']); ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="telefono" class="form-control"
                                   value="<?php echo h($row['telefono']); ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Foto de perfil</label>
                            <input type="file" name="foto" class="form-control"
                                   accept="image/jpeg,image/png"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                            <small class="form-text text-muted">JPG o PNG. Máx. 2 MB. Se guarda en <code>storage/</code>.</small>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- SECCIÓN: DATOS DEMOGRÁFICOS -->
                <h6 class="font-weight-semibold">Datos demográficos</h6>
                <p class="text-muted mb-3">
                    <i class="icon-info22 mr-1"></i>
                    Esta información es <strong>confidencial</strong> y se utiliza únicamente para análisis estadísticos del clima laboral.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Sexo *</label>
                            <select name="sexo" class="form-control" required <?php echo $puede_editar ? '' : 'disabled'; ?>>
                                <option value="">-- Selecciona --</option>
                                <option value="M" <?php echo ($demograficos && $demograficos['sexo'] === 'M') ? 'selected' : ''; ?>>Masculino</option>
                                <option value="F" <?php echo ($demograficos && $demograficos['sexo'] === 'F') ? 'selected' : ''; ?>>Femenino</option>
                                <option value="X" <?php echo ($demograficos && $demograficos['sexo'] === 'X') ? 'selected' : ''; ?>>Otro / Prefiero no especificar</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fecha de nacimiento *</label>
                            <input type="date" name="fecha_nacimiento" class="form-control" required
                                   value="<?php echo $demograficos ? h($demograficos['fecha_nacimiento']) : ''; ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Número de hijos</label>
                            <input type="number" name="num_hijos" class="form-control" min="0" max="20"
                                   value="<?php echo $demograficos ? (int)$demograficos['num_hijos'] : 0; ?>"
                                   <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Escolaridad *</label>
                            <select name="escolaridad" class="form-control" required <?php echo $puede_editar ? '' : 'disabled'; ?>>
                                <option value="">-- Selecciona --</option>
                                <option value="Primaria" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Primaria') ? 'selected' : ''; ?>>Primaria</option>
                                <option value="Secundaria" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Secundaria') ? 'selected' : ''; ?>>Secundaria</option>
                                <option value="Preparatoria" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Preparatoria') ? 'selected' : ''; ?>>Preparatoria / Bachillerato</option>
                                <option value="Técnico" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Técnico') ? 'selected' : ''; ?>>Técnico / TSU</option>
                                <option value="Licenciatura" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Licenciatura') ? 'selected' : ''; ?>>Licenciatura / Ingeniería</option>
                                <option value="Maestría" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Maestría') ? 'selected' : ''; ?>>Maestría</option>
                                <option value="Doctorado" <?php echo ($demograficos && $demograficos['escolaridad'] === 'Doctorado') ? 'selected' : ''; ?>>Doctorado</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado civil *</label>
                            <select name="estado_civil" class="form-control" required <?php echo $puede_editar ? '' : 'disabled'; ?>>
                                <option value="">-- Selecciona --</option>
                                <option value="Soltero(a)" <?php echo ($demograficos && $demograficos['estado_civil'] === 'Soltero(a)') ? 'selected' : ''; ?>>Soltero(a)</option>
                                <option value="Casado(a)" <?php echo ($demograficos && $demograficos['estado_civil'] === 'Casado(a)') ? 'selected' : ''; ?>>Casado(a)</option>
                                <option value="Unión libre" <?php echo ($demograficos && $demograficos['estado_civil'] === 'Unión libre') ? 'selected' : ''; ?>>Unión libre</option>
                                <option value="Divorciado(a)" <?php echo ($demograficos && $demograficos['estado_civil'] === 'Divorciado(a)') ? 'selected' : ''; ?>>Divorciado(a)</option>
                                <option value="Viudo(a)" <?php echo ($demograficos && $demograficos['estado_civil'] === 'Viudo(a)') ? 'selected' : ''; ?>>Viudo(a)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cambiar_password" value="1" id="chkPass" <?php echo $puede_editar ? '' : 'disabled'; ?>>
                            Cambiar contraseña
                        </label>
                    </div>
                </div>

                <div id="passBox" style="display:none;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contraseña actual</label>
                                <input type="password" name="pass_actual" class="form-control" <?php echo $puede_editar ? '' : 'disabled'; ?>>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nueva contraseña</label>
                                <input type="password" name="pass_nueva" class="form-control" <?php echo $puede_editar ? '' : 'disabled'; ?>>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Confirmar nueva</label>
                                <input type="password" name="pass_conf" class="form-control" <?php echo $puede_editar ? '' : 'disabled'; ?>>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0">Mínimo 8 caracteres.</p>
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-primary" <?php echo $puede_editar ? '' : 'disabled'; ?>>
                        Guardar cambios
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
<!-- Espacio adicional al final para permitir scroll completo -->
<div style="height: 100px;"></div>

<style>
/* Asegurar que el contenido sea completamente scrolleable */
.content {
    overflow: visible !important;
    height: auto !important;
    max-height: none !important;
}
</style>

<script>
(function () {
    var chk = document.getElementById('chkPass');
    var box = document.getElementById('passBox');
    if (!chk || !box) return;

    function toggle() { box.style.display = chk.checked ? 'block' : 'none'; }
    chk.addEventListener('change', toggle);
    toggle();
})();
</script>

<?php 
require_once __DIR__ . '/../includes/layout/content_close.php';
require_once __DIR__ . '/../includes/layout/scripts.php';
?>
