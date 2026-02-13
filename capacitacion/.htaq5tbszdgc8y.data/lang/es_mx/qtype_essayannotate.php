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
 * Strings for component 'qtype_essayannotate', language 'es_mx', version '4.4'.
 *
 * @package     qtype_essayannotate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipos de archivo aceptados';
$string['acceptedfiletypes_help'] = 'Los Tipos de archivo aceptados pueden estar restringidos al ingresar una lista de extensiones de archivos. Si el campo se deja vacío, entonces todos los tipos son aceptados.';
$string['allowattachments'] = 'Permitir anexos';
$string['annotate_button_label'] = 'Anotar';
$string['annotated_file'] = 'Archivo anotado:';
$string['annotationstep_default_comment'] = 'El profesor empezó a calificar';
$string['annotator'] = 'Anotador';
$string['answerfiles'] = 'Archivos de respuesta';
$string['answertext'] = 'Texto de respuesta';
$string['attachedfiles'] = 'Anexos: {$a}';
$string['attachmentsoptional'] = 'Los anexos son opcionales';
$string['attachmentsrequired'] = 'Requerir anexos';
$string['attachmentsrequired_help'] = 'Esta opción especifica el número máximo de anexos requeridos para que una respuesta sea considerada calificable.';
$string['corrected_documents'] = 'Documentos Corregidos';
$string['err_maxminmismatch'] = 'Límite máximo de palabras debe ser mayor que límite mínimo de palabras.';
$string['err_maxwordlimit'] = 'Límite máximo de palabras está habilitado pero no está configurado';
$string['err_maxwordlimitnegative'] = 'Límite máximo de palabras no puede ser un número negativo';
$string['err_minwordlimit'] = 'Límite mínimo de palabras está habilitado pero no está configurado';
$string['err_minwordlimitnegative'] = 'Límite mínimo de palabras no puede ser un número negativo';
$string['file_not_saved_message'] = 'No se puede guardar el archivo';
$string['file_saved_message'] = 'El archivo ha sido guardado';
$string['file_too_big'] = 'Archivo demasiado grande';
$string['font_size'] = 'Tamaño del tipo de letra';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML con selector de archivo';
$string['formatmonospaced'] = 'Tipo de letra de texto simple monoespaciado';
$string['formatnoinline'] = 'Sin texto en línea';
$string['formatplain'] = 'Texto simple';
$string['generic_error'] = 'Ocurrió un error';
$string['ghostscriptpath'] = 'Ruta hacia Ghostscript';
$string['ghostscriptpath_desc'] = 'Escriba la ruta hacia su instalación de Ghostscript';
$string['graderinfo'] = 'Información para los calificadores';
$string['graderinfoheader'] = 'Información para calificadores';
$string['gs_fail'] = 'La conversión a PDF usando Ghostscript falló';
$string['imagemagick_fail'] = 'La conversión a PDF usando ImageMagick falló';
$string['imagemagickpath'] = 'Ruta hacia ImageMagick';
$string['imagemagickpath_desc'] = 'Ingrese la ruta hacia su instalación de ImageMagick .<br><br><u><b>Nota:</b></u> Alterar archivo policy.xml file de imagemagick, cambiar <br>    &lt;policy domain="coder" rights="none" pattern="PDF" /&gt; <br>    a <br>    &lt;policy domain="coder" rights="read|write" pattern="PDF" /&gt;<br><br>';
$string['maxbytes'] = 'Tamaño máximo de archivo';
$string['maxwordlimit'] = 'Límite máximo de palabras';
$string['maxwordlimit_help'] = 'Si la respuesta requiere que los estudiantes ingresen texto, este es el número máximo de palabras que cada estudiante tendrá permitido enviar.';
$string['maxwordlimitboundary'] = 'El límite de palabras para esta pregunta es {$a->limit} palabras y usted está intentando enviar {$a->count} palabras. Por favor acorte su respuesta y vuelva a intentarlo.';
$string['minwordlimit'] = 'Límite mínimo de palabras';
$string['minwordlimit_help'] = 'Si la respuesta requiere que los estudiantes ingresen texto, este es el número máximo de palabras que cada estudiante tendrá permitido enviar.';
$string['minwordlimitboundary'] = 'Esta pregunta requiere una respuesta de al menos {$a->limit} palabras, y usted está intentando enviar  {$a->count} palabras. Por favor expanda su respuesta y vuelva a intentarlo.';
$string['mkdir_fail'] = 'No se puede crear directorio';
$string['mustattach'] = 'Cuando es seleccionado "Sin texto en línea", o las respuestas sean opcionales, usted debe permitir al menos un anexo.';
$string['mustrequire'] = 'Cuando es seleccionado "Sin texto en línea", o las respuestas sean opcionales, usted debe requerir al menos un anexo.';
$string['mustrequirefewer'] = 'Usted no puede exigir más anexos de los que usted permite.';
$string['nlines'] = '{$a} líneas';
$string['nonexistentfiletypes'] = 'Los siguientes tipos de archivo no fueron reconocidos: {$a}';
$string['output_file_failed'] = 'No se pudo crear un archivo de salida';
$string['pdf_icon_alt_txt'] = 'Documento PDF';
$string['pdf_source_error'] = '¡PDF de orígen no encontrado!';
$string['pdf_version_error'] = 'Versión de PDF incompatible';
$string['permission_denied'] = 'No se puede leer el archivo. Ya sea porque el archivo no existe o hay un problema de permisos.';
$string['pluginname'] = 'Anotar ensayo';
$string['pluginname_help'] = 'En respuesta a una pregunta, el respondente puede subir uno o más archivos o puede ingresar texto en línea. Una plantilla de respuesta puede ser proporcionada. LAs respuestas deben ser calificadas manualmente.';
$string['pluginname_link'] = 'question/type/essayannotate';
$string['pluginnameadding'] = 'Añadiendo una pregunta de Anotar ensayo';
$string['pluginnameediting'] = 'Editando una pregunta de Anotar ensayo';
$string['pluginnamesummary'] = 'Permite una respuesta de una subida de archivo o texto en línea. Esto debe entonces ser calificado manualmente. Soporta la anotación de los archivos subidos.';
$string['privacy:metadata'] = 'el plugin del tipo de pregunta essayannotate  permite que los autores de pregunta configuren opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:attachments'] = 'Número de anexos permitidos.';
$string['privacy:preference:attachmentsrequired'] = 'Número de anexos requeridos.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:maxbytes'] = 'Tamaño máximo de archivo';
$string['privacy:preference:responsefieldlines'] = 'Número de líneas que indican el tamaño de la caja para entrada (áreadetexto)';
$string['privacy:preference:responseformat'] = '¿Cuál es el formato de respuesta? (editor HTML, texto simple, etc)';
$string['privacy:preference:responserequired'] = 'Si es que al estudiante se le requiere que ingrese texto o si el ingreso de texto es opcional.';
$string['responsefieldlines'] = 'Tamaño de caja de entrada';
$string['responseformat'] = 'Formato de respuesta';
$string['responseisrequired'] = 'Requerir que el estudiante ingrese texto';
$string['responsenotrequired'] = 'El ingreso de texto es opcional';
$string['responseoptions'] = 'Opciones de respuesta';
$string['responserequired'] = 'Requerir texto';
$string['responsetemplate'] = 'Plantilla de respuesta';
$string['responsetemplate_help'] = 'Cualquier texto ingresado aquí será mostrado en la caja de ingreso de respuesta cuando inicie un nuevo intento de la pregunta.';
$string['responsetemplateheader'] = 'Plantilla de respuesta';
$string['save_exit'] = 'Guardar y Salir';
$string['time'] = ', tiempo:';
$string['unsupported_file'] = 'Archivo no soportado';
$string['user'] = ', usuario:';
$string['wordcount'] = 'Número de palabras: {$a}';
$string['wordcounttoofew'] = 'Número de palabras: {$a->count}, menor que las {$a->limit} palabras requeridas.';
$string['wordcounttoomuch'] = 'Número de palabras: {$a->count}, más que el límite de {$a->limit} palabras.';
