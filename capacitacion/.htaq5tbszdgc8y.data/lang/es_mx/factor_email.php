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
 * Strings for component 'factor_email', language 'es_mx', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Si usted no solicitó este E-mail, elija continuar para intentar invalidar el intento de ingresar. Si usted eligió este enlace por accidente, elija cancelar, y no se tomará ninguna acción.';
$string['email:browseragent'] = 'Los detalles del navegador para esta solicitud son: \'{$a}\'';
$string['email:geoinfo'] = 'Lo solicitud aparentemente se ha originado desde aproximadamente:';
$string['email:greeting'] = 'Hola {$a} 👋';
$string['email:ipinfo'] = 'Detalles de solicitud de ingreso:';
$string['email:link'] = 'enlace de verificación';
$string['email:loginlink'] = 'O, si usted está en el mismo dispositivo, use este {$a}.';
$string['email:message'] = 'Aquí está su código de verificación para {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Esta solicitud de ingreso fue hecha desde \'{$a}\'';
$string['email:revokelink'] = 'Si éste no era usted, usted puede {$a}.';
$string['email:revokesuccess'] = 'Este código ha sido revocado exitosamente. Todas las sesiones para este usuario han sido terminadas.
    Email no será utilizable como un factor hasta que la seguridad de la cuenta haya sido verificada.';
$string['email:stoploginlink'] = 'detener este intento de ingresar';
$string['email:subject'] = 'Aquí está su código de verificación';
$string['email:uadescription'] = 'Identidad del navegador para esta solicitud:';
$string['email:validity'] = 'El código solamente puede ser usado una vez y es válido por {$a}.';
$string['error:badcode'] = 'El código no fue encontrado. Esto podría ser un enlace antiguo, se podría haber enviado por E-mail un nuevo código, o el intento de ingresar con este código fue exitoso.';
$string['error:parameters'] = 'Parámetros de página incorrectos.';
$string['error:wrongverification'] = 'Código incorrecto. Inténtelo nuevamente.';
$string['event:unauthemail'] = 'E-mail no autorizado recibido';
$string['info'] = 'Usted está usando el email {$a} para autenticarse. Esto ha sido configurado por el administrador del sitio.';
$string['logindesc'] = 'Le acabamos de enviar un código de 6 dígitos a su E-mail: {$a}';
$string['loginoption'] = 'Que un código le sea enviado por E-mail a usted';
$string['loginskip'] = 'Yo no recibí un código';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que es usted por E-mail';
$string['managefactor'] = 'Gestionar email';
$string['manageinfo'] = '\'{$a}\' está siendo usado para autenticarse para autenticarse. Esto ha sido configurado por su administrador.';
$string['pluginname'] = 'E-mail';
$string['privacy:metadata'] = 'El plugin de Factor E-mail no almacena ningún dato personal';
$string['settings:duration'] = 'Duración de validez';
$string['settings:duration_help'] = 'El período de tiempo que el código es válido.';
$string['settings:suspend'] = 'Suspender cuentas NO autorizadas';
$string['settings:suspend_help'] = 'Active esto para suspender cuentas de usuario si es recibida una verificación de E-mail No autorizado.';
$string['setupfactor'] = 'Configurar E-mail';
$string['summarycondition'] = 'tiene configuración válida de E-mail';
$string['unauthemail'] = 'Email NO autorizado';
$string['unauthloginattempt'] = 'El usuario con ID {$a->userid} hizo un  intento de ingreso No autorizado usando verificación de E-mail desde
IP {$a->ip} con agente navegador {$a->useragent}.';
$string['verificationcode'] = 'Escriba código de verificación para confirmación';
$string['verificationcode_help'] = 'Un código de verificación ha sido enviado a su E-mail.';
