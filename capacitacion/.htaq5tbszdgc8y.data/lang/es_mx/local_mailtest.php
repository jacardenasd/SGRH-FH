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
 * Strings for component 'local_mailtest', language 'es_mx', version '4.4'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalinfo'] = 'Información adicional:';
$string['alwaysshowlog'] = 'Mostrar siempre bitácora de comunicaciones con el servidor de Email, aunque no haya errores.';
$string['bimidmarcfailure'] = 'Falla BIMI debido a una o más fallas de dependencias DMARC.';
$string['bimiinvalidlogo'] = 'Logo BIMI faltante: {$a}.';
$string['biminorecordfound'] = 'Falta registro BIMI.';
$string['bimipctinvalid'] = 'Valor DMARC PCT debe ser configurado a 100 para BIMI.';
$string['bimirecordfound'] = 'Registro BIMI encontrado.';
$string['bimitagsfound'] = 'Marcas (tags) BIMI válidas.';
$string['checkingdomain'] = 'Comprobación de seguridad del DNS para {$a}:';
$string['commoncommissues'] = '<li>Su sitio Moodle podría estar bloqueado por un cortafuegos (firewall), lo que impide la comunicación con su servidor de correo.</li>
<li>Usted podría necesitar añadir la dirección IP de su sitio web a una lista de direcciones IP permitidas en la configuración de su servidor de correo.</li>
<li>Asegúrese que su servidor SMTP esté levantado y corriendo.</li>';
$string['commondeliveryissues'] = 'Si el Email no es entregado en15-30 minutes, compruebe lo siguiente:</p>
<ul>
<li>Asegúrese que la dirección Email de DESTINATARIO sea correcta.</li>
<li>Revise el correo chatarra/no deseado (spam/junk).</li>
<li>Revise el buzón de destinatarios para asegurarse que no esté lleno.</li>
<li>Revise el buzón de su dirección de sin-respuesta (no-reply) para ver si el mensaje rebotó (no fue entregado) por cualquier causa.</a></li>
<li>Revise que el contenido de su correo no es clasificado como chatarra/no deseado por cualquier filtro en su servidor de correo o en el servidor de correo del destinatario.</a></li>
<li>Asegúrese que la dirección IP de su servidor de correo no esté en lista negra de los proveedores de correo.</a></li>
{$a}
</ul>';
$string['connectionlog'] = 'Bitácoras de comunicaciones con el servidor de mail';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['divertallemails'] = 'desviar todos los E-mails';
$string['divertedto'] = 'Desviado a {$a}';
$string['dkiminvalidrecord'] = 'Registro DKIM debe contener tags v, k y p válidas.';
$string['dkimmissingselector'] = 'Configuración de selector DKIM no ha sido configurada.';
$string['dkimnorecordfound'] = 'Registro DKIM falta.';
$string['dkimrecordfound'] = 'Registro DKIM encontrado.';
$string['dkimselectorconfigured'] = 'Configuración de selector DKIM está configurada.';
$string['dkimspffailed'] = 'DMARC requiere que el registro DKIM o SPF esté configurado.';
$string['dkimvalidrecord'] = 'Formato de registro DKIM es válido.';
$string['dmarcnorecordfound'] = 'Registro DMARC falta.';
$string['dmarcpctinvalid'] = 'Valor DMARC pct no está dentro del rango.';
$string['dmarcrecordfound'] = 'Registro DMARC encontrado.';
$string['dmarcruainvalid'] = 'Valor DMARC rua no está formateado correctamente.';
$string['dmarcrufinvalid'] = 'Valor DMARC ruf no está formateado correctamente.';
$string['dmarctagsfound'] = 'Marcas (tags) DMARC requeridas encontradas.';
$string['emailfail'] = 'No se pudo enviar mensaje Email';
$string['errorcommunications'] = 'Moodle no pudo comunicarse con su servidor de correo.</p><p><strong>Recomendación:</strong></p><p>Empiece por revisar sus<a href="{$a}" target="_blank">Configuraciones de correo SMTP</a>.</p><p>Si se ven correctas, revise su servidor SMTP o las configuraciones de su cortafuegos (firewall) para asegurarse de que estén configurados para aceptar conexiones SMTP de su servidor web de  Moodle y de su dirección Email de no-contestar (no-reply). Para más ayuda, vea la sección FAQ en la documentación.';
$string['errorsend'] = 'El mensaje del Email de prueba no pudo entregarse al servidor SMTP. </p><p><strong>Recomendación:</strong></p><p>Revise sus <a href="{$a}" target="blank">Configuraciones del correo</a>. Para mayor información, vea la sección FAQ en la documentación.';
$string['errorunknown'] = '<p>Se produjo un error no diagnosticado.</p><p><strong>Recomendaciones:</strong></p><p>Consulte la bitácora de comunicaciones a continuación. Puede resultarle útil consultar la lista de códigos SMTP en <a href="https://www.rfc-editor.org/rfc/rfc5321.html#section-4.2.3" target="_blank">RFC 5321</a> y <a href="https://datatracker.ietf.org/doc/html/rfc4954#section-6" target="_blank">RFC 4954</a>.</p>';
$string['failaccessdenied'] = '<li>Conecta al servidor de correo pero se cerró y entonces se cerró la conexión.</li>';
$string['failclosedport'] = 'Puerto {$a} del servidor está cerrado ¿Especificó el número correcto del puerto?';
$string['failcredentials'] = '<li>Las credenciales de autenticación podrían ser inválidas o faltantes. Asegúrese que ha escrito la información correcta para ingresar.</li>';
$string['faildnslookup'] = 'Falló la búsqueda del DNS. Asegúrese que \'<strong>{$a}</strong>\' resuelve a la dirección de un servidor de correo.';
$string['failmissingport'] = 'Es posible que usted necesite especificar un número de puerto  :port number para conexiones del tipo de "{$a}".';
$string['failmissingprotocol'] = 'Usted podría necesitar especificar un tipo de protocolo seguro (SSL/TLS) con el puerto \'{$a}\'.';
$string['failoutboundsmtpblocked'] = 'Lago está bloqueando la conectividad de conexiones de salida SMPT. ¿Hay un firewall bloqueando su conexión al servidor de mail?';
$string['failphpmailer'] = 'Puede haber problemas con su instalación de Moodle LMS. Una causa posible es permisos incorrectos de propietario/grupo de los archivos de las aplicaciones.';
$string['failphpmailerconfig'] = 'El servicio mail en su servidor web Moodle podría no estar funcionando o podría estar incorrectamente configurado.';
$string['failprotocolmismatch'] = 'Usted puede tener una falta de correlación entre el protocolo \'{$a->protocol}\' y el puerto \'{$a->port}\'.';
$string['failunknownmailbox'] = '<li>El buzón de DE no fue encontrado, no es accesible, o fue rechazado por política. Asegúrese que ambas direcciones, DE y PARA sean válidas y existan y que la dirección de \'sin-respuesta\' (no-reply es ubn buzón real que existe en su servidor de correo.</li>';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Desde dirección Email';
$string['heading'] = 'Prueba de la configuración del Email';
$string['iconlabel'] = 'Comprobación de seguridad para {$a}';
$string['message'] = '<p>Este es un mensaje de prueba. Por favor no le haga caso.</p>
<p>Si Usted recibió este Email, significa que Usted ha configurado exitosamente las configuraciones de Email de su sitio Moodle.</p>
<hr><p><strong>Información adicional del usuario</strong></p>
<ul>
<li><strong>Estatus del registro :</strong> {$a->regstatus}</li>
<li><strong>Idioma preferido :</strong> {$a->lang}</li>
<li><strong>Navegador web del usuario :</strong> {$a->browser}</li>
<li><strong>Mensaje enviado desde :</strong> {$a->referer}</li>
<li><strong>Versión Moodle:</strong> {$a->release}</li>
<li><strong>Dirección IP del usuario :</strong> {$a->ip}</li>
</ul>';
$string['noemailever'] = '<p>Email en este sitio ha sido deshabilitado por medio de  <strong>$CFG-&gt;noemailever = true;</strong>.</p>';
$string['nologavailable'] = '<p>El escribir a bitácoras no está disponible al usar la función PHP mail() . Sin embargo, Usted puede encontrar bitácoras en su servidor. Los sitios más comunes en Linux incluyen:</p>
<ul>
<li>/var/log/maillog</li>
<li>/var/log/mail.log</li>
<li>/var/adm/maillog</li>
<li>/var/adm/syslog/mail.log</li>
</ul>
<p>De forma alterna, puede especificarse una ubicación alterna usando la configuración mail.log en php.ini.</p>';
$string['notregistered'] = 'No registrado o no ingresado al sitio.';
$string['phpmethod'] = 'Método PHP por defecto';
$string['pluginname'] = 'eMail Test (Prueba de Correo)';
$string['pluginname_help'] = 'eMail Test (Prueba de Correo) revisará la configuración del Email del sitio Moodle al enviarle un mensaje Email a una dirección Email especificada. Solamente para administradores del sitio.';
$string['primaryadminemail'] = 'Email del administrador primario';
$string['privacy:metadata'] = 'El plugin Probar Email no almacena ningún dato personal acerca de ningún usuario.';
$string['recipientisrequired'] = 'Usted debe especificar la dirección Email del destinatario.';
$string['registered'] = 'Usuario registrado ({$a}).';
$string['sendmethod'] = 'Método para enviar Email';
$string['sendtest'] = 'Enviar un mensaje de prueba';
$string['sentmail'] = 'Moodle entregó exitosamente el mensaje de prueba al servidor de correo SMTP.';
$string['sentmailphp'] = 'El mensaje de prueba de Moodle fue exitosamente aceptado por PHP Mail.';
$string['server'] = 'Servidor: {$a}';
$string['smtpmethod'] = 'Hosts SMTP: {$a}';
$string['spfinvalidrecord'] = 'Registro SPF debe contener al menos un mecanismo.';
$string['spfnorecordfound'] = 'Registro SPF falta.';
$string['spfrecordfound'] = 'Registro SPF encontrado';
$string['spfvalidrecord'] = 'Formato de registro SPF es válido.';
$string['testing'] = 'Probando configuración de Email';
$string['toemail'] = 'Para dirección Email';
$string['winsyslog'] = 'Bitácora de evento en Windows';
$string['youremail'] = 'Su dirección Email de Usted';
