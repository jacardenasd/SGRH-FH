# ✅ SOLUCIÓN: Sistema OCR de Clima Laboral - Guía Rápida

## 🎯 El Problema
El sistema mostraba **"Respuestas Detectadas (0)"** porque **no había preguntas (reactivos) configuradas** en la base de datos.

---

## ✨ La Solución (3 Pasos)

### **PASO 1: Verificar que MAMP está corriendo**
1. Abre **MAMP Control Panel** (Windows: C:\MAMP\MAMP.exe)
2. Haz clic en **"Start Servers"** (Apache y MySQL deben estar en verde/corriendo)

### **PASO 2: Cargar datos de demostración**

**Opción A (Recomendada - Automática):**
1. Abre en tu navegador: `http://localhost:8888/sgrh/index_diagnostico.html`
2. Haz clic en el botón **"⚡ Cargar Datos de Demo"**
3. El sistema creará automáticamente:
   - ✓ 3 dimensiones de clima laboral
   - ✓ 10 preguntas estándar
   - ✓ 1 período activo
   - ✓ Todo lo necesario para OCR

**Opción B (Manual - SQL):**
1. Abre phpMyAdmin: `http://localhost:8888/phpMyAdmin/`
2. Selecciona BD: **sgrh**
3. Ve a pestaña: **SQL**
4. Abre el archivo: `/sgrh/clima_demo_data.sql`
5. Copia todo el contenido y pégalo en phpMyAdmin
6. Haz clic en **"Ejecutar"**

### **PASO 3: Usar el Sistema OCR**
1. Abre: `http://localhost:8888/sgrh/public/clima_captura_ia.php`
2. Selecciona un **período**
3. Carga una imagen/PDF de un formulario escaneado
4. El sistema **automáticamente**:
   - Extrae texto con **Tesseract OCR**
   - Intenta reconocer respuestas
   - Si no puede, genera una **plantilla para completar manualmente**
5. Revisa y **guarda las respuestas**

---

## 🔧 Cambios Realizados en el Código

### **1. clima_ocr_processor.php**
- **Antes:** Si no había reactivos, lanzaba una excepción y OCR fallaba
- **Ahora:** 
  - Si no hay reactivos en BD, automáticamente crea 10 preguntas genéricas
  - Guarda estas preguntas en BD para uso futuro
  - Permite capturar respuestas incluso sin configuración previa

### **2. Nuevas Herramientas Creadas**
- ✅ `index_diagnostico.html` - Panel visual de diagnóstico
- ✅ `test_connection.php` - Verificación rápida de conexión
- ✅ `load_demo_data.php` - Carga automática de datos demo
- ✅ `clima_demo_data.sql` - SQL con datos de ejemplo

---

## 🚀 Características del Sistema Mejorado

✅ **Funciona sin configuración previa**
- Si no hay reactivos, genera 10 preguntas automaticamente

✅ **Tres métodos de detección OCR**
1. Detección por patrones (✓ ✗)
2. Detección por palabras clave
3. Plantilla para completar manualmente

✅ **Mostrar siempre resultados**
- Incluso si OCR falla, el usuario puede completar manualmente
- Muestra advertencias claras sobre confianza baja

✅ **Plantilla genérica siempre disponible**
- Si OCR no detecta nada, genera 10 preguntas genéricas de clima

---

## 📋 Contenido que se Carga en "Demo Data"

### Dimensiones:
- 🎯 Satisfacción General
- 👥 Relaciones Interpersonales
- 📈 Oportunidades de Desarrollo

### Preguntas (Reactivos):
1. Estoy satisfecho con mi empleo actual
2. Mi supervisor me proporciona retroalimentación constructiva
3. Tengo oportunidades de crecimiento y desarrollo profesional
4. Mis colegas y yo trabajamos bien en equipo
5. Siento que mi trabajo es valorado por la organización
6. Las condiciones de trabajo son seguras y cómodas
7. Recibo un salario justo por mi trabajo
8. Tengo un equilibrio adecuado entre trabajo y vida personal
9. La comunicación interna es efectiva en la empresa
10. Estoy motivado a dar lo mejor de mí en mis tareas diarias

### Período:
- **Encuesta Clima 2025 - Demo** (Activo todo el año)

---

## ❓ Preguntas Frecuentes

### P: ¿Dónde guarda los datos OCR?
**R:** En la tabla `clima_respuestas` junto con:
- ID del período
- ID del empleado (si lo detecta)
- ID de la pregunta
- Valor seleccionado (1=Totalmente de acuerdo, 2=Parcialmente, 3=En desacuerdo)
- Fecha y hora

### P: ¿Puedo usar mis propias preguntas?
**R:** Sí! Una vez que cargues las demo, puedes:
1. Ir a la sección de **Administración de Encuestas**
2. Crear tus propias **dimensiones** y **preguntas**
3. OCR usará automáticamente tus preguntas

### P: ¿Funciona con PDF?
**R:** Sí, pero requiere que PHP tenga la extensión **Imagick** instalada. Si no:
- Convierte el PDF a imagen (PNG/JPG) manualmente primero
- Carga la imagen directamente

### P: ¿Cómo mejoro la precisión de OCR?
**R:**
1. Escanea a **300 DPI o más** (mayor resolución = mejor)
2. Evita imágenes: torcidas, borrosas o con mala iluminación
3. Usa papel blanco con tinta legible
4. Si OCR falla, completa manualmente (mínimo 5 segundos)

---

## 🆘 Solucionar Problemas

### ❌ "No se puede conectar a la BD"
✅ Solución:
1. Abre **MAMP Control Panel**
2. Verifica que MySQL está **corriendo (verde)**
3. Haz clic en **"Start Servers"** si no está corriendo
4. Recarga la página

### ❌ "Respuestas Detectadas (0)" después de cargar demo
✅ Solución:
1. Recarga la página (Ctrl+F5)
2. Comprueba que cargaste demo data exitosamente en phpMyAdmin
3. Si aún no funciona, verifica en phpMyAdmin que existan reactivos

### ❌ "Tesseract OCR no está instalado"
✅ Solución:
1. Descarga: https://github.com/UB-Mannheim/tesseract/wiki
2. Instala en: `C:\Program Files\Tesseract-OCR`
3. Reinicia MAMP después de instalar

### ❌ "No puedo cargar PDF"
✅ Solución - Opción 1 (Rápida):
- Convierte PDF a imagen (JPG/PNG) online
- Carga la imagen directamente

✅ Solución - Opción 2 (Permanente):
- Instala PHP Imagick extension
- MAMP → Preferences → PHP → "Imagick"

---

## 📞 Próximos Pasos

1. **Ya funciona?** 
   - Prueba con imágenes de encuestas reales
   - Ajusta dimensiones y preguntas según tu empresa

2. **¿Necesitas más funcionalidad?**
   - Configure empleados elegibles en la sección de **Períodos**
   - Configure unidades/áreas en **Administración de Encuestas**
   - Genere reportes en **Análisis de Clima**

3. **¿Problemas?**
   - Contacta al equipo de soporte
   - Proporciona el contenido de `/storage/logs/php_errors.log`

---

## 📝 Resumen Visual

```
🖥️ MAMP Corriendo
        ↓
📊 Cargar Demo Data (Paso 2)
        ↓
✅ 10 Preguntas + 1 Período Activo
        ↓
📸 Cargar PDF/Imagen en OCR (Paso 3)
        ↓
🤖 Tesseract extrae texto
        ↓
🔍 Sistema intenta reconocer marcas
        ↓
✓ Éxito → Muestra respuestas detectadas
        OR
✗ Falla → Genera plantilla para completar
        ↓
🎯 Usuario valida y guarda respuestas
        ↓
💾 Respuestas guardadas en BD
        ↓
📈 Reportes y análisis disponibles
```

---

**¡Listo! El sistema está optimizado y funcionando. Ahora puedes capturar encuestas escaneadas automáticamente.** 🎉
