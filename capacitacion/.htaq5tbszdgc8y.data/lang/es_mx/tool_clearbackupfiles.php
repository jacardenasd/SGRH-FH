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
 * Strings for component 'tool_clearbackupfiles', language 'es_mx', version '4.4'.
 *
 * @package     tool_clearbackupfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupcompletedlog'] = 'Durante esta operación,  {$a->filecount} archivos de respaldos de cursos con un tamaño total de {$a->filesize} fueron eliminados.';
$string['backupremovedlog'] = 'El archivo de respaldo de curso {$a->filename} con tamaño de {$a->filesize} fue eliminado.';
$string['clearbackupcompleted'] = 'Limpieza de respaldos completada';
$string['continuetoclearbackup'] = 'Continuar a limpiar respaldos';
$string['coursebackupremoved'] = 'Respaldo de curso eliminado';
$string['crontask'] = 'Trabajo de limpiar archivos de respaldos (.mbz)';
$string['days'] = 'Días';
$string['daysdesc'] = 'Número de días de respaldos a limpiar';
$string['enablecron'] = 'Habilitar CRON';
$string['filedeletedempty'] = 'No hay archivos de respaldos para eliminar.';
$string['filedeletedfooter'] = 'En total {$a->filecount} archivos de resplado fueron eliminados y {$a->filesize} de espacio del servidor fue desocupado.';
$string['filedeletedheader'] = 'Los archivos de respaldo de curso eliminados duarnte esta operación son como sigue:';
$string['filename'] = 'Nombre del archivo';
$string['filesize'] = 'Tamaño del archivo';
$string['pluginname'] = 'Limpiar archivos de respaldo';
$string['warningalert'] = '¿Está seguro de querer continuar?';
$string['warningmsg'] = 'Por favor tenga en cuenta que la limpieza de archivos de respaldo es un proceso irreversible; usted no podrá restaurar archivos de respaldo eliminados.';
