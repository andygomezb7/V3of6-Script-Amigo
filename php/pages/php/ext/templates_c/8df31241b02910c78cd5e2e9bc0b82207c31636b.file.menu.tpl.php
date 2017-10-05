<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 16:20:11
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\cuenta_i\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3265854650105af79e2-28748319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df31241b02910c78cd5e2e9bc0b82207c31636b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\cuenta_i\\menu.tpl',
      1 => 1416176174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3265854650105af79e2-28748319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54650105af79e2_11777357',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54650105af79e2_11777357')) {function content_54650105af79e2_11777357($_smarty_tpl) {?><div class="t_cuenta_menu hidden">
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
