<div class="lggd">
<div class="leftlggd dsnone"></div>
<div class="conts">

<div class="cntrlggd">
<div class="gcont" style="margin-top: 10px;">
<div class="gcontent">
{include file='modulos/home_i/publicador.tpl'}
</div>
</div>
<div><input type="hidden" id="PgHScrlInf" value="2"></div>
<div class="contbwh">
</div>

</div>

<div class="rghtlggd">

<div class="gcont">
<div class="gtitle">Secciones en {$tsConfig.name}</div>
<div class="gcontent">
<div style="padding:8px 5px;"><a href="{$tsConfig.url}/notas/">Noticias y notas</a></div>
<div style="padding:8px 5px;"><a href="{$tsConfig.url}/soporte/">Foros de soporte</a></div>
<div style="padding:8px 5px;"><a href="{$tsConfig.url}/foro/">Foros interactivos</a></div>
<div style="padding:8px 5px;"><a href="{$tsConfig.url}/grupos/">Grupos sociales</a></div>
</div>
</div>

{if $relacv}
<div class="gcont">
<div class="gtitle">Te recordamos</div>
<div class="gcontent">
{foreach from=$relacv item=u}
<div class="sKddfT hidden" style="border-bottom: 1px solid #BEBEBE;padding: 0px 0px 6px 0px;margin-bottom: 7px;">
<div class="img floatL"><img src="{$u.w_avatar}" style="width: 48px;height: 48px;"></div>
<div class="info floatL" style="margin: 0px 0px 0px 4px;width: 72%;">
<div class="clearfix hidden" style="font-size: 12px;margin: 0px 0px 5px 0px;">
<a href="{$tsConfig.url}/{$u.usuario_nombre}">{if $u.name_original && $u.ap_original}{$u.name_original} {$u.ap_original}{else}{$u.usuario_nombre}{/if}</a>
</div>
<div class="clearfix hidden">
{if $u.sigo <= 0}
<a class="follow floatL input_button hidden noactive" style="padding: 7px 6px;" id="f{$u.usuario_id}" fi-source="{$u.usuario_id}">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;">Seguir</div>
</a>
{else}
<a class="follow floatL input_button hidden active" style="padding: 7px 6px;" id="f{$u.usuario_id}" fi-source="{$u.usuario_id}">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;"><span class="sp1">Siguiendo</span> <span class="sp2">Dejar de seguir</span></div>
</a>
{/if}
</div>
</div>
</div>
{/foreach}
</div>
</div>
{/if}

<div class="gcont">
<div class="gtitle">Anuncios</div>
<div class="gcontent"></div>
</div>

</div>
</div>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/pub.css"/>
<div class="cmpltd"><span><input type="hidden" name="ssome" value="1" /></span></div>
<script type="text/javascript" src="{$tsConfig.url}/js/pub.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/bwort.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/bwts.css" />
<script type="text/javascript">
$(function(){
$('.contbwh').html('<div><center><img title="Cargando..." class="qtip" src="{$tsConfig.url}/images/static/media/icons/loading/lw-2.gif" /></center></div>');
$.post(global_data.url+'/ajax/bwort-load.php', function(h){ $('.contbwh').html(h); });
});
</script>
</div>