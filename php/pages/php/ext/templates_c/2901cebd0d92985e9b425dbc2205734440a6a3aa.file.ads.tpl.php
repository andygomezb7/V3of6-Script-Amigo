<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 19:29:06
         compiled from "C:\xampp\htdocs\w\themes\default\ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178795453f462989688-61687627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2901cebd0d92985e9b425dbc2205734440a6a3aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ads.tpl',
      1 => 1418347741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178795453f462989688-61687627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f462af79e0_39369664',
  'variables' => 
  array (
    'wuser' => 0,
    'action' => 0,
    'adspage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f462af79e0_39369664')) {function content_5453f462af79e0_39369664($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="adsh">
<div class="adscontent">
<?php echo $_smarty_tpl->getSubTemplate ('modulos/ads_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['wuser']->value->uid||!$_smarty_tpl->tpl_vars['action']->value&&!$_smarty_tpl->tpl_vars['adspage']->value||$_smarty_tpl->tpl_vars['adspage']->value=='home') {?>
<?php if ($_smarty_tpl->tpl_vars['adspage']->value=='crear'&&$_smarty_tpl->tpl_vars['action']->value=='anun') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/ads_i/pages/crear.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['adspage']->value=='crear'&&$_smarty_tpl->tpl_vars['action']->value=='campaña') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/ads_i/pages/crear.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['adspage']->value=='view'&&$_smarty_tpl->tpl_vars['action']->value=='anuncios'||!$_smarty_tpl->tpl_vars['action']->value&&!$_smarty_tpl->tpl_vars['adspage']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/ads_i/pages/my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['adspage']->value=='blog'&&$_smarty_tpl->tpl_vars['action']->value=='ver') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/ads_i/pages/blog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['adspage']->value&&$_smarty_tpl->tpl_vars['action']->value=='informe') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/ads_i/pages/adsmypage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/altoahi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
