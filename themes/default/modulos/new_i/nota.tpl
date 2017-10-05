<div class="cntn_nt_wb">
<div class="lft_cntn_nt floatL">
<div class="nt_nota">
<div class="ttl_nota cont_not hidden">
<h3>{$tsNota.titulo}</h3> <div class="floatR">{if $tsNota.sticky == 1}<a class="qtip" title="Nota fijada"><img src="{$tsConfig.url}/images/icons/star-lit4.png"></a>{/if}</div>
<div class="inf_nota hidden">
<span style="font-size: 12px!important;" class="floatL">
<a class="qtip" title="{$tsNota.date}">{$tsNota.hace|hace}</a> &nbsp; |&nbsp;&nbsp; <a href="{$tsConfig.url}/notas/{$tsNota.wdefined}">{$tsNota.nombre}</a> &nbsp; |&nbsp;&nbsp; <a onclick="window.print();" href="#Imprimir-{$tsNota.id}">Imprimir</a>
</span>
</div>
</div>
<div class="content_nota cont_not hidden">
{if $wuser->admod || $wuser->mod || $tsNota.id_usuario == $wuser->uid}
<div style="margin: 0 0 23px 0;height: 121px;overflow-y: auto;overflow-x: hidden;">
{foreach from=$modactividad.data item=act}
{if $act.data}
<h3>{$act.title}</h3>
<table class="table" width="97%">
<thead>
<tr>
<th>Moderador</th>
<th>Acci&oacute;n</th>
<th>Fecha</th>
</tr>
</thead>
<tbody>
{foreach from=$act.data item=acto}
<tr>
<td><a href="{$tsConfig.url}/{$acto.creador}/" target="_blank">{$acto.creador}</a></td>
<td>{$acto.text} <a href="{$ac.link}">{$acto.ltext}</a></td>
<td>{$acto.date|hace}</td>
</tr>
{/foreach}
</tbody>
</table>
{/if}
{/foreach}
</div>
{/if}

{$tsNota.detalle}
</div>
<div class="dsnone hidden DoR"><div><input type="hidden" value="{$tsNota.id}" name="for"/><input type="hidden" value="{$tsNota.id_categoria}" name="cfor"/></div></div>
<div class="cont_not hidden btnsl" style="border:0;">

{if $tsNota.usuario.puntuo <= 0}<div class="hidden" style="margin: 1px 0 10px 0;">
<div class="nota_puntos">
<span>Dar puntos</span>
{$darpuntos}
</div>
</div>{/if}

<div class="hidden dsNoStas">
<div class="floatL" id="lik_total_{$tsNota.id}"><i class="lsf">good</i> <span>{$tsNota.stats.likes}</span> Me gusta</div>
<div class="floatL" id="dis_total_{$tsNota.id}"><i class="lsf">bad</i> <span>{$tsNota.stats.dislikes}</span> No me gusta</div>
<div class="floatL" id="sg_n_{$tsNota.id}"><i class="lsf">forward</i> <span>{$tsNota.stats.seg}</span> Seguidores</div>
<div class="floatL" id="fv_n_{$tsNota.id}"><i class="lsf">heart</i> <span>{$tsNota.stats.fav}</span> Favoritos</div> 
<div class="floatL" id="fv_n_{$tsNota.id}"><i class="lsf">network</i> <span>{$tsNota.stats.visitas}</span> Visitas</div>
</div>

<div style="margin:5px 0 0 0;">
<a class="bg_green_3d btn color_white floatL lik" {if $tsNota.stats.likesU >= 1}style="border: 1px solid #27470D;" title="Ya votaste"{/if} data-id="{$tsNota.id}"><i class="lsf">good</i> ME GUSTA</a>
<a class="bg_green_3d btn color_white floatL dis" {if $tsNota.stats.dislikesU >= 1}style="border: 1px solid #27470D;" title="Ya votaste"{/if} data-id="{$tsNota.id}"><i class="lsf">bad</i> NO ME GUSTA</a>
<a class="bg_green_3d btn color_white floatL sgnt" {if $tsNota.stats.segU >= 1}style="border: 1px solid #27470D;" title="Ya sigues la nota"{/if} data-id="{$tsNota.id}"><i class="lsf">forward</i> SEGUIR NOTA</a>
<a class="bg_green_3d btn color_white floatL fvnt" {if $tsNota.stats.favU >= 1}style="border: 1px solid #27470D;" title="Ya esta en tus favoritos"{/if} data-id="{$tsNota.id}"><i class="lsf">heart</i> AGREGAR A FAVORITOS</a>
<a onclick="denuncia.nueva('nota', {$tsNota.id}, '{$tsNota.titulo}', '{$tsNota.usuario_nombre}');" class="input_button ibr qtip" title="Denunciar" style="padding: 4px!important;" ><img style="margin: 0px 0px -2px 0px;" src="{$tsConfig.url}/images/icons/denun.png"/></a>
</div>
</div>

<center>
<ins><iframe width="706" height="95" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="{$tsConfig.url}/php/pages/ejects/globalads/?q=1&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg={$tsConfig.url}/notas/"></iframe></ins>
</center>

<div class="clearfix footer_nt">
<div class="cont_not floatL cont_fo_nt">

<div class="pubsLrT DoRe hidden">
<div class="floatL ImG"><img src="{$tsConfig.url}/thumb/img/62/62/?file={$u.w_avatar}"></div>
<div class="floatL dsCoPbs">
	<div id="error_flat" class="red_flat sKFLekErrDoRe dsnone" style="position:relative;"><div style="position:absolute;" onclick="$('.sKFLekErrDoRe').fadeOut(250);">x</div><span></span></div>
<div><textarea class="markItUp"></textarea> <div class="clearfix floatR" style="margin: 6px 0 0 0;"><input type="button" value="Comentar" class="bg_green_3d btn color_white BtNComNt" /></div></div>
</div>
</div>

<div class="pubsLrT hidden CoMntSNw" style="margin: 5px 0 0 0;" data-id='{$tsNota.id}'>
	<center>CARGANDO...</center>
</div>

</div>
</div>
<div class="::xtrscntns_s::dsds">
<div>
<div><div><div></div><div><div></div></div><div><div></div><div><div><div>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/ms_nota.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/bbcode.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/hdr_nt.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_1.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/not_actns.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/markItUp.css" />
<script type="text/javascript" src="{$tsConfig.url}/js/modo/markItUp.js"></script>
<style type="text/css">{literal}
.sddd68ws32wsssl{margin: 0px 0px 0px 5px;font-size: 11px;width: 79%;}
.cntnt_ppos_2556{margin: 0px 0px 5px 0px;padding: 0px 0px 5px 0px;border-bottom: 1px dotted #d1d1d1;}
.cntnt_ppos_2556:last-child{border-bottom: 0;}
{/literal}</style>
</div></div></div></div></div></div>
</div>
</div>
</div>
</div>
<div class="rght_cntnt_nt floatL">

<div class="cont_not">
<h3 class="color_gray" style="font-weight: normal;font-size: 18px;text-transform: uppercase;">{$tsNota.usuario_nombre}</h3>
<div class="hidden" style="margin: 9px 0px 0px 0px;">
<div class="floatL"><img src="{$tsNota.w_avatar}" style="width: 110px;height:110px;"></div><div class="floatL" style="margin: 0 0 0 4px;" class="size11">
  <div class="clearfix hidden"><img class="floatL" src="{$tsConfig.url}/images/static/options/icons/ranks/{$tsNota.permisos.icono}" style="width: 16px;height: 16px;"><span class="floatL" style="margin: 0 0 5px 5px;display: block;">{$tsNota.permisos.name}</span></div>
  <div class="clearfix hidden"><img class="floatL" src="{$tsConfig.url}/images/icons/{$tsNota.usuario_sexo_icon}.png" style="width: 16px;height: 16px;"> <span class="floatL" style="margin: 0 0 5px 5px;display: block;">{$tsNota.usuario_sexo}</span></div>
  <div class="clearfix hidden"><img class="floatL" src="{$tsConfig.url}/images/flags/{$tsNota.pai.p_img}.png"> <span class="floatL" style="margin: 0 0 5px 5px;display: block;">{$tsNota.pais}</span></div>
</div>
</div>
</div>

{if $wuser->admod || $wuser->mod}<div class="cont_not">
<h3>Opciones de {if $wuser->admod}Administrador{elseif $wuser->mod}Moderador{/if}</h3>
<div style="margin: 9px 0px 0px 0px;">
<a class="input_button btn" href="{$tsConfig.url}/notas/editar/{$tsNota.id}/" style="margin: 0 5px 0 0;">Editar nota</a>
<a class="input_button btn born qtip" data-obj="{$tsNota.id}" top="{if $tsNota.estado != 1}1{else}2{/if}" title="{if $tsNota.estado != 1}Activar{else}Borrar{/if}">{if $tsNota.estado != 1}Activar{else}Borrar{/if}</a>
</div>
</div>{/if}

<div class="cont_not">
<h3>Notas destacadas</h3>
<div style="margin: 9px 0px 0px 0px;">
{foreach from=$gadgets.destacadas item=p}
<div class="hidden p_{$p.id} cntnt_ppos_2556"><div class="floatL"><img src="{$tsConfig.url}/thumb/img/38/38/?file={$p.banner}" width="38" height="38"></div><div class="floatL sddd68ws32wsssl"><h4><a href="{$tsConfig.direccion_url}/notas/{$p.wdefined}/{$p.id}/{$p.post_wdefined}.html">{$p.titulo}</a></h4><span>{$p.hace|hace}</span></div></div>
{/foreach}
</div>
</div>

<ins><iframe width="240" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="{$tsConfig.url}/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg={$tsConfig.url}/notas/apfav"></iframe></ins>

</div>
</div>