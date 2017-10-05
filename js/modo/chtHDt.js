var chtEdt = {
mos: function (ii){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/chat-edit.php', {'itc':ii,'otp':1,'otd':1}, function(h){
if(h.charAt(1) == 1){
mydialog.show();
mydialog.title('Editar chat');
mydialog.body(h.substring(3));
mydialog.buttons(true, true, 'Enviar', "chtEdt.set("+ii+", 1);", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
}else{ mydialog.alert('Aviso', h.substring(3)); }
});
},
set:function(ii, ee){
$('#mydialog #procesando #error').html('Enviando...').fadeIn(250);
$.post(global_data.url+'/ajax/chat-edit.php', {'itc':ii,'otp':ee,'otd':2,'n':$('#mydialog #name_dd').val(),'d':$('#mydialog #desc_dd').val(), 'c': $('#mydialog #cat_dd').val()}, function(h){
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250);
});
}
}

$(function(){
$('.edtChGmMch li a.eje_cht').click(function(){ if($(this).attr('role') == 'cht_1'){ chtEdt.mos($(this).attr('data-o')); }else if($(this).attr('role') == 'cht_3'){ mydialog.loading('Reactivando...'); chtEdt.set($(this).attr('data-o'), 3); mydialog.end_loading(); }else{ mydialog.loading('Borrando...'); chtEdt.set($(this).attr('data-o'), 2); mydialog.end_loading(); } });
});