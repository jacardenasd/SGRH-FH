-- Migration 04: Estructura de Alcance Organizacional
-- Fecha: 2026-01-20
-- Descripción: Documenta y valida la estructura JSON de permisos_especiales
--              para incluir alcance organizacional (unidades y adscripciones permitidas)
--
-- Estructura JSON esperada en usuarios.permisos_especiales:
-- {
--   "unidades_permitidas": [1, 3, 5],
--   "adscripciones_permitidas": [10, 15, 20]
-- }
--
-- Reglas de interpretación:
-- - Si "unidades_permitidas" está vacío o no existe: el usuario puede ver TODAS las unidades de su empresa
-- - Si "adscripciones_permitidas" está vacío o no existe: el usuario puede ver TODAS las adscripciones de su empresa
-- - Los permisos funcionales se obtienen de la tabla usuario_roles (no de este JSON)
-- - Los alcances (unidades/adscripciones) definen QUÉ DATOS puede ver/modificar
--
-- Nota: No requiere cambios en esquema (columna permisos_especiales ya existe como JSON/TEXT)
--       Esta migración es solo documentación de la estructura

-- Verificación de estructura existente
SELECT 
    COUNT(*) AS total_usuarios,
    SUM(CASE WHEN permisos_especiales IS NOT NULL AND permisos_especiales != '' THEN 1 ELSE 0 END) AS con_permisos_especiales
FROM usuarios;

-- Ejemplo de actualización manual para un usuario (SOLO PARA REFERENCIA, NO EJECUTAR):
-- UPDATE usuarios 
-- SET permisos_especiales = JSON_OBJECT(
--     'unidades_permitidas', JSON_ARRAY(1, 3),
--     'adscripciones_permitidas', JSON_ARRAY(10, 15)
-- )
-- WHERE usuario_id = 123;

-- Para MySQL 5.7 (sin JSON_OBJECT), usar cadena JSON:
-- UPDATE usuarios 
-- SET permisos_especiales = '{"unidades_permitidas":[1,3],"adscripciones_permitidas":[10,15]}'
-- WHERE usuario_id = 123;

-- Migration completada (solo documentación)
SELECT 'Migration 04: Estructura de alcance organizacional documentada' AS resultado;
