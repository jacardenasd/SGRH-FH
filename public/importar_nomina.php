<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/permisos.php';

require_login();
require_password_change_redirect();
require_demograficos_redirect();
require_empresa();
require_perm('nomina.importar');

if (session_status() === PHP_SESSION_NONE) session_start();

$active_menu = 'import_nomina';
$page_title = 'Importar nómina | SGRH';
include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/navbar.php';
include __DIR__ . '/../includes/layout/sidebar.php';
include __DIR__ . '/../includes/layout/content_open.php';

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$warnings = $_SESSION['import_warnings'] ?? null;
if ($warnings !== null) {
    unset($_SESSION['import_warnings']);
}
?>

<div class="page-header page-header-light">
  <div class="page-header-content">
    <div class="page-title">
      <h4>Importar layout de nómina</h4>
    </div>
  </div>
</div>

<div class="content">

          <?php if (!empty($_GET['ok']) && $warnings): ?>
            <div class="alert alert-success">
              <h6 class="font-weight-semibold">✓ Importación procesada exitosamente</h6>
              <p class="mb-2">
                <a href="importar_nomina_historial.php" class="alert-link">Ver detalle en historial</a>
              </p>
              <?php if (!empty($warnings['puestos']) || !empty($warnings['adscripciones']) || !empty($warnings['jefes'])): ?>
                <hr class="my-2">
                <h6 class="font-weight-semibold text-warning">⚠ Elementos faltantes detectados:</h6>
                <?php if (!empty($warnings['puestos'])): ?>
                  <div class="mt-2">
                    <strong>Puestos faltantes (<?= count($warnings['puestos']) ?>):</strong>
                    <ul class="mb-2">
                      <?php foreach ($warnings['puestos'] as $puesto => $v): ?>
                        <li class="text-muted"><code><?= h($puesto) ?></code></li>
                      <?php endforeach; ?>
                    </ul>
                    <small class="text-muted">Crea estos puestos en Organización → Puestos y reimporta.</small>
                  </div>
                <?php endif; ?>
                
                <?php if (!empty($warnings['adscripciones'])): ?>
                  <div class="mt-2">
                    <strong>Adscripciones/Departamentos faltantes (<?= count($warnings['adscripciones']) ?>):</strong>
                    <ul class="mb-2">
                      <?php foreach ($warnings['adscripciones'] as $ads => $v): ?>
                        <li class="text-muted"><code><?= h($ads) ?></code></li>
                      <?php endforeach; ?>
                    </ul>
                    <small class="text-muted">Crea estas adscripciones en Organización → Adscripciones y reimporta.</small>
                  </div>
                <?php endif; ?>
                
                <?php if (!empty($warnings['jefes'])): ?>
                  <div class="mt-2">
                    <strong>Jefes no encontrados (<?= count($warnings['jefes']) ?>):</strong>
                    <ul class="mb-2">
                      <?php foreach ($warnings['jefes'] as $jefe => $v): ?>
                        <li class="text-muted"><code><?= h($jefe) ?></code></li>
                      <?php endforeach; ?>
                    </ul>
                    <small class="text-muted">Estos jefes no existen en el sistema. Verifica ortografía o crea los empleados faltantes.</small>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php elseif (!empty($_GET['ok'])): ?>
            <div class="alert alert-success">
              Importación procesada exitosamente. 
              <a href="importar_nomina_historial.php" class="alert-link">Ver detalle en historial</a>
            </div>
          <?php endif; ?>
          
          <?php if (!empty($_GET['err'])): ?>
            <div class="alert alert-danger">Error al procesar importación. Revisa logs.</div>
          <?php endif; ?>

          <form method="post" action="importar_nomina_procesar.php" enctype="multipart/form-data">
            <div class="form-group">
              <label>Archivo Excel (layout nómina)</label>
              <input type="file" name="archivo" class="form-control" accept=".xlsx" required>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <button class="btn btn-primary">
                <i class="icon-upload"></i> Procesar
              </button>
              <div class="btn-group">
                <a href="importar_nomina_historial.php" class="btn btn-info btn-sm">
                  <i class="icon-history"></i> Ver historial
                </a>
                <a href="importar_nomina_revertir.php" class="btn btn-warning btn-sm">
                  <i class="icon-undo2"></i> Revertir última importación
                </a>
              </div>
            </div>
          </form>

          <div class="alert alert-secondary mt-3" style="white-space: pre-line;">
            <strong>Guía rápida del layout Excel (.xlsx)</strong>
            
            - Hoja: "Reporte" (o la primera si no existe). Fila 1 son encabezados; datos desde fila 2.
            - Formatos: fechas en YYYY-MM-DD o fecha Excel; montos con o sin $/coma; RFC se normaliza a 10 caracteres (RFC base).

            Campos (A→AJ) con mapeo y notas
            A Empresa → empleados.empresa_id (obligatorio; nombre exacto en catálogo)
            B Número empleado → empleados.no_emp (obligatorio, identificador único por empresa)
            C Apellido paterno → empleados.apellido_paterno
            D Apellido materno → empleados.apellido_materno
            E Nombre(s) → empleados.nombre
            F RFC empleado → empleados.rfc_base (toma solo los primeros 10 caracteres)
            G CURP → empleados.curp
            H Estatus → empleados.es_activo (ACTIVO/SI/1=1, INACTIVO/NO/0=0)
            I Fecha ingreso → empleados.fecha_ingreso (dd/mm/yyyy o serial Excel)
            J Fecha baja → empleados.fecha_baja
            K Tipo empleado ID → empleados.tipo_empleado_id
            L Tipo empleado nombre → empleados.tipo_empleado_nombre
            M Departamento ID/clave → empleados.adscripcion_id (busca en org_adscripciones.clave)
            N Departamento nombre → empleados.departamento_nombre
            O Puesto código (old) → empleados.puesto_nomina_id (fallback; no principal)
            P Nombre del puesto → empleados.puesto_id (lookup principal en org_puestos.nombre)
            Q Centro trabajo ID → empleados.centro_trabajo_id
            R Centro trabajo nombre → empleados.centro_trabajo_nombre
            T Nombre del jefe → empleados.jefe_no_emp (busca por nombre completo en empleados/usuarios)
            U Salario mensual → empleados.salario_mensual (limpia $ y comas)
            V Salario diario → empleados.salario_diario (limpia $ y comas)
            W Correo → empleados_demograficos.correo
            X Teléfono → empleados_demograficos.telefono
            Y Período / Tipo nómina → empleados_demograficos.tipo_nomina
            Z Número de afiliación IMSS → empleados_demograficos.nss
            AA Calle domicilio → empleados_demograficos.domicilio_calle
            AB Municipio domicilio → empleados_demograficos.domicilio_municipio
            AC Colonia domicilio → empleados_demograficos.domicilio_colonia
            AD C.P. domicilio → empleados_demograficos.domicilio_cp
            AE Estado domicilio → empleados_demograficos.domicilio_estado
            AF Número exterior domicilio → empleados_demograficos.domicilio_num_ext
            AG CLABE → empleados_demograficos.clabe
            AH Crédito Infonavit → empleados_demograficos.tiene_credito_infonavit (SI/NO/1/0)
            AI Unidad médica familiar → empleados_demograficos.unidad_medica_familiar
            AJ Banco → empleados_demograficos.banco_id (mapea por nombre en cat_bancos)

            Recomendado mínimo: Empresa, No. Empleado, Nombre, RFC, Estatus, Fecha ingreso, Puesto nombre, Departamento (M/N) si usas organización.
            Advertencias: puestos/adscripciones/jefes no encontrados se listan tras la importación para que los crees y reimportes si aplica.
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Asegurar que esta pantalla permita scroll completo */
body, html, .content-wrapper { overflow: auto !important; height: auto; }
</style>

<?php 
include __DIR__ . '/../includes/layout/content_close.php';
include __DIR__ . '/../includes/layout/scripts.php'; 
?>
