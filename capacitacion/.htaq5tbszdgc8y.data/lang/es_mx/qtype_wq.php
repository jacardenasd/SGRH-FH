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
 * Strings for component 'qtype_wq', language 'es_mx', version '4.4'.
 *
 * @package     qtype_wq
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_provider_enabled'] = 'Control de acceso';
$string['access_provider_enabled_help'] = 'Si se habilita, solamente los usuarios autenticados tendrán acceso a servicios Wiris.';
$string['addingwq'] = 'Añadiendo una pregunta de Exámenes genéricos Wiris';
$string['auxiliar_text'] = 'Escriba un razonamiento opcional para su respuesta.';
$string['cachedef_images'] = 'Imágenes de Exámenes Wiris';
$string['cachedir'] = 'CACHE_DIR:';
$string['compatibility_settings'] = 'Configuraciones de compatibilidad';
$string['compatibility_settings_text'] = '';
$string['connectionsettings'] = 'Configuraciones de conexión';
$string['connectionsettings_text'] = '';
$string['corruptquestion_attempt'] = 'La pregunta {$a->questionname} está dañada y no se pudo cargar. Comuníquese con su profesor para que pueda solucionarlo.';
$string['corruptquestion_edit'] = 'ADVERTENCIA: Esta pregunta se corrompió y sus datos matemáticos se perdieron de la base de datos. Intentamos restaurar todo lo que pudimos, pero debe reconstruir el algoritmo CalcMe si su pregunta tenía uno, y cualquier opción de entrada personalizada y opciones de validación. Comuníquese con su administrador para obtener más información.';
$string['debug_mode_enabled'] = 'Modo de depuración';
$string['debug_mode_enabled_help'] = 'Habilita modo de depuración, que imprime información adicional que podría ayudar al equipo de WIRIS a resolver problemas. NO lo habilite a menos que se lo solicite el equipo de WIRIS.';
$string['editingwq'] = 'Editando una pregunta de Exámenes genéricos Wiris';
$string['error'] = 'ERROR';
$string['failedtoloadwirisquizzesfromxml'] = 'Falló al cargar definición XML de Exámenes Wiris quizzes para pregunta con ID';
$string['filtercodes_compatibility_enabled'] = 'Compatibilidad con filtro de Filtrar Códigos';
$string['filtercodes_compatibility_enabled_help'] = 'El filtro Filtrar Códigos no es compatible con ciertas características de WirisQuizzes si lo opción para "Escapar marcas" está seleccionada. El habilitar esta opción resuelve el problema de compatibilidad. NO lo habilite en ninguna otra situación.';
$string['info_disabled'] = 'DESHABILITADO';
$string['info_enabled'] = 'HABILITADO';
$string['info_information'] = 'Para más información, o si Usted tuviera dudas, póngase en contacto con el soporte Wiris:';
$string['info_maintitle'] = 'Página de prueba de Exámenes Wiris';
$string['info_tableheader_report'] = 'Reporte';
$string['info_tableheader_status'] = 'Estatus';
$string['info_tableheader_test'] = 'Prueba';
$string['info_test10_name'] = 'Revisando la funcionalidad de Exámenes Wiris (variable)';
$string['info_test11_name'] = 'Revisando la funcionalidad de Exámenes Wiris (gráfica)';
$string['info_test12_name'] = 'Máximas conexiones del servidor';
$string['info_test12_rt1'] = 'Actualmente hay %s conexiones concurrentes activas de un máximo de  %s. El mayor número de conexiones concurrentes es  %s.';
$string['info_test12_rt2'] = 'Error con el sistema de seguridad de conexiones máximas. Vea detalles: <br/><pre>%s<br/>%s</pre>';
$string['info_test1_name'] = 'Versión de Exámenes Wiris';
$string['info_test1_rt1'] = 'La Versión de Exámenes Wiris es';
$string['info_test1_rt2'] = 'Imposible encontrar versión de exámenes Wiris.';
$string['info_test2_info'] = 'Revisar filtro MathType';
$string['info_test2_infopage'] = 'página de información';
$string['info_test2_name'] = 'Versión de filtro MathType';
$string['info_test2_rt1'] = 'Filtro MathType está instalado apropiadamente.';
$string['info_test2_rt2'] = 'Exámenes Wiris requiere filtro MathType 3.17.20 o mayor. Su versión es';
$string['info_test2_rt3'] = 'Imposible encontrar archivo de versión de filtro MathType.';
$string['info_test3_name'] = 'Versión de Moodle';
$string['info_test3_rt1'] = 'Su versión de Moodle es suficientemente nueva.';
$string['info_test3_rt2'] = 'Su versión de Moodle es %s. Exámenes Wiris no puede funcionar correctamente con versiones de Moodle anteriores a 2011060313';
$string['info_test3_rt3'] = 'Imposible encontrar archivo de versión de Moodle.';
$string['info_test4_name'] = 'Plugins';
$string['info_test4_pluginname1'] = 'Tipo de pregunta Falso/Verdadero';
$string['info_test4_pluginname2'] = 'Tipo de pregunta de Respuesta Corta';
$string['info_test4_pluginname3'] = 'Tipo de pregunta incrustada (CLOZE)';
$string['info_test4_pluginname4'] = 'Tipo de pregunta de Opción Múltiple';
$string['info_test4_pluginname5'] = 'Tipo de pregunta de Relacionar Columnas';
$string['info_test4_pluginname6'] = 'Tipo de pregunta de Ensayo';
$string['info_test4_pluginname7'] = 'Tipos de pregunta comunes';
$string['info_test4_rt1'] = 'Los siguientes tipos de pregunta de Exámenes Wiris están instalados:';
$string['info_test4_rt2'] = 'Los siguientes tipos de pregunta de Exámenes Wiris están faltantes:';
$string['info_test4_rt3'] = 'Instalar';
$string['info_test5_name'] = 'Base de Datos';
$string['info_test5_rt1'] = 'Todas las tablas están presentes.';
$string['info_test5_rt2'] = 'Falta una o más tablas';
$string['info_test6_name'] = 'Exámenes Wiris';
$string['info_test7_name'] = 'Revisando configuración';
$string['info_test8_name'] = 'Revisando si el servidor está alcanzable';
$string['info_test8_rt1'] = 'Connectando a %s al puerto %s';
$string['info_test9_name'] = 'Servicio de preguntas Wiris';
$string['log_server_errors'] = 'Registrar errores del servidor';
$string['log_server_errors_help'] = 'Registra en las bitácotas del servidor los errores que provienen del servicio WirisQuizzes y otros errores que se producen al procesar las preguntas de WirisQuizzes. Esto puede provocar un aumento en el tamaño de los archivos de bitácoras, pero puede ayudar al equipo de Wiris a solucionar problemas.';
$string['mathjax_compatibity'] = 'Compatibilidad con MathJax';
$string['mathjax_compatibity_help'] = '(Experimental) Habilita la compatibilidad con MathJax. Esta opción solo es necesaria si desea usar MathJax en lugar de MathType para renderizar fórmulas LaTeX en las preguntas de WirisQuizzes. Las fórmulas creadas con MathType o WirisQuizzes se seguirán renderizando con MathType. Para un rendimiento óptimo, recomendamos usar MathType para renderizar todas las fórmulas.';
$string['maxconnections_disabled'] = 'Deshabilitar la protección de conexiones máximas';
$string['maxconnections_disabled_help'] = 'Desactiva el mecanismo de protección que limita el número de conexiones simultáneas al servidor WirisQuizzes. Active esta opción solo si su uso de WirisQuizzes alcanza el límite de concurrencia y tenga en cuenta que su infraestructura deberá gestionar el aumento de conexiones simultáneas a nuestro servidor.';
$string['ok'] = 'OK';
$string['pluginname'] = 'Exámenes WIRIS';
$string['pluginnamesummary'] = '';
$string['privacy:metadata:qtype_wq'] = 'Información acerca de la respuesta correcta del usuario para un tipo de pregunta dado de Exámenes Wiris';
$string['privacy:metadata:qtype_wq:question'] = 'ID del tipo de pregunta de Exámenes Wiris';
$string['privacy:metadata:qtype_wq:xml'] = 'XML de Pregunta Exámenes Wiris';
$string['proxyurl'] = 'PROXY_URL:';
$string['quizzescalcurl'] = 'URL de CalcMe';
$string['quizzescalcurl_help'] = 'URL a donde cargar la App web CalcMe.';
$string['quizzeseditorurl'] = 'URL de servicio MathType';
$string['quizzeseditorurl_help'] = 'URL en donde cargar MathType.';
$string['quizzesgraphurl'] = 'URL de herramienta de gráficas';
$string['quizzesgraphurl_help'] = 'URL a donde cargar la herramienta usada para renderizar y contestar preguntas de forma gráfica.';
$string['quizzeshandurl'] = 'URL de servicio MathType Hand';
$string['quizzeshandurl_help'] = 'URL en donde cargar el MathType Hand.';
$string['quizzesserviceurl'] = 'URL de servicio Exámenes Wiris';
$string['quizzesserviceurl_help'] = 'URL para conectar a servicio de Exámenes Wiris.';
$string['quizzeswirislauncherurl'] = 'URL de Wiris CAS JNLP';
$string['quizzeswirislauncherurl_help'] = 'URL en donde obtener el archivo JNLP para la App Wiris CAS.';
$string['quizzeswirisurl'] = 'URL de servicio Applet Wiris CAS';
$string['quizzeswirisurl_help'] = 'URL en donde cargar la Applet Wiris CAS';
$string['serviceurl'] = 'SERVICE_URL:';
$string['troubleshooting_settings'] = 'Solución de problemas';
$string['troubleshooting_settings_text'] = '';
$string['wirisquestionincorrect'] = '¡Lo sentimos! El sistema no puede generar una de las preguntas del cuestionario. Quizás haya un problema de conexión temporal en este momento o haya un problema con la configuración de la pregunta. Puedes volver a intentar completar el cuestionario sin penalización, simplemente haciendo clic en Continuar. Si este error persiste, puedes informar a tus profesores que hay un problema con la pregunta {$a->questionname}.';
$string['wirisquizzeserror'] = '¡Lo sentimos! Hubo un error en los Exámenes Wiris.';
$string['wq'] = 'Exámenes Wiris';
$string['wq_help'] = 'Ayuda para Exámenes genéricos Wiris';
$string['wqsummary'] = 'Esto añade una pregunta genérica de Exámenes Wiris. Solamente para fines de ensayo-prueba-experimento. Estará oculta aquí.';
