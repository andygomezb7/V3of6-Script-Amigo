<ul class="wrapper_not">
{foreach from=$tsPostHome.todas item=p key=i}
{if $p.id or $p.titulo != '['}
<li class="ntt {if $i%3==0 && $i != 0}port{/if}" {if $p.estado != 1}style="background:rgba(255, 0, 0, 0.22);"{/if}>
<div class="wrppr_nt">
{if $i%3==0 && $i != 0}<div class="bnnr_nt floatR"><img src="{$tsConfig.url}/thumb/img/256/169/?file={$p.banner}"></div>{else}<div class="bnnr_nt floatL"><img src="{$tsConfig.url}/thumb/img/82/82/?file={$p.banner}"></div>{/if}
<div class="bdy_nt zoom">
<div class="bdy_wrppr_nt">
<h3><a href="{$tsConfig.direccion_url}/notas/{$p.wdefined}/{$p.id}/{$p.post_wdefined}.html">{$p.titulo}</a></h3>
<p class="smmry_nt hidden">{$p.detalle|truncate:210}</p>
</div>
<div class="atrbtns_nt"><span>{$p.nombre}</span></div>
</div>
<div class="sldr_nt">
<button class="Fav_nt qtip fvnt" data-id="{$p.id}" title="Favoritos"><div class="icons i16"></div></button>
{if $wuser->admod || $wuser->mod}<button class="Fav_nt qtip fijn" data-obj="{$p.id}" top="{if $p.sticky == 1}2{else}1{/if}" title="Fijar"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt qtip born" data-obj="{$p.id}" top="{if $p.estado != 1}1{else}2{/if}" title="{if $p.estado != 1}Activar{else}Borrar{/if}"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button>{/if}
</div>
</div>
</li>
{/if}
{/foreach}
</ul>
<div class="::stras:_:_stttrs">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/temas/notas_2.css">
</div>