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
 * Strings for component 'factor_token', language 'es_mx', version '4.4'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'Token MFA creado.';
$string['form:trust'] = 'Confiar en este dispositivo por {$a}.';
$string['pluginname'] = 'Confiar en este dispositivo';
$string['privacy:metadata'] = 'El plugin del Factor Confiar en este dispositivo no almacena ningún dato personal.';
$string['settings:expireovernight'] = 'Expirar confianza al anochecer';
$string['settings:expireovernight_help'] = 'Esto forza a los tokens a expirar al caer la noche, evitando interrupciones a mitad del día para usuarios. En lugar de esto, se les pedirá que se autentiquen por multi-factor al inicio del día siguiente a la expiración.';
$string['settings:expiry'] = 'Duración de confianza';
$string['settings:expiry_help'] = 'La duración de la confianza en un dispositivo antes de requerir una nueva autenticación multi-factor.';
$string['summarycondition'] = 'el usuario ya ha confiado previamente en este dispositivo';
$string['tokenstoredindevice'] = 'El usuario con ID {$a->userid} tiene un token de autenticación multi-factor almacenado en su dispositivo. <br> Información: {$a->string}.';
