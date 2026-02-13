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
 * Strings for component 'filter_recitactivity', language 'es_mx', version '4.4'.
 *
 * @package     filter_recitactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['character'] = 'El caracter separador';
$string['character_desc'] = 'Represent a el caracter separador usado en el filtro.
    <br>Si el caracter es <b style="color:red">/</b>, el filtro lo buscará en  [[i<b style="color:red">/</b>activityname]].
	<br>Todos los indicadores (<b style="color:red"> i/, c/, d/, b/, s/</b>) deben estar al principio de los paréntesis cuadrados dobles <b style="color:red">[[</b>.
    <br><br><b>Código de integración</b>
    <ul>
	<li>Enlace a nombre de actividad : [[activityname]]</li>
	<li>Enlace a nombre de actividad con ícono : [[<b style="color:red">i/</b>activityname]]</li>
	<li>Enlace a nombre de actividad con casilla de finalización : [[<b style="color:red">c/</b>activityname]]</li>
    <li>Enlace a nombre de actividad con picono y casilla de finalización : [[<b style="color:red">i/c/</b>activityname]]</li>
    <li>Cambiar nombre de enlace : [[/i/c/desc:"Name"/]]activityname</li>
    <li>Añadir clases CSS : [[/i/c/class:"btn btn-primary"/]]</li>
    <li>Abrir el enlace a una actividad en otra pestaña : [[<b style="color:red">c/b/</b>activityname]] ou [[<b style="color:red">i/c/b/</b>activityname]]</li>
    <li> Enlazar a una sección: [[<b style="color: red">s/</b>sectionname]] o [[<b style="color: red">s/</b>/6]] tir a sección 6 si su nombre no está personalizado (no usable en modo de edición).</li>
	<li>Información del curso : [[<b style="color:red">d/</b>course.fullname]], [[<b style="color:red">d/</b>course.shortname]]</li>
	<li>Nombre, Apellido(s) Email y avatar del estudiante : [[<b style="color:red">d/</b>user.firstname]], [[<b style="color:red">d/</b>user.lastname]], [[<b style="color:red">d/</b>user.email]] y [[<b style="color:red">d/</b>user.picture]]</li>
	<li>Nombre, Apellido(s) Email y avatar del primer profesor : [[<b style="color:red">d/</b>teacher1.firstname]], [[<b style="color:red">d/</b>teacher1.lastname]], [[<b style="color:red">d/</b>teacher1.email]] y [[<b style="color:red">d/</b>teacher1.picture]]. El profesor debe estar en el grupo para que aparezca su nombre.</li>
    <li>Igual para profesor2, profesor3, ... para todfos los profesores para ese curso.</li>
    <li>Enlazar a contenido H5P: [[<b style="color:red">h5p/</b>Nombre de H5P]]</li>
    </ul>';
$string['dismissMsg'] = 'Descartar';
$string['filtername'] = 'Recit autoenlace';
$string['noteacheringroup'] = 'Profesor indefinido';
$string['pluginname'] = 'RECIT autoenlace';
$string['privacy:metadata'] = 'El plugin "Recit autolink" no almacenaningún dato personal.';
$string['recitactivity:teacher'] = 'Mostrar nombre del profesor';
$string['teacherbygroup'] = 'Mostrar profesores solamente en grupo de usuarios';
$string['teacherbygroup_desc'] = 'Si esto estuviera desactivado, profesor mostrará a todos los profesores del curso sin importar el grupo';
