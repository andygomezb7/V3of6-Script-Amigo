<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 20:16:55
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\apuntes_i\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50665454425cbaeb93-53869719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '760d5bd9440076f01991ee884819163d680264ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\apuntes_i\\menu.tpl',
      1 => 1418264206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50665454425cbaeb93-53869719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5454425cbaeb99_34826266',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5454425cbaeb99_34826266')) {function content_5454425cbaeb99_34826266($_smarty_tpl) {?><div class="menunew">
<ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/apuntes/?preg=mi">Mis apuntes</a></li>

<li><a onclick="apunt.add();">Crear apunte</a></li>
</ul>
</div><?php }} ?>
