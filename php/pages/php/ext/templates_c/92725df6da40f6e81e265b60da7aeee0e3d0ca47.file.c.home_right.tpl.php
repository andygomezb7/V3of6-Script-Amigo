<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:35
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.home_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16535016255875a717d255a6-78158638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92725df6da40f6e81e265b60da7aeee0e3d0ca47' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.home_right.tpl',
      1 => 1408392030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16535016255875a717d255a6-78158638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsPopulares' => 0,
    'i' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a717d72e22_01025199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a717d72e22_01025199')) {function content_5875a717d72e22_01025199($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><div class="com_home_right" style="display:block;width: 258px;margin-left: 5px;float: left;margin-top: 6px;">
    <div class="com_new_box">
        <div class="com_box_title clearfix"><h2>Crea tu foro</h2></div>
        <div style="margin: 5px 18px 0px 16px;">
        <div class="com_bigmsj_blue"><b><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</b> te permite crear tu propio foro para que puedas compartir gustos e intereses con los demás.</div>
        <center><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/foro/crear/" class="input_button">¡Crea el tuyo!</a></center>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['tsPopulares']->value['semana']) {?>
    <div class="com_box_info" style="margin-top: 20px;">
        <div class="cbi_title">Foros destacada</div>
        <div class="cbi_body clearfix">
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsPopulares']->value['semana']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
            <div class="com_destacada">
            	<div class="cd_left floatL">
                <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre_corto'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/files/uploads/c_<?php echo $_smarty_tpl->tpl_vars['c']->value['c_id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre'];?>
" width="120" height="120" /></a>                
            	</div>
                <div class="cd_right floatL">
                	<h2><?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre'];?>
</h2>
                	<ul>
                    	<li>Creada <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['c']->value['c_fecha']);?>
</li>
                        <li><strong>Miembros: </strong><?php echo $_smarty_tpl->tpl_vars['c']->value['c_miembros'];?>
</li>
                        <li><strong>Temas: </strong><?php echo $_smarty_tpl->tpl_vars['c']->value['c_temas'];?>
</li>
                        <a class="input_button" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre_corto'];?>
/">Ver foro</a>                      
                    </ul>
                </div>
            </div>
            <?php }?>
        	<?php } ?>
    	</div>
    </div>
    <?php }?>
    
</div><?php }} ?>
