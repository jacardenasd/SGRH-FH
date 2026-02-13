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
 * Strings for component 'lifecycletrigger_customfieldsemester', language 'es_mx', version '4.4'.
 *
 * @package     lifecycletrigger_customfieldsemester
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_delaypositive'] = 'La cantidad de meses debe ser un valor entero positivo entre 1 y 999.';
$string['error_missingfield'] = 'el campo personalizado configurado \'{$a->missingfield}\' está faltante.';
$string['plugindescription'] = 'Disparar cursos por el campo personalizado del curso \'semester\'';
$string['pluginname'] = 'Disparador de campo personalizado de semestre';
$string['privacy:metadata'] = 'El subplugin de "Disparador de campo personalizado de semestre" de la herramienta administrativa "Ciclo de Vida del Curso" no almacena ningún dato personal.';
$string['setting_customfield'] = 'Campo personalizado';
$string['setting_customfield_help'] = 'Con esta configuración, sted define el campo personalizado que contiene el semestre/cuatrimestre de un curso. El valor de este campo será la base de este disparador.';
$string['setting_customfield_nofield'] = 'No hay ningún campo de curso personalizado que podría ser usado por este disparador. Por favor cree un campo de curso personalizado de tipo "Semestre" en la <a href="{$a}">página de administración de campos de curso personalizados</a> primeramente.';
$string['setting_delay'] = 'Disparar x meses después de que inicie el semestre';
$string['setting_delay_help'] = 'Con esta configuración, usted define el retraso hasta que un proceso sea iniciado.\\n\\nk El disparador tomará el semestre de un curso, obtendrá el mes de inicio dle semestre, añadirá la cantidad de meses configurada como retraso y comprobará si este período de retraso ya ha pasado. Si así fuera, el disparador será invocado.\\n\\n Los cursos que tengan el valor (independiente-del-semestre) \\\'term-independent\\\' en el campo de curso personalizado nunca serán disparados.';
