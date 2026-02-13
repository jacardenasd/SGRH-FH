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
 * Strings for component 'filter_ubicast', language 'es_mx', version '4.4'.
 *
 * @package     filter_ubicast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'clave API';
$string['apikey_desc'] = 'Clave API para obtener información multimedia del servidor multimedia Nudgis.<br/> Esto es necesario para obtener el título correctamente en las pestañas de la lista de reproducción.<br/><strong>Nota:</strong> El usuario vinculado a la clave API debe tener permiso para acceder a todos los medios del servicio Nudgis.';
$string['apilocation'] = 'URL de API';
$string['apilocation_desc'] = 'URL base de la API del servicio Nudgis. Por ejemplo: <code>https://your-nudgis.portal/api/v2/</code>.';
$string['createplaylists'] = 'Crear listas de reproducción';
$string['createplaylists_desc'] = 'Si esta opción está habilitada, siempre que se incrusten varios medios uno tras otro, se mostrará una lista de reproducción. <br/>Si hay algún contenido entre los medios, no se mostrará ninguna lista de reproducción.';
$string['defaultapitimeoutsecs'] = 'Tiempo de espera predeterminado de la API [s]';
$string['defaultapitimeoutsecs_desc'] = 'Tiempo de espera para llamadas API predeterminadas, en segundos.';
$string['filtername'] = 'Filtro ad-hoc para el plugin UbiCast Atto';
$string['filtersettings'] = 'Característica: mostrar como lista de reproducción';
$string['filtersettings_desc'] = 'Las demás configuraciones solo son necesarias si la función está habilitada y desea mostrar los títulos de los videos en cada pestaña de la lista de reproducción. Si ignora estas configuraciones, las pestañas de la lista de reproducción solo mostrarán los números en secuencia, es decir, <code>1., 2., ...</code>.';
$string['privacy:metadata'] = 'El plugin de filtro UbiCast no almacena ningún dato personal.';
