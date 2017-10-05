<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:30:12
         compiled from "./themes/default/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15836599255875a6c4d52c44-79572600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bdac04893c060c2972030689846ff444f32d7a9' => 
    array (
      0 => './themes/default/home.tpl',
      1 => 1412367360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15836599255875a6c4d52c44-79572600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wuser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a6c4d75089_12968770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a6c4d75089_12968770')) {function content_5875a6c4d75089_12968770($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/home_i/loggeado.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/home_i/visitante.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
