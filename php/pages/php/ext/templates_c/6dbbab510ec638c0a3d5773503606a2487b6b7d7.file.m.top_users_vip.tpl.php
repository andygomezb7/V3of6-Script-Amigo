<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:53:45
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\vip_i\m.top_users_vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23771547648c753ec64-26580040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dbbab510ec638c0a3d5773503606a2487b6b7d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\vip_i\\m.top_users_vip.tpl',
      1 => 1417042413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23771547648c753ec64-26580040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c766ff38_73642096',
  'variables' => 
  array (
    'tsTopuv_p' => 0,
    'i' => 0,
    'tsConfig' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c766ff38_73642096')) {function content_547648c766ff38_73642096($_smarty_tpl) {?><div id="top-u-vip">
<h3>Top Usuarios Vip</h3>
<ul>
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsTopuv_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['u']->key;
?>
<li <?php if ($_smarty_tpl->tpl_vars['i']->value==6) {?>style="border-bottom:none;"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
/"><img class="qtop" uid="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
"></img></a>
<span><a style="color:#<?php echo $_smarty_tpl->tpl_vars['u']->value['r_color'];?>
;text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
/"><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
</a><br/>
<?php echo $_smarty_tpl->tpl_vars['u']->value['r_name'];?>

</span>
<div class="t-u-vip"><b><?php if ($_smarty_tpl->tpl_vars['u']->value['total']<10) {?>0<?php }?><?php if ($_smarty_tpl->tpl_vars['u']->value['total']<100) {?>0<?php }?></b><?php echo $_smarty_tpl->tpl_vars['u']->value['total'];?>
 Puntos.<br/>
<b><?php if ($_smarty_tpl->tpl_vars['u']->value['cant']<10) {?>0<?php }?><?php if ($_smarty_tpl->tpl_vars['u']->value['cant']<100) {?>0<?php }?></b><?php echo $_smarty_tpl->tpl_vars['u']->value['cant'];?>
 Posts.</div></li>
<?php } ?>
</ul>
</div><?php }} ?>
