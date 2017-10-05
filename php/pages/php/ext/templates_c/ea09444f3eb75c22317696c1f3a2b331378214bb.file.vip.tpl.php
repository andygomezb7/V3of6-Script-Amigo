<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 16:50:54
         compiled from "C:\xampp\htdocs\w\themes\default\vip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12569547648c690f560-50022491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea09444f3eb75c22317696c1f3a2b331378214bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\vip.tpl',
      1 => 1417042249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12569547648c690f560-50022491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547648c6d59f87_77812588',
  'variables' => 
  array (
    '_SESSION' => 0,
    'u' => 0,
    'tsConfig' => 0,
    'chat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547648c6d59f87_77812588')) {function content_547648c6d59f87_77812588($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value&&$_smarty_tpl->tpl_vars['u']->value['rango_vip']==0&$_smarty_tpl->tpl_vars['u']->value['user_vip']==1) {?>
<div id="pres-vip" style="background: #EEE url('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/bg/vip-banner.png');height:148px;"><h1></h1>
<img id="viper-us" class="zoomIt" style="margin-top: -41px;" src="<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
"></img>
</div>
<div id="menuvipvip" class="dsnone">
<ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/new/">News</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/new/agregar/">Agregar nota</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/foro/">Foro</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/chat/">Chat global</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/p/calendario/">Calendario</a></li>
</ul>
</div>
<div id="users-vip"><?php echo $_smarty_tpl->getSubTemplate ('modulos/vip_i/m.users_vip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<div id="vip-v">
   <div class="last-vip">
   <?php echo $_smarty_tpl->getSubTemplate ('modulos/vip_i/last_posts_vip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->tpl_vars['chat']->value;?>


   </div>
   <div class="lat-vip">
   <?php echo $_smarty_tpl->getSubTemplate ('modulos/vip_i/m.estadisticas_vip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <br class="space" />
   <div id="est-vip">
 <h3>Dona para mantener el sitio</h3>
 <ul>
   <br>
   <center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="J53KBA4JU9D9A">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
 </ul>
   </div>
   <br class="space"/>
   <?php echo $_smarty_tpl->getSubTemplate ('modulos/vip_i/m.comentarios_vip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <br class="space"/>
   <?php echo $_smarty_tpl->getSubTemplate ('modulos/vip_i/m.top_posts_vip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <br class="space"/>
   <?php echo $_smarty_tpl->getSubTemplate ('modulos/vip_i/m.top_users_vip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <br class="space"/>
   </div>
<div class="::sttr" role="sttr">
<div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/not_actns.js"></script></div>
</div>
</div>
<?php } else { ?>
<div class="emptyData">Secci&oacute;n VIP, Consulta las condiciones de  con el administrador o due&ntilde;o de la p&aacute;gina </div>
<?php }?>             
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
