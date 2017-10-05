{include file='includes/main_header.tpl'}
<div class="hmnts">
{include file='modulos/new_i/menu.tpl'}
{if $apgets == 'home' || !$apgets || $apgets == 'cat'}
{include file='modulos/new_i/home.tpl'}
{elseif $apgets == 'nota'}
{include file='modulos/new_i/nota.tpl'}
{elseif $apgets == 'agregar' || $apgets == 'editar'}
{include file='modulos/new_i/agregar.tpl'}
{elseif $apgets == 'fav'}
{include file='modulos/new_i/favs.tpl'}
{else}
Nada por aqui...
{/if}
</div>
{include file='includes/main_footer.tpl'}