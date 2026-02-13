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
 * Strings for component 'local_assignsubmission_download', language 'es_mx', version '4.4'.
 *
 * @package     local_assignsubmission_download
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Todo';
$string['assignsubmission_download:view'] = 'Otorgar acceso a renombrar archivo y exportar envío';
$string['clean_filerenaming'] = 'Limpiar nombres de archivo';
$string['clean_filerenaming_help'] = 'Remover caracteres especiales de nombres de archivos. Los espacios en blanco  umlats, siempre son re-escritos, como por ejemplo \'Übung 1-Gruppe$4\' se vuelve  \'Uebung_1-Gruppe4\'';
$string['data_preview'] = 'Previsualización de datos';
$string['data_preview_help'] = 'Haga clic en [+] o [-] para mostrar o para ocultar columnas en la previsualización de impresión.';
$string['datapreviewtitle'] = 'Previsualización de datos';
$string['datasettingstitle'] = 'Configuraciones de datos';
$string['dateinthefutureerror'] = 'Envío más nuevo porque no puede estar en el futuro';
$string['defaultfilerenamingpattern'] = '[filename]';
$string['defaultziprenamingpattern'] = '[courseshortname]-[assignmentname]-[assignmentid]';
$string['downloadprintpreviewtable'] = 'Descargar tabla de exportación de envío';
$string['downloadtype'] = 'Descargar';
$string['downloadtype:error'] = 'Por favor seleccione al menos una opción';
$string['downloadtype:feedbacks'] = 'Todos los archivos de retroalimentación de profesores';
$string['downloadtype:submissions'] = 'Todos los envíos de archivo de estudiantes';
$string['downloadtype_feedbacks'] = 'Desacargar retroalimentaciones';
$string['downloadtype_help'] = 'Aquí puede usted seleccionar cuales archivos le gustaría descargar - archivos enviados por estudiantes o retroalimentación de profesores (comentarios, PDFs anotados, archivos de retroalimentación)';
$string['downloadtype_submissions'] = 'Descargar envíos';
$string['exportformat'] = 'Formato';
$string['filenumberinfo'] = 'Número máximo de archivos subidos es mayor que 1. Considere usar [filenumber] para numerar todas las subidas de un estudiante para así mejorar el ordenamiento.';
$string['filerenamesettingstitle'] = 'Descargar envíos renombrados';
$string['filerenamingpattern'] = 'Esquema de nombrado';
$string['filerenamingpattern_help'] = 'El parámetro \'esquema de nombres\' determina el nombre de los archivos. Los siguientes términos entre corchetes (\'etiquetas\') están disponibles:<br>
<br>
[idnumber] número de matriculación<br>
[lastname] apellido(s)<br>
[firstname] nombre<br>
[fullname] nombre completo<br>
[group] grupo, en caso de que el participante esté inscrito en un grupo<br>
[groupid] id de grupo, en caso de que el participante esté inscrito en un grupo y tenga un id<br>
[filename] nombre de archivo original<br>
[filenumber] número secuencial para archivos cargados por un solo estudiante<br>
[assignmentname] nombre de la tarea<br>
[courseshortname] nombre corto del curso<br>
[currentdate] fecha actual en formato AAAAMMDD (AñoMesDía)<br>
[currenttime] hora actual HHMM (HorasMinutos)<br>
<br>
Si agrega caracteres alfanuméricos (sin corchetes), estos caracteres se agregarán a todos los Tareas cargadas/descargadas<br>
<br>
Ejemplo:<br>
La entrada \'[idnumber]-[lastname]_[assignmentname]\' dará como resultado el siguiente nombre de archivo: \'01234567-Muster_assignmentname\'';
$string['hiddenuser'] = 'Participante';
$string['labelgroup'] = 'Enfocar descarga en grupo';
$string['labelgroup_help'] = 'Descargar tareas de estudiantes de un grupo específico solamente.';
$string['labelgrouping'] = 'Enfocar descarga en agrupamiento';
$string['labelgrouping_help'] = 'Descargar tareas de estudiantes de un agrupamiento específico solamente.';
$string['lastdownloaded_title'] = 'Últimas descargas de envío del usuario';
$string['lastdownloaded_title_help'] = 'La fecha muestra la última descarga del usuario de envíos de estudiantes.';
$string['lastdownloadedfeedbacks_title'] = 'Últimas descargas de archivos de retroalimentación del usuario';
$string['lastdownloadedfeedbacks_title_help'] = 'La fecha muestra la última descarga del usuario de archivos de retroalimentación de profesores.';
$string['lastfeedbackdownloadsettings'] = 'Configuraciones de descarga  de último archivo de retroalimentación';
$string['lastsubmissionsdownloadsettings'] = 'Configuraciones de descarga  de último archivo de envíos';
$string['nameofziparchive'] = 'Nombre del archivo ZIP';
$string['nameofziparchive_help'] = 'Nombre del archivo zip que contiene los archivos descargados. Están disponibles los siguientes términos entre corchetes (\'etiquetas\'):<br>
<br>
[assignmentname] nombre de la tarea<br>
[assignmentid] id de la tarea<br>
[courseshortname] nombre corto del curso<br>
[currentdate] fecha actual en formato AAAAMMDD (AñoMesDía)<br>
[currenttime] hora actual HHMM (HorasMinutos)<br>
<br>
Si agrega caracteres alfanuméricos (sin corchetes), estos caracteres se agregarán al nombre del archivo zip<br>
<br>
Ejemplo:<br>
La entrada \'[courseshortname]-[assignmentname]_[currentdate]\' dará como resultado el siguiente nombre de archivo zip: \'EC-exampleassignment_20240401\'';
$string['nodownloadsyet'] = 'aun no hay descargas';
$string['nosubmissionneweras'] = 'No se hicieron envíos después de {$a}';
$string['notreuploadable_hint'] = 'Tenga en cuenta que si uno de los tipos de retroalimentación \'Archivos de retroalimentación\' u \'Hoja de trabajo de calificación sin conexión\' está activado, los archivos de descarga renombrados de esta página ya no se podrán cargar.';
$string['onlinetext_defaultfilename'] = 'Texto en línea';
$string['onlypdf'] = 'Configuraciones de PDF';
$string['optimum'] = 'Óptimo';
$string['pdf_assignment'] = 'Tarea';
$string['pdf_availablefrom'] = 'Disponible a partir de';
$string['pdf_course'] = 'Curso';
$string['pdf_duedate'] = 'Fecha esperada';
$string['pdf_group'] = 'Grupo';
$string['pdf_nogroup'] = 'sin Grupo';
$string['pdf_notactive'] = 'no activado';
$string['pdf_view'] = 'Previsualizar impresión';
$string['perpage'] = 'Envíos mostrados por página';
$string['perpage_help'] = 'Esto configura el número de envíos que son mostrados por página en el PDF.
   Elegir "Óptimo" para optimizar la distribución de entradas de lista de acuerdo al tamaño de texto elegido y la orientación de la página, si hubiera muchos participantes en su curso.';
$string['perpage_propertydefault'] = '100';
$string['perpage_propertydescription'] = 'Esto configura el número de envíos que son mostrados por página, cuando los profesores están viendo envíos de tareas.
    <br>Es sobre-escrito por las preferencias individuales de los profesores. Lo ingresado será valor absoluto.';
$string['perpage_propertyname'] = 'Predeterminado - Envíos Mostrados';
$string['pluginname'] = 'Exportar - y renombrado de archivo de envíos';
$string['pluginname_print'] = 'Exportar';
$string['pluginname_submissions'] = 'Descargar envíos renombrados';
$string['prevent_nameextension'] = 'Evitar extensión automática de los nombres';
$string['prevent_nameextension_help'] = 'Esta función previene la extensión automática de los nombres de archivo (con términos como "_Submission_File_submissions").';
$string['printpreview'] = 'Exportar';
$string['printpreviewtabledownloaded'] = 'Tabla de exportación descargada';
$string['printpreviewtabledownloaded_description'] = 'El usuario con id {$a->userid} descargó la tabla de exportación para las tareas con el ID de módulo de curso {$a->contextinstanceid}.';
$string['printpreviewtableviewed'] = 'Tabla de exportación vista';
$string['printpreviewtableviewed_description'] = 'El usuario con id {$a->userid} vio la tabla de exportación para las tareas con el ID de módulo de curso {$a->contextinstanceid}.';
$string['printsettingstitle'] = 'Configuraciones de exportación';
$string['privacy:metadata:local_assignsubm_download'] = 'Tabla para almacenar la información acerca de la última descarga de envíos.';
$string['privacy:metadata:local_assignsubm_download:choosegroup'] = 'La ID del grupo para la cual filtrar.';
$string['privacy:metadata:local_assignsubm_download:choosegrouping'] = 'La ID del agrupamiento para el cual filtrar.';
$string['privacy:metadata:local_assignsubm_download:cleanfilenames'] = 'Si es que los nombres son o no limpiados de caracteres especiales.';
$string['privacy:metadata:local_assignsubm_download:cmid'] = 'La ID del módulo de curso de la tarea.';
$string['privacy:metadata:local_assignsubm_download:filenamingscheme'] = 'El esquema de nombre de archivo usado para los archivos para la descarga.';
$string['privacy:metadata:local_assignsubm_download:id'] = 'El identificador único del registro.';
$string['privacy:metadata:local_assignsubm_download:lastdownloaded'] = 'El sello de tiempo de la última descarga de envíos.';
$string['privacy:metadata:local_assignsubm_download:preventnameextension'] = 'Si es que se previene la extensión automática de los nombres de archivos.';
$string['privacy:metadata:local_assignsubm_download:userid'] = 'La ID del usuario que descargó los envíos.';
$string['privacy:metadata:local_assignsubm_download:zipnamingscheme'] = 'El esquema de nombres usado para el archivo ZIP.';
$string['privacy:metadata:local_assignsubm_feedback'] = 'Tabla para almacenar la información acerca de la última descarga de retroalimentación.';
$string['privacy:metadata:local_assignsubm_feedback:choosegroup'] = 'La ID del grupo para el cual filtrar.';
$string['privacy:metadata:local_assignsubm_feedback:choosegrouping'] = 'La ID del agrupamiento para el cual filtrar.';
$string['privacy:metadata:local_assignsubm_feedback:cleanfilenames'] = 'Si es que los nombres son o no filtrados de caracteres especiales.';
$string['privacy:metadata:local_assignsubm_feedback:cmid'] = 'La ID del módulo del curso de la tarea.';
$string['privacy:metadata:local_assignsubm_feedback:filenamingscheme'] = 'El esquema de nombres usado para los archivos para la descarga.';
$string['privacy:metadata:local_assignsubm_feedback:id'] = 'El identificador único del registro.';
$string['privacy:metadata:local_assignsubm_feedback:lastdownloaded'] = 'El sello de tiempo de la última descarga de envíos.';
$string['privacy:metadata:local_assignsubm_feedback:preventnameextension'] = 'Si es que se previene o no la extensión automática de nombres de archivos.';
$string['privacy:metadata:local_assignsubm_feedback:userid'] = 'La ID del usuario que descargó los envíos.';
$string['privacy:metadata:local_assignsubm_feedback:zipnamingscheme'] = 'El esquema de nombres usado para el archivo ZIP.';
$string['privacy:metadata:preference:clean_filerenaming'] = 'Preferencia acerca de limpiar o no adicionalmente nombres de archivos de caracteres especiales en envíos descargados.';
$string['privacy:metadata:preference:downloadtype_feedbacks'] = 'Preferencia acerca de descargar o no retroalimentaciones.';
$string['privacy:metadata:preference:downloadtype_submissions'] = 'Preferencia acerca de descargar o no envíos.';
$string['privacy:metadata:preference:exportformat'] = 'Preferencia sobre cuál formato usar al exportar a un archivo.';
$string['privacy:metadata:preference:filerenamingpattern'] = 'Preferencia para  el esquema de nombres usado para cambiar nombres en envíos descargados.';
$string['privacy:metadata:preference:nameofziparchive'] = 'Preferencia para el nombre del archivo ZIP al descargar envíos o retroalimentación.';
$string['privacy:metadata:preference:optimum'] = 'Preferencia acerca de decidir o no automáticamente cuantos envíos mostrar por página al exportar a un archivo PDF.';
$string['privacy:metadata:preference:pageorientation'] = 'Preferencia acerca de cual orientación de página usar al exportar a un archivo PDF.';
$string['privacy:metadata:preference:perpage'] = 'Preferencia acerca de cuantos envíos mostrar por página al  exportar a un archivo PDF.';
$string['privacy:metadata:preference:prevent_nameextension'] = 'Preferencia acerca de prevenir o no extensión automática de nombres de archivo al descargar envíos o retroalimentación.';
$string['privacy:metadata:preference:printheader'] = 'Preferencia acerca de imprimir o no encabezado y pie de página al exportar a un archivo PDF.';
$string['privacy:metadata:preference:textsize'] = 'Preferencia acerca de cual tamaño de texto usar al exportar a un archivo PDF.';
$string['privacy:metadata:preference:userfilter'] = 'Preferencia acerca de cuales usuarios son filtrados al exportar a un archivo.';
$string['rename_propertydescription'] = 'Marcas disponibles: {$a}';
$string['show'] = 'Mostrar';
$string['show_propertydescription'] = 'Usada para mostrar o para ocultar la entrada del menú \'{$a->entrytoshow}\'';
$string['show_propertyname'] = 'Mostrar \'{$a->entrytoshow}\'';
$string['strallononepage'] = 'imprimir todo en una página';
$string['strfilerenaming'] = 'Descargar envíos';
$string['strlandscape'] = 'paisaje';
$string['strlarge'] = 'grande';
$string['strmedium'] = 'mediano';
$string['stror'] = 'o';
$string['strpageorientation'] = 'Orientación de página';
$string['strpapersizes'] = 'Tamaño del  papel';
$string['strportrait'] = 'retrato';
$string['strprint'] = 'Descargar archivo';
$string['strprintheader'] = 'Imprimir encabezado/pie de página';
$string['strprintheader_help'] = 'Imprime encabezado y pie de página si se activa';
$string['strprintheaderlong'] = 'imprime encabezado y pie de página si se activa';
$string['strrefreshdata'] = 'Previsualización de actualizar datos';
$string['strsmall'] = 'pequeño';
$string['strtextsize'] = 'Tamaño del texto';
$string['submissionneweras'] = 'Envío más nuevo que';
$string['submissionneweras_help'] = 'Solamente descargar archivos que fueron modificados después de un tiempo dado. Si un tipo de envío no tiene un sello de tiempo (como texto en línea), el sello de tiempo del envío es usado.';
$string['submissions'] = 'Envíos';
$string['userfilter'] = 'Filtro del usuario';
$string['viewprintpreviewtable'] = 'Ver tabla de exportar envío';
