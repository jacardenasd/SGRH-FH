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
 * Strings for component 'consentform', language 'es_mx', version '4.4'.
 *
 * @package     consentform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['agree'] = 'Estoy de acuerdo';
$string['agreed'] = 'acordado';
$string['agreementlogentry'] = 'Usted ha estado de acuerdo con {$a}.';
$string['backbuttonlist'] = 'Regresar a lista de módulo';
$string['choice'] = 'Haga su elección';
$string['configurations'] = 'Configuración de esta instancia de formato de consentimiento';
$string['confirmationtext'] = 'Texto del formato de consentimiento al cual estar de acuerdo';
$string['confirmincourseoverview'] = 'Acuerdo en vista general del curso';
$string['confirmincourseoverview_help'] = 'El acuerdo/rechazo es dado en la página de la vista general del curso. Esta opción solemente puede ser elegida al crear este módulo.';
$string['confirmincourseoverviewdesc'] = 'Acuerdo/rechazo es dado en la página de vista general del curso.';
$string['consentform'] = 'formato de consentimiento';
$string['consentform:addinstance'] = 'Añadir un nuevo módulo de formato de consentimiento';
$string['consentform:submit'] = 'Editar formato de consentimiento';
$string['consentform:view'] = 'Ver formato de consentimiento';
$string['consentformname'] = 'Nombre';
$string['consentformname_help'] = 'Darle un nombre a esta instancia.';
$string['cssclassesstring'] = 'Clases CSS para div paneles de texto de confirmación';
$string['cssclassesstring_help'] = 'Este texto será usado como propiedad de clase de la marca div-html-tag que contiene el texto de confirmación. Por ejemplo, usted puede usar clases de bootstrap aquí.';
$string['deletetestaction'] = 'Eliminar su acción de prueba';
$string['deletetesterrormessage'] = 'Su acción de prueba no pudo ser eliminada debido a problemas técnicos.';
$string['deletetestmessage'] = 'Su acción de prueba ha sido eliminada.';
$string['dependencies'] = 'Administración';
$string['dependencies_description'] = 'Marcar todas las actividades o recursos en la lista que serán inaccesibles para estudiantes en tanto el formato de consentimiento no haya sido confirmado.';
$string['dependent'] = 'Actividades y recursos';
$string['description'] = 'Descripción';
$string['downloadbuttonlabel'] = 'Exportar';
$string['eventagreementagree'] = 'Usuario ACEPTÓ';
$string['eventagreementagreedesc'] = 'El usuario con id {$a->userid} ACEPTÓ la declaración del formato de consentimiento del módulo {$a->contextinstanceid}.';
$string['eventagreementrefuse'] = 'Usuario REHUSÓ';
$string['eventagreementrefusedesc'] = 'El usuario con id {$a->userid} REHUSÓ la declaración del formato de consentimiento del módulo {$a->contextinstanceid}.';
$string['eventagreementrevoke'] = 'Usuario REVOCÓ';
$string['instancelistviewed'] = 'Lista de instancia vista';
$string['instancelistvieweddesc'] = 'El usuario con id {$a->userid} vio la lista de instancia del módulo {$a->contextinstanceid}.';
$string['linktexttomodulesettings'] = 'Enlace a las configuraciones del módulo';
$string['listempty'] = 'No se encontraron entradas.';
$string['listusers'] = 'Acuerdos';
$string['listusersbutton'] = 'Ver todos los acuerdos';
$string['modulelistlinktext'] = 'Definir dependencias';
$string['modulename'] = 'Formato de consentimiento';
$string['modulename_help'] = 'Use el  módulo de formato de consentimiento para descubrir ciertas actividades no antes de que el participante haya aceptado.';
$string['modulenameplural'] = 'Formatos de consentimiento';
$string['modules'] = 'Actividades y Recursos';
$string['moduleviewed'] = 'Página principal del módulo vista';
$string['modulevieweddesc'] = 'El usuario con id {$a->userid} vio la página principal del módulo{$a->contextinstanceid}.';
$string['msgagreed'] = 'Usted ha ACORDADO exitosamente a la declaratoria del formato de consentimiento.';
$string['msgagreedfailure'] = 'Su elección no pudo guardarse. Por favor inténtelo nuevamente más tarde.';
$string['msgrefused'] = 'Usted se ha rehusado a esta declaración de formato de consentimiento.';
$string['msgrevoked'] = 'Usted ha REVOCADO exitosamente esta declaración de formato de consentimiento.';
$string['noaction'] = 'Sin acción';
$string['nocompletion'] = 'Formato de consentimiento necesita la característica de Moodle de "monitoreo de la finalización" activada, lo que no es caso en este momento. Por favor póngase en contacto con su administrador de Moodle.';
$string['nocompletioncourse'] = 'Este CURSO necesita la característica de Moodle de "monitoreo de la finalización" activada en las configuraciones del curso, lo cual no es el caso en este momento.';
$string['nocompletioncourselinktext'] = 'Enlace a las configuraciones del curso';
$string['nocompletionlinktext'] = 'Enlace a más información';
$string['nocompletionmodule'] = 'Este CURSO necesita la característica de Moodle de "monitoreo de la finalización" activada en las configuraciones del módulo, lo cual no es el caso en este momento.';
$string['nocompletionmodulelinktext'] = 'Enlace a las configuraciones del módulo';
$string['nocompletiontitle'] = 'Finalización no activa';
$string['nocoursemoduleslist'] = 'Sin lista de módulo de curso';
$string['nocoursemoduleslist_help'] = 'La instancia del formato de consentimiento no muestra lista de módulo de curso para configurar dependencias de otros módulos de curso a este formato de consentimiento. Usted tiene que configurar estas dependencias usted mismo, o cambiar esta configuración en las configuraciones del módulo.';
$string['nocoursemoduleslistdesc'] = 'Ninguna lista de módulo de curso es usada. Si usted quiere, configure las dependencias usted mismo.';
$string['optionrefuse'] = 'Rechazo';
$string['optionrefuse_help'] = 'Permitirle a participantes rechazar esta declaración de formato de consentimiento.';
$string['optionrefusedesc'] = 'Predeterminado para opción de rechazar.';
$string['optionrevoke'] = 'Opción de revocar';
$string['optionrevoke_help'] = 'Permitirle a participantes revocar su acuerdo.';
$string['optionrevokedesc'] = 'Predeterminado para opción de revocar';
$string['pluginadministration'] = 'Administración de formato de consentimiento';
$string['pluginname'] = 'Formato de consentimiento';
$string['privacy:metadata:consentform_state'] = 'Información acerca del estado de confirmación de usuarios que han participado en esta instancia de formato de consentimiento.';
$string['privacy:metadata:state'] = 'Un valor para el estado de confirmación de este usuario: 1 para acordado, 0 para revocado, -1 para rehusado.';
$string['privacy:metadata:userid'] = 'La ID de un usuario que ha participado en esta instancia de formato de consentimiento.';
$string['refuse'] = 'Yo lo rechazo';
$string['refused'] = 'rechazado';
$string['refuselogentry'] = '';
$string['resetconsentform'] = 'Limpiar todos datos de acción';
$string['resetok'] = 'Todos los datos eliminados';
$string['revocation'] = 'Revocar';
$string['revoke'] = 'Yo revoco';
$string['revoked'] = 'revocado';
$string['revokelogentry'] = 'Usted ha revocado su consentimiento en {$a}.';
$string['state'] = 'Estado';
$string['textagreementbutton'] = 'Etiqueta de Botón de Acuerdo';
$string['textagreementbuttondesc'] = 'Valor predeterminado para la etiqueta del botón del acuerdo.';
$string['textfields'] = 'Campos de texto';
$string['textrefusalbutton'] = 'Etiqueta del Botón de Rechazo';
$string['textrefusalbuttondesc'] = 'Valor predeterminado para la etiqueta del botón del rechazo.';
$string['textrevocationbutton'] = 'Etiqueta Botón Revocación';
$string['textrevocationbuttondesc'] = 'Valor predeterminado para la etiqueta del botón del revocación.';
$string['timestamp'] = 'Fecha';
$string['titleagreed'] = 'Acuerdos';
$string['titleall'] = 'Todos';
$string['titlenone'] = 'Sin acción';
$string['titlerefused'] = 'Rechazos';
$string['titlerevoked'] = 'Revocaciones';
$string['usegrade'] = 'Usar calificación';
$string['usegrade_help'] = 'Cuando un usuario está de acuerdo un valor de 1 es escrito para este usuario para este módulo en el Libro de calificaciones.';
$string['usegradedesc'] = 'Usar calificación para exportar';
$string['warninguserentry'] = 'Alerta: Se encontró una entrada de formato de consentimiento en la disponibilidad de este módulo, la cual no fue hecha por este formato de consentimiento o ha sido cambiada desde entonces. ¡Asegúrese que (todavía) funciona!';
$string['wrongoperator'] = 'Este módulo NO tiene una conjunción-AND en sus restricciones. ¡Este {$a->consentform} posiblemente está sin efecto en este módulo!';
