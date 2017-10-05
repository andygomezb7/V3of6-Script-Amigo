var ccount = {
set: function(ty){
var params = $('#inform1 input[name], #inform1 select[name], #inform1 textarea[name]');
$('.t_cuenta_mod #error_flat').html('Enviando datos...').fadeIn(250); 
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/cuenta-set.php',
data: $.param(params),
success: function(h){
switch(h.charAt(1)){
case 0: default: case '0':
mydialog.alert('Aviso', h.substring(3));
$('.t_cuenta_mod #error_flat').fadeOut(250);
break;
case 1: case '1':
$('.t_cuenta_mod #error_flat').html(h.substring(3)).fadeIn(250);
break;
}
}
});
}
}