<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:31:09
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\vip_i\m.estadisticas_vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14988547648c7225511-22277318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110fe953478b7a2d00290e1a08af732ed89217a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\vip_i\\m.estadisticas_vip.tpl',
      1 => 1417041062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14988547648c7225511-22277318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c72dc6c2_81904196',
  'variables' => 
  array (
    'tsEstvu_p' => 0,
    'tsConfig' => 0,
    'v' => 0,
    'tsRanvu_p' => 0,
    'r' => 0,
    'tsEstvp_p' => 0,
    'p' => 0,
    'tsComvp_p' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c72dc6c2_81904196')) {function content_547648c72dc6c2_81904196($_smarty_tpl) {?>
<div id="est-vip">
<h3>Estad&iacute;sticas Vip</h3>
<ul>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsEstvu_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li><br/><span><img style="position:absolute;margin-left:-30px;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/static/options/icons/cats/users.png"></img><b><?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
</b> Usuarios Vip</span></li>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsRanvu_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
<li><br/><span><img style="position:absolute;margin-left:-30px;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/static/options/icons/cats/Tecnologia.png"></img><b><?php echo $_smarty_tpl->tpl_vars['r']->value['total'];?>
</b> Rangos Vip</span></li>
<?php } ?><br/>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsEstvp_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
<li><br/><span><img style="position:absolute;margin-left:-30px;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/static/options/icons/cats/note.png"></img><b><?php echo $_smarty_tpl->tpl_vars['p']->value['total'];?>
</b> Notas Vip</span></li>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsComvp_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
<li><br/><span style="margin-left:60px;"><img style="position:absolute;margin-left:-30px;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/static/options/icons/cats/comments.png"></img><b><?php echo $_smarty_tpl->tpl_vars['c']->value['total'];?>
</b> Comentarios Vip</span></li>
<?php } ?>
</ul>

</div><?php }} ?>
