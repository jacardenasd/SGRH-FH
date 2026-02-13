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
 * Strings for component 'auth_oidc', language 'es_mx', version '4.4'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_method_certificate'] = 'Certificado';
$string['auth_method_secret'] = 'Secreto';
$string['auth_oidcdescription'] = 'El plugin OpenID Connect proporciona funcionalidad de ingreso-único usando proveedores de identidad configurables.';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Enlace a configuración de autenticación y IdP</a>';
$string['cfg_autoappend_key'] = 'Auto-Anexar';
$string['cfg_customicon_key'] = 'Ícono personalizado';
$string['cfg_debugmode_desc'] = 'Si se habilita, la información se guardará en bitácora de Moodle para poder ayudar a identificar problemas.';
$string['cfg_debugmode_key'] = 'Grabar mensajes de depuración (debug)';
$string['cfg_domainhint_key'] = 'Pista del Dominio';
$string['cfg_err_invalidauthendpoint'] = 'Punto-final de Autorización Inválido';
$string['cfg_err_invalidclientid'] = 'ID del cliente inválida';
$string['cfg_err_invalidclientsecret'] = 'Secreto del cliente inválido';
$string['cfg_err_invalidtokenendpoint'] = 'Punto Final de Ficha (Token Endpoint) inválido';
$string['cfg_forceredirect_desc'] = 'Si se habilita, se saltará la página del índice para ingresar al sitio y redireccionará a la página  para Conectar a OpenID. No puede ser sobrepasada con ?noredirect=1 URL param';
$string['cfg_forceredirect_key'] = 'Forzar redirigir';
$string['cfg_icon_desc'] = 'Un ícono para mostrar junto al nombre del proveedor en la página para ingresar.';
$string['cfg_icon_key'] = 'Ícono';
$string['cfg_iconalt_check'] = 'Ícono de palomita';
$string['cfg_iconalt_go'] = 'Círculo verde';
$string['cfg_iconalt_group'] = 'Ícono del grupo';
$string['cfg_iconalt_group2'] = 'Ícono alterno del grupo';
$string['cfg_iconalt_key'] = 'Ícono de llave';
$string['cfg_iconalt_lock'] = 'Ícono de candado';
$string['cfg_iconalt_locked'] = 'Ícono de candado_cerrado';
$string['cfg_iconalt_mnet'] = 'Ícono MNET';
$string['cfg_iconalt_o365'] = 'Ícono Microsoft 365';
$string['cfg_iconalt_plus'] = '\'Icono signo_más';
$string['cfg_iconalt_rightarrow'] = 'Ícono flecha hacia-la-derecha';
$string['cfg_iconalt_stop'] = 'Círculo rojo';
$string['cfg_iconalt_user'] = 'Ícono de usuario';
$string['cfg_iconalt_user2'] = 'Ícono alterno de usuario';
$string['cfg_iconalt_userlock'] = 'Ícono de usuario con candado';
$string['cfg_loginflow_authcode'] = 'Flujo de Código de Autorización (recomendado)';
$string['cfg_loginflow_key'] = 'Flujo de Ingreso';
$string['cfg_loginflow_rocreds'] = 'Otorgamiento de Credenciales de Contraseña al Propietario del Recurso';
$string['cfg_logoutendpoint_desc'] = 'La URI del endpoint de salida de su proveedor de identidad a ser usada.';
$string['cfg_logoutendpoint_key'] = 'Endpoint de salida';
$string['cfg_opname_desc'] = 'Esta es una etiqueta de cara al usuario final que identifica el tipo de credenciales que debe usar el usuario para ingresar. Esta etiqueta es usada en las porciones que dan cara al usuario de este plugin para identificar a su proveedor.';
$string['cfg_opname_key'] = 'Proveedor Visualizar Nombre';
$string['cfg_redirecturi_key'] = 'URL de Redirección';
$string['cfg_signoffintegration_key'] = 'Salida Única (de Moodle a IdP)';
$string['cfg_userrestrictions_key'] = 'Restricciones del Usuario';
$string['cfg_userrestrictionscasesensitive_key'] = 'MAYÚSCULAS/minúsculas si importan en Restricciones de Usuario';
$string['clientauthmethod'] = 'Método de autenticación del cliente';
$string['clientcert'] = 'Clave pública de certificado del cliente';
$string['clientid'] = 'ID de aplicación';
$string['clientid_help'] = 'Su aplicación registrada / ID del cliente en el IdP';
$string['clientprivatekey'] = 'Clave privada del certificado del cliente';
$string['clientsecret'] = 'Secreto del cliente';
$string['clientsecret_help'] = 'Cuando se usa el método de autenticación por  <b>secreto</b>, este es el secreto del cliente en el IdP. En algunos proveedores, también es referido como una clave.';
$string['delete_token'] = 'Eliminar token';
$string['delete_token_and_reference'] = 'Eliminar token y referencia';
$string['error_invalid_client_authentication_method'] = 'Método inválido de autenticación del cliente';
$string['errorauthdisconnectemptypassword'] = 'La contraseña no puede estar vacía';
$string['errorauthdisconnectemptyusername'] = 'El nombre_de_usuario no puede estar vacío';
$string['errorauthdisconnectifmanual'] = 'Si se usa el método de ingreso manual, escriba debajo las credenciales.';
$string['errorauthdisconnectinvalidmethod'] = 'Se recibió método de ingreso inválido.';
$string['errorauthdisconnectnewmethod'] = 'Usar Método de Ingreso';
$string['errorauthdisconnectusernameexists'] = 'Ese nombre_de_usuario ya está tomado. Por favor, elija uno diferente.';
$string['errorauthgeneral'] = 'Hubo un problema al ingresarlo. Por favor contacte a su administrador para asistencia.';
$string['errorauthinvalididtoken'] = 'Se recibió id_token inválido';
$string['errorauthloginfailednouser'] = 'Ingreso inválido: Usuario no encontrado en Moodle. Si este sitio tiene habilitada la configuración "authpreventaccountcreation" , esto podría significar que Usted necesita que un administrador cree primeramente una cuenta para Usted..';
$string['errorauthnoaccesstoken'] = 'Token de acceso no recibido';
$string['errorauthnoauthcode'] = 'No se recibió código de Autorización del servidor de identidad. Las bitácoras de error podrían tener más información';
$string['errorauthnohttpclient'] = 'Por favor configure un cliente HTTP.';
$string['errorauthnoidtoken'] = 'id_token de OpenID Connect no recibido.';
$string['errorauthunknownstate'] = 'Estado desconocido.';
$string['errorauthuseralreadyconnected'] = 'Usted ya está conectado a un usuario diferente de OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'El usuario de OpenID Connect que se autenticó ya está conectado a un usuario Moodle.';
$string['errorbadloginflow'] = 'Tipo de autenticación especificada inválida. Nota: Si Usted está recibiendo esto después de una instalación o actualización reciente, por favor liempie su caché de Moodle.';
$string['errorinvalidredirect_message'] = 'La URL a la que Usted se está tratando de redirigir no existe.';
$string['errorjwtbadpayload'] = 'No se pudo leer la carga útil (payload) JWT.';
$string['errorjwtcouldnotreadheader'] = 'No se pudo leer encabezado JWT';
$string['errorjwtempty'] = 'Se recibió JWT vacío o no-es-cadena';
$string['errorjwtinvalidheader'] = 'Encabezado JWT inválido';
$string['errorjwtmalformed'] = 'Se recibió JWT malformada.';
$string['errorjwtunsupportedalg'] = 'JWS Alg o JWE no soportado';
$string['errorlogintoconnectedaccount'] = 'Este usuario de Microsoft 365 está conectado a una cuenta Moodle, pero no está habilitado el ingreso OpenID Connect para esta cuenta Moodle. Por favor, ingrese a la cuenta Moodle usando el método de autenticación definido en la cuenta para usar las características de Microsoft 365';
$string['errornodisconnectionauthmethod'] = 'Nopuede desconectarse porque no hay un plugin de autenticación como respaldo habilitado. (ya sea el método previo de ingreso del usuario o el método de ingreso manual).';
$string['erroroidccall'] = 'Error en OpenID Connect. Por favor, revise las bitácoras para más información.';
$string['erroroidccall_message'] = 'Error en OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'El punto_final del token debe estar usando SSL/TLS para esto.';
$string['erroroidcclientinvalidendpoint'] = 'URI de Punto_final inválido recibido.';
$string['erroroidcclientnoauthendpoint'] = 'No está configurado el \'\'endpoint\' de autenticación. Por favor, configúrelo con $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Por favor, configure credenciales del cliente con setcreds';
$string['erroroidcclientnotokenendpoint'] = 'No está configurado punto_final de token. Por favor configúrelo con $this->setendpoints';
$string['erroroidcnotenabled'] = 'El plugin de autenticación OpenID Connect no está habilitado.';
$string['errorrestricted'] = 'Este sitio tiene restricciones puestas en los usuarios que pueden ingresar con OpenID Connect. Estas restricciones actualmente le impiden a Usted completar este intento de ingresar.';
$string['errorucpinvalidaction'] = 'Se recibió acción inválida.';
$string['event_debug'] = 'Mensaje de depuración';
$string['eventuserauthed'] = 'Usuario Autorizado con OpenID Connect';
$string['eventuserconnected'] = 'Usuario conectado con OpenID Connect';
$string['eventusercreated'] = 'Usuario creado con OpenID Connect';
$string['eventuserdisconnected'] = 'Usuario desconectado con OpenID Connect';
$string['eventuserloggedin'] = 'Usuario ingresado con OpenID Connect';
$string['heading_additional_options'] = 'Opciones adicionales';
$string['heading_basic'] = 'configuraciones básicas';
$string['heading_debugging'] = 'Depuración';
$string['heading_display'] = 'Visualizar';
$string['heading_sign_out'] = 'Integración de la Salida';
$string['heading_user_restrictions'] = 'Restricciones del usuario';
$string['idp_type_other'] = 'Otro';
$string['idptype'] = 'Tipo de Proveedor de Identidad (IdP)';
$string['mismatched'] = 'Discordante';
$string['na'] = 'n/d';
$string['oidc:manageconnection'] = 'Permitir Conexión y Desconexión OpenID';
$string['oidc:manageconnectionconnect'] = 'Permitir Conexión OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Permitir Desconexión OpenID';
$string['oidcresource'] = 'Recurso';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Autenticación OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Métodos anteriores de ingreso del usuario para deshacer conexiones Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'El método de ingreso anterior';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'El campo de contraseña del usuario anterior (encriptado).';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'La ID del usuario Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Tokens OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'El código de autenticación para el token';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'La caducidad del token';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'El token de ID';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'El identificador de usuario único OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'El nombre_de_usuario del usuario OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'El token de refresco';
$string['privacy:metadata:auth_oidc_token:scope'] = 'El alcance del token';
$string['privacy:metadata:auth_oidc_token:token'] = 'El token';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'El recurso del token';
$string['privacy:metadata:auth_oidc_token:userid'] = 'La ID del usuario del usuario Moodle';
$string['privacy:metadata:auth_oidc_token:username'] = 'El nombre_de_usuario del usuario Moodle';
$string['settings_fieldmap_feild_not_mapped'] = '(no mapeado)';
$string['settings_fieldmap_field_businessPhones'] = 'Teléfono de oficina';
$string['settings_fieldmap_field_city'] = 'Ciudad';
$string['settings_fieldmap_field_companyName'] = 'Nombre de Compañía';
$string['settings_fieldmap_field_country'] = 'País';
$string['settings_fieldmap_field_department'] = 'Departamento';
$string['settings_fieldmap_field_displayName'] = 'Mostrar Nombre';
$string['settings_fieldmap_field_employeeId'] = 'ID del empleado';
$string['settings_fieldmap_field_extensionattribute'] = 'Atributo de extensión {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Número de Fax';
$string['settings_fieldmap_field_givenName'] = 'Nombre Dado';
$string['settings_fieldmap_field_groups'] = 'Grupos';
$string['settings_fieldmap_field_jobTitle'] = 'Título del Trabajo';
$string['settings_fieldmap_field_mail'] = 'E-mail';
$string['settings_fieldmap_field_manager'] = 'Nombre del mánager';
$string['settings_fieldmap_field_manager_email'] = 'E-mail del mánager';
$string['settings_fieldmap_field_mobile'] = 'Móvil';
$string['settings_fieldmap_field_mobilePhone'] = 'Teléfono móvil';
$string['settings_fieldmap_field_objectId'] = 'ID del objeto';
$string['settings_fieldmap_field_officeLocation'] = 'Oficina';
$string['settings_fieldmap_field_postalCode'] = 'Código Postal';
$string['settings_fieldmap_field_preferredLanguage'] = 'Idioma';
$string['settings_fieldmap_field_preferredName'] = 'Nombre Preferido';
$string['settings_fieldmap_field_roles'] = 'Roles';
$string['settings_fieldmap_field_state'] = 'Estado';
$string['settings_fieldmap_field_streetAddress'] = 'Dirección Postal';
$string['settings_fieldmap_field_surname'] = 'Apellido(s)';
$string['settings_fieldmap_field_teams'] = 'Equipos';
$string['settings_fieldmap_field_telephoneNumber'] = 'Número de Teléfono';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nombre_de_usuario(UPN)';
$string['settings_page_application'] = 'IdP y autenticación';
$string['settings_page_field_mapping'] = 'Mapeos de campo';
$string['settings_page_other_settings'] = 'Otras opciones';
$string['settings_section_authentication'] = 'Autenticación';
$string['settings_section_basic'] = 'Configuraciones básicas';
$string['settings_section_other_params'] = 'Otros parámetros';
$string['table_action'] = 'Acción';
$string['table_matching_details'] = 'Detalles';
$string['ucp_disconnect_details'] = 'Esto desconectará su cuenta Moodle de {$a}. Usted necesitará crear un nombre_De_usuario y contraseña para ingresar a Moodle.';
$string['ucp_disconnect_title'] = '{$a} Desconexión';
$string['ucp_login_start'] = 'Comenzar a usar {$a} para ingresar a Moodle';
$string['ucp_login_start_desc'] = 'Esto cambiará su cuenta para que use {$a} para ingresar a Moodle. Una vez habilitado, Usted ingresará usando sus credenciales de {$a} - su nombre_de_usuario y contraseña actuales de Moodle no funcionarán. Usted puede desconectar su cuenta en cualquier momento y regresar a ingresar normalmente.';
$string['ucp_login_status'] = 'el ingreso con {$a} está:';
$string['ucp_login_stop'] = 'Dejar de usar {$a} para ingresar a Moodle';
$string['ucp_o365accountconnected'] = 'Esta cuenta de Microsoft 365 ya está conectada con otra cuenta Moodle.';
$string['ucp_status_disabled'] = 'Deshabilitado';
$string['ucp_status_enabled'] = 'Habilitado';
$string['ucp_title'] = 'Gestión de {$a}';
$string['update_oncreate_and_onlogin'] = 'En creación y en cada ingreso';
$string['update_oncreate_and_onlogin_and_usersync'] = 'En creación, cada ingreso, y cada ejecución de trabajo de sincronización de usuario';
$string['update_onlogin_and_usersync'] = 'En cada ingreso, y cada ejecución de trabajo de sincronización de usuario';
