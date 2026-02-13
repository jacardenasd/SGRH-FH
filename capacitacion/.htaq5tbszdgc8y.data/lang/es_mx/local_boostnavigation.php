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
 * Strings for component 'local_boostnavigation', language 'es_mx', version '4.4'.
 *
 * @package     local_boostnavigation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_bottomnodes'] = 'nodos del fondo';
$string['inc_bottomnodeslocation'] = 'debajo de la sección principal en el cajón de navegación (similar al nodo de "administración del sitio")';
$string['inc_coursenode'] = 'nodo del curso';
$string['inc_coursenodes'] = 'nodos del curso';
$string['inc_coursenodeslocation'] = 'a la sección del curso en el cajón de navegación (donde están localizados los nodos para los tópicos del curso)';
$string['inc_custombottomnodes'] = 'nodos personalizados del fondo';
$string['inc_customcoursenodes'] = 'nodos personalizados del fondo';
$string['inc_customrootnodes'] = 'nodos personalizados de raíz';
$string['inc_customwhoadmins'] = 'administradores';
$string['inc_customwhousers'] = 'todos los usuarios';
$string['inc_mycoursesrootnode'] = 'nodo raíz mi curso';
$string['inc_notselectedhomenode'] = 'Tablero / Inicio no seleccionado';
$string['inc_rootnode'] = 'nodo raíz';
$string['inc_rootnodes'] = 'nodos raíz';
$string['inc_rootnodeslocation'] = 'a la sección principal en el cajón de navegación (donde están localizados los nodos de "Mis cursos" y otros)';
$string['inc_selectedhomenode'] = 'Página Inicial seleccionada / Tablero';
$string['mycoursesrootnodefilterhintenabledcourselist'] = 'Lista de cursos filtrada por';
$string['mycoursesrootnodefilterhintenabledcurrentfilter'] = 'Filtro actual de curso:';
$string['mycoursesrootnodefilterlink'] = 'Cambiar filtro';
$string['pluginname'] = 'Modificación de la navegación en Boost';
$string['privacy:metadata:preference:collapse'] = 'El estado del colapso de un nodo de navegación en el cajón de navegación.';
$string['privacy:request:preference:collapse'] = 'El estado del colapso de un nodo de navegación "{$a->nodename}" en el cajón de navegación es {$a->collapse}';
$string['setting_collapsecustomnodes'] = 'Colapsar {$a->what} para {$a->who}';
$string['setting_collapsecustomnodes_desc'] = 'Habilitar esta configuración le permitirá a los usuarios colapsar el/la {$a->what} para {$a->who}.<br /><em>Esta configuración solamente es procesada cuando la configuración del nodo personalizado correspondiente tiene al menos un nodo personalizado con al menos un nodo hijo añadido.</em>';
$string['setting_collapsecustomnodesaccordion'] = 'Colapsar {$a->what} para {$a->who} como acordeón';
$string['setting_collapsecustomnodesaccordion_desc'] = 'Habilitar esta configuración colapsará el/la {$a->what} para {$a->who} como un acordeón.';
$string['setting_collapsecustomnodesdefault'] = 'Colapsar {$a->what} para {$a->who} por defecto';
$string['setting_collapsecustomnodesdefault_desc'] = 'Habilitar esta configuración colapsará el/la {$a->what} para {$a->who} por defecto.';
$string['setting_collapsecustomnodesicon'] = 'Mostrar íconos de nodo paterno en {$a->what} para {$a->who}';
$string['setting_collapsecustomnodesicon_desc'] = 'Con esta configuración Usted controla si los íconos del nodo paterno serán mostrados en el {$a->what} para {$a->who} o si los nodos paternos serán indentados.';
$string['setting_collapsecustomnodessession'] = 'recordar estado de colapso {$a->what} para {$a->who} solamente para sesión actual';
$string['setting_collapsecustomnodessession_desc'] = 'Habilitar esta configuración recordará el estado colapsado de {$a->what} para {$a->who} solamente para la sesión actual del usuario.';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Por favor tenga en cuenta que: Esta característica solamente funciona si la configuración <a href="{$a->url}">navshowmycoursecategories</a> no está activa. Si Usted habilitó navshowmycoursecategories, esta configuración será ignorada y no hará nada,';
$string['setting_collapsenode'] = 'Colapsar {$a->what} "{$a->which}"';
$string['setting_collapsenode_desc'] = 'Habilitar esta configuración les permitirá a los usuarios colapsar el/la {$a->what} "{$a->which}".';
$string['setting_collapsenodeaccordionexplanation'] = 'Esto significa que solamente un nodo paterno puede ser expandido al mismo tiempo. Si un segundo nodo paterno es expandido, el nodo paterno actualmente expandido es colapsado automáticamente. Si esta configuración es deshabilitada, múltiples nodos paternos pueden ser expandidos al mismo tiempo.';
$string['setting_collapsenodedefault'] = 'Colapsar {$a->what} "{$a->which}" por defecto';
$string['setting_collapsenodedefault_desc'] = 'Habilitar esta configuración colapsará el/la {$a->what} "{$a->which}" por defecto.';
$string['setting_collapsenodeicon'] = 'Mostrar ícono paterno en {$a->what} "{$a->which}"';
$string['setting_collapsenodeicon_desc'] = 'Con esta configuración Usted controla si un ícono de nodo paterno será mostrado en el {$a->what} "{$a->which}" o si este nodo paterno estará indentado.';
$string['setting_collapsenodeicon_justindent'] = 'No mostrar un ícono, pero si indentar el nodo paterno colapsable';
$string['setting_collapsenodeicon_none'] = 'No mostrar un ícono y no indentar el nodo paterno colapsable';
$string['setting_collapsenodeicon_yes'] = 'Mostrar un ícono e indentar el nodo paterno colapsable';
$string['setting_collapsenodesdefaultexplanation'] = 'En caso contrario, serán expandidas por defecto. Esta configuración meramente controla lo predeterminado para cada usuario cuando los nodos son renderizados para el usuario por primera vez.';
$string['setting_collapsenodesession'] = 'Recordar estado de colapso de {$a->what} "{$a->which}" solamente para sesión actual';
$string['setting_collapsenodesession_desc'] = 'Habilitar esta configuración recordará el estado del colapsado de {$a->what} "{$a->which}" solamente para la sesión actual del usuario.';
$string['setting_collapsenodesheading'] = 'Colapsar {$a->what} en cajón de navegación de Boost';
$string['setting_collapsenodessessionexplanation'] = 'Después del próximo inicio y cierre de sesión de un usuario en particular, el estado de contracción se restablecerá al valor definido como predeterminado anteriormente. Si esta configuración está deshabilitada, el estado de contracción de estos nodos se recordará más allá del final de la sesión de un usuario.';
$string['setting_collapsenodestechnicalhint'] = 'Antecedentes técnicos: Esto se hace agregando código JavaScript y CSS a la página que mostrará u ocultará los nodos de segundo nivel tan pronto como el usuario haga clic en el nodo. El estado de colapso del nodo será procesado en la sesión de cada usuario y se almacenará en las preferencias de cada usuario. Por lo tanto, los nodos solo se ocultarán del cajón de navegación en el tiempo de ejecución, pero permanecerán en el árbol de navegación y otras partes de Moodle podrán seguir accediendo a ellos.';
$string['setting_customnodesusageadminsexample'] = 'Sitio  Moodle.org |http://www.moodle.org|en,es<br />
Lista de usuarios Moodle|/admin/user.php';
$string['setting_customnodesusageadminsintro'] = 'Cada línea consiste de un título del enlace, una URL del enlace y idioma(s) soportado(s) (opcional) - separados por caracter de barra vertical | . Cada nodo personalizado necesita estar escrito en una nueva línea.';
$string['setting_customnodesusageadminsparameternote'] = 'Los nodos personalizados para administradores se procesan con la misma función que los nodos personalizados para usuarios. Por lo tanto, además de los parámetros que se proporcionan anteriormente, aquí también se admite la misma lista de parámetros que admiten los nodos personalizados para usuarios. No dude en utilizarlos aquí si realmente los necesita para algún escenario especial, incluso si no están documentados aquí una vez más por el bien de la simplicidad.';
$string['setting_customnodesusagechildnodes'] = 'Los nodos personalizados se pueden anidar con un nivel de jerarquía, es decir, un nodo personalizado puede tener nodos secundarios. Cree un nodo secundario en lugar de un nodo padre, simplemente prefija el título del nodo personalizado con un guión.';
$string['setting_customnodesusagechildnodesexample'] = 'Administración|/admin/index.php<br />
-Lista de usuarios Moodle|/admin/user.php<br />
-Gestionar cursos|/course/management.php';
$string['setting_customnodesusagechildnodespleasenoterecursive'] = 'Si un nodo paterno no es mostrado por causa de que aplica una restricción (idioma, cohorte, rol...), sus hijos tampoco serán mostrados.';
$string['setting_customnodesusagechildnodespleasenoteurl'] = 'Por razones técnicas, un nodo paterno siempre necesita una URL válida, aunque el nodo sea hecho colapsible después.';
$string['setting_customnodesusageexamples'] = 'Ejemplos:';
$string['setting_customnodesusageparameterbeforenodedd'] = 'Esta configuración se puede utilizar para especificar la clave del nodo sobre la que se debe colocar el nodo personalizado. Encontrará la clave del nodo en el atributo HTML \'data-key\' del nodo al que desea hacer referencia aquí. En el caso de un conjunto de nodos formado por un padre y uno o más hijos, esta configuración se debe proporcionar a cada nodo del conjunto.<br/>Tenga en cuenta que solo puede utilizar claves de nodo anteriores del contexto del nodo al que está agregando el nodo. Por ejemplo, puede utilizar \'privatefiles\' o \'calendar\' o \'contentbank\' en el contexto del nodo raíz o puede utilizar \'participants\' o \'grades\' en el contexto del nodo del curso. Si la clave del nodo anterior es desconocida o no se puede procesar por alguna razón desconocida, el nodo se agregará al final del contexto del nodo.<br />Tenga en cuenta también que esta configuración se considera parcialmente experimental, ya que es posible que aún no sea posible utilizar algunos nodos como nodos anteriores con esta configuración.';
$string['setting_customnodesusageparameterbeforenodedt'] = 'Clave antes del nodo (opcional):';
$string['setting_customnodesusageparameterclassdd'] = 'Esta configuración puede ser usada para configurar una clase CSS adicional o clases  múltiples para el nodo personalizado.';
$string['setting_customnodesusageparameterclassdt'] = 'Clases CSS (opcional):';
$string['setting_customnodesusageparametercohortdd'] = 'Esta configuración puede ser usada para mostrar el nodo personalizado solamente a miembros de la cohorte especificada. Use el ID de la cohorte, no el nombre de la cohorte, para esta configuración. Separe a más de una cohorte soportada con comas. Si el nodo personalizado debería ser mostrado para usuarios sin importar la membresía de cualquier cohorte, entonces deje vacío este campo.';
$string['setting_customnodesusageparametercohortdt'] = 'Cohorte(s) soportada(s) (opcional):';
$string['setting_customnodesusageparametericondd'] = 'Este icono se utilizará como icono para el nodo personalizado, por ejemplo, fa-flag. Utilice un identificador de icono de Font Awesome (<a href="https://fontawesome.com/v4.7.0/icons/">Consulte la lista de iconos en fontawesome.com</a>) para identificar qué icono se debe utilizar. Font Awesome está incluido en Boost, los iconos de imágenes clásicos de Moodle no son compatibles aquí. Si solo desea utilizar un icono de viñeta estándar para el nodo personalizado, deje este campo vacío. Los nodos personalizados que no obtienen un icono de viñeta estándar automáticamente tampoco pueden obtener un icono personalizado actualmente.';
$string['setting_customnodesusageparametericondt'] = 'Ícono (opcional):';
$string['setting_customnodesusageparameteriddd'] = 'Esta configuración se puede utilizar para configurar el atributo data-key del nodo personalizado en el valor fijo indicado. El valor de la clave de datos indicado se limpia para que tenga solo caracteres alfanuméricos y se antepone al área del nodo personalizado en particular; por ejemplo, si se configura la clave de datos de un nodo en los nodos inferiores del área de administradores en \'my_node\', el atributo data-key se llenará con \'localboostnavigationcustombottomadminsmynode\'. Esta configuración le brinda la posibilidad de hacer referencia a un nodo personalizado en selectores CSS o incluso en código JavaScript personalizado. No se prohíbe configurar la misma clave de datos en varios nodos aquí, pero tenga en cuenta que los atributos de clave de datos duplicados pueden crear problemas a largo plazo. Si este campo está vacío, el nodo personalizado obtendrá una clave de datos generada automáticamente que no es realmente adecuada para hacer referencia.';
$string['setting_customnodesusageparameteriddt'] = 'Atributo Data-key (opcional):';
$string['setting_customnodesusageparameterlanguagedd'] = 'Esta configuración puede ser usada para mostrar el nodo personalizado solamente a usuarios del idioma especificado. Separe a más de un idioma soportado con comas. Si el nodo personalizado debería ser mostrado en todos los idiomas, entonces deje vacío este campo.';
$string['setting_customnodesusageparameterlanguagedt'] = 'Idioma(s) soportado(s) (opcional):';
$string['setting_customnodesusageparameterlinkdd'] = 'El destino del enlace puede estar definido por una URL web completa (por ejemplo https://moodle.org) o por una ruta relativa dentro de su instancia de Moodle (por ejemplo /login/logout.php).';
$string['setting_customnodesusageparameterlinkdt'] = 'Enlace:';
$string['setting_customnodesusageparameterlogicaldd'] = 'Esta configuración se puede utilizar para cambiar la combinación lógica de los parámetros opcionales para cohorte, rol y rol del sistema. Si configura esta configuración en AND o la deja vacía, los parámetros opcionales para cohorte, rol y rol del sistema se combinarán lógicamente con AND y el nodo personalizado solo se mostrará si se aplican TODOS los parámetros. Si configura esta configuración en OR, los parámetros opcionales para cohorte, rol y rol del sistema se combinarán lógicamente con OR y el nodo personalizado se mostrará si se aplica CUALQUIERA de los parámetros. Esto le brinda la flexibilidad de crear, por ejemplo, un nodo que se muestra a los usuarios con un rol de curso determinado, así como a los usuarios con un rol de sistema determinado, como se muestra en nuestro ejemplo anterior.';
$string['setting_customnodesusageparameterlogicaldt'] = 'Operador de combinaciónlógica (opcional):';
$string['setting_customnodesusageparameterroledd'] = 'Esta configuración puede ser usada para mostrar el nodo personalizado solamente a miembros con el rol especificado en cada contexto. Use el nombre corto del rol para esta configuración. Separe a más de un rol soportado con comas. Si el nodo personalizado debería ser mostrado a usuarios sin importar el rol, entonces deje vacío este campo.';
$string['setting_customnodesusageparameterroledt'] = 'Rol(es) soportado(s) (opcional):';
$string['setting_customnodesusageparameters'] = 'Más información a los parámetros:';
$string['setting_customnodesusageparametersystemroledd'] = 'Esta configuración puede ser usada para mostrar el nodo personalizado solamente a usuarios con el rol especificado en el contexto del sistema. Use el nombre corto del rol para esta configuración. El nombre corto \'admin\' está soportado para comprobar si el usuario es un administrador del sitio.
Separe a más de un rol soportado con comas. Si el nodo personalizado debería ser mostrado a usuarios sin importar el rol en el sistema, entonces deje vacío este campo.';
$string['setting_customnodesusageparametersystemroledt'] = 'Rol(es) del sistema soportado(s) (opcional):';
$string['setting_customnodesusageparametertitledd'] = 'Este texto será mostrado como la etiqueta / texto que se puede seleccionar del nodo personalizado.';
$string['setting_customnodesusageparametertitledt'] = 'Título:';
$string['setting_customnodesusagepleasenote'] = 'Por favor tenga en cuenta:';
$string['setting_customnodesusagepleasenotecheck'] = 'Si el nodo personalizado no se muestra en el cajón de navegación de Boost, por favor revise que todos los parámetros obligatorios estén configurados correctamente; si la configuración de idioma opcional coincide con su idioma de usuario actual y si sus otros parámetros opcionales aplican a su usuario.';
$string['setting_customnodesusagepleasenotecss'] = 'Debido a la manera en la que el cajón de navegación de Boost está construido en el núcleo de Moodle, los nodos personalizados no pueden construirse 100% libremente. Es imposible añadir ids de elementos HTML, o un atributo destino para abrir el enlace en una ventana nueva.';
$string['setting_customnodesusagepleasenotelink'] = 'El parámetro de enlace puede contener remplazables, como por ejemplo /course/edit.php?id={courseid} para crear un nodo que enlaza a la página de configuraciones del curso actual.';
$string['setting_customnodesusagepleasenotemultilang'] = 'El parámetro del título puede contener <a href="https://docs.moodle.org/en/Multi-language_content_filter">multilanguage strings</a> para crear un nodo con una etiqueta que depende del idioma actual del usuario..';
$string['setting_customnodesusagepleasenotephavailable'] = 'Reemplazbles disponibles son:';
$string['setting_customnodesusagepleasenotephcoursefullnamedd'] = 'El nombre completo del curso';
$string['setting_customnodesusagepleasenotephcoursefullnamedt'] = '{coursefullname}:';
$string['setting_customnodesusagepleasenotephcourseiddd'] = 'ID (interna) del curso';
$string['setting_customnodesusagepleasenotephcourseiddt'] = '{courseid}:';
$string['setting_customnodesusagepleasenotephcourseshortnamedd'] = 'El nombre corto del curso';
$string['setting_customnodesusagepleasenotephcourseshortnamedt'] = '{courseshortname}:';
$string['setting_customnodesusagepleasenotepheditinglinkdd'] = 'El valor \'on\' (activo) o de \'off\' (inactivo) es necesario para alternar el modo de edición';
$string['setting_customnodesusagepleasenotepheditinglinkdt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotepheditingtitledd'] = 'El valor para \'Activar la edición\' o \'Desactivar la edición\' del paquete de idioma actualmente usado';
$string['setting_customnodesusagepleasenotepheditingtitledt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotephexplanation'] = 'Los remplazables estarán encapsulados entre {paréntesis curvados} y serán remplazados automáticamente cuando el nodo personalizado sea creado.';
$string['setting_customnodesusagepleasenotephpagecontextiddd'] = 'ID del contexto de la página actual';
$string['setting_customnodesusagepleasenotephpagecontextiddt'] = '{pagecontextid}:';
$string['setting_customnodesusagepleasenotephpagepathdd'] = 'la ruta del URL de la página actual';
$string['setting_customnodesusagepleasenotephpagepathdt'] = '{pagepath}:';
$string['setting_customnodesusagepleasenotephsesskeydd'] = 'La seskey a usar en URLs inseguras';
$string['setting_customnodesusagepleasenotephsesskeydt'] = '{sesskey}:';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'Elnombre completo del usuario ingresado al sitio';
$string['setting_customnodesusagepleasenotephuserfullnamedt'] = '{userfullname}:';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'La ID (interna) del usuario ingresado al sitio';
$string['setting_customnodesusagepleasenotephuseriddt'] = '{userid}:';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'El nombre_de_usuario del usuario ingresado al sitio';
$string['setting_customnodesusagepleasenotephuserusernamedt'] = '{userusername}:';
$string['setting_customnodesusagepleasenotepipes'] = 'El caracter de barra vertical | para parámetros opcionales siempre es necesario si están localizados entre otras opciones. Esto significa que Usted tiene que separar los parámetros con el caracter de barra vertical | aunque estuvieran vacíos. También vea el ejemplo para la Facultad de Matemáticas del nodo personalizado de matemáticas de arriba.';
$string['setting_customnodesusagepleasenotetitle'] = 'El parámetro del título puede contener remplazables, como por ejemplo {coursefullname} para crear un nodo etiquetado con el nombre completo del curso actual.';
$string['setting_customnodesusageusersexample'] = 'Sitio moodle.org |http://www.moodle.org|en,es<br />
Nuestra Universidad|http://www.our-university.edu<br />
Facultad de matemáticas|http://www.our-university.edu/math||math<br />
Manual del profesor|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br />
Curso de información para estudiantes|/course/view.php?id=1234||||||fa-graduation-cap<br />
{editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants';
$string['setting_customnodesusageusersintro'] = 'Cada línea consiste de un título del enlace, una URL del enlace, idioma(s) soportado(s) (opcional), cohorte(s) soportada(s) (opcional), rol(es) soportado(s) (opcional), rol(es) global(es) soportado(s) (opcional), el operador de combinación lógica (opcional), un ícono (opcional), el atributo de clave-de-datos (opcional) y una \'clave antes del nodo\' (opcional) - separados por caracteres de barra vertical | . Cada nodo personalizado necesita estar escrito en una nueva línea.';
$string['setting_insertactivitiescoursenodeexplanation'] = 'Este nodo conservará los nodos que enlazan a las páginas de vista general de la actividad. Básicamente trae la funcionalidad existente del bloque "Actividades" al cajón de navegación de Boost.';
$string['setting_insertactivitiescoursenoderealicons'] = 'Usar íconos individuales de actividad';
$string['setting_insertactivitiescoursenoderealicons_desc'] = 'El habilitar esta configuración usará los íconos individuales de actividad para los nodos de actividad de curso. Estos íconos están coloreados y están más detallados que los íconos del Font Awesome del resto del cajón de navegación de Boost. El deshabilitar esta configuración usará un ícono de uno-le-queda-a-todos de Font Awesome para los nodos de actividad del curso.';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Por favor tenga en cuenta que: Esta característica solamente funcionará si la configuración <a href="{$a->url}">linkcoursesections</a> está activa. Si Usted deshabilitó linkcoursesections, esta configuración será ignorada y no hará nada.';
$string['setting_insertcoursesectionscoursenodeexplanation'] = 'El nodo será puesto arriba de la primera sección del curso actual.';
$string['setting_insertcustomnodes'] = 'Insertar {$a->what} para {$a->who}';
$string['setting_insertcustomnodes_desc'] = 'Con esta configuración, Usted puede insertar {$a->what} al cajón de navegación de Boost y esto será añadido  {$a->where} y será mostrado a {$a->who}.';
$string['setting_insertnode'] = 'Insertar {$a->what} "{$a->which}"';
$string['setting_insertnode_desc'] = 'Habilitar esta configuración insertará un(a) {$a->what} "{$a->which}" al cajón de navegación de Boost.';
$string['setting_insertnodescollapsehint'] = 'Por favor tenga en cuenta que el nodo insertado tiene un enlace de acción que conduce a la página inicial del curso porque Boost no soporta adicionar nodos sin un enlace de acción. El enlace de acción será anulado tan pronto como Usted también habilite la configuración para colapsar el nodo al mismo tiempo.';
$string['setting_insertnodesheading'] = 'Insertar {$a->what} al cajón de navegación de Boost';
$string['setting_insertresourcescoursenodeexplanation'] = 'Este nodo se vinculará a la página de descripción general de recursos.<br /><em>Esta configuración está asociada a la configuración "Insertar nodo \'Actividades\'". Si habilita ambas configuraciones, obtendrá un nodo "Actividades" y un nodo "Recursos" según lo solicitado. Si solo habilita la configuración "Actividades", el nodo "Actividades" también contendrá un nodo que se vinculará a la página de descripción general de recursos.</em>';
$string['setting_modifymycoursesrootnodefilterhint'] = 'Añadir nodo de pista de filtro de curso';
$string['setting_modifymycoursesrootnodefilterhint_desc'] = 'Habilitar esta configuración añadirá un nodo al final de la lista de Mis cursos en el cajón de navegación de Boost diciéndole al usuario el porqué la lista de Mis cursos está llena como está (por ejemplo cual filtro de curso produjo la lista actual de Mis cursos).';
$string['setting_modifymycoursesrootnodefilterlink'] = 'Añadir nodo de enlace de filtro de curso';
$string['setting_modifymycoursesrootnodefilterlink_desc'] = 'Al habilitar esta configuración, se agregará un nodo al final de la lista Mis cursos en el panel de navegación de Boost que le indicará al usuario dónde cambiar el filtro del curso actual (es decir, muestra un enlace al Panel de control).<br /><em>Esta configuración está asociada a la configuración "Agregar nodo de sugerencia de filtro de curso". Si habilita ambas configuraciones, se agregará un nodo combinado en lugar de dos.</em>';
$string['setting_modifymycoursesrootnodeshowfiltered'] = 'Mostrar cursos filtrados';
$string['setting_modifymycoursesrootnodeshowfiltered_desc'] = 'Al habilitar esta configuración, la lista Mis cursos en el cajón de navegación de Boost cambiará para mostrar los cursos que están filtrados actualmente en el bloque Descripción general del curso. Si esta configuración está deshabilitada, la lista Mis cursos en el cajón de navegación de Boost mostrará todos los cursos que están clasificados como "En progreso", que es el comportamiento predeterminado de Moodle.';
$string['setting_modifymycoursesrootnodeshowfilterednavcourselimit'] = 'Tenga en cuenta: si habilita esta configuración, el valor de la configuración <a href="{$a->url}">navcourselimit</a> cambiará a 100 000 durante cada carga de página. Es necesario establecer este valor tan alto para evitar que la lista de cursos se acorte de alguna manera que pueda interrumpir los mecanismos de filtrado.';
$string['setting_modifynodesheading'] = 'Modificar {$a->what} en el cajón de navegación de Boost';
$string['setting_movecontentbanknodeincoursecontext'] = 'Mover {$a->rootnode} "{$a->contentbank}" en el contexto del curso';
$string['setting_movecontentbanknodeincoursecontext_desc'] = 'Habilitar esta configuración moverá el/la {$a->rootnode} "{$a->contentbank}" hacia la sección {$a->coursenode}dentro del cajón de navegación de Boost cuando se está viendo una página Moodle que está localizada adentro de un curso.';
$string['setting_movecontentbanknodeincoursecontextbefore'] = 'Mover {$a->rootnode} "{$a->contentbank}" antes de este/esta {$a->coursenode}';
$string['setting_movecontentbanknodeincoursecontextbefore_desc'] = 'Con esta configuración, puede definir antes de qué {$a->coursenode} se moverá el {$a->rootnode} "{$a->contentbank}". Tenga en cuenta que depende de usted asegurarse de que el {$a->coursenode} configurado se muestre al mismo grupo de usuarios que ven el {$a->rootnode} "{$a->contentbank}". Si el {$a->coursenode} configurado no se muestra para un usuario en particular, el {$a->rootnode} "{$a->contentbank}" se agrega al final de la sección {$a->coursenode} y se muestra/agrega una advertencia de depuración a los registros.';
$string['setting_movenodesheading'] = 'Mover {$a->what} en el cajón de navegación de Boost';
$string['setting_movenodestechnicalhint'] = 'Antecedentes técnicos: esto se hace eliminando el nodo de la ubicación original en el cajón de navegación de Boost y agregando el mismo nodo nuevamente en otra ubicación. Como resultado, solo se moverá dentro del cajón de navegación, pero permanecerá básicamente sin cadenas y se podrá seguir accediendo a él desde otras partes de Moodle.';
$string['setting_removebadgescoursenodeexplanation'] = 'Este nodo solamente es quitado si no hay insignias en el curso. Los profesores todavía pueden acceder a la página de gestión de insignias en el menú del curso (menú del engrane).<br /><em>Esta configuración solamente es procesada cuando el subsistema de insignias está habilitado en Moodle.</em>';
$string['setting_removecompetenciescoursenodeexplanation'] = 'El nodo solamente es removido si no hubiera competencias en el curso. Para profesores, habrá otro nodo de "Competencias" añadido al menú del curso (menú del engrane).<br /><em>Esta configuración solamente es procesada cuando el subsistema de competencias está habilitado en Moodle.</em>';
$string['setting_removecoursenodestechnicalhint'] = 'Antecedentes técnicos: Esto se hace al quitar el nodo del árbol de navegación. Así, el nodo ya no puede ser accesado por otras partes de Moodle. En configuraciones normales de Moodle, optimísticamente esto no debería de causar ningún problema.';
$string['setting_removegradescoursenodeexplanation'] = 'El nodo es eliminado para todos los usuarios, sin importar las capacidades de un usuario y sin importar la configuración \'Mostrar libro de calificaciones a estudiantes\' en las configuraciones del curso.';
$string['setting_removemycoursesnodeperformancehint'] = 'Por favor tenga en cuenta que: si Usted habilita esta configuración y también tiene habilitada la configuración <a href="{$a->url}">navshowmycoursecategories</a>, el quitar el nodo "Mis cursos" toma más tiempo y Usted debería de considerar deshabilitar la configuración navshowmycoursecategories .';
$string['setting_removenode'] = 'Quitar {$a->what} "{$a->which}"';
$string['setting_removenode_desc'] = 'Habilitar esta configuración quitará el/la {$a->what} "{$a->which}" al cajón de navegación de Boost.';
$string['setting_removenodeincoursecontext'] = 'Quitar {$a->what} "{$a->which}" en el contexto de curso';
$string['setting_removenodeincoursecontext_desc'] = 'Habilitar esta configuración quitará el/la {$a->what} "{$a->which}" del cajón de navegación de Boost cuando se está viendo una página Moodle que está localizada dentro de un curso.';
$string['setting_removenodeinnoncoursecontext'] = 'Quitar {$a->what} "{$a->which}" en contexto de no-curso';
$string['setting_removenodeinnoncoursecontext_desc'] = 'Habilitar esta configuración quitará el/la {$a->what} "{$a->which}" del cajón de navegación de Boost cuando se está viendo una página Moodle que está localizada fuera de un curso.';
$string['setting_removenodesheading'] = 'Quitar {$a->what} del cajón de navegación de Boost';
$string['setting_removenotselectedhomerootnodeexplanation'] = 'El nodo de Tablero / Inicio no seleccionado está definido por lo que el usuario elija que no sea su página de inicio.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'El nodo es eliminado para todos los usuarios, sin importar las capacidades de un usuario.';
$string['setting_removerootnodestechnicalhint'] = 'Aspectos técnicos: esto se hace configurando el atributo showinflatnavigation del nodo como falso. De esta manera, el nodo solo se ocultará del cajón de navegación, pero permanecerá en el árbol de navegación y se podrá seguir accediendo a él desde otras partes de Moodle.';
$string['setting_removeselectedhomerootnodeexplanation'] = 'El nodo del Inicio / Tablero seleccionado está definido por lo que el usuario elige para que sea su página inicial.';
$string['settingspage_bottomnodes'] = 'Nodos del fondo';
$string['settingspage_coursenodes'] = 'Nodos del curso';
$string['settingspage_custombottomnodes'] = 'Nodos personalizados del fondo';
$string['settingspage_customcoursenodes'] = 'Nodos personalizados del curso';
$string['settingspage_customrootnodes'] = 'Nodos personalizados de raíz';
$string['settingspage_mycoursesrootnode'] = 'Nodo raíz Mis Cursos';
$string['settingspage_rootnodes'] = 'Nodos de raíz';
