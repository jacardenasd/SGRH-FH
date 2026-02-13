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
 * Strings for component 'block_completion_levels', language 'es_mx', version '4.4'.
 *
 * @package     block_completion_levels
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiescompletion'] = 'Finalización de actividades';
$string['activitiestracking'] = 'Monitoreo de actividades';
$string['adminpix'] = 'Predeterminado del sitio:';
$string['allstudents'] = 'Todos los estudiantes';
$string['badge'] = 'Insignia';
$string['badgeconfiguration'] = 'Configuración de insignia';
$string['badgestouse'] = 'Insignias a usar';
$string['completion'] = 'Finalización';
$string['completion_levels:addinstance'] = 'Añadir un nuevo bloque de Niveles de Finalización';
$string['completion_levels:myaddinstance'] = 'Añadir un nuevo bloque de Niveles de Finalización a la página de Mi hogar';
$string['completion_levels:overview'] = 'Ver vista general del curso de Niveles de Finalización para todos los estudiantes';
$string['completionrequiredforblockinstance'] = 'La actividad necesita ser completada, para completar el bloque  {$a} .';
$string['config:anonymouswalloffame'] = 'Mantener anónimo el muro de fama';
$string['config:anonymouswalloffame_help'] = 'Si es que los nombres de estudiantes deberían o no estar ocultos en el muro de fama';
$string['config:blocktitle'] = 'Título personalizado del bloque';
$string['config:blocktitle_help'] = 'Puede haber múltiples instancias del bloque de Niveles de Finalización.<br>
Usted puede usar diferentes bloques de Niveles de Finalización para monitorear diferentes conjuntos de actividades o recursos.<br>
Por ejemplo usted podría monitorear el progreso en tareas en un bloque y monitorear los exámenes en otro bloque.<br>
Por esta razón, usted puede anular el título predeterminado y configurar un título del bloque más apropiado para cada instancia.';
$string['config:completionnotifications'] = 'Notificaciones de finalización del bloque';
$string['config:displayprogressover'] = 'Mostrar progreso como valor respecto de';
$string['config:displayprogressover_help'] = 'Mostrar progreso como un valor respecto de este número. Si está vacío, el progreso se mostrará como un porcentaje.';
$string['config:filterinactiveusers'] = 'Filtrar descartando a usuarios con inscripción inactiva';
$string['config:filterinactiveusers_help'] = 'Descartar del muro de fama y la vista general a los usuarios cuyos estados de inscripciones sea suspendidos, o que la inscripción haya expirado o no haya iniciado.';
$string['config:group'] = 'Visiblemente solamente al grupo';
$string['config:group_help'] = 'Seleccionar un grupo limita la vista de este bloque a solamente ese grupo.';
$string['config:levels_pix'] = 'Insignias personalizadas';
$string['config:levels_pix_help'] = 'Nombrar los archivos  [nivel].png, desde 0 hasta el nivel máximo deseado. Por ejemplo: 0.png, 1.png, etc. El tamaño recomendado de imagen es 1150x150.';
$string['config:markactivities'] = 'Marcar las actividades requeridas en la página del curso';
$string['config:markactivities_help'] = 'Si se configura a \'Si\', las actividades configuradas a requerir finalización por esta instancia de bloque serán marcadas con una estrella cuando se vea la página del curso.';
$string['config:maxlevel'] = 'Nivel máximo';
$string['config:maxlevel_help'] = 'Nivel máximo a usar. Los niveles se extenderán desde 0 hasa &lt;maxlevel&gt; (por ejemplo, habrá &lt;maxlevel&gt;+1 niveles).';
$string['config:sendcompletionnotifications'] = 'Enviar notificaciones del bloque de finalización';
$string['config:sendcompletionnotifications_help'] = 'Enviar notificaciones cuando un estudiante logre 100% en este bloque';
$string['config:sendnotificationsto'] = 'enviar notificación a';
$string['config:showonlycogroupmembers'] = 'Restringir a grupos de usuario';
$string['config:showonlycogroupmembers_help'] = 'En el muro de fama, mostrar solamente estudiantes que pertenecen al mismo grupo del usuario.';
$string['config:trackingmethod'] = 'Método de monitoreo';
$string['config:trackingmethod_help'] = 'Determina la métrica a usar para monitorear actividades.<br>
Si "Finalización" es seleccionada, los estudiantes harán progreso para la actividad si lo completan (en el sentido estándar de Finalización, como por ejemplo cuando la casilla es activada en la página del curso).<br>
Si "Calificación relativa" es seleccionada, los estudiantes harán progreso para la actividad de manera relativa a su calificación.<br>
En ambos casos, el progreso para una actividad es ponderado (vea debajo).';
$string['config:usealternatenames'] = 'Usar nombres alternos';
$string['config:usealternatenames_help'] = 'Usar nombres alternos de usuarios (si estuvieran configurados) para mostrarse en el muro de fama.';
$string['config:walloffamesize'] = 'Número de estudiantes';
$string['config:walloffamesize_help'] = 'El número de estudiantes mostrados en la pared dela fama. seleccione \'Sin estudiantes\' para no mostrar ningún muro de fama.';
$string['contextualizedstring'] = '{$a->context}: {$a->content}';
$string['custompix'] = 'Personalizado:';
$string['defaultblocktitle'] = 'Nivel de Finalización';
$string['defaultpix'] = 'Predeterminado:';
$string['deletebadgeconfirmation'] = '¿Está seguro de querer eliminar las insignias personalizadas para este bloque? Esto eliminará las insignias actualmente guardadas y los archivos en el área de borrador de abajo. esta acción no puede deshacerse.';
$string['deletecustompix'] = 'Eliminar personalizado';
$string['details'] = 'Detalles';
$string['dotrack'] = 'Hacer monitoreo';
$string['enablecustomlevelpix'] = 'Usar insignias de nivel personalizado';
$string['hiddenfromstudents'] = 'Esta actividad está oculta de los estudiantes';
$string['hiddenfromstudents_help'] = 'Esta actividad está oculta para los estudiantes. Usted aun puede monitorearla, pero tenga presente que los estudiantes no podrán completarla.';
$string['hiddenmodule'] = 'Módulo oculto';
$string['levela'] = 'Nivel {$a}';
$string['message:blockcompleted:fullmessage:completion'] = '{$a->username} acaba d elograr 100% en el bloque *{$a->blockname}* en {$a->coursename}, al finalizar el {$a->cmname} {$a->modname}.';
$string['message:blockcompleted:fullmessage:grade'] = '{$a->username} acaba de lograr 100% en el bloque *{$a->blockname}* en {$a->coursename}, al conseguir la máxima calificación en el {$a->cmname} {$a->modname}.';
$string['message:blockcompleted:shortmessage'] = '{$a->username} acaba de lograr 100% en el bloque {$a->blockname} en {$a->coursename}.';
$string['message:blockcompleted:title'] = '[{$a->coursename}] {$a->blockname} completado por {$a->username}';
$string['messageprovider:blockcompleted'] = 'Notificaciones del Bloque de Finalización';
$string['no_blocks'] = 'No se han configurado bloques de Niveles de Finalización para sus cursos.';
$string['noactivitiestracked'] = 'Actualmente ninguna actividad está monitoreada por este bloque. No será mostrado a estudiantes.<br> Para cambiar esto y comenzar a monitorear actividades, por favor configure este bloque.';
$string['nocompletion'] = 'Sin finalización configurada para esta actividad.';
$string['nograde'] = 'Sin calificación o elemento de calificación configurado para esta actividad.';
$string['nostudents'] = 'Sin estudiantes';
$string['notcompletedyet'] = 'Aun no completado';
$string['nothingtoshow'] = 'Nada que mostrar.';
$string['notrackableactivities'] = 'Actualmente ninguna actividad es monitoreada por este bloque. Configure la finalización o los elementos de calificación ara las actividades que usted quiera monitorear y después configure este bloque.';
$string['overview'] = 'Vista general';
$string['overviewofstudents'] = 'Vista general de estudiantes';
$string['partiallycompleted'] = 'Parcialmente completado ({$a})';
$string['pluginname'] = 'Niveles de Finalización';
$string['privacy:metadata'] = 'El plugin de Bloque de Niveles de Finalización no almacena ningún dato personal.';
$string['progress'] = 'Progreso';
$string['score'] = 'Puntaje';
$string['totalweight'] = 'Ponderación total: {$a}';
$string['trackall'] = 'Monitorear todo';
$string['trackingmethodcompletion'] = 'Finalización';
$string['trackingmethodgrades'] = 'Calificación relativa';
$string['type'] = 'Tipo';
$string['untrackall'] = 'Des-monitorear todo';
$string['validation:enterpositiveorempty'] = 'Por favor ingrese un valor positivo, o déjelo vacío.';
$string['validation:providebadges0toN'] = 'Por favor proporcione imágenes de insignia, con nombres 0.png, 1.png... hasta el  máximo nivel deseado.';
$string['viewprogress'] = 'Ver mi progreso';
$string['walloffame'] = 'Pared de la Fama';
$string['walloffamea'] = 'Pared de la Fama {$a}';
$string['weight'] = 'Ponderación';
$string['weighta'] = 'Ponderación: {$a}';
