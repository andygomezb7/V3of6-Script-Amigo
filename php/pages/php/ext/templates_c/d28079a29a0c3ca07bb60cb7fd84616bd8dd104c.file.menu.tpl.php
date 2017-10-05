<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:07:01
         compiled from "/home/babanta/wortit.net/themes/default/modulos/grupos_i/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6186795795875f5b58ad4a1-42659469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28079a29a0c3ca07bb60cb7fd84616bd8dd104c' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/grupos_i/menu.tpl',
      1 => 1417380596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6186795795875f5b58ad4a1-42659469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f5b58c7aa9_61767505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f5b58c7aa9_61767505')) {function content_5875f5b58c7aa9_61767505($_smarty_tpl) {?><div class="grupos_i_menu hidden">
<ul class="hidden zoom">
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=home"><div>Grupos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=sug"><div>Grupos sugeridos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=amg"><div>Grupos de mis amigos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=local"><div>Grupos locales</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/?preg=misgrupos"><div>Tus grupos</div></a></li>
<div class="floatR">
<li><a class="bg_green_3d btn color_white crtGrp">Crear grupo</a></li>
</div>
</ul>
</div><?php }} ?>
