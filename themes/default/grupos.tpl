{include file='includes/main_header.tpl'}
<div class="grupos_i hidden">
	<div class="grupos_i_content hidden">
{if $get_.preg == 'home' || !$get_.preg}
{include file='modulos/grupos_i/menu.tpl'}
{include file='modulos/grupos_i/home.tpl'}
{elseif $get_.preg == 'sug'}
{include file='modulos/grupos_i/menu.tpl'}
{include file='modulos/grupos_i/sug.tpl'}
{elseif $get_.preg == 'amg'}
{include file='modulos/grupos_i/menu.tpl'}
{include file='modulos/grupos_i/amg.tpl'}
{elseif $get_.preg == 'local'}
{include file='modulos/grupos_i/menu.tpl'}
{include file='modulos/grupos_i/local.tpl'}
{elseif $get_.preg == 'misgrupos'}
{include file='modulos/grupos_i/menu.tpl'}
{include file='modulos/grupos_i/misgrupos.tpl'}
{elseif $get_.preg == 'perfil' || $get_.preg == 'editar'}
{include file='modulos/grupos_i/perfil.tpl'}
{/if}
    </div>
</div>
{include file='includes/main_footer.tpl'}