{foreach from=$tsPostHome.todas item=p key=i}
{if $p.id}
<div id="elementop" class="hidden">
<div class="content_elemtp floatL">
<div class="cotn{if $p.visitas >= 100} resources{/if}{if $p.visitas <= 0 or !$p.visitas} rds{/if}{if $p.visitas >= 10} norm{/if}"><div class="sources"><span>{if $p.visitas}{$p.visitas}{else}0{/if}</span></div> <div class="ttlds">Visitas</div></div>
<div class="cotn{if $p.rank >= 100} resources{/if}{if $p.rank <= 0 or !$p.rank} rds{/if}{if $p.rank >= 10} norm{/if}"><div class="sources"><span>{if $p.rank}{$p.rank}{else}0{/if}</span></div> <div class="ttlds">Rank</div></div>
</div>
<div class="cont_elemtp floatL">
<h3><a href="{$tsConfig.direccion_url}/notas/{$p.wdefined}/{$p.id}/{$p.post_wdefined}.html">{$p.titulo}</a></h3>
<div class="xtrainfo hidden">
<div class="cat_elemtp floatL"><span>{$p.nombre}</span></div>
{foreach from=$p.tag_ss item=t key=i}
{if $i+1 < 4}
<div class="cat_elemtp floatL"><span>{$t}</span></div>
{/if}
{/foreach}
<div class="info_elemtp floatR">{$p.hace|hace} <a href="{$tsConfig.url}/{$p.usuario_nombre}/">{$p.usuario_nombre}</a></div></div>
</div>
</div>
{/if}
{/foreach}
<div class="::stras:_:_stttrs">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/temas/notas_1.css">
</div>