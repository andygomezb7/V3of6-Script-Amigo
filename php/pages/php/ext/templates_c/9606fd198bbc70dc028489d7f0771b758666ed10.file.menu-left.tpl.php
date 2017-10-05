<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:16:11
         compiled from "/home/babanta/wortit.net/themes/default/includes/menu-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1967794985875a37b6a9dc0-06456638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9606fd198bbc70dc028489d7f0771b758666ed10' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/includes/menu-left.tpl',
      1 => 1413924890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1967794985875a37b6a9dc0-06456638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsPage' => 0,
    '_SESSION' => 0,
    'u' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a37b73a8e9_16895444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a37b73a8e9_16895444')) {function content_5875a37b73a8e9_16895444($_smarty_tpl) {?><div class="menu_left hidden" <?php if ($_smarty_tpl->tpl_vars['tsPage']->value=='home'&&$_smarty_tpl->tpl_vars['_SESSION']->value) {?>style="display:block;"<?php }?>>
<ol>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><li><a><div><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
" width="25" height="25" style="margin: 6px 8px -9px 0px;background: rgba(255, 255, 255, 0.22);padding: 2px;"> <?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
</div></a>
<ol>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
/"><div>Ir a mi perfil</div></a></li></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/?preg=mi"><div>Configuración personal</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/cuenta/?preg=global&action=mi"><div>Configuración general</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/list/?preg=bloqs&action=mi"><div>Bloqueados</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/list/?preg=bw_fav"><div>Bworts Favoritos</div></a></li>
</ol>
</li><?php }?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/?bworts=true"><div>Ultimos Bworts</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/notas/"><div>Ultimas noticias</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/roombox/" class="otip" title="Mensajes privados"><div>Roombox</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/calendario/?preg=global"><div>Mi Calendario</div></a>
<ol>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/calendario/?pref=mi&preg=eventos"><div>Mis Eventos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/calendario/?cumple=0&gevents=1"><div>Eventos De usuarios</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/calendario/?cumple=0&gevents=0&inter=1"><div>Eventos Interacionales</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/calendario/?cumple=0&gevents=0&nacion=1"><div>Eventos Nacionales</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/calendario/?cumple=1&gevents=0"><div>Cumpleaños</div></a></li>
</ol>
</li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/apuntes/"><div>Mis Apuntes</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/aula/"><div>Mi aula</div></a>
<ol>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/aula/?list=true&pref=aula"><div>Aulas</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/aula/?list=true&pref=prof"><div>Profesores</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/aula/?list=true&pref=comp"><div>Compañeros</div></a></li>
</ol>
</li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/"><div>Foros de soporte</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/foro/"><div>Foros interactivos</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/"><div>Grupos sociales</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/developer/?home"><div>Desarrollador</div></a>
<ol>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/developer/?pref=ext&preg=mi"><div>Mis extenciones</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/developer/?pref=top_ext&preg=mi"><div>Top extenciones</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/developer/?pref=list_ext&preg=mi"><div>Lista de extenciones</div></a></li>
</ol>
</li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/mostrar/?adspage=home"><div>Anuncios</div></a>
<ol>
<li><a class="otip" title="Crear campaña de anuncio" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/?adspage=crear&action=campaña"><div>Crear campaña</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/anun/?adspage=crear" class="otip" title="Crear anuncio"><div>Crear anuncio</div></a></li>
<li><a class="otip" title="Anuncios" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/anuncios/?adspage=view"><div>Mis campañas</div></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url_ads'];?>
/mostrar/?adspage=estadisticas"><div>Estadisticas</div></a></li>
</ol>
</li>
</ol>
</div><?php }} ?>
