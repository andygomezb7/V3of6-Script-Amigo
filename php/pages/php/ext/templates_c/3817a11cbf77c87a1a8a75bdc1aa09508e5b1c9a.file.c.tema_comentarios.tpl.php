<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:47
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.tema_comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3527390975875a723331850-51337330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3817a11cbf77c87a1a8a75bdc1aa09508e5b1c9a' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.tema_comentarios.tpl',
      1 => 1415043882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3527390975875a723331850-51337330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsTema' => 0,
    '_SESSION' => 0,
    'tsCom' => 0,
    'u' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a723387431_58262768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a723387431_58262768')) {function content_5875a723387431_58262768($_smarty_tpl) {?><div class="com_tema_comentarios clearfix">
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
