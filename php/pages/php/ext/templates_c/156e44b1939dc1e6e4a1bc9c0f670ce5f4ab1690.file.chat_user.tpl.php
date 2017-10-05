<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 22:44:53
         compiled from "/home/babanta/wortit.net/themes/default/includes/chat_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21152058545875b845e1bf71-89967179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '156e44b1939dc1e6e4a1bc9c0f670ce5f4ab1690' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/includes/chat_user.tpl',
      1 => 1418687456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21152058545875b845e1bf71-89967179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UsrsActvs' => 0,
    'u' => 0,
    'numaccess' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875b845ebb0e4_30879611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875b845ebb0e4_30879611')) {function content_5875b845ebb0e4_30879611($_smarty_tpl) {?><div id="strcth" class="clearfix">
<div class="typesholes">
<div class="typesholes">
<div class="typesholes" id="TdsLsChts">

<div id="UsrsQstnOnlnPrCnvrsr">
<div id="CntndrMnPrMdVr" onclick="ctrcht.chtOfsl();"><div class="clnDsVrsOtr"><div>Roombox</div></div></div>
<div id="CntndrDlsUsrsOnlnPrCnvrsr">
    <div id="TtlDlsUsrsOnlnPrCnvrsr" onclick="ctrcht.chtOfsl();">Roombox</div>
<div id="CntndrOfclDlsUsrsOnlnPrCnvrsr">
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['UsrsActvs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
<li><a onclick="ctrcht.add(<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
, <?php if ($_smarty_tpl->tpl_vars['u']->value['identi']) {?><?php echo $_smarty_tpl->tpl_vars['u']->value['identi'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['numaccess']->value;?>
<?php }?>)" id="<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
_<?php if ($_smarty_tpl->tpl_vars['u']->value['identi']) {?><?php echo $_smarty_tpl->tpl_vars['u']->value['identi'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['numaccess']->value;?>
<?php }?>_14" data-title="<?php echo $_smarty_tpl->tpl_vars['u']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['ap_original'];?>
"><div class="floatL" style="margin: 0px 4px 0px 0px;"><img style="width: 26px;height: 27px;" src="<?php if ($_smarty_tpl->tpl_vars['u']->value['w_avatar']) {?><?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group.png<?php }?>" /></div> <?php echo $_smarty_tpl->tpl_vars['u']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['ap_original'];?>
</a></li>
<?php } ?>
</div>
<div>
<input type="text" placeholder="Busca personas..." style="width:100%;height:26px;" id="VlrcnDLBsSrch_OnlUrs" />
</div>
</div>
</div>

</div>
</div>
</div>
<div id="HyMsChtsAmg">
<div id="CntntDlLsUsrsXtrs">
<div style="max-height: 211px;"><div style="border-bottom: 1px solid rgba(0, 0, 0, .3);"><div style="height: 88px;border: 1px solid rgba(29, 49, 91, .3);overflow-x: hidden;
overflow-y: auto;background-color: #fff;position: relative;border-width: 0 1px;"><div id="TdsLsChtsQeNeNtrn"></div></div></div></div></div>
<div id="iCndLWbst" onclick="ctrcht.iGicteGc();">/+</div></div>
</div>
<?php }} ?>
