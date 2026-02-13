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
 * Strings for component 'tool_objectfs', language 'es_mx', version '4.4'.
 *
 * @package     tool_objectfs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backportfiletypesclass'] = 'Falta el backport MDL-53240. Seguimiento: https://github.com/catalyst/moodle-tool_objectfs#applying-core-patches';
$string['check:proxyrangerequestsdisabled'] = 'La configuración de solicitud de rango de proxy está deshabilitada.';
$string['check:tagging:error'] = 'Error al intentar etiquetar el objeto';
$string['check:tagging:migrationerror'] = 'Las tareas de migración de etiquetado de objetos tienen un retardo de error > 0';
$string['check:tagging:migrationok'] = 'Tareas de migración de etiquetado (marcado) de objetos OK';
$string['check:tagging:na'] = 'El etiquetado (marcado) no está habilitado o no es compatible con el sistema de archivos';
$string['check:tagging:ok'] = 'Etiquetado (marcado) de objetos OK';
$string['check:tagging:syncerror'] = 'Los objetos tienen errores de sincronización de etiquetas (marcas)';
$string['check:tagging:syncok'] = 'No hay objetos que informen errores de sincronización';
$string['check:tokenexpiry:expired'] = 'El token caducó hace {$a->dayssince} días. Caducó el {$a->time}.';
$string['check:tokenexpiry:expiresin'] = 'El token vence en {$a->dayssince} días el {$a->time}';
$string['check:tokenexpiry:na'] = 'No se implementó la verificación de vencimiento del token para el sistema de archivos o no se configuró ningún token';
$string['check_objects_location_task'] = 'Tarea de verificación de ubicación de objetos del sistema de archivos de objetos';
$string['checkproxy_range_request'] = 'Proxy de solicitud de rango de URL firmado previamente';
$string['checktagging_migration_status'] = 'Estado de migración del etiquetado (marcas)  de objetos';
$string['checktagging_status'] = 'Etiquetado (marcas) de objetos';
$string['checktagging_sync_status'] = 'Estado del etiquetado (marcas) de objetos';
$string['checktoken_expiry'] = 'Caducidad del token';
$string['client_not_available'] = 'El cliente remoto configurado no está disponible. Asegúrese de que esté instalado correctamente.';
$string['delete_local_empty_directories_task'] = 'Tarea de eliminación de directorios locales vacíos del sistema de archivos de objetos';
$string['delete_local_objects_task'] = 'Trabajo de asunto local eliminar sistema de archivo de objeto';
$string['delete_orphaned_object_metadata_task'] = 'Trabajo de eliminación de metadatos huérfanos del sistema de archivos de objetos';
$string['filename:missingfiles'] = 'archivosfaltantes';
$string['fixturefilemissing'] = 'Falta el archivo del fixture';
$string['generate_status_report_task'] = 'Trabajo generador de reporte de estatus del objeto';
$string['not_enabled'] = 'No están habilitados los trabajos en segundo plano del sistema de archivo de objeto. No se moverá ubicación de objetos hasta que Usted lo haga.';
$string['object_status:count'] = 'Objetos';
$string['object_status:delta:a'] = 'Delta (filedir - objectfs)';
$string['object_status:delta:b'] = 'Delta (objectfs - filedir)';
$string['object_status:filedir:count'] = 'Conteo de archivos';
$string['object_status:filedir:update'] = 'Actualizar estadísticas';
$string['object_status:last_run'] = 'Este reporte fue generado en {$a}';
$string['object_status:location'] = 'Ubicación del objeto';
$string['object_status:location:deltacount'] = 'Delta (número)';
$string['object_status:location:deltasize'] = 'Delta (tamaño)';
$string['object_status:location:duplicated'] = 'Duplicado en directorio_de_archivos y almacenamiento externo';
$string['object_status:location:duplicatedcount'] = 'Duplicados (número)';
$string['object_status:location:duplicatedsize'] = 'Duplicados (tamaño)';
$string['object_status:location:error'] = 'Faltante en el directorio de archivos y en el almacenamiento externo (<a href="/admin/tool/objectfs/missing_files.php">ver archivos</a>)';
$string['object_status:location:external'] = 'Solamente en almacenamiento externo';
$string['object_status:location:externalcount'] = 'Externo (número)';
$string['object_status:location:externalsize'] = 'Externo (tamaño)';
$string['object_status:location:local'] = 'Marcado como solo en directorio_de_archiv';
$string['object_status:location:localcount'] = 'Local (número)';
$string['object_status:location:localsize'] = 'Local (tamaño)';
$string['object_status:location:missingcount'] = 'Errro (número)';
$string['object_status:location:missingsize'] = 'Error (tamaño)';
$string['object_status:location:orphaned'] = 'Marcado como huérfano (no en la tabla {files})';
$string['object_status:location:orphanedcount'] = 'Huérfanos (número)';
$string['object_status:location:orphanedsize'] = 'Huérfanos (tamaño)';
$string['object_status:location:orphanedsizeunknown'] = 'Desconocido';
$string['object_status:location:total'] = 'Total';
$string['object_status:location:totalcount'] = 'Total (número)';
$string['object_status:location:totalsize'] = 'Total (tamaño)';
$string['object_status:location:unknown'] = 'Ubicación de objeto desconocida';
$string['object_status:locationhistory'] = 'Historial de ubicación de objetos';
$string['object_status:log_size'] = 'Tamaño en bitácora';
$string['object_status:mime_type'] = 'Tipo MIME';
$string['object_status:never_run'] = 'El trabajo para generar este reporte no ha sido corrido.';
$string['object_status:page'] = 'Estatus del objeto';
$string['object_status:runningsize'] = 'Total acumulado';
$string['object_status:size'] = 'Tamaño total';
$string['object_status:tag_count'] = 'Marcas de objetos';
$string['page:missingfiles'] = 'Falta en filedir y en archivos de almacenamiento externo';
$string['pleaseselect'] = 'Por favor, seleccionar';
$string['pluginname'] = 'Sistema de archivo de almacenamiento de objetos';
$string['pluginsettings'] = 'Configuraciones del plugin';
$string['presignedurl_testing:checkclientsettings'] = 'Comprobar la configuración del cliente en';
$string['presignedurl_testing:checkconnectionsettings'] = 'Comprobar las configuraciones de la conexión en';
$string['presignedurl_testing:checkfssettings'] = 'Comprobar las configuraciones del sistema de archivos en';
$string['presignedurl_testing:downloadfile'] = 'Descargar archivo';
$string['presignedurl_testing:fileiniframe'] = 'archivo en iframe';
$string['presignedurl_testing:iframesnotsupported'] = 'Su navegador no soporta IFrames';
$string['presignedurl_testing:openinbrowser'] = 'Abrir archivo en navegador';
$string['presignedurl_testing:page'] = 'Prueba de URL firmadas previamente';
$string['presignedurl_testing:presignedurlsnotsupported'] = 'Las URL firmadas previamente no son compatibles con el sistema de archivos de almacenamiento elegido.';
$string['presignedurl_testing:test1'] = '1) Pruebe los enlaces a continuación para descargar el archivo con contenthash como nombre:';
$string['presignedurl_testing:test2'] = '2) Pruebe los enlaces a continuación para descargar el archivo con el nombre del archivo original:';
$string['presignedurl_testing:test3'] = '3) Pruebe los enlaces a continuación para abrir contenido en línea:';
$string['presignedurl_testing:test4'] = '4) En este bloque los IFrames deben ser visibles y funcionales:';
$string['presignedurl_testing:test5'] = '5) Pruebe el encabezado Expires usando IFrames:';
$string['privacy:metadata'] = 'El plugin objectfs de la herramienta no almacena ningún dato personal.';
$string['pull_objects_from_storage_task'] = 'Trabajo para descargar objetos de sistema de archivo de objetos';
$string['push_objects_to_storage_task'] = 'Trabajo para subir objeto de sistema de archivo';
$string['rangerequestfailed'] = '<strong>URL</strong>: {$a->url}<br><strong>Código HTTP</strong>: {$a->httpcode}<br><strong>Detalles</strong>: {$a->details}';
$string['recover_error_objects_task'] = 'Trabajo para recuperar error de objeto';
$string['settings'] = 'Configuraciones';
$string['settings:aws:base_url'] = 'URL Base';
$string['settings:aws:base_url_help'] = 'URL alternativa para CNAME o puntos finales compatibles con S3. Déjelo en blanco para uso normal de S3.';
$string['settings:aws:bucket'] = 'Bucket (cubeta)';
$string['settings:aws:bucket_acl_help'] = 'Permiso de acceso para archivos creados dentro del bucket S3.';
$string['settings:aws:bucket_help'] = 'Bucket (cubeta) Amazon S3 en donde almacenar archivos.';
$string['settings:aws:header'] = 'Configuraciones de Amazon S3';
$string['settings:aws:key'] = 'Clave';
$string['settings:aws:key_help'] = 'Credencial de clave de Amazon S3';
$string['settings:aws:key_prefix'] = 'Prefijo a usar en bucket';
$string['settings:aws:region'] = 'región';
$string['settings:aws:region_help'] = 'Región de Gateway API Amazon S3.';
$string['settings:aws:sdkcredserror'] = 'No se encontraron las credenciales de AWS. No es seguro habilitar esta configuración. Consulte la <a href="https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html">documentación de AWS</a>.';
$string['settings:aws:sdkcredsok'] = 'Se encontraron credenciales de AWS. Esta configuración se puede habilitar de forma segura.';
$string['settings:aws:secret'] = 'Secreto';
$string['settings:aws:secret_help'] = 'Credencial secreta de Amazon S3.';
$string['settings:aws:usesdkcreds'] = 'Utilice la cadena de proveedor de credenciales predeterminada para encontrar las credenciales de AWS';
$string['settings:azure:accountname'] = 'Nombre de la cuenta';
$string['settings:azure:accountname_help'] = 'El nombre de la cuenta de almacenamiento.';
$string['settings:azure:container'] = 'Nombre del contenedor';
$string['settings:azure:container_help'] = 'El nombre del contenedor que almacenará los blobs (borrones).';
$string['settings:azure:header'] = 'Configuraciones de Almacenamiento Azure Blob';
$string['settings:azure:sastoken'] = 'Firma de Acceso Compartido';
$string['settings:azure:sastoken_help'] = 'Esta Firma de Acceso Compartido debería de tener solamente las siguientes dos capacidades: Read, write (Leer, escribir).';
$string['settings:batchsize'] = 'Numerar archivos en un lote';
$string['settings:batchsize_help'] = 'Número de archivos que se transferirán en una ejecución de cron';
$string['settings:checksheader'] = 'Comprobaciones';
$string['settings:clientnotavailable'] = 'El cliente para el sistema de archivos actual no está disponible. Instale las dependencias necesarias si este es el cliente de almacenamiento de objetos deseado.';
$string['settings:clientselection:filesystemnotdefined'] = '$CFG->alternative_file_system_class debe configurarse en su config.php de Moodle';
$string['settings:clientselection:fsapinotbackported'] = 'La API del sistema de archivos (MDL-46375) no está retroportada. Consulte la sección README sobre retroportación del archivo <a href="https://github.com/catalyst/moodle-tool_objectfs#backporting">Retroportación</a>.';
$string['settings:clientselection:header'] = 'Selección de Sistema de Archivo de Almacenamiento';
$string['settings:clientselection:mismatchfilesystem'] = 'Esta configuración debe coincidir con $CFG->alternative_file_system_class';
$string['settings:clientselection:title'] = 'Sistema de Archivo de Almacenamiento';
$string['settings:clientselection:title_help'] = 'El sistema de archivos de almacenamiento. Esto es también el sistema de archivo activo para los trabajos en segundo plano.';
$string['settings:connectionfailure'] = 'No se pudo establecer la conexión con el almacenamiento de objetos. {$a}';
$string['settings:connectionreadfailure'] = 'No se pudo leer el archivo de verificación de conexión desde el almacenamiento de objetos.';
$string['settings:connectionsuccess'] = 'Si se pudo establecer conexión con el almacenamiento de objetos.';
$string['settings:consistencydelay'] = 'Retraso por consistencia';
$string['settings:consistencydelay_help'] = 'Por cuanto tiempo debe de haber existido un objeto, después de haberse transferido a almacenamiento de objetos externo, antes de que sea un candidato para eliminación local.';
$string['settings:deleteerror'] = 'No se pudo eliminar el archivo de verificación de permisos del almacenamiento de objetos.';
$string['settings:deleteexternal'] = 'Eliminar objetos externos';
$string['settings:deleteexternal_help'] = 'Eliminar objetos externos al eliminar el archivo en Moodle. No se recomienda si se pretende compartir un almacén de objetos entre varios entornos; sin embargo, es un requisito para cumplir con el RGPD.
<br/>Eliminar archivo externo al eliminar huérfanos: Esto eliminará el archivo externo cuando se ejecute la tarea de eliminar metadatos huérfanos.
<br/>Eliminar completamente: Indica al almacenamiento externo que elimine el archivo inmediatamente (¡usarlo con precaución! Si se carga el mismo archivo mientras se elimina, podrían surgir problemas).';
$string['settings:deletelocal'] = 'Eliminar objetos locales';
$string['settings:deletelocal_help'] = 'Eliminar objetos locales una vez que estén en almacenamiento de objetos externos después del retraso por consistencia.';
$string['settings:deletesuccess'] = 'Si se podría eliminar el archivo del almacenamiento de objetos: no se recomienda que el usuario tenga permisos de eliminación.';
$string['settings:do:header'] = 'Configuración de DigitalOcean Spaces';
$string['settings:do:key'] = 'Clave';
$string['settings:do:region'] = 'Región';
$string['settings:do:secret'] = 'Secreto';
$string['settings:do:space'] = 'Espacio';
$string['settings:enablelogging'] = 'Habilitar bitácoras en tiempo real';
$string['settings:enablelogging_help'] = 'Habilitar o deshabilitar bitácoras de sistema de archivo. Sacará información diagnóstica a la bitácora de error de PHP.';
$string['settings:enabletasks'] = 'Habilitar trabajos de transferencia';
$string['settings:enabletasks_help'] = 'Habilitar o deshabilitar los trabajos de sistema de archivo de objeto que mueven archivos entre el directorio_de_archivos y el almacenamiento de objeto externo.';
$string['settings:error:numeric'] = 'Por favor ingrese un número que sea mayor o igual a 0.';
$string['settings:filetransferheader'] = 'Configuraciones de Transferencia de Archivos';
$string['settings:fulldelete'] = 'Eliminar por completo';
$string['settings:generalheader'] = 'Configuraciones Generales';
$string['settings:handlernotset'] = 'No está configurado $CFG->alternative_file_system_class; el sistema de archivos no podrá leer desde el almacenamiento de objetos. Las tareas en segundo plano pueden seguir funcionando.';
$string['settings:maxorphanedage'] = 'Edad máxima del objeto huérfano';
$string['settings:maxorphanedage_help'] = 'Si se establece en cero, no se eliminarán los metadatos huérfanos antiguos de los objetos. De lo contrario, se eliminarán estos registros, ya que ya no son relevantes. Un objeto huérfano es aquel cuyos metadatos existen en la tabla {tool_objectfs_objects}, pero el archivo referenciado ya no existe.';
$string['settings:maxtaggingiterations'] = 'Sincronización ad hoc de etiquetado de objetos con número máximo de iteraciones';
$string['settings:maxtaggingiterations:desc'] = 'El número máximo de veces que la tarea ad hoc de sincronización de etiquetado se volverá a poner en cola. Para evitar un desbordamiento infinito accidental.';
$string['settings:maxtaggingperrun'] = 'Sincronización ad hoc de etiquetado de objetos: máximo de objetos por ejecución';
$string['settings:maxtaggingperrun:desc'] = 'El número máximo de objetos para sincronizar etiquetas por iteración de tarea ad hoc de sincronización de etiquetado.';
$string['settings:maxtaggingtaskstospawn'] = 'Número máximo de tareas de migración de etiquetado paralelo';
$string['settings:maxtaggingtaskstospawn:desc'] = 'Cada disparo de la tarea programada `trigger_update_object_tags` generará esta cantidad de tareas, menos aquellas que ya se están ejecutando.';
$string['settings:maxtaskruntime'] = 'Trabajo en tiempo-de-ejecución para transferencia máxima';
$string['settings:maxtaskruntime_help'] = 'Trabajos en segundo plano que manejan la transferencia de objetos desde y hacia el almacenamiento de objeto externo. Esta configuración controla el tiempo_de_corrida máximo para todos los trabajos relacionados con transferencia de objetos.';
$string['settings:minimumage'] = 'Edad mínima';
$string['settings:minimumage_help'] = 'Edad mínima que debe existir un objeto en el directorio_de_archivos local antes de que sea considerado';
$string['settings:notconfigured'] = 'Falta configuración.';
$string['settings:openstack:authurl'] = 'URL de la API de autenticación';
$string['settings:openstack:authurl_help'] = 'La URL de la API de autenticación';
$string['settings:openstack:container'] = 'Nombre del contenedor';
$string['settings:openstack:container_help'] = 'El nombre del contenedor que almacenará los objetos.';
$string['settings:openstack:password'] = 'Contraseña de la cuenta';
$string['settings:openstack:password_help'] = 'La contraseña del usuario de la cuenta de almacenamiento.';
$string['settings:openstack:projectid'] = 'ID del proyecto';
$string['settings:openstack:projectid_help'] = 'El ID del proyecto Openstack';
$string['settings:openstack:region'] = 'Región Openstack';
$string['settings:openstack:region_help'] = 'La región de disponibilidad de Openstack';
$string['settings:openstack:tenantname'] = 'Nombre del inquilino';
$string['settings:openstack:tenantname_help'] = 'El nombre del inquilino de Openstack';
$string['settings:openstack:username'] = 'Nombre del usuario';
$string['settings:openstack:username_help'] = 'El nombre de usuario de la cuenta de almacenamiento.';
$string['settings:permissioncheckpassed'] = 'Revisión de permisos pasada.';
$string['settings:permissionreadfailure'] = 'No se pudo leer el archivo de verificación de permisos desde el almacenamiento de objetos.';
$string['settings:preferexternal'] = 'Preferir objetos externos';
$string['settings:preferexternal_help'] = 'Si un archivo está almacenado tanto localmente como en un almacenamiento de objeto externo, leer desde externo\\. esta configuración es principalmente para fines de prueba e introduce un overhead (exceso de trabajo) para revisar la ubicación.';
$string['settings:presignedcloudfronturl:cloudfront_custom_policy_json'] = 'JSON de \'política personalizada\' (opcional)';
$string['settings:presignedcloudfronturl:cloudfront_custom_policy_json_help'] = 'JSON de "política personalizada" de distribución de AWS (¡avanzado!)';
$string['settings:presignedcloudfronturl:cloudfront_key_pair_id_help'] = 'Esto se genera utilizando el usuario \'root\' de la cuenta de AWS (junto con el archivo de clave privada .pem).';
$string['settings:presignedcloudfronturl:cloudfront_pem_found'] = 'El contenido de la clave privada de Cloudfront (.pem) es válido.';
$string['settings:presignedcloudfronturl:cloudfront_pem_not_found'] = 'La clave privada de Cloudfront (.pem) no es válida.';
$string['settings:presignedcloudfronturl:cloudfront_private_key_pem'] = 'Clave PRIVADA .pem';
$string['settings:presignedcloudfronturl:cloudfront_resource_domain'] = 'DOMINIO (inc. https://)';
$string['settings:presignedcloudfronturl:cloudfront_resource_domain_help'] = 'Ingrese el nombre de dominio desde el cual se solicitan los recursos en Cloudfront (consulte Distribución de AWS Cloudfront)';
$string['settings:presignedcloudfronturl:enablepresignedcloudfronturls'] = 'URL firmadas previamente de Cloudfront';
$string['settings:presignedcloudfronturl:enablepresignedcloudfronturls_help'] = 'Habilite las URL firmadas previamente de Cloudfront configurando un perfil de distribución de Cloudfront en AWS.';
$string['settings:presignedcloudfronturl:header'] = 'Configuración de Cloudfront (experimental)';
$string['settings:presignedcloudfronturl:warning'] = 'Antes de habilitar la URL firmada previamente de Cloudfront, asegúrese de que todas las pruebas se hayan superado correctamente:';
$string['settings:presignedurl:coresupport'] = 'La característica no es compatible con el núcleo, debe seleccionarla específicamente: <a href="https://github.com/catalyst/moodle-tool_objectfs#allow-support-for-xsendfile-in-alternative-file-system">Compatibilidad con xsendfile</a>';
$string['settings:presignedurl:deletedsuccess'] = 'Archivos eliminados exitosamente.';
$string['settings:presignedurl:deletefiles'] = 'Eliminar archivos de prueba.';
$string['settings:presignedurl:enablepresigneds3urls'] = 'URL pre-firmadas de S3';
$string['settings:presignedurl:enablepresigneds3urls_help'] = 'Habilite las URL S3 firmadas previamente para solicitar contenido directamente desde el almacenamiento externo.';
$string['settings:presignedurl:enablepresignedurls'] = 'Habilitar URL firmadas previamente';
$string['settings:presignedurl:enablepresignedurls_help'] = 'Habilite las URL firmadas previamente para solicitar contenido directamente desde el almacenamiento externo.';
$string['settings:presignedurl:enablepresignedurlschoice'] = 'Método de firma';
$string['settings:presignedurl:expirationtime'] = 'Tiempo de expiración de la URL firmada previamente';
$string['settings:presignedurl:expirationtime_help'] = 'Todas las expiraciones se heredan del encabezado "Expira" enviado por Moodle. Si no se envía ningún encabezado, la expiración se establece en este valor predeterminado.';
$string['settings:presignedurl:filetypesclass'] = 'Las URL firmadas previamente no se pueden configurar, es necesario retroportar MDL-53240';
$string['settings:presignedurl:header'] = 'Configuración de URL firmadas previamente';
$string['settings:presignedurl:presignedminfilesize'] = 'Tamaño mínimo para URL pre-firmada (bytes)';
$string['settings:presignedurl:presignedminfilesize_help'] = 'Tamaño mínimo de archivo para ser redirigido a la URL previamente firmada.';
$string['settings:presignedurl:proxyrangerequests'] = 'Solicitudes de rango de proxy';
$string['settings:presignedurl:proxyrangerequests_help'] = 'No es necesario habilitar las URL prefirmadas. Para esta función, se utilizará el método de firma S3.';
$string['settings:presignedurl:testrangeerror'] = 'Solicitud de rango de prueba fallida';
$string['settings:presignedurl:testrangeok'] = 'Solicitud de rango probada exitosamente.';
$string['settings:presignedurl:warning'] = 'Antes de habilitar la URL firmada previamente, asegúrese de que todas las pruebas se hayan superado correctamente:';
$string['settings:presignedurl:whitelist'] = 'Lista blanca de URL firmadas previamente.';
$string['settings:presignedurl:whitelist_help'] = 'Sólo las extensiones de archivo incluidas en la lista blanca serán redirigidas a la URL previamente firmada.';
$string['settings:presignedurl:xsendfilefile'] = 'Retroportar MDL-68342 para obtener los beneficios de esta configuración.';
$string['settings:relyonorphancleanup'] = 'Eliminar archivo externo durante la limpieza de huérfanos';
$string['settings:sizethreshold'] = 'Umbral de tamaño mínimo (bytes)';
$string['settings:sizethreshold_help'] = 'Umbral de tamaño mínimo para transferir objetos a almacenamiento de objetos externo. Si los objetos son mayores de este tamaño, serán transferidos.';
$string['settings:tagging:help'] = 'El etiquetado de objetos permite adjuntar metadatos adicionales a los objetos en el almacén externo. Consulte TAGGING.md en el repositorio de Github del plugin para obtener información detallada sobre la configuración y las consideraciones. Actualmente, esto solo es compatible con el cliente externo S3.';
$string['settings:testingdescr'] = 'Esta configuración es principalmente para fines de prueba e introduce una sobrecarga para verificar la ubicación.';
$string['settings:testingheader'] = 'Configuraciones de la Prueba';
$string['settings:tokenexpirywarnperiod'] = 'Período de advertencia de vencimiento del token';
$string['settings:useproxy'] = 'Usar proxy';
$string['settings:useproxy_help'] = 'Objectfs puede usar un proxy configurado para acceder al almacenamiento externo.';
$string['settings:writefailure'] = 'No se pudo escribir el archivo de verificación de permisos desde el almacenamiento de objetos.';
$string['status:running'] = 'Ejecutándose';
$string['status:waiting'] = 'Esperando';
$string['table:objectcount'] = 'Número de objtos';
$string['table:status'] = 'Estado';
$string['table:tagsourcemeaning'] = 'Descripción';
$string['table:taskid'] = 'ID del trabajo';
$string['tagging:migration:invaliditerations'] = 'Número de iteración o recuento de iteraciones no válido';
$string['tagging:migration:limitreached'] = 'La iteración actual {$a} es mayor que el número máximo de iteraciones. Investigue si esto es lo esperado y necesita aumentar el límite, o si hay un problema al sincronizar las etiquetas (marcas) que causa un bucle infinito.';
$string['tagging:migration:nothingrunning'] = 'Actualmente no se están ejecutando trabajos ad hoc de migración de etiquetado';
$string['tagging:migration:notsupported'] = 'El sistema de archivos no habilita o admite el etiquetado (marcas). No se puede ejecutar la tarea de migración de etiquetas (marcas).';
$string['tagsource:environment'] = 'Entorno definido por la configuración "taggingenvironment", actualmente: "{$a}".';
$string['tagsource:environment:toolong'] = 'The value defined in objectfs_environment_name is too long. It must be < 128 chars';
$string['tagsource:location'] = 'Ubicación del archivo, ya sea "huérfano" o "activo".';
$string['tagsyncstatus:error'] = 'Error';
$string['tagsyncstatus:needssync'] = 'Esperando sincronización';
$string['tagsyncstatus:notrequired'] = 'No requerido / sincronizado';
$string['task:triggerupdateobjecttags'] = 'Poner en cola una tarea ad hoc para actualizar las etiquetas (marcas)  de los objetos';
$string['total_deleted_dirs'] = 'Número total de directorios eliminados:';
