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
 * Strings for component 'gamoteca', language 'es_mx', version '4.4'.
 *
 * @package     gamoteca
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionscorerequired'] = 'Puntaje de juego requerido';
$string['completionscorerequired_help'] = 'El puntaje de juego de Gamoteca es requerido para marcar esta actividad como completada';
$string['completionstatus'] = 'Pasado';
$string['completionstatusrequired'] = 'Estado del juego requerido';
$string['completionstatusrequired_help'] = 'El estado de juego de Gamoteca es requerido para marcar esta actividad como completada';
$string['defaultscore'] = 'ND';
$string['defaultstatus'] = 'No iniciado';
$string['defaulttimespent'] = 'ND';
$string['event:gamoteca_created'] = 'Gamoteca creada';
$string['event:gamoteca_created_desc'] = 'El módulo de Gamoteca con moduleid {$a->coursemoduleid} en curso {$a->courseid} ha sido creado.';
$string['event:gamoteca_deleted'] = 'Gamoteca eliminada';
$string['event:gamoteca_deleted_desc'] = 'El módulo de Gamoteca con moduleid {$a->coursemoduleid} en curso {$a->courseid} ha sido eliminado.';
$string['event:gamoteca_updated'] = 'Gamoteca actualizada';
$string['event:gamoteca_updated_desc'] = 'El módulo de Gamoteca con moduleid {$a->coursemoduleid} en curso {$a->courseid} ha sido actualizado.';
$string['gameotecatextmobile'] = 'El juego de Gamoteca será invocado en la App Gaoteca. Para una experiencia óptima, descargue la App Gamoteca desde la tienda de Apps antes de invocar el juego.';
$string['gameotecatextmobileopen'] = 'Abrir juego';
$string['gameotecatextmobilepost'] = 'Nota: Una vez que usted se apunte en Gamoteca, su cuenta será enlazada a Moodle y su progreso y finalización del juego serán actualizados aquí también.';
$string['gamoteca:addinstance'] = 'Añadir enlace a un juego en Gamoteca';
$string['gamoteca:view'] = 'Ver enlace a un juego en Gamoteca';
$string['gamotecaLinkTitlePrefix'] = '[Invocar]';
$string['gamotecanote'] = '<strong>Nota</strong>: Una vez que se Registre o Apunte en Gamoteca, su cuenta será enlazada a esta plataforma y su progreso y finalización del juego serán actualizados aquí también..';
$string['gamotecaurl'] = 'URL de juego Gamoteca';
$string['gamotecaurl_help'] = 'URL al juego en Gamoteca';
$string['invalidurl'] = 'La URL ingresada es inválida. debería comenzar con http:// or https://';
$string['modulename'] = 'Gamoteca';
$string['modulename_help'] = 'El módulo de la actividad Gamoteca permite la integración de juegos de aprendizaje desarrollados en Gamoteca.com dentro de sus cursos.';
$string['modulenameplural'] = 'Gamoteca';
$string['name'] = 'Juego Gamoteca';
$string['name_help'] = 'Título de juego Gamoteca';
$string['openednewwindow'] = 'La experiencia de aprendizaje (juego) Gamoteca ha sido abierta en una nueva ventana.';
$string['pluginadministration'] = 'Administración de Gamoteca';
$string['pluginname'] = 'Gamoteca';
$string['privacy:metadata:gameid'] = 'ID de módulo Moodle';
$string['privacy:metadata:gamotecadata'] = 'Información acerca del progreso del juego Gamoteca';
$string['privacy:metadata:gamotecadata_timecreated'] = 'Sello de tiempo de cuando fue añadido el progreso del juego';
$string['privacy:metadata:gamotecadata_timemodified'] = 'Sello de tiempo de cuando fue modificado por última vez el progreso del juego';
$string['privacy:metadata:gamotecadataid'] = 'ID única del progreso del juego Gamoteca';
$string['privacy:metadata:lti_client'] = 'Para poder integrarse con un servicio LTI remoto, los datos del usuario necesitan ser intercambiados con ese servicio.';
$string['privacy:metadata:lti_client:courseid'] = 'La ID del curso es enviada desde Moodle para enlazar el progreso.';
$string['privacy:metadata:lti_client:moduleid'] = 'La ID del módulo es enviada desde Moodle para enlazar el progreso.';
$string['privacy:metadata:lti_client:siteshortname'] = 'El nombre corto del ditio Moodle es enviado desde Moodle para asciar con la cuenta de empresa/pro de Gamoteca.';
$string['privacy:metadata:lti_client:userid'] = 'La ID del usuario es enviado desde Moodle para permitirle asociar la cuenta en Gamoteca.';
$string['privacy:metadata:score'] = 'El número d epuntos logrados en el juego Gamoteca';
$string['privacy:metadata:timespent'] = 'Tiempo empleado por el alumno desde la última actualización del progreso';
$string['privacy:metadata:userid'] = 'ID del usuario del usuario Moodle';
$string['settings:encryption_key:helper'] = 'Esta clave será usada para encriptar usuario y detalles del curso pasados entre el LMS y la Gamoteca.';
$string['settings:encryption_key:title'] = 'Clave de encriptación';
$string['usergamestate'] = 'Estado: {$a->status} / Puntaje: {$a->score} / Tiempo empleado: {$a->timespent}';
