-- ===============================================================
-- Script para eliminar campos de nombre y apellidos de empleados
-- Fecha: 2026-01-27
-- Descripción: Los campos nombre, apellido_paterno y apellido_materno
--              ahora se almacenan únicamente en la tabla usuarios
-- ===============================================================

-- Verificar que no hay consultas activas usando estos campos
-- IMPORTANTE: Este script debe ejecutarse en un momento de bajo uso

USE sgrh;

-- ===============================================================
-- 1. TABLA empleados
-- ===============================================================

-- Verificar si existen los campos antes de eliminarlos
SET @db_name = DATABASE();

-- Eliminar campo nombre de empleados
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados' 
    AND COLUMN_NAME = 'nombre'
);

SET @sql_drop_nombre = IF(@column_exists > 0,
    'ALTER TABLE empleados DROP COLUMN nombre',
    'SELECT "Campo nombre no existe en empleados" AS mensaje'
);

PREPARE stmt FROM @sql_drop_nombre;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar campo apellido_paterno de empleados
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados' 
    AND COLUMN_NAME = 'apellido_paterno'
);

SET @sql_drop_ap = IF(@column_exists > 0,
    'ALTER TABLE empleados DROP COLUMN apellido_paterno',
    'SELECT "Campo apellido_paterno no existe en empleados" AS mensaje'
);

PREPARE stmt FROM @sql_drop_ap;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar campo apellido_materno de empleados
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados' 
    AND COLUMN_NAME = 'apellido_materno'
);

SET @sql_drop_am = IF(@column_exists > 0,
    'ALTER TABLE empleados DROP COLUMN apellido_materno',
    'SELECT "Campo apellido_materno no existe en empleados" AS mensaje'
);

PREPARE stmt FROM @sql_drop_am;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- ===============================================================
-- 2. TABLA empleados_demograficos
-- ===============================================================

-- Eliminar campo nombre de empleados_demograficos
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados_demograficos' 
    AND COLUMN_NAME = 'nombre'
);

SET @sql_drop_nombre_ed = IF(@column_exists > 0,
    'ALTER TABLE empleados_demograficos DROP COLUMN nombre',
    'SELECT "Campo nombre no existe en empleados_demograficos" AS mensaje'
);

PREPARE stmt FROM @sql_drop_nombre_ed;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar campo apellido_paterno de empleados_demograficos
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados_demograficos' 
    AND COLUMN_NAME = 'apellido_paterno'
);

SET @sql_drop_ap_ed = IF(@column_exists > 0,
    'ALTER TABLE empleados_demograficos DROP COLUMN apellido_paterno',
    'SELECT "Campo apellido_paterno no existe en empleados_demograficos" AS mensaje'
);

PREPARE stmt FROM @sql_drop_ap_ed;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar campo apellido_materno de empleados_demograficos
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados_demograficos' 
    AND COLUMN_NAME = 'apellido_materno'
);

SET @sql_drop_am_ed = IF(@column_exists > 0,
    'ALTER TABLE empleados_demograficos DROP COLUMN apellido_materno',
    'SELECT "Campo apellido_materno no existe en empleados_demograficos" AS mensaje'
);

PREPARE stmt FROM @sql_drop_am_ed;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Eliminar campo rfc de empleados_demograficos (ahora está en usuarios como rfc_base)
SET @column_exists = (
    SELECT COUNT(*) 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = @db_name 
    AND TABLE_NAME = 'empleados_demograficos' 
    AND COLUMN_NAME = 'rfc'
);

SET @sql_drop_rfc_ed = IF(@column_exists > 0,
    'ALTER TABLE empleados_demograficos DROP COLUMN rfc',
    'SELECT "Campo rfc no existe en empleados_demograficos" AS mensaje'
);

PREPARE stmt FROM @sql_drop_rfc_ed;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- ===============================================================
-- Verificación final
-- ===============================================================

SELECT 
    'empleados' AS tabla,
    COLUMN_NAME AS campo,
    COLUMN_TYPE AS tipo
FROM INFORMATION_SCHEMA.COLUMNS 
WHERE TABLE_SCHEMA = DATABASE() 
AND TABLE_NAME = 'empleados'
AND COLUMN_NAME IN ('nombre', 'apellido_paterno', 'apellido_materno')

UNION ALL

SELECT 
    'empleados_demograficos' AS tabla,
    COLUMN_NAME AS campo,
    COLUMN_TYPE AS tipo
FROM INFORMATION_SCHEMA.COLUMNS 
WHERE TABLE_SCHEMA = DATABASE() 
AND TABLE_NAME = 'empleados_demograficos'
AND COLUMN_NAME IN ('nombre', 'apellido_paterno', 'apellido_materno', 'rfc');

-- Si no hay resultados, los campos fueron eliminados correctamente

SELECT 'Script completado exitosamente' AS resultado;
