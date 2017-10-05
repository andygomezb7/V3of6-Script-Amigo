<?php /* Smarty version Smarty-3.1.19, created on 2014-11-20 21:20:32
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\new_i\favs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3006546e91037a1208-67891976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d2a2b68d44dc5ac880f3d95f32360fcc563b33f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\new_i\\favs.tpl',
      1 => 1416535953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3006546e91037a1208-67891976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546e91039c6714_01636608',
  'variables' => 
  array (
    'favs' => 0,
    'f' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e91039c6714_01636608')) {function content_546e91039c6714_01636608($_smarty_tpl) {?><div class="favson">
<div class="titlefav"><h2>Mis favoritos</h2></div>
<div style="width:67%;" class="floatL"><table class="table floatL" width="100%" style="margin: 0 0 0 6px;border-radius: 0;">
<thead>
<th>Nombre</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
<tr id="<?php echo $_smarty_tpl->tpl_vars['f']->value['favn_id'];?>
<?php echo $_smarty_tpl->tpl_vars['f']->value['favn_id'];?>
_L">
<td><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['f']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['f']->value['post_wdefined'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['f']->value['titulo'];?>
</a></td>
<td><a onclick="favn.det(<?php echo $_smarty_tpl->tpl_vars['f']->value['favn_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['f']->value['favn_nota'];?>
);">Borrar</a> &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['f']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['f']->value['post_wdefined'];?>
.html">Ver</a></td>
</tr>
<?php } ?>
</tbody>
</table>
<div class="paginas"><?php echo $_smarty_tpl->tpl_vars['favs']->value['pags'];?>
</div>
</div>
<div class="floatL" style="width: 31%;margin: 0 0 0 6px;">
<div class="hidden">
<ins><iframe width="306" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/apfav"></iframe></ins>
<ins><iframe width="306" height="255" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/php/pages/ejects/globalads/?q=4&usk=1&ssa=skkl-yvaq&sse=3&abg=notas&avg=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/apfav"></iframe></ins>
</div>
</div>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/fan_n.js"></script>
<style type="text/css">
.titlefav{margin: 0 6px 12px 3px;padding: 0 0 6px 0;border-bottom: 3px solid #4093F1;}
.titlefav h2{font-size: 20px;font-weight: normal;color: #0056B8;margin: 0 0 0 12px;}
</style>
</div>
</div>
</div><?php }} ?>
