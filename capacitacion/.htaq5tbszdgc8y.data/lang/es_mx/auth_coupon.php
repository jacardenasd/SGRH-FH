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
 * Strings for component 'auth_coupon', language 'es_mx', version '4.4'.
 *
 * @package     auth_coupon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_description'] = 'Autorregistro/autenticación de correo electrónico con procesamiento de código de cupón';
$string['couponrequired'] = '¿Necesita un código de cupón al registrarte?';
$string['couponrequired_desc'] = 'Cuando esta opción está habilitada, no se pueden completar los registros sin ingresar un código de cupón válido.';
$string['forceauthemail'] = '¿Forzar el método de autenticación por correo electrónico después de un registro exitoso?';
$string['forceauthemail_desc'] = 'Cuando se habilita, la autenticación del usuario registrado se verá obligada a enviar un correo electrónico.
La razón es bastante simple: los procesos pueden fallar y auth_coupon no difiere realmente de auth_email excepto por el posible reclamo de un código de cupón';
$string['pluginname'] = 'Email/coupon authentication';
