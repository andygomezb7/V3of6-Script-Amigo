<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:50:55
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\vip_i\last_posts_vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17343547648c6ec82e7-04117862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '164e4ef2e1b390871171f74b790b56de9682b57b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\vip_i\\last_posts_vip.tpl',
      1 => 1417042214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17343547648c6ec82e7-04117862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c71ab3f4_23523799',
  'variables' => 
  array (
    'tsStikiv_p' => 0,
    'p' => 0,
    'wuser' => 0,
    'i' => 0,
    'tsConfig' => 0,
    'tsPostvip_p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c71ab3f4_23523799')) {function content_547648c71ab3f4_23523799($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['tsStikiv_p']->value) {?>
<h3>Posts Vip Importantes</h3>
<div class="posts" style="margin: 15px 8px 20px 8px;">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsStikiv_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']==1||$_smarty_tpl->tpl_vars['p']->value['estado']!=1&&$_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['p']->value['estado']!=1&&$_smarty_tpl->tpl_vars['wuser']->value->mod) {?>
<div id="elementop" style="<?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>border-top:3px double #CCC;<?php }?><?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>background:rgba(255, 0, 0, 0.2);<?php }?>">
<div class="postcontent">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['p']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['post_wdefined'];?>
.html" title="Leer la nota."><?php echo $_smarty_tpl->tpl_vars['p']->value['titulo'];?>
</a>
<p style="font-size: 11px;"><span style="style="color: #666;"">Hace <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['p']->value['hace']);?>
</span> · <span style="style="color: #666666;"">Visitas</span><span style="color: #666666;"> <?php echo $_smarty_tpl->tpl_vars['p']->value['visitas'];?>
</span></p>
<span class="cat" style="background: #36C25D;float: right;position: relative;bottom: 7px;right: -55px;z-index: 100;"><a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</a></span>
</div>
<div class="sliderNote">
<button class="Fav_nt qtip fvnt" data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" title="Favoritos"><div class="icons i16"></div></button>
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod) {?><button class="Fav_nt qtip fijn" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>2<?php } else { ?>1<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>Desfijar<?php } else { ?>Fijar<?php }?>"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt qtip born" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>1<?php } else { ?>2<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>Activar<?php } else { ?>Borrar<?php }?>"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button><?php }?>
</div>
</div>
<?php }?>
<?php } ?>		
</div>
<?php }?>
<br class="space"/>		
<h3>&Uacute;ltimos Posts Vip</h3>
<div class="posts" style="margin: 15px 8px 20px 8px;">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPostvip_p']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?><?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']==1||$_smarty_tpl->tpl_vars['p']->value['estado']!=1&&$_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['p']->value['estado']!=1&&$_smarty_tpl->tpl_vars['wuser']->value->mod) {?>
<div id="elementop" style="<?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>border-top:3px double #CCC;<?php }?><?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>background:rgba(255, 0, 0, 0.2);<?php }?>">
<div class="postcontent">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['p']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['post_wdefined'];?>
.html" title="Leer la nota."><?php echo $_smarty_tpl->tpl_vars['p']->value['titulo'];?>
</a>
<p style="font-size: 11px;">
<span style="style="color: #666;"">Hace <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['p']->value['hace']);?>
</span> · 
<span style="style="color: #666666;"">Visitas</span>
<span style="color: #666666;"> <?php echo $_smarty_tpl->tpl_vars['p']->value['visitas'];?>
</span>
</p>
<span class="cat" style="background: #36C25D;float: right;position: relative;bottom: 7px;right: -55px;z-index: 100;"><a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</a></span>
</div>
<div class="sliderNote">
<button class="Fav_nt qtip fvnt" data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" title="Favoritos"><div class="icons i16"></div></button>
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod) {?><button class="Fav_nt qtip fijn" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>2<?php } else { ?>1<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>Desfijar<?php } else { ?>Fijar<?php }?>"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt qtip born" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>1<?php } else { ?>2<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>Activar<?php } else { ?>Borrar<?php }?>"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button><?php }?>
</div>
</div><?php }?>
<?php }?>
<?php } ?>		
</div> 

<div id="more-com" aligen="center">
		<div id="new-paginate">
			<?php echo $_smarty_tpl->tpl_vars['tsPostvip_p']->value['pages'];?>

		</div>
	</div>
<?php }} ?>
