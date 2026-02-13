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
 * Strings for component 'local_sitenotice', language 'es_mx', version '4.4'.
 *
 * @package     local_sitenotice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['booleanformat:false'] = 'No';
$string['booleanformat:true'] = 'Si';
$string['button:accept'] = 'Aceptar';
$string['button:close'] = 'Cerrar';
$string['cachedef_enabled_notices'] = 'Una lista de avisos habilitados';
$string['cachedef_notice_view'] = 'Una lista de avisos vistos';
$string['confirmation:deletenotice'] = '¿Realmente desea eliminar el aviso de "{$a}"';
$string['event:acknowledge'] = 'reconocer';
$string['event:create'] = 'crear';
$string['event:delete'] = 'eliminar';
$string['event:disable'] = 'deshabilitar';
$string['event:dismiss'] = 'descartar';
$string['event:enable'] = 'habilitar';
$string['event:reset'] = 'reiniciar';
$string['event:timecreated'] = 'Hora';
$string['event:update'] = 'actualizar';
$string['modal:acceptbtntooltip'] = 'Por favor active la casilla de arriba.';
$string['modal:checkboxtext'] = 'He leído y comprendo el aviso (el cerrar este aviso NO lo sacará del sitio).';
$string['notice:activefrom'] = 'Activo a partir de';
$string['notice:activefrom_help'] = 'La hora y fecha a partir de la cual el mensaje estará activo.';
$string['notice:cohort'] = 'Cohorte';
$string['notice:cohort:all'] = 'Todos los usuarios';
$string['notice:content'] = 'Contenido';
$string['notice:create'] = 'Crear nuevo aviso';
$string['notice:delete'] = 'Eliminar aviso';
$string['notice:disable'] = 'Deshabilitar aviso';
$string['notice:enable'] = 'Habilitar aviso';
$string['notice:expiry'] = 'Caducidad';
$string['notice:expiry_help'] = 'La fecha y hora de cuando expira el mensaje y ya no será mostrado más a los usuarios.';
$string['notice:forcelogout'] = 'Forzar expulsión';
$string['notice:forcelogout_help'] = 'Si se habilita, el usuario será sacado del sitio después de cerrar el aviso. Esta configuración no afecta al administrador del sitio.';
$string['notice:hlinkcount'] = 'Número de hipervínculos';
$string['notice:info'] = 'Información del aviso';
$string['notice:notice'] = 'Aviso';
$string['notice:perpetual'] = 'Es perpetuo';
$string['notice:perpetual_help'] = 'Cuando se configura a Si, el aviso siempre será mostrado (a menos que fuera deshabilitado). Cuando se configura a No, debe especificarse un rango de fecha y hora para el aviso.';
$string['notice:redirectmsg'] = 'Curso requerido no completado. No tiene permitido enviar Tarea.';
$string['notice:report'] = 'Ver reporte';
$string['notice:reqack'] = 'Requerir reconocimiento';
$string['notice:reqack_help'] = 'Si se habilita, el usuario necesitará aceptar el aviso antes de que pueda continuar usando el sitio Moodle.
Cuando el usuario no acepta el aviso, será expulsado del sitio.';
$string['notice:reqcourse'] = 'Requerir finalización del curso';
$string['notice:reqcourse_help'] = 'Cuando se selecciona, el usuario verá el aviso mientras no haya completado el curso.';
$string['notice:reset'] = 'Reiniciar aviso';
$string['notice:resetinterval'] = 'Reiniciar cada';
$string['notice:resetinterval_help'] = 'El aviso será mostrado al usuario una vez más hasta que pase el período especificado.';
$string['notice:timemodified'] = 'Hora de modificación';
$string['notice:title'] = 'Título';
$string['notice:view'] = 'Ver aviso';
$string['notification:noack'] = 'No hay reconocimiento para este aviso';
$string['notification:nodeleteallowed'] = 'No está permitido eliminar este aviso';
$string['notification:nodis'] = 'No se puede descartar este aviso';
$string['notification:noticedoesnotexist'] = 'Este aviso no existe';
$string['notification:noupdateallowed'] = 'No está permitido actualizar este aviso';
$string['pluginname'] = 'Aviso del sitio';
$string['privacy:metadata:firstname'] = 'Nombre';
$string['privacy:metadata:idnumber'] = 'Número ID';
$string['privacy:metadata:lastname'] = 'Apellido(s)';
$string['privacy:metadata:local_sitenotice_ack'] = 'Reconocimiento del aviso';
$string['privacy:metadata:local_sitenotice_hlinks_his'] = 'Monitoreo del hipervínculo';
$string['privacy:metadata:local_sitenotice_lastview'] = 'Aviso visto por última vez';
$string['privacy:metadata:userid'] = 'ID del usuario';
$string['privacy:metadata:username'] = 'Usuario';
$string['report:acknowledge_desc'] = 'Lista de usuarios que reconocieron el aviso.';
$string['report:acknowledged'] = 'aviso_reconocido_{$a}';
$string['report:button:ack'] = 'Reporte de reconocimiento del aviso';
$string['report:button:dis'] = 'Reporte de descarte del aviso';
$string['report:dismissed'] = 'aviso_descartado_{$a}';
$string['report:dismissed_desc'] = 'Lista de usuarios que descartaron el aviso.';
$string['report:timecreated_server'] = 'Hora del servidor';
$string['report:timecreated_spreadsheet'] = 'Sello de tiempo de hoja de cálculo';
$string['report:timeformat:sortable'] = '%Y-%m-%d %H:%M:%S';
$string['setting:allow_delete'] = 'Permitir eliminación del aviso';
$string['setting:allow_deletedesc'] = 'Permitir que el aviso sea eliminado';
$string['setting:allow_update'] = 'Permitir actualización del aviso';
$string['setting:allow_updatedesc'] = 'Permitir que el aviso sea actualizado';
$string['setting:cleanup_deleted_notice'] = 'Limpiar información relacionada con el aviso eliminado';
$string['setting:cleanup_deleted_noticedesc'] = 'Requiere "Permitir eliminación de aviso".
Cuando se habilita, otros detalles relacionados con el aviso eliminado, como por ejemplo hipervínculos, historia de hipervínculos, reconocimiento, última vista de usuario, también serán eliminados';
$string['setting:enabled'] = 'Habilitado';
$string['setting:enableddesc'] = 'Habilitar aviso del sitio';
$string['setting:managenotice'] = 'Gestionar aviso';
$string['setting:settings'] = 'Configuraciones';
$string['sitenotice:manage'] = 'Gestionar aviso del sitio';
$string['timeformat:resetinterval'] = '%a día(s), %h hora(s), %i minuto(s) y %s segundo(s)';
