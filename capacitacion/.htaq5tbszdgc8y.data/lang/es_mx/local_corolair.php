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
 * Strings for component 'local_corolair', language 'es_mx', version '4.4'.
 *
 * @package     local_corolair
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhocqueued'] = 'La sincronización con los servicios de Corolair debería haber comenzado en la tarea ad hoc <a href="{$a->adhoc_link}">\\local_corolair\\task\\setup_corolair_connection_task</a>. De lo contrario, active la generación de una clave API desde <a href="{$a->trainer_page_link}">aquí</a>.';
$string['apikey'] = 'Clave API Corolair';
$string['apikeydesc'] = 'Esta clave se genera durante la instalación del plugin. Manténgala en secreto. El equipo de soporte de Corolair podría solicitarla.';
$string['apikeymissing'] = 'Clave API no encontrada en la respuesta de la API de Corolair.';
$string['calendlydemo'] = 'Para que podamos ayudarle eficazmente, primero describa su caso de uso y sus necesidades en una llamada de descubrimiento con el equipo de Corolair. Una vez que comprendamos sus requisitos, nuestros desarrolladores priorizarán la resolución de los problemas de conexión con su instancia de Moodle. Programe su llamada <strong> <a href="https://calendly.com/corolair/30min" target="_blank">aquí</a> </strong>.';
$string['capabilityassignerror'] = 'No se pudo asignar la capacidad "{$a}" al rol.';
$string['capabilityfalse'] = 'Falso';
$string['capabilitytrue'] = 'Verdadero';
$string['corolair:createtutor'] = 'Permite al usuario crear y administrar tutores dentro del plugin Corolair.';
$string['coursenodetitle'] = 'Corolair: Crear un tutor de IA';
$string['createtutorcapability'] = 'Permite a los usuarios crear y administrar tutores de IA dentro de Corolair';
$string['createtutorcapabilitydesc'] = 'El usuario no podrá crear tutores de IA en cursos que no pueda administrar. Si se establece en Falso, podrá crear tutores de IA en cursos en los que se acaba de inscribir.';
$string['curlerror'] = 'Se produjo un error al conectar con la API de Corolair. No se pudo registrar su instancia de Moodle. Inténtelo de nuevo. Si el error persiste, póngase en contacto con el equipo de Corolair.';
$string['errortoken'] = 'Error al obtener token';
$string['false'] = 'Chatbot';
$string['frontpagenodetitle'] = 'Corolair';
$string['installtroubleshoot'] = 'Si encuentra algún problema durante la instalación, consulte la <a href="https://corolair.notion.site/Moodle-Integration-EN-5d5dc1e61f8d4bd89372a6b8009ec4e4?pvs=4" target="_blank">guía de solución de problemas </a>.';
$string['localhosterror'] = 'No se puede registrar instancia Moodle con Corolair porque el sitio se está ejecutando en localhost.';
$string['missingcapability'] = 'Sin permiso para acceder a esta página';
$string['noapikey'] = 'Sin clave API Corolair';
$string['pluginname'] = 'Plugin Local Corolair';
$string['redirectingmessage'] = 'Si no es redirigido automáticamente, haga clic en el botón a continuación para continuar a Corolair.';
$string['restprotocolenableerror'] = 'No se pudo habilitar el protocolo REST.';
$string['roledescription'] = 'Rol para la gestión de tutores de Corolair AI';
$string['rolename'] = 'Gestor de Corolair';
$string['roleproblem'] = 'Se produjo un problema al crear o asignar el nuevo rol de Corolair Manager. Puede configurarlo manualmente activando la función "Corolair Local Plugin" en cualquier rol del sistema. Si tiene algún problema, póngase en contacto con el equipo de Corolair en contact@corolair.com.';
$string['servicecreationerror'] = 'No se pudo crear el servicio REST Corolair.';
$string['sidepanel'] = 'Posición de Tutor IA en pantalla';
$string['sidepaneldesc'] = 'Elija si prefiere mostrar los tutores de IA en el lado derecho de los cursos como un panel lateral (recomendado) o en la esquina inferior derecha como un chatbot clásico.';
$string['tokencreationerror'] = 'No se pudo crear el token REST Corolair.';
$string['tokenname'] = 'token REST Corolair';
$string['trainerpage'] = 'Corolair';
$string['true'] = 'Panel lateral';
$string['unexpectederror'] = 'Se produjo un error inesperado. Inténtelo de nuevo. Si el error persiste, póngase en contacto con el equipo de Corolair.';
$string['webservicesenableerror'] = 'No se pudieron habilitar servicios web.';
