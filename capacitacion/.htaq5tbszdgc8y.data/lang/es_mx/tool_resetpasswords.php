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
 * Strings for component 'tool_resetpasswords', language 'es_mx', version '4.4'.
 *
 * @package     tool_resetpasswords
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['csvdelimiter'] = 'Separador CSV';
$string['emailbodyhtml'] = '<div> Hola {$a->userfullname} , <br/>
La contraseña de su cuenta de usuario en <b> {$a->sitename} </b> ha sido reiniciada por el administrador.
<br/> Su información actual para ingresar es:
<br/><br/>
Usuario: {$a->username} <br/>
Contraseña: {$a->password} <br/><br/>
URL: {$a->URL}
</div>';
$string['emailsender'] = '{$a->siteshortname} Administrador del Sitio';
$string['emailsubject'] = 'Reinicio de contraseña de cuenta del usuario';
$string['encoding'] = 'Codificando';
$string['escaped_users'] = 'Usuarios escapados';
$string['examplecsv'] = 'CSV de ejemplo';
$string['examplecsv_help'] = 'Subir archivo CSV con solamente una columna para  <b>username</b>, como está en el archivo de ejemplo';
$string['password_cron'] = 'Contraseña es generada en cron';
$string['pluginname'] = 'Reinicio masivo de contraseñas';
$string['privacy:metadata'] = 'El plugin para Reinicio masivo de contraseñas no almacena ningún dato acerca de usuarios.';
$string['reseted_users'] = 'Usuarios con contraseñas reiniciadas';
$string['resetpasswords'] = 'Reiniciar contraseñas';
$string['resetpasswords:bulkresetpassword'] = 'Reiniciar contraseñas masivamente por subida de archivo CSV';
$string['taskname'] = 'Reiniciar contraseñas masivamente';
$string['total'] = 'Total';
$string['uploadusers'] = 'Reiniciar contraseñas masivamente';
$string['usernotfound'] = 'Usuario no encontrado';
