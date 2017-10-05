{include file='includes/main_header.tpl'}
<div class="hidden">
<div class="floatL" style="width: 71%;margin: 0 0 0 16px;">
{include file='ajax_files/bworts/load.tpl'}
</div>


<div class="floatR" style="width: 26%;margin: 0 0 0 9px;">
<div id="gcont"><div class="tgcont" style="padding: 3px 7px 0px 7px !important;">Hoy: {$u.dia} / {$u.mes} / {$u.ano}</div><br></div>
<div id="gcont">
<div class="tgcont">Sugerencias</div>
{foreach from=$u.sugerenciasu item=s}
<div style="width: 98%; overflow: hidden; margin-bottom: 3px;">
<a href="{$tsConfig.direccion_url}/{$s.usuario_nombre}" target="_blank" style="float: left;"><img src="{if $s.w_avatar == NULL}{$tsConfig.direccion_url}/images/avatar/group.png{else}{$s.w_avatar}{/if}" style="width: 40px; height: 40px; float: left;"/></a>
<div style="margin: 0px 0px 0px 8px;float: left;">
<a href="{$tsConfig.direccion_url}/{$s.usuario_nombre}" target="_blank"><span>{if $s.name_original == NULL && $s.ap_original}{$s.usuario_nombre}{else}{$s.name_original} {$s.ap_original} ({$s.usuario_nombre}){/if}</span></a>
</div>
</div>
{/foreach}
</div>
<div class="::sttr" role="sttr">
<div>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/bwort.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/pubcontents.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/bwts.css" />
<style type="text/css">{literal}
#gcont{overflow: hidden;vertical-align: top;background-color: rgb(255, 255, 255);border-width: 1px 1px 2px;border-style: solid;border-color: rgb(216, 216, 216);background-position: initial initial;background-repeat: initial;initial;-webkit-border-radius: 2px;border-radius: 2px;margin: 22px 4px 4px 4px;padding: 5px 5px 15px 5px;}
#gcont .tgcont{font: 100 15px arial,sans-serif;padding: 1px 5px 13px 6px;}
{/literal}</style>
</div>
</div>
</div>

</div>
{include file='includes/main_footer.tpl'}