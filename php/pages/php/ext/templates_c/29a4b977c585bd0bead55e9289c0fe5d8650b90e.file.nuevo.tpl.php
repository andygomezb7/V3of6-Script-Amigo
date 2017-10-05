<?php /* Smarty version Smarty-3.1.19, created on 2017-01-20 21:52:25
         compiled from "/home/babanta/wortit.net/themes/default/modulos/soporte_i/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5526877685882daf9a57268-68583885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a4b977c585bd0bead55e9289c0fe5d8650b90e' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/soporte_i/nuevo.tpl',
      1 => 1415483716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5526877685882daf9a57268-68583885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_SESSION' => 0,
    'tsConfig' => 0,
    'iconss' => 0,
    'r' => 0,
    'iconssi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5882daf9b76cb5_59124695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5882daf9b76cb5_59124695')) {function content_5882daf9b76cb5_59124695($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><form method="POST" action="#" id="formsup" style="width: 77%;">
<div id="titlef"><span>Nombre de tu nuevo proyecto</span></div>
<input type="text" id="name" placeholder="Escribe aqui el nombre de tu nuevo proyecto">

<br/><br/>

<div id="titlef"><span>Nombre Corto para tu proyecto (<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<b>proyectname</b>)</span></div>
<input type="text" id="cname" placeholder="Proyectname">

<br/><br/>

<div id="titlef"><span>Selecciona una imagen
<select name="gooiMg" onchange="$('.opcion_1_UpImg').hide();$('.opcion_2_UpImg').hide();$('.opcion_'+$(this).val()+'_UpImg').show();">
	<option>Que imagen usaras?</option>
<option value="1">Subir imagen</option>
<option value="2">Pre subidas</option>
</select>
</span></div>
<div class="opcion_1_UpImg option_val dsnone">
<div class="hidden clearfix one_unImg">
<div style="border:1px dashed rgba(0, 0, 0, 0.21);padding:2em;position: relative;text-align:-webkit-center;width: 70%" class="hover cursorP ZErO_uNiMg"><div class="lsf" style="font-size: 56px;"><a>camera</a></div><input type="file" class="inputnone cursorP" id="upster_uNimg"/></div>
</div>
<div class="tWo_unImg dsnone" style="width: 70%;">
<h1>Subiendo...</h1><div class="barloading"><div class="bar"></div></div>
</div>
<div class="TreE_unIMg dsnone" style="width: 70%;border: 1px dashed #CCCCCC;padding: 1em;">
<center></center><input type="hidden" name="img_he" value="s" />
</div>
</div>
<div class="opcion_2_UpImg option_val dsnone">
<div style="float:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/r/0.png" class="m_icon"/></div>
<select style="height: 60px;" id="icon" name="icon" onchange="$('.m_icon').attr('src', $(this).val())">
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iconss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/r/<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
">Imagen: <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
<?php } ?>
</select>
</div>

<br/><br/>

<div id="titlef"><span>Selecciona un icono</span></div>
<div style="float:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/r/0.png" class="mm_icon" style="width: 38px;height: 38px;"/></div>
<select style="height: 38px;" id="icontwo" name="icon" onchange="$('.mm_icon').attr('src', '<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/i/'+$(this).val())">
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iconssi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
">Imagen: <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
<?php } ?>
</select>

<br/><br/>

<div id="titlef"><span>Describe tu proyecto</span></div>
<textarea id="desc" placeholder="Describe tu proyecto..."></textarea>

<br /><br />
<div class="::stylesheets">
<div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/add_proy.js"></script></div></div>
<input type="button" id="savefo" value="Crear proyecto" class="buttonblue1" onclick="supp.aggfor();" />
</form><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ('modulos/altoahi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
