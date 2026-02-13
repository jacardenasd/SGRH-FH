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
 * Strings for component 'factor_totp', language 'es_mx', version '4.4'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gestionar autenticador de una vez basado en tiempo (TOTP)';
$string['action:revoke'] = 'Remover autenticador TOTP time-based one-time password (contraseña de una vez basada en tiempo)';
$string['devicename'] = 'Etiqueta del dispositivo';
$string['devicename_help'] = 'Este es el dispositivo en el que usted tiene instalada una App autenticadora. Usted puede configurar múltiples dispositivos para que esta etiqueta monitoree cuales están siendo usados. Usted debería de configurar cada dispositivo con su código propio único para que puedan ser revocados de forma separada.';
$string['devicenameexample'] = 'por ejemplo "iPhone 11 del trabajo"';
$string['error:alreadyregistered'] = 'El secreto (TOTP) time-based one-time password (contraseña de una vez basada en tiempo) ya ha sido registrado';
$string['error:codealreadyused'] = 'Este código ya ha sido usado para autenticarse. Por favor espere a que sea generado un nuevo código e inténtelo de nuevo.';
$string['error:futurecode'] = 'Este código es inválido. Por favor verifique que la hora de su dispositivo de autenticación sea correcta e inténtelo nuevamente.
   La hora actual del sistema es {$a}.';
$string['error:oldcode'] = 'Este código es demasiado antiguo. Por favor verifique que la hora de su dispositivo de autenticación sea correcta e inténtelo nuevamente.
   La hora actual del sistema es {$a}.';
$string['error:wrongverification'] = 'Código de verificación incorrecto';
$string['factorsetup'] = 'Configuración de App';
$string['info'] = 'Generar un código de verificación usando una App autenticadora.';
$string['logindesc'] = 'Usar la App autenticadora en su dispositivo móvil para generar un código.';
$string['loginoption'] = 'Usar aplicación Autenticadora';
$string['loginskip'] = 'Yo no tengo mi dispositivo';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que es usted por App mobile';
$string['managefactor'] = 'Gestionar App autenticadora';
$string['managefactorbutton'] = 'Gestionar';
$string['manageinfo'] = 'Usted está usando \'{$a}\' para autenticación.';
$string['pluginname'] = 'App Autenticadora';
$string['privacy:metadata'] = 'El plugin del factor App Autenticador no almacena ningún dato personal.';
$string['replacefactor'] = 'Reemplazar App autenticadora';
$string['replacefactorconfirmation'] = '¿Reemplazar App autenticadora  \'{$a}\' ?';
$string['revokefactorconfirmation'] = '¿Remover App autenticadora  \'{$a}\' ?';
$string['settings:totplink'] = 'Mostrar enlace para configurar App Mobile';
$string['settings:totplink_help'] = 'Si se habilita, el usuario verá una tercera opción de configuración con un enlace directo otpauth://';
$string['settings:window'] = 'Ventana de verificación TOTP';
$string['settings:window_help'] = 'Por cuanto tiempo es válido cada código. Usted puede configurar esto a un valor más alto como una compensación si los relojes de los dispositivos de sus usuarios a menudo están equivocados.
   Es redondeado a los 30 segundos más cercanos, que es el tiempo entre nuevos códigos generados.';
$string['setupfactor'] = 'Configurar App autenticadora';
$string['setupfactor:account'] = 'Cuenta:';
$string['setupfactor:devicename'] = 'Nombre del dispositivo';
$string['setupfactor:devicenameinfo'] = 'Esto le ayuda a identificar cual dispositivo recibe el código de verificación.';
$string['setupfactor:enter'] = 'Ingresar detalles manualmente:';
$string['setupfactor:instructionsdevicename'] = '1. Darle un nombre a su dispositivo.';
$string['setupfactor:instructionsscan'] = '2. Escanear el código QR con su App autenticadora.';
$string['setupfactor:instructionsverification'] = '3. Ingresar el código de verificación.';
$string['setupfactor:intro'] = 'Para configurar este método, usted necesita tener un dispositivo con una App autenticadora. Si usted no tiene una App, puede descargar una. Por ejemplo, <a href="https://2fas.com/" target="_blank">2FAS Auth</a>, <a href="https://freeotp.github.io/" target="_blank">FreeOTP</a>, Google Authenticator, Microsoft Authenticator or Twilio Authy.';
$string['setupfactor:key'] = 'Clave secreta:';
$string['setupfactor:link'] = 'O ingresar los detalles manualmente.';
$string['setupfactor:link_help'] = 'Si usted está en un dispositivo móvil y ya tiene una App autenticadora instalada, este enlace podría funcionar. Tenga en cuenta que usar TOTP (contraseña de una vez basada en tiempo) en el mismo dispositivo como su forma de ingreso puede debilitar los beneficios de MFA.';
$string['setupfactor:linklabel'] = 'Open App ya instalada en este dispositivo';
$string['setupfactor:mode'] = 'Modo:';
$string['setupfactor:mode:timebased'] = 'Basado-en-tiempo';
$string['setupfactor:scan'] = 'Escanear código QR';
$string['setupfactor:scanfail'] = '¿No puede escanear?';
$string['setupfactor:scanwithapp'] = 'Escanear código QR con su aplicación de autenticación elegida.';
$string['setupfactor:verificationcode'] = 'Código de verificación';
$string['setupfactorbutton'] = 'Configurar';
$string['summarycondition'] = 'usando una App TOTP';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = 'Ingrese su código de verificación de 6 dígitos';
$string['verificationcode_help'] = 'Abra su App autenticadora, como por ejemplo Google Authenticator, y busque el código de 6 dígitos que coincida con este sitio y nombre_de_usuario.';
