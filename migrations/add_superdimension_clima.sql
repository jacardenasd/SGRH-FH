-- =====================================================
-- Migración: Agregar Superdimensiones a Clima Laboral
-- Fecha: 2026-01-21
-- =====================================================

-- 1. Agregar columna superdimension a clima_dimensiones
ALTER TABLE clima_dimensiones 
ADD COLUMN superdimension VARCHAR(100) NULL AFTER nombre,
ADD INDEX idx_superdimension (superdimension);

-- 2. Actualizar dimensiones existentes con su superdimensión

-- Relación con el Jefe Inmediato
UPDATE clima_dimensiones SET superdimension = 'Relación con el Jefe Inmediato' WHERE nombre = 'Liderazgo inmediato';
UPDATE clima_dimensiones SET superdimension = 'Relación con el Jefe Inmediato' WHERE nombre = 'Reconocimiento';

-- Relación con los Compañeros
UPDATE clima_dimensiones SET superdimension = 'Relación con los Compañeros' WHERE nombre = 'Colaboración entre áreas';
UPDATE clima_dimensiones SET superdimension = 'Relación con los Compañeros' WHERE nombre = 'Comunicación interna';
UPDATE clima_dimensiones SET superdimension = 'Relación con los Compañeros' WHERE nombre = 'Equidad y respeto';

-- Relación con la Empresa
UPDATE clima_dimensiones SET superdimension = 'Relación con la Empresa' WHERE nombre = 'Propósito y alineación';
UPDATE clima_dimensiones SET superdimension = 'Relación con la Empresa' WHERE nombre = 'Estructura y coordinación';
UPDATE clima_dimensiones SET superdimension = 'Relación con la Empresa' WHERE nombre = 'Recursos y herramientas';
UPDATE clima_dimensiones SET superdimension = 'Relación con la Empresa' WHERE nombre = 'Bienestar y balance';

-- Relación con el Trabajo
UPDATE clima_dimensiones SET superdimension = 'Relación con el Trabajo' WHERE nombre = 'Claridad de rol';
UPDATE clima_dimensiones SET superdimension = 'Relación con el Trabajo' WHERE nombre = 'Desarrollo y aprendizaje';
UPDATE clima_dimensiones SET superdimension = 'Relación con el Trabajo' WHERE nombre = 'Procesos y eficiencia';

-- 3. Verificar la agrupación
SELECT 
    superdimension,
    GROUP_CONCAT(nombre ORDER BY orden SEPARATOR ', ') AS dimensiones,
    COUNT(*) AS total_dimensiones
FROM clima_dimensiones 
WHERE activo = 1
GROUP BY superdimension
ORDER BY 
    CASE superdimension
        WHEN 'Relación con el Jefe Inmediato' THEN 1
        WHEN 'Relación con los Compañeros' THEN 2
        WHEN 'Relación con la Empresa' THEN 3
        WHEN 'Relación con el Trabajo' THEN 4
        ELSE 5
    END;
