var glbaulcls = {
set: function(res, ri, obj, ty) {
$.post(global_data.url+'/ajax/aula-regis.php', {'dtacpt':ty, 'oy':ri, 'oyt':res,'t_a':6, 'k_a':'KYACPTUSRSIN_RGSTR_4_RGSTRACPTMBRSIN'}, function(h){
if(h.charAt(1) == 1){ $('.solicit_class #reg_'+ri+'_mem').remove(); }else{ 
$('.solicit_class #reg_'+ri+'_mem #error_flat').html(h.substring(3)).fadeIn(250); }
obj.css({'opacity':'1'});
});
}
}
$(function(){
$('.list_acep.dodpetead a').click(function(){ $(this).css({'opacity':'0.3'}); glbaulcls.set($(this).attr('data-res'), $(this).attr('data-o'), $(this), $(this).attr('data-y')); });
});