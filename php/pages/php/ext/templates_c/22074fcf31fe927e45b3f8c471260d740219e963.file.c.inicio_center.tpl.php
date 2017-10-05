<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 21:03:20
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.inicio_center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1320545447dcec82e8-24738461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22074fcf31fe927e45b3f8c471260d740219e963' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.inicio_center.tpl',
      1 => 1408395624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320545447dcec82e8-24738461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545447dd40d998_53661747',
  'variables' => 
  array (
    'tsStats' => 0,
    'tsRespuestas' => 0,
    'r' => 0,
    'tsConfig' => 0,
    'tsPopulares' => 0,
    'c' => 0,
    'i' => 0,
    'tsRecientes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545447dd40d998_53661747')) {function content_545447dd40d998_53661747($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.seo.php';
if (!is_callable('smarty_modifier_limit')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.limit.php';
?><div class="com_home_center" style="width: 310px;margin-left: 5px;margin-top: 6px;float: left;">
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix"><h2>Estad&iacute;sticas</h2></div>
        <div style="margin: 5px 18px 0px 16px;">
            <div class="clearfix">
               <div class="floatL"><strong id="stat-onl"><?php echo number_format($_smarty_tpl->tpl_vars['tsStats']->value['stats_online'],0,',','.');?>
</strong>  usuarios online</div>
               <div class="floatR"><strong id="stat-comu"><?php echo number_format($_smarty_tpl->tpl_vars['tsStats']->value['stats_comunidades'],0,',','.');?>
</strong>  Foros</div>
            </div>
            <div class="clearfix">
                <div class="floatL"><strong id="stat-tem"><?php echo number_format($_smarty_tpl->tpl_vars['tsStats']->value['stats_temas'],0,',','.');?>
</strong>  temas</div>
                <div class="floatR"><strong id="stat-com"><?php echo number_format($_smarty_tpl->tpl_vars['tsStats']->value['stats_respuestas'],0,',','.');?>
</strong>  respuestas</div>
            </div>
        </div>
    </div>
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix"><h2>Comentarios recientes</h2></div>
        <div class="com_box_body">
        	<?php if ($_smarty_tpl->tpl_vars['tsRespuestas']->value) {?>
        	<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsRespuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['r']->value['t_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"<?php }?>>
            <a class="cle_autor" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario_nombre'];?>
</a><a class="cle_title" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['r']->value['c_nombre_corto'];?>
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
        <div class="com_box_title clearfix">
            <h2>Populares</h2>
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
                	<?php if ($_smarty_tpl->tpl_vars['tsPopulares']->value['semana']) {?>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPopulares']->value['semana']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['c']->value['c_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"<?php }?>>
                        <span class="cle_item"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre_corto'];?>
/"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['c']->value['c_nombre'],30);?>
</a>
                        <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['c']->value['c_miembros'];?>
</span>
                    </div>
                    <?php } ?>
                    <?php } else { ?>
                    <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                    <?php }?>
                </div>
                <div id="ccp_mes" style="display: none;">
                	<?php if ($_smarty_tpl->tpl_vars['tsPopulares']->value['mes']) {?>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPopulares']->value['mes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['c']->value['c_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"<?php }?>>
                        <span class="cle_item"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre_corto'];?>
/"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['c']->value['c_nombre'],30);?>
</a>
                        <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['c']->value['c_miembros'];?>
</span>
                    </div>
                    <?php } ?>
                    <?php } else { ?>
                    <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                    <?php }?>
                </div>                
                <div id="ccp_historico" style="display: none;">
                	<?php if ($_smarty_tpl->tpl_vars['tsPopulares']->value['historico']) {?>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPopulares']->value['historico']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <div class="com_list_element" <?php if ($_smarty_tpl->tpl_vars['c']->value['c_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"<?php }?>>
                        <span class="cle_item"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre_corto'];?>
/"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['c']->value['c_nombre'],30);?>
</a>
                        <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['c']->value['c_miembros'];?>
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
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix"><h2>Foros recientes</h2></div>
        <div class="com_box_body clearfix">
        	<?php if ($_smarty_tpl->tpl_vars['tsRecientes']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsRecientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
            <div class="com_list_element"  <?php if ($_smarty_tpl->tpl_vars['c']->value['c_estado']==1) {?>style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre_corto'];?>
/" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre'];?>
</a></div>
            <?php } ?>
            <?php } else { ?>
            <div class="com_bigmsj_blue">No se han creado foros a&uacute;n</div>
            <?php }?>
        </div>
        <div align="center" style="margin-top: 20px;">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/crear/" class="input_button">&iquest;Qu&eacute; esperas para crear el tuyo?</a>
        </div>
    </div>
</div><?php }} ?>
