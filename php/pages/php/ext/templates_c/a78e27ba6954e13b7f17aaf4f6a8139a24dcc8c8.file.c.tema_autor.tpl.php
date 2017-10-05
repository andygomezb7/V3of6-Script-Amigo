<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 21:03:31
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.tema_autor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137955457e39ebebc28-11227840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78e27ba6954e13b7f17aaf4f6a8139a24dcc8c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.tema_autor.tpl',
      1 => 1413316740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137955457e39ebebc28-11227840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e39f0b71b2_50208567',
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsAutor' => 0,
    '_SESSION' => 0,
    'tsCom' => 0,
    'u' => 0,
    'tsTema' => 0,
    'masdecomun' => 0,
    't' => 0,
    'tsLastRespuestas' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e39f0b71b2_50208567')) {function content_5457e39f0b71b2_50208567($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.seo.php';
if (!is_callable('smarty_modifier_limit')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.limit.php';
?><div class="com_tema_autor clearfix" style="margin-bottom: 4px !important;background-color: #FFFFFF;box-shadow: 0px 2px 0px 0px #7C7C7C;">
	<div class="com_box_title clearfix">
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['usuario_nombre'];?>
</a></h2>
        <div class="cbt_right" style="background: transparent;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/static/options/icons/ranks/<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['rango']['icono'];?>
" class="vctip" title="<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['rango']['name'];?>
" />
            <img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/icons/<?php if ($_smarty_tpl->tpl_vars['tsAutor']->value['user_sexo']==0) {?>male<?php } else { ?>female<?php }?>.png" class="vctip" title="<?php if ($_smarty_tpl->tpl_vars['tsAutor']->value['user_sexo']==0) {?>Hombre<?php } else { ?>Mujer<?php }?>" />
            <img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/flags/<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['paisu']['p_img'];?>
.png" style="padding:2px" class="vctip" title="<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['paisu']['p_opcion'];?>
" />
        </div>
    </div>
    <div class="com_box_body clearfix">
    	<div class="cta_avatar floatL">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['usuario_nombre'];?>
">
                <img alt="Ver perfil de <?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['usuario_nombre'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['w_avatar'];?>
" width="120" height="120" style="margin: 0px 0px 0px 62px;"/>
            </a>
            <span title="<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['status']['t'];?>
" style="margin: 0px 0px 0px 61px;font-weight:normal;color:<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['rango']['color'];?>
;" class="cta_status <?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['status']['css'];?>
 qtip"><?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['rango']['name'];?>
</span>
        </div>
        <div class="cta_detalles floatL">
        	<ul class="ctad_items">
            	<li><i class="com_icon icon_eye"></i> <strong><?php echo number_format($_smarty_tpl->tpl_vars['tsAutor']->value['user_seguidores'],0,",",".");?>
</strong> <span>Seguidores<span></li>
                <li><i class="com_icon icon_temas"></i> <strong><?php echo number_format($_smarty_tpl->tpl_vars['tsAutor']->value['user_temas'],0,",",".");?>
</strong> <span>Temas</span></li>
                <li><i class="com_icon icon_comentarios"></i> <strong><?php echo number_format($_smarty_tpl->tpl_vars['tsAutor']->value['user_comentarios'],0,",",".");?>
</strong> <span>Comentarios</span></li>
            </ul>
        </div>
    </div>
</div>

<br class="spacer"/>
<?php if ($_smarty_tpl->tpl_vars['tsAutor']->value['usuario_id']==$_smarty_tpl->tpl_vars['_SESSION']->value||$_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']>=4||$_smarty_tpl->tpl_vars['u']->value['derechos']['r_mod1']==1) {?>
<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Opciones</h2></div>
    <div class="com_box_body clearfix">
        <center><?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_estado']==1) {?>
        	<a href="javascript:com.reactivar_tema();" class="input_button"><i class="com_icon icon_editar"></i>Reactivar</a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/editar-tema/<?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_id'];?>
/" class="input_button">Editar</a>
            <?php if ($_smarty_tpl->tpl_vars['tsAutor']->value['user_id']==$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
            <a href="javascript:com.del_tema();" class="input_button ibr">Eliminar</a>
            <?php } else { ?>
            <a href="javascript:com.del_mod_tema();" class="input_button ibr">Eliminar</a>
            <?php }?>
        <?php }?></center>
    </div>
</div>
<?php }?>

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Mas temas</h2></div>
    <div class="com_box_body clearfix">
        <?php if ($_smarty_tpl->tpl_vars['masdecomun']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['masdecomun']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
        <div class="com_list_element"><a class="cle_autor" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
</a><a class="cle_title" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['t']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
.html"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['t']->value['t_titulo'],30);?>
</a></div>
        <?php } ?>
        <?php } else { ?>
        <div class="com_bigmsj_blue">No hay Temas para mostrar</div>
        <?php }?>
    </div>
</div>

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Comentarios recientes</h2></div>
    <div class="com_box_body clearfix">
    	<?php if ($_smarty_tpl->tpl_vars['tsLastRespuestas']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsLastRespuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
        <div class="com_list_element"><a class="cle_autor" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
</a><a class="cle_title" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['r']->value['t_titulo']);?>
.html#coment_id_<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['r']->value['t_titulo'],30);?>
</a></div>
        <?php } ?>
        <?php } else { ?>
        <div class="com_bigmsj_blue">No hay comentarios recientes</div>
        <?php }?>
    </div>
</div>
  
  <div class="com_new_box" style="background-color: #FFFFFF;padding: 10px 0px 12px 0px;">
  <div class="com_box_body clearfix">
<small><i class="com_icon icon_denuncia" style="vertical-align:top;margin-right:1px;opacity: 0.5;"></i><a href="#" onclick="denuncia.nueva('tema',<?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_titulo'];?>
', '<?php echo $_smarty_tpl->tpl_vars['tsAutor']->value['user_name'];?>
'); return false;">Denunciar Tema</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/mod-history/">Historial</a></small>
  </div>
  </div><?php }} ?>
