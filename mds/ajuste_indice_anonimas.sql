-- Ajuste de índice único para permitir múltiples respuestas anónimas por unidad
-- Quita la restricción única para respuestas anónimas (empleado_id IS NULL)

-- PASO 1: Eliminar el índice único actual
ALTER TABLE `clima_respuestas` DROP INDEX `idx_periodo_empleado_reactivo`;

-- PASO 2: Crear índice único solo para respuestas identificadas
-- Nota: MySQL no soporta índices parciales directamente, pero podemos trabajar con NULL
-- La clave será: (periodo_id, IFNULL(empleado_id, -1), reactivo_id)
-- Esto permite múltiples registros con empleado_id=NULL pero mantiene unicidad para identificadas

ALTER TABLE `clima_respuestas` 
ADD UNIQUE INDEX `idx_periodo_empleado_reactivo_unico` (
    `periodo_id`, 
    `empleado_id`, 
    `reactivo_id`
) USING BTREE;

-- PASO 3: Crear índice no único para búsquedas rápidas que incluya unidad_id
ALTER TABLE `clima_respuestas` 
ADD INDEX `idx_periodo_unidad_reactivo` (
    `periodo_id`, 
    `unidad_id`, 
    `reactivo_id`
) USING BTREE;

-- VERIFICACIÓN
SELECT 
    'Índices actualizados correctamente' as estado,
    'Ahora se permiten múltiples respuestas anónimas por unidad' as resultado;

-- Mostrar estructura de índices
SHOW INDEX FROM clima_respuestas WHERE Key_name LIKE '%periodo%';
