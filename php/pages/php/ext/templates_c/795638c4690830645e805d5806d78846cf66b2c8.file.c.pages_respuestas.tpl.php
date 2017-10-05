<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 21:03:30
         compiled from "C:\xampp\htdocs\w\themes\default\t.comus_ajax\c.pages_respuestas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237935457e326b71b06-43272067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '795638c4690830645e805d5806d78846cf66b2c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\t.comus_ajax\\c.pages_respuestas.tpl',
      1 => 1415047512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237935457e326b71b06-43272067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e3271e8486_93126240',
  'variables' => 
  array (
    'tsRespuestas' => 0,
    'tsTema' => 0,
    'r' => 0,
    '_SESSION' => 0,
    'tsCom' => 0,
    'tsConfig' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e3271e8486_93126240')) {function content_5457e3271e8486_93126240($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
if (!is_callable('smarty_modifier_BBcode')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.BBcode.php';
?><?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']>1) {?>
<div class="com_pagination">
    <?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['prev']) {?><a class="cp_prev" href="javascript:com.pages_respuestas(<?php echo $_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['prev'];?>
);"></a><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['section']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = (int) $_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages'];
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
    <a <?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['current']==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']) {?>class="here"<?php }?> href="javascript:com.pages_respuestas(<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
);"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
</a>
    <?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['current']) {?><a class="cp_next" onclick="com.pages_respuestas(<?php echo $_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['next'];?>
);"></a><?php }?>
</div>
<?php }?>

<div class="ctc_coment_list">
    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsTema']->value['askdlwe']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
    <div class="com_coment_resp clearfix" id="coment_id_<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
        <ul class="ccr_options clearfix">
            <?php if ($_smarty_tpl->tpl_vars['r']->value['r_autor']!=$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
            <li><a onclick="com.votar_respuesta(<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
, 'pos');return false;" class="qtip" title="Me gusta"><i class="com_icon icon_like i_like"></i></a></li>
            <li><a onclick="com.votar_respuesta(<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
, 'neg');return false;" class="qtip" title="No me gusta"><i class="com_icon icon_dislike i_dislike"></i></a></li>
            <!---- com.citar_com(<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
'); ----><li><a onclick="com.resp(<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
);return false;" class="qtip" title="Responder"><i class="com_icon icon_reply"></i></a></li>
            <li><a onclick="bloquear(<?php echo $_smarty_tpl->tpl_vars['r']->value['r_autor'];?>
, true, 'comentarios')" class="qtip" title="Bloquear"><i class="com_icon icon_bloquear"></i></a></li>
            <?php }?>       
            <?php if ($_smarty_tpl->tpl_vars['r']->value['r_autor']==$_smarty_tpl->tpl_vars['_SESSION']->value||$_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']>=4) {?>
            <li><a onclick="com.del_respuesta(<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
);return false;" class="qtip" title="Borrar comentario"><i class="com_icon icon_del"></i></a></li>
            <?php }?>
        </ul>
        <?php }?>
        <div class="ctcf_avatar">
            <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
">
                <img style="width: 50px; height: 50px;" src="<?php echo $_smarty_tpl->tpl_vars['r']->value['w_avatar'];?>
" />
            </a>
        </div>
        <div class="ctcf_detalles">
            <div class="ctcf_info">
                @<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['u']->value['rango']==3||$_smarty_tpl->tpl_vars['u']->value['rango']==1) {?><span>IP <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/moderacion/buscador/1/1/<?php echo $_smarty_tpl->tpl_vars['r']->value['r_ip'];?>
" class="geoip" target="_blank"><?php echo $_smarty_tpl->tpl_vars['r']->value['r_ip'];?>
</a></span><?php }?>
                <span><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['r']->value['r_fecha']);?>
</span><span id="total_votos_<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['r_votos_pos']-$_smarty_tpl->tpl_vars['r']->value['r_votos_neg']!=0) {?>class="qtip" title="+<?php echo $_smarty_tpl->tpl_vars['r']->value['r_votos_pos'];?>
 / -<?php echo $_smarty_tpl->tpl_vars['r']->value['r_votos_neg'];?>
"<?php }?> style="font-weight: bold;font-size: 12px;color: <?php if ($_smarty_tpl->tpl_vars['r']->value['r_votos_pos']-$_smarty_tpl->tpl_vars['r']->value['r_votos_neg']<0) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['r_votos_pos']-$_smarty_tpl->tpl_vars['r']->value['r_votos_neg']>0) {?>green<?php } else { ?>#999<?php }?>;"><?php if ($_smarty_tpl->tpl_vars['r']->value['r_votos_pos']-$_smarty_tpl->tpl_vars['r']->value['r_votos_neg']!=0) {?><?php if ($_smarty_tpl->tpl_vars['r']->value['r_votos_pos']-$_smarty_tpl->tpl_vars['r']->value['r_votos_neg']>0) {?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['r']->value['r_votos_pos']-$_smarty_tpl->tpl_vars['r']->value['r_votos_neg'];?>
<?php }?></span>
            </div>
            <div class="ctcf_body"><?php echo smarty_modifier_BBcode($_smarty_tpl->tpl_vars['r']->value['r_body']);?>
</div>
            <div style="display:none;" id="coment_source_<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['r_source'];?>
</div>
        </div>
    </div>
	<div class="com_bigmsj_red_<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
" style="display: none;"></div>
	<div id="<?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
" class="res_p" style="display: none;">
	    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value&&$_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']||$_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']>=3) {?>
	    <div class="ctc_form clearfix" style="margin: 0px;padding: 0px;">
    	<div class="com_bigmsj_red" style="display:none;"></div>
    	<div id="procesando"></div>
    	<div class="ctcf_avatar"><a href="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" width="48" height="48" /></a></div>
        <div class="ctcf_add_coment floatL clearfix">
        	<textarea class="input_text markItUp" style="width: 535px;border-radius: 0 0 4px 4px;border-top: 0;resize: vertical;"></textarea>
            <input type="button" class="input_button floatL" id="btn_newcom" value="Comentar" onclick="com.nuevos('true', '', <?php echo $_smarty_tpl->tpl_vars['r']->value['r_id'];?>
);" />
            
        </div>
    </div>
	    <?php } elseif (!$_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']||!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
    <div class="com_bigmsj_yellow">Tienes que ser miembro para responder este comentario.</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']<3) {?>
    <div class="com_bigmsj_yellow">Tu rango no te permite realizar respuestas en este foro.</div>
    <?php }?>
	</div>
    <?php } ?>
    <div id="add_new_com"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']>1) {?>
<div class="com_pagination">
    <?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['prev']) {?><a class="cp_prev" onclick="com.pages_respuestas(<?php echo $_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['prev'];?>
);"></a><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = (int) $_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages'];
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
    <a <?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['current']==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']) {?>class="here"<?php }?> onclick="com.pages_respuestas(<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
);"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
</a>
    <?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['current']) {?><a class="cp_next" onclick="com.pages_respuestas(<?php echo $_smarty_tpl->tpl_vars['tsRespuestas']->value['pages']['next'];?>
);"></a><?php }?>
</div>
<?php }?><?php }} ?>
