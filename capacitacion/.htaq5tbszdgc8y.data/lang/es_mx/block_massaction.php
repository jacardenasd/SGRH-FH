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
 * Strings for component 'block_massaction', language 'es_mx', version '4.4'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'Enviar notificación de contenido cambiado';
$string['action_delete'] = 'Eliminar';
$string['action_duplicate'] = 'Duplicar';
$string['action_duplicatetocourse'] = 'Duplicar a otro curso';
$string['action_duplicatetosection'] = 'Duplicar a sección';
$string['action_hide'] = 'Ocultar';
$string['action_hidedescription'] = 'Ocultar descripción';
$string['action_makeavailable'] = 'Hacer disponible';
$string['action_moveleft'] = 'Sangría inversa (mover a izquierda)';
$string['action_moveright'] = 'Sangría (mover a derecha)';
$string['action_movetosection'] = 'Mover a sección';
$string['action_show'] = 'Mostrar';
$string['action_showdescription'] = 'Mostrar descripción';
$string['actionexecuted'] = 'La acción que solicitó ha sido ejecutada.';
$string['applicablecourseformats'] = 'Formatos de curso aplicables';
$string['applicablecourseformats_description'] = 'El bloque de Acciones masivas solamente estará disponible para los formatos de curso seleccionados. <br />Los predeterminados preseleccionados son los que han sido probados y son soportados por el mantenedor del plugin. Añada otros formatos bajo su propio riesgo.';
$string['backgroundtaskinformation'] = 'La acción que demandó está siendo ejecutada en segundo plano. Usted puede continuar su trabajo mientras espera a que termine.';
$string['blockname'] = 'Acciones Masivas';
$string['blocktitle'] = 'Acciones Masivas';
$string['bulkeditingdisabled'] = 'Para usar este bloque usted necesita habilitar el modo de edición masiva.';
$string['choosecoursetoduplicateto'] = 'Elegir el curso a donde quiere duplicar los módulos seleccionados';
$string['choosesectiontoduplicateto'] = 'Elegir la sección a donde quiere que se dupliquen los módulos de curso seleccionados.';
$string['choosetargetcourse'] = 'Elegir curso destino';
$string['choosetargetsection'] = 'Elegir sección destino';
$string['confirmcourseselect'] = 'Elegir curso';
$string['confirmsectionselect'] = 'elegir sección';
$string['deletecheck'] = 'Confirmar eliminación masiva';
$string['deletecheckconfirm'] = '¿Está seguro de querer eliminar los módulos siguientes?';
$string['deselectall'] = 'Des-seleccionar todo';
$string['duplicatefailed'] = 'No se pudo duplicar módulo de id {$a}';
$string['duplicatemaxactivities'] = 'Número máximo de módulos de curso a duplicar';
$string['duplicatemaxactivities_description'] = 'Número máximo de módulos de curso que pueden ser duplicados al mismo tiempo sin ejecutar el proceso como trabajo en segundo plano. Si se configura a "0" todas las operaciones de duplicación se ejecutarán como trabajos en segundo plano.';
$string['enablebulkediting'] = 'Habilitar edición masiva';
$string['event:course_modules_duplicated'] = 'Módulos de curso duplicados';
$string['event:course_modules_duplicated_failed'] = 'Módulos de curso no se pudieron duplicar';
$string['event:duplicated_completed_list'] = 'Completado {$a->list}.';
$string['event:duplicated_description'] = 'cmid desde \'{$a->src}\' hasta \'{$a->dst}\'';
$string['event:duplicated_failed_description'] = 'Falló duplicado de módulo de curso. cmid: {$a->cmid} error: {$a->error}';
$string['event:duplicated_failed_list'] = 'Falló {$a->list}.';
$string['event:duplicated_summary'] = 'Duplicado de módulo de curso ha sido completado. Resumen: {$a->countcomplete} Completados, {$a->countfailed} Fallidos.';
$string['invalidaction'] = 'Acción desconocida: {$a}';
$string['invalidcourseid'] = 'ID de curso inválida';
$string['invalidcoursemodule'] = 'Módulo de curso inválido';
$string['invalidmoduleid'] = 'ID de curso inválida: {$a}';
$string['jsonerror'] = 'Error de codificación: Formato JSON inválido';
$string['keepsectionnum'] = 'Conservar número original de sección';
$string['limittoenrolled'] = 'Limitar lista de cursos destino a cursos en los cuales el usuario está inscrito.';
$string['limittoenrolled_description'] = 'Si se habilita la característica de "Duplicar a otro curso" en la selección de curso, estará limitada a cursos en los cuales el usuario está inscrito. Se recomienda habilitar esto par a instancias con muchos cursos, porque el no limitar los cursos es probable que resulte en problemas de desempeño y desconexiones. El deshabilitar esta opción es bajo su propio riesgo.';
$string['massaction:activityshowhide'] = 'AcciónMasiva: Mostrar/Ocultar módulos';
$string['massaction:addinstance'] = 'Añadir un nuevo bloque de Acciones Masivas';
$string['massaction:delete'] = 'MassAction: Eliminar módulos';
$string['massaction:descriptionshowhide'] = 'MassAction: Mostrar/Ocultar descripciones';
$string['massaction:duplicate'] = 'MassAction: Duplicar módulos';
$string['massaction:duplicatetocourse'] = 'MassAction: Duplicar al Curso';
$string['massaction:indent'] = 'MassAction: Indentar módulos';
$string['massaction:movetosection'] = 'MassAction: Mover a sección';
$string['massaction:sendcontentchangednotifications'] = 'Enviar notificaciones de contenido cambiado';
$string['massaction:use'] = 'Usar el bloque de Acciones Masivas';
$string['modulename'] = 'Nombre de actividad';
$string['moduletype'] = 'Tipo de actividad';
$string['multipleinstances'] = 'No  debe haber instancias múltiples de este bloque en la misma página. <br />Por favor quite instancias adicionales.';
$string['newsection'] = 'Nueva sección';
$string['noaction'] = 'Sin acción especificada';
$string['noactionsavailable'] = 'Usted no tiene los permisos para ejecutar ninguna de las operaciones que este bloque está proporcionando.';
$string['nocaptobackup'] = 'Usted no tiene suficientes permisos para realizar una copia de respaldo en el curso.';
$string['nocaptorestore'] = 'Usted no tiene suficientes permisos para realizar una restauración en el curso.';
$string['noitemselected'] = 'Por favor seleccione al menos un ítem para aplicarle la acción masiva';
$string['nomovingtargetselected'] = 'Por favor seleccione una sección destino';
$string['notargetcourseidspecified'] = 'No se ha especificado id de curso destino';
$string['pluginname'] = 'Acciones Masivas';
$string['privacy:metadata'] = 'Este bloque solamente ofrece la posibilidad de aplicar operaciones estándar sobre múltiples módulos de curso al mismo tiempo. Por lo tanto, no hay datos almacenados por este bloque.';
$string['sectionnotexist'] = 'La sección destino no existe';
$string['sectionrestricted'] = 'La sección de origen está restringida. Usted no tiene permitido aplicar una acción a actividades en sección {$a}.';
$string['sectionselect'] = 'Selección de sección';
$string['sectionselect_help'] = 'Usted solamente puede seleccionar secciones que incluyen al menos un módulo de curso. Adicionalmente, al usar el formato de curso de Mosaicos o Un Tópico, usted solamente puede seleccionar secciones que ya sean actualmente visibles.';
$string['selectall'] = 'Seleccionar todo';
$string['selectallinsection'] = 'Seleccionar todo en sección';
$string['sourcecourseidlost'] = 'ID de curso fuente no fue encontrada';
$string['unusable'] = 'La funcionalidad de acción masiva no puede ser usada en este formato de curso o en el tema actual';
$string['usage'] = 'Uso del Bloque de Acciones Masivas';
$string['usage_help'] = '<p>Este bloque les permite a los instructores realizar acciones sobre varios recursos o actividades simultáneamente en la vista de clase, en lugar de que tengan que realizar acciones repetidas sobre ítems individuales.</p>
<p>Para usar este bloque, debe habilitarse JavaScript en su navegador y usted debe estar  con el modo de edición activado en la página inicial del curso. Solamente están soportados los cursos en formatos de Tópicos/temas, Semanal, Topcoll, Onetopic y Tiles (Mosaicos).</p>
<p>Las acciones soportadas incluyen eliminación masiva, indentación/des-indentación, ocultar/revelar y mover.
Para seleccionar elementos sobre de los cuales realizar acciones, simplemente active la casilla a la izquierda del elemento en la página inicial del curso, o Usted puede seleccionar todos los elementos en una sección usando el bloque. Para realizar las acciones, haga clic sobre de la acción que quiera realizar dentro del bloque.</p>';
$string['withselected'] = 'Con seleccionados';
