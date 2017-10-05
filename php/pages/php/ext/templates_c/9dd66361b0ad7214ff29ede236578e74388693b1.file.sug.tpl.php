<?php /* Smarty version Smarty-3.1.19, created on 2014-11-28 15:13:29
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\grupos_i\sug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22115478e1ee981ce6-96247674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dd66361b0ad7214ff29ede236578e74388693b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\grupos_i\\sug.tpl',
      1 => 1417208655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22115478e1ee981ce6-96247674',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5478e1eeba71f1_40929514',
  'variables' => 
  array (
    'grupos' => 0,
    's' => 0,
    'u' => 0,
    'tsConfig' => 0,
    'h' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5478e1eeba71f1_40929514')) {function content_5478e1eeba71f1_40929514($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.truncate.php';
?><div class="grupos_i_co">
<div class="tO"><h3>Te sugerimos los siquientes grupos</h3></div>
<div class="grupos_table">
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupos']->value['sugeridos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<div class="grupo_c hidden">
<div class="grupo_c_img floatL">
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['u']->value['usuario_id']) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/56/56/?file=<?php if ($_smarty_tpl->tpl_vars['u']->value['w_avatar']) {?><?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group2.png<?php }?>" class="floatL" uid="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['u']->value['numero']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/56/56/?file=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group2.png" class="floatL" sid="<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
">
<?php } ?>
<?php } ?>
</div>

<div class="grupo_c_cont floatL">
<div class="grupo_c_tit"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['s']->value['wdefined'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['s']->value['nombre'];?>
</a></div>
<div class="grupo_c_tcon">
<span>Grupo cerrado</span>
<?php if ($_smarty_tpl->tpl_vars['s']->value['descripcion']) {?><br /><span style="color: #9197a3;
font-size: 12px;"><i class="i_info"></i> &nbsp; <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['descripcion'],255);?>
</span><?php }?>
<br /><?php if ($_smarty_tpl->tpl_vars['s']->value['nunumero']==0) {?><span>Ningún miembro aun.</span><?php } elseif ($_smarty_tpl->tpl_vars['s']->value['nunumero']==1) {?><span><?php echo $_smarty_tpl->tpl_vars['s']->value['nunumero'];?>
 miembro</span><?php } else { ?><span><?php echo $_smarty_tpl->tpl_vars['s']->value['nunumero'];?>
 miembros</span><?php }?><br />
<?php if ($_smarty_tpl->tpl_vars['s']->value['user1']['usuario_id']) {?><span><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value['user1']['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['user1']['usuario_nombre'];?>
</a> 
<?php if ($_smarty_tpl->tpl_vars['s']->value['users']>=1) {?>
<?php if ($_smarty_tpl->tpl_vars['s']->value['users']==1) {?>y <a class="vctip" title="<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['usersarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['g']->value['usuario_nombre']!=$_smarty_tpl->tpl_vars['s']->value['user1']['usuario_nombre']) {?><?php echo $_smarty_tpl->tpl_vars['g']->value['usuario_nombre'];?>
<br /><?php }?><?php } ?>"><?php echo $_smarty_tpl->tpl_vars['s']->value['users'];?>
 conocido mas es miembro</a><?php } else { ?><a class="vctip" title="<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['usersarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['g']->value['usuario_nombre']!=$_smarty_tpl->tpl_vars['s']->value['user1']['usuario_nombre']) {?><?php echo $_smarty_tpl->tpl_vars['g']->value['usuario_nombre'];?>
<br /><?php }?><?php } ?>">y <?php echo $_smarty_tpl->tpl_vars['s']->value['users'];?>
 conocidos mas son miembros</a><?php }?>
<?php } else { ?>
es miembro.
<?php }?></span>
<?php }?>
</div>
</div>
</div>
<?php } ?>
</div>
</div><?php }} ?>
