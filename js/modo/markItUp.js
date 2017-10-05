var lang = Array(); lang['Negrita'] = "Negrita"; lang['Cursiva'] = "Cursiva"; lang['Subrayado'] = "Subrayado"; lang['Alinear a la izquierda'] = "Alinear a la izquierda"; lang['Centrar'] = "Centrar"; lang['Alinear a la derecha'] = "Alinear a la derecha"; lang['Color'] = "Color"; lang['Rojo oscuro'] = "Rojo oscuro"; lang['Rojo'] = "Rojo"; lang['Naranja'] = "Naranja"; lang['Marron'] = "Marr&oacute;n"; lang['Amarillo'] = "Amarillo"; lang['Verde'] = "Verde"; lang['Oliva'] = "Oliva"; lang['Cyan'] = "Cyan"; lang['Azul'] = "Azul"; lang['Azul oscuro'] = "Azul oscuro"; lang['Indigo'] = "Indigo"; lang['Violeta'] = "Violeta"; lang['Negro'] = "Negro"; lang['Tamano'] = "Tama&ntilde;o"; lang['Miniatura'] = "Miniatura"; lang['Pequena'] = "Peque&ntilde;a"; lang['Normal'] = "Normal"; lang['Grande'] = "Grande"; lang['Enorme'] = "Enorme"; lang['Insertar video de YouTube'] = "Insertar video de YouTube"; lang['Insertar video de Google Video'] = "Insertar video de Google Video"; lang['Insertar archivo SWF'] = "Insertar archivo SWF"; lang['Insertar Imagen'] = "Insertar Imagen"; lang['Insertar Link'] = "Insertar Link"; lang['Insertar Emoticon'] = "Insertar Emoticon"; lang['Citar'] = "Citar"; lang['Ingrese la URL que desea postear'] = "Ingrese la URL que desea postear"; lang['Fuente'] = "Fuente"; lang['ingrese el id de yt'] = "Ingrese la URL de YouTube:\nEjemplo:\nhttp://www.youtube.com/watch?v=CACqDFLQIXI"; lang['ingrese el id de gv'] = "Ingrese el ID del video de Google:\n\nEjemplo:\nSi la URL de su video es:\nhttp://video.google.com/videoplay?docid=-5331378923498461236\nEl ID es: -5331378923498461236"; lang['ingrese el id de gv IE'] = "Ingrese el ID del video de Google:\nPor ejemplo: -5331378923498461236"; lang['ingrese la url de swf'] = "Ingrese la URL del archivo swf"; lang['ingrese la url de img'] = "Ingrese la URL de la imagen"; lang['ingrese la url de url'] = "Ingrese la URL que desea postear"; lang['ingrese el txt a citar'] = "Ingrese el texto a citar"; lang['Ingrese el codigo'] = "Ingrese el código"; lang['ingrese solo el id de gv'] = "Ingrese solo el ID de GoogleVideo"; lang['Cambiar vista'] = "Cambiar vista"; lang['Ingrese el texto a citar'] = "Ingrese el texto a citar"; lang['Ingrese la URL'] = "Ingrese la URL"; lang['Ingrese Enlace a acortar'] = "Ingrese Enlace a acortar";

    var mySettings = {
    markupSet: [
        { action: 'bold', name: lang['Negrita'], key: 'B', openWith: '[b]', closeWith: '[/b]', },
        { action: 'italic', name: lang['Cursiva'], key: 'I', openWith: '[i]', closeWith: '[/i]', },
        { action: 'underline', name: lang['Subrayado'], key: 'U', openWith: '[u]', closeWith: '[/u]', },
        { separator: '-' }, { action: 'justifyLeft', name: lang['Alinear a la izquierda'], openWith: '[align=left]', closeWith: '[/align]', },
        { action: 'justifyCenter', name: lang['Centrar'], openWith: '[align=center]', closeWith: '[/align]', },
        { action: 'justifyRight', name: lang['Alinear a la derecha'], openWith: '[align=right]', closeWith: '[/align]', },
        { separator: '-' }, { name: 'Color', dropMenu: [ { action: 'foreColor', name: lang['Rojo oscuro'], openWith: '[color=darkred]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Rojo'], openWith: '[color=red]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Naranja'], openWith: '[color=orange]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Marron'], openWith: '[color=brown]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Amarillo'], openWith: '[color=yellow]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Verde'], openWith: '[color=green]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Oliva'], openWith: '[color=olive]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Cyan'], openWith: '[color=cyan]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Azul'], openWith: '[color=blue]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Azul oscuro'], openWith: '[color=darkblue]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Indigo'], openWith: '[color=indigo]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Violeta'], openWith: '[color=violet]', closeWith: '[/color]', },
        { action: 'foreColor', name: lang['Negro'], openWith: '[color=black]', closeWith: '[/color]', } ]
        }, { name: lang['Fuente'], dropMenu: [ { action: 'fontSize', name: lang['Pequena'], openWith: '[size=9]', closeWith: '[/size]', },
        { action: 'fontSize', name: lang['Normal'], openWith: '[size=12]', closeWith: '[/size]', },
        { action: 'fontSize', name: lang['Grande'], openWith: '[size=18]', closeWith: '[/size]', },
        { action: 'fontSize', name: lang['Enorme'], openWith: '[size=24]', closeWith: '[/size]', } ]
        }, { name: lang['Fuente'], dropMenu: [ { action: 'fontName', name: 'Arial', openWith: '[font=Arial]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Courier New', openWith: '[font=Courier New]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Georgia', openWith: '[font=Georgia]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Times New Roman', openWith: '[font=Times New Roman]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Verdana', openWith: '[font=Verdana]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Trebuchet MS', openWith: '[font=Trebuchet MS]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Lucida Sans', openWith: '[font=Lucida Sans]', closeWith: '[/font]', },
        { action: 'fontName', name: 'Comic Sans MS', openWith: '[font=Comic Sans MS]', closeWith: '[/font]', } ]
        }, { separator: '-' }, { action: 'insertHtml', name: lang['Insertar video de YouTube'], beforeInsert: function (r) { var video = prompt(lang['ingrese el id de yt'], ''); if(video){ var id; id = video.match(/(?:v=|v\/|embed\/)([-_a-z0-9]+)/i); if(!id[1]){ id = video.match(/^([-_a-z0-9]+)/i); } if(id[1]){ r.replaceWith = '[video]' + video + '[/video]\nlink: [url]' + video + '[/url]\n'; } }else{ r.replaceWith = ''; } } },
        { action: 'insertHtml', name: lang['Insertar archivo SWF'], beforeInsert: function (r) { var selection = r.selection, movie = ''; r.replaceWith = ''; if (selection.substr(0, 7) == 'http://') { movie = selection; } else { movie = prompt(lang['Ingrese la URL'], 'http://'); } if (movie) { r.replaceWith = '[swf=' + movie + ']\nlink: [url]' + movie + '[/url]\n'; } else { r.replaceWith = ''; } } },
        { action: 'insertHtml', name: lang['Insertar Imagen'], beforeInsert: function (r) { var selection = r.selection, img = ''; r.replaceWith = ''; if (selection.substr(0, 7) == 'http://') { img = selection; } else { img = prompt(lang['Ingrese la URL'], 'http://'); } if (img) { r.replaceWith = '[img]'+img+'[/img]'; } else { r.replaceWith = ''; } } },
        { action: 'createLink', name: lang['Insertar Link'], beforeInsert: function (r) { var selection = r.selection, link = '', innerText = ''; r.replaceWith = '';r.action = 'createLink'; if (selection.match(/^(https?|ftp):\/\//)) { innerText = selection; link = selection; } else { link = prompt(lang['Ingrese la URL'], 'http://'); if (link) { if (selection) { innerText = selection; } else { innerText = link; } } } if (link && innerText) { if (link == innerText) { r.replaceWith = '[url]' + innerText + '[/url]'; } else { r.replaceWith = '[url=' + link + ']' + innerText + '[/url]'; } } } },
        { action: 'insertHtml', name: lang['Citar'], beforeInsert: function (r) { var selection = r.selection, quote = ''; r.replaceWith = ''; if (selection){ quote = selection; } else { quote = prompt(lang['Ingrese el texto a citar']); } if (quote) { r.replaceWith = '[quote]' + quote + '[/quote]'; } } },
        { action: 'insertHtml', name: 'Agregar c&oacute;digo', openWith: '[code]', closeWith: '[/code]', },
        { separator: '-' }, { name: 'Emoticones', beforeInsert: function (r) { popupemt(); } },
        { name: 'Agregar spoiler', openWith: '[spoiler]', closeWith: '[/spoiler]', }/*,
        { separator: '-' }, { name: 'Avisos', dropMenu: [ { action: 'fontName', name: 'Noticia', openWith: '[notice]', closeWith: '[/notice]', },
        { action: 'fontName', name: 'Información', openWith: '[info]', closeWith: '[/info]', },
        { action: 'fontName', name: 'Advertencia', openWith: '[warning]', closeWith: '[/warning]', },
        { action: 'fontName', name: 'Error', openWith: '[error]', closeWith: '[/error]', },
        { action: 'fontName', name: 'Exito', openWith: '[success]', closeWith: '[/success]', } ] }, 
        { name: 'Enlace Oculto', beforeInsert: function (r) { var selection = r.selection, quote = ''; r.replaceWith = ''; if (selection){ quote = selection; } else { quote = prompt(lang['Ingrese Enlace a acortar']); } if (quote) { r.replaceWith = '[enlace]' + quote + '[/enlace]'; } } }*/
    ]
};
var markButtons = {
youtube: function(h) { var msg = prompt(lang['ingrese el id de yt'], ''); if(msg != null){ h.replaceWith = '[video]' + msg + '[/video]\nlink: [url]' + msg + '[/url]\n'; h.openWith = ''; h.closeWith = ''; }else{ h.replaceWith = ''; h.openWith = ''; h.closeWith = ''; } },
flash: function(h) { if(h.selection!='' && h.selection.substring(0,7)=='http://'){ h.replaceWith = '[swf=' + h.selection + ']\nlink: [url]' + h.selection + '[/url]\n'; h.openWith = ''; h.closeWith = ''; }else{ var msg = prompt(lang['ingrese la url de swf'], 'http://'); if(msg != null){ h.replaceWith = '[swf=' + msg + ']\nlink: [url]' + msg + '[/url]\n'; h.openWith = ''; h.closeWith = ''; }else{ h.replaceWith = ''; h.openWith = ''; h.closeWith = ''; } } },
image: function(h) { if(h.selection!='' && h.selection.substring(0,7)=='http://'){ h.replaceWith = ''; h.openWith = '[img]'; h.closeWith = '[/img]'; }else{ var msg = prompt(lang['ingrese la url de img'], 'http://'); if(msg != null){ h.replaceWith = '[img]' + msg + '[/img]'; h.openWith = ''; h.closeWith = ''; }else{ h.replaceWith = ''; h.openWith = ''; h.closeWith = ''; } } },
link: function(h) { if(h.selection==''){ var msg = prompt(lang['Ingrese la URL que desea postear'], 'http://'); if(msg != null){ h.replaceWith = '[url]' + msg + '[/url]'; h.openWith = ''; h.closeWith = ''; }else{ h.replaceWith = ''; h.openWith = ''; h.closeWith = ''; } }else if(h.selection.substring(0,7)=='http://' || h.selection.substring(0,8)=='https://' || h.selection.substring(0,6)=='ftp://'){ h.replaceWith = ''; h.openWith='[url]'; h.closeWith='[/url]'; }else{ var msg = prompt(lang['Ingrese la URL que desea postear'], 'http://'); if(msg != null){ h.replaceWith = ''; h.openWith='[url=' + msg + ']'; h.closeWith='[/url]'; }else{ h.replaceWith = ''; h.openWith = ''; h.closeWith = ''; } } },
quote: function(h) { if(h.selection==''){ var msg = prompt(lang['Ingrese el texto a citar'], ''); if(msg != null){ h.replaceWith = '[quote]' + msg + '[/quote]'; h.openWith = ''; h.closeWith = ''; }else{ h.replaceWith = ''; h.openWith = ''; h.closeWith = ''; } }else{ h.replaceWith = ''; h.openWith='[quote]'; h.closeWith='[/quote]'; } } };

$(function(){
$('.markItUp').markItUp(mySettings);
$(window).scroll(function() { var position = $('.markItUp').offset(), y = position.top, h = $('.markItUp').height(), yh = y + h, w = $('.markItUpHeader').width(); var th = $('.markItUpHeader').height(), pad = $('.markItUpHeader').height();  if(window.pageYOffset > y && window.pageYOffset < yh) { $('.markItUpHeader').css({'position':'fixed', 'top':'50px', 'width':w, 'height':th}); $('#markItUp, .markItUpHeader').addClass('padtop'); }else{ $('.markItUpHeader').removeAttr('style'); $('#markItUp, .markItUpHeader').removeClass('padtop'); } });
});