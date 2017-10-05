<?php /* Smarty version Smarty-3.1.19, created on 2014-11-08 17:00:47
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\altoahi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9948545e9f783d0903-19029883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96488ed0afa140189b7d8b02874a5296d024125' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\altoahi.tpl',
      1 => 1415487644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9948545e9f783d0903-19029883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545e9f7844aa26_14246230',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545e9f7844aa26_14246230')) {function content_545e9f7844aa26_14246230($_smarty_tpl) {?><div style="margin: 15px 0 0 0;"><center>
<img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/bg/altoahi.png" title="No haz iniciado sesión" alt="No haz iniciado sesión"/>
<div class="clearfix">
<span class="color_gray">Antes de continuar, sigue alguno de los siguientes pasos</span><br>
<a class="btn_green btn color_white" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/">Iniciar sesión</a>
<a class="btn_green btn color_white" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/registro/">Registrarme</a>
</div>
</center></div><?php }} ?>
