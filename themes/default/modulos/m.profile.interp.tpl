{if $tsInter}
{foreach from=$tsInter item=ip key=i}
<li>
<a href="{$tsConfig.direccion_url}/{$ip.usuario_nombre}" id="nwelnSIn_{$i}" class="wortip" uid="{$ip.usuario_id}" title="{if $ip.name_original == NULL && $ip.ap_original == NULL} {$ip.usuario_nombre}{else}{$ip.name_original} {$ip.ap_original}{/if}" alt="{if $ip.name_original == NULL && $ip.ap_original == NULL} {$ip.usuario_nombre}{else}{$ip.name_original} {$ip.ap_original}{/if}" target="_blank">
<img style="width: 50px; height: 50px;" src="{if $ip.w_avatar==NULL}{$tsConfig.direccion_url}/images/avatar/group.png{else}{$ip.w_avatar}{/if}" />
</a>
</li>
{/foreach}
{else}
<div id="alertp" style="margin: 25px 0px 22px 0px;"> Nadie interactua aun con <b>{$tsInfo.usuario_nombre}</b>. </div>
{/if}