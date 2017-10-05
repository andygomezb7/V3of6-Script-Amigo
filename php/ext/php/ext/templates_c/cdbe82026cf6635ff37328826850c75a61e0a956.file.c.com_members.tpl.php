<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:55:57
         compiled from "C:\xampp\htdocs\w\themes\default\t.comus_ajax\c.com_members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12521548a3d1db34a77-43511951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdbe82026cf6635ff37328826850c75a61e0a956' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\t.comus_ajax\\c.com_members.tpl',
      1 => 1393297420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12521548a3d1db34a77-43511951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsMiembros' => 0,
    'tsConfig' => 0,
    'a' => 0,
    'tsCom' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548a3d1e94c5f4_62091685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a3d1e94c5f4_62091685')) {function content_548a3d1e94c5f4_62091685($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['tsMiembros']->value['total']>0) {?>
	<?php if ($_smarty_tpl->tpl_vars['tsMiembros']->value['type']=='miembros') {?>
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsMiembros']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        <div class="com_list_members clearfix">
            <div class="clm_avatar floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['a']->value['w_avatar'];?>
" width="75" height="75" /></a></div>
            <ul class="clm_info clearfix floatL">
                <li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
</a></h4></li>
                <li>Rango: <strong><?php if ($_smarty_tpl->tpl_vars['a']->value['m_permisos']==5) {?>Administrador<?php } elseif ($_smarty_tpl->tpl_vars['a']->value['m_permisos']==4) {?>Moderador<?php } elseif ($_smarty_tpl->tpl_vars['a']->value['m_permisos']==3) {?>Posteador<?php } elseif ($_smarty_tpl->tpl_vars['a']->value['m_permisos']==2) {?>Comentador<?php } elseif ($_smarty_tpl->tpl_vars['a']->value['m_permisos']==1) {?>Visitante<?php }?></strong></li>
                <li><a onclick="mensaje.nuevo('<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
','','',''); return false">Enviar mensaje</a></li>
                <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']==5&&$_smarty_tpl->tpl_vars['a']->value['m_user']!=$_smarty_tpl->tpl_vars['_SESSION']->value&&$_smarty_tpl->tpl_vars['a']->value['m_user']!=$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
                <li><a href="javascript:com.member_admin(<?php echo $_smarty_tpl->tpl_vars['a']->value['m_user'];?>
);">Administrar</a></li>
                <?php }?>
            </ul>
        </div>
        <?php } ?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsMiembros']->value['type']=='suspendidos') {?>
    	<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsMiembros']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
        <div class="com_list_members clearfix">
            <div class="clm_avatar floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/avatar/<?php echo $_smarty_tpl->tpl_vars['a']->value['ban_user'];?>
_120.jpg" width="75" height="75" /></a></div>
            <ul class="clm_info clearfix floatL">
                <li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
</a></h4></li>
                <li>Causa: <strong><?php echo $_smarty_tpl->tpl_vars['a']->value['ban_causa'];?>
</strong></li>
                <li>Inicio: <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['ban_fecha'],"%d/%m/%y a las %H:%M hs.");?>
</strong> Termina: <strong><?php if ($_smarty_tpl->tpl_vars['a']->value['ban_termina']==0) {?>Indefinido<?php } else { ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['ban_termina'],"%d/%m/%y a las %H:%M hs.");?>
<?php }?></strong></li>
                <li><a onclick="mensaje.nuevo('<?php echo $_smarty_tpl->tpl_vars['a']->value['usuario_nombre'];?>
','','',''); return false">Enviar mensaje</a></li>
                <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']==5) {?>
                <li><a href="javascript:com.admin_rehabilitar(<?php echo $_smarty_tpl->tpl_vars['a']->value['ban_user'];?>
);">Rehabilitar</a></li>
                <?php }?>
            </ul>
        </div>
        <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['pages']>1) {?>
    <div class="com_pagination clearfix">
        <?php if ($_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['prev']) {?><a class="cp_prev" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/miembros.<?php echo $_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['prev'];?>
/"></a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['current']) {?><a class="cp_next" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/miembros.<?php echo $_smarty_tpl->tpl_vars['tsMiembros']->value['pages']['next'];?>
/"></a><?php }?>
    </div>
    <?php }?>
<?php } else { ?>
	<div class="com_bigmsj_red"><?php echo $_smarty_tpl->tpl_vars['tsMiembros']->value;?>
</div>
<?php }?><?php }} ?>
