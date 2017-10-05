var grup = {
create: function(ty){
if(ty == 1){
mydialog.loading('Cargando formulario...');
$.post(global_data.url+'/ajax/grupos-set.php', {'ty':1}, function(h){
mydialog.end_loading();
mydialog.show();
mydialog.title('Nuevo grupo');
mydialog.body(h);
mydialog.buttons(true, true, 'Crear', "grup.create(2)", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center(); 
});
}else if(ty == 2){
$('#mydialog #procesando #error').html('Enviando datos...').fadeIn(250);
var params = $('#mydialog #weCrtGrp input[name], #mydialog #weCrtGrp select[name], #mydialog #weCrtGrp textarea[name]');
$.ajax({
url: global_data.url+'/ajax/grupos-set.php',
type: 'POST',
data: $.param(params),
success: function(h){
$('#mydialog #procesando #error').html(h.substring(3)).fadeIn(250);
}
});
}
},
setLi: function(){
$('#loading').fadeIn(250);
$.post(global_data.url+'/ajax/bwort-load.php?fil=3&pro='+gloGru.iten+'&getpp='+$('.dorLork input[name=pGt]').val(), function(h){
if(h){
$('.pub_load_BWorts').append(h);
$('.dorLork input[name=pGt]').val(parseInt($('.dorLork input[name=pGt]').val())+1);
}else{ $('.pub_load_BWorts').append('<div id="error_flat" class="blue_flat">No hay mas bworts para mostrar</div>'); }
$('#loading').fadeOut(250);
});
}
}

$(function(){
if($('.pub_load_BWorts').length){ 
$('.pub_load_BWorts').html('<div><center><img title="Cargando..." class="qtip" src="'+global_data.url+'/images/static/media/icons/loading/lw-2.gif" /></center></div>'); $.post(global_data.url+'/ajax/bwort-load.php?fil=3&pro='+gloGru.iten, function(h){ $('.pub_load_BWorts').html($(h).fadeIn(250)); }); }
$('.crtGrp').click(function(){ grup.create(1); });
})

$(window).scroll(function(){ $('.dorLork input[name=pGtScrooll]').val($(this).scrollTop());
var scrhtulmspbenmyprf = parseInt($('.pub_load_BWorts').css('height'))-70;
if($(this).scrollTop() > scrhtulmspbenmyprf && $('.pub_load_BWorts').length){ grup.setLi(); }else{} 
});