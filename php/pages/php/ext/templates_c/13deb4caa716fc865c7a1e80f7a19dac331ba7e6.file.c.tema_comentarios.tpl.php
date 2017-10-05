<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 21:03:30
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.tema_comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32245457e326a40833-48748508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13deb4caa716fc865c7a1e80f7a19dac331ba7e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.tema_comentarios.tpl',
      1 => 1415047482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32245457e326a40833-48748508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e326b34a77_00909423',
  'variables' => 
  array (
    'tsTema' => 0,
    '_SESSION' => 0,
    'tsCom' => 0,
    'u' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e326b34a77_00909423')) {function content_5457e326b34a77_00909423($_smarty_tpl) {?><div class="com_tema_comentarios clearfix">
	<div class="com_box_title clearfix"><h2><span id="cbt_val"><?php echo number_format($_smarty_tpl->tpl_vars['tsTema']->value['t_respuestas'],0,',','.');?>
</span> comentarios</h2></div>
    <?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_cerrado']==0&&!$_smarty_tpl->tpl_vars['tsTema']->value['askdlwe']) {?><div class="com_bigmsj_blue">No hay comentarios. ¡S&eacute; el primero!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_cerrado']==1&&$_smarty_tpl->tpl_vars['_SESSION']->value!=$_smarty_tpl->tpl_vars['tsTema']->value['t_autor']) {?><div class="com_bigmsj_yellow">El tema est&aacute; cerrado y no se permiten comentarios</div><?php }?>
    
    <div id="result_answers"><?php echo $_smarty_tpl->getSubTemplate ('t.comus_ajax/c.pages_respuestas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div> 
    
    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value&&$_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']||$_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']>=3) {?>
    <div class="ctc_form clearfix">
    	<div class="com_bigmsj_red" style="display:none;"></div>
    	<div id="procesando"></div>
    	<div class="ctcf_avatar"><a href="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" width="48" height="48" /></a></div>
        <div class="ctcf_add_coment floatL clearfix" style="width: 633px;">
        	<textarea class="markItUp" style="width: 535px;border-radius: 0 0 4px 4px;border-top: 0;resize: vertical;"></textarea>
            <input type="button" class="input_button floatL" id="btn_newcom" value="Comentar" onclick="com.add_respuesta(<?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_id'];?>
);" />
            
        </div>
    </div>
    <?php } elseif (!$_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']||!$_smarty_tpl->tpl_vars['_SESSION']->value) {?>
    <div class="com_bigmsj_yellow">Tienes que ser miembro para responder en este tema</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']<3) {?>
    <div class="com_bigmsj_yellow">Tu rango no te permite realizar comentarios en este foro</div>
    <?php }?>
<div class="::style:role" role="sttr">
<div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/markItUp.css"></div>
</div>
</div>
<?php }} ?>
