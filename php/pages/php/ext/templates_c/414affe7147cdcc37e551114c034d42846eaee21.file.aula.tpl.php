<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 21:05:53
         compiled from "C:\xampp\htdocs\w\themes\default\aula.tpl" */ ?>
<?php /*%%SmartyHeaderCode:538545447ec66ff36-77505866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '414affe7147cdcc37e551114c034d42846eaee21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\aula.tpl',
      1 => 1418266314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '538545447ec66ff36-77505866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545447ec7a1205_69553155',
  'variables' => 
  array (
    'aula' => 0,
    'get_' => 0,
    'estable' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545447ec7a1205_69553155')) {function content_545447ec7a1205_69553155($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="aula_con">
<div class="aula_con_tent">
<?php if ($_smarty_tpl->tpl_vars['aula']->value['register']>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['get_']->value['preg']=='profile') {?>
<?php if ($_smarty_tpl->tpl_vars['estable']->value>=1) {?><?php echo $_smarty_tpl->getSubTemplate ('modulos/aula_i/establecimiento.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ('modulos/aula_i/profile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='class') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/aula_i/class.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/aula_i/home_logged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/aula_i/home_unlogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
