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
 * Strings for component 'factor_capability', language 'es_mx', version '4.4'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'Debe usar otro factor en Autenticación por Factores Múltiples para autenticar';
$string['pluginname'] = 'Capacidad del usuario';
$string['privacy:metadata'] = 'El plugin del Factor de capacidad del usuario no almacena ningún dato personal.';
$string['settings:adminpasses'] = 'Los administradores del sitio pueden pasar este factor';
$string['settings:adminpasses_help'] = 'De forma predeterminada, los administradores pasan todas las comprobaciones de capacidades, incluyendo esta que usa \'factor/capability:cannotpassfactor\', lo cual significa que fallarán este factor.
   Si se activa, entonces todos los administradores del sitio pasarán este factor si no tienen la capacidad desde otro rol.
   Si no es activada, los administradores del sitio fallarán este factor.';
$string['summarycondition'] = 'NO TIENE la capacidad factor/capability:cannotpassfactor en ningún rol incluyendo administrador del sitio.';
