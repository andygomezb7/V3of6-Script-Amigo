/** ACTIVIDAD **/
var actividad = {
total: 25,
show: 25,
cargar: function(id, ac_do, ac_type){
// ELIMINAR
$('#last-activity-view-more').css({'opacity':'0.3'});
if(ac_do == 'filtrar') actividad.total = 0;
// ENVIAMOS
$.post(global_data.url + '/ajax/perfil-actividad.php', {'u': $('.tabs .content').attr('data-source'), 'ac_type':ac_type,'do':ac_do,'start':actividad.total}, function(h){
if(ac_do == 'more') $('#last-activity').append($(h).fadeIn(250)); else $('#last-activity').html($(h).fadeIn(250));
// TOTALES
var total_pubs = $('#total_acts').attr('val');
actividad.total = actividad.total + parseInt(total_pubs);
$('#total_acts').remove();
$('#last-activity-view-more').remove();
});
    },
    borrar: function(id, obj){
        // ENVIAMOS
        $.ajax({
        	type: 'POST',
        	url: global_data.url + '/ajax/perfil-actividad.php',
        	data: 'pid=' + $('#info').attr('pid') + '&acid=' + id + '&do=borrar',
        	success: function(h){
        		switch(h.charAt(0)){
        			case '0': //Error
                        mydialog.alert('Error', h.substring(3));
        				break;
        			case '1': //OK
                        $(obj).parent().parent().parent().remove();
        				break;
        		}
        	}
        });
    }
}