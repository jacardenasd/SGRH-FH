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
 * Strings for component 'flexquiz', language 'es_mx', version '4.4'.
 *
 * @package     flexquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Usted ha completado esta actividad.';
$string['aiapikeydescription'] = 'La clave requerida para comunicar con el API.';
$string['aiapikeyfield'] = 'Clave API';
$string['aierror'] = 'AI no está configurada apropiadamente (Esto se hace vía las configuraciones del plugin por un administrador.): {$a}';
$string['aiheader'] = 'Opciones IA';
$string['ainoapikey'] = 'Debe especificarse una clave API';
$string['ainotset'] = 'Necesita habilitarse la configuración \'Usar IA\'';
$string['ainourl'] = 'Necesita especificarse una URL.';
$string['aiurldescription'] = 'URL base de la API para mandar las solicitudes.';
$string['aiurlfield'] = 'URL de base API';
$string['alertactive'] = '¡Activo!';
$string['approximately'] = 'Se requieren respuestas correctas consecutivas: Alrededor de {$a} más respuestas correctas necesarias para que este ciclo cumpla el requisito.ore correct answers needed this cycle to meet the requirement.';
$string['availablefrom'] = 'Se vuelve disponible en {$a}.';
$string['backtocourse'] = 'Regresar al curso';
$string['ccar'] = 'Se requieren respuestas correctas consecutivas';
$string['ccar_help'] = 'El número de respuestas correctas consecutivas necesarias para considerar una pregunta dominada. Solamente cuando el número dado es alcanzado una pregunta no reaparecerá antes de la transición al siguiente ciclo.';
$string['ccasleft'] = 'respuestas correctas consecutivas necesarias: Al menos {$a}  más respuestas correctas necesarias para que este ciclo cumpla el requisito.';
$string['cleanupchildren'] = 'Limpieza de hijos Flexquiz';
$string['closesat'] = 'Cierra en {$a}.';
$string['createcyclegrades'] = 'Añadir calificaciones para ciclos completados';
$string['createcyclegrades_help'] = 'Configurar esto a \'si\' cuando usted desea añadir calificaciones para cada ciclo completado. Las calificaciones del ciclo serán implementadas como actividades \'tarea\' que pueden ser configuradas para completarse y ser calificadas en finalización del ciclo.';
$string['currentcycle'] = 'Ciclo actual: {$a}';
$string['currentlyactivequiz'] = 'Examen activo actualmente: {$a}';
$string['currentstanding'] = 'Promedio actual: {$a}';
$string['customtimelimit'] = 'Límite de tiempo del examen';
$string['customtimelimit_help'] = 'Configura el límite de tiempo aplicado a cada examen creado.';
$string['cycleduration'] = 'Duración del ciclo';
$string['cyclegradesvisible'] = 'Hacer calificaciones del ciclo visibles para todos';
$string['cyclegradesvisible_help'] = 'Configurar esto a \'si\' para hacer que las actividades de tarea que contengan las calificaciones del ciclo sean visibles para todos.';
$string['cyclegradingheader'] = 'Calificación del ciclo';
$string['cyclesheader'] = 'Ciclos';
$string['dateformat'] = 'F jS Y, H:i';
$string['emptyquiz'] = 'Matriz de preguntas vacía regresada de IA. No se creo examen.';
$string['enddate'] = 'La actividad finaliza en';
$string['enddate_help'] = 'No son creados más exámenes para este Flex Quiz después de la fecha aquí dada.';
$string['endsat'] = 'Termina en: {$a}';
$string['faultyairesponse'] = 'No se pudo analizar la respuesta de IA. Se saltó la creación del examen.';
$string['fewccasleft'] = 'Aun hay varios intentos de respuestas correctas más necesarios para este ciclo.';
$string['flexquiz:addinstance'] = 'Añadir un nuevo Flex Quiz';
$string['flexquiz:view'] = 'Ver información de Flex Quiz';
$string['flexquizname'] = 'Nombre de Flex Quiz';
$string['generalheader'] = 'General';
$string['generaltab'] = 'General';
$string['gradingactivitydescription'] = 'Calificación para {$a}';
$string['gradingactivityname'] = '{$a->name} - ciclo {$a->number} (ciclo terminó en {$a->date})';
$string['gradingactivityshortname'] = '{$a->name} - ciclo {$a->number}';
$string['headeraverage'] = 'Desempeño promedio';
$string['headercycleattempts'] = 'Intentos de examen en este ciclo';
$string['headername'] = 'Nombre';
$string['headerpercentage'] = 'Situación actual';
$string['headerquestion'] = 'Pregunta';
$string['headerquestionattempts'] = 'Respuestas correctas consecutivas';
$string['headerquestions'] = 'Desempeño por pregunta';
$string['headerstatus'] = 'Estado';
$string['headertotalattempts'] = 'Exámenes intentados';
$string['iteration'] = 'Iteración';
$string['lastcycle'] = 'Último ciclo alcanzado';
$string['maxcountreached'] = 'Número máximo de exámenes alcanzado para este ciclo,';
$string['maxquestions'] = 'Número máximo de preguntas por examen';
$string['maxquizcount'] = 'Número máximo de exámenes por ciclo';
$string['minquestions'] = 'Número mínimo de preguntas por examen';
$string['minquestions_help'] = 'Usar solamente esta configuración en modo no-IA. En modo IA esto está determinado por la IA.';
$string['minquestionsnotallowed'] = 'El mínimo no puede ser configurado en modo IA';
$string['modulename'] = 'Flex Quiz';
$string['modulenameplural'] = 'Flex Quizes';
$string['nextcyclestart'] = 'Siguiente ciclo comienza: {$a}';
$string['noaccess'] = 'Usted no tiene acceso a esta actividad';
$string['noactivequizzes'] = 'Sin exámenes activos.';
$string['noaierror'] = 'Falló IA, Póngase en contacto con su administrador.';
$string['noccasleft'] = 'Requisito de respuestas correctas consecutivas cumplido para este ciclo.';
$string['nodeadline'] = 'No se ha configurado fecha límite.';
$string['noparent'] = 'No se ha configurado examen paterno';
$string['norandomquestionswithai'] = 'El lote de preguntas de donde está basado su examen Flex contiene preguntas del tipo \'aleatorio\'. Las preguntas del tipo \'aleatorio\' aun no están soportadas por nuestra IA.';
$string['nostats'] = 'Aun no hay estadísticas';
$string['numberofstudents'] = 'Número de estudiantes: {$a->numberofstudents}.';
$string['numbersfieldinvalid'] = 'Dato ingresado debe ser un número';
$string['parentquiz'] = 'Examen paterno';
$string['parentquiz_help'] = 'El examen que proporciona el lote de preguntas usadas por cada examen creado.';
$string['pauseduration'] = 'Pausa obligatoria entre exámenes';
$string['pauseduration_help'] = 'Indica por cuanto tiempo debe esperar un estudiante después de completar un examen hasta que pueda iniciar el siguiente.';
$string['performancetab'] = 'Desempeño';
$string['pluginadministration'] = 'Flex Quiz';
$string['pluginname'] = 'Flex Quiz';
$string['privacy:metadata:danube.education_data'] = 'Los datos enviados a la API danube.education.';
$string['privacy:metadata:danube.education_data:cycle'] = 'El ciclo actual donde está el estudiante.';
$string['privacy:metadata:danube.education_data:question_scores'] = 'Puntajes individuales de pregunta de exámenes hijos.';
$string['privacy:metadata:danube.education_data:student'] = 'La ID de Moodle del estudiante';
$string['privacy:metadata:flexquiz_grades_question'] = 'Información acerca de las calificaciones de un estudiante para una pregunta Flexquiz.';
$string['privacy:metadata:flexquiz_grades_question:attempts'] = 'El número de intentos a la pregunta.';
$string['privacy:metadata:flexquiz_grades_question:rating'] = 'La valoración del estudiante para la pregunta.';
$string['privacy:metadata:flexquiz_stats'] = 'Información global acerca del desempeño del estudiante sobre todos los Flexquizzes.';
$string['privacy:metadata:flexquiz_stats:attempts'] = 'El número de intentos en todos los Flexquizzes.';
$string['privacy:metadata:flexquiz_stats:fraction'] = 'Un valor que representa la calificación / el progreso global del usuario.';
$string['privacy:metadata:flexquiz_student'] = 'Información acerca del estudiante para un Flexquiz.';
$string['privacy:metadata:flexquiz_student:cyclenumber'] = 'El ciclo actual donde está el estudiante.';
$string['privacy:metadata:flexquiz_student:graded'] = 'Señalización que dice si el estudiante ha sido calificado.';
$string['privacy:metadata:flexquiz_student:instances'] = 'El número de exámenes hijos que el estudiante obtuvo para este Flexquiz.';
$string['privacy:metadata:flexquiz_student:instances_this_cycle'] = 'El número de exámenes hijos que el estudiante obtuvo para este Flexquiz durante el ciclo actual.';
$string['questionsheader'] = 'Preguntas';
$string['quizclosed'] = 'Cerrado.';
$string['randomquestion'] = 'Pregunta aleatoria de categoría:';
$string['requirementsmet'] = 'Todos los requisitos cumplidos.';
$string['roundupcycle'] = 'Ciclo de redondeo (Avanzado)';
$string['roundupcycle_help'] = 'El seleccionar esta opción causará que el último ciclo sea manejado de forma diferente. La configuración \' respuestas correctas consecutivas requeridas\' será configurada a 1 para este ciclo. Tenga presente que esta configuración también afectará los exámenes flex que no tengan ciclos configurados, porque aquellos serán tratados como si solamente tuvieran un ciclo.';
$string['roundupstatsvalue'] = 'Desempeño promedio de ciclo de redondeo: {$a->roundupavg}%.';
$string['sectionname'] = 'Sección del examen';
$string['startdate'] = 'Comenzar actividad a';
$string['startdate_help'] = 'Configurar la hora de inicio para el primer examen.';
$string['startedat'] = 'Comenzado en: {$a}';
$string['startsat'] = 'Comienza en: {$a}';
$string['statistics'] = 'EStadíaticas';
$string['statsvalue'] = 'Desempeño promedio: {$a->average}%.';
$string['toofewquestions'] = 'El producto de [máximo de preguntas] * [máximo de exámenes] no puede ser menor al número total de  preguntas disponibles.';
$string['useai'] = 'Usar IA';
$string['useaidescription'] = 'Usar una IA para elegir preguntas para exámenes hijos. Requiere que una conexión a una IA esté presente  y configurada correctamente.';
$string['usesai'] = 'Usar IA';
$string['usesai_help'] = 'Se necesita una conexión a una IA. Su plugin \'felx quiz\' necesita estar configurado apropiadamente.';
