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
 * Strings for component 'diary', language 'es_mx', version '4.4'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso denegado';
$string['additionallinks'] = 'Enlaces adicionales para esta actividad y curso:';
$string['addtofeedback'] = 'Añadir a retroalimentación';
$string['alias'] = 'Palabra clave';
$string['aliases'] = 'Palabra(s) clave';
$string['aliases_help'] = 'Cada entrada del Diario puede tener una lista asociada de palabras clave ( o alias).

Ingrese cada palabra clave en una línea nueva (no separadas por comas).';
$string['alwaysopen'] = 'Siempre abierto';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la descripción del diario de arriba solamente se volverá visible a los estudiantes en la fecha de "Hora de apertura"-';
$string['and'] = 'y';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Opcionalmente Usted puede anexar uno o más archivos a una entrada del Diario.';
$string['autorating'] = 'Auto-valoración';
$string['autorating_descr'] = 'Si se habilita, la valoración para una entrada será calculada automáticamente basada en las configuraciones de números Min/Max.';
$string['autorating_help'] = 'Esta configuración, junto con los números Min/Max, define los predeterminados para auto-valoración en todos los diarios nuevos.';
$string['autorating_title'] = 'Auto-valoración habilitada';
$string['autoratingbelowmaxitemdetails'] = 'Auto-valoración requiere {$a->one} o más {$a->two} con un castigo posible de  {$a->three}% por cada faltante.<br>Usted tiene {$a->four}. Usted necesita contar con  {$a->five}. La penalización posible es de {$a->six} puntos.';
$string['autoratingitempenaltymath'] = 'El cálculo para el castigo de valoración automática del elemento es (max({$a->one} - {$a->two}, 0)) * {$a->three} =  {$a->four}.<br> Nota: max impide números negativos causados por tener más de lo necesario.';
$string['autoratingitempercentset'] = 'Configuración de porcentaje de auto-valoración: {$a}%';
$string['autoratingovermaxitemdetails'] = 'El límite de auto-valoración es un máximo de {$a->one} {$a->two} con una penalización posible de {$a->three}% por cada adicional.<br>Usted tiene {$a->four}, lo que son {$a->five} en exceso. La penalización posible es de {$a->six} puntos.';
$string['availabilityhdr'] = 'Disponibilidad';
$string['avgsylperword'] = 'Sílabas promedio por palabra {$a}';
$string['avgwordlenchar'] = 'Longitud promedio de palabra {$a} caracteres';
$string['avgwordpara'] = 'Palabras promedio por párrafo {$a}';
$string['blankentry'] = 'Entrada vacía';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cancel'] = 'Cancelar transferencia';
$string['chars'] = 'Caracteres:';
$string['charspersentence'] = 'Caracteres por oración';
$string['clearfeedback'] = 'Borrar retroalimentación';
$string['commonerrorpercentset'] = 'Configuración de porcentaje de errores comunes {$a}%';
$string['commonerrors'] = 'Errores comunes';
$string['commonerrors_help'] = 'Los errores comunes están definidos en el "Glosario de errores" asociado con esta pregunta.';
$string['configdateformat'] = 'Esto define como son mostradas la fechas en los reportes de Diario. El valor predeterminado  "M d, Y G:i" es Mes, día, año y formato de hora de 24 horas. Refiérase a Fecha (Date) en el manual de PHP para más ejemplos y constantes predeterminadas de fecha.';
$string['created'] = 'Creatdo hace {$a->one} días y {$a->two} horas.';
$string['createnewprompt'] = 'Crear nuevo prompt';
$string['crontask'] = 'Procesamiento en segundo plano para módulo Diario';
$string['csvexport'] = 'Exportar a .CVS';
$string['currententry'] = 'Entradas actuales del Diario';
$string['currpotrating'] = 'Su valoración potencial actual es: : {$a->one} points, o {$a->two}%.';
$string['datechanged'] = 'Fecha cambiada';
$string['dateformat'] = 'Formato predeterminado de fecha';
$string['datestart'] = 'Configurar fecha para comenzar a usar prompt ID {$a}:';
$string['datestop'] = 'Configurar fecha para dejar de usar prompt ID {$a}:';
$string['daysavailable'] = 'Días disponible';
$string['daysavailable_help'] = 'Si se usa el formato Semanal, Usted puede configurar cuantos días está abierto el Diario para su uso.';
$string['deadline'] = 'Días abierto';
$string['delete'] = 'Eliminar';
$string['deleteallratings'] = 'Eliminar todas las valoraciones';
$string['deleteexconfirm'] = 'Confirmar que está a punto de eliminar escritura del prompt ID';
$string['deletenotenrolled'] = 'Eliminar entradas de usuarios no inscritos';
$string['details'] = 'Detalles:';
$string['detectcommonerror'] = 'Detectado(s) al menos {$a->one}, {$a->two} Hay: {$a->three}
<br>Si estuviera permitido, usted debería corregirlo y re-enviar.';
$string['diary:addentries'] = 'Añadir entradas al Diario';
$string['diary:addinstance'] = 'Añadir instancias del Diario';
$string['diary:manageentries'] = 'Gestionar entradas del Diario';
$string['diary:rate'] = 'Valorar entradas del Diario';
$string['diaryclosetime'] = 'Hora de cierre';
$string['diaryclosetime_help'] = 'Si se habilita, Usted puede configurar una fecha para que el diario se cierre y ya no se vuelva a abrir para usarlo.';
$string['diarydescription'] = 'Descripción del Diario';
$string['diaryentrydate'] = 'Configurar fecha para esta entrada';
$string['diaryid'] = 'diaryid al cual transferir';
$string['diarymail'] = 'Saludos {$a->user},
{$a->teacher} ha publicado algo de retroalimentación en su
entrada del Diario para \'{$a->diary}\'.

Usted puede verla anexada a su entrada del Diario:

    {$a->url}';
$string['diarymailhtml'] = 'Saludos {$a->user},<br>
{$a->teacher} ha publicado algo de retroalimentación en su
entrada del Diario para \'<i>{$a->diary}</i>\'.<br /><br />
Usted puede verla anexada a su <a href="{$a->url}">entrada del Diario</a>.';
$string['diarymailhtmluser'] = 'ha publicado una entrada de Diario para \'<i>{$a->diary}</i>\'<br /><br />
Usted puede ver la <a href="{$a->url}">entrada de Diario aquí</a>.<br /><br />Nota: Usted podría necesitar proporcionar retroalimentación o actualizar el estado de la entrada para que la actividad sea configurada a completada.';
$string['diarymailuser'] = 'ha publicado una entrada de Diario para \'{$a->diary}\'

YUsted puede ver la entrada aquí:

    {$a->url}

Nota: Usted podría necesitar proporcionar retroalimentación o actualizar el estado de la entrada para que la actividad sea configurada a completada.';
$string['diaryname'] = 'Nombre del Diario';
$string['diaryopentime'] = 'Hora de apertura';
$string['diaryopentime_help'] = 'Si se habilita, Usted puede configurar una fecha para que el diario se abra para usarlo.';
$string['diarytitle'] = 'Título';
$string['diarytitle_help'] = 'Usted puede añadir un título o una descripción opcional.';
$string['editall'] = 'Editar todas las entradas';
$string['editall_help'] = 'Cuando se habilita, los usuarios pueden editar cualquier entrada.';
$string['editdates'] = 'Editar fechas de entradas';
$string['editdates_help'] = 'Cuando se habilita, los usuarios pueden editar la fecha de cualquier entrada.';
$string['editingended'] = 'El período de edición ha terminado';
$string['editingends'] = 'El período de edición termina';
$string['editthisentry'] = 'Editar esta entrada';
$string['edittopoflist'] = 'Editar parte superior de la lista';
$string['eeditlabel'] = 'Editar';
$string['emaillater'] = 'Email más tarde';
$string['emailnow'] = 'Email ahorita';
$string['emailpreference'] = 'Alternar emails';
$string['enableautorating'] = 'Habilitar valoración automática';
$string['enableautorating_help'] = 'Habilitar, o deshabilitar, valoraciones automáticas';
$string['enablestats'] = 'Habilitar estadísticas';
$string['enablestats_descr'] = 'Si se habilita, serán mostradas las estadísticas para cada entrada.';
$string['enablestats_help'] = 'Habilitar, o deshabilitar, ver estadísticas para cada entrada.';
$string['enablestats_title'] = 'Habilitar estadísticas';
$string['enabletitles'] = 'Títulos elegibles';
$string['enabletitles_descr'] = 'Si se habilita, los títulos para cada entrada serán solicitados y mostrados.';
$string['enabletitles_help'] = 'Habilitar o deshabilitar, solicitar títulos para cada entrada.';
$string['enabletitles_title'] = 'Habilitar títulos';
$string['entries'] = 'Entradas';
$string['entry'] = 'Entrada';
$string['entrybgc'] = 'Color del fondo de entrada/retroalimentación del Diario';
$string['entrybgc_colour'] = '#93FC84';
$string['entrybgc_descr'] = 'Esto configura el color del fondo de una entrada/retroalimentación del Diario.';
$string['entrybgc_help'] = 'Esto configura el color del fondo general de cada entrada del Diario y retroalimentación.';
$string['entrybgc_title'] = 'Color de entrada/retroalimentación del Diario.';
$string['entrycomment'] = 'Comentario de la entrada';
$string['entrysuccess'] = 'Su entrada ha sido guardada. Podría necesitar ser revisada o valorada antes de que la actividad sea configurada a completada.';
$string['entrytextbgc'] = 'Color del fondo del texto del Diario';
$string['entrytextbgc_colour'] = '#EEFC84';
$string['entrytextbgc_descr'] = 'Esto configura el color del fondo del texto en una entrada del Diario.';
$string['entrytextbgc_help'] = 'Esto configura el color del fondo del texto en una entrada del Diario.';
$string['entrytextbgc_title'] = 'Color del fondo del texto del Diario.';
$string['errorbehavior'] = 'Comportamiento de error de asociación';
$string['errorbehavior_help'] = 'Estas configuraciones refinan el comportamiento de asociación para entradas en el Glosario de errores comunes.';
$string['errorcmid'] = 'Glosario de errores';
$string['errorcmid_help'] = 'Elegir el Glosario que contiene una lista de errores comunes. Cada vez que un error es encontrado en la respuesta de ensayo, la penalización especificada será restada del puntaje del estudiante para esta entrada.';
$string['errorfullmatch'] = 'Error en el comportamiento de coincidencia';
$string['errorfullmatch_help'] = 'Esta configuración refina el comportamiento de la coincidencia para entradas en el Glosario de errores Comunes.';
$string['errorpercent'] = 'Penalización por error';
$string['errorpercent_help'] = 'Seleccionar el porcentaje de la valoración total que deberá ser restado por cada error que sea encontrado en la respuesta.';
$string['errp'] = 'Err %:';
$string['eventdiarycreated'] = 'Diario creado';
$string['eventdiarydeleted'] = 'Diario eliminado';
$string['eventdiaryviewed'] = 'Diario visto';
$string['eventdownloadentriess'] = 'Descargar entradas';
$string['evententriesviewed'] = 'Entradas de Diario vistas';
$string['evententrycreated'] = 'Entrada de Diario creada';
$string['evententryupdated'] = 'Entrada de Diario actualizada';
$string['eventfeedbackupdated'] = 'Retroalimentación de Diario actualizada';
$string['eventinvalidentryattempt'] = 'Intento inválido de entrada de Diary';
$string['eventpromptcreated'] = 'Prompt creado';
$string['eventpromptedited'] = 'Prompt editado';
$string['eventpromptinuse'] = 'Eliminación de prompt evitada';
$string['eventpromptremoved'] = 'Prompt eliminado';
$string['eventpromptsviewed'] = 'Prompts vistos';
$string['eventxfrentries'] = 'Transferencia de entrada de Journal al Diario';
$string['exportfilename'] = 'entradas.csv';
$string['exportfilenamep1'] = 'Todo_el_Sitio';
$string['exportfilenamep2'] = '_Entradas_de_Diario_Exportadas_En_';
$string['feedbackupdated'] = 'Retroalimentación actualizada para {$a} entradas';
$string['files'] = 'Archivos';
$string['firstentry'] = 'Primeras entradas del Diario:';
$string['fkgrade'] = 'Calificación FK';
$string['fkgrade_help'] = 'El nivel de calificación Flesch Kincaid indica el número de años de educación requeridos para comprender este texto. Intente apuntar para un nivel de calificación debajo de 10.';
$string['fogindex'] = 'Índice de niebla';
$string['fogindex_help'] = 'El índice de niebla de Gunning es una medida de legibilidad. Es calculado usando la fórmula siguiente.

 ((palabras por oración) + (palabras largas por oración)) x 0.4

Intente buscar un nivel de calificación debajo de q0. Para más información, vea: <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['for'] = 'para el sitio:';
$string['format'] = 'Formato';
$string['freadingease'] = 'Facilidad de lectura Flesch';
$string['freadingease_help'] = 'Facilidad de lectura Flesch: puntajes altos indican que su texto es más fácil de leer mientras que puntajes más bajos indican que su texto es más difícil de leer, Intente buscar una facilidad de lectura mayor de 60.';
$string['generalerror'] = 'Hubo un error.';
$string['generalerrorinsert'] = 'No se pudo insertar una nueva entrada del Diario.';
$string['generalerrorupdate'] = 'No se pudo actualizar su Diario.';
$string['gradeingradebook'] = 'Valoración actual en Libro de Calificaciones';
$string['highestgradeentry'] = 'Entrada más valorada';
$string['idlable'] = '(ID: {$a})';
$string['incorrectcourseid'] = 'La ID del curso es incorrecta';
$string['incorrectmodule'] = 'La ID del módulo del curso es incorrecta';
$string['invalidaccess'] = 'acceso inválido';
$string['invalidaccessexp'] = '¡Usted no tiene permiso para ver la página a la que intentó acceder! ¡El acceso se guardó en bitácoras!';
$string['invalidtimechange'] = 'Se ha detectado un intento no válido de cambiar esta entrada, hora de creación.';
$string['invalidtimechangenewtime'] = 'La hora del cambio fue: {$a->one}.';
$string['invalidtimechangeoriginal'] = 'La hora original fue: {$a->one}.';
$string['invalidtimeresettime'] = 'La hora fue reiniciada a la hora original de: {$a->one}.';
$string['journalid'] = 'journalid desde el cual transferir';
$string['journalmissing'] = 'Actualmente, no hay ninguna actividad Journal en este curso.';
$string['journaltodiaryxfrdid'] = '<br>Esta es una lista de cada actividad de Diary en este curso.<br><b>    ID</b> | Curso | Nombre del Diary<br>';
$string['journaltodiaryxfrjid'] = 'Esta es una lista de cada actividad de Journal en este curso.<br><b>    ID</b> | Curs | Nombre del Journal<br>';
$string['journaltodiaryxfrp1'] = 'Esta es una función solamente para que el usuario administrador  transfiera entradas de Journal a Diary. Las entradas de varios Jornals pueden ser transferidas a un solo Diario o a varios diarios separados. Esta es una capacidad nueva y aun está en desarrollo.<br><br>';
$string['journaltodiaryxfrp2'] = 'Si usa la casilla de, <b>Transferir y enviar E-mail</b>, cualquier entrada de Journal transferida a una actividad de Diary marcará la nueva entrada como que necesita que un E-mail des enviado al usuario para que sepa que la entrada ha sido transferida a una actividad de Diary.<br><br>';
$string['journaltodiaryxfrp3'] = 'Si usa el botón de, <b>Transferrir sin E-mail</b>, entonces No se enviará un E-mail a cada usuario aunque el proceso añada automáticamente retroalimentación en la nueva entrada de Diary, aunque la entrada original de Journal no tuviera retroalimentación incluida.<br><br>';
$string['journaltodiaryxfrp4'] = 'El nombre de este curso en el que usted está trabajando es: <b> {$a->one}</b>, con una ID del curso de: <b> {$a->two}</b><br><br>';
$string['journaltodiaryxfrp5'] = 'Si elige incluir retroalimentación respecto a la transferencia y la entrada de Jornal aun no tiene ninguna retroalimentación, usted será automáticamente añadido como el profesor para la entrada para evitar un error.<br><br>';
$string['journaltodiaryxfrtitle'] = 'Transferencia Journal a Diary';
$string['lastnameasc'] = 'Apellido(s) ascendentes';
$string['lastnamedesc'] = 'Apellido(s) descendientes';
$string['latestmodifiedentry'] = 'Entradas modificadas más recientemente:';
$string['lexicaldensity'] = 'Densidad léxica';
$string['lexicaldensity_help'] = 'La densidad léxica es un porcentaje calculado usando la fórmula siguiente.

 100 x (número de palabras únicas) / (número total de palabras)

Así pues, un ensayo en el cual muchas palabras están repetidas tiene una densidad léxica baja, mientras que un ensayo con muchas palabras únicas tiene una densidad léxica alta.';
$string['longwords'] = 'Palabras largas únicas';
$string['longwords_help'] = 'Las palabras largas son palabras que tienen tres o más sílabas. Tenga en cuenta que el algoritmo para determinar el número de sílabas proporciona solamente resultados aproximados.';
$string['longwordspersentence'] = 'Palabras largas por oración';
$string['lowestgradeentry'] = 'Entradas menos valoradas';
$string['mailed'] = 'Enviado';
$string['mailsubject'] = 'Retroalimentación del Diario';
$string['max'] = 'máx';
$string['maxc'] = 'Máx:';
$string['maxchar'] = 'N{umero máximo de caracteres';
$string['maxchar_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar menos caracteres que el número máximo enlistado, o recibirá un castigo por cada uno de los caracteres extra.';
$string['maxcharacterlimit'] = 'Máximo número de caracteres';
$string['maxcharacterlimit_desc'] = 'Nota: Esta entrada puede usar un <strong>máximo de {$a} caaracteres.</strong>';
$string['maxcharacterlimit_help'] = 'Si se introduce un número, el usuario necesita usar menos caracteres que el número máximo enlistado.';
$string['maxparagraph'] = 'Número máximo de párrafos';
$string['maxparagraph_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar menos párrafos que el número máximo enlistado, o recibirá un castigo por cada uno de los párrafos extra.';
$string['maxparagraphlimit'] = 'Número máximo de párrafos';
$string['maxparagraphlimit_desc'] = 'Nota: Esta entrada puede usar un <strong>máximo de {$a} párrafos.</strong>';
$string['maxparagraphlimit_help'] = 'Si se introduce un número, el usuario necesita usar menos párrafos que el número máximo enlistado.';
$string['maxpossrating'] = 'La valoración máxima posible para esta entrada es de {$a} puntos.';
$string['maxsentence'] = 'Número máximo de oraciones';
$string['maxsentence_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar menos oraciones que el número máximo enlistado, o recibirá un castigo por cada una de las oraciones extra.';
$string['maxsentencelimit'] = 'Número máximo de oraciones';
$string['maxsentencelimit_desc'] = 'Nota: Esta entrada puede usar un <strong>máximo de {$a} oraciones.</strong>';
$string['maxsentencelimit_help'] = 'Si se introduce un número, el usuario necesita usar menos oraciones que el número máximo enlistado.';
$string['maxword'] = 'Número máximo de palabras';
$string['maxword_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar menos palabras que el número máximo enlistado, o recibirá un castigo por cada una de las palabras extra.';
$string['maxwordlimit'] = 'Número máximo de palabras';
$string['maxwordlimit_desc'] = 'Nota: Esta entrada puede usar un <strong>máximo de {$a} palabras.</strong>';
$string['maxwordlimit_help'] = 'Si se introduce un número, el usuario necesita usar menos palabras que el número máximo enlistado.';
$string['mediumwords'] = 'Palabras medianas únicas';
$string['mediumwords_help'] = 'Las palabras medianas son palabras que tienen dos sílabas. Tenga en cuenta que el algoritmo para determinar el número de sílabas solamente proporciona resultados aproximados.';
$string['min'] = 'min';
$string['minc'] = 'Mín:';
$string['minchar'] = 'Número mínimo de caracteres';
$string['minchar_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar más caracteres que el número mínimo enlistado, o recibirá un castigo por cada uno de los caracteres faltantes.';
$string['mincharacterlimit'] = 'Número mínimo de caracteres';
$string['mincharacterlimit_desc'] = 'Nota: Esta entrada debe usar un <strong>mínimo de {$a} caracteres.</strong>';
$string['mincharacterlimit_help'] = 'Si se introduce un número, el usuario necesita usar más caracteres que el número mínimo enlistado.';
$string['minmaxcharpercent'] = 'Penalización por error en Min/Máx número de caracteres';
$string['minmaxcharpercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería de ser deducido por cada error de conteo de palabras Min/Max.';
$string['minmaxhdr'] = 'Números Min/Máx';
$string['minmaxhdr_help'] = 'Estas configuraciones definen los predeterminados para caracteres mínimos y máximos y número de palabras en todos los Diarios nuevos.';
$string['minmaxparagraphpercent'] = 'Castigo del párrafo por error del número Mín/Máx';
$string['minmaxparagraphpercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería ser restado para cada error de Número de párrafos Min/Max.';
$string['minmaxparapercent'] = 'Penalización por error en Min/Máx número de párrafos';
$string['minmaxparapercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería de ser deducido por cada error de conteo de palabras Min/Max.';
$string['minmaxpercent'] = 'Penalización por error en Min/Máx número';
$string['minmaxpercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería de ser deducido por cada error de conteo de palabras Min/Max.';
$string['minmaxsentencepercent'] = 'Castigo de la oración por error del número Mín/Máx';
$string['minmaxsentencepercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería ser restado para cada error de Número de párrafos Min/Max.';
$string['minmaxsentpercent'] = 'Penalización por error en Min/Máx número de oraciones';
$string['minmaxsentpercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería de ser deducido por cada error de conteo de palabras Min/Max.';
$string['minmaxwordpercent'] = 'Penalización por error en Min/Máx número de palabras';
$string['minmaxwordpercent_help'] = 'Seleccionar el porcentaje de la valoración total que debería de ser deducido por cada error de conteo de palabras Min/Max.';
$string['minparagraph'] = 'Número mínimo de párrafos';
$string['minparagraph_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar más párrafos que el número mínimo enlistado, o recibirá un castigo por cada uno de los párrafos faltantes.';
$string['minparagraphlimit'] = 'Número mínimo de párrafos';
$string['minparagraphlimit_desc'] = 'Nota: Esta entrada debe tener un <strong>mínimo de {$a} párrafos.</strong>';
$string['minparagraphlimit_help'] = 'Si se introduce un número, el usuario necesita usar más párrafos que el número mínimo enlistado.';
$string['minsentence'] = 'Número mínimo de oraciones';
$string['minsentence_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar más oraciones que el número mínimo enlistado, o recibirá un castigo por cada una de las oraciones faltantes.';
$string['minsentencelimit'] = 'Número mínimo de oraciones';
$string['minsentencelimit_desc'] = 'Nota: Esta entrada debe tener un <strong>mínimo de {$a} oraciones.</strong>';
$string['minsentencelimit_help'] = 'Si se introduce un número, el usuario necesita usar más oraciones que el número mínimo enlistado.';
$string['minword'] = 'Número mínimo de palabras';
$string['minword_help'] = 'Si se introduce un número mayor que cero, el usuario debe usar más palabras que el número mínimo enlistado, o recibirá un castigo por cada una de las palabras faltantes.';
$string['minwordlimit'] = 'Número mínimo de palabras';
$string['minwordlimit_desc'] = 'Nota: Esta entrada debe tener un <strong>mínimo de {$a} palabras.</strong>';
$string['minwordlimit_help'] = 'Si se introduce un número, el usuario necesita usar más palabbras que el número mínimo enlistado.';
$string['missing'] = 'Faltantes';
$string['modulename'] = 'Diario';
$string['modulename_help'] = 'La actividad Diario le permite a los profesores obtener retroalimentación de sus estudiantes en un período de tiempo.';
$string['modulenameplural'] = 'Diarios';
$string['needsgrading'] = 'Esta entrada no ha sido valorada ni retroalimentada aun.';
$string['needsregrade'] = 'Esta entrada ha cambiado desde que se dio retroalimentación o una valoración.';
$string['newdiaryentries'] = 'Nuevas entradas del Diario';
$string['nextentry'] = 'Entrada siguiente';
$string['nodeadline'] = 'Siempre abierto';
$string['noentriesmanagers'] = 'No hay profesores';
$string['noentry'] = 'Sin entradas.';
$string['noratinggiven'] = 'Sin valoración dada';
$string['notextdetected'] = '<b>¡No se detectó texto alguno!</b>';
$string['notopenuntil'] = 'Este Diario no será abierto hasta después de';
$string['notstarted'] = 'Usted aun no ha iniciado este Diario';
$string['numwordscln'] = '{$a->one} palabras de texto limpio incluyendo {$a->two} caracteres, NO incluyendo {$a->three} espacios.';
$string['numwordsnew'] = 'Nuevo cálculo: {$a->one} palabras de texto crudo usando {$a->two} caracteres, en {$a->three} oraciones, en {$a->four} párrafos.';
$string['numwordsraw'] = '{$a->one} palabras de texto crudo usando  {$a->two} caracteres, includingyendo {$a->three} espacios';
$string['numwordsstd'] = '{$a->one} palabras estandarizadas usando {$a->two} caracteres, incluyendo {$a->three} espacios.';
$string['outof'] = 'de un total de {$a} entradas.';
$string['overallrating'] = 'Valoración general';
$string['pagesize'] = 'Entradas por página';
$string['paragraphs'] = 'Párrafos:';
$string['percentofentryrating'] = '{$a}% del valor de la entrada.';
$string['phrasecasesensitiveno'] = 'La concordancia usa MAYÚSCULAS/minúsculas';
$string['phrasecasesensitiveyes'] = 'La concordancia usa MAYÚSCULAS/minúsculas';
$string['phrasefullmatchno'] = 'Concordar palabras completas o parciales';
$string['phrasefullmatchyes'] = 'Concordar solamente palabras completas.';
$string['phraseignorebreaksno'] = 'Reconocer saltos de línea.';
$string['phraseignorebreaksyes'] = 'Ignorar saltos de línea.';
$string['pluginadministration'] = 'Administración de módulo Diario';
$string['pluginname'] = 'Diario';
$string['popoverhelp'] = 'clic para información';
$string['potautoratingerrpen'] = 'Penalización por error de auto-valoración potencial: {$a->one}% o {$a->two} puntos menos.';
$string['potcommerrpen'] = 'Penalización por Error Potencial Común: {$a->one} * {$a->two} = {$a->three}% o {$a->four} puntos menos.';
$string['present'] = 'Presente';
$string['previousentry'] = 'Entrada anterior';
$string['privacy:metadata:diary_entries'] = 'Un registro de una entrada del diario.';
$string['privacy:metadata:diary_entries:diary'] = 'La ID de la actividad Diario en la cual fue publicada la entrada.';
$string['privacy:metadata:diary_entries:entrycomment'] = 'La retroalimentación del profesor y posiblemente, retroalimentación por auto valoración.';
$string['privacy:metadata:diary_entries:mailed'] = '¿Ya le han mandado Email a este usuario?';
$string['privacy:metadata:diary_entries:promptdatestart'] = 'La fecha en que comenzó a usarse el prompt de escritura automático.';
$string['privacy:metadata:diary_entries:promptdatestop'] = 'La fecha en que dejó de usarse el prompt de escritura automático.';
$string['privacy:metadata:diary_entries:promptid'] = 'La ID del prompt de escritura automático usado para auto-valoración y retroalimentación.';
$string['privacy:metadata:diary_entries:prompttext'] = 'El texto del prompt de escritura usado para auto-valoración y retroalimentación.';
$string['privacy:metadata:diary_entries:rating'] = 'La calificación numérica para esta entrada del diario. Puede ser determinada por escalas/formatoavanzadodeevaluación, etx... pero siempre será convertida de vuelta a un número de punto flotante.';
$string['privacy:metadata:diary_entries:teacher'] = 'La ID del usuario de la persona que valora la entrada.';
$string['privacy:metadata:diary_entries:text'] = 'El contenido de esta entrada.';
$string['privacy:metadata:diary_entries:timecreated'] = 'Hora de cuando fue creada la entrada.';
$string['privacy:metadata:diary_entries:timemarked'] = 'Hora de cuando fue valorada la entrada.';
$string['privacy:metadata:diary_entries:timemodified'] = 'Hora de cuando fue modificada por última vez la entrada.';
$string['privacy:metadata:diary_entries:userid'] = 'ID del usuario.';
$string['prompt'] = 'Escriba su prompt de escritura';
$string['promptbgc'] = 'Color de fondo para este prompt';
$string['promptbgc_help'] = 'Esto configura el color general de fondo para este prompt.';
$string['promptid'] = 'Prompt id';
$string['promptinfo'] = 'Hay {$a->past} prompts anteriores, {$a->current} prompt actual, y {$a->future} prompts futuros para esta actividad de Diario.<br>';
$string['promptmaxc'] = 'Caract máx';
$string['promptmaxp'] = 'Párraf máx';
$string['promptmaxs'] = 'Oraciones máx';
$string['promptmaxw'] = 'Palabras máx';
$string['promptminc'] = 'Caract mín';
$string['promptminmaxcp'] = 'Car %';
$string['promptminmaxpp'] = 'Cárr %';
$string['promptminmaxsp'] = 'Enviadas %';
$string['promptminmaxwp'] = 'Palabras %';
$string['promptminp'] = 'Párraf mín';
$string['promptmins'] = 'Enviadas mín';
$string['promptminw'] = 'Palabras mín';
$string['promptremovefailure'] = 'Este prompt, ID {$a}, está en uso y no puede ser eliminado.';
$string['promptremovesuccess'] = 'Usted ha quitado exitosamente prompt, ID {$a}.';
$string['promptstart'] = 'Prompt inicia';
$string['promptstitle'] = 'Prompts de escritura de Diario';
$string['promptstop'] = 'Prompt se detiene';
$string['promptsviewtitle'] = 'Ver prompts de escritura';
$string['prompttext'] = 'Texto del Prompt';
$string['promptzerocount'] = '<td>Actualmente, hay, {$a} prompts para esta actividad de Diario. </td>';
$string['rate'] = 'Valorar';
$string['rating'] = 'Valoración para esta entrada';
$string['reload'] = 'Recargar y mostrar entradas del Diario desde actuales hasta más antiguas';
$string['removealldiarytags'] = 'Quitar todas las marcas del Diario';
$string['removeentries'] = 'Quitar todas las entradas';
$string['removemessages'] = 'Quitar todas las entradas del Diario';
$string['reportsingle'] = 'Obtener todas las entradas del Diario para este usuario.';
$string['reportsingleallentries'] = 'Todas las entradas del Diario para este usuario.';
$string['returnto'] = 'Regresar a {$a}';
$string['returntoreport'] = 'Regresar a la página del reporte para - {$a}';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['savesettings'] = 'Guardar configuraciones';
$string['search'] = 'Buscar';
$string['search:activity'] = 'Diario - información de actividad';
$string['search:entry'] = 'Diario - entradas';
$string['search:entrycomment'] = 'Diario - comentario de entrada';
$string['selectentry'] = 'Seleccionar entrada para marcarla';
$string['sentences'] = 'Oraciones:';
$string['sentencesperparagraph'] = 'Oraciones por párrafo';
$string['shortwords'] = 'Palabras cortas únicas';
$string['shortwords_help'] = 'Las palabras cortas son palabras que solamente tienen una sílaba. Tenga en cuenta que el algoritmo para determinar el número de sílabas solamente da resultados aproximados.';
$string['showlistno'] = 'No ocultar ninguna entrada';
$string['showlistpreference'] = 'Mostrar usuarios sin entradas';
$string['showlistyes'] = 'No mostrar ninguna entrada';
$string['shownone'] = 'Mostrar ninguno';
$string['showoverview'] = 'Mostrar vista global de Diarios en mi moodle';
$string['showrecentactivity'] = 'Mostrar actividad reciente';
$string['showstudentsonly'] = 'Mostrar estudiantes solamente';
$string['showteacherandstudents'] = 'Mostrar profesor y estudiantes';
$string['showteachersonly'] = 'Mostrar profesores solamente';
$string['showtextstats'] = '¿Mostrar estadísticas del texto?';
$string['showtextstats_help'] = 'Si esta opción es habilitada, serán mostradas estadísticas acerca del texto.';
$string['showtostudentsonly'] = 'Si; mostrar solo a estudiantes';
$string['showtoteachersandstudents'] = 'Si; mostrar a profesores y estudiantes';
$string['showtoteachersonly'] = 'Si; mostrar solo a profesores';
$string['sortcurrententry'] = 'Desde la entrada actual del Diario a la primera entrada.';
$string['sortfirstentry'] = 'Desde la primera entrada del Diario hasta la más reciente.';
$string['sorthighestentry'] = 'Desde la entrada más valorada del Diario hasta la menos valorada.';
$string['sortlastentry'] = 'Desde la entrada modificada más reciente del Diario hasta la más antigua.';
$string['sortlowestentry'] = 'Desde la entrada menos valorada del Diario hasta la más valorada.';
$string['sortoptions'] = 'Opciones para ordenar:';
$string['sortorder'] = 'El orden de ordenamiento es:';
$string['startnewentry'] = 'Comenzar nueva entrada';
$string['startoredit'] = 'Iniciar nueva entrada o editar la de hoy';
$string['statshdr'] = 'Estadísticas del texto';
$string['statshdr_help'] = 'Estas configuraciones definen los predterminados para las estadísticas en todos los Diarios nuevos.';
$string['statshide'] = 'Ocultar estadísticas';
$string['statsshow'] = 'Mostrar estadísticas';
$string['studentemail'] = 'Mandar notificaciones por Email a estudiantes';
$string['studentemail_help'] = 'Habilitar o deshabilitar la capacidad de enviar inmediatamente notificaciones por Email a estudiantes.';
$string['tablecolumncharacters'] = 'Caracteres';
$string['tablecolumnedit'] = 'Editar&nbsp;&nbsp;&nbsp;&nbsp;';
$string['tablecolumnparagraphs'] = 'Párrafos';
$string['tablecolumnprompts'] = 'Prompts';
$string['tablecolumnpromptsbgc'] = 'Color del fondo del prompt';
$string['tablecolumnsentences'] = 'Oraciones';
$string['tablecolumnstart'] = 'Inicio';
$string['tablecolumnstatus'] = 'Estado';
$string['tablecolumnstop'] = 'Detener';
$string['tablecolumnwords'] = 'Palabras&nbsp;&nbsp;&nbsp;&nbsp;';
$string['tagarea_diary_entries'] = 'Entradas de Diary';
$string['tcount'] = 'Actualmente, esta actividad de Diario tiene un total de {$a} prompts de escritura que le pertenecen.<br>';
$string['teacher'] = 'Profesor';
$string['teacheremail'] = 'Enviar notificaciones por Email a profesores';
$string['teacheremail_help'] = 'Habilitar o deshabilitar la capacidad de enviar inmediatamente notificaciones por Email a profesores.';
$string['text'] = 'Escriba su prompt de escritura';
$string['text_editor'] = 'Texto del prompt';
$string['textstatitems'] = 'Elementos estadísticos';
$string['textstatitems_help'] = 'Seleccionar cualquier elemento aquí que usted quiera que aparezca en las estadísticas en texto que son mostradas en una página de vista, página de reporte, y página de reporte único.';
$string['timecreated'] = 'Hora de creada';
$string['timemarked'] = 'Hora de marcada';
$string['timemodified'] = 'Hora de modificada';
$string['toolbar'] = 'Barra de herramientas:';
$string['totalsyllables'] = 'Total de Sílabas {$a}';
$string['transfer'] = 'Transferir entrada';
$string['transferwemail'] = 'Transferir y enviar Email. <b>Predeterminado: No enviar Email</b>';
$string['transferwfb'] = 'Transferir e incluir retroalimentación respecto a la transferencia. <b>Predeterminado: No incluir retroalimentación</b>';
$string['transferwfbmsg'] = '<br> Esta entrada fue transferida desde el Journal llamado:  {$a}';
$string['transferwoe'] = 'Trasnferir sin Email';
$string['uniquewords'] = 'Palabras únicas';
$string['userid'] = 'ID del usuario';
$string['usertoolbar'] = 'Barra de herramientas del usuario:';
$string['viewalldiaries'] = 'Ver todos los diarios del curso';
$string['viewallentries'] = 'Ver {$a} entradas del Diario';
$string['viewentries'] = 'Ver entradas';
$string['warning'] = '<b>ADVERTENCIA - Usted tiene {$a} prompts actuales, lo que es un error. ¡Usted NO puede tener múltiples fechas que se sobrepongan! ¡Esto necesita ser corregido!</b><br>';
$string['words'] = 'Palabras:';
$string['wordspersentence'] = 'Palabras por oración';
$string['writingpromptlable'] = 'Prompt de escritura actual: {$a->counter} (ID: {$a->entryid}) que inició en {$a->starton} y terminará en {$a->endon}.<br>{$a->datatext}';
$string['writingpromptlable2'] = 'Prompt de escritura:';
$string['writingpromptlable3'] = 'Editor del Prompt de Escritura';
$string['writingpromptnotused'] = 'Las configuraciones normales de Diary fueron usadas para estas configuraciones de porcentaje de auto-valoración de entrada';
$string['writingpromptused'] = 'El prompt de escritura con ID: {$a} fue usado para las configuraciones del porcentaje de auto-valoración.';
$string['xfrresults'] = 'Hubo {$a->one} entradas procesadas, y {$a->two} de ellas transferidas.';
