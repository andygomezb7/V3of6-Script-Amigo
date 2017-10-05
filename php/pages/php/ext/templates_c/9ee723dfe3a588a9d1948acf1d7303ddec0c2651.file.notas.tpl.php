<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 05:28:39
         compiled from "/home/babanta/wortit.net/themes/default/notas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1109191815587616e7050f15-57870318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ee723dfe3a588a9d1948acf1d7303ddec0c2651' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/notas.tpl',
      1 => 1416945696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109191815587616e7050f15-57870318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apgets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587616e71533f2_29840366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587616e71533f2_29840366')) {function content_587616e71533f2_29840366($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="hmnts">
<?php echo $_smarty_tpl->getSubTemplate ('modulos/new_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['apgets']->value=='home'||!$_smarty_tpl->tpl_vars['apgets']->value||$_smarty_tpl->tpl_vars['apgets']->value=='cat') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/new_i/home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['apgets']->value=='nota') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/new_i/nota.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['apgets']->value=='agregar'||$_smarty_tpl->tpl_vars['apgets']->value=='editar') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/new_i/agregar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['apgets']->value=='fav') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/new_i/favs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
Nada por aqui...
<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
