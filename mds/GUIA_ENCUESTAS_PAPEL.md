# Encuestas en Papel - Guía Completa

## ✨ Nuevas Funcionalidades

Se han agregado dos nuevas herramientas al módulo de Clima Laboral para facilitar la aplicación de encuestas en papel:

### 1. 🖨️ Encuesta Imprimible (`clima_encuesta_impresion.php`)
Genera una versión lista para imprimir de la encuesta completa.

### 2. 📋 Captura de Respuestas (`clima_captura_respuestas.php`)
Interfaz simplificada para que los coordinadores de RH registren las respuestas respondidas en papel.

---

## 🖨️ CÓMO USAR: ENCUESTA IMPRIMIBLE

### Paso 1: Acceder
```
Clima Laboral → Encuesta imprimible
```

### Paso 2: Seleccionar Período
- Selecciona el período para el cual deseas imprimir la encuesta
- Se cargarán todas las dimensiones y reactivos activos de ese período

### Paso 3: Imprimir
- Haz clic en el botón **"🖨️ Imprimir encuesta"**
- O usa el atajo: `Ctrl+P` (Windows) / `Cmd+P` (Mac)
- Selecciona:
  - **Destino**: Impresora física o "Guardar como PDF"
  - **Orientación**: Vertical (recomendado)
  - **Márgenes**: Mínimos para aprovechar espacio
  - **Opciones**: Incluir gráficos de fondo (opcional)

### Paso 4: Distribuir
- Imprime copias para cada empleado elegible
- Adjunta bolígrafo para que completen en papel
- Establece un plazo para recopilar respuestas (ej: 1-2 semanas)

---

### 📋 Estructura de la Encuesta Imprimible

```
┌─────────────────────────────────────────┐
│    ENCUESTA DE CLIMA LABORAL            │
│  Confidencial - Tu opinión es valiosa   │
└─────────────────────────────────────────┘

📌 Instrucciones
  • Lee cuidadosamente cada pregunta
  • Marca con ✓ la casilla que representa tu opinión
  • Escala 1-5: (1=Totalmente en desacuerdo, 5=Totalmente de acuerdo)
  • Tus respuestas son confidenciales
  • No incluyas datos personales

┌──────────────────────────────────────────┐
│ 📦 Superdimensión 1: Relación con Jefe   │
├──────────────────────────────────────────┤
│ • Dimensión: Liderazgo inmediato         │
│   1. Pregunta del reactivo 1             │
│   [1] [2] [3] [4] [5]                   │
│   2. Pregunta del reactivo 2             │
│   [1] [2] [3] [4] [5]                   │
│ • Dimensión: Reconocimiento              │
│   3. Pregunta del reactivo 3             │
│   [1] [2] [3] [4] [5]                   │
│   4. Pregunta del reactivo 4             │
│   [1] [2] [3] [4] [5]                   │
└──────────────────────────────────────────┘

... (REPETIDO PARA 4 SUPERDIMENSIONES)

┌──────────────────────────────────────────┐
│ COMENTARIOS Y SUGERENCIAS                │
├──────────────────────────────────────────┤
│ ★ Pregunta abierta 1                     │
│ _________________________________         │
│ _________________________________         │
│ _________________________________         │
│                                          │
│ ★ Pregunta abierta 2                     │
│ _________________________________         │
│ _________________________________         │
│ _________________________________         │
└──────────────────────────────────────────┘

✓ Gracias por tu valiosa participación
```

---

## 📋 CÓMO USAR: CAPTURA DE RESPUESTAS EN PAPEL

### Paso 1: Acceder
```
Clima Laboral → Captura en papel
```

### Paso 2: Seleccionar Período
- El coordinador de RH selecciona el **período** correspondiente
- El sistema filtra automáticamente todos los empleados elegibles

### Paso 3: Seleccionar Empleado
- Busca el empleado cuyas respuestas deseas registrar
- Se muestra el nombre, apellido y área (unidad) del empleado
- El sistema detecta automáticamente si el empleado ya tiene respuestas

### Paso 4: Ingresar Respuestas
La interfaz muestra:

#### **Preguntas Likert (1-5)**
```
1. Pregunta de ejemplo
   ☐ 1 - Totalmente en desacuerdo
   ☐ 2 - En desacuerdo
   ☐ 3 - Neutral
   ☐ 4 - De acuerdo
   ☐ 5 - Totalmente de acuerdo
```

- Para cada pregunta, selecciona el valor (1-5) que corresponde a la respuesta en papel
- Las preguntas están agrupadas por:
  - Superdimensión (📦)
  - Dimensión (•)
  - Número y texto

#### **Preguntas Abiertas**
```
★ Pregunta abierta 1
Escribe aquí (máximo 500 caracteres)
[________________]

★ Pregunta abierta 2 *
Escribe aquí (máximo 500 caracteres)
[________________]
```

- Copia exactamente lo que escribió el empleado
- Las preguntas marcadas con * son obligatorias
- Máximo 500 caracteres por respuesta

### Paso 5: Guardar
- Haz clic en **"✓ Guardar Respuestas"**
- El sistema mostrará:
  - ✓ Confirmación de guardado
  - Cantidad de preguntas registradas
  - Opción de capturar otro empleado o volver

### Paso 6: Continuar con Otros Empleados
- Para capturar respuestas de otro empleado:
  - Selecciona otro período (si es diferente)
  - Selecciona otro empleado
  - Repite desde Paso 4

---

## 🎯 Flujo Recomendado

### Para el Coordinador de RH:

```
SEMANA 1-2: PREPARACIÓN
  1. Administrador configura dimensiones y reactivos
  2. Administrador genera período (ej: 2026)
  3. Administrador genera lista de elegibles
  4. Coordinador imprime encuestas
  5. Coordinador distribuye al personal

SEMANA 2-3: RECOPILACIÓN
  1. Personal completa encuestas en papel
  2. Coordinador recopila y organiza respuestas

SEMANA 4: CAPTURA
  1. Coordinador accede a "Captura en papel"
  2. Para cada empleado que respondió:
     • Selecciona periodo
     • Selecciona empleado
     • Ingresa respuestas (lee de la encuesta en papel)
     • Guarda
  3. Una vez completado el 100% de respuestas

SEMANA 5: PUBLICACIÓN
  1. Administrador verifica participación >= 90%
  2. Administrador publica resultados
  3. Empleados ven resultados globales por área
  4. Coordinadores ven resultados detallados
  5. Comienzan a gestionar planes de acción
```

---

## 💡 Tips para Capturadores de RH

### Para Acelerar la Captura:

1. **Ordena las encuestas por área**
   - Agrupa todas las encuestas del mismo departamento
   - Esto facilita cambiar entre empleados

2. **Usa la búsqueda**
   - En "Seleccionar Empleado", escribe los primeros caracteres del nombre
   - Filtra automáticamente

3. **Copia automáticamente entre preguntas similares**
   - Si el empleado respondió lo mismo para varias preguntas, puedes seleccionar una y copiar

4. **Verifica antes de guardar**
   - Asegúrate que todas las preguntas Likert tengan un valor (1-5)
   - Las preguntas abiertas marcadas con * son obligatorias

5. **Mantén un registro**
   - Anota cuántos empleados has capturado
   - Marca en la encuesta en papel: "✓ Capturada" después de ingresar

### Para Evitar Errores:

- ❌ **No inventes respuestas**: Usa solo lo que el empleado escribió
- ❌ **No dejes respuestas Likert vacías**: El sistema lo marcará como error
- ❌ **No borres datos**: El sistema mantiene un historial automático
- ✅ **Sé consistente**: Usa la misma escala (1-5) para todos

---

## 🔄 Editar Respuestas Capturadas

Si necesitas **corregir** una respuesta ya capturada:

1. Selecciona el mismo período y empleado
2. El formulario cargará con los datos previos
3. Modifica lo necesario
4. Haz clic en **"✓ Guardar Respuestas"**
5. El sistema actualizará automáticamente (no crea duplicados)

---

## 📊 Visualizar Respuestas Capturadas

Una vez capturadas las respuestas:

1. Administrador ve:
   - Participación aumenta en "Monitoreo de Participación"
   - Respuestas aparecen en "Resultados"
   - Se pueden crear "Planes de Acción"

2. Empleados ven:
   - Resultados generales en "Mis Resultados"
   - Comparativa empresa vs su área
   - Resultados por superdimensión y dimensión

---

## 🚀 Ventajas del Sistema

### Flexibilidad
- ✅ Combina respuestas digitales y en papel en el mismo período
- ✅ Los empleados pueden contestar por cualquier medio
- ✅ Los datos se consolidan automáticamente

### Facilidad para RH
- ✅ Interfaz intuitiva sin capacitación compleja
- ✅ Validaciones automáticas
- ✅ Edición de respuestas sin duplicados

### Seguridad
- ✅ Respuestas asociadas a empleado elegible
- ✅ Registra fecha/hora de captura
- ✅ Solo usuarios con permisos pueden capturar

### Confidencialidad
- ✅ Datos almacenados de manera segura en BD
- ✅ Respuestas abiertas no contienen datos personales
- ✅ Análisis por superdimensión protege identidad

---

## 📝 Notas Técnicas

### Base de Datos
- Las respuestas capturadas se guardan en la tabla `clima_respuestas`
- Las respuestas abiertas en `clima_respuestas_abiertas`
- Usa PRIMARY KEY para evitar duplicados (INSERT ... ON DUPLICATE KEY UPDATE)

### Validaciones
- Empleado debe estar en lista de elegibles
- Reactivos deben estar activos en la dimensión
- Valores Likert: 1-5
- Respuestas abiertas: máximo 500 caracteres

### Permisos
- Requiere: `organizacion.admin`, `clima.admin`, o `clima.captura`
- Solo coordinadores de RH y administradores pueden capturar

---

## 📞 Soporte

Si tienes preguntas:

1. **Sobre la interfaz**: Consulta con tu administrador de sistemas
2. **Sobre el proceso**: Revisa esta guía o contacta a RH
3. **Sobre permisos**: Solicita a administrador que verifique roles

---

## 🎓 Ejemplos

### Ejemplo 1: Capturar una Encuesta Completa

```
EMPLEADO: Juan Pérez (Dirección de Operaciones)

Pregunta 1: Liderazgo inmediato
Lee en papel: "Respondió 5"
Acción: Selecciona opción "5 - Totalmente de acuerdo" ✓

Pregunta 2: Comunicación con jefe
Lee en papel: "Respondió 3"
Acción: Selecciona opción "3 - Neutral" ✓

Pregunta abierta: "¿Qué podemos mejorar?"
Lee en papel: "Mejorar la comunicación de cambios organizacionales"
Acción: Copia el texto exacto ✓

Resultado: "✓ Respuestas guardadas correctamente (48 preguntas registradas)"
```

### Ejemplo 2: Corregir una Respuesta

```
Descubriste que capturaste mal una respuesta para María García.

Acción:
1. Selecciona el mismo período
2. Selecciona a María García
3. El sistema carga sus respuestas previas
4. Encuentra la pregunta incorrecta
5. Cambia el valor
6. Haz clic "Guardar Respuestas"
7. Sistema actualiza automáticamente
```

---

**Versión**: 1.0
**Última actualización**: 21 de enero de 2026
**Estado**: ✅ Listo para usar
