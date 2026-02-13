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
 * Strings for component 'videotime', language 'es_mx', version '4.4'.
 *
 * @package     videotime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = 'Nombre de actividad';
$string['activity_name_help'] = 'Nombre mostrado en el curso para este módulo de actividad Video Time.';
$string['activitystatus'] = 'Estado de finalización de actividad';
$string['addtexttrack'] = 'Añadir pista de texto';
$string['advancedsettings'] = 'Configuraciones avanzadas';
$string['advancedsettings_help'] = 'Seleccionar todos los elementos que deberían ser mostrados como avanzados.';
$string['albums'] = 'Álbumes';
$string['api_not_authenticated'] = 'API Vimeo no está autenticada.';
$string['api_not_configured'] = 'API Vimeo no está configurada.';
$string['apply'] = 'Aplicar';
$string['authenticate_vimeo'] = 'Autenticado con Vimeo';
$string['authenticate_vimeo_success'] = 'Autenticación Vimeo exitosa. Ahora Usted puede usar características que dependen de la API Vimeo.';
$string['authenticated'] = 'Autenticado';
$string['autopause'] = 'Autopausa';
$string['averageviewtime'] = 'Tiempo de observación promedio';
$string['background'] = 'Fondo';
$string['browsevideos'] = 'Mirar videos';
$string['calendarend'] = '{$a} termina';
$string['calendarstart'] = '{$a} inicia';
$string['captions'] = 'Subtítulos';
$string['chapters'] = 'Capítulos';
$string['choose_video'] = 'Elegir Video';
$string['choose_video_confirm'] = 'Está Usted seguro de querer elegir el vido';
$string['cleanupalbumsandtags'] = 'Limpieza de álbumes y marcas';
$string['client_id'] = 'ID del cliente Vimeo';
$string['client_id_help'] = 'La ID del Ciente es generada cuando Usted crea una "App" bajo su cuenta Vimeo. Vaya a https://developer.vimeo.com/apps/new para comenzar este proceso.';
$string['client_secret'] = 'Secreto del cliente Vimeo';
$string['client_secret_help'] = 'El Secreto del Ciente es generado cuando Usted crea una "App" bajo su cuenta Vimeo. Vaya a https://developer.vimeo.com/apps/new para comenzar este proceso.';
$string['columns'] = 'Columnas';
$string['columns_help'] = 'Elegir el ancho para este video cuando se muestra en modo de previsualización. El número de columnas es cuantos videos se pueden mostrar en una fila.';
$string['completed'] = 'Completado';
$string['completion_hide_detail'] = 'Ocultar detalles de finalización';
$string['completion_on_finish'] = 'Finalización al terminar el video';
$string['completion_on_percent'] = 'Finalización por porcentaje de vista';
$string['completion_on_percent_value'] = 'Finalización en valor de porcentaje visto';
$string['completion_on_view'] = 'Finalización por tiempo de vista';
$string['completion_on_view_seconds'] = 'Finalización en tiempo en segundos de vista';
$string['completiondetail:_on_finish'] = 'Terminar video';
$string['completiondetail:_on_percent'] = 'Terminó de observar {$a} porciento';
$string['completiondetail:_on_view_time'] = 'Ver para tiempo {$a}';
$string['configure_vimeo_first'] = 'Usted necesita configurar una App Vimeo antes de autenticarse.';
$string['configure_vimeo_help'] = '<ol><li>Vaya a <a href="https://developer.vimeo.com/apps/new">https://developer.vimeo.com/apps/new</a> e inicie sesión con su cuenta de Vimeo.</li>
<li>Ingrese un nombre y una descripción para su aplicación. Ejemplo: API de Video Time Repository</li>
<li>Asegúrate de que la casilla "No. Las únicas cuentas de Vimeo que tendrán acceso a la aplicación son las mías" esté marcada.</li>
<li>Acepta las Condiciones del Servicio de Vimeo y haz clic en "Crear aplicación".</li>
<li>Ahora deberías ser redirigido a tu nueva aplicación.</li>
<li>Haz clic en "Editar configuración".</li>
<li>Introduce una descripción de la aplicación; esta se mostrará a los administradores al autenticarse con Vimeo.</li>
<li>Introduce la URL de la aplicación; debe ser <b>{$a->redirect_url}</b></li>
<li>Haz clic en "Actualizar".</li>
<li>Añade una URL de devolución de llamada; debe ser <b>{$a->redirect_url}</b></li>
<li>Copia el Identificador de cliente (cerca de la parte superior) y el Secreto de cliente (Administrar aplicación). Secretos)</li>
<li>Ingrese el ID y el secreto del cliente <a href="{$a->configure_url}">aquí</a></li></ol>';
$string['confirmation'] = 'Confirmación';
$string['controls'] = 'Controles';
$string['coverage_help'] = 'Cantidad de video visto al menos una ocasión por el usuario';
$string['create_vimeo_app'] = 'App para Crear Vimeo';
$string['currentwatchtime'] = 'Tiempo actual de vista';
$string['datasource:videotime_sessions_data_source'] = 'Sesiones de Vdeo Time';
$string['datasource:videotime_stats_data_source'] = 'Estadísticas de Video Time';
$string['default'] = 'Valor por defecto';
$string['defaulttabsize'] = 'Tamaño predeterminado de pestaña';
$string['defaulttabsize_help'] = 'Configurar el tamaño que será usado para determinar el ancho relativo de secciones de pestaña';
$string['deletesessiondata'] = 'Eliminar datos de sesión';
$string['discover_videos'] = 'Descubrir videos  Vimeo';
$string['discovering_videos'] = 'Descubriendo {$a->count} videos';
$string['display_options'] = 'Opciones de visualización';
$string['dnduploadvideotime'] = 'Crear actividad Video Time';
$string['dnt'] = 'No monitorear';
$string['done'] = 'Hecho';
$string['duration'] = 'Duración';
$string['embed_options'] = 'Opciones de incrustación';
$string['embed_options_defaults'] = 'Opciones de incrustación por defect';
$string['embeds'] = 'Incrustar';
$string['enabletabs'] = 'Habilitar pestañas';
$string['enabletabs_help'] = 'Mostrar pestñas con video que pueden contener información adicional o interacción';
$string['estimated_request_time'] = 'Tiempo restante estimado';
$string['failed'] = 'Falló';
$string['firstaccess_help'] = 'Cuando reprodujo el video por primera ocasión el usuario';
$string['firstsession'] = 'Primera sesión';
$string['force'] = 'Forzar configuración';
$string['force_help'] = 'Si se activa este valor por defecto anulará la configuración de la intancia.';
$string['forcedsettings'] = 'Configuraciones forzadas';
$string['forcedsettings_help'] = 'Seleccionar todos los elementos que deberían ser forzados a valores predeterminados.';
$string['generalsettings'] = 'Configuraciones generales';
$string['goback'] = 'Regresar';
$string['gradeitemnotcreatedyet'] = 'No existe un ítem en el Libro de calificaciones para esta actividad. Active <b>Configurar calificación igual a porcentaje de vista</b> arriba, guarde y edite esta actividad nuevamente para configurar categoría de calificación y calificación aprobatoria.';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['incomplete'] = 'Incompleto';
$string['insert_video_metadata'] = 'Insertar metadatos del video (puede anular configuraciones de actividad)';
$string['invalid_session_state'] = 'Estado de sesión inválido.';
$string['label_mode'] = 'Modo etiqueta';
$string['lastaccess_help'] = 'Cuando reprodujo el video por última ocasión el usuario';
$string['lastsession'] = 'Última sesión';
$string['long'] = 'Largo';
$string['managevideotimepluginplugins'] = 'Gestionar extensiones de Video Time';
$string['managevideotimetabplugins'] = 'Gestionar plugins de pestaña Video Time';
$string['mobileiframe'] = 'Reproductor de iframe móvil';
$string['mobileiframe_help'] = 'Usar reproductor iframe experimental en App móvil. Es necesario para mostrar las características más nuevas incluyendo pestañas y videos diferentes a Vimeo en la App.';
$string['mode'] = 'Modo';
$string['mode_help'] = '<b>Modo normal</b>: Muestra el enlace a actividad normal; sin extras en la página del curso.<br>
<b>Modo etiqueta</b>: Incrustar video en el diseño del curso, similar a la actividad antiguamente llamada Etiqueta.<br>
<b>Modo previsualizar imagen</b>: Muestra miniatura del video en página del curso que enlaza a actividad (Solamente Repositorio Video Time).';
$string['modulename'] = 'Video Time';
$string['modulename_help'] = 'La actividad Video Time le permite al profesor
<ul>
<li>incrustar fácilmente videos de Vimeo con solo añadir la URL</li>
<li>para añadir contenido encima y debajo del reproductor de video.</li>
</ul>

Video Time Pro cuenta con funciones avanzadas para
<ul>
<li>monitorear el tiempo de visualización del usuario mediante la finalización de la actividad</li>
<li>obtener información sobre el tiempo de visualización de cada usuario</li>
<li>establecer opciones de incrustación predeterminadas para el plugin</li>
<li>y anular las opciones de incrustación de las instancias globalmente.</li>
</ul>

Descargar Video Time Pro ahora en <a href="https://bdecent.de/products/videotimepro">https://bdecent.de/products/videotimepro</a>.

Estamos mejorando el plugin constantemente, así que estate atento a las próximas versiones. Puedes ver en qué estamos trabajando y añadir solicitudes de funciones en nuestra hoja de ruta pública en <a href="https://bdecent.de/products/videotimepro/roadmap">https://bdecent.de/products/videotimepro/roadmap</a>.

Si tiene algún comentario, no dude en hacérnoslo saber.';
$string['modulenameplural'] = 'Instancias Video time';
$string['modulenamepro_help'] = 'La actividad Video Time Pro le permite al profesor
<ul>
<li>incrustar fácilmente vídeos de Vimeo con solo añadir la URL</li>
<li>añadir contenido encima y debajo del reproductor de vídeo</li>
<li>seguir el tiempo de visualización del usuario mediante la finalización de la actividad</li>
<li>obtener información sobre el tiempo de visualización de cada usuario</li>
<li>establecer opciones de incrustación predeterminadas para el plugin</li>
<li>y anular las opciones de incrustación de las instancias globalmente.</li>
</ul>

Mejoramos constantemente el plugin, así que esté atento a las próximas versiones. Puede ver en qué estamos trabajando y añadir solicitudes de funciones en nuestra hoja de ruta pública en <a href="https://bdecent.de/products/videotimepro/roadmap">https://bdecent.de/products/videotimepro/roadmap</a>.

Si tiene algún comentario, no dude en ponerse en contacto con nosotros.';
$string['more'] = 'Más';
$string['mycohort'] = 'Mi cohorte';
$string['needs_authentication'] = 'Necesita autenticación';
$string['next_activity'] = 'Siguiente actividad';
$string['next_activity_auto'] = 'Automáticamente Ir a la Siguiente Actividad';
$string['next_activity_auto_help'] = 'Automáticamente cargar la Siguiente Actividad cuando el estudiante complete el video.';
$string['next_activity_button'] = 'Habilitar Botón de Siguiente Actividad';
$string['next_activity_button_help'] = 'Mostrar un botón arriba del video que enlace  a la siguiente actividad que el usuario debería completar.';
$string['next_activity_in_course'] = 'Predeterminado: Siguiente Actividad en el Curso';
$string['nocompletioncriteriaset'] = 'Sin criterio de finalización configurado. Por favor seleccione criterio debajo.';
$string['normal_mode'] = 'Modo Normal';
$string['not_authenticated'] = 'No autenticado';
$string['of'] = 'de';
$string['option_autopause'] = 'Autopausa';
$string['option_autopause_help'] = 'Si se pausa el video actual cuando se reproduce otro video de Vimeo en la misma página. Establezca este valor en "false" para permitir la reproducción simultánea de todos los videos de la página. Esta opción no tiene efecto si ha desactivado las cookies en su navegador, ya sea mediante la configuración del navegador o con una extensión o plugin.';
$string['option_autoplay'] = 'AutoReproducir';
$string['option_autoplay_help'] = 'Iniciar automáticamente la reproducción del video. Tenga en cuenta que esto no funcionará en algunos dispositivos o navegadores que lo bloqueen.';
$string['option_background'] = 'Fondo';
$string['option_background_help'] = 'Si es que el reproductor está en modo de segundo plano, lo que oculta los controles para reproducir, habilita auto reproducir y bucles del video.';
$string['option_byline'] = 'Autor';
$string['option_byline_help'] = 'Mostrar el autor en el video.';
$string['option_color'] = 'Color';
$string['option_color_help'] = 'Especificar el color de los controles de video. Los colores pueden ser anulados por las configuraciones incrustadas del video.';
$string['option_controls'] = 'Controles';
$string['option_controls_help'] = 'Este parámetro ocultará todos los elementos del reproductor (barra de reproducción, botones para compartir, etc.) para una experiencia sin bordes. Advertencias: Al usar este parámetro, el botón de reproducción/pausa estará oculto. Para iniciar la reproducción para sus espectadores, deberá habilitar la reproducción automática, usar los controles del teclado o implementar nuestro SDK (Kit de Desarrollo del Software)  del reproductor para iniciar y controlar la reproducción. Tenga en cuenta que configurar este parámetro no deshabilitará los controles del teclado.';
$string['option_dnt'] = 'No monitorear';
$string['option_dnt_help'] = 'Si es que se impide o no que el reproductor monitoree los datos de sesión, incluyendo cookies. Recuerde que al configurar este argumento a verdadero también bloquea las estadísticas de video.';
$string['option_forced'] = '{$a->option} está forzada globalmente a: {$a->value}';
$string['option_height'] = 'Altura';
$string['option_height_help'] = 'La altura exacta del video, pero el video no excederá el tamaño nativo del video.';
$string['option_loop'] = 'Bucle';
$string['option_loop_help'] = 'Causa que el video comience de nuevo tan pronto termine.';
$string['option_maxheight'] = 'Altura máxima';
$string['option_maxheight_help'] = 'Igual que la altura, pero el video no excederá el tamaño nativo del video.';
$string['option_maxwidth'] = 'Ancho máximo';
$string['option_maxwidth_help'] = 'Igual que el ancho, pero el video no excederá el tamaño nativo del video.';
$string['option_muted'] = 'Mudo';
$string['option_muted_help'] = 'Silenciar este video al cargar. Es bnecesario autoreproducción en algunos navegadores.';
$string['option_pip'] = 'Imagen-en-image';
$string['option_pip_help'] = 'Si es que se incluye o no el botón para imagen-en-imagen entre los controles del reproductor y se habilita la API para imagen-en-imagen.';
$string['option_playsinline'] = 'Reproducir en-línea';
$string['option_playsinline_help'] = 'Reproducir video en-línea en dispositivos óviles, para ir automáticamente a pantalla completa en reproducción configure este pará metro a falso.';
$string['option_portrait'] = 'Retrato';
$string['option_portrait_help'] = 'Mostrar el retrato en el vidoe';
$string['option_preventfastforwarding'] = 'Impedir adelantar rápido';
$string['option_responsive'] = 'Responsivo';
$string['option_responsive_help'] = 'Si se activa, el reproductor de video será responsivo y se adaptará al tamaño de página o pantalla.';
$string['option_speed'] = 'Velocidad';
$string['option_speed_help'] = 'Muestra los controles de velocidad en el menú de las preferencias y habilita la API de velocidad de reproducción (disponible para cuentas ¨PRO y Business).';
$string['option_title'] = 'Título';
$string['option_title_help'] = 'Mostrar el título en el video.';
$string['option_transparent'] = 'Transparente';
$string['option_transparent_help'] = 'El reproductor responsivo y el fondo transparente están habilitados por defecto; para deshabilitarlos configure este parámetro a falso.';
$string['option_width'] = 'Ancho';
$string['option_width_help'] = 'El ancho exacto del video. Por defecto asume el ancho de la versión más grande disponible del video.';
$string['page-mod-videotime-view'] = 'Ver página de Video Time';
$string['page-mod-videotime-x'] = 'Cualquier página del módulo Video Time';
$string['panelwidthlarge'] = 'Ancho grande de panel';
$string['panelwidthmedium'] = 'Ancho mediano de panel';
$string['panelwidthsmall'] = 'Ancho pequeño de panel';
$string['passed'] = 'Pasado';
$string['percentageofvideofinished'] = 'Porcentaje de video terminado';
$string['pip'] = 'Imagen-en-imagen';
$string['pluginadministration'] = 'Administración de Video Time';
$string['pluginname'] = 'Video Time';
$string['preventfastforwarding'] = 'Impedir adelantar rápido';
$string['preventfastforwarding_help'] = 'Impedir que los usuarios avancen el video más allá de lo que hayan visto.';
$string['preventfastforwardingmessage'] = 'Usted solamente ha visto {$a->percent}% de este video; y usted no puede saltar hacia adelante sin verlo.';
$string['preventpreviewtracking'] = 'Impedir monitoreo de vista previa';
$string['preventpreviewtracking_help'] = 'Impide que se graben datos del usuario antes o después de las fechas configuradas de disponibilidad.';
$string['preview_mode'] = 'Modo Previsualizar imagen';
$string['preview_picture'] = 'Previsualizar imagen';
$string['preview_picture_help'] = 'Imagen mostrada para usuario.';
$string['preview_picture_linked'] = 'Previsualización de imagen enlazada';
$string['preview_picture_url'] = 'URL de previsualización de imagen';
$string['privacy:metadata'] = 'El módulo de actividad Video Time no almacena ningún dato personal.';
$string['process_videos'] = 'Procesar videos';
$string['process_videos_help'] = 'Los videos serán procesados vía trabajos agendados. Para cuentas más grandes de Vimeo, podría tardar mucho tiempo procesar completamente todos los videos.';
$string['pull_from_vimeo'] = 'Jalar metadatos de Vimeo';
$string['pull_from_vimeo_invalid_videoid'] = 'No se pudo determinar Video ID. Asegúrese de escribir una URL de  Vimeo (Ejemplo: https://vimeo.com/635473456).';
$string['pull_from_vimeo_loading'] = 'Jalando Metadatos desde Vimeo ...';
$string['pull_from_vimeo_success'] = 'Los metadatos fueron jalados exitosamente de Vimeo. Algunas de las configuraciones de actividad fueon anuladas.';
$string['rate_limit'] = 'Límite de solicitud API Vimeo';
$string['refreshpage'] = 'Por favor refresque su página para ver actividad duplicada';
$string['results'] = 'resultados';
$string['resume_playback'] = 'Reanudar Reproducción';
$string['resume_playback_help'] = 'Automáticamente reanudar el video cuando el usuario regresa a actividad. La reproducción comienza donde el usuario se quedó.';
$string['run_discovery_task'] = 'Ejecutar el trabajo de "Descubrir videos de Vimeo" para comenzar a jalar los datos de sus videos. en caso contrario usted puede esperar hasta que se ejecute automáticamente.';
$string['saveinterval'] = 'Intervalo de monitoreo';
$string['saveinterval_help'] = 'El tiempo a esperar antes de guardar la posición del video. Puede configurarse más grande cuando las actividades tengan un gran número de usuarios concurrentes (eventos en vivo),';
$string['search:activity'] = 'VideoTime - información de actividd';
$string['search:texttrack'] = 'VideoTime - información de pista siguiente';
$string['search_help'] = 'Buscar nombre, descripción, álbumes, marcas...';
$string['seconds'] = 'Segundos';
$string['session_not_found'] = 'Sesión del usuario no encontrada';
$string['set_client_id_and_secret'] = 'Configurar Secreto e ID del cliente';
$string['settings'] = 'Configuraciones de Video Time';
$string['setup_repository'] = 'Configurar Repositorio';
$string['show_description'] = 'Mostrar descripción';
$string['show_description_in_player'] = 'Mostrar descripción arriba del reproductor';
$string['show_description_in_player_help'] = 'Mostrar descripción arriba del reproductor cuando la actividad sea mostrada.';
$string['show_duration'] = 'Mostrar duración';
$string['show_tags'] = 'Mostrar marcas';
$string['show_title'] = 'Mostrar título';
$string['show_viewed_duration'] = 'Mostrar duración visto';
$string['showdescription'] = 'Mostrar descripción';
$string['showdescription_help'] = 'La descripción es mostrada arriba del video y puede ser mostrada en la página del curso.';
$string['showing'] = 'Mostrando';
$string['showtab'] = 'Mostrar pestaña';
$string['state'] = 'Estado';
$string['state_finished'] = 'Terminado';
$string['state_help'] = '¿Ha terminado el video el usuario?';
$string['state_incomplete'] = 'Incompleto';
$string['status'] = 'Estado';
$string['store_pictures'] = 'Almacenar miniaturas';
$string['store_pictures_help'] = 'Si se habilita, las imágenes miniaturas de Vimeo serán almacenadas localmente. En caso contrario las imágenes serán entregadas desde Vimeo externamente.';
$string['subplugintype_videotimeplugin'] = 'Plugin Video Time';
$string['subplugintype_videotimeplugin_plural'] = 'Plugins Video Time';
$string['subplugintype_videotimetab'] = 'Pestaña de Video Time';
$string['subplugintype_videotimetab_plural'] = 'Pestañas de Video Time';
$string['subtitles'] = 'Subtítulos';
$string['tabinformation'] = 'Información';
$string['tablealias_vt'] = 'Video Time';
$string['tabs'] = 'Pestañas';
$string['tabtranscript'] = 'Transcripción';
$string['taskscheduled'] = 'Trabajo agendado para siguiente ejecución del cron';
$string['texttrack'] = 'Pista de texto';
$string['texttrackno'] = 'Pista de texto {no';
$string['texttracks'] = 'Pistas de texto';
$string['timecompleted'] = 'Tiempo completado';
$string['timeended'] = 'Fecha terminada';
$string['timeleft'] = 'Tiempo restante';
$string['timestarted'] = 'Fecha de inicio';
$string['todo'] = 'TODO';
$string['totaltime_help'] = 'Video Time estaba reproduciendo a velocidad normal';
$string['totaluniquevisitors'] = 'Total de visitantes únicos';
$string['totalvideotime'] = 'Total de tiempo de video: {$a->time}';
$string['totalviews'] = 'Total de vistas';
$string['totara_video_discovery_help'] = '<p>Puede ejecutar esta tarea manualmente con un comando de la Intefaz por Línea de Comandos:</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\discover_videos</b></p>
<p>De lo contrario, es posible que tenga que esperar a que se ejecute la tarea programada.
<p>También puede ejecutar el comando para obtener la información del álbum manualmente (en lugar de esperar):
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\update_albums</b></p>';
$string['trackkind'] = 'Tipo de pista de texto predeterminado';
$string['trackkind_help'] = 'Elija qué tipo de pista de texto se seleccionará de forma predeterminada al agregar una nueva pista.';
$string['tracktype'] = 'Tipo de pista';
$string['trackvisibility'] = 'Visibilidad predeterminada de pista de texto';
$string['trackvisibility_help'] = 'Seleccione si las pistas de texto son visibles para los estudiantes de forma predeterminada en las pestañas o en el reproductor VideoJS. Las pistas de texto locales no son visibles en el reproductor de Vimeo.';
$string['update_albums'] = 'Actualizar álbumes de video';
$string['upgrade_vimeo_account'] = 'ADVERTENCIA: Considere actualizar su cuenta  Vimeo. Su límite de solicitud API es demasiado bajo.';
$string['use'] = 'Usar';
$string['verylong'] = 'Muy largo';
$string['video_description'] = 'Notas';
$string['video_description_help'] = 'Las notas son mostradas debajo del video.';
$string['videoclose'] = 'Permitir ver hasta';
$string['videocreated'] = 'Video creado';
$string['videoopen'] = 'Permitir ver a partir de';
$string['videos_discovered'] = 'Videos descubiertos';
$string['videos_processed'] = 'Videos procesados';
$string['videotime:addinstance'] = 'Añadir un nuevo módulo Video Time';
$string['videotime:view'] = 'Ver video de Video time';
$string['videotime:view_report'] = 'Ver reporte (solamente Pro)';
$string['videotimelink'] = 'Enlace';
$string['videotimepluginpluginname'] = 'Nombre de extensión Video Time';
$string['videotimetabpluginname'] = 'Nombre de pestaña Video Time';
$string['videotimetabplugins'] = 'Plugins de pestaña Video Time';
$string['videotimeurl'] = 'URL';
$string['view_report'] = 'Ver reporte';
$string['viewpercentgrade'] = 'Configurar calificación igual a porcentaje de vista';
$string['viewpercentgrade_help'] = 'Crear ítem de calificación para este video. El estudiante recibirá una calificación igual a su propio porcentaje del video.';
$string['views'] = 'Vistas';
$string['views_help'] = 'Número de veces independientes que la página de la actividad fue cargada para ver video.';
$string['vimeo_overview'] = 'Vista general y configuración';
$string['vimeo_url'] = 'URL de Video';
$string['vimeo_url_help'] = 'URL completa de video Vimeo, video YouTube, o un archivo de audio o video externo.';
$string['vimeo_url_invalid'] = 'La URL de Vimeo es inválida. Cópiela directamente desde el navegador web.';
$string['vimeo_url_missing'] = 'No está configurada la URL de Vimeo.';
$string['vimeo_video_not_found'] = 'El video no existe en la base de datos';
$string['vimeo_video_not_processed'] = 'El video aun no ha sido completamente procesado. Por favor revíselo más tarde.';
$string['vimeodefaultsettings'] = 'Configuraciones predeterminadas de Vimeo';
$string['watch'] = 'Ver';
$string['watch_percent'] = 'Porcentaje de observación';
$string['watch_percent_help'] = 'El momento más avanzado en el video que el estudiante ha visto.';
$string['watch_time'] = 'Tiempo de observación';
$string['watch_time_help'] = 'Por cuanto tiempo en total (en pasos de 5 seg) ha visto el video el estudiante.';
$string['watchedtime'] = 'Tiempo visto';
$string['watchpercent_help'] = 'El mayor porcentaje de video visto';
$string['watchtime_help'] = 'La posición más distante vista por el usuario';
$string['with_play_button'] = 'con botón para reproducir';
