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
 * Strings for component 'enrol_selfwithcapability', language 'es_mx', version '4.4'.
 *
 * @package     enrol_selfwithcapability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Inscripción está deshabilitada o inactiva';
$string['canntenrolcapabilitymissing'] = 'Usted no se puede inscribir, porque le faltan los siguientes permisos: {$a}';
$string['defaultrole'] = 'Asignación de rol predeterminado';
$string['defaultrole_desc'] = 'Seleccionar rol que debería ser asignado de forma predeterminada a usuarios durante auto inscripción.';
$string['expirymessageenrolledbody'] = 'Estimado {$a->user},

Esta es una notificación de que su inscripción en el curso \'{$a->course}\' está a punto de expirar en {$a->timeend}.

Si necesita ayuda, por favor póngase en contacto con {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de expiración de inscripción';
$string['expirymessageenrollerbody'] = 'La inscripción en el curso \'{$a->course}\' expirará dentro de {$a->threshold} para los siguientes usuarios:

{$a->users}

Para extenderles su inscripción, vaya a  {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificación de expiración de inscripción';
$string['invalidcapability'] = 'Identificador de capacidad inválido: {$a}';
$string['messageprovider:expiry_notification'] = 'Notificaciones de expiración de inscripción de auto inscripción con capacidad';
$string['pluginname'] = 'Auto inscripción con capacidad';
$string['pluginname_desc'] = 'Un método de inscripción que se comporta como la auto-inscripción, con configuraciones adicionales para requerir capacidades para poderse inscribir.';
$string['privacy:metadata'] = 'El plugin de de auto inscripción con capacidad no almacena ningún dato personal.';
$string['requiredcapabilities'] = 'Capacidades requeridas';
$string['requiredcapabilities_help'] = 'Solamente usuarios con todas  las capacidades seleccionadas podrán inscribirse a sí mismos vía este método.<br>
Estas capacidades deben de tenerse, ya sea a nivel del sistema, o a nivel de categoría de curso..';
$string['selfwithcapability:config'] = 'Configurar instancias de inscripción de auto inscripción con capacidad';
$string['selfwithcapability:manage'] = 'Gestionar usuarios inscritos';
$string['selfwithcapability:unenrol'] = 'Des-inscribir usuarios del curso';
$string['selfwithcapability:unenrolself'] = 'Des-inscribirse a uno mismo del curso';
$string['sendexpirynotificationstask'] = 'Trabajo de enviar notificaciones de inscripción por Auto inscripción con capacidad';
$string['showhint'] = 'Mostrar pista';
$string['showhint_desc'] = 'Mostrar primera letra de la clave de acceso';
$string['showunavailableenrolform'] = 'Mostrar formato de instancia de inscripción no disponible';
$string['showunavailableenrolform_desc'] = 'Si se activa, un  formato de instancia de inscripción no disponible será mostrado colapsado con un mensaje que explica el porqué está no disponible.<br>
En caso contrario, los formatos de instancias de inscripción no disponible no serán mostrados en absoluto..';
$string['status'] = 'Permitir inscripciones existentes';
$string['status_desc'] = 'Habilitar método de auto inscripción con capacidad en cursos nuevos.';
$string['syncenrolmentstask'] = 'Trabajo de sincronizar auto inscripciones con capacidad';
