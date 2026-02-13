# ✅ GUÍA: Procesar Múltiples Encuestas con OCR

## 🎯 Sistema Mejorado para Múltiples Usuarios

El sistema ahora está optimizado para procesar encuestas de **diferentes usuarios sin problemas**.

---

## 📋 Pasos para Procesar Múltiples Encuestas (Recomendado)

### **Método 1: Procesar una por una en la misma sesión (NUEVO)**

Este es el método recomendado - evita problemas de caché:

```
1️⃣  Carga PDF del usuario 1
   ↓
2️⃣  Revisa respuestas
   ↓
3️⃣  Haz clic "Guardar Respuestas Validadas"
   ↓
4️⃣  ✅ Guarda exitosamente
   ↓
5️⃣  Haz clic "Procesar Nueva Encuesta"
   ↓
6️⃣  ➡️ Formulario se limpia automáticamente
   ↓
7️⃣  Selecciona PDF del usuario 2
   ↓
8️⃣  Repite desde paso 2
```

**Ventaja:** Sin recargar página, no hay conflictos de sesión

---

### **Método 2: Procesar con recarga entre encuestas**

Si tienes problemas con el método 1:

```
1️⃣  Carga PDF del usuario 1
2️⃣  Revisa y guarda
3️⃣  Haz clic "Cancelar"
   ↓ Página se recarga
4️⃣  Carga PDF del usuario 2
5️⃣  Revisa y guarda
6️⃣  Repite...
```

---

## 🔴 Si Ves Errores al Procesar Múltiples

### Error: "Este empleado no es elegible para este período"

**Causa:** El empleado no está registrado en `clima_elegibles`

**Solución:**
1. Va a **Administración de Encuestas → Períodos**
2. Selecciona el período
3. Haz clic **"Agregar Empleados Elegibles"**
4. Agrega los empleados antes de procesar encuestas

---

### Error: "UNIQUE constraint failed"

**Causa:** Intentas guardar la MISMA respuesta dos veces para el mismo empleado-período-pregunta

**Solución:**
- Este error es NORMAL - significa que ya guardaste esa respuesta anteriormente
- El sistema automáticamente actualiza la respuesta anterior (no duplica)
- Si necesitas corregir, simplemente guarda de nuevo con el valor correcto

---

### Error al cargar segunda encuesta

**Causa:** El file input del formulario anterior no se limpió

**Solución - Opción A (Recomendada - NUEVO):**
- Haz clic **"Procesar Nueva Encuesta"** 
- El sistema limpia todo automáticamente
- Selecciona el nuevo archivo

**Solución - Opción B:**
- Haz clic **"Cancelar"**
- La página se recarga completamente
- Inicia proceso con segunda encuesta

---

## 📊 Estructura de Datos para Múltiples Encuestas

Cada encuesta se guarda así en la BD:

| Columna | Ejemplo |
|---------|---------|
| `periodo_id` | 1 |
| `empleado_id` | 101 |
| `reactivo_id` | 5 |
| `valor` | 1 (Totalmente de acuerdo) |
| `fecha_respuesta` | 2025-02-09 14:30:00 |

**Esto permite:**
- ✅ Múltiples empleados en el mismo período
- ✅ Múltiples respuestas por empleado
- ✅ Actualizar respuestas (overwrite automático)
- ✅ Capturar anónimas o nominadas

---

## 🔑 Restricciones UNIQUE en la BD

Para evitar duplicados, el sistema tiene:

```sql
UNIQUE INDEX (periodo_id, empleado_id, reactivo_id)
```

Esto significa:
- ✅ Puedes guardar respuestas de empleado 1 y empleado 2
- ✅ Puedes actualizar la respuesta de un empleado
- ❌ No puedes tener 2 registros idénticos (previene duplicados)

---

## ✨ Mejoras Incluidas en Esta Versión

| Mejora | Descripción |
|--------|-------------|
| **Botón "Procesar Nueva Encuesta"** | Limpia formulario sin recargar |
| **Mejor validación de empleados** | Verificación de elegibilidad |
| **Limpiar transacciones** | Rollback automático si hay error |
| **Estado claro de progreso** | Barra de progreso OCR |

---

## 📝 Checklist Antes de Procesar Múltiples Encuestas

- [ ] Todos los empleados están configurados en `clima_elegibles`
- [ ] Los empleados están marcados como **elegibles = 1**
- [ ] El período está **activo**  
- [ ] Los archivos están en formato PDF, PNG o JPG
- [ ] Los archivos pesan menos de 10 MB
- [ ] Las imágenes están escaneadas en 300+ DPI

---

## 🚀 Flujo de Trabajo Recomendado

```
┌─────────────────────────────────────────┐
│ 1. Preparar datos en la BD              │
│    ├─ Crear período                     │
│    ├─ Agregar empleados elegibles       │
│    └─ Confirmar reactivos cargados      │
└──────────────┬──────────────────────────┘
               ↓
┌──────────────────────────────────────────┐
│ 2. Procesar primera encuesta             │
│    ├─ Cargar PDF/imagen                 │
│    ├─ Revisar OCR                       │
│    └─ Guardar respuestas                │
└──────────────┬──────────────────────────┘
               ↓
┌──────────────────────────────────────────┐
│ 3. Procesar segunda encuesta (NUEVO)     │
│    ├─ Clic "Procesar Nueva Encuesta"    │
│    ├─ Cargar nuevo PDF                  │
│    ├─ Revisar OCR                       │
│    └─ Guardar respuestas                │
└──────────────┬──────────────────────────┘
               ↓
┌──────────────────────────────────────────┐
│ 4. Repetir hasta procesar todas          │
└──────────────────────────────────────────┘
```

---

## 📊 Ejemplo: Procesar 3 Empleados

**Empleado 1 - Juan López:**
1. Carga `juan_encuesta.pdf`
2. OCR detecta/genera plantilla
3. Revisa y corrige si es necesario
4. Haz clic "Guardar Respuestas Validadas"
5. ✅ Se guarda correctamente

**Empleado 2 - María García:**  
6. Haz clic "Procesar Nueva Encuesta"
7. Formulario se limpia automáticamente
8. Carga `maria_encuesta.pdf`
9. OCR procesa
10. Revisa y guarda
11. ✅ Se guarda correctamente

**Empleado 3 - Pedro Rodríguez:**
12. Repite pasos 6-11
13. ✅ Listo

---

## ❓ Preguntas Frecuentes

**P: ¿Puedo procesar empleados del mismo período?**
R: Sí, eso es lo recomendado. El sistema está diseñado para eso.

**P: ¿Si cometo error en las respuestas, puedo corregir?**
R: Sí, simplemente carga nuevamente y guarda las correcciones. El sistema sobrescribe.

**P: ¿Puedo procesar anónimas y nominadas en el mismo período?**
R: Sí, ambas formas están soportadas. Selecciona "Captura anónima" según sea necesario.

**P: ¿Hasta cuántas encuestas puedo procesar?**
R: Sin límite - depende de tu BD y tiempo disponible.

**P: ¿Se pierden datos si me desconecto?**
R: Solo se pierden si cierras sin guardar. Una vez guardado, está en la BD.

---

## 🔗 Enlaces Útiles

- **Sistema OCR:** http://localhost:8888/sgrh/public/clima_captura_ia.php
- **Diagnóstico de errores:** http://localhost:8888/sgrh/diagnostico_ocr_error.php
- **Administración:** http://localhost:8888/sgrh/public/clima_admin.php

---

## 📞 Si Aún Tienes Problemas

1. **Ve a:** http://localhost:8888/sgrh/diagnostico_ocr_error.php
2. **Copia el contenido de "Logs de Error PHP"**
3. **Proporciona:**
   - El error exacto que ves
   - Paso en que falla (cargar, OCR, guardar)
   - Si usas mis empleados diferentes o el mismo
4. **Contacta al soporte técnico**

---

**¡Ahora puedes procesar múltiples encuestas sin complicaciones!** 🎉
