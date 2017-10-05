<?php /* Smarty version Smarty-3.1.19, created on 2017-01-25 17:35:30
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.com_historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145954674588936429451e5-85964194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd25e54ab45220b71dd826b2677f83606c5b8ac4' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.com_historial.tpl',
      1 => 1395713092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145954674588936429451e5-85964194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsModHistory' => 0,
    'h' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58893642a688f6_10497855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58893642a688f6_10497855')) {function content_58893642a688f6_10497855($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seo')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.seo.php';
?><div class="com_left">
<div class="com_box_title clearfix"><h2>Historial de moderaci&oacute;n</h2></div>
<div class="com_box_body">
    <table cellpadding="0" cellspacing="0" border="0" align="center" class="com_history">
        <thead>
            <tr>
                <th align="left">Tema</th>
                <th align="center">Acci&oacute;n</th>
                <th align="center">Moderador</th>
                <th align="left">Causa</th>
            </tr>
        </thead>
        <tbody>
			<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsModHistory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
            <tr>
            	<td align="left">
                    <?php if ($_smarty_tpl->tpl_vars['h']->value['h_type']!=2) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['h']->value['c_nombre_corto'];?>
/<?php echo $_smarty_tpl->tpl_vars['h']->value['t_id'];?>
/<?php echo smarty_modifier_seo($_smarty_tpl->tpl_vars['h']->value['t_titulo']);?>
.html"><?php echo $_smarty_tpl->tpl_vars['h']->value['t_titulo'];?>
</a>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['h']->value['t_titulo'];?>

                    <?php }?>
                </td>
                <td align="center"><?php if ($_smarty_tpl->tpl_vars['h']->value['h_type']==1) {?>Tema Editado<?php } elseif ($_smarty_tpl->tpl_vars['h']->value['h_type']==2) {?><font color="red">Tema Eliminado</font><?php } elseif ($_smarty_tpl->tpl_vars['h']->value['h_type']==3) {?><font color="green">Tema Reactivado</font><?php }?></td>
                <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['h']->value['usuario_nombre'];?>
/" class="hovercard" uid="<?php echo $_smarty_tpl->tpl_vars['h']->value['usuario_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['h']->value['user_name'];?>
</a></td>
                <td align="left"><?php echo $_smarty_tpl->tpl_vars['h']->value['h_razon'];?>
</td>
            </tr>
            <?php } ?>
		</tbody>
    </table>    
</div>
</div><?php }} ?>
