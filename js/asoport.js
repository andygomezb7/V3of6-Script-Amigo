var adsop = {
	config: function(){
	 mydialog.loading('Ejecutando funcion, Espere un momento...');
     $("#savefo").css('opacity', '0.5');
     $("#savefo").val('Enviado...');
	 $.ajax({
	 	url: global_data.url+'/ajax/soporte-eject.php',
	 	type: 'POST',
	 	data: 'tt=2&name='+$("#name").val()+'&seo='+$("#cname").val()+'&img='+$("#icon").val()+'&icon='+$("#icontwo").val()+'&desc='+$("#desc").val()+'&idsop='+$("#idsop").val(),
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
            location.href=global_data.url+'/soporte/'+$("#cname").val()+'?action=admin&act=edit';
         	break;
         	default:
            mydialog.end_loading();
            mydialog.alert('Aviso', h.substring(3));
         	break;
         }
	 	}
	 });
	},
adupImgEDproy: function(){
$('#formsup .opcion_1_UpImg .ZErO_uNiMg').fadeOut(250);
$('#formsup .opcion_1_UpImg .tWo_unImg').fadeIn(250);
var inputFileImage = document.getElementById('upster_uNimg_Edtr'); var file = inputFileImage.files[0]; var data = new FormData(); data.append("file",file);
$('#formsup .opcion_1_UpImg .tWo_unImg .barloading .bar').css('width', '10%');
$.ajax({
url: global_data.url+'/ajax/files-up.php',
type: 'POST',
contentType:false, data:data, processData:false, cache:false, 
beforeSend: function(){
$('#formsup .opcion_1_UpImg .tWo_unImg .barloading .bar').css('width', '40%'); $('.tWo_unImg').fadeOut(250);
},
success: function(h){
$('#formsup .opcion_1_UpImg .tWo_unImg .barloading .bar').css('width', '100%');
if(h.charAt(1) == 1){ $('#formsup .opcion_1_UpImg .TreE_unIMg').fadeIn(250).html('<center><img style="max-width:100px;max-height:150px;" src="'+h.substring(3)+'" /></center><input type="hidden" name="img_he" id="icon" value="'+h.substring(3)+'" />'); }else{
$('#formsup .opcion_1_UpImg  .TreE_unIMg').fadeIn(250).html('<center>Error...</center><input type="hidden" name="img_he" id="icon" value="s" />');
$('#formsup .opcion_2_UpImg select').removeAttr('id');
}
$('#formsup .opcion_1_UpImg .tWo_unImg').fadeOut(250);
}
});
    },
	newcat: function(){
    	 mydialog.loading('Ejecutando funcion, Espere un momento...');
     $("#savefo").css('opacity', '0.5');
     $("#savefo").val('Enviado...');
	 $.ajax({
	 	url: global_data.url+'/ajax/soporte-eject.php',
	 	type: 'POST',
	 	data: 'tt=3&name='+$("#name").val()+'&seo='+$("#cname").val()+'&img='+$("#img").val()+'&desc='+$("textarea#desccats").val()+'&p='+$("#idsop").val(),
	 	success: function(h){
            $("#savefo").css('opacity', '1');
            $("#savefo").val('Crear Categoria');
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
            location.reload(true);
         	break;
         	default:
            mydialog.end_loading();
            mydialog.alert('Aviso', h.substring(3));
         	break;
         }
	 	}
	 });
	},
	deltecat: function(id){
	 mydialog.loading('Eliminado categoria...');
	 $.ajax({
	 	url: global_data.url+'/ajax/soporte-eject.php',
	 	type: 'POST',
	 	data: 'tt=4&objs='+id+'&forsd='+$("#idproyect").val(),
	 	success: function(h){
            $("#catsupdel"+id).css('opacity', '0.5');
           $("#catsupdel"+id).remove();
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

$(document).ready(function(){ $('#upster_uNimg_Edtr').bind('change', function(){ adsop.adupImgEDproy(); }) 
$('#formsup #gooiMg').bind('change', function(){ $('.opcion_1_UpImg').hide();$('.opcion_2_UpImg').hide();$('.opcion_'+$(this).val()+'_UpImg').show();if($(this).val() == 2){ $('#formsup .opcion_1_UpImg  .TreE_unIMg input[type=hidden]').removeAttr('id'); $('#formsup .opcion_2_UpImg select').attr('id', 'icon'); }else{ $('#formsup .opcion_1_UpImg  .TreE_unIMg input[type=hidden]').attr('id', 'icon'); $('#formsup .opcion_2_UpImg select').removeAttr('id'); } });
});