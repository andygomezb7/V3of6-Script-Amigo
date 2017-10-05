{include file='includes/main_header.tpl'}	
<div class="admin_i">
<div class="admin_header_i floatL">{include file='modulos/mod_i/menu.tpl'}</div>
<div class="admin_content_i floatl">
{if !$get_.preg || $get_.preg == 'home'}
{include file='modulos/mod_i/presentacion.tpl'}
{elseif $get_.preg == 'rangos'}
{include file='modulos/mod_i/rangos.tpl'}
{elseif $get_.preg == 'logros'}
{include file='modulos/mod_i/logros.tpl'}
{elseif $get_.preg == 'usuarios'}
{include file='modulos/mod_i/usuarios.tpl'}
{elseif $get_.preg == 'baneados_usuarios'}
{include file='modulos/mod_i/baneados_usuarios.tpl'}
{elseif $get_.preg == 'estadisticas'}
{include file='modulos/mod_i/estadisticas.tpl'}
{elseif $get_.preg == 'usuarios_estadisticas'}
{include file='modulos/mod_i/usuarios_estadisticas.tpl'}
{/if}
</div>
</div>
{include file='includes/main_footer.tpl'}