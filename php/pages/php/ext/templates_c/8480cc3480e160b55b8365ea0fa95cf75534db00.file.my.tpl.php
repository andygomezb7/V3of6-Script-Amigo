<?php /* Smarty version Smarty-3.1.19, created on 2014-11-27 13:53:04
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\ads_i\pages\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187895453f46b16e363-73511589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8480cc3480e160b55b8365ea0fa95cf75534db00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\ads_i\\pages\\my.tpl',
      1 => 1415416922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187895453f46b16e363-73511589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f46b3567e2_74498607',
  'variables' => 
  array (
    'anun' => 0,
    'tsConfig' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f46b3567e2_74498607')) {function content_5453f46b3567e2_74498607($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.date_format.php';
?><div class="rftl_ads_ss floatL">
<div id="error_flat">Nuestro sistema de publicidad esta en version <b class="color_red">BETA</b>, Cualquier problema no dudes en reportarlo en la parte inferior de nuestro sitio.<br />Muchas gracias.</div>
</div>
<div class="fltLf_ads_ss floatL">
<div class="tablecont_ads_view">
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<tr>
<th>Nombre</th>
<th>Identificador</th>
<th>Tipo</th>
<th>Estado</th>
<th>Resumen</th>
<th>Fecha</th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['anun']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
<tr>
<td>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/ads/informe/?adspage=pub_<?php echo $_smarty_tpl->tpl_vars['a']->value['au_hace'];?>
_<?php echo $_smarty_tpl->tpl_vars['a']->value['au_id'];?>
" class="qtip" title="Ver informe"><?php echo $_smarty_tpl->tpl_vars['a']->value['au_name'];?>
</a><br />
<div <?php if ($_smarty_tpl->tpl_vars['a']->value['au_type_camp']==2) {?>style="text-align:-webkit-left;">
<a href="#codeTo_-pub_<?php echo $_smarty_tpl->tpl_vars['a']->value['au_hace'];?>
_<?php echo $_smarty_tpl->tpl_vars['a']->value['au_id'];?>
" onclick="loadincogt.set(<?php echo $_smarty_tpl->tpl_vars['a']->value['au_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['a']->value['au_key'];?>
', '<?php echo $_smarty_tpl->tpl_vars['a']->value['au_hace'];?>
', '<?php echo $_smarty_tpl->tpl_vars['a']->value['au_dimensiones'];?>
');" class="floatL">Obtener codigo</a>
<div style="padding:0px 7px;" class="floatL">|</div><?php } else { ?>><?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/ads/informe/?adspage=pub_<?php echo $_smarty_tpl->tpl_vars['a']->value['au_hace'];?>
_<?php echo $_smarty_tpl->tpl_vars['a']->value['au_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['a']->value['au_type_camp']==2) {?>class="floatL"<?php }?>>Ver informe</a>
</div>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['au_hace'];?>
</td>
<td><?php if ($_smarty_tpl->tpl_vars['a']->value['au_type_camp']==1) {?><a class="qtip" title="<span>Anuncio pagado.</span><br />Obtener trafico atravez de este anuncio.">Anuncio</a><?php } elseif ($_smarty_tpl->tpl_vars['a']->value['au_type_camp']==2) {?><a class="qtip" title="<span>Anuncio en mi pagina o blog.</span><br />Mostrar anuncio en mi pagina web/blog.">Campaña</a><?php } else { ?>Indefinido<?php }?></td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['tipo'];?>
,<br /><?php echo $_smarty_tpl->tpl_vars['a']->value['dimen'];?>
</td>
<td><?php if ($_smarty_tpl->tpl_vars['a']->value['au_type_camp']==1) {?>Finaliza: <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['au_date_two']);?>
</b><?php } elseif ($_smarty_tpl->tpl_vars['a']->value['au_type_camp']==2) {?>Creado: <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['au_date_one']);?>
</b><?php } else { ?>Indefinido<?php }?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<div class="::contnts_biochek:_sd1">
<div><div></div><div><div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/cntn_ads1.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/myadspage.js"></script>
</div></div></div>
</div>
</div><?php }} ?>
