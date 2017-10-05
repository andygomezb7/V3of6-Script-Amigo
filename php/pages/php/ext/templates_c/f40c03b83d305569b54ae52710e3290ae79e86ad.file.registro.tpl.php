<?php /* Smarty version Smarty-3.1.19, created on 2014-11-28 23:15:25
         compiled from "C:\xampp\htdocs\w\themes\default\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245115479426a5b13e8-49647814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40c03b83d305569b54ae52710e3290ae79e86ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\registro.tpl',
      1 => 1417238119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245115479426a5b13e8-49647814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5479426a6a5623_42981172',
  'variables' => 
  array (
    'paises' => 0,
    'p' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5479426a6a5623_42981172')) {function content_5479426a6a5623_42981172($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="registro_i hidden">
<div class="registro_i_c">

<div class="form">
<div class="t">Nick de usuario</div>
<div class="g"><div class="mention floatL">@</div><input type="text" name="nombre" placeholder="@tunick"></div>
</div>

<div class="form">
<div class="t">Nombre/apellido</div>
<div class="g"><input type="text" name="original" placeholder="Nombre"><input type="text" name="ap" placeholder="Apellido"></div>
</div>

<div class="form">
<div class="t">Correo electronico (email)</div>
<div class="g"><input type="text" name="email" placeholder="persona@email.com"></div>
</div>

<div class="form">
<div class="t">Contraseña</div>
<div class="g"><input type="password" name="clave" placeholder="Contraseña"><br/><div class="color_gray" style="font-size: 22px;
margin: 8px 0;">Repitela</div><input type="password" name="reclave" placeholder="Contraseña"></div>
</div>

<div class="form">
<div class="t">Pais</div>
<div class="g">
<select name="pais"><option>Seleciona tu pais</option>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['p_prefijo'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['p_opcion'];?>
</option>
<?php } ?>
</select></div>
</div>

<div class="form">
<div class="t">Sexo</div>
<div class="g"><select name="sexo"><option>Seleciona tu sexo</option><option value="1">Hombre</option><option value="2">Mujer</option></select></div>
</div>

<div class="form">
<div class="t">Nacimiento</div>
<div class="g">
<select name="dia"><option>Dia</option>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
<?php }} ?>
</select>

<select name="mes"><option>Mes</option>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
<?php }} ?>
</select>

<select name="anio"><option>Año</option>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 2014+1 - (1940) : 1940-(2014)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1940, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
<?php }} ?>
</select>
</div>
</div>

<div class="form">
<div class="t">Código de seguridad(<small><a onclick="Recaptcha.reload();">Cambiar</a></small>)</div>
<div class="g">
<script type="text/javascript">
$.getScript("http://www.google.com/recaptcha/api/js/recaptcha_ajax.js", function(){ Recaptcha.create('6LdHQvASAAAAAMvSKMC43DPFdr1fBTf3oKtPrUwq', 'recaptcha_ajax', {
theme:'custom', lang:'es', tabindex:'13', custom_theme_widget: 'recaptcha_ajax',
callback: function(){}
});
});
</script>
<div id="recaptcha_image"></div>
<input type="text" class="input_text" name="recaptcha_response_field" id="recaptcha_response_field" placeholder="Ingresa el código de la imagen" tabindex="1">
</div>
</div>
<br><br>
<input type="button" value="Registrarme" class="bg_green_3d btn color_white" onclick="reg.set();" />
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
