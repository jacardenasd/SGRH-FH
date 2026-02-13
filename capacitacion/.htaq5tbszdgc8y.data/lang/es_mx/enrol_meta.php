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
 * Strings for component 'enrol_meta', language 'es_mx', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Añadir al grupo';
$string['coursesort'] = 'Orden de lista de curso origen';
$string['coursesort_help'] = 'Cuando se enlaza el curso origen al curso destino, ¿cómo deberían ser ordenados los cursos origen?';
$string['creategroup'] = 'Crear nuevo grupo';
$string['defaultgroupnametext'] = '{$a->name} curso {$a->increment}';
$string['enrolmetasynctask'] = 'Trabajo de sincronización de meta inscripción';
$string['linkedcourse'] = 'Enlazar curso';
$string['meta:config'] = 'Configurar instancias de meta-inscripción';
$string['meta:selectaslinked'] = 'Seleccionar cursos como meta-enlazados';
$string['meta:unenrol'] = 'Des-inscribir (dar de baja) usuarios suspendidos';
$string['nosyncroleids'] = 'Roles que actualmente no están sincronizados';
$string['nosyncroleids_desc'] = 'Seleccionar cualquier rol que no debería ser sincronizado entre el curso origen al curso destino.';
$string['pluginname'] = 'Meta-enlace a curso';
$string['pluginname_desc'] = 'El plugin de meta enlace a curso sincroniza las inscripciones y los roles desde el curso origen al curso destino.';
$string['privacy:metadata:core_group'] = 'El plugin de Inscripción  por Meta enlace puede crear un nuevo grupo o usar un grupo existente para añadir participantes desde el curso origen.';
$string['samemetacourse'] = 'Usted no puede añadir un meta enlace al mismo curso.';
$string['syncall'] = 'Sincronizar a todos los usuarios inscritos';
$string['syncall_desc'] = 'Si se habilita, todos los usuarios inscritos serán sincronizados desde el curso de origen aún cuando no tuvieran un rol en él. En caso contrario, solamente los usuarios que tengan al menos un rol serán inscritos en el curso destino.';
$string['unknownmetacourse'] = 'Nombre corto de meta curso desconocido';
$string['wscannotcreategroup'] = 'No hay permiso para crear grupo en curso enlazado con id = {$a}.';
$string['wsinvalidcourse'] = 'El curso con id = {$a} no existe o usted no tiene permiso para añadir un meta enlace a curso.';
$string['wsinvalidmetacourse'] = 'El curso meta con id = {$a} no existe o usted no tiene permiso para añadir una instancia de inscripción.';
$string['wsnoinstancesspecified'] = 'Sin instancia especificada';
