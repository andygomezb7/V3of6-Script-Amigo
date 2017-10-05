<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:55
         compiled from "/home/babanta/wortit.net/themes/default/aula.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7786195875875a72b07f587-79259348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a664bcbbc0efedff84728b08ac5f4e4a24f00e' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/aula.tpl',
      1 => 1418262716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7786195875875a72b07f587-79259348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aula' => 0,
    'get_' => 0,
    'estable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a72b1fca02_38976629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a72b1fca02_38976629')) {function content_5875a72b1fca02_38976629($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
