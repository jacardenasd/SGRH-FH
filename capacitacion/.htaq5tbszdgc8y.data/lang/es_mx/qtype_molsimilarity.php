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
 * Strings for component 'qtype_molsimilarity', language 'es_mx', version '4.4'.
 *
 * @package     qtype_molsimilarity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alphaselection'] = 'Seleccione un valor alfa. Se utilizará para modificar la calificación en consecuencia.';
$string['alphaselection_help'] = 'Si alfa es igual a 1, la puntuación no se modifica. Si es superior a 1, la notación es más severa. Si es inferior a 1, la notación es menos severa.';
$string['answer'] = 'Respuesta: {$a}';
$string['answernumber'] = 'Respuesta: {$a}';
$string['caseno'] = 'No se debe tener en cuenta si es estéreo';
$string['caseyes'] = 'Si se debe tener en cuenta si es estéreo';
$string['clearanswer'] = 'Rorrar la respuesta';
$string['connection-success'] = 'La conexión se ha establecido exitosamente.';
$string['connectiontestresult'] = 'Resultado de la prueba de conexión:';
$string['correctansweris'] = 'La respuesta correcta es:';
$string['correctanswers'] = 'Respuestas correctas';
$string['errorintestwhilegconnection'] = 'Error al probar la conexión:';
$string['filloutoneanswer'] = 'Uste ddebe proporcionar al menos una respuesta posible. Dibuje una molécula y haga clic en el botón "Insertar la estructura dada como respuesta/..." para cada respuesta.';
$string['formtest'] = 'Vista previa de la respuesta:';
$string['insertfrom'] = 'Inserción de respuesta';
$string['insertfrom_help'] = 'Dibuje una estructura y haga clic en el botón "Insertar la estructura dada como respuesta / actualizar la respuesta con la estructura" para insertarla como respuesta. El botón "Ver la estructura en el editor" se puede utilizar para comprobar cuál es la estructura almacenada para cada respuesta. Haga clic en el botón "Borrar la respuesta" y configure la calificación en "Ninguna" para eliminar una respuesta.';
$string['insertfromeditor'] = 'Insertar la estructura dada como respuesta / actualizar la respuesta con la estructura';
$string['inserttoeditor'] = 'Ver estructura en el editor';
$string['isidaKEY'] = 'Clave de Servidor ISIA';
$string['isidaKEY_desc'] = 'Clave necesaria para acceder al servidor de calificar ISIDA externo.';
$string['isidaurl'] = 'URL del Servidor ISIDA';
$string['isidaurl_desc'] = 'URL de servidor para calificar ISIDA externo para evaluar respuesta a pregunta';
$string['mailmsg'] = 'El servidor del plugin de preguntas sobre similitud molecular está inactivo, reinícielo. Error de curl n.°: {$a->errno}. Mensaje de error de curl: {$a->error}';
$string['mailmsg_isidaerror'] = 'El plugin de servidor de tipo de pregunta de similitud molecular devuelve un error: {$a}';
$string['mailmsg_security'] = 'Alguien está intentando acceder al servidor de corrección de similitud molecular. Respuesta del servidor: {$a}';
$string['mailsubj'] = 'Es necesario relanzar el servidor de tipo de pregunta Molsimilarity';
$string['mailsubj_isidaerror'] = 'El servidor de tipo de pregunta de similitud molecular devuelve un error';
$string['mailsubj_security'] = 'Intento no autorizado de conectarse al servidor de corrección de molsimilarity.';
$string['messageprovider:molsimilarity_down'] = 'Notificar que el servidor de corrección está inactivo';
$string['messageprovider:molsimilarity_security'] = 'Notificar que hay un intento no autorizado de acceder al servidor de corrección';
$string['moleculeempty'] = 'Por favor inserte una molécula';
$string['pleaseenterananswer'] = 'Por favor ingrese una respuesta';
$string['pluginname'] = 'Molsimilarity (Similitud molecular)';
$string['pluginname_help'] = 'En respuesta a una pregunta, el estudiante puede dibujar una molécula para compararla con la respuesta proporcionada.';
$string['pluginname_link'] = 'question/type/molsimilarity';
$string['pluginnameadding'] = 'Añadiendo una pregunta de similitud de moles';
$string['pluginnameediting'] = 'Editando una pregunta de similitud de moles';
$string['pluginnamesummary'] = 'Un tipo de pregunta de similitud molecular que permite la comparación cuantitativa entre la respuesta dada por el estudiante y la dada por el profesor.';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta de similitud molecular no almacena ningún dato personal.';
$string['scaffoldselection'] = 'Puede insertar un andamio para el estudiante.';
$string['scaffoldselection_help'] = 'Se insertará un andamio en el dibujante del estudiante para ayudarlo.';
$string['settings'] = 'Configuración de similitud molecular';
$string['stereoselection'] = 'Estereoquímica de opciones';
$string['testconnection'] = 'Pruebe la conexión a la API de Molsimilarity.';
$string['testerrorcode'] = 'Código de error: {$a}.';
$string['testerrormessage'] = 'Mensaje de error: {$a}.';
$string['threshold'] = 'Seleccione un valor de umbral. La respuesta se rechaza por debajo de este umbral.';
$string['threshold_help'] = 'Si la calificación elevada a la potencia alfa es superior o igual al umbral, la calificación es igual a la calificación elevada a la potencia alfa. En caso contrario, la calificación es igual a 0.';
