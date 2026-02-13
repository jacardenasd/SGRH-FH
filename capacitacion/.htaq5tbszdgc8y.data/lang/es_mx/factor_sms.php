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
 * Strings for component 'factor_sms', language 'es_mx', version '4.4'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gestionar número de teléfono móvil';
$string['action:revoke'] = 'Remover número de teléfono móvil';
$string['addnumber'] = 'Número de móvil';
$string['clientnotfound'] = 'Cliente de servicio AWS no encontrado. El cliente debe ser un nombre de clase completamente calificado como por ejemplo \\Aws\\S3\\S3Client.';
$string['editphonenumber'] = 'Editar número de teléfono';
$string['editphonenumberinfo'] = 'Si usted no obtuvo el código o si ingresó el número equivocado, por favor edite el número e inténtelo de nuevo.';
$string['error:emptyverification'] = 'Código vacío. Inténtelo nuevamente.';
$string['error:wrongphonenumber'] = 'El número de teléfono que proporcionó no está en un formato válido.';
$string['error:wrongverification'] = 'Código incorrecto. Inténtelo nuevamente.';
$string['errorawsconection'] = 'Error al conectarse a servidor AWS : {$a}';
$string['errorsmssent'] = 'Error al enviar un mensaje SMS que contiene su número de verificación.';
$string['event:smssent'] = 'Mensaje SMS enviado.';
$string['event:smssentdescription'] = 'Al usuario con ID {$a->userid} se le ha enviado un código de verificación vía SMS: {$a->debuginfo}';
$string['info'] = 'Tener un código de verificación enviado al teléfono móvil que usted elija.';
$string['logindesc'] = 'Hemos enviado un mensaje SMS que contiene un código de 6 dígitos a su número móvil {$a}';
$string['loginoption'] = 'Enviar un código a su teléfono móvil';
$string['loginskip'] = 'Yo no recibí un código';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Ingresar el código de verificación enviado a su teléfono móvil';
$string['managefactor'] = 'Gestionar SMS';
$string['managefactorbutton'] = 'Gestionar';
$string['manageinfo'] = 'Usted está usando \'{$a}\' para autenticación.';
$string['phonehelp'] = 'Ingrese su número de teléfono móvil (incluyendo el código del país) para recibir un código de verificación.';
$string['pluginname'] = 'SMS teléfono móvil';
$string['privacy:metadata'] = 'El plugin del Factor SMS teléfono móvil no almacena ningún dato personal.';
$string['revokefactorconfirmation'] = '¿Quitar SMS  \'{$a}\' ?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'Clave';
$string['settings:aws:key_help'] = 'Credencial de clave API de Amazon';
$string['settings:aws:region'] = 'Región';
$string['settings:aws:region_help'] = 'Región de puerta de enlace (gateway) API Amazon';
$string['settings:aws:secret'] = 'Secreto';
$string['settings:aws:secret_help'] = 'Credencial secreto API de Amazon';
$string['settings:aws:usecredchain'] = 'Usar la cadena del proveedor predeterminado de credencial para encontrar credenciales de AWS';
$string['settings:countrycode'] = 'Número de código del país';
$string['settings:countrycode_help'] = 'El código de llamada sin el + inicial como un predeterminado si los usuarios no ingresan un número internacional con un prefijo  +.

Vea este enlace para una lista de códigos de llamada: {$a}';
$string['settings:duration'] = 'Duración de validez';
$string['settings:duration_help'] = 'El período de tiempo que el código es válido';
$string['settings:gateway'] = 'Gateway SMS';
$string['settings:gateway_help'] = 'El proveedor SMS por medio del cual usted desea enviar mensajes';
$string['setupfactor'] = 'Configurar SMS';
$string['setupfactorbutton'] = 'Configurar';
$string['setupsubmitcode'] = 'Guardar';
$string['setupsubmitphone'] = 'Enviar código';
$string['smsstring'] = '{$a->code} es su código de seguridad de un solo uso de {$a->fullname}.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Usando un código de seguridad SMS de un solo uso';
