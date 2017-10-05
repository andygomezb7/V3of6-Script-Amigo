<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:04:50
         compiled from "/home/babanta/wortit.net/themes/default/ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6553573815875f5325b26b9-61979965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e07c24c5628ac2f9f2ce433ed18ee3c91cd8ed2' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/ads.tpl',
      1 => 1418344142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6553573815875f5325b26b9-61979965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wuser' => 0,
    'action' => 0,
    'adspage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f53261dbb3_25237768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f53261dbb3_25237768')) {function content_5875f53261dbb3_25237768($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
