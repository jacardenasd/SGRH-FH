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
 * Strings for component 'local_aiquestions', language 'es_mx', version '4.4'.
 *
 * @package     local_aiquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aiquestions'] = 'Preguntas de IA';
$string['backtocourse'] = 'Regresar al curso';
$string['createdquestionssuccess'] = 'Preguntas creadas exitosamente';
$string['createdquestionsuccess'] = 'Pregunta creada exitosamente';
$string['createdquestionwithid'] = 'Pregunta creada con id';
$string['cronoverdue'] = 'Al parecer, el trabajo agendado de cron no se está ejecutando;
la generación de preguntas depende de los trabajos ad-hoc que son creados por el trabajo de cron; por favor compruebe sus configuraciones de cron.
Vea <a href="https://docs.moodle.org/all/es/Cron#Configuraci.C3.B3n_de_cron_en_su_sistema">
https://docs.moodle.org/all/es/Cron#Configuraci.C3.B3n_de_cron_en_su_sistema
</a> para más información.';
$string['errornotcreated'] = 'Error: las preguntas no fueron creadas';
$string['generate'] = 'Generar Preguntas';
$string['generatemore'] = 'Generar Más Preguntas';
$string['generating'] = 'Generando sus preguntas... (Usted puede abandonar esta página con confianza, y después podrá comprobar en el banco de preguntas)';
$string['generationfailed'] = 'La generación de preguntas falló después de {$a} intentos';
$string['generationtries'] = 'Número de intentos de abrir OpenAI: <b>{$a}</b>';
$string['gotoquestionbank'] = 'Ir al Banco de preguntas';
$string['language'] = 'Idioma';
$string['languagedesc'] = 'Por favor seleccione aquí el Idioma que quiere usar para la generación de preguntas<br>
Tenga en cuenta que algunos idiomas están menos soportados que otros en ChatGPT..';
$string['numofquestions'] = 'Número de Preguntas';
$string['numofquestionsdesc'] = 'Por favor seleccione el Número de Preguntas que desea generar';
$string['numoftries'] = '<b>{$a}</b> intentos';
$string['numoftriesdesc'] = 'Por favor escriba aquí el Número de intentos que desea enviar a OpenAI';
$string['numoftriesset'] = 'Número de intentos';
$string['openaikey'] = 'Clave API de OpenAI';
$string['openaikeydesc'] = 'Por favor escriba aquí su Clave API de OpenAI<br>
Usted puede obtener su clave API de <a href="https://platform.openai.com/account/api-keys">https://platform.openai.com/account/api-keys</a><br>
Seleccione el botón para "+ Create New Secret Key" y copie la clave a este campo.<br>
Tenga en cuenta que usted necesita tener una cuenta de OpenAI que incluye configuraciones de forma-de-pago para obtener una clave API..';
$string['outof'] = 'de entre';
$string['personalprompt'] = '\'Prompt\' personal';
$string['personalpromptdesc'] = 'Por favor escriba aquí su \'prompt\' personal;
El \'prompt\' es la explicación a ChatGPT sobre cómo generar las preguntas<br>
Usted debería incluir estos dos reemplazables: {{numofquestions}} y {{language}}';
$string['pluginname'] = 'Generador de Texto IA a preguntas';
$string['pluginname_desc'] = 'Este plugin le permite generar preguntas de un texto';
$string['pluginname_help'] = 'Use este plugin desde el menú de administración del curso';
$string['preview'] = 'Pre-visualizar preguntas en pestaña nueva';
$string['privacy:metadata'] = 'El generador de Texto IA a preguntas no almacena ningún dato personal';
$string['story'] = 'Historia';
$string['storydesc'] = 'Por favor escriba aquí su Historia';
$string['tasksuccess'] = 'El trabajo de generación de pregunta fue creado exitosamente';
$string['usepersonalprompt'] = 'Usar \'prompt\' personal';
$string['usepersonalpromptdesc'] = 'Por favor seleccione aquí si desea usar su \'prompt\' personal';
