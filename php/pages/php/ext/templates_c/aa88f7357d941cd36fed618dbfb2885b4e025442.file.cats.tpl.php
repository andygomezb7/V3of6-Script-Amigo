<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 19:34:05
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\soporte_i\cats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2376554542dde81b322-70995390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa88f7357d941cd36fed618dbfb2885b4e025442' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\soporte_i\\cats.tpl',
      1 => 1414804438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2376554542dde81b322-70995390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54542dde989680_66866481',
  'variables' => 
  array (
    'pagetgo' => 0,
    'tsConfig' => 0,
    'iconscats' => 0,
    'r' => 0,
    'catsp' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54542dde989680_66866481')) {function content_54542dde989680_66866481($_smarty_tpl) {?>   <input type="hidden" id="idproyect" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_id'];?>
"/>
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
<div style="float:left;margin: 4px 11px 0px 8px;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/icons/cats/ebook.png" class="mm_icon"/></div>
<select style="height: 26px;" id="img" name="icon" onchange="$('.mm_icon').attr('src', '<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/icons/cats/'+$(this).val())">
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iconscats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" >Imagen: <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
<?php } ?>
</select></div>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_id'];?>
" id="idsop">
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
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catsp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
 <tr id="catsupdel<?php echo $_smarty_tpl->tpl_vars['c']->value['sc_id'];?>
"> 
<td><?php echo $_smarty_tpl->tpl_vars['c']->value['sc_id'];?>
</td> 
<td><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/icons/cats/<?php echo $_smarty_tpl->tpl_vars['c']->value['sc_img'];?>
"/></td> 
<td><?php echo $_smarty_tpl->tpl_vars['c']->value['sc_name'];?>
</td> 
<td><?php echo $_smarty_tpl->tpl_vars['c']->value['sc_seo'];?>
</td> 
<td><?php echo $_smarty_tpl->tpl_vars['c']->value['sc_desc'];?>
</td> 
<td><?php echo $_smarty_tpl->tpl_vars['c']->value['sc_foro'];?>
</td>
<td>
  <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
?action=admin&act=cat&a=<?php echo $_smarty_tpl->tpl_vars['c']->value['sc_id'];?>
&ac=edit">Editar</a> 
  <a onclick="adsop.deltecat(<?php echo $_smarty_tpl->tpl_vars['c']->value['sc_id'];?>
);">Borrar</a> 
</td>
 </tr> 
<?php } ?>
 </tbody> 
</table>
<div role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css"></div>
</div>
</div><?php }} ?>
