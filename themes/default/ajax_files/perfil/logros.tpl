<div class="posts">
{foreach from=$st item=m}
<div id="elementop">
<a href="#" title="{$u.usuario_nombre}"><img src="{$tsConfig.url}/images/icons/medals/{$m.m_image}" style="width: 26px;height: 32px;"></a>
<div class="postcontent">
<a >{$m.m_title}</a>
<p style="font-size: 11px;"><span style="style=" color:="" #666;""="">{$m.m_desc}</span></p>
</div>
</div>
{/foreach}
</div>