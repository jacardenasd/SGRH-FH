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
 * Strings for component 'peerwork', language 'es_mx', version '4.4'.
 *
 * @package     peerwork
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:closed'] = 'Cerrado:';
$string['activitydate:closes'] = 'Esperado:';
$string['activitydate:opened'] = 'Abierto:';
$string['activitydate:opens'] = 'Abre:';
$string['addmorecriteria'] = 'Añadir {no} criterios más';
$string['addmorecriteriastep'] = 'Incrementos al añadir criterios';
$string['addmorecriteriastep_help'] = 'El número de criterios de evaluación a añadir al formato cuando un educador hace clic en el botón para añadir más criterios.';
$string['addsubmission'] = 'Añadir envío';
$string['allmemberssubmitted'] = 'Todos los miembros del grupo enviaron.';
$string['allowlatesubmissions'] = 'Permitir envíos tardíos';
$string['allowlatesubmissions_help'] = 'Si está habilitada, se permitirán las entregas después de la fecha de vencimiento.<br />
<strong>Nota:</strong> Una vez que se haya guardado la calificación del grupo y se hayan calculado las calificaciones finales, las entregas del estudiante no se podrán editar o se bloquearán. Esto es para evitar que los estudiantes alteren la calificación final modificando las calificaciones de sus pares.';
$string['assessment'] = 'evaluación';
$string['assessmentalreadygraded'] = 'Evaluación ya calificada.';
$string['assessmentclosedfor'] = 'Evaluación cerrada para: {$a}';
$string['assessmentcriteria:description'] = 'Descripción del criterio {no}';
$string['assessmentcriteria:description:help'] = 'descripción del criterio';
$string['assessmentcriteria:description:help_help'] = 'Use esto para describir de forma concisa el propósito de este criterio';
$string['assessmentcriteria:header'] = 'Confgiuraciones de criterio de evaluación';
$string['assessmentcriteria:modgradetypescale'] = 'Likert';
$string['assessmentcriteria:nocriteria'] = 'No se han configurado criterios para esta tarea.';
$string['assessmentcriteria:scoretype'] = 'Tipo de puntaje de criterio {no}';
$string['assessmentcriteria:scoretype:help'] = 'tipo de puntaje de criterio';
$string['assessmentcriteria:scoretype:help_help'] = 'Elegir la escala con la cual este criterio será calificado';
$string['assessmentcriteria:weight'] = 'Ponderación';
$string['assessmentcriteria:weight_help'] = 'TODO aún no utilizado';
$string['assessmentnotopenyet'] = 'Evaluación aun no abre.';
$string['assessmentopen'] = 'Evaluación abierta.';
$string['assignment'] = 'Tarea';
$string['availablescales'] = 'Escalas disponibles';
$string['availablescales_help'] = 'Escalas que puede usar esta calculadora.';
$string['base'] = 'Calculadora base';
$string['calcmissing'] = 'La calculadora empleada para aplicar ponderación PA no está disponible. {$a}';
$string['calcmissinggraded'] = 'Por favor tenga en cuenta que cambiar las configuraciones de la calculadora resultará en cambios a las calificaciones finales de los estudiantes.';
$string['calculatedgrade'] = 'Calificación calculada';
$string['calculatedgrade_help'] = 'La calificación antes de aplicar ponderación y penalizaciones.';
$string['calculatedgrades'] = 'Calificaciones calculadas';
$string['calculator'] = 'Calculadora';
$string['calculator_help'] = 'El método de cálculo a usar.';
$string['calculatorplugins'] = 'Plugins de calculadora';
$string['calculatortypes'] = 'Configuraciones de calculadora';
$string['calculatorupdate'] = 'Actualizar calculadora';
$string['charactersremaining'] = '{$a} caracter(es) restante(s)';
$string['clearallsubmissionsforallgroups'] = 'Borrar todos los envíos';
$string['clearsubmission'] = 'Borrar envío';
$string['comment'] = 'Comentario:';
$string['comments'] = 'Comentarios';
$string['comments_help'] = 'Comentario requerido que da la razón para anulación, Esto no será visible para estudiantes. Esto será grabado en las bitácoras.';
$string['completiongradedpeers'] = 'Calificar a pares en grupo';
$string['completiongradedpeers_desc'] = 'Los estudiantes deben calificar a todos sus pares';
$string['completiongradedpeers_help'] = 'Cuando se habilita, un estudiante debe calificar a todos sus pares para cumplir con este requisito.';
$string['confimrclearsubmission'] = '¿Está seguro de que desea borrar el envío de este grupo? Esto eliminará la información proporcionada por todos los estudiantes.';
$string['confimrclearsubmissions'] = '¿Está seguro de que desea borrar la información enviada a todos los grupos? Esto eliminará la información proporcionada por todos los estudiantes.';
$string['confirmationmailbody'] = 'Usted ha enviado evaluación por pares{$a->url} en {$a->time}.
Archivo(s) anexo:
{$a->files}

Calificaciones que usted ha enviado:
{$a->grades}';
$string['confirmationmailsubject'] = 'Envío de evaluación por pares para {$a}';
$string['confirmeditgrade'] = 'Calificación antes de la fecha de vencimiento';
$string['confirmeditgradetxt'] = 'La fecha límite no ha pasado. Si califica ahora, los estudiantes ya no podrán editar las entregas. ¿Desea continuar?';
$string['confirmlockeditingaware'] = 'Ya no podrá realizar cambios en su envío ni en las calificaciones de sus compañeros una vez que los haya guardado. ¿Está seguro de que desea continuar?';
$string['confirmunlockeditinggrader'] = 'Las calificaciones otorgadas por {$a} están bloqueadas actualmente. ¿Quiere desbloquearlas y permitir que este estudiante cambie alguna de sus calificaciones o justificaciones? Esto tiene efecto de inmediato.';
$string['confirmunlockeditingsubmission'] = 'La edición del envío está bloqueada actualmente. ¿Quieres desbloquearla y permitir que los estudiantes actualicen el envío? Esto tiene efecto de inmediato.';
$string['contibutionscore'] = 'Contribución';
$string['contibutionscore_help'] = 'Esta es la puntuación PA, que es la contribución relativa realizada por los miembros del grupo.';
$string['criteria'] = 'Criterios';
$string['criterianum'] = 'Criterio {$a}';
$string['critscale'] = 'Tipo de puntaje del criterio';
$string['critscale_help'] = 'La escala con la que el criterio será calificado.';
$string['defaultcrit'] = 'Configuraciones predeterminadas del criterio (Opcional)';
$string['defaultcrit0'] = 'Texto predeterminado - Criterio 1';
$string['defaultcrit0_help'] = 'El texto predeterminado a usar para el primer criterio';
$string['defaultcrit1'] = 'Texto predeterminado - Criterio 2';
$string['defaultcrit1_help'] = 'El texto predeterminado a usar para el segundo criterio';
$string['defaultcrit2'] = 'Texto predeterminado - Criterio 3';
$string['defaultcrit2_help'] = 'El texto predeterminado a usar para el tercer criterio';
$string['defaultcrit3'] = 'Texto predeterminado - Criterio 4';
$string['defaultcrit3_help'] = 'El texto predeterminado a usar para el cuarto criterio';
$string['defaultcrit4'] = 'Texto predeterminado - Criterio 5';
$string['defaultcrit4_help'] = 'El texto predeterminado a usar para el quinto criterio';
$string['defaultcrit_desc'] = 'Valores predeterminados para hasta 5 criterios y sus escalas correspondientes';
$string['defaultscale'] = 'Escala predeterminada';
$string['defaultscale0'] = 'Escala predeterminada - Criterio 1';
$string['defaultscale0_help'] = 'La escala predeterminada a usar para el primer criterio.';
$string['defaultscale1'] = 'Escala predeterminada - Criterio 2';
$string['defaultscale1_help'] = 'La escala predeterminada a usar para el segundo criterio.';
$string['defaultscale2'] = 'Escala predeterminada - Criterio 3';
$string['defaultscale2_help'] = 'La escala predeterminada a usar para el tercer criterio.';
$string['defaultscale3'] = 'Escala predeterminada - Criterio 4';
$string['defaultscale3_help'] = 'La escala predeterminada a usar para el cuarto criterio.';
$string['defaultscale4'] = 'Escala predeterminada - Criterio 5';
$string['defaultscale4_help'] = 'La escala predeterminada a usar para el quinto criterio.';
$string['defaultscale_help'] = 'La escala predeterminada a usar para todos los otros criterios.';
$string['defaultsettings'] = 'Configuraciones predeterminadas';
$string['defaultsettings_desc'] = 'Los valores que se utilizarán como predeterminados al agregar una nueva instancia de este módulo a un curso.';
$string['displaypeergradestotals'] = 'Mostrar los totales de calificaciones de los pares';
$string['displaypeergradestotals_help'] = 'Cuando esta opción está habilitada, se mostrará a los estudiantes el total de las calificaciones de sus compañeros como porcentaje de cada criterio. Tenga en cuenta que para que se muestre el total, las calificaciones de los compañeros deben estar visibles.';
$string['downloadallsubmissions'] = 'Descargar todos los envíos';
$string['draftnotsubmitted'] = 'Borrador (NO enviado).';
$string['duedate'] = 'Fecha esperada';
$string['duedate_help'] = 'Esta es la fecha límite para la evaluación por pares. Todavía se permitirán envíos de trabajos después de esta fecha (si está habilitada).<br />
<strong>Nota:</strong> Los envíos de archivos de los estudiantes y las calificaciones de los pares no podrán ser editados por los estudiantes después de la calificación.';
$string['duedateat'] = 'Fecha esperada: {$a}';
$string['duedatenotpassed'] = 'La fecha esperada aun no ha llegado. Si usted califica ahora entonces los estudiantes ya no podrán editar envíos.';
$string['duedatepassedago'] = 'La fecha esperada ya pasó hace {$a}.';
$string['editablebecause'] = 'Editable porque: {$a}';
$string['editgrade'] = 'Editar calificación para el grupo: {$a}';
$string['editinglocked'] = 'La edición está bloqueada';
$string['editsubmission'] = 'Editar envío';
$string['eventassessable_submitted'] = 'trabajo entre pares enviar';
$string['eventgradebookupdatefailed'] = 'Actualización del libro de calificaciones de trabajo entre pares';
$string['eventgradesreleased'] = 'Calificaciones liberadas';
$string['eventpeer_feedback_created'] = 'trabajo entre pares retroalimentación entre pares';
$string['eventpeer_grade_created'] = 'trabajo entre pares calificación de pares';
$string['eventpeer_grade_overridden'] = 'trabajo entre pares calificación de pares anulada';
$string['eventsubmission_created'] = 'Envío de trabajo entre pares creado';
$string['eventsubmission_exported'] = 'Exportación de trabajo entre pares';
$string['eventsubmission_files_deleted'] = 'eliminar archivo de trabajo entre pares';
$string['eventsubmission_files_uploaded'] = 'Carga de archivos de trabajo entre pares';
$string['eventsubmission_grade_form_viewed'] = 'Formato de calificación de vista de trabajo entre pares';
$string['eventsubmission_graded'] = 'calificación del trabajo entre pares';
$string['eventsubmission_updated'] = 'Envío de trabajos entre pares actualizado';
$string['eventsubmission_viewed'] = 'vista de trabajo entre pares enviar formulario de tarea';
$string['eventsubmissioncleared'] = 'Envío aprobado';
$string['eventsubmissions_exported'] = 'exportar todos los trabajos entre pares';
$string['eventsubmissionsdownloaded'] = 'Envíos descargados';
$string['export'] = 'Exportar';
$string['exportxls'] = 'Exportar calificaciones de todos los grupos';
$string['feedback'] = 'Retroalimentación para grupo';
$string['feedbackfiles'] = 'Archivos de retroalimentación';
$string['finalgrades'] = 'Calificaciones finales';
$string['finalgrades_help'] = 'La nota final se calcula sumando o restando la diferencia de medias individual/grupal multiplicada por cinco. El resultado depende de si la media individual es mayor o menor que la media del grupo.';
$string['finalweightedgrade'] = 'Calificación final ponderada';
$string['firstsubmittedbyon'] = 'Enviado por primera vez por {$a->name} el {$a->date}.';
$string['fromdate'] = 'Permitir envíos a partir de';
$string['fromdate_help'] = 'Si está habilitada, los estudiantes no podrán enviar sus trabajos antes de esta fecha. Si está deshabilitada, los estudiantes podrán comenzar a enviar sus trabajos de inmediato.';
$string['grade'] = 'Calificación';
$string['gradebefore'] = 'Calificación antes de las anulaciones: {$a}';
$string['gradecannotberemoved'] = 'La calificación no se puede eliminar.';
$string['gradedby'] = 'Calificado por';
$string['gradedbyon'] = 'Calificado por {$a->name} en {$a->date}.';
$string['gradedon'] = 'Calificado en';
$string['gradegivento'] = '<strong>Calificación para</strong>';
$string['gradeoverridden'] = 'Calificación de pares anulada: {$a}';
$string['gradeoverride'] = 'Calificación final';
$string['gradesandfeedbacksaved'] = 'Se han guardado las calificaciones y la retroalimentación';
$string['gradesexistmsg'] = 'Algunas calificaciones ya se han publicado, por lo que no se puede cambiar el tipo de calculadora. Si desea cambiar la calculadora, primero debe elegir si desea o no volver a calcular las calificaciones existentes.';
$string['gradesgivenby'] = '<h2>Calificaciones otorgadas por {$a}</h2>';
$string['groupaverage'] = 'Calificación promedio del grupo';
$string['groupaverage_help'] = 'Este es el promedio general de calificaciones por pares para el grupo.';
$string['groupgrade'] = 'Calificación del grupo';
$string['groupgradeoutof100'] = 'Calificación del grupo sobre 100';
$string['groupsubmissionsettings'] = 'Configuraciones de envío de grupos';
$string['groupsubmittedon'] = 'Grupo envió en';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['invalidgrade'] = 'Calificación no válida';
$string['invalidpaweighting'] = 'Ponderación no válida';
$string['invalidscale'] = 'Escala no válida. Seleccione una de las opciones anteriores.';
$string['justification'] = 'Justificación';
$string['justification_help'] = 'Habilitar/deshabilitar comentarios de justificación y seleccionar visibilidad.';
$string['justificationbyfor'] = 'Por {$a} para';
$string['justificationdisabled'] = 'Deshabilitado';
$string['justificationhiddenfromstudents'] = 'Oculto para estudiantes';
$string['justificationintro'] = 'Agregue comentarios a continuación que justifiquen las puntuaciones proporcionadas para cada uno de sus pares.';
$string['justificationmaxlength'] = 'Límite de caracteres de justificación';
$string['justificationmaxlength_help'] = 'El número máximo de caracteres permitidos en los campos de justificación. Puede establecer este valor en 0 para eliminar el límite.';
$string['justificationnoteshidden'] = 'Nota: sus comentarios quedarán ocultos para sus pares y sólo serán visibles para el personal docente.';
$string['justificationnotesvisibleanon'] = 'Nota: sus comentarios serán visibles para sus pares pero serán anónimos; su nombre de usuario no se mostrará junto a los comentarios que usted deje.';
$string['justificationnotesvisibleuser'] = 'Nota: sus comentarios y su nombre de usuario serán visibles para sus pares.';
$string['justifications'] = 'justificaciones';
$string['justificationtype'] = 'Tipo de justificación';
$string['justificationtype0'] = 'Par';
$string['justificationtype1'] = 'Criterios';
$string['justificationtype_help'] = 'La justificación por pares requiere un comentario para cada par. La justificación por criterios requiere un comentario para cada calificación de criterio.';
$string['justificationvisibleanon'] = 'Anónimo visible';
$string['justificationvisibleuser'] = 'Visible con nombres de usuario';
$string['lasteditedon'] = 'Last edited on {$a->date}.';
$string['latesubmissionsallowedafterduedate'] = 'Después de la fecha de vencimiento, pero se permiten entregas tardías.';
$string['latesubmissionsnotallowedafterduedate'] = 'No se permiten entregas después de la fecha de vencimiento ni posteriores al vencimiento.';
$string['latesubmissionsubject'] = 'Envío tardío';
$string['latesubmissiontext'] = 'Envíos tardíos han sido enviados en {$a->name} por {$a->user}.';
$string['lockediting'] = 'Bloquear edición';
$string['lockediting_help'] = 'Cuando esta opción está habilitada, no es posible modificar las calificaciones de los pares ni las entregas una vez que un estudiante las haya enviado. Los profesores pueden desbloquear la edición para estudiantes individuales mientras se permiten las entregas.';
$string['managepeerworkcalculatorplugins'] = 'Administrar plugins de calculadora de trabajo entre pares';
$string['messageprovider:grade_released'] = 'Calificación y retroalimentación publicadas';
$string['modulename'] = 'Evaluación por Pares';
$string['modulename_help'] = 'La actividad de evaluación por pares es un envío de una tarea grupal combinada con calificación por pares.<br />
Para esta actividad, la calificación por pares se refiere a la capacidad de los estudiantes de evaluar el desempeño/la contribución de su grupo de pares y, si está habilitado, de ellos mismos, en relación con una tarea grupal. La tarea grupal es el componente de presentación de archivos de la actividad. La calificación por pares consiste en una selección de escalas de calificación y comentarios escritos sobre el desempeño de cada estudiante.<br />
Luego, las calificaciones generales finales de cada estudiante individual se calculan mediante el método de calculadora seleccionado.';
$string['modulenameplural'] = 'Evaluaciones por Pares';
$string['multiplegroups'] = 'Las siguientes personas pertenecen a más de un grupo: {$a}. Sus calificaciones no han sido actualizadas.';
$string['myfinalgrade'] = 'Mi calificación final';
$string['nocalculator'] = 'No hay calculadoras instaladas. Todos los estudiantes recibirán la calificación del grupo, sujeto a una penalización por no completar la prueba.';
$string['nomembers'] = '# miembros';
$string['noncompletionpenalty'] = 'Sanción por no presentación de puntajes';
$string['noncompletionpenalty_help'] = 'Si un estudiante no ha presentado ningún puntaje para la evaluación (no ha evaluado a sus compañeros), ¿cuánto se le debe penalizar?';
$string['none'] = 'Nada.';
$string['nonegiven'] = 'Nada otorgado';
$string['nonereceived'] = 'Nada recibido';
$string['nopeergrades'] = '# calificaciones de pares';
$string['noteditablebecause'] = 'Not editable because: {$a}';
$string['noteoverdueby'] = '(vencido por {$a})';
$string['nothingsubmitted'] = 'No se ha enviado nada todavía.';
$string['nothingsubmittedyet'] = 'No se ha enviado nada todavía.';
$string['nothingsubmittedyetduedatepassednago'] = 'Aún no se ha enviado nada, pero la fecha de vencimiento pasó hace {$a}.';
$string['notifygradesreleasedhtml'] = 'Se han publicado la calificación y los comentarios de su envío a \'<em>{$a->name}</em>\'. Puede acceder a ellos <a href="{$a->url}">aquí</a>.';
$string['notifygradesreleasedsmall'] = 'Su calificación para \'{$a}\' ha sido publicada.';
$string['notifygradesreleasedtext'] = 'Se han publicado la calificación y los comentarios de su envío a \'{$a->name}\'. Puede acceder a ellos aquí: {$a->url}';
$string['notyetgraded'] = 'Aún no calificado';
$string['numcrit'] = 'Número predeterminado de criterios';
$string['numcrit_help'] = 'El número predeterminado de criterios que se incluirán. Hay 5 cadenas de idioma predeterminadas';
$string['overridden'] = 'Anulado';
$string['override'] = 'Anular';
$string['overridepeergrades'] = 'Anular calificaciones por pares';
$string['overridepeergrades_help'] = 'Cuando esta opción esté habilitada, los profesores podrán anular las calificaciones otorgadas por los estudiantes a sus pares.';
$string['overridepeergradesby'] = 'Anular las calificaciones de los pares otorgadas por:';
$string['paweighting'] = 'Ponderación de la evaluación por pares';
$string['paweighting_help'] = '¿Qué porcentaje de la calificación total del grupo debe ser evaluado por pares?';
$string['peergrades'] = 'Calificaciones por pares';
$string['peergradeshiddenfromstudents'] = 'Oculto para estudiantes';
$string['peergradesvisibility'] = 'Visibilidad de las calificaciones de los pares';
$string['peergradesvisibility_help'] = 'Esta configuración determina si los estudiantes pueden ver las calificaciones de sus pares que recibieron.

- Oculto para los estudiantes: los estudiantes no verán las calificaciones de sus pares en absoluto
- Visible anónimo: los estudiantes verán las calificaciones de sus pares, pero no los nombres de usuario de quienes las calificaron
- Visible con nombres de usuario: los estudiantes verán las calificaciones de sus pares y los nombres de quienes las calificaron';
$string['peergradesvisibleanon'] = 'Anónimo visible';
$string['peergradesvisibleuser'] = 'Visible con nombres de usuario';
$string['peergradetotal'] = 'Total: {$a}';
$string['peernameisyou'] = '{$a} (usted)';
$string['peerratedyou'] = '{$a->name}: {$a->grade}';
$string['peers'] = 'Califique a sus pares';
$string['peersaid'] = '{$a}:';
$string['peersubmissionandgrades'] = 'Calificaciones y envíos de pares';
$string['peerwork'] = 'Evaluación por Pares';
$string['peerwork:addinstance'] = 'Añadir una actividad de trabajo con pares';
$string['peerwork:grade'] = 'Calificar tareas y calificaciones de pares';
$string['peerwork:view'] = 'Ver el contenido de la evaluación por pares';
$string['peerworkcalculatorpluginname'] = 'Plugin de calculadora';
$string['peerworkfieldset'] = 'Configuraciones de evaluación por pares';
$string['peerworkname'] = 'Evaluación por pares';
$string['peerworkname_help'] = '<strong>Descripción</strong><br />En el campo de descripción usted puede agregar las instrucciones de evaluación de sus pares. Le recomendamos que incluya todos los detalles de la tarea (número de palabras, cantidad de archivos y tipos de archivos aceptados) y orientación sobre los criterios de calificación de sus compañeros (explicar el rango y qué buscar). También puede agregar enlaces a los manuales de los módulos con referencias a las pautas de evaluación. También recomendamos incluir información sobre el apoyo disponible para los estudiantes en caso de que tengan algún problema al enviar su tarea grupal.';
$string['penalty'] = 'Penalización';
$string['pleaseexplainoverride'] = 'Indique el motivo por el cual desea anular esta calificación de pares.';
$string['pleaseproviderating'] = 'Por favor, proporcione una calificación para cada uno de sus pares.';
$string['pluginadministration'] = 'Administración de Evaluación por Pares';
$string['pluginname'] = 'Trabajos con Pares';
$string['privacy:metadata:core_files'] = 'Los plugins almacenan archivos de envío y comentarios.';
$string['privacy:metadata:grades'] = 'Información sobre las calificaciones calculadas y otorgadas por los educadores';
$string['privacy:metadata:grades:grade'] = 'La calificación otorgada al estudiante.';
$string['privacy:metadata:grades:prelimgrade'] = 'La WebPA calculó la calificación antes de aplicar la ponderación y las penalizaciones';
$string['privacy:metadata:grades:revisedgrade'] = 'La calificación revisada que tiene prioridad sobre la calificación, si la hubiera.';
$string['privacy:metadata:grades:userid'] = 'El ID del usuario que proporcionó la justificación.';
$string['privacy:metadata:justification'] = 'La justificación proporcionada por los estudiantes para la calificación otorgada a un par';
$string['privacy:metadata:justification:gradedby'] = 'El ID del usuario que proporcionó la justificación.';
$string['privacy:metadata:justification:gradefor'] = 'El ID del usuario que recibió la calificación';
$string['privacy:metadata:justification:justification'] = 'La justificación dejada';
$string['privacy:metadata:peers'] = 'Información sobre las calificaciones de los pares y la retroalimentación brindada';
$string['privacy:metadata:peers:comments'] = 'Los comentarios realizados sobre la calificación por el usuario que la anuló';
$string['privacy:metadata:peers:feedback'] = 'La retroalimentación dada a un miembro del grupo por un par del grupo.';
$string['privacy:metadata:peers:grade'] = 'La calificación final otorgada a un miembro del grupo por un par del grupo.';
$string['privacy:metadata:peers:gradedby'] = 'El ID del usuario que ha calificado a un par.';
$string['privacy:metadata:peers:gradefor'] = 'La ID del usuario que ha sido calificado por un par';
$string['privacy:metadata:peers:overriddenby'] = 'El usuario que anuló la calificación original otorgada por el par';
$string['privacy:metadata:peers:peergrade'] = 'La calificación original otorgada a un miembro del grupo por un par del grupo.';
$string['privacy:metadata:peers:timecreated'] = 'La hora en la que se envió la calificación';
$string['privacy:metadata:peers:timemodified'] = 'La hora en la que se actualizó la calificación';
$string['privacy:metadata:peers:timeoverridden'] = 'El momento en el que se anuló la calificación de pares';
$string['privacy:metadata:submission'] = 'Información sobre las presentaciones grupales realizadas';
$string['privacy:metadata:submission:feedbacktext'] = 'La retroalimentación dada al grupo por el evaluador.';
$string['privacy:metadata:submission:grade'] = 'La calificación que el evaluador le dio a la presentación grupal.';
$string['privacy:metadata:submission:gradedby'] = 'La ID del usuario que calificó el envío.';
$string['privacy:metadata:submission:groupid'] = 'El ID del grupo del cual proviene este envío';
$string['privacy:metadata:submission:paweighting'] = 'La ponderación  de WebPA utilizado por el evaluador para este envío';
$string['privacy:metadata:submission:released'] = 'La hora en que se liberaron las calificaciones';
$string['privacy:metadata:submission:releasedby'] = 'La identificación del usuario que liberó las calificaciones.';
$string['privacy:metadata:submission:timecreated'] = 'La hora en la que se envió el envío';
$string['privacy:metadata:submission:timegraded'] = 'La hora en la que se calificó el envío';
$string['privacy:metadata:submission:timemodified'] = 'Si el envío ha sido modificado, la hora en que se modificó el envío.';
$string['privacy:metadata:submission:userid'] = 'El ID del usuario que ha creado el envío.';
$string['privacy:path:grade'] = 'Calificación';
$string['privacy:path:peergrades'] = 'Calificaciones por pares';
$string['privacy:path:submission'] = 'Envío';
$string['provideajustification'] = 'Por favor proporcione una justificación.';
$string['provideminimumonecriterion'] = 'Por favor proporcione al menos un criterio.';
$string['ratingnforuser'] = 'Calificación \'{$a->rating}\' para {$a->user}';
$string['recalculategrades'] = 'Recalcular calificaciones';
$string['recalculategrades_help'] = 'Se han liberado las calificaciones. Solo puede cambiar la calculadora si acepta que se volverán a calcular todas las calificaciones.';
$string['releaseallgradesforallgroups'] = 'Liberar todas las calificaciones para todos los grupos';
$string['releasedby'] = 'Liberada por';
$string['releasedbyon'] = 'Calificaciones liberadas por {$a->name} el {$a->date}';
$string['releasedon'] = 'Liberada en';
$string['releasegrades'] = 'Calificaciones liberadas';
$string['requirejustification'] = 'Requerir justificación';
$string['requirejustification_help'] = '- Deshabilitado: No se requerirá que los estudiantes agreguen ningún comentario que justifique las puntuaciones otorgadas a cada uno de sus pares
- Oculto para los estudiantes: Cualquier comentario dejado por los estudiantes será visible solo para los maestros y oculto para sus pares
- Visible anónimo: Cualquier comentario dejado por los estudiantes será visible para sus pares, pero las identidades de quienes dejen comentarios estarán ocultas
- Visible con nombres de usuario: Cualquier comentario dejado por los estudiantes será visible para sus pares junto con las identidades de quienes dejen los comentarios';
$string['revisedgrade'] = 'Calificación revisada';
$string['revisedgrade_help'] = 'Utilice este campo para anular la calificación ponderada final, si es necesario. Sin embargo, si la calificación se anuló o se bloqueó en el libro de calificaciones, no se podrá editar.';
$string['search:activity'] = 'Trabajo entre pares - información de la actividad';
$string['selfgrading'] = 'Permitir que los estudiantes se autocalifiquen junto con sus pares';
$string['selfgrading_help'] = 'Si se habilita esta opción, los estudiantes podrán calificarse a sí mismos y dar su opinión, junto con los demás miembros de su grupo. Esto se tendrá en cuenta para el promedio de calificaciones de sus pares y el promedio general del grupo.';
$string['setup.maxfiles'] = 'Número máximo de archivos subidos';
$string['setup.maxfiles_help'] = 'La cantidad máxima de archivos que el grupo podrá cargar para su envío.<br/>Si se establece en cero, se eliminará por completo la capacidad de cargar archivos.';
$string['studentcalculatedgrade'] = 'Calificación calculada por el estudiante';
$string['studentcontribution'] = 'Contribución del estudiante';
$string['studentfinalgrade'] = 'Calificación final del estudiante';
$string['studentfinalweightedgrade'] = 'Calificación final ponderada del estudiante';
$string['studentondate'] = '{$a->fullname} en {$a->date}';
$string['studentrevisedgrade'] = 'Calificación revisada del estudiante';
$string['submission'] = 'Envío(s)';
$string['submission_help'] = 'Archivo(s) enviado(s) por el grupo. <strong>Nota:</strong> El número máximo de archivos se puede ajustar en la configuración de evaluación por pares.';
$string['submissiongrading'] = 'Envío de archivo';
$string['submissiongrading_help'] = 'Archivo(s) enviado(s) por el grupo. <strong>Nota:</strong> El número máximo de archivos se puede ajustar en la configuración de evaluación por pares.';
$string['submissionstatus'] = 'Estado del envío';
$string['subplugintype_peerworkcalculator'] = 'Método de cálculo de calificaciones';
$string['subplugintype_peerworkcalculator_plural'] = 'Métodos de cálculo de calificaciones';
$string['tasknodifystudents'] = 'Notificar a estudiantes';
$string['teacherfeedback'] = 'Retroalimentación del evaluador';
$string['teacherfeedback_help'] = 'Esta es la retroalimentación dada por el evaluador';
$string['thesestudentspastduedate'] = 'Estos estudiantes entregaron sus trabajos después de la fecha límite: {$a}.';
$string['timeremaining'] = 'Tiempo restante';
$string['timeremainingcolon'] = 'Tiempo restante: {$a}';
$string['tutorgrading'] = 'Calificación del tutor';
$string['userswhodidnotsubmitafter'] = 'Usuarios que no enviaron: {$a}';
$string['userswhodidnotsubmitbefore'] = 'Usuarios que aún necesitan enviar: {$a}';
$string['youbelongtomorethanonegroup'] = 'Usted pertenece a más de un grupo, esto actualmente no está soportado.';
$string['youdonotbelongtoanygroup'] = 'Usted no pertenece a ningún grupo.';
$string['youwereawardedthesepeergrades'] = 'Para este criterio usted recibió los siguientes puntajes de sus pares.';
