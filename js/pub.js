//<![CDATA[ 
$(function(){
window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';  window.mostrarVistaPrevia = function mostrarVistaPrevia(he) { var Archivos, Lector, uclass; 
uclass = parseInt(he)+1; Archivos = $('.rsldsim_'+he+' #input_file')[0].files;
if(Archivos.length > 0){  
Lector = new FileReader(); 
/* document.getElementById("input_file") */ var inputFileImage = document.getElementById("input_file"); 
var file = inputFileImage.files[0]; 
var data = new FormData(); data.append("file",file) + data.append('ttrft', 2);
$('.rsldsim_'+he+' #vistaPrevia').fadeIn(250);
$('.result .img').append('<div class="rsldsim_'+uclass+'" tclass="'+uclass+'" id="filesimg"><img id="vistaPrevia" /><input type="file" onchange="asdkf('+uclass+');" tclass="'+uclass+'" id="input_file" class="input_file desact"></div>');
$('.rsldsim_'+he+'').css({'opacity':'0.3'});
Lector.onloadend = function(e) { var origen, tipo; origen = e.target; $('.rsldsim_'+he+' #vistaPrevia').attr('src',  origen.result); };
$.ajax({ type: 'POST', url: global_data.url+'/ajax/files-up.php', contentType:false, data:data, processData:false, cache:false, 
success: function(h){
switch(h.charAt(1)){ case 0: case '0': default: $('.rsldsim_'+he+' #vistaPrevia').attr('src', window.imagenVacia); break; 
case 1: case '1': 
$('.rsldsim_'+he+'').append('<input type="hidden" name="file_opimg" id="file_opimg" value="'+h.substring(3)+'"/>'); 
$('.rsldsim_'+he+'').addClass('activefile'); 
$('.rsldsim_'+he+' #input_file').removeClass('desact'); 
$('.rsldsim_'+he+' #input_file').addClass('activeds'); 
$('.rsldsim_'+he+' input.input_file').removeAttr('id');
$('.rsldsim_'+he+' #input_file').attr('name', 'tcont'); var VrblDlInptT654 = $('.result .img input[name=tcont_s654wnsttr]'); 
if(VrblDlInptT654.val()){ var CntDlDVInPAgrImgn = VrblDlInptT654.val()+','+h.substring(3); }else{ var CntDlDVInPAgrImgn = h.substring(3); }
VrblDlInptT654.val(CntDlDVInPAgrImgn);
break; }
$('.rsldsim_'+he+'').css({'opacity':'1'});
acbw.ultmsbwrtinvvo();
}
});
Lector.readAsDataURL(Archivos[0]); 
}else{ $('.rsldsim_'+he+'').remove(); }; 
};
});
//]]> 
function asdkf(e){ window.mostrarVistaPrevia(e); } 
function skdfqlw(obj, type){ $('.result .'+type+' .ttcont').fadeIn(250); $('.result .'+type+' .ttcont').html('<center>Cargando...</center>'); $('.s_import').remove(); var url = $('.result .'+type+' input[name=holdcontent]').val(); var regex=/^(ht|f)tps?:\/\/\w+([\.\-\w]+)?\.([a-z]{2,4}|travel)(:\d{2,5})?(\/.*)?$/i;
if(!regex.test(url)){ $('.result .'+type+' #error').html('el enlace <b class="color_red">no es valido</b>'); $('.result .'+type+' #error').fadeIn(250); obj.css('opacity','1'); }else{ $('.result .'+type+' #error').fadeOut(250); obj.css('opacity','1'); } obj.css('opacity','0.3'); $.ajax({ type: 'POST', url: global_data.url+'/ajax/bwort-import.php', data: 'typei=' + type + '&urli=' + url, success: function(h){ switch(h.charAt(1)){ case '0': case 0: $('.result .'+type+' #error').html(h.substring(3)); $('.result .'+type+' #error').fadeIn(250); break; case '1': $('.result .'+type+' .ttcont').fadeIn(250); $('.result .'+type+' .ttcont').html(h.substring(3)); break; default: $('.result .'+type+' #error').html(h.substring(3)); $('.result .'+type+' #error').fadeIn(250); break; } }, complete: function(){ obj.css('opacity','1'); } }); }

function skflwqlq(nrml){
var kasl = $('.publicdr #intTBD').val(), skkw, a54s5qq2;
var s5s4f65q1we3213sd2f1s6v1 = $('.publicdr #text_vales').val();
if(kasl == '5sa46f5w_d4f5qaw32_5s'){ skkw = 1; } 
else if(kasl == '5sa46f5w_d4f5qaw32_s'){ skkw = 2; }
else if(kasl == 'a5s4df_s54q6we_s54'){ skkw = 3; }
else if(kasl == '68sd74f68_s5df46qw__-65s'){ skkw = 5; }else{ skkw = 1; }
if(skkw == 1){ a54s5qq2 = '0'; }
else if(skkw == 2){ a54s5qq2 = $('.result .img input[name=tcont_s654wnsttr]').val(); }
else if(skkw == 3){ a54s5qq2 = $('.result .video input[name=holdcontent]').val(); }
else if(skkw == 5){ a54s5qq2 = $('.result .link input[name=holdcontent]').val(); }else{ a54s5qq2 = '0'; }
if(nrml == true){
$.ajax({ type: 'POST', url: global_data.url+'/ajax/bwort-add.php', 
data: 'trext='+s5s4f65q1we3213sd2f1s6v1+'&trype='+skkw+'&tcont='+a54s5qq2, 
beforeSend: function(){ $('.loadingbw').fadeIn(250); }, 
success: function(h){ 
switch(h.charAt(1)){ case 0: case '0': default:
mydialog.alert('Error', h.substring(3)); break; 
case '1': case 1: /*mydialog.alert('Success', h.substring(3));*/ 
$('.publicdr #text_vales').val(''); var pubInContDefn = $('.publicdr input.bxidt').val();
if(pubInContDefn == 1){
$('.bwortsloadeds').prepend(h.substring(3));
}else if(pubInContDefn == 2){
$('.pub_load_BWorts').prepend(h.substring(3));
}else{
$('.contbwh').prepend(h.substring(3));
}
break;  
} }, complete: function(){ $('.loadingbw').fadeOut(250); } });
}else{
$.ajax({ type: 'POST', url: global_data.url+'/ajax/bwort-add.php', data: 'trext='+s5s4f65q1we3213sd2f1s6v1+'&trype='+skkw+'&tcont='+a54s5qq2+'&xtras='+$('.publicdr input.bxidt').val()+'&xcont='+$('.publicdr input.bxcontent').val(), beforeSend: function(){ $('.loadingbw').fadeIn(250); }, success: function(h){ switch(h.charAt(1)){ case 0: case '0': mydialog.alert('Error', h.substring(3)); break; case '1': case 1:  /*mydialog.alert('Success', h.substring(3));*/  $('.publicdr #text_vales').val(''); var pubInContDefn = $('.publicdr input.bxidt').val(); if(pubInContDefn == 1){ $('.bwortsloadeds').prepend(h.substring(3)); }else if(pubInContDefn == 2){ $('.pub_load_BWorts').prepend(h.substring(3)); }else{ $('.contbwh').prepend(h.substring(3)); } break; default: mydialog.alert('Aviso', h.substring(3)); break; } }, complete: function(){ $('.loadingbw').fadeOut(250); } });
}
}

$(document).ready(function(){ 
$('.publicdr #text_vales').keyup(function(){  $('.publicdr .pub_btns').fadeIn(250); if($('.publicdr #text_vales').val()){ $('.publicdr .pub_btns .btn55758s').css('opacity', '1'); }else{ $('.publicdr .pub_btns .btn55758s').css('opacity', '0.3'); } }); 

$('.pub_btns a').click(function(){ 
var sadkfjalke888 = $(this).attr('id'); 
$('.pub_btns i').removeClass('active');
$('.pub_btns i.'+sadkfjalke888).addClass('active');
$('.result div.hidden').fadeOut(250);
$('.result .'+sadkfjalke888).fadeIn(250); 
$('.publicdr .pub_btns input#intTypeB').val(''+sadkfjalke888+''); 
var s5465w = $('.publicdr .pub_btns #intTypeB').val();  var SfDTdsLsTBDenInp = $('.publicdr .pub_btns #intTBD');
if(s5465w == 'img'){ 
SfDTdsLsTBDenInp.val('5sa46f5w_d4f5qaw32_s'); SfDTdsLsTBDenInp.attr('sval', 'img');
}else if(s5465w == 'video'){ 
SfDTdsLsTBDenInp.val('a5s4df_s54q6we_s54'); SfDTdsLsTBDenInp.attr('sval', 'video');
}else if(s5465w == 'link'){ 
SfDTdsLsTBDenInp.val('68sd74f68_s5df46qw__-65s'); SfDTdsLsTBDenInp.attr('sval', 'link');
}else if(s5465w == 'text'){
SfDTdsLsTBDenInp.val('5sa46f5w_d4f5qaw32_5s'); SfDTdsLsTBDenInp.attr('sval', 'text');
}else{} 
}); 

$('.top_header a').click(function(){ var sadkfjalke888 = $(this).attr('id'); $('.pub_btns i.text').removeClass('active');$('.pub_btns i.img').removeClass('active');$('.pub_btns i.video').removeClass('active');$('.pub_btns i.link').removeClass('active');$('.pub_btns i.'+sadkfjalke888).addClass('active');$('.result .text').fadeOut(250);$('.result .img').fadeOut(250);$('.result .video').fadeOut(250);$('.result .link').fadeOut(250);$('.result .'+sadkfjalke888).fadeIn(250); }); 
$('.desact').bind('change', function(){ window.mostrarVistaPrevia($(this).attr('tclass')); }); 
$('.pub_infppa_1').click(function(){ GblStrns.drowdownw('.pub_infppa'); });
});