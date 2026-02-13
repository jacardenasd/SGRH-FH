# Solución: Bug de Respuestas Anónimas Duplicadas

## Problema Reportado
En `clima_captura_respuestas.php`, al guardar una encuesta y seleccionar "anónimo", el sistema cargaba las últimas respuestas guardadas por otras unidades anónimas.

## Causa Raíz
La tabla `clima_respuestas` no tenía un campo `unidad_id` para distinguir las respuestas anónimas de diferentes unidades:

1. **INSERT sin unidad_id**: Cuando se guardaban respuestas Likert anónimas, no se almacenaba a qué unidad pertenecían
2. **SELECT sin filtro**: Al cargar respuestas anónimas, se traían TODAS las respuestas donde `empleado_id IS NULL`, sin importar la unidad
3. **Conflicto con respuestas identificadas**: Las respuestas identificadas y anónimas se podían sobrescribir mutuamente

## Solución Implementada

### 1. Migración de Base de Datos
**Archivo**: `mds/add_unidad_to_respuestas.sql`

Cambios:
- Agregó columna `unidad_id` a la tabla `clima_respuestas`
- Creó índice `idx_clima_resp_unidad` para filtros rápidos
- Actualizó la clave única para incluir `unidad_id`

```sql
ALTER TABLE `clima_respuestas` 
ADD COLUMN `unidad_id` int(11) NULL DEFAULT NULL AFTER `empleado_id`,
ADD INDEX `idx_clima_resp_unidad`(`periodo_id`, `unidad_id`) USING BTREE;

ALTER TABLE `clima_respuestas` 
DROP INDEX `idx_periodo_empleado_reactivo`,
ADD UNIQUE INDEX `idx_periodo_empleado_reactivo`(`periodo_id`, `empleado_id`, `reactivo_id`, `unidad_id`) USING BTREE;
```

### 2. Actualización de Código PHP
**Archivo**: `public/clima_captura_respuestas.php`

#### A. INSERT - Líneas 80-96
Ahora se guarda `unidad_id` junto con las respuestas:
```php
$ins = $pdo->prepare("
    INSERT INTO clima_respuestas (periodo_id, empleado_id, unidad_id, reactivo_id, valor, fecha_respuesta)
    VALUES (?, ?, ?, ?, ?, NOW())
    ON DUPLICATE KEY UPDATE valor = VALUES(valor), fecha_respuesta = VALUES(fecha_respuesta)
");
$result = $ins->execute([$periodo_id, $empleado_id, $unidad_id, $reactivo_id, $valor]);
```

#### B. SELECT - Líneas 300-303
Ahora se filtra por `unidad_id` para respuestas anónimas:
```php
$resp_stmt = $pdo->prepare("
    SELECT reactivo_id, valor FROM clima_respuestas
    WHERE periodo_id = ? AND empleado_id IS NULL AND unidad_id = ?
");
$resp_stmt->execute([$periodo_id, $unidad_anonima]);
```

## Comportamiento Después de la Solución

### Respuestas Identificadas (empleado_id != NULL)
- Se guardan y cargan correctamente por empleado
- No se ven afectadas por esta solución
- Clave única: `(periodo_id, empleado_id, reactivo_id, unidad_id)`

### Respuestas Anónimas (empleado_id IS NULL)
- Se guardan con su correspondiente `unidad_id`
- Al cargar un formulario anónimo, solo muestra respuestas de esa unidad específica
- Diferentes unidades anónimas tienen espacios separados
- Clave única seguida: `(periodo_id, NULL, reactivo_id, unidad_id)`

## Datos Existentes - Migración Completada ✅

**Estado de la migración:**
- **Total respuestas**: 896
- **Respuestas identificadas**: 896 (100%)
- **Respuestas anónimas**: 0
- **Registros sin unidad_id**: 0 (migración completada)

**Proceso ejecutado:**
1. Se agregó columna `unidad_id` a tabla `clima_respuestas`
2. Se ejecutó script de migración (`mds/migracion_unidad_respuestas.sql`) que:
   - Obtuvo la `unidad_id` de `clima_elegibles` para cada respuesta identificada
   - Actualizó todos los 896 registros con sus unidades correspondientes
   - **Resultado**: Todas las respuestas tienen unidad_id correctamente asignado

**Verificación:**
```
periodo_id=3, total_respuestas=896, identificadas=896, anonimas=0, unidades=6
```

Los datos históricos están completamente migrados y el sistema está listo para nuevas respuestas anónimas.

## Testing
Para verificar la solución:
1. Crear dos encuestas anónimas en diferentes unidades en el mismo período
2. Guardar respuestas diferentes en cada una
3. Cargar cada encuesta nuevamente
4. Verificar que cada una muestre solo sus propias respuestas (no las de la otra unidad)

## Archivos Relacionados
- Database: `mds/add_unidad_to_respuestas.sql`
- Código: `public/clima_captura_respuestas.php` (líneas 91-96, 301-303)
- Estructura: `sgrh.sql` (definición de tabla actualizada)
