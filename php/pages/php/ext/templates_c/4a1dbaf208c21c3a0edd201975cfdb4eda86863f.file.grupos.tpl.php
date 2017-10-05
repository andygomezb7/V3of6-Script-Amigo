<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:07:01
         compiled from "/home/babanta/wortit.net/themes/default/grupos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17077296905875f5b5779c46-14624415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1dbaf208c21c3a0edd201975cfdb4eda86863f' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/grupos.tpl',
      1 => 1417478124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17077296905875f5b5779c46-14624415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'get_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f5b589e8c5_55322027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f5b589e8c5_55322027')) {function content_5875f5b589e8c5_55322027($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
