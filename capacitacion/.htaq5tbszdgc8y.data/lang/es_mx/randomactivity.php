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
 * Strings for component 'randomactivity', language 'es_mx', version '4.4'.
 *
 * @package     randomactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhasissue'] = 'Al menos una actividad en este lote de Actividad aleatoria tiene el problema siguiente: {$a}.';
$string['addactivities'] = 'Añadir actividades';
$string['addselectedactivities'] = 'Añadir actividades seleccionadas';
$string['applychangesreassign'] = 'Aplicar cambios y re-asignar';
$string['assignedactivity'] = 'Actividad asignada';
$string['assignees'] = 'Asignados';
$string['changesapplied'] = 'Los cambios han sido aplicados';
$string['completiontrackactivity'] = 'Requerir finalización de actividad asignada';
$string['completiontrackactivity_desc'] = 'Los estudiantes deben completar esta actividad asignada';
$string['completiontrackactivity_help'] = 'Si se habilita, esta Actividad Aleatoria intentará monitorear la finalización de actividades asignadas y actualizar automáticamente su estado de finalización de forma apropiada<br>
<b>Nota:</b> Esto podría anular algunos de los otros métodos de monitoreo de la finalización.';
$string['continuetoactivity'] = 'Continuar a la actividad';
$string['duedate'] = 'Fecha esperada';
$string['duedatefor'] = 'Fecha esperada para {$a}';
$string['duedatefor_desc'] = '¡Fecha límite para completar y enviar esta actividad!';
$string['duedateover'] = 'Ya pasó la fecha límite para esta actividad.<br>
Usted todavía puede acceder a la actividad si lo desea, pero no se registrarán nuevas calificaciones.';
$string['dynamicdisplay'] = 'Visualización dinámica en página del curso';
$string['dynamicdisplay_help'] = 'Si se configura a "Si", esta actividad se mostrará en la página del curso como la actividad a la cual apunta. Esto solamente afecta a estudiantes.';
$string['filters'] = 'Filtros:';
$string['groupbyseeding'] = 'Agrupar por semilla';
$string['grouping'] = 'agrupamiento {$a}';
$string['groupmode'] = 'Modo de grupo';
$string['groupmode_help'] = 'Esta actividad está configurada para usar grupos. Los miembros del mismo grupo serán asignados a la misma actividad.<br>
Si está configurado un agrupamiento, entonces solamente  los grupos de este agrupamiento serán considerados.<br>
Si un usuario no pertenece a ningún grupo, o pertenece a más de un grupo, será asignado individualmente.';
$string['groupmodedetails'] = 'Modo de grupo ({$a}).';
$string['invalidsesskeyorpermission'] = 'Esta actividad ha sido impedida por razones de seguridad. Ya sea que usted no tiene los permisos necesarios, o su clave de sesión no pudo ser confirmada.';
$string['modulename'] = 'Actividad aleatoria';
$string['modulename_help'] = 'El módulo de Actividad aleatoria le permite al profesor definir un lote de actividades de las cuales los estudiantes sacarán aleatoriamente una para realizar.<br><br>
La calificación de la actividad será obtenida para cada estudiante y usada como la calificación de la actividad aleatoria.<br>
La semilla para aleatorizar puede ser personalizada para garantizar consistencia entre actividades para cada estudiante.';
$string['modulenameplural'] = 'Actividades aleatorias';
$string['modulenotfound'] = 'Módulo no encontrado';
$string['noactivityerror'] = 'Ninguna actividad ha sido configurada';
$string['noactivitytoadd'] = 'Sin actividades disponibles para añadir';
$string['nogradesetup'] = 'No se ha configurado calificación para esta actividad';
$string['notgraded'] = 'No calificada';
$string['notsupported'] = 'No soportado';
$string['orderbyappearanceincourse'] = 'Ordenar por aparición en curso';
$string['orderbyselect'] = 'ordenar por o agrupar por';
$string['originalgrade'] = 'Calificación original';
$string['pluginadministration'] = 'Administración de actividad aleatoria';
$string['pluginname'] = 'Actividad aleatoria';
$string['pluginname_help'] = 'Usted puede definir aquí el lote de actividades a usar para esta Actividad aleatoria.<br>Solamente los profesores pueden ver esta página.
Los estudiantes que accedan a esta actividad serán re-direccionados a la actividad elegida aleatoriamente a la que fueron asignados.';
$string['privacy:metadata'] = 'Elplugin de actividad aleatoria no almacena ningún dato personal.';
$string['randomactivity:addinstance'] = 'Añadir instancia de Actividad aleatoria';
$string['randomactivity:manage'] = 'Gestionar una Actividad aleatoria';
$string['randomactivity:viewactivities'] = 'Ver el lote de actividades para Actividad aleatoria';
$string['randomactivity:viewgrades'] = 'Ver calificaciones de Actividad aleatoria';
$string['refresh_help'] = 'Refrescar visualización de asignados. Esto no aplica ningún cambio.';
$string['returntocourse'] = 'Regresar al curso';
$string['seed'] = 'Semilla';
$string['seedingn'] = 'Sembrando #{$a}';
$string['seedtobalance'] = 'Sembrar para balancear usuarios';
$string['seedtotimestamp'] = 'Sembrar para sellodetiempo actual';
$string['showonlymembersof'] = 'Mostrar solamente miembros de:';
$string['unknown'] = 'Desconocido';
$string['viewall'] = 'Ver todo';
$string['viewingradebook'] = 'Ver en Libro de calificaciones';
