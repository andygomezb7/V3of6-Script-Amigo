<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:35
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.inicio_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20310914705875a717b536d5-33620434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17544c03740f9cd3bae24776ddaea74f2ff7ee96' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.inicio_left.tpl',
      1 => 1410898332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20310914705875a717b536d5-33620434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsAct' => 0,
    'tsCats' => 0,
    'c' => 0,
    'tsLastTemas' => 0,
    't' => 0,
    'tsConfig' => 0,
    'tsPages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a717bff056_11936040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a717bff056_11936040')) {function content_5875a717bff056_11936040($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.seo.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.truncate.php';
?><div class="com_home_left" style="width: 410px;float: left;margin-top: 6px;">
	<div class="com_box_title clearfix">
    	<h2>&Uacute;ltimos temas</h2>
        <div class="cbt_right">
            <select class="com_select_home" onchange="com.ir_a_categoria(this.value)">
            	<option value="<?php if ($_smarty_tpl->tpl_vars['tsAct']->value) {?>-1<?php }?>"><?php if ($_smarty_tpl->tpl_vars['tsAct']->value) {?>Ver todas<?php } else { ?>Seleccionar categor&iacute;a<?php }?></option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['c_seo'];?>
" <?php if ($_smarty_tpl->tpl_vars['tsAct']->value==$_smarty_tpl->tpl_vars['c']->value['c_seo']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre'];?>
</option>
                <?php } ?>
            </select>
      	</div>
	</div>
    <?php if ($_smarty_tpl->tpl_vars['tsLastTemas']->value['data']) {?>
    <div class="com_list_temas">
        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsLastTemas']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
        <div class="com_list_element clearfix" <?php if ($_smarty_tpl->tpl_vars['c']->value['c_estado']==1||$_smarty_tpl->tpl_vars['t']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="La tema ha sido eliminado"<?php }?>>
        	<div><i class="com_icon <?php echo $_smarty_tpl->tpl_vars['t']->value['sub_cat']['c_seo'];?>
" style="z-index: 20;"></i>
            <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['t']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['t']->value['t_titulo']);?>
.html"style="left: 0px;position: relative;font-weight: normal;color: #2D2E2E;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['t']->value['t_titulo'],70);?>
</a></div>
            <div class="cli_info" style="left: 1px;top: 1px;font-size: 13px;position: relative;">En <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['t']->value['c_nombre_corto'];?>
/" style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['t']->value['c_nombre'];?>
</a> Por <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
/" style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['t']->value['usuario_nombre'];?>
</a></div>
        </div>
        <?php } ?>
    </div>
    <div class="com_temas_footer">
    	<?php if ($_smarty_tpl->tpl_vars['tsPages']->value['next']<=$_smarty_tpl->tpl_vars['tsPages']->value['pages']||$_smarty_tpl->tpl_vars['tsPages']->value['prev']>0) {?>
    	<div class="com_msj_blue clearfix">
        	<?php if ($_smarty_tpl->tpl_vars['tsPages']->value['prev']>0&&$_smarty_tpl->tpl_vars['tsPages']->value['max']==false) {?><a href="pagina.<?php echo $_smarty_tpl->tpl_vars['tsPages']->value['prev'];?>
" class="floatL">&laquo; Anterior</a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tsPages']->value['next']<=$_smarty_tpl->tpl_vars['tsPages']->value['pages']) {?><a href="pagina.<?php echo $_smarty_tpl->tpl_vars['tsPages']->value['next'];?>
" class="floatR">Siguiente &raquo;</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['tsPages']->value['max']==true) {?><a href="pagina.2">Siguiente &raquo;</a><?php }?>
        </div>
        <?php }?>
    </div>
    <?php } else { ?>
    	<div class="com_bigmsj_blue" style="margin-top: 5px;">No se han creado temas <?php if ($_smarty_tpl->tpl_vars['tsAct']->value) {?>para esta categor&iacute;a<?php } else { ?>a&uacute;n<?php }?></div>
    <?php }?>
</div><?php }} ?>
