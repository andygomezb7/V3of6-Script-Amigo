<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:43
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.com_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521873925875a71f19fe54-85212558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ec1ae3f63c0da32709802ab514e4669f214a47' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.com_info.tpl',
      1 => 1394939496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521873925875a71f19fe54-85212558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsCom' => 0,
    'tsTema' => 0,
    'u' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a71f3a4d86_81219730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a71f3a4d86_81219730')) {function content_5875a71f3a4d86_81219730($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><div class="com_loc_global">
	<ul class="clearfix">
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/">Foros</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/home/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['c_seo'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['c_nombre'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_id']>0) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
</a></li>
        <li><?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_titulo'];?>
</li>
        <?php } else { ?>
        <li><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
</li>
        <?php }?>
    </ul>
</div>
<?php if ($_smarty_tpl->tpl_vars['tsCom']->value['c_estado']==1) {?><div class="com_bigmsj_red">El foro est&aacute; suspendido, para eliminarla permanentemente ve a la administraci&oacute;n</div><?php }?>
<div class="ver_com_info" style="display: none;">
	<div class="vci_left floatL">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/" title="Ir a la comunidad"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/com/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_imagen'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
" width="32" height="32" /></a>
    </div>
    <div class="vci_right floatL">
    	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/" title="Ir a la comunidad"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
</a></h1>
    </div>
    <a href="#" onclick="$('.ver_com_info').toggle();return false;"><i class="com_icon icon_expand"></i></a>
    <div class="clearfix"></div>	
</div>
<div class="ver_com_info">
<div id="ttielconinf">    	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/" title="Ir a la comunidad"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
</a></h1>
</div>
<div id="vci_contentove">
	<div class="vci_left floatL">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/" title="Ir a la comunidad"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/files/uploads/c_<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
" style="width: 96%;height: 96%;" /></a>
    </div>
    <div class="vci_right floatL">
        <div class="vci_desc"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_descripcion'];?>
</div>
        <a href="#" onclick="com.ver_mas();return false;" id="view_more">Ver m&aacute;s -che</a>
        <div class="vci_detalles" id="show_more">
        	<ul>
        		<li><strong>Categor&iacute;a:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/home/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['c_seo'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['c_nombre'];?>
</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['s_nombre'];?>
</li>
                <li><strong>Creado:</strong> por <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['user_name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['user_name'];?>
</a> <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsCom']->value['c_fecha']);?>
</li>
                <li><strong>Tipo:</strong> <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['c_acceso']==1) {?>Todos pueden ver la comunidad<?php } else { ?>S&oacute;lo usuarios registrados pueden ver la comunidad.<?php }?></li>
                <li><strong>Tipo de validaci&oacute;n:</strong> Los nuevos miembros son aceptados automaticamente<br />
				Con el rango <strong><?php if ($_smarty_tpl->tpl_vars['tsCom']->value['c_permisos']==1) {?>Visitante<?php } elseif ($_smarty_tpl->tpl_vars['tsCom']->value['c_permisos']==2) {?>Comentador<?php } else { ?>Posteador<?php }?></strong></li>
           </ul>
        </div>
    </div>
	</div>
	
	        <div class="clearfix vci_bottom">
        	<div class="floatL">
            	<?php if ($_smarty_tpl->tpl_vars['tsCom']->value['c_autor']==$_smarty_tpl->tpl_vars['u']->value['usuario_id']||$_smarty_tpl->tpl_vars['u']->value['rango']==1||$_smarty_tpl->tpl_vars['u']->value['rango']==3) {?><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/editar/" class="input_button"><i class="com_icon icon_editar"></i>Editar</a><?php }?>
                <a href="javascript:<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>com.unirme()<?php } else { ?>registro_load_form()<?php }?>;" class="action_comunidad input_button" style="padding:10px 11px;<?php if ($_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']) {?>display:none;<?php }?>">Unirme</a>
                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
                <a href="javascript:com.abandonar();" class="action_comunidad input_button" style="padding:10px 11px;<?php if (!$_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']) {?>display:none;<?php }?>">Abandonar</a>
                <a href="#" class="input_button" id="follow_com" <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['es_seguidor']) {?>style="display:none"<?php }?> onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Seguir</a>
                <a href="#" class="input_button ibg" id="unfollow_com" style="<?php if (!$_smarty_tpl->tpl_vars['tsCom']->value['es_seguidor']) {?>display:none<?php }?>" onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Siguiendo</a>
                <a href="#" class="input_button ibr" id="unfollow_comr" style="padding:10px 11px;display:none" onclick="com.seguir_com();return false;">Dejar de seguir</a>
                <?php }?>
            </div>
            <ul class="clearfix vci_stats floatR">
            	<li><span><?php echo number_format($_smarty_tpl->tpl_vars['tsCom']->value['c_miembros'],0,',','.');?>
</span>Miembros</li>
                <li><span><?php echo number_format($_smarty_tpl->tpl_vars['tsCom']->value['c_temas'],0,',','.');?>
</span>Temas</li>
                <li style="border-right:none;padding-right:0;"><span id="com_seguidores_total"><?php echo number_format($_smarty_tpl->tpl_vars['tsCom']->value['c_seguidores'],0,',','.');?>
</span>Seguidores</li>
            </ul>
        </div>
	
    <a href="#" onclick="$('.ver_com_info').toggle();return false;"><i class="com_icon icon_less"></i></a>
    <div class="clearfix"></div>
</div><?php }} ?>
