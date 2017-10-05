{include file='includes/main_header.tpl'}
{if $_SESSION}
<div id="countpagesop" style="display:none;">
<ul>
<li><a href="{$tsConfig.url}/editar/cuenta">Cuenta</a></li>
<li><a href="{$tsConfig.url}/editar/privacidad">Privacidad</a></li>
<li><a href="{$tsConfig.url}/editar/seguridad">Seguridad</a></li>
</ul>
</div>
{/if}

<div id="contentsop">
<header>
<div id="buttons" class="floatL">
<a href="{$tsConfig.url}/soporte/?act=home">Inicio</a>
<a href="{$tsConfig.url}/soporte/?act=nuevo">Crear nuevo proyecto</a>
{if $_SESSION}<a href="{$tsConfig.url}/soporte/?act=mi">Ver mis proyectos</a>{/if}
</div>
<div class="floatR">
{if $_SESSION}
<a onclick="menOpcion.openMSghE();">{$u.name_original} {$u.ap_original}</a>
<a onclick="{literal}if($('#countpagesop').css('display') == 'none'){ $('#countpagesop').fadeIn(250); }else{ $('#countpagesop').fadeOut(250); }{/literal}">Cuenta</a></div>
{else}<a href="{$tsConfig.url}/">Iniciar Sesión</a><a href="{$tsConfig.url}/registro/">Registrarme</a>{/if}
</header>

<section>
{if $tsAct == 'home' or !$tsAct && !$pagetgo.sf_seo}
{include file='modulos/soporte_i/home.tpl'}
{elseif $tsAct == 'mi'}
{include file='modulos/soporte_i/mi.tpl'}
{elseif $tsAct == 'nuevo'}
{include file='modulos/soporte_i/nuevo.tpl'}
{elseif $pagetgo.sf_seo && $soportep}
{include file='modulos/soporte_i/profile.tpl'}
{else}
{if !$tsAct && !$tsAction && !$aget}
Nada nada...
{/if}
</div>
{/if}
</section>

<footer>
<!-----paepaes: {$paepaes} - tsAction: {$tsAction} - action: {$tsAct} -  aget:{$aget}---------->
</footer>
</div>

</div>
</div>

{include file='includes/main_footer.tpl'}