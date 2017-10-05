{include file='includes/main_header.tpl'}
<div class="profile hidden">
<div class="content">
	
<div class="hedrGOhE"><div>
	<div class="floatL" style="margin: -6px 8px -39px 0;background: #FFFFFF;border: 1px solid #DDD;padding: 2px;"><img src="{$tsInfo.w_avatar}" style="width:62px;height:62px;"/></div>
	<div style="font-size: 18px;color: #6D6D6D;">
	{if $tsInfo.name_original && $tsInfo.ap_original}{$tsInfo.name_original} {$tsInfo.ap_original} <span>({$tsInfo.usuario_nombre})</span>{else}{$tsInfo.usuario_nombre}{/if} {if $tsInfo.verifi == 1}<a title="Pagina verificada" class="otip"><img src="{$tsConfig.url}/images/icons/truef.png" /></a>{/if}</div>
<div class="floatR" style="margin: -21px 27px 0 0;">
{if $suscrip > 0}<a class="follow floatL input_button hidden active" id="f{$tsInfo.usuario_id}" fi-source="{$tsInfo.usuario_id}"><div class="load floatL"></div><div class="foll1 floatL" style="display: block;"><span class="sp1" style="color:#333333;font-weight:normal;">Siguiendo</span> <span class="sp2 color_white" style="font-weight:normal;">Dejar de seguir</span></div></a>{elseif $suscrip == '0'}<a class="follow floatL input_button hidden noactive" id="f{$tsInfo.usuario_id}" fi-source="{$tsInfo.usuario_id}"><div class="load floatL"></div><div class="foll1 floatL" style="display: block;" style="font-weight:normal;">Seguir</div></a>{else}{/if}
<a class="input_button" style="margin: 0 0 0 7px;" onclick="ctrcht.add({$tsInfo.usuario_id}, {$tsInfo.identi});">Roombox</a>
</div>
    </div></div>

<div class="header">
	{if $tsInfo.usuario_id == $wuser->uid}<script type="text/javascript" src="{$tsConfig.url}/js/modo/edt_profile.js"></script>{/if}
<div class="img floatL hidden"><img class="floatL" src="{$tsConfig.url}/thumb/img/140/140/?file={$tsInfo.w_avatar}" />
	{if $tsInfo.usuario_id == $wuser->uid}<div class="btnFileO dsnone floatR BtnCmbPrtdO cursorP vctip" style="position:absolute;margin: 4px 0px 0px 5px;" title="Cambiar foto de perfil" onclick="modalsPrfl.cmbrAvtrMdl();">Cambiar</div>{/if}
<div class="info floatL">{if $tsInfo.name_original && $tsInfo.ap_original}{$tsInfo.name_original} {$tsInfo.ap_original} <span>({$tsInfo.usuario_nombre})</span>{else}{$tsInfo.usuario_nombre}{/if} {if $tsInfo.verifi == 1}<a title="Pagina verificada" class="otip"><img style="width:18px;height:18px;" src="{$tsConfig.url}/images/icons/truef.png" /></a>{/if}
<div class="floatR">
{if $suscrip > 0}
<a class="follow floatL input_button hidden active" id="f{$tsInfo.usuario_id}" fi-source="{$tsInfo.usuario_id}">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;"><span class="sp1" style="color:#333333;font-weight:normal;">Siguiendo</span> <span class="sp2 color_white" style="font-weight:normal;">Dejar de seguir</span></div>
</a>
{elseif $suscrip == '0'}
<a class="follow floatL input_button hidden noactive" id="f{$tsInfo.usuario_id}" fi-source="{$tsInfo.usuario_id}">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;" style="font-weight:normal;">Seguir</div>
</a>
{else}
{/if}
<a class="input_button" style="margin: 0 0 0 7px;" onclick="ctrcht.add({$tsInfo.usuario_id}, {$tsInfo.identi});">Roombox</a>
</div>
</div>
<div class="title floatL">
<div class="vctip" title="Última actividad: {$tsInfo.active_ult|hace}" style="{if $online == 1}background: #7ba60d;{else}background: #b3b3b3;{/if}display: inline-block;height: 15px;line-height: 15px;padding: 0 5px;font-size: 10px;font-weight: bold;text-transform: uppercase;color: #fff;-moz-border-radius: 4px;-webkit-border-radius: 4px;border-radius: 4px;vertical-align: middle;cursor: default;">{if $online == 1}Conectado{else}Desconectado{/if}</div> <span>-</span> Vive en <a class="qtip" title="Ver mas Usuarios de {$tsInfo.pais}" href="#">{$tsInfo.pais}</a>  <span>-</span> {$content.temas|posnum} Temas <span>-</span> {$content.notas|posnum} Notas <span>-</span>{$tsInfo.stats.interacciones|posnum} {if $tsInfo.stats.interacciones == 1}Interaccion{else}Interaciones{/if}
</div>
</div>
<div class="port hidden"><img src="{$tsConfig.url}/thumb/img/968/287/?file={$tsInfo.p_cabecera}">
{if $tsInfo.usuario_id == $wuser->uid}<div class="btnFileO floatR dsnone BtnCmbPrtdO cursorP qtip" title="Cambiar foto de portada" style="position: absolute;z-index: 10000;margin: -41px 34px 0px 0px;right: 0;z-index: 10000;" onclick="modalsPrfl.cmbrprtdMdl(); return false;"><span>Cambiar portada</span></div>{/if}
</div>
<div class="tabs hidden">
<div class="content" data-source='{$tsInfo.usuario_id}'>
<span data-source='info'>Sobre mí</span>
<span data-source='bworts'>Publicaciones</span>
<span data-source='images'>Fotos</span>
<span data-source='actividad'>Actividad</span>
<span data-source='bwfav'>Favoritos</span>
<span data-source='logros'>Logros</span>
<span data-source='notas'>Notas</span>
</div>
</div>
</div>
<div class="body hidden">
<div class="content">
<div class="load dsnone"></div>
<div class="defin dsnone"></div>
<div class="defin_bw floatL">
<div class="dfin-w-str"><input type="hidden" id="pgBwPg" value="2" /></div>
{include file='modulos/home_i/publicador.tpl'}
<div class="bwortsloadeds"><center><h1>Cargando bworts...</h1><div class="load"></div></center></div>
</div>

<div class="defin_gdgts floatL">
{if $wuser->admod || $wuser->mod}
<div class="boxe">
<div class="tit">Opciones de {if $wuser->admod}Administrador{elseif $wuser->mod}Moderador{/if}</div>
<div class="co">
<div class="btns_admins hidden">
<a class="input_button baneu {if $tsInfo.banned == 1}ibg{/if}" top="{if $tsInfo.banned == 1}2{else}1{/if}" data-obj="{$tsInfo.usuario_id}" title="{if $tsInfo.banned == 1}Baneado{else}Bannear{/if}"><span class="lsf">off</span></a>
<a class="input_button veriu {if $tsInfo.verifi == 1}ibg{/if}" top="{if $tsInfo.verifi == 1}2{else}1{/if}" data-obj="{$tsInfo.usuario_id}" title="{if $tsInfo.verifi == 1}Verificada{else}Verificar{/if}"><span class="lsf">check</span></a>
</div>
</div>
</div>
<style type="text/css">{literal}
.btns_admins{display: block;}
.btns_admins a{display: block;padding: 6px 6px;border: 1px solid #CCCCCC;float: left;margin: 0 0 0 3px;}
.btns_admins a span{font-size: 30px;}
{/literal}</style>
{/if}

<div class="boxe">
<div class="tit">Seguidores</div>
<div class="co"></div>
</div>

<div class="boxe">
<div class="tit">Sigo</div>
<div class="co"></div>
</div>
</div>

</div>
<div class="cont_we"></div>
</div>
</div>
</div>
<script>{literal}
$(function(){
$('.body .content .load').fadeIn(250);
$.post(global_data.url+'/ajax/bwort-load.php?fil=2&pro={/literal}{$tsInfo.usuario_id}{literal}', function(h){
$('.body .content .defin_bw .bwortsloadeds').html($(h).fadeIn(250));
$('.body .content .defin_bw .bwortsloadeds').attr('data-go','5');
});
$('.body .content .load').fadeOut(250);
});
$(window).scroll(function(){
if($(this).scrollTop() > 389){ $('.hedrGOhE').fadeIn(250);
}else{ $('.hedrGOhE').fadeOut(350); }
});
{/literal}</script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/pub.css"/>
<script type="text/javascript" src="{$tsConfig.url}/js/pub.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/bwort.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/bwts.css" />
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/pubcontents.css">
{include file='includes/main_footer.tpl'}