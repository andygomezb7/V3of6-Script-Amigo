var ltienda = {
aPrdctLfk: function(i, c) {
$('#loading .titl').html('Agregando al carrito...'); $('#loading').fadeIn(250);
$.post(global_data.url+'/ajax/tienda-addpr.php',{'id':i, 'action':c} ,function(h){
mydialog.alert('aviso', '<div id="error_flat" class="blue_flat">'+h.substring(3)+'<div>');  var totlCmNvSpRdcTs;
if(c == 'removeProd'){ totlCmNvSpRdcTs = parseInt($('.riT .prdCtsComplts .cntdd').text())-1; }else{ totlCmNvSpRdcTs = parseInt($('.riT .prdCtsComplts .cntdd').text())+1; }
$('.riT .prdCtsComplts .cntdd').text(totlCmNvSpRdcTs);
$('#loading .titl').html('Cargando...'); $('#loading').fadeOut(250);
});
},
pgpypl: function(){
mydialog.show();
mydialog.title('Cancelar pago del carrito');
mydialog.body('<br><a class="input_button" style="padding: 14px 24px;font-size: 19px;" href="'+global_data.url+'/int/tienda/?preg=pagar&pref=pay-'+global_data.numaccess+'">paypal</a> &nbsp; &nbsp; &nbsp; <a class="input_button" style="padding: 14px 24px;font-size: 19px;" href="'+global_data.url+'/int/tienda/?preg=pagar&pref=worts-'+global_data.numaccess+'">Worts</a><br>');
mydialog.buttons(true, true, 'Volver', "close", true, true, true, 'Cancelar', 'close', true, false);
mydialog.center();
}
}

$(function(){
$('.product .btncom').click(function(){ ltienda.aPrdctLfk($(this).attr('data'), $(this).attr('name')); });$('.pypgcnclr').click(function(){ ltienda.pgpypl(); });
})