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
 * Strings for component 'report_simultaneous', language 'es_mx', version '4.4'.
 *
 * @package     report_simultaneous
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventreportviewed'] = 'reporte de uso simultáneo visto';
$string['incourse_column'] = 'En curso';
$string['incourse_column_help'] = 'El número de vistas de actividades para este usuario en el curso. Este número es la suma de las vistas de las actividades diferentes de la seleccionada en el campo de "Actividades de referencia".';
$string['insite_column'] = 'En sitio';
$string['insite_column_help'] = 'El número de vistas de actividades para este usuario en el sitio. Este número es la suma de las vistas de las actividades diferentes de la seleccionada en el campo de "Actividades de referencia".';
$string['ips_column'] = 'IPs';
$string['ips_column_help'] = 'La lista de IPS usadas por este usuario. Esta lista es en número de las IPS (si fueran más de una) usadas por el usuario en la ventana de tiempo de la consulta. Usualmente denota que el usuario usó más de un dispositivo para acceder al servidor, pero también puede significar que el usuario está usando un proxy dinámico o que su dispositivo cambió su dirección de internet.';
$string['maxtime'] = 'Tiempo máximo';
$string['maxtime_help'] = 'el tiempo máximo en horas que cubrirá un análisis.';
$string['messageactions_column'] = 'Acciones de mensaje';
$string['messageactions_column_help'] = 'El número de acciones de mensaje instantáneo realizados por este usuario. esto incluye leer, borrar, etc. Este número incluye acciones realizadas por el usuario en sus propios mensajes-';
$string['messagesent_column'] = 'Mensajes enviados';
$string['messagesent_column_help'] = 'El número de mensajes instantáneos enviados por este usuario. Esto incluye mensajes enviados a otros usuarios y mensajes enviados a grupos. Este número incluye mensajes enviados al usuario mismo.';
$string['messagesentconversation_column'] = 'Conversaciones';
$string['messagesentconversation_column_help'] = 'Eel número de mensajes instantáneos enviados por este usuario a otros usuarios analizados. Esto incluye mensajes enviados a otros usuarios y mensajes enviados a grupos. Este número NO incluye mensajes enviados al usuario mismo.';
$string['nologreaderenabled'] = 'Lector de bitácora no habilitado';
$string['page-report-simultaneous-index'] = 'Reporte de uso simultáneo';
$string['page-report-simultaneous-x'] = 'Cualquier reporte simultáneo';
$string['pluginname'] = 'Actividades simultáneas';
$string['privacy:metadata'] = 'El plugin de Simultáneos en curso no almacena ningún dato personal.';
$string['refmodules'] = 'Actividades de referencia';
$string['reportfor'] = 'Reporte de actividades simultáneas para {$a}';
$string['showokusers'] = 'Mostrar usuarios sin actividades simultáneas';
$string['showokusers_help'] = 'Si se selecciona, todos los usuarios  en el curso serán mostrados incluyendo usuarios quienes no tengan actividad concurrente detectada.';
$string['simultaneous:adminlisting'] = 'Ver reportes de admins simultáneos';
$string['simultaneous:view'] = 'Ver reporte de simultáneos en curso';
$string['simultaneousreport'] = 'Actividades simultáneas';
$string['starttimebeforeendtime'] = 'La hora de inicio debe ser anterior a la hora de fin';
$string['status_column'] = 'Estado';
$string['status_column_help'] = 'La combinación de las comprobaciones para este usuario. Si el usuario tiene actividades simultáneas, el estado será "ADVERTENCIA". Si el usuario no tiene actividades simultáneas, el estado será "OK".';
$string['totaltimeexceeded'] = 'El tiempo total debería ser menor de {$a}';
