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
 * Strings for component 'customlabel', language 'es_mx', version '4.4'.
 *
 * @package     customlabel
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addatype'] = 'Añadir un tipo';
$string['addvalue'] = 'Añadir un valor';
$string['adminmetadata'] = 'Configuración de clasificadores';
$string['apparence'] = 'Apariencia';
$string['category'] = 'Categoría';
$string['changetypeadvice'] = 'Usted está a punto de cambiar la estructura interna de datos de este elemento. El contenido antiguo no puede mantenerse. ¿Desea continuar?';
$string['choose'] = 'Elegir';
$string['classification'] = 'Clasificación';
$string['classificationconstrainttable'] = 'Tabla de Limitantes';
$string['classificationconstrainttable_help'] = 'Esta tabla es capaz de mapear las parejas de valores que no son compatibles.';
$string['classificationmodel'] = 'Modelo de Clasificación';
$string['classificationtypetable'] = 'Tabla de filtros y dimensiones de Clasificación';
$string['classificationtypetable_help'] = 'Esta tabla proporciona dominios de clasificación. Un dominio contiene un conjunto de valores.';
$string['classificationvalues'] = 'Valores';
$string['classificationvaluetable'] = 'Tabla de Valores de Clasificación';
$string['classificationvaluetable_help'] = 'Esta tabla proporciona todos los valores para todos los clasificadores definidos en la Tabla de Tipo.';
$string['classificationvaluetypekey'] = 'Campo de Tipo de clasificador';
$string['classificationvaluetypekey_help'] = 'Esto debe definir el nombre de la columna de la tabla que es usado como clave para el propietario del tipo en los valores.';
$string['classifiers'] = 'Clasificadores';
$string['classifierstypes'] = 'Tipo de clasificadores';
$string['cleararea'] = 'Limpiar esta área de archivo';
$string['code'] = 'Código';
$string['coloredstyle'] = 'Títulos coloreados';
$string['commands'] = 'Comandos';
$string['configclassificationconstrainttable'] = 'Tabla de limitantes';
$string['configclassificationconstrainttable_desc'] = 'Esta tabla tiene las limitantes entre los diferentes tipos involucrados en la clasificación.';
$string['configclassificationtypetable'] = 'Tabla para tipos de clasificación';
$string['configclassificationtypetable_desc'] = 'Un tipo clasificador tiene un conjunto de valores en la tabla de valores.';
$string['configclassificationvaluetable'] = 'Tabla de valores de clasificación';
$string['configclassificationvaluetable_desc'] = 'Esta es la tabla en donde se encuentran los valores de metadatos';
$string['configclassificationvaluetypekey'] = 'Nombre clave del tipo en tabla de valor';
$string['configclassificationvaluetypekey_desc'] = 'Este es el nombre del campo  que sirve como clave extranjera de tipo_de_datos para calificar el valor';
$string['configcoursemetadatacmidkey'] = 'Nombre de clave ID de módulo de curso en binder de metadatos';
$string['configcoursemetadatacmidkey_desc'] = 'Este es el nombre del campo que sirve como clave foránea de módulo del curso en la tabla de metadatos.';
$string['configcoursemetadatacoursekey'] = 'Nombre clave del curso en ligando de metadatos';
$string['configcoursemetadatacoursekey_desc'] = 'Este es el nombre del campo que sirve como la clave extranjera del curso en la tabla de metadatoss. el contenido de este campo debería de ser una id de COURSE válida.';
$string['configcoursemetadatatable'] = 'Tabla para ligadura de metadatos';
$string['configcoursemetadatatable_desc'] = 'Esta tabla liga la relación entre un registro de curso y cualquier metadato apuntado por una id ab. Los metadatos deberán residir en la siguiente tabla de vvalores de metadatos.';
$string['configcoursemetadatavaluekey'] = 'Valor clave en ligadura de metadatos';
$string['configcoursemetadatavaluekey_desc'] = 'Este es el nombre del campo que sirve como clave extranjera de valor de datos en la tabla de metadatos.';
$string['configmetadatabinding'] = 'Ligadura de esquema de metadatos';
$string['constraints'] = 'Restricciones';
$string['content'] = 'Contenido';
$string['coursefilter'] = 'Filtro de curso';
$string['coursemetadatacmidkey'] = 'Campo de marcado para ID de módulo del curso (metadatos a binding de valor)';
$string['coursemetadatacmidkey_help'] = 'Esto debe definir un nombre de columna en la base de datos que mapea un registro a una instancia de módulo de curso.';
$string['coursemetadatacoursekey'] = 'Clave de marca para curso (enlazado de curso a metadatos)';
$string['coursemetadatacoursekey_help'] = 'Esto debe definir un nombre de columna en la base de datos, que mapea un registro hacia una ID del curso.';
$string['coursemetadatatable'] = 'Tabla de marcas de Metadatos del Curso';
$string['coursemetadatatable_help'] = 'Esta tabla proporciona curso a las ligaduras de metadatos.';
$string['coursemetadatavaluekey'] = 'Campo de marcado para Valores (metadatos a enlace de valor)';
$string['coursemetadatavaluekey_help'] = 'Esto debe definir un nombre de columna en la base de datos, que mapea un registro hacia un valor de metadatos.';
$string['customlabel:addinstance'] = 'Puede añadirse una instancia';
$string['customlabel:fullaccess'] = 'Acceso completo a todos los campos';
$string['customlabel:managemetadata'] = 'Gestionar metadatos';
$string['customlabelplugins'] = 'Plugins';
$string['customlabeltools'] = 'Herramientas masivas para etiquetas personalizadas';
$string['customlabeltypepluginname'] = 'Nombre de tipo de Customlabel';
$string['defaultskin'] = 'Piel predeterminada para etiquetas';
$string['defaultskin_desc'] = 'Elegir una plantilla CSS base para todas las etiquetas';
$string['defaultstyle'] = 'Conjunto de íconos predeterminados';
$string['disabledsubtypes'] = 'Subtipos deshabilitados';
$string['disabledsubtypes_desc'] = 'Cualquier subtipo mencionado en este campo será deshabilitado globalmente para todo el sitio.';
$string['doupdate'] = '¡¡Actualizar!!';
$string['down'] = 'Abajo';
$string['editclass'] = 'Actualizar clase clasificadora&ensp;';
$string['editvalues'] = 'Editar valores';
$string['elementtitle'] = 'Identificador de elemento';
$string['elementtitle_help'] = 'Este identificador sirve para identificar de forma única este elemento de contenido. No es mostrado para los usuarios usuales.';
$string['errorclassloading'] = 'Error al cargar : Clase nula';
$string['errorfailedloading'] = 'Falló al cargar la clase para la etiqueta personalizada {$a}. Revirtiendo a etiqueta personalizada de "texto".';
$string['errorinsertvalue'] = 'No pudo insertarse un valor nuevo';
$string['errorreservedname'] = '"TYPE" es un nombre reservado y no se puede usar como código.';
$string['errorupdatevalue'] = 'No pudo actualizarse un valor nuevo';
$string['exclude'] = 'Excluir';
$string['exportdata'] = 'Exportar datos a XML';
$string['familygeneric'] = 'Elementos genéricos';
$string['familymeta'] = 'Elementos Meta-pedagógicos';
$string['familypedagogic'] = 'elementos Pedagógicos';
$string['familyspecial'] = 'Elementos Especiales';
$string['familystructure'] = 'Elementos Estructurales';
$string['filter'] = 'Filtro';
$string['flatcoloredstyle'] = 'Mosaicos planos y coloreados';
$string['flatstyle'] = 'Estilo plano';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['include'] = 'Incluir';
$string['labelclass'] = 'Tipo de etiqueta';
$string['labelclasses'] = 'Clases de elementos';
$string['labelupdater'] = 'Herramienta de regeneración {$a}';
$string['languages'] = 'Idioma';
$string['lockedsample'] = 'Ejemplo de campo bloqueado';
$string['lpclassificationhdr'] = 'Cursos clasificados';
$string['managecustomlabeltypeplugins'] = 'Gestionar plugins customlabel (etiqueta_personalizada)';
$string['metadata'] = 'Valores de metadatos';
$string['metadataset'] = 'Valores de clasificación';
$string['missingfields'] = 'No se han definido campos obligatorios';
$string['model'] = 'Modelo de Datos';
$string['modulename'] = 'Elemento de curso';
$string['modulename_help'] = 'Los elementos de curso le proporcionan a Usted módulos pedagógicos que ya están diseñados y preparados para servir algunas necesidades pedagógicas de alto nivel. Los elementos de curso tienen subtipos que tratan con acciones comunes de aprendizaje: trabajo por hacer, tutorial paso a paso, vea también (referencia opcional), metas locales, recordatorio y otras ayudas editoriales como subtítulos de curso. Un administrador puede integrar modelos específicos con valor editorial adicional, tales como banco de imágenes predefinidas, o marcar cursos; Usted solamente necesita escribir los datos apropiados en cada módulo y registrarlo.';
$string['modulenameplural'] = 'Elementos de curso';
$string['name'] = 'Etiqueta';
$string['noclassifiers'] = 'Sin clasificador';
$string['noclassifiersdefined'] = 'La clasificación no tiene clasificador definido. Comprobar configuraciones globales.';
$string['nocontentforthislanguage'] = 'No hay contenido disponible para este idioma <br/>';
$string['none'] = 'Indefinido';
$string['notypes'] = 'Sin tipo clasificador';
$string['novalues'] = 'Sin valor registrado';
$string['pluginadministration'] = 'Administración de elemento de curso';
$string['plugindefault'] = 'Piel predeterminada de Customlabel';
$string['pluginname'] = 'Elemento de curso';
$string['privacy:metadata:customlabel_user_data'] = 'Tabla donde son almacenadas las condiciones iniciales de finalización dle usuario';
$string['privacy:metadata:customlabel_user_data:completion1'] = 'Valor de finalización para regla 1 (dependiendo de uso de etiqueta de finalización)';
$string['privacy:metadata:customlabel_user_data:completion2'] = 'Valor de finalización para regla 2 (dependiendo de uso de etiqueta de finalización)';
$string['privacy:metadata:customlabel_user_data:completion3'] = 'Valor de finalización para regla 3 (dependiendo de uso de etiqueta de finalización)';
$string['privacy:metadata:customlabel_user_data:customlabelid'] = 'ID de las finalizaciones de grabaciones de instancias de Customlabel';
$string['privacy:metadata:customlabel_user_data:userid'] = 'ID del usuario para quien las finalizaciones son almacenadas';
$string['qualifiers'] = 'Calificadores';
$string['regenerate'] = 'Regenerar';
$string['regeneration'] = 'Regeneración en masa de contenido';
$string['resetall'] = 'Reiniciar todo';
$string['resetlabeltypes'] = 'Reiniciar tipos de etiqueta';
$string['resourcetypecustomlabel'] = 'Elemento de curso';
$string['roleaccesstoelements'] = 'Acceso por rol';
$string['sametypes'] = 'Usted no puede limitar dos veces al mismo tipo';
$string['save'] = 'Guardar configuraciones';
$string['settings'] = 'Configuraciones de Customlabels';
$string['show'] = 'Mostrar&ensp;';
$string['specifics'] = 'Específico del tipo';
$string['storage'] = 'Modelo de almacenamiento';
$string['templatenotfound'] = 'Plantilla {$a} no encontrada';
$string['text'] = 'Texto';
$string['title'] = 'Nombre de elemento';
$string['typecode'] = 'Código';
$string['typename'] = 'Nombre';
$string['typetype'] = 'Tipo';
$string['typetype_help'] = '<p>El tipo puede ser:</p>
<ul>
<li>Una categoría: Una categoría interactua con implementaciones de catálogo de curso para construir una taxonomía de curso multi-criterio.</li>
<li>Un filtro: Una marca simple que pueden usar algunos subtipos de Elemento de Curso</p>
<li>Un filtro de curso: Una marca que pueden usar algunas implementaciones de catálogo de curso para filtrar resultados de búsqueda.</p>
</ul>';
$string['up'] = 'Arriba';
$string['updateall'] = 'Actualizar todas las instancias';
$string['updatelabels'] = 'Regenerar instancias de {$a}';
$string['updatescope'] = 'Actualizando el alcance';
$string['usedas'] = 'Usar como&ensp;';
$string['userstatesreset'] = 'Los estados del usuario han sido reiniciados';
$string['usesafestorage'] = 'Usar almacenamiento seguro para contenido (base64)';
$string['value'] = 'Valor';
$string['withcompletions'] = 'Reiniciar finalizaciones de etiquetas';
$string['wsattributekey'] = '<span class="lighttext">Clave de atributo a usar en  WS : {$a}</span>';
$string['wsfieldkey'] = 'Clave de atributo para servicios webs: {$a}';
$string['wsurl'] = 'Servicios web: <br/><span class="customlabel-form-static-content">usan tipo {$a} en llamada de webservice customlabel_add_instance().<br/>Vea la documentación de WS moodle API en la administración del plugin.</span>';
