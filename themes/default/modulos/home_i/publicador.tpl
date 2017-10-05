<div class="publicdr" {if $tsPage == 'home'}style="margin: -10px -6px -17px -6px;border-top-width: 0;"{/if}>
<form method="POST" enctype="multipart/form-data" action="javascript: {if $pubprofile || $pubgroup}skflwqlq();{else}skflwqlq(true);{/if} return false;" />
<div class="top_header clearfix hidden"><ul><li><a id="text"><span class="lsf" style="font-size: 16px;margin: 0px -8px 0px 0px;">quote</span><span>Publicar Bwort</span></a></li><li><a id="img"><span class="lsf" style="font-size: 16px;margin: 0px -8px 0px 0px;">image</span><span>Subir foto</span></a></li><li><a id="link"><span class="lsf" style="font-size: 16px;margin: 0px -8px 0px 0px;">link</span><span>Publicar enlace</span></a></li></ul><div class="loadingbw floatR dsnone hidden" style="position: relative;margin: -31px 7px 0px 0px;">Cargando...<i class="load" style="width:23px;height:23px;"></i></div></div>
<div class="contnt hidden">
<div class="indc">
<div class="img floatL"><img src="{$u.w_avatar}" class="width32"></div>
<div class="pub floatL"><textarea id="text_vales" placeholder="Escribe aqui..."></textarea></div>
</div>
<div class="result">
<div class="img hidden dsnone"><div class="rsldsim_1" tclass="1" id="filesimg"><img id="vistaPrevia" /><input type="file" tclass="1" id="input_file" class="input_file desact"></div><input name="tcont_s654wnsttr" type="hidden" value="" /></div>
<div class="video hidden dsnone"><div class="ttcont dsnone"></div><div id="cont"><input type="text" name="holdcontent" placeholder="Ingresa enlace de youtube aqui." /><input type="button" class="input_button" id="video" Onclick="skdfqlw($(this), $(this).attr('id'));" value="Añadir" /></div><div id="error" class="dsnone"></div></div>
<div class="link hidden dsnone"><div class="ttcont dsnone"></div><div id="cont"><input type="text" name="holdcontent" placeholder="Ingresa el enlace aqui." /><input type="button" class="input_button" value="Añadir" id="link" Onclick="skdfqlw($(this), $(this).attr('id'));"/></div><div id="error" class="dsnone"></div></div></div>
</div>
<div class="pub_btns hidden"><a class="floatL qtip" title="Expresa con solo texto" id="text"><i class="text active"></i></a><a class="floatL lftmrg qtip" title="Expresa con una imagen" id="img"><i class="img"></i></a><a class="floatL lftmrg qtip" title="Expresa con un video" id="video"><i class="video"></i></a><a class="floatL lftmrg qtip" title="Expresa con un enlace" id="link"><i class="link"></i></a>
<div class="floatR">
<div class="floatL"><div class="floatL hover pub_infppa_1 cursorP" style="color: #333333;padding: 7px 8px;"><span>Publico</span> <input type="hidden" id="pub_infppa_3" value="1"/></div>
<ul id="SDF65Sf19" class="pub_infppa" style="margin: 30px 0px 0px 0px;"> 
<div id="prn">
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('1');$('.pub_infppa_1 span').html('Publico');">Publico</a></li> 
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('2');$('.pub_infppa_1 span').html('Amigos');">Amigos</a></li>
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('3');$('.pub_infppa_1 span').html('Solo yo');">Solo yo</a></li>
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('4');$('.pub_infppa_1 span').html('Mi aula');">Mi aula</a></li>
</div>
<div id="textselect" class="dsnone">
<li class="first"><a class="active" onclick="window.clipboardData.setData(" text",="" document.getselection());"="">Copiar</a></li> 
</div>
</ul>
</div>
<input type="button" onclick="{if $pubprofile || $pubgroup}skflwqlq();{else}skflwqlq(true);{/if}" value="Publicar" class="input_button btn55758s" style="opacity:0.3;"><input type="hidden" name="intTypeB" id="intTypeB" value="text" /><input type="hidden" name="intTBD" id="intTBD" value="5s49w856ew53_sd546e3fs-5s" />
{if $pubprofile}<input type="hidden" class="bxidt" value="1">
<input type="hidden" class="bxcontent" value="{$tsInfo.usuario_id}">
{/if}
{if $pubgroup}<input type="hidden" class="bxidt" value="2">
<input type="hidden" class="bxcontent" value="{$tsGrupo.idgrupo}">{/if}
</div>
</div>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/pubcontents.css" />
<style type="text/css">{literal} .lftmrg{padding: 0px 0px 0px 9px;} .btn55758s{border-radius: 0;box-shadow: none;padding: 9px 11px;margin: -1px 0px;} .result input[type=text]{width: 85%;margin: 0px 0px 0px 6px;} .result input[type=button]{border-radius: 0;border-left-width: 0;padding: 7.4px 8px;} {/literal}</style>
</form>
</div>