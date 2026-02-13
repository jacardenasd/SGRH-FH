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
 * Strings for component 'tool_langpackdropper', language 'es_mx', version '4.4'.
 *
 * @package     tool_langpackdropper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlangpackinstalled'] = 'Paquete de idioma instalado';
$string['eventlangpackinstalled_desc'] = 'El paquete de idioma \'{$a->name}\' fue instalado desde {$a->url}';
$string['eventlangpackupdated'] = 'Paquete de idioma actualizado';
$string['eventlangpackupdated_desc'] = 'El paquete de idioma \'{$a->name}\' fue actualizado desde {$a->url}';
$string['pluginname'] = 'Descartador de paquete de idioma';
$string['privacy:metadata'] = 'El plugin del descartador de paquete de idioma no almacena ningún dato personal.';
$string['setting_downloadtimeout'] = 'Tiempo de desconexión de descarga de Paquete de idioma';
$string['setting_downloadtimeout_desc'] = 'Moodle intentará descargar los paquetes de idioma desde las URLs proporcionadas hasta que se alcance este límite de tiempo de desconexión.';
$string['setting_langpackdropperstatic_desc'] = 'Con este plugin, puede descargar paquetes de idioma que no forman parte del paquete de idioma oficial de Moodle (lo que significa que no se mantienen en AMOS, el sistema central de traducción de Moodle). Esto es especialmente relevante si ejecuta un gran número de modificaciones de cadenas de idioma y desea gestionarlas en su propio servidor de gestión de código, en lugar de en la interfaz de personalización de idioma de su instancia de Moodle. Esto también es relevante si desea ejecutar las mismas modificaciones de cadenas de idioma en varias instancias de Moodle simultáneamente.';
$string['setting_langpackurls'] = 'URLs de paquete de idioma';
$string['setting_langpackurls_desc'] = 'Esta configuración requiere una lista de paquetes de idioma para esta instalación de Moodle.
Cada línea contiene un paquete de idioma. Consiste en el identificador del paquete y una URL donde se puede descargar. Ambos valores están separados por una barra vertical.<br/><br/>
Por ejemplo:<br/>
de_mysublangpack|https://github.com/lernlink/moodle-tool_langpackdropper/raw/main/tests/fixtures/de_droppertest_toplevel.zip
<br/><br/>
Más información sobre los parámetros:
<ul>
<li><b>Identificador:</b> Este es el nombre de la carpeta debajo del directorio MOODLEDATA/lang donde se almacenará este paquete de idioma.</li>
<li><b>URL:</b> Esta es la URL de descarga completa desde donde Moodle puede descargar un archivo ZIP válido con el paquete de idioma. Las URL de descarga del repositorio de Github funcionan de maravilla.</li>
</ul>
Nota:
<ul>
<li>Las líneas de configuración con un formato o una URL no válidos se ignorarán automáticamente al procesar la configuración.</li>
<li>El archivo ZIP del paquete de idioma debe contener todos los archivos del paquete de idioma en su nivel superior o en una sola subcarpeta. En este último caso, la subcarpeta puede tener cualquier nombre. Si el archivo ZIP no cumple estos requisitos, el paquete de idioma no se procesará y se registrará un error.</li>
<li>Con esta herramienta, Moodle descargará el código PHP de la URL indicada y ejecutará su contenido como archivos PHP del paquete de idioma. <em>El administrador de Moodle debe asegurarse de configurar únicamente URL de descarga que no contengan nada más que archivos del paquete de idioma. Además, el administrador de Moodle debe asegurarse de que un atacante no pueda infiltrar código malicioso en el archivo ZIP en el futuro.</em></li>
<li>Si planea usar esta herramienta para eliminar un paquete de idioma con un identificador que sea un paquete de idioma oficial de Moodle (lo cual es perfectamente posible), evalúe si es necesario deshabilitar la tarea programada \\tool_langimport\\task\\update_langpacks_task. Esto ayudará a evitar cualquier interferencia con los mecanismos de actualización de ambos paquetes de idioma.</li>
<li>Si elimina una línea de configuración de este ajuste de nuevo, el paquete de idioma descargado no se eliminará automáticamente. Para eliminar definitivamente un paquete de idioma descargado, vaya a la página <a href="{$a->managepage}">administrar paquetes de idioma</a>.</li>
</ul>';
$string['taskupdatelanguagepacks'] = 'Actualizar Paquetes de idioma descartados';
$string['updatedcallbacknotification'] = 'Se actualizaron las URL de los paquetes de idioma. Se programó una tarea específica para descargar/actualizar los paquetes de idioma según la configuración guardada, que se procesará en breve.';
