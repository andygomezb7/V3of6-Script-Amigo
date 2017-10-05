{include file='includes/main_header.tpl'}
<div class="tienda">
<header>
<div class="LfT floatL">
<ul>
<li style="background: rgb(219, 46, 46);"><a href="{$tsConfig.url}/int/tienda/"><div class="lsf">web</div>Bazar</a></li>
<li style="background: rgb(9, 202, 48);"><a href="{$tsConfig.url}/int/tienda/?preg=ofert"><div class="lsf">bell</div>Ofertas</a></li>
<li style="background: rgb(51, 98, 245);"><a href="{$tsConfig.url}/int/tienda/?preg=us"><div class="lsf">globe</div>Usuario</a></li>
<li style="background: rgb(245, 121, 51);"><a href="{$tsConfig.url}/int/tienda/?preg=car"><div class="lsf">shopping</div>Carrito</a></li>
</ul>
</div>
<div class="riT floatR" style="top: 24px;right: 177px;width: 90px;"><div class="CrtLl" style="text-align: -webkit-center;"><div class="NiM color_gray"><a href="{$tsConfig.url}/int/tienda/?preg=vender">Vender</a></div></div></div>
<div class="riT floatR" style="top:5px;"><div class="CrtLl"><div class="cntdd floatL">{$u.worts}</div><div class="NiM floatR color_gray">Worts</div></div></div>
<div class="riT floatR"><div class="CrtLl prdCtsComplts"><div class="cntdd floatL">{$prodctsprcmpr}</div><div class="NiM floatR color_gray">Productos</div></div></div>
</header>
<div id="right">
{if !$get_.preg}
{include file='modulos/tienda_i/carrito.tpl'}
{elseif $get_.preg == 'ofert'}
<h1>Ofertas</h1>
{include file='modulos/tienda_i/carrito.tpl'}
{elseif $get_.preg == 'serv'}
servicios
{elseif $get_.preg == 'us'}
Uusaris
{elseif $get_.preg == 'car'}
<div class="clearfix hidden">
<div class="floatL" style="padding: 5px 10px;border: 1px solid #DDDDDD;width: 175px;margin: 0 0 7px 0;">
<div class="clearfix hidden"><u>Worts:</u> <b>{$totalapagar}</b> &nbsp; Worts</div> 
<div class="clearfix hidden"><u>Paypal:</u> <b>{$totalapagarPaypal}</b> &nbsp; USD</div>
</div> 

<a class="input_button ibg floatR pypgcnclr"><div class="lsf floatL">check</div> &nbsp; Pagar</a>
</div>
<hr />
{include file='modulos/tienda_i/carrito.tpl'}
<hr />
{elseif $get_.preg == 'pagar'}
{if $varType == 'pay'}
{if $postPaga && $postPaga == 'kklk'}
{* La dirección de llamada del formulario de pruebas es 
https://www.sandbox.paypal.com/cgi-bin/webscr 
pero al pasar a ventas reales deberemos indicar 
https://www.paypal.com/cgi-bin/webscr *}
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
{$datesofset}
</div>
<script type="text/javascript">
$(function(){
document.formTpv.submit();
})
</script>
</div>
{else}
<form method="POST" action="">
<center style="margin: 174px 0 0 0;">
<input type="hidden" name="hhtk" value="kklk">
<div class="color_gray size11" style="margin: 0 0 12px 0;">Total a pagar: {$_SESSION.totPgrInPy} USD</div>
<input type="submit" class="btn_bluebay color_white cursorP" style="padding: 16px 21px;width: 310px;margin: 0 auto;font-size: 30px;" value="Pagar con paypal" /></center>
</form>
{/if}
{elseif $varType == 'worts'}
<center style="margin: 174px 0 0 0;">
<div class="color_gray size11" style="margin: 0 0 12px 0;">Total a pagar: {$_SESSION.totPgrInWrts} Worts</div>
<input type="hidden" name="hhtk" value="kklk">
<input type="submit" class="btn_bluebay color_white cursorP" style="padding: 16px 21px;width: 310px;margin: 0 auto;font-size: 30px;" value="Pagar con worts" /></center>
{else}
<h2>Indefinido :: {$varType}</h2>
{/if}
{/if}
</div>
</div>
{include file='includes/main_footer.tpl'}