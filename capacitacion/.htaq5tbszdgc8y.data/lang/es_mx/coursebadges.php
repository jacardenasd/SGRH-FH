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
 * Strings for component 'coursebadges', language 'es_mx', version '4.4'.
 *
 * @package     coursebadges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonebadgerequired'] = 'Usted debe crear al menos una insignia para este curso para que esta actividad funcione apropiadamente : <a href="{$a->linkbadges}">Gestionar insignias</a>';
$string['available_badges'] = 'Insignias disponibles';
$string['badgefieldsearch'] = 'Insignia';
$string['badgeoverviewtitle'] = 'Vista general de insignias';
$string['badgesoverviewlink'] = 'Vista general de insignias';
$string['btn_change_badge_selections'] = 'Editar insignias';
$string['btn_save_selected_badge'] = 'Guardar mi elección';
$string['cbx_allow_modifications_choice'] = 'Permitir la edición de la opción (predeterminado : si)';
$string['cbx_always_show_results'] = 'Siempre mostrar el resultado para los usuarios.';
$string['cbx_no_notification'] = 'Sin notificación';
$string['cbx_no_publish_results'] = 'No publicar el resultado para los usuarios.';
$string['cbx_show_course_badges_block'] = 'Mostrar el bloque de insignias del curso';
$string['cbx_show_results_after_response'] = 'Mostrar los resultados para usuarios después de su respuesta';
$string['cbx_updated_choice_notification'] = 'Cuando un usuario edita su elección';
$string['cbx_validated_choice_notification'] = 'Cuando un usuario valida su elección';
$string['changebadgeselectionsgroup'] = 'Cambiar insignias seleccionadas';
$string['changebadgeselectionsgroup_help'] = '¡Advertencia! Esta acción quitará todas las insignias elegidas para todos los usuarios en este curso.';
$string['changeselectedbadges'] = 'Cambiar insignias seleccionadas';
$string['completionvalidatedbadges'] = 'Los usuarios deben validar su elección de insignias del curso';
$string['course_badges'] = 'Insignias del curso';
$string['coursebadges:addinstance'] = 'Añadir una nueva instancia de insignias del curso';
$string['coursebadges:choose'] = 'Guardar una elección';
$string['coursebadges:deletechoice'] = 'Eliminar respuestas';
$string['coursebadges:viewbadgesoverview'] = 'Ver vista general de insignias';
$string['coursebadges:viewusersoverview'] = 'Ver vista general de usuarios';
$string['coursebadges_notification_task'] = 'Sistema de notificación para la actividad de insignias del curso';
$string['criteria'] = 'Criterio';
$string['dateformat'] = 'mm-dd-aa';
$string['description'] = 'Descripción';
$string['descriptioncolumn'] = 'Descripción';
$string['earnedbadgelabel'] = 'Ganadas';
$string['earnedbadgescolumn'] = 'Insignias ganadas';
$string['email_message_outro'] = '<br/><br/>
<p>Usted puede ir a la actividad concerniente al elegir el enlace siguiente : <a href="{$a->activitylink}">{$a->activityname}</a><br/>
Esperamos verlo pronto. <br/><br/></p>';
$string['email_updated_message_intro'] = '<p>Hola {$a->username}, <br/>
Usted ha recibido esta notificación porque el usuario <b>{$a->affectedusername}</b> ha cambiado sus elecciones de insignia en el curso "{$a->coursename}" al elegir las siguientes insignias : <br/></p>';
$string['email_validated_message_intro'] = '<p>Hola {$a->username}, <br/>
Usted ha recibido esta notificación porque el usuario <b>{$a->affectedusername}</b> ha validado sus elecciones de insignia en el curso "{$a->coursename}" con las siguientes insignias : <br/></p>';
$string['error_configuration_activity_notif'] = 'el formato no pudo ser validado porque las condiciones no fueron cumplitas : <ul>
{$a->ruleminallowbadge}
{$a->rulemaxallowbadge}
</ul>';
$string['error_rule_max_allow_badge'] = '<li>El número de opciones de insignia debe ser mayor o igual a {$a}.</li>';
$string['error_rule_min_allow_badge'] = '<li>El número de opciones de insignia debe ser menor o igual a {$a}.</li>';
$string['filtertitle'] = 'Vista general de insignias globales';
$string['firstnamecolumn'] = 'Nombre';
$string['groupfieldsearch'] = 'Grupo';
$string['groupnamecolumn'] = 'Grupo';
$string['imagecolumn'] = 'Imagen';
$string['label_activity_management'] = 'Configuraciones de actividad';
$string['label_badges_management'] = 'Gestión de insignias';
$string['label_change_badge_selections'] = 'Cambiar insignias selecconadas';
$string['label_manage_badges'] = 'Gestión de insignias';
$string['label_notification'] = 'Notificación (predterminado : Sin notificación)';
$string['label_show_awarded_results'] = 'Publicar los resultados (mostrar usuarios que han seleccionado insignias)';
$string['lastnamecolumn'] = 'Apellido(s)';
$string['manage_badges_link'] = 'Gestionar insignias del curso';
$string['modcolumn'] = 'Actividad de insignias de curso\'';
$string['modnamefieldsearch'] = 'Actividad de insignias de curso\'';
$string['modulename'] = 'Insignias de curso';
$string['modulename_help'] = 'El módulo de insignias del curso le permite a los usuarios el configurar objetivos para obtener una o más insignias.
El profesor configura la(s) insignia(s) que puede(n) ser obtenida(s) por los estudiantes entre aquellas disponibles en el curso.
Los usuarios pueden seguir a obtener las insignias que han retenido. dependiendo de las configuraciones, ellos también tienen acceso a las elecciones de los otros usuarios.
Los profesores tienen acceso a una vista sintética de las insignias elegidas y obtenidas por los usuarios.
Dependiendo de sus configuraciones, esta actividad está asociada con un bloque que es añadido automáticamente a las columnas laterales del curso.';
$string['modulenameplural'] = 'Insignias del curso';
$string['namecolumn'] = 'Nombre';
$string['nobadgeincourse'] = 'No existe ninguna insignia en este curso';
$string['nobadgeoverview'] = '<p>Usted no puede entrar a la vista general de insignias.</p>
<p>Usted no tiene los derechos requeridos para ver esta página.</p>';
$string['nobadgeyet'] = 'No hay insignias para este curso en este momento.Por favor regrese más tarde : <a href="{$a->linkcourse}">Regresar al curso</a>';
$string['notification_add_choice'] = 'Las eleciones de insignia se han hecho.';
$string['notification_delete_user_choice'] = 'Las opciones de insignia para esta actividad han sido removidas exitosamente.';
$string['notification_error_add_choice'] = 'Usted no tiene los derechos requeridos para añadir una opción de insignias.';
$string['notification_error_delete_choice'] = 'Usted no tiene los derechos requeridos para quitar una opción de insignias.';
$string['notification_updated_choice'] = 'Editando insignias en la actividad {$a}';
$string['notification_validated_choice'] = 'Validación de insignias en la actividad {$a}';
$string['nouseroverview'] = '<p>Usted no puede ingresar a la vista general de usuarios.</p>
<p>Usted no tiene los permisos requeridos para ver esta página.</p>';
$string['obtained_badges'] = 'Insignias ganadas';
$string['percentcolumn'] = 'Logro de objetivos';
$string['pleasesetonebadgeor'] = 'Por favor cree al menos una insignia para este curso para poder configurar esta actividad apropiadamente.
<ul>
<li><a href="{$a->linkbadges}">Gestionar insignias</a></li>
<li><a href="{$a->linkcourse}">Regresar al curso</a></li>
</ul>';
$string['pluginadministration'] = 'Administración de Insignias del curso';
$string['pluginname'] = 'Insignias del curso';
$string['pre_select_badges'] = 'Insignias pre-seleccionadas';
$string['privacy:metadata:coursebadges_usr_select_bdg'] = 'Información acerca de insignias pre-seleccionadas en esta actividad.';
$string['privacy:metadata:coursebadges_usr_select_bdg:selectionbadgeid'] = 'ID de insignia pre-seleccionada elegida por el  usuario.';
$string['privacy:metadata:coursebadges_usr_select_bdg:userid'] = 'ID del usuario que pre-seleccionó la insignia.';
$string['ratiocolumn'] = 'Ganada';
$string['selected_badges'] = 'Insignias seleccionadas';
$string['selectedbadgelabel'] = 'Seleccionada';
$string['selectedbadgescolumn'] = 'Insignias Seleccionadas';
$string['statuslabel'] = 'Estado';
$string['txt_badges_max_required'] = 'Número máximo requerido de insignias a seleccionar (predeterminado :  ninguna)';
$string['txt_badges_min_required'] = 'Número mínimo requerido de insignias a seleccionar (predeterminado :  ninguna)';
$string['txt_course_badges'] = 'Nombre de actividad';
$string['usernamefield'] = 'Apellido(s)/Nombre';
$string['useroverviewtitle'] = 'Vista general de usuarios';
$string['usersoverviewlink'] = 'Vista general de usuarios';
$string['warning_configuration_activity_notif'] = 'Esta actividad ha sido configurada como sigue:
<ul>
{$a->ruleallowmodif}
{$a->ruleminallowbadge}
{$a->rulemaxallowbadge}
</ul>';
$string['warning_rule_allow_modif'] = '<li>Una vez que las opciones de insignia hayan sido validadas, la modificación de las opciones de insignia es rechazada .</li>';
$string['warning_rule_max_allow_badge'] = '<li>El número máximo autorizado de opciones de insignia es {$a}.</li>';
$string['warning_rule_min_allow_badge'] = '<li>El número mínimo autorizado de opciones de insignia es {$a}.</li>';
