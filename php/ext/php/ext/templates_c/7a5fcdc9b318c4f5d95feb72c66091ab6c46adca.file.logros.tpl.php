<?php /* Smarty version Smarty-3.1.19, created on 2017-02-05 03:04:13
         compiled from "/home/babanta/wortit.net/themes/default/ajax_files/perfil/logros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15652471065896ea8d9fa3d9-79700238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a5fcdc9b318c4f5d95feb72c66091ab6c46adca' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/ajax_files/perfil/logros.tpl',
      1 => 1400266016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15652471065896ea8d9fa3d9-79700238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'st' => 0,
    'u' => 0,
    'tsConfig' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5896ea8dae0a52_93403028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896ea8dae0a52_93403028')) {function content_5896ea8dae0a52_93403028($_smarty_tpl) {?><div class="posts">
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['st']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<div id="elementop">
<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/medals/<?php echo $_smarty_tpl->tpl_vars['m']->value['m_image'];?>
" style="width: 26px;height: 32px;"></a>
<div class="postcontent">
<a ><?php echo $_smarty_tpl->tpl_vars['m']->value['m_title'];?>
</a>
<p style="font-size: 11px;"><span style="style=" color:="" #666;""=""><?php echo $_smarty_tpl->tpl_vars['m']->value['m_desc'];?>
</span></p>
</div>
</div>
<?php } ?>
</div><?php }} ?>
