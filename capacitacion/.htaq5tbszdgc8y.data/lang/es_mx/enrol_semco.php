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
 * Strings for component 'enrol_semco', language 'es_mx', version '4.4'.
 *
 * @package     enrol_semco
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bookingidduplicate'] = 'Ya existe una instancia de inscripción con este ID de reserva de SEMCO ({$a}).';
$string['bookingidduplicatemustchange'] = 'Ya existe una instancia de inscripción con este ID de reserva de SEMCO ({$a}). Si desea editar la inscripción sin cambiar el ID de reserva de SEMCO, simplemente no lo pase como parámetro. Si desea editar la inscripción y cambiar el ID de reserva de SEMCO, asegúrese de no configurarlo con un ID que ya exista en otra parte del sistema.';
$string['bookingidempty'] = 'El campo ID de reserva de SEMCO no debe estar vacío.';
$string['bookingoverlap'] = 'Ya existe una instancia de inscripción con un período de inscripción que coincide con el período de inscripción indicado. Sin embargo, no se admiten períodos de inscripción superpuestos.';
$string['coursenotexist'] = 'El curso dado ({$a}) no existe.';
$string['emptytable'] = 'Todavía no hay inscripciones de SEMCO en esta instancia de Moodle.';
$string['enrolnoinstance'] = 'La instancia del plugin de inscripción de SEMCO asociada a la instancia de inscripción de usuario dada ({$a}) no existe.';
$string['enrolnouserinstance'] = 'La instancia de inscripción de usuario dada ({$a}) no existe.';
$string['getcoursecompletionsmaxrequest'] = 'Aprobó más de la cantidad máxima de identificaciones de inscripción (que es {$a}).';
$string['installer_addedusertorole'] = 'El rol \'SEMCO webservice\' se asignó automáticamente al usuario \'SEMCO webservice\'.';
$string['installer_addedusertoservice'] = 'El usuario \'SEMCO webservice\' se agregó automáticamente al servicio web SEMCO como usuario permitido.';
$string['installer_createdprofilefield1'] = 'El campo de perfil de usuario "ID de usuario de SEMCO" se creó y configuró correctamente de forma automática. Este campo se utiliza para los usuarios de Moodle creados por el servicio web de SEMCO.';
$string['installer_createdprofilefield2'] = 'El campo de perfil de usuario "Empresa usuaria de SEMCO" se creó y configuró correctamente de forma automática. Este campo se utiliza para los usuarios de Moodle creados por el servicio web de SEMCO.';
$string['installer_createdprofilefield3'] = 'El campo de perfil de usuario "Fecha de nacimiento del usuario de SEMCO" se creó y configuró correctamente de forma automática. Este campo se utiliza para los usuarios de Moodle creados por el servicio web de SEMCO.';
$string['installer_createdprofilefield4'] = 'El campo de perfil de usuario «Lugar de nacimiento del usuario de SEMCO» se creó y configuró correctamente de forma automática. Este campo se utiliza para los usuarios de Moodle creados por el servicio web de SEMCO.';
$string['installer_createdprofilefield5'] = 'El campo de perfil de usuario "Nombre corto del inquilino de SEMCO" se creó y configuró correctamente de forma automática. Este campo se utiliza para los usuarios de Moodle creados por el servicio web de SEMCO.';
$string['installer_createdprofilefieldcategory'] = 'La categoría de campo de perfil de usuario "SEMCO" se creó y configuró correctamente de forma automática. Esta categoría se utiliza para almacenar varios campos de perfil de usuario relacionados con los usuarios de Moodle, creados por el servicio web SEMCO.';
$string['installer_createdrole'] = 'El rol "Servicio web de SEMCO" se creó y configuró correctamente de forma automática. Este rol se utiliza para el usuario del servicio web de SEMCO en Moodle.';
$string['installer_createduser'] = 'El usuario "SEMCO webservice" se creó automáticamente. Este usuario se utiliza para crear el token del servicio web de SEMCO.';
$string['installer_createdusertoken'] = 'Se creó automáticamente un token de servicio web para el usuario "SEMCO webservice". Puede consultarlo en la página de configuración del plugin.';
$string['installer_enabledauth'] = 'El método de autenticación del servicio web de Moodle se ha habilitado automáticamente para permitir que SEMCO se comunique con Moodle a través de servicios web.';
$string['installer_enabledplugin'] = 'El plugin de inscripción de SEMCO se ha habilitado automáticamente.';
$string['installer_enabledrest'] = 'El protocolo REST del servicio web de Moodle se ha habilitado automáticamente para permitir que SEMCO se comunique con Moodle a través de servicios web.';
$string['installer_enabledws'] = 'El subsistema de servicios web de Moodle se ha habilitado automáticamente para permitir que SEMCO se comunique con Moodle a través de servicios web.';
$string['installer_finalnotenoproblems'] = 'SEMCO debería poder comunicarse con Moodle ahora.';
$string['installer_finalnotewithproblems'] = 'Debido a que hubo problemas con la configuración automática en los pasos anteriores, es posible que SEMCO aún no pueda comunicarse con Moodle. Por favor, revise todas las configuraciones manualmente.';
$string['installer_notcreatedprofilefield1'] = 'El campo de perfil de usuario "ID de usuario de SEMCO" no se pudo crear ni configurar correctamente de forma automática, ya que parece que ya existe. Verifique la configuración del campo de usuario manualmente.';
$string['installer_notcreatedprofilefield2'] = 'El campo de perfil de usuario "Empresa usuaria de SEMCO" no se pudo crear ni configurar correctamente de forma automática, ya que parece que ya existe. Verifique la configuración del campo de usuario manualmente.';
$string['installer_notcreatedprofilefield3'] = 'El campo de perfil de usuario "Fecha de nacimiento del usuario de SEMCO" no se pudo crear ni configurar correctamente de forma automática, ya que parece que ya existe. Verifique la configuración del campo de usuario manualmente.';
$string['installer_notcreatedprofilefield4'] = 'El campo de perfil de usuario «Lugar de nacimiento del usuario de SEMCO» no se pudo crear ni configurar correctamente de forma automática, ya que parece que ya existe. Verifique la configuración del campo de usuario manualmente.';
$string['installer_notcreatedprofilefield5'] = 'El campo de perfil de usuario "Nombre corto del inquilino de SEMCO" no se pudo crear ni configurar correctamente de forma automática, ya que parece que ya existe. Verifique la configuración del campo de usuario manualmente.';
$string['installer_notcreatedrole'] = 'El rol "Servicio web de SEMCO" no se pudo crear ni configurar correctamente de forma automática, ya que parece que ya existe. Verifique la configuración del rol manualmente.';
$string['installer_notcreateduser'] = 'El usuario \'SEMCO webservice\' no se pudo crear automáticamente, ya que parece que ya existe. Verifique la configuración del usuario manualmente.';
$string['installer_queuedcapabilitytask'] = 'La capacidad necesaria «webservice/rest:use» no se pudo añadir al rol «SEMCO webservice» durante la instalación inicial de Moodle, ya que aún no existía (el subsistema de servicios web se instalará después de este complemento). Se puso en cola una tarea ad hoc para añadir esta capacidad automáticamente en cuanto se ejecute el cron de Moodle por primera vez.';
$string['installer_roledescription'] = 'Este es un rol interno cuyo único propósito es asignar todas las capacidades necesarias al usuario del servicio web de SEMCO. No asigne este rol a ningún otro usuario (especialmente a un usuario no humano).';
$string['installer_rolename'] = 'Servicio web de EMCO';
$string['installer_userfield1fullname'] = 'ID de usuario de SEMCO';
$string['installer_userfield2fullname'] = 'Empresa usuaria de SEMCO';
$string['installer_userfield3fullname'] = 'Cumpleaños del usuario de SEMCO';
$string['installer_userfield4fullname'] = 'Lugar de nacimiento del usuario de SEMCO';
$string['installer_userfield5fullname'] = 'SEMCO Tenant shortname';
$string['installer_userfirstname'] = 'SEMCO';
$string['installer_userlastname'] = 'Servicio web';
$string['instance_namewithbookingid'] = 'SEMCO [ID de reserva: {$a}]';
$string['instance_namewithoutbookingid'] = 'SEMCO';
$string['localrecompletionnotenabled'] = 'La repetición del curso no está habilitada en la configuración de repetición del curso. Vaya a {$a} y configure el tipo de repetición como "A petición".';
$string['localrecompletionnotexpectable'] = 'El plugin local_recompletion no está instalado o es demasiado antiguo. Instale o actualice local_recompletion antes de usar el parámetro requirerecompletion de esta función de servicio web.';
$string['localrecompletionnotinstalled'] = 'El plugin local_recompletion no está instalado o es demasiado antiguo. Instale o actualice local_recompletion para que esta función del servicio web funcione correctamente.';
$string['localrecompletionnotondemand'] = 'La recompletación del curso no está configurada como "A petición" en la configuración de recompletación del curso. Acceda a {$a} y configure el tipo de recompletación como "A petición".';
$string['pluginname'] = 'SEMCO';
$string['privacy:metadata:enrol_semco:SEMCO'] = 'SEMCO es un sistema de gestión de cursos que está conectado a Moodle para organizar las inscripciones a los cursos.';
$string['privacy:metadata:enrol_semco:SEMCO:course_completions'] = 'Los datos de finalización del curso, incluyendo fechas de finalización, calificaciones y resultados de aprobación, se comparten entre SEMCO y Moodle. Los datos fluyen de Moodle a SEMCO.';
$string['privacy:metadata:enrol_semco:SEMCO:course_enrolments'] = 'Los metadatos de inscripción a cursos, como las membresías y las fechas de inscripción, se comparten entre SEMCO y Moodle. Los datos se transfieren de SEMCO a Moodle.';
$string['privacy:metadata:enrol_semco:SEMCO:user_profile'] = 'Los datos del perfil de usuario, como el nombre de usuario, el nombre, el apellido y el correo electrónico, se comparten entre SEMCO y Moodle. Los datos se transfieren de SEMCO a Moodle.';
$string['reportpagetitle'] = 'Inscripciones en SEMCO';
$string['semco:editenrolment'] = 'Editar una inscripción de usuario existente de SEMCO';
$string['semco:enrol'] = 'Inscribir a los usuarios de SEMCO en un curso';
$string['semco:getcoursecompletions'] = 'Obtenga las finalizaciones del curso para las inscripciones de usuarios de SEMCO dadas';
$string['semco:getenrolments'] = 'Obtenga las inscripciones de usuarios de SEMCO existentes de un curso';
$string['semco:resetcoursecompletion'] = 'Restablecer la finalización del curso para la inscripción del usuario SEMCO determinado';
$string['semco:unenrol'] = 'Dar de baja a usuarios de SEMCO de un curso';
$string['semco:usewebservice'] = 'Utilice los servicios web de inscripción de SEMCO';
$string['semco:viewreport'] = 'Ver el reporte de inscripción de SEMCO';
$string['semcopluginnotenabled'] = 'El plugin de inscripción de SEMCO no está habilitado actualmente.';
$string['semcopluginnotinstalled'] = 'El plugin de inscripción de SEMCO todavía no ha sido instalado';
$string['settings_connectioninfoheading'] = 'Información de conexión';
$string['settings_coursecompletionheading'] = 'Finalización del curso';
$string['settings_coursecompletionlrcfound'] = 'El complemento local_recompletion se instala al menos con la versión 2024071103. Puede usar inscripciones de usuarios posteriores en el mismo curso y restablecer la finalización del curso.';
$string['settings_coursecompletionlrcintro'] = 'El plugin de inscripción de SEMCO puede restablecer la finalización del curso de un usuario si SEMCO lo inscribe nuevamente en un curso específico.
Para lograr este restablecimiento y evitar tener que reinventar la rueda, este plugin tiene una dependencia suave con <a href="https://moodle.org/plugins/local_recompletion">local_recompletion</a> de Dan Marsden.';
$string['settings_coursecompletionlrcnotfound'] = '<p>Instala local_recompletion con al menos la versión 2024071103 junto con este plugin si planea usar inscripciones de usuarios posteriores en el mismo curso y necesita restablecer la finalización del curso.<br />
Si no necesita restablecer la finalización del curso, no necesita instalar local_recompletion.</p>';
$string['settings_coursecompletionnote'] = 'Nota: SEMCO solo activa la recompletación de cursos bajo demanda, proporcionada por el <a href="{$a}">plugin de recompletación de cursos</a>. Cada profesor debe configurar la recompletación de cursos según sus necesidades y configurar el tipo de recompletación del curso como "Bajo demanda".';
$string['settings_enrolmentheading'] = 'Proceso de inscripción';
$string['settings_enrolmentreportbutton'] = 'Ver reporte';
$string['settings_enrolmentreportheading'] = 'Reporte de inscripción';
$string['settings_enrolmentreportheading_desc'] = 'Hay un reporte del sitio donde puedes ver todas las inscripciones que ha realizado SEMCO.';
$string['settings_role'] = 'Rol';
$string['settings_role_desc'] = 'Con esta configuración, controla el rol con el que SEMCO inscribe a los usuarios en los cursos. El rol configurado es obligatorio para todos los usuarios inscritos desde SEMCO y no se puede anular con el punto de acceso del servicio web de inscripción de SEMCO. Tenga en cuenta que los cambios en esta configuración no afectarán a las inscripciones existentes.';
$string['settings_tokeninfo'] = 'Token de servicio web';
$string['settings_tokeninfofound'] = 'El token de servicio web para el usuario del servicio web de SEMCO es:<br /><strong>{$a}</strong><br />Utilice este token de servicio web para configurar la conexión Moodle en SEMCO.';
$string['settings_tokeninfononefound'] = 'No se encontró ningún token de servicio web para el usuario de servicio web de SEMCO. Cree un token manualmente.';
$string['settings_wwwrootinfo'] = 'URL base de Moodle';
$string['settings_wwwrootinfofound'] = 'La URL base de Moodle para la conexión del servicio web de SEMCO es:<br /><strong>{$a}</strong><br />Utilice esta URL base de Moodle para configurar la conexión de Moodle en SEMCO.';
$string['tablecourseid'] = 'ID del curso';
$string['tablecoursename'] = 'Nombre del curso';
$string['tableenrolend'] = 'Fin de inscripción';
$string['tableenrolid'] = 'ID de inscripción';
$string['tableenrolstart'] = 'Inicio de inscripción';
$string['tableenrolstatus'] = 'Estado de inscripción';
$string['tablesemcobookingid'] = 'ID de reservación SEMCO';
$string['tableuserid'] = 'ID de usuario Moodle';
$string['tableusername'] = 'Usuario de Moodle';
$string['tableuserstatus'] = 'Estado del usuario de Moodle';
$string['tableviewenrolment'] = 'Ver perfil del curso';
$string['task_cleanorphaned'] = 'Limpiar las instancias de inscripción de SEMCO huérfanas.';
$string['timeendinvalid'] = 'El campo Hora de finalización debe ser mayor o igual a cero.';
$string['timestartendorder'] = 'El campo Hora de inicio no debe ser mayor que el campo Hora de finalización.';
$string['timestartinvalid'] = 'El campo Hora de inicio debe ser mayor o igual a cero.';
$string['uninstaller_remainenabled'] = 'El plugin de inscripción de SEMCO se ha eliminado y ya no necesitará el subsistema de servicios web ni el método de autenticación de servicios web de Moodle. Sin embargo, como el desinstalador de plugins no detecta si otros plugins o funciones aún lo necesitan, ambos permanecerán habilitados. Desactívelos manualmente si ya no los necesita.';
$string['uninstaller_removedprofilefields'] = 'Los campos del perfil de usuario \'SEMCO\' se eliminaron automáticamente.';
$string['uninstaller_removedrole'] = 'La función \'SEMCO webservice\' se eliminó automáticamente.';
$string['uninstaller_removeduser'] = 'El usuario \'SEMCO webservice\' fue eliminado automáticamente.';
$string['updater_2023092601_addcapability'] = 'Las capacidades \'enrol/semco:getcoursecompletions\', \'moodle/course:viewhiddencourses\' y \'moodle/grade:viewall\' se agregaron al rol \'SEMCO webservice\' durante la actualización del plugin.';
$string['updater_2023092605_addprofilefield'] = 'El campo de perfil \'Empresa usuaria de SEMCO\' se creó y configuró correctamente de forma automática durante la actualización del plugin.';
$string['updater_2023092606_addprofilefield3'] = 'El campo de perfil \'Cumpleaños del usuario de SEMCO\' se creó y configuró correctamente de manera automática durante la actualización del plugin.';
$string['updater_2023092606_addprofilefield4'] = 'El campo de perfil \'Lugar de nacimiento del usuario de SEMCO\' se creó y configuró correctamente de forma automática durante la actualización del plugin.';
$string['updater_2023092608_addprofilefield5'] = 'El campo de perfil \'Nombre corto del inquilino de SEMCO\' se creó y configuró correctamente de manera automática durante la actualización del plugin.';
$string['updater_2023092610_fixprofilefield4'] = 'El campo de perfil «Lugar de nacimiento del usuario de SEMCO» se creó con un nombre corto incorrecto durante una actualización anterior de este plugin. Esto provocó que SEMCO no pudiera escribir en este nuevo campo de perfil de usuario.';
$string['updater_2023092610_fixprofilefield4fail'] = 'El instalador ha intentado cambiar el nombre corto del campo con un paso de actualización, pero no ha podido. Vaya a la página de gestión de campos del perfil de usuario, busque el campo "Lugar de nacimiento del usuario de SEMCO" y cambie el nombre corto a "semco_userplaceofbirth".';
$string['updater_2023092610_fixprofilefield4succ'] = 'El nombre corto del campo ahora se cambió con un paso de actualización.';
$string['updater_2023100902_addcapability'] = 'La capacidad \'enrol/semco:resetcoursecompletion\' se agregó al rol \'SEMCO webservice\' durante la actualización del plugin.';
$string['usernotexist'] = 'El usuario dado ({$a}) no existe.';
$string['wsusercannotassign'] = 'No tiene permiso para asignar este rol ({$a->roleid}) a este usuario ({$a->userid}) en este curso ({$a->courseid}).';
