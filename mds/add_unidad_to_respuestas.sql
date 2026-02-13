-- Migración para agregar unidad_id a clima_respuestas
-- Soluciona el bug donde respuestas anónimas de diferentes unidades se cargan juntas

ALTER TABLE `clima_respuestas` 
ADD COLUMN `unidad_id` int(11) NULL DEFAULT NULL AFTER `empleado_id`,
ADD INDEX `idx_clima_resp_unidad`(`periodo_id`, `unidad_id`) USING BTREE;

-- Actualizar la clave única para incluir unidad_id
-- Esto previene conflictos cuando hay respuestas anónimas de diferentes unidades
ALTER TABLE `clima_respuestas` 
DROP INDEX `idx_periodo_empleado_reactivo`,
ADD UNIQUE INDEX `idx_periodo_empleado_reactivo`(`periodo_id`, `empleado_id`, `reactivo_id`, `unidad_id`) USING BTREE;
