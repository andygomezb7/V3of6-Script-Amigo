{include file='includes/main_header.tpl'}

{if $wuser->uid}
{include file='modulos/home_i/loggeado.tpl'}
{else}
{include file='modulos/home_i/visitante.tpl'}
{/if}

{include file='includes/main_footer.tpl'}