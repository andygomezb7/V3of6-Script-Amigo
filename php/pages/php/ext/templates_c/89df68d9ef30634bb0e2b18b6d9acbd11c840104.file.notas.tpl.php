<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 15:03:20
         compiled from "C:\xampp\htdocs\w\themes\default\notas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25508545445ea8583b8-83687897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89df68d9ef30634bb0e2b18b6d9acbd11c840104' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\notas.tpl',
      1 => 1416949295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25508545445ea8583b8-83687897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545445eaa037a8_19179435',
  'variables' => 
  array (
    'apgets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545445eaa037a8_19179435')) {function content_545445eaa037a8_19179435($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
