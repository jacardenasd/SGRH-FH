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
 * Strings for component 'tool_apcu', language 'es_mx', version '4.4'.
 *
 * @package     tool_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['guidroperror'] = 'Lamentablemente, esta instalación de Moodle no tenía suficientes permisos para descargar y almacenar el archivo de la interfaz gráfica de administración de APCu directamente en su MOODLEDATA. Descargue manualmente el archivo de la interfaz gráfica de administración de APCu desde {$a->source} y guárdelo en {$a->target} en su servidor web. Hasta que descargue y almacene este archivo, el complemento tool_apcu no funcionará.';
$string['guidropinstallintro'] = 'El plugin de informes de administración tool_apcu incluye una interfaz gráfica de usuario (GUI) de gestión de APCu, creada por sus desarrolladores. Esta GUI es simplemente un pequeño archivo PHP. Lamentablemente, este archivo no se puede enviar junto con el código de este plugin, ya que su licencia PHP es incompatible con la licencia GPL de Moodle.';
$string['guidropinstalloutro'] = 'Por favor tenga en cuenta: La incompatibilidad de licencias significa que el código con licencia PHP no debe alojarse en moodle.org/plugins. Como administrador, puede descargar, alojar y ejecutar el archivo de la interfaz gráfica de administración de APCu y agregarlo a su instalación local de este plugin de Moodle.';
$string['guidropmissing'] = 'A este plugin le falta el archivo de la interfaz gráfica de administración de APCu o este no contiene el código PHP esperado. Consulte el archivo README del plugin para obtener más ayuda. El plugin no funcionará hasta que descargue y guarde el archivo de la interfaz gráfica de administración de APCu.';
$string['guidropmissingonthefly'] = 'A este plugin le faltaba el archivo de la interfaz gráfica de usuario de APCu o este no contenía el código PHP esperado. Se descargó automáticamente a tu MOODLEDATA para que puedas usarlo directamente (de nuevo).';
$string['guidropsuccess'] = 'Afortunadamente, esta instalación de Moodle tenía permisos suficientes para descargar y almacenar el archivo de la interfaz gráfica de usuario de APCu directamente en su MOODLEDATA. Se descargó de {$a->source} y se almacenó en {$a->target}. Tras completar el asistente de instalación, el plugin tool_apcu funcionará correctamente.';
$string['guidropupgradecheckfail'] = 'Falta el archivo GUI de administración de APCu necesario en MOODLEDATA después de la actualización del plugin.';
$string['guidropupgradechecksuccess'] = 'El archivo GUI de administración de APCu necesario todavía existe en MOODLEDATA después de la actualización del plugin.';
$string['pluginname'] = 'APCu management';
$string['privacy:metadata'] = 'El plugin de administración de APCu proporciona una funcionalidad ampliada a los administradores de Moodle, pero no almacena ningún dato personal.';
