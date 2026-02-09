# 📚 ÍNDICE - GENERADOR DE DATOS DEMO CLIMA LABORAL

Documentación completa de todas las herramientas para generar datos de demostración realistas.

---

## 🚀 INICIO RÁPIDO

**Para usuarios que solo quieren generar datos:**

👉 **[LEER ESTO PRIMERO: GENERAR_DEMO_CLIMA_README.md](GENERAR_DEMO_CLIMA_README.md)**

1. Abre: `http://localhost/sgrh/public/clima_generar_demo.php`
2. Haz clic en "✨ Generar Demo"
3. Ve a: `http://localhost/sgrh/public/clima_resultados_mi_unidad.php`
4. ¡Listo! Verás las gráficas.

---

## 📁 ARCHIVOS DEL GENERADOR

### 1. **GENERAR_DEMO_CLIMA_README.md** ⭐
**Archivo principal - COMIENZA AQUÍ**

- Guía paso a paso
- 4 formas diferentes de generar datos
- Solución de problemas
- Personalización

**Leer si:** Quieres instrucciones claras y rápidas

---

### 2. **generar_demo_clima.sql**
**Script SQL puro**

- Genera elegibles de 0-200 empleados
- Crea 48 respuestas por empleado
- Distribución realista (20-50-30)
- ~7,200+ registros

**Usar si:**
- Quieres máximo control
- Prefieres ejecutar directo en MySQL
- Necesitas scripts automáticos

**Ejecución:**
```bash
mysql -u root sgrh < generar_demo_clima.sql
```

---

### 3. **clima_generar_demo.php** 
**Interfaz web - MÁS FÁCIL**

- Opción visual en navegador
- Botones amigables
- Detecta errores automáticamente
- Feedback inmediato

**URL:**
```
http://localhost/sgrh/public/clima_generar_demo.php
```

**Usar si:**
- No quieres abrir terminal
- Prefieres interfaz gráfica
- Necesitas verificar errores visualmente

---

### 4. **ejecutar_demo_clima.bat**
**Script Windows batch**

- Ejecutable desde cmd.exe
- Sin instalación adicional
- Ideal para automatización

**Usar si:**
- Solo usas Windows
- Quieres automatización simple
- Prefieres doble-click

**Uso:**
```bash
ejecutar_demo_clima.bat generate
```

---

### 5. **ejecutar_demo_clima.ps1**
**Script PowerShell moderno**

- Interfaz coloreada
- Validación completa
- Parámetros configurables
- Salida profesional

**Usar si:**
- Usas PowerShell
- Quieres automatización avanzada
- Necesitas control programático

**Uso:**
```powershell
.\ejecutar_demo_clima.ps1 -Action generate
```

---

## 📖 DOCUMENTACIÓN DETALLADA

### **GENERAR_DEMO_CLIMA.md**
Documentación técnica completa

**Temas cubiertos:**
- Datos generados
- Distribución realista
- Personalización avanzada
- Verificación SQL

**Leer si:** Necesitas entender qué hace exactamente

---

### **EJEMPLOS_CONSULTAS_CLIMA.sql**
Colección de 40+ consultas SQL

**Categorías:**
- Resumen general
- Promedios por superdimensión
- Resultados por unidad
- Análisis de reactivos
- Participación
- Reporte ejecutivo

**Usar si:** Quieres analizar los datos generados

---

## 🎯 FLUJO DE TRABAJO RECOMENDADO

```
┌─────────────────────────────────┐
│ 1. LEER README PRINCIPAL        │ ← GENERAR_DEMO_CLIMA_README.md
│    (5 minutos)                  │
└──────────────┬──────────────────┘
               │
┌──────────────▼──────────────────┐
│ 2. ELEGIR MÉTODO                │
│    ✨ Recomendado: WEB (PHP)    │ ← clima_generar_demo.php
│    📊 Alternativo: SQL directo  │ ← generar_demo_clima.sql
│    🖥️ Windows batch             │ ← ejecutar_demo_clima.bat
└──────────────┬──────────────────┘
               │
┌──────────────▼──────────────────┐
│ 3. GENERAR DATOS                │
│    Ejecutar el método elegido   │
│    (5-30 segundos)              │
└──────────────┬──────────────────┘
               │
┌──────────────▼──────────────────┐
│ 4. VERIFICAR RESULTADOS         │
│    /clima_resultados_*.php      │
│    O ejecutar queries SQL       │ ← EJEMPLOS_CONSULTAS_CLIMA.sql
└──────────────┬──────────────────┘
               │
┌──────────────▼──────────────────┐
│ 5. LISTO ✅                      │
│    Datos demo funcionando       │
└─────────────────────────────────┘
```

---

## 🔍 ¿CUÁL USAR?

### Soy principiante / No tengo experiencia
→ **clima_generar_demo.php** (interfaz web)

### Tengo acceso a MySQL
→ **generar_demo_clima.sql** (script puro)

### Uso Windows sin terminal
→ **ejecutar_demo_clima.bat** (doble-click)

### Tengo experiencia con PowerShell
→ **ejecutar_demo_clima.ps1** (moderno)

### Necesito automatizar
→ **generar_demo_clima.sql** (en cron jobs)

---

## ✅ CHECKLIST

### Antes de generar:
- [ ] Estoy logueado en SGRH
- [ ] He seleccionado una empresa
- [ ] Existen reactivos configurados en `clima_dimensiones.php`
- [ ] Existe al menos un período activo en `clima_periodos.php`

### Al generar:
- [ ] Ejecuto el método elegido
- [ ] Espero a que termine
- [ ] Veo el mensaje de éxito

### Después de generar:
- [ ] Visito `/sgrh/public/clima_resultados_mi_unidad.php`
- [ ] Veo las gráficas con datos
- [ ] Los valores están entre 50-60% (realista)
- [ ] Los colores son verdes/naranjas (50-69%)

---

## 🆘 PROBLEMAS COMUNES

| Problema | Solución | Documentación |
|----------|----------|---------------|
| No veo gráficas | Ejecutar "Limpiar" + "Generar" | README línea 150 |
| Error de conexión | Verificar credenciales MySQL | README línea 160 |
| No hay reactivos | Configurar en clima_dimensiones.php | README línea 165 |
| Valores 0% | Datos con escala antigua | README línea 175 |
| "No hay empresa" | Seleccionar empresa en menú | README línea 180 |

---

## 📊 DATOS GENERADOS

```
Distribución:    20% desacuerdo | 50% parcial | 30% acuerdo
Escala interna:  1              | 2           | 3
Conversión:      0%             | 50%         | 100%
Resultado final: 50-60% (realista y atractivo visualmente)
```

---

## 📞 MÁS INFORMACIÓN

### Documentos Relacionados (en `/mds/`)
- `INDICE_CLIMA_LABORAL.md` - Sistema completo de clima
- `SUPERDIMENSIONES_CLIMA.md` - Estructura de dimensiones
- `RESULTADOS_CLIMA_EJEMPLO.md` - Ejemplos de resultados
- `CLIMA_README.md` - Descripción del módulo

### Archivos PHP
- `/public/clima.php` - Menú principal
- `/public/clima_resultados_mi_unidad.php` - Ver resultados
- `/public/clima_resultados.php` - Vista ejecutivo
- `/public/clima_dimensiones.php` - Configurar preguntas

---

## 🎓 ESTRUCTURA DE DATOS

### Las 4 Superdimensiones

**1. Relación con el Jefe Inmediato** (2 dimensiones)
- Liderazgo inmediato
- Reconocimiento

**2. Relación con los Compañeros** (3 dimensiones)
- Colaboración entre áreas
- Comunicación interna
- Equidad y respeto

**3. Relación con la Empresa** (4 dimensiones)
- Propósito y alineación
- Estructura y coordinación
- Recursos y herramientas
- Bienestar y balance

**4. Relación con el Trabajo** (3 dimensiones)
- Claridad de rol
- Desarrollo y aprendizaje
- Procesos y eficiencia

**Total:** 12 Dimensiones × 4 Reactivos = **48 preguntas**

---

## 🎨 ESCALA DE EVALUACIÓN

| Rango | Código | Color | Interpretación |
|-------|--------|-------|-----------------|
| 0-29% | 1 | 🔴 Rojo | Crítico |
| 30-49% | 2 | 🟠 Naranja | Alerta |
| 50-69% | 3 | 🟢 Verde | Regular |
| 70-100% | 4 | 🔵 Azul | Bueno |

**Con datos demo esperas:** 🟢 Verde (50-60%)

---

## 📈 RESULTADOS ESPERADOS

### Gráfica típica después de generar:

```
Promedio General: 55%
Respondentes: ~150
Escala: 0-100%

┌─────────────────────────────────┐
│ Superdimensiones                │
├─────────────────────────────────┤
│ Jefe Inmediato:      ██████░░░░ 58% │
│ Compañeros:          █████░░░░░ 55% │
│ Empresa:             ███████░░░ 59% │
│ Trabajo:             ██████░░░░ 54% │
└─────────────────────────────────┘
```

---

## 🚀 PRÓXIMOS PASOS

Después de generar datos:

1. **Crear Planes de Acción**
   - `/sgrh/public/clima_planes.php`
   - Por dimensión con baja evaluación

2. **Analizar Participación**
   - `/sgrh/public/clima_participacion.php`
   - Verifica tasa de respuesta

3. **Comparar Unidades**
   - `/sgrh/public/clima_resultados.php`
   - Identifica áreas críticas

4. **Generar Reportes**
   - Usa las consultas en `EJEMPLOS_CONSULTAS_CLIMA.sql`
   - Exporta a Excel

---

## 📋 VERSIONES

| Versión | Fecha | Cambios |
|---------|-------|---------|
| 2.0 | Feb 2026 | Suite completa de herramientas |
| 1.0 | Ene 2026 | Script SQL inicial |

---

## 📞 SOPORTE

Si necesitas ayuda:

1. **Revisa README principal** → GENERAR_DEMO_CLIMA_README.md
2. **Busca tu error** → Sección "Solucionar Problemas"
3. **Prueba alternativa** → Usa interfaz web (clima_generar_demo.php)
4. **Verifica requisitos** → Reactivos y período configurados
5. **Contacta administrador** → Con error.log del servidor

---

**Creado:** Febrero 2026  
**Sistema:** SGRH v2.0+  
**Módulo:** Clima Laboral  
**Autor:** Sistema SGRH
