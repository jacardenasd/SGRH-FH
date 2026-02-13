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
 * Strings for component 'auth_saml2', language 'es_mx', version '4.4'.
 *
 * @package     auth_saml2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcreate'] = 'Permitir crear';
$string['allowcreate_help'] = 'Permitir creación de usuarios IdP bajo demanda';
$string['alterlogout'] = 'URL de salida alternativa';
$string['alterlogout_help'] = 'La URL para redireccionar a un usuario después de agotar todos los mecanismos internos para salida del sitio';
$string['anyauth'] = 'Permitido cualquier tipo de autenticación';
$string['anyauth_help'] = 'Si: ¿Permitir ingreso por SAML a todos los usuarios? NO: solamente los usuarios quienes tengan SAML2 como su tipo.';
$string['anyauthotherdisabled'] = 'Usted ha ingresado exitosamente como \'{$a->username}\' pero su tipo de autenticación  \'{$a->auth}\' está deshabilitado.';
$string['assertionsconsumerservices'] = 'Afirmaciones de servicios al consumidor';
$string['assertionsconsumerservices_help'] = 'Lista de enlaces que el SP debe soportar';
$string['attemptsignout'] = 'Intentar Salir del sitio IdP';
$string['attemptsignout_help'] = 'Esto intentará comunicarse con el IdP para enviar una solicitud de salida';
$string['attrsimple'] = 'Simplificar atributos';
$string['attrsimple_help'] = 'Varios IdP como ADFS utilizan claves de atributos largas, como urns o nombres de esquema xml con espacios de nombres. Si se establece en Sí, esto los simplificará, por ejemplo, asignará http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname a dicho \'givenname\'.';
$string['auth_data_mapping'] = 'MApeo de datos';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> Si se habilita, le impedirá a usuarios y admins de Moodle el editar directamente el campo. Use esta opción si Usted está manteniendo estos datos en el sistema de autentificación externo. </p>';
$string['auth_fieldlockfield'] = 'Bloquear valor ({$a})';
$string['auth_fieldlocks'] = 'Bloquear campos de usuario';
$string['auth_fieldmapping'] = 'Mapeo de datos ({$a})';
$string['auth_saml2blockredirectdescription'] = 'Redireccionar o mostrar mensaje a ingresos SAML2 basados en restricciones de grupo configuradas';
$string['auth_saml2description'] = 'Autenticar con un Proveedor de Identidad IdP) SAML2';
$string['auth_updatelocalfield'] = 'Actualizar local ({$a})';
$string['auth_updateremotefield'] = 'Actualizar externo ({$a})';
$string['authncontext'] = 'AuthnContext';
$string['authncontext_help'] = 'Permite aumento de afirmaciones. Dejar en blanco a menos que sea necesario';
$string['autocreate'] = 'Auto crear usuarios';
$string['autocreate_help'] = 'Permitir creación de usuarios Moodle bajo demanda';
$string['autologin'] = 'Auto-ingreso';
$string['autologin_help'] = 'En las páginas que permiten el acceso de invitados sin iniciar sesión, los usuarios inician sesión automáticamente en Moodle con una cuenta de usuario real si han iniciado sesión en el IdP (usando autenticación pasiva).';
$string['autologinbycookie'] = 'Comprobar cuando la cookie especificada existe o cambia';
$string['autologinbysession'] = 'Comprobar una vez por sesión';
$string['autologincookie'] = 'Cookie para auto-ingreso';
$string['autologincookie_help'] = 'Nombre de la cookie usada para decidir cuando intentar auto-ingreso (solo es relevante si la opción de cookie está seleccionada arriba).';
$string['availableidps'] = 'Gestionar IdPs disponibles';
$string['availableidps_help'] = 'Si un xml de metadatos de IdP contiene varias entidades de IdP, deberá seleccionar qué entidades están disponibles para que los usuarios inicien sesión.';
$string['blockredirectheading'] = 'Acciones de bloqueo de cuenta';
$string['cannotmapfield'] = 'Colisión de mapeo detectada - dos campos mapean al mismo ítem de calificación {$a}';
$string['certificate'] = 'Regenerar certificado';
$string['certificate_help'] = 'Regenerar la Clave Privada y Certificado usados por este  SP. | <a href=\'{$a}\'>Ver certificado SP</a>';
$string['certificatedetails'] = 'Detalles del certificado';
$string['certificatedetailshelp'] = '<h1>Contenidos del certificado público SAML2 auto generado</h1>
<p>La ruta para el cert está aquí:</p>';
$string['certificatelock'] = 'Bloquear certificado';
$string['certificatelock_help'] = 'Bloquear el certificado impedirá que sean sobre-escritos una vez generados.';
$string['certificatelock_locked'] = 'El certificado está bloqueado';
$string['certificatelock_lockedmessage'] = 'Los certificados actualmente están bloqueados';
$string['certificatelock_regenerate'] = '¡No se regeneran certificados porque han sido bloqueados!';
$string['certificatelock_unlock'] = 'Des-bloquear certificados';
$string['certificatelock_warning'] = 'Advertencia: Usted está a punto de bloquear certificados- ¿Está Usted seguro de querer hacer esto?<br> Los certificados actualmente no están bloqueados';
$string['checkcertificateexpired'] = 'Certificado SAML ha expirado hace {$a}';
$string['checkcertificateexpiry'] = 'Expiración certificado SAML';
$string['checkcertificateok'] = 'Certificado SAML expirará en {$a}';
$string['checkcertificatewarn'] = 'Certificado SAML expirará en {$a}';
$string['commonname'] = 'Nombre común';
$string['countryname'] = 'País';
$string['debug'] = 'depuración (debugging)';
$string['debug_help'] = 'Exto añade depuración (debugging) extra a la bitácora normal de Moodle | <a href=\'{$a}\'>Ver configuración SSP</a></p>';
$string['duallogin'] = 'Ingreso dual';
$string['duallogin_help'] = '<p>Si se activa, entonces los usuarios verán ambos: botón para ingreso manual y para SAML. Si se desactiva, ellos siempre serán llevados directamente a la página de ingreso IdP.</p>
<p>Si es pasiva, entonces los usuarios que ya estén autenticados dentro del IDP serán ingresados automáticamente, de lo contrario serán enviados a la página para ingreso de Moodle.</p>
<p>Si se desactiva, entonces los administradores todavía pueden ver la página de ingreso manual mediante /login/index.php?saml=off</p>
<p>Si se activa, entonces las páginas externas pueden enlazar profundo adentro de Moodle usando SAML, por ejemplo /course/view.php?id=45&saml=on</p>';
$string['emailtaken'] = 'No se puede crear una nueva cuenta, porque la dirección de Email de {$a} ya está registrada';
$string['emailtakenupdate'] = 'Su Email NO fue actualizado, porque la dirección Email {$a} ya estaba registrada';
$string['error'] = 'Error al ingresar al sitio';
$string['errorinvalidautologin'] = 'Solicitud de autoingreso inválida';
$string['errorparsingxml'] = 'Error al analizar XML: {$a}';
$string['exception'] = 'Excepción SAML2: {$a}';
$string['expirydays'] = 'Caducidad en días';
$string['fielddelimiter'] = 'Delimitador de campo';
$string['fielddelimiter_help'] = 'El delimitador que se utilizará cuando un campo reciba una matriz de valores del IdP.';
$string['flaggedresponsetypemessage'] = 'Mostrar mensaje personalizado';
$string['flaggedresponsetyperedirect'] = 'Re-dirigir a URL externa';
$string['flagmessage'] = 'Mensaje de respuesta';
$string['flagmessage_default'] = 'Ha iniciado sesión en su proveedor de identidad, sin embargo, esta cuenta tiene acceso limitado a Moodle, comuníquese con su administrador para obtener más detalles.';
$string['flagmessage_help'] = '<p>El mensaje que se mostrará cuando a un usuario no se le permita acceder a Moodle según las restricciones de grupo configuradas.</p>
<p>(Solo se muestra cuando el \'Tipo de respuesta de respuesta\' es \'Mostrar mensaje personalizado\').</p>';
$string['flagredirecturl'] = 'URL a re-dirigir';
$string['flagredirecturl_help'] = '<p>La URL para redirigir a un usuario no tiene permitido acceder a Moodle según las restricciones de grupo configuradas.</p>
<p>(Solo se utiliza cuando el \'Tipo de respuesta\' es \'Redirigir a URL externa\').</p>';
$string['flagresponsetype'] = 'Tipo de respuesta que bloquea cuenta';
$string['flagresponsetype_help'] = 'Si el acceso está bloqueado basado en restricciones de grupo configuradas, ¿cómo debería responder Moodle?';
$string['grouprules'] = 'Reglas de grupo';
$string['grouprules_help'] = '<p>Una lista de reglas para poder controlar el acceso en función del valor del atributo de grupo.</p>
<p>Cada línea debe tener una regla en formato: {permitir o denegar} {atributo de grupo}={valor}.</p>
<p>La regla del más alto en la lista se aplicará primero.</p>
Ejemplo: <br/>
allow admins=yes<br>
deny admins=no<br>
allow examrole=proctor<br>
deny library=overdue<br>';
$string['idpattr'] = 'Mapeando IdP';
$string['idpattr_help'] = '¿Cual atributo IdP debería ser apareado contra un campo de usuario de Moodle?';
$string['idpmetadata'] = 'xml de metadatos IdP O URL xml pública';
$string['idpmetadata_badurl'] = 'Metadatos inválidos en {$a}';
$string['idpmetadata_help'] = 'Para usar múltiples IdPs ingresar cada URL de metadatos públicos en una nueva línea.<br/>Para anular un nombre, ponga texto antes del http, por ejemplo "Nombre IdP Forzado http://ssp.local/simplesaml/saml2/idp/metadata.php"';
$string['idpmetadata_invalid'] = 'El  IdP XML no es válido';
$string['idpmetadata_noentityid'] = 'El IdP XML no tiene entityID';
$string['idpmetadatarefresh'] = 'Refresacar metadatos IdP';
$string['idpmetadatarefresh_help'] = 'Correr un trabajo agendado para actualizar metadatos IdP desde URL de metadatos IdP';
$string['idpname'] = 'Anulación de nombre IdP';
$string['idpname_help'] = 'por ejemplo myUNI - esto es detectado por los metadatos y se mostrará en la página para ingreso dual (si estuviera habilitada)';
$string['idpnamedefault'] = 'Ingresar mediante SAML2';
$string['idpnamedefault_varaible'] = 'Ingresar via SAML2 ({$a})';
$string['localityname'] = 'Localidad';
$string['locked'] = 'Bloqueado';
$string['logdir'] = 'Directorio de bitácora';
$string['logdir_help'] = 'El directorio de bitácora a donde escribirá SSPHP la salida de bitácora; el archivo se llamará simplesamlphp.log';
$string['logdirdefault'] = '/tmp/';
$string['logtofile'] = 'Habilitar grabar bitácoras a archivo';
$string['logtofile_help'] = 'El activar esto redirigirá la salida de bitácora SSPHP hacia un archivo en el logdir (directorio_de_bitácoras)';
$string['manageidpsheading'] = 'Gestionar Proveedores de Identidad (IdPs) disponibles';
$string['mdlattr'] = 'Mapeando Moodle';
$string['mdlattr_help'] = '¡A cual campo de usuario de Moodle debería de aparejarse el atributo IdP?';
$string['metadatafetchfailed'] = 'Falló búsqueda de metadatos: {$a}';
$string['metadatafetchfailedstatus'] = 'Falló búsqueda de metadatos: Código de estatus {$a}';
$string['metadatafetchfailedunknown'] = 'Falló búsqueda de metadatos: Error desconocido de cURL';
$string['multiidp:label:active'] = 'Activo';
$string['multiidp:label:admin'] = 'Para usuarios administradores solamente';
$string['multiidp:label:admin_help'] = 'Cualquier usuario que inicie sesión utilizando este IdP se convertirá automáticamente en administrador del sitio.';
$string['multiidp:label:alias'] = 'Alias';
$string['multiidp:label:defaultidp'] = 'IdP predeterminado';
$string['multiidp:label:displayname'] = 'Mostrar nombre';
$string['multiidp:label:whitelist'] = 'Direcciones IP re-direccionadas';
$string['multiidp:label:whitelist_help'] = 'Si se configura, forzará a los clientes a utilizar este IdP. Formato: xxx.xxx.xxx.xxx/máscara de bits. Separar varias subredes en una nueva línea.';
$string['multiidpbuttons'] = 'Botones con íconos';
$string['multiidpdisplay'] = 'Tipo de visualización IdP múltiple';
$string['multiidpdisplay_help'] = 'Si un xml de metadatos de IdP contiene múltiples entidades de IdP, ¿cómo se mostrará cada IdP disponible?';
$string['multiidpdropdown'] = 'Lista desplegable';
$string['multiidpinfo'] = '<ul>
<li>Un IdP solo se puede utilizar si está configurado como Activo</li>
<li>Cuando se activa el inicio de sesión dual, todos los IdP activos se mostrarán en la página de inicio de sesión.</li>
<li>Cuando un IdP se ha establecido como predeterminado y no está activado el inicio de sesión dual, este IdP se utilizará automáticamente a menos que se pase ?multiidp=on o saml=off en /login/index.php</li>
<li>A un IdP se le puede asignar un alias, al ir a /login/index.php?idpalias={alias} se puede pasar el alias para usar directamente ese IdP</li>
</ul>';
$string['nameidasattrib'] = 'Exponer NameID como atributo';
$string['nameidasattrib_help'] = 'La solicitud NameID será expuesta a SSPHP como un atributo llamado nameid';
$string['nameidpolicy'] = 'Política NameID';
$string['nameidpolicy_help'] = '';
$string['noattribute'] = 'Usted ha ingresado exitosamente, pero no pudimos encontrar su atributo \'{$a}\' para asociarlo a Usted con una cuenta en Moodle.';
$string['noidpfound'] = 'El IdP \'{$a}\' no fue encontrado como un IdP configurado.';
$string['noredirectips'] = 'Restringir noredirect por IP';
$string['noredirectips_help'] = 'Cuando el inicio de sesión dual está desactivado y las IP están configuradas, esto restringirá el uso de ?saml=off y ?noredirect=1 durante el inicio de sesión SAML a los usuarios con subredes IP coincidentes.';
$string['nouser'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero no tiene una cuenta en Moodle.';
$string['nullprivatecert'] = 'Falló la creación de Certificado Privado.';
$string['nullpubliccert'] = 'Falló la creación de Certificado Público..';
$string['organizationalunitname'] = 'Unidad Organizacional';
$string['organizationname'] = 'Organización';
$string['passivemode'] = 'Modo pasivo';
$string['phone1'] = 'Teléfono';
$string['phone2'] = 'Teléfono móvil';
$string['plugindisabled'] = 'Plugin de autenticación SAML2 está deshabilitado';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'El plugin de autenticación Saml2 no almacena ningún dato personal.';
$string['privatekeypass'] = 'Contraseña de clave de certificado privado';
$string['privatekeypass_help'] = 'Esto se utiliza para firmar el certificado local de Moodle; cambiarlo invalidará el certificado actual.';
$string['regenerate_submit'] = 'Regenerar';
$string['regenerateheader'] = 'Regenerar Clave Privada y Certificado';
$string['regenerateheading'] = 'Regenerar Clave Privada y Certificado';
$string['regeneratepath'] = 'Ruta al certificado: {$a}';
$string['regeneratesuccess'] = 'Clave Privada y Certificado regenerados exitosamente';
$string['regeneratewarning'] = '¡Advertencia! La generación de un nuevo certificado sobrescribirá el actual y es posible que deba actualizar su IDP.';
$string['rememberidp'] = 'Recordar servicio para ingresar al sitio';
$string['requestedattributes'] = 'Solicitar atributos';
$string['requestedattributes_help'] = 'Algunos IdP necesitan que el SP declare qué atributos se solicitarán o son obligatorios. Agregue cada atributo en una nueva línea y estos estarán presentes en los metadatos de SP bajo la etiqueta <code>AttributeConsumingService</code>. Si desea que un campo sea obligatorio, coloque un espacio y luego * después de esa línea. {$a->ejemplo}';
$string['required'] = 'Este campo es necesario';
$string['requireint'] = 'Este campo es necesario y deb ser un número entero positivo';
$string['selectloginservice'] = 'Seleccionar un servicio para ingresar';
$string['sha1'] = 'SHA1 antiguo (Peligroso)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['showidplink'] = 'Mostrar enlace IdP';
$string['showidplink_help'] = 'Esto mostrará el enlace IdP cuando el sitio está configurado.';
$string['signaturealgorithm'] = 'Algoritmo de firma';
$string['signaturealgorithm_help'] = 'Este es el algoritmo que se utilizará para firmar solicitudes SAML. Advertencia: El algoritmo SHA1 solo se proporciona para compatibilidad con versiones anteriores; a menos que sea absolutamente necesario usarlo, se recomienda evitarlo y utilizar al menos SHA256 en su lugar.';
$string['source'] = 'Origen: {$a}';
$string['spentityid'] = 'ID de entidad';
$string['spentityid_help'] = 'Anular el Id. de entidad del proveedor de servicios. En la mayoría de los casos, déjelo en blanco y se utilizará un valor predeterminado.';
$string['spmetadata'] = 'Metadatos SP';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Ver Metadatos del Proveedor de Servicios (SP)</a> | <a href=\'{$a}?download=1\'>Descargar Metadatos del SP</a>
<p>Es posible que Usted necesite darle esto al administrador IdP para que lo ponga en la lista blanca.</p>';
$string['spmetadatasign'] = 'Firma de Metadatos SP';
$string['spmetadatasign_help'] = 'Firmar los Metadatos SP.';
$string['sspversion'] = 'Versión de SimpleSAMLphp';
$string['stateorprovincename'] = 'Estado o Provincia';
$string['status'] = 'Estado';
$string['suspendeduser'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero su cuenta ha sido suspendida en Moodle.';
$string['taskmetadatarefresh'] = 'Trabajo de refresco de metadatos';
$string['tempdir'] = 'Directorio temporal SimpleSAMLphp';
$string['tempdir_help'] = 'Un directorio donde SimpleSAMLphp puede guardar archivos temporales';
$string['test_auth_button_login'] = 'Ingreso IdP';
$string['test_auth_button_logout'] = 'Salida IdP';
$string['test_auth_str'] = 'Probar isAuthenticated e Ingreso';
$string['test_endpoint'] = 'URL de prueba de conexión';
$string['test_endpoint_desc'] = 'Introduzca una URL para probar la conexión para la redirección de IdP desde el navegador del cliente. Es posible que algunos usuarios o redes no tengan conectividad con el IdP según los permisos de la cuenta o de la red.';
$string['test_idp_conn'] = 'Probar conexión IdP';
$string['test_noticetestrequirements'] = 'Para poder utilizar esta prueba, el plugin debe estar configurado y habilitado, y el modo de depuración debe estar habilitado en la configuración del plugin.';
$string['test_passive_str'] = 'Probar usando isPassive';
$string['testdebuggingdisabled'] = 'Para utilizar esta página de prueba SAML la depuración debe estar activada';
$string['tolower'] = 'Concordancia MAYÚSCULAS/minúsculas';
$string['tolower:caseandaccentinsensitive'] = 'Sin concordancia MAYÚSCULAS/minúsculas y acentos';
$string['tolower:caseinsensitive'] = 'No importa si MAYÚSCULAS/minúsculas';
$string['tolower:exact'] = 'Exacto';
$string['tolower:lowercase'] = 'minúsculas';
$string['tolower_help'] = '<p>Exacto: Si importan MAYÚSCULAS/minúsculas (predeterminado).</p>
<p>minúsculas: aplicar minúscular al atributo IdP antes de buscar si coinciden.</p>
<p>NO  importan MAYÚSCULAS/minúsculas: ignorar MAYÚSCULAS/minúsculas al ver si coinciden.</p>';
$string['unlocked'] = 'Des-bloqueado';
$string['unlockedifempty'] = 'Desbloqueado si vacío';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'En creación';
$string['update_onlogin'] = 'En cada ingreso';
$string['update_onupdate'] = 'En actualización';
$string['wantassertionssigned'] = 'Querer afirmaciones firmadas';
$string['wantassertionssigned_help'] = 'Si es que las afirmaciones recibidas por este IdP deben estar firmadas';
$string['wrongauth'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero no está autorizado a acceder a Moodle.';
