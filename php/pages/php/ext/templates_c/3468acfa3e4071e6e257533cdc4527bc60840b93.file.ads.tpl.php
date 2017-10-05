<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 20:35:37
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1778254876f3a2625a5-98607951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3468acfa3e4071e6e257533cdc4527bc60840b93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\ads.tpl',
      1 => 1418351729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1778254876f3a2625a5-98607951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54876f3a81b325_60093215',
  'variables' => 
  array (
    'tsConfig' => 0,
    'adsquery' => 0,
    'ad' => 0,
    'ads' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54876f3a81b325_60093215')) {function content_54876f3a81b325_60093215($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><h2 class="title">Ads <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar las campañas publicitarias de cada usuario y activarlas o desactivarlas, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>

<div>
<h1>Activos</h1>
<table width="100%" class="table">
<thead>
<th>Identificador</th>
<th>Nombre de la campaña</th>
<th>Usuario</th>
<th>Info</th>
<th>Creación</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adsquery']->value['activos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
<tr id="doto_ad_<?php echo $_smarty_tpl->tpl_vars['ad']->value['au_id'];?>
">
<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['au_id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['au_name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['usuario_nombre'];?>
 [<?php echo $_smarty_tpl->tpl_vars['ad']->value['ua_user'];?>
]</td>
<td><?php if ($_smarty_tpl->tpl_vars['ad']->value['au_type_camp']==1) {?>Anuncio<?php } elseif ($_smarty_tpl->tpl_vars['ad']->value['au_type_camp']==2) {?>Campaña<?php } else { ?>indefinido<?php }?>, <?php if ($_smarty_tpl->tpl_vars['ad']->value['au_type']==1) {?>display<?php } elseif ($_smarty_tpl->tpl_vars['ad']->value['au_type']==2) {?>Texto<?php } else { ?>Indefinido<?php }?></td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['ad']->value['au_hace']);?>
</td>
<td>
<a title="Activar" style="display:block;width:23px;height:23px;background:green;" class="floatL ejtDc" data-of="<?php echo $_smarty_tpl->tpl_vars['ad']->value['au_id'];?>
" data-ofis="Active"></a>
<a title="Desactivar" style="display:block;width:23px;height:23px;background:red;margin: 0 0 0 4px;" class="floatL ejtDc" data-of="<?php echo $_smarty_tpl->tpl_vars['ad']->value['au_id'];?>
" data-ofis="Outive"></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>

<br>

<h1>Incativos</h1>
<table width="100%" class="table">
<thead>
<th>Identificador</th>
<th>Nombre de la campaña</th>
<th>Usuario</th>
<th>Info</th>
<th>Creación</th>
<th>Acciones</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['ads'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ads']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adsquery']->value['incativos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ads']->key => $_smarty_tpl->tpl_vars['ads']->value) {
$_smarty_tpl->tpl_vars['ads']->_loop = true;
?>
<tr id="doto_ad_<?php echo $_smarty_tpl->tpl_vars['ads']->value['au_id'];?>
">
<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['au_id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['ads']->value['au_name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['ads']->value['usuario_nombre'];?>
 [<?php echo $_smarty_tpl->tpl_vars['ads']->value['ua_user'];?>
]</td>
<td><?php if ($_smarty_tpl->tpl_vars['ads']->value['au_type_camp']==1) {?>Anuncio<?php } elseif ($_smarty_tpl->tpl_vars['ads']->value['au_type_camp']==2) {?>Campaña<?php } else { ?>indefinido<?php }?>, <?php if ($_smarty_tpl->tpl_vars['ads']->value['au_type']==1) {?>display<?php } elseif ($_smarty_tpl->tpl_vars['ads']->value['au_type']==2) {?>Texto<?php } else { ?>Indefinido<?php }?></td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['ad']->value['au_hace']);?>
</td>
<td>
<a title="Activar" style="display:block;width:23px;height:23px;background:green;" class="floatL ejtDc" data-of="<?php echo $_smarty_tpl->tpl_vars['ads']->value['au_id'];?>
" data-ofis="Active"></a>
<a title="Desactivar" style="display:block;width:23px;height:23px;background:red;margin: 0 0 0 4px;" class="floatL ejtDc" data-of="<?php echo $_smarty_tpl->tpl_vars['ads']->value['au_id'];?>
" data-ofis="Outive"></a>
</td>
<?php } ?>
</tbody>
</table>

<div class="::sttr" role="sttr">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css">
<script type="text/javascript">
var adsActions = {
setOf: function(i, act, OF) {
OF.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/admin-adsOf.php', {'iof':i,'actrn':act}, function(h){
OF.css({'opacity':'1'}); if(h.charAt(1) == 1){
$('#doto_ad_'+i).css({'border':'1px solid #CCCCCC'});
}else{ mydialog.alert('Aviso', '<div id="error_flat">'+h.substring(3)+'</div>'); }
});
}
}
$(function(){
$('.ejtDc').click(function(){ adsActions.setOf($(this).attr('data-of'), $(this).attr('data-ofis'), $(this)); });
})
</script>
</div>
</div><?php }} ?>
