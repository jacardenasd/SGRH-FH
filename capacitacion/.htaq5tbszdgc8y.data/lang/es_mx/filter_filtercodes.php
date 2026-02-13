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
 * Strings for component 'filter_filtercodes', language 'es_mx', version '4.4'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['brief'] = 'Corto';
$string['categorycardshowpic'] = 'Mostrar fondo {categorycards}';
$string['categorycardshowpic_desc'] = 'Si se habilita,mostrará un color/patrón de fondo para marca (categorycards) similar a las imágenes del curso cuando no se ha especificado una imagen.';
$string['chartprogressbarlabel'] = '{$a->label}: {$a->value}';
$string['contentmissing'] = '<h1>Falta contenido.</h1><p>Por favor notifique al webmaster.</p>';
$string['coursecardsbyenrol'] = 'Máximo de cartas {coursecardsbyenrol}.';
$string['coursecardsbyenrol_desc'] = 'Número máximo de tarjetas de curso a mostrar para marca (coursecardsbyenrol). Configurado a cero para ilimitado (no recomendado).';
$string['coursecardsformat'] = 'Arreglo de tarjetas del curso';
$string['coursecardsformat_desc'] = 'Mostrar {coursecards}, {coursecardsbyenrol} y {mycoursescards} ya sea:<br>
<ul>
<li><strong>Vertical</strong>: Imagen del curso arriba del nombre del curso.</li>
<li><strong>Horizontal</strong>: Imagen del curso a la izquierda de nombre, categoría y resumen del curso; o</li>
<li><strong>Lista</strong> en una tabla: Nombre del curso, categoría y resumen.</li>
</ul>';
$string['coursecontactlinktype'] = 'Tipo de enlace de contacto';
$string['coursecontactlinktype_desc'] = 'Elegir el tipo de enlace para el enlace del contacto en marcas (coursecontacts).';
$string['coursecontactshowdesc'] = 'Mostrar descripción del perfil del contacto.';
$string['coursecontactshowdesc_desc'] = 'Si se habilita, mostrará la descripción del perfil del contacto en marcas {coursecontacts}.';
$string['coursecontactshowpic'] = 'Mostrar imagen del contacto';
$string['coursecontactshowpic_desc'] = 'Si se habilita, mostrará la imagen del perfil del contacto en marcas {coursecontacts}.';
$string['defaultemail'] = '';
$string['defaultfirstname'] = '';
$string['defaultsurname'] = '';
$string['defaultusername'] = '';
$string['disabled_customnav_description'] = '<strong>Tenga en cuenta esto para soportar menú personalizado</strong> - Para habilitar el soporte para FilterCodes en el menú personalizado de su sitio Moodle, Usted podría necesitar personalizar su tema o el núcleo de Moodle. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus">Información acerca de como añadir soporte para FilterCodes en menúes personalizados</a>.';
$string['enable_customnav'] = 'Soporte para navegación personalizada';
$string['enable_customnav_description'] = '<strong>Experimental</strong>: Habilitar soporte para marcas de FilterCode en el menú de navegación personalizado de Moodle.
Nota: Se conoce que esto es compatible con los temas basados en Clean y Boost solamente en Moodle 3.2 a 3.4. No filtra las marcas en la página de Configuraciones de Temas de Moodle.';
$string['enable_scrape'] = 'Soporte de marca scrape (arañar URL)';
$string['enable_scrape_description'] = 'Habilitar la marca scrape (arañar URl)';
$string['enable_sesskey'] = 'Soporte de marca seskey';
$string['enable_sesskey_description'] = 'Habilitar globalmente la marca seskeyn. Esta característica está deshabilitada en foros aunque estuviera habilitada globalmente.';
$string['escapebraces'] = 'Tags de escape';
$string['escapebraces_desc'] = 'Cuando esta opción esté activada, usted podrá mostrar marcas FilterCode sin que sean interpretadas por este filtro al incluir las marcas dentro de  [ paréntesis cuadrados ]. Esto puede ser muy útil cuando se crea documentación para FilterCodes para los profesores y creadores de cursos en su sitio Moodle.<br><br>Ejemplo: [{fullname}] no mostrará el nombre completo del usuario, sino que mostrará la marca {fullname} sin los paréntesis,  en su lugar.';
$string['filtername'] = 'Códigos de Filtro';
$string['formcheckin'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf check-in">
    <fieldset>
        <input type="hidden" id="subject" name="subject" value="Present!">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="¡Aquí estoy!">
    </div>
</form>';
$string['formcontactus'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
<fieldset>
<div class="form-group">
<label for="name" id="namelabel" class="d-block">Su nombre <strong class="required">(obligatorio)</strong></label>
<input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
title="Mínimo 3 letras/espacios." required="required" {readonly}{ifloggedin} deshabilitado{/ifloggedin} valor="{fullname}">
</div>
<div class="form-group">
<label for="email" id="emaillabel" class="d-block">Dirección de correo electrónico <strong class="required">(requerido)</strong></label>
<input id="email" name="email" type="email" size="57" maxlength="60"
required="required" {readonly}{ifloggedin} deshabilitado{/ifloggedin} valor="{email}">
</div>
<div class="form-group">
<label for="subject" id="subjectlabel" class="d-block">Asunto <strong class="required">(requerido)</strong></label>
<input id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
title="Mínimo 5 caracteres." required="required">
</div>
<div class="form-group">
<label for="message" id="messagelabel" class="d-block">Mensaje <strong class="required">(requerido)</strong></label>
<textarea id="message" name="message" rows="5" cols="58" minlength="5"
title="Mínimo 5 caracteres." required="required"></textarea>
</div>
<input type="hidden" id="sesskey" name="sesskey" value="">
<script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
{recaptcha}
</fieldset>
<div>
<input type="submit" name="submit" id="submit" value="Enviar">
</div>
</form>';
$string['formcourserequest'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf new-course-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Su nombre <strong class="required">(required)</strong></label>
            <input id="name" name="nombre" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mínimo 3 letras/espacios." required="requerido" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">Email address <strong class="requerido">(required)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="requerido" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="new_course_name" id="new_course_namelabel" class="d-block">Proposed name of the new course <strong class="required">(required)</strong></label>
            <input id="new_course_name" name="new_course_name" type="text" size="57" maxlength="80" minlength="5"
                    title="Mínimo 5 caracteres." required="required">
        </div>
        <div class="form-group">
            <label for="descripción" id="descriptionlabel" class="d-block">Course description <strong class="required">(required)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="enviar" name="submit" id="submit" value="Enviar solicitud para este curso">
    </div>
</form>';
$string['formquickquestion'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Subject <strong class="required">(required)</strong></label>
            <input class="block" id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Mínimo 5 caracteres." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Message <strong class="required">(required)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Send">
    </div>
</form>';
$string['formsupport'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf support-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Your name <strong class="required">(required)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mínimo 3 letras/espacios." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">Email address <strong class="required">(required)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Subject <strong class="required">(required)</strong></label>
            <select id="subject" name="subject" required="required">
                <option label="Elija un asunto"></option>
                <option>No puedo cambiar mi contraseña</option>
                <option>No puedo ingresar</option>
                <option value="Suggestion">Tengo una sugerencia</option>
                <option value="Error message">Me manda un mensaje de error</option>
                <option value="System error">Algo no funciona como debiera</option>
                <option value="Course">Tengo dificultades para ingresar a un curso o algún contenido de un curso</option>
                <option value="Other reason">Otra (favor de especificar)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="specific_subject" id="specifylabel" class="d-block">Especifificar asunto o el nombre del curso&nbsp;<strong class="required">(required)</strong></label>
            <input type="text" id="specific_subject" name="specific_subject" size="57" maxlength="80" required="required">
        </div>
        <div class="form-group">
            <label for="url" id="urllabel" class="d-block">Especificar la dirección URL</label>
            <input type="url" id="url" name="url" size="57" maxlength="80" value="{referer}">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Descripción y detalles paso-a-paso sobre como reproducir el problema&nbsp;<strong class="required">(required)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Enviar solicitud de ayuda">
    </div>
</form>';
$string['globaltagcontentdesc'] = 'Este es el contenido que su marca global remplazará. Ejemplo:si su marca es llamada "{global_address}", esa marca será remplazada por el contenido ingresado dentro de este campo.';
$string['globaltagcontenttitle'] = 'Contenido';
$string['globaltagcount'] = 'Número de marcas originales';
$string['globaltagcountdesc'] = 'Seleccionar el número de marcas que usted desea definir. Para un desempeño óptimo, solamente seleccione el número que necesitará.';
$string['globaltagheadingdesc'] = 'Definir sus propias marcas globales, a veces también llamadas bloques globales.';
$string['globaltagheadingtitle'] = 'Marcas globales personalizadas';
$string['globaltagnamedesc'] = 'Esto será parte de su nombre de la marca, prefijado con "global_". Ejemplo: Si usted ingresa "address" aquí, su marca será llamada {global_address}". Debe ser una sola cadena de caracteres solamente, sin espacios, ni número ni caracteres especiales tampoco están permitidos.';
$string['globaltagnametitle'] = 'Tag: global_';
$string['hidecompletedcourses'] = 'Ocultar cursos completados';
$string['hidecompletedcourses_desc'] = 'Habilitar el filtrar evitando curso completados en listados de marcas {mycoursesmenu}';
$string['ifprofilefiedonlyvisible'] = '{ifprofile_field_} visible solamente .';
$string['ifprofilefiedonlyvisible_desc'] = 'Cuando se activa, restringe la marca {ifprofile_field_...} para solamente acceder a campos visibles del perfil. Los campos ocultos se comportarán como si el campo estuviera vacío. Si se desactiva, esta marca podrá comprobar campos ocultos del usuario.';
$string['moremenu'] = 'Más';
$string['narrowpage'] = 'Página angosta';
$string['narrowpage_desc'] = 'Habilite esta opción para optimizar la visualización de la información si Moodle está usando un tema con ancho limitado de página (como Boost en Moodle 4.0+).';
$string['nocompletedcourses'] = 'Ninguno de los cursos en los que usted está inscrito ha sido marcado como completado.';
$string['notavailable'] = 'No disponible';
$string['pagebuilder'] = 'Constructor de página';
$string['pagebuilderlink'] = 'https://www.layoutit.com/build';
$string['photoeditor'] = 'Editor de foto';
$string['photoeditorlink'] = 'https://pixlr.com/editor/';
$string['pluginname'] = 'Códigos de Filtro';
$string['privacy:metadata'] = 'El plugin Códigos de Filtro no almacena ningún dato personal acerca de ningún usuario.';
$string['screenrec'] = 'Grabadora de pantalla';
$string['screenreclink'] = 'https://screenapp.io/#/recording';
$string['showhiddenprofilefields'] = 'Mostrar campos de perfil ocultos';
$string['showhiddenprofilefields_desc'] = 'Habilitar la marca {profile_field_...} para procesar todos los campos de perfil incluyendo los ocultos al usuario.';
$string['sizeb'] = 'B';
$string['sizeeb'] = 'EB';
$string['sizegb'] = 'GB';
$string['sizekb'] = 'KB';
$string['sizemb'] = 'MB';
$string['sizetb'] = 'TB';
$string['sizeyb'] = 'YB';
$string['sizezb'] = 'ZB';
$string['teamcardsformat'] = 'Formato de tarjetas del equipo';
$string['teamcardsformat_desc'] = 'Elegir cómo aparecerán los miembros del equipo en la marca {teamcards}.<br>
<ul>
<li><strong>Ninguna</strong>: Muestra solamente la imagen y nombre como una carta sin la descripción del usuario.</li>
<li><strong>Ícono</strong>: Igual que Ninguna, excepto que la descripción del usuario aparece en una burbuja de información emergnete.</li>
<li><strong>Breve</strong>:Igual que Ninguna pero muestra la descripción debajo de la imagen del usuario y el nombre.</li>
<li><strong>Verbosa</strong>: Formato de lista. Recomendado si los miembros de su equipo tienden a usar descripciones de usuario largas.</li>';
$string['teamcardslinktype'] = 'Tipo de enlace del equipo';
$string['teamcardslinktype_desc'] = 'Elegir el tipo de enlace para el enlace del miembro del equipo en la marca {teamcards} . Nota: La foto será automáticamente enlazada al perfil cuando el usuario es ingresado a pesar de su elección aquí..';
$string['unenrolme'] = 'Des-inscribirme de este curso';
$string['verbose'] = 'Verboso';
$string['wishlist'] = 'Lista de deseos';
$string['wishlist_add'] = 'Añadir este curso a la lista';
$string['wishlist_nocourses'] = 'Sin cursos en la lista';
$string['wishlist_remove'] = 'Quitar este curso de la lista';
