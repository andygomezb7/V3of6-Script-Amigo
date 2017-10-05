<div class="boxy-title"><h3>Productos</h3></div>

<div id="res" class="boxy-content">
{if $gohget && $gohget == 1}<div style="display: block;" id="error_flat" class="blue_flat">Tus cambios han sido guardados.</div>{elseif $gohget && $gohget == 0}<div style="display: block;" id="error_flat">Ocurrio un error</div>{/if}					

{if $tsAct == ''} 
Administracion de productos en <b>WORTIT</b>. <hr class="separator" /><b>Lista de Productos</b>

<table cellpadding="0" cellspacing="0" border="0" class="table" width="100%" align="center">
<thead>
<th>ID</th>
<th>Tipo</th>
<th>Precio</th>
<th>Objeto</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$tsProductos item=t}
<tr>
<td>{$t.id}</td>
<td>{$t.typee}</td>
<td>{$t.precio}</td>
<td>{$t.obj}</td>
<td class="admin_actions">
<a href="{$tsConfig.url}/int/incog-admin/?preg=tienda&act=editar&id={$t.id}"><img src="{$tsConfig.default}/images/icons/do/editar.png" title="Editar" /></a>
<a href="{$tsConfig.url}/int/incog-admin/?preg=tienda&act=borrar&id={$t.id}"><img src="{$tsConfig.default}/images/icons/do/delete_.png" title="Borrar" /></a>
</td>
</tr>
{/foreach}
</tbody>
<tfoot>
<th colspan="6" style="text-align:right;">
<input type="button" onclick="location.href = '{$tsConfig.url}/int/incog-admin/?preg=tienda&act=nuevo'" class="mBtn btnOk" value="Nuevo producto"/></th>
</tfoot>
</table>

{elseif $tsAct == 'nuevo' || $tsAct == 'editar'}
{if $gohget}<div id="error_flat">{if $gohget == 1}Ejecutado corretamente{elseif $gohget == 0}Ocurrio un error{/if}</div>{/if}
<a href="{$tsConfig.url}/int/incog-admin/?preg=tienda">Volver a administrar tienda</a><hr />
<form action="{$location}" method="post" autocomplete="off">
<fieldset style="padding: 12px;">
<legend>{if $tsAct == 'nuevo'}Agregar nuevo{else}Editar{/if} producto</legend>
<dl>
<dt><label for="precio">Precio:</label><br /><span>Precio del producto.</span></dt>
<dd><input type="text" name="precio" id="precio" value="{$tsProducto.precio}" required /></dd>
</dl>

<dt><label for="type">Tipo:</label>
<label onclick="$('#opt').slideDown();$('#val').slideDown();"><input name="type" type="radio" id="type" value="1" {if $tsProducto.type == 1}checked{/if} class="radio"/>Rango</label>
<label onclick="$('#opt').slideDown();$('#val').slideDown();"><input name="type" type="radio" id="type" value="2" {if $tsProducto.type == 2}checked{/if} class="radio"/>Medalla</label>
<!--<label onclick="$('#opt').slideUp();$('#val').slideDown();"><input name="type" type="radio" id="type" value="3" {if $tsProducto.type == 3}checked{/if} class="radio"/>Puntos para dar</label>-->
<!--<label onclick="$('#opt').slideUp();$('#val').slideUp();"><input name="type" type="radio" id="type" value="4" {if $tsProducto.type == 4}checked{/if} class="radio"/>Cambio de nick</label>-->
<!--<label onclick="$('#opt').slideDown();$('#val').slideDown();"><input name="type" type="radio" id="type" value="5" {if $tsProducto.type == 5}checked{/if} class="radio"/>Hosting</label>-->
<span>valor:</span>
</dt>
<dd>						
<input type="text" id="val" name="val" style="width:15%;{if $tsProducto.type == 4 || $tsProducto.type == ''}display:none;{/if}" value="{$tsProducto.obj}" />
<select name="opt" id="opt" style="width:125px;{if $tsProducto.type == 3  || $tsProducto.type == 4 || $tsProducto.type == ''}display:none;{/if}">
<option value="0">Id</option><option value="1">Nombre</option>
</select>
</dd>
<dt>
<label>Tipo de producto</label>
<select name="obttrhe" onchange="if($(this).val() == 3 || $(this).val() == 4){ $('input[name=valuesval]').val(''); $('input[name=valuesval]').slideDown(); $('input[name=valuesvaltwo]').val('0'); $('input[name=valuesvaltwo]').slideUp(); }else if($(this).val() == 2){ $('input[name=valuesval]').val(''); $('input[name=valuesval]').slideDown(); $('input[name=valuesvaltwo]').val(''); $('input[name=valuesvaltwo]').slideDown(); }else{ $('input[name=valuesval]').val('0'); $('input[name=valuesval]').slideUp(); $('input[name=valuesvaltwo]').val('0'); $('input[name=valuesvaltwo]').slideUp(); }">
<option value="1" {if $tsProducto.obj_3 == 1}selected="selected"{/if}>Producto normal</option>
<option value="2" {if $tsProducto.obj_3 == 2}selected="selected"{/if}>Oferta limitada</option>
<option value="3" {if $tsProducto.obj_3 == 3}selected="selected"{/if}>Producto limitado</option>
<option value="4" {if $tsProducto.obj_3 == 4}selected="selected"{/if}>Oferta</option>
<option value="5" {if $tsProducto.obj_3 == 5}selected="selected"{/if}>Producto para usuario</option>
<option value="6" {if $tsProducto.obj_3 == 6}selected="selected"{/if}>Producto de ocación</option>
</select>
<input type="text" {if $tsProducto.obj_3 == 2 || $tsProducto.obj_3 == 3 || $tsProducto.obj_3 == 4}{else}style="display:none;"{/if} name="valuesval" value="{$tsProducto.obj_4}" placeholder="introduce cantidad..">
<input type="text" {if $tsProducto.obj_3 == 2}{else}style="display:none;"{/if} name="valuesvaltwo" value="{$tsProducto.obj_5}" placeholder="introduce cantidad..">
</dt>
<p><input type="submit" {if $tsAct == 'nuevo'}onclick="tienda.add();"{else}onclick="tienda.edit();"{/if} name="{if $tsAct == 'nuevo'}add{else}save{/if}" value="{if $tsAct == 'nuevo'}Agregar producto{else}Guardar Cambios{/if}" class="btn_g"/></p>
</fieldset>
</form>

{elseif $tsAct == 'borrar'}                                   
<form action="" method="post" id="admin_form" autocomplete="off">
<center><font color="red">Producto no eliminado</font><hr />
<input type="button" name="confirm" style="cursor:pointer;" onclick="location.href = '/admin/tienda?borrar=true'" value="Volver &#187;" class="btn_g">									
{/if}
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_1.css"></div>
</div>								
</div>