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
 * Strings for component 'plagiarism_origai', language 'es_mx', version '4.4'.
 *
 * @package     plagiarism_origai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountconfig'] = 'Configuración de la Cuenta';
$string['adminconfig'] = 'Configuración del plugin de detección de plagio OriginalityAI';
$string['adminconfigdesc'] = 'El plugin Originality.AI ofrece una solución confiable e integral para detectar contenido generado por IA y plagio, lo que ayuda a educadores y estudiantes a garantizar la autenticidad de su trabajo.<br>Para obtener instrucciones de configuración y detalles de uso, consulte <a target="_blank" href="https://docs.google.com/document/d/1KzYqrmDeGbTCO-JlO2zDSV-cXuVUyeTH03F0buzufyw/edit">nuestra guía</a>.<br><br><br>';
$string['adminconfigsavesuccess'] = 'Configuración guardadas del plugin de detección de plagio OriginalityAI';
$string['ai'] = 'IA';
$string['aiModel'] = 'Modelo de IA';
$string['aiModel_help'] = 'English (Inglés) para contenido optimizado para Inglés, o Multi-idioma para soporte en varios idiomas.';
$string['aipercentage'] = '{$a} Probablemente IA';
$string['airesulttitle'] = 'Comprobación de IA';
$string['aiscan'] = 'Escaneo IA desde OriginalityAI';
$string['allowstudentreportaccess'] = 'Permitir al estudiante acceso para ver el reporte';
$string['apiconnectionerror'] = 'Falló la conexión con API. Por favor compruebe las configuraciones de la cuenta';
$string['apikey'] = 'Clave API del plugin OriginalityAI';
$string['apikeyhelp'] = 'Si usted no tiene una clave API, por favor <a target="_blank" href="https://originality.ai?lmref=IJh0Aw">clic aquí para apedir la suya.</a>';
$string['apikeyrequired'] = 'Se requiere clave API de OriginalityAI';
$string['apiurl'] = 'URL base de clave API de OriginalityAI';
$string['apiurlchanged'] = 'La URL de la API debe ser actualizada a {$a} para que los escaneos corran suavemente.';
$string['apiurlrequired'] = 'Se requiere URL de API de OriginalityAI';
$string['assign'] = 'Tarea';
$string['classifierinfo'] = 'Información Clasificador:';
$string['defaultscanerror'] = 'Falló el escaneo';
$string['defaultsettings'] = 'Configuraciones Predeteminadas';
$string['disabledformodule'] = 'El plugin de OriginalityAI está deshabilitado para este módulo';
$string['enableautomatedscan'] = 'Permitir escaneo automático al enviar';
$string['enableautomatedscan_help'] = 'Automáticamente escanea los envíos de tareas después que hayan sido enviados. desactive para escanear manualmente.';
$string['enablemodule'] = 'Habilitar Plugin para {$a}';
$string['failmsg'] = 'Falla';
$string['fake'] = 'Falso';
$string['fileattachmentnotsupported'] = 'El tipo de archivo anexo no está soportado';
$string['fleschscore'] = 'Puntaje de Nivel de Calificación de Flesch:';
$string['forum'] = 'Foro';
$string['fullreportlink'] = 'Enlace al reporte completo';
$string['fullscreenview'] = 'Ver en pantalla completa';
$string['humanpercentage'] = '{$a} Probablemente Original';
$string['inserterror'] = 'Error al intentar insertar registros a la Base de datos';
$string['lite'] = 'English (Inglés)';
$string['matchinfo'] = 'Información de coincidencia';
$string['matchpercentage'] = 'Porcentaje de coincidencia';
$string['multilang'] = 'Multi-Idioma';
$string['nopageaccess'] = 'Acceso Negado a esta página';
$string['origai'] = 'Plugin de detección de plagio OriginalityAI';
$string['origaicoursesettings'] = 'Configuraciones de OriginalityAI';
$string['origaienable'] = 'Habilitar OriginalityAI';
$string['original'] = 'Original';
$string['originalityai'] = 'Originality.ai';
$string['phrase'] = 'Frase:';
$string['plagiarismscan'] = 'Revisión de plagio de OriginalityAI';
$string['plagresulttitle'] = 'Puntaje de Concordancia';
$string['pluginname'] = 'Plugin de detección de plagio OriginalityAI';
$string['privacy:metadata:plagiarism_origai_client'] = 'Para poder generar reporte de plagio, los datos de envío necesitan ser intercambiados con OriginalityAI.';
$string['privacy:metadata:plagiarism_origai_client:submission_content'] = 'El contenido del envío es enviado a OriginalityAI para reporte de plagio.';
$string['privacy:metadata:plagiarism_origai_files'] = 'Información que enlaza el envío hecho a Moodle con los resultados de plagio generados por OriginalityAI.';
$string['privacy:metadata:plagiarism_origai_plagscan:fleschgradelevel'] = 'El nivel de calificación Flesch del envío.';
$string['privacy:metadata:plagiarism_origai_plagscan:totaltextscore'] = 'El puntaje total del texto del envío.';
$string['privacy:metadata:plagiarism_origai_plagscan:updatedtime'] = 'Un sello de tiempo que indica cuando fue modificado por última vez  el envío hecho por el usuario';
$string['privacy:metadata:plagiarism_origai_plagscan:userid'] = 'La ID del usuario que ha hecho el envío.';
$string['quiz'] = 'Examen';
$string['real'] = 'Real';
$string['reportpagetitle'] = 'Reporte de Revisión de IA de Originalidad';
$string['retryscan'] = 'Reintentar escaneo';
$string['runaicheck'] = 'Coprobación IA';
$string['runplagiarismcheck'] = 'Comprobar Plagio';
$string['scanfailed'] = 'Falló el escaneo';
$string['scaninprogress'] = 'Escaneo en progreso';
$string['scanqueued'] = 'Escaneo puesto en cola de espera';
$string['scanqueuednotification'] = 'Escaneo exitosamente puesto en cola de espera. El procesamiento iniciará pronto.';
$string['scanreportfailed'] = 'No se pudo obtener reporte del escaneo';
$string['score'] = 'Puntaje:';
$string['sendqueuedsubmissionstaskname'] = 'Plugin OriginalityAI - manejar archivos puestos en cola de espera';
$string['standard'] = 'Estándar';
$string['status'] = 'Estado =';
$string['studentdisclosure'] = 'Advertencia al Estudiante';
$string['studentdisclosure_help'] = 'Este texto será mostrado a todos los estudiantes en la página para subir archivo.';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán sujetos a un servicio de detección de plagio';
$string['successmsg'] = 'Éxito';
$string['textextractionfailed'] = 'No se pudo extraer texto';
$string['totalmatches'] = 'Coincidencia Total:';
$string['updateerror'] = 'Error al intentar actualizar registros en Base de datos';
$string['useorigai'] = 'Habilitar OriginalityAI';
$string['website'] = 'Sitio web:';
