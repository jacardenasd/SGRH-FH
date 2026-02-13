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
 * Strings for component 'auth_magic', language 'es_mx', version '4.4'.
 *
 * @package     auth_magic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['and'] = 'Y';
$string['anymethod'] = 'Cualquier método';
$string['belowpassword'] = 'Bajo contraseña';
$string['belowusername'] = 'Bajo nombre de usuario';
$string['configtitle'] = 'Autenticación mágica';
$string['copyboard'] = 'Copiar enlace a portapapeles';
$string['copyinvitationlink'] = 'Copiar el enlace de invitación mágica para el usuario';
$string['copyloginlink'] = 'Copiar el enlace de inicio de sesión mágico para el usuario';
$string['courseenrolment'] = 'Inscripción al curso';
$string['createuserenrolcourse'] = 'Se ha creado y se ha inscrito en "{$a}"';
$string['currentlylinkexpiry'] = 'Como el enlace de inicio de sesión ha expirado, se enviará un nuevo enlace a su dirección de correo electrónico cuando haga clic en el enlace de inicio de sesión vencido.';
$string['defaultenrolmentduration'] = 'Duración de inscripción predeterminada';
$string['defaultenrolmentrole'] = 'Rol de inscripción predeterminado';
$string['doesnotaccesskey'] = 'No tiene acceso a la clave en su método de autenticación';
$string['emailnotexists'] = 'No existe correo electrónico de usuario';
$string['enrolmentduration'] = 'Duración de inscripción';
$string['error'] = 'No se actualiza el tiempo de expiración del enlace de inicio de sesión mágico';
$string['existuserenrolcourse'] = 'Ha sido inscrito en "{$a}"';
$string['expiredloginlinkmsg'] = 'Hola {$a->fullname},

Intentó acceder a \'{$a->sitename}\' con un enlace de inicio de sesión mágico vencido.

Se creó automáticamente un nuevo enlace mágico para usted:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Este enlace vencerá el: <b> {$a->expiry} </b> <br>

Si necesita ayuda, comuníquese con el administrador del sitio,
{$a->admin}';
$string['expiredregistrationmessage'] = 'Hola {$a->fullname},

Intentó acceder a \'{$a->sitename}\' con un enlace de registro vencido.

Se creó automáticamente un nuevo enlace mágico para usted:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Si necesita ayuda, comuníquese con el administrador del sitio,
{$a->admin}';
$string['firstname'] = 'Nombre';
$string['getmagiclinkviagmail'] = 'Recibe un enlace mágico por correo electrónico';
$string['hasbeencreated'] = 'ha sido creado';
$string['instructionsforlinktype'] = 'Proporcione un tipo de enlace mágico, los tipos son (invitación o inicio de sesión)';
$string['invailduser'] = 'Usuario invalido';
$string['invitationexpiry'] = 'Caducidad del enlace de invitación mágica';
$string['invitationexpiryloginlink'] = 'El enlace de invitación ha expirado. No puedes usar el enlace de inicio de sesión mágico para acceder al sitio.';
$string['invitationexpiryloginlinkwithupdate'] = 'El enlace de invitación ha expirado. Si la dirección de correo electrónico pertenece a una cuenta que admite el inicio de sesión mediante un enlace, se ha enviado un enlace por correo electrónico.';
$string['invitationmessage'] = 'Hola {$a->fullname},

Se ha solicitado una nueva cuenta en \'{$a->sitename}\' con su dirección de correo electrónico.

Para iniciar sesión en su nueva cuenta, vaya a esta dirección web y use el nombre de usuario y la contraseña para iniciar sesión:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Este enlace caducará el: <b> {$a->expiry} </b> <br>

Si necesita ayuda, comuníquese con el administrador del sitio,
{$a->admin}';
$string['keyusemultiple'] = 'Hasta que caduque';
$string['keyuseonce'] = 'Sólo una vez';
$string['lastname'] = 'Apellido(s)';
$string['linkexpirytime'] = 'Establezca un tiempo de expiración para el enlace de inicio de sesión mágico';
$string['listofmagiclink'] = 'Cuentas de usuario de Magic';
$string['loginexpiry'] = 'Caducidad del enlace de inicio de sesión mágico';
$string['loginexpiryloginlink'] = 'El enlace de inicio de sesión mágico ha expirado. No puede utilizar el enlace de inicio de sesión mágico para acceder al sitio.';
$string['loginexpiryloginlinkwithupdate'] = 'El enlace de inicio de sesión mágico ha expirado. Se ha enviado un nuevo enlace de inicio de sesión mágico a su dirección de correo electrónico.';
$string['loginkeytype'] = 'Configurar el enlace de la clave de inicio de sesión';
$string['loginkeytype_desc'] = 'Esta configuración permite a los administradores configurar el comportamiento de las claves de inicio de sesión. Las claves de inicio de sesión se pueden utilizar solo una vez o hasta que caduquen.';
$string['loginlinkbtnpostion'] = 'Posición del botón de enlace de inicio de sesión mágico';
$string['loginlinkmessage'] = 'Hola {$a->fullname},

Para acceder a su cuenta en \'{$a->sitename}\', utilize el siguiente enlace mágico:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Este enlace caducará el: <b> {$a->expiry} </b> <br>

Si necesita ayuda, comuníquese con el administrador del sitio,
{$a->admin}';
$string['loginlinksubject'] = 'Enlace de inicio de sesión de autenticación mágica';
$string['loginoption'] = 'Permitir que el  usuario obtenga un enlace mágico';
$string['loginoptiondesc'] = 'Habilite esta configuración para iniciar sesión utilizando el nombre de usuario proporcionado en el formato de inicio de sesión.';
$string['loginsubject'] = '{$a}: Autenticación mágica mediante inicio de sesión';
$string['magiclink'] = 'Enlace mágico';
$string['magicloginlink'] = '{$a}: Enlace de inicio de sesión mágico';
$string['magiconly'] = 'Mágico solamente';
$string['manualinfo'] = 'Las inscripciones manuales no están disponibles en este curso.';
$string['messageprovider:auth_magic'] = 'Enlaces de inicio de sesión de autenticación mágica';
$string['more'] = '{$a} más';
$string['normal'] = 'Normal';
$string['notexists_loginlinkmsg'] = 'Hola, {$a->fullname}:

No tiene un enlace de inicio de sesión mágico, por lo que no tiene acceso al sitio mediante la autenticación mágica.

Si necesita ayuda, comuníquese con el administrador del sitio,
{$a->admin}';
$string['notsentinvitationlink'] = 'No me envia el link de invitación al correo';
$string['passinfo'] = '- o escriba su contraseña -';
$string['pluginisdisabled'] = 'El plugin de autenticación mágica está deshabilitado.';
$string['pluginname'] = 'Autenticación mágica';
$string['preventmagicauthmessage'] = 'Hola {$a->fullname},

Se ha solicitado una nueva cuenta en \'{$a->sitename}\' con su dirección de correo electrónico. <br>

<strong>Nota: </strong> La autenticación mediante un enlace mágico no es compatible con su cuenta, utilice su contraseña en su lugar.

<br>

{$a->forgothtml} <br>

Si necesita ayuda, comuníquese con el administrador del sitio,
{$a->admin}';
$string['preventmagicauthsubject'] = 'Información de soporte de autenticación mágica';
$string['privacy:metadata:auth_magic'] = 'Autenticación mágica';
$string['privacy:metadata:auth_magic:invitationexpiry'] = 'La fecha hasta la cual la clave de invitación es válida';
$string['privacy:metadata:auth_magic:invitationuserkey'] = 'El valor de la clave de invitación del usuario';
$string['privacy:metadata:auth_magic:loginexpiry'] = 'La fecha hasta la cual la clave de inicio de sesión es válida';
$string['privacy:metadata:auth_magic:loginuserkey'] = 'El valor de la clave de inicio de sesión del usuario';
$string['privacy:metadata:auth_magic:magicauth'] = 'El valor de si el padre asigna o no.';
$string['privacy:metadata:auth_magic:magicinvitation'] = 'El valor del enlace de invitación mágica del usuario';
$string['privacy:metadata:auth_magic:magiclogin'] = 'El valor del enlace de inicio de sesión mágico del usuario';
$string['privacy:metadata:auth_magic:manualexpiry'] = 'La fecha que establece la caducidad de la clave de acceso del usuario es válida hasta';
$string['privacy:metadata:auth_magic:parent'] = 'El valor del ID de usuario que se asignará al padre del usuario.';
$string['privacy:metadata:auth_magic:parentrole'] = 'La instancia del id del rol padre.';
$string['privacy:metadata:auth_magic:timecreated'] = 'La fecha y hora en que se creó el enlace de inicio de sesión.';
$string['privacy:metadata:auth_magic:timemodified'] = 'La fecha y hora en que se modificó el enlace de inicio de sesión.';
$string['privacy:metadata:auth_magic:userid'] = 'El ID del usuario con este enlace de inicio de sesión';
$string['privacy:metadata:auth_magic_loginlinks'] = 'Enlaces mágicos para el usuario.';
$string['quickregisterfornonauth'] = 'El enlace mágico a través del inicio de sesión solo es compatible con la autenticación mágica del usuario. Si cambia otros, modifique la configuración del método de autenticación compatible.';
$string['quickregistration'] = 'Registro rápido';
$string['registrationexpirylink'] = 'El enlace de registro ha expirado. Se ha enviado un nuevo enlace de registro a su dirección de correo electrónico.';
$string['registrationmessage'] = 'Hola {$a->emailplaceholder},

¡Gracias por su interés en unirse a {$a->sitename}! Para crear su cuenta, utilice el siguiente enlace de registro:

<a href={$a->link}> {$a->link} </a> <br>

Si tiene alguna pregunta o necesita ayuda, no dude en comunicarte con el administrador del sitio, {$a->admin}.

¡Esperamos contar con su presencia como miembro de nuestra comunidad!

Atentamente,
El equipo de {$a->sitename}';
$string['registrationsubject'] = 'Enlace de registro de autenticación mágica';
$string['sendlink'] = 'Enviar el enlace mágico al usuario.';
$string['sentinvitationlink'] = 'Enviado el enlace mágico al Email';
$string['sentlinktouser'] = 'Si proporcionó una dirección de correo electrónico correcta, se le debería haber enviado un correo electrónico con un enlace de inicio de sesión mágico.';
$string['sentlinktousername'] = 'Si proporcionó un nombre de usuario correcto, se debería haber enviado a su dirección de correo electrónico un correo electrónico con un enlace de inicio de sesión mágico.';
$string['sentregisterlinktouser'] = 'Si proporcionó una dirección de correo electrónico correcta, se le debería haber enviado un correo electrónico con un enlace de registro.';
$string['statuscreateuser'] = 'ha sido creado';
$string['strconfirm'] = 'Confirmación';
$string['strenrolinto'] = 'inscrito en';
$string['strkeyaccount'] = 'Clave cuenta';
$string['strowneraccountrole'] = 'Rol propietario de cuenta';
$string['strsupportauth'] = 'Método de autenticación soportado';
$string['strsupportpassword'] = 'Soporta contraseña';
$string['success'] = 'Cambios actualizados';
$string['userhavenotlinks'] = 'El usuario no tiene ningún enlace {$ a}';
$string['userkeyslist'] = 'Mis cuentas de usuario';
