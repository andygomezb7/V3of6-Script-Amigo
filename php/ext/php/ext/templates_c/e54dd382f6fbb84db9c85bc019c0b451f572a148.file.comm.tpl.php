<?php /* Smarty version Smarty-3.1.19, created on 2017-01-15 23:03:08
         compiled from "/home/babanta/wortit.net/themes/default/ajax_files/new/comm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1731120874587c540c1ad2e2-20476386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54dd382f6fbb84db9c85bc019c0b451f572a148' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/ajax_files/new/comm.tpl',
      1 => 1416948438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1731120874587c540c1ad2e2-20476386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comm' => 0,
    'tsConfig' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587c540c203195_44884819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c540c203195_44884819')) {function content_587c540c203195_44884819($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?>1:<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<div class="hidden cO">
<div class="floatL HdR"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/62/62/?file=<?php echo $_smarty_tpl->tpl_vars['c']->value['w_avatar'];?>
"></div>
<div class="floatL CoNt">
<div class="UsR"><?php if ($_smarty_tpl->tpl_vars['c']->value['name_original']&&$_smarty_tpl->tpl_vars['c']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value['ap_original'];?>
<?php } else { ?>@<?php echo $_smarty_tpl->tpl_vars['c']->value['usuario_nombre'];?>
<?php }?> <div class="size11 color_gray"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['c']->value['hace']);?>
</div></div> 
<div class="TxR">
 <span><?php echo $_smarty_tpl->tpl_vars['c']->value['text'];?>
</span>
</div>
</div>
<div class="floatL LikBtn">
<a class="floatL likCOm" data-curl="pos" data-obj='<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
'><span><?php echo $_smarty_tpl->tpl_vars['c']->value['likes'];?>
</span><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/bw/like.png"></a>
<a class="floatL likCOm" data-curl="neg" data-obj='<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
'><span><?php echo $_smarty_tpl->tpl_vars['c']->value['dislikes'];?>
</span><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/bw/dislike.png"></a>
</div>
</div>
<?php } ?>
<di role="::sttr">
<di>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/not_cmActs.js"></script>
</di>
</di><?php }} ?>
