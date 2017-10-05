<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:53:45
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\vip_i\m.top_posts_vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20970547648c740d993-80027067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc0baf55659755c0bfe68274ddc7d3fe7d838c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\vip_i\\m.top_posts_vip.tpl',
      1 => 1417042379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20970547648c740d993-80027067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c7501bd9_22788936',
  'variables' => 
  array (
    'tsToppv_p' => 0,
    't' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c7501bd9_22788936')) {function content_547648c7501bd9_22788936($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.truncate.php';
?>

<div id="top-p-vip">
<h3>Top Posts Vip</h3>
<ul>
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsToppv_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
<li><a alt="<?php echo $_smarty_tpl->tpl_vars['t']->value['titulo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['titulo'];?>
" target="_self"  href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['t']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['post_wdefined'];?>
.html"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['t']->value['titulo'],45);?>
</a><br/>
<span>Por: <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
" class="qtip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
" style="color:#<?php echo $_smarty_tpl->tpl_vars['t']->value['r_color'];?>
;font-weight:300;"><?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
</a> &raquo; Comentarios: <?php echo $_smarty_tpl->tpl_vars['t']->value['post_comments'];?>
  &raquo; Visitas:<?php echo $_smarty_tpl->tpl_vars['t']->value['visitas'];?>
</span>
</li>
<?php } ?>
</ul>
</div><?php }} ?>
