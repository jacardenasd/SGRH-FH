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
 * Strings for component 'qtype_crossword', language 'es_mx', version '4.4'.
 *
 * @package     qtype_crossword
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accentgradingignore'] = 'Solo calificar las letras e ignorar los acentos';
$string['accentgradingpenalty'] = 'Puntaje parcial si las letras son correctas pero uno o dos acentos están mal';
$string['accentgradingstrict'] = 'Las letras acentuadas deben coincidir completamente o la respuesta es incorrecta';
$string['accentletters'] = 'Letras acentuadas';
$string['accentpenalty'] = 'Calificación para respuestas con acentos incorrectos';
$string['across'] = 'Horizontal';
$string['addmorewordblanks'] = 'Vacíos para {no} más palabras';
$string['answer'] = 'Respuesta';
$string['answeroptions'] = 'Opciones de respuesta';
$string['answerwithnumber'] = '{$a->number} {$a->orientation}: {$a->response}';
$string['celltitle'] = 'Fila {row}, Columna {column}. {number} {orientation}. {clue}, letra {letter} de {count}';
$string['clue'] = 'Pista';
$string['correctanswer'] = 'Respuesta correcta: {$a}';
$string['down'] = 'Vertical';
$string['inputlabel'] = '{$a->number} {$a->orientation}. {$a->clue} Longitud de respuesta {$a->length}';
$string['missingresponse'] = '-';
$string['mustbealphanumeric'] = 'La respuesta debe ser solamente caracteres alfanuméricos';
$string['notenoughwords'] = 'Este tipo de pregunta requiere al menos {$a} palabras';
$string['numberofcolumns'] = 'Número de columnas';
$string['numberofrows'] = 'Número de filas';
$string['orientation'] = 'Orientación';
$string['overflowposition'] = 'La posición de comienzo o fin de palabra está fuera del tamaño de la cuadrícula definida.';
$string['pleaseananswerallparts'] = 'Por favor conteste todas las partes de la pregunta.';
$string['pleaseenterclueandanswer'] = 'Usted debe escribir ambos: respuesta y pista para palabra {$a}.';
$string['pluginname'] = 'Crucigrama';
$string['pluginname_help'] = 'Una pregunta de crucigrama simple basado en texto. Actualmente requiere un diseño manual de la rejilla de palabras.';
$string['pluginnameadding'] = 'Añadiendo una pregunta de Crucigrama';
$string['pluginnameediting'] = 'Editando una pregunta de Crucigrama';
$string['pluginnamesummary'] = 'Una pregunta de crucigrama simple basado en texto. Actualmente requiere un diseño manual de la rejilla de palabras.';
$string['preview'] = 'Vista previa';
$string['privacy:metadata'] = 'El plugin de Crucigrama no almacena ningún dato personal.';
$string['refresh'] = 'Refrescar vista previa';
$string['smart_straight_quote_matching'] = 'Concordancia de comilla/apóstrofe';
$string['smart_straight_quote_matching_help'] = 'Si la opción "Relajado" está habilitada, entonces cualquier comillas rizadas (también conocidas como comillas "inteligentes") y apóstrofes en los campos de creación de preguntas se convertirán al equivalente exacto al guardar.';
$string['smart_straight_quote_matching_relaxed'] = 'Relajado: todas las formas de comillas y apóstrofes son intercambiables (predeterminado).';
$string['smart_straight_quote_matching_strict'] = 'Estricto: todas las formas de comillas y apóstrofes son únicas.';
$string['startcolumn'] = 'Índice de columna';
$string['startrow'] = 'Índice de fila';
$string['updateform'] = 'Actualizar el formato';
$string['wordhdrhelper_help'] = '<p>Dado que el crucigrama es generado a partir de la lista de palabras, usted puede, ya sea, generar un solo diseño de crucigrama para todos los usuarios, o usar la opción de \'Barajear diseño de crucigrama en nuevo intento\' para generar un nuevo diseño para cada nuevo intento por estudiante (si lo permiten las combinaciones de palabras).</p>
<p>Añada sus palabras y pistas usando los campos de texto. Si usted quiere una palabra específica fijada en la rejilla, active \'Fijar palabra en rejilla\' y especifique su orientación y colocación.</p>
<p>La mayoría de los caracteres están soportados en este tipo de pregunta, de A A-Z, 0-9, símbolos diacríticos y de moneda. Cualquier signo de comillas o apóstrofes será convertido o interpretado como la versión \'original\' para facilidad de escritura y auto-calificación.</p>
<p>Añada más palabras al seleccionar  el botón de \'Vacíos para 3 palabras más\'. Cualquier palabra vacía será eliminada cuando la pregunta sea guardada.</p>';
$string['wordlabel'] = 'W{$a->number}{$a->orientation}';
$string['wordno'] = 'Palabra {$a}';
$string['words'] = 'Palabras';
$string['words_help'] = 'Por favor, indique al menos una palabra y su pista correspondiente, y defina su dirección y posición inicial. Recuerde que las palabras están numeradas en la cuadrícula según su orden en esta sección.';
$string['wrongadjacentcharacter'] = 'Se detectaron dos o más rupturas de palabras nuevas consecutivas. Por favor use un máximo de una entre palabras individuales. Tenga en cuenta que esto no limita el número de nuevas palabras en la respuesta misma.';
$string['wrongintersection'] = 'La letra en la intersección de dos palabras no coicide. La palabra no puede ser colocada aquí.';
$string['wrongoverlappingwords'] = 'No puede haber dos palabras que empiecen en el mismo lugar ni en la misma dirección. Esta pista empieza en el mismo lugar que "{$a}" arriba.';
$string['wrongplugin'] = 'Este plugin es diferente del plugin qtype_crossword existente. Desinstale el plugin existente antes de instalar este.';
$string['wrongpositionhyphencharacter'] = 'Por favor no añada un guión antes de o después de el último caracter alfanumérico.';
$string['wrongpositionspacecharacter'] = 'Por favor no añada un espacio antes de o después de el último caracter alfanumérico.';
$string['yougot1right'] = '1 de sus respuestas es correcta.';
$string['yougotnright'] = '{$a->num} de sus respuestas son correctas';
