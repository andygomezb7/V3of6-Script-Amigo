<div class="favson">
<div class="titlefav"><h2>Mis favoritos</h2></div>
<div style="width:67%;" class="floatL"><table class="table floatL" width="100%" style="margin: 0 0 0 6px;border-radius: 0;">
<thead>
<th>Nombre</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$favs item=f}
<tr id="{$f.favn_id}{$f.favn_id}_L">
<td><a href="{$tsConfig.url}/notas/{$f.wdefined}/{$f.id}/{$f.post_wdefined}.html">{$f.titulo}</a></td>
<td><a onclick="favn.det({$f.favn_id}, {$f.favn_nota});">Borrar</a> &nbsp; <a href="{$tsConfig.url}/notas/{$f.wdefined}/{$f.id}/{$f.post_wdefined}.html">Ver</a></td>
</tr>
{/foreach}
</tbody>
</table>
<div class="paginas">{$favs.pags}</div>
</div>
<div class="floatL" style="width: 31%;margin: 0 0 0 6px;">
<div class="hidden">
<ins><iframe width="306" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="{$tsConfig.url}/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg={$tsConfig.url}/notas/apfav"></iframe></ins>
<ins><iframe width="306" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="{$tsConfig.url}/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg={$tsConfig.url}/notas/apfav"></iframe></ins>
</div>
</div>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_1.css">
	<script type="text/javascript" src="{$tsConfig.url}/js/modo/fan_n.js"></script>
<style type="text/css">{literal}
.titlefav{margin: 0 6px 12px 3px;padding: 0 0 6px 0;border-bottom: 3px solid #4093F1;}
.titlefav h2{font-size: 20px;font-weight: normal;color: #0056B8;margin: 0 0 0 12px;}
{/literal}</style>
</div>
</div>
</div>