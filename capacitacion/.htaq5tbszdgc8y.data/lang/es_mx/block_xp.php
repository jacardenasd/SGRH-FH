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
 * Strings for component 'block_xp', language 'es_mx', version '4.4'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activityname'] = 'Nombre de actividad';
$string['activityname_help'] = 'El texto que debe contener el nombre de la actividad o que debe ser igual a él. No distingue entre mayúsculas y minúsculas.';
$string['activityoresourceis'] = 'La actividad o recurso es {$a}';
$string['addacondition'] = 'Añadir una condición';
$string['addarule'] = 'Añadir una regla';
$string['addinstructions'] = 'Añadir más información';
$string['additionalresources'] = 'Recursos adicionales';
$string['addlevel'] = 'Añadir nivel';
$string['addondeactivated'] = 'XP + deshabilitado';
$string['addondeactivatedinfo'] = 'Los complementos de XP son incompatibles entre sí, lo que provocó la desactivación de XP+. Se espera la versión {$a->localxpversion} de Level Up XP+ (local_xp).';
$string['addoninstallationerror'] = 'Estamos detectando un problema con el plugin (local_xp), que al parecer no está instalado apropiadamente. Se necesita que un administrador finalice la instalación.';
$string['addonnotactivated'] = 'El añadido no está activado.';
$string['addrulesformhelp'] = 'La última columna define la cantidad de puntos de experiencia  ganados cuando se cumple el criterio.';
$string['admindefaultrulesintro'] = 'Las reglas siguientes serán usadas como opciones por defecto para cursos en los que se añada el bloque.';
$string['admindefaultsettingsintro'] = 'Las configuraciones inferiores se usarán como predeterminadas cuando el bloque sea recién añadido a un curso. Algunas configuraciones pueden ser bloqueadas, en cuyo caso sus valores son obligatorios en todas las instancias del plugin.';
$string['admindefaultvisualsintro'] = 'Lo siguiente será usado como opciones por defecto cuando el bloque sea recién añadido a un curso.';
$string['adminnoticeaddondeactivatedmessage'] = '¡Level Up XP+ ha sido deshabilitado!

Les advertimos que Level Up XP+ se deshabilitó para evitar posibles problemas. Los plugins Level Up XP (block_xp) y Level Up XP+ (local_xp) son actualmente incompatibles. Este problema ocurre cuando XP se actualiza a una nueva versión principal mientras XP+ permanece desactualizado.

Esta incompatibilidad puede provocar pérdida de funcionalidad, errores y otras consecuencias inesperadas. Para solucionarlo, deben actualizar Level Up XP+.

- Versión de Level Up XP (block_xp): {$a->blockxpversion}
- Versión de Level Up XP+ (local_xp): {$a->localxpversion}
- Versión prevista de Level Up XP+: {$a->localxpversionexpected}

Recursos adicionales:

- [Documentación de actualización](https://docs.levelup.plus/xp/docs/upgrade)
- [Documentación de XP+ desactivada](https://docs.levelup.plus/xp/docs/addon-deactivated)
- [Documentación de compatibilidad](https://docs.levelup.plus/xp/docs/requirements-compatibility)

--
Este aviso se envió a todos los administradores. Para desactivar todos los avisos de administrador, visite la configuración de administrador de Level Up XP.';
$string['adminnoticeaddondeactivatedsubject'] = '¡Plugin XP+ deshabilitado!';
$string['adminnoticeoutofsyncmessage'] = 'Aviso de incompatibilidad entre Level Up XP y Level Up XP+.

Usted recibe este aviso como advertencia porque los dos plugins Level Up XP (block_xp) y Level Up XP+ (local_xp) actualmente están "desincronizados" y son incompatibles entre sí. Este problema ocurre cuando XP se ha actualizado a una nueva versión principal mientras que XP+ sigue desactualizado.

Esta falta de coincidencia puede provocar la pérdida de funcionalidad, errores y otras consecuencias inesperadas. Para resolver esto, debe actualizar Level Up XP+.

**¡Importante!** En el futuro, si estos plugins no están sincronizados, Level Up XP+ se deshabilitará automáticamente. Para evitar que esto suceda, asegúrese de no actualizar Level Up XP a una nueva versión principal sin actualizar también Level Up XP+.

- Versión de Level Up XP (block_xp): {$a->blockxpversion}
- Versión de Level Up XP+ (local_xp): {$a->localxpversion}
- Versión esperada de Level Up XP+: {$a->localxpversionexpected}

Recursos adicionales:

- [Documentación de actualización](https://docs.levelup.plus/xp/docs/upgrade)
- [Documentación de compatibilidad](https://docs.levelup.plus/xp/docs/requirements-compatibility)

--

Este aviso se envió a todos los administradores. Para deshabilitar todos los avisos para administradores, visite la configuración de administrador de Level Up XP.';
$string['adminnoticeoutofsyncsubject'] = '¡Aviso de incompatibilidad de plugins de XP!';
$string['adminnotices'] = 'Avisos para admins';
$string['adminnotices_desc'] = 'Cuando esta opción está habilitada, los administradores del sitio pueden recibir ocasionalmente notificaciones importantes sobre compatibilidad, seguridad y disponibilidad de versiones más nuevas de Level Up XP+.';
$string['adminscanearnxp'] = 'Admins pueden ganar puntos';
$string['adminscanearnxp_desc'] = 'De forma predeterminada, los administradores no están incluidos en el grupo de usuarios que pueden ganar puntos. Esto se debe a que los administradores siempre tienen el permiso _block/xp:earnxp_, lo que les permite acumular puntos de forma continua en todas partes. Puedes usar esta configuración para permitir que los administradores también ganen puntos.';
$string['allcoursesreset'] = 'Se han restablecido todos los cursos.';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuración controla si es que los participantes pueden verse mutuamente sus nombres y avatares.';
$string['apply'] = 'Aplicar';
$string['awardaxpwhen'] = '<strong>{$a}</strong> puntos de experiencia son ganados cuando:';
$string['badgeaward'] = 'Insignia a otorgar';
$string['badgeawarddesc'] = 'Una Insignia a otorgar cuando el usuario alcanza el nivel.';
$string['basepoints'] = 'Puntos base';
$string['basepointslineardesc'] = 'el incremento mínimo entre niveles.';
$string['basepointsrelativedesc'] = 'El número de puntos con cuales comenzar.';
$string['basexp'] = 'Base del algoritmo';
$string['blockappearance'] = 'Apariencia del bloque';
$string['blockappearancemovedtopluginsettings'] = 'Las configuraciones de apariencia del bloque fueron movidas a la página de configuraciones del plugin.';
$string['cachedef_block_count'] = 'Número de instancias del bloque';
$string['cachedef_filters'] = 'Filtros de Niveles';
$string['cachedef_metadata'] = 'Metadatos';
$string['cachedef_ruleevent_eventslist'] = 'Lista de algunos eventos';
$string['canjoinfromdatex'] = 'Usted podrá unirse desde {$a}.';
$string['cannotbesetindefaults'] = 'Esto no puede ser configurado en los valores predeterminados.';
$string['cannotearnpoints'] = 'No puede ganar puntos.';
$string['cannotshowblockconfig'] = 'Usualmente yo mostraría aquí las configuraciones de la apariencia, pero no pude encontrar el bloque de Usted. Para cambiar la apariencia del bloque, regrésese [aquí]({$a}) (o en donde Usted haya añadido el bloque), active el modo de edición, y siga la opción para "Configurar"en el menú desplegable del bloque. Si Usted no puede encontrar el bloque, añádalo nuevamente a su curso.';
$string['cannotshowblockconfigsys'] = 'Usualmente yo mostraría aquí las configuraciones de apariencia, pero no pude encontrar su bloque. Podría ser que faltara de la  [Portada]({$a->fp}) y del [Tablero por defecto]({$a->mysys}) de sus usuarios, o podría estar presente en ambos. Para editar estas configuraciones desde aquí, asegúrese de que solamente aparezca en una de elllas.';
$string['changecourse'] = 'Cambiar curso';
$string['changelevelformhelp'] = 'Si Usted cambia el número de niveles, las insignias de nivel personalizadas estarán deshabilitadas temporalmente a fin de evitar niveles sin insignias. Si Usted cambia el número de niveles vaya a la página de \'Visuales\' para rehabilitar las insignias personalizadas una vez que Usted haya guardado este formato.';
$string['changetocourse'] = 'Cambiar a curso';
$string['changetositewide'] = 'Regresar al sitio';
$string['cheatguard'] = 'Guarda contra Trampas';
$string['cheatguardsettingsmovednotice'] = 'La configuración de protección contra trampas se movió a la [página de reglas del evento]({$a->url}).';
$string['checkaddoncompatibility'] = 'Compatibilidad del complemento Level Up XP';
$string['chooseacondition'] = 'Elegir una condición';
$string['clearfilter'] = 'Borrar filtro';
$string['clicktoselectcm'] = 'Hacer clic para seleccionar una actividad o un recurso';
$string['cmselector'] = 'Selector de módulo de curso';
$string['coefxp'] = 'Coeficiente del algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['comparisonmethod'] = 'Método de comparación';
$string['compatibilitycheck'] = 'Comprobación de compatibilidad';
$string['completionrules'] = 'Reglas de finalización';
$string['completionrules_help'] = 'Las reglas de finalización se dividen en tres categorías: finalización de la actividad, finalización de la sección y finalización del curso. La adición de condiciones a las categorías determinará cuándo y cuántos puntos se otorgarán.

Las reglas se evalúan en el orden en que se presentan en la pantalla. Tan pronto como se cumpla una condición, se otorgarán los puntos correspondientes y no se evaluarán más reglas.

[Más información](https://docs.levelup.plus/xp/docs/completion-rules?ref=blockxp_help)';
$string['completionrulesintro'] = 'Atribuir puntos a los estudiantes a medida que completan actividades, secciones o cursos.';
$string['completionruleslegacyusednotice'] = 'Usted tiene "Reglas de evento" existentes que utilizan condiciones de finalización. Le recomendamos encarecidamente que las elimine y las sustituyaspor los métodos que se indican a continuación, ya que el uso de "Reglas de evento" y "Reglas de finalización" podría duplicar los puntos otorgados.';
$string['condition'] = 'Condición';
$string['configblockrankingsnapshot'] = 'Mostrar instantánea de tabla de posiciones';
$string['configblockrankingsnapshot_help'] = 'La tabla de posiciones muestra el ranking del usuario. También intenta mostrar a las dos personas cercanas al usuario. Esta característica requiere que esté habilitado la tabla de posiciones, y que se muestren sus rankings.';
$string['configdescription'] = 'Introducción';
$string['configdescription_help'] = 'Se muestra un breve mensaje de introducción en el bloque. Los estudiantes tienen la posibilidad de ignorar el mensaje, en cuyo caso no lo volverán a ver.';
$string['configheader'] = 'Ajustes';
$string['configrecentactivity'] = 'Mostrar recompensas recientes';
$string['configrecentactivity_help'] = 'Cuando se habilita, el bloque mostrará una lista corta de eventos recientes que recompensaron al estudiante con puntos.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'El título del bloque.';
$string['congratulationsyouleveledup'] = '¡Felicitaciones!';
$string['coolthanks'] = '¡Bueno, gracias!';
$string['copiedexcl'] = '¡Copiado!';
$string['coursea'] = 'Curso "{$a}"';
$string['courselog'] = 'Bitácora';
$string['courselogintro'] = 'La bitácora muestra las acciones observadas, y cuántos puntos otorgaron.';
$string['coursereport'] = 'Reporte';
$string['coursereportintro'] = 'El reporte proporciona detalles acerca de cada participante, y soporta el actuar en cosecuencia individualmente o en conjunto.';
$string['courserules'] = 'Reglas del curso';
$string['courseselectedcolon'] = 'Curso seleccionado:';
$string['coursesettings'] = 'Configuraciones del curso';
$string['coursevisuals'] = 'Visuales del curso';
$string['currencysign'] = 'Símbolo de puntos';
$string['currencysign_help'] = 'Con esta configuración uste dpuede cambiar el significado de los puntos. Se mostrará junto a la cantidad de puntos que tiene cada usuario en lugar de la referencia a los _puntos de experiencia_.

¡Elija uno de los símbolos proporcionados o cargue el suyo propio!';
$string['currencysignxp'] = 'Xp (Puntos de Experiencia)';
$string['customizelevels'] = 'Personalizar los niveles';
$string['dangerzone'] = 'Zona de peligro';
$string['dataformat'] = 'Formato';
$string['defaultlevels'] = 'Niveles por defecto';
$string['defaultrules'] = 'Reglas por defecto';
$string['defaultrulesformhelp'] = 'Esas son las reglas por defecto proporcionadas por el plugin; automáticamente dan puntos  por defecto e ignoran algunos eventos redundantes. Sus propias reglas de Usted tienen precedencia sobre ellas.';
$string['defaultsettings'] = 'Configuraciones por defecto';
$string['defaultvisuals'] = 'Apariencia predeterminada';
$string['deletecondition'] = 'Eliminar condición';
$string['deleterule'] = 'Eliminar regla';
$string['description'] = 'Descripción';
$string['difference'] = 'Difer.';
$string['difficulty'] = 'Método de cálculo d epuntos';
$string['difficultyflat'] = 'Igual';
$string['difficultyflatdesc'] = 'Todos los niveles requieren el mismo número de puntos para alcanzar.';
$string['difficultylinear'] = 'Incrementando';
$string['difficultylineardesc'] = 'Los niveles progresivamente tardan más para lograrse.';
$string['difficultylinearincrdesc'] = 'El número de puntos usados para la dificultad progresiva.';
$string['difficultypointincrease'] = 'Incremento de puntos';
$string['difficultyrelative'] = 'Avalancha';
$string['difficultyrelativedesc'] = 'Los niveles se vuelven exponencialmente más difíciles de lograr.';
$string['difficultyrelativeincrdesc'] = 'el porcentaje de puntos a aumentar desde el nivel previo.';
$string['discoverlevelupplus'] = 'Descubra Sube de Nivel XP+';
$string['dismissnotice'] = 'No considerar aviso';
$string['displayeveryone'] = 'Mostrar todos';
$string['displaynneighbours'] = 'Mostrar {$a} vecinos';
$string['displayoneneigbour'] = 'Mostrar un vecino';
$string['displayparticipantsidentity'] = 'Mostrar identidad de participantes';
$string['displayrank'] = 'Mostrar \'\'ranking\'\'';
$string['displayrelativerank'] = 'Mostrar un \'\'ranking\'\' relativo';
$string['documentation'] = 'Documentación';
$string['drops'] = 'Caídas';
$string['drops_help'] = 'En los videojuegos, algunos personajes pueden _dejar caer_ objetos o puntos de experiencia en el suelo para que el jugador los recoja. Estos objetos y puntos se conocen comúnmente como \'drops\'.

En Level Up XP, los \'drops\' son códigos cortos (p. ej. `[xpdrop id=1 secret=abcdef]`) que un instructor puede colocar en el contenido normal de Moodle. Cuando un usuario los encuentra, los _recoge_ y se le otorga una cierta cantidad de puntos.

Actualmente, los \'drops\' son invisibles para el usuario y otorgan puntos de forma pasiva la primera vez que los encuentra.

Los \'drops\' se pueden usar para otorgar puntos de forma inteligente cuando un estudiante consume cierto tipo de contenido. Aquí hay algunas ideas:

- Colocar un \'drop\' en los comentarios de un examen que solo sea visible para los que obtienen la puntuación perfecta
- Colocar un \'drop\' en contenido profundo para recompensar su consumo
- Colocar un \'drop\' en una discusión interesante del foro
- Colocar un \'drop\' en una página de difícil acceso en un módulo de lección

[Más información](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Las caídas son retazos de código directamente colocados en contenido que otorgan puntos cuando son encontrados por un usuario.';
$string['editcondition'] = 'Editar condición';
$string['editingdefaultsettingsincoursemodenotice'] = '**¡Atención!** Usted no está modificando la configuración activa, sino editando los valores predeterminados. Para cambiar la configuración de un curso, sigue el enlace "Configuración" desde el bloque XP.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**¡Atención!** Usted no está modificando la configuración activa actual, sino que usted está editando los valores predeterminados. Como Level Up XP se usa en todo el sitio, lo más probable es que su intención sea cambiar la configuración de todo el sitio. [Navegue aquí]({$a->url}) para cambiar esa configuración o siga el enlace "Configuración" desde el bloque XP.';
$string['editinstructions'] = 'Editar información';
$string['embedleaderboard'] = 'Incrustar tabla de clasificación';
$string['enablecheatguard'] = 'Habilitar guardia contra trampas';
$string['enablecheatguard_help'] = 'La Guardia contra trampas ofrece un mecanismo simple y económico para evitar que los estudiantes abusen del sistema mediante técnicas obvias, como actualizar la misma página una y otra vez o repetir la misma acción una y otra vez.

[Más información](https://docs.levelup.plus/xp/docs/getting-started/cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Habilitar página de información';
$string['enableinfos_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver la página de información.';
$string['enableladder'] = 'Habilitar la tabla de posiciones';
$string['enableladder_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver la tabla de posiciones.';
$string['enablelevelupnotif'] = 'Habilitar notificación de subida de nivel';
$string['enablelevelupnotif_help'] = 'Cuando se configura a \'Si\', a los estudiantes se les mostrará una ventana emergente felicitándolos por el nuevo nivel alcanzado.';
$string['enablelogging'] = 'Habilitar bitácoras';
$string['enablexpgain'] = 'Habilitar ganancia de puntos';
$string['enablexpgain_help'] = 'Cuando se configura como \'NO\', nadie podrá ganar puntos en el curso. Esto es útil para congelar los puntos ganados, o para habilitarlo en un cierto punto en el tiempo.

Por favor tenga en cuenta que esto también puede ser controlado con mayor granularidad al usar la capacidad \'block/xp:earnxp\'.';
$string['entersearchterm'] = 'Ingrese un término de búsqueda';
$string['envcheckaddonincompatibilitymessage'] = 'El plugin Level Up XP+ (local_xp) es incompatible con Level Up XP (block_xp). Esto provocará la desactivación de XP+. Para evitarlo, actualice ambos plugins. Para más información, visite https://docs.levelup.plus/xp/docs/compatibility.';
$string['erroraddondeactivated'] = 'Se ha desactivado Subir de Nivel XP+. Consulte la [documentación]({$a->docsurl}) para obtener más información.';
$string['errorcontextcoursemismatchforwholesite'] = 'La URL de esta página de <em>Level Up XP</em> no coincide con la configuración actual del plugin. Su configuración actual declara que <em>Level Up XP</em> se utilizará en "todo el sitio", sin embargo, esta página esperaba que se utilizara "por curso". Haga <a href="{$a->nexturl}">clic aquí</a> para navegar a la página correcta. Busque la configuración de administrador "block_xp_context" si desea cambiar su configuración.';
$string['errorcontextcoursemismatchpercourse'] = 'La URL de esta página de <em>Level Up XP</em> no coincide con la configuración actual del plugin. Su configuración actual declara que <em>Level Up XP</em> se utilizará "Por curso", pero esta página espera que se utilice "En todo el sitio". Lo más probable es que se origine a partir de un <em>bloque</em> que se agregó al panel de control o a la página principal mientras estaba en una configuración diferente. Debe eliminar el bloque de las últimas páginas y utilizarlo solo desde cursos individuales.';
$string['errorformvalues'] = 'Hay algunos problemillas en los valores del formato, por favor, arréglelos.';
$string['errorlevelsincorrect'] = 'El número mínimo de niveles es 2';
$string['errornotalllevelsbadgesprovided'] = 'No se han proporcionado todas las insignias. Faltantes: {$a}';
$string['errorunknownevent'] = 'Error: evento desconocido';
$string['errorunknownmodule'] = 'Error: módulo desconocido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Los puntos requeridos es menor o igual al nivel anterior.';
$string['event_user_leveledup'] = 'Usuario subido de nivel';
$string['eventis'] = 'El evento es {$a}';
$string['eventname'] = 'Nombre del evento';
$string['eventproperty'] = 'Propiedad del evento';
$string['eventsrules'] = 'Reglas de eventos';
$string['eventsrules_help'] = 'Este plugin utiliza los eventos para atribuir puntos a las acciones realizadas por los estudiantes.
Puede utilizar el formato a continuación para agregar sus propias reglas y modificar las predeterminadas.

Se recomienda consultar la página _Log_ del ´plugin para identificar qué eventos se activan cuando los estudiantes realizan acciones en el curso.

Recursos adicionales:

- [¿Cómo se calculan los puntos de experiencia?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Reglas de resolución de problemas](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Observar acciones y atribuir puntos a estudiantes conforme se desempeñen.';
$string['eventtime'] = 'Hora del evento';
$string['export'] = 'Exportar';
$string['exportdata'] = 'Exportar datos';
$string['filterbyuser'] = 'Filtrar por usuario';
$string['filterellipsis'] = 'Filtrar ...';
$string['filtermodules'] = 'Filtrar módulos';
$string['filterparticipants'] = 'filtrar participantes';
$string['for1day'] = 'Por 1 día';
$string['for1month'] = 'Por 1 mes';
$string['for1week'] = 'Por 1 semana';
$string['for3days'] = 'Por 3 días';
$string['forever'] = 'Para siempre';
$string['forthewholesite'] = 'para todo el sitio';
$string['give'] = 'dar';
$string['gotofullladder'] = 'Ir a tabla de posiciones completa';
$string['graderules'] = 'Reglas de calificaciones';
$string['graderules_help'] = 'Los estudiantes obtendrán tantos puntos como su calificación.
Una calificación de 5/10 y una calificación de 5/100 otorgarán al estudiante 5 puntos.
Cuando la calificación de un estudiante cambia varias veces, obtendrá puntos equivalentes a la calificación máxima que haya recibido.
Nunca se quitan puntos a los estudiantes y las calificaciones negativas se ignoran.

Ejemplo: Alicia envía una tarea y recibe una calificación de 40/100. En _Level Up XP_, Alicia recibe 40 puntos por su calificación.
Alicia vuelve a intentar realizar su tarea, pero esta vez su calificación se reduce a 25/100. Los puntos de Alicia en _Level Up XP_ no cambian.
En su último intento, Alicia obtiene 60/100 puntos y gana 20 puntos adicionales en _Level Up XP_, por lo que su total de puntos obtenidos es 60.

[Más información en la documentación de _Level Up XP_](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'Las reglas de calificación le permiten a los usuarios recibir puntos iguales a las calificaciones que reciban.';
$string['grid'] = 'Rejilla';
$string['hasbadgeaward'] = 'Configuración de insignia a otorgar';
$string['hasdescription'] = 'Configuración de descripción';
$string['hasname'] = 'Configuración de nombre';
$string['hasnobadgeaward'] = 'Sin insignia para otorgar';
$string['hasnodescription'] = 'Sin descripción';
$string['hasnoname'] = 'Sin nombre';
$string['hasnopopupmessage'] = 'Sin mensajes emergentes';
$string['haspopupmessage'] = 'Mensaje emergente configurado';
$string['hideparticipantsidentity'] = 'Ocultar identidad de participantes';
$string['hiderank'] = 'Ocultar \'\'ranking\'\'';
$string['importpoints'] = 'Importar puntos';
$string['importpoints_help'] = 'La importación se puede utilizar para _aumentar_ los puntos de los estudiantes o para _anularlos_ con el valor proporcionado.

Tenga en cuenta que la importación __no__ utiliza el mismo formato que el informe exportado. El formato requerido se describe en la [documentación](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), donde está disponible un [archivo de muestra](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file).';
$string['importpointsintro'] = 'Importar puntos desde un archivo CSV, y opcionalmente enviar un mensaje al destinatario.';
$string['incourses'] = 'en cursos.';
$string['ineffective'] = 'No efectivo';
$string['infos'] = 'información';
$string['infos_help'] = 'La página de información ofrece a los estudiantes una descripción general de los niveles y los puntos necesarios para alcanzarlos. También muestra el nombre de cada nivel, así como su descripción.';
$string['infosintro'] = 'La página de información muestra la lista de niveles y algunos de sus detalles.';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Instrucciones';
$string['instructions_help'] = 'Las instrucciones se mostrarán en la página de información. Usted podrá utilizarlas para compartir información e instrucciones sobre los niveles, cómo obtener puntos, etc.';
$string['invalidxp'] = 'Valor de puntos inválido';
$string['join'] = 'Unirse';
$string['joinleadeboardconfirmnote'] = '¡Genial! ¡Nos encanta tenerle a bordo!

Tenga en cuenta que, una vez que se una, tendrá que esperar un tiempo antes de poder abandonar la tabla de posiciones si cambia de opinión.';
$string['joinleadeboardlockednote'] = 'Usted no puede unirse a la tabla de posiciones';
$string['joinleaderboard'] = 'Unirse a la tabla de posiciones';
$string['keeplogs'] = 'Mantener bitácoras';
$string['ladder'] = 'Tabla de posiciones';
$string['ladder_help'] = 'La tabla de posiciones clasifica a los estudiantes en función de sus puntos. Cuando se utiliza en un curso con grupos, puede crear una clasificación para cada grupo de estudiantes.

Hay varias opciones disponibles para personalizar la tabla de clasificación y la experiencia que les brindará a los participantes.';
$string['ladderadditionalcols'] = 'Columnas adicionales';
$string['ladderadditionalcols_help'] = 'Esta configuración determina cuales columnas adicionales son mostradas en la tabla de posiciones. Presione la tecla CTRL o CMD al mismo tiempo que hace clic para seleccionar más de una columna, o para des-seleccionar una columna seleccionada.';
$string['ladderempty'] = '¡ Actualmente la tabla de posiciones está vacía; asegúrese de regresar después !';
$string['ladderintro'] = 'La tabla de posiciones muestra una clasificación de individuos basada en sus puntos totales.';
$string['ladderiso'] = 'Aislar participantes';
$string['ladderiso_help'] = 'Crea tableros de clasificación independientes para distintos grupos de personas.

- Predeterminado (modo de grupo): sigue el modo de grupo del curso para crear tablas de clasificación para cada grupo.
- Uso de cohortes: solo los miembros de la misma cohorte aparecerán en la tabla de clasificación de una persona.

[Más información](https://docs.levelup.plus/xp/docs/leaderboard-isolation)';
$string['ladderisocohorts'] = 'Usando cohortes';
$string['ladderisodefault'] = 'Predeterminados (modo de grupo)';
$string['ladderparticipation'] = 'Paticipación';
$string['ladderparticipation_help'] = 'Define si se espera que los usuarios participen en la tabla de clasificación o si pueden unirse o abandonarla según sus preferencias.

- Automático, sin opción de cancelación: Todos los usuarios se unen a la tabla de clasificación automáticamente y no pueden abandonarla.
- Automático, opción de cancelación disponible: Todos los usuarios se unen automáticamente a la tabla de clasificación, pero pueden optar por abandonarla.
- Opcional, con opción de cancelación: Los usuarios deben unirse explícitamente a la tabla de clasificación para participar.

Los usuarios pueden cambiar de opinión y abandonar o volver a unirse a la tabla de clasificación después de optar por participar o abandonarla. Sin embargo, para evitar comportamientos indeseados, los usuarios que se unan a la tabla de clasificación no pueden optar por abandonarla durante 3 días.

[Más información](https://docs.levelup.plus/xp/docs/leaderboard-opt-out)';
$string['ladderparticipationforced'] = 'Automático, sin opción de exclusión';
$string['ladderparticipationoptin'] = 'Opcional, por opt-in';
$string['ladderparticipationoptout'] = 'Automático, opción de exclusión voluntaria disponible';
$string['ladderparticipationreset'] = 'Eliminar el estado de participación registrado de todos.';
$string['ladderparticipationreset_help'] = 'Cuando se activa esta opción, se borrará el estado de participación de todos los usuarios y deberán optar por participar o no participar nuevamente.';
$string['laddersettingsmovednotice'] = 'La configuración de la tabla de posiciones se trasladó a la [página de tabla de posiciones]({$a->url}).';
$string['learnmore'] = 'Aprender más';
$string['leave'] = 'Abandonar';
$string['leaveleadeboardconfirmnote'] = '¿Seguro que quiere abandonar la clasificación?

Una vez que se vaya, perderá  el acceso a las clasificaciones, pero podrá volver a unirse más tarde si cambia de opinión.';
$string['leaveleadeboardlockednote'] = 'Usted no puede abandonar la tabla de posiciones';
$string['leaveleadeboardlockeduntilnote'] = 'Usted no puede abandonar la tabla de posiciones hasta{$a}.';
$string['leaveleaderboard'] = 'Abandonar tabla de posiciones';
$string['level'] = 'Nivel';
$string['levelbadge'] = 'Insignia de nivel';
$string['levelbadges'] = 'Insignias del nivel';
$string['levelbadges_help'] = 'Subir imágenes para reemplazar la apariencia de los niveles individuales.

Los archivos deben tener el nombre [nivel].[extensión de archivo], por ejemplo 1.png, 2.jpg, etc.

Recomendamos imágenes de un tamaño de 100x100 píxeles, en cualquiera de los siguientes tipos: GIF, JPEG, PNG y SVG.';
$string['levelbadgesformhelp'] = 'Nombre los archivos [nivel].[extensión del archivo],por ejemplo: 1.png, 2.jpg, etc... El tamaño recomendado de imagen es 100x100.';
$string['levelcount'] = 'Número de niveles';
$string['leveldesc'] = 'Descripción del nivel';
$string['leveldesc_help'] = 'Una descripción breve del nivel, la cual es mostrada en la página de información junto con el nivel mismo. Usted puede usar esto para describir una recompensa para los estudiantes que logren el nivel, o para incluir instrucciones sobre como trabajar para alcanzar el nivel, o para describir el nivel en forma divertida (por ejemplo, se ha sabido que solo las almas más valientes han conquistado este nivel), etc.';
$string['leveldescriptiondesc'] = 'Una descripción breve del nivel, mostrada a estudiantes en la página de información.';
$string['levelname'] = 'Nombre del nivel';
$string['levelname_help'] = 'Un nombre corto a usar en lugar del prederminado _Level #1_, _Level #2_, etc. que a veces es mostrado. ¡ Si Usted le pone nombres a algunos niveles, nosotros recomendamos que le de nombre a todos los niveles !';
$string['levelpointslength'] = 'Largo';
$string['levelpointsstart'] = 'Inicio';
$string['levels'] = 'Niveles';
$string['levelsappearance'] = 'Apariencia de niveles';
$string['levelssaved'] = 'Los niveles han sido guardados';
$string['levelswillbereset'] = '¡Advertencia! Al guardar este formato se recalcularán los niveles para todos!';
$string['levelup'] = '¡Sube de nivel!';
$string['levelupoptionsunavailableforlevelone'] = 'Las opciones relacionadas con lograr el nivel no están disponibles para el primer nivel.';
$string['levelupplus'] = 'Sube de Nivel  XP+';
$string['levelx'] = 'Nivel #{$a}';
$string['likenotice'] = '¿Está disfrutando de Level Up XP? Tómese un momento para <a href="{$a->moodleorg}" target="_blank">añadirlo a sus plugins favoritos</a> en Moodle.org.';
$string['limitparticipants'] = 'Limitar participantes';
$string['limitparticipants_help'] = 'Esta configuración controla quien es mostrado en la tabla de posiciones. Los vecinos son los participantes rankeados por arriba y por abajo del usuario actual. Por ejemplo, al elegir \'Mostrar dos vecinos\', solamente los dos participantes rankeados directamente arribita y abajito del usuario actual serán mostrados.';
$string['list'] = 'Lista';
$string['logging'] = 'Ingresando';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Máx acciones en lapso de tiempo';
$string['maxactionspertime_help'] = 'El número máximo de acciones que contarán para puntos durante el lapso de tiempo dado. Cualquier acción subsecuente será ignorada. Cuando este valor está vacío, o es igual a cero, no aplica.';
$string['maxlevelexcl'] = '¡máx nivel!';
$string['menu'] = 'Menú';
$string['messageprovider:adminnotice'] = 'Aviso para admins';
$string['missing'] = 'Faltante';
$string['movecondition'] = 'Mover condición';
$string['moverule'] = 'Mover regla';
$string['name'] = 'Nombre';
$string['namecontains'] = 'Contiene "{$a}"';
$string['nameequalsto'] = 'Es igual a "{$a}"';
$string['navbardisplay'] = 'Mostrar en Barra de Navegación';
$string['navbardisplay_desc'] = 'Cuando está habilitado, el nivel del usuario se mostrará en la barra de navegación superior. Si el plugin se utiliza "Por cursos", solo aparecerá en los cursos. Tenga en cuenta que esta funcionalidad depende en gran medida del tema y es posible que no funcione bien, o que no funcione en absoluto, con temas de terceros. [Más información](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navcompletionrules'] = 'Finalización';
$string['navdrops'] = 'Caídas';
$string['naveventrules'] = 'Reglas de eventos';
$string['navgraderules'] = 'Reglas de calificación';
$string['navimport'] = 'Importar';
$string['navinfos'] = 'Info';
$string['navladder'] = 'Tabla de posiciones';
$string['navlevels'] = 'Niveles';
$string['navlevelssetup'] = 'Configuración';
$string['navlog'] = 'Bitácora';
$string['navpoints'] = 'Puntos';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Reporte';
$string['navrules'] = 'Reglas';
$string['navsettings'] = 'Configuraciones';
$string['navvisuals'] = 'Apariencia';
$string['newversioninstallednotice'] = '¡Se instaló una nueva versión! Descubra las novedades en las [notas de la versión]({$a->releasenotesurl}).';
$string['nextlevelin'] = 'nivel siguiente en';
$string['noconditionsyet'] = '¡Sin condiciones, todavía!';
$string['noconditionsyetintro'] = 'Comience añadiendo una condición.';
$string['nodescription'] = 'Sin descripción';
$string['noissuesidentified'] = 'Sin problemas identificados';
$string['nologsrecordedyet'] = 'Aun no se han grabado bitácoras.';
$string['noname'] = 'Sin nombre';
$string['noneareavailable'] = 'Ninguno está disponible';
$string['notecompatibilityissues'] = 'Por favor tenga en cuenta los problemas de compatibilidad debajo:';
$string['notesomesettingslocked'] = 'Tenga en cuenta que algunas configuraciones pueden ser no editables cuando están siendo bloqueadas por un administrador.';
$string['nothingmatchesfilter'] = 'Nada coincide con el filtro.';
$string['notparticipating'] = 'No participando';
$string['notranked'] = 'No clasificado';
$string['numberoflevels'] = 'Número de niveles';
$string['occasionally'] = 'Ocasionalmente';
$string['onlyparticipantscanaccessranking'] = 'Solo aquellos que participan en la tabla de posiciones pueden acceder a la clasificación.';
$string['outofsync'] = 'Incompatibilidad de plugins de XP';
$string['outofsyncexcessive'] = 'Excesivamente des-sincronizado';
$string['outofsyncexcessiveinfo'] = 'XP+ es excesivamente más antiguo que XP, lo que puede provocar problemas inesperados. En el futuro, XP+ se desactivará automáticamente.';
$string['outofsyncinfo'] = 'Los plugins de XP son incompatibles entre sí, lo que puede provocar problemas inesperados. En el futuro, XP+ se deshabilitará automáticamente. Se espera la versión {$a->localxpversion} de Level Up XP+ (local_xp).';
$string['pagecurrentnotvisibletoviewers'] = 'Esta página no está visible actualmente para los estudiantes.';
$string['pagecurrentvisibletoviewers'] = 'Actualmente la página SI es visible para estudiantes.';
$string['pagesettings'] = 'Configuraciones de página';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatesinleaderboard'] = 'Participa en la tabla de posiciones.';
$string['participatesnotinleaderboard'] = 'No participa en la tabla de posiciones.';
$string['participatetolevelup'] = '¡Participe en el curso para ganar puntos de experiencia y subir de nivel!';
$string['participating'] = 'Participando';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Elegir un tipo de condición';
$string['pluginavailabilityxpdesc'] = 'Este plugin le permite a los instructores restringir el acceso a actividades basándose en los niveles de los estudiantes.';
$string['pluginenrolxpdesc'] = 'Este plugin habilita la inscripción automática a cursos basándose en el nivel de un estudiante en otro curso.';
$string['pluginname'] = 'Sube de nivel XP';
$string['pluginshortcodesdesc'] = 'Este plugin le permite a los instructores personalizar su material al incluir elementos relacionados con la Experiencia del Usuario (puntos, nivel, tabla de posiciones, ...) en el contenido, además de ocultar o mostrar contenido basándose en el nivel de un estudiante.';
$string['pluginshortcodesrequiredtousefeature'] = 'El plugin [Shortcodes](https://docs.levelup.plus/xp/docs/getting-started/installation/recommended-plugins) debe estar instalado y habilitado para usar esta función.';
$string['pluginsoutofsync'] = '__¡Incompatibilidad de plugins de XP!__

Existen problemas de compatibilidad entre Level Up XP y Level Up XP+. En el futuro, Level Up XP+ se desactivará automáticamente si no es compatible. Para evitarlo, comuníquese con el administrador de su sitio. [Leer más]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versión de {$a->name} ({$a->component}) podría ser incompatible con Moodle {$a->version}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Puntos por nivel';
$string['pointsrequired'] = 'Puntos requeridos';
$string['pointstoaward'] = 'Puntos a otorgar';
$string['pointstoaward_help'] = 'La cantidad de puntos a otorgar cuando se cumple la condición.';
$string['popupnotificationmessage'] = 'Mensaje emergente de notificación';
$string['popupnotificationmessagedesc'] = 'Mensaje opcional a mostrar dentro de la notificación emergente que felicita al usuario por lograr el nivel.';
$string['potentialmoodleincompatibility'] = 'Incompatibilidad potencial con Moodle';
$string['previewpopupnotification'] = 'Previsualizar notificación';
$string['privacy:metadata:log'] = 'Almacena una bitácora de ventos';
$string['privacy:metadata:log:eventname'] = 'El nombre del evento';
$string['privacy:metadata:log:time'] = 'La fecha en la que sucedió';
$string['privacy:metadata:log:userid'] = 'El usuario que ganó los puntos';
$string['privacy:metadata:log:xp'] = 'Los puntos otorgados por el evento';
$string['privacy:metadata:prefintro'] = 'Registra si es que el usurio se saltó la introducción del bloque';
$string['privacy:metadata:prefladderpagesize'] = 'El tamaño de página preferido por el usuario al ver la tabla de posiciones';
$string['privacy:metadata:preflevelup'] = 'Registra si es que el usuario debería de ver notificación de subida de nivel';
$string['privacy:metadata:prefnotices'] = 'Registra si es que el usuario cerró el aviso de soporte';
$string['privacy:metadata:prefseenpromo'] = 'Registra si es que el usuario vió la página promocional';
$string['privacy:metadata:xp'] = 'Almacena los puntos y niveles de usuarios';
$string['privacy:metadata:xp:lvl'] = 'El nivel del usuario';
$string['privacy:metadata:xp:userid'] = 'El usuario';
$string['privacy:metadata:xp:xp'] = 'Los puntos del usuario';
$string['privacy:path:addon'] = 'Añadido';
$string['privacy:path:level'] = 'Nivel';
$string['privacy:path:logs'] = 'Bitácoras';
$string['progress'] = 'Progreso';
$string['progressbar'] = 'Barra de progreso';
$string['promocheatguard'] = 'Este protector de trampas no está diseñado para cubrir períodos de tiempo largos. Considere actualizar a <em>Level Up XP+</em> para desbloquear períodos de tiempo más largos y otras funciones. <a href="{$a->url}">Lea más aquí</a>.';
$string['promocontactintro'] = 'Contáctenos para más información. ¡No mordemos y contestamos rápidamente!';
$string['promocontactus'] = 'Póngase en contacto';
$string['promoemailusat'] = 'Mándenos un Email a _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = '¡Órale! No pudimos enviar el mensaje... por favor mándenos un Email directamente a : {$a}. ¡Gracias!';
$string['promogetnow'] = '¡Obtener XP+ ahora!';
$string['promoifpreferemailusat'] = 'Psst! Si Usted lo prefiere, mándenos directamente un Email a _{$a}_.';
$string['promointro'] = '¡Conviértete en el maestro del juego! Desbloquea funciones adicionales y lleva la ludificación a un nivel completamente nuevo con Level Up XP+.';
$string['promointroinstalled'] = 'El plugin _Level up! Plus_ está instalado en su sistema y todas sus características han sido habilitadas.';
$string['promorulesdidyouknow'] = '¿Sabía usted que con <em>Level Up XP+</em> los estudiantes pueden recibir puntos por <em>completar cursos</em> y <em>actividades</em>, o incluso recibir puntos según sus <em>calificaciones</em>? <a href="{$a->url}">Descubra más aquí</a>.';
$string['promoyourmessagewassent'] = 'Gracias; su mensaje fue enviado. Le contestaremos muy pronto.';
$string['property:action'] = 'Acción del evento';
$string['property:component'] = 'Componente del evento';
$string['property:crud'] = 'Evento CRUD';
$string['property:eventname'] = 'Nombre del evento';
$string['property:target'] = 'Meta del evento';
$string['provisionstates'] = 'Aprovisionamiento automático de usuarios';
$string['provisionstates_desc'] = 'De forma predeterminada, los usuarios solo aparecen en la tabla de clasificación (y en el informe en modo de todo el sitio) tras ser detectados por XP. El aprovisionamiento de usuarios es una función avanzada que crea automáticamente entradas para los usuarios faltantes, identificados vagamente por su rol. Esto se realiza periódicamente mediante una tarea programada que se ejecuta a diario de forma predeterminada. [Modo de aprendizaje](https://docs.levelup.plus/xp/docs/automatic-user-provisioning)';
$string['questpromonotice'] = 'Lleva la ludificación al siguiente nivel, descubra [Level Up Quest]({$a->questurl}).';
$string['questreleasenotice'] = 'Lleva la ludificación al siguiente nivel y descubra **Level Up Quest** 🥳. ¡Convierta sus recorridos en **aventuras emocionantes**, llenas de **estrategias para renovar la conexión** y **celebraciones** 🤯! Visite el [sitio web de Quest]({$a->questurl}) y nuestra [publicación de lanzamiento aquí]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Editar punto srápido';
$string['rank'] = 'Ranking';
$string['ranked'] = 'Clasificado';
$string['ranking'] = '\'\'Ranking\'\'';
$string['ranking_help'] = 'El \'\'ranking\'\' es la posición absoluta del usuario actual en la tabla de posiciones. El \'\'ranking\'\' relativo es la diferencia en puntos de experiencia entre un usuario y sus vecinos.';
$string['reallydeleteuserstate'] = 'Eliminar un usuario solo es útil para quitarlo de la tabla de posiciones. Por cualquier otro motivo, recomendamos mejor establecer sus puntos en 0. Tenga en cuenta que eliminarlos no afecta su capacidad de ganar puntos en el futuro.

Es importante destacar que, al utilizar _Level Up XP_ en todo el sitio, al eliminarlos desaparecerán del reporte, en cuyo caso no podrá volver a asignarles puntos. Sin embargo, si utiliza _Level Up XP_ por curso, el estudiante puede seguir apareciendo en el reporte si está inscrito en el curso.

¿Realmente desea eliminar los puntos de este usuario?';
$string['reallydeleteuserstateandlogs'] = 'Eliminar un usuario lo elimina de la tabla de posiciones y elimina todos sus registros asociados.

Eliminar los registros puede permitir que un usuario vuelva a ganar puntos por acciones anteriores. Si su intención es solo restablecer sus puntos, le recomendamos que mejor los establezca en 0. Tenga en cuenta que eliminar un usuario no afecta su capacidad de ganar puntos en el futuro.

Es importante destacar que, al usar _Level Up XP_ en todo el sitio, al eliminarlo desaparecerá del reporte, en cuyo caso no podrá volver a asignarle puntos. Sin embargo, si está usando _Level Up XP_ por curso, el estudiante aún puede aparecer en el reporte si está inscrito en el curso.

¿Realmente desea eliminar los puntos y los registros de este usuario?';
$string['reallyresetallcourselevelstodefaults'] = '¿Está seguro de que desea restablecer los niveles predeterminados de TODOS los cursos? Esta acción no es reversible.';
$string['reallyresetallcoursessettingstodefaults'] = '¿Seguro que quiere restablecer la configuración predeterminada de todos los cursos? Esta acción no es reversible.';
$string['reallyresetallcoursestodefaults'] = '¿Está seguro de que desea restablecer las reglas predeterminadas en TODOS los cursos? Esta acción no es reversible.';
$string['reallyresetallcoursevisualstodefaults'] = '¿Está seguro de que desea que la apariencia de los niveles de TODOS los cursos vuelva a la predeterminada? Esta acción no es reversible.';
$string['reallyresetcourselevelstodefaults'] = '¿Está seguro de que desea restablecer los niveles a los valores predeterminados? Esta acción no es reversible.';
$string['reallyresetcourserulestodefaults'] = '¿Está seguro de que desea restablecer las reglas a las predeterminadas? Esta acción no es reversible.';
$string['reallyresetcoursevisualstodefaults'] = '¿Está seguro de que desea restablecer la apariencia predeterminada de los niveles? Esta acción no es reversible.';
$string['reallyresetdata'] = '¿Estás seguro de que deseas restablecer los niveles y puntos de todos los participantes de este curso? Esta acción no es reversible.';
$string['reallyresetgroupdata'] = '¿Realmente reiniciar los niveles y puntos de todos en este grupo?';
$string['reallyreverttopluginsdefaults'] = '¿Realmente reiniciar las reglas por defecto a los valores por defecto sugeridos por el plugin? Esta acción no es reversible.';
$string['recentrewards'] = 'Recompensas recientes';
$string['recommended'] = 'Recomendado';
$string['recommendedplugins'] = 'Plugins recomendados';
$string['releasenotes'] = 'Notas de la versión';
$string['remaining'] = 'restantes';
$string['removefilter'] = 'Quitar filtro';
$string['reportisempty'] = 'El reporte está vacío, los estudiantes necesitan ganar puntos.';
$string['reportisemptyenrolstudents'] = 'El reporte está vacío, ¿se han inscrito estudiantes en este curso?';
$string['requires'] = 'Requiere';
$string['resetallcoursessettingstodefaults'] = 'Seguir este enlace para [restablecer todos los cursos a la configuración predeterminada]({$a->url}). Si ha realizado algún cambio, debes guardarlo previamente. Tenga en cuenta que esto anulará la configuración de todos los cursos y no es reversible. Esto no afecta los niveles, la apariencia ni las reglas predeterminadas; para restablecerlos, consulte las páginas de administración correspondientes.';
$string['resetallcoursestodefaults'] = 'Reiniciar todos los cursos a los valores por defecto';
$string['resetallcoursestodefaultsintro'] = 'Hacer clic en el botón inferior para reiniciar todos los cursos a los valores por defecto de arriba.';
$string['resetcoursedata'] = 'Reiniciar datos del curso';
$string['resetcourserulestodefaults'] = 'Reiniciar reglas del curso a los valores por defecto';
$string['resetcourses'] = 'Reiniciar cursos';
$string['resetgroupdata'] = 'Reiniciar datos del grupo';
$string['resetladderparticiptionofeveryone'] = 'Restablecer el estado de participación de todos';
$string['resetlevelstodefaults'] = 'Reiniciar niveles a predeterminados';
$string['resettodefaults'] = 'Restablecer a predeterminados';
$string['resetvisualstodefaults'] = 'Reiniciar Apariencia a predeterminada';
$string['resultsfilteredforn'] = 'Resultados filtrados por{$a}.';
$string['reverttopluginsdefaults'] = 'Revertir a valores por defecto del plugin';
$string['reverttopluginsdefaultsintro'] = 'Use el botón inferior si le gustaría revertir los valores por defecto de ariba  a los valores por defecto del plugin. Esto no afecta las reglas en cursos existentes.';
$string['reward'] = 'Recompensa';
$string['rule'] = 'Regla';
$string['rule:contains'] = 'contiene';
$string['rule:eq'] = 'es igual a';
$string['rule:eqs'] = 'es estrictamente igual a';
$string['rule:gt'] = 'es mayor que';
$string['rule:gte'] = 'es mayor o igual a';
$string['rule:lt'] = 'es menor que';
$string['rule:lte'] = 'es menor o igual a';
$string['rule:regex'] = 'coincide con el regex';
$string['ruleadded'] = 'La condición ha sido añadida.';
$string['rulecm'] = 'Actividad o recurso';
$string['rulecm_help'] = 'Esta condición es alcanzada cuando el evento ocurre en la actividad o el recurso especificado.';
$string['rulecmdesc'] = 'La actividad o recurso es \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'La actividad o recurso es: \'{$a->contextname}\' en \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Esta condici';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'El evento es \'{$a->eventname}\'';
$string['ruleeventinfo'] = 'Elegir la acción que los usuarios deben realizar dentro de una lista aprobada de eventos.';
$string['rulefilterany'] = 'Cualquiera';
$string['rulefilteranycm'] = 'Cualquier actividad';
$string['rulefilteranycmdesc'] = 'Esta condición coincidirá con cualquier actividad.';
$string['rulefilteranycourse'] = 'Cualquier curso';
$string['rulefilteranycoursedesc'] = 'Esta condición coincidirá con cualquier curso.';
$string['rulefilteranydesc'] = 'Esta condición coincide con cualquier cosa.';
$string['rulefilteranysection'] = 'Cualquier sección';
$string['rulefilteranysectiondesc'] = 'Esta condición coincide con cualquier sección.';
$string['rulefiltercm'] = 'Actividad específica';
$string['rulefiltercmdesc'] = 'Apunta a una actividad o recurso específico en el curso.';
$string['rulefiltercmname'] = 'Nombre de actividad';
$string['rulefiltercmnamedesc'] = 'Condición basada en el nombre de la actividad.';
$string['rulefilternone'] = 'Nada';
$string['rulefiltersection'] = 'Sección específica';
$string['rulefiltersectiondesc'] = 'Apuntar a una sección específica en el curso.';
$string['rulefilterthiscourse'] = 'Este curso';
$string['rulefilterthiscoursedesc'] = 'Apuntar al curso actual.';
$string['ruleproperty'] = 'Propiedad del evento';
$string['rulepropertydesc'] = 'La propiedad \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Esta condición es para usuarios poderoso con una comprensión técnica de los eventos y sus propiedades.';
$string['ruleset'] = 'Conjuneto de condiciones';
$string['ruleset:all'] = 'TODAS las condiciones son verdaderas';
$string['ruleset:any'] = 'CUALQUIERA de las condiciones es verdadera';
$string['ruleset:none'] = 'NINGUNA de las condiciones es verdadera';
$string['rulesetinfo'] = 'Combinar varias condiciones en una';
$string['rulesformhelp'] = '<p>Este plugin hace uso de EVENTOS para otorgar puntos para acciones llevadas a cabo por los estudiantes. Puede utilizar el formato siguiente para agregar sus propias reglas y ver las que vienen por defecto.</p>
<p>Se aconseja que revise la <a href="{$a->log}">bitácora</a> del plugin para identificar qué eventos se disparan cuando se llevan a cabo ciertas acciones en el curso y también para leer más sobre eventos: <a href="{$a->list}">lista de todos los eventos</a>, <a href="{$a->doc}">Documentos del desarrollador</a>.</p>
<p>Finalmente, queremos hacer notar que el plugin ignora:
<ul>
<li>Las acciones llevadas a cabo por el administrador, invitados y usuarios no ingresados al sitio.</li>
<li>Las acciones llevadas a cabo por usuarios sin la capacidad <em>block/xp:earnxp</em>.</li>
<li>Acciones repetidas en breves intervalos de tiempo, a fin de prevenir trampas.</li>
 <li>Eventos que sean marcados como <em>anónimos</em>, comopor ejemoplo, en una Retroalimentación anónima.</li>
<li>Y los eventos de nivel educativo que no sean  <em>Participativos</em>.</li>
</ul>
</p';
$string['rulesscope'] = 'Alcance';
$string['rulesscope_help'] = 'El alcance de las reglas determina cuándo se aplican.

Las reglas se pueden crear en dos alcances: para todo el sitio y para cursos específicos. Siempre que sea posible, primero se evalúan las reglas específicas de los cursos y luego las reglas para todo el sitio. Este enfoque permite a los educadores crear reglas generales aplicables en todo el sitio (en todo el sitio) y luego ajustarlas para cursos individuales.

- Para todo el sitio: estas reglas son efectivas en todo el sitio, excepto cuando se aplican reglas específicas de cursos.
- Curso: estas reglas son aplicables solo dentro de un curso específico. Tienen prioridad sobre las reglas para todo el sitio.';
$string['ruletypecmcompletion'] = 'Finalización de actividad';
$string['ruletypecmcompletiondesc'] = 'Otorgar puntos cuando una actividad se marca como completada.';
$string['ruletypecoursecompletion'] = 'finalización del curso';
$string['ruletypecoursecompletiondesc'] = 'Otorgar puntos cuando un curso se marca como completado.';
$string['ruletypesectioncompletion'] = 'finalización de sección';
$string['ruletypesectioncompletiondesc'] = 'Otorgar puntos cuando una sección de curso se marca como completada.';
$string['searchandselectcourse'] = 'Buscar y seleccionar un curso';
$string['searchandselectmodule'] = 'Buscar y seleccionar una actividad o recurso';
$string['selectcourse'] = 'Seleccionar curso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Configurar puntos';
$string['settingsoutdatedxppnotice'] = 'Si ve la configuración que aparece a continuación, significa que se ha instalado una versión desactualizada de XP+. Pídale a tu administrador que resuelva el problema instalando las versiones más recientes.';
$string['shortcode:xpbadge'] = 'La insignia que concuerda con el nivel actual del usuario.';
$string['shortcode:xpiflevel'] = 'Mostrar el contenido cuando coincide con el nivel actual del usuario.';
$string['shortcode:xpiflevel_help'] = 'Refiérase a los ejemplos debajo para formatear este código-corto. Cuando un nivel es especificado estrictamente, el contenido será mostrado sin importar las otras reglas.
Las reglas  mayor que y menor que deben todas de coincidir para que se muestre el contenido. ¡Tenga cuidado, ya que esto a veces resulta en que el contenido no se muestre nunca!
Tenga en cuenta que los profesores, u otros usuarios con la capacidad de edición, siempre verán todo.

```
[xpiflevel 1 3 5]
Mostrado si el el nivel del usuario es exactamente 1, 3 o 5.
[/xpiflevel]

[xpiflevel >3]
Mostrado si el el nivel del usuario es mayor de 3.
[/xpiflevel]

[xpiflevel >=3]
Mostrado si el el nivel del usuario es  mayor que o igual a 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
Mostrado si el el nivel del usuario es  mayor que o igual a 10 Y ADEMÁS es estrictamente menos que  20
O QUE es exactamente igual a 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
Nunca mostrado porque el nivel del usuario nunca puede ser menor o igual a 10 Y ADEMÁS ser mayor o igual a 20.
[/xpiflevel]
```

Tenga en cuanta que estos códigos_cortos NO SE PUEDEN anidar uno adentro del otro.';
$string['shortcode:xpladder'] = 'Mostrar una porción de la tabla de posiciones.';
$string['shortcode:xpladder_help'] = 'Por defecto, una porción de la tabla de posiciones que rodea al usuario actual será mostrada.
```
[xpladder]
```

Para mostrar los 10 estudiantes superiores en lugar de los vecinos del usuario actual, configure el parámetro `top`. Opcionalmente Usted puede configurar el número de usuarios a mostrar de forma tal que sean `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Un enlace hacia la tabla de posiciones completa será automáticamente mostrado debajo de la tabla. Si Usted no quiere mostrar tal enlace, añada el argumento `hidelink`.

```
[xpladder hidelink]
```

Por defecto, la tabla no incluye la columna del progreso, que muestra la barra de progreso. Si dicha columna ha sido seleccionada en las columnas adicionales en las configuraciones de la escalera, Usted puede usar el argumento `withprogress` para mostrarla.

```
[xpladder withprogress]
```

Tenga en cuenta que cuando un curso está usando grupos, la tabla de posiciones adivinará lo mejor que pueda de cual grupo  se mostrará la escalera.';
$string['shortcode:xplevelname'] = 'Mostrar el nombre del nivel.';
$string['shortcode:xplevelname_help'] = 'Por defecto la marca muestra el nombre del nivel actual del usuario.
Alternativamente, Usted puede usar el argumento \'level\' para mostrar el nombre de un nivel específico.

```
[xplevelname]
[xplevelname level=5]
```
Si el argumento `level` es proporcionado y el nivel no existe, no se mostrará nada.';
$string['shortcode:xppoints'] = 'Mostrar un número de puntos formateado como puntos de experiencia.';
$string['shortcode:xppoints_help'] = 'De forma predeterminada, muestra la cantidad de puntos del usuario actual. Alternativamente, puede especificar un número para sobre-escribireste valor.

El estilo de los puntos dependerá de si se muestra un valor arbitrario o los puntos del usuario actual. El argumento `plain` (simple) se puede utilizar para eliminar cualquier estilo.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'La barra de progreso hacia el siguiente nivel del usuario actual.';
$string['shortcodeinactiveleaderboarddisabled'] = 'La tabla de clasificación está desactivada y el código corto estará inactivo. Puede activarla en la configuración.';
$string['shortcodexpladderembedintro'] = 'Con el siguiente código corto, la tabla de clasificación se puede insertar en cualquier lugar de este sitio. Usted encontrará más opciones e información en la documentación (https://docs.levelup.plus/xp/docs/how-to/use-shortcodes).';
$string['shortcodexpteamladderembedintro'] = 'Con el siguiente código corto, la tabla de clasificación se puede insertar en cualquier lugar de este sitio. Usted encontrará más opciones e información en la documentación (https://docs.levelup.plus/xp/docs/how-to/use-shortcodes).';
$string['sitewide'] = 'Todo el sitio';
$string['somefeaturesrequireotherplugins'] = 'Algunas características requieren que sean instalados plugins adicionales,';
$string['someoneelse'] = 'Alguien más';
$string['somethinghappened'] = 'Algo pasó';
$string['taskadminnotices'] = 'Avisos para admins';
$string['taskcollectionloggerpurge'] = 'Purgar bitácoras de colección';
$string['taskstateprovisioner'] = 'Proveedor de estado';
$string['taskusagereport'] = 'Reporte de uso';
$string['teamleaderboard'] = 'Clasificación del equipo';
$string['teamleaderboard_help'] = 'La tabla de clasificación del equipo muestra una clasificación de los equipos en función de los puntos acumulados totales de sus miembros.

Los equipos pueden estar formados por grupos de cursos o cohortes. También existen opciones para adaptarse a distintos tamaños de equipo.

[Más información](https://docs.levelup.plus/xp/docs/how-to/setup-team-leaderboard/team-leaderboard?ref=blockxp_help)';
$string['teamleaderboardintro'] = 'La clasificación del equipo es una clasificación de equipos basada en los puntos de sus miembros.';
$string['teams'] = 'Equipos';
$string['thankyou'] = '¡Gracias!';
$string['timebetweensameactions'] = 'Tiempo requerido entre acciones idénticas';
$string['timebetweensameactions_help'] = 'El tiempo mínimo requerido antes de que una acción que ya ocurrió previamente sea aceptada nuevamente. Una acción se considera idéntica si fue colocada en el mismo contexto y objeto; leer una publicación del foro se considerará idéntica si la misma publicación se lee nuevamente. Cuando este valor está vacío o es igual a cero, no aplica.';
$string['timeformaxactions'] = 'Lapso de tiempo para acciones máx.';
$string['timeformaxactions_help'] = 'El lapso de tiempo (en segundos) durante el cual el usuario no debería exceder el número máximo de acciones.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'ahora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}sem';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['tryme'] = 'Pruébeme';
$string['unavailable'] = 'No disponible';
$string['unknownactivitya'] = 'Actividad desconocida ({$a})';
$string['unknownbadgea'] = 'Insignia desconocida ({$a})';
$string['unknownconditiona'] = 'Condición desconocida ({$a})';
$string['unknowneventa'] = 'Evento desconocido ({$a})';
$string['unknownsectiona'] = 'Sección desconocida ({$a})';
$string['unknowntypea'] = 'Tipo desconocida ({$a})';
$string['unlockfeaturewithxpplus'] = 'Des-bloquear esta característica con XP+. <a href="{$a}">Saber más</a>';
$string['unstableversioninstalled'] = 'Versión insetable instalada';
$string['unstableversioninstalledinfo'] = 'Esta versión de Level Up XP (block_xp) aún está en desarrollo y se considera inestable. Utilice una versión oficial.';
$string['updateandpreview'] = 'Subir y previsualizar';
$string['upgradingplugins'] = 'Actualizando los plugins';
$string['urlaccessdeprecated'] = 'El acceso vía esta URL está obsoleto; por favor actualice sus enlaces.';
$string['usagereport'] = 'Compartir reporte de uso';
$string['usagereport_desc'] = 'Periódicamente compartir información anónima del uso con los desarrolladores del plugin. Esta información ayudará a comprender mejor como está siendo usado el plugin y además influirá en su desarrollo. La información compartida contiene información básica acerca del sitio Moodle (URL, versión), y además información del uso del plugin (número de usuarios, puntos ganados, vista de configuraciones, reglas usadas, ...)';
$string['usealgo'] = 'Usar el algoritmo';
$string['usecustomlevelbadges'] = 'Usar insignias de nivel personalizadas';
$string['usecustomlevelbadges_help'] = 'Cuando Usted configura a Si, debe proporcionar una imagen para cada nivel.';
$string['userladderparticipation'] = 'Participación en tabla de posiciones';
$string['userladderparticipation_help'] = 'Determina si el usuario participa actualmente en la clasificación. Esto no afecta a la clasificación del equipo.';
$string['userladderparticipationlocked'] = 'Bloquear la participación hasta';
$string['userladderparticipationlocked_help'] = 'La fecha a partir de la cual el usuario es libre de cambiar su preferencia de participación.';
$string['usingalgo'] = 'Usando algoritmo';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Los valores se han guardado exitosamente.';
$string['viewas'] = 'Ver como';
$string['viewlogs'] = 'Ver bitácoras';
$string['viewtheladder'] = 'Ver la escalera';
$string['visualsintro'] = 'Personalizar la apariencia de los niveles, y el significado de los puntos.';
$string['wewillreplyat'] = 'Le contestaremos a: _{$a}_.';
$string['when'] = 'Cuando';
$string['wherearexpused'] = '¿Donde se usan los puntos?';
$string['wherearexpused_desc'] = 'Cuando se configura en "En los cursos", los puntos obtenidos solo se tendrán en cuenta en el curso en el que se agregó el bloque. Cuando se configura en "En todo el sitio", el usuario "subirá de nivel" en el sitio en lugar de hacerlo de manera selectiva por curso; se utilizarán todos los puntos obtenidos en todo el sitio.';
$string['whoops'] = '¡ Ups !';
$string['xp'] = 'Puntos de experiencia';
$string['xp:addinstance'] = 'Añadir un nuevo bloque';
$string['xp:earnxp'] = 'Ganar puntos';
$string['xp:manage'] = 'Gestionar todos los aspectos de los puntos de experiencia';
$string['xp:myaddinstance'] = 'Añadir el bloque a mi Tablero';
$string['xp:view'] = 'Ver el bloque y sus páginas relacionadas';
$string['xp:viewlogs'] = 'Ver las bitácoras';
$string['xp:viewreport'] = 'Ver el reporte';
$string['xpgaindisabled'] = 'Ganancia depuntos deshabilitada';
$string['xpplusrequired'] = 'XP+ requrido';
$string['xprequired'] = 'XP requerida';
$string['xptogo'] = '[[{$a}]] que faltan';
$string['youleveledupexcl'] = '¡Usted subió de nivel!';
$string['youreachedlevel'] = 'Usted ha alcanzado el nivel:';
$string['youreachedlevela'] = '¡ Usted ha alcanzado el nivel {$a} !';
$string['yourmessage'] = 'Su mensaje';
$string['yourownrules'] = 'Sus propias reglas de Usted';
