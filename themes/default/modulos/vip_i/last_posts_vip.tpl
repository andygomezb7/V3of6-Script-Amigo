
{if $tsStikiv_p}
<h3>Posts Vip Importantes</h3>
<div class="posts" style="margin: 15px 8px 20px 8px;">
{foreach from=$tsStikiv_p item=p key=i}
{if $p.estado == 1 || $p.estado != 1 && $wuser->admod || $p.estado != 1 && $wuser->mod}
<div id="elementop" style="{if $i==0}border-top:3px double #CCC;{/if}{if $p.estado != 1}background:rgba(255, 0, 0, 0.2);{/if}">
<div class="postcontent">
<a href="{$tsConfig.url}/notas/{$p.wdefined}/{$p.id}/{$p.post_wdefined}.html" title="Leer la nota.">{$p.titulo}</a>
<p style="font-size: 11px;"><span style="style="color: #666;"">Hace {$p.hace|hace}</span> · <span style="style="color: #666666;"">Visitas</span><span style="color: #666666;"> {$p.visitas}</span></p>
<span class="cat" style="background: #36C25D;float: right;position: relative;bottom: 7px;right: -55px;z-index: 100;"><a href="#" target="_blank">{$p.nombre}</a></span>
</div>
<div class="sliderNote">
<button class="Fav_nt qtip fvnt" data-id="{$p.id}" title="Favoritos"><div class="icons i16"></div></button>
{if $wuser->admod || $wuser->mod}<button class="Fav_nt qtip fijn" data-obj="{$p.id}" top="{if $p.sticky == 1}2{else}1{/if}" title="{if $p.sticky == 1}Desfijar{else}Fijar{/if}"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt qtip born" data-obj="{$p.id}" top="{if $p.estado != 1}1{else}2{/if}" title="{if $p.estado != 1}Activar{else}Borrar{/if}"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button>{/if}
</div>
</div>
{/if}
{/foreach}		
</div>
{/if}
<br class="space"/>		
<h3>&Uacute;ltimos Posts Vip</h3>
<div class="posts" style="margin: 15px 8px 20px 8px;">
{foreach from=$tsPostvip_p.data item=p key=i}
{if $p.sticky == 1}{else}
{if $p.estado == 1 || $p.estado != 1 && $wuser->admod || $p.estado != 1 && $wuser->mod}
<div id="elementop" style="{if $i==0}border-top:3px double #CCC;{/if}{if $p.estado != 1}background:rgba(255, 0, 0, 0.2);{/if}">
<div class="postcontent">
<a href="{$tsConfig.url}/notas/{$p.wdefined}/{$p.id}/{$p.post_wdefined}.html" title="Leer la nota.">{$p.titulo}</a>
<p style="font-size: 11px;">
<span style="style="color: #666;"">Hace {$p.hace|hace}</span> · 
<span style="style="color: #666666;"">Visitas</span>
<span style="color: #666666;"> {$p.visitas}</span>
</p>
<span class="cat" style="background: #36C25D;float: right;position: relative;bottom: 7px;right: -55px;z-index: 100;"><a href="#" target="_blank">{$p.nombre}</a></span>
</div>
<div class="sliderNote">
<button class="Fav_nt qtip fvnt" data-id="{$p.id}" title="Favoritos"><div class="icons i16"></div></button>
{if $wuser->admod || $wuser->mod}<button class="Fav_nt qtip fijn" data-obj="{$p.id}" top="{if $p.sticky == 1}2{else}1{/if}" title="{if $p.sticky == 1}Desfijar{else}Fijar{/if}"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt qtip born" data-obj="{$p.id}" top="{if $p.estado != 1}1{else}2{/if}" title="{if $p.estado != 1}Activar{else}Borrar{/if}"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button>{/if}
</div>
</div>{/if}
{/if}
{/foreach}		
</div> 

<div id="more-com" aligen="center">
		<div id="new-paginate">
			{$tsPostvip_p.pages}
		</div>
	</div>
