var reg = {
set: function(){
	mydialog.loading('Enviando datos...');
var params = $('.registro_i input[name], .registro_i select[name], .registro_i textarea[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/user-register.php',
data: $.param(params),
success: function(h){
mydialog.end_loading();
switch(h.charAt(1)){
case 0: case '0': default: Recaptcha.reload();
mydialog.alert('Aviso', '<div id="error_flat" class="red_flat">'+h.substring(3)+'</div>');
break;
case 1: case '1':
mydialog.alert('Aviso', '<div id="error_flat" class="blue_flat">'+h.substring(3)+'</div>');
break;
}
}
})
}
}