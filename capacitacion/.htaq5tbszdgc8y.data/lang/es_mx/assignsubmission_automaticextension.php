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
 * Strings for component 'assignsubmission_automaticextension', language 'es_mx', version '4.4'.
 *
 * @package     assignsubmission_automaticextension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar extensión automática';
$string['automaticextension:requestextension'] = 'Solicitar una extensión automática';
$string['cancel'] = 'Cancelar';
$string['enabled'] = 'Extensión automática';
$string['enabled_help'] = 'Si se habilita, los estudiantes pueden solicitar una extensión automática.';
$string['event_automatic_extension_applied'] = 'Extensión automática aplicada';
$string['event_automatic_extension_applied_desc'] = 'El usuario con \'{$a->userid}\' ha aplicado una extensión automática para el módulo de curso con ID \'{$a->contextinstanceid}\', la fecha de la extensión es {$a->extensionduedate}.';
$string['extensionrequest'] = 'Solicitud de Extensión';
$string['pluginname'] = 'Extensión automática';
$string['privacy:metadata'] = 'El plugin de envío de extensión automática no almacena ningún dato personal.';
$string['requesterror'] = 'Hubo un probema al aplicar su extensión automática. Por fvor póngase en contacto con su instructor.';
$string['requestextension'] = 'Solicitar extensión';
$string['requestsuccess'] = 'Su extensión automática ha sido aplicada. Su nueva fecha de entrega es {$a}.';
$string['settings:conditions'] = 'Detalles de la condición';
$string['settings:conditions_help'] = 'Los detalles de la condición de la extensión a ser mostrados a los estudiantes cuando solicitan una extensión.';
$string['settings:default'] = 'Habilitado de forma predeterminada';
$string['settings:default_help'] = 'Si se activa, será habilitada una extensión automática de forma predeterminada para todas las tareas nuevas y existentes (creadas antes de que este plugin fuera instalado), dándole a los estudiantes la habilidad de solicitar una extensión automática.';
$string['settings:extensionlength'] = 'Duración de la extensión';
$string['settings:extensionlength_help'] = 'El período de extensión que será aplicado al usuario cuando se haga una solicitud. Las solicitudes subsecuentes (si se permitieran) aumentarán el período de extensión por esta cantidad.';
$string['settings:maximumrequests'] = 'Máximo de solicitudes';
$string['settings:maximumrequests_help'] = 'El máximo de solicitudes que cada usuario puede hacer para cada tarea';
$string['unabletorequest'] = 'En este momento no se puede solicitar una extensión automática. Por favor póngase en contacto con su instructor para una solicitud manual.';
