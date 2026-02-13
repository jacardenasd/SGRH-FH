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
 * Strings for component 'quiz_essaydownload', language 'es_mx', version '4.4'.
 *
 * @package     quiz_essaydownload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allinone'] = 'Todas las respuestas en un archivo por intento';
$string['allinone_help'] = 'Si esta opción es habilitada, todas las respuestas serán agrupadas en un archivo por intento.';
$string['attachments'] = 'Anexos';
$string['byattempt'] = 'Intento';
$string['byquestion'] = 'Pregunta';
$string['errorfilename'] = 'error-{$a}.txt';
$string['errorfontsize'] = 'El tamaño del font debería ser un número entero entre 6 y 50.';
$string['errormargin'] = 'Todos los márgenes de página deben ser números enteros entre 0 y 80.';
$string['errormessage'] = 'Se produjo un error interno. Es probable que el archivo esté incompleto. Comuníquese con los desarrolladores del plugin de descarga de respuestas de ensayos (quiz_essaydownload) y envíeles los detalles a continuación:';
$string['essaydownload'] = 'Descargar respuestas de ensayo';
$string['fileformat'] = 'Formato del archivo';
$string['fileformat_help'] = 'Puede elegir entre dos formatos:<ul><li>El formato de documento portátil (PDF) le permite obtener directamente un documento formateado para cada respuesta, listo para corregir en pantalla o imprimir.</li><li>La exportación en texto sin formato (TXT) es más rápida y da como resultado un archivo más pequeño, lo que puede ser importante para exámenes a gran escala. Esos archivos se pueden leer con cualquier editor de texto o abrir con un procesador de texto para darles más formato. También puede elegir este formato si tiene algún script personalizado para convertir automáticamente o tratar las respuestas de los estudiantes de una determinada manera.</li></ul>';
$string['fileformatpdf'] = 'Formato de Documento Portable (PDF)';
$string['fileformattxt'] = 'Texto-simple (TXT)';
$string['firstlast'] = 'Nombre - Apellido(s)';
$string['fixremfontsize'] = 'Evite fragmentos de texto tan pequeños que sean ilegibles.';
$string['fixremfontsize_help'] = 'A veces, el editor HTML de Moodle, Atto, puede agregar comandos de tamaño de fuente no deseados que harán que el texto sea tan pequeño que resulte ilegible en el PDF. Esta configuración solucionará ese error.';
$string['font'] = 'Font';
$string['font_help'] = 'Tenga en cuenta que al utilizar el texto con formato HTML original, la fuente real puede ser diferente, según el formato.<br><br>Al utilizar el resumen de texto simple, es posible que desee utilizar una fuente monoespaciada.';
$string['fontmono'] = 'Monoespaciado';
$string['fontsans'] = 'Sans-serif';
$string['fontserif'] = 'Serif';
$string['fontsize'] = 'Tamaño del font (puntos)';
$string['fontsize_help'] = 'Tenga en cuenta que al utilizar el texto con formato HTML original, el tamaño de fuente real aún puede ser diferente, según el formato.';
$string['footer'] = 'Pie de página';
$string['forceqtsummary'] = 'Forzar el uso de textos de preguntas simplificados';
$string['forceqtsummary_help'] = 'En algunos casos, la exportación del texto de la pregunta en formato HTML puede fallar; por ejemplo, si incluye imágenes con acceso restringido. Al marcar esta opción, se utilizará el resumen simplificado del texto de la pregunta, incluso si se selecciona HTML como fuente de texto.';
$string['generaloptions'] = 'Opciones generales';
$string['groupby'] = 'Agrupar por';
$string['groupby_help'] = 'El archivo puede estructurarse por pregunta o por intento:<ul><li>Si agrupa por pregunta, el archivo tendrá una carpeta para cada pregunta. Dentro de cada carpeta, tendrá una carpeta para cada intento.</li><li>Si agrupa por intento, el archivo tendrá una carpeta para cada intento. Dentro de cada carpeta, tendrá una carpeta para cada pregunta.</li></ul>';
$string['includeattachments'] = 'También descargar anexos posibles incluidos en una respuesta del estudiante.';
$string['includeattachments_help'] = 'Los archivos adjuntos se proporcionan tal como están. Tenga en cuenta que pueden contener malware (código malicioso).';
$string['includefooter'] = 'Añadir pie de página con número de página en cada página.';
$string['includequestiontext'] = 'También incluir texto de la pregunta.';
$string['includequestiontext_help'] = 'Incluir el texto de la pregunta puede ser útil si su examen utiliza preguntas aleatorias.';
$string['includestats'] = 'Incluya el recuento de palabras y caracteres después de la respuesta.';
$string['includestats_help'] = 'Tenga en cuenta que el recuento de caracteres excluirá los espacios en blanco.';
$string['lastfirst'] = 'Apellido(s) - Nombre';
$string['limitattempts'] = 'Limitar intentos';
$string['linedouble'] = 'Doble';
$string['lineoneandhalf'] = '1.5 líneas';
$string['linesingle'] = 'Único';
$string['linespacing'] = 'Espaciado';
$string['margins'] = 'Márgenes de página (mm): izquierdo, derecho, uperior, inferior';
$string['nameordering'] = 'Formato del nombre';
$string['noessayquestion'] = 'Este examen no contiene ninguna pregunta de ensayo.';
$string['nothingtodownload'] = 'Nada para descargar';
$string['onlyone'] = 'Exportar como máximo un intento por usuario según el método de calificación: {$a}';
$string['onlyone_help'] = 'Cuando un examen permite múltiples intentos, la exportación normalmente incluirá todos los intentos finalizados de todos los usuarios. Sin embargo, a veces sólo el último intento (o el primero, o el que tenga la calificación general más alta) puede ser relevante. Con esta opción marcada, el archivo solo incluirá (como máximo) un intento por usuario.';
$string['page'] = 'Formato de página';
$string['pagea4'] = 'A4';
$string['pageletter'] = 'Carta';
$string['pagenumber'] = 'Página {$a}';
$string['pdfoptions'] = 'Configuraciones del PDF';
$string['plugindescription'] = 'Descargue las respuestas de texto y los archivos adjuntos enviados en respuesta a las preguntas de ensayo en un examen.';
$string['pluginname'] = 'Plugin de descarga de respuestas de ensayos (quiz_essaydownload)';
$string['presentedto'] = 'Presentado a: {$a}';
$string['privacy:metadata'] = 'El plugin de descarga de ensayo de prueba no almacena ningún dato personal sobre ningún usuario.';
$string['response'] = 'Respuesta';
$string['responsewith'] = 'Respuesta a Pregunta {$a}';
$string['shortennames'] = 'Acortar el nombre del archivo y los nombres de las subcarpetas.';
$string['shortennames_help'] = 'Si la ruta total de un archivo extraído tiene más de 260 caracteres, esto puede causar problemas con la herramienta de extracción integrada de Windows. En este caso, activar esta casilla de verificación puede ayudar. Sin embargo, puede dificultar la identificación de los estudiantes si tienen nombres muy largos.';
$string['source'] = 'Origen de texto a usar';
$string['source_help'] = 'Si el texto de la pregunta o la respuesta del estudiante están escritos en formato HTML, Moodle generará automáticamente un resumen en texto sin formato del texto formateado. A ese resumen se le quitarán todas las etiquetas HTML y se le aplicará un formato básico (por ejemplo, los encabezados y la fuente en negrita se transformarán en MAYÚSCULAS).<br><br>Al generar archivos PDF, puede elegir si desea utilizar ese resumen o el texto de la pregunta o la respuesta del estudiante original con su formato. Si elige el resumen, probablemente también deba utilizar una fuente monoespaciada.<br><br>Tenga en cuenta que no puede utilizar el texto original formateado al generar archivos TXT. Tenga en cuenta también que la configuración no tendrá ningún efecto si se le pidió al estudiante que escribiera su respuesta en un formato que no sea HTML, por ejemplo, texto sin formato.';
$string['sourceoriginal'] = 'Texto HTML formateado original';
$string['sourcesummary'] = 'Resumen de texto simple';
$string['statistics'] = 'Estadísticas';
$string['statisticsnote'] = '{$a->words} words, {$a->chars} caracteres (sin contar espacios)';
$string['troubleshooting'] = 'Solución de problemas';
$string['useflatarchive'] = 'Usar jerarquía de carpeta plana en archivo';
$string['useflatarchive_help'] = 'Si se activa esta opción, la jerarquía de carpetas del archivo será más "plana", es decir, en lugar de tener <i>Intento_X/Pregunta_Y/respuesta.pdf</i>, tendrá <i>Intento_X/Pregunta_Y_respuesta.pdf</i> (o similar si se agrupa por pregunta). Como consecuencia, necesitará menos clics para obtener sus documentos.';
