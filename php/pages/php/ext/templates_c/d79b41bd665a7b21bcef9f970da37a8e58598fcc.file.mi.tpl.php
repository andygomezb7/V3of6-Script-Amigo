<?php /* Smarty version Smarty-3.1.19, created on 2017-01-25 23:11:34
         compiled from "/home/babanta/wortit.net/themes/default/modulos/soporte_i/mi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1295924419588985060d1f10-35901516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79b41bd665a7b21bcef9f970da37a8e58598fcc' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/soporte_i/mi.tpl',
      1 => 1414464206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295924419588985060d1f10-35901516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'misproyectos' => 0,
    'tsConfig' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588985061bfde5_57667469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588985061bfde5_57667469')) {function content_588985061bfde5_57667469($_smarty_tpl) {?>
<div style="width: 81%;overflow: hidden;float: left;">
  <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['misproyectos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<div style="overflow: hidden;background: #fff;border: 1px solid #D1D7E6;padding: 3px 3px;overflow: hidden;margin: 0px 7px 2px 0px;  background: #E4E8ED;  position: relative;width: 48%;float: left;">
  <div style="overflow: hidden;float: left;width: 100%;">
    <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['p']->value['sf_seo'];?>
/" style="float: left;" id="hoverefect1"><div id="hf1">Click aqui</div><img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['sf_img'];?>
" style="width: 64px;height: 64px;"></a>
    <div style="float: left;overflow: hidden;margin: 0px 0px 0px 7px;width: 80%;">
    <div style="font-weight: bold;font-size: 13px;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['p']->value['sf_seo'];?>
/"><?php echo $_smarty_tpl->tpl_vars['p']->value['sf_name'];?>
</a></div>
    <div style="font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['p']->value['sf_desc'];?>
</div>
    </div>
  </div>
</div>
  <?php } ?>
</div>

<div style="float: left;width: 19%;"><div style="min-height: 201px;padding: 8px 5px;background: #ECE055;"><b>Un poco de información</b><br> 
Un proyecto es un sistema para administrar tus pedidos o peticiones, es un sistema que te facilita la administración de peticiones via temas creados en tu proyecto.
<br /><br />
Puedes administrar tus categorias para organizar mejor tus temas...
</div></div>
<?php }} ?>
