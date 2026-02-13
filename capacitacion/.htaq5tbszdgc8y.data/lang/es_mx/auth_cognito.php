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
 * Strings for component 'auth_cognito', language 'es_mx', version '4.4'.
 *
 * @package     auth_cognito
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audience_fail_enrol'] = 'No se pudo agregar el usuario a la audiencia {$a->cohortid} : {$a->message}';
$string['auth_cognito_description'] = 'Un plugin de autenticación de Oomax Pro';
$string['auth_cognito_settings'] = 'Configuración de autenticación de Oomax Pro';
$string['auth_cognito_title'] = 'Plugin de autenticación Oomax Pro';
$string['cachedef_oomax_cache'] = 'Almacén de caché Oomax';
$string['cognito_serverless_login_url'] = 'URL de inicio de sesión sin servidor de Oomax Pro';
$string['cognito_settings'] = 'Configuración de Oomax Pro';
$string['config_lock_email'] = 'Bloquear dirección de correo electrónico';
$string['config_lock_email_desc'] = 'Cuando está marcada, los usuarios no pueden actualizar su dirección de correo electrónico.';
$string['course_failed_enrol'] = 'No se pudo inscribir al usuario en el curso {$a->courseid}';
$string['course_failed_enrol_msg'] = 'No se pudo inscribir al usuario en el curso {$a->courseid} : {$a->message}';
$string['course_not_exist'] = 'El curso {$a->courseid} no existe';
$string['course_user_enrolled'] = 'El usuario ya está inscrito en el curso {$a->courseid}';
$string['groups_failed_user_group'] = 'No se pudo agregar el usuario al grupo {$a->groupid}';
$string['groups_failed_user_group_msg'] = 'No se pudo agregar el usuario al grupo {$a->groupid} : {$a->message}';
$string['invalid_token'] = 'El token de usuario no es válido.';
$string['oomax_uri'] = 'URI de inicio de sesión único de Oomax';
$string['oomax_uri_desc'] = 'Dirección URI del servidor Oomax Pro';
$string['pluginname'] = 'Autenticación de Oomax Pro';
$string['privacy:metadata'] = 'El servicio de autenticación de Oomax Pro solo inicia sesión en usuarios autenticados.';
$string['public_key_settings'] = 'Clave pública de Oomax Pro';
$string['sso_bypass'] = 'Habilitar omisión de SSO';
$string['sso_bypass_desc'] = 'Esto permite el reenvío SSO a la URL OOMAX y permite omitir el reenvío; la omisión requiere que <i>sso=1</i> esté incluido en las rutas.';
