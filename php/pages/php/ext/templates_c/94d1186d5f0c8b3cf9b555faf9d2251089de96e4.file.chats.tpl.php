<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 05:48:26
         compiled from "/home/babanta/wortit.net/themes/default/chats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141723515158761b8a3c14c2-86434609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94d1186d5f0c8b3cf9b555faf9d2251089de96e4' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/chats.tpl',
      1 => 1417286710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141723515158761b8a3c14c2-86434609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eXexI' => 0,
    'get_' => 0,
    'tsUchats' => 0,
    'tsConfig' => 0,
    'ch' => 0,
    'tsInfo' => 0,
    'eXexIHig' => 0,
    'msgs' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58761b8a5b1e39_42989687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58761b8a5b1e39_42989687')) {function content_58761b8a5b1e39_42989687($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cht_hom_">
<div class="cht_hom_hr hidden">
<div class="cht_hom_lf floatL" <?php if ($_smarty_tpl->tpl_vars['eXexI']->value=='xKoLEk1RL1xE2Fl'&&$_smarty_tpl->tpl_vars['get_']->value['preg']=='view') {?>style="width:100%;"<?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['get_']->value['preg']||$_smarty_tpl->tpl_vars['get_']->value['preg']=='home') {?>
<div class="cht_box">
<div class="cht_box_t">Tus chats
<div class="floatR">
<a class="bg_green_3d btn color_white" style="text-shadow: 0 0 0 #FFFFFF;" onclick="chts.crmodl(1);">Crear chat</a></div>
</div>
<div class="cht_box_c ch_rg edtChGmMch">
<?php  $_smarty_tpl->tpl_vars['ch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsUchats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ch']->key => $_smarty_tpl->tpl_vars['ch']->value) {
$_smarty_tpl->tpl_vars['ch']->_loop = true;
?>
<li>
<div><h1><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/chat/ver-<?php echo $_smarty_tpl->tpl_vars['ch']->value['u_c_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ch']->value['u_c_contenido'];?>
 &nbsp; 
<?php if ($_smarty_tpl->tpl_vars['ch']->value['u_c_c1']==0) {?><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/gray_ball.png" class="qtip" title="Inactivo"/><?php } elseif ($_smarty_tpl->tpl_vars['ch']->value['u_c_c1']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/green_ball.png" class="qtip" title="Activo"/><?php } elseif ($_smarty_tpl->tpl_vars['ch']->value['u_c_c1']==2) {?><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/blue_ball.png" class="qtip" title="Desactivado por un moderado."/><?php } else { ?><?php }?>
</a>
<div class="floatR">
<a title="Editar chat" class="eje_cht" role="cht_1" data-o="<?php echo $_smarty_tpl->tpl_vars['ch']->value['u_c_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/do/edit.png" /></a>
<?php if ($_smarty_tpl->tpl_vars['ch']->value['u_c_c1']==0) {?>
<a title="Reactivar chat" class="eje_cht" role="cht_3" data-o="<?php echo $_smarty_tpl->tpl_vars['ch']->value['u_c_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/do/cross.png" /></a>
<?php } else { ?>
<a title="Desactivar chat" class="eje_cht" role="cht_2" data-o="<?php echo $_smarty_tpl->tpl_vars['ch']->value['u_c_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/do/delete.png" /></a>
<?php }?>
</div>
</h1><div class="color_gray size11"><?php echo $_smarty_tpl->tpl_vars['ch']->value['u_c_desc'];?>
</div></div>
</li>
<?php } ?>
</div>
<div class=":sttryl" role="sttr">
<div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/chtHDt.js"></script></div>
</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='view') {?>
<div class="cht_box">
<?php if (!$_smarty_tpl->tpl_vars['eXexI']->value||$_smarty_tpl->tpl_vars['eXexI']->value!='xKoLEk1RL1xE2Fl'&&$_smarty_tpl->tpl_vars['tsInfo']->value['u_c_type']==3) {?><div class="cht_box_t"><a class="btn_green btn color_white" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/chat/">Volver</a> <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_contenido'];?>
</div><?php }?>
<div class="cht_box_c">
<?php if (!$_smarty_tpl->tpl_vars['eXexI']->value||$_smarty_tpl->tpl_vars['eXexI']->value!='xKoLEk1RL1xE2Fl'&&$_smarty_tpl->tpl_vars['tsInfo']->value['u_c_type']==3) {?><div class="color_gray size11" style="padding: 4px 4px;border-bottom: 1px solid #DDDDDD;max-height: 200px;overflow-y: auto;overflow-x: hidden;"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_desc'];?>
</div><?php }?>
<div class="cht_msgs" role="ldcht" data-i="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['eXexI']->value=='xKoLEk1RL1xE2Fl'&&$_smarty_tpl->tpl_vars['eXexIHig']->value) {?>style="height:<?php echo $_smarty_tpl->tpl_vars['eXexIHig']->value;?>
;"<?php }?>>
<div class="cht_msg_font" data-e="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_id'];?>
">
<div class="font"></div>
<?php if ($_smarty_tpl->tpl_vars['msgs']->value) {?><?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['t']->value['u_c_contenido'];?>
</li><?php } ?>
<?php } else { ?><div id="error_flat">No hay mensajes aún.</div><?php }?>
<center><input type="button" id="loadchat" data-i='<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_id'];?>
' value="Empezar" class="btn_green btn color_white" style="z-index: 100;position: absolute;"/></center>
</div>
</div>
  <div class="cht_formset">
  	<div class="clearfix lodsgsubi dsnone" data-li="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_id'];?>
"><center><h1><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/loading_bar.gif" /></h1></center></div>
  <input type="text" class="floatL" id="txnvdata" placeholder="Escribe tu mensaje..." style="width: 92.2%;">
  <input type="button" value="Enviar" id="submitmsg" data-li='<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_id'];?>
' class="btn_green btn color_white floatL" style="line-height: 17px;border-radius: 0;width: 7%;margin: 0;">
  <input type="hidden" name="ajchld" value="0" data-ie="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['u_c_id'];?>
" />
  </div>
</div>
</div>
<?php }?>
</div>

<?php if (!$_smarty_tpl->tpl_vars['eXexI']->value&&$_smarty_tpl->tpl_vars['get_']->value['preg']=='view'||$_smarty_tpl->tpl_vars['eXexI']->value!='xKoLEk1RL1xE2Fl'&&$_smarty_tpl->tpl_vars['get_']->value['preg']=='view'&&$_smarty_tpl->tpl_vars['tsInfo']->value['u_c_type']!=3) {?>
<div class="cht_hom_rg floatL">

<div class="cht_box">
<div class="cht_box_t">Anuncios</div>
<div class="cht_box_c">
<iframe width="306" height="605" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/php/pages/ejects/globalads/?q=3&usk=1&ssa=skkl-yvaq&sse=5&abg=chats&avg=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/chat/"></iframe>
</div>
</div>

</div><?php }?>

</div>
<div class="::sttryle" role="sttr">
<div><?php if ($_smarty_tpl->tpl_vars['get_']->value['preg']=='view') {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/cht/chtLod_11.js"></script><?php }?>
<?php if ($_smarty_tpl->tpl_vars['eXexI']->value=='xKoLEk1RL1xE2Fl'&&$_smarty_tpl->tpl_vars['get_']->value['preg']=='view'&&$_smarty_tpl->tpl_vars['tsInfo']->value['u_c_type']==3) {?>
<style type="text/css">
#menuPrncpl{display: none!important;}
#headtotalhe{margin:0!important;}
#footer{display: none!important;}
#strcth{display: none!important;}
</style>
<?php }?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
