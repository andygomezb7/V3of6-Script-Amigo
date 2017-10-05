{include file='includes/main_header.tpl'}
<div class="adsh">
<div class="adscontent">
{include file='modulos/ads_i/menu.tpl'}
{if $wuser->uid or !$action && !$adspage or $adspage == 'home'}
{if $adspage == 'crear' && $action == 'anun'}
{include file='modulos/ads_i/pages/crear.tpl'}
{elseif $adspage == 'crear' && $action == 'campaña'}
{include file='modulos/ads_i/pages/crear.tpl'}
{elseif $adspage == 'view' && $action == 'anuncios' || !$action && !$adspage}
{include file='modulos/ads_i/pages/my.tpl'}
{elseif $adspage == 'blog' && $action == 'ver'}
{include file='modulos/ads_i/pages/blog.tpl'}
{elseif $adspage && $action == 'informe'}
{include file='modulos/ads_i/pages/adsmypage.tpl'}
{/if}
{else}
{include file='modulos/altoahi.tpl'}
{/if}
</div>
</div>
{include file='includes/main_footer.tpl'}