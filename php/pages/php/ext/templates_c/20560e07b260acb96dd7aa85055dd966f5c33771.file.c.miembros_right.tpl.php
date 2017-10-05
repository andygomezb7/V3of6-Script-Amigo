<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:55:42
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.miembros_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11371548a3d0e29f633-89305414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20560e07b260acb96dd7aa85055dd966f5c33771' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.miembros_right.tpl',
      1 => 1393297516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11371548a3d0e29f633-89305414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsUltimos' => 0,
    'tsConfig' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548a3d0e3d0900_61790743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a3d0e3d0900_61790743')) {function content_548a3d0e3d0900_61790743($_smarty_tpl) {?><div class="com_new_box">
    <div class="com_box_title clearfix"><h2>&Uacute;ltimos miembros</h2></div>
    <div class="clearfix">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsUltimos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" title="Ir al perfil de <?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" alt="Ir al perfil de <?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" class="floatL hovercard" uid="<?php echo $_smarty_tpl->tpl_vars['a']->value['m_user'];?>
" style="margin-right:1px;margin-bottom:1px;"><img src="<?php echo $_smarty_tpl->tpl_vars['a']->value['w_avatar'];?>
" width="35" height="35" /></a>
        <?php } ?>
    </div>
</div><?php }} ?>
