var grdit = {
set: function(){
var params = $('.dosneloksl input[name], .dosneloksl select[name], .dosneloksl textarea[name]');
mydialog.loading('Enviando datos...');
$.ajax({
url: global_data.url+'/ajax/grupos-admingrup.php',
type: 'POST',
data: $.param(params),
success: function(h){
if(h.charAt(1) == 0){ mydialog.alert('Aviso', '<div id="error_flat" class="red_flat">'+h.substring(3)+'</div>'); }else{
mydialog.alert('Aviso', '<div id="error_flat" class="blue_flat">'+h.substring(3)+'</div>'); location.reload(true);
}
}
})
},
sogm: function(r, ti, ch){
ti.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/grupos-solis.php', {'goget':r,'itfs':ch,'itf':gloGru.iten}, function(h){
ti.css({'opacity':'1'});
if(h.charAt(1) == 0){ mydialog.alert('Aviso', '<div id="error_flat" class="blue_flat">'+h.substring(3)+'</div>'); }else{ $('#soDMG'+r).fadeOut(250); $('#soDMG'+r).remove(); }
})
}
}

$(function(){
$('.updvt_shound input[type=file]').bind('change', function(){
var UrlCdgVlUpArc = global_data.url+'/ajax/files-up.php';
var inputFileImage = document.getElementById('upster_uNGrimg_Edtr'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file) + data.append("f",6);
$('.updvt_gru .updvt_lodt').fadeIn(250); $('.updvt_gru .updvt_show_d').fadeOut(250); $('.updvt_gru .updvt_shound').fadeOut(250);
$.ajax({
xhr: function(){ var xhr = new window.XMLHttpRequest(); xhr.upload.addEventListener("progress", function(evt){ if(evt.lengthComputable){ var percentComplete = evt.loaded / evt.total; var percentage = Math.round((evt.loaded * 100) / evt.total); $('.updvt_lodt .barloading .bar').width(percentage+'%'); console.log(percentComplete); } }, false); xhr.addEventListener("progress", function(evt){ if(evt.lengthComputable){ var percentComplete = evt.loaded / evt.total; console.log(percentComplete); } }, false); return xhr; },
url: UrlCdgVlUpArc,
type: 'POST',
contentType:false, data:data, processData:false, cache:false, 
success: function(h){
if(h.charAt(1) == 0){ mydialog.alert('Aviso', h.substring(3)); }else{
$('.updvt_gru .updvt_lodt').fadeOut(250); $('.updvt_gru .updvt_show_d').fadeIn(250); $('.updvt_gru .updvt_shound').fadeOut(250);
$('.updvt_gru .updvt_show_d input[name=upimg]').val(h.substring(3));$('.updvt_gru .updvt_show_d img').attr('src',h.substring(3));
}
}
});
});
$('input[name=dnlwkd]').click(function(){ grdit.set(); });
$('#goGDM a.so').click(function(){ grdit.sogm($(this).attr('data-o'), $(this), $(this).attr('data-i')); });
})