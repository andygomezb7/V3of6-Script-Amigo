var ranckn = {
edit: function (id, ac, we){
if(ac == 1){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/admin-erangos.php', {'a':id,'act':we}, function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Editar rango');
mydialog.body(h);
mydialog.buttons(true, true, 'Guardar', "ranckn.edit("+id+", 2)", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
}else if(ac == 2){
$('#mydialog #procesando #error').html('Enviando...').fadeIn(250);
var params = $('#mydialog input[name], #mydialog select[name], #mydialog textarea[name]');
$.ajax({
url: global_data.url+'/ajax/admin-rangos.php',
type: 'POST',
data: $.param(params),
success: function(h){
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250);
}
});
}else{ mydialog.alert('Aviso', 'Funcion indefinida'); }
}
}