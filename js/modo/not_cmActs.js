var comm = {
lik: function(t, ob, ku){
ku.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/new-likcomm.php',{'not':ob,'type':t}, function(h){
if(h.charAt(1) == 0){ mydialog.alert('Aviso', h.substring(3)); }else{ var totdoLeQkd = ku.children('span').text(); ku.children('span').text(parseInt(totdoLeQkd)+1); ku.css({'border':'1px solid #A38A8A'}); }
ku.css({'opacity':'1'});
});
}
}

$(function(){
$('.LikBtn .likCOm').click(function(){ comm.lik($(this).attr('data-curl'), $(this).attr('data-obj'), $(this)); });
})