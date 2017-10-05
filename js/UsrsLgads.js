var TpGtop = {
notifisound: function(){ $.ajax({ url:global_data.url+'/ajax/user-sound.php', type: 'POST', success: function(h){ $('#js').html(h); } }); },
notifsdwe: function(){
if($('#js_send input[name=liveMsg]').val() == 0 || $('#js_send input[name=liveMsg]').val() == '0'){ 
$('#js_send input[name=liveMsg]').val('1'); var variablelocalmsg = $(".messagesDialog #notifi"); var totalm = parseInt(variablelocalmsg.text());
$.post(global_data.url+'/ajax/user-notifism.php', {'skldfj':'1', 'n':totalm} , function(h){ $('#js_send input[name=liveMsg]').val('0'); switch(h.charAt(1)){ case 0: case '0': default: variablelocalmsg.fadeOut(250); break; case 1: case '1':  TpGtop.notifisound(); variablelocalmsg.html(h.substring(3)); variablelocalmsg.fadeIn(250);  break; }  }); }
if($('#js_send input[name=liveNotifs]').val() == 0 || $('#js_send input[name=liveNotifs]').val() == '0'){ 
var totaln = parseInt($(".notifiDialog #notifi").text()); var variablelocalnotifs = $(".notifiDialog #notifi");
$.ajax({ async:false, type: 'POST', url: global_data.url+'/ajax/user-notifism.php', dataType: 'json', data: 'skldfj=2&n='+totaln, 
beforeSend: function(){ $('#js_send input[name=liveNotifs]').val('1'); }, success: function(h){
$('#js_send input[name=liveNotifs]').val('0');
switch(h['where']){ 
case 0: case '0': default: variablelocalnotifs.fadeOut(250); break; 
case 1: case '1': if(totaln != h['total']){
TpGtop.notifisound(); variablelocalnotifs.fadeIn(250); 
if(h['ltlist']){ $('.notification-board').prepend($(h['ltlist']).fadeIn('slow')); } 
variablelocalnotifs.html(h['total']);  
var news_nots = $('.notification-board').html(); 
if(news_nots != ''){ $('.notification-board div.notification').each(function(){ var not_date = $(this).attr('timepub'); if(h['max_time'] > not_date) $(this).remove(); }); } 
} break; 
} },
}); } 
},
autocoplsea: function(){
$(".searchglobal").keyup(function(){
var searchbox = $(this).val();
var typeserching = $('.typesearching').val();
var dataString = 'q='+ searchbox + '&t=' + typeserching;
if(searchbox==''){}else{ $('#displayboxsearching').html('<center style="margin: 27px 0 0 0;font-size: 14px;height: 40px;"><i class="i16 loading-msg" style="padding: 8px;  margin: 0 6px 0 0;"></i> Recibiendo datos...</center>').show();
$.ajax({
type: "GET",
url: global_data.url+"/ajax/search-global.php",
data: dataString,
cache: false,
success: function(html){
$(".searchglobal").css({'opacity':'1'});
$("#displayboxsearching").html(html).show();
}
});
}
}).keydown(function(){
$("#displayboxsearching").hide(); 
});
},
    LgutUsrsLgg: function(){                                           
        mydialog.show();
        mydialog.title('Cerrar sesión');
        mydialog.body('¿Estar seguro de cerrar sesión?');
        mydialog.buttons(true, true, 'Cerrar sesión', "TpGtop.lgluteject()", true, true, true, 'Cancelar', 'close', true, false);
        mydialog.center();
    },
    lgluteject: function(){
        mydialog.loading('Cerrando Sesion');
        $.post(global_data.url+'/ajax/user-lgt.php', {'kdy': '5d46556we51f32dc15E6', 'kdyds': 'sdf51a9r8ga653'}, function(h){ mydialog.end_loading(); switch(h.charAt(1)){ case 0: case '0': mydialog.alert('Error', 'Logout: '+h.substring(3)); break; case 1: case '1': mydialog.alert('Ejecutado', 'Logout: '+h.substring(3)); location.reload(true); break; default: mydialog.alert('Aviso', 'Logout: '+h.substring(3)); break; } });
        //$.ajax({ url: global_data.url+'/ajax/user-lgt.php', type: 'POST', data: 'kdy=5d46556we51f32dc15E6&kdyds=sdf51a9r8ga653', success: function(h){ mydialog.end_loading(); switch(h.charAt(1)){ case 0: case '0': mydialog.alert('Error', 'Logout: '+h.substring(3)); break; case 1: case '1': mydialog.alert('Ejecutado', 'Logout: '+h.substring(3)); location.reload(true); break; default: mydialog.alert('Aviso', 'Logout: '+h.substring(3)); break; } } });
    }
}

var accounts = {
	last: function(obj){
    if($('#dialog-notifications').css('display') == 'none'){
	$("#dialog-notifications #notifications-list").html('<div style="color: #000000;text-align: -webkit-center;">Cargando...</div>');
	$('#dialog-notifications').show();
	//$.ajax({ type: 'POST', url: global_data.url+'/ajax/user-ttnotif.php', data: '', success: function(h){ $('#dialog-notifications').addClass('active'); $('#dialog-notifications #notifications-list').html(h); $('.notifiDialog span').css({'background': ''}); } });
    $.post( global_data.url+'/ajax/user-ttnotif.php', function(h){ $('#dialog-notifications').addClass('actived'); $('#dialog-notifications #notifications-list').html(h); $('.notifiDialog span').css({'background': ''}); });
    }else{ $('.notifiDialog span').css({'background': ''}); }
     },
	close: function(){
	$('#dialog-notifications').hide();
	$('#dialog-notifications').removeClass('active');
	},
    mssgs: function(obj){
    if($('#dialog-messages').css('display') == 'none'){
    $("#dialog-messages #notifications-list").html('<div style="color: #000000;text-align: -webkit-center;">Cargando...</div>');
    $('#dialog-messages').show();
    $.post( global_data.url+'/ajax/user-ttmssgs.php', function(h){ $('#dialog-messages').addClass('actived'); $('#dialog-messages #notifications-list').html(h); $('.messagesDialog span').css({'background': ''}); });
    }else{ $('.messagesDialog span').css({'background': ''}); }
    },
    follow: function(g){
    var sddfrd = $('.follow#f'+g).attr('fi-source');
    $('.follow#f'+g+' .load').fadeIn(250);
    $.post(global_data.url+'/ajax/user-foll.php', {'uid':g}, function(h){
    switch(h.charAt(1)){
    case 0: case '0': default:
    $('.follow#f'+g+' .load').fadeOut(250);
    mydialog.alert('Follow error',h.substring(3));
    break;
    case 1: case '1':
    $('.follow#f'+g+' .load').fadeOut(250);
    $('.follow.noactive#f'+g+' .foll1').html(h.substring(3));
    break;
    }
    });
    }
}


function TdslsFncnsGblsRdy(){
$('.dropshow').click(function(){ GblStrns.drowdownw('.dropdown-w'); });
$('.notifiDialog').click(function(){ $('.notifiDialog span').css({'background': 'url('+global_data.url+'/images/static/options/icons/spinner.gif)'}); if($('#dialog-notifications').css('display') == 'none'){ GblStrns.drowdownw('#dialog-notifications'); }else{ $('#dialog-notifications').fadeOut(250); $('.notifiDialog span').css({'background': ''}); } });
$('.messagesDialog').click(function(){ $('.messagesDialog span').css({'background': 'url('+global_data.url+'/images/static/options/icons/spinner.gif)'}); if($('#dialog-messages').css('display') == 'none'){ GblStrns.drowdownw('#dialog-messages'); }else{ $('#dialog-messages').fadeOut(250); $('.messagesDialog span').css({'background': ''}); } });
}

$(document).ready(function(){
    $('.wortip').tooltip({  offset: [ -50, -30 ],  content: 'uid' });
    TpGtop.autocoplsea();
    var skgjIntrVlNtfs = setInterval(function(){ TpGtop.notifsdwe(); }, 5000);
    clearInterval(skgjIntrVlNtfs);
	setInterval(function(){ TpGtop.notifsdwe(); }, 23000);
    $('.logout').click(function(){ TpGtop.LgutUsrsLgg(); });
        TdslsFncnsGblsRdy();
    /* CLICS OFSET 
    $('a').click(function(opts){ if($(this).attr('href') || $(this).attr('rft')){
        $(this).attr('rft', $(this).attr('href')); $(this).removeAttr('href'); opts = $.extend({ className: 'tooltip', content: 'title', offset: [ 0, 0 ], align: 'center', inDelay: 100, outDelay: 100 }, opts || {});
        var obj = this; var pos = $.extend({}, $(obj).offset(), { width: obj.offsetWidth, height: obj.offsetHeight }); var tooltip = $.data(obj, 'stsnarh');
        var left; if (opts.align == 'left') { left = pos.left; }else if(opts.align == 'center') { left = pos.left + pos.width / 2; } else if (opts.align == 'right') { left = pos.left + pos.width; } left += opts.offset[1];
        $('.stsnarh').css({'top': pos.top + 40,'left': left}).show(); $('.stsnarh a').attr('href', $(this).attr('rft'));
    } });
     END CLICS OFSET */
    $('#headtotalhe').click(function(){ $('.stsnarh').hide(); });
    $('.checkInc').click(function(){ if($(this).attr('wstatus') == 0){ $(this).addClass('checkArc'); $(this).attr('wstatus', '1'); }else{ $(this).removeClass('checkArc'); $(this).attr('wstatus', '0'); } });
    $('.follow').click(function(){ accounts.follow($(this).attr('fi-source')); });
});