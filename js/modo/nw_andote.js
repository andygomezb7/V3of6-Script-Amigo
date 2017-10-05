var hlo = {
adi: function(){
$('.slect_img_oo .img_vr_oo').fadeOut(250);
$('.slect_img_oo .bg_img_oo').fadeOut(250);
$('.slect_img_oo .selec_img_oo').fadeIn(250);
},
hi: function(){
mydialog.loading('Vista previa');
$.post(global_data.url+'/ajax/new-preview.php', {'text': $('.add_note .add_note_cont textarea[name=text]').val()}, function(h){
mydialog.end_loading();
mydialog.show(true);
mydialog.title('Vista previa');
mydialog.body('<div style="width:700px;height: 509px;overflow-y:auto;overflow-x:hidden;">'+h+'</div>');
mydialog.buttons(true, true, 'Agregar nota', "hlo.go()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
},
go: function(){
mydialog.close();
$('.add_note_l .ldad').fadeIn(250); $('.add_note_l .ldad .bar').css('width', '15%');
var params = $('.add_note .add_note_cont input[name], .add_note .add_note_cont select[name], .add_note .add_note_cont textarea[name]');
$.ajax({
type: 'POST',
data: $.param(params),
url: global_data.url+'/ajax/new-send.php',
beforeSend: function(){ $('.add_note_l .ldad .bar').css('width', '50%'); },
success: function(h){
$('.add_note_l .ldad .bar').css('width', '100%'); $('.add_note_l .ldad').fadeOut(250); 
var virGorl = h.substring(3);
var akglwekmGorkkw = virGorl.split('*');
switch(h.charAt(1)){
case 0: case '0': default: mydialog.alert('Publicar nota', '<div id="error_flat" class="red_flat" style="margin:8px;">'+h.substring(3)+'</div>'); break;
case 1: case '1': mydialog.alert('Nota publicada', '<div id="error_flat" class="blue_flat">Nota publicada exitosamente, Espera un momento...</div>'); hlo.bw(akglwekmGorkkw[0], akglwekmGorkkw[2], akglwekmGorkkw[1]); break;
}
}
});
},
bw: function(ur, nt, val, t){
if(t){
$.post(global_data.url+'/ajax/new-bwort.php', {'me':$('#mydialog textarea#dsntpub').val(),'i':val}, function(h){
switch(h.charAt(1)){ case 0: case '0': default: mydialog.alert('Aviso', '<div id="error_flat">'+h.substring(3)+'</div>'); break; case 1: case '1': mydialog.alert('Nota compartida', '<div id="error_flat" class="blue_flat">¿Quieres ver la nota? <a href="'+ur+'">Click aqui</a></div>'); break; }
});
}else{ 
mydialog.show(true);
mydialog.title('Vista previa');
mydialog.body('<div class="hidden"><div class="hidden zoom" style="margin: 1px 1px;width: 700px;height: 142px;"><div style="margin: 0px 0 10px 0;"><h2 class="color_gray">Compartir tu nota</h2><div class="color_gray" style="margin: 11px 0 16px 0;"><h1 style="font-size: 16px;"><a href="'+ur+'">'+nt+'</a></h1></div><input type="hidden" name="int" id="int_n" value="'+val+'" /></div><div><textarea id="dsntpub" placeholder="Agrega una descripción para compartir..." style="margin: 0px; width: 683px; height: 81px; padding: 5px;"></textarea></div></div></div>');
mydialog.buttons(true, true, 'Compartir nota', "hlo.bw('"+ur+"', '"+nt+"', '"+val+"', 1)", true, true, true, 'Ir a la nota', 'location.href="'+ur+'";', true, false);
mydialog.center();
} }
}

$(function(){
$('#is').bind('change', function(){
var inputFileImage = document.getElementById('is'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file) + data.append("f",5);
$('.slect_img_oo .selec_img_oo').fadeOut(250); $('.slect_img_oo .bg_img_oo').fadeIn(120);
$.ajax({
xhr: function(){ var xhr = new window.XMLHttpRequest(); xhr.upload.addEventListener("progress", function(evt){ if(evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; var percentage = Math.round((evt.loaded * 100) / evt.total); $('.slect_img_oo .bg_img_oo .barloading .bar').width(percentage+'%'); console.log(percentComplete); } }, false); xhr.addEventListener("progress", function(evt){ if (evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; console.log(percentComplete); } }, false); return xhr; },
url: global_data.url+'/ajax/files-up.php',
type: 'POST',
contentType:false, data:data, processData:false, cache:false, 
success: function(h){
$('.slect_img_oo .selec_img_oo').fadeOut(250); $('.slect_img_oo .bg_img_oo').fadeOut(120); 
$('.slect_img_oo .img_vr_oo').html('<img src="" style="width: 100%;height:125px;margin:0 auto;"/><div class="lsf cursorP" onclick="hlo.adi();" title="Cambiar imagen">close</div><input type="hidden" name="imagen" id="kim" value="'+h.substring(3)+'" />');
$('.slect_img_oo .img_vr_oo img').attr('src', h.substring(3));
$('.slect_img_oo .img_vr_oo').fadeIn(250);
}
});
});
})