
var proyad = {
upad: function(){
$('.opcion_1_UpImg #upster_uNimg').bind('change', function(){
$('.ZErO_uNiMg').fadeOut(250);
$('.tWo_unImg').fadeIn(250);$('.opcion_1_UpImg .tWo_unImg .barloading .bar').css('width', '17%');
var inputFileImage = document.getElementById('upster_uNimg'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file);
$.ajax({
url: global_data.url+'/ajax/files-up.php',
type: 'POST',
contentType:false, data:data, processData:false, cache:false, 
beforeSend: function(){
$('.opcion_1_UpImg .tWo_unImg .barloading .bar').css('width', '40%'); $('.tWo_unImg').fadeOut(250);
},
success: function(h){
$('.opcion_1_UpImg .tWo_unImg .barloading .bar').css('width', '100%');
if(h.charAt(1) == 1){ $('.TreE_unIMg').fadeIn(250).html('<center><img style="max-width:100px;max-height:150px;" src="'+h.substring(3)+'" /></center><input type="hidden" name="img_he" value="'+h.substring(3)+'" />'); }else{
$('.TreE_unIMg').fadeIn(250).html('<center>Error...</center><input type="hidden" name="img_he" value="s" />'); $('.ZErO_uNiMg').fadeIn(250);
}
$('.tWo_unImg').fadeOut(250);
}
});
});
}
}

$(document).ready(function(){
	proyad.upad();
});