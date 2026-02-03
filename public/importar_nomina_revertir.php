<?php
/**
 * importar_nomina_revertir.php
 * Permite revertir la última importación de nómina
 * - Identifica la última importación procesada
 * - Restaura o elimina registros según lo que se haya hecho
 * - Registra la reversión en logs
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();
require_password_change_redirect();
require_demograficos_redirect();
require_empresa();
require_perm('nomina.importar');

$page_title = 'Revertir Importación de Nómina | SGRH';
include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';
include __DIR__ . '/../includes/layout/content_open.php';

$reversion_realizada = false;
$error_reversion = null;
$detalles_reversion = [];

// Obtener la última importación procesada
$stmt = $pdo->prepare("
    SELECT 
        import_id,
        archivo_nombre,
        total_registros,
        created_at,
        empresa_id
    FROM nomina_importaciones
    WHERE status = 'procesado'
    ORDER BY created_at DESC
    LIMIT 1
");
$stmt->execute();
$ultima_importacion = $stmt->fetch(PDO::FETCH_ASSOC);

// Procesar reversión si se solicita y existe una importación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar_reversion']) && $ultima_importacion) {
    try {
        $pdo->beginTransaction();
        
        $import_id = (int)$ultima_importacion['import_id'];
        
        // Obtener todos los registros de esta importación
        $stmt = $pdo->prepare("
            SELECT 
                import_detalle_id,
                no_emp,
                rfc_base,
                accion,
                payload_json,
                created_at
            FROM nomina_import_detalle
            WHERE import_id = ?
            ORDER BY import_detalle_id DESC
        ");
        $stmt->execute([$import_id]);
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $contadores = [
            'eliminados' => 0,
            'restaurados' => 0,
            'errores' => 0
        ];
        
        // Procesar cada registro en orden inverso
        foreach ($registros as $reg) {
            try {
                $accion = $reg['accion'];
                $no_emp = $reg['no_emp'];
                $payload = json_decode($reg['payload_json'], true);
                
                if ($accion === 'insert') {
                    // Si se insertó, eliminamos el registro
                    $stmt = $pdo->prepare("DELETE FROM empleados WHERE no_emp = ? AND empresa_id = ?");
                    $stmt->execute([$no_emp, $ultima_importacion['empresa_id']]);
                    $contadores['eliminados']++;
                    
                    $detalles_reversion[] = [
                        'no_emp' => $no_emp,
                        'accion_original' => 'insert',
                        'accion_reversion' => 'eliminado',
                        'estado' => 'éxito'
                    ];
                    
                } elseif ($accion === 'update' && $payload && isset($payload['datos_antes'])) {
                    // Si se actualizó, restauramos los datos anteriores
                    $datos_antes = $payload['datos_antes'];
                    
                    // Construir UPDATE dinámico basado en campos disponibles
                    $campos_permitidos = [
                        'apellido_paterno', 'apellido_materno', 'nombre', 'rfc_base', 'curp',
                        'es_activo', 'fecha_ingreso', 'fecha_baja', 'tipo_empleado_id',
                        'tipo_empleado_nombre', 'adscripcion_id', 'departamento_nombre',
                        'puesto_nomina_id', 'puesto_id', 'centro_trabajo_id', 'centro_trabajo_nombre',
                        'jefe_no_emp', 'salario_mensual', 'salario_diario'
                    ];
                    
                    $updates = [];
                    $valores = [];
                    
                    foreach ($datos_antes as $campo => $valor) {
                        if (in_array($campo, $campos_permitidos)) {
                            $updates[] = "`$campo` = ?";
                            $valores[] = $valor;
                        }
                    }
                    
                    if (!empty($updates)) {
                        $valores[] = $no_emp;
                        $valores[] = $ultima_importacion['empresa_id'];
                        
                        $sql = "UPDATE empleados SET " . implode(', ', $updates) . 
                               " WHERE no_emp = ? AND empresa_id = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute($valores);
                        $contadores['restaurados']++;
                        
                        $detalles_reversion[] = [
                            'no_emp' => $no_emp,
                            'accion_original' => 'update',
                            'accion_reversion' => 'restaurado',
                            'estado' => 'éxito'
                        ];
                    } else {
                        throw new Exception("No hay datos previos para restaurar");
                    }
                    
                } elseif ($accion === 'skip' || $accion === 'error') {
                    // No hay cambios que revertir
                    $detalles_reversion[] = [
                        'no_emp' => $no_emp,
                        'accion_original' => $accion,
                        'accion_reversion' => 'sin cambios',
                        'estado' => 'N/A'
                    ];
                }
                
            } catch (Exception $e) {
                $contadores['errores']++;
                $detalles_reversion[] = [
                    'no_emp' => $no_emp,
                    'accion_original' => $accion,
                    'accion_reversion' => 'error',
                    'estado' => $e->getMessage()
                ];
            }
        }
        
        // Actualizar estado de la importación
        $stmt = $pdo->prepare("
            UPDATE nomina_importaciones
            SET status = 'revertido',
                mensaje = CONCAT(mensaje, '\n\nREVERTIDO: ', ?)
            WHERE import_id = ?
        ");
        $fecha_reversion = date('Y-m-d H:i:s');
        $stmt->execute(["$fecha_reversion - Eliminados: {$contadores['eliminados']}, Restaurados: {$contadores['restaurados']}, Errores: {$contadores['errores']}", $import_id]);
        
        // Log de auditoría
        $log_msg = "[REVERSION IMPORTACION $import_id] Eliminados: {$contadores['eliminados']}, Restaurados: {$contadores['restaurados']}, Errores: {$contadores['errores']}";
        error_log($log_msg, 3, __DIR__ . '/../storage/logs/import_nomina_reversion_' . date('Ymd') . '.log');
        
        $pdo->commit();
        $reversion_realizada = true;
        
    } catch (Exception $e) {
        $pdo->rollBack();
        $error_reversion = "Error durante la reversión: " . $e->getMessage();
        error_log("[ERROR REVERSION] " . $e->getMessage(), 3, __DIR__ . '/../storage/logs/import_nomina_reversion_' . date('Ymd') . '.log');
    }
}
?>

<div class="page-header page-header-light">
  <div class="page-header-content">
    <div class="page-title">
      <h4>Revertir Importación de Nómina</h4>
    </div>
  </div>
</div>

<div class="content">
  <div class="row">
    <div class="col-md-12">
      
      <?php if ($reversion_realizada): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">✓ Reversión completada exitosamente</h5>
          <p class="mb-0">
            La importación <strong>#<?php echo htmlspecialchars($ultima_importacion['import_id']); ?></strong> 
            del <strong><?php echo date('d/m/Y H:i', strtotime($ultima_importacion['created_at'])); ?></strong> 
            ha sido revertida.
          </p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      
      <?php if ($error_reversion): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <h5 class="alert-heading">✗ Error en la reversión</h5>
          <p class="mb-0"><?php echo htmlspecialchars($error_reversion); ?></p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>

      <?php if ($ultima_importacion && !$reversion_realizada): ?>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Última Importación Procesada</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <p><strong>ID Importación:</strong> #<?php echo (int)$ultima_importacion['import_id']; ?></p>
                <p><strong>Archivo:</strong> <?php echo htmlspecialchars($ultima_importacion['archivo_nombre']); ?></p>
              </div>
              <div class="col-md-6">
                <p><strong>Total de registros:</strong> <?php echo (int)$ultima_importacion['total_registros']; ?></p>
                <p><strong>Fecha de importación:</strong> <?php echo date('d/m/Y H:i:s', strtotime($ultima_importacion['created_at'])); ?></p>
              </div>
            </div>
            
            <hr>
            
            <div class="alert alert-warning">
              <strong>⚠ Advertencia:</strong> Esta acción revertirá todos los cambios realizados durante esta importación:
              <ul class="mb-0 mt-2">
                <li>Se <strong>eliminarán</strong> los empleados que fueron insertados</li>
                <li>Se <strong>restaurarán</strong> los datos de empleados que fueron actualizados</li>
                <li>Los registros con errores o salteados no serán afectados</li>
              </ul>
            </div>
            
            <form method="post" action="">
              <input type="hidden" name="confirmar_reversion" value="1">
              <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro? Esta acción no se puede deshacer.')">
                <i class="icon-undo2"></i> Revertir esta importación
              </button>
              <a href="importar_nomina_historial.php" class="btn btn-secondary">
                <i class="icon-arrow-left"></i> Cancelar
              </a>
            </form>
          </div>
        </div>
      <?php endif; ?>
      
      <?php if ($reversion_realizada && !empty($detalles_reversion)): ?>
        <div class="card mt-4">
          <div class="card-header">
            <h5 class="card-title mb-0">Detalles de la Reversión</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-striped">
                <thead>
                  <tr>
                    <th>No. Empleado</th>
                    <th>Acción Original</th>
                    <th>Acción de Reversión</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($detalles_reversion as $detalle): ?>
                    <tr class="<?php echo $detalle['estado'] === 'error' ? 'table-danger' : ''; ?>">
                      <td><code><?php echo htmlspecialchars($detalle['no_emp']); ?></code></td>
                      <td>
                        <?php 
                          if ($detalle['accion_original'] === 'insert') {
                            echo '<span class="badge badge-primary">Insertado</span>';
                          } elseif ($detalle['accion_original'] === 'update') {
                            echo '<span class="badge badge-info">Actualizado</span>';
                          } elseif ($detalle['accion_original'] === 'skip') {
                            echo '<span class="badge badge-secondary">Saltado</span>';
                          } elseif ($detalle['accion_original'] === 'error') {
                            echo '<span class="badge badge-danger">Error</span>';
                          }
                        ?>
                      </td>
                      <td>
                        <?php 
                          if ($detalle['accion_reversion'] === 'eliminado') {
                            echo '<span class="badge badge-success">Eliminado</span>';
                          } elseif ($detalle['accion_reversion'] === 'restaurado') {
                            echo '<span class="badge badge-success">Restaurado</span>';
                          } elseif ($detalle['accion_reversion'] === 'sin cambios') {
                            echo '<span class="badge badge-secondary">Sin cambios</span>';
                          } elseif ($detalle['accion_reversion'] === 'error') {
                            echo '<span class="badge badge-danger">Error</span>';
                          }
                        ?>
                      </td>
                      <td>
                        <?php if ($detalle['estado'] === 'éxito' || $detalle['estado'] === 'N/A'): ?>
                          <span class="text-success">✓</span>
                        <?php else: ?>
                          <span class="text-danger" title="<?php echo htmlspecialchars($detalle['estado']); ?>">✗</span>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      <?php endif; ?>
      
      <?php if (!$ultima_importacion && !$reversion_realizada): ?>
        <div class="alert alert-info">
          No hay importaciones procesadas para revertir.
          <a href="importar_nomina_historial.php" class="alert-link">Ver historial de importaciones</a>
        </div>
      <?php endif; ?>
      
    </div>
  </div>
</div>

<?php 
include __DIR__ . '/../includes/layout/content_close.php';
include __DIR__ . '/../includes/layout/scripts.php'; 
?>
