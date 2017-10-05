<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 05:28:39
         compiled from "/home/babanta/wortit.net/themes/default/modulos/new_i/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:551470077587616e719ed44-76069800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404911eb594093778f5ccc812a1ddfdb549d7430' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/new_i/home.tpl',
      1 => 1416950386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551470077587616e719ed44-76069800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'catshome' => 0,
    'c' => 0,
    'tsConfig' => 0,
    'tsPostHome' => 0,
    'p' => 0,
    'wuser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587616e7242772_00120737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587616e7242772_00120737')) {function content_587616e7242772_00120737($_smarty_tpl) {?><div class="home hidden">
<div class="lftnts floatL">
<div class="cats_home">
<ul>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catshome']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<li catid="<?php echo $_smarty_tpl->tpl_vars['c']->value['id_categoria'];?>
"><i class="width16 floatL rmrg100" style="background:url(<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/icons/cats/<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_icono'];?>
) no-repeat;"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['c']->value['wdefined'];?>
/"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</a></li>
<?php } ?>
</ul>
</div>
</div>
<div class="cntrnts floatL notas">
<?php echo $_smarty_tpl->getSubTemplate ('modulos/new_i/temas/2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="pags"><?php echo $_smarty_tpl->tpl_vars['tsPostHome']->value['todas']['pages'];?>
</div>
</div>
<div class="rghtnts floatL">
<div class="hidden clearfix" style="margin: 0 0 8px 0;">
	<h3 class="color_gray" style="font-weight: normal;font-size: 15px;padding: 0 0 7px 0;border-bottom: 1px solid #CCCCCC;">Notas importantes</h3>
<div class="notas">
<ul class="wrapper_not">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPostHome']->value['Ttodas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>
<li class="ntt Fijs" style="padding: 7px 4px;<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>background:rgba(255, 0, 0, 0.22);<?php }?>">
<div class="hidden clearfix wrppr_nt">
  <div class="floatL" style="width: 26%;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/82/82/?file=<?php echo $_smarty_tpl->tpl_vars['p']->value['banner'];?>
" style="width: 100%;float: left;"></div>
<div class="floatL" style="width: 63%;margin: 0 0 0 4px;"><div class="hidden clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['p']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['post_wdefined'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['p']->value['titulo'];?>
</a></div>
<span class="size11 color_gray clearfix"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</span></div>
<div class="sldr_nt">
<button class="Fav_nt etip fvnt" data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" title="Favoritos"><div class="icons i16"></div></button>
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod) {?><button class="Fav_nt etip fijn" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['sticky']==1) {?>2<?php } else { ?>1<?php }?>" title="DesFijar"><div class="icons i16" style="background-position: -104px 0px;width: 13px;"></div></button><button class="Fav_nt etip born" data-obj="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>1<?php } else { ?>2<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['p']->value['estado']!=1) {?>Activar<?php } else { ?>Borrar<?php }?>"><div class="lsf" style="background-position: inherit;font-size: 22px;line-height: 17px;">close</div></button><?php }?>
</div>
</div>
</li>
<?php }?>
<?php } ?>
</ul>
</div>
</div>
<ins><iframe width="306" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/"></iframe></ins>
</div>
<div class="dsnone">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/not_actns.js"></script>
<style type="text/css">
.home{}
.home .lftnts{width: 15.2%;margin: 0px 0px 0px 11px;}
.home .lftnts .cats_home{}
.home .lftnts .cats_home ul li{margin: 11px 0px;}
.home .cntrnts{width: 51%;margin: 0px 4px 0px 4px;}
.home .rghtnts{width: 30.9%;margin: 0px 0px 0px 9px;}
.mrgnleft{margin: 0px 0px 0px 6px;}
.rmrg100{margin: 0px 9px 0px 0px;}
</style>
</div>
</div><?php }} ?>
