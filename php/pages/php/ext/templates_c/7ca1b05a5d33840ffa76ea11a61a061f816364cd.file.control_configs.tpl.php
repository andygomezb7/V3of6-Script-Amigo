<?php /* Smarty version Smarty-3.1.19, created on 2014-11-22 16:42:09
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\control_configs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151725470f3e0989684-21867885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ca1b05a5d33840ffa76ea11a61a061f816364cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\control_configs.tpl',
      1 => 1416696098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151725470f3e0989684-21867885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5470f3e0989684_55834623',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5470f3e0989684_55834623')) {function content_5470f3e0989684_55834623($_smarty_tpl) {?><h2 class="title">Control de configuraciones</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 podras administrar las configuraciones globales que controlan <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 y su contenido HTML o cuerpo de toda la pagina.</p>
<br><br>
<div class="control_configs_1 stato">
<h3 class="tres">Definiciones</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Hashtag(#) del dia</td> <td><input type="text" name="hashtag" placeholder="#WortitHome" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['hashtag'];?>
"/></td></tr>
</tbody>
</table>
<h3 class="tres">Nombres</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Titulo de la pagina</td> <td><input type="text" name="titulo" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
"/></td></tr>
<tr><td>Nombre de grupos</td> <td><input type="text" name="gru_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Grupos" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name_grupos'];?>
"/></td></tr>
<tr><td>Lema o frase de la pagina</td> <td><input type="text" name="lema" placeholder="Interactua con los demas" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['lema'];?>
"/></td></tr>
<tr><td>Logo</td> <td><input type="text" name="logo" placeholder="http://" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['logo'];?>
"/></td></tr>
</tbody>
</table>
<h3 class="tres">Direcciones urls</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Direccion url (enlace)</td> <td><input type="text" name="url" placeholder="http://" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
"/></td></tr>
<tr><td>Direccion de grupos</td> <td><input type="text" name="gru_url" placeholder="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_grupos'];?>
"/></td></tr>
<tr><td>Dirección de esta administración</td> <td><input type="text" name="ad_url" placeholder="http://" value="<?php if (!$_smarty_tpl->tpl_vars['tsConfig']->value['url_admin']) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_admin'];?>
<?php }?>"></td></tr>
</tbody>
</table>
<h3 class="tres">Estados</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Pagina en mantenimiento</td> 
<td><select name="mant">
<option>¿Estado de la pagina?</option>
<option value="1" <?php if ($_smarty_tpl->tpl_vars['tsConfig']->value['mantenimiento']==1) {?>selected="selected"<?php }?>>Activa</option>
<option value="2" <?php if ($_smarty_tpl->tpl_vars['tsConfig']->value['mantenimiento']==2) {?>selected="selected"<?php }?>>En mantenimiento.</option></select></td></tr>
<tr><td>Texto en mantenimiento</td> <td><input type="text" name="mntx" placeholder="La pagina esta en matenimiento" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['mant_text'];?>
"></td></tr>
</tbody>
</table>
<h3 class="tres">Pagos</h3>
<table width="100%" class="table">
<tbody>
<tr><td>(ADS) pago por click</td> <td><input type="text" name="advertad" placeholder="0.5" value="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['ads_wort_adv'];?>
"/></td></tr>
</tbody>
</table>
<br/><br/>
<div class="clearfix"><div class="floatL dsnone Load_ControlConfigs"><i class="load floatL" style="width:32px;height:32px;"></i></div><input type="button" class="bg_green_3d btn color_white control_configs" value="Guardar" ></div>
</div>
<div class="sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css" />
<style type="text/css">
input[type=text]{width: 227px;}
</style>
</div>
</div><?php }} ?>
