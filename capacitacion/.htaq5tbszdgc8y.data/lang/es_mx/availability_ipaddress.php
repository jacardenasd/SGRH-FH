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
 * Strings for component 'availability_ipaddress', language 'es_mx', version '4.4'.
 *
 * @package     availability_ipaddress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['and_x_more'] = '... y {$a} más.';
$string['confirm_delete_range'] = 'Al eliminar este rango de IP, se eliminarán todas las restricciones donde se utiliza. ¿Seguro que desea eliminarlo permanentemente?';
$string['confirm_disable_range'] = 'Este rango de IP está actualmente en uso. Al deshabilitarlo, se eliminarán todas las restricciones donde se usa. ¿Seguro que desea continuar?';
$string['custom_ipaddress'] = 'Direcciones IP personalizadas';
$string['description'] = 'Restringir acceso por dirección IP o subred';
$string['enabled'] = 'Habilitado';
$string['error_ipaddress'] = 'Dirección IP / formato de subred incorrecto';
$string['existing_ranges'] = 'Formato de dirección IP/subred incorrecto';
$string['ipaddresses'] = 'Direcciones IP';
$string['ipaddresses_help'] = 'Introducir las direcciones IP separadas por comas. Admite direcciones IP individuales (192.168.1.1), rangos (192.168.1.1-255) y subredes (192.168.1.0/24).';
$string['ipaddresses_help_help'] = '<p>Ingresar una o más direcciones IP o rangos, separados por comas.</p>
<p><strong>Ejemplos:</strong></p>
<ul>
<li><strong>IP única:</strong> <code>192.168.1.1</code></li>
<li><strong>Rango de IP:</strong> <code>192.168.1.1-255</code></li>
<li><strong>Subred:</strong> <code>192.168.1.0/24</code></li>
<li><strong>Múltiples:</strong> <code>192.168.1.1,10.0.0.0/8,172.16.0.1-255</code></li>
</ul>';
$string['js:ipaddress'] = 'Requerir dirección de red';
$string['manage_predefined_ranges'] = 'Administrar rangos de IP predefinidos';
$string['pluginname'] = 'Dirección IP';
$string['predefined_ranges'] = 'Rangos de IP predefinidos';
$string['privacy:metadata'] = 'EL plugin de restricción de actividad por direcciónIP no almacena ningún dato personal.';
$string['range_created'] = 'Rango de IP creado exitosamente';
$string['range_deleted'] = 'Rango de IP eliminado exitosamente';
$string['range_deleted_and_removed'] = 'Rango de IP eliminado y quitado de la(s) restricción(es) {$a}.';
$string['range_disabled_and_removed'] = 'Rango de IP deshabilitado y eliminado de la(s) restricción(es) {$a}.';
$string['range_in_use_count'] = 'Este rango de IP se utiliza actualmente en {$a} restricciones.';
$string['range_in_use_title'] = 'Rango de IP en uso';
$string['range_name'] = 'Nombre del rngo';
$string['range_name_help'] = 'Un nombre descriptivo para este rango de IP, por ejemplo, "Red del campus" o "Computadoras de la biblioteca".';
$string['range_updated'] = 'El rango de IP se actualizó correctamente';
$string['require_condition'] = 'Se permite la dirección IP/subred (Su IP:{$a})';
$string['require_condition_not'] = 'La dirección IP/subred no está bloqueada (Su IP:{$a})';
$string['setting:manage_predefined_ranges'] = 'Dirección IP: administrar rangos de IP predefinidos';
$string['sortorder'] = 'Orden de clasificación';
$string['title'] = 'Dirección IP';
$string['use_predefined'] = 'Usar direcciones IP predefinidas';
