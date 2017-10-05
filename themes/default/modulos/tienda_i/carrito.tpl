{foreach from=$tsProductos item=p}
<div class="product" style="background: url({$tsConfig.url}/images/bg/webstore/{if $p.typee == 'Medalla'}med.png{elseif $p.typee == 'Rango'}rang.png{else}serv.png{/if});{if $p.obj_3 == 2 || $p.obj_3 == 4}height:202px;{/if}">
{if $p.exist == 1}<a class="btncom" data="{$p.id}" name="removeProd" style="margin: 66px 0px 0px 107px;">Quitar</a>{else}<a class="btncom" data="{$p.id}" name="add">Comprar</a>{/if}
<div style="background: #FFFFFF;margin: -4px 0px 0px 0px;{if $p.obj_3 == 2 || $p.obj_3 == 4}height:70px;{else}height: 59px;{/if}">
<div class="contse">
<div id="numet">{if $p.obj_3 == 2 || $p.obj_3 == 4}<b>{$p.obj_4}</b><br><strike class="size11">{$p.precio}</strike>{else}{$p.precioo}{/if}</div>
<div id="pasest">Worts</div></div>
<div id="typefootr">
{if $p.typee == 'Medalla'}<a onclick="mydialog.alert('Medalla: {$p.obj}', '<br><br><center style=padding:23px;><img style=width:64px;height:64px; src={$tsConfig.url}/images/icons/medals/{$p.imagen} /></center><br><br>');" style="color: #000000;line-height: 0;font-size: 14px;font-weight: bold;">{else}<a style="color: #000000;line-height: 0;font-size: 15px;font-weight: bold;">{/if}{$p.typee}{if $p.typee == 'Medalla'}</a>{else}</a>{/if} <div style="font-size: 12px;">{$p.obj}</div></div>
</div>
</div>
{/foreach}