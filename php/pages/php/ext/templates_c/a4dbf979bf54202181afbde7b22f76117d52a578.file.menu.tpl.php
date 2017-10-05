<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 21:55:53
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229805470eb1c7270e1-73150856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4dbf979bf54202181afbde7b22f76117d52a578' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\menu.tpl',
      1 => 1418356547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229805470eb1c7270e1-73150856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5470eb1c7270e6_09266810',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5470eb1c7270e6_09266810')) {function content_5470eb1c7270e6_09266810($_smarty_tpl) {?><div class="admin_menu_i">
<ul>
	<div class="separator"></div>
<div class="minimenu">
<div class="ti">Configuraciones</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=control_configs"><div>Control de configuraciones</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=estadisticas"><div>Estadisticas globales</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=cssEdit"><div>Estilos de la pagina</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Usuarios</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=usuarios"><div>Todos los usuarios</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=baneados_usuarios"><div>Usuarios banenados</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Control</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=modactividad"><div>Mod actividad</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=rangos"><div>Rangos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=logros"><div>Logros</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=dar_logros"><div>Dar logros</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Control de secciones</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=ads"><div>Anuncios</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=tienda"><div>Tienda</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Reportes</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=denuncias"><div>Denuncias</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=reportes"><div>Reportes</div></a></li>
</div>
<div class="separator"></div>
<div class="minimenu">
<div class="ti">Estadisticas</div>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg="><div>Actividad hoy</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=usuarios_estadisticas"><div>Usuarios nuevos</div></a></li>
</div>
<div class="separator"></div>
</ul>
</div><?php }} ?>
