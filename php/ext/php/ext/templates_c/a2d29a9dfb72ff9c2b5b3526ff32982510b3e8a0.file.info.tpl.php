<?php /* Smarty version Smarty-3.1.19, created on 2017-02-05 03:04:19
         compiled from "/home/babanta/wortit.net/themes/default/ajax_files/perfil/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13956516245896ea933de640-68057144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d29a9dfb72ff9c2b5b3526ff32982510b3e8a0' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/ajax_files/perfil/info.tpl',
      1 => 1416275038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13956516245896ea933de640-68057144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsInfo' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5896ea93464742_14922325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896ea93464742_14922325')) {function content_5896ea93464742_14922325($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
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
