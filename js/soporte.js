var supp = {
	addfors: function(){
		mydialog.loading('Ejecutando funcion, Espere un momento...');
$.ajax({
	 	url: global_data.url+'/ajax/soporte-add.php',
	 	type: 'POST',
	 	data: 'tt=2&foro='+$("#idproyeckt").val()+'&cont='+$(".conttema").val()+'&title='+$("#titletem").val()+'&cat='+$("#cattmea").val(),
	 	success: function(h){
         switch(h.charAt(1)){
         	case 0:
         	case '0':
             mydialog.end_loading();
             mydialog.alert('Error', h.substring(3));
         	break;
         	case 1:
         	case '1':
mydialog.mask_close = false;
mydialog.close_button = true;                                               
mydialog.show();
mydialog.title('Función ejecutada');
mydialog.body('Tu tema fue publicado correctamente.');
mydialog.buttons(true, true, 'Ir a el tema', "location.href('"+h.substring(3)+"');", true, true, true, 'Cerrar', 'close', true, false);
mydialog.center();
         	break;
         	default:
            mydialog.end_loading();
            mydialog.alert('Aviso', h.substring(3));
         	break;
         }
	 	}
	 });
	},
	addresf: function(id){
     mydialog.loading('Ejecutando funcion, Espere un momento...');
	 $.ajax({
	 	url: global_data.url+'/ajax/soporte-add.php',
	 	type: 'POST',
	 	data: 'tt=1&tema='+$("#idtpryf").val()+'&cont='+$(".textresp").val()+'&foro='+$("#idfpry").val(),
	 	success: function(h){
         switch(h.charAt(1)){
         	case 0:
         	case '0':
             mydialog.end_loading();
             mydialog.alert('Error', h.substring(3));
         	break;
         	case 1:
         	case '1':
            mydialog.end_loading();
            mydialog.alert('Hecho', h.substring(3));
            $(id).append('<div style="overflow: hidden;padding: 10px 3px;border-top: 1px solid #CCCCCC;border-bottom: 1px solid #CCCCCC;"><div style="float: left;width: 100px;text-align: -webkit-center;padding: 10px 0px;border-right: 1px solid #CCCCCC;"><a href="'+global_data.url+'/'+global_data.user_name+'"><img src="'+global_data.img+'" style="width:34px;height:34px;"></a><br><span>'+global_data.user_name+'</span><br></div><div style="float: left;width: 88%;"><div style="margin: 15px 0px 0px 15px;">'+$(".textresp").val()+'</div></div></div>');
         	break;
         	default:
            mydialog.end_loading();
            mydialog.alert('Aviso', h.substring(3));
         	break;
         }
	 	}
	 });
	},
	aggfor: function(){
     mydialog.loading('Ejecutando funcion, Espere un momento...');
     $("#savefo").css('opacity', '0.5');
     $("#savefo").val('Enviado...');
     if($('.opcion_1_UpImg').css('display') == 'block'){ var vlUlUniMg = $('.opcion_1_UpImg .TreE_unIMg input[name=img_he]').val(); }else{ var vlUlUniMg = $('.opcion_2_UpImg #icon').val(); }
	 $.ajax({
	 	url: global_data.url+'/ajax/soporte-eject.php',
	 	type: 'POST',
	 	data: 'tt=1&name='+$("#name").val()+'&seo='+$("#cname").val()+'&img='+vlUlUniMg+'&icon='+$("#icontwo").val()+'&desc='+$("#desc").val(),
	 	success: function(h){
            $("#savefo").css('opacity', '1');
            $("#savefo").val('Crear proyecto');
         switch(h.charAt(1)){
         	case 0:
         	case '0':
             mydialog.end_loading();
             mydialog.alert('Error', h.substring(3));
         	break;
         	case 1:
         	case '1':
            mydialog.end_loading();
            mydialog.alert('Echo', h.substring(3));
            location.href=global_data.url+'/soporte/'+$("#cname").val();
         	break;
         	default:
            mydialog.end_loading();
            mydialog.alert('Aviso', h.substring(3));
         	break;
         }
	 	}
	 });
	},
}