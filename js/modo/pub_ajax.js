//<![CDATA[ 
$(function(){
$.getScript("http://code.jquery.com/jquery-1.8.3.js", function(){ $('head').append('<script type="text/javascript"> var jquery = { jquery.1.8.3 = "loader", } </script>'); }); 
window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=='; 
window.mostrarVistaPrevia = function mostrarVistaPrevia(he) {
var Archivos, Lector, uclass; 
uclass = parseInt(he)+1;
Archivos = $('.rsldsim_'+he+' #input_file')[0].files;
if (Archivos.length > 0){ 
var inputFileImage = document.getElementById("input_file"); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file);
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/files-up.php',
contentType:false, data:data, processData:false, cache:false, 
success: function(h){
switch(h.charAt(1)){
case 0: case '0':
jQuery('.rsldsim_'+he+' #vistaPrevia').attr('src', window.imagenVacia);
break;
case 1: case '1':
jQuery('.rsldsim_'+he+' #vistaPrevia').attr('src', h.substring(3));
jQuery('.rsldsim_'+he+' #vistaPrevia').fadeIn(250);
jQuery('.result .img').append('<div class="rsldsim_'+uclass+'" tclass="'+uclass+'" id="filesimg"><img id="vistaPrevia" /><input type="file" onchange="asdkf('+uclass+');" tclass="'+uclass+'" id="input_file" class="input_file desact"></div>');
jQuery('.rsldsim_'+he+'').addClass('activefile');
jQuery('.rsldsim_'+he+' #input_file').removeClass('desact');
jQuery('.rsldsim_'+he+' #input_file').addClass('activeds');
jQuery('.rsldsim_'+he+' #input_file').attr('name', 'tcont');
break;
}
}
});
}else{  
$('.rsldsim_'+he+'').remove();
}; 
};
});
//]]> 
function asdkf(e){ window.mostrarVistaPrevia(e); } 
function skdfqlw(obj, type){ $('.result .'+type+' .ttcont').fadeIn(250); $('.result .'+type+' .ttcont').html('<center>Cargando...</center>'); $('.s_import').remove(); var url = $('.result .'+type+' input[name=holdcontent]').val(); var regex=/^(ht|f)tps?:\/\/\w+([\.\-\w]+)?\.([a-z]{2,4}|travel)(:\d{2,5})?(\/.*)?$/i;
if(!regex.test(url)){ $('.result .'+type+' #error').html('el enlace <b class="color_red">no es valido</b>'); $('.result .'+type+' #error').fadeIn(250); obj.css('opacity','1'); }else{ $('.result .'+type+' #error').fadeOut(250); obj.css('opacity','1'); } obj.css('opacity','0.3'); $.ajax({ type: 'POST', url: global_data.url+'/ajax/bwort-import.php', data: 'typei=' + type + '&urli=' + url, success: function(h){ switch(h.charAt(1)){ case '0': case 0: $('.result .'+type+' #error').html(h.substring(3)); $('.result .'+type+' #error').fadeIn(250); break; case '1': $('.result .'+type+' .ttcont').fadeIn(250); $('.result .'+type+' .ttcont').html(h.substring(3)); break; default: $('.result .'+type+' #error').html(h.substring(3)); $('.result .'+type+' #error').fadeIn(250); break; } }, complete: function(){ obj.css('opacity','1'); } }); }

function skflwqlq(nrml){
var kasl = $('.publicdr #intTBD').val();
var s5s4f65q1we3213sd2f1s6v1 = $('.publicdr #text_vales').val();
if(kasl == '5s49w856ew53_sd546e3fs-5s'){ var skkw = 1; } 
else if(kasl == '5sa46f5w_d4f5qaw32_s'){ var skkw = 2; }
else if(kasl == 'a5s4df_s54q6we_s54'){ var skkw = 3; }
else if(kasl == '68sd74f68_s5df46qw__-65s'){ var skkw = 4; }else{ var skkw = 1; }
if(skkw == 1){ var a54s5qq2 = '0'; }
//#input_file.activefile
else if(skkw == 2){ 
var s36551513513265 = document.getElementById('input_file'); 
var s65f4a6w5465431 = s36551513513265.files[0]; 
var a54s5qq2 = '&tcont='+s65f4a6w5465431; }
else if(skkw == 3){ var a54s5qq2 = '&tcont='+$('.result .video input[name=holdcontent]').val(); }
else if(skkw == 4){ var a54s5qq2 = '&tcont='+$('.result .link input[name=holdcontent]').val(); }else{ var a54s5qq2 = '&tcont='+'0'; }
if(nrml == true){
        alert('Ajax 1');
$.ajax({ type: 'POST', url: global_data.url+'/ajax/bwort-add.php', 
data: 'trext='+s5s4f65q1we3213sd2f1s6v1+'&trype='+skkw+a54s5qq2, 
beforeSend: function(){ $('.loadingbw').fadeIn(250); }, 
success: function(h){ switch(h.charAt(1)){ case 0: case '0': mydialog.alert('Error', h.substring(3)); break; case '1': case 1: mydialog.alert('Success', h.substring(3)); break; default: mydialog.alert('Aviso', h.substring(3)); break; } }, complete: function(){ $('.loadingbw').fadeOut(250); } });
}else{
        alert('Ajax 2');
$.ajax({ type: 'POST', url: global_data.url+'/ajax/bwort-add.php', data: 'trext='+s5s4f65q1we3213sd2f1s6v1+'&trype='+skkw+'&tcont='+a54s5qq2+'&xtras='+$('.bxidt').val()+'&xcont='+$('.bxcontent').val(), beforeSend: function(){ $('.loadingbw').fadeIn(250); }, success: function(h){ switch(h.charAt(1)){ case 0: case '0': mydialog.alert('Error', h.substring(3)); break; case '1': case 1: mydialog.alert('Success', h.substring(3)); break; default: mydialog.alert('Aviso', h.substring(3)); break; } }, complete: function(){ $('.loadingbw').fadeOut(250); } });
}
}

$(document).ready(function(){ 
$('.publicdr #text_vales').keyup(function(){ $('.publicdr .pub_btns').fadeIn(250); if($('.publicdr #text_vales').val()){ $('.publicdr .pub_btns .btn55758s').css('opacity', '1'); }else{ $('.publicdr .pub_btns .btn55758s').css('opacity', '0.3'); } }); 
$('.pub_btns a').click(function(){ var sadkfjalke888 = $(this).attr('id'); $('.pub_btns i.text').removeClass('active');$('.pub_btns i.img').removeClass('active');$('.pub_btns i.video').removeClass('active');$('.pub_btns i.link').removeClass('active');$('.pub_btns i.'+sadkfjalke888).addClass('active');$('.result .text').fadeOut(250);$('.result .img').fadeOut(250);$('.result .video').fadeOut(250);$('.result .link').fadeOut(250);$('.result .'+sadkfjalke888).fadeIn(250); $('input#intTypeB').val(''+sadkfjalke888+''); var s5465w = $('.publicdr .pub_btns #intTypeB').val(); if(s5465w == 'img'){ $('.publicdr .pub_btns #intTBD').val('5sa46f5w_d4f5qaw32_s'); }else if(s5465w == 'video'){ $('.publicdr .pub_btns #intTBD').val('a5s4df_s54q6we_s54'); }else if(s5465w == 'link'){ $('.publicdr .pub_btns #intTBD').val('68sd74f68_s5df46qw__-65s'); }else{} }); 
$('.top_header a').click(function(){ var sadkfjalke888 = $(this).attr('id'); $('.pub_btns i.text').removeClass('active');$('.pub_btns i.img').removeClass('active');$('.pub_btns i.video').removeClass('active');$('.pub_btns i.link').removeClass('active');$('.pub_btns i.'+sadkfjalke888).addClass('active');$('.result .text').fadeOut(250);$('.result .img').fadeOut(250);$('.result .video').fadeOut(250);$('.result .link').fadeOut(250);$('.result .'+sadkfjalke888).fadeIn(250); }); 
$('.desact').bind('change', function(){ window.mostrarVistaPrevia($(this).attr('tclass')); }); 
});