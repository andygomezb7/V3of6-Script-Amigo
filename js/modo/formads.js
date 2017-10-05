var add_ss = {
send: function(){
var params = $('#contn_adds_cntn_imtx input[name], #contn_adds_cntn_imtx select[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/ads-ejets.php',
data: $.param(params),
beforeSend: function(){ $('#loading .titl').html('Creando anuncio...'); $('#loading').fadeIn(250); },
success: function(h){ $('#loading').fadeOut(250); switch(h.charAt(1)){ case 0: case '0': default: mydialog.alert('ADs: Error','Error:'+h.substring(3)); break; case 1: case '1': $('#loading .titl').html('¡Creado correctamente!<br />Redirigiendo...'); location.href=global_data.url+'/int/ads/anuncios/?adspage=view'; break; } },
error: function(){ mydialog.error_500("add_ss.send()"); }
});
}
}

$(document).ready(function(){
$('.CNTNADSWRDPRS').click(function(){ $('.CNTNADSWRDPRS').removeClass('ACTVWRDPRS'); $(this).addClass('ACTVWRDPRS'); $('.dtyep_ann').val($(this).attr('dtype')); });
$(".ttd_ads_ann").keyup(function(){ $('.ann_txt_ttl a span').text($(this).val()); });
$(".rul_ads_ann").keyup(function(){ $('.ann_txt_url_lin a span').text($(this).val()); });
$(".esd_ads_ann").keyup(function(){ $('.ann_txt_desc_ann span').text($(this).val()); });
$('.fl_ann_wber').bind('change', function(){
var inputFileImage = document.getElementById('fl_ann_img_llc_wber'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file);
$('.prn_fileup_filseize_ann_img').fadeIn(120);
$.ajax({ 
xhr: function(){
var xhr = new window.XMLHttpRequest();
xhr.upload.addEventListener("progress", function(evt){ if(evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; var percentage = Math.round((evt.loaded * 100) / evt.total); $('.prn_fileup_filseize_ann_img .barloading .bar').width(percentage+'%'); console.log(percentComplete); }}, false);
xhr.addEventListener("progress", function(evt){ if (evt.lengthComputable) { var percentComplete = evt.loaded / evt.total; console.log(percentComplete); }}, false);
return xhr;
},
url: global_data.url+'/ajax/files-up.php', 
type: 'POST', contentType:false, data:data, processData:false, cache:false, 
beforeSend: function(){ $('.prn_fileup_filseize_ann_img .barloading .bar').css({'width':'34%'}); },
success: function(h){
$('.prn_fileup_filseize_ann_img').fadeOut(120);
$('.prn_filup_ann_img').html('<div style="margin: 0px 0px 12px 0px;"><div class="clearfix">URL</div><div><input type="text" name="desc" class="rul_ads_ann" placholder="http://"></div></div><img src=""  class="lld_webr" width="300" height="300" /><input name="img" id="img_vvl" type="hidden" />');
$('.prn_filup_ann_img img.lld_webr').attr('src', h.substring(3));
$('.prn_filup_ann_img input#img_vvl').val(h.substring(3));
} });
});
});