var f = {
setfoll: function(f, rk, ch){
ch.children('.load').fadeIn(250);
$.post(global_data.url+'/ajax/aula-regis.php',{'es_ela':f, 'torip': rk,'t_a':'5', 'k_a':'KYDTOMMBRS_RGSTR_3_RGSTROFMMBRS'}, function(h){
ch.children('.load').fadeOut(250);
if(h.charAt(1) == 1){ 
ch.children('.adfo1').text(h.substring(3)); }else{ mydialog.alert('Aviso', h.substring(3)); }
});
}
}
$(function(){
$('.no_regis_header h3.btn').click(function(){ GblStrns.drowdownw('.unirme_toolt'); });
$('a.adfoul').click(function(){ f.setfoll($(this).attr('data-do'), $(this).attr('data-ko'), $(this)); });
});