<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 23:12:19
         compiled from "C:\xampp\htdocs\w\themes\default\admode\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213195472bcdae4e1c4-61740564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19782d4ab5e9adbb2901868bc2f071a63e554f0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\admode\\home.tpl',
      1 => 1416805902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213195472bcdae4e1c4-61740564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5472bcdb03d095_04762529',
  'variables' => 
  array (
    'get_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472bcdb03d095_04762529')) {function content_5472bcdb03d095_04762529($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
<div class="admin_i">
<div class="admin_header_i floatL"><?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="admin_content_i floatl">
<?php if (!$_smarty_tpl->tpl_vars['get_']->value['preg']||$_smarty_tpl->tpl_vars['get_']->value['preg']=='home') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/presentacion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='rangos') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/rangos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='logros') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/logros.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='usuarios') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/usuarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='baneados_usuarios') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/baneados_usuarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='estadisticas') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/estadisticas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='usuarios_estadisticas') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/mod_i/usuarios_estadisticas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
