{include file='includes/main_header.tpl'}	
<div class="admin_i">
<div class="admin_header_i floatL">{include file='modulos/admin_i/menu.tpl'}</div>
<div class="admin_content_i floatl">
{if !$get_.preg || $get_.preg == 'home'}
{include file='modulos/admin_i/presentacion.tpl'}
{elseif $get_.preg == 'control_configs'}
{include file='modulos/admin_i/control_configs.tpl'}
{elseif $get_.preg == 'rangos'}
{include file='modulos/admin_i/rangos.tpl'}
{elseif $get_.preg == 'logros'}
{include file='modulos/admin_i/logros.tpl'}
{elseif $get_.preg == 'usuarios'}
{include file='modulos/admin_i/usuarios.tpl'}
{elseif $get_.preg == 'baneados_usuarios'}
{include file='modulos/admin_i/baneados_usuarios.tpl'}
{elseif $get_.preg == 'estadisticas'}
{include file='modulos/admin_i/estadisticas.tpl'}
{elseif $get_.preg == 'usuarios_estadisticas'}
{include file='modulos/admin_i/usuarios_estadisticas.tpl'}
{elseif $get_.preg == 'denuncias'}
{include file='modulos/admin_i/denuncias.tpl'}
{elseif $get_.preg == 'reportes'}
{include file='modulos/admin_i/reportes.tpl'}
{elseif $get_.preg == 'modactividad'}
{include file='modulos/admin_i/modactividad.tpl'}
{elseif $get_.preg == 'cssEdit'}
{include file='modulos/admin_i/cssEdit.tpl'}
{elseif $get_.preg == 'sqlTester'}s
{* {include file='modulos/admin_i/sqlTester.tpl'} *}
{elseif $get_.preg == 'ads'}
{include file='modulos/admin_i/ads.tpl'}
{elseif $get_.preg == 'tienda'}
{include file='modulos/admin_i/tienda.tpl'}
{/if}
</div>
</div>
{include file='includes/main_footer.tpl'}