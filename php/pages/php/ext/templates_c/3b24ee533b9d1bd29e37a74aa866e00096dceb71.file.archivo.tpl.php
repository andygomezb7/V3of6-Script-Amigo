<?php /* Smarty version Smarty-3.1.19, created on 2014-11-08 15:42:57
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\codigo_i\archivo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40225453f513d1cef1-73420470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b24ee533b9d1bd29e37a74aa866e00096dceb71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\codigo_i\\archivo.tpl',
      1 => 1415482975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40225453f513d1cef1-73420470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f51407a120_26727035',
  'variables' => 
  array (
    'tsArc' => 0,
    'tsConfig' => 0,
    'actualizacion' => 0,
    'codepage' => 0,
    'r' => 0,
    'dor' => 0,
    'keycodepage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f51407a120_26727035')) {function content_5453f51407a120_26727035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div style="width: 19%;height: 152px;font-size: 13px;text-align: -webkit-center;padding: 6px 4px;margin: 15px 0px 0px 0px;" class="floatL">
<?php if ($_smarty_tpl->tpl_vars['tsArc']->value['uc_g_type']==3) {?><div style="background:#FFFFFF;padding: 5px;text-align:-webkit-center;">ACTUALIZACIÓN</div><?php }?>
<div style="background: #FFFFFF;padding: 6px 4px;"><div style="background:#FFFFFF url('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/tec/1/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
.png') no-repeat 50% 0%;width: 100%;height: 73px;font-size: 13px;text-align: -webkit-center;padding: 0;"></div>
<div style="margin: 8px 0px 0px 0px;background: #FFFFFF;text-align: -webkit-left;">
<div class="clearfix"><i class="icons-cdg info floatL"></i> <span title="<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_vname'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_vname'],20);?>
</span></div>
<div class="clearfix"><i class="icons-cdg i floatL qtip cursorP" title="Inf. sobre <?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_typesize'];?>
" onclick="window.open('https://es.wikipedia.org/wiki/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_typesize'];?>
','_blanck');"></i> <span class="floatL" title="tamaño de el archivo en <?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_typesize'];?>
"><?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_size'];?>
 <?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_typesize'];?>
</span></div>
<div class="clearfix"><i class="icons-cdg user floatL"></i> <span class="floatL"><?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['user']['usuario_nombre'];?>
</span></div>
</div>
</div>
<!------MATCH------>
<div class="wooActlr">
<li style="text-align: -webkit-center;"><h1>ACTUALIZACIONES</h1></li>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actualizacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<li>
<div class="clearfix t"><i class="icons-cdg info floatL"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?prev=tru&do=<?php echo $_smarty_tpl->tpl_vars['r']->value['uc_g_ident'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['uc_a_name'];?>
</a>
<div class="clearfix c">
<i class="icons-cdg i floatL qtip cursorP" title="Inf. sobre <?php echo $_smarty_tpl->tpl_vars['r']->value['up']['up_typesize'];?>
" onclick="window.open('https://es.wikipedia.org/wiki/<?php echo $_smarty_tpl->tpl_vars['r']->value['up']['up_typesize'];?>
','_blanck');"></i>
<?php echo $_smarty_tpl->tpl_vars['r']->value['uc_a_tamano'];?>
</div>
<div class="clearfix c"><i class="icons-cdg user floatL"></i> <?php echo $_smarty_tpl->tpl_vars['r']->value['uc_in_user'];?>
</div>
<div class="clearfix c"><i class="icons-cdg time floatL"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['r']->value['up']['up_date']);?>
</div>
</li>
<?php } ?>
</div>
</div>
<div class="floatL" style="background: #FFFFFF;width: 76%;padding: 8px 6px;margin: 15px 0px 0px 11px;min-height: 500px;">
<?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='mp4'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='3gp'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='mp3') {?>
<?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='mp4'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='3gp') {?>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']&&$_smarty_tpl->tpl_vars['dor']->value['do']=='tru') {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']&&$_smarty_tpl->tpl_vars['dor']->value['do']=='tru') {?>?prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']&&$_smarty_tpl->tpl_vars['dor']->value['do']=='tru') {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='png'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpeg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='gif') {?><li><b>BBcode:</b><input type=\'text\' value=\'[img]<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php }?></ul></div>');">Enlaces</a>
</div>

<video width="97%" height="360" id="player2" poster="../media/frameaccuracy_logo.jpg" controls="controls" preload="none"><source type="video/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/he/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
" />
<object width="100%" height="360" type="application/x-shockwave-flash" data="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/code/elementjs/flashmediaelement.swf"><param name="movie" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/code/elementjs/flashmediaelement.swf" /><param name="flashvars" value="controls=true&poster=../media/frameaccuracy_logo.jpg&file=../media/perfect-timecoded.mp4" /><img src="../media/frameaccuracy_logo.jpg" width="100%" height="360" alt="Here we are" title="No video playback capabilities" /></object></video>
<?php } elseif ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='mp3') {?>
<audio id="player2" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/he/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
" type="audio/mp3"></audio><?php }?>
<div class="::fantasticol::fant:styleheets"><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/code/VdoElmntJs.js"></script><script>$('audio,video').mediaelementplayer({ showTimecodeFrameCount: true, framesPerSecond: 25, alwaysShowControls: true, success: function(player, node) { $('#' + node.id + '-mode').html('mode: ' + player.pluginType); } }); </script><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/code/VdoElmntJs.css"></div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='txt'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='php'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='js'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='html'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='xml'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='htm'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='css') {?>
<div class="cdg-title-1">Contenido del archivo
<div class="floatR">
<div class="icons-cdg code floatL"></div>
<div class="icons-cdg edit floatL qtip cursorP" title="Editar" onclick="mydialog.alert('Editar archivo', '<center><div id=\'error_flat\'>Devido a problemas de seguridad, No contamos con la edición de archivos con texto.<br />No te preocupes, trabajamos en eso, si tienes ideas puedes contarnos en el boton, reportar de la parte inferior de la pagina<br /> Muchas gracias.</div></center>');"></div>
</div>
</div>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>?prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download&do=<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='png'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpeg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='gif') {?><li><b>BBcode:</b><input type=\'text\' value=\'[img]<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php }?></ul></div>');">Enlaces</a>
</div>

<iframe src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/ajax/code-code.php?aft=viewcode&codepage=<?php echo $_smarty_tpl->tpl_vars['keycodepage']->value;?>
" width="99%" height="600" style="border: 1px solid #CCCCCC;"></iframe>
<?php } elseif ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='png'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpeg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='gif') {?>
<div class="cdg-title-1"><b><?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_vname'];?>
</b> subida: <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_date']);?>

<div class="floatR">
<div class="icons-cdg edit floatL qtip cursorP" title="Editar" onclick="mydialog.alert('Editar Imagen', '<center><div id=\'error_flat\'><p>¡Ops!</p><p>Nos descubriste, bueno queremos decirte que pronto! añadiremos esta opción</p> <p>pero no rechazamos comentarios e ideas enviados</p> <p>habla con nosotros en el boton <b>reportar</b> de la parte de abajo de la pagina</p>Hasta pronto, el equipo de wortit.</div></center>');"></div>
</div>
</div>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>?prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download&do=<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='png'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpeg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='gif') {?><li><b>BBcode:</b><input type=\'text\' value=\'[img]<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php }?></ul></div>');">Enlaces</a>
</div>

<center><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
" style="max-width: 99%;"></center>
<?php } else { ?>

<div class="cdg-title-1"><b>Información del archivo</b>
<div class="floatR">
<div class="icons-cdg edit floatL qtip cursorP" title="Editar"></div>
</div>
</div>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>?prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
.cw?inwoo=download&do=<?php if ($_smarty_tpl->tpl_vars['dor']->value['prev']=='tru'&&$_smarty_tpl->tpl_vars['dor']->value['do']) {?>&prev=<?php echo $_smarty_tpl->tpl_vars['dor']->value['prev'];?>
&do=<?php echo $_smarty_tpl->tpl_vars['dor']->value['do'];?>
<?php }?>\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='png'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='jpeg'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='gif') {?><li><b>BBcode:</b><input type=\'text\' value=\'[img]<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype'];?>
[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li><?php }?></ul></div>');">Enlaces</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='zip'||$_smarty_tpl->tpl_vars['tsArc']->value['t']['up_ftype']=='rar') {?><div id="error_flat" style="margin: 15px 0px 0px 0px;">Es posible que si este archivo es de tipo <b>zip</b> o <b>rar</b> (archivo comprimido) pueda dañarse el contenido dentro este en algunas ocaciones debido a problemas en nuestro sistema de subida de archivos, solucionaremos esto cuando nos sea posible.<br />Muchas gracias.</div><?php }?>
<?php }?>
<div class="::str" role="sttr">
<div><style type="text/css">
.wooActlr{width: 97%;height:500px;overflow-y:auto;overflow-x:hidden;}
.wooActlr li{background: #FFFFFF;border: 1px solid #DDDDDD;margin: 5px 0px 0px 0px;text-align: -webkit-left;}
.wooActlr li .t{text-align: -webkit-center;}
.wooActlr li .c{text-align: -webkit-left;}
</style></div>
</div>
</div><?php }} ?>
