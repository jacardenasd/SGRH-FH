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
 * Strings for component 'local_moodlecheck', language 'es_mx', version '4.4'.
 *
 * @package     local_moodlecheck
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Revisar';
$string['checkallrules'] = 'Revisar sobre todas las reglas';
$string['checkselectedrules'] = 'Revisar sobre las reglas seleccionadas.';
$string['error_categoryvalid'] = 'La categoría  <b>{$a->category}</b> no es válida';
$string['error_default'] = 'Error: {$a}';
$string['error_emptynophpfile'] = 'El archivo está vacío o no contiene código PHP. Saltado.';
$string['error_functionarguments'] = 'Phpdocs para la función <b>{$a->function}</b> tiene una lista incompleta de parámetros';
$string['error_noinlinephpdocs'] = 'Se encontró un comentario que empieza con tres o más barras diagonales';
$string['error_phpdoccontentsinlinetag'] = 'Tag inline phpdocs <b>{$a->tag}</b> encontrada con contenidos incorrectos. Debería coincidir con {@link [valid URL] [descripción (opcional)]} o {@see [valid FQSEN] [descripción (opcional)]}';
$string['error_phpdocsinvalidinlinetag'] = 'Marca (tag) inline phpdocs inválida <b>{$a->tag}</b> encontrada';
$string['error_phpdocsuncurlyinlinetag'] = 'Marca (tag) inline phpdocs no encerrada entre paréntesis curveados <b>{$a->tag}</b> encontrada';
$string['ignorepath'] = 'Subrutas a ignorar';
$string['linenum'] = 'Línea <b>{$a}</b>:';
$string['notificationerror'] = 'Se encontraron {$a} errores';
$string['notificationsuccess'] = '¡Bien hecho!';
$string['path'] = 'Ruta(s)';
$string['path_help'] = 'Especifique uno o más archivos y/o directorios a revisar como rutas locales desde el directorio de instalación de Moodle';
$string['pluginname'] = 'Revisión PHPdoc de Moodle';
$string['privacy:metadata'] = 'El plugin Moodle PHPdoc check no almacena ningún dato personal.';
$string['rule_categoryvalid'] = 'La marca (tag) de categoría es inválida';
$string['rule_functionarguments'] = 'Phpdocs para funciones define apropiadamente todos los parámetros';
$string['rule_noinlinephpdocs'] = 'No hay comentarios que empiecen con tres o más diagonales';
$string['rule_phpdoccontentsinlinetag'] = 'Las marcas inline phpdocs usadas tienen contenidos correctos';
$string['rule_phpdocsinvalidinlinetag'] = 'Las marcas (tags) phpdocs en-línea (inline) son válidas';
$string['rule_phpdocsuncurlyinlinetag'] = 'Las marcas (tags) phpdocs en-línea (inline) están dentro de paréntesis curveados';
