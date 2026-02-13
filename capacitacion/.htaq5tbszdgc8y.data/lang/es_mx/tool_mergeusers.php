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
 * Strings for component 'tool_mergeusers', language 'es_mx', version '4.4'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Elegir usuarios a juntar';
$string['clear_selection'] = 'Limpiar selección actual de usuario';
$string['cligathering:description'] = 'Introducir pares de ID de usuario para fusionar el primero con el segundo. El primer ID de usuario (fromid) perderá todos sus datos para migrarlos al segundo (toid). El usuario "toid" incluirá datos de ambos usuarios.';
$string['cligathering:fromid'] = 'ID del usuario fuente (desde_ID)';
$string['cligathering:stopping'] = 'Para detener la unión, Ctrl+C o escriba -1 , ya sea en el campo desde_ID o en el campo a_ID';
$string['cligathering:toid'] = 'ID del usuario destino (a_id)';
$string['dbko_no_transactions'] = '<strong>¡Falló la fusión! </strong> <br/> Su motor de base de datos no soporta transacciones. Por lo tanto, su base de datos <strong> se ha actualizado </strong>.
El estado de su base de datos puede ser inconsistente. <br/> Pero, eche un vistazo al registro de fusión
y, por favor, informa sobre el error para los desarrolladores del plugin. Obtendrá una solución
en poco tiempo. Después de actualizar el plugin a su última versión, la cual que incluirá la solución
a ese problema, repita la acción de fusión para completarlo con éxito.';
$string['dbko_transactions'] = '<strong>¡Fusión fallida! Su motor de base de datos admite transacciones. Por lo tanto, se ha revertido toda la transacción actual y no se ha realizado ninguna modificación en su base de datos.</strong>.';
$string['dbok'] = 'Unión exitosa';
$string['deleted'] = 'El usuario con ID {$a} fue eliminado';
$string['error_return'] = 'Regresar al formato de búsqueda';
$string['errorsameuser'] = 'Tratando de unir al mismo usuario';
$string['errortransactionsonly'] = 'Error: se requieren transaccciones, pero su tipo de base de datos {$a} no las soporta. Si se necesitara, Usted puede permitir unir usuarios sin transacciones.
Por favor, revise las configuraciones del plugin para ajustarlas apropiadamente.';
$string['eventusermergedfailure'] = 'Falló la unión';
$string['eventusermergedsuccess'] = 'Unión exitosa';
$string['excluded_exceptions'] = 'Excluir excepciones';
$string['excluded_exceptions_desc'] = 'La experiencia en este tema sugiere
   que todas estas tablas de bases de datos deberían excluirse de la fusión. Vea
   LÉAME para más detalles. <br>
  Por lo tanto, para aplicar el comportamiento predeterminado delplugin, debe elegir \'{$ a}\'
   para excluir todas esas tablas del proceso de fusión (recomendado). <br>
   Si lo prefiere, puede excluir cualquiera de esas tablas e incluirlas en el
   proceso de fusión (no recomendado).';
$string['exportlogs'] = 'Exportar bitácoras como CSV';
$string['finishtime'] = 'Terminó de unir a las {$a}';
$string['form_description'] = '<p>Puede buscar usuarios aquí si desconoce su nombre de usuario o número de identificación. De lo contrario, puede expandir el formulario para ingresar esa información directamente. Consulte la ayuda sobre los campos para obtener más información.</p>';
$string['form_header'] = 'Encontrar usuarios a juntar';
$string['header'] = 'Unir dos usuarios dentro de una sola cuenta';
$string['header_help'] = 'Si se elimina un usuario y se conserva otro, se fusionarán los datos del usuario anterior con los del usuario actual. Tenga en cuenta que ambos usuarios deben existir previamente y que no se eliminará ninguna cuenta. El administrador debe realizar este proceso manualmente.</p><p><strong>¡Haga esto solo si sabe lo que hace, ya que es irreversible!</strong></p>
<p> <strong> ¡Haga esto solo si sabe lo que estás haciendo, ya que no es reversible! </strong> </p>';
$string['into'] = 'dentro de';
$string['invalid_option'] = 'Opción de formato inválida';
$string['invaliduser'] = 'Usuario inválido';
$string['logid'] = 'Para mayores referencias, estos resultados están guardados en la bitácora id {$a}.';
$string['logko'] = 'Ocurrió algun error:';
$string['loglist'] = 'Todos estos registros son de acciones de unión realizadas, mostrando si salieron OK:';
$string['logok'] = 'Aquí están las consultas que han sido enviadas a la BasedeDatos:';
$string['mergedbyuseridonlog'] = 'Unido por';
$string['mergeusers'] = 'Unir cuentas de usuarios';
$string['mergeusers:mergeusers'] = 'Juntar cuentas de usuario';
$string['mergeusers:view'] = 'Unir Cuentas de Usuarios';
$string['mergeusers_confirm'] = 'Después de confirmar, se iniciará el proceso de fusión.<br /><strong>¡Esto no será reversible!</strong> ¿Está seguro de que desea continuar?';
$string['mergeusersadvanced'] = '<strong>Dirigir entrada del usuario</strong>';
$string['mergeusersadvanced_help'] = 'Aquí puede ingresar los campos a continuación si sabe exactamente qué usuarios desea fusionar.<br /><br /> Haga clic en el botón "Buscar" para verificar/confirmar que los datos ingresados corresponden de hecho a usuarios.';
$string['merging'] = 'Unida';
$string['newuser'] = 'Usuario a conservar';
$string['newuserid'] = 'ID de usuario a conservar';
$string['newuseridonlog'] = 'Usuario conservado';
$string['no_saveselection'] = 'Usted no seleccionó ni al usuario viejo ni al nuevo.';
$string['nologs'] = 'Todavía no hay bitácoras de uniones aun. ¡ Bien por tí !';
$string['nomergedby'] = 'No grabado';
$string['olduser'] = 'Usuario a quitar';
$string['olduserid'] = 'ID de usuario a ser removida';
$string['olduseridonlog'] = 'Usuario removido';
$string['pluginname'] = 'Unir cuentas de usuarios';
$string['privacy:metadata'] = 'El plugin para Juntar Cuentas de Usuario no almacena ningún dato personal.';
$string['qa_action_delete_fromid'] = 'Conservar intentos del nuevo usuario';
$string['qa_action_delete_toid'] = 'Conservar intentos del antiguo usuario';
$string['qa_action_remain'] = 'No hacer nada: no juntar ni eliminar';
$string['qa_action_remain_log'] = 'Los datos del usuario de la tabla <strong>{$a}</strong> no están actualizados';
$string['qa_action_renumber'] = 'Juntar intentos de ambos usuarios y renumerarlos';
$string['qa_chosen_action'] = 'Opción activa para intentos de exámenes: {$a}.';
$string['qa_grades'] = 'Calificaciones recalculadas para los exámenes: {$a}.';
$string['quizattemptsaction'] = 'Cómo resolver los intentos de exámenes';
$string['quizattemptsaction_desc'] = 'Al fusionar los intentos de examen, puede haber tres casos:
<ol>
<li> Solo el usuario anterior tiene intentos de exámens. Todos los intentos aparecerán como si hubieran sido hechos por el nuevo usuario. </ Li>
<li> Solo el nuevo usuario tiene intentos de exámenes. Todo está correcto y no se hace nada. </ Li>
<li> Ambos usuarios tienen intentos para el mismo examen. <strong> Tiene que elegir qué hacer en este caso de conflicto.
</strong> Debe elegir una de las siguientes acciones:
<ul>
<li> <strong> {$ a-> renumber} </strong>. Los intentos del antiguo usuario se fusionan con los del nuevo usuario
y se volverán a numerar según la hora cuando se iniciaron. </ li>
<li> <strong> {$ a-> delete_fromid} </ strong>. Los intentos del viejo usuario se eliminan. Los intentos del nuevo usuario
se conservan, ya que esta opción los considera como los más importantes. </ li>
<li> <strong> {$ a-> delete_toid} </ strong>. Los intentos del nuevo usuario se eliminan. Los intentos del
  usuario anterior se mantienen, ya que esta opción los considera como los más importantes. </ li>
<li> <strong> {$ a-> remain} </ strong> (de forma predeterminada). Los intentos no se fusionan ni se eliminan, permanecen relacionados con
el usuario que los hizo. Esta es la acción más segura, pero la fusión de usuarios del usuario A al usuario B o B a A puede
producir diferentes calificaciones de exámens. </li>
</ul>
</li>
</ol>';
$string['results'] = 'Resultados y bitácora de la unión';
$string['review_users'] = 'Confirmar usuarios a juntar';
$string['saveselection_submit'] = 'Guardar selección';
$string['searchuser'] = 'Buscar a Usuario';
$string['searchuser_help'] = 'Escriba un nombre_de_usuario, nombre/apellido(s), dirección Email, o la ID del usuario para buscar a usuarios potenciales. Usted también puede especificar si solamente desea buscar en un campo particular.';
$string['starttime'] = 'Inició la unión a las  {$a}';
$string['suspenduser_setting'] = 'Suspender usuario antiguo';
$string['suspenduser_setting_desc'] = 'Si se habilita, suspende al usuario antiguo
   automáticamente después de un proceso de unión exitoso, impidiéndole al usuario
   que ingrese a Moodle (recomendado). Si se deshabilita, el usuario antiguo permanece activo.
   En ambos casos, el usuario antiguo no tendrá sus datos relacionados.';
$string['tableko'] = 'Tabla {$a} : ¡ actualización NO OK !';
$string['tableok'] = 'Tabla {$a} : actualización OK';
$string['tableskipped'] = 'Por razones de registro o seguridad, omitimos <strong>{$a}</strong>. <br />Para eliminar estas entradas, elimine el usuario antiguo una vez que este script se haya ejecutado correctamente.';
$string['timetaken'] = 'La unión tomó {$a} segundos';
$string['transactions_not_supported'] = 'Para su información, su base de datos <strong>no admite transacciones</strong>.';
$string['transactions_setting'] = 'Transacciones permitidas solamente';
$string['transactions_setting_desc'] = 'Si está habilitado, la combinación de usuarios no funcionará
 en absoluto en bases de datos que NO admiten transacciones (recomendado).
   Habilitarlo es necesario para garantizar que su base de datos permanezca constante   en caso de errores de fusión. <br /> Si está deshabilitado, siempre ejecutará acciones de fusión.
   En caso de errores, el registro de fusión le mostrará cuál fue el problema.
 Infórmelo a los responsables del pluginp para obtener una solución en breve.
<br /> Por encima de todo, las tablas básicas de Moodle y algunos plugins de terceros ya están
   consideradas por este plugin. Si Usted no tiene plugins de terceros
 en su instalación de Moodle, puede estar tranquilo al ejecutar este plugin y habilitar o deshabilitar esta opción.';
$string['transactions_supported'] = 'Para su información, su base de datos <strong>admite transacciones</strong>.';
$string['uniquekeynewidtomaintain'] = 'Conservar datos de usuario nuevo';
$string['uniquekeynewidtomaintain_desc'] = 'En caso de conflicto, como cuando la columna relacionada con user.id es una clave única, este plugin conservará los datos del nuevo usuario (por defecto). Esto también significa que se eliminarán los datos del usuario anterior para mantener la coherencia. De lo contrario, si desmarca esta opción, se conservarán los datos del usuario anterior.contrario, si Usted desactiva esta opción, se conservarán los datos del antiguo usuario.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Revisar usuarios a juntar</b>';
$string['userselecttable_legend'] = '<b>Seleccionar usuarios a juntar</b>';
$string['viewlog'] = 'Ver bitácoras de unión';
$string['wronglogid'] = 'La bitácora que Usted pide ya no existe';
