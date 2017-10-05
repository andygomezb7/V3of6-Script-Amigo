<?php /* Smarty version Smarty-3.1.19, created on 2017-02-10 15:17:18
         compiled from "/home/babanta/wortit.net/themes/default/codigo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132413564589e2dde15ad34-98886956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8d7e685ba0d5a75400e33915d7c4e44bdd4f38' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/codigo.tpl',
      1 => 1415301808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132413564589e2dde15ad34-98886956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'codepage' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589e2dde26bf79_07933809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589e2dde26bf79_07933809')) {function content_589e2dde26bf79_07933809($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('modulos/codigo_i/menu-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cdg-of-content-one floatL">
<?php if ($_smarty_tpl->tpl_vars['action']->value=='prof') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/codigo_i/repositorio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='profarc'&&$_smarty_tpl->tpl_vars['codepage']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/codigo_i/archivo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['action']->value&&$_smarty_tpl->tpl_vars['codepage']->value=='page') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/codigo_i/pagina.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<center><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/i/code_white.png"><br />
	<div class="color_white size11">Pronto te mostraremos estadisticas e información sobre tu cuenta en Wortit code, Mientras puedes seguir usando el sistema como siempre.</div><br />
<a class="bg_green_3d btn color_white" onclick="reco_code_h.repos();">Hacer el recorido</a>
</center>
<div class="::sttr" role="sttr">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/ttr/code_h.js"></script>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/codigo_i/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
