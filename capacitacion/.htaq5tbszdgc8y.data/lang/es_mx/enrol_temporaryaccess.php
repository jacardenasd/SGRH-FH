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
 * Strings for component 'enrol_temporaryaccess', language 'es_mx', version '4.4'.
 *
 * @package     enrol_temporaryaccess
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cantenrol'] = 'La inscripción está deshabilitada, inactiva o no disponible';
$string['cantenrolcapabilitymissing'] = 'Usted no puede acceder al curso, porque le faltan los siguientes permisos: {$a}';
$string['defaultcaps'] = 'Capacidades predeterminadas requeridas';
$string['defaultcaps_desc'] = 'Una lista separada por comas de nombres de capacidades, como por ejemplo  "moodle/category:viewhiddencategories".';
$string['defaultrole'] = 'Asignación de rol predeterminado';
$string['defaultrole_desc'] = 'Seleccionar rol a ser asignado a usuarios durante este método de inscripción.';
$string['enrolicon'] = 'Ícono para inscribirse al curso';
$string['enrolicon_desc'] = 'Ícono a ser mostrado en la página del sitio para cursos con este método de inscripción.<br> Por favor especifique un nombre de ícono FontAwesome válido. Usted también puede dejar vacío este campo para usar una imagen:
nómbrela <samp>enrolicon</samp> y póngala bajo la carpeta <samp>enrol/temporaryaccess/pix/</samp>.<br>
Nota: usted puede necesitar purgar cachés de su sitio para que este cambio realmente tenga efecto.';
$string['enrolme'] = 'Acceder';
$string['gotoenrolmentpage'] = 'Regresar a página para inscripción';
$string['invalidcapability'] = 'Identificador de capacidad inválido: {$a}';
$string['password'] = 'Clave de acceso';
$string['password_help'] = 'Si un valor es proporcionado, los usuarios tendrán que proporcionar la contraseña para poder acceder al curso vía este método.<br>
Si no es proporcionado un valor, no se necesitará una contraseña';
$string['passwordinvalid'] = 'Clave de acceso inválida';
$string['pluginname'] = 'Acceso temporal';
$string['privacy:metadata'] = 'El plugin de Acceso temporal no almacena ningún dato personal.';
$string['requiredcapabilities'] = 'Capacidades necesarias';
$string['requiredcapabilities_help'] = 'Solamente usuarios con las capacidades seleccionadas podrán acceder al curso vía este método.<br>
Como las capacidades deben de tenerse antes de acceder al curso, usualmente deberían de tenerse al nivel de sistema o de categoría de curso.';
$string['requirepassword'] = 'Requerir clave de acceso';
$string['requirepassword_desc'] = 'Si se selecciona, cualquier nueva instancia de este método de inscripción tendrá necesidad de que se configure una clave de acceso.';
$string['role'] = 'Asignación de rol';
$string['role_help'] = '¿Qué rol debería ser asignado a usuarios que acceden al curso vía este método de inscripción?';
$string['showunavailableenrolform'] = 'Mostrar formato de instancia de inscripción no disponible';
$string['showunavailableenrolform_desc'] = 'Si se activa, un formato de instancia de inscripción no disponible será mostrado colapsado con un mensaje que explica el porqué está no disponible .<br>
de lo contrario, los formatos de instancias de inscripción no disponibles no se mostrarán para nada.';
$string['status'] = 'Habilitado';
$string['status_help'] = 'Si no es habilitado, ningún usuario podrá acceder al curso vía este método de inscripción.';
$string['temporaryaccess:config'] = 'Configurar instancias de inscripción de Acceso Temporal';
$string['temporaryaccess:manage'] = 'Gestionar usuarios inscritos vía Acceso Temporal';
$string['tempswitchback'] = 'Regresar a mi rol normal';
$string['tempswitchtorole'] = 'Cambiar temporalmente a rol de {$a}';
$string['usepasswordpolicy'] = 'Usar política de contraseñas';
$string['usepasswordpolicy_desc'] = 'Usar política estándar de contraseñas para claves de acceso.';
