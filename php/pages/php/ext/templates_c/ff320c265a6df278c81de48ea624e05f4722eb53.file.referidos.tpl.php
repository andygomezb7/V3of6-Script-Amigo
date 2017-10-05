<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 14:03:36
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\cuenta_i\referidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296315466d268aba953-45413040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff320c265a6df278c81de48ea624e05f4722eb53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\cuenta_i\\referidos.tpl',
      1 => 1416025812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296315466d268aba953-45413040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5466d268b34a70_72216895',
  'variables' => 
  array (
    'referidos' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5466d268b34a70_72216895')) {function content_5466d268b34a70_72216895($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><?php if ($_smarty_tpl->tpl_vars['referidos']->value) {?>
<table width="100%" class="table" style="border:0;margin:0;">
<thead>
<th>Nick</th>
<th>Nombre completo</th>
<th>Registro</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['referidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
<tr>
  <td><?php echo $_smarty_tpl->tpl_vars['h']->value['usuario_nombre'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['h']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['h']->value['ap_original'];?>
</td>
  <td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['h']->value['identi']);?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?><div id="error_flat">No tienes referidos aún.</div><?php }?><?php }} ?>
