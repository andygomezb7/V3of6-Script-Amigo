<?php /* Smarty version Smarty-3.1.19, created on 2014-12-08 17:34:34
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\cssEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25190548626f29c6710-29199632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7733bf38b2a80acd13bb29078ebb294f46f66f57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\cssEdit.tpl',
      1 => 1418081669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25190548626f29c6710-29199632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548626f29c6712_60205895',
  'variables' => 
  array (
    'tsConfig' => 0,
    'getarc' => 0,
    'cssi' => 0,
    'arvs' => 0,
    'i' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548626f29c6712_60205895')) {function content_548626f29c6712_60205895($_smarty_tpl) {?><h2 class="title">Estilos de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar los estilos de la pagina, Pero manten control de los estilos y nunca borres nada sin antes reportarlo de lo contrario se rebocara tu rango sin previa aviso, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<div>
<?php if ($_smarty_tpl->tpl_vars['getarc']->value&&$_smarty_tpl->tpl_vars['cssi']->value) {?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/code/linghwo.css">
<pre style="margin: 0px;width: 707px;height: 491px;"><?php echo $_smarty_tpl->tpl_vars['cssi']->value;?>
</pre>
<?php } else { ?>
<div class="talb_ic">
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arvs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
<div class="clearfix hidden ll">
<div class="floatL n"><b>00.<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</b></div>
<div class="floatL nm"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/incog-admin/?preg=cssEdit&arc=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</a></div>
</div>
<?php } ?>
</div>
<?php }?>
<div>
<style type="text/css">
.talb_ic{}
.talb_ic .ll{}
.talb_ic .ll .n{}
.talb_ic .ll .nm{}
</style>
</div>
</div>
<script type="text/javascript"></script><?php }} ?>
