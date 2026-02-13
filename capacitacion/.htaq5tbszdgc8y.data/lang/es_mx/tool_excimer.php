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
 * Strings for component 'tool_excimer', language 'es_mx', version '4.4'.
 *
 * @package     tool_excimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminname'] = 'Perfilador Excimer';
$string['allprofilesdeleted'] = 'Todoslos perfiles han sido eliminados.';
$string['approx_count_algorithm'] = 'algoritmo de conteo aproximado';
$string['auto_settings'] = 'Configuraciones de auto perfilado';
$string['auto_settings_desc'] = 'Configuraciones relacionadas con perfilado automático.';
$string['cachedef_page_group_metadata'] = 'Caché de metadatos de grupo de página Excimer';
$string['cachedef_request_metadata'] = 'Caché de metadatos de solicitud Excimer';
$string['checkslowest'] = 'Perfiles Excimer';
$string['checkslowest:action'] = 'Perfiles más lentos';
$string['checkslowest:details'] = 'El perfil Excimer de más larga duración grabado es para el script/task "{$a->request}" at {$a->duration}.';
$string['checkslowest:none'] = 'Sin perfiles grabados.';
$string['checkslowest:summary'] = 'El perfil más lento es "{$a->request}" en {$a->duration}';
$string['deleteallwarning'] = 'Esto quitará TODOS los perfiles almacenados. ¿Continuar?<br/><i>Los perfiles bloqueados no serán removidos.</i>';
$string['deletedcourse'] = 'ID de curso eliminado: {$a}';
$string['deleteprofile'] = 'Eliminar perfil';
$string['deleteprofiles_course'] = 'Eliminar todos los perfiles para curso';
$string['deleteprofiles_course_warning'] = 'Esto quitará todos los perfiles almacenados para el curso. ¿Continuar?<br/><i>Los perfiles bloqueados NO serán eliminados.</i>';
$string['deleteprofiles_filter'] = 'Eliminar todos los perfiles para este filtro';
$string['deleteprofiles_filter_warning'] = 'Esto quitará todos los perfiles almacenados que coincidan con este filtro. ¿Continuar?<br/><i>Los perfiles bloqueados NO serán eliminados.</i>';
$string['deleteprofiles_script'] = 'Eliminar todos los perfiles para script';
$string['deleteprofiles_script_warning'] = 'Esto quitará todos los perfiles almacenados para el script. ¿Continuar?<br/><i>Los perfiles bloqueados NO serán eliminados.</i>';
$string['deleteprofilewarning'] = 'Esto quitará el perfil. ¿Continuar?';
$string['didnotfinish'] = 'NO terminó';
$string['displaying_month'] = 'Mostrar mes';
$string['duration'] = 'duración';
$string['edit_lock'] = 'Editar bloqueo';
$string['enable_auto'] = 'Habilitar auto perfilado';
$string['enable_auto_desc'] = 'Cualquier página será perfilada automáticamente si excede la duración mínima.';
$string['enable_fuzzy_count'] = 'Habilitar conteo borroso';
$string['enable_fuzzy_count_desc'] = 'esto causará que el plugin mantenga un número aproximado de páginas ejecutadas usando el  {$a}. El perfilado automático debe estar también habilitado..';
$string['enable_partial_save'] = 'Habilitar guardado parcial';
$string['enable_partial_save_desc'] = 'Esto guardará perfiles parciales de procesos web lentos en cada intervalo de procesamiento. Esto proporciona información sobre estos procesos mientras aún se están ejecutando o si se extrae un contenedor, pero las escrituras adicionales pueden ser problemáticas cuando se experimentan problemas de base de datos a gran escala.';
$string['expiry_fuzzy_counts'] = 'Meses a conservar datos de número aproximado.';
$string['expiry_fuzzy_counts_desc'] = 'El número de meses completos de datos a conservar. dejar vacío para conservar indefinidamente.';
$string['expiry_s'] = 'Expiración de bitácora (días)';
$string['expiry_s_desc'] = 'Quitar perfiles después de este tiempo.';
$string['export_profile'] = 'Exportar perfil';
$string['field_actions'] = 'Acciones';
$string['field_buffering'] = 'Amortiguación habilitada';
$string['field_contenttype'] = 'Tipo de Contenido';
$string['field_contenttypecategory'] = 'Tipo de Contenido (categoría)';
$string['field_contenttypekey'] = 'Tipo de Contenido (extensión/clave)';
$string['field_contenttypevalue'] = 'Tipo de Contenido (valor actual)';
$string['field_cookies'] = 'Cookies habilitadas';
$string['field_courseid'] = 'Curso';
$string['field_created'] = 'Creado';
$string['field_datasize'] = 'Tamaño de datos del perfil';
$string['field_dbreadwrites'] = 'Lecturas/escrituras de BasedeDatos';
$string['field_dbreplicareads'] = 'Lecturas de BD de réplica';
$string['field_duration'] = 'Duración';
$string['field_explanation'] = 'Explicación';
$string['field_finished'] = 'Terminado';
$string['field_fuzzycount'] = 'Número aproximado';
$string['field_fuzzydurationcounts'] = 'Histograma';
$string['field_fuzzydurationsum'] = 'Duración total aproximada (s)';
$string['field_hostname'] = 'Nombre del host';
$string['field_id'] = 'ID';
$string['field_lockheld'] = 'Sesión celebrada';
$string['field_lockreason'] = 'Razón del bloqueo';
$string['field_lockwait'] = 'Espera de sesión';
$string['field_lockwaiturl'] = 'URL de bloqueo';
$string['field_lockwaiturl_help'] = 'Es posible que la información sobre esta página solo esté disponible cuando $CFG->debugsessionlock esté configurado.';
$string['field_maxcreated'] = 'Más reciente';
$string['field_maxduration'] = 'Más lento';
$string['field_maxlockheld'] = 'El más largo';
$string['field_memoryusagemax'] = 'Máx Memoria Usada';
$string['field_mincreated'] = 'Más temprano';
$string['field_minduration'] = 'Más rápido';
$string['field_minlockheld'] = 'El más corto';
$string['field_month'] = 'Mes';
$string['field_name'] = 'Nombre';
$string['field_numsamples'] = 'Número de muestras';
$string['field_numsamples_value'] = '{$a->samples} muestras @ ~{$a->samplerate}ms';
$string['field_parameters'] = 'Parámetros';
$string['field_pathinfo'] = 'Pathinfo';
$string['field_pid'] = 'ID del proceso';
$string['field_reason'] = 'Razón';
$string['field_referer'] = 'Referente';
$string['field_request'] = 'Solicitud';
$string['field_requestcount'] = 'Núm perfiles';
$string['field_responsecode'] = 'Código';
$string['field_scriptgroup'] = 'Grupo de script';
$string['field_scripttype'] = 'Tipo de script';
$string['field_sessionid'] = 'ID de sesión';
$string['field_timecreated'] = 'Hora de creación';
$string['field_timemodified'] = 'Hora d emodificación';
$string['field_type'] = 'Tipo';
$string['field_useragent'] = 'Agente usuario';
$string['field_userid'] = 'Usuario';
$string['field_usermodified'] = 'Usuario modificado';
$string['field_versionhash'] = 'Hash de versión';
$string['fuzzydurationrange'] = '{$a->low} - {$a->high}s';
$string['general_settings'] = 'Configuraciones generales';
$string['general_settings_desc'] = 'Configuraciones relacionadas con todos los perfiles.';
$string['here'] = 'aquí';
$string['histogram_history'] = 'Historia de histograma';
$string['import_error'] = 'Error al guardar los contenidos de archivo importado.';
$string['import_profile'] = 'Importar perfil';
$string['import_success'] = 'Perfil importado exitosamente';
$string['link'] = 'Enlace directo';
$string['lock_profile'] = 'Boquear Perfil';
$string['locked'] = 'Perfil está bloqueado';
$string['lockedinfo'] = 'Bloqueado por {$a->user} en {$a->date}';
$string['lockreason'] = 'Razón de Bloqueo de Perfil';
$string['lockreason_help'] = 'Si envía texto, ese vitará que se elimine este perfil.
No se purgará durante las tareas de limpieza ni se podrá eliminar manualmente (también se excluirá de las eliminaciones de grupos).
Normalmente, usted debe indicar un motivo por el que desea conservar este perfil. Si desactiva esta casilla, podrá eliminar el perfil.';
$string['lockwaitnotification'] = 'La mayor parte de la duración fue empleada esperando un bloqueo de sesión, la página podría no ser lenta.';
$string['long_interval_s'] = 'Intervalo de procesamiento (segundos)';
$string['long_interval_s_desc'] = 'Comprobar el estado actual de las tareas de larga duración cada N segundos y procesarlas según sea necesario.
Esto incluye guardar perfiles de tareas cron finalizadas y guardar parcialmente los procesos web en curso, si está habilitado.';
$string['months_to_display'] = 'Meses a mostrar';
$string['next_month'] = 'Mes siguiente';
$string['no_month_in_page_group_table'] = 'Valor de mes no configurado en tabla de grupo de página.';
$string['no_profile_file'] = 'No se encontró archivo de perfil.';
$string['noexcimerprofiler'] = 'Clase de ExcimerProfiler no existe, por lo que el perfilado no puede continuar. Por favor revise las instrucciones de instalación {$a}.';
$string['num_slowest'] = 'Máx a guardar';
$string['num_slowest_by_page'] = 'Máx a guardar por página';
$string['num_slowest_by_page_desc'] = 'Solamente los N perfiles más lentos serán conservados para cada página de script.';
$string['num_slowest_desc'] = 'Solamente los N perfiles más lentos serán conservados.';
$string['period_ms'] = 'Período de muestreo (milisegundos)';
$string['period_ms_desc'] = 'Frecuencia de muestreo,. Mínimo es {$a->min}, máximo es {$a->max}.';
$string['pluginname'] = 'Perfilador Excimer';
$string['previous_month'] = 'Mes anterior';
$string['privacy:metadata:tool_excimer_profiles'] = 'Excimer';
$string['profile_file'] = 'Archivo de perfil';
$string['profile_updated'] = 'Perfil actualizado';
$string['profiledeleted'] = 'Pefil ha sido eliminado';
$string['profilesdeleted'] = 'Perfiles han sido eliminados';
$string['reason_auto'] = 'Auto';
$string['reason_flameall'] = 'Flamear a Todos';
$string['reason_flameme'] = 'Flamearme a mi';
$string['reason_import'] = 'Importar';
$string['reason_slow'] = 'Lento';
$string['reason_stack'] = 'Recursión';
$string['recent'] = 'Reciente';
$string['redact_params'] = 'Parámetros a ser redactados';
$string['redact_params_desc'] = 'Se eliminarán los valores de estos parámetros (uno por línea) antes de guardar el perfil.
Incluya en esta lista todos los parámetros que sean potencialmente sensibles, como claves, tokens y nonces. Se ignorarán los comentarios, el estilo C (/\\*..\\*/)
y el estilo bash (#), y las líneas en blanco.<br/>
La redacción de los parámetros {$a} es una función incorporada y siempre se realizará.';
$string['report_page_groups'] = 'Metadatos de Grupo Página';
$string['report_page_slow_course'] = 'Lento por curso';
$string['report_recent'] = 'Recientemente perfilado';
$string['report_session_locks'] = 'Bloqueos de sesión largos';
$string['report_slowest'] = 'Perfiles más lentos';
$string['report_slowest_grouped'] = 'Scripts más lentos';
$string['report_slowest_other'] = 'Trabajos / CLI / WS lentos';
$string['report_slowest_web'] = 'Páginas web lentas';
$string['report_unfinished'] = 'Actualmente perfilando';
$string['reportname'] = 'Reportes de perfilados';
$string['request_ms'] = 'Duración mínima de solicitud (milisegundos)';
$string['request_ms_desc'] = 'Grabar  un perfil solamente si se ejecuta este tiempo';
$string['samplelimit'] = 'Límite de muestreo';
$string['samplelimit_desc'] = 'El número máximo de muestras que se grabarán. Esto funciona filtrando la grabación de muestras. Cada vez que se alcanza el límite, las muestras grabadas hasta el momento se eliminan de cada segunda muestra. Además, la tasa de filtrado se duplica, de modo que solo se graba cada N muestra con una tasa de filtrado N. Esto tiene el mismo efecto que ajustar el período de muestreo de modo que la cantidad total de muestras nunca supere el límite.';
$string['samples'] = 'muestras';
$string['scripttype_ajax'] = 'Ajax';
$string['scripttype_cli'] = 'CLI';
$string['scripttype_task'] = 'Trabajo';
$string['scripttype_web'] = 'Web';
$string['scripttype_ws'] = 'Servicio';
$string['slowest'] = 'Más lento';
$string['slowest_grouped'] = 'Scripts más lentos';
$string['stacklimit'] = 'Límite de pila (stack)';
$string['stacklimit_desc'] = 'La recursión máxima permitida de profundidad de la pila (stack) antes de que el trabajo sea marcado con bandera.';
$string['strftime_datetime'] = '%d %b %Y, %H:%M';
$string['strftime_monyear'] = '%b %Y';
$string['tab_import'] = 'Importar';
$string['tab_page_course'] = 'Cursos';
$string['tab_page_groups'] = 'Grupos de Página';
$string['tab_session_locks'] = 'Bloqueos de sesión largos';
$string['tab_slowest_other'] = 'Trabajos / CLI / WS lentos';
$string['tab_slowest_web'] = 'Páginas web lentas';
$string['task_expire_logs'] = 'Expirar Bitácoras de Excimer';
$string['task_min_duration'] = 'Duración mínima de trabajo (segundos)';
$string['task_min_duration_desc'] = 'Para los trabajos ad-hoc y agendados, a duración aproximada mínima, en segundos.';
$string['task_purge_fastest'] = 'Purgar perfiles Excimer más rápidos';
$string['task_purge_page_groups'] = 'Purgar datos de número aproximado de grupo de página';
$string['term_profile'] = 'Perfil';
$string['to_current_month'] = 'Al mes actual';
$string['unfinished'] = 'No terminado';
$string['unknown'] = 'Desconocido';
