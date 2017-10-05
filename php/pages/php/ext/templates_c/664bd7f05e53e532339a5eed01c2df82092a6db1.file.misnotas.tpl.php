<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:40:31
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\apuntes_i\misnotas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:516545442610b71b6-03763557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '664bd7f05e53e532339a5eed01c2df82092a6db1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\apuntes_i\\misnotas.tpl',
      1 => 1418264209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516545442610b71b6-03763557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54544261393871_31135889',
  'variables' => 
  array (
    'notas' => 0,
    'io' => 0,
    'n' => 0,
    'i' => 0,
    'ie' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54544261393871_31135889')) {function content_54544261393871_31135889($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="contentedor hidden">
<div class="l_cont floatL RCont">
<div class="t_i"><div class="floatL">Mis apuntes</div> <?php if ($_smarty_tpl->tpl_vars['notas']->value['mi']['num']) {?> <div class="booble_blue"><?php echo $_smarty_tpl->tpl_vars['notas']->value['mi']['num'];?>
</div><?php } else { ?><div class="booble_blue">0</div><?php }?></div>
<div class="c_i">
<div class="cont_ii"><?php if ($_smarty_tpl->tpl_vars['notas']->value['mi']) {?>
<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['io'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notas']->value['mi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['io']->value = $_smarty_tpl->tpl_vars['n']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['io']->value+1<=$_smarty_tpl->tpl_vars['notas']->value['mi']['num']&&$_smarty_tpl->tpl_vars['n']->value['um_id']&&$_smarty_tpl->tpl_vars['n']->value['um_id']!='<') {?>
<div class="nt_i mnt<?php echo $_smarty_tpl->tpl_vars['io']->value+1;?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['um_id'];?>
">
<div class="nt_content">
<div class="nt_title"><?php echo $_smarty_tpl->tpl_vars['n']->value['um_name'];?>
</div>
<div class="nt_cont"><?php echo $_smarty_tpl->tpl_vars['n']->value['um_text'];?>
</div>
<div class="nt_dates">Creado <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['n']->value['um_date']);?>
 - Estado: <?php echo $_smarty_tpl->tpl_vars['n']->value['state'];?>
</div>
</div>
</div>
<?php }?>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">Sin apuntes en esta secci&oacute;n</div><?php }?>
</div>
<div class="pags">
<?php echo $_smarty_tpl->tpl_vars['notas']->value['mi']['pages'];?>

</div>
</div>
</div>

<div class="c_cont floatL RCont">
<div class="t_i"><div class="floatL">Apuntes publicos</div> <?php if ($_smarty_tpl->tpl_vars['notas']->value['public']['num']) {?> <div class="booble_blue"><?php echo $_smarty_tpl->tpl_vars['notas']->value['public']['num'];?>
</div><?php } else { ?><div class="booble_blue">0</div><?php }?></div>
<div class="c_i">
<div class="cont_ii"><?php if ($_smarty_tpl->tpl_vars['notas']->value['public']) {?>
<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notas']->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['n']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['i']->value+1<=$_smarty_tpl->tpl_vars['notas']->value['public']['num']&&$_smarty_tpl->tpl_vars['n']->value['um_id']&&$_smarty_tpl->tpl_vars['n']->value['um_id']!='<') {?>
<div class="nt_i mnt<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['um_id'];?>
">
<div class="nt_content">
<div class="nt_title"><?php echo $_smarty_tpl->tpl_vars['n']->value['um_name'];?>
</div>
<div class="nt_cont"><?php echo $_smarty_tpl->tpl_vars['n']->value['um_text'];?>
</div>
<div class="nt_dates">Creado <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['n']->value['um_date']);?>
 - Estado: <?php echo $_smarty_tpl->tpl_vars['n']->value['state'];?>
</div>
</div>
</div>
<?php }?>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">Sin apuntes en esta secci&oacute;n</div><?php }?>
</div>
<div class="pags">
<?php echo $_smarty_tpl->tpl_vars['notas']->value['public']['pages'];?>

</div>
</div>
</div>

<div class="r_cont floatL RCont">
<div class="t_i"><div class="floatL">Apuntes entre mis amigos</div> <?php if ($_smarty_tpl->tpl_vars['notas']->value['friends']['num']) {?> <div class="booble_blue"><?php echo $_smarty_tpl->tpl_vars['notas']->value['friends']['num'];?>
</div><?php } else { ?><div class="booble_blue">0</div><?php }?></div>
<div class="c_i">
<div class="cont_ii"><?php if ($_smarty_tpl->tpl_vars['notas']->value['friends']) {?>
<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['ie'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notas']->value['friends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['ie']->value = $_smarty_tpl->tpl_vars['n']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['ie']->value+1<=$_smarty_tpl->tpl_vars['notas']->value['friends']['num']&&$_smarty_tpl->tpl_vars['n']->value['um_id']&&$_smarty_tpl->tpl_vars['n']->value['um_id']!='<') {?>
<div class="nt_i mnt<?php echo $_smarty_tpl->tpl_vars['ie']->value+1;?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['um_id'];?>
">
<div class="nt_content">
<div class="nt_title"><?php echo $_smarty_tpl->tpl_vars['n']->value['um_name'];?>
</div>
<div class="nt_cont"><?php echo $_smarty_tpl->tpl_vars['n']->value['um_text'];?>
</div>
<div class="nt_dates">Creado <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['n']->value['um_date']);?>
 - Estado: <?php echo $_smarty_tpl->tpl_vars['n']->value['state'];?>
</div>
</div>
</div>
<?php }?>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">Sin apuntes en esta secci&oacute;n</div><?php }?>
</div>
<div class="pags">
<?php echo $_smarty_tpl->tpl_vars['notas']->value['friends']['pages'];?>

</div>
</div>
</div>

<div class="contents_xtras::bio">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/m_notas_d.css">
</div>
</div><?php }} ?>
