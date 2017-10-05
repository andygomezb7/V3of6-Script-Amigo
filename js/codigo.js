var cdg = {
resposit: {
add: function(tt){
mydialog.loading('Crear repositorio');
$.post(global_data.url+'/ajax/code-form.php', {'tts':1}, function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Crear repositorio');
mydialog.body(h);
mydialog.buttons(true, true, 'Crear', "cdg.resposit.set();", true, true, true, 'Cerrar', 'close', true, false);
mydialog.center();
});
},
set: function(){ 
var params = $('#mydialog .formrep input[name], #mydialog .formrep select[name], #mydialog .formrep textarea[name]');
$('#loading .titl').html('Creando repositorio...'); $('#loading').fadeIn(250); 
$.ajax({
type: 'POST', url: global_data.url+'/ajax/code-form.php',
data: $.param(params),
success: function(h){
$('#loading').fadeIn(250);
switch(h.charAt(1)){
case 0: case '0': default:
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250);
case 1: case '1':
$('#mydialog #procesando #error').html('Repositorio creado.').fadeIn(250); 
$('#loading .titl').html('Redireccionando...'); $('#loading').fadeIn(250); 
loaction.href=h.substring(3);
break;
}
}
});
},
del: function(){ }
},
arch: {
add: function(rpo, ttyr, ubt){
if(ttyr && ubt){ var gxtrksk = 'Por lo tanto el archivo que se actualizara sera el archivo padre.'; }else{ var gxtrksk = ''; }
mydialog.show();
mydialog.title('Subir archivo');
mydialog.body('<div class="hidden"><div id="error_flat">Te comentamos, Tu ubicación actual es: <b>'+global_data.user_name+'/'+rpo+'</b>, '+gxtrksk+'<br />Esto quiere decir que en esta ubicación se subira el archivo, Si estas de acuerdo procede con el proceso.<br />Muchas gracias.</div><div class="clearfix cdg-UpldDAcHvsV1-Cntn"><div class="cdg-UpldDAcHvsV1-Cntrtn"><div class="cdg-LdPrgsBrIn-eer dsnone"><h2>Subiendo...</h2><h4><div class="barloading"><div class="bar animate_1s" style="width: 0%;"></div></div></h4></div><div class="cdg-cnTrLdFls"><div class="cdg-rSltrIn-Cmnt dsnone"></div><div class="cdg-CntUpld-Txntupsub"><input type="file" name="CmbrPortdX" id="LdArchvOnRpstro1x2" /><h2>Arrastra tu archivo aqu&iacute;</h2><h4>- o -</h4><h3>Haz click aqu&iacute;</h3></div></div></div></div></div>');
mydialog.buttons(true, true, 'Subir', "cdg.arch.up('"+rpo+"');", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center(); $('#LdArchvOnRpstro1x2').bind('change', function(){ cdg.arch.up(""+rpo+"", ttyr, ubt); });
},
up: function(rpoldk, ttyr, ubt){
$('#mydialog .cdg-cnTrLdFls').fadeOut(250); $('#mydialog .cdg-LdPrgsBrIn-eer').fadeIn(250);
var exTndDLupFCdgOne = $('#LdArchvOnRpstro1x2')[0].files[0], slkekftypwor; var exTndDLupFCdgTwo = exTndDLupFCdgOne.name; var exTndDLupFCdg = exTndDLupFCdgTwo.substring(exTndDLupFCdgTwo.lastIndexOf('.') + 1);
if(ttyr){ slkekftypwor = ttyr;  }else{ slkekftypwor = 2; }
if(ubt){ typdoftndrrk = ubt; }else{ typdoftndrrk = 2; }
if(exTndDLupFCdg == 'png' || exTndDLupFCdg == 'jpg' || exTndDLupFCdg == 'gif' || exTndDLupFCdg == 'jpeg' || exTndDLupFCdg == 'PNG' || exTndDLupFCdg == 'GIF' || exTndDLupFCdg == 'JPEG'){ var UrlCdgVlUpArc = global_data.url+'/ajax/files-up.php'; }else{ var UrlCdgVlUpArc = global_data.url+'/ajax/files-upArc.php'; }
var inputFileImage = document.getElementById('LdArchvOnRpstro1x2'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file) + data.append('ggohe', 1) +  + data.append("f",4);
//$('#mydialog .cdg-LdPrgsBrIn-eer .barloading .bar').css({'width': '5%'}); 
$.ajax({
xhr: function(){
var xhr = new window.XMLHttpRequest();
xhr.upload.addEventListener("progress", function(evt){
if(evt.lengthComputable) {
var percentComplete = evt.loaded / evt.total;
var percentage = Math.round((evt.loaded * 100) / evt.total);
$('#mydialog .cdg-LdPrgsBrIn-eer .barloading .bar').width(percentage+'%');
console.log(percentComplete);
}
}, false);
xhr.addEventListener("progress", function(evt){
if (evt.lengthComputable) {
var percentComplete = evt.loaded / evt.total;
console.log(percentComplete);
}
}, false);
return xhr;
},
url: UrlCdgVlUpArc,
type: 'POST',
contentType:false, data:data, processData:false, cache:false, 
success: function(h){
if(h.charAt(1) == 0){ 
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250); 
}else{ 
var skfdjlwae=h.substring(3),varisklqwfaw=skfdjlwae.split('-');
//$('#mydialog .cdg-LdPrgsBrIn-eer .barloading .bar').css({'width': '100%'});
$('#mydialog .cdg-LdPrgsBrIn-eer').fadeOut(250); $('#mydialog .cdg-cnTrLdFls').fadeIn(250); $('#mydialog .cdg-cnTrLdFls .cdg-CntUpld-Txntupsub').fadeOut(250);
$('#mydialog .cdg-cnTrLdFls .cdg-rSltrIn-Cmnt').html('<div class="clearfix cdg-cntn-54684"><div class="cdg-typske"><input type="hidden" name="gt" value="'+slkekftypwor+'" /></div><h4>Nombre: '+varisklqwfaw[1]+' ; '+varisklqwfaw[2]+' <input type="hidden" name="nm" value="'+varisklqwfaw[1]+'" /><input type="hidden" name="t1cont" value="'+typdoftndrrk+'"/><input type="hidden" name="t1" value="'+rpoldk+'" /></h4><h4>Tamaño: '+varisklqwfaw[3]+' <input type="hidden" name="t2cont" value="2" /><input type="hidden" name="t2" value="'+varisklqwfaw[4]+'" /></h4><div class="cdg-lds-getCnUr dsnone">'+varisklqwfaw[0]+'<input type="hidden" name="t3cont" value="2" /><input type="hidden" name="t3" value="'+varisklqwfaw[0]+'" /></div></div>').fadeIn(250);
mydialog.buttons(true, true, 'Agregar al repositorio', "cdg.arch.set();", true, true, true, 'Cancelar', 'close', true, false);
}
}
});
},
set: function(){
var params = $('#mydialog .cdg-cntn-54684 input[name], #mydialog .cdg-cntn-54684 select[name], #mydialog .cdg-cntn-54684 textarea[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/code-upa.php',
data: $.param(params),
beforeSend: function(){
$('#mydialog #procesando #error').html('Enviando archivo...').fadeIn(250);
},
success: function(h){
$('#mydialog #procesando #error').html('Redireccionando...').fadeIn(250); location.href=h.substring(3);
}
});
}
}
}