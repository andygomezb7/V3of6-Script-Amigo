<div id="strcth" class="clearfix">
<div class="typesholes">
<div class="typesholes">
<div class="typesholes" id="TdsLsChts">

<div id="UsrsQstnOnlnPrCnvrsr">
<div id="CntndrMnPrMdVr" onclick="ctrcht.chtOfsl();"><div class="clnDsVrsOtr"><div>Roombox</div></div></div>
<div id="CntndrDlsUsrsOnlnPrCnvrsr">
    <div id="TtlDlsUsrsOnlnPrCnvrsr" onclick="ctrcht.chtOfsl();">Roombox</div>
<div id="CntndrOfclDlsUsrsOnlnPrCnvrsr">
{foreach from=$UsrsActvs item=u}
<li><a onclick="ctrcht.add({$u.usuario_id}, {if $u.identi}{$u.identi}{else}{$numaccess}{/if})" id="{$u.usuario_id}_{if $u.identi}{$u.identi}{else}{$numaccess}{/if}_14" data-title="{$u.name_original} {$u.ap_original}"><div class="floatL" style="margin: 0px 4px 0px 0px;"><img style="width: 26px;height: 27px;" src="{if $u.w_avatar}{$u.w_avatar}{else}{$tsConfig.url}/images/avatar/group.png{/if}" /></div> {$u.name_original} {$u.ap_original}</a></li>
{/foreach}
</div>
<div>
<input type="text" placeholder="Busca personas..." style="width:100%;height:26px;" id="VlrcnDLBsSrch_OnlUrs" />
</div>
</div>
</div>

</div>
</div>
</div>
<div id="HyMsChtsAmg">
<div id="CntntDlLsUsrsXtrs">
<div style="max-height: 211px;"><div style="border-bottom: 1px solid rgba(0, 0, 0, .3);"><div style="height: 88px;border: 1px solid rgba(29, 49, 91, .3);overflow-x: hidden;
overflow-y: auto;background-color: #fff;position: relative;border-width: 0 1px;"><div id="TdsLsChtsQeNeNtrn"></div></div></div></div></div>
<div id="iCndLWbst" onclick="ctrcht.iGicteGc();">/+</div></div>
</div>
