-- =====================================================
-- Migración: Agregar campo adscripcion_id a clima_respuestas
-- Descripción: Permite rastrear el departamento específico en capturas anónimas
-- Fecha: 2026-02-12
-- =====================================================

USE sgrh;

-- Agregar campo adscripcion_id a clima_respuestas
ALTER TABLE `clima_respuestas` 
ADD COLUMN `adscripcion_id` INT(11) NULL DEFAULT NULL COMMENT 'Departamento (org_adscripciones)' AFTER `unidad_id`,
ADD INDEX `idx_clima_resp_adscripcion` (`periodo_id`, `adscripcion_id`);

-- Agregar foreign key
ALTER TABLE `clima_respuestas`
ADD CONSTRAINT `fk_clima_resp_adscripcion` FOREIGN KEY (`adscripcion_id`) REFERENCES `org_adscripciones` (`adscripcion_id`) ON DELETE SET NULL ON UPDATE CASCADE;

-- Agregar campo adscripcion_id a clima_respuestas_abiertas
ALTER TABLE `clima_respuestas_abiertas`
ADD COLUMN `adscripcion_id` INT(11) NULL DEFAULT NULL COMMENT 'Departamento (org_adscripciones)' AFTER `unidad_id`,
ADD INDEX `idx_clima_resp_ab_adscripcion` (`periodo_id`, `adscripcion_id`);

-- Agregar foreign key
ALTER TABLE `clima_respuestas_abiertas`
ADD CONSTRAINT `fk_clima_resp_ab_adscripcion` FOREIGN KEY (`adscripcion_id`) REFERENCES `org_adscripciones` (`adscripcion_id`) ON DELETE SET NULL ON UPDATE CASCADE;

-- Comentario de finalización
SELECT 'Migración completada: campos adscripcion_id agregados a clima_respuestas y clima_respuestas_abiertas' AS mensaje;
