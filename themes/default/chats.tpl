{include file='includes/main_header.tpl'}
<div class="cht_hom_">
<div class="cht_hom_hr hidden">
<div class="cht_hom_lf floatL" {if $eXexI == 'xKoLEk1RL1xE2Fl' && $get_.preg == 'view'}style="width:100%;"{/if}>
{if !$get_.preg || $get_.preg == 'home'}
<div class="cht_box">
<div class="cht_box_t">Tus chats
<div class="floatR">
<a class="bg_green_3d btn color_white" style="text-shadow: 0 0 0 #FFFFFF;" onclick="chts.crmodl(1);">Crear chat</a></div>
</div>
<div class="cht_box_c ch_rg edtChGmMch">
{foreach from=$tsUchats item=ch}
<li>
<div><h1><a href="{$tsConfig.url}/int/chat/ver-{$ch.u_c_id}/">{$ch.u_c_contenido} &nbsp; 
{if $ch.u_c_c1 == 0}<img src="{$tsConfig.url}/images/icons/gray_ball.png" class="qtip" title="Inactivo"/>{elseif $ch.u_c_c1 == 1}<img src="{$tsConfig.url}/images/icons/green_ball.png" class="qtip" title="Activo"/>{elseif $ch.u_c_c1 == 2}<img src="{$tsConfig.url}/images/icons/blue_ball.png" class="qtip" title="Desactivado por un moderado."/>{else}{/if}
</a>
<div class="floatR">
<a title="Editar chat" class="eje_cht" role="cht_1" data-o="{$ch.u_c_id}"><img src="{$tsConfig.url}/images/icons/do/edit.png" /></a>
{if $ch.u_c_c1 == 0}
<a title="Reactivar chat" class="eje_cht" role="cht_3" data-o="{$ch.u_c_id}"><img src="{$tsConfig.url}/images/icons/do/cross.png" /></a>
{else}
<a title="Desactivar chat" class="eje_cht" role="cht_2" data-o="{$ch.u_c_id}"><img src="{$tsConfig.url}/images/icons/do/delete.png" /></a>
{/if}
</div>
</h1><div class="color_gray size11">{$ch.u_c_desc}</div></div>
</li>
{/foreach}
</div>
<div class=":sttryl" role="sttr">
<div><script type="text/javascript" src="{$tsConfig.url}/js/modo/chtHDt.js"></script></div>
</div>
</div>
{elseif $get_.preg == 'view'}
<div class="cht_box">
{if !$eXexI || $eXexI != 'xKoLEk1RL1xE2Fl' && $tsInfo.u_c_type == 3}<div class="cht_box_t"><a class="btn_green btn color_white" href="{$tsConfig.url}/int/chat/">Volver</a> {$tsInfo.u_c_contenido}</div>{/if}
<div class="cht_box_c">
{if !$eXexI || $eXexI != 'xKoLEk1RL1xE2Fl' && $tsInfo.u_c_type == 3}<div class="color_gray size11" style="padding: 4px 4px;border-bottom: 1px solid #DDDDDD;max-height: 200px;overflow-y: auto;overflow-x: hidden;">{$tsInfo.u_c_desc}</div>{/if}
<div class="cht_msgs" role="ldcht" data-i="{$tsInfo.u_c_id}" {if $eXexI == 'xKoLEk1RL1xE2Fl' && $eXexIHig}style="height:{$eXexIHig};"{/if}>
<div class="cht_msg_font" data-e="{$tsInfo.u_c_id}">
<div class="font"></div>
{if $msgs}{foreach from=$msgs item=t}<li>{$t.u_c_contenido}</li>{/foreach}
{else}<div id="error_flat">No hay mensajes aún.</div>{/if}
<center><input type="button" id="loadchat" data-i='{$tsInfo.u_c_id}' value="Empezar" class="btn_green btn color_white" style="z-index: 100;position: absolute;"/></center>
</div>
</div>
  <div class="cht_formset">
  	<div class="clearfix lodsgsubi dsnone" data-li="{$tsInfo.u_c_id}"><center><h1><img src="{$tsConfig.url}/images/loading_bar.gif" /></h1></center></div>
  <input type="text" class="floatL" id="txnvdata" placeholder="Escribe tu mensaje..." style="width: 92.2%;">
  <input type="button" value="Enviar" id="submitmsg" data-li='{$tsInfo.u_c_id}' class="btn_green btn color_white floatL" style="line-height: 17px;border-radius: 0;width: 7%;margin: 0;">
  <input type="hidden" name="ajchld" value="0" data-ie="{$tsInfo.u_c_id}" />
  </div>
</div>
</div>
{/if}
</div>

{if !$eXexI && $get_.preg == 'view' || $eXexI != 'xKoLEk1RL1xE2Fl' && $get_.preg == 'view' && $tsInfo.u_c_type != 3}
<div class="cht_hom_rg floatL">

<div class="cht_box">
<div class="cht_box_t">Anuncios</div>
<div class="cht_box_c">
<iframe width="306" height="605" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="{$tsConfig.url}/php/pages/ejects/globalads/?q=3&usk=1&ssa=skkl-yvaq&sse=5&abg=chats&avg={$tsConfig.url}/int/chat/"></iframe>
</div>
</div>

</div>{/if}

</div>
<div class="::sttryle" role="sttr">
<div>{if $get_.preg == 'view'}<script type="text/javascript" src="{$tsConfig.url}/js/modo/cht/chtLod_11.js"></script>{/if}
{if $eXexI == 'xKoLEk1RL1xE2Fl' && $get_.preg == 'view' && $tsInfo.u_c_type == 3}
<style type="text/css">{literal}
#menuPrncpl{display: none!important;}
#headtotalhe{margin:0!important;}
#footer{display: none!important;}
#strcth{display: none!important;}
{/literal}</style>
{/if}
</div>
</div>
</div>
{include file='includes/main_footer.tpl'}