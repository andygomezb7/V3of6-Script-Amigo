{include file='includes/main_header.tpl'}
{include file='modulos/codigo_i/menu-left.tpl'}
<div class="cdg-of-content-one floatL">
{if $action == 'prof'}
{include file='modulos/codigo_i/repositorio.tpl'}
{elseif $action == 'profarc' && $codepage}
{include file='modulos/codigo_i/archivo.tpl'}
{elseif $action && $codepage == 'page'}
{include file='modulos/codigo_i/pagina.tpl'}
{else}
<center><img src="{$tsConfig.url}/images/static/options/i/code_white.png"><br />
	<div class="color_white size11">Pronto te mostraremos estadisticas e información sobre tu cuenta en Wortit code, Mientras puedes seguir usando el sistema como siempre.</div><br />
<a class="bg_green_3d btn color_white" onclick="reco_code_h.repos();">Hacer el recorido</a>
</center>
<div class="::sttr" role="sttr">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/ttr/code_h.js"></script>
</div>
{/if}
{include file='modulos/codigo_i/footer.tpl'}
{include file='includes/main_footer.tpl'}