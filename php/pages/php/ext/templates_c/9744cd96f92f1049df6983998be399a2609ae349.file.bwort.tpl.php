<?php /* Smarty version Smarty-3.1.19, created on 2017-01-15 22:57:16
         compiled from "/home/babanta/wortit.net/themes/default/bwort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:523360464587c52ac8d9393-67567770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9744cd96f92f1049df6983998be399a2609ae349' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/bwort.tpl',
      1 => 1418693924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '523360464587c52ac8d9393-67567770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'u' => 0,
    'tsConfig' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587c52acbe6d99_25187990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c52acbe6d99_25187990')) {function content_587c52acbe6d99_25187990($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="hidden">
<div class="floatL" style="width: 71%;margin: 0 0 0 16px;">
<?php echo $_smarty_tpl->getSubTemplate ('ajax_files/bworts/load.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>


<div class="floatR" style="width: 26%;margin: 0 0 0 9px;">
<div id="gcont"><div class="tgcont" style="padding: 3px 7px 0px 7px !important;">Hoy: <?php echo $_smarty_tpl->tpl_vars['u']->value['dia'];?>
 / <?php echo $_smarty_tpl->tpl_vars['u']->value['mes'];?>
 / <?php echo $_smarty_tpl->tpl_vars['u']->value['ano'];?>
</div><br></div>
<div id="gcont">
<div class="tgcont">Sugerencias</div>
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['u']->value['sugerenciasu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<div style="width: 98%; overflow: hidden; margin-bottom: 3px;">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value['usuario_nombre'];?>
" target="_blank" style="float: left;"><img src="<?php if ($_smarty_tpl->tpl_vars['s']->value['w_avatar']==null) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/avatar/group.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['s']->value['w_avatar'];?>
<?php }?>" style="width: 40px; height: 40px; float: left;"/></a>
<div style="margin: 0px 0px 0px 8px;float: left;">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value['usuario_nombre'];?>
" target="_blank"><span><?php if ($_smarty_tpl->tpl_vars['s']->value['name_original']==null&&$_smarty_tpl->tpl_vars['s']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['s']->value['usuario_nombre'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['s']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value['ap_original'];?>
 (<?php echo $_smarty_tpl->tpl_vars['s']->value['usuario_nombre'];?>
)<?php }?></span></a>
</div>
</div>
<?php } ?>
</div>
<div class="::sttr" role="sttr">
<div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/bwort.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/pubcontents.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/bwts.css" />
<style type="text/css">
#gcont{overflow: hidden;vertical-align: top;background-color: rgb(255, 255, 255);border-width: 1px 1px 2px;border-style: solid;border-color: rgb(216, 216, 216);background-position: initial initial;background-repeat: initial;initial;-webkit-border-radius: 2px;border-radius: 2px;margin: 22px 4px 4px 4px;padding: 5px 5px 15px 5px;}
#gcont .tgcont{font: 100 15px arial,sans-serif;padding: 1px 5px 13px 6px;}
</style>
</div>
</div>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
