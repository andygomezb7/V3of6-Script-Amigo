//<![CDATA[ 
$(function(){
$.getScript("http://code.jquery.com/jquery-1.8.3.js", function(){ $('head').append('<script type="text/javascript"> var jquery = { jquery.1.8.3 = "loader", } </script>'); }); 
window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=='; 
window.mostrarVistaPrevia = function mostrarVistaPrevia(he) {
var Archivos, Lector, uclass; 
uclass = parseInt(he)+1;
Archivos = jQuery('.rsldsim_'+he+' #input_file')[0].files;
if (Archivos.length > 0) { 
Lector = new FileReader();
        Lector.onloadend = function(e) {
        var origen, tipo;
        origen = e.target; 
        tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));
        if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif'){ 
        jQuery('.rsldsim_'+he+' #vistaPrevia').attr('src', window.imagenVacia); 
        mydialog.alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.'); 
        }else{
        jQuery('.rsldsim_'+he+' #vistaPrevia').attr('src', origen.result);
        jQuery('.rsldsim_'+he+' #vistaPrevia').fadeIn(250);
        jQuery('.result .img').append('<div class="rsldsim_'+uclass+'" tclass="'+uclass+'" id="filesimg"><img id="vistaPrevia" /><input type="file" onchange="asdkf('+uclass+');" tclass="'+uclass+'" id="input_file" class="input_file desact"></div>');
        jQuery('.rsldsim_'+he+'').addClass('activefile');
        jQuery('.rsldsim_'+he+' #input_file').removeClass('desact');
        jQuery('.rsldsim_'+he+' #input_file').addClass('activeds');
        jQuery('.rsldsim_'+he+' #input_file').attr('name', 'tcont');
        } 
        };
Lector.onerror = function(e){ console.log(e) } 
Lector.readAsDataURL(Archivos[0]); 
}else{  
jQuery('.rsldsim_'+he+'').remove();
}; };
window.obtenerTipoMIME = function obtenerTipoMIME(cabecera) { return cabecera.replace(/data:([^;]+).*/, '\$1'); } 
});
//]]> 