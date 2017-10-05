var hohoGnrChtnHmSfFs = { 
set: function(ii){ 
mydialog.loading('Creando...'); 
$.post(global_data.url+'/ajax/chat-create.php', {'t':1, 'n':'CHT-'+ii, 'd':'CHT-'+ii,'c':ii,'dtyk':3}, function(h){  
mydialog.end_loading(); 
var htm1cht = (h.charAt(1) == 1) ? '<div id="error_flat">' : '<div id="error_flat" class="red_flat">', html2chts = '</div>';  mydialog.alert('Aviso', htm1cht+h.substring(3)+html2chts); 
}); 
},  
} 
$(function(){ 
$('a.gNrChtGO').click(function(){ hohoGnrChtnHmSfFs.set($(this).attr('data-o')); }); 
})