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
 * Strings for component 'local_lockgrades', language 'es_mx', version '4.4'.
 *
 * @package     local_lockgrades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['backtoform'] = 'Regresar al formato';
$string['categoryid'] = 'Categoría';
$string['courseid'] = 'Curso';
$string['delete'] = 'Eliminar';
$string['details'] = 'Detalles';
$string['duplicate'] = 'Duplicado';
$string['edit'] = 'Editar';
$string['error_invalididnumber'] = 'El número de ID de categoría no fue encontrado.';
$string['error_nofilteredcourses'] = 'No se encontraron elementos en cursos cuyo nombre corto contenga "{$a}".';
$string['error_noidnumber'] = 'Insertar una ID válida';
$string['error_unlockancestor'] = 'No se puede desbloquear la categoría {$a}: una categoría principal aún está bloqueada.';
$string['executed'] = 'Ejecutado';
$string['executiondate'] = 'Fecha de ejecución';
$string['fullname'] = 'Nombre completo';
$string['history'] = 'Historia de operación';
$string['idnumber'] = 'ID de categorías';
$string['itemid'] = 'Elemento';
$string['itemtype'] = 'Tipo';
$string['lock_success'] = 'Las calificaciones fueron bloqueadas exitosamente.';
$string['lockgrades'] = 'Bloquear calificaciones';
$string['lockgrades:manage'] = 'Plugin para gestionar bloqueo de calificaciones';
$string['lockgrades_info'] = '<strong>Nota importante:</strong><br>
Al bloquear una calificación, Moodle puede mostrar un mensaje de advertencia en el libro de calificaciones, así como el botón "Recalcular de todos modos".<br>
<ul>
<li>Este mensaje significa que los cambios en las calificaciones realizados a través de la actividad no se reflejarán mientras la calificación permanezca bloqueada.</li>
<li>El botón "Recalcular de todos modos" permite forzar la actualización de las calificaciones, incluso para elementos bloqueados.</li>
<li>Utilice este botón con precaución: cualquier modificación forzada puede sobrescribir una calificación bloqueada y causar inconsistencias.</li>
</ul>
Este comportamiento es normal y tiene como objetivo proteger la gestión de calificaciones en Moodle.';
$string['logdetails'] = 'Bitácora';
$string['nodata_table'] = 'Sin datos disponibles en la tabla';
$string['norecords_found'] = 'No se encontraron registros coincidentes';
$string['pattern'] = 'Opción: solo si nombre corto contiene...';
$string['pattern_help'] = 'Esto es opcional; si se deja vacío todos los cursos serán procesados sin distinción.';
$string['pluginname'] = 'Bloquear calificaciones';
$string['preview_noresults'] = 'No se encntraron cursos para los criterios dados.';
$string['previewimpact'] = 'Resumen del impacto';
$string['privacy:metadata'] = 'El plugin local Lockgrades solo bloquea calificaciones (no usa datos).';
$string['schedule_success'] = 'La acción de bloqueo/desbloqueo se ha programado correctamente.';
$string['scheduled'] = 'Agendado';
$string['scheduledfor'] = 'Fecha de ejecución';
$string['scheduledtask_confirmdelete'] = '¿Realmente desea eliminar esta tarea programada (agendada para {$a})?';
$string['scheduledtask_deleted'] = 'El trabajo agendado ha sido eliminado exitosamente..';
$string['scheduledtask_duplicate'] = 'Duplicar trabajo agendado';
$string['scheduledtask_duplicated'] = 'El trabajo agendado ha sido duplicado.';
$string['scheduledtask_edit'] = 'Editar trabajo agendado';
$string['scheduledtask_updated'] = 'El trabajo agendado ha sido actualizado.';
$string['scheduledtasks'] = 'Trabajos agendados';
$string['scheduledtime'] = 'Fecha y hora agendadas';
$string['scheduledtime_help'] = 'Seleccione una fecha y hora para realizar la acción de bloqueo/desbloqueo.';
$string['scheduledtype'] = 'Acción';
$string['schedulelock'] = 'Agendar bloqueo';
$string['schedulesubmit'] = 'Agenda';
$string['scheduleunlock'] = 'Agendar des-bloqueo';
$string['shortname'] = 'Nombre corto';
$string['status'] = 'Estado';
$string['taskname'] = 'Trabajo agendado de bloquear/des-bloquear calificación';
$string['unlock_success'] = 'LAs calificaciones fueron des-bloqueadas exitosamente.';
$string['unlockgrades'] = 'Des-bloquear calificaciones';
$string['warning_content'] = '<strong>Nota:</strong> Moodle puede mostrar un botón "Recalcular de todos modos" en el libro de calificaciones para forzar una actualización incluso de las calificaciones bloqueadas; úselo con precaución.';
