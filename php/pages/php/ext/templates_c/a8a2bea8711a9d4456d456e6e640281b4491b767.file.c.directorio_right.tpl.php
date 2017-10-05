<?php /* Smarty version Smarty-3.1.19, created on 2017-02-11 15:41:38
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.directorio_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451451375589f8512532446-92390586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a2bea8711a9d4456d456e6e640281b4491b767' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.directorio_right.tpl',
      1 => 1393292080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451451375589f8512532446-92390586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsPaises' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589f851254f435_84012602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589f851254f435_84012602')) {function content_589f851254f435_84012602($_smarty_tpl) {?><div class="com_new_box">
    <div class="com_box_title clearfix"><h2>Foros por pa&iacute;s</h2></div>
    <div class="com_box_body">
    	<div class="com_list_element"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/Internacional/">Todos los pa&iacute;ses</a></div>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsPaises']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        <div class="com_list_element">
            <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['p']->value['c_pais'];?>
/"><?php echo $_smarty_tpl->tpl_vars['p']->value['pais'];?>
</a>
            <span class="cle_number"><?php echo $_smarty_tpl->tpl_vars['p']->value['total'];?>
</span>
        </div>
        <?php } ?>
    </div>
</div><?php }} ?>
