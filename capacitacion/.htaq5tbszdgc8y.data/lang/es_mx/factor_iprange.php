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
 * Strings for component 'factor_iprange', language 'es_mx', version '4.4'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = '¡Actualmente nadie pasará este factor! Usted puede añadir su propia dirección IP (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'Su IP (<i>{$a->ip}</i>) está en la lista y usted pasará este factor.';
$string['allowedipshasntmyip'] = 'Su IP (<i>{$a->ip}</i>) NO está en la lista y usted NO pasará este factor.';
$string['pluginname'] = 'Rango de IP';
$string['privacy:metadata'] = 'El plugin del Factor Rango de IP no almacena ningún dato personal.';
$string['settings:safeips'] = 'Rangos seguros de IP';
$string['settings:safeips_help'] = 'Escriba una lista de direcciones IP o sub-redes a ser contadas como un pase en factor. Si estuviera vacío nadie pasará este factor.. {$a->info} {$a->syntax}';
$string['summarycondition'] = 'está en una red segura';
