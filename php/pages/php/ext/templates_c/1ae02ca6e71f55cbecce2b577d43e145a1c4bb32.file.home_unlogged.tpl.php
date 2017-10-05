<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:34:54
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\aula_i\home_unlogged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2807054584c03a40839-51505008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae02ca6e71f55cbecce2b577d43e145a1c4bb32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\aula_i\\home_unlogged.tpl',
      1 => 1415488232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2807054584c03a40839-51505008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54584c03b34a72_81182443',
  'variables' => 
  array (
    '_SESSION' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54584c03b34a72_81182443')) {function content_54584c03b34a72_81182443($_smarty_tpl) {?><div class="no_regis">
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
