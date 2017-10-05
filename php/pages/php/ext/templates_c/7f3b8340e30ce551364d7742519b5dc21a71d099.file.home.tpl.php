<?php /* Smarty version Smarty-3.1.19, created on 2017-01-15 23:00:29
         compiled from "/home/babanta/wortit.net/themes/default/admod/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:378685437587c536d909ed6-99445527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3b8340e30ce551364d7742519b5dc21a71d099' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/admod/home.tpl',
      1 => 1418352920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '378685437587c536d909ed6-99445527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'get_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587c536da65341_49969064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c536da65341_49969064')) {function content_587c536da65341_49969064($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
<div class="admin_i">
<div class="admin_header_i floatL"><?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div class="admin_content_i floatl">
<?php if (!$_smarty_tpl->tpl_vars['get_']->value['preg']||$_smarty_tpl->tpl_vars['get_']->value['preg']=='home') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/presentacion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='control_configs') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/control_configs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='rangos') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/rangos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='logros') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/logros.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='usuarios') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/usuarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='baneados_usuarios') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/baneados_usuarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='estadisticas') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/estadisticas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='usuarios_estadisticas') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/usuarios_estadisticas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='denuncias') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/denuncias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='reportes') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/reportes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='modactividad') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/modactividad.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='cssEdit') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/cssEdit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='sqlTester') {?>s

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='ads') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='tienda') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/admin_i/tienda.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
