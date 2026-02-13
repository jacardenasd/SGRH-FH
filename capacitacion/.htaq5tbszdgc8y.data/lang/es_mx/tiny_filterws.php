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
 * Strings for component 'tiny_filterws', language 'es_mx', version '4.4'.
 *
 * @package     tiny_filterws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apply'] = 'Aplicar';
$string['filteruseragent'] = 'Filtrar por agente de usuario';
$string['filteruseragent_help'] = 'Si se proporciona un valor, el contenido seleccionado solo se mostrará si el agente de usuario contiene este valor. El valor se convertirá en una expresión regular.';
$string['insert'] = 'Insertar';
$string['origin'] = 'Origen';
$string['origin_help'] = 'Web: solo se muestra en el navegador.<br>Servicio web: solo se muestra en un cliente de servicio web, como la aplicación Moodle.<br>Cualquiera: se muestra para todos los orígenes.';
$string['originany'] = 'Cualquiera';
$string['originweb'] = 'Web';
$string['originws'] = 'Servicio Web';
$string['pluginname'] = 'Filtro de Servicio Web para TinyMCE';
$string['predefined'] = 'Filtros pre-definidos';
$string['predefined_desc'] = 'Lista de filtros predefinidos que todos los usuarios podrán utilizar al utilizar el editor TinyMCE.

Ingrese cada filtro en una nueva línea con el formato: nombre a mostrar, origen (web, ws o cualquiera) y User Agent (opcional), separados por caracteres de barra vertical |. Por ejemplo:
<pre>
Moodle App|ws|MoodleMobile
</pre>';
$string['privacy:metadata'] = 'El plugin tiny_filterws no almacena ningún dato personal.';
