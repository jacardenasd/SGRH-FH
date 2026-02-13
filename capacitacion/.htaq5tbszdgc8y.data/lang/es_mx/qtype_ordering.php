<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_ordering', language 'es_mx', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posición absoluta';
$string['addmultipleanswers'] = 'Añadir {$a} elementos más';
$string['addsingleanswer'] = 'Añadir un elemento más';
$string['allornothing'] = 'Todo o nada';
$string['answer'] = 'Texto del elemento';
$string['correctitemsnumber'] = 'Elementos correctos: {$a}';
$string['correctorder'] = 'El orden correcto para estos elementos es como sigue:';
$string['defaultanswerformat'] = 'Formato de respuesta por defecto';
$string['defaultquestionname'] = 'Arrastre los siguientes elementos en el orden correcto.';
$string['draggableitemno'] = 'Elemento arrastrable {no}';
$string['draggableitems'] = 'Elementos arrastrables';
$string['duplicatesnotallowed'] = 'No está permitido el duplicar elementos arrastrables. La cadena de caracteres  "{$a->text}" ya está usada en {$a->item}.';
$string['editingordering'] = 'Editando pregunta de ordenamiento';
$string['gradedetails'] = 'Detalles de calificación';
$string['gradingtype'] = 'Tipo de calificación';
$string['gradingtype_help'] = '**Todo o nada**
&nbsp; Si todos los elementos están en la posición correcta, entonces se otorga puntaje completo. en caso contrario el puntaje es cero.

**Posición absoluta**
:&nbsp; Un elemento es considerado correcto si está en la misma posición que en la respuesta correcta. La puntuación más alta posible para la pregunta es **la misma que** el número de elementos mostrados al estudiante.

**Relativa a la posición correcta**
&nbsp; Un elemento es considerado correcto si está en la misma posición que la respuesta correcta. Los elementos correctos reciben un puntaje igual al número de elementos mostrados menos uno. Los elementos incorrectos reciben un puntaje igual al número de elementos mostrados menos uno y menos la distancia al elemento desde la posición correcta. Por lo tanto, si ***n*** elementos son mostrados al estudiante, el número de puntos disponibles para cada elemento es ***(n-1)***, y el puntaje más alto disponible para la pregunta es ***n x (n-1)***, lo que es lo mismo que  ***(n² - n)***.

**Relativa al elemento siguiente (excluyendo al último)**
&nbsp; Un elemento es considerado correcto si es seguido por el mismo elemento que en la respuesta correcta. El elemento en la última posición no es revisado. Así, el máximo puntaje posible para la pregunta es **uno menos que** el número de elementos mostrados al estudiante.

**Relativa al elemento siguiente (incluyendo al último)**
&nbsp; Un elemento es considerado correcto si es seguido por el mismo elemento que en la respuesta correcta. Esto incluye al último elemento que no debe de tener a ningún otro elemento después de él. Así, el máximo puntaje posible para la pregunta es **el mismo que** el número de elementos mostrados al estudiante.

**Relativa a ambos, el anterior y el siguiente elemento**
&nbsp; Un elemento es considerado correcto si el anterior y el siguiente elemento son los mismos  que los que están en la respuesta correcta. El primer elemento no debe de tener ningún elemento previo, y el último elemento no debe tener un elemento posterior. Así, hay dos puntos posibles para cada elemento , y el puntaje máximo posible para la pregunta es **el doble del** número de elementos mostrados al estudiante.

**Relativa a TODOS los elementos anteriores y siguientes**
&nbsp; Un elemento es considerado correcto si  está precedido por todos los mismos elementos que están en la respuesta correcta, y si es seguido por todos los mismos elementos que en la respuesta correcta. El orden de los elementos anteriores no importa, ni tampoco importa el orden de los elementos siguientes. Así, si  ***n*** elementos son mostrados al estudiante, el número de puntos disponibles para cada elemento es de ***(n - 1)***, y la puntuación máxima disponible para la pregunta es de ***n x (n - 1)*** lo que es lo mismo que ***(n² - n)***.

**Subconjunto ordenado más largo**
&nbsp; La calificación es el número de elementos en el subconjunto ordenado más largo de elementos. La calificación más alta posible es igual al número de elementos mostrados. Un subconjunto debe tener al menos dos elementos. Los subconjuntos no necesitan iniciar en el primer elemento (pero si pueden hacerlo) y no necesitan ser contiguos (pero si pueden serlo). Donde haya varios subconjuntos de igual longitud, los elementos en el subconjunto que sea encontrado primero, al buscar de izquierda a derecha, será mostrado como correcto. Los otros elementos serán marcados como incorrectos.

**Subconjunto contiguo más largo**
&nbsp; La calificación es el número de elementos en el subconjunto contiguo más largo de elementos.  La calificación más alta posible es igual al número de elementos mostrados. Un subconjunto debe tener al menos dos elementos. Los subconjuntos no necesitan iniciar en el primer elemento (pero si pueden hacerlo) y SI DEBEN SER CONTIGUOS. Donde haya varios subconjuntos de igual longitud, los elementos en el subconjunto que sea encontrado primero, al buscar de izquierda a derecha, será mostrado como correcto. Los otros elementos serán marcados como incorrectos.';
$string['highlightresponse'] = 'Resaltar respuesta como correcta o incorrecta';
$string['horizontal'] = 'Horizontal';
$string['incorrectitemsnumber'] = 'Elementos incorrectos: {$a}';
$string['layouttype'] = 'Acomodo de elementos';
$string['layouttype_help'] = 'Elija si mostrar los elementos horizontalmente o verticalmente.';
$string['longestcontiguoussubset'] = 'Subconjunto contiguo más largo';
$string['longestorderedsubset'] = 'Subconjunto ordenado más largo';
$string['moved'] = '{$a->item} movido. Nueva posición: {$a->position} de {$a->total}.';
$string['moveleft'] = 'Mover a la izquierda';
$string['moveright'] = 'Mover a la derecha';
$string['noresponsedetails'] = 'Lo siento, no hay detalles diponibles acerca de la respuesta a esta pregunta.';
$string['noscore'] = 'Sin puntaje';
$string['notenoughanswers'] = 'Las preguntas de ordenamiento deben tener más de {$a} respuestas.';
$string['notenoughsubsetitems'] = 'Un subconjunto debe tener al menos {$a} elementos.';
$string['numberingstyle'] = '¿Numerar las opciones?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'El estilo predeterminado de numeración.';
$string['numberingstyle_help'] = 'Elegir el estilo de numeración para elementos arrastrables en esta pregunta.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Sin numeración';
$string['partialitemsnumber'] = 'Elementos parcialmente correctos: {$a}';
$string['pluginname'] = 'Orden';
$string['pluginname_help'] = 'Varios elementos se muestran desordenadamente. Los elementos pueden arrastrarse a un orden apropiado.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Añadir una pregunta de Ordenamiento';
$string['pluginnameediting'] = 'Editar una pregunta de Ordenamiento';
$string['pluginnamesummary'] = 'Poner elementos desordenados en un orden apropiado.';
$string['positionx'] = 'Posición {$a}';
$string['privacy:preference:gradingtype'] = 'El tipo de calificación.';
$string['privacy:preference:layouttype'] = 'El acomodo de los elementos.';
$string['privacy:preference:numberingstyle'] = 'El estilo de numeración de las opciones.';
$string['privacy:preference:selectcount'] = 'El número de seleccionados.';
$string['privacy:preference:selecttype'] = 'El tipo de selección de elemento.';
$string['privacy:preference:showgrading'] = 'Si es que se muestran o no detalles de la calificación.';
$string['regradeissuenumitemschanged'] = 'El número de elementos arrastrables ha cambiado.';
$string['relativeallpreviousandnext'] = 'Relativo a TODOS los elementos anteriores y siguientes';
$string['relativenextexcludelast'] = 'Relativo al siguiente elemento (excluyendo al último)';
$string['relativenextincludelast'] = 'Relativo al siguiente elemento (incluyendo al último)';
$string['relativeonepreviousandnext'] = 'relativo a ambos, el elemento anterior y el siguiente';
$string['relativetocorrect'] = 'Relativo a la posición correcta';
$string['removeeditor'] = 'Quitar editor HTML';
$string['removeitem'] = 'Quitar elemento arrastrable';
$string['scoredetails'] = 'Aquí están los puntajes para cada elemento en su respuesta:';
$string['selectall'] = 'Seleccionar todos los elementos';
$string['selectcontiguous'] = 'Seleccionar un subconjunto de elementos contiguos';
$string['selectcount'] = 'Tamaño del subconjunto';
$string['selectcount_help'] = 'El número de elementos que se mostrarán cuando aparezca la pregunta en un examen.';
$string['selectrandom'] = 'Seleccionar un subconjunto aleatorio de elementos';
$string['selecttype'] = 'Tipo de selección de elemento';
$string['selecttype_help'] = 'Elegir si es que se muestran todos los elementos o un subconjunto de elementos.';
$string['showgrading'] = 'Detalles de calificación';
$string['showgrading_help'] = 'Elija si mostrar u ocultar detalles de los cálculos de puntuación cuando un estudiante revisa una respuesta a esta pregunta de Ordenamiento.';
$string['vertical'] = 'Vertical';
