<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:46:38
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\new_i\nota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7448545ea36940d999-00948222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f42884d8e6f10de718ad515f089d8c4a9294a2f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\new_i\\nota.tpl',
      1 => 1418345190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7448545ea36940d999-00948222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ea3695f5e12_90735549',
  'variables' => 
  array (
    'tsNota' => 0,
    'tsConfig' => 0,
    'wuser' => 0,
    'modactividad' => 0,
    'act' => 0,
    'acto' => 0,
    'ac' => 0,
    'darpuntos' => 0,
    'u' => 0,
    'gadgets' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ea3695f5e12_90735549')) {function content_545ea3695f5e12_90735549($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="cntn_nt_wb">
<div class="lft_cntn_nt floatL">
<div class="nt_nota">
<div class="ttl_nota cont_not hidden">
<h3><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['titulo'];?>
</h3> <div class="floatR"><?php if ($_smarty_tpl->tpl_vars['tsNota']->value['sticky']==1) {?><a class="qtip" title="Nota fijada"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/star-lit4.png"></a><?php }?></div>
<div class="inf_nota hidden">
<span style="font-size: 12px!important;" class="floatL">
<a class="qtip" title="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['date'];?>
"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsNota']->value['hace']);?>
</a> &nbsp; |&nbsp;&nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['wdefined'];?>
"><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['nombre'];?>
</a> &nbsp; |&nbsp;&nbsp; <a onclick="window.print();" href="#Imprimir-<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
">Imprimir</a>
</span>
</div>
</div>
<div class="content_nota cont_not hidden">
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod||$_smarty_tpl->tpl_vars['tsNota']->value['id_usuario']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
<div style="margin: 0 0 23px 0;height: 121px;overflow-y: auto;overflow-x: hidden;">
<?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modactividad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value) {
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['act']->value['data']) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['act']->value['title'];?>
</h3>
<table class="table" width="97%">
<thead>
<tr>
<th>Moderador</th>
<th>Acci&oacute;n</th>
<th>Fecha</th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['acto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['acto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['acto']->key => $_smarty_tpl->tpl_vars['acto']->value) {
$_smarty_tpl->tpl_vars['acto']->_loop = true;
?>
<tr>
<td><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['acto']->value['creador'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['acto']->value['creador'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['acto']->value['text'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['acto']->value['ltext'];?>
</a></td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['acto']->value['date']);?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php }?>
<?php } ?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['detalle'];?>

</div>
<div class="dsnone hidden DoR"><div><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
" name="for"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id_categoria'];?>
" name="cfor"/></div></div>
<div class="cont_not hidden btnsl" style="border:0;">

<?php if ($_smarty_tpl->tpl_vars['tsNota']->value['usuario']['puntuo']<=0) {?><div class="hidden" style="margin: 1px 0 10px 0;">
<div class="nota_puntos">
<span>Dar puntos</span>
<?php echo $_smarty_tpl->tpl_vars['darpuntos']->value;?>

</div>
</div><?php }?>

<div class="hidden dsNoStas">
<div class="floatL" id="lik_total_<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">good</i> <span><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['stats']['likes'];?>
</span> Me gusta</div>
<div class="floatL" id="dis_total_<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">bad</i> <span><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['stats']['dislikes'];?>
</span> No me gusta</div>
<div class="floatL" id="sg_n_<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">forward</i> <span><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['stats']['seg'];?>
</span> Seguidores</div>
<div class="floatL" id="fv_n_<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">heart</i> <span><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['stats']['fav'];?>
</span> Favoritos</div> 
<div class="floatL" id="fv_n_<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">network</i> <span><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['stats']['visitas'];?>
</span> Visitas</div>
</div>

<div style="margin:5px 0 0 0;">
<a class="bg_green_3d btn color_white floatL lik" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['stats']['likesU']>=1) {?>style="border: 1px solid #27470D;" title="Ya votaste"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">good</i> ME GUSTA</a>
<a class="bg_green_3d btn color_white floatL dis" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['stats']['dislikesU']>=1) {?>style="border: 1px solid #27470D;" title="Ya votaste"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">bad</i> NO ME GUSTA</a>
<a class="bg_green_3d btn color_white floatL sgnt" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['stats']['segU']>=1) {?>style="border: 1px solid #27470D;" title="Ya sigues la nota"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">forward</i> SEGUIR NOTA</a>
<a class="bg_green_3d btn color_white floatL fvnt" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['stats']['favU']>=1) {?>style="border: 1px solid #27470D;" title="Ya esta en tus favoritos"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><i class="lsf">heart</i> AGREGAR A FAVORITOS</a>
<a onclick="denuncia.nueva('nota', <?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['titulo'];?>
', '<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['usuario_nombre'];?>
');" class="input_button ibr qtip" title="Denunciar" style="padding: 4px!important;" ><img style="margin: 0px 0px -2px 0px;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/denun.png"/></a>
</div>
</div>

<center>
<ins><iframe width="706" height="95" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/php/pages/ejects/globalads/?q=1&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/"></iframe></ins>
</center>

<div class="clearfix footer_nt">
<div class="cont_not floatL cont_fo_nt">

<div class="pubsLrT DoRe hidden">
<div class="floatL ImG"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/62/62/?file=<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
"></div>
<div class="floatL dsCoPbs">
	<div id="error_flat" class="red_flat sKFLekErrDoRe dsnone" style="position:relative;"><div style="position:absolute;" onclick="$('.sKFLekErrDoRe').fadeOut(250);">x</div><span></span></div>
<div><textarea class="markItUp"></textarea> <div class="clearfix floatR" style="margin: 6px 0 0 0;"><input type="button" value="Comentar" class="bg_green_3d btn color_white BtNComNt" /></div></div>
</div>
</div>

<div class="pubsLrT hidden CoMntSNw" style="margin: 5px 0 0 0;" data-id='<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
'>
	<center>CARGANDO...</center>
</div>

</div>
</div>
<div class="::xtrscntns_s::dsds">
<div>
<div><div><div></div><div><div></div></div><div><div></div><div><div><div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/ms_nota.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/bbcode.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/hdr_nt.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/not_actns.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/markItUp.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/markItUp.js"></script>
<style type="text/css">
.sddd68ws32wsssl{margin: 0px 0px 0px 5px;font-size: 11px;width: 79%;}
.cntnt_ppos_2556{margin: 0px 0px 5px 0px;padding: 0px 0px 5px 0px;border-bottom: 1px dotted #d1d1d1;}
.cntnt_ppos_2556:last-child{border-bottom: 0;}
</style>
</div></div></div></div></div></div>
</div>
</div>
</div>
</div>
<div class="rght_cntnt_nt floatL">

<div class="cont_not">
<h3 class="color_gray" style="font-weight: normal;font-size: 18px;text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['usuario_nombre'];?>
</h3>
<div class="hidden" style="margin: 9px 0px 0px 0px;">
<div class="floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['w_avatar'];?>
" style="width: 110px;height:110px;"></div><div class="floatL" style="margin: 0 0 0 4px;" class="size11">
  <div class="clearfix hidden"><img class="floatL" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/icons/ranks/<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['permisos']['icono'];?>
" style="width: 16px;height: 16px;"><span class="floatL" style="margin: 0 0 5px 5px;display: block;"><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['permisos']['name'];?>
</span></div>
  <div class="clearfix hidden"><img class="floatL" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['usuario_sexo_icon'];?>
.png" style="width: 16px;height: 16px;"> <span class="floatL" style="margin: 0 0 5px 5px;display: block;"><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['usuario_sexo'];?>
</span></div>
  <div class="clearfix hidden"><img class="floatL" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/flags/<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['pai']['p_img'];?>
.png"> <span class="floatL" style="margin: 0 0 5px 5px;display: block;"><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['pais'];?>
</span></div>
</div>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod||$_smarty_tpl->tpl_vars['wuser']->value->mod) {?><div class="cont_not">
<h3>Opciones de <?php if ($_smarty_tpl->tpl_vars['wuser']->value->admod) {?>Administrador<?php } elseif ($_smarty_tpl->tpl_vars['wuser']->value->mod) {?>Moderador<?php }?></h3>
<div style="margin: 9px 0px 0px 0px;">
<a class="input_button btn" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/editar/<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
/" style="margin: 0 5px 0 0;">Editar nota</a>
<a class="input_button btn born qtip" data-obj="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
" top="<?php if ($_smarty_tpl->tpl_vars['tsNota']->value['estado']!=1) {?>1<?php } else { ?>2<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['tsNota']->value['estado']!=1) {?>Activar<?php } else { ?>Borrar<?php }?>"><?php if ($_smarty_tpl->tpl_vars['tsNota']->value['estado']!=1) {?>Activar<?php } else { ?>Borrar<?php }?></a>
</div>
</div><?php }?>

<div class="cont_not">
<h3>Notas destacadas</h3>
<div style="margin: 9px 0px 0px 0px;">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gadgets']->value['destacadas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<div class="hidden p_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
 cntnt_ppos_2556"><div class="floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/38/38/?file=<?php echo $_smarty_tpl->tpl_vars['p']->value['banner'];?>
" width="38" height="38"></div><div class="floatL sddd68ws32wsssl"><h4><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['p']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['post_wdefined'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['p']->value['titulo'];?>
</a></h4><span><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['p']->value['hace']);?>
</span></div></div>
<?php } ?>
</div>
</div>

<ins><iframe width="240" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/apfav"></iframe></ins>

</div>
</div><?php }} ?>
