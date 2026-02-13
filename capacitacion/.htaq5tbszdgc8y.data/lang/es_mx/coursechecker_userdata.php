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
 * Strings for component 'coursechecker_userdata', language 'es_mx', version '4.4'.
 *
 * @package     coursechecker_userdata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Revisión de datos del usuario';
$string['pluginname_help'] = 'Revisa las actividades del curso en busca de datos residuales del usuario, como envíos, publicaciones en foros o registros.';
$string['privacy:metadata'] = 'La revisión de datos del usuario no almacena datos personales. Los resultados de la revisión se guardan en el plugin Course Checker.';
$string['userdata_error'] = 'No debería haber ningún dato del usuario en la actividad {$a}.';
$string['userdata_help'] = 'Si desea que estos datos se copien a otros cursos, debe importarlos manualmente. Aquí hay algunos manuales útiles: <a href="https://docs.moodle.org/38/en/Backup_of_user_data" target="_blank">Respaldo de datos del usuario</a> y <a href="https://docs.moodle.org/38/en/Reusing_activities" target="_blank">Reutilizando actividades</a>.';
$string['userdata_setting_modules'] = 'Módulos habilitados';
$string['userdata_setting_modules_help'] = 'Defina los módulos permitidos (deben estar habilitados en <a href="{$a}" target="_blank">Gestionar actividades</a>, contener el método reset_userdata en <code>mod/{modname}/lib.php</code> y estar soportados por este plugin) para ser revisados en cuanto a datos del usuario.';
$string['userdata_success'] = 'La actividad {$a} no contiene datos del usuario.';
