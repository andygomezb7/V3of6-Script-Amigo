<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:55:41
         compiled from "C:\xampp\htdocs\w\themes\default\comunidades\c.miembros_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1765548a3d0d5f5e16-97413748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aec6b65f2adfb70aa4db2c8e947064765c3cc18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\comunidades\\c.miembros_left.tpl',
      1 => 1418345737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1765548a3d0d5f5e16-97413748',
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
  'unifunc' => 'content_548a3d0d8d24d7_01366793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a3d0d8d24d7_01366793')) {function content_548a3d0d8d24d7_01366793($_smarty_tpl) {?><div class="com_loc_global">
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
