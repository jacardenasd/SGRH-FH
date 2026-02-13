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
 * Strings for component 'tool_tcpdffonts', language 'es_mx', version '4.4'.
 *
 * @package     tool_tcpdffonts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfont:explain'] = 'Las configuraciones que se muestran a continuación le permiten personalizar cómo se generará el tipo de letra.<br/>
Si no tiene idea de qué se trata esta configuración, mantenga los valores predeterminados (esto cubre la mayoría de los casos estándar).<br/>
Solo cuando sepa exactamente qué significan las configuraciones o se le hayan indicado con qué configuraciones debe convertirse su tipo de letra True Type/Open Type, deberá ajustar estas configuraciones.';
$string['err:font:otf-otto'] = 'TCPDF no puede procesar/agregar tipos de letra de tipo OTF (OTTO)';
$string['err:font:zip'] = 'El archivo cargado no parece ser un archivo ZIP válido';
$string['err:zipopen'] = 'Se produjo un error al intentar crear el archivo descargable.<be/>
Puede intentar actualizar esta página. Si el error persiste, comuníquese con el administrador del sistema.';
$string['font:delete:body'] = 'Estás a punto de eliminar el tipo de letra personalizado {$a}.<br/>
Este es un proceso irreversible y no se puede deshacer. Se eliminarán todos los datos del tipo de letra.<br/>
¿Estás seguro de que deseas continuar?';
$string['font:delete:confirmation'] = 'Sí, lo entiendo y quiero eliminar este tipo de letra.';
$string['font:delete:fail'] = 'No se puedo eliminar tipo de letra.';
$string['font:delete:header'] = 'Eliminar tipo de letra';
$string['font:initcustom:body'] = 'Estás a punto de inicializar la personalización de la tipo de letra TCPDF.<br/>
Esto significa que haremos lo siguiente:<ul>
<li>crearemos la carpeta personalizada en tu carpeta de datos de Moodle</li>
<li>copiaremos todos los tipos de letra principales (lo cual es un mandato de Moodle, de lo contrario Moodle <i>volverá</i> a la carpeta principal)</li>
</ul>
Puedes hacer esto de manera segura y eliminar la personalización en cualquier momento para volver a la implementación principal de Moodle.<br/>
¿Está seguro de que desea continuar?';
$string['fontenc_help'] = 'Nombre de la tabla de codificación que se utilizará. Déjelo vacío para el modo predeterminado. Omita este parámetro para tipos de letra TrueType Unicode y simbólicas como Symbol o ZapfDingBats.';
$string['fontencid'] = 'ID de dcodificación';
$string['styles'] = 'Estilos';
$string['tcpdffonts:managefonts'] = 'Gestionar tipos de letra PDF';
$string['tcpdffonts:viewfonts'] = 'Ver tipos de letra PDF';
