<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 16:20:54
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\cuenta_i\privacidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:820554655b30f05378-86657820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8372e0f80cdda3fcd89f65635fc3901e0ea5ea72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\cuenta_i\\privacidad.tpl',
      1 => 1416176450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820554655b30f05378-86657820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54655b30f05371_31258583',
  'variables' => 
  array (
    'u' => 0,
    'options' => 0,
    'i' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54655b30f05371_31258583')) {function content_54655b30f05371_31258583($_smarty_tpl) {?><table width="100%" class="table" id="inform1" style="border:0;margin:0;">
<tbody>
<tr>
<td>Notificaciones via email</td>
<td>
<select name="ssnotifiem" id="ssnotifiem">
	<option value="0">¿Deseas recibir emails?</option>
	<option value="1" <?php if ($_smarty_tpl->tpl_vars['u']->value['s']['ss_notifiem']==1||$_smarty_tpl->tpl_vars['u']->value['s']['ss_notifiem']=='1') {?>selected="selected"<?php }?>>Sí recibir</option>
	<option value="0" <?php if ($_smarty_tpl->tpl_vars['u']->value['s']['ss_notifiem']==0||$_smarty_tpl->tpl_vars['u']->value['s']['ss_notifiem']=='0') {?>selected="selected"<?php }?>>No recibir</option>
</select>
</td>
</tr>
<tr>
<td><label for="sdatos">Enviarme mensajes:</label></td>
<td><select name="smsg" id="smsg" >
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_datos']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select></td>
</tr>
<tr>
<td><label for="sdatos">Mi datos personales:</label></td>
<td><select name="sdatos" id="sdatos" >
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_datos']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select></td>
</tr>
<tr><td><label for="sbworts">Bworts:</label></td>
<td><select name="sbworts" id="sbworts">
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_bworts']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select></td>
</tr>
<tr>
<td><label for="sbwortsp">Bworts en mi perfil:</label></td>
<td><select name="sbwortsp" id="sbwortsp">
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_bwortsp']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select></td>
</tr>
<tr>
<td><label for="stemas">Temas:</label></td>
<td><select name="stemas" id="stemas">
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_temas']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select>
</td></tr>
<tr>
<td><label for="snotas">Notas:</label></td>
<td><select name="snotas" id="snotas">
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_notas']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select><input type="hidden" name="tyyy" value="2" /></td>
</tr>
<tr>
<td><label for="spublicpp">Publicar en mi perfil:</label></td>
<td><select name="spublicpp" id="spublicpp">
	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['u']->value['s']['sp_publicpp']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</option>
	<?php } ?>
</select></td>
</tr>
</tbody>
</table><?php }} ?>
