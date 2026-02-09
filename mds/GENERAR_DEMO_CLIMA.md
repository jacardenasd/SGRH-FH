# 🎯 Generador de Datos Demo - Clima Laboral

## Descripción

Script para generar automáticamente datos de demostración realistas para el módulo de Clima Laboral del SGRH.

> **✨ Nuevo:** El generador ahora crea automáticamente empleados de demo si la base de datos no tiene empleados activos. Esto permite funcionar en bases de datos nuevas o vacías sin necesidad de configuración previa.

---

## 📁 Archivos Creados

### 1. `generar_demo_clima.sql`
Script SQL puro que genera todos los datos de demo en una sola ejecución.

**Ubicación:** `c:/MAMP/htdocs/sgrh/generar_demo_clima.sql`

**Características:**
- ✅ Auto-creación de 20 empleados de demo si no existen empleados activos
- ✅ Generación de elegibles, respuestas y publicación
- ✅ Distribución realista de datos (20-50-30%)

### 2. `clima_generar_demo.php`
Interfaz web para ejecutar la generación de datos sin necesidad de acceso a MySQL directo.

**Ubicación:** `c:/MAMP/htdocs/sgrh/public/clima_generar_demo.php`

**Características:**
- ✅ Auto-creación de 20 empleados de demo si no existen
- ✅ Interfaz amigable con botones de acción
- ✅ Diagnóstico automático de problemas
- ✅ Manejo robusto de errores

---

## 🚀 Cómo Usar

### Opción A: Desde el Navegador (Recomendado)

1. **Acceder al script web:**
   ```
   http://localhost/sgrh/public/clima_generar_demo.php
   ```

2. **Seleccionar acción:**
   - 🗑️ **Limpiar Datos**: Elimina respuestas anteriores (sin afectar la estructura)
   - ✨ **Generar Demo**: Crea 200 empleados elegibles con respuestas realistas (o genera empleados de demo si es necesario)
   - 📊 **Ver Resultados**: Lleva a los resultados generados

3. **Verificar resultados:**
   ```
   /sgrh/public/clima_resultados_mi_unidad.php
   ```

### Opción B: Desde MySQL

1. **Abrir MySQL Workbench o phpMyAdmin**

2. **Ejecutar el script:**
   ```bash
   mysql -u usuario -p nombre_base_datos < generar_demo_clima.sql
   ```

3. **O copiar el contenido manualmente:**
   - Abrir `generar_demo_clima.sql` en el editor
   - Copiar todo el contenido
   - Pegarlo en el cliente MySQL
   - Ejecutar

---

## 📊 Datos Generados

### Distribución de Respuestas

| Respuesta | Porcentaje | Significado |
|-----------|-----------|------------|
| 1 | 20% | En desacuerdo |
| 2 | 50% | Parcialmente de acuerdo |
| 3 | 30% | Totalmente de acuerdo |

### Conversión a Escala 0-100%

```
Porcentaje = (125 - Valor * 25)

1 → 100%
2 → 75%
3 → 50%
```

### Volumen de Datos

- **Empleados elegibles:** Hasta 200 (activos en la empresa)
- **Reactivos por empleado:** Todos los configurados (typically 48)
- **Total de respuestas:** Empleados × Reactivos

**Ejemplo:** 150 empleados × 48 reactivos = 7,200 respuestas

---

## 🎨 Resultados Esperados

### Promedios Típicos

Con la distribución realista (20-50-30), esperas resultados como:

| Superdimensión | Promedio Esperado |
|----------------|------------------|
| Relación con Jefe | 55-65% |
| Relación Compañeros | 50-60% |
| Relación Empresa | 55-65% |
| Relación Trabajo | 50-60% |

### Colores en Gráficas

| Rango | Color | Interpretación |
|-------|-------|-----------------|
| 0-29% | 🔴 Rojo | Crítico |
| 30-49% | 🟠 Naranja | Alerta |
| 50-69% | 🟢 Verde | Regular |
| 70-100% | 🔵 Azul | Bueno |

---

## ✅ Verificación

### Después de generar, verifica:

1. **Cantidad de registros:**
   ```sql
   SELECT COUNT(*) FROM clima_respuestas WHERE periodo_id = 1;
   ```
   Resultado esperado: 5,000+ registros

2. **Promedio general:**
   ```sql
   SELECT ROUND((AVG(valor) - 1) / 2 * 100, 1) AS promedio
   FROM clima_respuestas WHERE periodo_id = 1;
   ```
   Resultado esperado: ~55-60%

3. **Elegibles completados:**
   ```sql
   SELECT COUNT(*) FROM clima_elegibles 
   WHERE periodo_id = 1 AND completado = 1;
   ```

4. **Ver en la interfaz:**
   - Visita `/sgrh/public/clima_resultados_mi_unidad.php`
   - Deberías ver gráficas con datos

---

## 🔧 Personalización

### Cambiar cantidad de empleados

En `generar_demo_clima.sql`, línea 62:
```sql
LIMIT 200;  -- Cambiar este número
```

O en `clima_generar_demo.php`, línea 84:
```php
LIMIT 200
```

### Cambiar distribución de respuestas

En `generar_demo_clima.sql`, línea 80-87:
```sql
CASE 
    WHEN RAND() < 0.20 THEN 1  -- Cambiar porcentaje
    WHEN RAND() < 0.70 THEN 2  -- Cambiar porcentaje
    ELSE 3
END
```

### Usar período diferente

Agregar a la URL:
```
?periodo_id=2
```

---

## 🛠️ Solución de Problemas

### Error: "No hay reactivos configurados"
**Causa:** No existen preguntas en `clima_reactivos`  
**Solución:** Primero ve a `/sgrh/public/clima_dimensiones.php` y configura las preguntas

### Error: "No hay empresa activa"
**Causa:** La empresa_id no existe  
**Solución:** Modifica en `clima_generar_demo.php` la línea:
```php
$empresa_id = isset($_SESSION['empresa_id']) ? (int)$_SESSION['empresa_id'] : 1;
```

### Los gráficos muestran 0%
**Causa:** Las respuestas usan escala antigua (1-5)  
**Solución:** Ejecuta "Limpiar Datos" y luego "Generar Demo"

---

## 📋 Checklist de Uso

- [ ] Acceder a `http://localhost/sgrh/public/clima_generar_demo.php`
- [ ] Hacer clic en "🗑️ Limpiar Datos"
- [ ] Hacer clic en "✨ Generar Demo"
- [ ] Esperar a que se complete (5-10 segundos)
- [ ] Verificar el mensaje de éxito
- [ ] Visitar `/sgrh/public/clima_resultados_mi_unidad.php`
- [ ] Ver los gráficos con datos

---

## 📞 Soporte

Si tienes problemas:
1. Revisa el archivo de errores de PHP: `error.log`
2. Verifica que existan reactivos configurados
3. Comprueba que el período exista en `clima_periodos`
4. Consulta con el administrador de la base de datos

---

**Última actualización:** Febrero 2026  
**Versión:** 1.0  
**Compatible con:** SGRH v2.0+
