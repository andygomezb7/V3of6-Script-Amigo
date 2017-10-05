<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:53:45
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\vip_i\m.comentarios_vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17877547648c7319751-73294564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4799d027a09f2146fc12fe85df7efc92c6d0ddc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\vip_i\\m.comentarios_vip.tpl',
      1 => 1417042349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17877547648c7319751-73294564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c73d0906_32191393',
  'variables' => 
  array (
    'tsComvip_p' => 0,
    'i' => 0,
    'tsConfig' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c73d0906_32191393')) {function content_547648c73d0906_32191393($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.truncate.php';
?><div id="coment-vip">
  <h3>&Uacute;ltimos Comentarios</h3>
  <ul>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsComvip_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
<li <?php if ($_smarty_tpl->tpl_vars['i']->value==6) {?>style="border-bottom:none;"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['usuario_nombre'];?>
"><img class="hovercard" uid="<?php echo $_smarty_tpl->tpl_vars['c']->value['usuario_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['c']->value['w_avatar'];?>
"></img></a>
<span style="color:#<?php echo $_smarty_tpl->tpl_vars['c']->value['r_color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['c']->value['usuario_nombre'];?>
</span><br/>
<div class="title-com"><a alt="<?php echo $_smarty_tpl->tpl_vars['c']->value['titulo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['titulo'];?>
" target="_self"  href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['c']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['post_wdefined'];?>
.html#comentarios-abajo"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['titulo'],45);?>
</a></div>
</li>
<?php } ?>
</ul>
</div><?php }} ?>
