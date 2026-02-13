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
 * Strings for component 'assignsubmission_comparativejudgement', language 'es_mx', version '4.4'.
 *
 * @package     assignsubmission_comparativejudgement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addexemplar'] = 'Añadir ejemplo';
$string['alwayssameside'] = 'El juez siempre eligió el mismo lado';
$string['avgtimetakencomparing'] = 'Tiempo promedio empleado';
$string['body'] = 'Cuerpo';
$string['body_help'] = 'Cuerpo del mensaje a enviar a los jueces, los reemplazablesdisponibles son:
       [firstname]
       [lastname]
       [fullname]
       [assignurl]
       [judgeurl]
       [assignname]';
$string['bodydefault'] = '[fullname],
Como parte de la calificación de la tarea [assignname], se le solicita que compare otras entregas, puede hacerlo yendo a [judgeurl].';
$string['calculategrades'] = 'Calcular puntajes';
$string['calculategradesfirst'] = 'Calcule las puntuaciones antes de copiar las calificaciones al libro de calificaciones.';
$string['chooseleft'] = 'Elige a la izquierda';
$string['chooseright'] = 'Elige a la derecha';
$string['comment'] = 'Comentario';
$string['commentpublished'] = 'Publicado';
$string['comments'] = 'Comentarios';
$string['commentsimported'] = 'Comentarios importados';
$string['comparativejudgement:manageemails'] = 'Gestionar Emails';
$string['comparativejudgement:manageexemplars'] = 'Gestionar envíos';
$string['comparativejudgement_allowcompareexemplars'] = 'Permitir comparaciones de pares de ejemplos';
$string['comparativejudgement_allowcompareexemplars_help'] = 'Si esta configuración está deshabilitada, los jueces nunca verán pares de ejemplares para comparar.';
$string['comparativejudgement_allowrepeatcomparisons'] = 'Habilitar comparaciones repetidas';
$string['comparativejudgement_allowrepeatcomparisons_help'] = 'Si esta configuración está deshabilitada, a los jueces ya no se les presentarán nuevos pares una vez que hayan comparado cada envíos con todos las demás envíos una vez.';
$string['comparativejudgement_enablecomments'] = 'Habilitar comentarios de comparación';
$string['comparativejudgement_introduction'] = 'Introduction for judges';
$string['comparativejudgement_judgementswhileeditable'] = 'Permitir que el juez haga comparaciones mientras su envío es editable';
$string['comparedsubmission'] = 'Envío comparado';
$string['comparisondone'] = 'Envío hecho';
$string['comparisonprogress'] = 'Comparación {$a->number} de {$a->required}';
$string['copytogradebook'] = 'Copiar calificaciones al Libro de calificaciones';
$string['delay'] = 'Retraso';
$string['delaydetail'] = '{$a->delay} (actualmente {$a->current})';
$string['delaydetailnever'] = 'nunca';
$string['deletecomparison'] = 'Eliminar comparación';
$string['deleteemail'] = 'Eliminar Email';
$string['deleteexemplar'] = 'Eliminar ejemplo';
$string['docomparison'] = 'Hacer comparación';
$string['dofakecomparison'] = 'Hacer comparación falsa (solo para prueba)';
$string['downloadrawjudgedata'] = 'Datos crudos de comparación';
$string['editemail'] = 'Editar Email';
$string['editexemplar'] = 'Editar ejemplo';
$string['enabled'] = 'Juicio comparativo';
$string['enabled_help'] = 'Si está habilitado, las presentaciones se califican mediante un juicio comparativo.';
$string['errorexecutingscript'] = 'Error al ejecutar RScript';
$string['event:commentsimported'] = 'Comentarios de comparación importados';
$string['event:comparisondeleted'] = 'Comparaciones eliminadas';
$string['event:comparisonmade'] = 'Comparaciones hechas';
$string['event:gradescalculated'] = 'Calificaciones calculadas';
$string['event:gradesimported'] = 'Calificaciones importadas';
$string['event:judgerequestemail_deleted'] = 'Juez solicita eliminar Email';
$string['event:judgerequestemail_modified'] = 'Juez solicita Email modificado';
$string['event:judgerequestemail_sent'] = 'Juez solicita Email enviado';
$string['exemplartitle'] = 'Título';
$string['fakerole_assignment_submitted'] = 'Usuarios con envíos completados';
$string['fakerole_gradable_users'] = 'Usuarios calificables';
$string['firstcomparison'] = 'Primera comparación';
$string['gradescopied'] = 'Calificaciones copiadas al Libro de calificaciones';
$string['importcomments'] = 'Importar comentarios';
$string['include'] = 'Incluir en calificación';
$string['judge'] = 'Juez';
$string['judgeid'] = 'ID de Juez';
$string['judgementstartdate'] = 'Fecha de inicio para comparaciones';
$string['judges'] = 'Jueces';
$string['lastcalculation'] = 'Último cálculo de calificaciones ent: {$a}';
$string['lastcomparison'] = 'Última comparación';
$string['lastreliability'] = 'Última confiabilidad: {$a}';
$string['left'] = 'Izquierda';
$string['loosingsubmission'] = 'Perdiendo envío';
$string['loosingsubmissionid'] = 'Perdiendo envío';
$string['losses'] = 'Pérdidas';
$string['managecomparisoncomments'] = 'Comentarios de comparación';
$string['managecomparisons'] = 'Gestionar comparaciones';
$string['managecomparisonswithcount'] = 'Gestionar comparaciones ({$a})';
$string['manageexemplars'] = 'Gestionar ejemplos';
$string['manageexemplarswithcount'] = 'Gestionar ejemplos ({$a})';
$string['managejudgerequestemail'] = 'Gestionar comparación solicita Emails';
$string['managejudgerequestemailintro'] = 'Se enviarán correos electrónicos recordatorios a todos los jueces elegibles. Se enviarán según un cronograma que comenzará a partir de la fecha de inicio de la comparación, si se estableció; de lo contrario, la fecha límite de presentación o la fecha de vencimiento. Si se utiliza la fecha límite o la fecha de vencimiento, las extensiones que se apliquen a los usuarios afectarán la fecha en que reciben el recordatorio.';
$string['managejudges'] = 'Gestionar jueces';
$string['managejudgeswithcount'] = 'Gestionar jueces ({$a})';
$string['managesubmissions'] = 'Gestionar envíos';
$string['managesubmissionswithcount'] = 'Gestionar envíos ({$a})';
$string['maxjudgementsperuser'] = 'Comparaciones máximas por juez';
$string['maxtimetakencomparing'] = 'Tiempo máximo empleado';
$string['minjudgementspersubmission'] = 'Comparaciones mínimas por envío';
$string['minjudgementsperuser'] = 'Comparaciones mínimas por juez';
$string['mintimetakencomparing'] = 'Mínimo tiempo empleado';
$string['never'] = 'Nunca';
$string['newreminderemail'] = 'Email nuevo recordatorio';
$string['noofcomparisons'] = 'Comparaciones hechas';
$string['noofcomparisonsreceived'] = 'Comparaciones recibidas';
$string['nothingtocompare'] = 'No hay comparaciones para comparar';
$string['pathtorscript'] = 'Ruta hacia Rscript';
$string['pluginname'] = 'Juicio comparativo';
$string['privacy:judgement'] = 'Comparación recibida';
$string['privacy:judgementmade'] = 'Comparación hecha';
$string['privacy:metadata:assignmentid'] = 'ID de Tarea';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignmentid'] = 'ID de módulo Tarea';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignsubmission_comp:tablepurpose'] = 'Comparaciones realizadas por los jueces';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignsubmission_compsubs:tablepurpose'] = 'Envíos de tareas que han sido comparados y comentarios relacionados';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignsubmission_rankingsub:tablepurpose'] = 'Puntajes que se han generado automáticamente para un envío';
$string['privacy:metadata:assignsubmission_comparativejudgement:comments'] = 'Comentarios a comparación';
$string['privacy:metadata:assignsubmission_comparativejudgement:judgementid'] = 'Id. de comparación relacionada';
$string['privacy:metadata:assignsubmission_comparativejudgement:rankingid'] = 'Id. de clasificación relacionada';
$string['privacy:metadata:assignsubmission_comparativejudgement:score'] = 'Auto-generar puntaje para envío de tarea';
$string['privacy:metadata:assignsubmission_comparativejudgement:submissionid'] = 'submissionid relacionado';
$string['privacy:metadata:assignsubmission_comparativejudgement:timetaken'] = 'Tiempo empleado';
$string['privacy:metadata:assignsubmission_comparativejudgement:usermodified'] = 'Juez que modificó el registro';
$string['privacy:metadata:assignsubmission_comparativejudgement:winningsubmission'] = 'Envío ganador elegido durante comparación';
$string['privacy:metadata:assignsubmission_comparativejudgement:winningsubmissionposition'] = 'Posición de envío ganador elegido durante comparación';
$string['privacy:metadata:submissionpurpose'] = 'El ID de envío que se vincula a los envíos del usuario.';
$string['privacy:ranking'] = 'Clasificación';
$string['remainingjudgements'] = 'Mínimas comparaciones restantes:';
$string['right'] = 'Derecha';
$string['savechangesandaddanother'] = 'Guardar cambios y añadir otro';
$string['score'] = 'Puntaje';
$string['sendjudgerequestemails'] = 'Enviar comparación solicita emails';
$string['sidespicked'] = 'Proporción de lados elegidos';
$string['sshproxy'] = 'Proxy SSH Rscript';
$string['sshproxy_help'] = 'Comando SSH para conectarse a un servidor remoto con R instalado, por ejemplo, ssh myusername@serverwithrinstalled.orgname.com';
$string['stopjudging'] = 'Terminar juzgamiento';
$string['subject'] = 'Asunto';
$string['subjectdefault'] = 'asuntopredeterminado';
$string['submission'] = 'Envío';
$string['submissionid'] = 'Id del envío';
$string['timetaken'] = 'Tiempo empleado';
$string['timetakencomparing'] = 'Tiempo empleado';
$string['userupload'] = 'Envío subido';
$string['viewassignment'] = 'Ver';
$string['viewexemplar'] = 'Ver';
$string['winningposition'] = 'Posición ganadora';
$string['winningsubmission'] = 'Envío ganador';
$string['winningsubmissionid'] = 'Envío ganador';
$string['wins'] = 'Victorias';
