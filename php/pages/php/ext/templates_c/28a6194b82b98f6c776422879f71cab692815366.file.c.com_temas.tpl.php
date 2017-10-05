<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:31:43
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.com_temas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4999089415875a71f3abd05-45834685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28a6194b82b98f6c776422879f71cab692815366' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.com_temas.tpl',
      1 => 1403737068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4999089415875a71f3abd05-45834685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsCom' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a71f3ce089_69977736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a71f3ce089_69977736')) {function content_5875a71f3ce089_69977736($_smarty_tpl) {?><div class="all_news">
	<div class="home_news">
				<div id="error" class="home_new" style="display:block;">Comparte y encuentra contenido en <a href="http://www.wortit.net/new/">Wortit news</a>.</div>
				<div id="error" class="home_new" style="display:none;">Compra productos en la <a href="http://www.wortit.net/tienda/">Tienda Wortit</a>!</div>
				<div id="error" class="home_new" style="display:none;">Crea un grupo ahora en <a href="http://www.wortit.net/groups/">Grupos Wortit</a>!</div>
				<div id="error" class="home_new" style="display:none;">¿Que se celebra hoy?  Ve en <a href="http://www.wortit.net/p/calendario/">el calendario</a>!</div>
				<div id="error" class="home_new" style="display:none;">Conoce mas personas! en <a href="http://www.wortit.net/chat/">Chat Global</a>!</div>
				<div id="error" class="home_new" style="display:none;">Envia un mensaje privado, <a href="http://www.wortit.net/roombox/">¡Roombox!</a>!</div>
				<div id="error" class="home_new" style="display:none;">¿Buscas algo?, <a href="http://www.wortit.net/search/">ir al Buscador</a>!</div>
			</div>
</div>

<div class="ver_com_all">
    <div class="ver_com_temas clearfix">
        <h3 class="floatL">Ultimos Temas</h3>
        <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['es_miembro']&&$_smarty_tpl->tpl_vars['tsCom']->value['mi_rango']>2) {?><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_nombre_corto'];?>
/agregar/" class="floatR input_button ibg">Nuevo tema</a><?php }?>
    </div>
    <div id="result_temas"><?php echo $_smarty_tpl->getSubTemplate ('t.comus_ajax/c.pages_temas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>    
</div><?php }} ?>
