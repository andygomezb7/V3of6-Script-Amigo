<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 21:58:12
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\denuncia\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1215457e8c15f5e12-00605090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20e0525b9a20eda1d154d62a2e94f030386b85f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\denuncia\\form.tpl',
      1 => 1412107162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1215457e8c15f5e12-00605090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e8c194c5f8_26915845',
  'variables' => 
  array (
    'tsAction' => 0,
    'tsData' => 0,
    'tsConfig' => 0,
    'tsDenuncias' => 0,
    'denuncia' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e8c194c5f8_26915845')) {function content_5457e8c194c5f8_26915845($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-nota') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar el post:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_title'];?>
<br /><br />
    <b>Creado por:</b><br />
    <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_user'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_user'];?>
</a><br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
    	<?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">En el caso de ser Re-post se debe indicar el link de la nota original.</span>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-foto') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar foto:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_title'];?>
<br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
    	<?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">Para atender tu caso r&aacute;pidamente, adjunta pruevas de tu denuncia.<br /> (capturas de pantalla)</span>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-comunidad') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar comunidad:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_title'];?>
<br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
    	<?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">Para atender tu caso r&aacute;pidamente, adjunta pruevas de tu denuncia.<br /> (capturas de pantalla)</span>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-tema') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar tema:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_title'];?>
<br /><br />
    <b>Autor:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_user'];?>
<br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
    	<?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">Para atender tu caso r&aacute;pidamente, adjunta pruevas de tu denuncia.<br /> (capturas de pantalla)</span>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-usuario') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar usuario:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_user'];?>
<br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">Para atender tu caso r&aacute;pidamente, adjunta pruevas de tu denuncia.<br /> (capturas de pantalla)</span>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-mensaje') {?>
<div class="emptyData">Si reportas este mensaje ser&aacute; eliminado de tu bandeja. <br />&iquest;Realmente quieres denunciar este mensaje como correo no deseado?</div>
<input type="hidden" name="razon" value="spam" />
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-usuario') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar usuario:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['nick'];?>
<br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
    	<?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">Para atender tu caso r&aacute;pidamente, adjunta pruevas de tu denuncia.<br /> (capturas de pantalla)</span>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='denuncia-bwort') {?>
<div align="center" style="padding:10px 10px 0">
    <b>Denunciar Bwort de:</b><br />
    <?php echo $_smarty_tpl->tpl_vars['tsData']->value['obj_user'];?>
<br /><br />
    <b>Raz&oacute;n de la denuncia:</b><br />
    <select name="razon">
    <?php  $_smarty_tpl->tpl_vars['denuncia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['denuncia']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsDenuncias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->key => $_smarty_tpl->tpl_vars['denuncia']->value) {
$_smarty_tpl->tpl_vars['denuncia']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['denuncia']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['denuncia']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value;?>
</option><?php }?>
    <?php } ?>
    </select><br />
    <b>Aclaraci&oacute;n y comentarios:</b><br />
    <textarea tabindex="6" rows="5" cols="40" name="extras"></textarea><br />
    <span class="size9">Para atender tu caso r&aacute;pidamente, adjunta pruevas de tu denuncia.<br /> (capturas de pantalla)</span>
</div>
<?php }?><?php }} ?>
