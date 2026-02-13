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
 * Strings for component 'journal', language 'es_mx', version '4.4'.
 *
 * @package     journal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso denegado';
$string['alwaysopen'] = 'Siempre abierto';
$string['blankentry'] = 'Entrada vacía';
$string['changessaved'] = 'Cambios guardados';
$string['completiondetail:completion_create_entry'] = 'Crear una entrada del Diario';
$string['couldnotupdatejournal'] = 'No se pudo actualizar su Diario';
$string['countnotinsertjournalentry'] = 'No se pudo insertar una nueva entrada de Diario';
$string['crontask'] = 'Procesamiento en segundo plano para módulo Journal';
$string['dateasc'] = 'Fecha ascendiente';
$string['datedesc'] = 'Fecha descendiente';
$string['daysavailable'] = 'Días disponibles';
$string['deadline'] = 'Días Abierto';
$string['defaultgrade'] = 'Calificación de entrada predeterminada';
$string['defaultgrade_help'] = 'Calificación máxima predeterminada para nuevas entradas del diario.
* Introduzca **100** (o cualquier número positivo) para la calificación predeterminada por puntos.
* Introduzca **0** para "Sin calificación" (útil para actividades formativas).';
$string['editingended'] = 'El período de edición ha terminado';
$string['editingends'] = 'El período de edición termina';
$string['entries'] = 'Entradas';
$string['entry'] = 'Entrada';
$string['evententriesviewed'] = 'Entradas de Diario vistas';
$string['evententrycreated'] = 'Entrada de Diario creada';
$string['evententryupdated'] = 'Entradas de Diario actualizadas';
$string['eventfeedbackupdated'] = 'Retralimentación de Diario actualizada';
$string['eventjournalcreated'] = 'Diario creado';
$string['eventjournaldeleted'] = 'Diario eliminado';
$string['eventjournalviewed'] = 'Diario visto';
$string['failedupdate'] = 'No se pudo actualizar la retroalimentación del Diario para {$a}';
$string['feedback'] = 'Retroalimentación';
$string['feedbackupdated'] = 'Retroalimentación actualizada para {$a} entradas';
$string['feedbackupdatedforuser'] = 'Retroalimentación actualizada para {$a}';
$string['firstnameasc'] = 'Nombre Ascendiente';
$string['firstnamedesc'] = 'Nombre Descendidente';
$string['grade'] = 'Calificación';
$string['gradedby'] = 'Calificado por';
$string['gradeingradebook'] = 'Calificación actual en libro de calificaciones';
$string['incorrectcmid'] = 'ID del módulo de curso es incorrecta';
$string['incorrectcourseid'] = 'ID del curso es incorrecta';
$string['incorrectcoursesectionid'] = 'La sección seleccionada del curso es incrrecta';
$string['incorrectjournalentry'] = 'La entrada seleccionada del Diario es incorrecta';
$string['incorrectjournalid'] = 'La ID seleccionada del Diario es incorrecta';
$string['incorrectuserid'] = 'La ID seleccionada del usuario es incorrecta';
$string['journal:addentries'] = 'Añadir entradas a Diario';
$string['journal:addinstance'] = 'Añadir un nuevo Diario';
$string['journal:manageentries'] = 'Gestionar entradas de Diario';
$string['journalmail'] = 'Hola {$a->student},

{$a->teacher} ha publicado una retroalimentación en su entrada de Diario para \'{$a->journal}\'

Curso: {$a->course_name}
Diario: {$a->journal}
Fecha: {$a->date}

Usted puede ver la retroalimentación aquí:
    {$a->url}';
$string['journalmailhtml'] = '<p>Hola {$a->student},</p>

<p>{$a->teacher} ha publicado una retroalimentación en su entrada de Diario para \'{$a->journal}\'.</p>
<p>
    <strong>Course:</strong> {$a->course_name}<br />
    <strong>Diario:</strong> {$a->journal}<br />
    <strong>Fecha: {$a->date}
</p>
<p>Usted puede ver la retroalimentación <a href="{$a->url}">aquí</a>.</p>';
$string['journalname'] = 'Nombre de Diario';
$string['journalquestion'] = 'Pregunta de Diario';
$string['lastedited'] = 'Última edición';
$string['lastnameasc'] = 'Apellido(s) Ascendientes';
$string['lastnamedesc'] = 'Apellido(s) Descendientes';
$string['mailbody'] = '{$a->username} ha actualizado la entrada del diario \'{$a->journalname}\'

Puede ver la entrada aquí:
{$a->url}';
$string['mailbodyhtml'] = '{$a->username} ha actualizado la entrada del diario \'<i>{$a->journalname}</i>\'<br /><br />
Puede ver la <a href="{$a->url}">entrada del diario aquí</a>.';
$string['mailsubject'] = 'Retroalimentación de Diario';
$string['messageprovider:journal_feedback'] = 'Retroalimentación para Diario del profesor';
$string['messageprovider:submission'] = 'Entrada de Diario creada o modificada';
$string['modulename'] = 'Diario (Journal)';
$string['modulename_help'] = '###### Características principales
- Recopila las entradas de texto en línea de los estudiantes para su revisión y calificación
- Las entradas son privadas entre el estudiante y el profesor (no son visibles para otros estudiantes)
- Permite la retroalimentación en formato de texto y la calificación por parte del profesor
- Incluye la opción "Días disponibles" para controlar el período de entrega
- Muestra todas las entradas de una clase o grupo en una página para una revisión eficiente

###### Formas de uso
- Asigna tareas breves de escritura reflexiva o diarios de aprendizaje
- Úsalo para la retroalimentación continua y la mejora iterativa del trabajo del estudiante
- Anima a los estudiantes a resumir lecciones o lecturas con sus propias palabras
- Realiza un seguimiento del progreso del estudiante en tareas sencillas basadas en texto
- Facilita la comunicación privada entre el profesor y el estudiante para la evaluación formativa';
$string['modulename_link'] = 'mod/journal/view';
$string['modulename_summary'] = 'Recopila entradas de texto privadas en línea de los estudiantes para recibir retroalimentación y calificaciones, con un período de disponibilidad establecido y sin cargas de archivos.';
$string['modulenameplural'] = 'Diarios';
$string['needsregrade'] = 'La entrada ha cambiado desde que se guardó la última retroalimentación.';
$string['newjournalentries'] = 'Nuevas entradas de Diario';
$string['nodatachanged'] = 'No se cambió ningún dato';
$string['nodeadline'] = 'Siempre abierta';
$string['noentriesmanagers'] = 'No hay profesores';
$string['noentry'] = 'Sin entradas';
$string['nograde'] = 'Sin calificación';
$string['noratinggiven'] = 'Sin valuaciones dadas';
$string['notifystudents'] = 'Notificar a estudiantes';
$string['notifystudents_default'] = 'Notificar a estudiantes de forma predeterminada';
$string['notifystudents_default_help'] = 'Configuración predeterminada para nuevas actividades de Diario';
$string['notifystudents_help'] = 'Si esta opción está habilitada, los estudiantes recibirán una notificación a través de la mensajería de Moodle cuando un profesor proporcione retroalimentación sobre una entrada del diario.';
$string['notifyteachers'] = 'Notificar a profesores';
$string['notifyteachers_default'] = 'Notificar a profesores de forma predeterminada';
$string['notifyteachers_default_help'] = 'Configuración predeterminada para las nuevas actividades del diario.';
$string['notifyteachers_help'] = 'Si esta opción está habilitada, los profesores recibirán una notificación a través de la mensajería de Moodle cuando un estudiante cree o actualice una entrada de diario.';
$string['notopenuntil'] = 'El Diario  no estará abierto sino hasta después de';
$string['notstarted'] = 'Usted aún no ha empezado este Diario';
$string['numchars'] = '{$a} caracteres';
$string['overallrating'] = 'Valuación general';
$string['pluginadministration'] = 'Administración del módulo Diario';
$string['pluginname'] = 'Diario (Journal(';
$string['privacy:metadata:journal_entries'] = 'Un registro de entrada de Journal';
$string['privacy:metadata:journal_entries:entrycomment'] = 'El comentario recibido por un usuario a Journal';
$string['privacy:metadata:journal_entries:modified'] = 'La hora de inicio de las entradas de Journal.';
$string['privacy:metadata:journal_entries:rating'] = 'La valoración recibida por usuario a Journal';
$string['privacy:metadata:journal_entries:teacher'] = 'El profesor que ha dado retroalimentación al usuario en Journal';
$string['privacy:metadata:journal_entries:text'] = 'El texto escrito por el usuario';
$string['privacy:metadata:journal_entries:userid'] = 'La ID del usuario';
$string['rate'] = 'Valorar';
$string['removeentries'] = 'Remover todas las entradas';
$string['removemessages'] = 'Quitar todas las entradas de Diario';
$string['saveallfeedback'] = 'Guardar todas mis retroalimentaciones';
$string['savechanges'] = 'Guardar cambios';
$string['savefeedback'] = 'Guardar retroalimentación';
$string['search:activity'] = 'journal - información de actividad';
$string['search:entry'] = 'journal - entradas';
$string['showoverview'] = 'Mostrar vista general de Diariosen mi Moodle';
$string['showrecentactivity'] = 'Mostrar actividad reciente';
$string['started'] = 'Usted ha iniciado este Diario';
$string['startoredit'] = 'Iniciar o editar mi entrada de Diario';
$string['userswhocompletedthejournal'] = 'Usuarios que completaron el Diario';
$string['userswhodidnotcompletedthejournal'] = 'Usuarios que NO completaron el Diario';
$string['viewallentries'] = 'Ver {$a} entradas de Diario';
$string['viewentries'] = 'Ver entradas';
