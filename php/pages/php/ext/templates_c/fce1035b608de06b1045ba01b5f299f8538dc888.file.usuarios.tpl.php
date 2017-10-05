<?php /* Smarty version Smarty-3.1.19, created on 2017-02-05 03:03:07
         compiled from "/home/babanta/wortit.net/themes/default/modulos/admin_i/usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20912373795896ea4b4a6b09-34835352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce1035b608de06b1045ba01b5f299f8538dc888' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/admin_i/usuarios.tpl',
      1 => 1416787044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20912373795896ea4b4a6b09-34835352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'users' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5896ea4b5c21c0_52243512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896ea4b5c21c0_52243512')) {function content_5896ea4b5c21c0_52243512($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><h2 class="title">Usuarios en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar el perfil de cada usuario, pero limitado a ciertos campos de su perfil ya que respetamos la privacidad y seguridad de cada perfil, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Nombre</th>
<th>Nick</th>
<th>Registro</th>
<th>Ultima actividad</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['u']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['ap_original'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['u']->value['identi']);?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['u']->value['active_ult']);?>
</td>
<td><a title="Editar" onclick="adus.edit(<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
, 1)"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/do/editar.png" /></a></td>
</tr>
<?php } ?>
</tbody>
</table>

<?php echo $_smarty_tpl->tpl_vars['users']->value['pags'];?>


<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/admod/usr_rlr.js"></script>
<style type="text/css">
.pgbtn{display: block;
float: left;
padding: 6px 12px;
margin: 4px 0 0 0;
background: rgb(59, 213, 71);}
</style>
</div>
</div><?php }} ?>
