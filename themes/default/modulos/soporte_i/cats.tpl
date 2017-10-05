   <input type="hidden" id="idproyect" value="{$pagetgo.sf_id}"/>
<div id="formsup" style="border-bottom: 1px solid #CCCCCC;padding: 0px 0px 7px 0px;">
<div id="titlef" style="margin: 17px 0px 0px 12px;"><span>Nueva categoria</span></div>
</div>

<form id="formsup">

<div class="clearfix"><div id="titlef"><span>Nombre</span></div>
<input type="text" id="name" style="padding: 1px 3px;"></div>

<div class="clearfix"><div id="titlef"><span>Nombre Corto</span></div>
<input type="text" id="cname" style="padding: 1px 3px;"></div>

<div class="clearfix"><div id="titlef"><span>Descripcion</span></div>
<textarea id="desccats"></textarea></div>

<div class="clearfix" style="margin: 0px 0px 13px 0px;"><div id="titlef"><span>Imagen</span></div>
<div style="float:left;margin: 4px 11px 0px 8px;"><img src="{$tsConfig.url}/images/static/options/icons/cats/ebook.png" class="mm_icon"/></div>
<select style="height: 26px;" id="img" name="icon" onchange="$('.mm_icon').attr('src', '{$tsConfig.url}/images/static/options/icons/cats/'+$(this).val())">
{foreach from=$iconscats item=r}
<option value="{$r}" >Imagen: {$r}</option>
{/foreach}
</select></div>

<input type="hidden" value="{$pagetgo.sf_id}" id="idsop">
<input type="button" value="Crear" class="fb1 btn color_white" onclick="adsop.newcat();">
</form>

<div id="formsup" style="margin: 12px 0px 9px 0px;border-bottom: 1px solid #CCCCCC;">
<div id="titlef" style="margin:0;"><span>Categorias de tu proyecto</span></div>
<span class="color_gray size11">al eliminar una categoria se movera automaticamente a la categoria general (categoria por defecto no eliminable).</span></div>

<div class="table_supinvirw">
<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%" align="center"> 
<thead> 
<tr>
<th>ID</th> 
<th>Imagen</th>
<th>Nombre</th> 
<th>Nombre corto</th> 
<th>Descripcion</th>
<th>Foro id</th> 
<th>Opciones</th>
</tr>
</thead> 
<tbody> 
{foreach from=$catsp item=c}
 <tr id="catsupdel{$c.sc_id}"> 
<td>{$c.sc_id}</td> 
<td><img src="{$tsConfig.url}/images/static/options/icons/cats/{$c.sc_img}"/></td> 
<td>{$c.sc_name}</td> 
<td>{$c.sc_seo}</td> 
<td>{$c.sc_desc}</td> 
<td>{$c.sc_foro}</td>
<td>
  <a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}?action=admin&act=cat&a={$c.sc_id}&ac=edit">Editar</a> 
  <a onclick="adsop.deltecat({$c.sc_id});">Borrar</a> 
</td>
 </tr> 
{/foreach}
 </tbody> 
</table>
<div role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_1.css"></div>
</div>
</div>