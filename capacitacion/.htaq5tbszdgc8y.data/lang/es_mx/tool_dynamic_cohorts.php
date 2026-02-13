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
 * Strings for component 'tool_dynamic_cohorts', language 'es_mx', version '4.4'.
 *
 * @package     tool_dynamic_cohorts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_rule'] = 'Añadir nueva regla';
$string['addcondition'] = 'Añadir una condición';
$string['addrule'] = 'Añadir una nueva regla';
$string['after'] = 'Después';
$string['any'] = 'Cualquier';
$string['before'] = 'Antes';
$string['broken'] = 'Roto';
$string['brokenruleswarning'] = 'Hay algunas reglas rotas que requieren su atención.  <br /> Para arreglar una regla rota usted debería de quitar todas las condiciones rotas. <br />A veces una regla se rompe cuando falla la coincidencia de usuarios con SQL. En este caso todas las condiciones están OK, pero la regla es marcada como rota. Usted debería comprobar las bitácoras de Moodle para el evento "Matching users failes (falló coincidencia de usuarios) y errores SQL relacionados.. <br />Por favor tenga en cuenta que en cualquier caso usted tiene que re-guardar la regla para marcarla como ya-no-está-rota.';
$string['bulkprocessing'] = 'Procesamiento masivo';
$string['bulkprocessing_help'] = 'Si esta opción es habilitada, los usuarios serán añadidos y removidos de la cohorte masivamente. Esto mejorará significativamente el desempeño del procesamiento. Sin embargo, el usar esta opción suprimirá el disparo de eventos cuando los usuarios se añadan o quiten de la cohorte.';
$string['cachedef_conditionrecords'] = 'Condiciones para una regla';
$string['cachedef_matchingusers'] = 'Coincidencia de usuarios para una regla';
$string['cachedef_rulesconditions'] = 'Reglas con una condición específica';
$string['cannotenablebrokenrule'] = 'Una regla rota no puede ser habilitada';
$string['cf_include_missing_data'] = 'Incluir cohortes con datos faltantes';
$string['cf_include_missing_data_help'] = 'Las cohortes podrían no tener configurado aun los datos de campo personalizados. Esta opción incluye aquellas cohortes en el resultado final.';
$string['cf_includingmissingdatadesc'] = '(incluyendo cohortes con datos faltantes)';
$string['cohort'] = 'Cohorte';
$string['cohortid'] = 'Cohorte';
$string['cohortid_help'] = 'Una cohorte para gestionar como parte de esta regla. Solamente las cohortes que no están gestionadas por otros plugins son mostradas en esta lista.';
$string['cohortswith'] = 'Cohorte(s) con campos';
$string['completed:add'] = 'Regla ha sido añadida';
$string['completed:delete'] = 'Regla ha sido eliminada';
$string['completed:disable'] = 'Regla ha sido deshabilitada';
$string['completed:enable'] = 'Regla ha sido habilitada';
$string['completed:update'] = 'Regla ha sido ctualizada';
$string['completiondate'] = 'Fecha de finalización';
$string['completionisdisabled'] = 'La finalización está deshabilitada para curso configurado';
$string['condition'] = 'Condición';
$string['condition:auth_method'] = 'Método de autenticación';
$string['condition:cohort_field'] = 'Campo de cohorte';
$string['condition:cohort_field_description'] = 'Usuarios que {$a->operator} cohortes con campo \'{$a->field}\' {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:cohort_membership'] = 'Membresía de cohorte';
$string['condition:cohort_membership_broken_description'] = 'La condición está rota. Se está usando la misma cohorte para la cual estaba configurada la regla dada para gestionar.';
$string['condition:cohort_membership_description'] = 'Usuarios que {$a->operator} {$a->cohorts}';
$string['condition:course_completed'] = 'Curso completado';
$string['condition:course_completed_description'] = 'Usuarios que hayan completado curso "{$a->course}" {$a->operator} {$a->timecompleted}';
$string['condition:course_not_completed'] = 'Curso no completado';
$string['condition:course_not_completed_description'] = 'Usuarios que No hayan completado curso "{$a->course}"';
$string['condition:profile_field_description'] = 'Usuarios con {$a->field} {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:user_created'] = 'Hora de usuario creado';
$string['condition:user_custom_profile'] = 'Campo personalizado de perfil del usuario';
$string['condition:user_enrolment'] = 'Inscripción de usuario';
$string['condition:user_enrolment_description'] = 'Usuarios que sean {$a->operator} en curso "{$a->coursename}" (id {$a->courseid}) con rol de "{$a->role}" usando "{$a->enrolmethod}" como método de inscripción.';
$string['condition:user_last_login'] = 'Último ingreso del usuario';
$string['condition:user_profile'] = 'Campo estándar de perfil del usuario';
$string['condition:user_profile_interests'] = 'Intereses del usuario';
$string['condition:user_profile_interests_description'] = 'Usuarios con intereses que contiene las siguientes marcas {$a}';
$string['condition:user_profile_interests_description_not'] = 'Usuarios con intereses que NO contiene las siguientes marcas {$a}';
$string['condition:user_role'] = 'Rol del usuario';
$string['condition:user_role_description_category'] = 'Usuarios que {$a->operator} "{$a->role}" en categoría {$a->categoryname} (id {$a->categoryid})';
$string['condition:user_role_description_course'] = 'Usuarios que {$a->operator} "{$a->role}" en curseo{$a->coursename} (id {$a->courseid})';
$string['condition:user_role_description_system'] = 'Usuarios que {$a->operator} "{$a->role}" en contexto de sistema';
$string['conditionchnagesnotapplied'] = 'Los cambios de condición no son aplicados hasta después de usted guarde el formato de la regla';
$string['conditionformtitle'] = 'Condición de regla';
$string['conditions'] = 'Condiciones';
$string['conditionsformtitle'] = 'Condiciones de regla';
$string['conditionstext'] = '{$a->conditions} ( logical {$a->operator} )';
$string['delete_confirm'] = '¿Está seguro de querer eliminar la regla?';
$string['delete_confirm_condition'] = '¿Está seguro de querer eliminar esta condición?';
$string['delete_rule'] = 'Eliminar regla';
$string['description'] = 'Descripción';
$string['description_help'] = 'Una breve descripción de esta regla';
$string['disable_confirm'] = '¿Está seguro de querer deshabilitar la regla?';
$string['disabled'] = 'Deshabilitada';
$string['donothaverole'] = 'no tener rol';
$string['dynamic_cohorts:manage'] = 'Gestionar reglas';
$string['edit_rule'] = 'Editar regla';
$string['enable_confirm'] = '¿Está seguro de querer habilitar la regla?';
$string['enabled'] = 'Habilitada';
$string['enrolled'] = 'Inscrito';
$string['enrolmethod'] = 'Método de inscripción';
$string['event:conditioncreated'] = 'Condición creada';
$string['event:conditiondeleted'] = 'Condición elimnada';
$string['event:conditionupdated'] = 'Condición actualizada';
$string['event:matchingfailed'] = 'Falló coincidencia de usuarios';
$string['event:rulecreated'] = 'Regla creada';
$string['event:ruledeleted'] = 'Regla eliminada';
$string['event:ruleupdated'] = 'Regla actualizada';
$string['ever'] = 'Alguna vez';
$string['everloggedin'] = 'Usuarios que hayan ingresado al menos una vez';
$string['haverole'] = 'tener rol';
$string['include_missing_data'] = 'Incluir usuarios con datos faltantes';
$string['include_missing_data_help'] = 'Algunos usuarios aun podrían no tener un campo personalizado del perfil configurado. Esta opción incluye aquellos usuarios en el resultado final.';
$string['includechildren'] = 'Incluyendo hijos (categorías y cursos)';
$string['includeusersmissingdata'] = 'Incluir usuarios con datos faltantes';
$string['includingmissingdatadesc'] = '(incluyendo usuarios con datos faltantes)';
$string['inlast'] = 'En el último (los últimos)';
$string['inlastloggedin'] = 'Usuarios que hayan ingresado en el último (los últimos)  {$a}';
$string['inthefuture'] = 'como en el futuro';
$string['inthepast'] = 'como en el pasado';
$string['invalidfieldvalue'] = 'Valor inválido de campo';
$string['isafter'] = 'sea después de';
$string['isbefore'] = 'sea antes de';
$string['ismemberof'] = 'sean miembros de';
$string['isnotempty'] = 'no esté vacío';
$string['isnotmemberof'] = 'no sean miembros de';
$string['loggedintime'] = 'Usuarios que ingresaron en {$a->operator} {$a->time}';
$string['logical_operator'] = 'Operador lógico';
$string['logical_operator_help'] = 'Un operador lógico a ser aplicado a condiciones para esta regla. El operador "AND" significa que un usuario tiene que coincidir con todas las condiciones para ser añadido a una cohorte."OR" significa que el usuario tiene que coincidir con cualquiera de las condiciones para ser añadido a una cohorte.';
$string['managecohorts'] = 'Gestionar cohortes';
$string['managerules'] = 'Gestionar reglas';
$string['matchingusers'] = 'Usuarios coincidentes';
$string['missingcourse'] = 'Curso faltante';
$string['missingcoursecat'] = 'Categoría de curso faltante';
$string['missingenrolmentmethod'] = 'Método de inscripción faltante {$a}';
$string['missingrole'] = 'Rol faltante';
$string['name'] = 'Nombre de regla';
$string['name_help'] = 'Un nombre legible por humano de esta regla.';
$string['never'] = 'Nunca';
$string['neverloggedin'] = 'Usuarios que nunca han ingresado';
$string['notenrolled'] = 'No inscrito';
$string['operator'] = 'Operador';
$string['or'] = 'OR';
$string['pleaseselectcohort'] = 'Por favor seleccione una cohorte';
$string['pleaseselectfield'] = 'Por favor seleccione un campo';
$string['pluginname'] = 'Cohortes dinámicas';
$string['privacy:metadata:tool_dynamic_cohorts'] = 'Información de reglas creadas o actualizadas por un usuario';
$string['privacy:metadata:tool_dynamic_cohorts:name'] = 'Nombre de la regla';
$string['privacy:metadata:tool_dynamic_cohorts:usermodified'] = 'La ID del usuario que creó o actualizó una regla';
$string['privacy:metadata:tool_dynamic_cohorts_c'] = 'Información acerca de condiciones creadas oi actualizadas por un usuario';
$string['privacy:metadata:tool_dynamic_cohorts_c:ruleid'] = 'ID de la regla';
$string['privacy:metadata:tool_dynamic_cohorts_c:usermodified'] = 'La ID del usuario que creó o actualizó una condición';
$string['processrulestask'] = 'Procesar reglas dinámicas de cohorte';
$string['profilefield'] = 'Campo del perfil';
$string['realtime'] = 'Procesamiento en tiempo real';
$string['realtime_help'] = 'Si se habilita, la regla será procesada de forma sincrónica como parte del evento (si las condiciones soportan el disparo en el evento). Use precaución al habilitarlo, porque un largo procesamiento de la regla bloqueará la interfaz del usuario.';
$string['realtimedisabledglobally'] = 'Procesamiento en tiempo real deshabilitado globalmente';
$string['rule_entity'] = 'Regla de cohorte dinámica';
$string['rule_entity.bulkprocessing'] = 'Procesamiento en masa';
$string['rule_entity.description'] = 'Descripción';
$string['rule_entity.id'] = 'ID';
$string['rule_entity.name'] = 'Nombre';
$string['rule_entity.realtime'] = 'Procesamiento en tiempo real';
$string['rule_entity.status'] = 'Estado';
$string['ruledeleted'] = 'Regla ha sido eliminada';
$string['ruledisabled'] = 'Regla ha sido deshabilitada';
$string['ruledisabledpleasereview'] = 'Las reglas recién creadas o actualizadas están deshabilitadas de forma predeterminada. Por favor revise las reglas debajo y habilítelas cuando estén listas.';
$string['ruleenabled'] = 'Regla ha sido habilitada';
$string['settings:realtime'] = 'Procesamiento en tiempo real';
$string['settings:realtime_desc'] = 'Cuando se habilita, las reglas con condiciones que soporten el disparo en el evento serán procesadas de forma sincrónica como parte del evento. Use precaución al habilitarlo, porque el largo procesamiento de una regla bloquerá la interfaz del usuario.';
$string['settings:releasemembers'] = 'Liberar miembros';
$string['settings:releasemembers_desc'] = 'Si se habilita, todos los miembros serán removidos de una cohorte una vez que no esté gestionada por el plugin (por ejemplo, una regla es eliminada o una cohorte para una regla es cambiada).<br/> Por favor tenga en cuenta que ningún evento de cohort_member_removed será disparado cuando los miembros son liberados de una cohorte. En caso contrario, la regla será procesada vía cron.';
$string['usercreated'] = 'Usuario fue creado';
$string['usercreatedin'] = 'Usuarios que fueron creados en el último (los últimos) {$a}';
$string['usercreatedtime'] = 'Usuarios que fueron creados {$a->operator} {$a->time}';
$string['userlastlogin'] = 'Último ingreso del usuario';
$string['usersforrule'] = 'Usuarios que coinciden con regla "{$a->rule}" for cohort "{$a->cohort}"';
