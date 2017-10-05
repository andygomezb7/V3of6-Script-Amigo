<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 15:10:46
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\reportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:528954739d42632ea7-87387996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ac6b2177a3a305cc50d2ed81cb1717b82cf52b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\reportes.tpl',
      1 => 1416863443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528954739d42632ea7-87387996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54739d426acfc6_15026303',
  'variables' => 
  array (
    'tsConfig' => 0,
    'bugs' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54739d426acfc6_15026303')) {function content_54739d426acfc6_15026303($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><h2 class="title">Panel de reportes</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar los reportes que se hacen en la parte inferior de la pagina.</p>
<br><br>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Usuario</th>
<th>Titulo</th>
<th>Email</th>
<th>Descripci&oacute;n</th>
<th>Fecha</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bugs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['d']->value['b_id']) {?><tr>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['b_id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['b_userr'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['b_title'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['b_email'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['d']->value['b_desc'];?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['d']->value['b_date']);?>
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
