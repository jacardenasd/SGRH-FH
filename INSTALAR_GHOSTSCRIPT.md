# 🔧 Solución: Error de Ghostscript - No se pueden procesar PDFs

## ❌ Error Identificado

```
FailedToExecuteCommand `"gswin64c.exe" ...
(El sistema no puede encontrar el archivo especificado.)
```

**Causa:** Imagick está instalado PERO falta **Ghostscript**, que es necesario para convertir PDFs a imágenes.

---

## ✅ Solución: Instalar Ghostscript

### **Opción 1: Instalación Rápida (Recomendada)**

1. **Descarga Ghostscript:**
   - Ve a: https://ghostscript.com/releases/gsdnld.html
   - Descarga la versión más reciente para Windows (64-bit)
   - Archivo: `gs10.02.1-win64.exe` o similar

2. **Instala Ghostscript:**
   - Ejecuta el instalador descargado
   - **IMPORTANTE:** Instala en la ruta por defecto:
     ```
     C:\Program Files\gs\gs10.02.1\bin\
     ```
   - Completa la instalación

3. **Reinicia MAMP:**
   - Detén los servidores de MAMP
   - Cierra MAMP completamente
   - Vuelve a abrir MAMP
   - Inicia los servidores

4. **Verifica que funciona:**
   - Abre PowerShell
   - Ejecuta: 
     ```powershell
     where gswin64c
     ```
   - Debería mostrar: `C:\Program Files\gs\gs10.02.1\bin\gswin64c.exe`

---

### **Opción 2: Convertir PDF a Imagen Manualmente (Sin Ghostscript)**

Si no quieres instalar Ghostscript, convierte tu PDF a imagen primero:

**Método A (Online - Más rápido):**
1. Ve a: https://convertio.co/es/pdf-png/
2. Sube tu PDF (`3_Parte3.pdf`)
3. Descarga la imagen PNG
4. Usa esa imagen en el sistema OCR

**Método B (Windows - Offline):**
1. Abre el PDF con Edge o Chrome
2. Presiona `Ctrl + P` (Imprimir)
3. Selecciona "Guardar como PDF"
4. Imprime sólo página 3
5. Guarda como `3_Parte3_page.pdf`
6. Abre en Paint/Photoshop → Guarda como PNG

**Método C (Adobe Acrobat):**
1. Abre PDF en Adobe Acrobat
2. Archivo → Exportar → Imagen → PNG
3. Selecciona calidad: 300 DPI
4. Guarda la imagen

---

## 📊 Comparación de Opciones

| Método | Ventaja | Desventaja |
|--------|---------|------------|
| **Instalar Ghostscript** | ✅ Procesa PDFs automáticamente<br>✅ Funciona para siempre | Requiere instalación (5 min) |
| **Convertir Online** | ✅ Rápido<br>✅ Sin instalación | ❌ Necesita internet<br>❌ Manual cada vez |
| **Convertir Offline** | ✅ Sin internet | ❌ Manual cada vez<br>❌ Más pasos |

---

## 🎯 Recomendación

**Si tienes muchos PDFs → Instala Ghostscript** (Opción 1)

**Si es un PDF ocasional → Convierte manualmente** (Opción 2)

---

## ✨ Mejoras Implementadas en el Código

El sistema ahora:
- ✅ Verifica si Ghostscript está instalado
- ✅ Proporciona mensaje claro con solución
- ✅ Lista las rutas donde busca Ghostscript
- ✅ Sugiere alternativas si no está disponible

---

## 🔍 Verificar Estado del Sistema

Después de instalar Ghostscript, verifica:

```powershell
# En PowerShell
where gswin64c
```

**Si aparece la ruta:**
✅ Ghostscript instalado correctamente

**Si dice "no se encontró":**
❌ Reinstala o agrega a PATH manualmente

---

## 📝 Rutas que el Sistema Revisa

El código busca Ghostscript en:
```
C:\Program Files\gs\gs10.02.1\bin\gswin64c.exe
C:\Program Files\gs\gs10.02.0\bin\gswin64c.exe
C:\Program Files\gs\gs10.01.2\bin\gswin64c.exe
C:\Program Files\gs\gs9.56.1\bin\gswin64c.exe
C:\Program Files (x86)\gs\gs10.02.1\bin\gswin32c.exe
+ PATH del sistema
```

---

## 🚀 Después de Instalar Ghostscript

1. Reinicia MAMP completamente
2. Ve a: http://localhost:8888/sgrh/public/clima_captura_ia.php
3. Carga tu PDF (`3_Parte3.pdf`)
4. ✅ Debería funcionar automáticamente

---

## ❓ Preguntas Frecuentes

**P: ¿Por qué necesito Ghostscript?**
R: Imagick (la librería PHP) necesita Ghostscript para interpretar archivos PDF y convertirlos a imágenes que Tesseract pueda leer.

**P: ¿No bastaba con Tesseract?**
R: Tesseract lee IMÁGENES, no PDFs. Necesitas:
- **Ghostscript** → Convierte PDF a imagen
- **Imagick** → Interfaz entre PHP y Ghostscript
- **Tesseract** → Lee texto de la imagen

**P: ¿Puedo usar JPG en lugar de PDF?**
R: ¡Sí! Si cargas una imagen directamente (PNG/JPG), NO necesitas Ghostscript. El sistema la procesa directamente.

---

## 💡 Tip: Evitar PDFs en el Futuro

Para evitar este problema:
1. **Escanea directamente a PNG/JPG** (no PDF)
2. O convierta sus PDFs a imágenes antes de subirlos
3. Así no depende de Ghostscript

---

## 📞 Enlaces Útiles

- **Ghostscript:** https://ghostscript.com/releases/gsdnld.html
- **Convertidor PDF→PNG:** https://convertio.co/es/pdf-png/
- **Sistema OCR:** http://localhost:8888/sgrh/public/clima_captura_ia.php

---

**¿Listo? Instala Ghostscript y vuelve a intentar!** 🚀
