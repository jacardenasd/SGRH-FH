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
 * Strings for component 'tool_selfsignuphardlifecycle', language 'es_mx', version '4.4'.
 *
 * @package     tool_selfsignuphardlifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['col_accountoverridden'] = 'Períodos de cuenta anulados';
$string['col_accountstatus'] = 'Estado de la cuenta';
$string['col_auth'] = 'Autenticación';
$string['col_nextstep'] = 'Paso siguiente';
$string['col_profile'] = 'Perfil del usuario';
$string['col_timecreated'] = 'Fecha de creación de cuenta';
$string['emptytable'] = 'No hay ningún usuario que esté cubierto actualmente por el ciclo de vida del usuario estricto según la configuración de la herramienta.';
$string['eventuserdeleted'] = 'Usuario eliminado';
$string['eventuserdeleted_desc'] = 'El usuario con el ID {$a->userid} ha sido eliminado {$a->period} días completos después de la fecha de creación de la cuenta';
$string['eventuserdeletedoverridden_desc'] = 'El usuario con el ID {$a->userid} ha sido eliminado debido a un período de eliminación anulado';
$string['eventusersuspended'] = 'Usuario suspendido';
$string['eventusersuspended_desc'] = 'El usuario con el ID {$a->userid} ha sido suspendido {$a->period} días completos después de la fecha de creación de la cuenta';
$string['eventusersuspendedoverridden_desc'] = 'El usuario con el ID {$a->userid} ha sido suspendido debido a un período de suspensión anulado';
$string['nextstep_deletioncomingup'] = 'Será eliminado en {$a->date}';
$string['nextstep_suspensioncomingup'] = 'Será suspendido en {$a->date}';
$string['nextstep_unknown'] = 'Desconocido';
$string['pluginname'] = 'Ciclo de vida difícil para los usuarios de auto-registro';
$string['privacy:metadata'] = 'El complemento de ciclo de vida duro para usuarios que se registran automáticamente no almacena ningún dato personal.';
$string['profileedit'] = 'Editar';
$string['profileview'] = 'Ver';
$string['setting_authmethodsheading'] = 'Métodos de autenticación';
$string['setting_cohortexceptions'] = 'Cohortes a ignorar';
$string['setting_cohortexceptions_desc'] = 'Con esta configuración, puede configurar las cohortes cuyos miembros deben ignorarse. Esta herramienta ignorará por completo a cada miembro de una de las cohortes seleccionadas.';
$string['setting_cohortexceptionsheading'] = 'Excepciones de cohortes';
$string['setting_cohortexceptionsnocohortyet_desc'] = 'Con esta configuración, puede configurar las cohortes cuyos miembros deben ignorarse. Todavía no hay ninguna cohorte utilizable. Vaya a <a href="{$a->url}">{$a->linktitle}</a> y cree una cohorte primero.';
$string['setting_coveredauth'] = 'Métodos de autenticación cubiertos';
$string['setting_coveredauth_desc'] = 'Con esta configuración, puede configurar qué usuarios estarán cubiertos por esta herramienta. Si selecciona un método de autenticación específico, todos los usuarios con dicho método serán candidatos para la suspensión y la eliminación. Si no selecciona un método de autenticación específico, esta herramienta no afectará a ninguno de los usuarios con dicho método.';
$string['setting_enablecohortexceptions'] = 'Habilitar excepciones de cohortes';
$string['setting_enablecohortexceptions_desc'] = 'Con esta configuración, usted puede definir excepciones de cohortes.';
$string['setting_enableuseroverrides'] = 'Habilitar anulaciones de usuarios';
$string['setting_enableuseroverrides_desc'] = 'Con esta configuración, puede permitir que el administrador anule las fechas de eliminación y suspensión de usuarios individuales.';
$string['setting_enableusersuspension'] = 'Habilitar suspensión del usuario antes de eliminación';
$string['setting_enableusersuspension_desc'] = 'Con esta configuración, usted puede configurar la herramienta para suspender usuarios antes de eliminarlos.';
$string['setting_userdeletionheading'] = 'Eliminación de usuario';
$string['setting_userdeletionoverridefield'] = 'Campo de perfil de anulación de eliminación de usuario';
$string['setting_userdeletionoverridefield_desc'] = 'Con esta configuración, puede configurar el campo de perfil de usuario personalizado que se usará para anular las fechas de eliminación de usuarios. Los usuarios que tengan este campo de perfil de fecha habilitado y configurado se eliminarán en la fecha configurada y no según el período de eliminación configurado.';
$string['setting_userdeletionperiod'] = 'Períodod de eliminación de usuario';
$string['setting_userdeletionperiod_desc'] = 'Con esta configuración, puede configurar el número de días después de los cuales la herramienta eliminará a un usuario.';
$string['setting_userlifecyclestatic_desc'] = 'Con esta herramienta, se puede eliminar (y opcionalmente suspender) usuarios según la fecha de creación de su cuenta. Está diseñada específicamente para eliminar usuarios que se han registrado en Moodle según un calendario estático. La herramienta es bastante sencilla y solo actúa según la fecha de creación de la cuenta del usuario. No tiene en cuenta si el usuario sigue usando su cuenta activamente. Además, no se envían correos electrónicos de notificación al usuario antes de que la cuenta se suspenda o elimine.';
$string['setting_useroverridesheading'] = 'Anulaciones de usuario';
$string['setting_useroverridesnofieldyet_desc'] = 'Con esta configuración, puede configurar el campo de perfil de usuario personalizado para las anulaciones de usuarios. Todavía no hay ningún campo de perfil de usuario personalizado utilizable. Primero, acceda a <a href="{$a->url}">{$a->linktitle}</a> y cree un campo de perfil {$a->fieldname}.';
$string['setting_useroverridesrelation_desc'] = 'Nota: Esta interfaz de configuración de administrador no prohíbe configurar el campo "Campo de perfil para anular suspensión de usuario" en el mismo campo que el campo "Campo de perfil para anular eliminación de usuario". Sin embargo, no se recomiendan estas configuraciones, ya que el comportamiento de la herramienta podría ser inesperado: los usuarios se suspenderán después de la fecha establecida en el campo de perfil y no se eliminarán hasta la siguiente ejecución de la tarea programada. El mismo orden se aplica cuando el administrador establece la fecha de eliminación antes de la fecha de suspensión: el usuario siempre se suspende primero y luego se elimina.';
$string['setting_userperiodscalc_desc'] = 'Este período se calcula según la fecha de creación de la cuenta del usuario. El período configurado se interpreta como días completos. Esto significa que el primer día incompleto en que el usuario se registra en Moodle no se contabiliza.';
$string['setting_userperiodsrelation_desc'] = 'Nota: Esta interfaz de configuración de administrador no prohíbe configurar el "Periodo de suspensión del usuario" con un valor igual o superior al del "Periodo de eliminación del usuario". Sin embargo, no se recomiendan estas configuraciones, ya que el comportamiento de la herramienta podría ser inesperado: los usuarios serán suspendidos después del período de suspensión configurado y serán eliminados directamente en la siguiente ejecución de la tarea programada.';
$string['setting_usersuspensionheading'] = 'Suspensión de usuario';
$string['setting_usersuspensionoverridefield'] = 'CAmpo de perfil de anulación de suspensión de usuario';
$string['setting_usersuspensionoverridefield_desc'] = 'Con esta configuración, puede configurar el campo de perfil de usuario personalizado que se usará para anular las fechas de suspensión. Los usuarios que tengan este campo de perfil de fecha habilitado y configurado serán suspendidos en la fecha configurada y no según el período de suspensión configurado.';
$string['setting_usersuspensionperiod'] = 'Período de suspensión de usuario';
$string['setting_usersuspensionperiod_desc'] = 'Con esta configuración, puede configurar el número de días después de los cuales un usuario será suspendido por la herramienta.';
$string['settingsuserlist'] = 'Lista de usuarios';
$string['status_active'] = 'Activo';
$string['status_suspended'] = 'Suspendido';
$string['status_unknown'] = 'Desconocido';
$string['taskprocesslifecycle'] = 'Procesar ciclo de vida para usuarios auto-apuntados';
