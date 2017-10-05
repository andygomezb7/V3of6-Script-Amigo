<div id="top-u-vip">
<h3>Top Usuarios Vip</h3>
<ul>
{foreach from=$tsTopuv_p key=i item=u}
<li {if $i==6}style="border-bottom:none;"{/if}><a href="{$tsConfig.url}/{$u.usuario_nombre}/"><img class="qtop" uid="{$u.usuario_nombre}" src="{$u.w_avatar}"></img></a>
<span><a style="color:#{$u.r_color};text-decoration:none;" href="{$tsConfig.url}/{$u.usuario_nombre}/">{$u.usuario_nombre}</a><br/>
{$u.r_name}
</span>
<div class="t-u-vip"><b>{if $u.total<10}0{/if}{if $u.total<100}0{/if}</b>{$u.total} Puntos.<br/>
<b>{if $u.cant<10}0{/if}{if $u.cant<100}0{/if}</b>{$u.cant} Posts.</div></li>
{/foreach}
</ul>
</div>