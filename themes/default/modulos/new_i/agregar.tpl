<div class="add_note">
<div class="add_note_cont">
<div class="add_note_l floatL">

<div class="ldad dsnone">
<h1>PUBLICANDO...</h1>
<div class="barloading"><div class="bar"></div></div>
</div>

<div class="add_note_ttl add_note_co">
<div class="t require">Titulo</div>
<div class="co"><input type="text" name="title" {if $tsNota.titulo}value="{$tsNota.titulo}"{/if} class="title" placeholder="Escribe el título de la nota..."></div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Contenido / Descripción</div>
<div class="co"><textarea class="text markItUp" name="text" placeholder="Describe tu nota...">{if $tsNota.detalle}{$tsNota.detalle}{/if}</textarea></div>
</div>

<div class="add_note_co">
<div class="co">{if $numnota >= 1 && $tsNota.titulo}<input type="hidden" name="wk" value="1"><input type="hidden" name="wg" value="{$tsNota.id}">{/if}<input type="button" class="bg_green_3d btn color_white cursorP" value="{if $numnota >= 1 && $tsNota.titulo}Guardar{else}Agregar{/if} nota" onclick="hlo.hi()"/></div>
</div>

</div>

<div class="add_note_r floatL">

<div class="add_note_txt add_note_co">
<div class="t require">Categoria</div>
<div class="co">
<select name="cat" style="margin: 0 21px;width: 193px;padding: 5px 4px;">
<option>Selecciona una categoria</option>
{foreach from=$cats item=c}
<option value="{$c.id_categoria}" {if $tsNota.categoria == $c.id_categoria}selected="selected"{/if}>{$c.nombre}</option>
{/foreach}
</select></div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Tags (palabras clave)</div>
<div class="co"><textarea name="tags" class="tags" placeholder="ej: noticia, futbol, farandula, wortit">{if $tsNota.tags}{$tsNota.tags}{/if}</textarea></div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Imagen de la nota</div>
<div class="co">
<div class="slect_img_oo">
<div class="img_vr_oo {if !$tsNota.banner}dsnone{/if}">{if $tsNota.banner}
<img src="{$tsNota.banner}" style="width: 100%;height:125px;margin:0 auto;">
<div class="lsf cursorP" onclick="hlo.adi();" title="Cambiar imagen">close</div>
<input type="hidden" name="imagen" id="kim" value="{$tsNota.banner}">{/if}
</div>

<div class="bg_img_oo dsnone">
<div style="margin: 46px 0px;text-align: -webkit-center;"><h1>Subiendo</h1>
<div class="barloading" style="width: 86%;"><div class="bar" style="width: 2%;"></div></div></div>
</div>

<div class="selec_img_oo hidden cursorP {if $tsNota.banner}dsnone{/if}">
<div class="lsf">camera</div><input type="file" id="is" class="inputnone cursorP"/>
</div>

</div>
</div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Fuente de la nota</div>
<div class="co">
<div class="optin">
<div class="o_1"><input id="gor_1" type="text" name="url" {if $tsNota.fuente}value="{$tsNota.fuente}"{/if} style="width:100%;" placeholder="http://"></div>
</div>
</div>
</div>

</div>

<div class="sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/nw_andote.css" />
<script type="text/javascript" src="{$tsConfig.url}/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/markItUp.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/nw_andote.js"></script>
{* <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript">{literal}
$('.text').resizable({ maxWidth: 740, minWidth: 740 });
{/literal}</script> *}
</div>
</div>
</div>
</div>