var acbw = {
vtn: function(ssls, tty, act){ var sttrup, totalsttrup, s55we; if(tty == 'pos'){ s55we = 'up'; } if(tty == 'neg'){ s55we = 'dow'; } sttrup = $('.bworts .content .buttons .ejects #'+s55we+''+ssls).text(); $('.bworts .content .buttons .ejects #'+s55we+''+ssls).css({'font-weight':'bold', 'color':'#000000'}); $.post(global_data.url+'/ajax/bwort-openyotu.php', {'type': act, 'idb': ssls, 'voto': tty}, function(h){ switch(h.charAt(1)){  case 0: case '0': default: mydialog.alert('Error: Bwort #'+ssls, h.substring(3)); break;  case 1: case '1': $('.bworts .content .buttons .ejects #'+s55we+''+ssls).css({'color':'#07f'}); if(act == 'true'){ var ejcBvnt = parseInt(sttrup)+1; }else if(act == 'false'){ var ejcBvnt = parseInt(sttrup)-1; }else{ var ejcBvnt = parseInt(sttrup)+1; } break; } }); },
edtBwrt_Send: function(h, tpy){ var texspanedtbw = $('#edtrBwrt_'+h+'_'+h+h+' .cont_'+h+'_context'); var cntEdtrCntrn = $('#edtrBwrt_'+h+'_'+h+h+' .txtraEdtr_'+h+h); var textEdtBw = $('#edtrBwrt_'+h+'_'+h+h+' .txtraEdtr_'+h+h+' .txtra_val_'+h);
if(tpy == 1){  textEdtBw.val(texspanedtbw.text()); cntEdtrCntrn.fadeIn(140); texspanedtbw.fadeOut(250); }else if(tpy == 2){ cntEdtrCntrn.fadeOut(140); texspanedtbw.fadeIn(250); }else{  $('#btn_edtbwrt1_'+h).css({opacity: '0.3'}); textEdtBw.css({'opacity': '0.3'}); $.ajax({ url: global_data.url+'/ajax/user-bwortedit.php', type: 'POST', data: 'idpsr='+h+'&txbwor='+textEdtBw.val(),  success: function(h){  switch(h.charAt(1)){ case 0: case '0': default: $('#edtrBwrt_'+h+'_'+h+h+' .txtraEdtr_'+h+h+' #error').fadeIn(250).html(h.substring(3)); break;  case 1: case '1':  cntEdtrCntrn.fadeOut(250); texspanedtbw.html(textEdtBw.val()).fadeIn(250); break; }  } }); }
},
ldcmts: function(ids){
if($('#form_'+ids).css('display') == 'none'){ $('#preform_'+ids).fadeOut(250); $('#form_'+ids).fadeIn(250); $('#form_'+ids+' textarea').focus(); }else{ $('#form_'+ids).fadeOut(250); $('#preform_'+ids).fadeIn(250); }
},
ocmoscomm: function(id){
if($('#commbwislwe_'+id).css('display') == 'none'){ $('#ocult_mos_comm_'+id+' .two').fadeOut(250); $('#ocult_mos_comm_'+id+' .one').fadeIn(250); $('#commbwislwe_'+id).toggle('slow'); }else{ $('#ocult_mos_comm_'+id+' .one').fadeOut(250); $('#ocult_mos_comm_'+id+' .two').fadeIn(250); $('#commbwislwe_'+id).toggle('slow'); } 
},
ocu: function(i, t){
if(t){
$.post(global_data.url+'/ajax/bwort-ocultar.php', {'sk':i}, function(h){
$('#'+i+i+'_L').fadeOut(250); $('#'+i+i+'_L').remove();
mydialog.alert('Ocultar Bwort', '<div style="margin:5px;" class="hidden">¡Bwort ocultado con existo!</div>');
});
}else{
mydialog.show(true);
mydialog.title('Ocultar bwort');
mydialog.body('<div id="error_flat">¿Estas seguro de ocultar este bwort?<br />Se ocultara de tu inicio.</div>');
mydialog.buttons(true, true, 'Ocultar bwort', "acbw.ocu("+i+", 1)", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
}
},
commbw: function(id){ if($('.nbm_cm_preview_'+id+' input[name=valimcom_vb]').val() == '1.0'){ var aksdwfk_comenim = '<div class="clearfix hidden" style="margin: 12px 0 0 0;"><img src="'+$('.nbm_cm_preview_'+id+' input[name=valimcom_d]').val()+'" style="max-width: 90%;max-height: 328px;"></div>'; }else{ var aksdwfk_comenim = ''; } $.ajax({ url: global_data.url+'/ajax/bwort-commbidi.php', type: 'POST', data: 'bid='+id+'&text='+$('#form_'+id+' textarea').val()+'&bim='+$('.nbm_cm_preview_'+id+' input[name=valimcom_d]').val()+'&bvimg='+$('.nbm_cm_preview_'+id+' input[name=valimcom_vb]').val(), beforeSend: function(){ $('#form_'+id+' input[type=button].btn_green').css({'opacity':'0.3'}); }, success: function(h){ switch(h.charAt(1)){ case 0: case '0': $('#form_'+id+' #error_flat').fadeIn(250).html(h.substring(3)); break; case 1: case '1': $('#form_'+id+' #error_flat').fadeOut(250); $('#commbwislwe_'+id).append('<div class="coment hidden"><div class="img floatL"><img src="'+global_data.url+'/thumb/img/50/50/?file='+global_data.img+'"></div><div class="content floatL"><div class="title floatL">'+global_data.user_name+'</div><div class="info floatL">Hace instantes</div><div class="text hidden"><span>'+$('#form_'+id+' textarea').val()+'</span>'+aksdwfk_comenim+' </div></div></div>'); $('#form_'+id+' textarea').val(''); $('.nbm_cm_preview_'+id).hide().html('<center>Nada aún.</center><input type="hidden" name="valimcom_d" value="s"/><input type="hidden" name="valimcom_vb" value="2.0" />'); break; default: $('#form_'+id+' #error_flat').fadeIn(250).html(h.substring(3)); break; }  }, complete: function(){ $('#form_'+id+' input[type=button].btn_green').css({'opacity':'1'}); } }); },
ultmsbwrtinvvo: function(){
if($('.cmpltd input[name=ssome]').val() == 1 && $('#js_send input[name=liveNotifs]').val() == 0 && $('#js_send input[name=liveMsg]').val() == 0){ $('.cmpltd input[name=ssome]').val('0');
$.post(global_data.url+'/ajax/bwort-nevs.php', function(h){
if(h.charAt(1) == 1 || h.charAt(1) == '1'){ var sd5q98we6q54w6r3sfafsfaf = $(document).scrollTop();
if(sd5q98we6q54w6r3sfafsfaf > 400){ 
if($('.aiorandarhme').length){ $('.aiorandarhme').fadeIn(); 
}else{ $(document.body).append('<div class="aviso bg_blue aiorandarhme" onclick="$(document).scrollTop(0);$(\'.aiorandarhme\').remove();"><div style="margin: 5px 5px 5px 5px;">Reanudar</div></div>');  }
} $('.contbwh').prepend($(h).fadeIn('slow')); }  $('.cmpltd input[name=ssome]').val('1'); });
}
},
iiE: function(g, se){ mydialog.loading('Bwort view'); $.post(global_data.url+'/ajax/bwort-i.php', {'gore':g,'she':se}, function(h){ mydialog.end_loading(); mydialog.show(); mydialog.title('Bwort view'); mydialog.body(h); mydialog.buttons(true, true, false, false, true, true, true, false, false, true, false); mydialog.center(); });
},
delet: function(id){ mydialog.show(); mydialog.title('¿Seguro?'); mydialog.body('<center>¿Estas seguro de eliminar este <b>bwort</b>?</center>'); mydialog.buttons(true, true, 'Si, estoy seguro', 'acbw.senddelet('+id+');', true, true, true, 'Cancelar', 'close', true, false); mydialog.center();
},
senddelet: function(id){ $('#loading').fadeIn(250); $('#loading .titl').html('Eliminando..'); $.post(global_data.url+'/ajax/bwort-del.php', {'bid':id}, function(h){ $('#loading').fadeOut(250); switch(h.charAt(1)){ case 0: case '0': default: mydialog.alert('Error', h.substring(3)); break; case 1: case '1': $('#'+id+id+'_L').remove(); mydialog.alert('¡Felicidades!', '<center><div id="error_flat">¡Felicidades!<br />Tu <b>Bwort</b> a sido eliminado, te recomendamos revisar tu papelera de reciclaje para poder reactivar bworts eliminados y otro contenido...</div></center>'); break; } });
},
chnimgcm: function(obj){
var varkwk_L = obj.attr('filen');
$('.nbm_cm_preview_'+varkwk_L).html('<center>Cargando imagen...</center><input type="hidden" name="valimcom_d" value="s"/><input type="hidden" name="valimcom_vb" value="2.0" />').show();
var inputFileImage = document.getElementById("incomfi_"+varkwk_L); 
var filesdf54we = inputFileImage.files[0]; 
var data = new FormData(); data.append("file",filesdf54we);
$.ajax({ 
xhr: function(){
var xhr = new window.XMLHttpRequest();
xhr.upload.addEventListener("progress", function(evt){ if(evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; var percentage = Math.round((evt.loaded * 100) / evt.total); $('.nbm_cm_preview_'+varkwk_L+' center').html('Subiendo: '+percentage+'%'); console.log(percentComplete); }}, false);
xhr.addEventListener("progress", function(evt){ if (evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; console.log(percentComplete); }}, false);
return xhr;
},
type: 'POST', 
url: global_data.url+'/ajax/files-up.php', 
contentType:false, 
data:data, 
processData:false, 
cache:false, 
success: function(h){
if(h.charAt(1) == 1 || h.charAt(1) == '1'){ 
$('.nbm_cm_preview_'+varkwk_L+'').html('<center><img src="'+h.substring(3)+'" /></center><input type="hidden" name="valimcom_d" id="namval_img_cmm_'+varkwk_L+'" value="'+h.substring(3)+'"/><input type="hidden" name="valimcom_vb" value="1.0" />'); 
}else{
$('#form_'+varkwk_L+' #error_flat').html(h.substring(3)).show();
$('.nbm_cm_preview_'+varkwk_L).html('<center>Error</center><input type="hidden" name="valimcom_d" value="s"/><input type="hidden" name="valimcom_vb" value="2.0" />').show();
}
}
});
}
}

$(function(){ 
$('.video_player').click(function(){ $(this).css({'opacity':'0.3'}); var goHed = $(this).attr('vid'); $(this).html($('<iframe width="321" height="181" src="//www.youtube.com/embed/'+goHed+'" frameborder="0" allowfullscreen></iframe>').fadeIn(250)); }); $(this).css({'opacity':'1'});
setInterval(function(){ acbw.ultmsbwrtinvvo(); }, 11000); 
});