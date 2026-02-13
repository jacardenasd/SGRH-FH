-- =====================================================
-- Migración CORREGIDA: Módulo de Trámite de Pago a Proveedores
-- Fecha: 2026-02-11
-- Versión: 1.1 (sin foreign keys problemáticas)
-- =====================================================

-- =====================================================
-- Tabla: proveedores
-- =====================================================
CREATE TABLE IF NOT EXISTS proveedores (
    proveedor_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT UNSIGNED NOT NULL DEFAULT 1,
    
    -- Datos generales
    razon_social VARCHAR(255) NOT NULL,
    rfc VARCHAR(13) NOT NULL,
    nombre_comercial VARCHAR(255) DEFAULT NULL,
    
    -- Datos de contacto
    telefono VARCHAR(20) DEFAULT NULL,
    email VARCHAR(100) DEFAULT NULL,
    sitio_web VARCHAR(255) DEFAULT NULL,
    
    -- Dirección fiscal
    calle VARCHAR(255) DEFAULT NULL,
    numero_exterior VARCHAR(50) DEFAULT NULL,
    numero_interior VARCHAR(50) DEFAULT NULL,
    colonia VARCHAR(100) DEFAULT NULL,
    codigo_postal VARCHAR(10) DEFAULT NULL,
    municipio VARCHAR(100) DEFAULT NULL,
    estado VARCHAR(100) DEFAULT NULL,
    pais VARCHAR(100) DEFAULT 'México',
    
    -- Datos bancarios
    banco VARCHAR(100) DEFAULT NULL,
    numero_cuenta VARCHAR(50) DEFAULT NULL,
    clabe VARCHAR(18) DEFAULT NULL,
    
    -- Información adicional
    tipo_proveedor ENUM('bienes', 'servicios', 'construccion', 'arrendamiento', 'otro') DEFAULT 'servicios',
    categoria VARCHAR(100) DEFAULT NULL COMMENT 'Categoría del proveedor',
    
    -- Control
    estatus TINYINT(1) DEFAULT 1 COMMENT '1=Activo, 0=Inactivo',
    notas TEXT DEFAULT NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by INT UNSIGNED DEFAULT NULL,
    updated_by INT UNSIGNED DEFAULT NULL,
    
    -- Índices
    INDEX idx_empresa (empresa_id),
    INDEX idx_rfc (rfc),
    INDEX idx_razon_social (razon_social),
    INDEX idx_estatus (estatus),
    INDEX idx_tipo (tipo_proveedor),
    
    UNIQUE KEY uk_empresa_rfc (empresa_id, rfc)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- =====================================================
-- Tabla: pago_proveedores
-- =====================================================
CREATE TABLE IF NOT EXISTS pago_proveedores (
    pago_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT UNSIGNED NOT NULL DEFAULT 1,
    proveedor_id INT UNSIGNED NOT NULL,
    
    -- Datos básicos del trámite
    folio VARCHAR(50) NOT NULL,
    fecha_solicitud DATE NOT NULL,
    fecha_limite_pago DATE DEFAULT NULL,
    
    -- Concepto y montos
    concepto TEXT NOT NULL,
    subtotal DECIMAL(15,2) NOT NULL DEFAULT 0.00,
    iva DECIMAL(15,2) NOT NULL DEFAULT 0.00,
    retenciones DECIMAL(15,2) NOT NULL DEFAULT 0.00,
    otros_impuestos DECIMAL(15,2) NOT NULL DEFAULT 0.00,
    total DECIMAL(15,2) NOT NULL DEFAULT 0.00,
    
    -- Referencias documentales
    numero_factura VARCHAR(100) DEFAULT NULL,
    numero_contrato VARCHAR(100) DEFAULT NULL,
    numero_orden_compra VARCHAR(100) DEFAULT NULL,
    numero_requisicion VARCHAR(100) DEFAULT NULL,
    
    -- Unidad organizacional solicitante
    unidad_id INT UNSIGNED DEFAULT NULL,
    adscripcion_id INT UNSIGNED DEFAULT NULL,
    
    -- Estado del trámite
    estatus ENUM('borrador', 'pendiente', 'revision', 'autorizado', 'rechazado', 'pagado', 'cancelado') 
        DEFAULT 'borrador',
    prioridad ENUM('baja', 'normal', 'alta', 'urgente') DEFAULT 'normal',
    
    -- Autorización
    autorizado_por INT UNSIGNED DEFAULT NULL,
    fecha_autorizacion DATETIME DEFAULT NULL,
    comentarios_autorizacion TEXT DEFAULT NULL,
    
    -- Pago
    pagado_por INT UNSIGNED DEFAULT NULL,
    fecha_pago DATE DEFAULT NULL,
    referencia_pago VARCHAR(100) DEFAULT NULL,
    metodo_pago ENUM('transferencia', 'cheque', 'efectivo', 'tarjeta', 'otro') DEFAULT 'transferencia',
    
    -- Observaciones
    notas TEXT DEFAULT NULL,
    motivo_rechazo TEXT DEFAULT NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by INT UNSIGNED DEFAULT NULL,
    updated_by INT UNSIGNED DEFAULT NULL,
    
    -- Índices
    INDEX idx_empresa (empresa_id),
    INDEX idx_proveedor (proveedor_id),
    INDEX idx_folio (folio),
    INDEX idx_estatus (estatus),
    INDEX idx_fecha_solicitud (fecha_solicitud),
    INDEX idx_fecha_limite (fecha_limite_pago),
    INDEX idx_unidad (unidad_id),
    INDEX idx_prioridad (prioridad),
    INDEX idx_fecha_pago (fecha_pago),
    
    UNIQUE KEY uk_empresa_folio (empresa_id, folio),
    
    -- Foreign key solo a proveedores
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- =====================================================
-- Tabla: pago_proveedores_documentos
-- =====================================================
CREATE TABLE IF NOT EXISTS pago_proveedores_documentos (
    documento_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pago_id INT UNSIGNED NOT NULL,
    
    -- Datos del documento
    nombre_archivo VARCHAR(255) NOT NULL,
    nombre_original VARCHAR(255) NOT NULL,
    tipo_documento ENUM('factura', 'contrato', 'cotizacion', 'orden_compra', 'requisicion', 'comprobante_pago', 'otro') 
        DEFAULT 'otro',
    ruta_archivo VARCHAR(500) NOT NULL,
    mime_type VARCHAR(100) DEFAULT NULL,
    tamano_bytes INT UNSIGNED DEFAULT NULL,
    
    -- Metadatos
    descripcion TEXT DEFAULT NULL,
    
    -- Auditoría
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    uploaded_by INT UNSIGNED DEFAULT NULL,
    
    -- Índices
    INDEX idx_pago (pago_id),
    INDEX idx_tipo (tipo_documento),
    
    FOREIGN KEY (pago_id) REFERENCES pago_proveedores(pago_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- =====================================================
-- Tabla: pago_proveedores_historial
-- =====================================================
CREATE TABLE IF NOT EXISTS pago_proveedores_historial (
    historial_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pago_id INT UNSIGNED NOT NULL,
    
    -- Datos del cambio
    estatus_anterior VARCHAR(50) DEFAULT NULL,
    estatus_nuevo VARCHAR(50) NOT NULL,
    comentario TEXT DEFAULT NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_by INT UNSIGNED DEFAULT NULL,
    
    -- Índices
    INDEX idx_pago (pago_id),
    INDEX idx_fecha (created_at),
    
    FOREIGN KEY (pago_id) REFERENCES pago_proveedores(pago_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- =====================================================
-- PERMISOS (SIN created_at si no existe)
-- =====================================================
INSERT INTO permisos (clave, descripcion, modulo)
VALUES 
    ('pagos_proveedores.admin', 'Administración completa de Pagos a Proveedores', 'Administración'),
    ('pagos_proveedores.solicitar', 'Crear y consultar solicitudes propias de pago', 'Administración'),
    ('pagos_proveedores.autorizar', 'Autorizar/Rechazar solicitudes de pago', 'Administración'),
    ('pagos_proveedores.pagar', 'Registrar pagos realizados', 'Administración'),
    ('pagos_proveedores.ver', 'Ver solicitudes de pago (solo lectura)', 'Administración')
ON DUPLICATE KEY UPDATE descripcion = VALUES(descripcion);


-- =====================================================
-- Asignar permisos a roles
-- =====================================================
INSERT IGNORE INTO rol_permisos (rol_id, permiso_id)
SELECT r.rol_id, p.permiso_id
FROM roles r
CROSS JOIN permisos p
WHERE r.nombre LIKE '%Admin%' 
  AND p.clave = 'pagos_proveedores.admin';

INSERT IGNORE INTO rol_permisos (rol_id, permiso_id)
SELECT r.rol_id, p.permiso_id
FROM roles r
CROSS JOIN permisos p
WHERE r.nombre LIKE '%Organizaci%n%' 
  AND p.clave IN ('pagos_proveedores.admin', 'pagos_proveedores.autorizar');


-- =====================================================
-- Vista auxiliar
-- =====================================================
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
    COUNT(CASE WHEN p.estatus = 'rechazado' THEN 1 END) AS rechazados,
    SUM(p.total) AS monto_total_solicitado,
    SUM(CASE WHEN p.estatus = 'pagado' THEN p.total ELSE 0 END) AS monto_pagado,
    SUM(CASE WHEN p.estatus IN ('pendiente', 'revision', 'autorizado') THEN p.total ELSE 0 END) AS monto_pendiente,
    MAX(p.fecha_solicitud) AS ultima_solicitud
FROM proveedores prov
LEFT JOIN pago_proveedores p ON p.proveedor_id = prov.proveedor_id
WHERE prov.estatus = 1
GROUP BY p.proveedor_id, prov.razon_social, prov.rfc;
