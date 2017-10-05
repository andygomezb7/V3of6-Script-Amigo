<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 14:32:20
         compiled from "C:\xampp\htdocs\w\themes\default\includes\main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13555453f4ed319757-29027458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71ffafd3b6c4c08c2437d3c5c70325485859d91a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\includes\\main_menu.tpl',
      1 => 1416168012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13555453f4ed319757-29027458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f4ed40d998_50407854',
  'variables' => 
  array (
    'tsConfig' => 0,
    '_SESSION' => 0,
    'u' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f4ed40d998_50407854')) {function content_5453f4ed40d998_50407854($_smarty_tpl) {?><div id="menuPrncpl">
<ul class="prncpl">
<li class="options_menu animate_margin_1s mnpr1"><a><span><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/static/media/icons/true/barra_T4.png"></span></a></li>
<li class="mnpr1 overmenu"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
"><span class="lsf">house</span> <span>Inicio</span></a></li>
<li class="mnpr1 overmenu"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/foro/"><span class="lsf">group</span> <span>Foros</span></a></li>
<li class="mnpr1 overmenu"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/new/"><span class="lsf">album</span> <span>Noticias</span></a></li>
<li class="mnpr1 overmenu"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/wortit"><span class="lsf">help</span> <span>Ayuda</span></a></li>
<li class="mnpr1 overmenu">
<a <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>onclick="$('#searchmenuhel').toggle();"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/search/"<?php }?>><span class="lsf">search</span> <span>Buscar</span></a>
</li>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><li class="mnpr1">
<a><span>
<div class="dsnone" id="searchmenuhel">
<form action="http://localhost/p/search/" method="GET" style="height: 50px;" class="vctip" title=""><div class="hidden formenusear"><div class="hidden cntfrmsear"><div class="hidden gohersear">
<input type="text" class="searchglobal clgoint" placeholder="Busca personas y contenido..." name="q" id="nofocus">
<select name="t" class="typesearching slrgosec floatL"><option value="users">users</option><option value="new">Notas</option><option value="temas">Temas</option><option value="bworts">Bworts</option></select>
<button type="submit" title="Busca personas, lugares y cosas" class="floatL inpsetarc"><span class="accessible_elem">Busca personas, lugares y cosas</span></button></div></div><div id="displayboxsearching"></div></div></form>
</div>
</span></a>
</li><?php }?>
</ul>
<ul class="cnfgrcns">
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
<li class="mnpr1"><a class="notifiDialog"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a>
<div class="modal-dialog" id="dialog-notifications" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Notificaciones</h3><div class="list" id="notifications-list"></div><a class="view-more" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notificaciones/">Ver todas</a></div></div>
</li>
<li class="mnpr1"><a class="messagesDialog"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a>
<div class="modal-dialog" id="dialog-messages" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Mensajes</h3><div class="list" id="notifications-list"></div><a class="view-more" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notificaciones/">Ver todas</a></div></div>
</li>
<li class="mnpr1"><a class="dropshow"><span class="width16"></span></a>
<div class="dropdown-w">
<div class="hidden pflat hover">
<div class="floatL"><img class="width32" src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
"></div>
<div class="floatL pborder">
<div><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
</div>
<div class="size11"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/" style="height: 0px;">Editar tu perfil</a></div>
</div>
</div>
<div class="dropcontent">
<ul>
<li class="dropdown-divider"></li>
<li class="hover"><a>Ayuda</a></li>
<li class="hover"><a>Mapa</a></li>
<li class="dropdown-divider"></li>
<li class="hover"><a>Config. Personal</a></li>
<li class="hover"><a>Config. General</a></li>
<li class="hover"><a class="logout active">Cerrar sesión</a></li>
</ul>
</div></div>
</li>
<?php } else { ?>
<li class="mnpr1"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/registro"><span>Registrate</span></a></li>
<li class="mnpr1"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/login?rd=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
"><span>Inicia sesión</span></a></li>
<?php }?>
</ul>
</div><?php }} ?>
