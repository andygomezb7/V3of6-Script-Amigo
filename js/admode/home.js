var admod = {
control_configs:function(){
if($('.control_configs_1.stato').length >= 1){
$('.Load_ControlConfigs').fadeIn(250);
var params = $('.control_configs_1.stato input[name], .control_configs_1.stato select[name], .control_configs_1.stato textarea[name]');
$.ajax({
url: global_data.url+'/ajax/mod-config.php',
type: 'POST',
data: $.param(params),
success:function(h){ var locStato = (h.charAt(1) == 0 || h.charAt(1) == '0') ? 'red' : 'blue'; mydialog.alert('Aviso', '<div id="error_flat" class="'+locStato+'_flat">'+h.substring(3)+'</div>'); },
complete: function(){ $('.Load_ControlConfigs').fadeOut(250); }
});
}else{ mydialog.alert('Aviso', 'No existe registro para poder enviar, ve el url antes de entrar'); }
}
}
$(function(){
$('.control_configs').click(function(){ admod.control_configs(); });
})