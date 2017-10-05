<h2 class="title">Estilos de {$tsConfig.name}</h2>
<p>En esta parte de la administración de {$tsConfig.name} puedes administrar los estilos de la pagina, Pero manten control de los estilos y nunca borres nada sin antes reportarlo de lo contrario se rebocara tu rango sin previa aviso, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<div>
{if $getarc && $cssi}
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/code/linghwo.css">
<pre style="margin: 0px;width: 707px;height: 491px;">{$cssi}</pre>
{else}
<div class="talb_ic">
{foreach from=$arvs item=c key=i}
<div class="clearfix hidden ll">
<div class="floatL n"><b>00.{$i}</b></div>
<div class="floatL nm"><a href="{$tsConfig.url}/int/incog-admin/?preg=cssEdit&arc={$c}">{$c}</a></div>
</div>
{/foreach}
</div>
{/if}
<div>
<style type="text/css">{literal}
.talb_ic{}
.talb_ic .ll{}
.talb_ic .ll .n{}
.talb_ic .ll .nm{}
{/literal}</style>
</div>
</div>
<script type="text/javascript"></script>