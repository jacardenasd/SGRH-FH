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
 * Strings for component 'local_aatplugin', language 'es_mx', version '4.4'.
 *
 * @package     local_aatplugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aat_link'] = '<a href="https://www.academicanalytics.ca/" target="_blank">https://www.academicanalytics.ca</a>';
$string['cleanup_task_complete'] = 'Tarea de limpieza completada: se eliminaron {$a} archivos temporales antiguos';
$string['contextinitialization'] = 'No se pudo inicializar contexto';
$string['desc'] = 'Este es un plugin que le permite exportar todos los datos relacionados con un curso a través de un archivo de volcado SQL cifrado.';
$string['download_sql_dump'] = 'Descargar volcado SQL';
$string['file_created'] = 'Su archivo fue creado, haga clic en el enlace de abajo para descargarlo';
$string['filegenerationfailed'] = 'Error en la generación del archivo. Inténtalo de nuevo. (Asegúrese de que cron se esté ejecutando en el servidor)';
$string['filegenerationpending'] = 'Su archivo aún se está generando. Espere un momento y haga clic en Actualizar.';
$string['final_note'] = 'Ahora debería tener acceso a los datos dentro de la herramienta AAT.';
$string['generatedump'] = 'Generar volcado de SQL';
$string['go_back'] = 'Regresar a la selección de curso';
$string['infomessage'] = 'Bienvenido al plugin AAT. Este plugin le permite descargar registros de cursos en los que es instructor para que puedan cargarse directamente en el sitio web de AAT. Simplemente seleccione uno o más cursos de la lista a continuación y haga clic en el botón "Generar volcado SQL" para descargar el archivo SQL.';
$string['instruction1'] = '1. Seleccione los cursos que desea exportar y haga clic en el botón "Generar volcado SQL"';
$string['instruction2'] = '2. Una vez generado el archivo, haga clic en el enlace "Descargar archivo SQL" para descargarlo en su computadora. Tome nota de la ubicación del archivo.';
$string['instruction3'] = '3. Diríjase al sitio web de AAT (enlace proporcionado a continuación) e inicie sesión con sus credenciales.';
$string['instruction4'] = '4. Dentro del sitio web de AAT, navegue hasta la pestaña "Fuente de datos" y haga clic en el botón "Cargar".';
$string['instruction5'] = '5. Seleccione “Postgres” como proveedor, escriba un nombre para la base de datos y seleccione el archivo que se descargó en el paso 2. Haga clic en “Guardar” para completar el proceso.';
$string['instructions_heading'] = 'Instrucciones:';
$string['invalidcontext'] = 'Contexto inválido';
$string['invalidxml'] = 'XML inválido generado durante exportación';
$string['maxretries'] = 'Se excedió el número máximo de intentos de reintento para la generación de archivos';
$string['nocourseselected'] = 'No ha seleccionado ningún curso, por favor seleccione  al menos un curso';
$string['pluginname'] = 'Utilidad para Exportar AAT';
$string['privacy:metadata'] = 'Este plugin no almacena ningún dato. Sin embargo, permite a los instructores descargar datos de cursos para cargarlos en el sitio web de AAT. El plugin buscó en toda la base de datos de Moodle datos relacionados con cursos específicos';
$string['relatedtablesnotfound'] = 'No se encontraron datos de las tablas relacionadas';
$string['selectcourses'] = 'Seleccionar cursos';
$string['task_cleanup_temp_files'] = 'Limpiar archivos SQL de volcado de datos del almacenamiento temporal';
$string['unserializefailed'] = 'No se pudo anular la serialización de los datos de las tablas';
$string['xmlfilenotcreated'] = 'No se pudo crear el archivo de esquema XML';
