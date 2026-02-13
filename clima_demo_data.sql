-- clima_demo_data.sql
-- Datos de demostración para pruebas de OCR
-- Ejecutar este SQL para cargar preguntas de ejemplo

-- 1. Crear dimensiones de Clima Laboral
INSERT IGNORE INTO `clima_dimensiones` (`nombre`, `superdimension`, `orden`, `activo`) VALUES
('Satisfacción General', 'Contexto Organizacional', 1, 1),
('Relaciones Interpersonales', 'Contexto Organizacional', 2, 1),
('Oportunidades de Desarrollo', 'Oportunidades Personales', 3, 1);

-- 2. Crear reactivos (preguntas) para encuesta de clima
-- Obtener los IDs de dimensiones (usualmente 1, 2, 3)
INSERT IGNORE INTO `clima_reactivos` (`dimension_id`, `texto`, `orden`, `activo`) VALUES
(1, 'Estoy satisfecho con mi empleo actual', 1, 1),
(1, 'Mi supervisor me proporciona retroalimentación constructiva', 2, 1),
(2, 'Tengo oportunidades de crecimiento y desarrollo profesional', 3, 1),
(2, 'Mis colegas y yo trabajamos bien en equipo', 4, 1),
(1, 'Siento que mi trabajo es valorado por la organización', 5, 1),
(3, 'Las condiciones de trabajo son seguras y cómodas', 6, 1),
(3, 'Recibo un salario justo por mi trabajo', 7, 1),
(2, 'Tengo un equilibrio adecuado entre trabajo y vida personal', 8, 1),
(1, 'La comunicación interna es efectiva en la empresa', 9, 1),
(3, 'Estoy motivado a dar lo mejor de mí en mis tareas diarias', 10, 1);

-- 3. Crear período activo de prueba
INSERT IGNORE INTO `clima_periodos` (`nombre`, `fecha_inicio`, `fecha_fin`, `activo`) VALUES
('Encuesta Clima 2025 - Demo', '2025-01-01', '2025-03-31', 1);

-- Verificación
SELECT 'Dimensiones creadas:' as info;
SELECT COUNT(*) as total_dimensiones FROM `clima_dimensiones` WHERE `activo`=1;

SELECT 'Reactivos (preguntas) creados:' as info;
SELECT COUNT(*) as total_reactivos FROM `clima_reactivos` WHERE `activo`=1;

SELECT 'Períodos activos:' as info;
SELECT COUNT(*) as total_periodos FROM `clima_periodos` WHERE `activo`=1;
