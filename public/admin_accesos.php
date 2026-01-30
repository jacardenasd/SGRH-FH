<?php
// public/admin_accesos.php
// Historial de accesos de usuarios al sistema

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();
require_empresa();
require_password_change_redirect();
require_demograficos_redirect();
require_perm('usuarios.admin'); // Solo administradores pueden ver el historial

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$empresa_id = (int)$_SESSION['empresa_id'];

function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

// Variables de layout
$active_menu = 'admin_accesos';
$page_title = 'Historial de Accesos';
$breadcrumb_home = 'Home';
$breadcrumb_lvl1 = 'Administración';
$breadcrumb_lvl2 = 'Historial de Accesos';

// Filtros
$filtro_usuario = isset($_GET['usuario']) ? trim($_GET['usuario']) : '';
$filtro_rfc = isset($_GET['rfc']) ? trim($_GET['rfc']) : '';
$filtro_ip = isset($_GET['ip']) ? trim($_GET['ip']) : '';
$filtro_exitoso = isset($_GET['exitoso']) ? $_GET['exitoso'] : '';
$filtro_fecha_desde = isset($_GET['fecha_desde']) ? $_GET['fecha_desde'] : '';
$filtro_fecha_hasta = isset($_GET['fecha_hasta']) ? $_GET['fecha_hasta'] : '';
$registros_por_pagina = 50;
$pagina_actual = isset($_GET['pagina']) ? max(1, (int)$_GET['pagina']) : 1;
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// Construir query con filtros
$where_conditions = ['1=1'];
$params = [];

if ($filtro_usuario !== '') {
    $where_conditions[] = "(u.nombre LIKE :nombre OR u.apellido_paterno LIKE :nombre OR u.apellido_materno LIKE :nombre OR u.no_emp LIKE :nombre)";
    $params[':nombre'] = '%' . $filtro_usuario . '%';
}

if ($filtro_rfc !== '') {
    $where_conditions[] = "ua.rfc_intento LIKE :rfc";
    $params[':rfc'] = '%' . strtoupper(trim($filtro_rfc)) . '%';
}

if ($filtro_ip !== '') {
    $where_conditions[] = "ua.ip_address LIKE :ip";
    $params[':ip'] = '%' . $filtro_ip . '%';
}

if ($filtro_exitoso !== '') {
    $where_conditions[] = "ua.exitoso = :exitoso";
    $params[':exitoso'] = (int)$filtro_exitoso;
}

if ($filtro_fecha_desde !== '') {
    $where_conditions[] = "ua.created_at >= :fecha_desde";
    $params[':fecha_desde'] = $filtro_fecha_desde . ' 00:00:00';
}

if ($filtro_fecha_hasta !== '') {
    $where_conditions[] = "ua.created_at <= :fecha_hasta";
    $params[':fecha_hasta'] = $filtro_fecha_hasta . ' 23:59:59';
}

$where_sql = implode(' AND ', $where_conditions);

// Contar total de registros
$sql_count = "
    SELECT COUNT(*) as total
    FROM usuarios_accesos ua
    LEFT JOIN usuarios u ON ua.usuario_id = u.usuario_id
    WHERE $where_sql
";
$stmt_count = $pdo->prepare($sql_count);
$stmt_count->execute($params);
$total_registros = (int)$stmt_count->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Obtener registros de la página actual
$sql = "
    SELECT 
        ua.acceso_id,
        ua.usuario_id,
        ua.rfc_intento,
        ua.exitoso,
        ua.ip_address,
        ua.user_agent,
        ua.empresa_id,
        ua.mensaje,
        ua.created_at,
        CONCAT_WS(' ', u.nombre, u.apellido_paterno, u.apellido_materno) as nombre_completo,
        u.no_emp,
        e.alias as empresa_alias
    FROM usuarios_accesos ua
    LEFT JOIN usuarios u ON ua.usuario_id = u.usuario_id
    LEFT JOIN empresas e ON ua.empresa_id = e.empresa_id
    WHERE $where_sql
    ORDER BY ua.created_at DESC
    LIMIT :limit OFFSET :offset
";

$stmt = $pdo->prepare($sql);
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}
$stmt->bindValue(':limit', $registros_por_pagina, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$accesos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Estadísticas rápidas
$sql_stats = "
    SELECT 
        COUNT(*) as total_accesos,
        SUM(CASE WHEN exitoso = 1 THEN 1 ELSE 0 END) as accesos_exitosos,
        SUM(CASE WHEN exitoso = 0 THEN 1 ELSE 0 END) as accesos_fallidos,
        COUNT(DISTINCT usuario_id) as usuarios_unicos,
        COUNT(DISTINCT ip_address) as ips_unicas
    FROM usuarios_accesos
    WHERE created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
";
$stmt_stats = $pdo->query($sql_stats);
$stats = $stmt_stats->fetch(PDO::FETCH_ASSOC);

include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';
include __DIR__ . '/../includes/layout/content_open.php';
?>

<div class="page-header page-header-light">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold"><?php echo h($page_title); ?></span></h4>
            <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo ASSET_BASE; ?>public/index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
                <span class="breadcrumb-item">Administración</span>
                <span class="breadcrumb-item active">Historial de Accesos</span>
            </div>
        </div>
    </div>
</div>

<div class="content">

    <!-- Estadísticas -->
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-enter icon-3x text-success-400"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['total_accesos']); ?></h3>
              <span class="text-uppercase font-size-sm text-muted">Accesos (últimos 30 días)</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-checkmark-circle icon-3x text-success"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['accesos_exitosos']); ?></h3>
              <span class="text-uppercase font-size-sm text-muted">Exitosos</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-blocked icon-3x text-danger"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['accesos_fallidos']); ?></h3>
              <span class="text-uppercase font-size-sm text-muted">Fallidos</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
          <div class="media">
            <div class="mr-3 align-self-center">
              <i class="icon-users4 icon-3x text-indigo-400"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="font-weight-semibold mb-0"><?php echo number_format($stats['usuarios_unicos']); ?></h3>
              <span class="text-uppercase font-size-sm text-muted">Usuarios Únicos</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Filtros -->
    <div class="card">
      <div class="card-header bg-light">
        <h6 class="card-title">
          <i class="icon-filter3 mr-2"></i>
          Filtros de Búsqueda
        </h6>
        <div class="header-elements">
          <div class="list-icons">
            <a class="list-icons-item" data-action="collapse"></a>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form method="get" class="form-inline">
          <div class="form-group mb-2 mr-2">
            <input type="text" name="usuario" class="form-control" placeholder="Usuario, No. Emp." 
                   value="<?php echo h($filtro_usuario); ?>">
          </div>
          
          <div class="form-group mb-2 mr-2">
            <input type="text" name="rfc" class="form-control" placeholder="RFC" 
                   value="<?php echo h($filtro_rfc); ?>" style="text-transform: uppercase;">
          </div>

          <div class="form-group mb-2 mr-2">
            <input type="text" name="ip" class="form-control" placeholder="Dirección IP" 
                   value="<?php echo h($filtro_ip); ?>">
          </div>

          <div class="form-group mb-2 mr-2">
            <select name="exitoso" class="form-control">
              <option value="">Todos los accesos</option>
              <option value="1" <?php echo $filtro_exitoso === '1' ? 'selected' : ''; ?>>Solo exitosos</option>
              <option value="0" <?php echo $filtro_exitoso === '0' ? 'selected' : ''; ?>>Solo fallidos</option>
            </select>
          </div>

          <div class="form-group mb-2 mr-2">
            <input type="date" name="fecha_desde" class="form-control" placeholder="Desde" 
                   value="<?php echo h($filtro_fecha_desde); ?>">
          </div>

          <div class="form-group mb-2 mr-2">
            <input type="date" name="fecha_hasta" class="form-control" placeholder="Hasta" 
                   value="<?php echo h($filtro_fecha_hasta); ?>">
          </div>

          <button type="submit" class="btn btn-primary mb-2 mr-2">
            <i class="icon-search4 mr-2"></i> Buscar
          </button>

          <a href="admin_accesos.php" class="btn btn-light mb-2">
            <i class="icon-reload-alt mr-2"></i> Limpiar
          </a>
        </form>
      </div>
    </div>

    <!-- Tabla de accesos -->
    <div class="card">
      <div class="card-header bg-white">
        <h6 class="card-title">
          <i class="icon-list mr-2"></i>
          Registro de Accesos
          <span class="badge badge-primary ml-2"><?php echo number_format($total_registros); ?> registros</span>
        </h6>
      </div>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr class="bg-light">
              <th width="140">Fecha/Hora</th>
              <th>Usuario</th>
              <th>RFC</th>
              <th>Estado</th>
              <th>Dirección IP</th>
              <th>Empresa</th>
              <th>Mensaje</th>
              <th width="80">Navegador</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($accesos)): ?>
            <tr>
              <td colspan="8" class="text-center text-muted py-4">
                <i class="icon-info22 mr-2"></i>
                No se encontraron registros de accesos con los filtros aplicados.
              </td>
            </tr>
            <?php else: ?>
            <?php foreach ($accesos as $acceso): ?>
            <tr>
              <td>
                <span class="d-block font-weight-semibold">
                  <?php echo date('d/m/Y', strtotime($acceso['created_at'])); ?>
                </span>
                <span class="text-muted font-size-sm">
                  <?php echo date('H:i:s', strtotime($acceso['created_at'])); ?>
                </span>
              </td>
              <td>
                <?php if ($acceso['nombre_completo']): ?>
                  <span class="font-weight-semibold"><?php echo h($acceso['nombre_completo']); ?></span>
                  <?php if ($acceso['no_emp']): ?>
                  <br><span class="text-muted font-size-sm">No. Emp: <?php echo h($acceso['no_emp']); ?></span>
                  <?php endif; ?>
                <?php else: ?>
                  <span class="text-muted">—</span>
                <?php endif; ?>
              </td>
              <td>
                <code class="bg-light"><?php echo h($acceso['rfc_intento']); ?></code>
              </td>
              <td>
                <?php if ($acceso['exitoso']): ?>
                  <span class="badge badge-success">
                    <i class="icon-checkmark mr-1"></i> Exitoso
                  </span>
                <?php else: ?>
                  <span class="badge badge-danger">
                    <i class="icon-blocked mr-1"></i> Fallido
                  </span>
                <?php endif; ?>
              </td>
              <td>
                <code class="bg-light"><?php echo h($acceso['ip_address'] ?? '—'); ?></code>
              </td>
              <td>
                <?php echo $acceso['empresa_alias'] ? h($acceso['empresa_alias']) : '<span class="text-muted">—</span>'; ?>
              </td>
              <td>
                <span class="<?php echo $acceso['exitoso'] ? 'text-success' : 'text-danger'; ?>">
                  <?php echo h($acceso['mensaje'] ?? '—'); ?>
                </span>
              </td>
              <td>
                <?php if ($acceso['user_agent']): ?>
                  <button type="button" class="btn btn-sm btn-icon btn-light" 
                          title="<?php echo h($acceso['user_agent']); ?>"
                          data-popup="tooltip" data-placement="left">
                    <i class="icon-info22"></i>
                  </button>
                <?php else: ?>
                  <span class="text-muted">—</span>
                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Paginación -->
      <?php if ($total_paginas > 1): ?>
      <div class="card-footer">
        <nav aria-label="Paginación">
          <ul class="pagination pagination-flat justify-content-center mb-0">
            
            <!-- Anterior -->
            <?php if ($pagina_actual > 1): ?>
            <li class="page-item">
              <a class="page-link" href="?<?php 
                echo http_build_query(array_merge($_GET, ['pagina' => $pagina_actual - 1])); 
              ?>">
                <i class="icon-arrow-left5 mr-2"></i> Anterior
              </a>
            </li>
            <?php endif; ?>

            <!-- Números de página -->
            <?php
            $rango_inicio = max(1, $pagina_actual - 2);
            $rango_fin = min($total_paginas, $pagina_actual + 2);
            
            if ($rango_inicio > 1): ?>
              <li class="page-item">
                <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['pagina' => 1])); ?>">1</a>
              </li>
              <?php if ($rango_inicio > 2): ?>
                <li class="page-item disabled"><span class="page-link">...</span></li>
              <?php endif; ?>
            <?php endif; ?>

            <?php for ($i = $rango_inicio; $i <= $rango_fin; $i++): ?>
            <li class="page-item <?php echo $i === $pagina_actual ? 'active' : ''; ?>">
              <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['pagina' => $i])); ?>">
                <?php echo $i; ?>
              </a>
            </li>
            <?php endfor; ?>

            <?php if ($rango_fin < $total_paginas): ?>
              <?php if ($rango_fin < $total_paginas - 1): ?>
                <li class="page-item disabled"><span class="page-link">...</span></li>
              <?php endif; ?>
              <li class="page-item">
                <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['pagina' => $total_paginas])); ?>">
                  <?php echo $total_paginas; ?>
                </a>
              </li>
            <?php endif; ?>

            <!-- Siguiente -->
            <?php if ($pagina_actual < $total_paginas): ?>
            <li class="page-item">
              <a class="page-link" href="?<?php 
                echo http_build_query(array_merge($_GET, ['pagina' => $pagina_actual + 1])); 
              ?>">
                Siguiente <i class="icon-arrow-right5 ml-2"></i>
              </a>
            </li>
            <?php endif; ?>

          </ul>
        </nav>

        <div class="text-center text-muted mt-2">
          Página <?php echo $pagina_actual; ?> de <?php echo $total_paginas; ?>
          (<?php echo number_format($total_registros); ?> registros totales)
        </div>
      </div>
      <?php endif; ?>
    </div>

  </div>
</div>

<?php include __DIR__ . '/../includes/layout/footer.php'; ?>
<?php include __DIR__ . '/../includes/layout/content_close.php'; ?>
<?php include __DIR__ . '/../includes/layout/scripts.php'; ?>
