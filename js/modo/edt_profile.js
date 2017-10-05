var modalsPrfl = {
cmbrprtdMdl: function(){                                           
mydialog.show();
mydialog.title('Cambiar foto de portada');
mydialog.body('<div class="CmbrPrtVFls dsnone hidden loadingCmbrPrtd"><div class="cntnt"><h2>Subiendo..</h2><h4><div class="barloading"><div class="bar animate_1s" style="width:5%;"></div></div></h4></div></div><div class="CmbrPrtVFls" id="CmbrPrtVFls"><div class="cntnt mstrImg dsnone"><div id="error" class="dsnone"></div><img src="" id="preview_img_avtprt_265"/></div><div class="cntnt" id="cntnt"><div class="lsf color_gray hidden" style="font-size: 265px;margin: -90px 0 0 0;position: relative;height: 156px;line-height: 138px;">cloud</div><input type="file" name="CmbrPortdX" id="CmbrPortdX250748"><h2>Arrastra una foto hasta aquí</h2><h4>- o -</h4><h3>Da click aquí</h3></div></div>');
mydialog.buttons(true, true, 'Subir foto de portada', "modalsPrfl.lgluteject()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
modalsPrfl.cmbrPrtdSlccnd('Portada', 1);
},
cmbrAvtrMdl: function(){ 
mydialog.show();
mydialog.title('Cambiar foto de Perfil');
mydialog.body('<div class="CmbrPrtVFls dsnone hidden loadingCmbrPrtd"><input type="hidden" id="x" name="x" /><input type="hidden" id="y" name="y" /><input type="hidden" id="w" name="w" /><input type="hidden" id="h" name="h" /><div class="cntnt"><h2>Subiendo..</h2><h4><div class="barloading"><div class="bar animate_1s" style="width:5%;"></div></div></h4></div></div><div class="CmbrPrtVFls" id="CmbrPrtVFls"><div class="cntnt mstrImg dsnone"><div id="error" class="dsnone"></div><img src="" id="preview_img_avtprt_265"/></div><div class="cntnt" id="cntnt"><div class="lsf color_gray hidden" style="font-size: 265px;margin: -90px 0 0 0;position: relative;height: 156px;line-height: 138px;">cloud</div><input type="file" name="CmbrPortdX" id="CmbrPortdX250748"><h2>Arrastra una foto hasta aquí</h2><h4>- o -</h4><h3>Da click aquí</h3></div></div>');
mydialog.buttons(true, true, 'Subir foto de perfil', "modalsPrfl.lgluteject()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
modalsPrfl.cmbrPrtdSlccnd('Perfil', 2);
},
cmbrPrtdSlccnd: function(type, typedos){
$('#mydialog #CmbrPrtVFls #CmbrPortdX250748').bind('change', function(){
var inputFileImage = document.getElementById('CmbrPortdX250748'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file) + data.append("f",2);
$('#mydialog #CmbrPrtVFls').fadeOut(120);
$('#mydialog .loadingCmbrPrtd').fadeIn(250);
$.ajax({
xhr: function(){ var xhr = new window.XMLHttpRequest(); xhr.upload.addEventListener("progress", function(evt){ if(evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; var percentage = Math.round((evt.loaded * 100) / evt.total); $('#mydialog .loadingCmbrPrtd .barloading .bar').width(percentage+'%'); console.log(percentComplete); } }, false); xhr.addEventListener("progress", function(evt){ if (evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; console.log(percentComplete); } }, false); return xhr; },
url: global_data.url+'/ajax/files-up.php',
type: 'POST',
contentType:false, data:data, processData:false, cache:false, 
success: function(h){
$('#mydialog .loadingCmbrPrtd').fadeOut(250);
$('#mydialog #CmbrPrtVFls').fadeIn(250);
$('#mydialog #CmbrPrtVFls #cntnt').fadeOut(250);
$('#mydialog #CmbrPrtVFls .mstrImg').fadeIn(250);
$('#mydialog #CmbrPrtVFls .mstrImg').append('<input type="hidden" id="keyCmbrPortd" value="CMBrPRTdK_142514755" />');
$('#mydialog #CmbrPrtVFls .mstrImg img').attr('src', h.substring(3));
mydialog.buttons(true, true, 'Cambiar foto de '+type, "modalsPrfl.cmbrPrtdSend("+typedos+")", true, true, true, 'Cancelar', 'close', true, false);
}
});
});
},
cmbrPrtdSend: function(tt){
if($('#mydialog #CmbrPrtVFls .mstrImg #keyCmbrPortd').val() == 'CMBrPRTdK_142514755'){
$("#loading .titl").html('Cambiando...');
$("#loading").fadeIn(250);
$.ajax({
url: global_data.url+'/ajax/user-cmbr.php',
type: 'POST',
data: 'key='+$('#mydialog #CmbrPrtVFls .mstrImg #keyCmbrPortd').val()+'&sid='+$('#mydialog #CmbrPrtVFls .mstrImg img').attr('src')+'&t='+tt,
success: function(h){
switch(h.charAt(1)){
case 0: case '0': default:
$('#mydialog #CmbrPrtVFls .mstrImg #error').html(h.substring(3));
$('#mydialog #CmbrPrtVFls .mstrImg #error').fadeIn(250);
$("#loading").fadeOut(250);
break;
case 1: case '1':
mydialog.close();
$("#loading .titl").html('Actualizando...');
$("#loading").fadeIn(250);
location.reload(true);
break;
}
}	
});
}else{}
},
}