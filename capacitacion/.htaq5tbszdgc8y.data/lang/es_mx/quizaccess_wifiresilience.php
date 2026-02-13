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
 * Strings for component 'quizaccess_wifiresilience', language 'es_mx', version '4.4'.
 *
 * @package     quizaccess_wifiresilience
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Respuesta cambiada';
$string['attempt'] = 'Intento';
$string['backtothequiz'] = 'Regresar al examen';
$string['changesmadereallygoaway'] = 'Sus respuestas no han sido guardadas en el servidor. ¿Está seguro de querer abandonar este intento?';
$string['createasnewattempt'] = 'Crear como un nuevo intento.';
$string['createasnewattempt_help'] = '***Precaución*** Crear un nuevo intento';
$string['createnewattempt'] = 'Crear nuevo intento';
$string['currentissue'] = 'Asunto actual';
$string['dangeryes'] = 'Si';
$string['dataprocessedsuccessfully'] = 'Datos procesados exitosamente ({$a}).';
$string['decryptingcomplete'] = 'Des-encriptación de archivo completada';
$string['decryptingfile'] = 'Des-encriptando archivo {$a}';
$string['delete'] = 'Eliminar';
$string['description'] = 'El examen está en modo <strong>Wifi Resiliente</strong> mode.<br />
<p style="text-align:left">
Solamente use el Modo Wifi Resiliente cuando:
<ul style="text-align:left">
<li>Todo el contenido en el examen es subido directamente a Moodle, por lo que no hay enlaces hacia archivos, sitios web ni a imágenes que se refieren a servidores externos.
<li>Los tipos de pregunta que usted usa en el examen no requieren un servidor externo (que sería el caso de Stack, Code Expert, Code Runner).
<li>No hay videos en el examen.
</ul>
<ul style="text-align:left">El uso de Safe Exam Browser es muy recomendable.</p>
</p>';
$string['descriptionlink'] = 'Subir archivos de respuesta';
$string['download'] = 'Descargar';
$string['downloadedecryptedfile'] = 'Descargar Archivo des-encriptado';
$string['downloadfile'] = 'Descargar como un archivo';
$string['emergencyfileoptions'] = 'Usted también puede descargar una copia de las respuestas';
$string['excludelist'] = 'Excluir archivos';
$string['excludelist_help'] = 'Enlace/archivo por línea. Excluir archivos/enlaces específicos de ser cacheados con el Trabajador del servicio. esto es útil cuando usted quiere que algunos archivos o enlaces sean en modo RedSolamente (que nunca sean cacheados).';
$string['extraroutes'] = 'Rutas extra';
$string['fetchandlog'] = 'Cacheo de archivos incrustados (anexos)';
$string['fetchandlog_help'] = 'Uno por línea. Si desea almacenar en caché archivos adjuntos (de cualquier tipo estático, es decir, docx, pdf, xls, zip, html, etc.) que están incrustados en algunas preguntas como recurso adicional o para lecturas adicionales, agregue las URL completas que desea que se almacenen en caché. Ejemplo: https://ejemplo.org/instrucciones.docx almacenará en caché el archivo instrucciones.docx que está incrustado en la(s) pregunta(s). Por lo general, los archivos adjuntos en los exámenes tienen "pluginfile.php" dentro del enlace. Tenga en cuenta que para orígenes cruzados (dominios remotos o subdominios diferentes, usted debe asegurarse de que ambos se brinden a través de https y también de que esos dominios permitan CORS. Importante: esta opción puede anular los principios de seguridad de las comunicaciones entre dominios, por lo que debe usarse con cuidado o, mejor aún, solo use archivos alojados localmente en el mismo dominio).';
$string['filearraystyle'] = '<br><h3>Estilo de Arreglo</h3>';
$string['fileencryptedinitvaluenobase64'] = 'El valor inicial de encriptación no está codificado base-64 apropiadamente.';
$string['fileencryptedkeynobase64'] = 'La clave AES encriptada no está codificado base-64 apropiadamente.';
$string['fileinitvaluenobase64'] = 'El valor inicial no está codificado base-64 apropiadamente.';
$string['filejsondecode'] = 'Decodificado Datos JSON: {$a}';
$string['filejsondecodeerror'] = 'Error JSON : {$a}';
$string['filekeynobase64'] = 'Clave AES no está codificada base-64 apropiadamente.';
$string['filenoattemptid'] = 'Los datos subidos no incluyen una ID del intento.';
$string['filenoattemptidupload'] = 'Este archivo parece que no tiene una ID del intento encriptado (attemptid). Usted ha seleccionado tomar ID del intento del parámetro JSON no encriptado. Por favor des-seleccione la opción e inténtelo de nuevo.';
$string['filenodecryptionkey'] = 'Se obtuvieron respuestas aparentemente codificadas, pero no hay clave para des-encriptación.';
$string['filenoresponses'] = 'El archivo al parecer no contiene respuestas.';
$string['filenoturlencoded'] = 'El Archivo de Datos NO está URL-ENCODED. Use datos como están.';
$string['filetype'] = 'Tipo';
$string['fileunabledecrypt'] = 'No se pudieron des-encriptar las respuestas: {$a}';
$string['fileunabledecryptkey'] = 'No se pudo des-encriptar la clave AES: {$a}';
$string['fileurlencoded'] = 'El archivo de datos está URL-ENCODED. Use datos URL-DECODED.';
$string['filewithkeyandiv'] = '<br><h3>Estilo Original (Con CLAVE y IV)</h3>"';
$string['filewithoutkeyandiv'] = '<br><h3>Estilo Original (Sin CLAVE o IV) - Bueno para usar en otras instancias Moodle o cuando las claves Pública y Privada están Dañadas.</h3>';
$string['filewrongquiz'] = 'Los datos subidos no pertenecen a este examen.';
$string['finishattemptsafterupload'] = '¿Enviar y terminar el intento contenido en el archivo de respuesta?';
$string['fromfile'] = 'Hora de envío en archivo subido';
$string['inspect'] = 'Inspeccionar archivos de respuesta';
$string['inspectingfile'] = 'Inspeccionando archivo {$a}';
$string['inspectingfiledesc'] = 'Aquí usted puede desencriptar y comprobar los archivos de respuesta. Los administradores pueden usar esta herramienta de inspección para ver intentos de examen, incluyendo la ID del curso, ID del examen, hora del envío, etc.';
$string['inspectionprocessedsuccessfully'] = 'Datos cargados exitosamente';
$string['lastsaved'] = 'Último guardado: {$a}';
$string['lastsavedtotheserver'] = 'Último guardado al servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Último guardado a esta computadora: {$a}';
$string['lastseen'] = 'Último visto';
$string['lastsync'] = 'Último sincronizado';
$string['livedevices'] = 'Dispositivos vivos';
$string['loadingstep1'] = 'Configurando {$a}';
$string['loadingstep10'] = 'Examen iniciando...';
$string['loadingstep2'] = 'Preparando estructura del examen...';
$string['loadingstep3'] = 'Preparando rutas estáticas y dinámicas de trabajador del servicio.';
$string['loadingstep4'] = 'Preparando base de datos del examen...';
$string['loadingstep5'] = 'Preparando preguntas del examen...';
$string['loadingstep6'] = 'Preparando navegación del examen...';
$string['loadingstep7'] = 'Encriptando datos del examen...';
$string['loadingstep8'] = 'Verificando estado de la red...';
$string['loadingstep9'] = 'Observando las solicitudes de red...';
$string['loadlocalresponses'] = 'Comprobar, descargar, guardar o eliminar respuestas almacenadas en <strong>esta</strong> computadora';
$string['localconfirmdeletelocal'] = '¿Está seguro de querer eliminar registro de Respuesta local: {$a}?';
$string['localconfirmdeletestatus'] = '¿Está seguro de querer eliminar registro de Estado: {$a}?';
$string['localnorecordsfound'] = 'No se encontraron registros locales';
$string['localresponsesfor'] = 'Respuestas almacenadas en esta máquina local para {$a}';
$string['localstorage'] = '<br>Almacenamiento Local :';
$string['localtabledelete'] = 'Eliminar';
$string['localtabledownload'] = 'Descargar';
$string['localtableheaderattempts'] = '<h3>indexedDB / WebSQL (Estado de Intentos)</h3>';
$string['localtableheaderencryptedattempts'] = '<h3>indexedDB / WebSQL (Intentos Encriptados)</h3>';
$string['localtableinfo'] = 'Resultados son SOLAMENTE para CLAVE: {$a->startwithkey} (Examen: <strong>{$a->name}</strong>)';
$string['localtablelastchangelocal'] = 'Último Cambiado Localmente';
$string['localtablelastsavedserver'] = 'Último Guardado en Servidor';
$string['localtablerecord'] = 'Registro';
$string['loggedinaswronguser'] = 'Usted ha ingresado con una cuenta diferente de la que fue utilizada para intentar el examen, Eso no funcionará. Elija Continuar para ingresar nuevamente como el usuario correcto.';
$string['logindialogueheader'] = 'Usted podría necesitar ingresar de nuevo al sitio';
$string['loginokagain'] = 'Su ingreso está OK ahora.';
$string['navdetails'] = 'Mostrar estado de dispositivo y servidor';
$string['navdetails_help'] = 'Mostrar el estado del servidor y del dispositivo la última vez que se guardaron los datos (loclmente y en el servidor). También muestra detalles del estado en línea (si es que el dispositivo/servidor) está o no conectado). También muestra un enlace para descargar el archivo de emergencia.';
$string['now'] = 'Ahora';
$string['or'] = 'o';
$string['pluginname'] = 'Modo Examen Wifi Resiliente';
$string['precachefiles'] = 'Pre-cachear archivos';
$string['precachefiles_help'] = 'Solo archivos estáticos. Un enlace por línea. Si usted quisiera que el trabajador del servicio pre-cache archivos específicos (solo archivos estáticos como por ejemplo .CSS, .JPG, .HTML, etc), por favor añada el enlace diecto para ellos, uno por línea. Nota. Las URL pre-cachadas serán servidas automáticamente usando una estrategia de caché primero.';
$string['prechecks'] = 'Mostrar comprobaciones técnicas';
$string['prechecks_help'] = 'Esta opción mostrará los detalles técnicos del navegador antes de comenzar el examen. Las comprobaciones son para trabajadores del servicio, almacenamiento local, solicitud de aumento de almacenamiento local y otras.';
$string['privatekey'] = 'Clave privada de encriptación';
$string['privatekey_desc'] = 'Puede utilizar criptografía de clave pública para proteger las respuestas descargadas. Para ello, debe proporcionar un par de claves pública y privada. Puede generar una clave privada utilizando <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> en la línea de comandos (si tiene OpenSSL instalado desde https://www.openssl.org/). A continuación, pegue el contenido del archivo rsa_1024_priv.pem en este cuadro.';
$string['processingcomplete'] = 'Procesamiento completado';
$string['processingfile'] = 'Procesando archivo {$a}';
$string['publickey'] = 'Clave pública de encriptación';
$string['publickey_desc'] = 'Esto debe corresponder con la clave privada. Usted puede generarla  desde la clave privada usando <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> y después pegar los contenidos de  rsa_1024_pub.pem aquí.';
$string['quizfinishtime'] = 'Límite de tiempo del examen (tiempo máximo permitido del examen)';
$string['reference'] = 'Referencia';
$string['refreshserviceworker'] = 'Refrescar Trabajador del servicio';
$string['resetserviceworker'] = 'Refiniciar Trabajador del servicio';
$string['responsefiles'] = 'Archivos de respuesta';
$string['responsefiles_help'] = 'Aquí puede cargar los archivos de respuestas de los estudiantes que no estaban conectados al momento de enviar la prueba. El archivo de respuestas contiene las respuestas guardadas sin conexión por el estudiante en cuestión. Los archivos de respuestas se guardan en el directorio de descargas de la computadora del estudiante. Se crea un <b>nuevo intento</b> para cada archivo de respuesta cargado. Si, por ejemplo, ya existe un intento, el intento creado es el segundo. Los intentos existentes <b>nunca</b> se sobrescriben.';
$string['reviewthisattempt'] = 'Revisar este intento';
$string['rule1error'] = '1. <font color=red>[Wifiresilience-SW] Trabajador del Servicio no está soportado en este navegador. <span id="sw_kind"></span></font>';
$string['rule1fail'] = '1. <font color=red>[Wifiresilience-SW] Trabajador del Servicio falló el registro.. Error: {$a} <span id="sw_kind"></span></font>';
$string['rule1start'] = '1. <font color=grey>[Wifiresilience-SW] Wifiresilience-exams-sw.js está Registrándose..</font>';
$string['rule1statusactive'] = '(Estado: Activo)';
$string['rule1statusinstalling'] = '(Estado: Instalando)';
$string['rule1statuswaiting'] = '(Estado: Esperando)';
$string['rule1success'] = '1. <font color=green>[Wifiresilience-SW] Trabajador del Servicio registro exitoso. <span id="sw_kind"></span>';
$string['rule2error'] = '<br>2. <font color=red>[Wifiresilience-SW] IndexedDB no está soportado.</font>';
$string['rule2start'] = '<br>2. <font color=grey>[Wifiresilience-SW] IndexedDB soporte ed Desconocido.</font>';
$string['rule2success'] = '<br>2. <font color=green>[Wifiresilience-SW] IndexedDB es soportado.</font>';
$string['rule3error'] = '<br>3. <font color=red>[Wifiresilience-SW] El Almacenamiento puede ser borrado por la Interfase del Usuario bajo presión de almacenamiento (solamente registros viejos).</font>';
$string['rule3start'] = '<br>3. <font color=grey>[Wifiresilience-SW] Persistencia del Almacenamiento es desconocida.</font>';
$string['rule3success'] = '<br>3. <font color=green>[Wifiresilience-SW] El almacenaje no será borrado excepto por acción explícita del usuario.</font>';
$string['rule4error'] = '<br>4. <font color=red>[Wifiresilience-SW] Almacenamiento del Navegador no puede ser calculado.</font>';
$string['rule4fail'] = '<br>4. <font color=red>[Wifiresilience-SW] Almacenamiento del Navegador (webkitTemporaryStorage)  no puede ser calculado.</font>';
$string['rule4start'] = '<br>4. <font color=grey>[Wifiresilience-SW] La Cuota de Almacenamiento actualmente disponible es Desconocida.</font>';
$string['rule4success'] = '<br>4. <font color=green>[Wifiresilience-SW] Almacenamiento del Navegador ya usa {$a->usedbytes} de {$a->grantedbytes}</font>';
$string['rule5error'] = '<br>5. <font color=red>[Wifiresilience-SW] Solicitud de Cuota de Almacenamiento Extra (1GB) ha Fallado.</font>';
$string['rule5fail'] = '<br>5. <font color=red>[Wifiresilience-SW] Solicitando Cuota Extra de Almacenamiento (1GB) ha Fallado. webkitPersistentStorage no soportado.</font>';
$string['rule5start'] = '<br>5. <font color=grey>[Wifiresilience-SW] Solicitando Cuota Extra de Almacenamiento es Desconocido (menos del almacenamiento disponible).</font>';
$string['rule5success'] = '<br>5. <font color=green>[Wifiresilience-SW] Solicitando Cuota Extra de Almacenamiento (1GB) es exitoso.</font>';
$string['rule6error'] = '<br>6. <font color=red>[Wifiresilience-SW] CacheAPI no está soportada.</font>';
$string['rule6start'] = '<br>6. <font color=grey>[Wifiresilience-SW] Solicitando infrmación acerca de  cacheAPI, estado: Desconocido.</font>';
$string['rule6success'] = '<br>6. <font color=green>[Wifiresilience-SW] CacheAPI está soportada.</font>';
$string['rule7error'] = '<br>7. <font color=red>[Wifiresilience-SW] Sincronización en segundo plano no está soportada.</font>';
$string['rule7start'] = '<br>7. <font color=grey>[Wifiresilience-SW] Solicitando información acerca de Sincronización en segundo plano, estado: Desconocido.</font>';
$string['rule7success'] = '<br>7. <font color=green>[Wifiresilience-SW] Sincronización en segundo plano está soportada.</font>';
$string['rulebgsyncfail'] = 'Falló Sincronización en segundo plano.';
$string['rulebgsyncsuccess'] = 'Sincronización en segundo plano disparada exitosamente.';
$string['rulebgsyncsupported'] = 'Sincronización en segundo plano no está soportada.';
$string['ruleswnotregisteredreset'] = 'Trabajador del Servicio no está registrado (Podría tener errores, o no estar incluido en el entorno de esta página, o ya estar des-registrado), usted no puede reiniciarlo ahorita.';
$string['ruleswnotregisteredstop'] = 'Trabajador del Servicio no está registrado (Podría tener errores, o no estar incluido en el entorno de esta página, o ya estar des-registrado), usted no puede detenerlo ahorita.';
$string['ruleswnotregisteredupdate'] = 'Trabajador del Servicio no está registrado (Podría tener errores, o no estar incluido en el entorno de esta página, o ya estar des-registrado), usted no puede actualizarlo ahorita.';
$string['savefailed'] = 'Nota: De tiempo en tiempo usted debería de:';
$string['savetheresponses'] = 'Descargar copia de respuestas';
$string['savingdots'] = 'Guardando al servidor...';
$string['savingtryagaindots'] = 'Intentando nuevamente guardar al servidor ...';
$string['serviceworkermgmt'] = 'Gestión del Trabajador del Servicio';
$string['status'] = 'Estado';
$string['stopserviceworker'] = 'Detener Trabajador del Servicio';
$string['submitallandfinishtryagain'] = 'Enviar todo y terminar (intentar nuevamente)';
$string['submitfailed'] = 'Falló envío del examen';
$string['submitfaileddownloadmessage'] = '<br /><strong>O</strong><br />{$a}<br />(Nota: NO se han perdido datos. Por favor dígale al vigilante del examen y ellos tomarán una copia de su archivo descargado y la procesarán).';
$string['submitfailedmessage'] = 'Sus respuestas no se pudieron enviar. Usted puede intentar:';
$string['submitting'] = '<h3>Enviando... Por favor, espere..</h3>';
$string['syncedfiles'] = 'Sincronizar archivos de respuesta en segundo plano';
$string['syncserviceworker'] = 'Disparar Sincronización en segundo plano';
$string['takeattemptfromjson'] = 'Usar ID de intento sin encriptar';
$string['takeattemptfromjson_help'] = 'Solo debe utilizar esta opción si Moodle no acepta el archivo de respuesta, por ejemplo, porque el intento del estudiante está dañado o ya no existe. Tenga en cuenta que el ID del intento en el archivo de respuesta siempre debe corresponder a un intento real. El intento debe ser creado primero por el participante o por el administrador (iniciado sesión como el participante afectado).';
$string['techerrors'] = 'Mostrar errores técnicos';
$string['techerrors_help'] = 'Esta característica es útil para comprender las razones técnicas subyacientes para la falla del envío del examen. Solamente muestra el error al fondo de la página de envío si hubiera alguno.';
$string['technicalchecks'] = 'Comprobaciones de almacenaje para navegador actual';
$string['technicalinspection'] = 'Inspección Técnica:<br>';
$string['testencryption'] = 'Probar encriptación de servidor y dispositivo';
$string['uploadfailed'] = 'Falló la subida';
$string['uploadfinishtime'] = 'Hora de Intento/Envío';
$string['uploadingresponsesfor'] = 'Subiendo respuestas para {$a}';
$string['uploadinspection'] = 'Inspeccionar respuestas';
$string['uploadinspectionfor'] = 'Inspeccionar respuestas para {$a}';
$string['uploadmoreresponses'] = 'Subir más respuestas';
$string['uploadresponses'] = 'Subir archivos de respuestas';
$string['uploadresponsesadmin'] = 'Los administradores pueden:';
$string['uploadresponsesfor'] = 'Subir archivo de respuestas para {$a}';
$string['usefinalsubmissiontime'] = 'Usar hora de envío final del archivo (si estuviera disponible)';
$string['usefinalsubmissiontime_help'] = 'Cuando el usuario intenta enviar y finalizar la prueba (o si el temporizador de la prueba la envía automáticamente al final), se agrega un parámetro llamado "final_submission_time" al archivo que muestra cuándo se realizó el envío. Si no se realizó ningún envío final, el valor de "final_submission_time" es 0. Si es 0, el script ignorará este parámetro y utilizará una de las siguientes opciones de tiempo de finalización.';
$string['watchxhr'] = 'Ver eventos en vivo';
$string['watchxhr_help'] = 'Una URL por línea. Algunos tipos de pregunta requieren comprobaciones en vivo o subidas con el servidor. Si fueran añadidas aquí, el plugin podrá contar el tiempo fuera-de-línea para el usuario, y entonces añadirlo automáticamente al tiempo extra total que se obtiene cuando terminan el examen sin precisar tiempo de gracia o tiempo límite.';
$string['webserviceaddtoken'] = 'Añadir Token al plugin <a href="{$a->wwwroot}/admin/settings.php?section=modsettingsquizcatwifiresilience">a nivel del plugin</a>, o <a href="{$a->wwwroot}/course/modedit.php?update={$a->quizcmid}&return=1">A nivel del examen</a> (en Configuraciones del examen. Tiene prioridad más alta que a nivel del sitio).';
$string['webservicedisabled'] = 'Servicios web no están habilitados. La Sincronización es Segundo Plano (automáticamente enviar copias de respuesta del estudiante de emergencia al servidor) no funcionará sin los Servicios Web Móviles. Usted puede corregir esto al:<br>';
$string['webserviceenablemobile'] = 'Habilitar Servicios web desde <a href="{$a}/admin/search.php?query=enablewebservices">aquí</a>';
$string['wifiresilience:adminmessages'] = 'Ver mensajes de administración';
$string['wifiresilience:browserchecks'] = 'Ver comprobaciones del navegador';
$string['wifiresilience:inspectresponses'] = 'Inspeccionar respuestas';
$string['wifiresilience:localresponses'] = 'Inspeccionar respuestas locales (almacenamiento local)';
$string['wifiresilience:uploadresponses'] = 'Subir archivos de respuestas';
$string['wifiresilience:viewlivedevices'] = 'Ver dispositivos en vivo';
$string['wifiresilience:viewtechchecks'] = 'Ver comprobaciones técnicas (aun y cuando esta opción esté deshabilitada vía configuraciones del examen)';
$string['wifiresilienceenabled'] = 'Modo Wifi Resiliente';
$string['wifiresilienceenabled_desc'] = 'Usted puede configurar si es que el modo Wifi Resiliente debería estar habilitado en forma predeterminada o no para nuevos exámenes.';
$string['wifiresilienceenabled_help'] = 'El objetivo de esta opción es permitir que los estudiantes intenten contestar un examen aunque la conexión de la red no sea confiable. Los estudiantes pueden moverse entre páginas del examen aun y cuando el servidor no esté disponible, y todas sus respuestas son almacenadas localmente, y enviadas al servidor en cuanto sea posible.';
$string['wifitoken'] = 'Token de sincronización en segundo plano';
$string['wifitoken_help'] = 'El token de servicio web para enviar archivos de emergencia en segundo plano cuando el dispositivo está conectado. Este token puede ser generado de  (Buscar "webservicetokens" / gestionar tokens) en las páginas de la administración del sitio.';
