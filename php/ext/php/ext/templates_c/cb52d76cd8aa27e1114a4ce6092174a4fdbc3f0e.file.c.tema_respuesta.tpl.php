<?php /* Smarty version Smarty-3.1.19, created on 2014-11-03 14:41:17
         compiled from "C:\xampp\htdocs\w\themes\default\t.comus_ajax\c.tema_respuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309905457e86dd59f80-26617594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb52d76cd8aa27e1114a4ce6092174a4fdbc3f0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\t.comus_ajax\\c.tema_respuesta.tpl',
      1 => 1392762364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309905457e86dd59f80-26617594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newCom' => 0,
    'tsConfig' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457e86de4e1c3_26424864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457e86de4e1c3_26424864')) {function content_5457e86de4e1c3_26424864($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="com_coment_resp clearfix" id="coment_id_<?php echo $_smarty_tpl->tpl_vars['newCom']->value[4];?>
">
        	<ul class="ccr_options clearfix">
                <li><a href="#" onclick="com.del_respuesta(<?php echo $_smarty_tpl->tpl_vars['newCom']->value[4];?>
);return false;" class="qtip" title="Borrar comentario"><i class="com_icon icon_del"></i></a></li>
            </ul>
            <div class="ctcf_avatar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
">
                    <img style="width: 50px; height: 50px;" src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" />
                </a>
            </div>
            <div class="ctcf_detalles">
                <div class="ctcf_info">@<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
</a><span><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['newCom']->value[3]);?>
</span></div>
                <div class="ctcf_body"><?php echo nl2br($_smarty_tpl->tpl_vars['newCom']->value[0]);?>
</div>
            </div>
        </div>
<div id="add_new_com"></div><?php }} ?>
