<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 23:12:19
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\mod_i\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55845472be33dd40a9-90957395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dfdf46b0a70701b712aefa8bb0bcad32c4d3911' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\mod_i\\menu.tpl',
      1 => 1416805924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55845472be33dd40a9-90957395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5472be33e4e1c8_22401807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472be33e4e1c8_22401807')) {function content_5472be33e4e1c8_22401807($_smarty_tpl) {?><div class="admin_menu_i">
<ul>
	<div class="separator"></div>
<div class="minimenu">
<div class="ti">Configuraciones</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=estadisticas"><div>Estadisticas globales</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Usuarios</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=usuarios"><div>Todos los usuarios</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=baneados_usuarios"><div>Usuarios banenados</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Control</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=rangos"><div>Rangos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=logros"><div>Logros</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=dar_logros"><div>Dar logros</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Estadisticas</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg="><div>Actividad hoy</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-mod/?preg=usuarios_estadisticas"><div>Usuarios nuevos</div></a></li>
</div>
<div class="separator"></div>
</ul>
</div><?php }} ?>
