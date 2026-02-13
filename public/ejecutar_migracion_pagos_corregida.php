<?php
// Ejecutar migración corregida directamente
ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/guard.php';
require_once __DIR__ . '/../includes/conexion.php';

require_login();

echo "<h2>🔧 Ejecutando Migración Corregida v2</h2><hr>";

// SQL directo sin foreign keys problemáticas
$queries = [
    // Tabla pago_proveedores
    "CREATE TABLE IF NOT EXISTS pago_proveedores (
        pago_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        empresa_id INT UNSIGNED NOT NULL DEFAULT 1,
        proveedor_id INT UNSIGNED NOT NULL,
        folio VARCHAR(50) NOT NULL,
        fecha_solicitud DATE NOT NULL,
        fecha_limite_pago DATE DEFAULT NULL,
        concepto TEXT NOT NULL,
        subtotal DECIMAL(15,2) NOT NULL DEFAULT 0.00,
        iva DECIMAL(15,2) NOT NULL DEFAULT 0.00,
        retenciones DECIMAL(15,2) NOT NULL DEFAULT 0.00,
        otros_impuestos DECIMAL(15,2) NOT NULL DEFAULT 0.00,
        total DECIMAL(15,2) NOT NULL DEFAULT 0.00,
        numero_factura VARCHAR(100) DEFAULT NULL,
        numero_contrato VARCHAR(100) DEFAULT NULL,
        numero_orden_compra VARCHAR(100) DEFAULT NULL,
        numero_requisicion VARCHAR(100) DEFAULT NULL,
        unidad_id INT UNSIGNED DEFAULT NULL,
        adscripcion_id INT UNSIGNED DEFAULT NULL,
        estatus ENUM('borrador', 'pendiente', 'revision', 'autorizado', 'rechazado', 'pagado', 'cancelado') DEFAULT 'borrador',
        prioridad ENUM('baja', 'normal', 'alta', 'urgente') DEFAULT 'normal',
        autorizado_por INT UNSIGNED DEFAULT NULL,
        fecha_autorizacion DATETIME DEFAULT NULL,
        comentarios_autorizacion TEXT DEFAULT NULL,
        pagado_por INT UNSIGNED DEFAULT NULL,
        fecha_pago DATE DEFAULT NULL,
        referencia_pago VARCHAR(100) DEFAULT NULL,
        metodo_pago ENUM('transferencia', 'cheque', 'efectivo', 'tarjeta', 'otro') DEFAULT 'transferencia',
        notas TEXT DEFAULT NULL,
        motivo_rechazo TEXT DEFAULT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        created_by INT UNSIGNED DEFAULT NULL,
        updated_by INT UNSIGNED DEFAULT NULL,
        INDEX idx_empresa (empresa_id),
        INDEX idx_proveedor (proveedor_id),
        INDEX idx_folio (folio),
        INDEX idx_estatus (estatus),
        INDEX idx_fecha_solicitud (fecha_solicitud),
        INDEX idx_unidad (unidad_id),
        INDEX idx_prioridad (prioridad),
        UNIQUE KEY uk_empresa_folio (empresa_id, folio),
        FOREIGN KEY (proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE RESTRICT
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
    
    // Tabla pago_proveedores_documentos
    "CREATE TABLE IF NOT EXISTS pago_proveedores_documentos (
        documento_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        pago_id INT UNSIGNED NOT NULL,
        nombre_archivo VARCHAR(255) NOT NULL,
        nombre_original VARCHAR(255) NOT NULL,
        tipo_documento ENUM('factura', 'contrato', 'cotizacion', 'orden_compra', 'requisicion', 'comprobante_pago', 'otro') DEFAULT 'otro',
        ruta_archivo VARCHAR(500) NOT NULL,
        mime_type VARCHAR(100) DEFAULT NULL,
        tamano_bytes INT UNSIGNED DEFAULT NULL,
        descripcion TEXT DEFAULT NULL,
        uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        uploaded_by INT UNSIGNED DEFAULT NULL,
        INDEX idx_pago (pago_id),
        INDEX idx_tipo (tipo_documento),
        FOREIGN KEY (pago_id) REFERENCES pago_proveedores(pago_id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
    
    // Tabla pago_proveedores_historial
    "CREATE TABLE IF NOT EXISTS pago_proveedores_historial (
        historial_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        pago_id INT UNSIGNED NOT NULL,
        estatus_anterior VARCHAR(50) DEFAULT NULL,
        estatus_nuevo VARCHAR(50) NOT NULL,
        comentario TEXT DEFAULT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        created_by INT UNSIGNED DEFAULT NULL,
        INDEX idx_pago (pago_id),
        INDEX idx_fecha (created_at),
        FOREIGN KEY (pago_id) REFERENCES pago_proveedores(pago_id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
];

$success = 0;
$errors = 0;

foreach ($queries as $index => $query) {
    echo "<div style='padding: 10px; margin: 10px 0; border-left: 3px solid #ccc;'>";
    echo "<strong>Tabla " . ($index + 1) . ":</strong> ";
    
    try {
        $pdo->exec($query);
        echo "<span style='color: green;'>✅ Creada exitosamente</span>";
        $success++;
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'already exists') !== false) {
            echo "<span style='color: orange;'>⚠️ Ya existe</span>";
        } else {
            echo "<span style='color: red;'>❌ ERROR: " . htmlspecialchars($e->getMessage()) . "</span>";
            $errors++;
        }
    }
    echo "</div>";
}

// Insertar permisos
echo "<hr><h3>🔐 Creando Permisos:</h3>";

$permisos = [
    ['pagos_proveedores.admin', 'Administración completa de Pagos a Proveedores', 'Administración'],
    ['pagos_proveedores.solicitar', 'Crear y consultar solicitudes propias de pago', 'Administración'],
    ['pagos_proveedores.autorizar', 'Autorizar/Rechazar solicitudes de pago', 'Administración'],
    ['pagos_proveedores.pagar', 'Registrar pagos realizados', 'Administración'],
    ['pagos_proveedores.ver', 'Ver solicitudes de pago (solo lectura)', 'Administración']
];

foreach ($permisos as $p) {
    try {
        $stmt = $pdo->prepare("INSERT INTO permisos (clave, descripcion, modulo) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE descripcion = VALUES(descripcion)");
        $stmt->execute([$p[0], $p[1], $p[2]]);
        echo "<p style='color: green;'>✅ <strong>{$p[0]}</strong></p>";
    } catch (PDOException $e) {
        echo "<p style='color: red;'>❌ {$p[0]}: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}

// Asignar a roles
echo "<hr><h3>👥 Asignando a Roles:</h3>";

try {
    $stmt = $pdo->exec("
        INSERT IGNORE INTO rol_permisos (rol_id, permiso_id)
        SELECT r.rol_id, p.permiso_id
        FROM roles r
        CROSS JOIN permisos p
        WHERE r.nombre LIKE '%Admin%' 
          AND p.clave = 'pagos_proveedores.admin'
    ");
    echo "<p style='color: green;'>✅ Asignado a rol Admin</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ " . htmlspecialchars($e->getMessage()) . "</p>";
}

try {
    $stmt = $pdo->exec("
        INSERT IGNORE INTO rol_permisos (rol_id, permiso_id)
        SELECT r.rol_id, p.permiso_id
        FROM roles r
        CROSS JOIN permisos p
        WHERE r.nombre LIKE '%Organizaci%n%' 
          AND p.clave IN ('pagos_proveedores.admin', 'pagos_proveedores.autorizar')
    ");
    echo "<p style='color: green;'>✅ Asignado a rol Admin Organización</p>";
} catch (Exception $e) {
    echo "<p style='color: orange;'>⚠️ " . htmlspecialchars($e->getMessage()) . "</p>";
}

// Crear vista
echo "<hr><h3>👁️ Creando Vista:</h3>";
try {
    $pdo->exec("
        CREATE OR REPLACE VIEW v_pagos_proveedores_resumen AS
        SELECT 
            p.proveedor_id,
            prov.razon_social,
            prov.rfc,
            COUNT(p.pago_id) AS total_solicitudes,
            COUNT(CASE WHEN p.estatus = 'pendiente' THEN 1 END) AS pendientes,
            COUNT(CASE WHEN p.estatus = 'revision' THEN 1 END) AS en_revision,
            COUNT(CASE WHEN p.estatus = 'autorizado' THEN 1 END) AS autorizados,
            COUNT(CASE WHEN p.estatus = 'pagado' THEN 1 END) AS pagados,
            SUM(p.total) AS monto_total_solicitado,
            SUM(CASE WHEN p.estatus = 'pagado' THEN p.total ELSE 0 END) AS monto_pagado,
            MAX(p.fecha_solicitud) AS ultima_solicitud
        FROM proveedores prov
        LEFT JOIN pago_proveedores p ON p.proveedor_id = prov.proveedor_id
        WHERE prov.estatus = 1
        GROUP BY p.proveedor_id, prov.razon_social, prov.rfc
    ");
    echo "<p style='color: green;'>✅ Vista creada</p>";
} catch (Exception $e) {
    echo "<p style='color: orange;'>⚠️ " . htmlspecialchars($e->getMessage()) . "</p>";
}

echo "<hr>";
echo "<h3>📊 Resumen:</h3>";
echo "<ul>";
echo "<li>✅ Exitosos: $success</li>";
echo "<li>❌ Errores: $errors</li>";
echo "</ul>";

echo "<hr>";
echo "<p><a href='verificar_migracion_pagos.php' style='display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;'>🔍 Verificar Instalación</a></p>";
echo "<p><a href='admin_pagos_proveedores.php' style='display: inline-block; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;'>➡️ Ir al Módulo</a></p>";
?>
