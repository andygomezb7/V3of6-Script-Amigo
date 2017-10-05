<div class="posts">
{foreach from=$st item=u}
<div id="elementop">
<a href="#" title="{$u.usuario_nombre}"><img src="{if $u.w_avatar == NULL}{$tsConfig.url}/images/avatar/group.png{else}{$u.w_avatar}{/if}" style="width: 26px;height: 32px;"></a>
<div class="postcontent">
<a href="{$tsConfig.url}/{$u.usuario_nombre}" title="Leer la nota.">{$u.name_original} {$u.ap_original}</a>
<p style="font-size: 11px;"><span style="style=" color:="" #666;""="">Interactuan {$u.hace|hace}</span></p>
</div>
</div>
{/foreach}
</div>