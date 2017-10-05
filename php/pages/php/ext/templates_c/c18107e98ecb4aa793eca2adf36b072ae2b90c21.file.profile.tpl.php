<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 14:32:20
         compiled from "C:\xampp\htdocs\w\themes\default\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2907545445e8d1cef9-15799939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c18107e98ecb4aa793eca2adf36b072ae2b90c21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\profile.tpl',
      1 => 1418690994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907545445e8d1cef9-15799939',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545445e91312d6_60198353',
  'variables' => 
  array (
    'tsInfo' => 0,
    'tsConfig' => 0,
    'suscrip' => 0,
    'wuser' => 0,
    'online' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545445e91312d6_60198353')) {function content_545445e91312d6_60198353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
if (!is_callable('smarty_modifier_posnum')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.posnum.php';
?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="profile hidden">
<div class="content">
	
<div class="hedrGOhE"><div>
	<div class="floatL" style="margin: -6px 8px -39px 0;background: #FFFFFF;border: 1px solid #DDD;padding: 2px;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['w_avatar'];?>
" style="width:62px;height:62px;"/></div>
	<div style="font-size: 18px;color: #6D6D6D;">
	<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['name_original']&&$_smarty_tpl->tpl_vars['tsInfo']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['ap_original'];?>
 <span>(<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_nombre'];?>
)</span><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_nombre'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['verifi']==1) {?><a title="Pagina verificada" class="otip"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/truef.png" /></a><?php }?></div>
<div class="floatR" style="margin: -21px 27px 0 0;">
<?php if ($_smarty_tpl->tpl_vars['suscrip']->value>0) {?><a class="follow floatL input_button hidden active" id="f<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
" fi-source="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
"><div class="load floatL"></div><div class="foll1 floatL" style="display: block;"><span class="sp1" style="color:#333333;font-weight:normal;">Siguiendo</span> <span class="sp2 color_white" style="font-weight:normal;">Dejar de seguir</span></div></a><?php } elseif ($_smarty_tpl->tpl_vars['suscrip']->value=='0') {?><a class="follow floatL input_button hidden noactive" id="f<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
" fi-source="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
"><div class="load floatL"></div><div class="foll1 floatL" style="display: block;" style="font-weight:normal;">Seguir</div></a><?php } else { ?><?php }?>
<a class="input_button" style="margin: 0 0 0 7px;" onclick="ctrcht.add(<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['identi'];?>
);">Roombox</a>
</div>
    </div></div>

<div class="header">
	<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/edt_profile.js"></script><?php }?>
<div class="img floatL hidden"><img class="floatL" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/140/140/?file=<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['w_avatar'];?>
" />
	<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><div class="btnFileO dsnone floatR BtnCmbPrtdO cursorP vctip" style="position:absolute;margin: 4px 0px 0px 5px;" title="Cambiar foto de perfil" onclick="modalsPrfl.cmbrAvtrMdl();">Cambiar</div><?php }?>
<div class="info floatL"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['name_original']&&$_smarty_tpl->tpl_vars['tsInfo']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['ap_original'];?>
 <span>(<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_nombre'];?>
)</span><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_nombre'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['verifi']==1) {?><a title="Pagina verificada" class="otip"><img style="width:18px;height:18px;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/truef.png" /></a><?php }?>
<div class="floatR">
<?php if ($_smarty_tpl->tpl_vars['suscrip']->value>0) {?>
<a class="follow floatL input_button hidden active" id="f<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
" fi-source="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;"><span class="sp1" style="color:#333333;font-weight:normal;">Siguiendo</span> <span class="sp2 color_white" style="font-weight:normal;">Dejar de seguir</span></div>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['suscrip']->value=='0') {?>
<a class="follow floatL input_button hidden noactive" id="f<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
" fi-source="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;" style="font-weight:normal;">Seguir</div>
</a>
<?php } else { ?>
<?php }?>
<a class="input_button" style="margin: 0 0 0 7px;" onclick="ctrcht.add(<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['identi'];?>
);">Roombox</a>
</div>
</div>
<div class="title floatL">
<div class="vctip" title="Última actividad: <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsInfo']->value['active_ult']);?>
" style="<?php if ($_smarty_tpl->tpl_vars['online']->value==1) {?>background: #7ba60d;<?php } else { ?>background: #b3b3b3;<?php }?>display: inline-block;height: 15px;line-height: 15px;padding: 0 5px;font-size: 10px;font-weight: bold;text-transform: uppercase;color: #fff;-moz-border-radius: 4px;-webkit-border-radius: 4px;border-radius: 4px;vertical-align: middle;cursor: default;"><?php if ($_smarty_tpl->tpl_vars['online']->value==1) {?>Conectado<?php } else { ?>Desconectado<?php }?></div> <span>-</span> Vive en <a class="qtip" title="Ver mas Usuarios de <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['pais'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['pais'];?>
</a>  <span>-</span> <?php echo smarty_modifier_posnum($_smarty_tpl->tpl_vars['content']->value['temas']);?>
 Temas <span>-</span> <?php echo smarty_modifier_posnum($_smarty_tpl->tpl_vars['content']->value['notas']);?>
 Notas <span>-</span><?php echo smarty_modifier_posnum($_smarty_tpl->tpl_vars['tsInfo']->value['stats']['interacciones']);?>
 <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['stats']['interacciones']==1) {?>Interaccion<?php } else { ?>Interaciones<?php }?>
</div>
</div>
<div class="port hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/968/287/?file=<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['p_cabecera'];?>
">
<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><div class="btnFileO floatR dsnone BtnCmbPrtdO cursorP qtip" title="Cambiar foto de portada" style="position: absolute;z-index: 10000;margin: -41px 34px 0px 0px;right: 0;z-index: 10000;" onclick="modalsPrfl.cmbrprtdMdl(); return false;"><span>Cambiar portada</span></div><?php }?>
</div>
<div class="tabs hidden">
<div class="content" data-source='<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
'>
<span data-source='info'>Sobre mí</span>
<span data-source='bworts'>Publicaciones</span>
<span data-source='images'>Fotos</span>
<span data-source='actividad'>Actividad</span>
<span data-source='bwfav'>Favoritos</span>
<span data-source='logros'>Logros</span>
<span data-source='notas'>Notas</span>
</div>
</div>
</div>
<div class="body hidden">
<div class="content">
<div class="load dsnone"></div>
<div class="defin dsnone"></div>
<div class="defin_bw floatL">
<div class="dfin-w-str"><input type="hidden" id="pgBwPg" value="2" /></div>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/home_i/publicador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="bwortsloadeds"><center><h1>Cargando bworts...</h1><div class="load"></div></center></div>
</div>

<div class="defin_gdgts floatL">
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod) {?>
<div class="boxe">
<div class="tit">Opciones de <?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod) {?>Administrador<?php } elseif ($_smarty_tpl->tpl_vars['wuser']->value->mod) {?>Moderador<?php }?></div>
<div class="co">
<div class="btns_admins hidden">
<a class="input_button baneu <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['banned']==1) {?>ibg<?php }?>" top="<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['banned']==1) {?>2<?php } else { ?>1<?php }?>" data-obj="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['banned']==1) {?>Baneado<?php } else { ?>Bannear<?php }?>"><span class="lsf">off</span></a>
<a class="input_button veriu <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['verifi']==1) {?>ibg<?php }?>" top="<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['verifi']==1) {?>2<?php } else { ?>1<?php }?>" data-obj="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['verifi']==1) {?>Verificada<?php } else { ?>Verificar<?php }?>"><span class="lsf">check</span></a>
</div>
</div>
</div>
<style type="text/css">
.btns_admins{display: block;}
.btns_admins a{display: block;padding: 6px 6px;border: 1px solid #CCCCCC;float: left;margin: 0 0 0 3px;}
.btns_admins a span{font-size: 30px;}
</style>
<?php }?>

<div class="boxe">
<div class="tit">Seguidores</div>
<div class="co"></div>
</div>

<div class="boxe">
<div class="tit">Sigo</div>
<div class="co"></div>
</div>
</div>

</div>
<div class="cont_we"></div>
</div>
</div>
</div>
<script>
$(function(){
$('.body .content .load').fadeIn(250);
$.post(global_data.url+'/ajax/bwort-load.php?fil=2&pro=<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_id'];?>
', function(h){
$('.body .content .defin_bw .bwortsloadeds').html($(h).fadeIn(250));
$('.body .content .defin_bw .bwortsloadeds').attr('data-go','5');
});
$('.body .content .load').fadeOut(250);
});
$(window).scroll(function(){
if($(this).scrollTop() > 389){ $('.hedrGOhE').fadeIn(250);
}else{ $('.hedrGOhE').fadeOut(350); }
});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/pub.css"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/pub.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/bwort.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/bwts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/pubcontents.css">
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
