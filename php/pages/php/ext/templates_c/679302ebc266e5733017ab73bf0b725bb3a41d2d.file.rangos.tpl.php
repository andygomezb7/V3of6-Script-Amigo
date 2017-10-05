<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 15:32:54
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\rangos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:592154711146225515-73677305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679302ebc266e5733017ab73bf0b725bb3a41d2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\rangos.tpl',
      1 => 1416873441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '592154711146225515-73677305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5471114629f630_36175882',
  'variables' => 
  array (
    'tsConfig' => 0,
    'rangos' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471114629f630_36175882')) {function content_5471114629f630_36175882($_smarty_tpl) {?><h2 class="title">Rangos en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar todos los rangos: eliminar, editar y agregar rangos. Controlar sus acceso a cada pagina y datos especiales, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<h3 clas="tres">Lista de rangos (totales = <?php echo $_smarty_tpl->tpl_vars['rangos']->value['num'];?>
) <a class="bg_green_3d btn color_white" onclick="ranckn.edit(0, 1, 'add');">Crear rango</a></h3>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Nombre</th>
<th>Color</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rangos']->value['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['r']->value['id_rango'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</td>
<td><span style="color:<?php echo $_smarty_tpl->tpl_vars['r']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['r']->value['color'];?>
</span></td>
<td>
<a onclick="ranckn.edit(<?php echo $_smarty_tpl->tpl_vars['r']->value['id_rango'];?>
, 1, 'editar');" title="Editar"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/do/editar.png"></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/admod/rangs_ckn.js"></script>
</div>
</div><?php }} ?>
