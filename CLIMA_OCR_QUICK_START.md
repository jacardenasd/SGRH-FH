# 🚀 INICIO RÁPIDO - Captura Automática con IA

## ⚡ Empezar en 5 Minutos

### Paso 1: Instalar Tesseract (Solo primera vez)

1. **Descargar:**
   ```
   https://github.com/UB-Mannheim/tesseract/wiki
   ```
   Buscar: `tesseract-ocr-w64-setup-v5.3.x.xxxxxxxx.exe`

2. **Instalar:**
   - Ejecutar instalador
   - ✅ Marcar: "Additional language data"
   - ✅ Seleccionar: **Spanish (spa)**
   - Click "Install"

3. **Verificar:**
   ```powershell
   tesseract --version
   ```

### Paso 2: Probar Sistema

```powershell
# Ejecutar test de diagnóstico
php c:\MAMP\htdocs\sgrh\test_tesseract_ocr.php
```

**Resultado esperado:**
```
✓ Tesseract OCR instalado
✓ Idioma español configurado
✓ OCR funcional (test exitoso)
🎉 ¡SISTEMA LISTO PARA USAR!
```

### Paso 3: Usar el Módulo

1. **Abrir navegador:**
   ```
   http://localhost/sgrh/public/clima_captura_ia.php
   ```

2. **Seleccionar período**

3. **Arrastrar archivo** (PDF o imagen escaneada)

4. **Click: "Procesar con OCR"**

5. **Validar resultados**

6. **Click: "Guardar Respuestas Validadas"**

✅ **¡Listo!** Las respuestas están en la base de datos.

---

## 📋 Archivos Disponibles

| Archivo | Descripción | Acción |
|---------|-------------|--------|
| [clima_captura_ia.php](public/clima_captura_ia.php) | **Interface principal** | Usar para capturar |
| [CLIMA_OCR_INSTALACION.md](CLIMA_OCR_INSTALACION.md) | Guía completa | Leer si hay problemas |
| [CLIMA_OCR_README.md](CLIMA_OCR_README.md) | Documentación extensa | Revisar características |
| [test_tesseract_ocr.php](test_tesseract_ocr.php) | Script de prueba | Ejecutar para diagnosticar |

---

## 🔥 Tips Rápidos

### Para Mejor OCR:

- ✅ Escanear a **300 DPI**
- ✅ Usar **escala de grises** (no color)
- ✅ Marcar con **X clara y oscura**
- ✅ **Alto contraste** (papel blanco, tinta oscura)
- ✅ Sin arrugas ni manchas

### Si Hay Errores:

1. **Tesseract no detectado:**
   - Verificar: `where tesseract`
   - Reinstalar si necesario

2. **Resultados incorrectos:**
   - Mejorar calidad de escaneo
   - Validar y corregir manualmente

3. **PDF no se procesa:**
   - Convertir a PNG manualmente
   - O instalar PHP Imagick

---

## 🎯 Accesos Directos

### Módulo Principal
```
http://localhost/sgrh/public/clima_captura_ia.php
```

### Panel de Clima (nuevo botón agregado)
```
http://localhost/sgrh/public/clima_admin.php
```

### Generar Encuestas para Imprimir
```
http://localhost/sgrh/public/clima_encuesta_impresion.php
```

---

## 📞 ¿Necesitas Ayuda?

1. **Revisar:** [CLIMA_OCR_INSTALACION.md](CLIMA_OCR_INSTALACION.md)
2. **Ejecutar:** `test_tesseract_ocr.php`
3. **Logs:** `C:\MAMP\logs\php_error.log`

---

## ✅ Checklist Rápido

- [ ] Tesseract instalado
- [ ] Idioma español configurado
- [ ] Test ejecutado exitosamente
- [ ] Módulo accesible en navegador
- [ ] Primera encuesta procesada

---

**¡Listo para procesar encuestas automáticamente! 🚀**

*Creado: Febrero 2026 | SGRH v2.0+*
