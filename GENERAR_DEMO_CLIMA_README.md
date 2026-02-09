# 🎯 GENERADOR DE DATOS DEMO - CLIMA LABORAL

Conjunto completo de herramientas para generar datos de demostración realistas para el módulo de Clima Laboral del SGRH.

---

## 📦 Archivos Incluidos

| Archivo | Tipo | Descripción |
|---------|------|-------------|
| `generar_demo_clima.sql` | SQL | Script puro que genera todos los datos |
| `clima_generar_demo.php` | PHP | Interfaz web para generar datos |
| `ejecutar_demo_clima.bat` | BAT | Script Windows para ejecutar desde terminal |
| `ejecutar_demo_clima.ps1` | PowerShell | Script PowerShell moderno |
| `GENERAR_DEMO_CLIMA.md` | DOC | Documentación detallada |

---

## 🚀 INICIO RÁPIDO (Recomendado)

### 3 Pasos Simples:

1. **Abrir en navegador:**
   ```
   http://localhost/sgrh/public/clima_generar_demo.php
   ```

2. **Hacer clic en:**
   - ✨ "Generar Demo"

3. **Ver resultados en:**
   ```
   http://localhost/sgrh/public/clima_resultados_mi_unidad.php
   ```

✅ **¡Listo!** Los gráficos mostrarán datos de clima laboral.

---

## 🛠️ OPCIONES DE USO

### Opción 1: Navegador (Más Fácil) ⭐

```
http://localhost/sgrh/public/clima_generar_demo.php
```

**Ventajas:**
- No requiere acceso a terminal
- Interfaz visual amigable
- Genera hasta 200 empleados con datos realistas
- Verificación automática de errores

---

### Opción 2: MySQL Directo

```bash
mysql -u root sgrh < generar_demo_clima.sql
```

**Ventajas:**
- Más rápido para grandes volúmenes
- Control total sobre parámetros
- Ideal para scriptiing

**Pasos:**
1. Abre terminal/CMD en `c:\MAMP\htdocs\sgrh\`
2. Ejecuta el comando anterior
3. Visita `/sgrh/public/clima_resultados_mi_unidad.php`

---

### Opción 3: Windows Batch

```bash
ejecutar_demo_clima.bat generate
```

**Ventajas:**
- Simple de usar en Windows
- Sin instalación adicional

**Pasos:**
1. Doble-click en `ejecutar_demo_clima.bat`
2. Selecciona opción `generate`
3. Espera a que complete

---

### Opción 4: PowerShell (Moderno)

```powershell
.\ejecutar_demo_clima.ps1 -Action generate
```

**Ventajas:**
- Moderno y flexible
- Salida coloreada
- Control programático

**Pasos:**
```powershell
# En PowerShell (como administrador)
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
.\ejecutar_demo_clima.ps1 -Action generate
```

---

## 📊 DATOS GENERADOS

### Distribución Realista

```
Respuesta 1 (Desacuerdo):           20%  →  0%
Respuesta 2 (Parcialmente Acuerdo): 50%  →  50%
Respuesta 3 (Totalmente Acuerdo):   30%  →  100%
```

### Volumen

- **Empleados elegibles:** ~150-200
- **Reactivos por empleado:** 48 (estándar)
- **Total de respuestas:** ~7,200-9,600

### Resultado Esperado

Gráficas con valores entre **50-60%** (realista y visualmente atractivo)

```
Relación con Jefe:     ████████░░ 58%
Relación Compañeros:   ███████░░░ 55%
Relación Empresa:      ████████░░ 59%
Relación Trabajo:      ███████░░░ 54%
```

---

## ✅ VERIFICAR QUE FUNCIONA

### En el Navegador

1. **Ver gráficas:**
   ```
   http://localhost/sgrh/public/clima_resultados_mi_unidad.php
   ```
   Deberías ver:
   - Gauge (indicador visual) con valor 50-60%
   - Gráfico de barras con 12 dimensiones
   - Colores según desempeño

2. **Ver resultados ejecutivo:**
   ```
   http://localhost/sgrh/public/clima_resultados.php
   ```

### En MySQL

```sql
-- Contar respuestas
SELECT COUNT(*) AS total_respuestas FROM clima_respuestas 
WHERE periodo_id = 1;

-- Promedio general
SELECT ROUND((AVG(valor) - 1) / 2 * 100, 1) AS promedio 
FROM clima_respuestas WHERE periodo_id = 1;

-- Respuestas por dimensión
SELECT d.nombre, COUNT(*) AS cantidad, 
       ROUND((AVG(cr.valor) - 1) / 2 * 100, 1) AS promedio
FROM clima_respuestas cr
JOIN clima_reactivos crt ON cr.reactivo_id = crt.reactivo_id
JOIN clima_dimensiones d ON crt.dimension_id = d.dimension_id
WHERE cr.periodo_id = 1
GROUP BY d.dimension_id
ORDER BY d.nombre;
```

---

## 🔧 PERSONALIZACIÓN

### Cambiar Cantidad de Empleados

**En `generar_demo_clima.sql` (línea 62):**
```sql
LIMIT 200;  -- Cambiar a número deseado
```

**En `clima_generar_demo.php` (línea 84):**
```php
LIMIT 200
```

### Cambiar Período

**En URL:**
```
http://localhost/sgrh/public/clima_generar_demo.php?periodo_id=2
```

### Cambiar Distribución de Respuestas

**En `generar_demo_clima.sql` (líneas 80-87):**
```sql
CASE 
    WHEN RAND() < 0.25 THEN 1  -- 25% desacuerdo
    WHEN RAND() < 0.55 THEN 2  -- 30% parcial
    ELSE 3                       -- 45% acuerdo
END
```

---

## 🚨 SOLUCIONAR PROBLEMAS

### ❌ Error: "No hay reactivos configurados"

**Causa:** No existen preguntas en la BD

**Solución:**
1. Ve a `http://localhost/sgrh/public/clima_dimensiones.php`
2. Configura al menos una dimensión con reactivos
3. Intenta generar de nuevo

### ❌ Error: "No hay empresa activa"

**Causa:** Sesión no iniciada o empresa_id inválida

**Solución:**
1. Asegúrate de estar logueado
2. Selecciona una empresa activa
3. Intenta de nuevo

### ❌ Los gráficos muestran 0%

**Causa:** Datos con escala antigua (1-5) o incorrecta

**Solución:**
1. Limpia datos existentes: `?action=clean`
2. Genera nuevos: `?action=generate`
3. Recarga la página de resultados

### ❌ MySQL: "Acceso denegado"

**Causa:** Credenciales incorrectas

**Solución:**
1. Verifica usuario/contraseña en `ejecutar_demo_clima.bat` o `.ps1`
2. O usa `clima_generar_demo.php` (más fácil)

### ❌ Datos no aparecen en gráficas

**Causa:** Período no activo o resultados no publicados

**Solución:**
1. Verifica que el período esté activo en `clima_periodos.php`
2. Ejecuta "Generar Demo" que automáticamente publica resultados

---

## 📋 CHECKLIST DE USO

- [ ] Acceder a `http://localhost/sgrh/public/clima_generar_demo.php`
- [ ] Hacer clic en "✨ Generar Demo"
- [ ] Esperar confirmación de éxito
- [ ] Ir a `http://localhost/sgrh/public/clima_resultados_mi_unidad.php`
- [ ] Verificar que aparecen gráficas
- [ ] Observar que los valores están entre 50-60%
- [ ] Comprobar colores: 🟢 Verde (50-69%) es normal

---

## 🎓 ESTRUCTURA DE DATOS

### Las 4 Superdimensiones

1. **Relación con el Jefe Inmediato** (2 dimensiones)
   - Liderazgo inmediato
   - Reconocimiento

2. **Relación con los Compañeros** (3 dimensiones)
   - Colaboración
   - Comunicación interna
   - Equidad y respeto

3. **Relación con la Empresa** (4 dimensiones)
   - Propósito y alineación
   - Estructura y coordinación
   - Recursos y herramientas
   - Bienestar y balance

4. **Relación con el Trabajo** (3 dimensiones)
   - Claridad de rol
   - Desarrollo y aprendizaje
   - Procesos y eficiencia

**Total:** 12 Dimensiones × 4 Reactivos = 48 preguntas

---

## 📈 ESCALA DE COLORES

| Rango | Color | Significado |
|-------|-------|------------|
| 0-29% | 🔴 Rojo | Crítico - Acción inmediata |
| 30-49% | 🟠 Naranja | Alerta - Mejora necesaria |
| 50-69% | 🟢 Verde | Regular - Aceptable |
| 70-100% | 🔵 Azul | Bueno - Mantener fortaleza |

---

## 📞 SOPORTE

### Si algo no funciona:

1. **Revisa el archivo de errores:**
   - `error.log` en la raíz del servidor
   - O la consola del navegador (F12)

2. **Verifica requisitos:**
   - ✅ PHP 7.2+
   - ✅ MySQL 5.7+
   - ✅ Reactivos configurados en `clima_dimensiones.php`
   - ✅ Período activo en `clima_periodos.php`

3. **Prueba alternativa:**
   - Intenta vía `clima_generar_demo.php` (más debugging)
   - O ejecuta el SQL directamente en MySQL

4. **Contacta al admin:**
   - Proporciona el contenido de `error.log`
   - URL del error
   - Pasos que realizaste

---

## 🎉 ¡ÉXITO!

Una vez generados los datos deberías poder:
- ✅ Ver gráficas de clima laboral
- ✅ Analizar resultados por superdimensión
- ✅ Comparar empresa vs unidad
- ✅ Usar datos realistas para pruebas
- ✅ Demostrar funcionalidad del módulo

---

**Versión:** 2.0  
**Última actualización:** Febrero 2026  
**Compatible con:** SGRH v2.0+  
**Autor:** Sistema SGRH
