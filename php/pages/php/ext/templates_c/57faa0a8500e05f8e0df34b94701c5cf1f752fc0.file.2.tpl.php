<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 17:49:15
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\new_i\temas\2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2771545445eadd40a0-04326160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57faa0a8500e05f8e0df34b94701c5cf1f752fc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\new_i\\temas\\2.tpl',
      1 => 1417040679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2771545445eadd40a0-04326160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545445eb1e8482_47480783',
  'variables' => 
  array (
    'tsPostHome' => 0,
    'p' => 0,
    'i' => 0,
    'tsConfig' => 0,
    'wuser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545445eb1e8482_47480783')) {function content_545445eb1e8482_47480783($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.truncate.php';
?><ul class="wrapper_not">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPostHome']->value['todas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['id']||$_smarty_tpl->tpl_vars['p']->value['titulo']!='[') {?>
<li class="ntt <?php if ($_smarty_tpl->tpl_vars['i']->value%3==0&&$_smarty_tpl->tpl_vars['i']->value!=0) {?>port<?php }?>" <?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>style="background:rgba(255, 0, 0, 0.22);"<?php }?>>
<div class="wrppr_nt">
<?php if ($_smarty_tpl->tpl_vars['i']->value%3==0&&$_smarty_tpl->tpl_vars['i']->value!=0) {?><div class="bnnr_nt floatR"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/256/169/?file=<?php echo $_smarty_tpl->tpl_vars['p']->value['banner'];?>
"></div><?php } else { ?><div class="bnnr_nt floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/82/82/?file=<?php echo $_smarty_tpl->tpl_vars['p']->value['banner'];?>
"></div><?php }?>
<div class="bdy_nt zoom">
<div class="bdy_wrppr_nt">
<h3><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['p']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['post_wdefined'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['p']->value['titulo'];?>
</a></h3>
<p class="smmry_nt hidden"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['detalle'],210);?>
</p>
</div>
<div class="atrbtns_nt"><span><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</span></div>
</div>
<div class="sldr_nt">
<button class="Fav_nt qtip fvnt" data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" title="Favoritos"><div class="icons i16"></div></button>
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod) {?><button class="Fav_nt qtip fijn" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>2<?php } else { ?>1<?php }?>" title="Fijar"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt qtip born" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>1<?php } else { ?>2<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>Activar<?php } else { ?>Borrar<?php }?>"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button><?php }?>
</div>
</div>
</li>
<?php }?>
<?php } ?>
</ul>
<div class="::stras:_:_stttrs">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/temas/notas_2.css">
</div><?php }} ?>
