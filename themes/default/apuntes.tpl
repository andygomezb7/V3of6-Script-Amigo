{include file='includes/main_header.tpl'}
<div class="apunts_cont">
{include file='modulos/apuntes_i/menu.tpl'}
{if $get_.preg == 'mi' || !$get_.preg}
{include file='modulos/apuntes_i/misnotas.tpl'}
{elseif $get_.preg == 'fav'}
Mis favoritos
{/if}
</div>
{include file='includes/main_footer.tpl'}