<?php /* Smarty version Smarty-3.1.19, created on 2014-09-20 16:39:12
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\user\vcard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10933541e003aa037a2-91131316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0779d059b7d3eea73af0821ecb1ffbe5984bb7f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\user\\vcard.tpl',
      1 => 1411252658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10933541e003aa037a2-91131316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541e003aaba957_67139259',
  'variables' => 
  array (
    'tsData' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e003aaba957_67139259')) {function content_541e003aaba957_67139259($_smarty_tpl) {?><div class="hovercard-inner">
	<div class="contenedor">  
	<div class="header">
	<div class="imges"><div class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['tsData']->value['avatar'];?>
" class="width32"></div>
    <div class="postd"><img src="<?php echo $_smarty_tpl->tpl_vars['tsData']->value['p_cabecera'];?>
" style="width:100%;height:47px;"></div>
    </div>
    <div class="nameu"><?php echo $_smarty_tpl->tpl_vars['tsData']->value['usuario_nombre'];?>
</div>
    </div>
	</div>
	<div class="more-more">
		<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsData']->value['usuario_nombre'];?>
">M&aacute;s Informaci&oacute;n</a>	
	</div>
</div><?php }} ?>
