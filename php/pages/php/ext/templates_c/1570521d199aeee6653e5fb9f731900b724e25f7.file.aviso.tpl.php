<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 21:22:52
         compiled from "C:\xampp\htdocs\w\themes\default\aviso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14844545847f2501bd9-71504154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1570521d199aeee6653e5fb9f731900b724e25f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\aviso.tpl',
      1 => 1415072290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14844545847f2501bd9-71504154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545847f266ff32_91378712',
  'variables' => 
  array (
    'tsAviso' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545847f266ff32_91378712')) {function content_545847f266ff32_91378712($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
<div style="margin: 10px auto 0 auto;" class="container400">
<div class="box_title">
<div class="box_txt show_error"><?php echo $_smarty_tpl->tpl_vars['tsAviso']->value['titulo'];?>
</div>
<div class="box_rrs"><div class="box_rss"></div></div>
</div>
<div align="center" class="box_cuerpo"><br />
<?php echo $_smarty_tpl->tpl_vars['tsAviso']->value['mensaje'];?>

<br /><br />
<?php if ($_smarty_tpl->tpl_vars['tsAviso']->value['but']) {?>
<input type="button" onclick="location.href='<?php if ($_smarty_tpl->tpl_vars['tsAviso']->value['link']) {?><?php echo $_smarty_tpl->tpl_vars['tsAviso']->value['link'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
<?php }?>'" value="<?php echo $_smarty_tpl->tpl_vars['tsAviso']->value['but'];?>
" style="font-size:13px" class="input_button">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tsAviso']->value['return']) {?>
<input type="button" onclick="history.go(-<?php echo $_smarty_tpl->tpl_vars['tsAviso']->value['return'];?>
)" title="Volver" value="Volver" style="font-size:13px" class="input_button">
<?php }?>
<br /><br />
</div>	
</div>
<br /><br /><br /><br />
<div style="clear:both"></div>
<style type="text/css">
.container400{width: 400px;}
.box_title{background:url('../images/box_titlebg2.gif');padding:3px 2px;height:25px;-moz-border-radius-topleft: 5px;-moz-border-radius-topright: 5px;-webkit-border-top-left-radius: 5px;-webkit-border-top-right-radius: 5px;border: 1px solid #CCC;text-align: -webkit-center;font-size: 14px;line-height: 21px;}
.box_txt.publicidad_ultimos_comentarios_de{width:190px;}
.box_cuerpo {background:#E9E9E9;padding:8px;margin:0 auto;white-space: normal;border: 1px solid #CCC;border-top: none;-moz-border-radius-bottomleft: 5px;-moz-border-radius-bottomright: 5px;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;}
</style>    
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
