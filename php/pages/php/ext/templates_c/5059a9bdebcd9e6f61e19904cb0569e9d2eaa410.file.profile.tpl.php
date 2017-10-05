<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 22:06:55
         compiled from "/home/babanta/wortit.net/themes/default/modulos/soporte_i/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20977200165875af5fdaf021-18770196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5059a9bdebcd9e6f61e19904cb0569e9d2eaa410' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/soporte_i/profile.tpl',
      1 => 1415484006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20977200165875af5fdaf021-18770196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetgo' => 0,
    'tsConfig' => 0,
    '_SESSION' => 0,
    'aget' => 0,
    'infoa' => 0,
    'inforesp' => 0,
    'r' => 0,
    'tsAct' => 0,
    'tsAction' => 0,
    'catshomef' => 0,
    'f' => 0,
    's' => 0,
    'ultres' => 0,
    'catsp' => 0,
    'c' => 0,
    'iconss' => 0,
    'iconssi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875af60055572_34383325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875af60055572_34383325')) {function content_5875af60055572_34383325($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><div id="header">
<div class="contentheader">
<div style="float: left;"><img src="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_img'];?>
" style="width: 64px;height: 64px;"></div>
<div style="margin: 0px 0px 0px 73px;font-size:15px;"><?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_name'];?>
</div>
<div class="comillas"><?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_desc'];?>
</div>
</div>
<div style="float: right;overflow: hidden;padding: 7px 7px;">
<div> <?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['temas'];?>
 <b>Temas</b></div>
<div> <?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['res'];?>
 <b>Respuestas</b></div>
</div>
</div>
<div id="submenu">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
/">Inicio</a>
<?php if ($_smarty_tpl->tpl_vars['pagetgo']->value['sf_creator']==$_smarty_tpl->tpl_vars['_SESSION']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
">Ultimos Tickets</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
?action=admin&act=edit">Editar proyecto</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
?action=admin">Administrar</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
?action=admin&act=cats">Categorias</a><?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
?act=crear">Nuevo Tema</a>
</div>
<div id="contentsf">


<?php if ($_smarty_tpl->tpl_vars['aget']->value) {?>
<div style="overflow:hidden;width:100%;margin: 6px 0px 0px 0px;">
<div style="float: left;width: 100px;text-align: -webkit-center;">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_id'];?>
" id="idfpry" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['aget']->value;?>
" id="idtpryf" />
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['infoa']->value['p']['sf_seo'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['infoa']->value['p']['sf_img'];?>
" style="width: 64px;height: 64px;"></a>
<br>
<span><?php echo $_smarty_tpl->tpl_vars['infoa']->value['p']['sf_name'];?>
</span><br>
<span style="font-style:italic;font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['infoa']->value['p']['sf_desc'];?>
</span>
</div>

<div style="float: left;width: 88%;">
<div style="padding: 5px 0px;border-bottom: 1px dashed #9C9999;font-size: 16px;" title="Titulo del tema." class="qtip cursorP"><span><?php echo $_smarty_tpl->tpl_vars['infoa']->value['sr_title'];?>
</span></div>
<div style="margin: 15px 0px 0px 15px;"><?php echo $_smarty_tpl->tpl_vars['infoa']->value['sr_content'];?>
</div>
</div>
   
</div>
<div style="text-transform:uppercase;font-size:16px;margin: 10px 0px 10px 113px;"><span>Respuestas</span></div>
<?php if ($_smarty_tpl->tpl_vars['inforesp']->value) {?>
<div id="<?php echo $_smarty_tpl->tpl_vars['infoa']->value['sr_id'];?>
_sss">
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inforesp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<div style="overflow: hidden;padding: 10px 3px;border-top: 1px solid #CCCCCC;border-bottom: 1px solid #CCCCCC;">
<div style="float: left;width: 100px;text-align: -webkit-center;padding: 10px 0px;border-right: 1px solid #CCCCCC;">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['r']->value['w_avatar'];?>
" style="width:34px;height:34px;"></a>
<br>
<span><?php echo $_smarty_tpl->tpl_vars['r']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['ap_original'];?>
</span><br>
<span style="font-style:italic;font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
</span>
</div>
<div style="float: left;width: 88%;"><div style="margin: 15px 0px 0px 15px;"><?php echo $_smarty_tpl->tpl_vars['r']->value['sr_content'];?>
</div></div>
</div>
<?php } ?>
<?php } else { ?>
<div class="aviso" style="margin: 0px 0px 0px 111px;">No hay respuestas aun, ¡Se el primero!</div>
<?php }?>
</div>
<div style="margin: 21px 0px 21px 113px;" class="hidden">
<form>
<textarea class="textresp markItUp" name="cuerpo" style="width: 100%;min-height:104px;"></textarea>
<input type="button" value="Responder" onclick="supp.addresf('<?php echo $_smarty_tpl->tpl_vars['infoa']->value['sr_id'];?>
_sss');" class="fb1 btn color_white" style="margin: 7px 0px 0px 0px;"/>
</form>
<div class="::stylehseets::sope" role="sttr">
<div><div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/markItUp.css">
</div></div>
</div>
</div>
<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['tsAct']->value&&!$_smarty_tpl->tpl_vars['tsAction']->value&&!$_smarty_tpl->tpl_vars['aget']->value) {?>
<article style="width:70%;margin: 8px 9px 15px 0px;float:left;">
<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catshomef']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
<div id="foroscats" style="margin:7px 0px 0px 0px;"> 
<div class="headerf"><?php echo $_smarty_tpl->tpl_vars['f']->value['sc_name'];?>
</div> 
<div class="info"><div class="col star" style="height: 11px;width: 25px;padding: 8px 0px;"></div> <div class="col forum" style="height: 11px;">Información del tema</div><div class="col posts" style="height: 11px;padding: 9px 3px 6px 7px;">Respuestas</div> <div class="clearfix"></div> </div> 
<div id="listf"> 
<?php if ($_smarty_tpl->tpl_vars['f']->value['res']) {?>
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<div class="foro"><div class="col off">&nbsp;</div> 
<div class="col forum" style="height: auto;"> 
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
?a=<?php echo $_smarty_tpl->tpl_vars['s']->value['sr_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['sr_title'];?>
</a> 
<span class="view-info"></span><br> 
<span class="info"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['s']->value['sr_date']);?>
</span> 
</div> 
<div class="col topics" style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['s']->value['statics']['respuestas'];?>
</div> 
<div class="clearfix"></div></div> 
<?php } ?>
<?php } else { ?><div class="aviso">No hay temas en la categoria</div><?php }?>
</div> 
</div>
<?php } ?>
</article>
<article style="width:28%;float:left;margin: 8px 9px 15px 0px;">
<div id="foroscats" style="margin:7px 0px 0px 0px;"> 
 <div class="headerf">Ultimas respuestas en <?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_name'];?>
</div> 
 <div class="info"><div class="col star" style="height: 11px;width: 25px;padding: 8px 0px;"></div> <div class="col forum" style="height: auto;width: 80%;">Información de la respuesta</div> <div class="clearfix"></div> </div> 
 <div id="listf"> 
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ultres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
 <div class="foro">
  <div class="col off">&nbsp;</div> 
 <div class="col forum" style="height: auto;width: 80%;"> 
 <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['r']->value['sf_seo'];?>
?a=<?php echo $_smarty_tpl->tpl_vars['r']->value['tema']['sr_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['tema']['sr_title'];?>
</a> 
 <span class="view-info"></span><br> 
 <span class="info"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['r']->value['sr_date']);?>
</span> 
 </div> 
 <div class="clearfix"></div>
</div>
<?php } ?>
</div> 
 </div>
</article>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='crear') {?>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><div class="sconrk consup"><div>
<form id="formsup" style="padding: 15px 0px 0px 0px;">
<input type="hidden" id="idproyeckt" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_id'];?>
">
<table width="100%">
<tbody>
<tr>
<td><div id="titlef">Titulo del tema</div></td>
<td><input type="text" id="titletem" /><select id="cattmea" style="width: auto;padding: 5px 5px;margin: 0px 0px 0px 5px;"><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catsp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['sc_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['sc_name'];?>
</option><?php } ?></select></td></tr>
<tr>
<td></td>
<td><textarea class="conttema markItUp" style="width: 99.7%!important;margin: 0px 0px 0px 0px;" name="cuerpo"></textarea></td></tr>
<tr><td><input type="button" class="fb1 btn color_white" value="Crear tema" onclick="supp.addfors();"/></td></tr>
</tbody>
</table>
</form>
</div>
<div class="::stylehseets::sope" role="sttr">
<div><div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/markItUp.css">
</div></div>
</div>
</div><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ('modulos/altoahi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tsAction']->value=='admin') {?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/admin.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/asoport.js"></script>
<?php if ($_smarty_tpl->tpl_vars['pagetgo']->value['sf_creator']==$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='edit') {?>
<form method="POST" action="#" id="formsup" style="margin: 9px 0px 0px 0px;">
<div id="titlef"><span>Nombre de tu nuevo proyecto</span></div>
<input type="text" id="name" placeholder="Escribe aqui el nombre de tu nuevo proyecto" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_name'];?>
">
<br/><br/>

<div id="titlef"><span>Nombre Corto para tu proyecto (<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<b>proyectname</b>)</span></div>
<input type="text" id="cname" placeholder="Proyectname" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo'];?>
" disabled>
<br/><br/>

<div id="titlef"><span>Selecciona una imagen</span> <select name="gooiMg" id="gooiMg">
	<option>Que imagen usaras?</option>
<option value="1">Subir imagen</option>
<option value="2">Pre subidas</option>
</select></div>

<div class="opcion_1_UpImg option_vdval dsnone" style="display: block;">
<div class="hidden clearfix one_unImg">
<div style="border: 1px dashed rgba(0, 0, 0, 0.207843); padding: 2em; position: relative; text-align: -webkit-center; width: 70%;" class="hover cursorP ZErO_uNiMg"><div class="lsf" style="font-size: 56px;"><a>camera</a></div><input type="file" class="inputnone cursorP" id="upster_uNimg_Edtr">
</div>
</div>
<div class="tWo_unImg dsnone" style="width: 70%; display: none;">
<h1>Subiendo...</h1><div class="barloading"><div class="bar" style="width: 100%;"></div></div>
</div>
<div class="TreE_unIMg dsnone" style="width: 70%;border: 1px dashed rgb(204, 204, 204);padding: 1em;"><center></center><input type="hidden" name="img_he" value="s"></div>
</div>
<div class="opcion_2_UpImg option_vdval dsnone">
<div style="float:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_img'];?>
" style="widht:64px;height:64px;" class="m_icon"/></div>
<select style="height: 60px;" id="icon" name="icon" onchange="$('.m_icon').attr('src', $(this).val())">
<option value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_img'];?>
">default</option>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iconss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/r/<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pagetgo']->value['sf_img']==$_smarty_tpl->tpl_vars['r']->value) {?>selected="selected"<?php }?>>Imagen: <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
<?php } ?>
</select>
</div>

<br/><br/>

<div id="titlef"><span>Selecciona un icono</span></div>
<div style="float:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/i/<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_icon'];?>
" class="mm_icon" style="width: 38px;height: 38px;"/></div>
<select style="height: 38px;" id="icontwo" name="icon" onchange="$('.mm_icon').attr('src', '<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/i/'+$(this).val())">
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iconssi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pagetgo']->value['sf_icon']==$_smarty_tpl->tpl_vars['r']->value) {?>selected="selected"<?php }?>>Imagen: <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
<?php } ?>
</select>
<br/><br/>

<div id="titlef"><span>Describe tu proyecto</span></div>
<textarea id="desc" placeholder="Describe tu proyecto..."><?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_desc'];?>
</textarea>
<input type="hidden" id="idsop" value="<?php echo $_smarty_tpl->tpl_vars['pagetgo']->value['sf_id'];?>
">
<br /><br />
<input type="button" id="savefo" value="Enviar datos" class="buttonblue1" onclick="adsop.config();" />
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAct']->value=='cats') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/soporte_i/cats.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['tsAct']->value=='users') {?>
admin >> users
<?php } else { ?>
Admin >> Home
<?php }?>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/notfound.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php }?>
</div><?php }} ?>
