var loadincogt = {
set: function(ids, key, hace, di){
mydialog.show();
mydialog.title('Codigo insertable #'+ids);
mydialog.body('<div class="hidden"><div id="error_flat" class="hidden">Puedes pegar este código en cualquier página o sitio web que cumpla con nuestras políticas del programa.</div> <div class="clearfix" style="width: 635px;"><b>Script principal <span style="font-size:11px;" class="color_gray">Va dentro de la etiqueta &lt;/head&gt;</span></b><br /> <textarea style="width:632px;height:41px;margin-bottom: 7px;"><script type="text/javascript" src="'+global_data.url+'/php/pages/ejects/adsbywortit.js?s='+hace+'"></script></textarea><textarea style="height: 122px;width: 632px;"><ins class="adsbywortit" data-ad-deb="'+key+'" data-ad-yum="'+di+'" data-ad-client="pub-'+hace+'"></ins></textarea></div></div>');
mydialog.buttons(true, true, 'Aceptar', "close", true, true, true, 'Cerrar', 'close', true, false);
mydialog.center();
}
}
