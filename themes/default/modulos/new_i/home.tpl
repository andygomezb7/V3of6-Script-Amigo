<div class="home hidden">
<div class="lftnts floatL">
<div class="cats_home">
<ul>
{foreach from=$catshome item=c}
<li catid="{$c.id_categoria}"><i class="width16 floatL rmrg100" style="background:url({$tsConfig.url}/images/static/options/icons/cats/{$c.cat_icono}) no-repeat;"></i> <a href="{$tsConfig.url}/notas/{$c.wdefined}/">{$c.nombre}</a></li>
{/foreach}
</ul>
</div>
</div>
<div class="cntrnts floatL notas">
{include file='modulos/new_i/temas/2.tpl'}
<div class="pags">{$tsPostHome.todas.pages}</div>
</div>
<div class="rghtnts floatL">
<div class="hidden clearfix" style="margin: 0 0 8px 0;">
	<h3 class="color_gray" style="font-weight: normal;font-size: 15px;padding: 0 0 7px 0;border-bottom: 1px solid #CCCCCC;">Notas importantes</h3>
<div class="notas">
<ul class="wrapper_not">
{foreach from=$tsPostHome.Ttodas item=p key=i}
{if $p.sticky == 1}
<li class="ntt Fijs" style="padding: 7px 4px;{if $p.estado != 1}background:rgba(255, 0, 0, 0.22);{/if}">
<div class="hidden clearfix wrppr_nt">
  <div class="floatL" style="width: 26%;"><img src="{$tsConfig.url}/thumb/img/82/82/?file={$p.banner}" style="width: 100%;float: left;"></div>
<div class="floatL" style="width: 63%;margin: 0 0 0 4px;"><div class="hidden clearfix"><a href="{$tsConfig.direccion_url}/notas/{$p.wdefined}/{$p.id}/{$p.post_wdefined}.html">{$p.titulo}</a></div>
<span class="size11 color_gray clearfix">{$p.nombre}</span></div>
<div class="sldr_nt">
<button class="Fav_nt etip fvnt" data-id="{$p.id}" title="Favoritos"><div class="icons i16"></div></button>
{if $wuser->admod || $wuser->mod}<button class="Fav_nt etip fijn" data-obj="{$p.id}" top="{if $p.sticky == 1}2{else}1{/if}" title="DesFijar"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt etip born" data-obj="{$p.id}" top="{if $p.estado != 1}1{else}2{/if}" title="{if $p.estado != 1}Activar{else}Borrar{/if}"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button>{/if}
</div>
</div>
</li>
{/if}
{/foreach}
</ul>
</div>
</div>
<ins><iframe width="306" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="{$tsConfig.url}/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg={$tsConfig.url}/notas/"></iframe></ins>
</div>
<div class="dsnone">
	<script type="text/javascript" src="{$tsConfig.url}/js/modo/not_actns.js"></script>
<style type="text/css">{literal}
.home{}
.home .lftnts{width: 15.2%;margin: 0px 0px 0px 11px;}
.home .lftnts .cats_home{}
.home .lftnts .cats_home ul li{margin: 11px 0px;}
.home .cntrnts{width: 51%;margin: 0px 4px 0px 4px;}
.home .rghtnts{width: 30.9%;margin: 0px 0px 0px 9px;}
.mrgnleft{margin: 0px 0px 0px 6px;}
.rmrg100{margin: 0px 9px 0px 0px;}
{/literal}</style>
</div>
</div>