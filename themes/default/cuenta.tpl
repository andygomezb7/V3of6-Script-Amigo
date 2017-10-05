{include file='includes/main_header.tpl'}
<div class="t_cuenta">
<div class="t_cuenta_cont hidden">
<div class="t_cuenta_l">
<div class="t_cuenta_header">
<div class="title hidden"><h2>Mi Foto</h2></div>
<div class="box"><img src="{$u.w_avatar}" class="cursorP" onclick="$('.msntrCmbAVtCunt').toggle();">
<ul id="SDF65Sf19" class="msntrCmbAVtCunt dsnone" style="margin: 0px 0 0 0px;">
<div class="tool"></div><div id="prn">
<li class="first"><a class="active" onclick="modalsPrfl.cmbrAvtrMdl();">Importar imagen</a></li>
<li><a class="active">Seleccionar imagen</a></li>
</div></ul>
</div>
<div class="title hidden"><h2>Estado</h2></div>
<div class="boxTwo">
<div class="clearfix"><div class="l floatL color_gray" title="Tipo de cuenta">Tipo</div><div class="floatR r">{if $u.user_vip == 1}V.I.P{else}Normal{/if}</div></div>
<div class="clearfix"><div class="l floatL color_gray" title="Ultima actividad">Actividad</div>
<div class="floatR r" title="{$u.active_ult|date_format:"%I:%M %p"}">{$u.active_ult|date_format:"%D"}</div></div>
<div class="clearfix">
<div class="l floatL color_gray" title="Dinero">Worts</div>
<div class="floatR r" title="Cantidad de Worts">${$u.u_bworts}.00</div></div>
<div class="clearfix">
<div class="l floatL color_gray" title="Perfil verificado">Verficado</div>
<div class="floatR r" title="{if $u.verifi == 1}Verificado{else}No verificado{/if}">{if $u.verifi == 1}<div style="background:green;width:16px;height:16px;border-radius:3px;"></div>{else}<div style="background:gray;width:16px;height:16px;border-radius:3px;"></div>{/if}</div></div>
</div>
</div>
</div>

<div class="t_cuenta_r">
{include file='modulos/cuenta_i/menu.tpl'}
<div class="t_cuenta_mod">
<div id="error_flat" class="dsnone"></div>
<div class="barloading dsnone"><div class="bar animate_1s" style="width:0%;"></div></div>
{if $get_.pref == 'Configuración' || $get_.pref == 'configuracion' || $get_.pref == 'configuracion' || !$get_.pref}
{include file='modulos/cuenta_i/config.tpl'}
{elseif $get_.pref == 'Privacidad' || $get_.pref == 'privacidad'}
{include file='modulos/cuenta_i/privacidad.tpl'}
{elseif $get_.pref == 'Notificaciones' || $get_.pref == 'notificaciones'}
{include file='modulos/cuenta_i/Notificaciones.tpl'}
{elseif $get_.pref == 'Referidos' || $get_.pref == 'referidos'}
{include file='modulos/cuenta_i/referidos.tpl'}
{elseif $get_.pref == 'Worts' || $get_.pref == 'worts'}
{include file='modulos/cuenta_i/worts.tpl'}
{elseif $get_.pref == 'Estadísticas' || $get_.pref == 'estadísticas' || $get_.pref == 'Estadisticas' || $get_.pref == 'estatisticas'}
{include file='modulos/cuenta_i/estatics.tpl'}
{/if}
</div>
</div>
<div class="::sttryl" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_1.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/edt_profile.js"></script>
</div>
</div>
</div>
</div>
{include file='includes/main_footer.tpl'}