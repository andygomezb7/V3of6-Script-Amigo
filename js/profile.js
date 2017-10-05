var modalsPrflx = {
menutabs: function(def, preg){
$('.profile .content .body .content .defin_bw').fadeOut(250);
$('.profile .content .body .content .load').fadeIn(250);
$('.profile .content .body .content .defin').css({'opacity':'0.3'});
if(def == 'bworts'){ 
$('.profile .content .body .content .defin_gdgts').fadeIn(250);
$('.profile .content .body .content .defin_bw').fadeIn(250); 
$('.profile .content .body .content .load').fadeOut(250);
$('.profile .content .body .content .defin').fadeOut(250).css({'opacity':'1'});
}else{
$('.profile .content .body .content .defin_gdgts').fadeOut(250);
$.post(global_data.url+'/ajax/perfil-'+def+'.php', {'t': def, 'u':preg},function(h){
$('.profile .content .body .content .defin').html(h);
$('.profile .content .body .content .load').fadeOut(250);
$('.profile .content .body .content .defin').css({'opacity':'1', 'display':'block'});
}); 
}
},
nvsSt: function(){
$('#loading').fadeIn(250);
$.post(global_data.url+'/ajax/bwort-load.php?fil=2&pro='+$('.header .tabs .content').attr('data-source')+'&getpp='+$('.dfin-w-str #pgBwPg').val(), function(h){
if(h){
$('.body .content .defin_bw .bwortsloadeds').append(h);
$('.dfin-w-str #pgBwPg').val(parseInt($('.dfin-w-str #pgBwPg').val())+1);
}else{ $('.body .content .defin_bw .bwortsloadeds').append('<div id="error_flat" class="blue_flat">No hay mas bworts para mostrar</div>'); }
$('#loading').fadeOut(250);
});
}
}

$(function(){
  $('.profile .tabs span').click(function(){
    modalsPrflx.menutabs($(this).attr('data-source'), $('.profile .tabs .content').attr('data-source'));
  });
});

$(window).scroll(function(){
var scrhtulmspbenmyprf = parseInt($('.body .content .defin_bw .bwortsloadeds').css('height'))+1;
if($(this).scrollTop() > scrhtulmspbenmyprf && $('.defin_bw').css('display') == 'block' && $('.bwortsloadeds').attr('data-go') == '5'){ modalsPrflx.nvsSt(); }
});