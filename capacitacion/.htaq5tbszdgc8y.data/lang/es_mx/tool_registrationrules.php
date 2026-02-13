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
 * Strings for component 'tool_registrationrules', language 'es_mx', version '4.4'.
 *
 * @package     tool_registrationrules
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewruleinstance'] = 'Agregar nueva regla';
$string['addrule'] = 'Agregar regla';
$string['confirmdelete'] = '¿Está seguro de que desea eliminar la regla "{$a}"?';
$string['description'] = 'Descripción';
$string['editruleinstance'] = 'Editar regla';
$string['editruleinstancename'] = 'Editar regla: {$a}';
$string['event:registrationdenied'] = 'Registro de usuario denegado';
$string['event:registrationdeniedloggingonly'] = 'Registro de usuario denegado (solo grabar en bitácora)';
$string['generalaftermessage'] = 'Mensaje general para usuarios rechazados DESPUÉS de la entrada del usuario';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['manageregistrationruleplugins'] = 'Plugins';
$string['onlyoneinstanceallowed'] = '¡Solo se permite una instancia de esta regla!';
$string['pluginname'] = 'Reglas de inscripción';
$string['privacy:null_provider:reason'] = 'El plugin de reglas de registro no almacena ningún dato relacionado con el usuario. Los datos relacionados con el usuario almacenados por plugins de reglas de registro específicos se declaran por separado.';
$string['registrationrule:instance:description'] = 'Descripción';
$string['registrationrule:instance:enabled'] = 'Habilitado';
$string['registrationrule:instance:fallbackpoints'] = 'Puntos de repliegue';
$string['registrationrule:instance:forgotpassword'] = 'Evalúe esta regla en el formato de Contraseña olvidada';
$string['registrationrule:instance:name'] = 'Nombre';
$string['registrationrule:instance:points'] = 'Puntos';
$string['registrationrule:instance:points_help'] = 'La cantidad de puntos devueltos de esta regla si se niega el registro.';
$string['registrationrulepluginname'] = 'Regla de registro';
$string['ruleinstancestable:actions'] = 'Acciones';
$string['ruleinstancestable:addcaptcha'] = 'Añadir CAPTCHA';
$string['ruleinstancestable:addrule'] = 'Añadir regla';
$string['ruleinstancestable:areasused'] = 'Áreas usaas';
$string['ruleinstancestable:captcha'] = 'CAPTCHA';
$string['ruleinstancestable:description'] = 'Descripción';
$string['ruleinstancestable:disabledarealabel'] = 'Regla no habilitada para esta área';
$string['ruleinstancestable:disabledmessage'] = 'El plugin de registro está deshabilitado, las reglas no tendrán efecto hasta que se habilite en la página <a href="/admin/settings.php?section=generalregistrationrulessettings">Configuración de reglas de registro</a>.';
$string['ruleinstancestable:disabledpluginsmessage'] = 'Hay <a href="/admin/settings.php?section=manageregistrationrules">{$a} plugins de reglas deshabilitados</a>, no se pueden crear nuevas reglas que utilicen estos plugins hasta que se habiliten.';
$string['ruleinstancestable:enabled'] = 'Habilitado';
$string['ruleinstancestable:enabledarealabel'] = 'Regla habilitada para esta área';
$string['ruleinstancestable:fallbackpoints'] = 'Puntos de repliegue';
$string['ruleinstancestable:forcednotification'] = 'La edición está deshabilitada ya que las reglas se administran actualmente a través de <b>config.php</b>.';
$string['ruleinstancestable:forgotpasswordlabel'] = 'Formato de contraseña olvidada';
$string['ruleinstancestable:instancesjson:getinstancesjson'] = 'Ver instancias JSON';
$string['ruleinstancestable:instancesjson:modalbodytext'] = '<p>Se puede agregar lo siguiente a su archivo <b>config.php</b> para forzar el uso de la configuración de regla activa actual.</p><p>Cuando se agrega a <b>config.php</b>, la administración de regla ya no estará disponible a través de la interfaz de usuario.</p>';
$string['ruleinstancestable:instancesjson:ruleinstancesjson'] = 'JSON de Instancias de reglas';
$string['ruleinstancestable:move'] = 'Mover';
$string['ruleinstancestable:name'] = 'Nombre';
$string['ruleinstancestable:nomorecaptchasmessage'] = 'Solo se puede agregar una regla de tipo CAPTCHA a la vez. No se pueden crear nuevas reglas que utilicen estos tipos de plugins hasta que se elimine la instancia CAPTCHA actual.';
$string['ruleinstancestable:norulesaddedyet'] = 'Aún no se han agregado reglas, comience agregando una regla y/o CAPTCHA usando los menús desplegables a continuación.';
$string['ruleinstancestable:notconfigured'] = 'No configurado';
$string['ruleinstancestable:plugindisabled'] = 'Plugin deshabilitado';
$string['ruleinstancestable:points'] = 'Puntos';
$string['ruleinstancestable:points:decription'] = 'Número de puntos emitidos cuando se deniega el registro.';
$string['ruleinstancestable:rulenotenabled'] = 'Regla no habilitada';
$string['ruleinstancestable:signuplabel'] = 'Formato para registrarse';
$string['ruleinstancestable:siterecaptchaenabled'] = 'reCAPTCHA está habilitado en la configuración del sitio, no se pueden agregar nuevas reglas de tipo CAPTCHA.';
$string['ruleinstancestable:type'] = 'Tipo';
$string['rulewillnotbeused'] = 'Esta regla no se utilizará todavía porque las <a href="{$a}">opciones de configuración</a> del plugin no se han configurado.';
$string['settings:enable:description'] = 'Habilitar la comprobación de regla.';
$string['settings:forgotpassword'] = 'Evaluar las reglas apropiadas en el formato de Contraseña olvidada';
$string['settings:forgotpassword:description'] = 'Incluir la verificación de algunas reglas en el formato de Contraseña olvidada, las reglas utilizadas se indican en la columna “Áreas utilizadas” de la tabla de reglas.';
$string['settings:generalbeforemessage'] = 'Mensaje general sobre las reglas de preinscripción';
$string['settings:generalbeforemessage:description'] = 'Algunas reglas (por ejemplo, <b>limitdatetime</b> o <b>npe</b>) impedirán que se muestre la página de registro; este es un mensaje estático que aparecerá encima de cualquier retroalimentación de esas reglas.';
$string['settings:guidancemessage'] = '<p>Deberá marcar "Habilitar verificación de reglas" antes de que las reglas de registro puedan funcionar.</p><p>Sin embargo, se recomienda que primero revise y configure las reglas disponibles y las opciones CAPTCHA, luego cree algunas <a href="/admin/tool/registrationrules/manageruleinstances.php">reglas</a> antes de habilitar la verificación de reglas.</p> También puede considerar habilitar "Solo registro" por un tiempo breve para evaluar el impacto de las reglas elegidas.';
$string['settings:loggingonly'] = 'Solo registro en bitácoras';
$string['settings:loggingonly:description'] = 'Evalúe las reglas de forma normal pero solo registrar los resultados en lugar de denegar el registro del usuario.';
$string['settings:maxpoints'] = 'Puntos de rechazo máximos';
$string['settings:maxpoints:description'] = 'Se denegará el registro si se alcanza este umbral después de que se hayan evaluado las reglas.';
$string['settings:registrationpagemessage'] = 'Mensaje en la parte superior de la página de registro';
$string['settings:registrationpagemessage:description'] = 'Mensaje general que se muestra en la parte superior de la página de registro';
$string['settings:registrationruleinstances'] = 'Reglas';
$string['settings:registrationrulessettings'] = 'Configuraciones';
$string['subplugintype_registrationrule'] = 'Regla de registro';
$string['subplugintype_registrationrule_plural'] = 'Reglas de registro';
