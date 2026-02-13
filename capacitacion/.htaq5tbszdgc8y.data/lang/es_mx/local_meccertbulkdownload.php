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
 * Strings for component 'local_meccertbulkdownload', language 'es_mx', version '4.4'.
 *
 * @package     local_meccertbulkdownload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = '(todos)';
$string['archivenametemplatesitem'] = 'Plantillas para nombres de archivos';
$string['archivenametemplatesitem_desc'] = '<p>Las plantillas de nombre de archivo comprimido funcionan igual que las de PDF. Sin embargo, hay menos parámetros que se pueden utilizar:</p>
<table style="margin-bottom: 18px;">
<tr><td><strong>{{courseshortname}}</strong></td><td style="padding-left: 25px;">Nombre corto del curso</td></tr>
<tr><td><strong>{{coursecode}}</strong></td><td style="padding-left: 25px;">Código del curso</td></tr>
<tr><td><strong>{{cohortname}}</strong></td><td style="padding-left: 25px;">Nombre de la cohorte</td></tr>
<tr><td><strong>{{groupname}}</strong></td><td style="padding-left: 25px;">Nombre del grupo (solo si se exporta un solo grupo dentro de la course)</td></tr>
<tr><td><strong>{{fechadehoy(...)}}</strong></td><td style="padding-left: 25px;">Fecha de hoy</td></tr>
</table>
<p style="margin-bottom: 30px; color: red;"><strong>Atención:</strong> si dos archivos tienen el mismo nombre, el nuevo sobrescribe al anterior.</p>';
$string['archivenametemplatesitemsingular'] = 'Plantilla para nombre del archivo';
$string['bookconfirmmsg'] = 'El archivo comprimido con los certificados que se generará tendrá un tamaño estimado de';
$string['bookconfirmmsgfreespace'] = 'El espacio libre en disco en el servidor es (el valor detectado puede ser incorrecto):';
$string['bookconfirmmsglightversion'] = 'La versión ligera del plugin le permite descargar un máximo de {HOW MANY_CERT} certificados.';
$string['bookconfirmmsgnb'] = 'Nota. la estimación del archivo comprimido se basa en el tamaño promedio de los certificados indicados en las configuraciones del complemento.';
$string['bookconfirmmsgnotenoughspace'] = 'ADVERTENCIA: Parece que no hay suficiente espacio en el servidor para generar el archivo.';
$string['bookconfirmmsgserver'] = 'Sin embargo, el espacio requerido en el servidor para generarlo es el doble del tamaño del archivo, por lo tanto';
$string['bulkdownloadlink'] = 'Descargar Certificados';
$string['certcreation'] = 'Fecha de emisión del Certificado';
$string['certificateissuing'] = 'Período de emisión dle certificado';
$string['cohort'] = 'Cohorte';
$string['courseandgroup'] = 'Curso y grupo (del curso)';
$string['coursecompletion'] = 'Período de finalización del curso';
$string['coursecompletiondate'] = 'Fecha de finalización del curso';
$string['coursecompletionfrom'] = 'Desde';
$string['coursecompletionto'] = 'Hasta';
$string['coursegroup'] = 'Grupo (del curso)';
$string['createmanagestring'] = 'Creación y administración de archivos';
$string['createmanagestring_desc'] = 'Permite acceder a la página donde podrá crear, descargar y gestionar paquetes de certificados.<br>&nbsp;';
$string['credit'] = 'MoodEasy.com';
$string['deleteconfirmmsg'] = '¿Está seguro de que desea eliminar el siguiente archivo?';
$string['deleteerror'] = 'Error: archivo no eliminado';
$string['deletenoparam'] = 'Error: falta parámetro';
$string['deletesuccess'] = 'Archivo eliminado exitosamente';
$string['errornotemplate'] = 'Se debe definir al menos una plantilla para el nombre de los archivos PDF y al menos una para el nombre de los archivos comprimidos en la configuración del plugin.';
$string['errornotemplateparameter'] = 'Error: falta parámetro';
$string['errornotemplatereplacepack'] = 'Se produjo un error al sustituir los parámetros en la plantilla por el nombre de los archivos comprimidos.';
$string['errornotemplatereplacepdf'] = 'Se produjo un error al sustituir los parámetros en la plantilla para el nombre del archivo PDF.';
$string['estimatedarchivesize'] = 'Tamaño promedio del certificado (KB)';
$string['estimatedarchivesize_desc'] = '<p style="margin-bottom: 30px;">Tamaño medio de un certificado considerando el promedio de todos los certificados generados en los distintos cursos, expresado en KB. Se utiliza para estimar el tamaño del archivo comprimido que se generará para la descarga de los certificados.</p>';
$string['formtemplatesubmit'] = 'Descargar certificados de libros mostrados';
$string['introseltemplate'] = 'Seleccionar una plantilla para los nombres que se darán a los archivos pdf y otra para el nombre del archivo comprimido final con todos los pdf.';
$string['meccertbulkdownload:createarchives'] = 'Crear archivos de certificados';
$string['meccertbulkdownload:deletearchives'] = 'Eliminar archivos de certificados';
$string['meccertbulkdownload:notifyarchivecreated'] = 'Recibir una notificación cuando se haya creado el archivo de certificados';
$string['meccertbulkdownload:searchcertificates'] = 'Buscar certificados';
$string['meccertbulkdownload:viewarchives'] = 'Ver lista de archivos de certificados y descargarlos';
$string['messageprovider:confirmation'] = 'Confirmación de finalización de la preparación del paquete de certificado';
$string['msgconfirmationcontexturlname'] = 'lista del paquete';
$string['msgconfirmationfullmessage'] = 'El siguiente paquete zip de certificados está listo:';
$string['msgconfirmationfullmessagehtml'] = 'El siguiente paquete zip de certificados está listo:';
$string['msgconfirmationsmallmessage'] = 'El siguiente paquete zip de certificados está listo:';
$string['msgconfirmationsubject'] = 'Ppaquetede certificados listo';
$string['noarchives'] = 'Sin archivos';
$string['nocertificatesfound'] = 'No se encontraron certificados';
$string['packscreate'] = 'Crear archivos de certificados';
$string['packsdownload'] = 'Administrar y descargar archivos de certificados';
$string['pdfnametemplatesitem'] = 'Plantillas para nombres de pdf';
$string['pdfnametemplatesitem_desc'] = '<p>Cada línea representa una plantilla. Por ejemplo, "Simple:certificate_file", la primera parte hasta los dos puntos ("Simple") es el nombre de la plantilla, la segunda ("certificate_file") es el nombre que se le dará al archivo (<strong>la extensión ".pdf" se agrega automáticamente</strong>). El <strong>nombre de la plantilla (primera parte) debe ser una sola palabra (sin espacios) y la plantilla en general no debe contener caracteres particulares (solo letras, números, guiones bajos y signo menos).</strong></p> <p><strong>En la plantilla (después de los dos puntos) es posible ingresar algunos parámetros (encerrados entre llaves {corchetes}) que luego serán reemplazados por los valores correspondientes</strong> (por ejemplo, {{username}} será reemplazado por el nombre de usuario del usuario). El parámetro <b>{{todaysdate(…)}}</b> tiene un comportamiento particular, será reemplazado por la fecha de hoy en el formato indicado por las letras indicadas entre ellas. Por ejemplo, si hoy es 25/12/2023, {{todaysdate(d-m-Y)}} se convertirá en 25/12/2023. El mismo comportamiento se aplica al parámetro <b>{{courseenddate(...)}}</b>, que sin embargo devolverá la fecha de finalización del curso en el formato indicado. <a href="https://www.php.net/manual/es/datetime.format.php" target="_blank">Aquí puede encontrar los caracteres que puede utilizar para dar formato a las fechas.</a> <span style="color: red;">Tenga cuidado de no colocar barras diagonales o barras invertidas (u otros caracteres especiales) como separadores en las fechas.</span></p><p>Los parámetros utilizables son:</p>
<table style="margin-bottom: 18px;">
<tr><td><strong>{{nombreusuario}}</strong></td><td style="padding-left: 25px;">Nombre de usuario</td></tr>
<tr><td><strong>{{nombrecompletousuario}}</strong></td><td style="padding-left: 25px;">Nombre completo</td></tr>
<tr><td><strong>{{apellidousuario}}</strong></td><td style="padding-left: 25px;">Apellido</td></tr>
<tr><td><strong>{{courseshortname}}</strong></td><td style="padding-left: 25px;">Nombre corto del curso</td></tr>
<tr><td><strong>{{coursecode}}</strong></td><td style="padding-left: 25px;">Código del curso</td></tr>
<tr><td><strong>{{cohortname}}</strong></td><td style="padding-left: 25px;">Nombre de la cohorte</td></tr>
<tr><td><strong>{{todaysdate(...)}}</strong></td><td style="padding-left: 25px;">Hoy fecha</td></tr>
<tr><td><strong>{{courseenddate(...)}}</strong></td><td style="padding-left: 25px;">Fecha de finalización del curso</td></tr>
</table>
<p style="margin-bottom: 30px; color: red;"><strong>Atención:</strong> si dos archivos tienen el mismo nombre, el nuevo sobrescribe al anterior.</p>';
$string['pluginname_help'] = 'Permite la selección de un grupo de certificados Custom Cert por curso, grupo o fecha, y descargarlos de forma masiva y en segundo plano.';
$string['preview'] = 'Vista previa';
$string['privacy:metadata'] = 'El plugin de descarga masiva de ME CustomCert no almacena ningún dato personal.';
$string['queuetasksuccess'] = 'La tarea se ha puesto en cola y se realizará lo antes posible. El archivo resultante aparecerá a continuación.';
$string['searchfor'] = 'Buscar';
$string['tablerecordscount'] = 'Registro de {{from}} a {{to}} de {{count}} - Por página:';
