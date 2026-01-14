-- =====================================================
-- Sistema de Gestión de Contratos - SGRH
-- Estructura de base de datos para kit de contratación
-- Compatible MySQL 5.7
-- =====================================================

-- TABLA NUEVA: empleados_nuevo_ingreso
-- Almacena solicitudes de contratación de empleados NUEVOS (no importados de nómina)
CREATE TABLE IF NOT EXISTS empleados_nuevo_ingreso (
    nuevo_ingreso_id INT AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT NOT NULL,
    
    -- Datos básicos
    nombre VARCHAR(150),
    apellido_paterno VARCHAR(100),
    apellido_materno VARCHAR(100),
    sexo CHAR(1) COMMENT 'M/F',
    fecha_nacimiento DATE,
    nacionalidad VARCHAR(50),
    lugar_nacimiento VARCHAR(150),
    
    -- Identificación
    rfc VARCHAR(13),
    curp VARCHAR(18),
    nss VARCHAR(20),
    
    -- Domicilio
    domicilio_calle VARCHAR(200),
    domicilio_num_ext VARCHAR(20),
    domicilio_num_int VARCHAR(20),
    domicilio_cp VARCHAR(10),
    domicilio_estado VARCHAR(100),
    domicilio_municipio VARCHAR(150),
    domicilio_colonia VARCHAR(150),
    
    -- Datos de pago
    apoderado_legal_id INT,
    fecha_alta DATE,
    tipo_nomina VARCHAR(50) COMMENT 'Semanal/Quincenal/Mensual',
    sueldo_diario DECIMAL(10,2),
    sueldo_mensual DECIMAL(10,2),
    sueldo_integrado DECIMAL(10,2),
    banco_id INT,
    numero_cuenta VARCHAR(50),
    clabe VARCHAR(18),
    
    -- Datos adicionales
    correo_empresa VARCHAR(100),
    correo_personal VARCHAR(100),
    escolaridad_id INT,
    telefono_personal VARCHAR(20),
    telefono_empresa VARCHAR(20),
    unidad_medica_familiar VARCHAR(100),
    tiene_credito_infonavit CHAR(1) COMMENT 'S/N',
    
    -- Campos de control
    datos_completos TINYINT(1) DEFAULT 0 COMMENT '1 si tiene RFC, CURP, NSS, sueldo_mensual, banco_id',
    estatus ENUM('nuevo','en_proceso','completado','rechazado') DEFAULT 'nuevo',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    creado_por INT,
    
    KEY (empresa_id),
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE,
    FOREIGN KEY (apoderado_legal_id) REFERENCES org_apoderados(apoderado_id),
    FOREIGN KEY (banco_id) REFERENCES cat_bancos(banco_id),
    FOREIGN KEY (escolaridad_id) REFERENCES cat_escolaridades(escolaridad_id),
    FOREIGN KEY (creado_por) REFERENCES usuarios(usuario_id)
);

-- Campos de CAMPOS.pdf (datos básicos, pago, adicionales, familiares/beneficiarios)
-- Nota: comenta las columnas que ya existan para evitar errores en tu esquema actual.
/*
ALTER TABLE empleados_demograficos

    -- Datos básicos
    ADD COLUMN numero_empleado VARCHAR(50) NULL AFTER empleado_id,
    -- Descomenta solo si NO existen en tu tabla actual
    -- ADD COLUMN apellido_paterno VARCHAR(100) NULL AFTER numero_empleado,
    -- ADD COLUMN apellido_materno VARCHAR(100) NULL AFTER apellido_paterno,
    -- ADD COLUMN nombre VARCHAR(150) NULL AFTER apellido_materno,
    -- ADD COLUMN sexo CHAR(1) NULL COMMENT 'H/M derivado de CURP' AFTER nombre,
    -- ADD COLUMN fecha_nacimiento DATE NULL AFTER sexo,
    -- ADD COLUMN edad INT NULL AFTER fecha_nacimiento,
    -- ADD COLUMN nacionalidad VARCHAR(50) NULL AFTER edad,
    -- ADD COLUMN lugar_nacimiento VARCHAR(150) NULL AFTER nacionalidad,
    -- ADD COLUMN estado_civil ENUM('SOLTERO','CASADO','VIUDO','DIVORCIADO','UNION_LIBRE','OTRO') NULL AFTER lugar_nacimiento,
    -- ADD COLUMN rfc VARCHAR(13) NULL AFTER estado_civil,
    -- ADD COLUMN curp VARCHAR(18) NULL AFTER rfc,
    -- ADD COLUMN nss VARCHAR(20) NULL AFTER curp,
    ADD COLUMN domicilio_calle VARCHAR(200) NULL AFTER nss,
    ADD COLUMN domicilio_num_ext VARCHAR(20) NULL AFTER domicilio_calle,
    ADD COLUMN domicilio_num_int VARCHAR(20) NULL AFTER domicilio_num_ext,
    ADD COLUMN domicilio_cp VARCHAR(10) NULL AFTER domicilio_num_int,
    ADD COLUMN domicilio_colonia VARCHAR(150) NULL AFTER domicilio_cp,
    ADD COLUMN domicilio_municipio VARCHAR(150) NULL AFTER domicilio_colonia,
    ADD COLUMN domicilio_estado VARCHAR(100) NULL AFTER domicilio_municipio,

    -- Datos de pago
    ADD COLUMN empresa_id_pago INT NULL COMMENT 'Empresa activa' AFTER domicilio_estado,
    ADD COLUMN apoderado_legal_id INT NULL COMMENT 'org_apoderados' AFTER empresa_id_pago,
    ADD COLUMN puesto_id INT NULL COMMENT 'catálogo de puestos' AFTER apoderado_legal_id,
    ADD COLUMN departamento_id INT NULL COMMENT 'catálogo de departamentos' AFTER puesto_id,
    ADD COLUMN fecha_alta DATE NULL AFTER departamento_id,
    ADD COLUMN dias_contrato_det1 INT NULL COMMENT 'Contrato determinado 1 (naturales)' AFTER fecha_alta,
    ADD COLUMN dias_contrato_det2 INT NULL COMMENT 'Contrato determinado 2 (naturales)' AFTER dias_contrato_det1,
    ADD COLUMN dias_contrato_det3 INT NULL COMMENT 'Contrato determinado 3 (naturales)' AFTER dias_contrato_det2,
    ADD COLUMN fecha_contrato_indeterminado DATE NULL AFTER dias_contrato_det3,
    ADD COLUMN tipo_nomina ENUM('SEMANAL','QUINCENAL') NULL AFTER fecha_contrato_indeterminado,
    ADD COLUMN sueldo_diario DECIMAL(10,2) NULL AFTER tipo_nomina,
    ADD COLUMN sueldo_mensual DECIMAL(10,2) NULL AFTER sueldo_diario,
    ADD COLUMN sueldo_integrado DECIMAL(10,2) NULL AFTER sueldo_mensual,
    ADD COLUMN banco_id INT NULL COMMENT 'cat_bancos' AFTER sueldo_integrado,
    ADD COLUMN numero_cuenta VARCHAR(50) NULL AFTER banco_id,
    ADD COLUMN clabe VARCHAR(18) NULL AFTER numero_cuenta,
    ADD COLUMN ubicacion_id INT NULL COMMENT 'org_centros_trabajo' AFTER clabe,
    ADD COLUMN jefe_inmediato_id INT NULL COMMENT 'empleado_id del jefe' AFTER ubicacion_id,

    -- Adicionales
    ADD COLUMN sustitute_a VARCHAR(255) NULL AFTER jefe_inmediato_id,
    ADD COLUMN correo_empresa VARCHAR(255) NULL AFTER sustitute_a,
    ADD COLUMN correo_personal VARCHAR(255) NULL AFTER correo_empresa,
    ADD COLUMN escolaridad_id INT NULL COMMENT 'cat_escolaridades' AFTER correo_personal,
    ADD COLUMN telefono_personal VARCHAR(20) NULL AFTER escolaridad_id,
    ADD COLUMN telefono_empresa VARCHAR(20) NULL AFTER telefono_personal,
    ADD COLUMN unidad_medica_familiar VARCHAR(100) NULL AFTER telefono_empresa,
    ADD COLUMN tiene_credito_infonavit TINYINT(1) DEFAULT 0 AFTER unidad_medica_familiar,

    -- Familiares / beneficiarios (registro maestro; detalle en tabla empleados_familiares)
    ADD COLUMN tiene_beneficiarios TINYINT(1) DEFAULT 0 AFTER tiene_credito_infonavit,

    -- Control de contratos
    ADD COLUMN tipo_contrato ENUM('TEMPORAL','PERMANENTE') DEFAULT 'TEMPORAL' AFTER tiene_beneficiarios,
    ADD COLUMN numero_contrato_actual INT DEFAULT 1 COMMENT '1,2,3 determinado; 0 indeterminado' AFTER tipo_contrato,
    ADD COLUMN fecha_inicio_contrato DATE NULL AFTER numero_contrato_actual,
    ADD COLUMN fecha_fin_contrato DATE NULL AFTER fecha_inicio_contrato,
    ADD COLUMN dias_contrato INT DEFAULT 90 AFTER fecha_fin_contrato
;
*/

-- =====================================================
-- 1b. Script idempotente para agregar columnas que no existan en empleados_demograficos
--     Úsalo si no quieres editar manualmente el ALTER anterior.
-- =====================================================
DELIMITER //
DROP PROCEDURE IF EXISTS sp_add_cols_empleados_demograficos;//
CREATE PROCEDURE sp_add_cols_empleados_demograficos()
BEGIN
    -- Helper: agrega columna solo si no existe
    IF NOT EXISTS (
        SELECT 1 FROM information_schema.columns
        WHERE table_schema = DATABASE()
          AND table_name = 'empleados_demograficos'
          AND column_name = 'numero_empleado'
    ) THEN
        ALTER TABLE empleados_demograficos
            ADD COLUMN numero_empleado VARCHAR(50) NULL AFTER empleado_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'apellido_paterno') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN apellido_paterno VARCHAR(100) NULL AFTER numero_empleado;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'apellido_materno') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN apellido_materno VARCHAR(100) NULL AFTER apellido_paterno;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'nombre') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN nombre VARCHAR(150) NULL AFTER apellido_materno;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'sexo') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN sexo CHAR(1) NULL COMMENT 'H/M derivado de CURP' AFTER nombre;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'fecha_nacimiento') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN fecha_nacimiento DATE NULL AFTER sexo;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'edad') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN edad INT NULL AFTER fecha_nacimiento;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'nacionalidad') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN nacionalidad VARCHAR(50) NULL AFTER edad;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'lugar_nacimiento') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN lugar_nacimiento VARCHAR(150) NULL AFTER nacionalidad;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'estado_civil') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN estado_civil ENUM('SOLTERO','CASADO','VIUDO','DIVORCIADO','UNION_LIBRE','OTRO') NULL AFTER lugar_nacimiento;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'rfc') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN rfc VARCHAR(13) NULL AFTER estado_civil;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'curp') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN curp VARCHAR(18) NULL AFTER rfc;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'nss') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN nss VARCHAR(20) NULL AFTER curp;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_calle') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_calle VARCHAR(200) NULL AFTER nss;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_num_ext') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_num_ext VARCHAR(20) NULL AFTER domicilio_calle;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_num_int') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_num_int VARCHAR(20) NULL AFTER domicilio_num_ext;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_cp') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_cp VARCHAR(10) NULL AFTER domicilio_num_int;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_colonia') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_colonia VARCHAR(150) NULL AFTER domicilio_cp;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_municipio') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_municipio VARCHAR(150) NULL AFTER domicilio_colonia;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'domicilio_estado') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN domicilio_estado VARCHAR(100) NULL AFTER domicilio_municipio;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'empresa_id_pago') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN empresa_id_pago INT NULL COMMENT 'Empresa activa' AFTER domicilio_estado;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'apoderado_legal_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN apoderado_legal_id INT NULL COMMENT 'org_apoderados' AFTER empresa_id_pago;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'puesto_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN puesto_id INT NULL COMMENT 'catálogo de puestos' AFTER apoderado_legal_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'departamento_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN departamento_id INT NULL COMMENT 'catálogo de departamentos' AFTER puesto_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'fecha_alta') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN fecha_alta DATE NULL AFTER departamento_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'dias_contrato_det1') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN dias_contrato_det1 INT NULL COMMENT 'Contrato determinado 1 (naturales)' AFTER fecha_alta;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'dias_contrato_det2') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN dias_contrato_det2 INT NULL COMMENT 'Contrato determinado 2 (naturales)' AFTER dias_contrato_det1;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'dias_contrato_det3') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN dias_contrato_det3 INT NULL COMMENT 'Contrato determinado 3 (naturales)' AFTER dias_contrato_det2;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'fecha_contrato_indeterminado') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN fecha_contrato_indeterminado DATE NULL AFTER dias_contrato_det3;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'tipo_nomina') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN tipo_nomina ENUM('SEMANAL','QUINCENAL') NULL AFTER fecha_contrato_indeterminado;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'sueldo_diario') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN sueldo_diario DECIMAL(10,2) NULL AFTER tipo_nomina;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'sueldo_mensual') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN sueldo_mensual DECIMAL(10,2) NULL AFTER sueldo_diario;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'sueldo_integrado') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN sueldo_integrado DECIMAL(10,2) NULL AFTER sueldo_mensual;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'banco_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN banco_id INT NULL COMMENT 'cat_bancos' AFTER sueldo_integrado;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'numero_cuenta') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN numero_cuenta VARCHAR(50) NULL AFTER banco_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'clabe') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN clabe VARCHAR(18) NULL AFTER numero_cuenta;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'ubicacion_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN ubicacion_id INT NULL COMMENT 'org_centros_trabajo' AFTER clabe;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'jefe_inmediato_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN jefe_inmediato_id INT NULL COMMENT 'empleado_id del jefe' AFTER ubicacion_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'sustitute_a') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN sustitute_a VARCHAR(255) NULL AFTER jefe_inmediato_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'correo_empresa') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN correo_empresa VARCHAR(255) NULL AFTER sustitute_a;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'correo_personal') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN correo_personal VARCHAR(255) NULL AFTER correo_empresa;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'escolaridad_id') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN escolaridad_id INT NULL COMMENT 'cat_escolaridades' AFTER correo_personal;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'telefono_personal') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN telefono_personal VARCHAR(20) NULL AFTER escolaridad_id;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'telefono_empresa') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN telefono_empresa VARCHAR(20) NULL AFTER telefono_personal;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'unidad_medica_familiar') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN unidad_medica_familiar VARCHAR(100) NULL AFTER telefono_empresa;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'tiene_credito_infonavit') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN tiene_credito_infonavit TINYINT(1) DEFAULT 0 AFTER unidad_medica_familiar;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'tiene_beneficiarios') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN tiene_beneficiarios TINYINT(1) DEFAULT 0 AFTER tiene_credito_infonavit;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'tipo_contrato') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN tipo_contrato ENUM('TEMPORAL','PERMANENTE') DEFAULT 'TEMPORAL' AFTER tiene_beneficiarios;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'numero_contrato_actual') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN numero_contrato_actual INT DEFAULT 1 COMMENT '1,2,3 determinado; 0 indeterminado' AFTER tipo_contrato;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'fecha_inicio_contrato') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN fecha_inicio_contrato DATE NULL AFTER numero_contrato_actual;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'fecha_fin_contrato') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN fecha_fin_contrato DATE NULL AFTER fecha_inicio_contrato;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'dias_contrato') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN dias_contrato INT DEFAULT 90 AFTER fecha_fin_contrato;
    END IF;

    IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'empleados_demograficos' AND column_name = 'datos_completos') THEN
        ALTER TABLE empleados_demograficos ADD COLUMN datos_completos TINYINT(1) DEFAULT 0 COMMENT '1 si RFC, CURP, NSS, sueldo y banco están capturados' AFTER dias_contrato;
    END IF;
END;//
DELIMITER ;

CALL sp_add_cols_empleados_demograficos();
DROP PROCEDURE IF EXISTS sp_add_cols_empleados_demograficos;


-- =====================================================
-- 2. Tabla de contratos (histórico y control)
-- =====================================================
CREATE TABLE IF NOT EXISTS contratos (
    contrato_id INT PRIMARY KEY AUTO_INCREMENT,
    empleado_id INT NOT NULL,
    empresa_id INT NOT NULL,
    tipo_contrato ENUM('temporal','permanente') NOT NULL DEFAULT 'temporal',
    numero_contrato INT NOT NULL DEFAULT 1 COMMENT 'Para temporales: 1, 2 o 3',
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NULL COMMENT 'NULL para permanentes',
    dias_naturales INT NULL COMMENT 'Días del contrato temporal',
    estatus ENUM('borrador','activo','por_vencer','evaluacion_pendiente','aprobado','rechazado','finalizado','convertido_permanente') DEFAULT 'borrador',
    
    -- Datos del contrato
    puesto VARCHAR(255) NULL,
    departamento VARCHAR(255) NULL,
    jefe_inmediato_id INT NULL COMMENT 'empleado_id del jefe',
    salario_mensual DECIMAL(10,2) NULL,
    salario_diario DECIMAL(10,2) NULL,
    
    -- Control de notificaciones
    notificacion_enviada TINYINT(1) DEFAULT 0,
    fecha_notificacion DATETIME NULL,
    
    -- Evaluación y aprobación
    requiere_evaluacion TINYINT(1) DEFAULT 0 COMMENT '1 si necesita eval para renovar/permanente',
    evaluacion_completada TINYINT(1) DEFAULT 0,
    fecha_evaluacion DATETIME NULL,
    aprobado_por INT NULL COMMENT 'usuario_id del jefe que aprobó',
    fecha_aprobacion DATETIME NULL,
    
    -- Documentos generados
    documentos_generados TINYINT(1) DEFAULT 0,
    fecha_generacion_docs DATETIME NULL,
    
    -- Auditoría
    creado_por INT NULL COMMENT 'usuario_id',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    INDEX idx_empleado (empleado_id),
    INDEX idx_empresa (empresa_id),
    INDEX idx_estatus (estatus),
    INDEX idx_fecha_fin (fecha_fin),
    INDEX idx_jefe (jefe_inmediato_id),
    
    FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id) ON DELETE CASCADE,
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- 3. Evaluaciones de desempeño para renovación/permanente
-- =====================================================
CREATE TABLE IF NOT EXISTS contratos_evaluaciones (
    evaluacion_id INT PRIMARY KEY AUTO_INCREMENT,
    contrato_id INT NOT NULL,
    empleado_id INT NOT NULL,
    empresa_id INT NOT NULL,
    evaluador_id INT NOT NULL COMMENT 'usuario_id del jefe inmediato',
    
    -- Criterios de evaluación (ajustar según necesidades)
    puntualidad INT NULL COMMENT '1-5',
    responsabilidad INT NULL COMMENT '1-5',
    calidad_trabajo INT NULL COMMENT '1-5',
    trabajo_equipo INT NULL COMMENT '1-5',
    iniciativa INT NULL COMMENT '1-5',
    
    -- Calificación general
    calificacion_general DECIMAL(3,2) NULL COMMENT 'Promedio de criterios',
    
    -- Comentarios
    fortalezas TEXT NULL,
    areas_mejora TEXT NULL,
    comentarios_adicionales TEXT NULL,
    
    -- Decisión
    recomendacion ENUM('aprobar','rechazar','extender_temporal') NOT NULL,
    justificacion TEXT NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    INDEX idx_contrato (contrato_id),
    INDEX idx_empleado (empleado_id),
    INDEX idx_evaluador (evaluador_id),
    
    FOREIGN KEY (contrato_id) REFERENCES contratos(contrato_id) ON DELETE CASCADE,
    FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id) ON DELETE CASCADE,
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- 4. Familiares y beneficiarios (hasta 10 por empleado)
-- =====================================================
CREATE TABLE IF NOT EXISTS empleados_familiares (
    familiar_id INT PRIMARY KEY AUTO_INCREMENT,
    empleado_id INT NOT NULL,
    empresa_id INT NOT NULL,
    
    -- Datos del familiar
    tipo ENUM('conyuge','hijo','padre','madre','hermano','otro') NOT NULL COMMENT 'tabla parentescos_tipos',
    nombre_completo VARCHAR(255) NOT NULL,
    parentesco_id INT NULL COMMENT 'tabla parentescos',
    parentesco_otro VARCHAR(100) NULL,
    fecha_nacimiento DATE NULL,
    edad INT NULL,
    sexo ENUM('M','F','Otro') NULL,

    -- Documentos
    curp VARCHAR(18) NULL,
    rfc VARCHAR(13) NULL,

    -- Beneficiario / seguro
    es_beneficiario TINYINT(1) DEFAULT 0,
    porcentaje_beneficio DECIMAL(5,2) NULL COMMENT 'Porcentaje si es beneficiario',
    tipo_beneficiario_id INT NULL COMMENT 'tabla parentescos_tipos',

    -- Contacto
    telefono VARCHAR(20) NULL,
    direccion TEXT NULL,

    -- Dependiente económico
    es_dependiente_economico TINYINT(1) DEFAULT 0,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    INDEX idx_empleado (empleado_id),
    INDEX idx_empresa (empresa_id),
    INDEX idx_es_beneficiario (es_beneficiario),
    
    FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id) ON DELETE CASCADE,
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- 5. Histórico de documentos generados
-- =====================================================
CREATE TABLE IF NOT EXISTS contratos_documentos (
    documento_id INT PRIMARY KEY AUTO_INCREMENT,
    contrato_id INT NULL,
    empleado_id INT NULL,
    empresa_id INT NOT NULL,
    
    -- Tipo de documento
    tipo_documento ENUM('contrato_temporal','contrato_permanente','poliza_fh','carta_patronal','otro') NOT NULL,
    nombre_archivo VARCHAR(255) NOT NULL,
    ruta_archivo VARCHAR(500) NULL COMMENT 'Ruta relativa o URL',
    
    -- Metadatos
    extension VARCHAR(10) DEFAULT 'pdf',
    tamanio INT NULL COMMENT 'Bytes',
    
    -- Datos del documento
    fecha_generacion DATETIME NOT NULL,
    generado_por INT NULL COMMENT 'usuario_id',
    
    -- Impresión/entrega
    impreso TINYINT(1) DEFAULT 0,
    fecha_impresion DATETIME NULL,
    entregado TINYINT(1) DEFAULT 0,
    fecha_entrega DATETIME NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    INDEX idx_contrato (contrato_id),
    INDEX idx_empleado (empleado_id),
    INDEX idx_empresa (empresa_id),
    INDEX idx_tipo (tipo_documento),
    
    FOREIGN KEY (contrato_id) REFERENCES contratos(contrato_id) ON DELETE CASCADE,
    FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id) ON DELETE CASCADE,
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- 6. Notificaciones de contratos
-- =====================================================
CREATE TABLE IF NOT EXISTS contratos_notificaciones (
    notificacion_id INT PRIMARY KEY AUTO_INCREMENT,
    contrato_id INT NOT NULL,
    empleado_id INT NOT NULL,
    empresa_id INT NOT NULL,
    destinatario_id INT NOT NULL COMMENT 'usuario_id del destinatario',
    
    -- Tipo de notificación
    tipo ENUM('vencimiento_proximo','evaluacion_requerida','aprobacion_pendiente','contrato_aprobado','contrato_rechazado') NOT NULL,
    
    -- Contenido
    asunto VARCHAR(255) NOT NULL,
    mensaje TEXT NOT NULL,
    
    -- Envío
    enviada TINYINT(1) DEFAULT 0,
    fecha_envio DATETIME NULL,
    via ENUM('sistema','email','ambos') DEFAULT 'ambos',
    
    -- Email
    email_enviado TINYINT(1) DEFAULT 0,
    email_destinatario VARCHAR(255) NULL,
    fecha_email DATETIME NULL,
    
    -- Lectura
    leida TINYINT(1) DEFAULT 0,
    fecha_lectura DATETIME NULL,
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    INDEX idx_contrato (contrato_id),
    INDEX idx_destinatario (destinatario_id),
    INDEX idx_tipo (tipo),
    INDEX idx_enviada (enviada),
    INDEX idx_leida (leida),
    
    FOREIGN KEY (contrato_id) REFERENCES contratos(contrato_id) ON DELETE CASCADE,
    FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id) ON DELETE CASCADE,
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- 7. Configuración de logos por empresa
-- =====================================================
CREATE TABLE IF NOT EXISTS empresas_logos (
    logo_id INT PRIMARY KEY AUTO_INCREMENT,
    empresa_id INT NOT NULL UNIQUE,
    
    -- Logo principal
    logo_ruta VARCHAR(500) NULL COMMENT 'Ruta al archivo del logo',
    logo_width INT DEFAULT 150 COMMENT 'Ancho en px para documentos',
    logo_height INT DEFAULT 80 COMMENT 'Alto en px para documentos',
    
    -- Datos para documentos
    color_primario VARCHAR(7) DEFAULT '#000000' COMMENT 'Color hex para headers',
    color_secundario VARCHAR(7) DEFAULT '#666666',
    
    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- TABLA DE CÓDIGOS POSTALES (para auto-llenar estado, municipio, colonias)
-- =====================================================
CREATE TABLE IF NOT EXISTS cat_codigos_postales (
    cp_id INT PRIMARY KEY AUTO_INCREMENT,
    codigo_postal VARCHAR(10) NOT NULL,
    estado VARCHAR(100) NOT NULL,
    municipio VARCHAR(150) NOT NULL,
    colonia VARCHAR(255) NOT NULL,
    
    INDEX idx_cp (codigo_postal),
    INDEX idx_estado (estado),
    INDEX idx_municipio (municipio),
    UNIQUE KEY unique_cp_mun_col (codigo_postal, estado, municipio, colonia)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar datos de ejemplo (agregar más según tus necesidades)
-- Nota: Idealmente estos datos provendrían de una base de datos externa de Correos de México
INSERT INTO cat_codigos_postales (codigo_postal, estado, municipio, colonia) VALUES
('28000', 'Colima', 'Colima', 'Centro'),
('28000', 'Colima', 'Colima', 'Residencial'),
('64000', 'Nuevo León', 'Monterrey', 'Centro'),
('64000', 'Nuevo León', 'Monterrey', 'Barrio Antiguo'),
('64000', 'Nuevo León', 'Monterrey', 'Macroplaza'),
('06500', 'CDMX', 'Cuauhtémoc', 'Centro'),
('06500', 'CDMX', 'Cuauhtémoc', 'Juárez'),
('06800', 'CDMX', 'Cuauhtémoc', 'Doctores'),
('11500', 'CDMX', 'Miguel Hidalgo', 'Polanco'),
('11500', 'CDMX', 'Miguel Hidalgo', 'Anahuac')
ON DUPLICATE KEY UPDATE colonia = VALUES(colonia);

-- =====================================================
-- CATÁLOGOS REQUERIDOS
-- =====================================================

-- Catálogo de escolaridades
CREATE TABLE IF NOT EXISTS cat_escolaridades (
    escolaridad_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    orden INT DEFAULT 0,
    activo TINYINT(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cat_escolaridades (nombre, orden) VALUES
('Primaria Incompleta', 10),
('Primaria Completa', 20),
('Secundaria Incompleta', 30),
('Secundaria Completa', 40),
('Preparatoria Incompleta', 50),
('Preparatoria Completa', 60),
('Técnico', 70),
('Licenciatura Incompleta', 80),
('Licenciatura Completa', 90),
('Posgrado', 100)
ON DUPLICATE KEY UPDATE nombre = VALUES(nombre);

-- Catálogo de bancos
CREATE TABLE IF NOT EXISTS cat_bancos (
    banco_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    codigo_banco VARCHAR(10) NULL,
    orden INT DEFAULT 0,
    activo TINYINT(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cat_bancos (nombre, codigo_banco, orden) VALUES
('Banamex', '002', 10),
('Bancomer', '012', 20),
('Santander', '014', 30),
('HSBC', '021', 40),
('Scotiabank', '044', 50),
('Inbursa', '036', 60),
('Banregio', '058', 70),
('Invex', '059', 80),
('Bansi', '060', 90),
('Interacciones', '037', 100),
('Mifel', '042', 110),
('IXE', '901', 120),
('Acciones', '903', 130),
('Afirme', '127', 140),
('Otro', '999', 999)
ON DUPLICATE KEY UPDATE codigo_banco = VALUES(codigo_banco);

-- Catálogo de parentescos/tipos de beneficiarios
CREATE TABLE IF NOT EXISTS cat_parentescos (
    parentesco_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    orden INT DEFAULT 0,
    activo TINYINT(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cat_parentescos (nombre, orden) VALUES
('Cónyuge', 10),
('Hijo/a', 20),
('Hija/o de dependencia económica', 25),
('Madre', 30),
('Padre', 40),
('Hermano/a', 50),
('Otra relación', 99)
ON DUPLICATE KEY UPDATE nombre = VALUES(nombre);

-- Catálogo de apoderados legales (representes de la empresa)
CREATE TABLE IF NOT EXISTS org_apoderados (
    apoderado_id INT PRIMARY KEY AUTO_INCREMENT,
    empresa_id INT NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    puesto VARCHAR(100) NULL,
    rfc VARCHAR(13) NULL,
    telefono VARCHAR(20) NULL,
    correo VARCHAR(255) NULL,
    orden INT DEFAULT 0,
    activo TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    INDEX idx_empresa (empresa_id),
    FOREIGN KEY (empresa_id) REFERENCES empresas(empresa_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar apoderados de ejemplo (ajustar según tus empresas)
INSERT INTO org_apoderados (empresa_id, nombre, puesto, orden) VALUES
(1, 'Juan Antonio Cárdenas Domínguez', 'Representante Legal', 10),
(2, 'Representante Empresa 2', 'Gerente General', 10),
(3, 'Representante Empresa 3', 'Gerente General', 10),
(4, 'Representante Empresa 4', 'Gerente General', 10)
ON DUPLICATE KEY UPDATE nombre = VALUES(nombre);

-- =====================================================
-- 8. Vista para contratos próximos a vencer
-- =====================================================
CREATE OR REPLACE VIEW v_contratos_por_vencer AS
SELECT 
    c.contrato_id,
    c.empleado_id,
    c.empresa_id,
    e.nombre,
    e.apellido_paterno,
    e.apellido_materno,
    c.tipo_contrato,
    c.numero_contrato,
    c.fecha_inicio,
    c.fecha_fin,
    c.dias_naturales,
    DATEDIFF(c.fecha_fin, CURDATE()) AS dias_restantes,
    c.estatus,
    c.jefe_inmediato_id,
    jefe.nombre AS jefe_nombre,
    jefe.apellido_paterno AS jefe_apellido_paterno,
    c.notificacion_enviada,
    c.evaluacion_completada,
    emp.nombre AS empresa_nombre
FROM contratos c
INNER JOIN empleados e ON c.empleado_id = e.empleado_id
INNER JOIN empresas emp ON c.empresa_id = emp.empresa_id
LEFT JOIN empleados jefe ON c.jefe_inmediato_id = jefe.empleado_id
WHERE c.tipo_contrato = 'temporal'
  AND c.estatus IN ('activo', 'por_vencer')
  AND c.fecha_fin IS NOT NULL
  AND DATEDIFF(c.fecha_fin, CURDATE()) <= 7
  AND DATEDIFF(c.fecha_fin, CURDATE()) >= 0;

-- =====================================================
-- DATOS DE EJEMPLO / INICIALIZACIÓN
-- =====================================================

-- Insertar configuración de logos (ajustar rutas según tus empresas)
INSERT INTO empresas_logos (empresa_id, logo_ruta, logo_width, logo_height, color_primario)
VALUES 
(1, '/assets/images/logos/empresa1.png', 150, 80, '#1976D2'),
(2, '/assets/images/logos/empresa2.png', 150, 80, '#388E3C'),
(3, '/assets/images/logos/empresa3.png', 150, 80, '#D32F2F'),
(4, '/assets/images/logos/empresa4.png', 150, 80, '#F57C00')
ON DUPLICATE KEY UPDATE logo_ruta = VALUES(logo_ruta);

-- =====================================================
-- FIN DEL SCRIPT
-- =====================================================
