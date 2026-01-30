# Implementación de Superdimensiones - Clima Laboral

## 🎯 Objetivo

Agregar la capacidad de agrupar las 12 dimensiones de clima laboral en 4 superdimensiones para facilitar el análisis y la toma de decisiones.

---

## 📋 Pasos de Implementación

### 1. Ejecutar la Migración de Base de Datos

La migración agrega la columna `superdimension` a la tabla `clima_dimensiones` y actualiza los registros existentes.

**Archivo:** `migrations/add_superdimension_clima.sql`

#### Opción A: Desde MySQL/phpMyAdmin
```sql
-- Copiar y ejecutar el contenido del archivo
-- migrations/add_superdimension_clima.sql
```

#### Opción B: Desde línea de comandos
```bash
# Ajusta las credenciales según tu configuración
mysql -u root -p sgrh < migrations/add_superdimension_clima.sql
```

### 2. Verificar la Migración

Ejecuta este query para confirmar que las superdimensiones se asignaron correctamente:

```sql
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
```

**Resultado esperado:**

| superdimension | dimensiones | total_dimensiones |
|----------------|-------------|-------------------|
| Relación con el Jefe Inmediato | Liderazgo inmediato, Reconocimiento | 2 |
| Relación con los Compañeros | Colaboración entre áreas, Comunicación interna, Equidad y respeto | 3 |
| Relación con la Empresa | Propósito y alineación, Estructura y coordinación, Recursos y herramientas, Bienestar y balance | 4 |
| Relación con el Trabajo | Claridad de rol, Desarrollo y aprendizaje, Procesos y eficiencia | 3 |

---

## 📊 Estructura Resultante

### 4 Superdimensiones → 12 Dimensiones → 48 Reactivos

```
📦 Relación con el Jefe Inmediato (2 dimensiones, 8 reactivos)
├─ Liderazgo inmediato (4 reactivos)
└─ Reconocimiento (4 reactivos)

📦 Relación con los Compañeros (3 dimensiones, 12 reactivos)
├─ Colaboración entre áreas (4 reactivos)
├─ Comunicación interna (4 reactivos)
└─ Equidad y respeto (4 reactivos)

📦 Relación con la Empresa (4 dimensiones, 16 reactivos)
├─ Propósito y alineación (4 reactivos)
├─ Estructura y coordinación (4 reactivos)
├─ Recursos y herramientas (4 reactivos)
└─ Bienestar y balance (4 reactivos)

📦 Relación con el Trabajo (3 dimensiones, 12 reactivos)
├─ Claridad de rol (4 reactivos)
├─ Desarrollo y aprendizaje (4 reactivos)
└─ Procesos y eficiencia (4 reactivos)
```

---

## 🔧 Modificaciones en Código (Opcional)

### A. Actualizar clima_dimensiones.php

Para permitir editar la superdimensión desde la interfaz administrativa:

```php
// Agregar selector de superdimensión en el formulario de edición
<div class="form-group">
    <label>Superdimensión</label>
    <select name="superdimension" class="form-control">
        <option value="">-- Sin asignar --</option>
        <option value="Relación con el Jefe Inmediato">Relación con el Jefe Inmediato</option>
        <option value="Relación con los Compañeros">Relación con los Compañeros</option>
        <option value="Relación con la Empresa">Relación con la Empresa</option>
        <option value="Relación con el Trabajo">Relación con el Trabajo</option>
    </select>
</div>
```

### B. Actualizar clima_resultados_mi_unidad.php

Para mostrar resultados agrupados por superdimensión:

```php
// Calcular promedios por superdimensión
$promedios_superdim_empresa = array();

$query_superdim = "
    SELECT 
        d.superdimension,
        ROUND((AVG(cr.valor) - 1) / 4 * 100, 2) AS promedio_0_100,
        COUNT(DISTINCT ce.empleado_id) AS respondentes
    FROM clima_respuestas cr
    INNER JOIN clima_reactivos crt ON crt.reactivo_id = cr.reactivo_id
    INNER JOIN clima_dimensiones d ON d.dimension_id = crt.dimension_id
    INNER JOIN clima_elegibles ce ON ce.periodo_id = cr.periodo_id AND ce.empleado_id = cr.empleado_id
    WHERE cr.periodo_id = ? 
      AND ce.empresa_id = ?
      AND d.superdimension IS NOT NULL
    GROUP BY d.superdimension
    ORDER BY d.superdimension
";

$stmt_superdim = $pdo->prepare($query_superdim);
$stmt_superdim->execute([$periodo_id, $empresa_id]);
$promedios_superdim_empresa = $stmt_superdim->fetchAll(PDO::FETCH_ASSOC);
```

### C. Agregar visualización con gráficos

```javascript
// Gráfico de superdimensiones con ECharts
var superDimChart = echarts.init(document.getElementById('chart-superdim'));
var superDimOption = {
    title: { text: 'Resultados por Superdimensión' },
    tooltip: {},
    xAxis: {
        type: 'category',
        data: ['Jefe Inmediato', 'Compañeros', 'Empresa', 'Trabajo']
    },
    yAxis: {
        type: 'value',
        min: 0,
        max: 100
    },
    series: [{
        data: [74.2, 69.7, 72.8, 71.3],
        type: 'bar',
        itemStyle: { color: '#5C6BC0' }
    }]
};
superDimChart.setOption(superDimOption);
```

---

## 📖 Documentación

- **SUPERDIMENSIONES_CLIMA.md**: Documentación completa del modelo
- **RESULTADOS_CLIMA_EJEMPLO.md**: Ejemplos actualizados con superdimensiones
- **migrations/add_superdimension_clima.sql**: Script de migración

---

## ✅ Checklist de Implementación

- [ ] Ejecutar migración SQL
- [ ] Verificar asignación de superdimensiones
- [ ] Actualizar `clima_dimensiones.php` (opcional)
- [ ] Actualizar `clima_resultados_mi_unidad.php` (opcional)
- [ ] Actualizar `clima_planes_mi_unidad.php` (opcional)
- [ ] Probar visualización de resultados
- [ ] Documentar cambios internos

---

## 🚀 Próximos Pasos (Opcionales)

1. **Filtro por Superdimensión** en reportes
2. **Exportación** de resultados agrupados por superdimensión
3. **Dashboard** ejecutivo con vista de 4 superdimensiones
4. **Planes de Acción** agrupados por superdimensión

---

## 📞 Soporte

Para dudas o problemas durante la implementación, revisa:
- La estructura en `SUPERDIMENSIONES_CLIMA.md`
- Los ejemplos en `RESULTADOS_CLIMA_EJEMPLO.md`
- El script SQL en `migrations/add_superdimension_clima.sql`
