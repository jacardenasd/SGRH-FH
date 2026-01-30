# Superdimensiones de Clima Laboral

## Estructura del Modelo

El sistema de clima laboral está organizado en **4 Superdimensiones** que agrupan **12 Dimensiones**, cada una evaluada con **4 reactivos** (48 reactivos totales).

---

## 📊 Agrupación Completa

### 1️⃣ Relación con el Jefe Inmediato
**Enfoque:** Percepción sobre el liderazgo directo y el reconocimiento recibido

#### Dimensiones:
- **Liderazgo inmediato** (4 reactivos)
  - Evalúa el estilo de liderazgo del jefe directo
  - Capacidad para guiar, motivar y orientar al equipo
  
- **Reconocimiento** (4 reactivos)
  - Percepción sobre el reconocimiento del trabajo bien hecho
  - Feedback y valoración por parte del jefe inmediato

**Total: 2 dimensiones, 8 reactivos**

---

### 2️⃣ Relación con los Compañeros
**Enfoque:** Calidad de las relaciones interpersonales y trabajo en equipo

#### Dimensiones:
- **Colaboración entre áreas** (4 reactivos)
  - Trabajo conjunto entre diferentes departamentos
  - Coordinación interfuncional
  
- **Comunicación interna** (4 reactivos)
  - Efectividad de la comunicación entre compañeros
  - Flujo de información horizontal
  
- **Equidad y respeto** (4 reactivos)
  - Trato justo e igualitario
  - Ambiente de respeto mutuo

**Total: 3 dimensiones, 12 reactivos**

---

### 3️⃣ Relación con la Empresa
**Enfoque:** Conexión del empleado con la organización y sus condiciones

#### Dimensiones:
- **Propósito y alineación** (4 reactivos)
  - Comprensión y conexión con la misión/visión organizacional
  - Sentido de pertenencia
  
- **Estructura y coordinación** (4 reactivos)
  - Claridad de la estructura organizacional
  - Coordinación entre niveles jerárquicos
  
- **Recursos y herramientas** (4 reactivos)
  - Disponibilidad de recursos necesarios para trabajar
  - Calidad de herramientas y equipos
  
- **Bienestar y balance** (4 reactivos)
  - Equilibrio vida-trabajo
  - Programas de bienestar y salud

**Total: 4 dimensiones, 16 reactivos**

---

### 4️⃣ Relación con el Trabajo
**Enfoque:** Percepción sobre las tareas, desarrollo y procesos del puesto

#### Dimensiones:
- **Claridad de rol** (4 reactivos)
  - Comprensión de responsabilidades y expectativas
  - Definición clara del rol
  
- **Desarrollo y aprendizaje** (4 reactivos)
  - Oportunidades de crecimiento profesional
  - Capacitación y desarrollo de habilidades
  
- **Procesos y eficiencia** (4 reactivos)
  - Efectividad de los procesos de trabajo
  - Optimización y mejora continua

**Total: 3 dimensiones, 12 reactivos**

---

## 📈 Resumen Cuantitativo

| Superdimensión | Dimensiones | Reactivos | % Total |
|----------------|-------------|-----------|---------|
| Relación con el Jefe Inmediato | 2 | 8 | 16.7% |
| Relación con los Compañeros | 3 | 12 | 25.0% |
| Relación con la Empresa | 4 | 16 | 33.3% |
| Relación con el Trabajo | 3 | 12 | 25.0% |
| **TOTAL** | **12** | **48** | **100%** |

---

## 🎯 Uso en Reportes

Los resultados de clima laboral pueden visualizarse en dos niveles:

### Nivel 1: Por Superdimensión (4 categorías)
- Vista macro del clima organizacional
- Identificación rápida de áreas críticas
- Comparación entre diferentes superdimensiones

### Nivel 2: Por Dimensión (12 categorías)
- Vista detallada para planes de acción
- Análisis específico por área de mejora
- Seguimiento puntual de indicadores

---

## 💡 Ventajas del Modelo

1. **Claridad conceptual**: Las 4 superdimensiones son fáciles de entender
2. **Diagnóstico preciso**: Las 12 dimensiones permiten identificar problemas específicos
3. **Balance**: Distribución equilibrada de reactivos (8-16 por superdimensión)
4. **Accionable**: Facilita la creación de planes de acción focalizados

---

## 🔧 Implementación Técnica

### Base de Datos
```sql
-- Columna agregada a clima_dimensiones
ALTER TABLE clima_dimensiones ADD COLUMN superdimension VARCHAR(100);
```

### Consultas de Reporte
```sql
-- Promedio por Superdimensión
SELECT 
    d.superdimension,
    ROUND((AVG(r.valor) - 1) / 4 * 100, 2) AS promedio_0_100
FROM clima_respuestas r
INNER JOIN clima_reactivos cr ON cr.reactivo_id = r.reactivo_id
INNER JOIN clima_dimensiones d ON d.dimension_id = cr.dimension_id
WHERE r.periodo_id = ?
GROUP BY d.superdimension;
```

---

## 📅 Historial

- **2026-01-21**: Modelo implementado con 4 superdimensiones y 12 dimensiones
