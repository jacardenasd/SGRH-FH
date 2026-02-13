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
 * Strings for component 'collabora', language 'es_mx', version '4.4'.
 *
 * @package     collabora
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_discovery'] = 'Archivo XML descubrimiento de Collabora';
$string['collabora:addinstance'] = 'Añadir documento colaborativo a un curso';
$string['collabora:directdownload'] = 'Descargar directamente el documento';
$string['collabora:editlocked'] = 'Editar un documento colaborativo bloqueado';
$string['collabora:lock'] = 'Bloquear/desbloquear un documento colaborativo';
$string['collabora:manageversions'] = 'Administrar versiones de un documento colaborativo';
$string['collabora:repair'] = 'Reparar un documento roto';
$string['collabora:view'] = 'Ver un documento colaborativo';
$string['collaboraurl'] = 'URL de Collabora';
$string['collaboraurlnotset'] = 'La URL de Collabora no está configurada para este sitio';
$string['couldnotdeleteversion'] = 'No se pudo eliminar versión';
$string['couldnotrestoreversion'] = 'No se pudo restaurar versión';
$string['current'] = 'Pestaña actual';
$string['defaultdisplay'] = 'Visualización predeterminada';
$string['defaultdisplaydescription'] = 'Descripción de Visualización predeterminada';
$string['defaultdisplayname'] = 'Nombre de Visualización predeterminada';
$string['defaultformat'] = 'Formato predeterminado';
$string['display'] = 'Visualizar';
$string['display_help'] = 'Cuando "Nueva pestaña" es seleccionada, el documento es mostrado en pantalla complerta en una nueva pestaña.';
$string['displaydescription'] = 'Descripción de visualización';
$string['displayname'] = 'Nombre de visualización';
$string['displayname_help'] = 'Si se habilita, el nombre actual del archivo es mostrado arriba del documento.';
$string['dnduploadcollabora'] = 'Crear un documento Collabora';
$string['enableversions'] = 'Habilitar versionado';
$string['enableversions_help'] = 'Si se habilita, una nueva versión es creada cada vez que se guardan los cambios. Estas versiones pueden ser descargadas y restauradas individualmente.';
$string['eventdocumentlocked'] = 'Documento colaborativo bloqueado';
$string['eventdocumentrepaired'] = 'Documento colaborativo reparado';
$string['eventdocumentunlocked'] = 'Documento colaborativo desbloqueado';
$string['format'] = 'Formato';
$string['fullscreen'] = 'Pantalla completa';
$string['height'] = 'Altura (0 para utomática)';
$string['initialfile'] = 'Archivo inicial';
$string['initialtext'] = 'Texto inicial';
$string['locked'] = 'Documento bloqueado por el profesor';
$string['lockedunlock'] = 'Documnto actualmente bloqueado, hacer clic aquí para desbloquearlo y permitir editarlo';
$string['modulename'] = 'Documento colaborativo';
$string['modulename_help'] = 'Con esta aplicación Usted puede conectarse a un Servidor Collabora en línea para crear un documento de texto, procesador de palabras, presentación o de hoja de cálculo, o subir un documento y trabajar en forma colaborativa en este documento.';
$string['modulenameplural'] = 'Documentos colaborativos';
$string['name'] = 'Nombre';
$string['new'] = 'Nueva pestaña';
$string['nogroupaccess'] = 'Esta actividad solamente está disponible para usuarios que sean miembros de un grupo del curso';
$string['pleasewait'] = 'Por favor espere...';
$string['pluginadministration'] = 'Configuraciones de documento colaborativo';
$string['pluginname'] = 'Documentos colaborativos';
$string['presentation'] = 'Presentación';
$string['privacy:metadata:collabora_extsystem'] = 'Contenido e información del archivo serán compartidos con Collabora para permitir trabajo colaborativo';
$string['privacy:metadata:collabora_extsystem:filecontent'] = 'El contenido del archivo';
$string['privacy:metadata:collabora_extsystem:lastmodified'] = 'La hora de cuando el archivo fue modificado por última vez';
$string['privacy:metadata:collabora_extsystem:username'] = 'El nombre_de_usuario';
$string['privacy:metadata:core_files'] = 'mod_collabora almacena los archivos colaborativos.';
$string['repair'] = 'Reparar';
$string['repair_failed'] = 'El documento no pudo ser reparado';
$string['repair_succeeded'] = 'El documento ha sido reparado';
$string['repairdocument'] = 'Reparar documento "{$a}"';
$string['repairdocumentconfirm'] = '¿Realmente desea intentar reparar el documento actual?';
$string['repairdocumentconfirm_help'] = 'A veces, el servidor Collabora no carga el último documento debido a un conflicto de versiones o a un proceso bloqueado.<br>
Normalmente, este tipo de problemas se resuelven por sí solos, pero puede llevar un tiempo y, mientras tanto, no podrá trabajar con su documento.<br>
Si intenta utilizar esta función de reparación, se iniciará un nuevo proceso en el servidor Collabora y se asignará al último documento guardado en Moodle.<br>
<strong>Nota: asegúrese de que el documento no esté siendo utilizado actualmente por otros usuarios. De lo contrario, recibirán un mensaje de error si intentan guardar el documento.</strong>';
$string['requiredfortext'] = 'Obligatorio cuando el formato es \'Texto especificado\'';
$string['requiredforupload'] = 'Obligatorio cuando el formato es \'Subida de archivo\'';
$string['restorewindowsize'] = 'Restaurar tamaño de ventana';
$string['setting_allowcollaboraserverexplicit'] = 'Permitir explícitamente la URL de Collabora';
$string['setting_allowcollaboraserverexplicit_help'] = '<strong>Nota:</strong> Esta configuración puede representar un riesgo de seguridad. Solo debe activarla si su servidor Collabora se ejecuta en una red privada o en el mismo host que Moodle.<br>
Si uno de los hosts definidos en <strong>$CFG->curlsecurityblockedhosts</strong> accede a su servidor Collabora, debe habilitar esta configuración o eliminar el host de la lista de bloqueados.';
$string['setting_connection'] = 'Conexión';
$string['setting_header_security'] = 'Seguridad';
$string['setting_share_userimages'] = 'Comparta imágenes de usuario con los usuarios de Collabora.';
$string['setting_share_userimages_help'] = 'Los usuarios que trabajan juntos en un documento pueden ver las imágenes de usuario en el editor de Collabora. Si no desea que esto ocurra, desactive esta opción.';
$string['setting_showlegacytemplates'] = 'Mostrar plantillas heredadas antiguas';
$string['setting_showlegacytemplates_help'] = 'Cuando se crea un documento nuevo, también se pueden utilizar las plantillas heredadas antiguas además de las plantillas definidas aquí.';
$string['setting_showserveraudit'] = 'Mostrar auditoría del servidor';
$string['setting_showserveraudit_help'] = 'Si se activa, el usuario administrador del sitio tiene un elemento de menú adicional "Auditoría del servidor" en el menú del editor de Collabora, que muestra información sobre el servidor de Collabora.';
$string['setting_templates'] = 'Plantillas';
$string['spreadsheet'] = 'Hoja de cálculo';
$string['task_cleanup'] = 'Limpieza';
$string['template_fixed_text'] = 'Archivo de texto simple con contenido predefinido';
$string['template_fixed_upload'] = 'Subir su propia plantilla';
$string['template_legacy_presentation'] = 'Plantilla de presentación heredada antigua';
$string['template_legacy_spreadsheet'] = 'Plantilla de hoja de cálculo heredad antigua';
$string['template_legacy_wordprocessor'] = 'Plantilla de procesador de texto heredada antigua';
$string['templates'] = 'Plantillas';
$string['templates_dynamic'] = 'Plantillas dinámicas';
$string['templates_legacy'] = 'Plantillas heredadas antiguas';
$string['text'] = 'Texto especificado';
$string['uicompact'] = 'Interfaz compacta';
$string['uimode'] = 'Modo de interfaz';
$string['uiserver'] = 'Interfaz predeterminada del servidor';
$string['uitabbed'] = 'Interfaz con pestañas';
$string['unlockedlock'] = 'Documento actualmente desbloqueado, hacer clic aquí para bloquearlo y así impedir edición';
$string['unsupportedtype'] = 'Tipo de archivo no soportado {$a}';
$string['upload'] = 'Subida de archivo';
$string['wordprocessor'] = 'Documento de procesador de texto';
