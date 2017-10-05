var lohm = {
setLi: function(){
$('#loading').fadeIn(250);
$.post(global_data.url+'/ajax/bwort-load.php?getpp='+$('.cntrlggd #PgHScrlInf').val(), function(h){
if(h){
$('.contbwh').append(h);
$('.dfin-w-str #pgBwPg').val(parseInt($('.cntrlggd #PgHScrlInf').val())+1);
}else{ $('.contbwh').append('<div id="error_flat" class="blue_flat">No hay mas bworts para mostrar</div>'); }
$('#loading').fadeOut(250);
});
}
} 

$(window).scroll(function(){
var scrhtulmspbenmyprf = parseInt($('.contbwh').css('height'))+1;
if($(this).scrollTop() > scrhtulmspbenmyprf && $('.defin_bw').css('display') == 'block'){ lohm.setLi(); }else{} 
});