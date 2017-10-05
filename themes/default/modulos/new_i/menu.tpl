{if $apgets == 'nota'}
<div class="headr_nt">
<div class="tp_hdr_nt">
<div class="floatL"><span>¿Eres nuevo?</span> <a href="{$tsConfig.url}/registro">Registrate</a> <span>o</span> <a href="{$tsConfig.url}/login">Inicia sesión</a></div>
<div class="floatR menu_hrd_nt">
<ul>
<li><a class="notifiDialog" title="notificaciones"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a><div class="modal-dialog" id="dialog-notifications" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Notificaciones</h3><div class="list" id="notifications-list"></div><a class="view-more" href="http://localhost/w//notificaciones/">Ver todas</a></div></div></li>
<li><a class="messagesDialog" title="Mensajes privados"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a>
<div class="modal-dialog" id="dialog-messages" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Mensajes</h3><div class="list" id="notifications-list"></div><a class="view-more" href="http://localhost/w//notificaciones/">Ver todas</a></div></div>
</li>
<li>
 <a href="{$tsConfig.url}/{$u.usuario_nombre}/" class="vctip" title="Ir a mi perfil"><img src="{$tsConfig.url}/thumb/img/22/22/?file={$u.w_avatar}" style="border-radius: 60px;-webkit-border-radius: 60px;-moz-border-radius: 60px;" width="22" height="22" /></a>
</li>
</ul>
</div>
</div>
<div class="contnt_hdr_nt hidden">
<div class="lg_hdr_nt floatL"></div>
<div class="srch_hdr_nt floatL">
<div class="cntn_search">
<form action="{$tsConfig.url}/search/" method="GET">
<input name="q" class="inpt_t_nt floatL" placeholder="Busca un articulo...">
<input type="hidden" name="t" value="new">
<input type="submit" name="search" class="btn_search floatL" value="Buscar en la web"/>
</form>
</div>
</div>
</div>
</div>
{/if}
<div class="menunew">
<ul>
<li><a href="{$tsConfig.url}/notas/">Home</a></li>
<li><a href="{$tsConfig.url}/search/?q=a&t=notas">Buscar</a></li>
<li><a href="{$tsConfig.url}/int/tops/?preg=notas">Tops</a></li>
<li><a href="#">Usuario</a>
{if $_SESSION}<ol>
<li class="mrgnleft"><a href="{$tsConfig.url}/notas/?ap=fav">Favoritos</a></li>
<li><a href="{$tsConfig.url}/notas/?ap=agregar">Agregar nota</a></li>
</ol>{/if}
</li>
</ul>
</div>