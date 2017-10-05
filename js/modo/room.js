var msg = {
add: function(dt){
mydialog.mask_close = false;
mydialog.close_button = true;		                                        
mydialog.show();
mydialog.title('Mensaje a <b>'+dt+'</b>');
mydialog.body('<div class="newroom"><div class="content hidden"><div id="error" class="dsnone"></div><div class="info floatL"><img src="'+global_data.img+'" class="qtip" title="Tu avatar" style="width: 117px;height: 117px;margin: 0px 0px 13px 0px;"/><table width="100%"><tbody><tr><td><b>Para</b></td><td>'+dt+'</td></tr><tr><td><b>De</b></td><td>'+global_data.user_name+'</td></tr></tbody></table></div><div class="form floatL"><textarea id="wysibb"></textarea></div></div></div>');
mydialog.buttons(true, true, 'Enviar', "msg.send('"+dt+"')", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
},
send: function(dt){
var sadkkwlmsg = $('#mydialog .newroom .content #wysibb').val();
var roommsgerror = $('#mydialog .newroom .content #error');
roommsgerror.fadeIn(250);
roommsgerror.html('Enviando...');
$.ajax({
	url: global_data.url+'/ajax/live-pachg.php',
	type: 'POST',
	data: 'p='+dt+'&textot='+sadkkwlmsg,
	success: function(h){
    switch(h.charAt(1)){
    case 0: case '0':
    roommsgerror.fadeIn(250);
    roommsgerror.html(h.substring(3));
    break;
    case 1: case '1':
    mydialog.close();
    mydialog.alert('Mensaje a <b>'+dt+'</b>', h.substring(3));
    break;
    }
	}
});
}
}