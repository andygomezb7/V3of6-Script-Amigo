{include file='includes/main_header.tpl'}
<div class="aula_con">
<div class="aula_con_tent">
{if $aula.register >= 1}
{if $get_.preg == 'profile'}
{if $estable >= 1}{include file='modulos/aula_i/establecimiento.tpl'}{else}{include file='modulos/aula_i/profile.tpl'}{/if}
{elseif $get_.preg == 'class'}
{include file='modulos/aula_i/class.tpl'}
{else}
{include file='modulos/aula_i/home_logged.tpl'}
{/if}
{else}
{include file='modulos/aula_i/home_unlogged.tpl'}
{/if}
</div>
</div>
{include file='includes/main_footer.tpl'}