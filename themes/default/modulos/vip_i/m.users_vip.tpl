
<ul>
{foreach from=$tsUservip_u key=i item=u}
<li><a href="{$tsConfig.direccion_url}/{$r.usuario_nombre}" style="color:#{$u.r_color};margin:2px 5px 2px 5px;text-decoration:none;display:block;" class="qtip hidden" title="{$u.usuario_nombre}"><img src="{if $u.w_avatar == NULL}{$tsConfig.url}/images/avatar/group.png{else}{$u.w_avatar}{/if}" style="display:block;"/></a></li>
{/foreach}
</ul>