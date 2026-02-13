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
 * Strings for component 'accredible', language 'es_mx', version '4.4'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Añadir una instancia de certificado/insignia';
$string['accredible:manage'] = 'Gestionar una instancia de certificado/insignia';
$string['accredible:student'] = 'Recuperar un certificado o insignia';
$string['accredible:view'] = 'Ver un certificado o insignia';
$string['accrediblecustomattributename'] = 'Seleccionar un atributo de diseño Accredible:';
$string['accrediblecustomattributeselectprompt'] = 'Seleccionar un atributo personalizado Accredible';
$string['accrediblegroup'] = 'Grupo Accredible';
$string['achievementid'] = 'ID del logro / nombre del cohorte (debe ser único)';
$string['activitygroupdescription'] = 'Los grupos de credenciales necesitan haberse creado en el <a href="{$a}" target="_blank">Accredible Dashboard</a> antes que las credenciales puedan ser emitidas. Si ninguno aparece, compruebe su clave API para asegurarse que la integración está configurada correctamente.';
$string['activityname'] = 'Nombre de la actividad';
$string['additionalactivitiesone'] = 'Advertencia: Se está agregando más de una actividad a un curso. <br/>Ambas actividades están visibles para los estudiantes, asegúrese de darles diferentes nombres.';
$string['additionalactivitiesthree'] = 'Este es el nombre que aparecerá en el certificado.';
$string['additionalactivitiestwo'] = 'Los Certificados/Insignias únicamente serán listados en la página de la actividad si fueron emitidos con este id del logro.';
$string['apikeyhelp'] = 'Escriba su clave API de accredible.com';
$string['apikeylabel'] = 'clave API';
$string['attributemappingcoursecustomfields'] = 'Mapeo de atributo: campos personalizados del curso';
$string['attributemappingcoursefields'] = 'Mapeo de atributo: campos del curso';
$string['attributemappinguserprofilefields'] = 'Mapeo de atributo: campos del perfil de usuario';
$string['autoissueheader'] = 'Automáticamente usando criterio';
$string['certificatename'] = 'Nombre del Certificado/Insignia';
$string['certificateurl'] = 'URL del Certificado/Insignia';
$string['chooseexam'] = 'Elegir examen final';
$string['completionissuecheckbox'] = 'Si, emitir al finalizar el curso';
$string['completionissueheader'] = 'Criterio para auto-emisión: por finalización del curso';
$string['coursetotal'] = 'Total del Curso';
$string['dashboardlink'] = 'Enlace al tablero de Accredible';
$string['dashboardlinktext'] = 'Para eliminar o personalizar credenciales, inicie sesión en el href="https://dashboard.accredible.com" target="_blank">tablero</a>';
$string['datecreated'] = 'Fecha de creación';
$string['description'] = 'Descripción';
$string['emptygradeattributekeyname'] = 'La calificación final del curso será mapeada al atributo personalizado Accredible seleccionado. Si usted aun no ha creado un atributo  personalizado, puede hacerlo en la  <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Seleccione si preferiría alojar datos en la Unión Europea (Frankfurt) en lugar de los EEUUAA';
$string['eulabel'] = 'Servidor EU (Frankfurt)';
$string['eventcertificatecreated'] = 'Se publicó un certificado en Accredible';
$string['gotodashboard'] = 'Para actualizar la apariencia de sus insignias y sus certificados, visite: <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Elegir calificación Moodle a incluir:';
$string['gradeattributekeynameselect'] = 'Elegir un atributo de diseño Accredible:';
$string['gradeissueheader'] = 'Criterio para auto-emisión: por calificación del examen final';
$string['groupselect'] = 'Grupo';
$string['id'] = 'ID';
$string['includegradeattributecheckbox'] = 'Si, incluir calificación en Credencial.';
$string['includegradeattributedescription'] = 'Incluir Calificación del estudiante en Credencial';
$string['indexheader'] = 'Todos los certificados/insignias para {$a}';
$string['issued'] = 'Emitido';
$string['manualheader'] = 'Emitir certificados/insignias manualmente';
$string['modulename'] = 'Certificados e Insignias Accredible';
$string['modulename_help'] = 'El módulo de actividad de certificados e insignias Accredible le permite emitir certificados o insignias a estudiantes en accredible.com.

Añada la actividad donde Usted quiera que sus alumnos vean su certificado o insignia.';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Certificados/Insignias Accredible';
$string['moodlecoursecustomfield'] = 'Elegir campo personalizado de curso Moodle a incluir';
$string['moodlecoursefield'] = 'Elegir campo de curso Moodle a incluir';
$string['moodleuserprofilefield'] = 'Elegir campo del perfil de usuario Moodle a incluir';
$string['nocertificates'] = 'No hay certificados/insignias';
$string['nouserswarning'] = 'Usted necesita elegir un grupo Accredible para poder ver la lista de usuarios.';
$string['overview'] = 'Vista general';
$string['passinggrade'] = 'Porcentaje de la calificación (%) necesario para pasar el curso';
$string['pluginadministration'] = 'Administración de certificados/insignias Accredible';
$string['pluginname'] = 'Certificados e Insignias Accredible';
$string['privacy:metadata:accredible'] = 'Para poder integrarse con Accredible, datos del usuario necesitan ser intercambiados con ese servicio.';
$string['privacy:metadata:accredible:email'] = 'Su dirección Email es enviada a Accredible para emitir una credencial.';
$string['privacy:metadata:accredible:fullname'] = 'Su nombre completo es enviado a Accredible para emitir una credencial.';
$string['privacy:metadata:accredible:quizgrade'] = 'Su calificación del examen puede ser enviada a Accredible para emitir una credencial.';
$string['recipient'] = 'Beneficiario';
$string['templatename'] = 'Nombre de cohorte (del Tablero)';
$string['unissueddescription'] = 'Estos usuarios han cumplido con los requisitos para este certificado, pero aun no se les ha otorgado un certificado. Seleccione aquellos a los cuales a usted le gustaría otorgarles un certificado.';
$string['unissuedheader'] = 'Certificados/insignias no-otorgados';
$string['usestemplatesdescription'] = 'Asegúrese de que Usted tiene una cohorte en el Tablero con el mismo nombre de su ID del logro.';
$string['viewheader'] = 'Certificados e Insignias para {$a}';
$string['viewimgcomplete'] = 'Haga clic para ver su certificado';
$string['viewimgincomplete'] = 'Corso todavía en progreso';
$string['viewsubheader'] = 'ID del grupo: {$a}';
$string['viewsubheaderold'] = 'ID del logro: {$a}';
