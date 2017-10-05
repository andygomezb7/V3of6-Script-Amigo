var apunt = {
add: function() {
mydialog.show(true);
mydialog.title('Nuevo apunte');
mydialog.body('<div class="addapunt"><div id="error_flat" class="info">Los apuntes te sirven para recordar u organizar notas.</div><div class="content"><table width="100%"><tbody><tr><td>Titulo</td> <td><input type="hidden" name="types" value="1" /><input type="hidden" value="None" name="lt" /><input type="text" name="name" style="width: 100%;margin: 0 0 12px 0;" placeholder="Escribe el titulo aqui..." /></td></tr><tr><td></td> <td><textarea name="t" placeholder="Describelo aqui..." style="width: 490px;height: 137px;margin: 0 0 11px 0;padding: 4px;"></textarea></td></tr><tr><td>Tipo</td> <td><select name="ty" style="padding: 6px 5px;margin: 0 auto 8px auto;width: 90%;"><option value="">Selecciona una opción</option><option value="1">Apunte</option><option value="2">Nota</option><option value="3">Recuerdo</option></select></td></tr><tr><td>Estado</td> <td><select name="stt" style="padding: 6px 5px;margin: 0 auto 8px auto;width: 90%;"><option value="">Selecciona una opción</option><option value="1">Activo</option><option value="2">Revisión</option><option value="3">Desactivado</option></select></td></tr><tr><td>Para</td> <td><select name="pblc" style="padding: 6px 5px;margin: 0 auto 8px auto;width: 90%;"><option value="">Selecciona una opción</option><option value="1">Publico</option><option value="2">Seguidores</option><option value="3">Siguiendo</option><option value="4">Solo yo</option></select></td></tr></tbody></table></div></div>');
mydialog.buttons(true, true, 'Agregar apunte', "apunt.send()", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
},
send: function(){
var params = $('.addapunt input[name], .addapunt select[name], .addapunt textarea[name]');
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/apuntes-add.php',
data: $.param(params),
beforeSend: function(){
$('#mydialog #procesando #error').fadeIn(250).html('Enviando...');
},
success: function(h){
switch(h.charAt(1)){
case 0: case '0': default:
$('#mydialog #procesando #error').fadeIn(250).html(h.substring(3));
break;
case 1: case '1':
$('#mydialog #procesando #error').fadeIn(250).html('¡Felicidades! Tu apunte se ha agregado correctamente.');
break;
}
},
error: function(){
mydialog.error_500("r_a.student()");
}
});
}
}