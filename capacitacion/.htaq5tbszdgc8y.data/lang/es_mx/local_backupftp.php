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
 * Strings for component 'local_backupftp', language 'es_mx', version '4.4'.
 *
 * @package     local_backupftp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_course'] = '<a style="color:#a41d1d" target="_blank" href="{$a->course_url}">Acceder al curso</a>';
$string['add_backup'] = 'Para añadir un respaldo, acceso';
$string['add_restore'] = 'Para añadir restauración, acceso';
$string['adding_to_category'] = 'Será añadido a la categoría {$a->categoria}';
$string['already_added_status'] = 'Ya estaba añadido y el estado es {$a->status}';
$string['backup_courses_and_categories'] = 'Respaldo: Cursos y categorías';
$string['backup_creation_parameters'] = 'El respaldo será creado con los parámetros siguientes';
$string['backup_end'] = 'Respaldo terminó en';
$string['backup_end_time'] = 'Hora de término del respaldo';
$string['backup_report'] = 'Reporte del Respaldo';
$string['backup_restart'] = 'RE-hacer este respaldo';
$string['backup_start'] = 'Respaldo inició en';
$string['backup_start_time'] = 'Hora de Inicio del Respaldo';
$string['backupftp:manage'] = 'Administrar respaldo';
$string['categories'] = 'Categorías';
$string['category_created_successfully'] = '==> Categoría {$a->categoria_nome} creada exitosamente';
$string['category_link'] = 'Categoría <a href="{$a}" target="blank">Categoría raíz</a>';
$string['click_here'] = 'Clic aquí';
$string['course'] = 'Curso';
$string['course_added_to_backup_queue'] = 'Curso {$a->course_id} añadido a la cola de respaldo';
$string['course_already_exists'] = 'Curso ya existe';
$string['courses'] = 'Cursos';
$string['courses_and_categories'] = 'Cursos y Categorías';
$string['created_at'] = 'Creado en';
$string['created_on'] = 'Creado en';
$string['created_on_time'] = 'Creado en {$a->modify}';
$string['cron'] = 'el CRON';
$string['cron_task'] = 'trabajo CRON';
$string['error_creating_folder'] = '<span style="color:#d10707">Error creating folder</span> "<b>{$a->ftppasta}</b>" en FTP con error "<b>{$->errormsg}</b>"!';
$string['error_downloading_file'] = 'Error al descargar el archivo MBZ, con error "<b>{$a->error}</b>"';
$string['error_extracting_mbz'] = 'Error al extraer el archivo MBZ';
$string['file_added_to_restore_queue'] = 'Archivo {$a->file} añadido a la cola para restauración';
$string['file_found_and_downloaded'] = 'Archivo localizado y descargado';
$string['file_size'] = 'con tamaño {$a->size}';
$string['file_uploaded'] = 'Archivo "<b>{$a->file}</b>" subido a "<b>{$a->remote_file}</b>"!';
$string['ftp_error_connecting'] = 'Error al conectar a FTP';
$string['ftp_error_login'] = 'No se puede conectar con {$a->username}@{$a->url}';
$string['ftp_files'] = 'Archivos en FTP y Local';
$string['ftp_remote_file_size'] = 'FTP devolvió que el archivo remoto tiene "<b>{$a->size} bytes</b>"';
$string['logs'] = 'Bitácoras';
$string['mbz_extracted_successfully'] = 'MBZ extraído exitosamente';
$string['modulename'] = 'Respaldo FTP/Local';
$string['nothing_to_execute'] = 'Nada para ejecutar';
$string['pluginname'] = 'Respaldo FTP/Local';
$string['pre_check_failure'] = 'Falló pre-comprobación';
$string['privacy:metadata'] = 'El plugin local_backupftp no recopila ni almacena datos personales ni ningún otro dato confidencial. Solo utiliza las configuraciones FTP proporcionadas para realizar copias de seguridad, sin registrar ni conservar información relacionada con los usuarios ni con los datos transferidos.';
$string['processing_file'] = 'Proceando: <b>{$a->remote_file}</b> con {$a->size}';
$string['remote_file'] = 'Archivo Remoto';
$string['report'] = 'Reporte';
$string['reports'] = 'Reportes';
$string['restore_course_already_exists'] = '<a style="color:#a41d1d" target="_blank" href="{$a->course_url}">El curso ya existe</a>';
$string['restore_courses_and_categories'] = 'Restaurar: Cursos y Categorías';
$string['restore_report'] = 'Reporte de Restauración';
$string['run_cron'] = 'Ejecute el';
$string['runtask_backup'] = 'Para ejecutar el respaldo';
$string['runtask_click_here'] = 'Clic aquí';
$string['runtask_execute_five_courses'] = 'Ejecutar solo 5 cursos a la vez';
$string['runtask_execute_one_course'] = 'Ejecutar solo 1 curso a la vez';
$string['runtask_execute_ten_courses'] = 'Ejecutar solo 10 cursos a la vez';
$string['runtask_restore'] = 'Para ejecutar la restauración';
$string['select_deselect_all'] = 'Seleccionar/Des-seleccionar todo';
$string['send'] = 'Enviar';
$string['settings_categorystart'] = 'ID de categoría raíz';
$string['settings_categorystart_desc'] = 'El ID de la categoría raíz para comenzar a restaurar cursos';
$string['settings_error'] = 'y error';
$string['settings_error_sending_backup'] = 'Erro al enviar el respaldo a';
$string['settings_file_size'] = 'con tamaño de archivo';
$string['settings_ftp'] = 'almacenamiento FTP';
$string['settings_ftpenable'] = 'Enviar a FTP';
$string['settings_ftpnames'] = 'Usar nombre del curso como nombre del archivo de respaldo';
$string['settings_ftpnames_desc'] = 'Si se activa, el nombre del archivo enviado será el nombre del curso. De lo contrario, será el nombre que Moodle asigna, similar a backup-moodle2-course-21-name-20240208.mbz';
$string['settings_ftporganize'] = 'Organizar respaldos en FTP por categorías';
$string['settings_ftporganize_desc'] = 'El archivo se guardará como Categoría/Categoría/curso.mbz';
$string['settings_ftppassword'] = 'Contraseña de FTP';
$string['settings_ftppasta'] = 'Archivo Remoto de FTP';
$string['settings_ftppasta_desc'] = 'La carpeta de destino debe comenzar con / y no terminar con / (por ejemplo, /backup, /save/backup)';
$string['settings_ftppasv'] = '¿Enviar archivo en modo pasivo?';
$string['settings_ftppasv_desc'] = 'El modo FTP predeterminado en PHP es el modo activo. Este modo rara vez funciona debido a firewalls, NAT y proxies. Por lo tanto, casi siempre es necesario usar el modo pasivo.';
$string['settings_ftpurl'] = 'URL del FTP';
$string['settings_ftpurl_desc'] = 'Introduzca la dirección IP o el nombre de host del servidor FTP deseado. Si el puerto del servidor FTP es distinto del 21, especifíquelo añadiendo dos puntos (:) seguidos del número de puerto, por ejemplo, 127.0.0.1:29. Si su FTP utiliza SSL, añada ftps:// antes del dominio.';
$string['settings_ftpusername'] = 'Ingreso a FTP';
$string['settings_integrations'] = 'Integraciones';
$string['settings_local'] = 'Almacenamiento temporal';
$string['settings_localfile'] = 'Guardar respaldos en una carpeta local';
$string['settings_localfile_desc'] = 'Si se habilita, una copia de los respaldos será guardada en una carpeta loca especificada debajo.';
$string['settings_localfilepath'] = 'Ruta hacia carpeta de respaldo local';
$string['settings_localfilepath_desc'] = 'Introduzca la ruta completa de la carpeta donde se almacenarán los respaldos localmente. Asegúrese de que el servidor tenga permisos de escritura para esta carpeta. Si se deja en blanco, los respaldos se guardarán en [MOODLEDATA]/backup/';
$string['settings_mbz_settings'] = 'Configuraciones de Generación del Respaldo';
$string['settings_restore_settings'] = 'Restaurar Configuraciones';
$string['settings_rootsettinganonymize'] = 'Anonimizar usuarios Root';
$string['settings_rootsettingusers'] = 'Cofiguraciones de Usuarios Root';
$string['status'] = 'Estado';
$string['submit'] = 'Enviar';
$string['temporary_files_deleted'] = 'Archivos temporales eliminados';
$string['total_files'] = 'Total de archivos:';
$string['total_in_category'] = 'Total dentro de esta categoría: {$a->total}';
$string['view_backup_report'] = 'Para monitorear respaldos, acceda a';
$string['view_restore_report'] = 'Para monitorear restauraciones, acceda a';
