// principal #strcth
// Agregar #nwCthIn a
// Math.round(Math.random()*1000000)
var ctrcht = {
add: function(varid, ranplb){
	$("#loading").fadeIn(250);
	var totalifSelf = $("#TdsLsChts div#chtInWb").length;
	var totalifWorf = 2;
	var VrSxtstLCntndr = $('.'+varid+'_'+ranplb).length;
	var VrSxtstLCntndrSgnd = $('.'+varid+'_17_'+ranplb).length;
	if(VrSxtstLCntndrSgnd == 2 || VrSxtstLCntndrSgnd > 2){ $('.'+varid+'_17_'+ranplb+':nth-child(2)').remove(); }
	if(VrSxtstLCntndr == 2 || VrSxtstLCntndr > 2){ $('.'+varid+'_'+ranplb+':nth-child(2)').remove(); }
	$("#TdsLsChts div#chtInWb:hidden").appendTo("#TdsLsChts");
	if(VrSxtstLCntndr){
	if(VrSxtstLCntndrSgnd){ $('.'+varid+'_17_'+ranplb).remove(); }
	if($('.'+varid+'_'+ranplb).css('display') == 'block'){
    $('.'+varid+'_'+ranplb+' #tltcHt').addClass('parpadeo');
    }else{ 
    if(totalifSelf > totalifWorf || totalifSelf == totalifWorf){ this.valEject(); } $('.'+varid+'_'+ranplb).show();
    }
	}else{	
	if(totalifSelf == totalifWorf || totalifSelf > totalifWorf){ this.valEject(); }
    $("#TdsLsChts").append('<div id="chtInWb" class="'+varid+'_'+ranplb+'"><div id="miniclose" onclick="ctrcht.baja('+varid+', '+ranplb+');" class="'+varid+'_1_'+ranplb+'"><div class="clearfix bgtnTl"><div id="bTnClsPrEMn" onclick="ctrcht.close('+varid+', '+ranplb+')">x</div><div id="titleKDFLesk">'+$('#'+varid+"_"+ranplb+'_14').attr('data-title')+'</div></div></div><div class="'+varid+'_2_'+ranplb+'" id="EChtPrclDtdS"><div id="tltcHt" class="clearfix" onclick="ctrcht.baja('+varid+', '+ranplb+');">'+$('#'+varid+"_"+ranplb+'_14').attr('data-title')+' <div id="clsCht" class="'+varid+'__'+ranplb+'" onclick="ctrcht.close('+varid+', '+ranplb+')">x</div></div><div id="cntChtInDv" class="'+varid+'_0_'+ranplb+'"><span>Contenido aqui...</span></div><div id="VlePrEscbrUnTxto"><div id="error_flat" class="error_'+varid+'" style="margin: 0px 0px -30px 0px;z-index: 10000;position: relative;display:none;"></div><input type="text" placeholder="Escribe algo aqui..." onkeydown="if(event.keyCode == 13){ ctrcht.rspnd('+varid+', '+ranplb+'); return false;}" name="textOfVlxDT" class="'+varid+'_012" id="CntntWhrOrtxs"/></div></div></div>');
  }
$("#loading").fadeOut(250);
ctrcht.ajax(varid, ranplb);
setInterval(function(){ ctrcht.ajax(varid, ranplb, 2); }, 2000);
var lftDlBtns = $("#HyMsChtsAmg").left;
var RghtDelBtns = $("#HyMsChtsAmg").top;
$("#TdsLsChtsQeNeNtrn").css({left: lftDlBtns, top: RghtDelBtns});
},
baja: function(id, rand){
if($('.'+id+'_1_'+rand).css('display') == 'block'){ $('.'+id+'_1_'+rand).hide(); $('.'+id+'_2_'+rand).show(); }else{ $('.'+id+'_1_'+rand).show(); $('.'+id+'_2_'+rand).hide(); }
},
close: function(id, rand){
$('.'+id+'_'+rand).remove();
},
valEject: function(){
	$("#HyMsChtsAmg").show();
$("#TdsLsChts div#chtInWb:nth-child(2)").hide(function(){ 
var LclsparTietll = $(this).attr('class');
var sdf5w6e5a6seks = LclsparTietll.split('_');
var sdf5w6e5a6sek = sdf5w6e5a6seks[0];
var CmbrLClsPrti = LclsparTietll.replace(sdf5w6e5a6sek+'_', sdf5w6e5a6sek+'_17_');
var QtrTdprmevasrvr = LclsparTietll.replace(sdf5w6e5a6sek+'_', '');
$("#TdsLsChtsQeNeNtrn").prepend('<div id="ChtOcltPrtI" class="'+CmbrLClsPrti+'"><div onclick="ctrcht.mstrchtocl('+sdf5w6e5a6sek+', '+QtrTdprmevasrvr+');"><span>shat</span></div><div id="MstRchtOclt" onclick="ctrcht.remove('+sdf5w6e5a6sek+', '+QtrTdprmevasrvr+');">x</div></div>');
});
},
mstrchtocl: function(id, rand){
var toltOtrvPrti = $("#TdsLsChts div#chtInWb").length;
var vleIsTrsPrti = 2;
$("#TdsLsChts div#chtInWb:hidden").appendTo("#TdsLsChts");
$("#TdsLsChts div#chtInWb:visible").appendTo("#TdsLsChts");
if(toltOtrvPrti == vleIsTrsPrti || toltOtrvPrti > vleIsTrsPrti){ this.valEject(); }
$("#HyMsChtsAmg").show();
$("."+id+'_17_'+rand).remove();
$('.'+id+'_'+rand).show();
},
remove: function(id, rand){
$("#TdsLsChtsQeNeNtrn ."+id+"_17_"+rand+"").remove();
$("#TdsLsChts ."+id+"_"+rand+"").remove();
},
iGicteGc: function(){
if($("#CntntDlLsUsrsXtrs").css('display') == 'none'){
$("#CntntDlLsUsrsXtrs").show();
}else{ $("#CntntDlLsUsrsXtrs").hide(); }
},
chtOfsl: function(){
if($("#CntndrMnPrMdVr").css('display') == 'none'){
$("#CntndrMnPrMdVr").show();
$("#CntndrDlsUsrsOnlnPrCnvrsr").hide();
}else{	
$("#CntndrMnPrMdVr").hide();
$("#CntndrDlsUsrsOnlnPrCnvrsr").show();
}
},
ajax: function(id, rand, tt){
	if(tt == 2){
    $.ajax({ 
    type: 'POST',
	url: global_data.url+'/ajax/user-urscht.php',
	dataType: 'json',
    data: 'usr='+id+'&vddj=2',
    success: function(h){ 
      if(h['where'] == 1){
      $("."+id+'_0_'+rand+' span').append(h['text']);
      }
    }
    });
	}else{
	$("."+id+'_0_'+rand+' span').html('cargando...');
    $.ajax({ 
    type: 'POST',
	url: global_data.url+'/ajax/user-urscht.php',
    data: 'usr='+id,
    success: function(h){ 
     $("."+id+'_0_'+rand+' span').html(h);
    },
    error: function(h){
    $("."+id+'_0_'+rand+' span').html(h);
    }
});
}
},
rspnd: function(udr, hlp){
	$('.error_'+udr).html('Enviando...');
	$('.error_'+udr).fadeIn(250);
    $.ajax({
    url: global_data.url+'/ajax/live-pachg.php',
    data: 'textot='+$('.'+udr+"_012").val()+'&p='+udr+'&app=id',
    type: 'POST',
    success: function(h){
    	switch(h.charAt(1)){ 
    	case 0:
    	case '0':
    	$('.error_'+udr).addClass('red_flat');
    	$('.error_'+udr).html(h.substring(3));
	    $('.error_'+udr).fadeIn(250);
	    setTimeout(function(){ $('.error_'+udr).fadeOut(250); }, 5000);
        break;
        case 1:
        case '1':
        $('.error_'+udr).fadeOut(250);
        $('.error_'+udr).html('Enviado');
        $('.'+udr+'_0_'+hlp).append('<div id="msgg" style="border-radius: 7px 0px 0px 7px;margin: 3px -6px 3px 0px;"><span>'+$('.'+udr+"_012").val()+'</span></div>');
        $('.'+udr+"_012").val('');
        setTimeout(function(){ $('.error_'+udr).fadeOut(250); }, 5000);
        break;
        default:
        $('.error_'+udr).addClass('red_flat');
        $('.error_'+udr).html(h.substring(3));
	    $('.error_'+udr).fadeIn(250);
	    setTimeout(function(){ $('.error_'+udr).fadeOut(250); }, 5000);
        break;
    	}
    }	
    });
}
}
