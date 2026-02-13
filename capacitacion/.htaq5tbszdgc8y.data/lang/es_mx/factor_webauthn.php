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
 * Strings for component 'factor_webauthn', language 'es_mx', version '4.4'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gestionar llave de seguridad';
$string['action:revoke'] = 'Remover llave de seguridad';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Híbrido';
$string['authenticator:internal'] = 'Interno';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nombre de llave de seguridad';
$string['error'] = 'Falló la autenticación';
$string['error:alreadyregistered'] = 'Este secreto de llave de seguridad ya ha sido registrado.';
$string['info'] = 'Usar una llave de seguridad física o scaner de huella digital.';
$string['logindesc'] = 'Elegir continuar para usar su llave de seguridad.';
$string['loginoption'] = 'Usar llave de seguridad';
$string['loginskip'] = 'Yo no tengo mi llave de seguridad';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que sea usted por llave de seguridad';
$string['managefactor'] = 'Gestionar llave de seguridad';
$string['managefactorbutton'] = 'Gestionar';
$string['manageinfo'] = 'Usted está usando \'{$a}\' para autenticación.';
$string['pluginname'] = 'Llave de Seguridad';
$string['privacy:metadata'] = 'El plugin del factor llave de seguridad no almacena ningún dato personal.';
$string['register'] = 'Registrar llave de seguridad';
$string['replacefactor'] = 'Reemplazar llave de seguridad';
$string['replacefactorconfirmation'] = '¿Reemplazar llave de seguridad  \'{$a}\' ?';
$string['revokefactorconfirmation'] = '¿Remover llave de seguridad  \'{$a}\' ?';
$string['settings:authenticatortypes'] = 'Tipos de autenticador';
$string['settings:authenticatortypes_help'] = 'Alternar ciertos tipos de autenticadores';
$string['settings:userverification'] = 'Verificación del usuario';
$string['settings:userverification_help'] = 'Sirve para asegurarse de que la persona que se autentica es en realidad quien dice ser. La verificación del usuario puede tomar varias formas, como contraseña, PIN, huella digital, etc.';
$string['setupfactor'] = 'Configurar llave de seguridad';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Registrar una llave de seguridad.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Darle un nombre a su clave.';
$string['setupfactor:intro'] = 'Una llave de seguridad es un dispositivo físico que usted puede usar para autenticarse usted mismo. Las llaves de seguridad pueden ser tokens USB, dispositivos Bluetooth, o inclusive scanners de huella digital incorporados a su teléfono o computadora.';
$string['setupfactor:securitykeyinfo'] = 'Esto le ayuda a identificar cuál llave de seguridad está usando.';
$string['setupfactorbutton'] = 'Configurar';
$string['summarycondition'] = 'usando un autenticador soportado por WebAuthn';
$string['userverification:discouraged'] = 'Verificación del usuario no debería ser usada; por ejemplo, para minimizar interacción del usuario';
$string['userverification:preferred'] = 'Verificación del usuario es preferida,; la autenticación NO fallará si falta la verificación del usuario';
$string['userverification:required'] = 'Verificación del usuario es requerida (por ejemplo, por PIN). La autenticación falla si la clave no tiene verificación del usuario';
