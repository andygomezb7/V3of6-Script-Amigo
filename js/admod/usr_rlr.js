var adus = {
edit: function(i, act){
if(act == 1 || !act){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/admin-eusers.php', {'a':i}, function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Editar Usuario');
mydialog.body(h);
mydialog.buttons(true, true, 'Guardar', "adus.edit("+i+", 2)", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
}else if(act == 2){
var params = $('#mydialog #userdit input[name], #mydialog #userdit select[name], #mydialog #userdit textarea[name]');
$('#mydialog #procesando #error').html('Enviando...').fadeIn(250);
$.ajax({
type: 'POST',
url: global_data.url+'/ajax/admin-users.php', 
data: $.param(params),
success: function(h){
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250);
}
});
}else{ mydialog.alert('Aviso', 'Función indefinida.'); }
}
}