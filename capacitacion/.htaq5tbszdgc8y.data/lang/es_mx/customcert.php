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
 * Strings for component 'customcert', language 'es_mx', version '4.4'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Actividad';
$string['addcertpage'] = 'Añadir página';
$string['addelement'] = 'Añadir elemento';
$string['aligncenter'] = 'Centrado';
$string['alignleft'] = 'Alineación izquierda';
$string['alignment'] = 'Alineación';
$string['alignment_help'] = 'ESta propiedad configura la alineación horizontal del elemento. Algunos elementos podrían no soportar esto, mientras que el comportamiento de otros podría diferir.';
$string['alignright'] = 'Alineación derecha';
$string['awardedto'] = 'Otorgado a';
$string['cannotverifyallcertificates'] = 'Usted no tiene el permiso para verificar todos los certificados en el sitio.';
$string['certificate'] = 'Certificado';
$string['certificateexecutionperiod'] = 'Período de ejecución del certificado';
$string['certificateexecutionperiod_desc'] = 'Si no fuera 0, el trabajo no procesará certificados cuyo curso haya estado inactivo o que la última emisión sea más antigua que la fecha configurada. Esto podría ayudar a mejorar el desempeño del trabajo agendado.';
$string['certificatesperrun'] = 'Certificados por corrida';
$string['certificatesperrun_desc'] = 'Ingresar el número de certificados a procesar por corrida de trabajo agendado donde \' significa que procesará todos los certificados.';
$string['code'] = 'Código';
$string['codegenerationmethod'] = 'Método de generación de código';
$string['codegenerationmethod_desc'] = 'Elija entre los dos métodos para generar códigos de certificado.';
$string['codegenerationmethod_digitshyphens'] = '0123-4567-8901 (Dígitos con guiones)';
$string['codegenerationmethod_upperlowerdigits'] = '6aOdbLEuoC (Cadena aleatoria de mayúsculas, minúsculas y dígitos)';
$string['copy'] = 'Copiar';
$string['coursetimereq'] = 'Minutos requeridos en curso';
$string['coursetimereq_help'] = 'Escriba aquí la cantidad mínima de tiempo, en minutos, que un estudiante debe de permanecer ingresado en el curso antes de que pueda recibir el certificado.';
$string['createtemplate'] = 'Crear platilla';
$string['customcert:addinstance'] = 'Añadir una nueva instancia de certificado personalizado';
$string['customcert:manage'] = 'Gestionar un certificado personalizado';
$string['customcert:manageemailothers'] = 'Gestionar configuraciones de Email de otros';
$string['customcert:manageemailstudents'] = 'Gestionar configuraciones de Email de estudiantes';
$string['customcert:manageemailteachers'] = 'Gestionar configuraciones de Email de profesores';
$string['customcert:managelanguages'] = 'Gestionar idioma en formato de edición';
$string['customcert:manageprotection'] = 'Gestionar configuraciones de protección';
$string['customcert:managerequiredtime'] = 'Gestionar configuración de tiempo requerido';
$string['customcert:manageverifyany'] = 'Gestionar configuraciones de verificación';
$string['customcert:receiveissue'] = 'Recibir un certificado';
$string['customcert:verifyallcertificates'] = 'Verificar todos los certificados en el sitio';
$string['customcert:verifycertificate'] = 'Verificar un certificado';
$string['customcert:view'] = 'Ver un certificado personalizado';
$string['customcert:viewallcertificates'] = 'Ver todos los certificados';
$string['customcert:viewreport'] = 'Reporte de vista del curso';
$string['customcertsettings'] = 'Configuraciones de certificado personalizado';
$string['customfilenamepattern'] = 'Patrón del nombre de curso faltante';
$string['customfilenamepattern_help'] = 'Escribir el patrón para nombrar los archivos de certificado. Puede emplear reemplazables como {firstname}, {lastname}, {group}, {coursename}, {date}.';
$string['deletecertpage'] = 'Eliminar página';
$string['deleteconfirm'] = 'Confirmación de eliminación';
$string['deleteelement'] = 'Eliminar elemento';
$string['deleteelementconfirm'] = '¿Está Usted seguro de querer eliminar este elemento?';
$string['deleteissueconfirm'] = '¿ Está seguro de querer eliminar esta emisión del certificado ?';
$string['deleteissuedcertificates'] = 'Eliminar certificados emitidos';
$string['deletepageconfirm'] = '¿Está Usted seguro de querer eliminar esta página del certificado?';
$string['deletetemplateconfirm'] = '¿Está Usted seguro de querer eliminar esta plantilla de certificado?';
$string['deliveryoptiondownload'] = 'Enviar al navegador y forzar una descarga de archivo';
$string['deliveryoptioninline'] = 'Enviar el archivo en línea al navegador';
$string['deliveryoptions'] = 'Opciones para entregar';
$string['description'] = 'Descripción';
$string['downloadallissuedcertificates'] = 'Descargar todos los certificados emitidos';
$string['downloadallsitecertificates'] = 'Descargar todos los certificados del sitio';
$string['downloadallsitecertificatesdesc'] = 'Esto descargará todos los certificados del sitio en un archivo ZIP.';
$string['duplicate'] = 'Duplicar';
$string['duplicateconfirm'] = 'Confirmación de duplicación';
$string['duplicatetemplateconfirm'] = '¿ Está seguro de querer duplicar esta plantilla de certificado ?';
$string['editcustomcert'] = 'Editar certificado';
$string['editelement'] = 'Editar elemento';
$string['edittemplate'] = 'Editar plantilla';
$string['elementheight'] = 'Altura';
$string['elementheight_help'] = 'Especificar la altura del elemento. Si \'0\' está permitido es calculada automáticamente.';
$string['elementname'] = 'Nombre del elemento';
$string['elementname_help'] = 'Este será el nombre usado para identificar este elemento al editar un certificado personalizado. Nota: Esto no se mostrará en el PDF.';
$string['elementplugins'] = 'Plugins de elementos';
$string['elements'] = 'Elementos';
$string['elements_help'] = 'Esta es la lista de los elementos que se mostrarán en el certificado.

Por favor tenga en cuenta que: Los elementos son renderizados en este orden. El orden puede cambiarse al usar las flechas junto a cada elemento.';
$string['elementwidth'] = 'Ancho';
$string['elementwidth_help'] = 'Especificar el ancho del elemento. Si \'0\' está permitido, es calculado automáticamente.';
$string['emailnonstudentbody'] = 'Adjunto está el certificado \'{$a->certificatename}\' para \'{$a->userfullname}\' para el curso \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'Anexo está el certificado \'{$a->certificatename}\' para \'{$a->userfullname}\' para el curso \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Ver reporte de certificado';
$string['emailnonstudentfooter'] = '<a href="{$a->emailcertificatelink}">{$a->emailcertificatelinktext}</a>.';
$string['emailnonstudentgreeting'] = 'Hola';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Email otros';
$string['emailothers_help'] = 'Si se activa, esto mandará las direcciones Email aquí enlistadas (separadas por una coma) con una copia del certificado cuando se vuelva disponible. <strong>Advertencia:</strong> El configurar este campo antes de que haya terminado de crear los certificados mandará por Email a las direcciones un certificado incompleto.';
$string['emailstudentbody'] = 'Anexo está su certificado \'{$a->certificatename}\' para el curso \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'Anexo está su certificado \'{$a->certificatename}\' para el curso \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Ver certificado';
$string['emailstudentfooter'] = '<a href="{$a->emailcertificatelink}">{$a->emailcertificatelinktext}</a>.';
$string['emailstudentgreeting'] = 'Estimado/a {$a}';
$string['emailstudents'] = 'Email estudiantes';
$string['emailstudents_help'] = 'Si se activa, esto enviará Email a los estudiantes con una copia del certificado cuando se vuelva disponible. <strong>Advertencia:</strong> El configurar esto a \'Si\'  antes de que haya terminado de crear los certificados mandará por Email a las direcciones un certificado incompleto.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'Email profesores';
$string['emailteachers_help'] = 'Si se activa, esto enviará Email a los profesores con una copia del certificado cuando se vuelva disponible. <strong>Advertencia:</strong> El configurar esto a \'Si\'  antes de que haya terminado de crear los certificados mandará por Email a las direcciones un certificado incompleto.';
$string['eventelementcreated'] = 'Elemento de certificado personalizado creado';
$string['eventelementdeleted'] = 'Elemento de certificado personalizado eliminado';
$string['eventelementupdated'] = 'Elemento de certificado personalizado actualizado';
$string['eventissuecreated'] = 'Emisión de certificado personalizado creada';
$string['eventissuedeleted'] = 'Emisión de certificado personalizado eliminada';
$string['eventpagecreated'] = 'Página de certificado personalizado creada';
$string['eventpagedeleted'] = 'Página de certificado personalizado eliminada';
$string['eventpageupdated'] = 'Página de certificado personalizado actualizada';
$string['eventtemplatecreated'] = 'Plantilla de certificado personalizado creada';
$string['eventtemplatedeleted'] = 'Plantilla de certificado personalizado eliminada';
$string['eventtemplateupdated'] = 'Plantilla de certificado personalizado actualizada';
$string['exampledatawarning'] = 'Algunos de estos valores podrían solamente ser un ejemplo para asegurar que el correcto posicionamiento de los elementos sea posible.';
$string['font'] = 'Tipo de letra (font)';
$string['font_help'] = 'El tipo de letra (font) usado al generar este elemento.';
$string['fontcolour'] = 'Color';
$string['fontcolour_help'] = 'El color del tipo de letra.';
$string['fontsize'] = 'Tamaño';
$string['fontsize_help'] = 'El tamaño del tipo de letra en puntos.';
$string['getcustomcert'] = 'Ver certificado';
$string['gradeoutcome'] = 'Resultado';
$string['height'] = 'Altura';
$string['height_help'] = 'Esta es la altura del PDF del certificado en mm. Para referencia, una hoja tamaño carta mide 279 mm de alto y una hoja A4 mide 297 mm.';
$string['includeinnotvisiblecourses'] = 'Incluir certificados en cursos ocultos';
$string['includeinnotvisiblecourses_desc'] = 'Los certificados de cursos ocultos no son procesados de forma predeterminada. Si usted quiere incluirlos, habilite esta configuración.';
$string['invalidcode'] = 'Código proporcionado inválido.';
$string['invalidcolour'] = 'Color elegido inválido; por favor, ingrese un nombre de color HTML válido, o un color de 6 dígitos, o un color  HEXadecimal de tres dígitos.';
$string['invalidelementwidthorheightnotnumber'] = 'Por favor escriba un número válido';
$string['invalidelementwidthorheightzeroallowed'] = 'Por favor escriba un número mayor o igual a 0.';
$string['invalidelementwidthorheightzeronotallowed'] = 'Por favor escriba un número mayor de 0.';
$string['invalidheight'] = 'La altura debe de ser un número válido mayor de 0.';
$string['invalidmargin'] = 'El márgen debe de ser un número válido mayor de 0.';
$string['invalidposition'] = 'Por favor seleccione un número positivo para la posición {$a}.';
$string['invalidwidth'] = 'El ancho debe de ser un número válido mayor de 0.';
$string['landscape'] = 'Apaisado';
$string['leftmargin'] = 'Márgen izquierdo';
$string['leftmargin_help'] = 'Este es el margen izquierdo del PDF del certificado en mm.';
$string['listofissues'] = 'Destinatarios: {$a}';
$string['load'] = 'Cargar';
$string['loadtemplate'] = 'Cargar plantilla';
$string['loadtemplatemsg'] = '¿Está Usted seguro de querer cargar esta plantilla? Esto quitará cualquier páginas y elementos existentes para este certificado.';
$string['managetemplates'] = 'Gestionar certificados';
$string['managetemplatesdesc'] = 'Este enlace lo llevará a una nueva pantalla en donde Usted podrá gestionar plantillas usadas por las actividades de Certificado-personalizado en cursos.';
$string['modify'] = 'Modificar';
$string['modulename'] = 'Certificado personalizado';
$string['modulename_help'] = 'Este módulo permite la generación dinámica de certificados PDF.';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'Certificado personalizado';
$string['mycertificates'] = 'Mis certificados';
$string['mycertificatesdescription'] = 'Estos son los certificados que a Usted le han emitido, ya sea por Email o descargándolos manualmente.';
$string['name'] = 'Nombre';
$string['nametoolong'] = 'Usted ha excedido la longitud máxima permitida para el nombre';
$string['nocustomcerts'] = 'No hay certificados para este curso.';
$string['noimage'] = 'Sin imagen';
$string['norecipients'] = 'Sin destinatarios';
$string['notemplates'] = 'Sin plantilla';
$string['notissued'] = 'No otorgado';
$string['notverified'] = 'No verificado';
$string['numbersuffix_nd_as_in_second'] = 'o';
$string['numbersuffix_rd_as_in_third'] = 'o';
$string['numbersuffix_st_as_in_first'] = 'o';
$string['options'] = 'Opciones';
$string['page'] = 'Página {$a}';
$string['pluginadministration'] = 'Administración del certificado personalizado';
$string['pluginname'] = 'Certificado personalizado';
$string['portrait'] = 'Retrato';
$string['posx'] = 'Posición X';
$string['posx_help'] = 'Esta es la posición en mm desde la esquina superior izquierda a donde Usted desea el punto de referencia del elemento para localizarlo en el eje de las X.';
$string['posy'] = 'Posición Y';
$string['posy_help'] = 'Esta es la posición en mm desde la esquina superior izquierda a donde Usted desea el punto de referencia del elemento para localizarlo en el eje de las Y.';
$string['preventcopy'] = 'Prevenir copia';
$string['preventcopy_desc'] = 'Habilitar protección contra acción de copiar.';
$string['preventmodify'] = 'Prevenir modificar';
$string['preventmodify_desc'] = 'Habilitar protección contra acción de modificar.';
$string['preventprint'] = 'Prevenir imprimir';
$string['preventprint_desc'] = 'Habilitar protección contra acción de imprimir';
$string['print'] = 'Imprimir';
$string['privacy:metadata:customcert_issues'] = 'La lista de certificados emitidos';
$string['privacy:metadata:customcert_issues:code'] = 'El código que pertenece al certificado';
$string['privacy:metadata:customcert_issues:customcertid'] = 'La ID del certificado';
$string['privacy:metadata:customcert_issues:emailed'] = 'Si es que el certificado fue enviado por Email o no';
$string['privacy:metadata:customcert_issues:timecreated'] = 'La hora de cuando fue emitido el certificado';
$string['privacy:metadata:customcert_issues:userid'] = 'La ID del usuario que emitió el certificado';
$string['rearrangeelements'] = 'Re-posicionar elementos';
$string['rearrangeelementsheading'] = 'Arrastre y suelte elementos para cambiar en donde están posicionados sobre del certificado.';
$string['receiveddate'] = 'Otorgado en';
$string['refpoint'] = 'Ubicación del punto de referencia';
$string['refpoint_help'] = 'El punto de referencia es la ubicación de un elemento desde el cual se determinan sus coordenadas x  y. Está indicado por el símbolo  \'+\' que aparece en el centro o en las esquinas del elemento.';
$string['replacetemplate'] = 'Remplazar';
$string['requiredtimenotmet'] = 'Usted debe dedicar cuando menos un mínimo de {$a->requiredtime} minutos en el curso antes de que pueda acceder a este certificado.';
$string['returncourse'] = 'Botón para regresar al curso';
$string['returncourse_desc'] = 'Mostrar un botón "Regresar al curso" en la página para ver el certificado.';
$string['returncourselabel'] = 'Regresar a página del curso';
$string['rightmargin'] = 'Márgen derecho';
$string['rightmargin_help'] = 'Este es el margen derecho del PDF del certificado en mm.';
$string['save'] = 'Guardar';
$string['saveandclose'] = 'Guardar y cerrar';
$string['saveandcontinue'] = 'Guardar y continuar';
$string['savechanges'] = 'Guardar cambios';
$string['savechangespreview'] = 'Guardar cambios y pre-visualizar';
$string['savetemplate'] = 'Guardar plantilla';
$string['scheduledtaskconfigdesc'] = 'Configurar las configuraciones para el trabajo agendado que procesa certificados.';
$string['scheduledtaskconfigheading'] = 'Configuración para el trabajo agendado';
$string['search:activity'] = 'Certificado personalizado - información de actividad';
$string['setprotection'] = 'Configurar protección';
$string['setprotection_help'] = 'Elegir las acciones que Usted quiere evitar que hagan los usuarios sobre este certificado.';
$string['showposxy'] = 'Mostrar posición X y Y';
$string['showposxy_desc'] = 'Esto mostrará la posición X y Y al editar un elemento, permitiéndole al usuario que especifique exactamente la ubicación.

Esto no es necesario si Usted planea usar solamente la interfaz de arrastrar y soltar para este propósito.';
$string['subplugintype_customcertelement'] = 'Elemento';
$string['subplugintype_customcertelement_plural'] = 'Elementos';
$string['taskemailcertificate'] = 'Manejar envíar Emails de certificados.';
$string['taskissuecertificate'] = 'Trabajo de emisión de certificados';
$string['templatename'] = 'Nombre de la plantilla';
$string['templatenameexists'] = 'El nombre de la plantilla está actualmente en uso; por favor elija otro.';
$string['topcenter'] = 'Centrado';
$string['topleft'] = 'Superior izquierda';
$string['topright'] = 'Superior derecha';
$string['type'] = 'Tipo';
$string['uploadimage'] = 'Subir imagen';
$string['uploadimagedesc'] = 'Este enlace lo llevará a Usted a una nueva pantalla en donde podrá subir imágenes. Las imágenes subidas mediante este método estarán disponibles para todo el sitio para todos los usuarios que puedan crear un certificado.';
$string['useadhoc'] = 'Trabajo ad-hoc de Usar Email de Certificado';
$string['useadhoc_desc'] = 'Cuando se habilita, los Emails relacionados con certificados serán manejados inmediatamente mediante un trabajo ad-hoc creado para cada emisión. Cuando está deshabilitado, los Emails serán gestionados por el trabajo agendado regular.

Habilitar esta opción puede mejorar el desempeño del trabajo agendado al descargar el procesamiento de Email hacia trabajos ad-hoc.';
$string['usecustomfilename'] = 'Usar patrón personalizado de nombre de archivo';
$string['usecustomfilename_help'] = 'si se habilita, puede definir un patrón de nombre de archivo personalizado para certificados usando reemplazables. Los reemplazables son {FIRST_NAME}, {LAST_NAME}, {GROUP_NAME}, {COURSE_SHORT_NAME}, {COURSE_FULL_NAME} y {ISSUE_DATE}.';
$string['verified'] = 'Verificado';
$string['verify'] = 'Verificar';
$string['verifyallcertificates'] = 'Permitir verificación de todos los certificados';
$string['verifyallcertificates_desc'] = 'Cuando esta configuración es habilitada, cualquier persona (incluyendo usuarios no ingresados al sitio) puede visitar el enlace \'{$a}\'para poder verificar cualquier certificado en el sitio, en lugar de tener que ir al enlace de verificación para cada certificado.

Nota - esto solamente aplica para certificados en donde  \'Permitirle a cualquiera verificar un certificado\' se ha configurado \'Si\' en las configuraciones del certificado.';
$string['verifycertificate'] = 'Verificar certificado';
$string['verifycertificateanyone'] = 'Permitirle a cualquiera verificar un certificado';
$string['verifycertificateanyone_help'] = 'Esta configuración habilita a cualquiera con el enlace a verificación de certificado (incluyendo a usuarios no ingresados al sitio) para verificar un certificado.';
$string['verifycertificatedesc'] = 'Este enlace le llevará a una nueva pantalla en donde podrá verificar certificados en el sitio';
$string['width'] = 'Ancho';
$string['width_help'] = 'Este es  el ancho en mm del certificado. Para referencia, una hoja de tamaño carta tiene 216 mm de ancho y un tamaño A4 mide 210 mm de ancho.';
