

<div id="top-p-vip">
<h3>Top Posts Vip</h3>
<ul>
{foreach from=$tsToppv_p key=i item=t}
<li><a alt="{$t.titulo}" title="{$t.titulo}" target="_self"  href="{$tsConfig.url}/notas/{$t.wdefined}/{$t.id}/{$t.post_wdefined}.html">{$t.titulo|truncate:45}</a><br/>
<span>Por: <a href="{$tsConfig.url}/{$t.usuario_nombre}" class="qtip" title="{$t.usuario_nombre}" style="color:#{$t.r_color};font-weight:300;">{$t.usuario_nombre}</a> &raquo; Comentarios: {$t.post_comments}  &raquo; Visitas:{$t.visitas}</span>
</li>
{/foreach}
</ul>
</div>