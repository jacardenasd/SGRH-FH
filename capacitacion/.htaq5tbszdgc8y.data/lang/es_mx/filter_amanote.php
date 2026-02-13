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
 * Strings for component 'filter_amanote', language 'es_mx', version '4.4'.
 *
 * @package     filter_amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotateresource'] = 'Anotar';
$string['anonymous'] = 'Anónimo';
$string['anonymous_help'] = 'Con esta opción, los usuarios son anónimos en Amanote y no se requiere autenticación. Sin embargo, las características de colaboración y podcast ya no están disponibles. Finalmente, para activar esta característica, usted debe habilitar el guardar en los archivos privados y añadir una clave de activación.';
$string['autosaveperiod'] = 'Período de auto-guardado';
$string['autosaveperiod_help'] = 'Configurar el período de tiempo en minutos entre los guardados automáticos (min: 1, máx:30) Configurar el período a 0 significa no auto-guardar.';
$string['deletefilewarning'] = 'Por favor tenga en cuenta, si usted elimina este recurso, cualquier anotación asociada con él ya no será accesible por estudiantes. Si su intención es actualizar el recurso, considere editarlo en lugar de eliminarlo; esto preservará las anotaciones del estudiante.';
$string['downloadnotes'] = 'Descargar archivo con anotaciones';
$string['feedbacknotification'] = 'Has recibido nueva retroalimentación sobre el archivo {$a->filename} en el curso {$a->course}';
$string['filtername'] = 'Amanote';
$string['foldereditwarning'] = 'Eliminar o cambiar el nombre de los archivos de esta carpeta puede afectar a los estudiantes que ya hayan tomado notas en esos archivos.';
$string['importantinformationdescription'] = 'Para que este módulo funcione correctamente, por favor revise que se cumplan los siguientes requisitos en su sitio Moodle:

1. Filtro Amanote está habilitado (Administración del sitio > Plugins > Filtros > Gestionar filtros)

2. Servicios web están habilitados (Administración del sitio > Características avanzadas)

3. *Servicio web Moodle mobile* está habilitado (Administración del sitio  > Plugins > Servicios web > Servicios externos)

4. Protocolo REST está activado (Administración del sitio > Plugins > Servicios web > MGestionar protocolos)

5. Capacidad *webservice/rest:use* está permitida para *usuarios autenticados* (Administración  del sitio > Usuarios > Permisos > Definir Roles > Usuarios autenticados Usuarios > Gestionar roles)';
$string['importantinformationheading'] = 'Información importante sobre instalación';
$string['key'] = 'Clave de activación';
$string['key_help'] = 'Esta clave es necesaria para características avanzadas como por ejemplo Creador de Podcast.';
$string['messageprovider:feedback'] = 'Envío de una retroalimentación';
$string['messageprovider:question'] = 'Envío de una pregunta';
$string['messageprovider:submission'] = 'Envío del trabajo o las anotaciones de un estudiante';
$string['modaldescription'] = 'Usted puede tomar anotaciones (apuntes) claros y estructurados directamente en los materiales de su curso al hacer clic en el botón inferior.';
$string['openanalytics'] = 'Abrir Analítica del Aprendizaje';
$string['openinamanote'] = 'Abrir en Amanote';
$string['openingmode'] = 'Abriendo modo';
$string['openingmode_fileclick'] = 'Clic en el recurso (mejor experiencia del usuario)';
$string['openingmode_help'] = 'Seleccione el método para abrir un recurso con Amanote.';
$string['openingmode_iconnexttofile'] = 'Ícono pequeño junto a recursos';
$string['openingmode_iconnexttofilewithtext'] = 'Botón "Tomar anotaciones" junto a los recursos';
$string['openingmode_logonexttofile'] = 'Logo Amanote junto a recursos';
$string['openpodcast'] = 'Abrir Creador de Podcast';
$string['openstudentsworks'] = 'Abrir trabajo del estudiante';
$string['pluginadministration'] = 'Administración del módulo Amanote';
$string['pluginname'] = 'Amanote';
$string['preventdownload'] = 'Evitar descargar';
$string['preventdownload_help'] = 'Cuando se habilita, esta opción impide que los usuarios descarguen el material original del curso (por ejemplo los archivos PDF del profesor).';
$string['privacy:metadata'] = 'Para integrar con Amanote, algunos datos del usuario necesitan ser enviados a la aplicación cliente Amanote  (sistema remoto).';
$string['privacy:metadata:access_token'] = 'El token de acceso del usuario es necesario para guardar las anotaciones en el espacio de archivos privados de Moodle.';
$string['privacy:metadata:access_token_expiration'] = 'La expiración del token de acceso es enviada para prevenir que el usuario use la App con un token expirado.';
$string['privacy:metadata:email'] = 'El E-mail del usuario es enviado al sistema remoto para permitir una mejor experiencia del usuario (compartir anotaciones, etc).';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario es enviado al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:subsystem:corefiles'] = 'Archivos (PDF, AMA) son almacenados usando el sistema de archivo de Moodle.';
$string['privacy:metadata:userid'] = 'El userid es enviado de Moodle a Amanote para acelerar el proceso de autenticación.';
$string['questionnotification'] = 'Hay una nueva pregunta sobre el archivo {$a->filename} en el curso {$a->course}';
$string['saveinprivate'] = 'Guardar anotaciones en archivos privados';
$string['saveinprivate_help'] = 'Guardar el archivo con anotaciones en los archivos privados del usuario. Esto permitirá que el usuario regrese a sus anotaciones la siguiente vez que abra el  archivo con anotaciones en Amanote.';
$string['seeguide'] = 'Mostrar cómo en nuestra guía';
$string['stopmodal'] = 'Dejar de mostrar este mensaje';
$string['submissionnotification'] = '{$a->course} ha enviado un trabajo';
$string['takenotesicon'] = 'note-icon-en';
$string['target'] = 'Destino';
$string['target_help'] = 'Seleccionar la ubicación a donde el usuario será re-direccionado para anotar el recurso.';
$string['target_inamanote'] = 'Sitio Amanote (mejor experiencia del usuario)';
$string['target_inmoodle'] = 'Incrustado en Moodle';
$string['target_inmoodlefullscreen'] = 'Moodle a pantalla completa';
$string['teacher'] = 'Profesor';
$string['viewresource'] = 'Ver aquí';
$string['worksheet'] = 'Enviar al profesor';
$string['worksheet_help'] = 'Esta opción le permite a los alumnos enviar sus anotaciones o tareas al profesor. El profesor puede entonces corregir las anotaciones y regresarlas al alumno.';
