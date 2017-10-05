<?php /* Smarty version Smarty-3.1.19, created on 2014-11-21 18:30:49
         compiled from "C:\xampp\htdocs\w\themes\default\soporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1654854540a6dd1cef0-31460278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67532b93b2cb11b4f939261ea900195f93035a35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\soporte.tpl',
      1 => 1414802946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1654854540a6dd1cef0-31460278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54540a6e07a121_69017673',
  'variables' => 
  array (
    '_SESSION' => 0,
    'tsConfig' => 0,
    'u' => 0,
    'tsAct' => 0,
    'pagetgo' => 0,
    'soportep' => 0,
    'tsAction' => 0,
    'aget' => 0,
    'paepaes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54540a6e07a121_69017673')) {function content_54540a6e07a121_69017673($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
<div id="countpagesop" style="display:none;">
<ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/editar/cuenta">Cuenta</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/editar/privacidad">Privacidad</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/editar/seguridad">Seguridad</a></li>
</ul>
</div>
<?php }?>

<div id="contentsop">
<header>
<div id="buttons" class="floatL">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/?act=home">Inicio</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/?act=nuevo">Crear nuevo proyecto</a>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/?act=mi">Ver mis proyectos</a><?php }?>
</div>
<div class="floatR">
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
<a onclick="menOpcion.openMSghE();"><?php echo $_smarty_tpl->tpl_vars['u']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['ap_original'];?>
</a>
<a onclick="if($('#countpagesop').css('display') == 'none'){ $('#countpagesop').fadeIn(250); }else{ $('#countpagesop').fadeOut(250); }">Cuenta</a></div>
<?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/">Iniciar Sesión</a><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/registro/">Registrarme</a><?php }?>
</header>

<section>
<?php if ($_smarty_tpl->tpl_vars['tsAct']->value=='home'||!$_smarty_tpl->tpl_vars['tsAct']->value&&!$_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo']) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/soporte_i/home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['tsAct']->value=='mi') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/soporte_i/mi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['tsAct']->value=='nuevo') {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/soporte_i/nuevo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['pagetgo']->value['sf_seo']&&$_smarty_tpl->tpl_vars['soportep']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/soporte_i/profile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php if (!$_smarty_tpl->tpl_vars['tsAct']->value&&!$_smarty_tpl->tpl_vars['tsAction']->value&&!$_smarty_tpl->tpl_vars['aget']->value) {?>
Nada nada...
<?php }?>
</div>
<?php }?>
</section>

<footer>
<!-----paepaes: <?php echo $_smarty_tpl->tpl_vars['paepaes']->value;?>
 - tsAction: <?php echo $_smarty_tpl->tpl_vars['tsAction']->value;?>
 - action: <?php echo $_smarty_tpl->tpl_vars['tsAct']->value;?>
 -  aget:<?php echo $_smarty_tpl->tpl_vars['aget']->value;?>
---------->
</footer>
</div>

</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
