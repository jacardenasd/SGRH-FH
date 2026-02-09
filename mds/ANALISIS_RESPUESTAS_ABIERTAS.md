# 📊 Análisis de Respuestas Abiertas - Clima Laboral

## Descripción General

Sistema de análisis avanzado de respuestas abiertas que permite revisar, analizar y agrupar automáticamente los comentarios cualitativos de las encuestas de clima laboral.

## Ubicación

**Archivo:** `/public/clima_analisis_abiertas.php`  
**Acceso:** Panel de Clima Laboral > Respuestas abiertas  
**URL:** `http://localhost/sgrh/public/clima_analisis_abiertas.php`

---

## 🎯 Características Principales

### 1. **Filtros Avanzados**
- **Periodo**: Selección de periodo de evaluación
- **Pregunta**: Filtrar por pregunta específica o ver todas
- **Unidad**: Filtrar por unidad organizacional
- **Exportación**: Descarga completa en formato CSV

### 2. **Análisis Automático de Texto**

#### A) Análisis de Sentimiento
El sistema clasifica automáticamente cada respuesta en:
- **Positivo**: Comentarios favorables (bueno, excelente, apoyo, etc.)
- **Negativo**: Comentarios de mejora (problema, falta, mal, etc.)
- **Neutro**: Comentarios informativos sin carga emocional

**Palabras clave positivas detectadas:**
- excelente, bueno, bien, mejor, apoyo, comunicación, equipo, respeto, satisfecho, crecimiento, oportunidad, reconocimiento, motivación, eficiente, etc.

**Palabras clave negativas detectadas:**
- mal, problema, falta, dificultad, conflicto, estrés, presión, insatisfecho, mejorar (crítico), carencia, deficiencia, etc.

#### B) Agrupamiento por Temas
El sistema detecta automáticamente menciones de 10 categorías temáticas:

| Tema | Palabras Clave |
|------|----------------|
| **Comunicación** | comunicación, informar, información, transparencia, avisar |
| **Capacitación** | capacitación, entrenamiento, curso, formación, aprendizaje |
| **Liderazgo** | jefe, líder, supervisor, gerente, director, liderazgo |
| **Salario** | salario, sueldo, pago, prestaciones, bono, compensación |
| **Ambiente** | ambiente, clima, compañerismo, convivencia, relaciones |
| **Carga de Trabajo** | trabajo, carga, tiempo, horario, horas, estrés, presión |
| **Reconocimiento** | reconocimiento, agradecer, apreciar, valorar, incentivo |
| **Herramientas** | herramientas, equipo, tecnología, recursos, material |
| **Beneficios** | beneficio, prestación, seguro, vales, apoyo, ayuda |
| **Organización** | organización, proceso, estructura, claridad, orden |

#### C) Nube de Palabras
- Análisis de frecuencia de palabras
- Filtrado automático de:
  - Stopwords (el, la, de, que, y, etc.)
  - Palabras cortas (< 4 caracteres)
- Visualización proporcional por frecuencia
- Top 30 palabras más mencionadas

### 3. **Métricas Clave**

| Métrica | Descripción |
|---------|-------------|
| **Total Respuestas** | Número total de comentarios abiertos |
| **Caracteres Promedio** | Longitud promedio de las respuestas |
| **Comentarios Positivos** | Cantidad de respuestas con sentimiento positivo |
| **Comentarios Negativos** | Cantidad de respuestas con sentimiento negativo |

### 4. **Visualizaciones**

#### Gráfico de Sentimiento (Dona)
- Distribución porcentual de sentimientos
- Colores: Verde (positivo), Rojo (negativo), Gris (neutro)

#### Gráfico de Temas (Barras Horizontales)
- Temas más mencionados ordenados
- Cantidad de menciones por tema
- Identificación rápida de áreas de interés

#### Nube de Palabras
- Tamaño proporcional a frecuencia
- Opacidad variable según relevancia
- Contador de menciones por palabra

### 5. **Vista Detallada por Pregunta**

Cada pregunta se muestra en una tarjeta independiente con:
- Texto completo de la pregunta
- Dimensión asociada (si aplica)
- Contador de respuestas
- Tabla con todas las respuestas:
  - Unidad organizacional
  - Texto completo de la respuesta
  - Fecha de respuesta

---

## 📋 Requisitos Técnicos

### Tablas de Base de Datos
- `clima_preguntas_abiertas`: Define las preguntas abiertas
- `clima_respuestas_abiertas`: Almacena las respuestas
- `clima_periodos`: Periodos de evaluación
- `clima_elegibles`: Validación de participantes
- `org_unidades`: Unidades organizacionales
- `empleados`: Información de empleados

### Validaciones
- Verificación de existencia de tablas
- Filtrado por empresa_id (seguridad)
- Validación de periodo activo
- Autenticación y permisos requeridos

---

## 🔐 Permisos

**Roles con acceso:**
- `organizacion.admin`
- `clima.admin`

**Sin acceso:** Empleados sin permisos administrativos

---

## 💡 Cómo Usar

### Paso 1: Acceso
1. Ir al panel de Clima Laboral
2. Hacer clic en el módulo "Respuestas abiertas"

### Paso 2: Seleccionar Filtros
1. **Periodo**: Seleccionar el periodo a analizar
2. **Pregunta** (opcional): Filtrar por pregunta específica
3. **Unidad** (opcional): Filtrar por área/dirección

### Paso 3: Análisis
1. Revisar las **métricas generales** en los cuadros superiores
2. Analizar el **gráfico de sentimiento** para entender el tono general
3. Revisar los **temas más mencionados** para identificar prioridades
4. Examinar la **nube de palabras** para detectar conceptos clave
5. Leer las **respuestas detalladas** por pregunta

### Paso 4: Exportación (opcional)
1. Hacer clic en "Exportar CSV"
2. Se descargará un archivo con todas las respuestas filtradas
3. Formato: ID, Pregunta, Dimensión, Unidad, Respuesta, Fecha

---

## 📊 Casos de Uso

### 1. Identificar Áreas de Mejora
**Objetivo:** Detectar los temas más problemáticos  
**Cómo:** 
- Revisar gráfico de temas
- Filtrar por comentarios negativos
- Leer respuestas específicas de temas con más menciones

### 2. Validar Percepción Positiva
**Objetivo:** Confirmar fortalezas de la organización  
**Cómo:**
- Revisar porcentaje de comentarios positivos
- Identificar palabras frecuentes positivas
- Leer comentarios de áreas con mejor sentimiento

### 3. Análisis por Área
**Objetivo:** Comparar percepción entre unidades  
**Cómo:**
- Filtrar por unidad específica
- Comparar sentimiento entre diferentes áreas
- Exportar por área para reportes ejecutivos

### 4. Seguimiento de Dimensiones
**Objetivo:** Analizar comentarios de dimensión específica  
**Cómo:**
- Filtrar por pregunta de dimensión específica
- Revisar temas mencionados relacionados
- Identificar patrones en la dimensión

### 5. Reportes Ejecutivos
**Objetivo:** Crear presentaciones con insights  
**Cómo:**
- Tomar screenshots de gráficos
- Exportar respuestas representativas
- Usar métricas de sentimiento en reportes

---

## 🎨 Tecnologías Utilizadas

- **Backend**: PHP 5.7+ compatible
- **Base de Datos**: MySQL/MariaDB
- **Visualización**: Chart.js 3.9.1
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework UI**: Limitless (Bootstrap-based)
- **Exportación**: CSV con UTF-8 BOM

---

## 🔧 Algoritmo de Análisis

### Proceso de Análisis de Sentimiento

```
Para cada respuesta:
  1. Convertir texto a minúsculas
  2. Contar palabras positivas encontradas
  3. Contar palabras negativas encontradas
  4. Si positivas > negativas → Clasificar como POSITIVO
  5. Si negativas > positivas → Clasificar como NEGATIVO
  6. Si iguales o ninguna → Clasificar como NEUTRO
```

### Proceso de Detección de Temas

```
Para cada respuesta:
  Para cada categoría temática:
    Si texto contiene alguna palabra clave del tema:
      Incrementar contador del tema
      Romper bucle (contar solo una vez por respuesta)
```

### Proceso de Nube de Palabras

```
Para cada respuesta:
  1. Limpiar caracteres especiales
  2. Dividir en palabras (tokenización)
  3. Filtrar palabras < 4 caracteres
  4. Filtrar stopwords comunes
  5. Contar frecuencia de cada palabra
  6. Ordenar por frecuencia descendente
  7. Tomar top 30
  8. Calcular tamaño proporcional (12px - 48px)
  9. Calcular opacidad (0.5 - 1.0)
```

---

## ⚙️ Configuración

### Modificar Palabras Clave

Para agregar más palabras al análisis de sentimiento, editar en el archivo:

```php
// Línea ~162-172: Palabras positivas
$palabras_positivas = array(
    'excelente', 'bueno', 'bien', 'mejor', ...
    // Agregar más palabras aquí
);

// Línea ~175-182: Palabras negativas
$palabras_negativas = array(
    'mal', 'problema', 'falta', ...
    // Agregar más palabras aquí
);
```

### Agregar Nuevos Temas

Para agregar categorías temáticas, editar:

```php
// Línea ~185-196: Temas keywords
$temas_keywords = array(
    'Comunicación' => array('comunicación', 'informar', ...),
    'Capacitación' => array('capacitación', 'curso', ...),
    // Agregar nuevo tema aquí:
    'Nuevo Tema' => array('palabra1', 'palabra2', 'palabra3'),
);
```

### Modificar Stopwords

Para cambiar las palabras ignoradas:

```php
// Línea ~219: Lista de stopwords
$stopwords = array('el', 'la', 'de', 'que', 'y', ...);
```

---

## 📈 Mejoras Futuras Sugeridas

1. **Análisis de IA/ML**
   - Integración con OpenAI/GPT para análisis más avanzado
   - Clustering automático de respuestas similares
   - Resúmenes automáticos por tema

2. **Visualizaciones Adicionales**
   - Timeline de sentimiento por fecha
   - Mapa de calor por unidad/pregunta
   - Comparativa entre periodos

3. **Filtros Avanzados**
   - Por rango de fechas
   - Por sentimiento (solo positivos/negativos)
   - Por longitud de respuesta

4. **Reportes Automáticos**
   - Generación de PDF ejecutivo
   - Envío automático por email
   - Dashboard de KPIs cualitativos

5. **Colaboración**
   - Marcar respuestas como "revisadas"
   - Agregar notas internas
   - Asignar respuestas a planes de acción

---

## 🐛 Solución de Problemas

### No aparecen respuestas

**Causas posibles:**
1. No hay preguntas abiertas configuradas
2. No hay respuestas para el periodo seleccionado
3. Filtros muy restrictivos
4. Problema de permisos

**Solución:**
```sql
-- Verificar preguntas abiertas
SELECT * FROM clima_preguntas_abiertas WHERE activo = 1;

-- Verificar respuestas
SELECT COUNT(*) FROM clima_respuestas_abiertas WHERE periodo_id = X;

-- Verificar permisos de usuario
SELECT permisos FROM usuarios WHERE usuario_id = X;
```

### Gráficos no se muestran

**Causas posibles:**
1. Chart.js no carga (bloqueado por firewall/CDN)
2. Error de JavaScript en consola
3. Navegador antiguo sin soporte

**Solución:**
- Verificar consola del navegador (F12)
- Probar en navegador moderno (Chrome, Firefox, Edge)
- Verificar conexión a internet (CDN de Chart.js)

### Exportación CSV con caracteres extraños

**Causa:** Problema de codificación UTF-8

**Solución:**
- Abrir CSV en Excel: Datos > Obtener datos externos > Desde texto
- Seleccionar codificación UTF-8
- O usar Google Sheets (detecta automáticamente)

---

## 📞 Soporte

Para preguntas o mejoras:
1. Revisar este documento
2. Consultar código fuente (bien comentado)
3. Contactar al administrador del sistema

---

**Creado:** Febrero 2026  
**Sistema:** SGRH v2.0+  
**Módulo:** Clima Laboral  
**Archivo:** `clima_analisis_abiertas.php`
