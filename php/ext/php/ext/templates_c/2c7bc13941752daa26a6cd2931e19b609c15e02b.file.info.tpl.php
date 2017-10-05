<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 21:25:03
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\perfil\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5045546aa5714c4b41-81281661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7bc13941752daa26a6cd2931e19b609c15e02b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\perfil\\info.tpl',
      1 => 1416278636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5045546aa5714c4b41-81281661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546aa57157bcf4_95760586',
  'variables' => 
  array (
    'tsInfo' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546aa57157bcf4_95760586')) {function content_546aa57157bcf4_95760586($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="div-clinfoh hidden">
<div class="dodoke-div hidden">
<div class="dvcli-le floatL">

<div class="cotow" style="border-top-color: #fbcb43;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Informaci&oacute;n de contacto</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Correo electronico</div>
<div class="coto-UiCon-Ds"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['usuario_email']) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['usuario_email'];?>
<?php } else { ?><u>Sin email definido</u><?php }?></div>
</div>


<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Sitio web/blog</div>
<div class="coto-UiCon-Ds"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['p_sitio']) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['p_sitio'];?>
<?php } else { ?><u>Sin sitio web/blog</u><?php }?></div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

<div class="cotow" style="border-top-color: #4dbfd9;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Informaci&oacute;n personal</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Nacimiento</div>
<div class="coto-UiCon-Ds"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['nac_anio'];?>
 / <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['nac_mes'];?>
 / <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['nac_dia'];?>
</div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Alias</div>
<div class="coto-UiCon-Ds"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['alias']) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['alias'];?>
<?php } else { ?><u>Sin alias definido</u><?php }?></div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Estado</div>
<div class="coto-UiCon-Ds">
<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['p_estado']==1) {?>Soltero(a)
<?php } elseif ($_smarty_tpl->tpl_vars['tsInfo']->value['p_estado']==2) {?>Casado(a)
<?php } elseif ($_smarty_tpl->tpl_vars['tsInfo']->value['p_estado']==3) {?>Divorciado(a)
<?php } elseif ($_smarty_tpl->tpl_vars['tsInfo']->value['p_estado']==4) {?>Viudo(a)
<?php } else { ?><u>Indefinido</u><?php }?></div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Sexo</div>
<div class="coto-UiCon-Ds"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['usuario_sexo']==0) {?>Hombre<?php } elseif ($_smarty_tpl->tpl_vars['tsInfo']->value['usuario_sexo']==1) {?>Mujer<?php } else { ?>Indefinido<?php }?></div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

</div>

<div class="dvcli-ri floatR">

<div class="cotow" style="border-top-color: #e46f61;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Descripci&oacute;n personal</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-Ds"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['descripcion']) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['descripcion'];?>
<?php } else { ?><div id="error_flat" class="blue_flat">No comparte informaci&oacute;n personal</div><?php }?></div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

<div class="cotow" style="border-top-color: #8cc474;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Informaci&oacute;n extra</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Se Registro</div>
<div class="coto-UiCon-Ds"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsInfo']->value['identi']);?>
</div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Ultima actividad</div>
<div class="coto-UiCon-Ds"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsInfo']->value['active_ult']);?>
</div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

</div>

<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/inf-pr.css"></div>
</div>
</div><?php }} ?>
