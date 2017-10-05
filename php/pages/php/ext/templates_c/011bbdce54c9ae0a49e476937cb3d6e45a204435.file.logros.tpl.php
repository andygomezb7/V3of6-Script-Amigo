<?php /* Smarty version Smarty-3.1.19, created on 2014-11-22 19:39:28
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\logros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199725471297fd97018-23084672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011bbdce54c9ae0a49e476937cb3d6e45a204435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\logros.tpl',
      1 => 1416706757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199725471297fd97018-23084672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5471297fe4e1c1_08196821',
  'variables' => 
  array (
    'tsConfig' => 0,
    'medals' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471297fe4e1c1_08196821')) {function content_5471297fe4e1c1_08196821($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><h2 class="title">Logros en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar los logros que los usuarios podran obtener en sus perfiles, el ego de cada perfil, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<h3 class="tres">Logros (totales = <?php echo $_smarty_tpl->tpl_vars['medals']->value['num'];?>
) <a class="bg_green_3d btn color_white DodoCreat" >Crear logro</a></h3><br>
<table class="table" width="100%">
<thead>
<th>Identificado</th>
<th>Titulo</th>
<th>imagen</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medals']->value['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['m']->value['m_id'];?>
</td>
<td><a class="qtip" title="<?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['m']->value['m_date']);?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['m_title'];?>
</a></td>
<td><img class="qtip" title="<?php echo $_smarty_tpl->tpl_vars['m']->value['m_desc'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/options/icons/medals/<?php echo $_smarty_tpl->tpl_vars['m']->value['m_image'];?>
" style="width:32px;height:32px;"/></td>
<td><a title="editar" class="dodoMd" data-id="<?php echo $_smarty_tpl->tpl_vars['m']->value['m_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/do/editar.png"></a></td>
</tr>
<?php } ?>
</tbody>
</table>
<div class="::sttr" role="stt"><div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/admod/log_attr.js"></script>
</div></div><?php }} ?>
