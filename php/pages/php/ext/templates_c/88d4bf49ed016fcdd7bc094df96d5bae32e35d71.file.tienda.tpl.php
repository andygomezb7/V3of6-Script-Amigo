<?php /* Smarty version Smarty-3.1.19, created on 2014-12-13 13:14:21
         compiled from "C:\xampp\htdocs\w\themes\default\tienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7439548a63cb6acfc9-04784473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88d4bf49ed016fcdd7bc094df96d5bae32e35d71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\tienda.tpl',
      1 => 1418498057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7439548a63cb6acfc9-04784473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548a63cb7a1201_88688983',
  'variables' => 
  array (
    'tsConfig' => 0,
    'u' => 0,
    'prodctsprcmpr' => 0,
    'get_' => 0,
    'totalapagar' => 0,
    'totalapagarPaypal' => 0,
    'varType' => 0,
    'postPaga' => 0,
    'datesofset' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a63cb7a1201_88688983')) {function content_548a63cb7a1201_88688983($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="tienda">
<header>
<div class="LfT floatL">
<ul>
<li style="background: rgb(219, 46, 46);"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/tienda/"><div class="lsf">web</div>Bazar</a></li>
<li style="background: rgb(9, 202, 48);"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/tienda/?preg=ofert"><div class="lsf">bell</div>Ofertas</a></li>
<li style="background: rgb(51, 98, 245);"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/tienda/?preg=us"><div class="lsf">globe</div>Usuario</a></li>
<li style="background: rgb(245, 121, 51);"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/tienda/?preg=car"><div class="lsf">shopping</div>Carrito</a></li>
</ul>
</div>
<div class="riT floatR" style="top: 24px;right: 177px;width: 90px;"><div class="CrtLl" style="text-align: -webkit-center;"><div class="NiM color_gray"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/tienda/?preg=vender">Vender</a></div></div></div>
<div class="riT floatR" style="top:5px;"><div class="CrtLl"><div class="cntdd floatL"><?php echo $_smarty_tpl->tpl_vars['u']->value['worts'];?>
</div><div class="NiM floatR color_gray">Worts</div></div></div>
<div class="riT floatR"><div class="CrtLl prdCtsComplts"><div class="cntdd floatL"><?php echo $_smarty_tpl->tpl_vars['prodctsprcmpr']->value;?>
</div><div class="NiM floatR color_gray">Productos</div></div></div>
</header>
<div id="right">
<?php if (!$_smarty_tpl->tpl_vars['get_']->value['preg']) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/tienda_i/carrito.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='ofert') {?>
<h1>Ofertas</h1>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/tienda_i/carrito.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='serv') {?>
servicios
<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='us') {?>
Uusaris
<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='car') {?>
<div class="clearfix hidden">
<div class="floatL" style="padding: 5px 10px;border: 1px solid #DDDDDD;width: 175px;margin: 0 0 7px 0;">
<div class="clearfix hidden"><u>Worts:</u> <b><?php echo $_smarty_tpl->tpl_vars['totalapagar']->value;?>
</b> &nbsp; Worts</div> 
<div class="clearfix hidden"><u>Paypal:</u> <b><?php echo $_smarty_tpl->tpl_vars['totalapagarPaypal']->value;?>
</b> &nbsp; USD</div>
</div> 

<a class="input_button ibg floatR pypgcnclr"><div class="lsf floatL">check</div> &nbsp; Pagar</a>
</div>
<hr />
<?php echo $_smarty_tpl->getSubTemplate ('modulos/tienda_i/carrito.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<hr />
<?php } elseif ($_smarty_tpl->tpl_vars['get_']->value['preg']=='pagar') {?>
<?php if ($_smarty_tpl->tpl_vars['varType']->value=='pay') {?>
<?php if ($_smarty_tpl->tpl_vars['postPaga']->value&&$_smarty_tpl->tpl_vars['postPaga']->value=='kklk') {?>

<form name='formTpv' method='post' action='https://www.sandbox.paypal.com/cgi-bin/webscr'>
<center style="margin: 174px 0 0 0;">
<h2>Conectado con paypal...</h2>
</center>
<div style="TdtsKG dsnone"><div>
<input name="cmd" type="hidden" value="_cart"> 
<input name="upload" type="hidden" value="1">
<input name="business" type="hidden" value="paypal@wortit.net">
<input name="shopping_url" type="hidden" value="http://localhost/varios/paypal/carro/productos.php">
<input name="currency_code" type="hidden" value="USD"> <!-- EUR -->
<input name="return" type="hidden" value="http://localhost/varios/paypal/carro/exito.php">
<input type='hidden' name='cancel_return' value='http://localhost/varios/paypal/carrp/errorPaypal.php'>
<input name="notify_url" type="hidden" value="http://localhost/varios/paypal/carro/paypalipn.php">
<input name="rm" type="hidden" value="2">
<?php echo $_smarty_tpl->tpl_vars['datesofset']->value;?>

</div>
<script type="text/javascript">
$(function(){
document.formTpv.submit();
})
</script>
</div>
<?php } else { ?>
<form method="POST" action="">
<center style="margin: 174px 0 0 0;">
<input type="hidden" name="hhtk" value="kklk">
<div class="color_gray size11" style="margin: 0 0 12px 0;">Total a pagar: <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['totPgrInPy'];?>
 USD</div>
<input type="submit" class="btn_bluebay color_white cursorP" style="padding: 16px 21px;width: 310px;margin: 0 auto;font-size: 30px;" value="Pagar con paypal" /></center>
</form>
<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['varType']->value=='worts') {?>
<center style="margin: 174px 0 0 0;">
<div class="color_gray size11" style="margin: 0 0 12px 0;">Total a pagar: <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['totPgrInWrts'];?>
 Worts</div>
<input type="hidden" name="hhtk" value="kklk">
<input type="submit" class="btn_bluebay color_white cursorP" style="padding: 16px 21px;width: 310px;margin: 0 auto;font-size: 30px;" value="Pagar con worts" /></center>
<?php } else { ?>
<h2>Indefinido :: <?php echo $_smarty_tpl->tpl_vars['varType']->value;?>
</h2>
<?php }?>
<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
