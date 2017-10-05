var optu = {
	bloq_form: function(u){
        mydialog.mask_close = false;
        mydialog.close_button = true;                                               
        mydialog.show();
        mydialog.title('Bloquear usuario');
        mydialog.body('Estas seguro/a de bloquear a esta persona?<br />Luego podras desbloquearla en tu panel de usuario.');
        mydialog.buttons(true, true, 'Bloquear', "optu.bloq_set("+u+")", true, true, true, 'Cancelar', 'close', true, false);
        mydialog.center();
	},
	bloq_set: function(u){
    $.ajax({
    	url: global_data.url+'/ajax/user-bloq.php',
    	type: 'POST',
    	data: 'u='+u,
    	success: function(h){
    	mydialog.alert('Bloquear usuario',h.substring(3));	
    	}
    });
	}
}