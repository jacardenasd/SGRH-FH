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
 * Strings for component 'filter_embedquestion', language 'es_mx', version '4.4'.
 *
 * @package     filter_embedquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptoptions'] = 'Opciones del intento';
$string['authorizedsecrets'] = 'Secretos autorizados';
$string['authorizedsecrets_desc'] = 'Agregue aquí secretos de otros servidores, cada uno por línea, para que las preguntas incrustadas importadas puedan funcionar correctamente.<br/><br/>El secreto de este servidor es <code>{$a}</code>.';
$string['chooserandomly'] = 'Elegir una pregunta incrustable aleatoriamente de esta categoría';
$string['corruptattempt'] = 'Su intento anterior de contestar una pregunta aquí dejó de funcionar. Si Usted elije \'Continuar\', será eliminado y se creará un nuevo intento.';
$string['corruptattemptwithreason'] = 'Tu intento anterior de responder una pregunta aquí ha dejado de funcionar. ({$a}) Si haces clic en continuar, se eliminará y se creará un nuevo intento.';
$string['defaultsheading'] = 'Opciones por defecto para incrustar preguntas';
$string['defaultsheading_desc'] = 'Estos son los valores por defecto para las opciones que controlan como se muestran y funcionan las preguntas incrustadas. Estos son los valores que serán usados si una opción particular no es configurada cuando la pregunta es incrustada.';
$string['defaultx'] = 'Ajuste por defecto ({$a})';
$string['displayoptions'] = 'Opciones de visualización';
$string['embedquestion'] = 'Incrustar pregunta';
$string['errormaxmarknumber'] = 'La puntuación máxima debe ser un número.';
$string['errornopermissions'] = 'Usted no tiene permiso para incrustar esta pregunta.';
$string['errorunknownquestion'] = 'Desconocido, o pregunta no compartible.';
$string['errorvariantformat'] = 'El número de variante debe ser un entero positivo.';
$string['errorvariantoutofrange'] = 'El número de variante debe ser un entero positivo y como máximo {$a}.';
$string['filtername'] = 'Incrustar preguntas';
$string['generalfeedback_desc'] = 'Si es que será mostrada o no por defecto la retroalimentación general en preguntas incrustadas.';
$string['howquestionbehaves'] = 'Como se comporta la pregunta';
$string['howquestionbehaves_desc'] = 'El comportamiento a usar por defecto para preguntas incrustadas.';
$string['iframedescription'] = 'Descripción de iframe';
$string['iframedescription_help'] = 'Esta descripción ayuda a los usuarios de lectores de pantalla a navegar mejor por una página si se integran varias preguntas en la misma.
La accesibilidad mejorará si se describe brevemente cada pregunta integrada para que sean únicas. Tenga en cuenta que el sistema la describirá automáticamente como "Pregunta integrada [[n]]", donde el sistema calcula el número exacto.
Puede proporcionar una descripción más detallada, pero no utilice más de 100 caracteres.';
$string['iframedescriptionmaxlengthwarning'] = 'Por favor, acorte la descripción a un máximo de 100 caracteres.';
$string['iframedescriptionminlengthwarning'] = 'Una descripción debe tener al menos tres caracteres.';
$string['iframetitle'] = 'Pregunta incrustada';
$string['iframetitleauto'] = 'Pregunta incrustada {$a}';
$string['invalidcategory'] = 'La categoría con idnumber "{$a->catid}" no existe en "{$a->contextname}".';
$string['invalidemptycategory'] = 'La categoría "{$a->catname}" en "{$a->contextname}" no contiene ninguna pregunta incrustable.';
$string['invalidquestion'] = 'La pregunta con el número de identificación "{$a->qid}" no existe en la categoría "{$a->catname} [{$a->catidnumber}]".';
$string['invalidrandomquestion'] = 'No se puede generar una pregunta aleatoria desde la categoría de pregunta "{$a}".';
$string['invalidtoken'] = 'Esta pregunta incrustada está configurada incorrectamente.';
$string['markdp_desc'] = 'El número de dígitos que por defecto deberían mostrarse después del punto decimal al mostrar calificaciones en preguntas incrustadas.';
$string['markedoutof'] = 'Punteadas de un total de';
$string['marks_desc'] = 'Si es que la información del puntaje numérico debería ser mostrada por defecto en preguntas incrustadas.';
$string['nameandcount'] = '{$a->name} ({$a->count})';
$string['nameandidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['nameidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->count})';
$string['noguests'] = 'Los usuarios invitados no tienen permiso para interactuar con preguntas incrustadas.';
$string['notyourattempt'] = 'Este no es su intento.';
$string['pluginname'] = 'Incrustar preguntas';
$string['previousattempts'] = 'Intentos anteriores';
$string['privacy:metadata'] = 'El filtro para incrustar preguntas no almacena ningún dato personal.';
$string['questionbank'] = 'Banco de preguntas';
$string['questionidnumber'] = 'Número id de la pregunta';
$string['questionidnumberchanged'] = 'La pregunta que se intenta responder aquí ya no tiene número de identificación {$a}.';
$string['questionnolongerhasidnumber'] = 'La pregunta que se intenta responder aquí ya no tiene un número de identificación.';
$string['questionnolongerincategory'] = 'La pregunta que se intenta responder aquí ya no está en la categoría con número de identificación {$a}.';
$string['responsehistory_desc'] = 'Si es que debería mostrarse o no por defecto la tabla de historia de respuesta para preguntas incrustadas.';
$string['restart'] = 'Comenzar de nuevo';
$string['rightanswer_desc'] = 'Si es que es mostrada o no por defecto la respuesta correcta generada automáticamente para preguntas incrustadas. Nosotros le recomendamos que no use esto, pero en su lugar le sugerimos encarecidamente a los autores de preguntas a que expliquen la respuesta correcta en la retroalimentación general.';
$string['securityheading'] = 'Configuraciones de seguridad';
$string['specificfeedback_desc'] = 'Si es  que la retroalimentación específica a la respuesta del estudiante debería ser mostrada por defecto en preguntas incrustadas.';
$string['taskcleanup'] = 'Limpiar los intentos antiguos de pregunta incrustada';
$string['title'] = 'Pregunta incrustada';
$string['warningfilteroffglobally'] = 'Advertencia: el filtro de pregunta incrustada está deshabilitado en las configuraciones del filtro para todo el sitio.';
$string['warningfilteroffhere'] = 'Advertencia: el filtro de pregunta incrustada está deshabilitado en este curso.';
$string['whethercorrect_desc'] = 'Si es que a los estudiantes debería o no de dárseles indicaciones sobre si su respuesta fue correcta en preguntas incrustadas. Esto cubre tanto las descripciones textuales \'Correcta\', \'Parcialmente correcta\' o \'Incorrecta\', y cualquier resaltado coloreado que comunica la misma información.';
$string['whichquestion'] = 'Cual pregunta';
