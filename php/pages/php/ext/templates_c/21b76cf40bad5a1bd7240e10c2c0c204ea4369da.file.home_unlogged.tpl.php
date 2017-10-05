<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:55
         compiled from "/home/babanta/wortit.net/themes/default/modulos/aula_i/home_unlogged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10768306655875a72b205851-66456106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21b76cf40bad5a1bd7240e10c2c0c204ea4369da' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/aula_i/home_unlogged.tpl',
      1 => 1415484632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10768306655875a72b205851-66456106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_SESSION' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a72b225c48_53549240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a72b225c48_53549240')) {function content_5875a72b225c48_53549240($_smarty_tpl) {?><div class="no_regis">
<div class="no_regis_content">
<div class="no_regis_header">
<h1>¿No te has unido a nuestra comunidad estudiantil?</h1>
<h4>Establecimientos  -  Profesores  -  Estudiantes</h4>
<h3 class="btn">Unirme
<ul id="SDF65Sf19" class="unirme_toolt" style="margin: 21px 0 0 0;"> 
<div class="tool"></div>
<div id="prn">
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
<li class="first"><a class="active" onclick="r_a.student_prof(1, 2)">Profesor</a></li> 
<li class="first"><a class="active" onclick="r_a.student_prof(1, 1)">Estudiante</a></li>
<li><a onclick="r_a.sestablishment(1, 3)">Establecimiento</a></li>
<?php } else { ?>
<li class="first"><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/">Iniciar sesión</a></li> 
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/registro/">Registrarme</a></li>
<?php }?>
</div>
</ul>
</h3>
</div>

<div class="no_regis_contet_xtas::">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/aula.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/regis_aula.js"></script>
<style type="text/css"> .aula_con{background: inherit!important;} </style>
</div>
</div>
</div><?php }} ?>
