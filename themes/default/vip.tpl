{include file='includes/main_header.tpl'}
{if $_SESSION && $u.rango_vip == 0 & $u.user_vip == 1}
<div id="pres-vip" style="background: #EEE url('{$tsConfig.url}/images/bg/vip-banner.png');height:148px;"><h1></h1>
<img id="viper-us" class="zoomIt" style="margin-top: -41px;" src="{$u.w_avatar}"></img>
</div>
<div id="menuvipvip" class="dsnone">
<ul>
<li><a href="{$tsConfig.url}/new/">News</a></li>
<li><a href="{$tsConfig.url}/new/agregar/">Agregar nota</a></li>
<li><a href="{$tsConfig.url}/foro/">Foro</a></li>
<li><a href="{$tsConfig.url}/chat/">Chat global</a></li>
<li><a href="{$tsConfig.url}/p/calendario/">Calendario</a></li>
</ul>
</div>
<div id="users-vip">{include file='modulos/vip_i/m.users_vip.tpl'}</div>
<div id="vip-v">
   <div class="last-vip">
   {include file='modulos/vip_i/last_posts_vip.tpl'}
   {$chat}

   </div>
   <div class="lat-vip">
   {include file='modulos/vip_i/m.estadisticas_vip.tpl'}
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
   {include file='modulos/vip_i/m.comentarios_vip.tpl'}
   <br class="space"/>
   {include file='modulos/vip_i/m.top_posts_vip.tpl'}
   <br class="space"/>
   {include file='modulos/vip_i/m.top_users_vip.tpl'}
   <br class="space"/>
   </div>
<div class="::sttr" role="sttr">
<div><script type="text/javascript" src="{$tsConfig.url}/js/modo/not_actns.js"></script></div>
</div>
</div>
{else}
<div class="emptyData">Secci&oacute;n VIP, Consulta las condiciones de  con el administrador o due&ntilde;o de la p&aacute;gina </div>
{/if}             
{include file='includes/main_footer.tpl'}