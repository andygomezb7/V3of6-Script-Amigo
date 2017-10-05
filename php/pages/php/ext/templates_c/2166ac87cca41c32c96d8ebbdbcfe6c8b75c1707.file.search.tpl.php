<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:09
         compiled from "/home/babanta/wortit.net/themes/default/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20006873015875a6fd112152-01259666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2166ac87cca41c32c96d8ebbdbcfe6c8b75c1707' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/search.tpl',
      1 => 1416954132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20006873015875a6fd112152-01259666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'q' => 0,
    'result' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a6fd3f1fb5_13159906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a6fd3f1fb5_13159906')) {function content_5875a6fd3f1fb5_13159906($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.seo.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="search_i hidden">
<div class="search_i_content hidden clearfix">
<div class="search_i_l floatL iconbg"><h2 class="title">filtros</h2></div>
<div class="search_i_c floatL">
<div><form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/search/"><input type="text" name="q" placeholder="Buscar..." class="input_search"></form></div>
<div class="hidden iconbg"><h2 class="title">Resultados</h2>
	<div class="iotions results">
<?php if ($_smarty_tpl->tpl_vars['q']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['result']->value['num_rows']==1||$_smarty_tpl->tpl_vars['result']->value['num_rows']>1) {?>
<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
<?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['q']->value['usuario_nombre']) {?><?php } else { ?>
<div class="result">
<div class="hoverhackd">
<a class="wortip" uid="<?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_id'];?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['q']->value['w_avatar']==null) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/avatar/group.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['q']->value['w_avatar'];?>
<?php }?>"></a>
<div style="float: left;margin: -1px 0px 0px 6px;">
<a class="wortip" uid="<?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_id'];?>
" id="q" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
/"><?php if ($_smarty_tpl->tpl_vars['q']->value['name_original']&&$_smarty_tpl->tpl_vars['q']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['q']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['q']->value['ap_original'];?>
 (<?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
) <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
 <?php }?></a>
<div class="size11 floatL"><?php echo $_smarty_tpl->tpl_vars['q']->value['p_opcion'];?>
</div>
<div class="size11">
<span><?php echo $_smarty_tpl->tpl_vars['q']->value['interacciones'];?>
 Interacciones</span> - <span><?php echo $_smarty_tpl->tpl_vars['q']->value['notas'];?>
 Noticias</span> - <span><?php echo $_smarty_tpl->tpl_vars['q']->value['temas'];?>
 Temas</span>
</div>
</div>
</div>
</div>
<?php }?>
<?php } ?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
<?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['q']->value['t_titulo']) {?><?php } else { ?>
<div class="result">
<div class="hoverhackd">
<a><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/com/<?php echo $_smarty_tpl->tpl_vars['q']->value['c_img'];?>
"></a>
<div style="float: left;margin: -1px 0px 0px 6px;">
<i class="com_icon <?php echo $_smarty_tpl->tpl_vars['q']->value['c_seo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['q']->value['c_nombre'];?>
" style="vertical-align: top;"></i><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['q']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['q']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['q']->value['t_titulo']);?>
.html" id="q"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['q']->value['t_titulo'],80);?>
</a>
<div class="size11 floatL"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['q']->value['t_fecha']);?>
</div>
<div class="size11">
<span><?php echo $_smarty_tpl->tpl_vars['q']->value['t_respuestas'];?>
 Respuestas </span> - <span><?php echo $_smarty_tpl->tpl_vars['q']->value['t_votos_pos'];?>
 Me gusta</span>
</div>
</div>
</div>
</div>
<?php }?>
<?php } ?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>
<?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['q']->value['titulo']) {?><?php } else { ?>
<div class="result">
<div class="hoverhackd">
<a><img src="<?php echo $_smarty_tpl->tpl_vars['q']->value['banner'];?>
" id="sdknoteimg" /></a>
<div style="float: left;margin: -1px 0px 0px 6px;width: 87%;">
<a target="_blank" id="q" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/notas/<?php echo $_smarty_tpl->tpl_vars['q']->value['wdefined'];?>
/<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['q']->value['post_wdefined'];?>
.html"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['q']->value['titulo'],60);?>
</a>
<div style="overflow: hidden;float: left;clear: both;">
<div class="size11 floatL"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['q']->value['hace']);?>
</div>
<div class="size11">
<span>Por: <?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['q']->value['visitas'];?>
 Visitas </span>
</div>
</div>
</div>
</div>
</div>
<?php }?>
<?php } ?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==4) {?>
<?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['q']->value['j_title']) {?><?php } else { ?>
<div class="result">
<div class="hoverhackd">
<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/juegos/<?php echo $_smarty_tpl->tpl_vars['q']->value['juego_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['q']->value['j_title']);?>
.html"><img src="<?php echo $_smarty_tpl->tpl_vars['q']->value['j_imagen'];?>
"></a>
<div style="float: left;margin: -1px 0px 0px 6px;">
<a target="_blank" id="q" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/juegos/<?php echo $_smarty_tpl->tpl_vars['q']->value['juego_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['q']->value['j_title']);?>
.html"><?php echo $_smarty_tpl->tpl_vars['q']->value['j_title'];?>
</a>
<div class="size11 floatL"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['q']->value['j_date']);?>
</div>
<div class="size11">
<span>Por: <b class="wortip" uid="<?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
</b></span> - <span><?php echo $_smarty_tpl->tpl_vars['q']->value['cat_title'];?>
</span>
</div>
</div>
</div>
</div>
<?php }?>
<?php } ?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==5) {?>
<?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['q']->value['usuario_nombre']) {?><?php } else { ?>
<div class="post_1" id="rowsefwewrw_2" style="margin: 11px 0px !important; color: #94;width: 600px;text-align: -webkit-left;">
<div class="conhispph">
<div class="hostorycs">
<div id="hostoryub">
<div class="headpubhostory" style="width: 93.3% !important;">
<a href="#" onclick="" style="float: left;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/pages/scripts/thum.php?src=<?php echo $_smarty_tpl->tpl_vars['q']->value['w_avatar'];?>
&h=50&w=50" id="headpubavat"></a>
<div class="headconwname">
<a onclick="boxmuro2()" id="q" class="wortip" uid="1"><?php if ($_smarty_tpl->tpl_vars['q']->value['name_original']==null||$_smarty_tpl->tpl_vars['q']->value['p_original']) {?><?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['q']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['q']->value['ap_original'];?>
<?php }?></a>
<div style="font-size: 11px; width: 98%; overflow: hidden; font-weight: 100;">Compartio un estado.  </div>
<div style="font-weight: normal;font-size: 11px;color: #686767;"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['q']->value['hace']);?>
</div>
</div>
</div>

<div class="contbodypubna">
<div id="contyoubodyhe" style="width: 94% !important;">
<span id="q"><?php echo $_smarty_tpl->tpl_vars['q']->value['texts'];?>
</span> <div style="margin-top: 10px;margin-bottom: 10px;text-align: -webkit-center;max-width: 100%;overflow: hidden;max-height: 370px;">
</div>
</div>

<div id="likNEknsa">
<div id="dfNELFkqeflsdf">
<div id="AnasALKANoMenctplus94"><i class="like"></i> <span><?php echo $_smarty_tpl->tpl_vars['q']->value['me_gusta'];?>
</span></div><div id="NanadknaMenctplus94"><i class="dislike"></i> <span><?php echo $_smarty_tpl->tpl_vars['q']->value['no_megusta'];?>
</span></div>
</div>
<div id="asdfnWEFNQlq">
<?php if ($_smarty_tpl->tpl_vars['q']->value['u_megusta']>=1) {?>
<div id="AnasALKANoMenct94">
<span style="display:none;" id="loadingbw_<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort(<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
, 'false','pos');" style="color: #07F; font-weight: bold;">+Me gusta</a></div>
<?php } else { ?>
<div id="AnasALKANoMenct94">
<span style="display:none;" id="loadingbw_<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort(<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
, 'true','pos');">+Me gusta</a></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['q']->value['u_nomegusta']>=1) {?>
<div id="NanadknaMenct94">
<span style="display:none;" id="loadingbw_<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort(<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
, 'false','neg')" style="color: #07F; font-weight: bold;">+No me gusta</a></div>
<?php } else { ?>
<div id="NanadknaMenct94">
<span style="display:none;" id="loadingbw_<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort(<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
, 'true','neg')">+No me gusta</a></div>
<?php }?>
<div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['q']->value['usuario_nombre'];?>
/<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
/" class="qtip" title="Ver Bwort">Ver Bwort</a></div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
<?php }?>
<?php } ?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==6) {?>
Esto es global
<?php } else { ?>
<div class="zerores"><span>Selecciona una opcion de busqueda...</span></div>
<?php }?>
<?php } else { ?>
<div class="zerores">No se encontraron resultados para <b><?php echo $_smarty_tpl->tpl_vars['q']->value;?>
</b>, Prueba con otras palabras.</div>
<?php }?>
<?php } else { ?>
<div class="zerores"><span>Escribe las palabras clave de tu busqueda...</span></div>
<?php }?>

</div>
</div>
<div class="pags"><?php echo $_smarty_tpl->tpl_vars['result']->value['pages'];?>
</div>
</div>
<div class="search_i_r floatL iconbg"><h2 class="title">gadgets</h2></div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
