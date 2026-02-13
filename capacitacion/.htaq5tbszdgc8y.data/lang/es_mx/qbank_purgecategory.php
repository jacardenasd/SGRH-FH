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
 * Strings for component 'qbank_purgecategory', language 'es_mx', version '4.4'.
 *
 * @package     qbank_purgecategory
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'Usted va a purgar una categoría de preguntas. Si prosigue, esta categoría y todas sus sub-categorías y preguntas no utilizadas serán eliminadas de forma permanente. ¡Esta acción no se puede deshacer!';
$string['confirmpurge'] = 'Confirmar purga de categoría de pregunta';
$string['iconfirm'] = 'Yo confirmo que SI entiendo lo que estoy haciendo';
$string['infowithmove'] = 'La categoría \'{$a->name}\' contiene {$a->subcategories} subcategorías, {$a->unusedquestions} preguntas no utilizadas y {$a->usedquestions} preguntas que NO pueden ser eliminadas (preguntas que todavía están en uso en algunos exámenes existentes). Por favor elija otra categoría adonde mover las preguntas que no se pueden eliminar.';
$string['infowithoutmove'] = 'La categoría \'{$a->name}\' contiene {$a->subcategories} subcategorías y {$a->unusedquestions} preguntas no utilizadas.';
$string['pluginname'] = 'Purgar categorías de pregunta';
$string['privacy:metadata'] = 'El plugin no almacena ningún dato personal.';
$string['purgecategories'] = 'Purgar categorías';
$string['purgecategory:purgecategory'] = 'Eliminar categoría de pregunta con todas las preguntas y subcategorías';
$string['purgethiscategory'] = 'Purgar esta categoría';
$string['qbankpurgecategories'] = 'Banco de preguntas: Purgar categorías';
$string['validationcategory'] = 'Por favor seleccione una categoría válida';
$string['validationconfirm'] = 'Usted necesita confirmar esta acción';
