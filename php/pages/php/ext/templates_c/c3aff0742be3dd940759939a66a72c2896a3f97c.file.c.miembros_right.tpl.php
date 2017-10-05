<?php /* Smarty version Smarty-3.1.19, created on 2017-01-25 17:33:36
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.miembros_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1429071962588935d00ae898-15782937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3aff0742be3dd940759939a66a72c2896a3f97c' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.miembros_right.tpl',
      1 => 1393293916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1429071962588935d00ae898-15782937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsUltimos' => 0,
    'tsConfig' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588935d00d05f3_33079427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588935d00d05f3_33079427')) {function content_588935d00d05f3_33079427($_smarty_tpl) {?><div class="com_new_box">
    <div class="com_box_title clearfix"><h2>&Uacute;ltimos miembros</h2></div>
    <div class="clearfix">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsUltimos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" title="Ir al perfil de <?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" alt="Ir al perfil de <?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" class="floatL hovercard" uid="<?php echo $_smarty_tpl->tpl_vars['a']->value['m_user'];?>
" style="margin-right:1px;margin-bottom:1px;"><img src="<?php echo $_smarty_tpl->tpl_vars['a']->value['w_avatar'];?>
" width="35" height="35" /></a>
        <?php } ?>
    </div>
</div><?php }} ?>
