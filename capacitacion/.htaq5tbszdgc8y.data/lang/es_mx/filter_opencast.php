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
 * Strings for component 'filter_opencast', language 'es_mx', version '4.4'.
 *
 * @package     filter_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Opencast';
$string['pluginname'] = 'Filtro Opencast';
$string['privacy:metadata'] = 'El plugin del Filtro Opencast no almacena ningún dato personal.';
$string['setting_configurl'] = 'URL a config.json de Paella';
$string['setting_configurl_desc'] = 'URL del archivo config.json que utiliza Paella Player. Puede ser una URL absoluta o una URL relativa a wwwroot.';
$string['setting_episodeurl'] = 'Plantillas de URL para filtrado';
$string['setting_episodeurl_desc'] = 'Las URL que coincidan con esta plantilla se reemplazan con el reproductor de Opencast. Debe utilizar el marcador de posición [EPISODEID] para indicar dónde se encuentra el ID del episodio en la URL, por ejemplo, http://stable.opencast.de/play/[EPISODEID]. Si desea filtrar por varias URL, ingrese cada URL en una nueva línea.';
