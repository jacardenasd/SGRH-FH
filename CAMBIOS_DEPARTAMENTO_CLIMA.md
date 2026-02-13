# Cambios: Departamento en Clima Laboral

## Fecha: 12 de febrero de 2026

## Resumen
Se agregó soporte completo para guardar y rastrear el **departamento (adscripcion_id)** en las respuestas de clima laboral, tanto para capturas identificadas como anónimas.

---

## 1. Cambios en Base de Datos

### Archivo de migración: `migrations/agregar_adscripcion_clima_respuestas.sql`

Se agregó el campo `adscripcion_id` a dos tablas:

#### Tabla `clima_respuestas` (respuestas Likert)
```sql
ALTER TABLE `clima_respuestas` 
ADD COLUMN `adscripcion_id` INT(11) NULL DEFAULT NULL COMMENT 'Departamento (org_adscripciones)';

-- Con índice y foreign key
ADD INDEX `idx_clima_resp_adscripcion` (`periodo_id`, `adscripcion_id`);
ADD CONSTRAINT `fk_clima_resp_adscripcion` FOREIGN KEY (`adscripcion_id`) 
    REFERENCES `org_adscripciones` (`adscripcion_id`) 
    ON DELETE SET NULL ON UPDATE CASCADE;
```

#### Tabla `clima_respuestas_abiertas` (respuestas de texto)
```sql
ALTER TABLE `clima_respuestas_abiertas`
ADD COLUMN `adscripcion_id` INT(11) NULL DEFAULT NULL COMMENT 'Departamento (org_adscripciones)';

-- Con índice y foreign key
ADD INDEX `idx_clima_resp_ab_adscripcion` (`periodo_id`, `adscripcion_id`);
ADD CONSTRAINT `fk_clima_resp_ab_adscripcion` FOREIGN KEY (`adscripcion_id`) 
    REFERENCES `org_adscripciones` (`adscripcion_id`) 
    ON DELETE SET NULL ON UPDATE CASCADE;
```

**Estado:** ✅ Migración ejecutada exitosamente

---

## 2. Cambios en Código PHP

### Archivo: `public/clima_captura_respuestas.php`

#### A. Captura del departamento desde POST
```php
$adscripcion_id = isset($_POST['adscripcion_id']) ? (int)$_POST['adscripcion_id'] : 0;
```

#### B. INSERT de respuestas Likert actualizado
```php
// Ahora incluye adscripcion_id
INSERT INTO clima_respuestas 
(periodo_id, empleado_id, unidad_id, adscripcion_id, reactivo_id, valor, fecha_respuesta)
VALUES (?, ?, ?, ?, ?, ?, NOW())
```

#### C. INSERT de respuestas abiertas actualizado
```php
// Ahora incluye adscripcion_id
INSERT INTO clima_respuestas_abiertas 
(periodo_id, empleado_id, empresa_id, unidad_id, adscripcion_id, pregunta_id, respuesta, fecha_respuesta)
VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
```

#### D. Obtención del departamento del empleado
```php
// Consulta actualizada para incluir e.adscripcion_id
SELECT us.nombre, us.apellido_paterno, ce.unidad_id, u.nombre as unidad, 
       a.nombre as departamento, e.adscripcion_id
FROM empleados e
...
```

#### E. Campos hidden del formulario
```php
// Para captura anónima
<input type="hidden" name="adscripcion_id" value="<?php echo (int)$departamento_anonimo; ?>">

// Para captura identificada
<input type="hidden" name="adscripcion_id" value="<?php echo isset($empleado_info['adscripcion_id']) ? (int)$empleado_info['adscripcion_id'] : ''; ?>">
```

---

## 3. ¿Dónde se guarda el departamento?

### Para capturas ANÓNIMAS:
1. Usuario selecciona un **departamento** de la lista desplegable
2. Se envía `departamento_anonimo` (que es el `adscripcion_id`)
3. Se guarda en la base de datos:
   - `clima_respuestas.adscripcion_id` = ID del departamento seleccionado
   - `clima_respuestas.unidad_id` = ID de la unidad a la que pertenece el departamento
   - `clima_respuestas.empleado_id` = NULL (anónimo)

### Para capturas IDENTIFICADAS:
1. Usuario selecciona un **empleado**
2. Se obtiene el `adscripcion_id` del registro del empleado en la tabla `empleados`
3. Se guarda en la base de datos:
   - `clima_respuestas.adscripcion_id` = Departamento del empleado
   - `clima_respuestas.unidad_id` = Unidad del empleado
   - `clima_respuestas.empleado_id` = ID del empleado

---

## 4. Ventajas de este cambio

✅ **Trazabilidad precisa**: Ahora se puede identificar exactamente qué departamento respondió

✅ **Reportes detallados**: Los análisis pueden hacerse por departamento específico, no solo por unidad

✅ **Múltiples departamentos por unidad**: Si una unidad tiene varios departamentos, se pueden distinguir

✅ **Compatibilidad**: Si `adscripcion_id` es NULL, el sistema sigue funcionando (solo usa `unidad_id`)

✅ **Histórico**: Las respuestas antiguas (sin departamento) se mantienen válidas con `adscripcion_id = NULL`

---

## 5. Consultas de ejemplo

### Ver respuestas con departamento
```sql
SELECT 
    cr.respuesta_id,
    cp.anio as periodo,
    u.nombre as unidad,
    a.nombre as departamento,
    cr.reactivo_id,
    cr.valor
FROM clima_respuestas cr
LEFT JOIN clima_periodos cp ON cp.periodo_id = cr.periodo_id
LEFT JOIN org_unidades u ON u.unidad_id = cr.unidad_id
LEFT JOIN org_adscripciones a ON a.adscripcion_id = cr.adscripcion_id
WHERE cr.empleado_id IS NULL  -- Para ver solo anónimas
ORDER BY cr.fecha_respuesta DESC;
```

### Contar respuestas por departamento
```sql
SELECT 
    a.nombre as departamento,
    COUNT(DISTINCT cr.respuesta_id) as total_respuestas
FROM clima_respuestas cr
INNER JOIN org_adscripciones a ON a.adscripcion_id = cr.adscripcion_id
WHERE cr.periodo_id = 3  -- Cambiar por el período deseado
GROUP BY cr.adscripcion_id, a.nombre
ORDER BY total_respuestas DESC;
```

---

## 6. Archivos modificados

1. ✅ `migrations/agregar_adscripcion_clima_respuestas.sql` (NUEVO)
2. ✅ `public/clima_captura_respuestas.php` (MODIFICADO)
3. ✅ Base de datos `sgrh` - tablas actualizadas

---

## 7. Estado final

**✅ COMPLETADO** - El sistema ahora guarda el departamento (`adscripcion_id`) en todas las respuestas de clima laboral.

**Próximos pasos sugeridos:**
- Actualizar reportes/gráficas para mostrar análisis por departamento
- Agregar filtros por departamento en las vistas de resultados
- Documentar para usuarios finales el nuevo nivel de detalle disponible
