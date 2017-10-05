<?php /* Smarty version Smarty-3.1.19, created on 2014-12-15 20:06:39
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\bworts\load.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4909548f93af44aa20-43986777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a343a717f1baf2824f0e6fd6fc80c9ca8e4d18eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\bworts\\load.tpl',
      1 => 1418694707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4909548f93af44aa20-43986777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blobloadForeach' => 0,
    'bload' => 0,
    'b' => 0,
    'tsConfig' => 0,
    'i' => 0,
    '_SESSION' => 0,
    'bid' => 0,
    'cw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548f93afb71b00_60859319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f93afb71b00_60859319')) {function content_548f93afb71b00_60859319($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['blobloadForeach']->value) {?>1:<?php }?>
<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bload']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['b']->value['novistas']==0&&$_smarty_tpl->tpl_vars['b']->value['novis']==1&&$_smarty_tpl->tpl_vars['b']->value['ocultar']<=0) {?>
<div class="bworts hidden" id="<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
_L">
<div class="content hidden">
<div class="header hidden">
<div class="img floatL wortip" uid="<?php echo $_smarty_tpl->tpl_vars['b']->value['usuario_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/42/42/?file=<?php if ($_smarty_tpl->tpl_vars['b']->value['w_avatar']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['w_avatar'];?>
<?php } else { ?>http://www.wortit.net/images/avatar/group.png<?php }?>" />
<div class="submenu dsnone"><ul><li><a class="hover" onclick="msg.add('<?php echo $_smarty_tpl->tpl_vars['b']->value['usuario_nombre'];?>
');">Enviar mensaje</a></li><li><a class="hover">Bloquear</a></li></ul></div>
</div>
<div class="head floatL">
<h3><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['usuario_nombre'];?>
/"><?php if ($_smarty_tpl->tpl_vars['b']->value['usuario_nombre']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['usuario_nombre'];?>
<?php } else { ?>Anonimo<?php }?></a></h3>
<span><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['usuario_nombre'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/">
<?php if ($_smarty_tpl->tpl_vars['b']->value['a']['usuario_id']&&$_smarty_tpl->tpl_vars['b']->value['a']['usuario_id']!=$_smarty_tpl->tpl_vars['b']->value['usuario_id']) {?>Publico via <span class="b wortip" uid="<?php echo $_smarty_tpl->tpl_vars['b']->value['a']['usuario_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['a']['usuario_nombre'];?>
</span>
<?php } elseif ($_smarty_tpl->tpl_vars['b']->value['g']['idgrupo']) {?>Publico en Grupo #<?php echo $_smarty_tpl->tpl_vars['b']->value['g']['idgrupo'];?>
<?php } else { ?>Publico un bwort<?php }?>

<?php if ($_smarty_tpl->tpl_vars['b']->value['bw_type']==2) {?> · <?php echo $_smarty_tpl->tpl_vars['b']->value['num']['images'];?>
 imagenes<?php } elseif ($_smarty_tpl->tpl_vars['b']->value['bw_type']==3) {?> · un video<?php } elseif ($_smarty_tpl->tpl_vars['b']->value['bw_type']==4) {?> · una nota<?php } elseif ($_smarty_tpl->tpl_vars['b']->value['bw_type']==5) {?> · un enlace<?php }?></a> - <span class="b"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['b']->value['hace']);?>
</span></span>
</div>
<div class="floatR options">
<div class="buttton"><a onclick="if($('.sbmn#1515_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').css('display') == 'none'){$('.sbmn#1515_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').fadeIn();}else{$('.sbmn#1515_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').fadeOut(250);}">
<i class="optbwort"></i></a>
<div class="sbmn dsnone" id="1515_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><ul><li><a class="hover" onclick="acbw.delet(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);">Eliminar</a></li><li><a class="hover" onclick="acbw.edtBwrt_Send(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 1);">Editar</a></li><li><a class="hover" onclick="acbw.ocu(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);">Ocultar</a></li></ul></div>
</div>
</div>
</div>
<div class="cont hidden" id="edtrBwrt_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
<div class="txtraEdtr_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
 txtraedt hidden dsnone"><?php if ($_smarty_tpl->tpl_vars['b']->value['idusuario']==$_smarty_tpl->tpl_vars['_SESSION']->value) {?><div class="dsnone" id="error"></div><textarea class="txtra_val_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['texto'];?>
</textarea><input type="button" class="btn_green floatL" id="btn_edtbwrt1_<?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
" onclick="acbw.edtBwrt_Send(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);" value="Editar Bwort" /><input type="button" onclick="acbw.edtBwrt_Send(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 2);" class="input_button" value="cancelar" /><?php } else { ?><div id="error">Este bwort no te pertenece.</div><?php }?></div>
<span class="cont_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
_context"><?php echo $_smarty_tpl->tpl_vars['b']->value['texto'];?>
</span>
<?php if ($_smarty_tpl->tpl_vars['b']->value['typei']==1) {?>
<div class="cet">
	<?php if ($_smarty_tpl->tpl_vars['b']->value['bw_type']==2) {?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['b']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['b']->value['num']['images']==1) {?>
    <center><img onclick="acbw.iiE(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['bwi_id'];?>
);" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['i']->value['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['i']->value['up_ftype'];?>
" style="max-width: 100%;max-height: 375px;border: 1px solid #E7E7E7;cursor: -webkit-zoom-in;" class="cursorP"></center>
    <?php } else { ?>
    <div class="img_loaded floatL hidden cursorP" onclick="acbw.iiE(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['bwi_id'];?>
);"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['i']->value['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['i']->value['up_ftype'];?>
" style="cursor: -webkit-zoom-in;" /></div>
    <?php }?>
    <?php } ?>
    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['bw_type']==3) {?>
    <center><div class="video_player" vid="<?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt'];?>
">
    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['b']->value['bw_content'];?>
"><img class="i_img" src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt'];?>
/mqdefault.jpg"></a>
    <i class="player_icon"></i>
    <span class="vid_title" style="top: 0;left: 1px;"><a target="_blank" class="cwhite" href="<?php echo $_smarty_tpl->tpl_vars['b']->value['bw_content'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['metatags']['title'];?>
</a></span>
    </div></center>
    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['bw_type']==4) {?>
    <div class="nota hidden">
    <div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/200/200/?file=<?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['banner'];?>
" /></div>
    <div class="content floatL hidden">
    <div class="title hidden"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['post_wdefined'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['titulo'];?>
</a></div>
    <div class="text hidden"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['b']->value['nota']['detalle'],230);?>
</div>
    <div class="info color_gray size11">@<?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['usuario_nombre'];?>
 - <?php echo $_smarty_tpl->tpl_vars['b']->value['nota']['nombre'];?>
</div>
    </div>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['bw_type']==5) {?>
    <div class="linkb_enlace hidden">
    <div class="imge floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt']['img'];?>
"></div>
    <div class="contente floatL">
    <div class="titlee"><?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt']['title'];?>
</div>
    <div class="descripe"><?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt']['desc'];?>
</div>
    <div class="DsnrlUlrin" title="<?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt']['url'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/url/?u=<?php echo $_smarty_tpl->tpl_vars['b']->value['cntnt']['url'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['b']->value['cntnt']['url'],36);?>
</a></div>
    </div></div>
	<?php }?>
</div>
<?php }?>
</div>
<div class="buttons hidden">
<div class="ejects floatL">
<ul>
<?php if ($_smarty_tpl->tpl_vars['b']->value['ulike']>=1) {?>
<li class="qtip" title="Me gusta"><a onclick="acbw.vtn(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 'pos', 'false');"><span id="up<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="color_green floatL"><?php if ($_smarty_tpl->tpl_vars['b']->value['tlikes']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['tlikes'];?>
<?php } else { ?>0<?php }?></span> <i class="like"></i></a></li>
<?php } else { ?>
<li class="qtip" title="Me gusta"><a onclick="acbw.vtn(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 'pos', 'true');"><span id="up<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['b']->value['tlikes']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['tlikes'];?>
<?php } else { ?>0<?php }?></span> <i class="like"></i></a></li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['b']->value['udislike']>=1) {?>
<li class="qtip" title="No me gusta"><a onclick="acbw.vtn(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 'neg', 'false');"><span id="dow<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="color_green floatL"><?php if ($_smarty_tpl->tpl_vars['b']->value['tdislikes']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['tdislikes'];?>
<?php } else { ?>0<?php }?></span> <i class="dislike"></i></a></li>
<?php } else { ?>
<li class="qtip" title="No me gusta"><a onclick="acbw.vtn(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 'neg', 'true'); return false;"><span id="dow<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="floatL"><?php if ($_smarty_tpl->tpl_vars['b']->value['tdislikes']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['tdislikes'];?>
<?php } else { ?>0<?php }?></span> <i class="dislike"></i></a></li>
<?php }?>
<li class="qtip" title="Comentar"><a onclick="acbw.ldcmts(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);"><span id="com<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="floatL"><?php if ($_smarty_tpl->tpl_vars['b']->value['tcomments']) {?><?php echo $_smarty_tpl->tpl_vars['b']->value['tcomments'];?>
<?php } else { ?>0<?php }?></span> <i class="comment"></i></a></li>
</ul>
</div>
<div class="floatR denun">
<a href="#denunciar-<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="qtip" title="Denunciar" style="display:block;" onclick="denuncia.nueva('bwort', <?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
, 'Bwort #<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['b']->value['usuario_nombre'];?>
');"><i class="denun"></i></a>
</div>
</div>
<div class="bw_comments" id="bw_comments_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
<?php if ($_smarty_tpl->tpl_vars['b']->value['comments']) {?><div class="ocult_mos_comments" id="ocult_mos_comm_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" onclick="acbw.ocmoscomm(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);">
<span class="one hidden"><span class="floatL">Ocultar comentarios</span> <i class="upopt floatL"></i></span> 
<span class="two dsnone hidden"><span class="floatL">Mostrar comentarios</span> <i class="dowopt floatL"></i></span>
</div><?php }?>
<div class="content" id="commbwislwe_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
<?php  $_smarty_tpl->tpl_vars['cw'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cw']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['b']->value['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cw']->key => $_smarty_tpl->tpl_vars['cw']->value) {
$_smarty_tpl->tpl_vars['cw']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['cw']->key;
?>
<div class="coment hidden">
<div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/50/50/?file=<?php echo $_smarty_tpl->tpl_vars['cw']->value['w_avatar'];?>
"></div>
<div class="content floatL">
<div class="title floatL"><?php if ($_smarty_tpl->tpl_vars['cw']->value['name_original']&&$_smarty_tpl->tpl_vars['cw']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['cw']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['cw']->value['ap_original'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cw']->value['usuario_nombre'];?>
<?php }?></div><div class="info floatL"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['cw']->value['bb_date']);?>
</div>
<div class="text hidden"><span><?php echo $_smarty_tpl->tpl_vars['cw']->value['bb_cont'];?>
</span>
<?php if ($_smarty_tpl->tpl_vars['cw']->value['bb_type']==2) {?><div class="clearfix hidden" style="margin: 12px 0 0 0;margin: 26px 0 0 0;text-align: -webkit-center;">
<img src="<?php echo $_smarty_tpl->tpl_vars['cw']->value['bb_img'];?>
" style="max-width: 90%;max-height: 328px;border: 1px solid #DBD9D9;">
</div><?php }?>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="form dsnone" id="form_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
<div id="error_flat" class="dsnone">Error</div>
<div style="margin: 0 0 10px 0;padding: 0 0 0 8px;" class="hidden clearfix zoom">
<div class="zoom" style="position: relative;">
<div class="zoom" style="position: relative;">
<div class="hidden" style="position: relative;background-color: #fff;">
<div style="border: solid #bdc7d8;border-width: 1px 1px;-webkit-transition: border-color 1s ease-out;border-color: #dcdee3;">
<div class="zoom hidden" style="padding-right: 46px;">
<textarea class="floatL hidden"></textarea></div></div></div>
<div class="zoom clearfix" style="bottom: 0;position: absolute;right: 0;top: 0;">
<div class="floatL hidden cursorP" style="cursor: pointer;position:relative;">
<i class="im_photo cursorP"><input type="file" name="incomfi" filen="<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" id="incomfi_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" onchange="acbw.chnimgcm($(this));" class="inputnone cursorP"/></i>
</div></div></div></div>
<div class="enviewcm hidden dsnone nbm_cm_preview_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
"><center><input type="hidden" name="valimcom_d" value="s"/><input type="hidden" name="valimcom_vb" value="2.0" /></center></div>
</div>

<input type="button" class="btn_green floatL" onclick="acbw.commbw(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);" placeholder="Escribe un comentario..." value="Publicar comentario">
<input type="button" onclick="acbw.ldcmts(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);" class="input_button" value="Cancelar">
</div>
<div class="preform" id="preform_<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
<input type="text" name="preform" onfocus="acbw.ldcmts(<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
);" placeholder="Escribe un comentario..." id="preform" />
</div>
</div>
</div>
</div>
<?php }?>
<?php } ?><?php }} ?>
