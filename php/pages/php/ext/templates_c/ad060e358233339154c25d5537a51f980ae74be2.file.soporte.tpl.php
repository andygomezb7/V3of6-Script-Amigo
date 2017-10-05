<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 22:06:50
         compiled from "/home/babanta/wortit.net/themes/default/soporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13072699835875af5ab08fa8-44385282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad060e358233339154c25d5537a51f980ae74be2' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/soporte.tpl',
      1 => 1414799346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13072699835875af5ab08fa8-44385282',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875af5ab95f44_78083691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875af5ab95f44_78083691')) {function content_5875af5ab95f44_78083691($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
