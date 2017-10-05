<?php /* Smarty version Smarty-3.1.19, created on 2014-11-20 21:29:05
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\ads_i\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278745453f462e8b257-24445257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f29f8ee7bea311dd1cc3fe8ba31acaa59c31df6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\ads_i\\menu.tpl',
      1 => 1415416998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278745453f462e8b257-24445257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f462ec82e4_68075432',
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f462ec82e4_68075432')) {function content_5453f462ec82e4_68075432($_smarty_tpl) {?><div class="menu_ads">
<ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/mostrar/?adspage=home"><span>Inicio</span></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/anun/?adspage=crear" class="vctip" title="Promociona tu producto"><span>Crear anuncio</span></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/?adspage=crear&action=campaña" class="vctip" title="Bloque para mi sitio web/blog"><span>Crear Bloque</span></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/anuncios/?adspage=view" class="vctip" title="Ver mis anuncios y bloques"><span>Mis anuncios</span></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/ver/?adspage=blog"><span>Blog</span></a></li>
</ul>
</div><?php }} ?>
