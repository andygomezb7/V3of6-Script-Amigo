var r_a = {
student_prof: function(ss, ttype){
if(ttype == 1){ var namecontsow = 'Estudiante'; }else if(ttype == 2){ var namecontsow = 'Profesor'; }
if(ss == 1){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/aula-form'+ttype+'.php', function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Registrarme como <b>'+namecontsow+'</b>');
mydialog.body(h);
mydialog.buttons(true, true, 'Registrarme', "r_a.student_prof()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
}else{
var params = $('.registro input[name], .registro select[name], .registro textarea[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/aula-regis.php',
data: $.param(params),
beforeSend: function(){
$('#mydialog #procesando #error').fadeIn(250).html('Enviando...');
},
success: function(h){
switch(h.charAt(1)){
case 0: case '0':
$('#mydialog #procesando #error').fadeIn(250).html(h.substring(3));
break;
case 1: case '1':
$('#mydialog #procesando #error').fadeIn(250).html('¡Felicidades! te has registrado corretamente <a href="'+h.substring(3)+'">Ver mi perfil</a>');
break;
}
},
error: function(){
mydialog.error_500("r_a.student_prof()");
}
});
}
},
sestablishment: function(ss, ttype){
if(ss == 1){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/aula-form'+ttype+'.php', function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Registrar <b>Establecimiento</b>');
mydialog.body(h);
mydialog.buttons(true, true, 'Registrarme', "r_a.sestablishment()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
}else{
var params = $('.registro input[name], .registro select[name], .registro textarea[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/aula-regis.php',
data: $.param(params),
beforeSend: function(){
$('#mydialog #procesando #error').fadeIn(250).html('Registrando...');
},
success: function(h){
switch(h.charAt(1)){
case 0: case '0': default:
$('#mydialog #procesando #error').fadeIn(250).html(h.substring(3));
break;
case 1: case '1':
$('#mydialog #procesando #error').fadeIn(250).html('¡Felicidades! te has registrado corretamente <a href="'+h.substring(3)+'">Ver mi perfil</a>');
break;
}
},
error: function(){
mydialog.error_500("r_a.sestablishment()");
}
});
}
},
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