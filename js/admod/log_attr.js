var logat = {
edit: function(i, dt, fofo){
if(dt == 1){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/admin-emedals.php', {'a':i,'act':fofo}, function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Editar logro(medalla)');
mydialog.body(h);
mydialog.buttons(true, true, 'Guardar', "logat.edit("+i+", 2)", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
});
}else if(dt == 2){
$('#mydialog #procesando #error').html('Enviando...').fadeIn(250);
var params = $('#mydialog #medl input[name], #mydialog #medl select[name], #mydialog #medl textarea[name]');
$.ajax({
url: global_data.url+'/ajax/admin-medals.php',
type: 'POST',
data: $.param(params),
success: function(h){
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250);
}
});
}else{ mydialog.alert('Aviso', 'Ejecución indefinida.'); }
}
}
$(function(){
$('.dodoMd').click(function(){ logat.edit($(this).attr('data-id'), 1, 'edit'); });
$('.DodoCreat').click(function(){ logat.edit(0, 1, 'add'); });
});