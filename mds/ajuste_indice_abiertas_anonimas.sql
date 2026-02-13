-- Ajuste de índice único en clima_respuestas_abiertas
-- Permite múltiples respuestas abiertas anónimas de la misma unidad

-- PASO 1: Eliminar el índice único actual
ALTER TABLE `clima_respuestas_abiertas` 
DROP INDEX `idx_periodo_empleado_pregunta`;

-- PASO 2: Crear índice único solo para respuestas identificadas
-- Sin unidad_id en la clave única, permitiendo múltiples anónimas
ALTER TABLE `clima_respuestas_abiertas` 
ADD UNIQUE INDEX `idx_periodo_empleado_pregunta_unico` (
    `periodo_id`, 
    `empleado_id`, 
    `pregunta_id`
) USING BTREE;

-- PASO 3: Crear índice no único para búsquedas por unidad
ALTER TABLE `clima_respuestas_abiertas` 
ADD INDEX `idx_periodo_unidad_pregunta` (
    `periodo_id`, 
    `unidad_id`, 
    `pregunta_id`
) USING BTREE;

-- VERIFICACIÓN
SELECT 
    'Índices de respuestas_abiertas actualizados' as estado,
    'Múltiples respuestas anónimas permitidas' as resultado;

SHOW INDEX FROM clima_respuestas_abiertas WHERE Key_name LIKE '%periodo%';
