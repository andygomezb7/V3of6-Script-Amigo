<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 22:37:35
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\perfil\logros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16864546acd0f1312d9-20841287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f996e289ba4345bcb95e5d9efbbcf25a93b0bfbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\perfil\\logros.tpl',
      1 => 1400269616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16864546acd0f1312d9-20841287',
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
  'unifunc' => 'content_546acd0f2625a3_05984328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546acd0f2625a3_05984328')) {function content_546acd0f2625a3_05984328($_smarty_tpl) {?><div class="posts">
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
