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
 * Strings for component 'tool_behat', language 'es_mx', version '4.4'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta herramienta de administración permite a los desarrolladores y creadores de pruebas generar archivos .feature que describen las funcionalidades de Moodle y ejecutarlas automáticamente. Las definiciones de las etapas disponibles para su uso en los archivos .feature se enumeran a continuación.';
$string['allavailablesteps'] = 'Todas las definiciones de pasos disponibles';
$string['errorbehatcommand'] = 'Error al correr comando en interfaz de línea de comando de behat. Intente correr "{$a} --help" manualmente desde la interfaz de línea de comando para descubrir más acerca del problema.';
$string['errorcomposer'] = 'No están instaladas las dependencias del Composer';
$string['errordataroot'] = 'La configuración $CFG->behat_dataroot no existe o es inválida.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot necesitan configurarse en config.php.';
$string['erroruniqueconfig'] = 'Los valores $CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser diferentes de los valores $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot y $CFG->phpunit_prefix.<br/>
O, si $CFG->behat_prefix es igual, $CFG->behat_dbname o $CFG->behat_dbhost tienen que ser distintos de $CFG->phpunit_dbname and $CFG->phpunit_dbhost y de $CFG->dbname y $CFG->dbhost.';
$string['fieldvalueargument'] = 'Argumentos de valor del campo';
$string['fieldvalueargument_help'] = 'Este argumento debería ser completado por un valor de campo. Hay muchos tipos de campos, incluyendo los sencillos como las casillas de verificación, selecciones o área-de-texto; o campos  complejos como los selectores de datos. Usted puede revisar la documentación para desarrolladores  <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a> para ver los detalles de los valores de campo esperados.';
$string['giveninfo'] = 'Asignado. Proceso para preparar el entorno';
$string['infoheading'] = 'Información';
$string['installinfo'] = 'Lea {$a} para ver información acerca de instalación y ejecución de pruebas';
$string['newstepsinfo'] = 'Lea {$a} para ver información acerca de cómo añadir nuevas definiciones de pasos';
$string['newtestsinfo'] = 'Lea {$a} para ver información acerca de cómo escribir nuevas pruebas';
$string['nostepsdefinitions'] = 'No hay definiciones de pasos que coincidan con este filtro';
$string['pluginname'] = 'Prueba de aceptación';
$string['privacy:metadata'] = 'El plugin de Prueba de aceptación no almacena ningún dato personal.';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contiene';
$string['stepsdefinitionsfilters'] = 'Definiciones de etapas';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Entonces. Revisando para asegurar que los resultados sean los esperados';
$string['unknownexceptioninfo'] = 'Hubo un problema con Selenium o con su navegador. Por favor asegúrese de que está usando la versión más reciente de Selenium. Error:';
$string['viewsteps'] = 'Filtro';
$string['warndirrootconfigfound'] = 'Se encontró un archivo de configuración en {$a}. Este archivo no se actualiza de forma automática y puede volverse obsoleto. Se recomienda eliminar este archivo.';
$string['wheninfo'] = 'Cuando. Acción que provoca un evento';
$string['wrongbehatsetup'] = 'Algo está mal con la configuración de behat, por lo que las definiciones de los pasos no pueden enlistarse: <b>{$a->errormsg}</b><br/><br/>Por favor revise que :<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot estén configurados en config.php con diferentes valores a $CFG->dataroot, $CFG->prefix y $CFG->wwwroot.</li>
<li>Usted ejecutó  "{$a->behatinit}" desde su directorio raíz de Moodle.</li>
<li>Las dependencias están instaladas en vendor/ y el archivo {$a->behatcommand} tiene permisos para ejecución.</li></ul>';
