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
 * Strings for component 'factor_admin', language 'es_mx', version '4.4'.
 *
 * @package     factor_admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Este factor permite que el NO SER un administrador cuente como un factor. Su uso deseado es para asegurar que los administradores requieran seguridad más estricta, de forma tal que los usuarios regulares obtienen la ponderación gratuitamente, mientras que los administradores deben de usar otros factores.';
$string['pluginname'] = 'No-administrador';
$string['privacy:metadata'] = 'El plugin de Factor No-administrador no almacena ningún dato personal';
$string['settings:weight_help'] = 'La ponderación es dada a usuarios regulares para este factor, de forma tal que los administradores deben de tener más factores que un usuario regular para pasar.';
$string['summarycondition'] = 'no es un admin';
