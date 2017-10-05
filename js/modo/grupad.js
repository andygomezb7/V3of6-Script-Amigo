var lgkwlekGurp = {
sltf: function(ti, go){ 
ti.css({'opacity':'0.3'}); $.post(global_data.url+'/ajax/grupos-uda.php', {'itf':gloGru.iten,'goget':go}, function(h){ 
if(h.charAt(1) == 0){ mydialog.alert('Aviso', '<div id="error_flat" class="blue_flat">'+h.substring(3)+'</div>'); ti.css({'opacity':'1'}); }else{ ti.text(h.substring(3)); ti.css({'opacity':'1'}); } }); 
}
}
$(function(){
$('.folg').click(function(){ lgkwlekGurp.sltf($(this), $(this).attr('data-o')); });
$('.addusgr').keyup(function(){ 
$(this).css({'opacity':'0.3'}); 
$.post(global_data.url+'/ajax/complete-users.php?q='+$(this).val(), function(h){
$(this).parent().append('<div id="completeinput">'+h+'</div>'); $(this).css({'opacity':'1'});
});
});
})