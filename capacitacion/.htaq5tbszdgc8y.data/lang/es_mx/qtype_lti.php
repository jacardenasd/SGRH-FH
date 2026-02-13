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
 * Strings for component 'qtype_lti', language 'es_mx', version '4.4'.
 *
 * @package     qtype_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar';
$string['accept_grades'] = 'Aceptar calificaciones de la herramienta';
$string['accept_grades_admin'] = 'Aceptar calificaciones de la herramienta';
$string['accept_grades_admin_help'] = 'Especifique si el proveedor de la herramienta puede agregar, actualizar, leer y eliminar calificaciones asociadas a instancias de esta herramienta.

Algunos proveedores de herramientas permiten reportar calificaciones a Moodle según las acciones realizadas en la herramienta, lo que crea una experiencia más integrada.';
$string['accept_grades_help'] = 'Especificar si el proveedor de la herramienta puede agregar, actualizar, leer y eliminar calificaciones asociadas únicamente a esta instancia externa de la herramienta.

Algunos proveedores de herramientas permiten reportar calificaciones a Moodle según las acciones realizadas en la herramienta, lo que crea una experiencia más integrada.

Tenga en cuenta que esta configuración puede anularse en la herramienta.';
$string['accepted'] = 'Aceptado';
$string['action'] = 'Acción';
$string['activate'] = 'Activar';
$string['activatetoadddescription'] = 'Necesitará activar esta herramienta antes de poder agregar una descripción.';
$string['active'] = 'Activo';
$string['activity'] = 'Actividad';
$string['addnewapp'] = 'Habilitar aplicación externa';
$string['addserver'] = 'Añadir nuevo servidor de confianza';
$string['addtype'] = 'Añadir herramienta preconfigurada';
$string['allow'] = 'Permitir';
$string['allowinstructorcustom'] = 'Permitir a los maestros agregar parámetros personalizados';
$string['allowsetting'] = 'Permitir que la herramienta almacene 8K de configuraciones en Moodle';
$string['always'] = 'Siempre';
$string['autoaddtype'] = 'Añadir herramienta';
$string['automatic'] = 'Automático, basado en la URL de la herramienta';
$string['baseurl'] = 'Nombre de registro de la herramienta/URL base';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Cadena de caracteres base de LTI OAuth';
$string['basiclti_endpoint'] = 'Punto final de lanzamiento de LTI';
$string['basiclti_in_new_window'] = 'Su actividad ha abierto en una nueva ventana';
$string['basiclti_in_new_window_open'] = 'Abrir en nueva ventana';
$string['basiclti_parameters'] = 'Parámetros de lanzamiento de LTI';
$string['basicltiactivities'] = 'Actividades LTI';
$string['basicltifieldset'] = 'Conjunto de campos de ejemplo personalizado';
$string['basicltiintro'] = 'Descripción de actividad';
$string['basicltiname'] = 'Nombre de actividad';
$string['basicltisettings'] = 'Configuraciones básicas de Learning Tool Interoperability (LTI)';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_add'] = 'Usted no puede añadir una nueva herramienta.';
$string['cannot_delete'] = 'No puedes eliminar esta configuración de la herramienta.';
$string['cannot_edit'] = 'No puede editar esta configuración de la herramienta.';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Seleccione las capacidades que desea ofrecer al proveedor de herramientas. Se puede seleccionar más de una.';
$string['capabilitiesrequired'] = 'Esta herramienta requiere acceso a los siguientes datos para activarse:';
$string['checkduplicateltiurl'] = 'Comprobar URL LTI duplicadas';
$string['checkduplicateltiurl_help'] = 'Al crear una notificación, se muestra cuando la URL LTI ingresada ya está en uso en otro lugar del sistema.';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Haga clic para continuar</a>';
$string['comment'] = 'Comentario';
$string['configpassword'] = 'Contraseña predeterminada de herramienta remota';
$string['configpreferheight'] = 'Altura predeterminada preferida';
$string['configpreferwidget'] = 'Configurar widget como launch predeterminada';
$string['configpreferwidth'] = 'Ancho predeterminado preferido';
$string['configresourceurl'] = 'URL predeterminada de Recurso';
$string['configtoolurl'] = 'URL de la herramienta remota predeterminada';
$string['configtypes'] = 'Habilitar aplicaciones LTI';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = '¿Está seguro de que desea activar esta herramienta?';
$string['contentitem'] = 'Mensaje del elemento de contenido';
$string['contentitem_help'] = 'Si está marcada, la opción \'Seleccionar contenido\' estará disponible al agregar una herramienta externa.';
$string['course_tool_types'] = 'Herramientas del curso';
$string['courseactivitiesorresources'] = 'Actividades o recursos del curso';
$string['courseid'] = 'Número ID del curso';
$string['courseinformation'] = 'Información del curso';
$string['courselink'] = 'Ir al curso';
$string['coursemisconf'] = 'El curso está mal configurado';
$string['createdon'] = 'Creado en';
$string['curllibrarymissing'] = 'La biblioteca PHP Curl debe estar instalada para usar LTI';
$string['custom'] = 'Parámetros personalizados';
$string['custom_config'] = 'Usando configuración de herramienta personalizada.';
$string['custom_help'] = 'Los parámetros personalizados son configuraciones que utiliza el proveedor de la herramienta. Por ejemplo, un parámetro personalizado puede utilizarse para mostrar un recurso específico del proveedor. Cada parámetro debe introducirse en una línea independiente con el formato "nombre=valor"; por ejemplo, "capítulo=3".

Es seguro dejar este campo sin cambios a menos que el proveedor de la herramienta lo indique.';
$string['custominstr'] = 'Parámetros personalizados';
$string['debuglaunch'] = 'Opción de depuración';
$string['debuglaunchoff'] = 'Lanzamiento normal';
$string['debuglaunchon'] = 'Lanzamiento para depuración';
$string['default'] = 'Predeterminado';
$string['default_launch_container'] = 'Contenedor de lanzamiento predeterminado';
$string['default_launch_container_help'] = 'El contenedor de inicio afecta la visualización de la herramienta al iniciarse desde el curso. Algunos contenedores de inicio proporcionan más espacio en pantalla a la herramienta, mientras que otros ofrecen una mayor integración con el entorno Moodle.

* **Pre-determinado**: Utiliza el contenedor de inicio especificado en la configuración de la herramienta.
* **Incrustar**: La herramienta se muestra dentro de la ventana de Moodle existente, de forma similar a la mayoría de los demás tipos de actividad.
* **Incrustar, sin bloques**: La herramienta se muestra dentro de la ventana de Moodle existente, con solo los controles de navegación en la parte superior de la página.
* **Nueva ventana**: La herramienta se abre en una nueva ventana, ocupando todo el espacio disponible.
Dependiendo del navegador, se abrirá en una nueva pestaña o en una ventana emergente.
Es posible que algunos navegadores impidan que se abra la nueva ventana.';
$string['delegate'] = 'Delegar al profesor';
$string['delete'] = 'Eliminar';
$string['delete_confirmation'] = '¿Está seguro de que desea eliminar esta herramienta preconfigurada?';
$string['deletetype'] = 'Eliminar herramienta preconfigurada';
$string['display_description'] = 'Mostrar la descripción de la actividad cuando se inicia';
$string['display_description_help'] = 'Si se selecciona, la descripción de la actividad (especificada anteriormente) se mostrará sobre el contenido del proveedor de la herramienta.

La descripción puede utilizarse para proporcionar instrucciones adicionales a quienes inician la herramienta, pero no es obligatoria.

La descripción nunca se muestra cuando el contenedor de inicio de la herramienta está en una ventana nueva.';
$string['display_name'] = 'Mostrar el nombre de la actividad al iniciarse';
$string['display_name_help'] = 'Si se selecciona, el nombre de la actividad (especificado anteriormente) se mostrará sobre el contenido del proveedor de la herramienta.

Es posible que el proveedor de la herramienta también muestre el título. Esta opción puede evitar que el título de la actividad se muestre dos veces.

El título nunca se muestra cuando el contenedor de inicio de la herramienta está en una nueva ventana.';
$string['domain_mismatch'] = 'El dominio de la URL de la herramienta no coincide con la configuración de la herramienta.';
$string['donot'] = 'No enviar';
$string['donotaccept'] = 'No aceptar';
$string['donotallow'] = 'No permitir';
$string['duplicateregurl'] = 'Esta URL de registro ya está en uso';
$string['editdescription'] = 'Haga clic aquí para dar una descripción a esta herramienta';
$string['edittype'] = 'Editar herramienta preconfigurada';
$string['embed'] = 'Incrustar';
$string['embed_no_blocks'] = 'Incrustar, sin bloques';
$string['enableemailnotification'] = 'Enviar Emails de notificación';
$string['enableemailnotification_help'] = 'Si esta opción está habilitada, los estudiantes recibirán una notificación por correo electrónico cuando se califiquen sus envíos de herramientas.';
$string['enterkeyandsecret'] = 'Ingrese su clave de consumidor y secreto compartido';
$string['enterkeyandsecret_help'] = 'Si le dieron una clave de consumidor y/o un secreto compartido, ingréselos aquí';
$string['enterstemhere'] = 'Introduzca aquí el título de la tarea, una pregunta o parte de una oración.';
$string['errorbadurl'] = 'La URL no es una URL de herramienta o cartucho válido.';
$string['errorincorrectconsumerkey'] = 'La clave del consumidor es incorrecta.';
$string['errorinvaliddata'] = 'Datos no válidos: {$a}';
$string['errorinvalidmediatype'] = 'Tipo de medio no válido: {$a}';
$string['errorinvalidresponseformat'] = 'Formato de respuesta de elemento de contenido no válido.';
$string['errormisconfig'] = 'Herramienta mal configurada. Solicite a su administrador de Moodle que corrija la configuración de la herramienta.';
$string['errortooltypenotfound'] = 'Tipo de herramienta LTI no encontrado.';
$string['existing_window'] = 'Ventana existente';
$string['extensions'] = 'Servicios de extensión de LTI';
$string['external_tool_type'] = 'Herramienta preconfigurada';
$string['external_tool_type_help'] = '* **Automático, según la URL de la herramienta**: La mejor configuración de la herramienta se selecciona automáticamente. Si no se reconoce la URL de la herramienta, es posible que deba ingresar manualmente los detalles de configuración.
* **Una herramienta pre-configurada específica**: La configuración de la herramienta especificada se utilizará al comunicarse con el proveedor externo de la herramienta. Si la URL de la herramienta no parece pertenecer al proveedor, se mostrará una advertencia. No siempre es necesario ingresar la URL de la herramienta.
* **Configuración personalizada**: Es posible que deba ingresar manualmente una clave de consumidor y un secreto compartido. La clave de consumidor y el secreto compartido se pueden obtener del proveedor de la herramienta. Sin embargo, no todas las herramientas requieren una clave de consumidor y un secreto compartido; en ese caso, los campos pueden dejarse en blanco.

### Edición de herramientas pre-configuradas

Hay tres iconos disponibles después de la lista desplegable de herramientas pre-configuradas:

* **Agregar**: Crea una configuración de herramienta a nivel de curso. Todas las instancias de herramientas externas de este curso pueden usar la configuración de la herramienta.
* **Editar**: Seleccione una herramienta a nivel de curso en el menú desplegable y haga clic en este icono. Se pueden editar los detalles de la configuración de la herramienta.
* **Eliminar**: Elimina la herramienta del nivel de curso seleccionado.';
$string['external_tool_types'] = 'Herramientas preconfiguradas';
$string['failedtoconnect'] = 'Moodle no pudo comunicarse con el sistema "{$a}"';
$string['failedtocreatetooltype'] = 'No se pudo crear la nueva herramienta. Por favor, revise la URL y vuelva a intentarlo.';
$string['failedtodeletetoolproxy'] = 'No se pudo eliminar el registro de la herramienta. Quizás deba acceder a "Administrar registros de herramientas externas" y eliminarlo manualmente.';
$string['filter_basiclti_configlink'] = 'Configure sus sitios preferidos y sus contraseñas';
$string['filter_basiclti_password'] = 'La contraseña es obligatoria';
$string['filterconfig'] = 'Administración de LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilice una configuración existente para la instancia mal configurada';
$string['fixnew'] = 'Nueva configuración';
$string['fixnewconf'] = 'Definir una nueva configuración para la instancia mal configurada';
$string['fixold'] = 'Usar existente';
$string['force_ssl'] = 'Forzar SSL';
$string['force_ssl_help'] = 'Al seleccionar esta opción, se obliga a que todos los inicios de sesión en este proveedor de herramientas utilicen SSL.

Además, todas las solicitudes a servicios web del proveedor de herramientas utilizarán SSL.

Si utiliza esta opción, confirme que este sitio Moodle y el proveedor de herramientas sean compatibles con SSL.';
$string['forced_help'] = 'Esta configuración se ha implementado en la configuración de una herramienta a nivel de curso o sitio. No se puede cambiar desde esta interfaz.';
$string['generalfeedback'] = 'Retroalimentación general.';
$string['generalfeedback_help'] = 'Se muestra la misma retroalimentación general independientemente de la respuesta elegida.';
$string['generaltool'] = 'Herramienta general';
$string['global_tool_types'] = 'Herramientas globales preconfiguradas';
$string['grading'] = 'Ruta de calificación';
$string['icon_url'] = 'URL del ícono';
$string['icon_url_help'] = 'La URL del icono permite modificar el icono que aparece en la lista de cursos para esta actividad. En lugar de usar el icono LTI predeterminado, se puede especificar un icono que indique el tipo de actividad.';
$string['id'] = 'id';
$string['invalidid'] = 'El ID de LTI era incorrecto';
$string['launch_in_moodle'] = 'Invocar herramienta en Moodle';
$string['launch_in_popup'] = 'Invocar herramienta en una ventana emergente';
$string['launch_url'] = 'URL de herramienta';
$string['launch_url_help'] = 'La URL de la herramienta indica la dirección web de la herramienta externa y puede contener información adicional, como el recurso que se mostrará. Si no está seguro de qué URL debe introducir, consulte con el proveedor para obtener más información.

Puede introducir la URL de un cartucho si dispone de uno; el resto del formato se completará automáticamente.

Si ha seleccionado una herramienta pre-configurada, es posible que no necesite introducir la URL. Si el enlace de la herramienta se utiliza solo para acceder al sistema del proveedor y no para acceder a un recurso específico, probablemente sea así.';
$string['launchinpopup'] = 'Contenedor de lanzamiento';
$string['launchinpopup_help'] = 'El contenedor de inicio afecta la visualización de la herramienta al iniciarse desde el curso. Algunos contenedores de inicio proporcionan más espacio en pantalla a la herramienta, mientras que otros ofrecen una mayor integración con el entorno Moodle.

* **Pre-determinado**: Utiliza el contenedor de inicio especificado en la configuración de la herramienta.
* **Incrustar**: La herramienta se muestra dentro de la ventana de Moodle existente, de forma similar a la mayoría de los demás tipos de actividad.
* **Incrustar, sin bloques**: La herramienta se muestra dentro de la ventana de Moodle existente, con solo los controles de navegación en la parte superior de la página.
* **Nueva ventana**: La herramienta se abre en una nueva ventana, ocupando todo el espacio disponible.
Dependiendo del navegador, se abrirá en una nueva pestaña o en una ventana emergente.
Es posible que algunos navegadores impidan que se abra la nueva ventana.';
$string['launchoptions'] = 'Opciones de lanzamiento';
$string['leaveblank'] = 'Deja en blanco si no los necesitas.';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Agregar configuraciones de herramientas específicas del curso';
$string['lti:adddefaultinstance'] = 'Agregar una herramienta no configurada globalmente';
$string['lti:addgloballypreconfigedtoolinstance'] = 'Agregar una herramienta preconfigurada globalmente';
$string['lti:addinstance'] = 'Agregar nuevas actividades de herramientas externas';
$string['lti:admin'] = 'Administración de LTI qtype';
$string['lti:backupcourse'] = 'Respaldo de seguridad del curso LTI qtype por ID del curso';
$string['lti:grade'] = 'Ver las calificaciones devueltas por la herramienta externa';
$string['lti:manage'] = 'Ser instructor cuando se lance la herramienta';
$string['lti:regradelti'] = 'Recalificación del examen LTI qtype por ID del examen';
$string['lti:requesttooladd'] = 'Solicitar que una herramienta esté configurada para todo el sitio';
$string['lti:view'] = 'Lanzar actividades de herramientas externas';
$string['lti_administration'] = 'Editar herramienta pre-configurada';
$string['lti_errormsg'] = 'La herramienta devolvió el siguiente mensaje de error: "{$a}"';
$string['lti_launch_error'] = 'Se produjo un error al iniciar la herramienta externa:';
$string['lti_launch_error_tool_request'] = '<p>
Para solicitar que un administrador complete la configuración de la herramienta, haga clic <a href="{$a->admin_request_url}" target="_top">aquí</a>.
</p>';
$string['lti_launch_error_unsigned_help'] = 'Este error puede deberse a la falta de una clave de consumidor y un secreto compartido para el proveedor de herramientas. Si tiene una clave de consumidor y un secreto compartido, puede ingresarlos al editar la instancia de la herramienta externa (asegúrese de que las opciones avanzadas estén visibles). Como alternativa, puede <a href="{$a->course_tool_editor}">crear una configuración de proveedor de herramientas a nivel de curso</a>.';
$string['lti_tool_request_added'] = 'Solicitud de configuración de la herramienta enviada correctamente. Es posible que deba contactar a un administrador para completar la configuración.';
$string['lti_tool_request_existing'] = 'Ya se ha enviado una configuración de herramienta para el dominio de herramientas.';
$string['ltisettings'] = 'configuraciones de LTI';
$string['ltiunknownserviceapicall'] = 'Llamada API de servicio desconocido de LTI.';
$string['main_admin'] = 'Ayuda general';
$string['main_admin_help'] = 'Las herramientas externas permiten a los usuarios de Moodle interactuar ágilmente con los recursos de aprendizaje alojados remotamente. Mediante un protocolo de lanzamiento especial, la herramienta remota tendrá acceso a información general del usuario que la inicia. Por ejemplo, el nombre de la institución, el ID del curso, el ID del usuario y otra información como el nombre o la dirección de correo electrónico del usuario.

Las herramientas listadas en esta página se dividen en tres categorías:

* **Activas**: Estos proveedores de herramientas han sido aprobados y configurados por un administrador. Se pueden usar desde cualquier curso en esta instancia de Moodle. Si se introducen una clave de consumidor y un secreto compartido, se establece una relación de confianza entre esta instancia de Moodle y la herramienta remota, lo que proporciona un canal de comunicación seguro.

* **Pendientes**: Estos proveedores de herramientas se importaron mediante una importación de paquetes, pero no han sido configurados por un administrador.
Los profesores pueden seguir usando las herramientas de estos proveedores si disponen de una clave de consumidor y un secreto compartido, o si no se requiere ninguno.

* **Rechazadas**: Estos proveedores de herramientas se marcan como aquellos que el administrador no tiene intención de poner a disposición de toda la instancia de Moodle. Los profesores aún pueden usar herramientas de estos proveedores si tienen una clave de consumidor y un secreto compartido, o si no se requiere ninguno.';
$string['manage_external_tools'] = 'Administrar herramientas externas de LTI Qtype';
$string['manage_tool_proxies'] = 'Administrar servidores proxy de herramientas externas de tipo qtype de LTI';
$string['manage_tools'] = 'Administrar herramientas preconfiguradas de tipo qtype de LTI';
$string['manuallyaddtype'] = 'Alternativamente, puede <a href="{$a}">configurar una herramienta manualmente</a>.';
$string['maxpoints'] = 'Puntos Máximos';
$string['miscellaneous'] = 'Misceláneos';
$string['misconfiguredtools'] = 'Se detectaron instancias de herramientas mal configuradas';
$string['missingparameterserror'] = 'La página está mal configurada: "{$a}"';
$string['module_class_type'] = 'Tipo de módulo de Moodle';
$string['modulename'] = 'Herramienta externa';
$string['modulename_help'] = 'El módulo de actividades de herramientas externas permite a los estudiantes interactuar con recursos y actividades de aprendizaje en otros sitios web. Por ejemplo, una herramienta externa podría proporcionar acceso a un nuevo tipo de actividad o materiales de aprendizaje de un publicador o una casa editorial.

Para crear una actividad de herramientas externas, se requiere un proveedor compatible con LTI (Interoperabilidad de Herramientas de Aprendizaje). Un profesor puede crear una actividad de herramientas externas o utilizar una herramienta configurada por el administrador del sitio.

Las actividades de herramientas externas se diferencian de los recursos URL en varios aspectos:

* Las herramientas externas son contextuales, es decir, tienen acceso a información sobre el usuario que la inició, como la institución, el curso y el nombre.
* Las herramientas externas permiten leer, actualizar y eliminar las calificaciones asociadas a la actividad.
* Las configuraciones de herramientas externas crean una relación de confianza entre el sitio y el proveedor de la herramienta, lo que permite una comunicación segura entre ellos.';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Herramientas externas';
$string['modulenamepluralformatted'] = 'Instancias LTI';
$string['name'] = 'Nombre';
$string['never'] = 'Nunca';
$string['new_window'] = 'Nueva ventana';
$string['no_lti_configured'] = 'No hay herramientas externas activas configuradas.';
$string['no_lti_pending'] = 'No hay herramientas externas pendientes.';
$string['no_lti_rejected'] = 'No hay herramientas externas rechazadas.';
$string['no_lti_tools'] = 'No hay herramientas externas configuradas.';
$string['no_tp_accepted'] = 'No hay registros de herramientas externas aceptadas.';
$string['no_tp_cancelled'] = 'No hay registros de herramientas externas canceladas.';
$string['no_tp_configured'] = 'No hay registros de herramientas externas no registradas configuradas.';
$string['no_tp_pending'] = 'No hay registros de herramientas externas pendientes.';
$string['no_tp_rejected'] = 'No hay registros de herramientas externas rechazados.';
$string['noattempts'] = 'No se han realizado intentos en esta instancia de herramienta.';
$string['noltis'] = 'No hay instancias de herramientas externas';
$string['noprofileservice'] = 'Servicio de perfil no encontrado';
$string['noservers'] = 'No se encontraron servidores';
$string['notypes'] = 'Actualmente no hay herramientas LTI configuradas en Moodle. Haga clic en el enlace "Instalar" (arriba) para agregar algunas.';
$string['noviewusers'] = 'No se encontraron usuarios con permisos para utilizar esta herramienta.';
$string['optionalsettings'] = 'Configuraciones opcionales';
$string['organization'] = 'Detalles de la organización';
$string['organizationdescr'] = 'Descripción de la organización';
$string['organizationid'] = 'ID de la organización';
$string['organizationid_help'] = 'Un identificador único para esta instancia de Moodle. Normalmente, se utiliza el nombre DNS de la organización.

Si este campo se deja en blanco, se utilizará el nombre de host de este sitio Moodle como valor predeterminado.';
$string['organizationurl'] = 'URL de la organización';
$string['organizationurl_help'] = 'La URL base de esta instancia de Moodle.

Si este campo se deja en blanco, se utilizará un valor predeterminado según la configuración del sitio.';
$string['pagesize'] = 'Envíos mostrados por página';
$string['parameter'] = 'Parámetros de la herramienta';
$string['parameter_help'] = 'Los parámetros de la herramienta son configuraciones que el proveedor de la herramienta debe pasar en el proxy de herramienta aceptado.';
$string['password'] = 'Secreto compartido';
$string['password_admin'] = 'Secreto compartido';
$string['password_admin_help'] = 'El secreto compartido puede considerarse una contraseña que se utiliza para autenticar el acceso a la herramienta. Debe proporcionarse junto con la clave de usuario del proveedor de la herramienta.

Las herramientas que no requieren comunicación segura con Moodle ni ofrecen servicios adicionales (como informes de calificaciones) podrían no requerir un secreto compartido.';
$string['password_help'] = 'Para las herramientas preconfiguradas, no es necesario introducir aquí una clave secreta compartida, ya que esta se proporcionará como parte del proceso de configuración.

Este campo debe completarse si se crea un enlace a un proveedor de herramientas que no esté configurado. Si el proveedor de herramientas se va a utilizar más de una vez en este curso, es recomendable añadir una configuración de la herramienta del curso.

La clave secreta compartida puede considerarse como una contraseña que se utiliza para autenticar el acceso a la herramienta. Debe proporcionarse junto con la clave de usuario del proveedor de la herramienta.

Las herramientas que no requieren comunicación segura con Moodle ni ofrecen servicios adicionales (como el informe de calificaciones) podrían no requerir una clave secreta compartida.';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de herramienta externa';
$string['pluginname'] = 'Tipo de pregunta externa (ETH)';
$string['pluginname_help'] = 'Con los tipos de preguntas externas se incluyen preguntas o tareas de otras herramientas en Moodle.';
$string['pluginname_link'] = 'question/type/lti';
$string['pluginnameadding'] = 'Agregando un tipo de pregunta Externa';
$string['pluginnameediting'] = 'Editando un tipo de pregunta Externa';
$string['pluginnamesummary'] = 'Con el tipo de pregunta externa, uno puede conectarse a una pregunta o tarea creada en una herramienta diferente.';
$string['preferheight'] = 'Altura preferida';
$string['preferwidget'] = 'Preferir widget launch';
$string['preferwidth'] = 'Ancho preferido';
$string['press_to_submit'] = 'Presione para iniciar esta actividad';
$string['privacy'] = 'Privacidad';
$string['privacy:metadata:coursefullname'] = 'El nombre completo del curso desde el cual el usuario accede al consumidor LTI';
$string['privacy:metadata:courseid'] = 'El ID del curso desde el cual el usuario accede al consumidor LTI';
$string['privacy:metadata:courseidnumber'] = 'El número ID del curso desde el cual el usuario accede al LTI Consumer';
$string['privacy:metadata:courseshortname'] = 'El nombre corto del curso desde el cual el usuario accede al consumidor LTI';
$string['privacy:metadata:createdby'] = 'El usuario que creó el registro.';
$string['privacy:metadata:email'] = 'La dirección de correo electrónico del usuario que accede al LTI Consumer';
$string['privacy:metadata:externalpurpose'] = 'El consumidor LTI proporciona información del usuario y contexto al proveedor de herramientas LTI.';
$string['privacy:metadata:firstname'] = 'El nombre del usuario que accede al consumidor LTI';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario que accede al consumidor LTI.';
$string['privacy:metadata:lastname'] = 'El apellido del usuario que accede al LTI Consumer';
$string['privacy:metadata:role'] = 'El rol en el curso para el usuario que accede al Consumidor LTI';
$string['privacy:metadata:userid'] = 'El ID del usuario que accede al consumidor LTI.';
$string['privacy:metadata:useridnumber'] = 'El número ID del usuario que accede al consumidor LTI';
$string['privacy:metadata:username'] = 'El nombre de usuario del usuario que accede al consumidor LTI.';
$string['quickgrade'] = 'Permitir calificado rápido';
$string['quickgrade_help'] = 'Si esta opción está habilitada, se pueden calificar varias herramientas en una misma página. Agregue calificaciones y comentarios y haga clic en el botón "Guardar todos mis comentarios" para guardar todos los cambios en esa página.';
$string['redirect'] = 'Será redirigido en unos segundos. Si no, pulse el botón.';
$string['register'] = 'Registrar';
$string['register_warning'] = 'La página de registro parece tardar en abrirse. Si no aparece, compruebe que haya introducido la URL correcta en la configuración. Si Moodle usa https, asegúrese de que la herramienta que está configurando sea compatible con https y de que esté usando https en la URL.';
$string['registertype'] = 'Configurar un nuevo registro de herramienta externa';
$string['registration_options'] = 'Opciones de registro';
$string['registrationname'] = 'Nombre del proveedor de la herramienta';
$string['registrationname_help'] = 'Introduzca el nombre del proveedor de la herramienta que se va a registrar.';
$string['registrationurl'] = 'URL de registro';
$string['registrationurl_help'] = 'La URL de registro debe estar disponible en el proveedor de la herramienta como la ubicación a la que deben enviarse las solicitudes de registro.';
$string['reject'] = 'Rechazar';
$string['rejected'] = 'Rechazado';
$string['removerestoredlink'] = 'Eliminar la URL de la herramienta LTI al restaurar';
$string['removerestoredlink_help'] = 'Al activar esta opción, se eliminará la URL de la herramienta de cada pregunta restaurada. Tenga en cuenta que esta opción no eliminará la conexión con el proveedor de la herramienta.';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Clave del consumidor';
$string['resourcekey_admin'] = 'Clave del consumidor';
$string['resourcekey_admin_help'] = 'La clave de usuario puede considerarse como un nombre de usuario que se utiliza para autenticar el acceso a la herramienta.
El proveedor de la herramienta puede usarla para identificar de forma única el sitio Moodle desde el que los usuarios acceden a la herramienta.

El proveedor de la herramienta debe proporcionar la clave de usuario. El método para obtenerla varía según el proveedor. Puede ser un proceso automatizado o requerir una comunicación con el proveedor.

Las herramientas que no requieren comunicación segura con Moodle ni ofrecen servicios adicionales (como informes de calificaciones) podrían no requerir una clave de recurso.';
$string['resourcekey_help'] = 'Para las herramientas pre-configuradas, no es necesario introducir una clave de recurso aquí, ya que la clave de consumidor se proporcionará como parte del proceso de configuración.

Este campo debe completarse si se crea un enlace a un proveedor de herramientas que no esté configurado.
Si el proveedor de herramientas se va a utilizar más de una vez en este curso, es recomendable añadir una configuración de la herramienta del curso.

La clave de consumidor puede considerarse como un nombre de usuario que se utiliza para autenticar el acceso a la herramienta.
El proveedor de la herramienta puede utilizarla para identificar de forma única el sitio Moodle desde el que los usuarios acceden a la herramienta.

El proveedor de la herramienta debe proporcionar la clave de consumidor. El método para obtener una clave de consumidor varía según el proveedor de la herramienta. Puede ser un proceso automatizado o requerir una consulta con el proveedor.

Las herramientas que no requieren comunicación segura con Moodle ni ofrecen servicios adicionales (como informes de calificaciones) podrían no requerir una clave de recurso.';
$string['resourceurl'] = 'URL del recurso';
$string['return_to_course'] = 'Haga clic <a href="{$a->link}" target="_top">aquí</a> para regresar al curso.';
$string['reviewmode'] = 'En modo rvisión';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['search:activity'] = 'Herramienta externa - información de la actividad';
$string['secure_icon_url'] = 'URL segura del ícono';
$string['secure_icon_url_help'] = 'Similar a la URL del icono, pero se usa si el usuario accede a Moodle de forma segura mediante SSL. El objetivo principal de este campo es evitar que el navegador advierta al usuario si se accedió a la página subyacente mediante SSL, pero solicita mostrar una imagen no segura.';
$string['secure_launch_url'] = 'URL de herramienta segura';
$string['secure_launch_url_help'] = 'Similar a la URL de la herramienta, pero se usa en lugar de la URL de la herramienta si se requiere alta seguridad. Moodle usará la URL segura de la herramienta en lugar de la URL de la herramienta si se accede al sitio Moodle mediante SSL o si la herramienta está configurada para iniciarse siempre mediante SSL.

La URL de la herramienta también puede configurarse como una dirección https para forzar el inicio mediante SSL; este campo puede dejarse en blanco.';
$string['selectcontent'] = 'Enviar contenido';
$string['send'] = 'Enviar';
$string['services'] = 'Servicios';
$string['services_help'] = 'Seleccione los servicios que desea ofrecer al proveedor de herramientas. Puede seleccionar más de un servicio.';
$string['setupoptions'] = 'Configurar opciones';
$string['share_email'] = 'Compartir el correo electrónico del lanzador con la herramienta';
$string['share_email_admin'] = 'Compartir el correo electrónico del lanzador con herramienta';
$string['share_email_admin_help'] = 'Especifiqcar si la dirección de correo electrónico del usuario que inicia la herramienta se compartirá con el proveedor de la misma.
El proveedor de la herramienta podría necesitar las direcciones de correo electrónico del usuario que inicia la herramienta para distinguir a los usuarios con el mismo nombre en la interfaz de usuario o para enviar correos electrónicos a los usuarios según sus acciones en la herramienta.';
$string['share_email_help'] = 'Especificar si la dirección de correo electrónico del usuario que inicia la herramienta se compartirá con el proveedor de la misma.

El proveedor de la herramienta podría necesitar las direcciones de correo electrónico del usuario que inicia la herramienta para distinguir a los usuarios con el mismo nombre o para enviarles correos electrónicos según sus acciones.

Tenga en cuenta que esta configuración puede anularse en la herramienta.';
$string['share_name'] = 'Compartir el nombre del lanzador con la herramienta';
$string['share_name_admin'] = 'Compartir el nombre del lanzador con la herramienta';
$string['share_name_admin_help'] = 'Especifique si se debe compartir con el proveedor de la herramienta el nombre completo del usuario que inicia la herramienta.
El proveedor de la herramienta podría necesitar los nombres de los lanzadores para mostrar información relevante dentro de la herramienta.';
$string['share_name_help'] = 'Especificar si se debe compartir con el proveedor de la herramienta el nombre completo del usuario que inicia la herramienta.

El proveedor de la herramienta podría necesitar los nombres de los lanzadores para mostrar información relevante dentro de la herramienta.

Tenga en cuenta que esta configuración puede anularse en la herramienta.';
$string['share_roster'] = 'Permitir que la herramienta acceda a la lista de inscritos de este curso';
$string['share_roster_admin'] = 'La herramienta puede acceder a la lista de inscritos del curso';
$string['share_roster_admin_help'] = 'Especifique si la herramienta puede acceder a la lista de usuarios inscritos en los cursos desde los que se inicia esta herramienta.';
$string['share_roster_help'] = 'Especificar si la herramienta puede acceder a la lista de usuarios inscritos en este curso.

Tenga en cuenta que esta configuración puede anularse en la herramienta.';
$string['show_in_course_activity_chooser'] = 'Mostrar en el selector de actividades y como herramienta preconfigurada';
$string['show_in_course_lti1'] = 'Uso de la configuración de herramientas';
$string['show_in_course_lti1_help'] = 'Esta herramienta puede ser mostrada en el selector de actividades para que el profesor la seleccione y la añada a un curso. También puede aparecer en el menú desplegable de herramientas pre-configuradas al añadir una herramienta externa a un curso. Otra opción es que la configuración de la herramienta solo se utilice si se introduce la URL exacta de la herramienta al añadir una herramienta externa a un curso.';
$string['show_in_course_lti2'] = 'Uso de la configuración de herramientas';
$string['show_in_course_lti2_help'] = 'Esta herramienta se puede mostrar en el selector de actividades para que un profesor seleccione agregarla a un curso o en el menú desplegable de herramientas pre-configuradas al agregar una herramienta externa a un curso.';
$string['show_in_course_no'] = 'No mostrar; usar solo cuando se ingrese una URL de herramienta coincidente';
$string['show_in_course_preconfigured'] = 'Mostrar como herramienta pre-configurada al agregar una herramienta externa';
$string['size'] = 'Parámetros de tamaño';
$string['stem'] = 'Tronco';
$string['submission'] = 'Envío';
$string['submissions'] = 'Envíos';
$string['submissionsfor'] = 'Envíos para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso de servicio LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos de servicio de LTI';
$string['subplugintype_ltiservice'] = 'servicio LTI';
$string['subplugintype_ltiservice_plural'] = 'servicios LTI';
$string['subplugintype_ltisource'] = 'orígen LTI';
$string['subplugintype_ltisource_plural'] = 'orígenes LTI';
$string['successfullycreatedtooltype'] = '¡Nueva herramienta creada exitosamente!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Se obtuvo exitosamente la configuración de la herramienta del contenido seleccionado.';
$string['tasktitle'] = 'Título de la tarea';
$string['toggle_debug_data'] = 'Alternar datos de depuración';
$string['tool_config_duplicate_url'] = 'Esta URL de herramienta ya se usó en otra pregunta. ¿Seguro que desea usarla de todos modos? Tenga en cuenta que usarla varias veces puede causar problemas.';
$string['tool_config_not_found'] = 'Configuración de herramienta no encontrada para esta URL.';
$string['tool_config_not_valid'] = 'Se detectó la configuración de "{$a->toolname}". Sin embargo, esta configuración requiere "{$a->verifytoolurl}" como parte de la URL de la herramienta.';
$string['tool_settings'] = 'Configuración de herramienta';
$string['tooldescription'] = 'Descripción de herramienta';
$string['tooldescription_help'] = 'La descripción de la herramienta que se mostrará a los profesores en la lista de actividades.

Debe describir para qué sirve la herramienta, qué hace y cualquier información adicional que el profesorado pueda necesitar.';
$string['toolisbeingused'] = 'Esta herramienta se está utilizando {$a} veces';
$string['toolisnotbeingused'] = 'Esta herramienta aún no se ha utilizado';
$string['toolproxy'] = 'Registros de herramienta externa';
$string['toolproxy_help'] = 'Los registros de herramientas externas permiten a los administradores de sitios Moodle configurar herramientas externas desde un proxy de herramientas obtenido de un proveedor compatible con LTI 2.0. Para iniciar el proceso, basta con una URL de registro proporcionada por el proveedor de herramientas. Las capacidades y los servicios ofrecidos al proveedor de herramientas se seleccionan al configurar un nuevo registro.

Los registros de herramientas que se muestran en esta página se dividen en cuatro categorías:

* **Configurado**: Estos registros de herramientas se han configurado, pero el proceso de registro aún no se ha iniciado.
* **Pendiente**: El proceso de registro de estas herramientas se ha iniciado, pero no se ha completado. Abra y guarde la configuración para volver a la categoría "Configurado".
* **Aceptado**: Estos registros de herramientas se han aprobado; los recursos especificados en el proxy de herramientas aparecerán en la página de herramientas pre-configuradas con el estado inicial "Pendiente".
* **Rechazado**: Estos registros de herramientas fueron rechazados durante el proceso de registro. Abra y guarde la configuración para volver a la categoría "Configurado" y así poder reiniciar el proceso de registro.';
$string['toolproxyregistration'] = 'Registro de herramienta externa';
$string['toolregistration'] = 'Registro de herramienta externa';
$string['toolsetup'] = 'Configuración de herramienta externa';
$string['tooltypeadded'] = 'Herramienta pre-configurada añadida';
$string['tooltypedeleted'] = 'Herramienta pre-configurada eliminada';
$string['tooltypenotdeleted'] = 'No se pudo eliminar la herramienta pre-configurada';
$string['tooltypes'] = 'Herramientas';
$string['tooltypeupdated'] = 'Herramienta pre-configurada actualizada';
$string['toolurl'] = 'URL de herramienta';
$string['toolurl_help'] = 'La URL de la herramienta se utiliza para que las URL de las herramientas coincidan con la configuración correcta. Prefijar la URL con http(s) es opcional.

Además, la URL base se utiliza como URL de la herramienta si no se especifica una en la instancia externa de la herramienta.

Por ejemplo, una URL base de *tool.com* coincidiría con lo siguiente:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

Una URL base de *www.tool.com/quizzes* coincidiría con lo siguiente:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

Una URL base de *quiz.tool.com* coincidiría con lo siguiente:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Si hay dos configuraciones de herramientas diferentes para el mismo dominio, se utilizará la más específica.

También puede insertar una URL de cartucho si dispone de una y los detalles de la herramienta se completarán automáticamente.';
$string['toolurlplaceholder'] = 'URL de la herramienta...';
$string['typename'] = 'Nombre de la herramienta';
$string['typename_help'] = 'El nombre de la herramienta se utiliza para identificar al proveedor dentro de Moodle. El nombre introducido será visible para los profesores al añadir herramientas externas a los cursos.';
$string['types'] = 'Tipos';
$string['unabletocreatetooltype'] = 'No se puede crear la herramienta';
$string['unabletofindtooltype'] = 'No se puede encontrar la herramienta para {$a->id}';
$string['unknownstate'] = 'Estado desconocido';
$string['unlockabletoolurl'] = 'URL de herramienta desbloqueable';
$string['unlockabletoolurl_edit'] = 'Desbloquear URL de la herramienta';
$string['unlockabletoolurl_edit_help'] = 'Desbloquea la URL de la herramienta para editarla';
$string['unlockabletoolurl_help'] = 'Una vez creada una pregunta, la URL de la herramienta ya no se puede cambiar por defecto. Sin embargo, si esta opción está activada, es posible desbloquear la URL de la herramienta marcando una casilla al editar una pregunta. Esta casilla se muestra por defecto junto al campo de entrada de la URL de la herramienta. Si la opción "Avanzado" está activada, se mostrará en "Mostrar más...".';
$string['update'] = 'Actualizar';
$string['useraccountinformation'] = 'Información de cuenta del usuario';
$string['userfield_optional'] = 'Campo de perfil adicional (opcional)';
$string['userfield_optional_help'] = 'Seleccione un campo de perfil de usuario adicional para el proveedor LTI externo. (Los campos de usuario opcionales ya existen con una nueva instalación de Moodle).';
$string['userfield_optional_short'] = 'Campo de perfil opcional';
$string['userfield_other'] = 'Campo de perfil adicional (otro)';
$string['userfield_other_help'] = 'Seleccionar campo de perfil de usuario adicional para proveedor LTI externo';
$string['userfield_other_short'] = 'Otro campo de perfil';
$string['userpersonalinformation'] = 'Información personal del usuario';
$string['using_tool_cartridge'] = 'Usando cartucho de herramienta';
$string['using_tool_configuration'] = 'Usando configuración de herramienta';
$string['validurl'] = 'Una URL válida debe comenzar con http(s)://';
$string['verifyltiurl'] = 'Verificación de URL de la herramienta';
$string['verifyltiurl_help'] = 'Cuando se reconoce esta configuración al crear una pregunta, se verifica que la URL de la herramienta introducida cumpla con esta expresión. Si este campo permanece vacío (predeterminado), no se realizará ninguna verificación.';
$string['viewsubmissions'] = 'Ver pantalla de envíos y calificación';
$string['whichadditionalfield'] = 'Enviar campo adicional al proveedor de LTI';
$string['whichadditionalfield_help'] = 'Elija uno de los dos campos de arriba para enviarlo como campo adicional al proveedor de LTI.';
