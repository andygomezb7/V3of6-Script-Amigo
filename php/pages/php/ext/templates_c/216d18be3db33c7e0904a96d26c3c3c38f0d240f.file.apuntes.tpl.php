<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 19:45:41
         compiled from "C:\xampp\htdocs\w\themes\default\apuntes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253975454425ca40834-96549663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216d18be3db33c7e0904a96d26c3c3c38f0d240f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\apuntes.tpl',
      1 => 1418262261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253975454425ca40834-96549663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5454425caf79e0_95448436',
  'variables' => 
  array (
    'get_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5454425caf79e0_95448436')) {function content_5454425caf79e0_95448436($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="apunts_cont">
<?php echo $_smarty_tpl->getSubTemplate ('modulos/apuntes_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['get_']->value['preg']=='mi'||!$_smarty_tpl->tpl_vars['get_']->value['preg']) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/apuntes_i/misnotas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='fav') {?>
Mis favoritos
<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
