<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 21:03:30
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.tema_cuerpo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158825457e3265b8d82-37371336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '075c84dabfcd52ca193c5a927223fca738a31d12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.tema_cuerpo.tpl',
      1 => 1410918802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158825457e3265b8d82-37371336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e3268583b4_55354930',
  'variables' => 
  array (
    'tsTema' => 0,
    'tsConfig' => 0,
    'tsCom' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e3268583b4_55354930')) {function content_5457e3268583b4_55354930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="com_tema_cuerpo clearfix" style="padding: 11px 1px 1px 7px;">
    <div class="ctc_share clearfix">
        <span class="ctc_date floatL vctip" title="<?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_fecha_all'];?>
"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsTema']->value['t_fecha']);?>
</span>
    </div>
    <h1 class="ctc_h1" style="padding: 5px 0px 3px 0px;margin-top: 0px;font: 300 25px 'Droid Sans', sans-serif;border-bottom: 1px dashed #CCCCCC;"><?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_titulo'];?>
</h1>
    <div><?php echo $_smarty_tpl->getSubTemplate ('modulos/m.popup_users.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
    <div class="ctc_body" style="padding: 18px 0px 0px 0px;"><?php echo $_smarty_tpl->tpl_vars['tsTema']->value['ct_cuerpo'];?>
</div>
</div>
<div class="com_tema_share clearfix">
<div class="floatL"><a style="float:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/com/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_imagen'];?>
.jpg" style="width: 52px;height: 52px;margin: 2px 4px 0px 3px;"></a>
<div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/" title="Ir a la comunidad"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
</a><br>
<span style="font-style: italic;"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_descripcion'];?>
</span>
</div></div>
<div class="floatR" style="margin: 12px 10px 0px 2px;">
                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
                <a href="javascript:com.abandonar();" class="action_comunidad input_button" style="padding:10px 11px;<?php if (!$_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']) {?>display:none;<?php }?>">Abandonar</a>
                <a href="#" class="input_button" id="follow_com" <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['es_seguidor']) {?>style="display:none"<?php }?> onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Seguir</a>
                <a href="#" class="input_button ibg" id="unfollow_com" style="<?php if (!$_smarty_tpl->tpl_vars['tsCom']->value['es_seguidor']) {?>display:none<?php }?>" onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Siguiendo</a>
                <a href="#" class="input_button ibr" id="unfollow_comr" style="padding:10px 11px;display:none" onclick="com.seguir_com();return false;">Dejar de seguir</a>
                <?php }?>
</div>
</div>
<div class="com_tema_options clearfix">
	<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_autor']!=$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
	<a href="javascript:com.votar_tema('pos');" class="input_button <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>"><i class="com_icon icon_like <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?> require-login<?php }?>"></i> Me gusta</a>
    <a href="javascript:com.votar_tema('neg');" class="input_button"><i class="com_icon icon_dislike <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?> require-login<?php }?>"></i></a>
    <a href="javascript:com.seguir_tema();" class="input_button <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>" id="follow_tema" <?php if ($_smarty_tpl->tpl_vars['tsTema']->value['es_seguidor']) {?>style="display:none"<?php }?>><i class="com_icon icon_eye"></i>Seguir</a>
    <a href="javascript:com.seguir_tema();" class="input_button ibg <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>" id="unfollow_tema" style="<?php if (!$_smarty_tpl->tpl_vars['tsTema']->value['es_seguidor']) {?>display:none<?php }?>"><i class="com_icon icon_eye"></i>Siguiendo</a>
    <a href="javascript:com.seguir_tema();" class="input_button ibr <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>" id="unfollow_temar" style="display:none;padding: 7px 10px;">Dejar de seguir</a>
    <a href="javascript:com.add_favorito();" class="input_button add_favorito <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>" <?php if ($_smarty_tpl->tpl_vars['tsTema']->value['mi_fav']) {?>style="display:none;"<?php }?> title="A&ntilde;adir a mis favoritos"><i class="com_icon icon_favs"></i></a>
    <a href="javascript:void(0);" class="input_button ibg add_favorito <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['tsTema']->value['mi_fav']) {?>style="display:none;"<?php }?> title="Lo tienes en tus favoritos"><i class="com_icon icon_favs"></i></a>
    <?php }?>
    <?php } else { ?>
    <a onclick="registro_load_form(); return false" class="input_button <?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>require-login<?php }?>"><i class="com_icon icon_like"></i> Me gusta</a>
    <?php }?>
    <ul class="cts_stats clearfix floatR">
    	<li>
        	<span id="favs_total"><?php echo number_format($_smarty_tpl->tpl_vars['tsTema']->value['t_favoritos'],0,',','.');?>
</span><i class="com_icon icon_favs"></i>
            <div>Favoritos</div>
        </li>
        <li>
        	<span><?php echo number_format($_smarty_tpl->tpl_vars['tsTema']->value['t_visitas'],0,',','.');?>
</span><i class="com_icon icon_visitas"></i>
            <div>Visitas</div>
        </li>
        <li>
        	<span id="segs_total"><?php echo number_format($_smarty_tpl->tpl_vars['tsTema']->value['t_seguidores'],0,',','.');?>
</span><i class="com_icon icon_eye"></i>
            <div>Seguidores</div>
        </li>
        <li>
        	<span id="votos_total" style="color:<?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_votos_pos']-$_smarty_tpl->tpl_vars['tsTema']->value['t_votos_neg']>0) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['tsTema']->value['t_votos_pos']-$_smarty_tpl->tpl_vars['tsTema']->value['t_votos_neg']<0) {?>red<?php } else { ?>#222<?php }?>"><?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_votos_pos']-number_format($_smarty_tpl->tpl_vars['tsTema']->value['t_votos_neg'],0,',','.');?>
</span><i class="com_icon icon_like"></i>
            <div>Calificaci&oacute;n</div>
        </li>
    </ul>
</div>
<?php }} ?>
