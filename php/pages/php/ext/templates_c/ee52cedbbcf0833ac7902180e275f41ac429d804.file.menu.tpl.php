<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:08:09
         compiled from "/home/babanta/wortit.net/themes/default/modulos/cuenta_i/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:399275555875f5f9b52d27-01338973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee52cedbbcf0833ac7902180e275f41ac429d804' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/cuenta_i/menu.tpl',
      1 => 1416172576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399275555875f5f9b52d27-01338973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f5f9b6b0a6_64936795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f5f9b6b0a6_64936795')) {function content_5875f5f9b6b0a6_64936795($_smarty_tpl) {?><div class="t_cuenta_menu hidden">
<ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/Configuración/"><div>Configuración</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/Privacidad/"><div>Privacidad</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/Notificaciones/"><div>Notificaciones</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/Referidos/"><div>Referidos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/Worts/"><div>Worts (Dinero)</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/Estadísticas/"><div>Estadísticas</div></a></li>

<div class="floatR"><li><a class="btn_green color_white vctip" title="Guardar" style="padding: 0 0;margin: 0;min-width: 35px;border-radius: 0;" onclick="ccount.set(1);"><div class="lsf">check</div></a></li></div>
</ul>
</div><?php }} ?>
