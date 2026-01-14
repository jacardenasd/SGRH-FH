<?php
// public/contratos_generar_pdf.php
// Endpoint para generar PDFs de contratos
session_start();
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/conexion.php';
require_once __DIR__ . '/../includes/contratos/pdf_generator.php';

if (!isset($_SESSION['usuario_id'])) {
    http_response_code(401);
    echo json_encode(['ok' => false, 'error' => 'No autorizado']);
    exit;
}

$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 0;
$usuario_id = (int)$_SESSION['usuario_id'];

// Validar parámetros
$tipo_doc = isset($_POST['tipo_documento']) ? trim($_POST['tipo_documento']) : '';
$nuevo_ingreso_id = isset($_POST['nuevo_ingreso_id']) ? (int)$_POST['nuevo_ingreso_id'] : 0;
$empleado_id = isset($_POST['empleado_id']) ? (int)$_POST['empleado_id'] : 0;

if (empty($tipo_doc)) {
    echo json_encode(['ok' => false, 'error' => 'Tipo de documento no especificado']);
    exit;
}

if ($nuevo_ingreso_id === 0 && $empleado_id === 0) {
    echo json_encode(['ok' => false, 'error' => 'No se especificó empleado']);
    exit;
}

// Mapeo de tipos de documento a plantillas y nombres ENUM
$templates = [
    'contrato_determinado' => ['file' => 'resources/contratos/contrato_determinado.html', 'enum' => 'contrato_temporal'],
    'contrato_indeterminado' => ['file' => 'resources/contratos/contrato_indeterminado.html', 'enum' => 'contrato_permanente'],
    'poliza_fh_250' => ['file' => 'resources/contratos/poliza_fh_250.html', 'enum' => 'poliza_fh'],
    'carta_patronal_fh' => ['file' => 'resources/contratos/carta_patronal_fh.html', 'enum' => 'carta_patronal']
];

if (!isset($templates[$tipo_doc])) {
    echo json_encode(['ok' => false, 'error' => 'Tipo de documento inválido']);
    exit;
}

$templateFile = $templates[$tipo_doc]['file'];
$tipoDocEnum = $templates[$tipo_doc]['enum'];
$templatePath = realpath(__DIR__ . '/../' . $templateFile);

if (!$templatePath || !file_exists($templatePath)) {
    echo json_encode(['ok' => false, 'error' => 'Plantilla no encontrada: ' . $tipo_doc]);
    exit;
}

// Obtener datos del empleado
if ($nuevo_ingreso_id > 0) {
    $sql = "SELECT * FROM empleados_nuevo_ingreso WHERE nuevo_ingreso_id = :nid AND empresa_id = :emp";
    $st = $pdo->prepare($sql);
    $st->execute([':nid' => $nuevo_ingreso_id, ':emp' => $empresa_id]);
} else {
    $sql = "SELECT * FROM empleados_demograficos WHERE empleado_id = :eid";
    $st = $pdo->prepare($sql);
    $st->execute([':eid' => $empleado_id]);
}

$emp = $st->fetch(PDO::FETCH_ASSOC);

if (!$emp) {
    echo json_encode(['ok' => false, 'error' => 'Empleado no encontrado']);
    exit;
}

// Validar datos completos
if (empty($emp['datos_completos']) || $emp['datos_completos'] != 1) {
    echo json_encode(['ok' => false, 'error' => 'Los datos del empleado están incompletos. Complete el formulario antes de generar documentos.']);
    exit;
}

// Obtener fechas del POST (prioritario) o de la BD
$fechaInicio = isset($_POST['fecha_inicio_contrato']) && !empty($_POST['fecha_inicio_contrato']) 
    ? trim($_POST['fecha_inicio_contrato']) 
    : $emp['fecha_inicio_contrato'];
    
$fechaTermino = isset($_POST['fecha_termino_contrato']) && !empty($_POST['fecha_termino_contrato']) 
    ? trim($_POST['fecha_termino_contrato']) 
    : $emp['fecha_termino_contrato'];

// Validar fechas de contrato (solo para contratos, no para póliza/carta)
if (in_array($tipo_doc, ['contrato_determinado', 'contrato_indeterminado'])) {
    if (empty($fechaInicio)) {
        echo json_encode(['ok' => false, 'error' => 'Debe capturar la fecha de inicio del contrato. Complete el formulario en el modal antes de generar documentos.']);
        exit;
    }
    if ($tipo_doc === 'contrato_determinado' && empty($fechaTermino)) {
        echo json_encode(['ok' => false, 'error' => 'Los contratos determinados requieren fecha de término. Complete el campo "Fecha Término Contrato" en el modal.']);
        exit;
    }
}

// Obtener apoderado legal
$apoderado = '';
if (!empty($emp['apoderado_legal_id'])) {
    $sqlApod = "SELECT nombre FROM org_apoderados WHERE apoderado_id = :id";
    $stApod = $pdo->prepare($sqlApod);
    $stApod->execute([':id' => $emp['apoderado_legal_id']]);
    $rowApod = $stApod->fetch(PDO::FETCH_ASSOC);
    if ($rowApod) $apoderado = $rowApod['nombre'];
}

// Convertir sueldo a letra
function numeroALetras($numero) {
    $entero = floor($numero);
    $decimal = round(($numero - $entero) * 100);
    
    if ($entero == 0) return 'CERO PESOS ' . sprintf('%02d', $decimal) . '/100 M.N.';
    if ($entero == 1) return 'UN PESO ' . sprintf('%02d', $decimal) . '/100 M.N.';
    
    $letras = convertirNumero($entero);
    return trim($letras) . ' PESOS ' . sprintf('%02d', $decimal) . '/100 M.N.';
}

function convertirNumero($num) {
    if ($num == 0) return '';
    
    $unidades = ['', 'UN', 'DOS', 'TRES', 'CUATRO', 'CINCO', 'SEIS', 'SIETE', 'OCHO', 'NUEVE'];
    $especiales = ['DIEZ', 'ONCE', 'DOCE', 'TRECE', 'CATORCE', 'QUINCE', 'DIECISEIS', 'DIECISIETE', 'DIECIOCHO', 'DIECINUEVE'];
    $decenas = ['', '', 'VEINTE', 'TREINTA', 'CUARENTA', 'CINCUENTA', 'SESENTA', 'SETENTA', 'OCHENTA', 'NOVENTA'];
    $centenas = ['', 'CIENTO', 'DOSCIENTOS', 'TRESCIENTOS', 'CUATROCIENTOS', 'QUINIENTOS', 'SEISCIENTOS', 'SETECIENTOS', 'OCHOCIENTOS', 'NOVECIENTOS'];
    
    $letras = '';
    
    // Millones
    if ($num >= 1000000) {
        $millones = floor($num / 1000000);
        if ($millones == 1) {
            $letras .= 'UN MILLON ';
        } else {
            $letras .= convertirNumero($millones) . ' MILLONES ';
        }
        $num = $num % 1000000;
    }
    
    // Miles
    if ($num >= 1000) {
        $miles = floor($num / 1000);
        if ($miles == 1) {
            $letras .= 'MIL ';
        } else {
            $letras .= convertirNumero($miles) . ' MIL ';
        }
        $num = $num % 1000;
    }
    
    // Centenas
    if ($num >= 100) {
        if ($num == 100) {
            return $letras . 'CIEN';
        }
        $letras .= $centenas[floor($num / 100)] . ' ';
        $num = $num % 100;
    }
    
    // Decenas y unidades
    if ($num >= 10 && $num < 20) {
        $letras .= $especiales[$num - 10];
    } else if ($num >= 20) {
        $dec = floor($num / 10);
        $uni = $num % 10;
        if ($uni == 0) {
            $letras .= $decenas[$dec];
        } else {
            $letras .= $decenas[$dec] . ' Y ' . $unidades[$uni];
        }
    } else if ($num > 0) {
        $letras .= $unidades[$num];
    }
    
    return trim($letras);
}

// Preparar variables para reemplazar en plantilla
$vars = [
    'NOMBRE' => trim($emp['nombre'] ?? ''),
    'APELLIDO_PATERNO' => trim($emp['apellido_paterno'] ?? ''),
    'APELLIDO_MATERNO' => trim($emp['apellido_materno'] ?? ''),
    'NOMBRE_COMPLETO' => trim(($emp['nombre'] ?? '') . ' ' . ($emp['apellido_paterno'] ?? '') . ' ' . ($emp['apellido_materno'] ?? '')),
    'RFC' => strtoupper($emp['rfc'] ?? ''),
    'CURP' => strtoupper($emp['curp'] ?? ''),
    'NSS' => $emp['nss'] ?? '',
    'SEXO' => strtoupper(($emp['sexo'] ?? '') === 'M' ? 'MASCULINO' : (($emp['sexo'] ?? '') === 'F' ? 'FEMENINO' : 'NO ESPECIFICADO')),
    'NACIONALIDAD' => strtoupper($emp['nacionalidad'] ?? 'MEXICANA'),
    'LUGAR_DE_NACIMIENTO' => strtoupper($emp['lugar_nacimiento'] ?? ''),
    'F_NACIMIENTO' => $emp['fecha_nacimiento'] ? date('d/m/Y', strtotime($emp['fecha_nacimiento'])) : '',
    'DOMICILIO' => trim(
        ($emp['domicilio_calle'] ?? '') . ' ' .
        ($emp['domicilio_num_ext'] ? '#' . $emp['domicilio_num_ext'] : '') . ' ' .
        ($emp['domicilio_num_int'] ? 'Int. ' . $emp['domicilio_num_int'] : '') . ', ' .
        ($emp['domicilio_colonia'] ? 'Col. ' . $emp['domicilio_colonia'] : '') . ', ' .
        ($emp['domicilio_municipio'] ?? '') . ', ' .
        ($emp['domicilio_estado'] ?? '') . ', ' .
        ($emp['domicilio_cp'] ? 'C.P. ' . $emp['domicilio_cp'] : '')
    ),
    'PUESTO' => $emp['puesto'] ?? 'POR DEFINIR',
    'SUELDO' => number_format($emp['sueldo_mensual'] ?? 0, 2),
    'SUELDO_DIARIO' => number_format($emp['sueldo_diario'] ?? 0, 2),
    'LETRA' => numeroALetras($emp['sueldo_mensual'] ?? 0),
    'F_INICIO_1er_contrato' => $fechaInicio ? date('d/m/Y', strtotime($fechaInicio)) : date('d/m/Y'),
    'FTERMINO_3er_contrato' => $fechaTermino ? date('d/m/Y', strtotime($fechaTermino)) : ($fechaInicio ? date('d/m/Y', strtotime($fechaInicio . ' +90 days')) : date('d/m/Y', strtotime('+90 days'))),
    'APODERADO_LEGAL' => $apoderado ?: 'REPRESENTANTE LEGAL',
    'FECHA_GENERACION' => date('d/m/Y')
];

// Obtener logo de la empresa (si existe)
$logo_path = '';
$sqlLogo = "SELECT logo_ruta FROM empresas_logos WHERE empresa_id = :eid LIMIT 1";
$stLogo = $pdo->prepare($sqlLogo);
$stLogo->execute([':eid' => $empresa_id]);
$logoRow = $stLogo->fetch(PDO::FETCH_ASSOC);
if ($logoRow && !empty($logoRow['logo_ruta'])) {
    $logo_path = $logoRow['logo_ruta'];
}

// Generar nombre de archivo
$timestamp = date('Ymd_His');
$nombreArchivo = $tipo_doc . '_' . ($emp['rfc'] ?? $timestamp) . '.pdf';

// Metadata
$meta = [
    'empresa_id' => $empresa_id,
    // Para nuevo ingreso no tenemos empleado_id aún → null
    'empleado_id' => $nuevo_ingreso_id > 0 ? null : $empleado_id,
    // No hay contrato creado todavía → null para no violar FK
    'contrato_id' => null,
    'tipo_documento' => $tipoDocEnum, // Usar nombre del ENUM
    'nombre_archivo' => $nombreArchivo,
    'logo_path' => $logo_path,
    'generado_por' => $usuario_id
];

// Generar PDF
$result = contratos_generar_y_guardar($templatePath, $vars, $meta);

// Validar resultado
if (!$result['ok']) {
    echo json_encode($result);
    exit;
}

if (empty($result['documento_id'])) {
    echo json_encode(['ok' => false, 'error' => 'No se pudo registrar el documento']);
    exit;
}

// Retornar JSON con el ID del documento generado
// La descarga se hará a través de contratos_descargar_pdf.php
echo json_encode([
    'ok' => true,
    'mensaje' => 'PDF generado correctamente',
    'documento_id' => $result['documento_id']
]);
exit;
