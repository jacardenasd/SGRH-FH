# ✅ Checklist de Validación v2.1 - Encuestas en Papel

**Fecha**: 21 de enero de 2026  
**Versión**: 2.1  
**Propósito**: Verificar que todos los cambios estén implementados correctamente

---

## 🖨️ Validación: Encuesta Impresa (2 páginas)

### ✓ Acceso y Carga

- [ ] Accede a: `http://localhost/sgrh/public/clima_encuesta_impresion.php`
- [ ] Página carga sin errores
- [ ] Ves botón azul: "🖨️ Imprimir encuesta"
- [ ] Puedes seleccionar período en desplegable

### ✓ Datos Demográficos

- [ ] Ves sección: "EMPRESA: ___________"
- [ ] Ves sección: "UNIDAD / ÁREA: ___________"
- [ ] Ves sección: "DEPARTAMENTO: ___________"
- [ ] Las 3 secciones tienen líneas para escribir a mano
- [ ] Están en color gris claro (fondo de datos demográficos)
- [ ] Ubicadas justo debajo del título
- [ ] Antes de las instrucciones

### ✓ Compactación (2 páginas)

1. Haz clic: "🖨️ Imprimir encuesta"
2. Abre diálogo de impresión
3. Click en "Vista previa" (en navegador)
4. Verifica:
   - [ ] Página 1 visible (inicio)
   - [ ] Página 2 visible (final)
   - [ ] NO hay página 3
   - [ ] Texto legible (no cortado)
   - [ ] Datos demográficos en Página 1
   - [ ] Superdimensiones 1 y 2 en Página 1
   - [ ] Superdimensiones 3 y 4 en Página 2
   - [ ] Sección "COMENTARIOS Y SUGERENCIAS" en Página 2

### ✓ Contenido y Formato

- [ ] Encabezado: "ENCUESTA DE CLIMA LABORAL"
- [ ] Subtítulo: "CONFIDENCIAL - Tus respuestas son anónimas..."
- [ ] Instrucciones claras con 4 puntos
- [ ] 48 preguntas Likert 1-5
- [ ] Casillas pequeñas (16x16px) para marcar
- [ ] Escala Likert etiquetada: 1-5
- [ ] 2-3 preguntas abiertas con líneas
- [ ] Footer: "Gracias por tu participación"

### ✓ Impresión Real

1. Selecciona tu impresora
2. Márgenes: Mínimo
3. Fondos: ☑️ Activado
4. Escala: 100%
5. Haz clic: "Imprimir"
6. Verifica:
   - [ ] Imprime 2 páginas (no 3+)
   - [ ] Datos demográficos visibles
   - [ ] Casillas del tamaño correcto
   - [ ] No se corta nada de los lados
   - [ ] Legible en 10pt

---

## 🔒 Validación: Captura Identificada (Original)

### ✓ Acceso y Carga

- [ ] Accede a: `http://localhost/sgrh/public/clima_captura_respuestas.php`
- [ ] Página carga sin errores
- [ ] Ves 3 selectores en la parte superior (Período | Tipo | Empleado)

### ✓ Interfaz Nuevos Selectores

**Selector 1 - Período**:
- [ ] Ves desplegable: "Seleccionar Período"
- [ ] Contiene: Años 2025, 2026, etc.
- [ ] Default: Último año
- [ ] Icon: 🔍

**Selector 2 - Tipo** (NUEVO):
- [ ] Ves desplegable: "Captura"
- [ ] Opción 1: "👤 Identificada (por empleado)"
- [ ] Opción 2: "🔒 Anónima (por unidad)"
- [ ] Default: "👤 Identificada"
- [ ] Icon: 👤

**Selector 3 - Empleado/Unidad** (DINÁMICO):
- [ ] Cuando tipo="Identificada": Ves desplegable de EMPLEADOS
- [ ] Cuando tipo="Anónima": Ves desplegable de UNIDADES
- [ ] Labels cambian dinámicamente
- [ ] Sin errores al cambiar

### ✓ Modo Identificada (👤)

1. Selecciona: Período 2026
2. Selecciona: 👤 Identificada
3. Selecciona: Un empleado (ej: "Juan Pérez - Ventas")
4. Verifica:
   - [ ] Aparece formulario
   - [ ] Encabezado: "👤 Captura Identificada"
   - [ ] Muestra nombre: "Juan Pérez"
   - [ ] Muestra área: "Ventas"
   - [ ] Input hidden `es_anonima`: 0
   - [ ] Input hidden `empleado_id`: valor real
   - [ ] Selector 3 muestra EMPLEADOS (no unidades)

### ✓ Captura de Respuestas

1. Para cada pregunta Likert:
   - [ ] Ves dropdown 1-5
   - [ ] Puedes seleccionar opciones
   - [ ] Guardadas previamente aparecen seleccionadas

2. Para preguntas abiertas:
   - [ ] Ves textarea 500 caracteres
   - [ ] Puedes escribir comentarios
   - [ ] Salvadas previamente aparecen

3. Botón guardar:
   - [ ] Haz clic: "✓ Guardar Respuestas"
   - [ ] Mensaje: "✓ Respuestas guardadas (48 preguntas - Captura identificada)"

---

## 🔐 Validación: Captura Anónima (NUEVA) ⭐

### ✓ Cambiar a Modo Anónimo

1. Selecciona: Período 2026
2. **Selector 2 - Cambio de Tipo**:
   - [ ] Haz clic en desplegable "Captura"
   - [ ] Selecciona: "🔒 Anónima (por unidad)"
   - [ ] Selector 3 CAMBIA automáticamente

### ✓ Selector Dinámico

Después de seleccionar "🔒 Anónima":
- [ ] Selector 3 ahora dice: "Seleccione unidad"
- [ ] Lista muestra UNIDADES (no empleados)
- [ ] Ejemplo: "Área de Ventas", "Área de Operaciones", etc.
- [ ] Sin nombres de personas

### ✓ Seleccionar Unidad

1. Selecciona: "Área de Ventas" (ej)
2. Verifica:
   - [ ] Aparece formulario
   - [ ] Encabezado: "🔒 Captura Anónima"
   - [ ] Muestra: "Área de Ventas"
   - [ ] Mensaje rojo/naranja: "🔒 Estas respuestas serán completamente anónimas"
   - [ ] Input hidden `es_anonima`: 1
   - [ ] Input hidden `empleado_id`: 0 (CERO)
   - [ ] Input hidden `unidad_id`: valor real

### ✓ Captura Anónima

1. Ingresa respuestas 1-5 para preguntas Likert
2. Ingresa comentarios abiertos
3. Haz clic: "✓ Guardar Respuestas"
4. Verifica:
   - [ ] Mensaje: "✓ Respuestas guardadas (48 preguntas - Captura anónima)"
   - [ ] Cambio visual del tipo de captura
   - [ ] SIN mensajes de error

### ✓ Cambiabilidad Entre Modos

1. Repite: 
   - [ ] Período 2026
   - [ ] Tipo: 👤 Identificada → ves empleados
   - [ ] Tipo: 🔒 Anónima → ves unidades
   - [ ] Tipo: 👤 Identificada → ves empleados nuevamente
   - [ ] Sin errores en transiciones

---

## 🗄️ Validación: Base de Datos

### ✓ Tablas Existen

```sql
SELECT * FROM clima_respuestas LIMIT 1;
SELECT * FROM clima_respuestas_abiertas LIMIT 1;
```

- [ ] `clima_respuestas` tiene columna `empleado_id`
- [ ] `clima_respuestas_abiertas` tiene columna `empleado_id`

### ✓ Datos Guardados Correctamente

**Identificada** (empleado_id > 0):
```sql
SELECT periodo_id, empleado_id, COUNT(*) 
FROM clima_respuestas 
WHERE empleado_id > 0 
GROUP BY periodo_id, empleado_id;
```

- [ ] Muestra empleado_id con valores reales (1234, 5678, etc.)

**Anónima** (empleado_id = 0):
```sql
SELECT periodo_id, unidad_id, COUNT(*) 
FROM clima_respuestas 
WHERE empleado_id = 0 
GROUP BY periodo_id, unidad_id;
```

- [ ] Muestra empleado_id = 0
- [ ] Muestra unidad_id válido
- [ ] COUNT > 0

---

## 📄 Validación: Documentación

### ✓ Archivos Nuevos Existen

- [ ] `GUIA_IMPRESION_RAPIDA.md` existe
- [ ] `GUIA_CAPTURA_ANONIMA.md` existe
- [ ] `CHANGELOG_MEJORAS_PAPEL.md` existe
- [ ] `RESUMEN_CAMBIOS_v21.md` existe

### ✓ Contenido Documentación

**GUIA_IMPRESION_RAPIDA.md**:
- [ ] Instrucciones claras para imprimir 2 páginas
- [ ] Soluciones de problemas
- [ ] Especificaciones técnicas

**GUIA_CAPTURA_ANONIMA.md**:
- [ ] Explica diferencia entre identificada y anónima
- [ ] Pasos de uso modo anónimo
- [ ] Ejemplos prácticos
- [ ] Preguntas de seguridad

**CHANGELOG_MEJORAS_PAPEL.md**:
- [ ] Detalles de CSS compactado
- [ ] Cambios en archivos PHP
- [ ] Impacto de cambios

---

## 🎯 Validación: Funcionalidad Integrada

### ✓ Panel Admin

1. Accede a: `http://localhost/sgrh/public/clima_admin.php`
2. Verifica:
   - [ ] Link: "🖨️ Encuesta imprimible" → clima_encuesta_impresion.php
   - [ ] Link: "📋 Captura en papel" → clima_captura_respuestas.php
   - [ ] Ambos links funcionales

### ✓ Permisos

- [ ] Usuario con `clima.admin`: Acceso total
- [ ] Usuario con `clima.captura`: Acceso a captura
- [ ] Usuario sin permisos: Denegado

### ✓ Flujo Completo

1. **RH imprime**:
   - [ ] Accede clima_encuesta_impresion.php
   - [ ] Imprime 2 páginas
   - [ ] Distribuye al personal

2. **Personal completa**:
   - [ ] Rellena datos demográficos
   - [ ] Marca respuestas 1-5
   - [ ] Escribe comentarios
   - [ ] Devuelve a RH

3. **RH captura identificada** (opcional):
   - [ ] Accede clima_captura_respuestas.php
   - [ ] Tipo: 👤 Identificada
   - [ ] Selecciona empleado
   - [ ] Ingresa respuestas
   - [ ] Guarda

4. **RH captura anónima**:
   - [ ] Accede clima_captura_respuestas.php
   - [ ] Tipo: 🔒 Anónima
   - [ ] Selecciona unidad
   - [ ] Ingresa respuestas
   - [ ] Guarda

---

## 📊 Validación: Reportes

### ✓ Resultados Incluyen Anónimas

1. Accede: `http://localhost/sgrh/public/clima_resultados.php`
2. Selecciona período con capturas anónimas
3. Verifica:
   - [ ] Resultados incluyen respuestas anónimas (empleado_id=0)
   - [ ] Agregadas por unidad correctamente
   - [ ] Promedios incluyen todas las respuestas

### ✓ Mi Unidad Incluye Anónimas

1. Accede: `http://localhost/sgrh/public/clima_resultados_mi_unidad.php`
2. Si hay capturas anónimas de tu unidad:
   - [ ] Ves respuestas reflejadas
   - [ ] Promedios incluyen anónimas

---

## 🐛 Validación: Errores y Edge Cases

### ✓ Validaciones

- [ ] Periodo obligatorio: Error si no selecciona
- [ ] Tipo captura obliga selección: Funciona
- [ ] Empleado/unidad obligatorio según tipo
- [ ] Respuestas Likert 1-5 validadas
- [ ] Texto máximo 500 caracteres respeta
- [ ] Sin duplicados (ON DUPLICATE KEY funciona)

### ✓ Manejo de Errores

- [ ] Captura sin respuestas: Permite guardar 0 preguntas (esperado)
- [ ] Cambio de tipo: No pierde datos en formulario
- [ ] Recarga página: Selecciones persisten en URL
- [ ] Navegador vuelve atrás: Funciona

---

## ✨ Resumen Visual

| Aspecto | ✓ Cumple |
|---------|----------|
| Encuesta 2 páginas | [ ] |
| Datos demográficos visibles | [ ] |
| Selectores dinámicos funcionan | [ ] |
| Modo identificada captura | [ ] |
| Modo anónima captura | [ ] |
| BD guarda correctamente | [ ] |
| Reportes incluyen anónimas | [ ] |
| Documentación completa | [ ] |

---

## 📋 Checklist Final

- [ ] Todas las validaciones de encuesta pasadas
- [ ] Todas las validaciones de captura identificada pasadas
- [ ] Todas las validaciones de captura anónima pasadas
- [ ] BD validada
- [ ] Reportes validados
- [ ] Documentación revisada
- [ ] Sin errores en navegador (consola)
- [ ] Sin errores en PHP (logs)

---

## 🎉 Estado

**Si todas las validaciones pasaron**:
```
✅ Sistema LISTO PARA PRODUCCIÓN
```

**Si encontraste problemas**:
1. Documenta el problema
2. Referencia esta guía
3. Revisa el CHANGELOG_MEJORAS_PAPEL.md
4. Contacta al desarrollador

---

**Versión**: 2.1  
**Fecha Validación**: [____/____/______]  
**Validado por**: [_____________________]  
**Estado**: [ ] Completo [ ] Parcial [ ] Pendiente
