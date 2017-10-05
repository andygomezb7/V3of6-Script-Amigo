<?php /* Smarty version Smarty-3.1.19, created on 2017-01-15 23:00:29
         compiled from "/home/babanta/wortit.net/themes/default/modulos/admin_i/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:845727080587c536da743f2-08625906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577f4d675fdf1123e1cd457504b898a43a17bd79' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/admin_i/menu.tpl',
      1 => 1418352948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845727080587c536da743f2-08625906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587c536dab3c32_98866644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c536dab3c32_98866644')) {function content_587c536dab3c32_98866644($_smarty_tpl) {?><div class="admin_menu_i">
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
