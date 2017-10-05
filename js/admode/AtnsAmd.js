var admode = {
verifiu: function(iu, ob, des){
ob.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/admin-userverificar.php', {'atip':iu,'atop':des}, function(h){
if(h.charAt(1) == 1 || h.charAt(1) == '1'){ var goalwDv = (des == 1) ? 'g' : 'r';
ob.addClass('ib'+goalwDv); }else{ mydialog.alert('Aviso', h.substring(3)); }
ob.css({'opacity':'1'});
});
},
bannearu: function(iu, ob, des){
ob.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/admin-userbannear.php', {'atip':iu,'atop':des}, function(h){
if(h.charAt(1) == 1 || h.charAt(1) == '1'){ var goalwDv = (des == 1) ? 'g' : 'r';
ob.addClass('ib'+goalwDv); }else{ mydialog.alert('Aviso', h.substring(3)); }
ob.css({'opacity':'1'});
});
},
fijnota: function(i, o, des){
o.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/admin-fijarpost.php', {'a':i, 'des':des}, function(h){
if(h.charAt(1) == 1){ o.css({'border':'1px solid #333'}); }else{ mydialog.alert('Aviso', h.substring(3)); }
o.css({'opacity':'1'});
});
},
borrnota: function(i, o, des){
o.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/admin-borrarpost.php', {'a':i, 'des':des}, function(h){
if(h.charAt(1) == 1){ o.css({'border':'1px solid #333'}); }else{ mydialog.alert('Aviso', h.substring(3)); }
o.css({'opacity':'1'});
});
}
}
$(function(){
$('.veriu').click(function(){ admode.verifiu($(this).attr('data-obj'), $(this), $(this).attr('top')); });
$('.baneu').click(function(){ admode.bannearu($(this).attr('data-obj'), $(this), $(this).attr('top')); });
$('.fijn').click(function(){ admode.fijnota($(this).attr('data-obj'), $(this), $(this).attr('top')); });
$('.born').click(function(){ admode.borrnota($(this).attr('data-obj'), $(this), $(this).attr('top')); });
})