<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 20:23:58
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\tienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11095548a6750632ea8-96107151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e9f1dc5434d924a401a3ace50a9229f3c149d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\tienda.tpl',
      1 => 1418435069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11095548a6750632ea8-96107151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548a6750895446_23408149',
  'variables' => 
  array (
    'gohget' => 0,
    'tsAct' => 0,
    'tsProductos' => 0,
    't' => 0,
    'tsConfig' => 0,
    'location' => 0,
    'tsProducto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a6750895446_23408149')) {function content_548a6750895446_23408149($_smarty_tpl) {?><div class="boxy-title"><h3>Productos</h3></div>

<div id="res" class="boxy-content">
<?php if ($_smarty_tpl->tpl_vars['gohget']->value&&$_smarty_tpl->tpl_vars['gohget']->value==1) {?><div style="display: block;" id="error_flat" class="blue_flat">Tus cambios han sido guardados.</div><?php } elseif ($_smarty_tpl->tpl_vars['gohget']->value&&$_smarty_tpl->tpl_vars['gohget']->value==0) {?><div style="display: block;" id="error_flat">Ocurrio un error</div><?php }?>					

<?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='') {?> 
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
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsProductos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['t']->value['typee'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['t']->value['precio'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['t']->value['obj'];?>
</td>
<td class="admin_actions">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=tienda&act=editar&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/icons/do/editar.png" title="Editar" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=tienda&act=borrar&id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/icons/do/delete_.png" title="Borrar" /></a>
</td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<th colspan="6" style="text-align:right;">
<input type="button" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=tienda&act=nuevo'" class="mBtn btnOk" value="Nuevo producto"/></th>
</tfoot>
</table>

<?php } elseif ($_smarty_tpl->tpl_vars['tsAct']->value=='nuevo'||$_smarty_tpl->tpl_vars['tsAct']->value=='editar') {?>
<?php if ($_smarty_tpl->tpl_vars['gohget']->value) {?><div id="error_flat"><?php if ($_smarty_tpl->tpl_vars['gohget']->value==1) {?>Ejecutado corretamente<?php } elseif ($_smarty_tpl->tpl_vars['gohget']->value==0) {?>Ocurrio un error<?php }?></div><?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=tienda">Volver a administrar tienda</a><hr />
<form action="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" method="post" autocomplete="off">
<fieldset style="padding: 12px;">
<legend><?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='nuevo') {?>Agregar nuevo<?php } else { ?>Editar<?php }?> producto</legend>
<dl>
<dt><label for="precio">Precio:</label><br /><span>Precio del producto.</span></dt>
<dd><input type="text" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['tsProducto']->value['precio'];?>
" required /></dd>
</dl>

<dt><label for="type">Tipo:</label>
<label onclick="$('#opt').slideDown();$('#val').slideDown();"><input name="type" type="radio" id="type" value="1" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==1) {?>checked<?php }?> class="radio"/>Rango</label>
<label onclick="$('#opt').slideDown();$('#val').slideDown();"><input name="type" type="radio" id="type" value="2" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==2) {?>checked<?php }?> class="radio"/>Medalla</label>
<!--<label onclick="$('#opt').slideUp();$('#val').slideDown();"><input name="type" type="radio" id="type" value="3" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==3) {?>checked<?php }?> class="radio"/>Puntos para dar</label>-->
<!--<label onclick="$('#opt').slideUp();$('#val').slideUp();"><input name="type" type="radio" id="type" value="4" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==4) {?>checked<?php }?> class="radio"/>Cambio de nick</label>-->
<!--<label onclick="$('#opt').slideDown();$('#val').slideDown();"><input name="type" type="radio" id="type" value="5" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==5) {?>checked<?php }?> class="radio"/>Hosting</label>-->
<span>valor:</span>
</dt>
<dd>						
<input type="text" id="val" name="val" style="width:15%;<?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==4||$_smarty_tpl->tpl_vars['tsProducto']->value['type']=='') {?>display:none;<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['tsProducto']->value['obj'];?>
" />
<select name="opt" id="opt" style="width:125px;<?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['type']==3||$_smarty_tpl->tpl_vars['tsProducto']->value['type']==4||$_smarty_tpl->tpl_vars['tsProducto']->value['type']=='') {?>display:none;<?php }?>">
<option value="0">Id</option><option value="1">Nombre</option>
</select>
</dd>
<dt>
<label>Tipo de producto</label>
<select name="obttrhe" onchange="if($(this).val() == 3 || $(this).val() == 4){ $('input[name=valuesval]').val(''); $('input[name=valuesval]').slideDown(); $('input[name=valuesvaltwo]').val('0'); $('input[name=valuesvaltwo]').slideUp(); }else if($(this).val() == 2){ $('input[name=valuesval]').val(''); $('input[name=valuesval]').slideDown(); $('input[name=valuesvaltwo]').val(''); $('input[name=valuesvaltwo]').slideDown(); }else{ $('input[name=valuesval]').val('0'); $('input[name=valuesval]').slideUp(); $('input[name=valuesvaltwo]').val('0'); $('input[name=valuesvaltwo]').slideUp(); }">
<option value="1" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==1) {?>selected="selected"<?php }?>>Producto normal</option>
<option value="2" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==2) {?>selected="selected"<?php }?>>Oferta limitada</option>
<option value="3" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==3) {?>selected="selected"<?php }?>>Producto limitado</option>
<option value="4" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==4) {?>selected="selected"<?php }?>>Oferta</option>
<option value="5" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==5) {?>selected="selected"<?php }?>>Producto para usuario</option>
<option value="6" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==6) {?>selected="selected"<?php }?>>Producto de ocación</option>
</select>
<input type="text" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==2||$_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==3||$_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==4) {?><?php } else { ?>style="display:none;"<?php }?> name="valuesval" value="<?php echo $_smarty_tpl->tpl_vars['tsProducto']->value['obj_4'];?>
" placeholder="introduce cantidad..">
<input type="text" <?php if ($_smarty_tpl->tpl_vars['tsProducto']->value['obj_3']==2) {?><?php } else { ?>style="display:none;"<?php }?> name="valuesvaltwo" value="<?php echo $_smarty_tpl->tpl_vars['tsProducto']->value['obj_5'];?>
" placeholder="introduce cantidad..">
</dt>
<p><input type="submit" <?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='nuevo') {?>onclick="tienda.add();"<?php } else { ?>onclick="tienda.edit();"<?php }?> name="<?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='nuevo') {?>add<?php } else { ?>save<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='nuevo') {?>Agregar producto<?php } else { ?>Guardar Cambios<?php }?>" class="btn_g"/></p>
</fieldset>
</form>

<?php } elseif ($_smarty_tpl->tpl_vars['tsAct']->value=='borrar') {?>                                   
<form action="" method="post" id="admin_form" autocomplete="off">
<center><font color="red">Producto no eliminado</font><hr />
<input type="button" name="confirm" style="cursor:pointer;" onclick="location.href = '/admin/tienda?borrar=true'" value="Volver &#187;" class="btn_g">									
<?php }?>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css"></div>
</div>								
</div><?php }} ?>
