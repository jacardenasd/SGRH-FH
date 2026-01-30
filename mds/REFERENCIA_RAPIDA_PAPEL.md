# Referencia Rápida: Encuestas en Papel

## 📍 Accesos Rápidos

### Desde Clima Laboral → Menú Principal:
1. **🖨️ Encuesta Imprimible** → `clima_encuesta_impresion.php`
2. **📋 Captura en Papel** → `clima_captura_respuestas.php`

---

## 🖨️ OPCIÓN 1: IMPRIMIR ENCUESTA

### En 3 pasos:
1. **Período**: Selecciona el período
2. **Botón**: Haz clic "🖨️ Imprimir encuesta"
3. **Imprime**: Ctrl+P y descarga PDF

### Qué incluye:
✓ Instrucciones de llenado
✓ Todas las preguntas (Likert 1-5)
✓ Preguntas abiertas con espacio para escribir
✓ Organizadas por superdimensión

### Distribución:
- Imprime 1 copia por empleado elegible
- Recopila en 1-2 semanas
- Almacena con código de referencia (ej: nombre del empleado)

---

## 📋 OPCIÓN 2: CAPTURAR RESPUESTAS

### Antes de empezar:
- Ten las encuestas en papel a mano
- Reúne todas las respuestas de un período
- Valida que los empleados estén en la lista de elegibles

### Proceso (por empleado):
```
1. Selecciona PERÍODO
2. Selecciona EMPLEADO
3. Para cada pregunta Likert:
   → Lee la respuesta en papel (1-5)
   → Selecciona en el dropdown
4. Para cada pregunta abierta:
   → Copia exactamente lo que escribió
   → Pegalo en el textarea
5. Haz clic GUARDAR RESPUESTAS
6. Repite con siguiente empleado
```

### Tips de Captura:
| Tarea | Tiempo | Tips |
|-------|--------|------|
| Una encuesta | 3-5 min | Lee cuidadosamente, evita errores |
| 20 encuestas | 1 hora | Agrupa por área para cambiar rápido |
| 100 encuestas | 5 horas | Divide entre 2-3 coordinadores |

---

## 📊 Después de Capturar

### Verificación:
```
✓ Participación >= 90% ?
  ↓
  Sí → Administrador publica resultados
  No → Continúa capturando
```

### Disponible para ver:
- **Coordinadores RH**: `Mis Resultados` (por su área)
- **Administrador**: `Resultados` (todos los datos)
- **Empleados**: `Mis Resultados` (solo si publicado)

---

## ⚠️ Validaciones Automáticas

### Errores que previene el sistema:

| Error | Mensaje | Solución |
|-------|---------|----------|
| Empleado no elegible | "No es elegible para este período" | Verifica lista de elegibles |
| Respuesta vacía (Likert) | Campo requerido | Selecciona valor 1-5 |
| Pregunta abierta obligatoria vacía | Error al guardar | Escribe algo o marca N/A |
| Empleado no encontrado | Dropdown sin opciones | Verifica período y elegibles |

---

## 🎯 Matriz de Decisión

### ¿Cuál opción usar?

| Situación | Acción |
|-----------|--------|
| Quiero imprimir para distribuir | 🖨️ Encuesta Imprimible |
| Tengo encuestas en papel para capturar | 📋 Captura en Papel |
| Necesito corregir una respuesta | 📋 Captura (selecciona empleado y edita) |
| Quiero ver resultados capturados | Panel: Resultados |
| Quiero exportar datos en papel | Panel: Resultados (usar Ctrl+P) |

---

## 🚨 Checklist de Implementación

- [ ] Administrador configuró dimensiones (12)
- [ ] Administrador creó período
- [ ] Administrador generó lista de elegibles
- [ ] Coordinador imprimió encuestas (clima_encuesta_impresion.php)
- [ ] Personal completó encuestas en papel
- [ ] Coordinador capturó respuestas (clima_captura_respuestas.php)
- [ ] Participación >= 90%
- [ ] Administrador publicó resultados
- [ ] Empleados ven resultados en "Mis Resultados"

---

## 📱 Pantalla de Captura (Interfaz)

```
┌───────────────────────────────────────────────────────┐
│ Captura de Respuestas en Papel                         │
├───────────────────────────────────────────────────────┤
│                                                       │
│ Período: [Año 2026 (2026-01-21 a 2026-12-31)] ▼      │
│                                                       │
│ Empleado: [Juan Pérez - Dirección de Operaciones] ▼  │
│                                                       │
├───────────────────────────────────────────────────────┤
│ Respuestas de: Juan Pérez                             │
│ Área: Dirección de Operaciones | Año: 2026            │
├───────────────────────────────────────────────────────┤
│                                                       │
│ 📦 Relación con el Jefe Inmediato                     │
│                                                       │
│ • Liderazgo inmediato                                 │
│   1. Pregunta de liderazgo                            │
│      [Seleccionar respuesta] ▼                        │
│                                                       │
│ • Reconocimiento                                      │
│   2. Pregunta de reconocimiento                       │
│      [Seleccionar respuesta] ▼                        │
│                                                       │
│ ... (más superdimensiones)                            │
│                                                       │
│ ★ COMENTARIOS Y SUGERENCIAS                           │
│   Pregunta abierta 1                                  │
│   [Escribe aquí...]                                   │
│                                                       │
│ [✓ Guardar Respuestas] [❌ Cancelar]                 │
│                                                       │
└───────────────────────────────────────────────────────┘
```

---

## 📞 Contactos Útiles

- **Problema técnico**: Administrador del sistema
- **Pregunta sobre proceso**: Coordinador de RH
- **Acceso/Permisos**: Administrador de SGRH
- **Duda sobre encuesta**: Recurso Humano

---

## Atajos de Teclado

| Tecla | Acción |
|-------|--------|
| `Ctrl+P` | Imprimir (en encuesta) |
| `Tab` | Ir al siguiente campo |
| `Shift+Tab` | Ir al campo anterior |
| `Enter` | Enviar formulario (si activo) |

---

**Versión**: 1.0 | Última actualización: 21 de enero de 2026
