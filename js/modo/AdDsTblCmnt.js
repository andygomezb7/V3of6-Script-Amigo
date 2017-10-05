var aDdsTblcMt = {
add: function(){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/aula-form3.php' ,function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Crear una clase');
mydialog.body(h);
mydialog.buttons(true, true, 'Registrar clase', "aDdsTblcMt.set()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
},
set: function(){
var params = $('#mydialog .registro input[name], #mydialog .registro select[name], #mydialog .registro textarea[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/aula-regis.php',
data: $.param(params),
beforeSend: function(){ $('#mydialog #procesando #error').fadeIn(250).html('Enviando...'); },
success: function(h){
switch(h.charAt(1)){
case 0: case '0': default:
$('#mydialog #procesando #error').fadeIn(250).html(h.substring(3));
break;
case 1: case '1':
$('#mydialog #procesando #error').fadeIn(250).html('¡Felicidades! Establecimiento registrado correctamente <a href="'+h.substring(3)+'">Ver en linea</a>');
break;
}
},
error: function(){ mydialog.error_500("aDdsTblcMt.set()"); }
});
},
}
var r_a = {
blur: function(val){
$('.registro select[name=ciud]').html('<option value="">Obteniendo...</option>');
switch(val.attr('name')){
case 'pas':
$.post(global_data.url+'/ajax/aula-geo.php?pais_code='+val.val(), function(h){
$('.registro select[name=ciud]').html(h);
});
break;
}
val.css({'opacity':'1'});
}
}

$(function(){ $('.adDsTlbcmt').click(function(){ aDdsTblcMt.add(); }); });