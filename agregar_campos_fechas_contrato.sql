-- Agregar columnas fecha_inicio_contrato y fecha_termino_contrato a empleados_nuevo_ingreso
-- (ignorar errores si ya existen)

-- Para empleados_nuevo_ingreso
SET @sql1 = (SELECT IF(
    COUNT(*) = 0,
    'ALTER TABLE empleados_nuevo_ingreso ADD COLUMN fecha_inicio_contrato DATE NULL COMMENT "Fecha de inicio del contrato" AFTER fecha_alta',
    'SELECT "Columna fecha_inicio_contrato ya existe en empleados_nuevo_ingreso"'
) FROM information_schema.COLUMNS 
WHERE TABLE_SCHEMA = DATABASE() 
AND TABLE_NAME = 'empleados_nuevo_ingreso' 
AND COLUMN_NAME = 'fecha_inicio_contrato');

PREPARE stmt1 FROM @sql1;
EXECUTE stmt1;
DEALLOCATE PREPARE stmt1;

SET @sql2 = (SELECT IF(
    COUNT(*) = 0,
    'ALTER TABLE empleados_nuevo_ingreso ADD COLUMN fecha_termino_contrato DATE NULL COMMENT "Fecha de término del contrato" AFTER fecha_inicio_contrato',
    'SELECT "Columna fecha_termino_contrato ya existe en empleados_nuevo_ingreso"'
) FROM information_schema.COLUMNS 
WHERE TABLE_SCHEMA = DATABASE() 
AND TABLE_NAME = 'empleados_nuevo_ingreso' 
AND COLUMN_NAME = 'fecha_termino_contrato');

PREPARE stmt2 FROM @sql2;
EXECUTE stmt2;
DEALLOCATE PREPARE stmt2;

-- Para empleados_demograficos
SET @sql3 = (SELECT IF(
    COUNT(*) = 0,
    'ALTER TABLE empleados_demograficos ADD COLUMN fecha_inicio_contrato DATE NULL COMMENT "Fecha de inicio del contrato" AFTER fecha_alta',
    'SELECT "Columna fecha_inicio_contrato ya existe en empleados_demograficos"'
) FROM information_schema.COLUMNS 
WHERE TABLE_SCHEMA = DATABASE() 
AND TABLE_NAME = 'empleados_demograficos' 
AND COLUMN_NAME = 'fecha_inicio_contrato');

PREPARE stmt3 FROM @sql3;
EXECUTE stmt3;
DEALLOCATE PREPARE stmt3;

SET @sql4 = (SELECT IF(
    COUNT(*) = 0,
    'ALTER TABLE empleados_demograficos ADD COLUMN fecha_termino_contrato DATE NULL COMMENT "Fecha de término del contrato" AFTER fecha_inicio_contrato',
    'SELECT "Columna fecha_termino_contrato ya existe en empleados_demograficos"'
) FROM information_schema.COLUMNS 
WHERE TABLE_SCHEMA = DATABASE() 
AND TABLE_NAME = 'empleados_demograficos' 
AND COLUMN_NAME = 'fecha_termino_contrato');

PREPARE stmt4 FROM @sql4;
EXECUTE stmt4;
DEALLOCATE PREPARE stmt4;

-- Verificar tablas
SELECT 'Configuración completada' AS status;
