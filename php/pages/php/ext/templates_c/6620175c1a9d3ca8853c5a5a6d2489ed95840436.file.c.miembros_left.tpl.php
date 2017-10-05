<?php /* Smarty version Smarty-3.1.19, created on 2017-01-25 17:33:35
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.miembros_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2120930311588935cfde6187-34062337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6620175c1a9d3ca8853c5a5a6d2489ed95840436' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.miembros_left.tpl',
      1 => 1418342138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2120930311588935cfde6187-34062337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsCom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588935cfed82b3_56001312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588935cfed82b3_56001312')) {function content_588935cfed82b3_56001312($_smarty_tpl) {?><div class="com_loc_global">
	<ul class="clearfix">
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/">Comunidades</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/home/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['c_seo'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['cat']['c_nombre'];?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre'];?>
</a></li>
        <li>Miembros</li>
    </ul>
</div>
<div class="com_members_filter clearfix">
	<div class="clearfix floatL">
	<input type="text" class="input_text floatL" style="width: 305px;margin: 0;margin-right: 3px;" id="search_member" /><input type="button" value="Buscar" class="input_button ibg" style="margin: 0;" onclick="com.search_member();"/>
    </div>
    <ul class="cmf_select clearfix floatR">
    	<li id="miembros" class="active"><a href="javascript:com.load_members('miembros');">Miembros</a></li>
        <li id="suspendidos"><a href="javascript:com.load_members('suspendidos');">Suspendidos</a></li>
    </ul>
</div>
<div id="com_members_result"><?php echo $_smarty_tpl->getSubTemplate ("t.comus_ajax/c.com_members.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php }} ?>
