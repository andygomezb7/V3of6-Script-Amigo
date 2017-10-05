<div id="menuPrncpl">
<ul class="prncpl">
<li class="options_menu animate_margin_1s mnpr1"><a><span><img src="{$tsConfig.url}/images/static/media/icons/true/barra_T4.png"></span></a></li>
<li class="mnpr1 overmenu"><a href="{$tsConfig.url}"><span class="lsf">house</span> <span>Inicio</span></a></li>
<li class="mnpr1 overmenu"><a href="{$tsConfig.url}/foro/"><span class="lsf">group</span> <span>Foros</span></a></li>
<li class="mnpr1 overmenu"><a href="{$tsConfig.url}/new/"><span class="lsf">album</span> <span>Noticias</span></a></li>
<li class="mnpr1 overmenu"><a href="{$tsConfig.url}/soporte/wortit"><span class="lsf">help</span> <span>Ayuda</span></a></li>
<li class="mnpr1 overmenu">
<a {if $_SESSION}onclick="$('#searchmenuhel').toggle();"{else}href="{$tsConfig.url}/search/"{/if}><span class="lsf">search</span> <span>Buscar</span></a>
</li>
{if $_SESSION}<li class="mnpr1">
<a><span>
<div class="dsnone" id="searchmenuhel">
<form action="http://localhost/p/search/" method="GET" style="height: 50px;" class="vctip" title=""><div class="hidden formenusear"><div class="hidden cntfrmsear"><div class="hidden gohersear">
<input type="text" class="searchglobal clgoint" placeholder="Busca personas y contenido..." name="q" id="nofocus">
<select name="t" class="typesearching slrgosec floatL"><option value="users">users</option><option value="new">Notas</option><option value="temas">Temas</option><option value="bworts">Bworts</option></select>
<button type="submit" title="Busca personas, lugares y cosas" class="floatL inpsetarc"><span class="accessible_elem">Busca personas, lugares y cosas</span></button></div></div><div id="displayboxsearching"></div></div></form>
</div>
</span></a>
</li>{/if}
</ul>
<ul class="cnfgrcns">
{if $_SESSION}
<li class="mnpr1"><a class="notifiDialog"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a>
<div class="modal-dialog" id="dialog-notifications" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Notificaciones</h3><div class="list" id="notifications-list"></div><a class="view-more" href="{$tsConfig.url}/notificaciones/">Ver todas</a></div></div>
</li>
<li class="mnpr1"><a class="messagesDialog"><div id="notifi" style="display:none;">0</div><span class="width16"></span></a>
<div class="modal-dialog" id="dialog-messages" style="display: none;"><div class="rowdialog"></div><div class="modal-wrapper"><h3>Mensajes</h3><div class="list" id="notifications-list"></div><a class="view-more" href="{$tsConfig.url}/notificaciones/">Ver todas</a></div></div>
</li>
<li class="mnpr1"><a class="dropshow"><span class="width16"></span></a>
<div class="dropdown-w">
<div class="hidden pflat hover">
<div class="floatL"><img class="width32" src="{$u.w_avatar}"></div>
<div class="floatL pborder">
<div>{$u.usuario_nombre}</div>
<div class="size11"><a href="{$tsConfig.url}/int/cuenta/" style="height: 0px;">Editar tu perfil</a></div>
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
{else}
<li class="mnpr1"><a href="{$tsConfig.url}/registro"><span>Registrate</span></a></li>
<li class="mnpr1"><a href="{$tsConfig.url}/login?rd={$location}"><span>Inicia sesión</span></a></li>
{/if}
</ul>
</div>