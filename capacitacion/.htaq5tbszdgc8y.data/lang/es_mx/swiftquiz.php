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
 * Strings for component 'swiftquiz', language 'es_mx', version '4.4'.
 *
 * @package     swiftquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} respondieron';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} votaron';
$string['a_responses'] = '{$a} respuestas';
$string['a_students_answered'] = '<b>{$a}</b> estudiantes contestaron al menos una pregunta.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> estudiantes se unieron al examen.';
$string['add'] = 'Añadir';
$string['add_question'] = 'Añadir pregunta';
$string['add_to_quiz'] = 'Añadir al examen';
$string['allow_guests'] = 'Permitir  invitados';
$string['anonymous'] = 'Anónimo';
$string['anonymous_answers'] = 'Respuestas anónimas (puede verse Asistencia)';
$string['anonymous_answers_info'] = 'Las respuestas son  anonimizadas en esta sesión. Su asistencia  sigue siendo grabada.';
$string['answer'] = 'Respuesta';
$string['attempt_started'] = 'Un  intento ya ha sido iniciado por usted; por favor haga clic debajo para continuar a su intento abierto.';
$string['attempts'] = 'Intentos';
$string['attendance'] = 'Asistencia';
$string['attendance_list'] = 'Lista de asistencia';
$string['click_to_show_original_results'] = 'Clic para mostrar resultados originales';
$string['click_to_show_vote_results'] = 'Clic para mostrar resultados de votación';
$string['closing_session'] = 'Cerrando  sesión...';
$string['create_new_question'] = 'Crear nueva pregunta';
$string['default_question_time'] = 'Tiempo predterminado para pregunta';
$string['default_question_time_help'] = 'El tiempo  predeterminado para mostrar cada pregunta.<br>Esto puede ser anulado por preguntas individuales.';
$string['delete_question'] = 'Eliminar pregunta {$a}';
$string['download_attendance_list'] = 'Descargar lista de asistencia';
$string['download_report'] = 'Descargar reporte';
$string['download_responses'] = 'Descargar respuestas';
$string['edit'] = 'Editar';
$string['edit_page_open_session_error'] = 'Usted no puede editar un examen mientras una sesión está abierta.';
$string['edit_question'] = 'Editar pregunta';
$string['end'] = 'Fin';
$string['error_getting_current_results'] = 'Hubo un error al obtener los resultados actuales.';
$string['error_getting_vote_results'] = 'Hubo un error al obtener los resultados de votación.';
$string['error_saving_vote'] = 'Hubo un error al guardar su voto.';
$string['error_starting_vote'] = 'Hubo un error al iniciar la votación.';
$string['error_with_request'] = 'Hubo un error con la solicitud.';
$string['event_attempt_started'] = 'Intento iniciado';
$string['event_question_answered'] = 'Respuesta contestada para intento';
$string['exit'] = 'Salir';
$string['failed_to_end_question'] = 'No  se pudo terminar la pregunta';
$string['fullscreen'] = 'Pantalla completa';
$string['fully_anonymous'] = 'Totalmente anónimo';
$string['fully_anonymous_info'] = 'Ambas, respuestas y asistencia, son anonimizadas completamente en esta sesión.';
$string['goto_session'] = 'Ir a sesión en progreso';
$string['improvise'] = 'Improvisar';
$string['instructions_for_instructor'] = '<h3>Por favor asegúrese de leer las instrucciones:</h3>
    <p>Hay atajos de teclado disponibles, que  pueden ser usados cuando un campo de entrada no  está enfocado.</p>
    <table>
        <tr>
               <th>Control</th>
               <th>Atajo</th>
               <th>Descripción</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Re-encuestar
            </td>
            <td>r</td>
            <td>
                Le permite al instructor re-encuestar la pregunta que recién fue preguntada.
                Esto es lo mismo que iniciar una pregunta desde la <i class="fa fa-bars"></i> Lista desplegable de saltos.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Votar
            </td>
            <td>v</td>
            <td>
                 Permitirle a estudiantes votar en sus respuestas.
                 El instructor puede hacer clic en una respuesta para alternar si  es que debería o  no estar incluida en la votación.
                 Al hacer clic en la barra de la respuesta iniciará una unión de esa respuesta.
                 Tenga en cuenta que esta barra consumirá la barra a la que usted haga clic a continuación.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvisar
            </td>
            <td>i</td>
            <td>
                Muestra una lista de preguntas hechas para improvisar. Escriba la pregunta en el pizarrón y pida entradas con  estas preguntas.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Saltar
            </td>
            <td>j</td>
            <td>
                Mostrar una lista de todas las preguntas planeadas para el examen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Siguiente
            </td>
            <td>n</td>
            <td>
                Continuar a la siguiente pregunta en la lista de preguntas planeadas.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Terminar
            </td>
            <td>e</td>
            <td>
                Terminar la  pregunta actual.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Pantalla completa
            </td>
            <td>f</td>
            <td>
                Mostrar los resultados  en pantalla completa. Las respuestas no aparecerán durante una pregunta, por lo que usted puede conservar esto durante la sesión.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respuesta
            </td>
            <td>a</td>
            <td>
                Darle al instructor una vista de la pregunta con la respuesta correcta seleccionada
.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respuestas
            </td>
            <td>t (toggle)</td>
            <td>
                Ocultar o mostrar las respuestas de los estudiantes.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Abandonar
            </td>
            <td></td>
            <td>
                Salir de la sesión  de examen actual.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Por favor espere a que el instructor inicie el examen.</p>';
$string['instructor_sessions_going'] = 'Ya hay una sesión en progreso. Por favor  haga clic en el botón inferior para ir a la  sesión';
$string['invalid_question_time'] = 'El tiempo de pregunta debe ser un entero de 0 o superior';
$string['join_quiz'] = 'Unirse al examen';
$string['join_quiz_instructions'] = 'Hacer clic debajo para unirse al  examen';
$string['jump'] = 'Saltar';
$string['loading'] = 'Cargando...';
$string['modulename'] = 'swiftquiz';
$string['modulename_help'] = '<p>
    La actividad swiftquiz (examen ágil) le permite al instructor crear y administrar exámenes en tiempo real. Todos los tipos de pregunta de examen pueden ser usados en el swiftquiz.
</p>
<p>
    El instructor tiene la habilidad para saltar a diferentes preguntas mientras se ejecuta una sesión.
    Las respuestas son mostradas en vivo en una gráfica de barras,optimizada para proyectores. También está disponible un   modo de pantalla completa.
    Un  límite de tiempo puede ser configurado para terminar automáticamente la pregunta, o el instructor puede manualmente terminar la pregunta y mover a la siguiente.
</p>';
$string['modulenameplural'] = 'swiftquiz';
$string['multichoice_options'] = 'Opciones de Opción Múltiple';
$string['next'] = 'Siguiente';
$string['no_attempts_found'] = 'No se encontraron intentos';
$string['no_session'] = 'No hay sesión  abierta';
$string['no_sessions_exist'] = 'Aun no existen sesiones.';
$string['no_students_have_joined'] = 'No se han unido estudiantes.';
$string['no_time_limit'] = 'Sin límite de tiempo';
$string['no_time_limit_help'] = 'Active este campo para no tener cronómetro en esta pregunta. <p>El instructor tendrá entonces que hacer clic en el botón  para terminar la pregunta para que la pregunta termine</p>';
$string['nonanonymous_session'] = 'Sesión no anónima';
$string['nonanonymous_session_info'] = 'Esta es una sesión NO anónima. Ambas, su asistencia y respuestas,son grabadas.';
$string['one_student_has_joined'] = '1 estudiante se ha  unido';
$string['pluginadministration'] = 'Administración de swiftquiz';
$string['pluginname'] = 'swiftquiz';
$string['privacy:metadata:core_question'] = 'La actividad swiftquiz almacena información del uso de preguntas en el subsistema core_question.';
$string['privacy:metadata:swiftquiz_attempts'] = 'Detalles acerca del intento de examen para una sesión swiftquiz.';
$string['privacy:metadata:swiftquiz_attempts:responded'] = 'Si es que la  última pregunta que fue preguntada ha sido o no contestada.';
$string['privacy:metadata:swiftquiz_attempts:timefinish'] = 'La hora de cuando la última pregunta en el intento fue terminada.';
$string['privacy:metadata:swiftquiz_attempts:timemodified'] = 'La hora de cuando la última pregunta en el intento fue modificada.';
$string['privacy:metadata:swiftquiz_attempts:timestart'] = 'La hora de cuando la última pregunta en el intento fue iniciada.';
$string['privacy:metadata:swiftquiz_attempts:userid'] = 'El usuario que hizo el intento.';
$string['question'] = 'Pregunta';
$string['question_move_down'] = 'Mover pregunta {$a} abajo';
$string['question_move_up'] = 'Mover pregunta {$a} arriba';
$string['question_time'] = 'Tiempo de pregunta';
$string['question_time_help'] = 'Tiempo  de pregunta en segundos.';
$string['question_will_end_in_x_seconds'] = 'La pregunta terminará en {$a} segundos';
$string['question_will_start_in_x_seconds'] = 'La pregunta iniciará en {$a} segundos';
$string['question_will_start_now'] = 'La pregunta iniciará ahora';
$string['questions'] = 'Preguntas';
$string['quit'] = 'Abandonar';
$string['quiz_not_running'] = '<p>Espere aque el profesor inicie el examen.</p><p>Use el botón  recargar para comprobar si ya ha iniciado.</p>';
$string['repoll'] = 'Re-encuestar';
$string['reports'] = 'Reportes';
$string['responses'] = 'Respuestas';
$string['review'] = 'Revisar';
$string['save_question'] = 'Guardar pregunta';
$string['select_session'] = 'Seleccionar sesión a revisar:';
$string['session'] = 'Sesión';
$string['session_closed'] = 'La sesión ahora está cerrada';
$string['session_name'] = 'Nombre de sesión';
$string['session_name_required'] = 'El nombre de sesión es obligatorio';
$string['short_answer'] = 'Respuesta corta';
$string['short_math_answer'] = 'Respuesta matemática corta';
$string['show_statistic'] = 'Mostrar estadísticas';
$string['show_word_cloud'] = 'Mostrar Nube de Palabras';
$string['showing_original_results'] = 'Mostrar resultados originales';
$string['showing_vote_results'] = 'Mostrando resultados  de votación';
$string['start_session'] = 'Iniciar Sesión';
$string['startquiz'] = 'Iniciar examen';
$string['student'] = 'Estudiante';
$string['swiftquiz:addinstance'] = 'Añadir una instancia de swiftquiz';
$string['swiftquiz:attempt'] = 'Intentar un swiftquiz';
$string['swiftquiz:control'] = 'Controlar un swiftquiz (usualmente solo para instructores)';
$string['swiftquiz:editquestions'] = 'Editar preguntas para un swiftquiz';
$string['swiftquiz:seeresponses'] = 'Ver respuestas de otros estudiantes para calificarlos';
$string['swiftquizsettings'] = 'Configuraciones generales de swiftquz';
$string['teacher_start_instructions'] = '<p>Iniciar un examen para que  los estudiantes lo tomen.</p><p>Defina un nombre de sesión debajo para ayudarse al ver los resultados en una fecha posterior.</p>';
$string['toggle_test'] = 'Insensible';
$string['triggerBtn'] = 'Crear';
$string['unable_to_create_session'] = 'No se puede crear sesión';
$string['view'] = 'Ver';
$string['vote'] = 'Votar';
$string['wait_for_instructor'] = 'Por favor espere a que el instructor inicie la siguiente pregunta.';
$string['wait_for_question_time'] = 'Tiempo para esperar pregunta';
$string['wait_for_question_time_help'] = 'El tiempo a esperar para que inicie una pregunta.';
$string['wait_for_students'] = 'Esperando a que los estudiantes se conecten';
$string['x_seconds_left'] = '{$a}s restantes';
$string['x_students_have_joined'] = '{$a} estudiantes se han unido.';
$string['you_already_voted'] = 'Lo siento, pero usted ya ha votado.';
