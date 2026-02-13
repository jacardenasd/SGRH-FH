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
 * Strings for component 'enrol_lti', language 'es_mx', version '4.4'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Añadir contenido';
$string['adddeployment:deploymentid'] = 'ID del despliegue';
$string['adddeployment:deploymentid_help'] = 'A cada despliegue de la herramienta (este sitio) en una plataforma le será asignado una ID de despliegue que es única para el registro. La ID del despliegue debe estar registrada con la herramienta (este sitio) antes de que sean permitidas las invocaciones desde el despliegue respectivo de la herramienta.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID del despliegue inválido. Esta ID del despliegue ya existe para este registro de App.';
$string['adddeployment:name'] = 'Nombre del despliegue';
$string['addtocourse'] = 'Añadir al curso';
$string['addtogradebook'] = 'Añadir al libro de calificaciones';
$string['allowframeembedding'] = 'Nota: Se recomeinda que se habilite la configuración del sitio para \'Permitir incrustación de marco\', de forma tal que las herramientas se muestren dentro de un marco, en lugar de que se muestren en una ventana nueva.';
$string['authltimustbeenabled'] = 'Nota: Este plugin requiere que también esté habilitado el elp plugin de autenticación LTI.';
$string['cartridgeurl'] = 'URL de Cartucho';
$string['cookiesarerequired'] = '\'Cookies\' están bloqueadas por su navegador';
$string['cookiesarerequiredinfo'] = 'Esta herramienta no puede ser invocada porque su navegador al parecer está bloqueando las \'cookies\' de terceros.
<br><br>
Para usar esta herramienta, intente cambiar las configuraciones para \'cookies\' o intente usar un navegador diferente.';
$string['copiedtoclipboard'] = '{$a} copiado al portapapeles';
$string['copytoclipboard'] = 'Copiar al portapapeles';
$string['couldnotestablishproxy'] = 'No pudo establecerse proxy con consumidor.';
$string['customproperties'] = 'Propiedades personalizadas';
$string['deeplinkingurl'] = 'URL enlazado profundo';
$string['deletedactivity'] = 'Actividad eliminada';
$string['deletedactivityalt'] = 'La actividad compartida por esta instancia ha sido eliminada';
$string['deletedactivitydescription'] = 'La actividad compartida por esta instancia ha sido eliminada. Usted puede seleccionar otra actividad para compartir al editar la instancia; o, si ya no se necesita, usted puede simplemente eliminar la instancia. Eliminar la instancia quitará cualquier inscripción de usuario asociada.';
$string['deploymentadd'] = 'Añadir un despliegue';
$string['deploymentaddnotice'] = 'Despliegue añadido';
$string['deploymentdelete'] = 'Eliminar despliegue';
$string['deploymentdeleteconfirm'] = 'Advertencia: El eliminar un despliegue  resultará en una pérdida de acceso para cualquier usuario que siga enlaces de recursos amarrados a este despliegue de herramienta en la plataforma. Los servicios de sincronización de calificación y miembros también serán removidos para estos recursos. ¿Está seguro de querer eliminar deployment ID \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Despliegue eliminado';
$string['deploymentid'] = 'ID del despliegue';
$string['deployments'] = 'Despliegues';
$string['deploymentsinfo'] = 'Una ID del despliegue será generada por la plataforma cuando la herramienta sea hecha disponible en un contexto. Esto puede ocurrir al momento del registro, o podría ocurrir después, cuando la herramienta sea hecha disponible a un curso o categoría específica. La ID del despliegue debe ser ingresada aquí antes de que sean permitidos los despliegues desde el despliegue de esa herramienta.';
$string['details'] = 'Detalles';
$string['editplatformdetails'] = 'Editar detalles de la plataforma';
$string['endpointltiversionnotice'] = 'Los endpoints de herramienta inferiores son solamente para la configuración manual LTI 1.3. Para versiones anteriores (1.1/2.0), los detalles para los consumidores pueden ser encontrados en la página de \'Publicados como herramientas LTI\', accesible vía la navegación del curso.';
$string['enrolenddate'] = 'Fecha de término';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden acceder solamente hasta antes de esta fecha.';
$string['enrolenddateerror'] = 'La fecha del fin de la inscripción no puede ser anterior a la fecha del inicio';
$string['enrolisdisabled'] = 'El plugin de \'Publicar como una herramienta LTI\' está deshabilitado.';
$string['enrolltiversionincorrect'] = 'El recurso no está configurado para usarse sobre LTI antiguos (versiones 1.1/2.0). Por favor póngase en contacto con el administrador de esta herramienta.';
$string['enrolmentfinished'] = 'Terminó la inscripción.';
$string['enrolmentnotstarted'] = 'La inscripción no ha iniciado.';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_help'] = 'Lapso de tiempo que es válida la inscripción, comenzando  con el momento en el que el usuario se inscribe a si mismo desde el sistema remoto. Si está deshabilitado, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente podrán empezar a acceder a partir de esta fecha.';
$string['existingregistrationerror'] = 'Ya existe un registro para este emisor y ID de cliente.';
$string['failedrequest'] = 'Falló la solicitud. Razón: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acceder a la herramienta, por favor siga el enlace inferior.';
$string['gradesync'] = 'Sincronización de calificación';
$string['gradesync_help'] = 'Si es que las calificaciones de la herramienta son enviadas al sistema remoto (consumidor LTI).';
$string['incorrecttoken'] = 'La ficha (token) era incorrecta; por favor, revise la URL e inténtelo nuevamente, o póngase en contacto con el administrador de esta herramienta.';
$string['invalidexpiredregistrationurl'] = 'URL de registro inválida o expirada. Por favor compruebe la URL  e inténtelo nuevamente.';
$string['invalidrequest'] = 'Solicitud inválida';
$string['invalidtoolconsumer'] = 'Consumidor de herramienta inválido.';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Detalles de invocación';
$string['launchdetails_help'] = 'Se necesitan una URL de cartucho (también llamada URL de configuración) más un secreto o una URL de invocación (launch URL) para configurar la herramienta.';
$string['launchurl'] = 'URL de invocación (launch URL)';
$string['loginurl'] = 'URL para iniciar ingreso';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Detalles de invocación';
$string['lti13launchdetails_help'] = 'La URL de invocación y las propiedades personalizadas solamente son requeridas cuando se configura manualmente un enlace a recurso en la plataforma. Donde sea posible, los profesores debería favorecer el proceso de la selección del contenido (enlace profundo) para la creación de enlaces a recursos.';
$string['lti:config'] = 'Configurar instancias de\'Publicar como herramienta LTI\'';
$string['lti:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Hubo un problema al buscar la configuración de OpenID desde la plataforma. El resultado no era JSON válido. Esto también podría ser causado por configuración de hosts bloqueados. Por favor asegúrese de que su sitio esté configurado para conectar al dominio de la plataforma e inténtelo nuevamente usando una nueva URL de registro.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Configuración de herramienta o datos de invocación inválidos. No se pudo encontrar el despliegue (deployment ID: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Datos inválidos de invocación.  El recurso \'{$a}\' no está disponible o no existe.';
$string['ltiadvlauncherror:invalidregistration'] = 'Configuración de herramienta o datos para invocar inválidos. No se pudo encontrar un registro de la plataforma  (emisor: {$a->platform}, client ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Datos inváli dos de invocación. El campo personalizado \'id\' es requerido para invocar una actividad o un recurso sobre LTI Advantage.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Las herramientas Legacy LTI (1.1/2.0) están deprecadas. El contenido debería de ser compartido usando  LTI Advantage.';
$string['ltiversion'] = 'Versión LTI';
$string['ltiversion_help'] = 'La versión de LTI que será usada para acceder al contenido publicado.

LTI Advantage permite que el contenido sea publicado en plataformas pre-registradas sin la necesidad de hacerle cambios a la plataforma cada vez que sea publicado contenido nuevo. El contrato de seguridad es entre la plataforma y la herramienta.

Las versiones Legacy (antiguas) (1.1 y 2.0), requieren que sea creado un nuevo registro en el consumido para cada pieza de contenido nuevo publicado, porque cada pieza de contenido publicado tiene su propio contrato de seguridad con el sitio del consumidor y debe ser configuado de a uno en uno.';
$string['managedeployments'] = 'Gestionar despliegues';
$string['maxenrolled'] = 'Máximo de usuarios inscritos';
$string['maxenrolled_help'] = 'El número máximo de usuarios remotos que pueden acceder a la herramienta. Si se configura a \'0\' , el número de usuarios remotos es ilimitado.';
$string['maxenrolledreached'] = 'Ya se ha alcanzado el número máximo de usuarios remotos a los que se les permite acceder a la herramienta.';
$string['membersync'] = 'Sincronización de usuario';
$string['membersync_help'] = 'Si es que un trabajo agendado sincroniza usuarios inscritos en el sistema remoto con inscripciones en este curso, creando una cuenta para cada usuario remoto conforme sea necesario, e inscribiéndolos o des-incribiéndolos (darlos de baja) según se requiera.

Si se configura en NO, en el momento en que un usuario remoto acceda a la herramienta, se le creará una cuenta para él y será inscrito automáticamente.';
$string['membersyncmode'] = 'Modo de sincronización de usuario';
$string['membersyncmode_help'] = 'Si es que los usuarios remotos deberían de se inscritos o des-inscritos (dados de baja)  de este curso.';
$string['membersyncmodeenrolandunenrol'] = 'Inscribir nuevo y des-inscribir (dar de baja) a usuarios faltantes';
$string['membersyncmodeenrolnew'] = 'Inscribir nuevos usuarios';
$string['membersyncmodeunenrolmissing'] = 'Des-inscribir (dar de baja) usuarios faltantes';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'No se encontraron despliegues de herramienta';
$string['nopublishedcontent'] = 'Aun no se han publicado recursos o actividades';
$string['noregisteredplatforms'] = 'Sin plataformas registradas';
$string['notoolsprovided'] = 'Sin herramientas proporcionadas';
$string['opensslconfiginvalid'] = 'LTI 1.3 requiere que esté configurada y disponible para su servidor web un openssl.cnf válido. Por favor póngase en contacto con el administrador del sitio para configurar y habilitar openssl para este sitio.';
$string['opentool'] = 'Abrir herramienta';
$string['platformdetails'] = 'Detalles de la plataforma';
$string['platformdetailsinfo'] = 'Una vez que la herramienta haya sido configurada en la plataforma, los detalles de la plataforma deben ser grabados aquí para completar el registro.
<ul>
<li>Para registros dinámicos, esta información será configurada automáticamente y no serán necesarios más cambios</li>
<li>Para registros manuales, esta información debe ser copiada manualmente desde la plataforma.</li>
</ul>';
$string['pluginname'] = 'Publicar como herramienta LTI';
$string['pluginname_desc'] = 'El plugin de \'Publicar como herramienta LTI\', en conjunto con el plugin de autenticación LTI, les permite a los usuarios remotos acceder a cursos y actividades selectos. En otras palabras, Moodle funciona como un proveedor de herramienta LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'La lista de usuarios inscritos vía un proveedor LTI.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'El momento cuando el usuario accedió por última vez al curso';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La última calificación que el usuario tiene grabada de haber tenido';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'El momento cuando el usuario fue inscrito';
$string['privacy:metadata:enrol_lti_users:userid'] = 'La ID del usuario';
$string['provisioningmode'] = 'Modo provisionamiento';
$string['provisioningmode_help'] = 'Esta configuración determina como son manejadas las cuentas en la primera invocación.
Varios modos están soportados:
<ul>
<li>Nuevas cuentas solamente (automático). Las cuentas serán creadas automáticamente para los usuarios que invoquen desde la plataforma. Esto es lo predeterminado para invocaciones de estudiantes.</li>
<li>Cuentas existentes y nuevas (petición). Se le dará al usuario una opción de qué hacer. Ellos pueden decidir enlazar a una cuenta existente, o que les sea creada una cuenta nueva. Esta es la opción más flexible y la predeterminada para invocaciones de profesores.</li>
<li>Cuentas existentes solamente (petición). Se le pedirá al usuario que enlace a una cuenta existente y no puede acceder a los recursos de la herramienta sin hacerlo.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Alumno invoca primero modo de provisionamiento';
$string['provisioningmodeteacherlaunch'] = 'Profesor invoca primero modo de provisionamiento';
$string['publishedcontent'] = 'Contenido publicado';
$string['publishedcontent_help'] = 'Un recurso o una actividad publicada puede ser usado en plataformas registradas vía el flujo de la selección de contenido (enlazado profundo). Adicionalmente, un enlace a recurso puede ser creado manualmente en la plataforma al usar la URL de invocación y las propiedades personalizadas proporcionadas.';
$string['registeredplatforms'] = 'Plataformas registradas';
$string['registeredplatformsltiversionnotice'] = 'Las plataformas enlistadas debajo están registradas para comunicación LTI 1.3. Para versiones anteriores, no se requiere registro del cliente.';
$string['registerplatform:accesstokenurl'] = 'URL de token de acceso';
$string['registerplatform:accesstokenurl_help'] = 'La URL a donde serán enviadas las solicitudes del token de acceso por la herramienta. Será proporcionada por la plataforma.';
$string['registerplatform:authrequesturl'] = 'URL de solicitud de autenticación';
$string['registerplatform:authrequesturl_help'] = 'La URL a donde serán enviadas las solicitudes de autenticación OpenID Connect por la herramienta. Será proporcionada por la plataforma.';
$string['registerplatform:clientid'] = 'ID del cliente';
$string['registerplatform:clientid_help'] = 'Una cadena de caracteres usada para identificar el registro de la herramienta en la plataforma. Será proporcionado por la plataforma.';
$string['registerplatform:duplicateregistrationerror'] = 'ID inválida del cliente. Esta ID del cliente ya está registrada para la ID de plataforma proporcionada.';
$string['registerplatform:invalidurlerror'] = 'URL inválida. ¿Ha incluido http:// o https://?';
$string['registerplatform:jwksurl'] = 'URL del conjunto de claves públicas';
$string['registerplatform:jwksurl_help'] = 'La URL del conjunto de claves públicas o JWKS, usada para obtener la clave pública. Será proporcionada por la plataforma.';
$string['registerplatform:name'] = 'Nombre de la plataforma';
$string['registerplatform:name_help'] = 'Un nombre corto que describe la plataforma. Esto puede ser cambiado en cualquier momento.';
$string['registerplatform:platformid'] = 'ID de plataforma (emisor)';
$string['registerplatform:platformid_help'] = 'La URL que identifica a la plataforma de aprendizaje del tercero. Será proporcionado por la plataforma.';
$string['registerplatformadd'] = 'Registrar una plataforma';
$string['registerplatformaddnotice'] = 'Registro de plataforma añadido';
$string['registerplatformdelete'] = 'Eliminar registro de plataforma';
$string['registerplatformdeleteconfirm'] = '¿Está seguro de querer eliminar el registro para la plataforma \'{$a}\'? Esto también quitará todas las implementaciones de herramienta almacenadas con este registro.';
$string['registerplatformdeletenotice'] = 'Registro de plataforma eliminado';
$string['registerplatformedit'] = 'Editar registro';
$string['registerplatformeditnotice'] = 'Registro de plataforma actualizado';
$string['registration'] = 'Registro de herramienta publicada';
$string['registrationdeeplinklabel'] = 'Añadir contenido desde {$a}';
$string['registrationdynamic'] = 'Registro dinámico';
$string['registrationmanual'] = 'Registro manual';
$string['registrationresourcelinklabel'] = 'Invocar contenido desde {$a}';
$string['registrationstatus'] = 'Estado';
$string['registrationstatusactive'] = 'Activo';
$string['registrationstatuspending'] = 'Pendiente';
$string['registrationurl'] = 'URL de Registro';
$string['registrationurl_help'] = 'Si se usa una URL de registro (también llamada URL del proxy), entonces la herramienta es configurada automáticamente.';
$string['registrationurlinfomessage'] = 'Si la plataforma soporta el Registro Dinámico, use la URL de registro inferior. Para más información sobre el registro dinámico, vea la documentación <a href="{$a}">Publicar como herramienta LTI</a>.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Requerir que el curso o la actividad esté completada antes de la sincronización de calificaciones';
$string['returnurlnotset'] = 'No se configuró la URL de retorno';
$string['roleinstructor'] = 'Rol para profesor';
$string['roleinstructor_help'] = 'El rol asignado en la herramienta al profesor remoto.';
$string['rolelearner'] = 'Rol para estudiante';
$string['rolelearner_help'] = 'Este es el rol que le será asignado en la herramienta al estudiante remoto.';
$string['secret'] = 'Secreto';
$string['secret_help'] = 'Una cadena de caracteres que es compartida con el sistema  remoto (consumidor LTI) para proporcionarles acceso a la herramienta.';
$string['sharedexternaltools'] = 'Publicadas como herramientas LTI';
$string['successfulregistration'] = 'Registro exitoso';
$string['tasksyncgrades'] = 'Publicar como sincronización de calificaciones de herramienta LTI';
$string['tasksyncmembers'] = 'Publicar como sincronización de usuarios de herramienta LTI';
$string['tooldetails'] = 'Detalles de la herramienta';
$string['toolsprovided'] = 'Herramientas publicadas';
$string['toolsprovided_help'] = 'Una herramienta puede ser compartida con otro sitio al proporcionar, ya sea detalles de invocación o una URL de registro.';
$string['tooltobeprovided'] = 'Herramienta a ser publicada';
$string['toolurl'] = 'URL de herramienta';
$string['userdefaultvalues'] = 'Valores por defecto del usuario';
$string['viewplatformdetails'] = 'Ver detalles de la plataforma';
$string['viewtoolendpoints'] = 'Ver endpoints de la herramienta';
