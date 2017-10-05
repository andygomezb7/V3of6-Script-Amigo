<?php /* Smarty version Smarty-3.1.19, created on 2014-11-30 15:50:04
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\grupos_i\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2295654778f96f05378-71701104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500f45cfccaec3a57ebe05e2aa6f70c2b2365cd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\grupos_i\\menu.tpl',
      1 => 1417384194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2295654778f96f05378-71701104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54778f96f05376_04554841',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54778f96f05376_04554841')) {function content_54778f96f05376_04554841($_smarty_tpl) {?><div class="grupos_i_menu hidden">
<ul class="hidden zoom">
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=home"><div>Grupos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=sug"><div>Grupos sugeridos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=amg"><div>Grupos de mis amigos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=local"><div>Grupos locales</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=misgrupos"><div>Tus grupos</div></a></li>
<div class="floatR">
<li><a class="bg_green_3d btn color_white crtGrp">Crear grupo</a></li>
</div>
</ul>
</div><?php }} ?>
