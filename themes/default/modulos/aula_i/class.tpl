<div class="aul_cls_hrd">
<div class="aul_cls_cnt">
<div class="aul_cls_ttl"><b>Clase</b> {$tsInfo.aul_kind_name}
  <div class="floatR" style="margin: -7px -6px 0 0;">
  {if $miembro >= 1}
  <a class="input_button hidden">
  {else}
  <a class="adfoul input_button hidden" data-do="{$tsInfo.aul_kin_id}" data-ko="3">
  {/if}
  <div class="load floatL dsnone"></div>
  {if $miembro >= 1}<div class="adfo1 floatL" style="display: block;">Soy miembro</div>{else}<div class="adfo1 floatL" style="display: block;">Unirme</div>{/if}
  </a>
  </div>
</div>
<div class="aul_cls_cnns">
<div class="aul_cls_hardr">

<div class="aul_co_d" style="width: 73%;">
<div class="aul_co_d_t">Chat</div>
<div class="aul_co_d_c" style="height: 90%;width: 100%;">{if $iseXcht >= 1 && $iseXcht}
<iframe frameborder="0" seamless="seamless" scrolling="no" width="100%" height="100%" src="{$tsConfig.url}/int/chat/ver-{$datofedkkfto.u_c_id}/?dkKlxL=xKoLEk1RL1xE2Fl&dkKlxLH=213px" style="height: 100%;border: 0;"></iframe>
{else}<center><a class="btn_green btn color_white gNrChtGO" data-o="{$tsInfo.aul_kin_id}">Generar chat</a></center>{/if}</div>
</div>

{if $IsaDM == 1}
<div class="aul_co_d" style="width: 23%;margin: 5px 0px 5px 6px;">
<div class="aul_co_d_t">Solicitudes</div>
<div class="aul_co_d_c solicit_class">
	{if $solicit}
{foreach from=$solicit item=c}
<li class="hidden" id="reg_{$c.aul_mem_id}_mem" style="padding: 5px 0px;border-bottom: 1px solid #DDDDDD;">
	<div class="clearfix dsnone" id="error_flat"></div>
<div class="floatL"><img src="{$c.w_avatar}" style="width:32px;height:32px;"></div>
<div class="floatL" style="display: inline-block;width: 82%;">
<div class="floatL" style="margin: 0px 7px 1px 4px;">{$c.usuario_nombre}
<div class="size11 color_gray">{$c.aul_mem_hace|hace}</div></div>
<div class="list_acep dodpetead floatR">
<a class="qtip" title="Aceptar" data-res="1" data-o="{$c.aul_mem_id}" data-y="1"><i class="lsf">check</i></a>
<a class="qtip" title="Rechazar" data-res="2" data-o="{$c.aul_mem_id}" data-y="1"><i class="lsf">minus</i></a></div>
</div>
</li>
{/foreach}
{else}<div id="error_flat">No hay solicitudes aún.</div>{/if}
</div>
</div>
{else}
<div class="aul_co_d" style="width: 23%;margin: 5px 0px 5px 6px;">
<div class="aul_co_d_t">Intereses</div>
<div class="aul_co_d_c solicit_class">
<div id="error_flat">Te puede interesar esto.</div>
</div>
</div>
{/if}

</div>
<div class="aul_cls_footr">
<div class="aul_co_d" style="width: 76%;margin: 5px 5px 5px 6px;">
<div class="aul_co_d_t">Miembros de la clase</div>
<div class="aul_co_d_c" style="overflow-y:auto;overflow-x:hidden;">
{if $memebersultclas}
{foreach from=$memebersultclas item=au key=aui}
{if $aui < 12}<div class="clearfix hidden">
<div class="floatL"><img src="{$tsConfig.url}/thumb/img/64/64/?file={$au.w_avatar}" style="width: 64px;height: 64px;"></div>
<div class="floatL" style="margin: 0 0 0 8px;">
<div style="margin: 4px 0 0 0;"><a href="{$tsConfig.url}/{$au.usuario_nombre}/" {if $au.usuario_id == $tsInfo.aul_kind_user}title="Creador de la clase"{/if}><b style="font-size: 16px;{if $au.usuario_id == $tsInfo.aul_kind_user}color:red;{/if}">@{$au.usuario_nombre}</b></a></div>
<div class="color_gray size11">{$au.aul_mem_hace|hace}</div></div>
</div>{else}<div style="margin:0 0 0 4px;"><a href="{$tsConfig.url}/{$au.usuario_nombre}/" class="qtip" title="Se unio: {$au.aul_mem_hace|hace}{if $au.usuario_id == $tsInfo.aul_kind_user} Y es el creador de la clase{/if}"><b style="font-size: 16px;{if $au.usuario_id == $tsInfo.aul_kind_user}color:red;{/if}">@{$au.usuario_nombre}</b></a></div>{/if}
{/foreach}
{else}<div id="error_flat">No hay miembros aún.</div>{/if}
</div>
</div>

<div class="aul_streaming_prnpl floatL">{if $tsInfo.aul_kind_state == 2}<h1 class="live">LIVE</h1>{else}<h1>NO LIVE</h1>{/if}</div>
</div>
</div>
</div>
<div class="::style::where" role="sttr">
<div>
{if $IsaDM == 1}
<ins></ins>
{if $iseXcht <= 0}<script type="text/javascript" src="{$tsConfig.url}/js/modo/cht/GnrChtInH.js"></script>{/if}{/if}
{if $visitclassudw <= 23}<script type="text/javascript" src="{$tsConfig.url}/js/modo/ttr/aul_cls_h.js"></script>{/if}
{if $tsInfo.aul_kind_user == $wuser->uid}<script type="text/javascript" src="{$tsConfig.url}/js/modo/aul_adclss.js"></script>{/if}
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/aul_cls_cs.css">
</div>
</div>
</div>