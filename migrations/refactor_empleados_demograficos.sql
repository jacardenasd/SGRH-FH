-- ============================================
-- Migración: Refactorizar empleados_demograficos
-- Fecha: 2026-01-27
-- Objetivo: 
--   1. Agregar sueldo_integrado a empleados
--   2. Crear funciones para extraer datos del CURP
--   3. Eliminar columnas duplicadas de empleados_demograficos
-- ============================================

USE sgrh;

-- ============================================
-- PASO 1: Crear funciones para extraer datos del CURP
-- ============================================

DELIMITER $$

-- Función para extraer SEXO del CURP (posición 11: H=Hombre, M=Mujer)
DROP FUNCTION IF EXISTS curp_extraer_sexo$$
CREATE FUNCTION curp_extraer_sexo(curp VARCHAR(18))
RETURNS ENUM('M','F','X')
DETERMINISTIC
BEGIN
    DECLARE sexo_char CHAR(1);
    
    IF curp IS NULL OR LENGTH(curp) < 11 THEN
        RETURN 'X';
    END IF;
    
    SET sexo_char = UPPER(SUBSTRING(curp, 11, 1));
    
    RETURN CASE 
        WHEN sexo_char = 'H' THEN 'M'  -- H = Hombre = M (Masculino)
        WHEN sexo_char = 'M' THEN 'F'  -- M = Mujer = F (Femenino)
        ELSE 'X'
    END;
END$$

-- Función para extraer FECHA DE NACIMIENTO del CURP (posiciones 5-10: AAMMDD)
DROP FUNCTION IF EXISTS curp_extraer_fecha_nacimiento$$
CREATE FUNCTION curp_extraer_fecha_nacimiento(curp VARCHAR(18))
RETURNS DATE
DETERMINISTIC
BEGIN
    DECLARE anio_str VARCHAR(2);
    DECLARE mes_str VARCHAR(2);
    DECLARE dia_str VARCHAR(2);
    DECLARE anio_completo INT;
    DECLARE fecha_resultado DATE;
    
    IF curp IS NULL OR LENGTH(curp) < 10 THEN
        RETURN NULL;
    END IF;
    
    -- Extraer componentes de fecha: posiciones 5-10 del CURP
    SET anio_str = SUBSTRING(curp, 5, 2);
    SET mes_str = SUBSTRING(curp, 7, 2);
    SET dia_str = SUBSTRING(curp, 9, 2);
    
    -- Determinar siglo: si año < 25, es 2000+, si no, es 1900+
    SET anio_completo = CAST(anio_str AS UNSIGNED);
    IF anio_completo <= 25 THEN
        SET anio_completo = anio_completo + 2000;
    ELSE
        SET anio_completo = anio_completo + 1900;
    END IF;
    
    -- Intentar construir fecha (puede fallar si datos inválidos)
    BEGIN
        DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
        BEGIN
            SET fecha_resultado = NULL;
        END;
        
        SET fecha_resultado = STR_TO_DATE(
            CONCAT(anio_completo, '-', mes_str, '-', dia_str),
            '%Y-%m-%d'
        );
    END;
    
    RETURN fecha_resultado;
END$$

-- Función para calcular EDAD a partir de fecha de nacimiento
DROP FUNCTION IF EXISTS calcular_edad$$
CREATE FUNCTION calcular_edad(fecha_nac DATE)
RETURNS INT
DETERMINISTIC
BEGIN
    IF fecha_nac IS NULL OR fecha_nac > CURDATE() THEN
        RETURN NULL;
    END IF;
    
    RETURN TIMESTAMPDIFF(YEAR, fecha_nac, CURDATE());
END$$

-- Función para extraer LUGAR DE NACIMIENTO (estado) del CURP (posiciones 12-13)
DROP FUNCTION IF EXISTS curp_extraer_lugar_nacimiento$$
CREATE FUNCTION curp_extraer_lugar_nacimiento(curp VARCHAR(18))
RETURNS VARCHAR(150)
DETERMINISTIC
BEGIN
    DECLARE estado_code VARCHAR(2);
    
    IF curp IS NULL OR LENGTH(curp) < 13 THEN
        RETURN NULL;
    END IF;
    
    SET estado_code = UPPER(SUBSTRING(curp, 12, 2));
    
    RETURN CASE estado_code
        WHEN 'AS' THEN 'AGUASCALIENTES'
        WHEN 'BC' THEN 'BAJA CALIFORNIA'
        WHEN 'BS' THEN 'BAJA CALIFORNIA SUR'
        WHEN 'CC' THEN 'CAMPECHE'
        WHEN 'CS' THEN 'CHIAPAS'
        WHEN 'CH' THEN 'CHIHUAHUA'
        WHEN 'CL' THEN 'COAHUILA'
        WHEN 'CM' THEN 'COLIMA'
        WHEN 'DF' THEN 'CIUDAD DE MEXICO'
        WHEN 'DG' THEN 'DURANGO'
        WHEN 'GT' THEN 'GUANAJUATO'
        WHEN 'GR' THEN 'GUERRERO'
        WHEN 'HG' THEN 'HIDALGO'
        WHEN 'JC' THEN 'JALISCO'
        WHEN 'MC' THEN 'ESTADO DE MEXICO'
        WHEN 'MN' THEN 'MICHOACAN'
        WHEN 'MS' THEN 'MORELOS'
        WHEN 'NT' THEN 'NAYARIT'
        WHEN 'NL' THEN 'NUEVO LEON'
        WHEN 'OC' THEN 'OAXACA'
        WHEN 'PL' THEN 'PUEBLA'
        WHEN 'QT' THEN 'QUERETARO'
        WHEN 'QR' THEN 'QUINTANA ROO'
        WHEN 'SP' THEN 'SAN LUIS POTOSI'
        WHEN 'SL' THEN 'SINALOA'
        WHEN 'SR' THEN 'SONORA'
        WHEN 'TC' THEN 'TABASCO'
        WHEN 'TS' THEN 'TAMAULIPAS'
        WHEN 'TL' THEN 'TLAXCALA'
        WHEN 'VZ' THEN 'VERACRUZ'
        WHEN 'YN' THEN 'YUCATAN'
        WHEN 'ZS' THEN 'ZACATECAS'
        WHEN 'NE' THEN 'NACIDO EN EL EXTRANJERO'
        ELSE NULL
    END;
END$$

-- Función para extraer NACIONALIDAD del CURP
DROP FUNCTION IF EXISTS curp_extraer_nacionalidad$$
CREATE FUNCTION curp_extraer_nacionalidad(curp VARCHAR(18))
RETURNS VARCHAR(50)
DETERMINISTIC
BEGIN
    DECLARE estado_code VARCHAR(2);
    
    IF curp IS NULL OR LENGTH(curp) < 13 THEN
        RETURN 'MEXICANA';
    END IF;
    
    SET estado_code = UPPER(SUBSTRING(curp, 12, 2));
    
    -- Si el código es 'NE', nació en el extranjero
    IF estado_code = 'NE' THEN
        RETURN 'EXTRANJERA';
    ELSE
        RETURN 'MEXICANA';
    END IF;
END$$

DELIMITER ;

-- ============================================
-- PASO 2: Agregar sueldo_integrado a empleados
-- ============================================

-- Verificar si la columna existe antes de agregarla
SET @db_name = DATABASE();

SET @exist_sueldo_integrado = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados' AND COLUMN_NAME = 'sueldo_integrado');

SET @query_add_sueldo = IF(@exist_sueldo_integrado = 0, 
    'ALTER TABLE empleados ADD COLUMN sueldo_integrado DECIMAL(12, 2) NULL DEFAULT NULL COMMENT ''Sueldo integrado (diario + prestaciones)'' AFTER salario_mensual', 
    'SELECT "Column sueldo_integrado already exists" AS message');
PREPARE stmt FROM @query_add_sueldo;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- ============================================
-- PASO 3: Eliminar columnas duplicadas de empleados_demograficos
-- ============================================

-- Verificar que las columnas existan antes de eliminarlas
-- (ya se estableció @db_name arriba)

-- Eliminar numero_empleado (duplicado con empleados.no_emp)
SET @exist_numero_empleado = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'numero_empleado');

SET @query_numero_empleado = IF(@exist_numero_empleado > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN numero_empleado', 
    'SELECT "Column numero_empleado does not exist" AS message');
PREPARE stmt FROM @query_numero_empleado;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar correo (debe estar en usuarios.correo, no en empleados_demograficos)
SET @exist_correo = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'correo');

SET @query_correo = IF(@exist_correo > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN correo', 
    'SELECT "Column correo does not exist" AS message');
PREPARE stmt FROM @query_correo;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar curp (duplicado con empleados.curp)
SET @exist_curp = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'curp');

SET @query_curp = IF(@exist_curp > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN curp', 
    'SELECT "Column curp does not exist" AS message');
PREPARE stmt FROM @query_curp;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar puesto_id (duplicado con empleados.puesto_id)
SET @exist_puesto = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'puesto_id');

SET @query_puesto = IF(@exist_puesto > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN puesto_id', 
    'SELECT "Column puesto_id does not exist" AS message');
PREPARE stmt FROM @query_puesto;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar departamento_id (duplicado con empleados.departamento_id)
SET @exist_depto = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'departamento_id');

SET @query_depto = IF(@exist_depto > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN departamento_id', 
    'SELECT "Column departamento_id does not exist" AS message');
PREPARE stmt FROM @query_depto;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar fecha_alta (duplicado con empleados.fecha_ingreso)
SET @exist_fecha = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'fecha_alta');

SET @query_fecha = IF(@exist_fecha > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN fecha_alta', 
    'SELECT "Column fecha_alta does not exist" AS message');
PREPARE stmt FROM @query_fecha;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar sueldo_diario (duplicado con empleados.salario_diario)
SET @exist_sdiario = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'sueldo_diario');

SET @query_sdiario = IF(@exist_sdiario > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN sueldo_diario', 
    'SELECT "Column sueldo_diario does not exist" AS message');
PREPARE stmt FROM @query_sdiario;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar sueldo_mensual (duplicado con empleados.salario_mensual)
SET @exist_smensual = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'sueldo_mensual');

SET @query_smensual = IF(@exist_smensual > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN sueldo_mensual', 
    'SELECT "Column sueldo_mensual does not exist" AS message');
PREPARE stmt FROM @query_smensual;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar sueldo_integrado (ahora está en empleados)
SET @exist_sintegrado = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'sueldo_integrado');

SET @query_sintegrado = IF(@exist_sintegrado > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN sueldo_integrado', 
    'SELECT "Column sueldo_integrado does not exist" AS message');
PREPARE stmt FROM @query_sintegrado;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar ubicacion_id (duplicado con empleados.centro_trabajo_id)
SET @exist_ubicacion = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'ubicacion_id');

SET @query_ubicacion = IF(@exist_ubicacion > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN ubicacion_id', 
    'SELECT "Column ubicacion_id does not exist" AS message');
PREPARE stmt FROM @query_ubicacion;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar jefe_inmediato_id (se maneja desde empleados)
SET @exist_jefe = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'jefe_inmediato_id');

SET @query_jefe = IF(@exist_jefe > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN jefe_inmediato_id', 
    'SELECT "Column jefe_inmediato_id does not exist" AS message');
PREPARE stmt FROM @query_jefe;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar campos calculables del CURP
-- sexo (se calcula con curp_extraer_sexo)
SET @exist_sexo = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'sexo');

SET @query_sexo = IF(@exist_sexo > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN sexo', 
    'SELECT "Column sexo does not exist" AS message');
PREPARE stmt FROM @query_sexo;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- fecha_nacimiento (se calcula con curp_extraer_fecha_nacimiento)
SET @exist_fnac = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'fecha_nacimiento');

SET @query_fnac = IF(@exist_fnac > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN fecha_nacimiento', 
    'SELECT "Column fecha_nacimiento does not exist" AS message');
PREPARE stmt FROM @query_fnac;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- edad (se calcula con calcular_edad)
SET @exist_edad = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'edad');

SET @query_edad = IF(@exist_edad > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN edad', 
    'SELECT "Column edad does not exist" AS message');
PREPARE stmt FROM @query_edad;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- nacionalidad (se calcula con curp_extraer_nacionalidad)
SET @exist_nac = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'nacionalidad');

SET @query_nac = IF(@exist_nac > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN nacionalidad', 
    'SELECT "Column nacionalidad does not exist" AS message');
PREPARE stmt FROM @query_nac;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- lugar_nacimiento (se calcula con curp_extraer_lugar_nacimiento)
SET @exist_lugar = (SELECT COUNT(*) FROM information_schema.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name AND TABLE_NAME = 'empleados_demograficos' AND COLUMN_NAME = 'lugar_nacimiento');

SET @query_lugar = IF(@exist_lugar > 0, 
    'ALTER TABLE empleados_demograficos DROP COLUMN lugar_nacimiento', 
    'SELECT "Column lugar_nacimiento does not exist" AS message');
PREPARE stmt FROM @query_lugar;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- ============================================
-- RESUMEN DE CAMBIOS
-- ============================================
-- ✓ Funciones creadas para extraer datos del CURP
-- ✓ Columna sueldo_integrado agregada a empleados
-- ✓ Columnas duplicadas eliminadas de empleados_demograficos:
--   - numero_empleado (duplicado con empleados.no_emp)
--   - correo (debe estar en usuarios.correo)
--   - curp, puesto_id, departamento_id, fecha_alta
--   - sueldo_diario, sueldo_mensual, sueldo_integrado
--   - ubicacion_id, jefe_inmediato_id
--   - sexo, fecha_nacimiento, edad, nacionalidad, lugar_nacimiento
--     (estos se calculan dinámicamente con las funciones CURP)
-- ============================================

SELECT 'Migración completada exitosamente' AS status;
