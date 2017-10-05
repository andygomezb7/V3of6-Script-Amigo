var btnsNts = {
lik: function(voto, type, data){
data.css({'opacity':'0.3'});
switch(type){ 
case 'pos': var votos = $('#lik_total_'+voto+' span'); break;
case 'neg': var votos = $('#dis_total_'+voto+' span'); break;
} var total_votos = parseInt(votos.text());
total_votos = (isNaN(total_votos)) ? 0 : total_votos;
$.post(global_data.url+'/ajax/new-lik.php', {'not':voto,'type':type}, function(h){
switch(h.charAt(1)){ 
case 1: case '1': result = parseInt(total_votos+1);
if(result == 0) { votos.text(result);
}else if(result > 0) { votos.text(result);
}else{ votos.text(result); } data.css({'opacity':'1', 'border':'1px solid #27470D'});
break; case 0: case '0': default: mydialog.alert('Error', h.substring(3)); data.css({'opacity':'1'}); break;
} });
},
fav: function(i, o){
o.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/new-fav.php', {'ide':i}, function(h){
if(h.charAt(1) == 1){ o.css({'opacity':'1', 'border':'1px solid #27470D'}); $('#fv_n_'+i+' span').text(parseInt($('#fv_n_'+i+' span').text())+1); }else{ mydialog.alert('Aviso', h.substring(3)); o.css({'opacity':'1', 'border':'1px solid #27470D'}); }
});
},
seg: function(i, o){
o.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/new-seg.php', {'ide':i}, function(h){
if(h.charAt(1) == 1){ o.css({'opacity':'1', 'border':'1px solid #27470D'}); $('#sg_n_'+i+' span').text(parseInt($('#sg_n_'+i+' span').text())+1); }else{ mydialog.alert('Aviso', h.substring(3)); o.css({'opacity':'1'}); }
});
},
coco: function(thi){
thi.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/new-come.php', {'msg':$('.pubsLrT.DoRe textarea.markItUp').val(),'for':$('.DoR input[name=for]').val(),'cfor':$('.DoR input[name=cfor]').val()}, function(h){
if(h.charAt(1) == 1){ $('.pubsLrT.DoRe .markItUp').val(''); $('.CoMntSNw').prepend($(h.substring(3)).fadeIn(250)); }else{ $('.DoRe .dsCoPbs #error_flat span').html(h.substring(3)); $('.DoRe .dsCoPbs #error_flat').fadeIn(250); }
thi.css({'opacity':'1'});
});
},
punts: function(i){
$('.nota_puntos').css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/new-darpuntos.php', {'num':i,'pid':$('.DoR input[name=for]').val()}, function(h){
$('.nota_puntos').css({'opacity':'1'});	
if(h.charAt(1) == 1){ $('.nota_puntos').html('<div id="error_flat" class="blue_flat">'+h.substring(3)+'</div>'); }else{ mydialog.alert('Aviso', '<div id="error_flat" class="red_flat">'+h.substring(3)+'</div>'); }
});
}
}

$(function(){
$('a.fvnt').click(function(){ btnsNts.fav($(this).attr('data-id'), $(this)); });
$('button.fvnt').click(function(){ btnsNts.fav($(this).attr('data-id'), $(this)); });
$('a.sgnt').click(function(){ btnsNts.seg($(this).attr('data-id'), $(this)); });
$('a.lik').click(function(){ btnsNts.lik($(this).attr('data-id'), 'pos',$(this)); });
$('a.dis').click(function(){ btnsNts.lik($(this).attr('data-id'), 'neg',$(this)); });
$.post(global_data.url+'/ajax/new-comm.php', {'ni':$('.CoMntSNw').attr('data-id')}, function(h){
if(h.charAt(1) == 1){ $('.CoMntSNw').html($(h.substring(3)).fadeIn(250)); }else{ $('.CoMntSNw').html('<div id="error_flat" class="blue_flat">'+h.substring(3)+'</div>'); }
});
$('.DoRe .BtNComNt').click(function(){ btnsNts.coco($(this)); });
$('.nota_puntos a').click(function(){ btnsNts.punts($(this).attr('p')); });
})