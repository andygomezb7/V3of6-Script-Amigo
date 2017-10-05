<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 22:44:51
         compiled from "./themes/default/modulos/home_i/loggeado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19719176195875b8433c10c6-33893793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e973686238b508e67a68f253949a4d4d2c0307' => 
    array (
      0 => './themes/default/modulos/home_i/loggeado.tpl',
      1 => 1418692862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19719176195875b8433c10c6-33893793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'relacv' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875b843438951_20345385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875b843438951_20345385')) {function content_5875b843438951_20345385($_smarty_tpl) {?><div class="lggd">
<div class="leftlggd dsnone"></div>
<div class="conts">

<div class="cntrlggd">
<div class="gcont" style="margin-top: 10px;">
<div class="gcontent">
<?php echo $_smarty_tpl->getSubTemplate ('modulos/home_i/publicador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</div>
<div><input type="hidden" id="PgHScrlInf" value="2"></div>
<div class="contbwh">
</div>

</div>

<div class="rghtlggd">

<div class="gcont">
<div class="gtitle">Secciones en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</div>
<div class="gcontent">
<div style="padding:8px 5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/">Noticias y notas</a></div>
<div style="padding:8px 5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/">Foros de soporte</a></div>
<div style="padding:8px 5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/foro/">Foros interactivos</a></div>
<div style="padding:8px 5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/">Grupos sociales</a></div>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['relacv']->value) {?>
<div class="gcont">
<div class="gtitle">Te recordamos</div>
<div class="gcontent">
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relacv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
<div class="sKddfT hidden" style="border-bottom: 1px solid #BEBEBE;padding: 0px 0px 6px 0px;margin-bottom: 7px;">
<div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" style="width: 48px;height: 48px;"></div>
<div class="info floatL" style="margin: 0px 0px 0px 4px;width: 72%;">
<div class="clearfix hidden" style="font-size: 12px;margin: 0px 0px 5px 0px;">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
"><?php if ($_smarty_tpl->tpl_vars['u']->value['name_original']&&$_smarty_tpl->tpl_vars['u']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['u']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['ap_original'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
<?php }?></a>
</div>
<div class="clearfix hidden">
<?php if ($_smarty_tpl->tpl_vars['u']->value['sigo']<=0) {?>
<a class="follow floatL input_button hidden noactive" style="padding: 7px 6px;" id="f<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
" fi-source="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;">Seguir</div>
</a>
<?php } else { ?>
<a class="follow floatL input_button hidden active" style="padding: 7px 6px;" id="f<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
" fi-source="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;"><span class="sp1">Siguiendo</span> <span class="sp2">Dejar de seguir</span></div>
</a>
<?php }?>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
<?php }?>

<div class="gcont">
<div class="gtitle">Anuncios</div>
<div class="gcontent"></div>
</div>

</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/pub.css"/>
<div class="cmpltd"><span><input type="hidden" name="ssome" value="1" /></span></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/pub.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/bwort.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/bwts.css" />
<script type="text/javascript">
$(function(){
$('.contbwh').html('<div><center><img title="Cargando..." class="qtip" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/media/icons/loading/lw-2.gif" /></center></div>');
$.post(global_data.url+'/ajax/bwort-load.php', function(h){ $('.contbwh').html(h); });
});
</script>
</div><?php }} ?>
