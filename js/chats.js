var chts = {
crmodl: function(dk){
var dodokk; if(dk == 1){ dodokk = 'setcrcht'; }else{ dodokk = ''; }
mydialog.loading('Cargando formulario');
$.post(global_data.url+'/ajax/chat-form'+dk+'.php', function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Crear Chat');
mydialog.body(h);
mydialog.buttons(true, true, 'Crear', "chts."+dodokk+"();", true, true, true, 'Cerrar', 'close', true, false);
mydialog.center();
});
},
setcrcht:function(){
$('#mydialog #procesando #error').html('Enviando...').fadeIn(250);
$.post(global_data.url+'/ajax/chat-create.php', {'t':'1', 'n':$('#mydialog #name_dd').val(),'d':$('#mydialog #desc_dd').val(), 'c': $('#mydialog #cat_dd').val()}, function(h){
if(h.charAt(1) == 1){
$('#mydialog #procesando #error').html(h.substring(3));
}else{ $('#mydialog #procesando #error').html(h.substring(3)); }
$('#mydialog #procesando #error').fadeOut(250);
});
},
}