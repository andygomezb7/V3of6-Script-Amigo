<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 18:55:50
         compiled from "C:\xampp\htdocs\w\themes\default\grupos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1814554778d9557bcf5-34423008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6603b2c0c9da74f941bf356f20564a085b02aa6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\grupos.tpl',
      1 => 1417481722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1814554778d9557bcf5-34423008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54778d955f5e11_84323499',
  'variables' => 
  array (
    'get_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54778d955f5e11_84323499')) {function content_54778d955f5e11_84323499($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="grupos_i hidden">
	<div class="grupos_i_content hidden">
<?php if ($_smarty_tpl->tpl_vars['get_']->value['preg']=='home'||!$_smarty_tpl->tpl_vars['get_']->value['preg']) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='sug') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/sug.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='amg') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/amg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='local') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/local.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='misgrupos') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/misgrupos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='perfil'||$_smarty_tpl->tpl_vars['get_']->value['preg']=='editar') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/grupos_i/perfil.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
