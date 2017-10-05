<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 16:23:08
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\denuncias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:446354738e5603d098-38578973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01ad25301e0f27ea6bfc9301c6db3913b64d23d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\denuncias.tpl',
      1 => 1416863427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446354738e5603d098-38578973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54738e560f4248_12184831',
  'variables' => 
  array (
    'tsConfig' => 0,
    'denuncias' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54738e560f4248_12184831')) {function content_54738e560f4248_12184831($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><h2 class="title">Panel de denuncias</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Puedes administrar las denuncias que se hacen en cada sección de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
, Administra y manten el control de cada denuncia, ya que cada denuncia se deve tomar en cuenta y tomar conversación con el denunciante.</p>
<br><br>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Usuario</th>
<th>Tipo</th>
<th>Razón</th>
<th>Descripci&oacute;n</th>
<th>Fecha</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['denuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['d']->value['did']) {?><tr>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['did'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['user']['usuario_nombre'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['razon'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['d_extra'];?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['d']->value['d_date']);?>
</td>
<th><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/roombox/<?php echo $_smarty_tpl->tpl_vars['d']->value['user']['usuario_nombre'];?>
" target="_blank">Resp.</a></th>
</tr><?php }?>
<?php } ?>
</tbody>
</table>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css"></div>
</div><?php }} ?>
