<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 05:28:39
         compiled from "/home/babanta/wortit.net/themes/default/modulos/new_i/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630084901587616e715c394-90251605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd77eee7b0bb1cc3d4f2f24696c5e1232398a9446' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/new_i/menu.tpl',
      1 => 1416536448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630084901587616e715c394-90251605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apgets' => 0,
    'tsConfig' => 0,
    'u' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587616e719bfe3_59295963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587616e719bfe3_59295963')) {function content_587616e719bfe3_59295963($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['apgets']->value=='nota') {?>
<div class="headr_nt">
<div class="tp_hdr_nt">
<div class="floatL"><span>¿Eres nuevo?</span> <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/registro">Registrate</a> <span>o</span> <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/login">Inicia sesión</a></div>
<div class="floatR menu_hrd_nt">
<ul>
<li><a class="notifiDialog" title="notificaciones"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a><div class="modal-dialog" id="dialog-notifications" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Notificaciones</h3><div class="list" id="notifications-list"></div><a class="view-more" href="http://localhost/w//notificaciones/">Ver todas</a></div></div></li>
<li><a class="messagesDialog" title="Mensajes privados"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a>
<div class="modal-dialog" id="dialog-messages" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Mensajes</h3><div class="list" id="notifications-list"></div><a class="view-more" href="http://localhost/w//notificaciones/">Ver todas</a></div></div>
</li>
<li>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
/" class="vctip" title="Ir a mi perfil"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/22/22/?file=<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" style="border-radius: 60px;-webkit-border-radius: 60px;-moz-border-radius: 60px;" width="22" height="22" /></a>
</li>
</ul>
</div>
</div>
<div class="contnt_hdr_nt hidden">
<div class="lg_hdr_nt floatL"></div>
<div class="srch_hdr_nt floatL">
<div class="cntn_search">
<form action="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/search/" method="GET">
<input name="q" class="inpt_t_nt floatL" placeholder="Busca un articulo...">
<input type="hidden" name="t" value="new">
<input type="submit" name="search" class="btn_search floatL" value="Buscar en la web"/>
</form>
</div>
</div>
</div>
</div>
<?php }?>
<div class="menunew">
<ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/">Home</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/search/?q=a&t=notas">Buscar</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/tops/?preg=notas">Tops</a></li>
<li><a href="#">Usuario</a>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><ol>
<li class="mrgnleft"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/?ap=fav">Favoritos</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/?ap=agregar">Agregar nota</a></li>
</ol><?php }?>
</li>
</ul>
</div><?php }} ?>
