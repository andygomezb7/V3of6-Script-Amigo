<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:53:45
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\vip_i\m.users_vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13790547648c6dd40a3-28720439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c561023995c5094f8ab46050116883f679d857b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\vip_i\\m.users_vip.tpl',
      1 => 1417042420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13790547648c6dd40a3-28720439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c6e8b253_50523220',
  'variables' => 
  array (
    'tsUservip_u' => 0,
    'tsConfig' => 0,
    'r' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c6e8b253_50523220')) {function content_547648c6e8b253_50523220($_smarty_tpl) {?>
<ul>
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsUservip_u']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['u']->key;
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
" style="color:#<?php echo $_smarty_tpl->tpl_vars['u']->value['r_color'];?>
;margin:2px 5px 2px 5px;text-decoration:none;display:block;" class="qtip hidden" title="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['u']->value['w_avatar']==null) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
<?php }?>" style="display:block;"/></a></li>
<?php } ?>
</ul><?php }} ?>
