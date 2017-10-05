<?php /* Smarty version Smarty-3.1.19, created on 2017-01-12 00:16:24
         compiled from "/home/babanta/wortit.net/themes/default/modulos/new_i/agregar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185711482758771f38757a19-63777433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3baa4e5db96e068f7a0cba9335ac1bc5efa62cf6' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/new_i/agregar.tpl',
      1 => 1416945696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185711482758771f38757a19-63777433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsNota' => 0,
    'numnota' => 0,
    'cats' => 0,
    'c' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58771f387e7732_39574405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58771f387e7732_39574405')) {function content_58771f387e7732_39574405($_smarty_tpl) {?><div class="add_note">
<div class="add_note_cont">
<div class="add_note_l floatL">

<div class="ldad dsnone">
<h1>PUBLICANDO...</h1>
<div class="barloading"><div class="bar"></div></div>
</div>

<div class="add_note_ttl add_note_co">
<div class="t require">Titulo</div>
<div class="co"><input type="text" name="title" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['titulo']) {?>value="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['titulo'];?>
"<?php }?> class="title" placeholder="Escribe el título de la nota..."></div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Contenido / Descripción</div>
<div class="co"><textarea class="text markItUp" name="text" placeholder="Describe tu nota..."><?php if ($_smarty_tpl->tpl_vars['tsNota']->value['detalle']) {?><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['detalle'];?>
<?php }?></textarea></div>
</div>

<div class="add_note_co">
<div class="co"><?php if ($_smarty_tpl->tpl_vars['numnota']->value>=1&&$_smarty_tpl->tpl_vars['tsNota']->value['titulo']) {?><input type="hidden" name="wk" value="1"><input type="hidden" name="wg" value="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['id'];?>
"><?php }?><input type="button" class="bg_green_3d btn color_white cursorP" value="<?php if ($_smarty_tpl->tpl_vars['numnota']->value>=1&&$_smarty_tpl->tpl_vars['tsNota']->value['titulo']) {?>Guardar<?php } else { ?>Agregar<?php }?> nota" onclick="hlo.hi()"/></div>
</div>

</div>

<div class="add_note_r floatL">

<div class="add_note_txt add_note_co">
<div class="t require">Categoria</div>
<div class="co">
<select name="cat" style="margin: 0 21px;width: 193px;padding: 5px 4px;">
<option>Selecciona una categoria</option>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id_categoria'];?>
" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['categoria']==$_smarty_tpl->tpl_vars['c']->value['id_categoria']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
<?php } ?>
</select></div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Tags (palabras clave)</div>
<div class="co"><textarea name="tags" class="tags" placeholder="ej: noticia, futbol, farandula, wortit"><?php if ($_smarty_tpl->tpl_vars['tsNota']->value['tags']) {?><?php echo $_smarty_tpl->tpl_vars['tsNota']->value['tags'];?>
<?php }?></textarea></div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Imagen de la nota</div>
<div class="co">
<div class="slect_img_oo">
<div class="img_vr_oo <?php if (!$_smarty_tpl->tpl_vars['tsNota']->value['banner']) {?>dsnone<?php }?>"><?php if ($_smarty_tpl->tpl_vars['tsNota']->value['banner']) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['banner'];?>
" style="width: 100%;height:125px;margin:0 auto;">
<div class="lsf cursorP" onclick="hlo.adi();" title="Cambiar imagen">close</div>
<input type="hidden" name="imagen" id="kim" value="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['banner'];?>
"><?php }?>
</div>

<div class="bg_img_oo dsnone">
<div style="margin: 46px 0px;text-align: -webkit-center;"><h1>Subiendo</h1>
<div class="barloading" style="width: 86%;"><div class="bar" style="width: 2%;"></div></div></div>
</div>

<div class="selec_img_oo hidden cursorP <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['banner']) {?>dsnone<?php }?>">
<div class="lsf">camera</div><input type="file" id="is" class="inputnone cursorP"/>
</div>

</div>
</div>
</div>

<div class="add_note_txt add_note_co">
<div class="t require">Fuente de la nota</div>
<div class="co">
<div class="optin">
<div class="o_1"><input id="gor_1" type="text" name="url" <?php if ($_smarty_tpl->tpl_vars['tsNota']->value['fuente']) {?>value="<?php echo $_smarty_tpl->tpl_vars['tsNota']->value['fuente'];?>
"<?php }?> style="width:100%;" placeholder="http://"></div>
</div>
</div>
</div>

</div>

<div class="sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/nw_andote.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/markItUp.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/nw_andote.js"></script>

</div>
</div>
</div>
</div><?php }} ?>
