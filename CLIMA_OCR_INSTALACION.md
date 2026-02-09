# 🤖 Guía de Instalación - Captura Automática con IA (Tesseract OCR)

## 📋 Descripción

Sistema de captura automática de encuestas de clima laboral escaneadas usando Tesseract OCR. Permite digitalizar encuestas en papel sin captura manual.

---

## 🎯 Características

- ✅ **Procesamiento automático** de PDFs e imágenes escaneadas
- ✅ **Detección automática** de respuestas marcadas
- ✅ **Validación manual** antes de guardar
- ✅ **Soporte multiidioma** (Español configurado)
- ✅ **Identificación de empleados** si viene en el documento
- ✅ **Captura anónima** como alternativa
- ✅ **Extracción de respuestas abiertas**

---

## 📦 Requisitos

### Windows (MAMP)

1. **Tesseract OCR 5.x**
   - Obligatorio para procesamiento OCR
   - Descarga: https://github.com/UB-Mannheim/tesseract/wiki

2. **PHP 7.4+** (Ya instalado con MAMP)

3. **Extensiones PHP Opcionales** (mejoran funcionalidad):
   - `php_gd2` - Para preprocesamiento de imágenes ✅ (Generalmente incluido)
   - `php_imagick` - Para convertir PDFs a imágenes (Opcional)

---

## 🚀 Instalación Paso a Paso

### Paso 1: Instalar Tesseract OCR

#### Para Windows:

1. **Descargar instalador:**
   ```
   https://github.com/UB-Mannheim/tesseract/wiki
   ```
   
   Buscar: `tesseract-ocr-w64-setup-v5.3.x.xxxxxxxx.exe`

2. **Ejecutar instalador:**
   - Doble clic en el archivo descargado
   - Aceptar términos y condiciones

3. **Configuración importante durante instalación:**
   - ✅ Marcar: "Additional language data (download)"
   - ✅ Seleccionar idioma: **Spanish** (spa)
   - ✅ Ruta de instalación: `C:\Program Files\Tesseract-OCR\` (predeterminada)

4. **Completar instalación:**
   - Click en "Install"
   - Esperar a que termine
   - Click en "Finish"

### Paso 2: Verificar Instalación

#### Método 1: PowerShell

Abrir PowerShell y ejecutar:

```powershell tesseract --version ```

**Salida esperada:**
```
tesseract v5.3.x
 leptonica-1.xx.x
  ...
```

#### Método 2: CMD

```cmd "C:\Program Files\Tesseract-OCR\tesseract.exe" --version
```

#### Método 3: Desde el Sistema

1. Ir a: `http://localhost/sgrh/public/clima_captura_ia.php`
2. Debe mostrar: "✓ Instalado y disponible"

### Paso 3: Configurar PHP Imagick (Opcional - Para PDFs)

#### ¿Para qué sirve?

Imagick permite convertir PDFs a imágenes automáticamente. **Sin Imagick, solo puedes procesar imágenes (PNG, JPG, TIFF)**.

#### Instalación en Windows/MAMP:

1. **Verificar versión y tipo de PHP:**
   ```powershell
   php -v
   ```
   
   **Ejemplo de salida:**
   ```
   PHP 8.2.14 (cli) (built: Jan 17 2024 00:47:22) (ZTS Visual C++ 2019 x64)
   ```
   
   **Importante - Identifica estos datos:**
   - **Versión:** `8.2.14` (los primeros 2 números: 8.2)
   - **Thread Safety:** 
     - Si dice `(ZTS ...)` o `(TS ...)` = **Thread Safe**
     - Si dice `(NTS ...)` = **Non-Thread Safe**
   - **Visual C++:** `VC++ 2019` = vs16, `VC++ 2015` = vs15
   - **Arquitectura:** `x64` (64-bit) o `x86` (32-bit)

2. **Descargar DLL de Imagick:**
   - Ir a: https://windows.php.net/downloads/pecl/releases/imagick/
   - **⚠️ IMPORTANTE para PHP 8.2+**: La versión 3.7.0 solo tiene hasta PHP 8.1
   
   **Versiones disponibles en 3.7.0:**
   
   | Versión PHP | Thread Safety | Archivo disponible | Estado |
   |-------------|---------------|-------------------|--------|
   | **8.2.x** | Thread Safe/NTS | ❌ **NO EXISTE** | Buscar versión más reciente |
   | **8.1.x** | Thread Safe | ✅ `php_imagick-3.7.0-8.1-ts-vs16-x64.zip` | Disponible |
   | **8.1.x** | Non-Thread Safe | ✅ `php_imagick-3.7.0-8.1-nts-vs16-x64.zip` | Disponible |
   | **8.0.x** | Thread Safe | ✅ `php_imagick-3.7.0-8.0-ts-vs16-x64.zip` | Disponible |
   | **7.4.x** | Thread Safe | ✅ `php_imagick-3.7.0-7.4-ts-vc15-x64.zip` | Disponible |
   
   > **⚠️ Si tienes PHP 8.2:** Esta versión NO está en 3.7.0. Ver "Nota Importante" abajo.

3. **Instalar:**
   - Extraer el ZIP descargado
   - Copiar **TODOS los archivos DLL** (no solo php_imagick.dll) en: `C:\MAMP\bin\php\php8.2.14\ext\`
   - Editar `php.ini` (ubicación: `C:\MAMP\bin\php\php8.2.14\php.ini`)
   - Buscar la sección de extensiones y agregar:
     ```ini
     extension=imagick
     ```
   - Guardar archivo
   - **Reiniciar Apache** desde el panel de MAMP

4. **Verificar:**
   ```powershell
   php -m | findstr imagick
   ```
   
   **Salida esperada:** `imagick`
   
   Si NO aparece, revisar:
   - Que copiaste TODOS los DLLs (incluyendo dependencias)
   - Que la versión coincida exactamente con tu PHP
   - Que reiniciaste Apache
   
5. **Si no encuentra versión para tu PHP:**
   - Visitar: https://pecl.php.net/package/imagick (versiones más actualizadas)
   - O **continuar sin Imagick** (el sistema funciona igual, solo no procesa PDFs automáticamente)

**Nota:** Si no instalas Imagick, puedes convertir PDFs a imágenes manualmente antes de subirlos.

### 📌 Nota Importante para PHP 8.2+

**Para PHP 8.2.14 Thread Safe:**

Si encontraste el archivo: `php_imagick-3.7.0-8.2-ts-vs16-x64.zip` ✅

¡Perfecto! Ese es el compatible. Procede con la instalación (paso 3 abajo).

**Si NO lo encuentras:**

Buscar en versiones más recientes de Imagick:
- https://pecl.php.net/package/imagick (versión 3.7.0+ con PHP 8.2)
- https://windows.php.net/downloads/pecl/releases/imagick/ (verificar carpetas más recientes)

**Alternativa: Usar SIN Imagick**

No instalar Imagick por ahora y:
- ✅ Escanear siempre en **PNG o JPG** (no PDF)
- ✅ Si tienes PDFs, convertirlos online en 10 segundos:
  - https://pdf2png.com (gratis, sin registro)
  - https://www.ilovepdf.com/pdf_to_jpg
  - https://smallpdf.com/pdf-to-jpg
- ✅ El sistema OCR funciona **exactamente igual** con imágenes
- ✅ Cero complicaciones de compatibilidad

**Mi recomendación:** Usa la **Opción B** por ahora. Es más rápido, más estable, y funcionalmente idéntico.

---

## 🔧 Configuración del Sistema

### Permisos de Usuario

Asegúrate que el usuario tiene permisos para acceder al módulo. En la base de datos:

```sql
-- Dar permiso de captura con IA
INSERT INTO permisos_usuario (usuario_id, permiso)
VALUES (?, 'clima.captura');

-- O dar permiso administrativo completo
INSERT INTO permisos_usuario (usuario_id, permiso)
VALUES (?, 'clima.admin');
```

### Estructura de Directorios

El sistema creará automáticamente:

```
/sgrh/
├── storage/
│   └── temp_ocr/          <- Archivos temporales de OCR
│       ├── ocr_xxxxx.txt
│       └── processed_*.png
```

Asegúrate que el directorio `storage/` tenga permisos de escritura:

```powershell
# En PowerShell (como administrador)
icacls "C:\MAMP\htdocs\sgrh\storage" /grant Everyone:F /T
```

---

## 📝 Uso del Sistema

### 1. Preparar Encuesta en Papel

Usa el módulo existente para generar encuestas imprimibles:

```
http://localhost/sgrh/public/clima_encuesta_impresion.php
```

Imprime y distribuye a empleados.

### 2. Escanear Encuestas Completadas

**Recomendaciones para mejores resultados:**

- ✅ **Resolución:** 300 DPI o superior
- ✅ **Formato:** PNG o JPG (mejor calidad que PDF escaneado)
- ✅ **Orientación:** Vertical, bien alineado
- ✅ **Contraste:** Alto contraste, sin sombras
- ✅ **Limpieza:** Sin manchas, dobleces o arrugas

### 3. Procesar con OCR

1. Ir a: `http://localhost/sgrh/public/clima_captura_ia.php`

2. Seleccionar período

3. Arrastrar/cargar archivo escaneado

4. Click en "Procesar con OCR"

5. **Esperar procesamiento** (5-30 segundos dependiendo del tamaño)

### 4. Validar Resultados

El sistema mostrará:

- ✅ **Respuestas detectadas** con nivel de confianza
- ✅ **Empleado identificado** (si está en el documento)
- ⚠️ **Advertencias** si algo no se pudo detectar

**Importante:** Revisa cada respuesta antes de guardar.

### 5. Guardar

Click en "Guardar Respuestas Validadas"

---

## 🎨 Formato de Encuestas Recomendado

Para mejores resultados de OCR, las encuestas deben tener:

### Estructura Clara:

```
Encuesta de Clima Laboral 2026

Empleado ID: 12345             <- Ayuda a identificar automáticamente
Nombre: Juan Pérez

Instrucciones: Marque con X su respuesta

1. Mi jefe me trata con respeto
   [X] Totalmente de acuerdo
   [ ] Parcialmente de acuerdo  
   [ ] En desacuerdo

2. El ambiente de trabajo es positivo
   [ ] Totalmente de acuerdo
   [X] Parcialmente de acuerdo
   [ ] En desacuerdo
   
...

Comentarios o sugerencias:
_____________________________________________
_____________________________________________
```

### Elementos Clave:

- ✅ Número de pregunta al inicio de cada línea
- ✅ Checkboxes claros `[ ]` o `[X]`
- ✅ ID de empleado visible (opcional, para captura no anónima)
- ✅ Espacio para respuestas abiertas claramente marcado

---

## 🔍 Solución de Problemas

### Tesseract no detectado

**Error:** "Tesseract OCR no está instalado"

**Soluciones:**

1. Verificar instalación:
   ```powershell
   where tesseract
   ```

2. Si está instalado pero no detectado, crear variable de entorno:
   ```powershell
   setx TESSERACT_PATH "C:\Program Files\Tesseract-OCR\tesseract.exe"
   ```

3. Reiniciar Apache/MAMP

4. Reiniciar navegador

### OCR no detecta respuestas

**Posibles causas:**

- ❌ Imagen de baja calidad
- ❌ Encuesta no sigue el formato estándar
- ❌ Escaneo mal alineado

**Soluciones:**

- ✅ Re-escanear a 300 DPI
- ✅ Mejorar contraste de la imagen
- ✅ Usar encuesta generada desde `clima_encuesta_impresion.php`
- ✅ Validar manualmente y corregir

### PDFs no se procesan

**Error:** "Necesita instalar PHP Imagick"

**Soluciones:**

1. **Opción A:** Instalar Imagick (ver Paso 3 arriba)

2. **Opción B:** Convertir PDF a imagen:
   - Usar herramientas online: pdf2png.com
   - Usar Adobe Acrobat: Exportar a PNG
   - Usar software gratuito: IrfanView, GIMP

3. **Opción C:** Escanear directamente a PNG/JPG

### Bajo nivel de confianza en resultados

**Cuando ver:** Badges rojos/amarillos en confianza

**Acciones:**

1. ✅ **Revisar manualmente** cada respuesta
2. ✅ **Corregir** valores incorrectos antes de guardar
3. ✅ Mejorar calidad de escaneo para futuras encuestas

### Empleado no detectado automáticamente

**Resultado:** "Captura anónima"

**Soluciones:**

1. **Si quieres captura identificada:**
   - Asegurar que el ID de empleado esté en el documento
   - Formato: "Empleado ID: 12345" o "No. Empleado: 12345"
   - Re-procesar

2. **Si quieres captura anónima:**
   - Continuar normalmente
   - Seleccionar unidad manualmente

---

## 📊 Rendimiento y Limitaciones

### Tiempos de Procesamiento

| Tipo de Archivo | Tamaño | Tiempo Aprox. |
|-----------------|--------|---------------|
| JPG (1 página) | 1-2 MB | 5-10 seg |
| PNG (1 página) | 2-4 MB | 8-15 seg |
| PDF (1 página) | 500 KB - 1 MB | 10-20 seg |
| PDF (3-5 páginas) | 2-5 MB | 30-60 seg |

### Precisión Esperada

| Condición | Precisión OCR | Acción Requerida |
|-----------|---------------|------------------|
| Escaneo óptimo (300 DPI, buen contraste) | 85-95% | Validación ligera |
| Escaneo normal (200 DPI) | 70-85% | Validación cuidadosa |
| Escaneo pobre (<150 DPI, borroso) | <70% | Corrección manual extensa |

### Límites

- **Tamaño máximo de archivo:** 10 MB
- **Formatos soportados:** PDF, PNG, JPG, JPEG, TIFF, TIF
- **Páginas simultáneas:** Mejor 1 encuesta por archivo
- **Idiomas:** Español (spa) - configurable

---

## 🎓 Mejores Prácticas

### Para Administradores:

1. ✅ **Generar encuestas** siempre desde `clima_encuesta_impresion.php`
2. ✅ **Capacitar** al personal en cómo marcar correctamente
3. ✅ **Escanear** con configuración uniforme (misma resolución)
4. ✅ **Validar siempre** antes de guardar
5. ✅ **Backup** de PDFs originales antes de procespr

### Para Mejor OCR:

1. ✅ Escanear en **escala de grises** (no color)
2. ✅ Usar **300 DPI** mínimo
3. ✅ Marcar con **X clara y oscura**
4. ✅ Evitar **marcas fuera de los checkboxes**
5. ✅ Mantener el documento **recto** al escanear

### Flujo Recomendado:

```
1. Generar encuestas → clima_encuesta_impresion.php
2. Imprimir y distribuir
3. Empleados completan en papel
4. Recopilar encuestas
5. Escanear lote (1 archivo por encuesta)
6. Procesar con OCR → clima_captura_ia.php
7. Validar cada resultado
8. Guardar en base de datos
9. Archivar PDFs originales
```

---

## 🆘 Soporte Técnico

### Logs del Sistema

Si hay errores, revisar:

```
C:\MAMP\logs\php_error.log
```

Buscar líneas con: `clima_ocr` o `tesseract`

### Modo Debug

Para más detalles en procesamiento, editar `clima_ocr_processor.php`:

```php
// Al inicio del método procesarArchivo, agregar:
error_log("DEBUG OCR: Procesando archivo: " . $filepath);
error_log("DEBUG OCR: Texto extraído: " . $texto_completo);
```

### Archivos Temporales

Si el sistema se queda sin espacio:

```powershell
# Limpiar archivos temporales
Remove-Item "C:\MAMP\htdocs\sgrh\storage\temp_ocr\*" -Force
```

---

## 📞 Contacto y Ayuda

- **Documentación:** Este archivo (CLIMA_OCR_INSTALACION.md)
- **Sistema base:** README_CLIMA_DEMO.md
- **Módulo Clima:** mds/CLIMA_README.md

---

## ✨ Funcionalidades Futuras

### Versión 2.0 (Planeado):

- [ ] Procesamiento por lotes (múltiples archivos)
- [ ] Vista previa de imagen antes de OCR
- [ ] Editor visual de resultados
- [ ] Exportación de estadísticas de confianza
- [ ] Integración con escáner directo
- [ ] Mejora automática de imagen (pre-procesamiento)
- [ ] Soporte para códigos QR de identificación

---

## 📋 Changelog

### Versión 1.0 (Febrero 2026)

- ✅ Implementación inicial con Tesseract OCR
- ✅ Soporte para PDF e imágenes
- ✅ Detección automática de empleados
- ✅ Validación manual de resultados
- ✅ Captura anónima e identificada
- ✅ Extracción de respuestas abiertas
- ✅ Sistema de confianza por respuesta

---

**Sistema de Captura Automática con IA - Clima Laboral SGRH**  
*Creado: Febrero 2026*  
*Versión: 1.0*  
*Tecnología: Tesseract OCR 5.x + PHP*
