var GblStrns = {
	drowdownw: function(id){
		var VravlGbl = $(id);
		if(VravlGbl.css('display') == 'none'){ if(id == '#dialog-notifications'){ accounts.last(); }else if(id == '#dialog-messages'){ accounts.mssgs(); } VravlGbl.fadeIn(250); }else{ VravlGbl.fadeOut(250); }
	}
}

$(function(){
$('.options_menu').click(function(){ GblStrns.drowdownw('.menu_left'); });
});

var denuncia = {
    nueva: function(type, obj_id, obj_title, obj_user){
		mydialog.loading('Denunciar..'); 
        $.ajax({ type: 'POST', url: global_data.url + '/ajax/denuncia-' + type + '.php', data: 'obj_id=' + obj_id + '&obj_title=' + obj_title + '&obj_user=' + obj_user, success: function(h){ mydialog.end_loading(); denuncia.set_dialog(h, obj_id, type); $('#loading').fadeOut(350); } });
    },
    set_dialog: function(html, obj_id, type){
        var d_title = 'Denunciar ' + type;	                                        
		mydialog.show();
        mydialog.title(d_title);
		mydialog.body(html);
		mydialog.buttons(true, true, 'Enviar', "denuncia.enviar(" + obj_id + ", '" + type + "')", true, true, true, 'Cancelar', 'close', true, false);
		mydialog.center();
    },
    enviar: function(obj_id, type){
        var razon = $('#mydialog select[name=razon]').val();
        var extras = $('#mydialog textarea[name=extras]').val();
        //
        $('#mydialog #procesando #error').fadeIn(250).html('Enviando...');                        
		$.ajax({
			type: 'POST',
			url: global_data.url + '/ajax/denuncia-' + type + '.php',
			data: 'obj_id=' + obj_id + '&razon=' + razon + '&extras=' + extras,
			success: function(h){
                switch(h.charAt(1)){
                    case '0': default:
                    $('#mydialog #procesando #error').fadeIn(250).html("Error",'<div class="emptyData">' + h.substring(3) +  '</div>');
                    break;
                    case '1':
                    $('#mydialog #procesando #error').fadeIn(250).html("Bien", '<div class="emptyData">' + h.substring(3) + '</div>');
                    break;
                }                                                
			}
		});
    }
};
var bugs = { cache: {}, form: function(){ if(typeof bugs.cache['form'] == 'undefined'){ mydialog.loading('Reportes'); $.ajax({ type: 'POST', dataType: 'json', url: global_data.url+'/ajax/bugs-form.php', success: function(h){ mydialog.end_loading(); if(h['status'] == 'ok'){ mydialog.show(); mydialog.title('Reportes'); mydialog.body(h['data']); mydialog.buttons(false); mydialog.center(); }else{ mydialog.alert('Ops!', h['data']); } bugs.cache['form'] = h['data']; } }); }else{ mydialog.show(); mydialog.title('Reporte de Bugs'); mydialog.body(bugs.cache['form']); mydialog.buttons(false); mydialog.center(); } }, send: function(){ mydialog.loading('Enviando...'); var title = $('input[name=title]').val(); var desc = $('textarea[name=desc]').val(); var email = $('input[name=email]').val(); $.ajax({ type: 'POST', dataType: 'json', data: 'email=' + email + '&desc=' + desc + '&title=' + title, url: global_data.url+'/ajax/bugs-send.php', success: function(h){ if(h['status'] == 'ok'){ mydialog.alert('Bien!', h['data']); }else{ $('.emptyData').show().html(h['data']); } } }); } } 