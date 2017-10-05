<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 22:44:51
         compiled from "./themes/default/modulos/home_i/publicador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7551616345875b84343bb52-95466574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '034f2c1ada22d24ff4034c81e045563870353c3b' => 
    array (
      0 => './themes/default/modulos/home_i/publicador.tpl',
      1 => 1418692870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7551616345875b84343bb52-95466574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsPage' => 0,
    'pubprofile' => 0,
    'pubgroup' => 0,
    'u' => 0,
    'tsInfo' => 0,
    'tsGrupo' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875b843474799_38969133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875b843474799_38969133')) {function content_5875b843474799_38969133($_smarty_tpl) {?><div class="publicdr" <?php if ($_smarty_tpl->tpl_vars['tsPage']->value=='home') {?>style="margin: -10px -6px -17px -6px;border-top-width: 0;"<?php }?>>
<form method="POST" enctype="multipart/form-data" action="javascript: <?php if ($_smarty_tpl->tpl_vars['pubprofile']->value||$_smarty_tpl->tpl_vars['pubgroup']->value) {?>skflwqlq();<?php } else { ?>skflwqlq(true);<?php }?> return false;" />
<div class="top_header clearfix hidden"><ul><li><a id="text"><span class="lsf" style="font-size: 16px;margin: 0px -8px 0px 0px;">quote</span><span>Publicar Bwort</span></a></li><li><a id="img"><span class="lsf" style="font-size: 16px;margin: 0px -8px 0px 0px;">image</span><span>Subir foto</span></a></li><li><a id="link"><span class="lsf" style="font-size: 16px;margin: 0px -8px 0px 0px;">link</span><span>Publicar enlace</span></a></li></ul><div class="loadingbw floatR dsnone hidden" style="position: relative;margin: -31px 7px 0px 0px;">Cargando...<i class="load" style="width:23px;height:23px;"></i></div></div>
<div class="contnt hidden">
<div class="indc">
<div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" class="width32"></div>
<div class="pub floatL"><textarea id="text_vales" placeholder="Escribe aqui..."></textarea></div>
</div>
<div class="result">
<div class="img hidden dsnone"><div class="rsldsim_1" tclass="1" id="filesimg"><img id="vistaPrevia" /><input type="file" tclass="1" id="input_file" class="input_file desact"></div><input name="tcont_s654wnsttr" type="hidden" value="" /></div>
<div class="video hidden dsnone"><div class="ttcont dsnone"></div><div id="cont"><input type="text" name="holdcontent" placeholder="Ingresa enlace de youtube aqui." /><input type="button" class="input_button" id="video" Onclick="skdfqlw($(this), $(this).attr('id'));" value="Añadir" /></div><div id="error" class="dsnone"></div></div>
<div class="link hidden dsnone"><div class="ttcont dsnone"></div><div id="cont"><input type="text" name="holdcontent" placeholder="Ingresa el enlace aqui." /><input type="button" class="input_button" value="Añadir" id="link" Onclick="skdfqlw($(this), $(this).attr('id'));"/></div><div id="error" class="dsnone"></div></div></div>
</div>
<div class="pub_btns hidden"><a class="floatL qtip" title="Expresa con solo texto" id="text"><i class="text active"></i></a><a class="floatL lftmrg qtip" title="Expresa con una imagen" id="img"><i class="img"></i></a><a class="floatL lftmrg qtip" title="Expresa con un video" id="video"><i class="video"></i></a><a class="floatL lftmrg qtip" title="Expresa con un enlace" id="link"><i class="link"></i></a>
<div class="floatR">
<div class="floatL"><div class="floatL hover pub_infppa_1 cursorP" style="color: #333333;padding: 7px 8px;"><span>Publico</span> <input type="hidden" id="pub_infppa_3" value="1"/></div>
<ul id="SDF65Sf19" class="pub_infppa" style="margin: 30px 0px 0px 0px;"> 
<div id="prn">
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('1');$('.pub_infppa_1 span').html('Publico');">Publico</a></li> 
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('2');$('.pub_infppa_1 span').html('Amigos');">Amigos</a></li>
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('3');$('.pub_infppa_1 span').html('Solo yo');">Solo yo</a></li>
<li class="first"><a class="active" onclick="$('#pub_infppa_3').val('4');$('.pub_infppa_1 span').html('Mi aula');">Mi aula</a></li>
</div>
<div id="textselect" class="dsnone">
<li class="first"><a class="active" onclick="window.clipboardData.setData(" text",="" document.getselection());"="">Copiar</a></li> 
</div>
</ul>
</div>
<input type="button" onclick="<?php if ($_smarty_tpl->tpl_vars['pubprofile']->value||$_smarty_tpl->tpl_vars['pubgroup']->value) {?>skflwqlq();<?php } else { ?>skflwqlq(true);<?php }?>" value="Publicar" class="input_button btn55758s" style="opacity:0.3;"><input type="hidden" name="intTypeB" id="intTypeB" value="text" /><input type="hidden" name="intTBD" id="intTBD" value="5s49w856ew53_sd546e3fs-5s" />
<?php if ($_smarty_tpl->tpl_vars['pubprofile']->value) {?><input type="hidden" class="bxidt" value="1">
<input type="hidden" class="bxcontent" value="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['pubgroup']->value) {?><input type="hidden" class="bxidt" value="2">
<input type="hidden" class="bxcontent" value="<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['idgrupo'];?>
"><?php }?>
</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/pubcontents.css" />
<style type="text/css"> .lftmrg{padding: 0px 0px 0px 9px;} .btn55758s{border-radius: 0;box-shadow: none;padding: 9px 11px;margin: -1px 0px;} .result input[type=text]{width: 85%;margin: 0px 0px 0px 6px;} .result input[type=button]{border-radius: 0;border-left-width: 0;padding: 7.4px 8px;} </style>
</form>
</div><?php }} ?>
