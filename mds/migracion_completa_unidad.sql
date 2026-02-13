-- Migración completa para agregar unidad_id a clima_respuestas
-- y completar datos históricos

-- PASO 1: Agregar columna unidad_id si no existe
SET @exist := (SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
               WHERE TABLE_SCHEMA = 'sgrh' 
               AND TABLE_NAME = 'clima_respuestas' 
               AND COLUMN_NAME = 'unidad_id');

SET @sqlstmt := IF(@exist = 0, 
    'ALTER TABLE clima_respuestas ADD COLUMN unidad_id int(11) NULL DEFAULT NULL AFTER empleado_id',
    'SELECT "Columna unidad_id ya existe" as mensaje');
PREPARE stmt FROM @sqlstmt;
EXECUTE stmt;

-- PASO 2: Crear índice si no existe
SET @exist_idx := (SELECT COUNT(*) FROM INFORMATION_SCHEMA.STATISTICS 
                   WHERE TABLE_SCHEMA = 'sgrh' 
                   AND TABLE_NAME = 'clima_respuestas' 
                   AND INDEX_NAME = 'idx_clima_resp_unidad');

SET @sqlstmt := IF(@exist_idx = 0,
    'ALTER TABLE clima_respuestas ADD INDEX idx_clima_resp_unidad(periodo_id, unidad_id) USING BTREE',
    'SELECT "Índice idx_clima_resp_unidad ya existe" as mensaje');
PREPARE stmt FROM @sqlstmt;
EXECUTE stmt;

-- PASO 3: Actualizar índice único (eliminar el viejo y crear el nuevo)
ALTER TABLE clima_respuestas DROP INDEX idx_periodo_empleado_reactivo;
ALTER TABLE clima_respuestas ADD UNIQUE INDEX idx_periodo_empleado_reactivo(periodo_id, empleado_id, reactivo_id, unidad_id) USING BTREE;

-- PASO 4: Migrar datos desde clima_elegibles (para respuestas identificadas)
UPDATE clima_respuestas cr
INNER JOIN clima_elegibles ce ON ce.periodo_id = cr.periodo_id AND ce.empleado_id = cr.empleado_id
SET cr.unidad_id = ce.unidad_id
WHERE cr.empleado_id IS NOT NULL AND cr.unidad_id IS NULL;

-- PASO 5: Migrar respuestas anónimas desde clima_respuestas_abiertas
UPDATE clima_respuestas cr
INNER JOIN (
    SELECT DISTINCT periodo_id, empleado_id, unidad_id
    FROM clima_respuestas_abiertas
    WHERE empleado_id IS NULL
) ra ON ra.periodo_id = cr.periodo_id
SET cr.unidad_id = ra.unidad_id
WHERE cr.empleado_id IS NULL AND cr.unidad_id IS NULL;

-- PASO 6: Para respuestas identificadas sin datos en elegibles, obtener desde tabla empleados
UPDATE clima_respuestas cr
INNER JOIN empleados e ON e.empleado_id = cr.empleado_id
SET cr.unidad_id = e.unidad_id
WHERE cr.empleado_id IS NOT NULL AND cr.unidad_id IS NULL AND e.unidad_id IS NOT NULL;

-- PASO 7: Para respuestas identificadas restantes, obtener desde respuestas_abiertas
UPDATE clima_respuestas cr
INNER JOIN (
    SELECT DISTINCT periodo_id, empleado_id, unidad_id
    FROM clima_respuestas_abiertas
    WHERE empleado_id IS NOT NULL
) ra ON ra.periodo_id = cr.periodo_id AND ra.empleado_id = cr.empleado_id
SET cr.unidad_id = ra.unidad_id
WHERE cr.empleado_id IS NOT NULL AND cr.unidad_id IS NULL;

-- VERIFICACIÓN FINAL
SELECT 
    '=== MIGRACIÓN COMPLETADA ===' as estado;

SELECT 
    COUNT(*) as total_respuestas,
    SUM(CASE WHEN empleado_id IS NULL THEN 1 ELSE 0 END) as anonimas,
    SUM(CASE WHEN empleado_id IS NOT NULL THEN 1 ELSE 0 END) as identificadas,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) as con_unidad,
    ROUND(100 * SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) / COUNT(*), 2) as porcentaje_migrado
FROM clima_respuestas;

SELECT 
    periodo_id,
    COUNT(*) as total,
    SUM(CASE WHEN unidad_id IS NULL THEN 1 ELSE 0 END) as sin_unidad,
    SUM(CASE WHEN unidad_id IS NOT NULL THEN 1 ELSE 0 END) as con_unidad,
    COUNT(DISTINCT unidad_id) as unidades_distintas
FROM clima_respuestas
GROUP BY periodo_id;
