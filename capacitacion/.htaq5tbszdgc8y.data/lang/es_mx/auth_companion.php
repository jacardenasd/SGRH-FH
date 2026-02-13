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
 * Strings for component 'auth_companion', language 'es_mx', version '4.4'.
 *
 * @package     auth_companion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_companiondescription'] = 'Plugibn de autenticaciòn que le permite a los usuarios que ya han ingresado al sitio que usen una cuenta complementaria.';
$string['clean_old_companion_accounts'] = 'Limpiar cuentas complementarias antiguas';
$string['companion:allowcompanion'] = 'Permitir cuenta complementaria';
$string['companion:useascompanion'] = 'Usar este rol para cuenta complementaria';
$string['companionrole'] = 'Rol complementario';
$string['companionrole_definition'] = 'Para definir roles disponibles, configure la capacidad "auth/companion:useascompanion" a "Permitir".';
$string['delete_data'] = 'Eliminar datos';
$string['error_empty_emaildomain'] = 'Error: Con un dominio vacìo';
$string['error_wrong_emaildomain'] = 'Error: ¿Dominio email incorrecto!';
$string['info_plugin_remains_deactivated'] = 'El plugin permanece desactivado';
$string['info_using_companion'] = 'Ahora usted está usando su cuenta complementaria "<strong>{$a}</strong>".';
$string['info_using_origin'] = 'Ahora usted está usando su cuenta original "<strong>{$a}</strong>".';
$string['override_email'] = 'Sobrescribir direcciòn Email';
$string['pluginname'] = 'Cuenta complementaria';
$string['privacy:metadata'] = 'El plugin de autenticación complementaria no almacena ningún dato personal.';
$string['privacy:metadata:auth_companion'] = 'Cuenta complementaria';
$string['privacy:metadata:auth_companion:authsubsystem'] = 'Este plugin está conectado al subsistema de autenticación.';
$string['privacy:metadata:auth_companion:companionid'] = 'La ID del usuario complementario.';
$string['privacy:metadata:auth_companion:mainuserid'] = 'La ID del usuario principal';
$string['privacy:metadata:auth_companion:tableexplanation'] = 'Cuentas complementarias enlazadas a una cuenta de usuario Moodle.';
$string['privacy:metadata:auth_companion:timecreated'] = 'El sello de tiempo de cuando fue creada la cuenta complementaria.';
$string['setting_email_option_force_override'] = 'Aplicar anulación de Email';
$string['setting_email_option_help'] = 'La dirección de correo electrónico complementaria puede ser reemplazada por la dirección de correo electrónico del usuario actual.';
$string['setting_email_option_no_override'] = 'Sin anulación de Email';
$string['setting_email_option_optional'] = 'Dejar que el usuario decida si anula la dirección Email.';
$string['setting_email_options'] = 'Opciones de Email';
$string['setting_email_options_help'] = 'Si la configuración <strong>$CFG->authloginviaemail</strong> está establecida, ¡usted no podrá permitir la anulación del correo electrónico!';
$string['setting_emaildomain'] = 'NO enviando dominio de Email';
$string['setting_emaildomain_help'] = 'Este dominio se utiliza para la dirección de correo electrónico temporal del usuario complementario. Debe ser un dominio al que no se puedan enviar correos electrónicos.';
$string['setting_forcedeletedata'] = 'Forzar la eliminación de datos';
$string['setting_forcedeletedata_help'] = 'Si esta configuración está activa, los datos del usuario acompañante se eliminarán al volver a cambiar de usuario. De lo contrario, el usuario podrá decidir por sí mismo.';
$string['setting_forcelogin'] = 'Forzar el reinicio del sesión';
$string['setting_forcelogin_help'] = 'This setting make sure, the user must relogin to switch to the origin account.';
$string['setting_namesuffix'] = 'Sufijo del nombre';
$string['setting_namesuffix_help'] = 'El valor será usado como sufijo de su nombre original.';
$string['switch_back'] = 'Regresar a lo de antes';
$string['switch_back_text'] = 'Regresar a la cuenta original de antes.';
$string['switch_to_companion'] = 'Regresar a complementaria';
$string['switch_to_companion_note_email_override_force'] = 'La dirección de correo electrónico de su inicio de sesión actual se utilizará para su cuenta complementaria.';
$string['switch_to_companion_note_email_override_no'] = 'Se utilizará una dirección de correo electrónico pseudo aleatoria para su cuenta complementaria.';
$string['switch_to_companion_note_email_override_optional'] = 'Usted puede  elegir si su dirección de correo electrónico se utilizará o no para su cuenta complementaria.';
$string['switch_to_companion_text'] = 'Su nombre de usuario actual se cambiará a su cuenta complementaria.';
$string['wrong_or_missing_role'] = 'Rol complementario incorrecto o faltante';
