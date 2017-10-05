<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 20:55:19
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\cuenta_i\config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2312854650ea29c6719-68014011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76bb30e9d38e727522cc3c0603ea36808fb921bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\cuenta_i\\config.tpl',
      1 => 1416278641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2312854650ea29c6719-68014011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54650ea29c6712_55241682',
  'variables' => 
  array (
    'u' => 0,
    'foo' => 0,
    'sqlpaises' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54650ea29c6712_55241682')) {function content_54650ea29c6712_55241682($_smarty_tpl) {?><table width="100%" class="table" id="inform1" style="margin: 0;border: 0;">
<tbody>
<tr>
<td>Nombre</td>
<td><input type="text" name="n" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['name_original'];?>
"><input type="text" name="ap" placeholder="Apellidos" style="margin:0 0 0 3px;" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['ap_original'];?>
"/></td>
</tr>
<tr>
<td>Nombre alternativo (Alias)</td>
<td><input type="text" name="al" placeholder="Nombre alternativo" style="width: 320px;" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['alias'];?>
"></td>
</tr>
<tr>
<td>Descripción personal</td>
<td><textarea name="desc" style="width: 319px;height: 61px;padding: 4px;" placeholder="Tu descripción"><?php echo $_smarty_tpl->tpl_vars['u']->value['descripcion'];?>
</textarea></td>
</tr>
<tr>
<td>Correo</td>
<td><input type="text" name="em" placeholder="Correo electronico" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_email'];?>
" style="width: 320px;"></td>
</tr>
<tr>
<td>Sitio web/blog</td>
<td><input type="text" name="sit" placeholder="Sitio web" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['p_sitio'];?>
" style="width: 320px;"></td>
</tr>
<tr>
<td>Color</td>
<td>
<div style="width: 265px;margin: 0 auto;">
<div style="background:<?php echo $_smarty_tpl->tpl_vars['u']->value['color'];?>
;padding: 5px;height: 16px;width: 16px;float: left;border-radius: 6px;border: 2px solid rgba(0, 0, 0, 0.15);margin: 0 7px 0 0;" class="qtip" title="<?php echo $_smarty_tpl->tpl_vars['u']->value['color'];?>
"></div>
<input type="text" name="co" title="Color en ingles" style="float: left;width: 215px;" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['color'];?>
" placeholder="Color" />
<input type="hidden" name="tyyy" value="1" />
</td>
</tr>
<tr>
<td>Nacimiento</td>
<td>
<select name="naca"><option>Año</option>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 2014+1 - (1920) : 1920-(2014)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1920, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['u']->value['nac_anio']==$_smarty_tpl->tpl_vars['foo']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
<?php }} ?>
</select>

<select name="nacm"><option>Mes</option>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['u']->value['nac_mes']==$_smarty_tpl->tpl_vars['foo']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
<?php }} ?>
</select>

<select name="nacd"><option>Dia</option>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['u']->value['nac_dia']==$_smarty_tpl->tpl_vars['foo']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
<?php }} ?>
</select>

</td>
</tr>
<tr>
<td>Estado sentimental</td>
<td>
<select name="sent">
<option>Selecciona un estado</option>
<option value="1" <?php if ($_smarty_tpl->tpl_vars['u']->value['p_estado']==1) {?>selected="selected"<?php }?>>Soltero(a)</option>
<option value="2" <?php if ($_smarty_tpl->tpl_vars['u']->value['p_estado']==2) {?>selected="selected"<?php }?>>Casado(a)</option>
<option value="3" <?php if ($_smarty_tpl->tpl_vars['u']->value['p_estado']==3) {?>selected="selected"<?php }?>>Divorciado(a)</option>
<option value="4" <?php if ($_smarty_tpl->tpl_vars['u']->value['p_estado']==4) {?>selected="selected"<?php }?>>Viudo(a)</option>
</select></td>
</tr>
<tr>
<td>Sexo</td>
<td>
<select name="sex">
<option>Selecciona tu sexo</option>
<option value="0" <?php if ($_smarty_tpl->tpl_vars['u']->value['user_sexo']==0) {?>selected="selected"<?php }?>>Hombre</option>
<option value="1" <?php if ($_smarty_tpl->tpl_vars['u']->value['user_sexo']==1) {?>selected="selected"<?php }?>>Mujer</option>
</select></td>
</tr>
<tr>
<td>Pais</td>
<td>
<select name="pai">
<option>Selecciona tu pais (<?php echo $_smarty_tpl->tpl_vars['u']->value['u_pais'];?>
)</option>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sqlpaises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['p_prefijo'];?>
" <?php if ($_smarty_tpl->tpl_vars['u']->value['u_pais']==$_smarty_tpl->tpl_vars['p']->value['p_prefijo']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['p_opcion'];?>
</option>
<?php } ?>
</select></td>
</tr>
</tbody>
</table>
<div class="::sttryl" role="sttr">
<div>
</div>
</div><?php }} ?>
