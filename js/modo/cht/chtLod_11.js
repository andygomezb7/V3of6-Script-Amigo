var imcht = {
ld: function(){
if($('input[name=ajchld]').val() == 0 && $('#js_send input[name=liveNotifs]').val() == 0 && $('#js_send input[name=liveMsg]').val() == 0){
$('input[name=ajchld]').val('1');
$.ajax({
async:true,
url: global_data.url+'/ajax/chat-load.php',
dataType: 'json',
type: 'POST',
data: 'ie=1&iu='+$('input[name=ajchld]').attr('data-ie'),
success: function(h){
if(h['where'] == 1){
$('div.cht_msgs .cht_msg_font').append($(h['msgs']).fadeIn(250));
$('div.cht_msgs[data-i='+$('input[name=ajchld]').attr('data-ie')+'] .cht_msg_font').scrollTop($('div.cht_msgs[data-i='+$('input[name=ajchld]').attr('data-ie')+'] .cht_msg_font')[0].scrollHeight);
}
$('input[name=ajchld]').val('0');
}
});
}
}
}

$(function() {
$('div.cht_msgs[role=ldcht] #loadchat').click(function(){
$('div.cht_msgs[data-i='+$(this).attr('data-i')+'] .font').fadeOut(250);
$('div.cht_msgs[data-i='+$(this).attr('data-i')+'] .cht_msg_font').html('<center><img title="Cargando chat..." src="'+global_data.url+'/images/static/media/icons/loading/lw-2.gif" /></center>');
$('div.cht_msgs .cht_msg_font').load(global_data.url+'/ajax/chat-load.php?iu='+$(this).attr('data-i'));
setInterval(function(){ imcht.ld(); }, 4000);
$('div.cht_msgs[data-i='+$('input[name=ajchld]').attr('data-ie')+'] .cht_msg_font').scrollTop($('div.cht_msgs[data-i='+$('input[name=ajchld]').attr('data-ie')+'] .cht_msg_font')[0].scrollHeight);
});
$('#submitmsg').click(function(){
var sksksobj = $(this);
$('.lodsgsubi[data-li='+$(this).attr('data-li')+']').fadeIn(250);
$.post(global_data.url+'/ajax/chat-create.php', {'t':'2','tt':$('#txnvdata').val(),'c':$(this).attr('data-li')},function(h){
$('.lodsgsubi').fadeOut(250);
if(h.charAt(1) == 1 || h.charAt(1) == '1'){ $('div.cht_msgs[data-i='+sksksobj.attr('data-li')+'] .cht_msg_font').append('<div class="hidden msg"><div class="floatL hrd"><img src="'+global_data.img+'"></div><div class="floatL cnt"><h1>'+global_data.user_name+'</h1><div class="dodo"><div class="tt">'+$('#txnvdata').val()+'</div><div class="size11 color_gray">Hace 1 segundo</div></div></div></div>'); 
$('div.cht_msgs[data-i='+sksksobj.attr('data-li')+'] .cht_msg_font').scrollTop($('div.cht_msgs[data-i='+sksksobj.attr('data-li')+'] .cht_msg_font')[0].scrollHeight);
$('#txnvdata').val('');
}else{ mydialog.alert('aviso',h.substring(3)); }
});
});
});