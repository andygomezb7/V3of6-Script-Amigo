<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:04:50
         compiled from "/home/babanta/wortit.net/themes/default/modulos/ads_i/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6976682945875f5326268e2-66850162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83cddd679254b5ff9d2daab31aa07a4ff3fba2eb' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/ads_i/menu.tpl',
      1 => 1415413398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6976682945875f5326268e2-66850162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f53263b5b3_00527631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f53263b5b3_00527631')) {function content_5875f53263b5b3_00527631($_smarty_tpl) {?><div class="menu_ads">
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
