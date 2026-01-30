# 🔒 Guía de Captura Anónima - Encuestas en Papel

**Nuevo**: Ahora puedes capturar encuestas de forma **completamente anónima**

---

## 📍 Ubicación

**URL**: `http://localhost/sgrh/public/clima_captura_respuestas.php`  
**Acceso**: Coordinadores RH, Admin Clima  
**Permisos**: `clima.captura`, `clima.admin`, `organizacion.admin`

---

## 🎯 Dos Modos de Captura

### Modo 1️⃣ : Identificada (👤 Por Empleado)

Para encuestas con **nombre y número de empleado identificable**

**Flujo**:
1. Selecciona **Período**
2. Selecciona **Tipo**: 👤 Identificada
3. Selecciona **Empleado** (desplegable con nombres)
4. Sistema verifica que sea elegible
5. Ingresa respuestas 1-5
6. Guarda con `empleado_id` identificado

**Cuándo usar**:
- Encuestas en línea (clima_contestar.php)
- Seguimiento individual con nombres
- Análisis por persona específica

### Modo 2️⃣ : Anónima (🔒 Sin Empleado)

Para encuestas en **papel confid enciales sin nombres**

**Flujo**:
1. Selecciona **Período**
2. Selecciona **Tipo**: 🔒 Anónima
3. Selecciona **Unidad/Área** (sin nombres de personas)
4. Sistema NO verifica empleado (anónimo)
5. Ingresa respuestas 1-5
6. Guarda con `empleado_id = 0` (anónimo)

**Cuándo usar**:
- Encuestas en papel confidencial
- Garantizar anonimato total
- No necesitas saber quién contestó
- Análisis por área/departamento

---

## 🔐 Cómo Funciona la Confidencialidad

### En la Base de Datos

**Captura Identificada**:
```sql
empleado_id: 1245
periodo_id: 5
unidad_id: 12
respuestas...
-- El sistema SABE quién contestó
```

**Captura Anónima**:
```sql
empleado_id: 0          ← CERO = Anónimo
periodo_id: 5
unidad_id: 12
respuestas...
-- El sistema NO SABE quién contestó
-- Solo sabe el área donde se respondió
```

### En el Papel

**Encuesta Impresa**:
```
┌─────────────────────────────┐
│ EMPRESA: ________________   │
│ UNIDAD: _________________   │
│ DEPARTAMENTO: ___________   │
└─────────────────────────────┘
╳ NO hay campo de NOMBRE
╳ NO hay campo de #EMPLEADO
✓ Solo datos organizacionales (área)
```

**Quién sabe qué**:
- 👨‍💼 Coordinador RH: "Esta encuesta es del Área de Ventas" (por el papel)
- 💾 Base de Datos: "Hay 5 respuestas anónimas de Área Ventas" (empleado_id=0)
- 👤 Persona: Nadie sabe quién la completó

---

## 📋 Paso a Paso: Captura Anónima

### 1. Acceder a la Interfaz

1. Abre navegador
2. Ve a: `http://localhost/sgrh/public/clima_captura_respuestas.php`
3. Verás 3 selectores en la parte superior

### 2. Seleccionar Período

```
┌─ Seleccionar Período ─┐
│ [▼ 2026] ◄────────────│ Desplegable
└──────────────────────┘
```

- Haz clic en el desplegable
- Selecciona: "Año 2026" (o el período actual)
- Se actualizan automáticamente los demás selectores

### 3. Cambiar a Modo Anónimo

```
┌───── Captura ────┐
│ [▼ 👤 Identificada] ◄─ Haz clic aquí
└──────────────────┘
```

En el desplegable **"Captura"**:
- Si ves: **👤 Identificada** → No es anónimo
- Haz clic y cambia a: **🔒 Anónima**

```
Opciones:
  👤 Identificada (por empleado)
  🔒 Anónima (por unidad)  ◄─ SELECCIONA ESTO
```

### 4. Seleccionar Unidad

Cuando selecciones **"🔒 Anónima"**, el tercer selector cambia:

```
ANTES: [▼ Seleccione empleado]
DESPUÉS: [▼ Seleccione unidad]
```

Haz clic y verás la lista de unidades:
```
-- Seleccione unidad --
Área de Ventas
Área de Operaciones
Área de RH
Finanzas
Tecnología
```

- Selecciona la unidad donde se respondió la encuesta
- Ejemplo: "Área de Ventas"

### 5. Llenar Formulario

Cuando selecciones periodo, tipo (anónima) y unidad, aparecerá el formulario:

```
┌─────────────────────────────────┐
│ 🔒 Captura Anónima              │
│ Área de Ventas                  │
│ Unidad: Área de Ventas          │
│ Período: Año 2026               │
│                                 │
│ ⚠️ Estas respuestas serán       │
│ completamente anónimas          │
└─────────────────────────────────┘
```

**Ingresa respuestas Likert** (1-5):

Para cada pregunta verás:
```
1. [La gerencia me reconoce por mi trabajo]
   [▼ Seleccionar respuesta]
   
   Options:
   - 1 - Totalmente en desacuerdo
   - 2 - En desacuerdo
   - 3 - Neutral
   - 4 - De acuerdo
   - 5 - Totalmente de acuerdo
```

**Ingresa respuestas abiertas** (comentarios):

```
¿Qué cambios sugiere para mejorar el clima?
[________________]
[________________]
[Máximo 500 caracteres]
```

### 6. Guardar Respuestas

Después de llenar TODO:

```
[✓ Guardar Respuestas] [⊗ Cancelar]
```

Haz clic en **"✓ Guardar Respuestas"**

**Confirmación**:
```
✓ Respuestas guardadas correctamente (48 preguntas registradas - Captura anónima)
```

---

## 🔄 Editar Captura Anónima

**Para modificar respuestas**:

1. Selecciona los mismos: Período → Anónima → Unidad
2. Aparecerá el mismo formulario **con las respuestas previas**
3. Modifica lo necesario
4. Haz clic **"Guardar Respuestas"** nuevamente
5. Se actualiza en BD

---

## 📊 Ejemplo Práctico

### Scenario: Encuesta en Papel - Área Ventas

```
RECIBIMOS:
  5 encuestas de papel completadas
  Todas del Área de Ventas
  Sin nombres (confidencial)

PROCESO:
1. Acceso: clima_captura_respuestas.php
2. Período: 2026
3. Tipo: 🔒 Anónima
4. Unidad: Área de Ventas
5. Captura #1: Ingresa respuestas de encuesta 1
   └─ Guardar → "✓ Captura anónima 1 guardada"
6. Captura #2: Ingresa respuestas de encuesta 2
   └─ Guardar → "✓ Captura anónima 2 guardada"
7. ... (repite para encuestas 3, 4, 5)

RESULTADO EN BD:
  Período 2026, Área Ventas:
  - 5 encuestas anónimas (empleado_id = 0)
  - 48 respuestas Likert × 5 = 240 respuestas
  - 5 conjuntos de comentarios abiertos
  
ANÁLISIS:
  "El Área de Ventas tiene promedio 3.8 en Liderazgo"
  (Sin saber quién específicamente contestó)
```

---

## ✅ Validaciones

### Modo Anónimo Requiere:

- [x] Período válido
- [x] Unidad válida (seleccionada)
- [x] NO requiere empleado elegible
- [x] Todas las preguntas Likert 1-5
- [x] Preguntas abiertas máximo 500 caracteres

### Modo Anónimo NO Hace:

- [x] NO verifica clima_elegibles (permitido anónimo)
- [x] NO requiere nombre/empleado
- [x] NO guarda identificación personal

---

## 🎯 Diferencia Identificada vs Anónima

| Aspecto | Identificada | Anónima |
|---------|--------------|---------|
| **Selecciona** | Empleado por nombre | Unidad/Área |
| **DB: empleado_id** | ID real (1234) | 0 (cero) |
| **Verifica elegibilidad** | Sí | No |
| **Rastreable** | Sí (por persona) | No |
| **Para usar con** | Encuesta en línea | Encuesta en papel |
| **Confidencialidad** | Relativa | Total |
| **Análisis** | Individual + Área | Solo por Área |

---

## 💡 Tips

1. **Organiza por Unidad**: Captura todas las encuestas de una unidad juntas
2. **Usa la unidad del papel**: Mira la encuesta para ver qué unidad escribió
3. **Batch entry**: Puedes capturar varias del mismo día juntas
4. **Revisión**: Antes de guardar, verifica que todos los campos estén llenos
5. **Cierre de período**: No captures después de que se cierren resultados

---

## ⚠️ Errores Comunes

### ❌ "Empleado inválido" en modo anónimo

**Causa**: Sistema no requiere empleado en anónimo  
**Solución**: Asegúrate de haber seleccionado "🔒 Anónima" (no "👤 Identificada")

### ❌ "Unidad inválida"

**Causa**: No seleccionaste unidad  
**Solución**: En modo anónimo, debe haber unidad. Selecciona: [▼ Unidad]

### ❌ Formulario no aparece

**Causa**: No completaste los 3 selectores  
**Solución**:
1. Selecciona Período (obligatorio)
2. Selecciona Tipo (👤 o 🔒)
3. Selecciona empleado/unidad según tipo

### ❌ Se guardó pero dice "0 preguntas"

**Causa**: Formulario estaba vacío  
**Solución**: Asegúrate de llenar al menos 1 respuesta Likert antes de guardar

---

## 🔒 Preguntas de Seguridad

### ¿Quién puede ver que fue anónima?

- **Coordinador RH**: Sabe que el papel viene del Área X
- **Admin Clima**: Ve en DB que empleado_id=0 (anónimo)
- **Otros empleados**: No ven nada (no tienen acceso)

### ¿Se puede saber quién contestó si capturamos anónima?

**No**, porque:
- El papel se entrega antes de completar
- Una vez capturada, no hay vínculo persona-respuesta
- empleado_id=0 no identifica

### ¿Hay auditoría de cambios?

**Sí**, en `fecha_respuesta`:
- Se registra cuándo se capturó cada respuesta
- Pero no quién la capturó (RH hace todo)
- La auditoría es de datos, no de identidad

---

## 📞 Soporte

**Pregunta**: No aparece mi unidad en la lista  
**Respuesta**: Verifica que hay empleados elegibles de esa unidad para el período

**Pregunta**: ¿Puedo capturar mitad identificada, mitad anónima?  
**Respuesta**: Sí, cambia el tipo según sea necesario. Cada captura se guarda por separado.

**Pregunta**: ¿Las respuestas anónimas se ven en reportes?  
**Respuesta**: Sí, en reportes agregados por área. No se distinguen identificadas vs anónimas.

---

**Versión**: 2.1  
**Fecha**: 21 de enero de 2026  
**Estado**: ✅ Listo para usar
