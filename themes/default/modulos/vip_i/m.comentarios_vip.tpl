<div id="coment-vip">
  <h3>&Uacute;ltimos Comentarios</h3>
  <ul>
{foreach from=$tsComvip_p key=i item=c}
<li {if $i==6}style="border-bottom:none;"{/if}><a href="{$tsConfig.url}/{$c.usuario_nombre}"><img class="hovercard" uid="{$c.usuario_id}" src="{$c.w_avatar}"></img></a>
<span style="color:#{$c.r_color};">{$c.usuario_nombre}</span><br/>
<div class="title-com"><a alt="{$c.titulo}" title="{$c.titulo}" target="_self"  href="{$tsConfig.url}/notas/{$c.wdefined}/{$c.id}/{$c.post_wdefined}.html#comentarios-abajo">{$c.titulo|truncate:45}</a></div>
</li>
{/foreach}
</ul>
</div>