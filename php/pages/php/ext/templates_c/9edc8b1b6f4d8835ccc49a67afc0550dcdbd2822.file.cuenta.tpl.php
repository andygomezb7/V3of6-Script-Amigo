<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:08:09
         compiled from "/home/babanta/wortit.net/themes/default/cuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5941743505875f5f99c8f16-83389910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edc8b1b6f4d8835ccc49a67afc0550dcdbd2822' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/cuenta.tpl',
      1 => 1418258296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5941743505875f5f99c8f16-83389910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'u' => 0,
    'get_' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f5f9b44841_42365173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f5f9b44841_42365173')) {function content_5875f5f9b44841_42365173($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="t_cuenta">
<div class="t_cuenta_cont hidden">
<div class="t_cuenta_l">
<div class="t_cuenta_header">
<div class="title hidden"><h2>Mi Foto</h2></div>
<div class="box"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" class="cursorP" onclick="$('.msntrCmbAVtCunt').toggle();">
<ul id="SDF65Sf19" class="msntrCmbAVtCunt dsnone" style="margin: 0px 0 0 0px;">
<div class="tool"></div><div id="prn">
<li class="first"><a class="active" onclick="modalsPrfl.cmbrAvtrMdl();">Importar imagen</a></li>
<li><a class="active">Seleccionar imagen</a></li>
</div></ul>
</div>
<div class="title hidden"><h2>Estado</h2></div>
<div class="boxTwo">
<div class="clearfix"><div class="l floatL color_gray" title="Tipo de cuenta">Tipo</div><div class="floatR r"><?php if ($_smarty_tpl->tpl_vars['u']->value['user_vip']==1) {?>V.I.P<?php } else { ?>Normal<?php }?></div></div>
<div class="clearfix"><div class="l floatL color_gray" title="Ultima actividad">Actividad</div>
<div class="floatR r" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value['active_ult'],"%I:%M %p");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value['active_ult'],"%D");?>
</div></div>
<div class="clearfix">
<div class="l floatL color_gray" title="Dinero">Worts</div>
<div class="floatR r" title="Cantidad de Worts">$<?php echo $_smarty_tpl->tpl_vars['u']->value['u_bworts'];?>
.00</div></div>
<div class="clearfix">
<div class="l floatL color_gray" title="Perfil verificado">Verficado</div>
<div class="floatR r" title="<?php if ($_smarty_tpl->tpl_vars['u']->value['verifi']==1) {?>Verificado<?php } else { ?>No verificado<?php }?>"><?php if ($_smarty_tpl->tpl_vars['u']->value['verifi']==1) {?><div style="background:green;width:16px;height:16px;border-radius:3px;"></div><?php } else { ?><div style="background:gray;width:16px;height:16px;border-radius:3px;"></div><?php }?></div></div>
</div>
</div>
</div>

<div class="t_cuenta_r">
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="t_cuenta_mod">
<div id="error_flat" class="dsnone"></div>
<div class="barloading dsnone"><div class="bar animate_1s" style="width:0%;"></div></div>
<?php if ($_smarty_tpl->tpl_vars['get_']->value['pref']=='Configuración'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='configuracion'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='configuracion'||!$_smarty_tpl->tpl_vars['get_']->value['pref']) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['pref']=='Privacidad'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='privacidad') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/privacidad.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['pref']=='Notificaciones'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='notificaciones') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/Notificaciones.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['pref']=='Referidos'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='referidos') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/referidos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['pref']=='Worts'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='worts') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/worts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['pref']=='Estadísticas'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='estadísticas'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='Estadisticas'||$_smarty_tpl->tpl_vars['get_']->value['pref']=='estatisticas') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/cuenta_i/estatics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
</div>
<div class="::sttryl" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/edt_profile.js"></script>
</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
