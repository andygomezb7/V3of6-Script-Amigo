<div class="grupos_i_co">
<div class="tO"><h3>Grupos de tus amigos</h3></div>
<div class="grupos_table">
{foreach from=$grupos.amigos item=s}
<div class="grupo_c hidden">
<div class="grupo_c_img floatL">
{foreach from=$s.members item=u}
{if $u.usuario_id}
<img src="{$tsConfig.url}/thumb/img/56/56/?file={if $u.w_avatar}{$u.w_avatar}{else}{$tsConfig.url}/images/avatar/group2.png{/if}" class="floatL" uid="{$u.usuario_id}" title="{$u.usuario_nombre}">
{/if}
{foreach from=$u.numero item=h}
<img src="{$tsConfig.url}/thumb/img/56/56/?file={$tsConfig.url}/images/avatar/group2.png" class="floatL" sid="{$h}" title="{$u.usuario_nombre}">
{/foreach}
{/foreach}
</div>

<div class="grupo_c_cont floatL">
<div class="grupo_c_tit"><a href="{$tsConfig.direccion_url}/grupos/{$s.wdefined}" target="_blank">{$s.nombre}</a></div>
<div class="grupo_c_tcon">
<span>Grupo cerrado &nbsp; <span class="color_gray size11">Creador por <a href="{$tsConfig.url}/{$s.usuario_nombre}/" target="_blank" title="Ir al perfil de {$s.usuario_nombre}">{$s.usuario_nombre}</a></span></span>
{if $s.descripcion}<br /><span style="color: #9197a3;
font-size: 12px;"><i class="i_info"></i> &nbsp; {$s.descripcion|truncate:255}</span>{/if}
<br />{if $s.nunumero == 0}<span>Ningún miembro aun.</span>{elseif $s.nunumero == 1}<span>{$s.nunumero} miembro</span>{else}<span>{$s.nunumero} miembros</span>{/if}<br />
{if $s.user1.usuario_id}<span><a href="{$tsConfig.url}/{$s.user1.usuario_nombre}">{$s.user1.usuario_nombre}</a> 
{if $s.users >= 1}
{if $s.users == 1}y <a class="vctip" title="{foreach from=$s.usersarray item=g}{if $g.usuario_nombre != $s.user1.usuario_nombre}{$g.usuario_nombre}<br />{/if}{/foreach}">{$s.users} conocido mas es miembro</a>{else}<a class="vctip" title="{foreach from=$s.usersarray item=g}{if $g.usuario_nombre != $s.user1.usuario_nombre}{$g.usuario_nombre}<br />{/if}{/foreach}">y {$s.users} conocidos mas son miembros</a>{/if}
{else}
es miembro.
{/if}</span>
{/if}
</div>
</div>
</div>
{/foreach}
</div>
</div>