<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 17:36:48
         compiled from "C:\xampp\htdocs\w\themes\default\t.comus_ajax\c.pages_temas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24625457e97a94c5f5-63785695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902bec137e235566792373e11fdf9cdade68a796' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\t.comus_ajax\\c.pages_temas.tpl',
      1 => 1400120174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24625457e97a94c5f5-63785695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e97add40a2_33058315',
  'variables' => 
  array (
    'tsTemas' => 0,
    'tsConfig' => 0,
    't' => 0,
    'tsCom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e97add40a2_33058315')) {function content_5457e97add40a2_33058315($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.seo.php';
if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['sticky']||$_smarty_tpl->tpl_vars['tsTemas']->value['data']) {?>
<?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']==1) {?>
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsTemas']->value['sticky']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
<div class="com_tema_list clearfix" style="border-left: 4px solid #07f;">
    <div class="ctl_autor floatL">
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
/" title="Ver perfil de <?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['t']->value['w_avatar'];?>
" width="32" height="32" /></a>
    </div>
    <div class="ctl_info">
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
.html"><i class="com_icon icon_sticky"></i><?php echo $_smarty_tpl->tpl_vars['t']->value['t_titulo'];?>
</a>
        <span class="ctli_detalles">Por <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
/" title="Ver perfil de <?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
</a> <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['t']->value['t_fecha']);?>
</span>
        <div class="ctli_comment">
            <i class="com_icon icon_comment"></i><span><?php echo $_smarty_tpl->tpl_vars['t']->value['t_respuestas'];?>
</span>
        </div>
        <div class="ctli_like">
            <i class="com_icon icon_hand_up"></i><span><?php echo $_smarty_tpl->tpl_vars['t']->value['t_votos_pos']-$_smarty_tpl->tpl_vars['t']->value['t_votos_neg'];?>
</span>
        </div>
    </div>
</div>
<?php } ?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsTemas']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
<div class="com_tema_list clearfix" <?php if ($_smarty_tpl->tpl_vars['t']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"<?php }?>>
    <div class="ctl_autor floatL">
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
/" title="Ver perfil de <?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['t']->value['w_avatar'];?>
" width="32" height="32" /></a>
    </div>
    <div class="ctl_info">
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
.html"><?php echo $_smarty_tpl->tpl_vars['t']->value['t_titulo'];?>
</a>
        <span class="ctli_detalles">Por <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
/" title="Ver perfil de <?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
</a> <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['t']->value['t_fecha']);?>
</span>
        <div class="ctli_comment">
            <i class="com_icon icon_comment"></i><span><?php echo $_smarty_tpl->tpl_vars['t']->value['t_respuestas'];?>
</span>
        </div>
        <div class="ctli_like">
            <i class="com_icon icon_hand_up"></i><span><?php echo $_smarty_tpl->tpl_vars['t']->value['t_votos_pos']-$_smarty_tpl->tpl_vars['t']->value['t_votos_neg'];?>
</span>
        </div>
    </div>
</div>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>1) {?>
<div class="com_pagination">
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['prev']) {?><a class="cp_prev" href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['prev'];?>
);"></a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']<=9) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = (int) 9;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
    <a <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']) {?>class="here"<?php }?> href="javascript:com.pages_temas(<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
);"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
</a>
    <?php endfor; endif; ?>
    <?php } else { ?>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-4;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-4;?>
</a>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-3;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-3;?>
</a>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-2;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-2;?>
</a>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-1;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']-1;?>
</a>
    <a class="here" href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current'];?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current'];?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>=$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+1) {?>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+1;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+1;?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>=$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+2) {?>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+2;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+2;?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>=$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+3) {?>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+3;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+3;?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>=$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+4) {?>
    <a href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+1;?>
);"><?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']+4;?>
</a>
    <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsTemas']->value['pages']['current']) {?><a class="cp_next" href="javascript:com.pages_temas(<?php echo $_smarty_tpl->tpl_vars['tsTemas']->value['pages']['next'];?>
);"></a><?php }?>
</div>
<?php }?>

<?php } else { ?>
<div class="com_bigmsj_blue" style="border: 0;border-top: 2px dashed #bcd7e4;">No se han creado temas en este Foro</div>
<?php }?><?php }} ?>
