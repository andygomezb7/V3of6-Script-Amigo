<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 17:36:49
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.com_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277755457e97ae4e1c2-00782151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132e13f67ca9bbeb2a7d91d11ad33dc7cf441d97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.com_right.tpl',
      1 => 1400120428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277755457e97ae4e1c2-00782151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e97b319756_20165224',
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsCom' => 0,
    'tsStaff' => 0,
    'a' => 0,
    'tsRespuestas' => 0,
    'r' => 0,
    'tsMiembros' => 0,
    'tsTop' => 0,
    't' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e97b319756_20165224')) {function content_5457e97b319756_20165224($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.seo.php';
if (!is_callable('smarty_modifier_limit')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.limit.php';
?><div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Buscar en el foro</h2></div>
    <div class="clearfix">
        <form action="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/buscar/">
            <input type="text" class="input_text floatL" name="q" style="width: 202px;margin-right: 3px;" /><input type="submit" value="Buscar" class="input_button ibg" />
            <input type="hidden" name="tipo" value="temas" />
			<input type="hidden" name="comid" value="<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_id'];?>
" />
        </form>
    </div>
</div>

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Staff de el foro</h2></div>
    <div class="clearfix">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsStaff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['w_avatar'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['a']->value['m_user'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" class="floatL wortip com_staff_avatar <?php if ($_smarty_tpl->tpl_vars['a']->value['m_permisos']==5) {?>admin<?php }?>">
            <img src="<?php if ($_smarty_tpl->tpl_vars['a']->value['w_avatar']==null) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/avatar/group.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['a']->value['w_avatar'];?>
<?php }?>" width="55" height="55" />
            <span class="csa_status <?php if ($_smarty_tpl->tpl_vars['a']->value['is_on']) {?>online<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['a']->value['is_on']) {?>Online<?php } else { ?>Offline<?php }?>"></span>
        </a>    
        <?php } ?>
    </div>
</div>

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Comentarios recientes</h2></div>
    <div class="com_box_body clearfix">
    	<?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsRespuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
        <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['r']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"<?php }?>><a class="cle_autor" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['r']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['user_name'];?>
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

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>&Uacute;ltimos miembros</h2><div style="float:right;"><a style="color: #FFFFFF;" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/miembros/">Ver m&aacute;s &raquo;</a></div></div>
    <div class="clearfix">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsMiembros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
" class="floatL wortip" uid="<?php echo $_smarty_tpl->tpl_vars['a']->value['m_user'];?>
" style="margin-right:1px;margin-bottom:1px;"><img src="<?php if ($_smarty_tpl->tpl_vars['a']->value['w_avatar']==null) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/avatar/group.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['a']->value['w_avatar'];?>
<?php }?>" width="35" height="35" /></a>
        <?php } ?>
    </div>
</div>

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix">
        <h2>Top temas</h2>
        <div class="cbt_right cbt_list"><span id="com_change_hover">Semana</span>
            <ul id="com_change_list">
                <li class="pop_list_semana active"><a href="javascript:com.pop_list_change('Semana');">Semana</a></li>
                <li class="pop_list_mes"><a href="javascript:com.pop_list_change('Mes');">Mes</a></li>
                <li class="pop_list_historico"><a href="javascript:com.pop_list_change('Historico');">Hist&oacute;rico</a></li>
            </ul>
        </div>
    </div>
    <div class="com_box_body clearfix">
        <div id="com_change_pop">
            <div id="ccp_semana" style="display: block;">
            	<?php if ($_smarty_tpl->tpl_vars['tsTop']->value['semana']) {?>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsTop']->value['semana']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['t']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"<?php }?>>
                    <span class="cle_item"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['t']->value['t_titulo'],30);?>
</a>
                    <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['t']->value['t_votos_pos'];?>
</span>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                <?php }?>
            </div>
            <div id="ccp_mes" style="display: none;">
            	<?php if ($_smarty_tpl->tpl_vars['tsTop']->value['mes']) {?>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsTop']->value['mes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['t']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"<?php }?>>
                    <span class="cle_item"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['t']->value['t_titulo'],30);?>
</a>
                    <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['t']->value['t_votos_pos'];?>
</span>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                <?php }?>
            </div>                
            <div id="ccp_historico" style="display: none;">
            	<?php if ($_smarty_tpl->tpl_vars['tsTop']->value['historico']) {?>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsTop']->value['historico']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['t']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"<?php }?>>
                    <span class="cle_item"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['t']->value['t_titulo'],30);?>
</a>
                    <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['t']->value['t_votos_pos'];?>
</span>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
    
<small><i class="com_icon icon_denuncia" style="vertical-align:top;margin-right:1px;opacity: 0.5;"></i><a href="#" onclick="denuncia.nueva('comunidad',<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
', ''); return false;">Denunciar el foro</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/mod-history/">Historial</a></small><?php }} ?>
