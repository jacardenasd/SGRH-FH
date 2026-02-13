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
 * Strings for component 'qtype_shortanssimilarity', language 'es_mx', version '4.4'.
 *
 * @package     qtype_shortanssimilarity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canonical'] = '¿Usar método canónico?';
$string['empty_string'] = '';
$string['is_completed_false'] = 'Esta pregunta aun no ha sido calificada por nuestros sistemas - por favor vuelva a comprobar más tarde.';
$string['is_completed_true'] = 'La calificación calculada para esta respuesta fue: {$a}.';
$string['key_text'] = '¿cuál es el texto clave?';
$string['key_text_help'] = 'Esta es la respuesta a la pregunta. El Texto Clave es el texto que nuestro sistema usará para compararlo con la respuesta del estudiante.';
$string['key_text_required'] = 'El Texto Clave es necesario.';
$string['keytext'] = 'Texto Clave';
$string['language'] = 'Idioma';
$string['manual_marking'] = 'calificación manual contra calificación automática';
$string['manual_marking_help'] = '- Calificación Manual requiere cron. Si se configura a \'si\', esta pregunta de forma predeterminada tendrá calificación manual y la pregunta será calificada en segundo plano. Una vez que la pregunta termine de ser calificada, el texto de la pregunta será actualizado con el resultado (Esto será visible para ambos profesor y estudiantes, pero de hecho no calificará la pregunta). A partir de allí, el profesor puede revisar la pregunta y actualizar el puntaje. Use SI ES QUE la respuesta proporcionada (Texto Clave) es más larga de 2 oraciones.

- Calificación Automática. No requiere cron. Si esta opción es configurada a \'no\', entonces se usará calificación automática. Aunque, los tiempos de carga serán drásticamente mayores (puede tardar 10 minutos por pregunta, si las respuestas son complicadas). Por lo tanto, nosotros recomendamos que esta opción esté configurada a \'no\', SI ES QUE la respuesta (Texto Clave) es menor que o igual a 2 oraciones.';
$string['manualmarking'] = '¿Calificación Manual?';
$string['maxbpm'] = '¿Usar concordancia bi-partita máxima?';
$string['ngrampos'] = '¿Usar servicio N-gram/POS?';
$string['pluginname'] = 'Similitud de Respuesta Corta';
$string['pluginname_help'] = 'Crear un tipo de pregunta de similitud de respuesta corta con insertar descripción de pregunta aquí.';
$string['pluginname_link'] = 'question/type/shortanssimilarity';
$string['pluginnameadding'] = 'Añadiendo una pregunta de similitud de respuesta corta';
$string['pluginnameediting'] = 'Editando una pregunta de similitud de respuesta corta';
$string['pluginnamesummary'] = 'Un tipo de pregunta de similitud de respuesta corta que le permite a los estudiantes que sus respuestas escritas sean calificadas automáticamente.

En colaboración con VIP Research Group.';
$string['privacy:metadata:qtype_shortanssimilarity:canonical'] = 'Bandera para usar o no el método canónico.';
$string['privacy:metadata:qtype_shortanssimilarity:finished'] = 'Si es que está terminado o no el cálculo de similtud.';
$string['privacy:metadata:qtype_shortanssimilarity:item_language'] = 'El idioma de la pregunta';
$string['privacy:metadata:qtype_shortanssimilarity:key_text'] = 'La respuesta del profesor para esta pregunta.';
$string['privacy:metadata:qtype_shortanssimilarity:manual_grading'] = 'Si es que la pregunta es calificada manualmente o automáticamente.';
$string['privacy:metadata:qtype_shortanssimilarity:maxbpm'] = 'Bandera para usar o no  coincidencia bi-partita.';
$string['privacy:metadata:qtype_shortanssimilarity:ngrampos'] = 'Bandera para usar o no servicio N-gram/POS';
$string['privacy:metadata:qtype_shortanssimilarity:questionid'] = 'La ID de la pregunta';
$string['privacy:metadata:qtype_shortanssimilarity:queued'] = 'Si es que la pregunta ha sido o no puesta en cola para calificar.';
$string['privacy:metadata:qtype_shortanssimilarity:response'] = 'La respuesta del estudiante con hashed suma MD5.';
$string['privacy:metadata:qtype_shortanssimilarity:result'] = 'El resultado del cálculo de similitud.';
$string['privacy:metadata:qtype_shortanssimilarity:shortanssim_attempt'] = 'Tabla usada para almacenar datos relacionados con intentos de pregunta.';
$string['privacy:metadata:qtype_shortanssimilarity:userid'] = 'El valor de ID del estudiante.';
$string['privacy:metadata:shortanssimilarity:'] = 'Tabla usada para almacenar datos relacionados con preguntas.';
$string['privacy:metadata:ws_nlp_web_service'] = 'El servicio web del VIP Research Group Word and Sentence Natural Language Processing, que es usado para calcular la similitud entre dos oraciones o párrafos..';
$string['privacy:metadata:ws_nlp_web_service:answer'] = 'La respuesta del estudiante a la pregunta, la cual es comparada con la repuesta del profesor.';
$string['summarize_repsponse_invalid'] = 'El usuario no ingresó una respuesta.';
$string['summarize_repsponse_valid'] = 'El usuario ingresó:';
$string['update_mark'] = 'Si la calificación no ha sido actualizada, el profesor necesita actualizarla.';
$string['validation_error_error'] = 'Hubo un error inesperado';
$string['validation_error_no_response'] = 'No se envió respuesta.';
