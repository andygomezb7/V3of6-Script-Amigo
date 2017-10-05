<?php /* Smarty version Smarty-3.1.19, created on 2014-12-12 20:15:03
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\tienda_i\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20111548b5f53278648-37085441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fba9467fb739bcc7de81638a6f3f06a46061433' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\tienda_i\\carrito.tpl',
      1 => 1418436877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20111548b5f53278648-37085441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548b5f5349dc22_60470403',
  'variables' => 
  array (
    'tsProductos' => 0,
    'tsConfig' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548b5f5349dc22_60470403')) {function content_548b5f5349dc22_60470403($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsProductos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
<div class="product" style="background: url(<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/bg/webstore/<?php if ($_smarty_tpl->tpl_vars['p']->value['typee']=='Medalla') {?>med.png<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['typee']=='Rango') {?>rang.png<?php } else { ?>serv.png<?php }?>);<?php if ($_smarty_tpl->tpl_vars['p']->value['obj_3']==2||$_smarty_tpl->tpl_vars['p']->value['obj_3']==4) {?>height:202px;<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['p']->value['exist']==1) {?><a class="btncom" data="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" name="removeProd" style="margin: 66px 0px 0px 107px;">Quitar</a><?php } else { ?><a class="btncom" data="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" name="add">Comprar</a><?php }?>
<div style="background: #FFFFFF;margin: -4px 0px 0px 0px;<?php if ($_smarty_tpl->tpl_vars['p']->value['obj_3']==2||$_smarty_tpl->tpl_vars['p']->value['obj_3']==4) {?>height:70px;<?php } else { ?>height: 59px;<?php }?>">
<div class="contse">
<div id="numet"><?php if ($_smarty_tpl->tpl_vars['p']->value['obj_3']==2||$_smarty_tpl->tpl_vars['p']->value['obj_3']==4) {?><b><?php echo $_smarty_tpl->tpl_vars['p']->value['obj_4'];?>
</b><br><strike class="size11"><?php echo $_smarty_tpl->tpl_vars['p']->value['precio'];?>
</strike><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['p']->value['precioo'];?>
<?php }?></div>
<div id="pasest">Worts</div></div>
<div id="typefootr">
<?php if ($_smarty_tpl->tpl_vars['p']->value['typee']=='Medalla') {?><a onclick="mydialog.alert('Medalla: <?php echo $_smarty_tpl->tpl_vars['p']->value['obj'];?>
', '<br><br><center style=padding:23px;><img style=width:64px;height:64px; src=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/medals/<?php echo $_smarty_tpl->tpl_vars['p']->value['imagen'];?>
 /></center><br><br>');" style="color: #000000;line-height: 0;font-size: 14px;font-weight: bold;"><?php } else { ?><a style="color: #000000;line-height: 0;font-size: 15px;font-weight: bold;"><?php }?><?php echo $_smarty_tpl->tpl_vars['p']->value['typee'];?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['typee']=='Medalla') {?></a><?php } else { ?></a><?php }?> <div style="font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['p']->value['obj'];?>
</div></div>
</div>
</div>
<?php } ?><?php }} ?>
