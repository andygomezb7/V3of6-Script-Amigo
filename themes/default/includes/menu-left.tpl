<div class="menu_left hidden" {if $tsPage == 'home' && $_SESSION}style="display:block;"{/if}>
<ol>
{if $_SESSION}<li><a><div><img src="{$u.w_avatar}" width="25" height="25" style="margin: 6px 8px -9px 0px;background: rgba(255, 255, 255, 0.22);padding: 2px;"> {$u.usuario_nombre}</div></a>
<ol>
<li><a href="{$tsConfig.url}/{$u.usuario_nombre}/"><div>Ir a mi perfil</div></a></li></li>
<li><a href="{$tsConfig.url}/int/cuenta/?preg=mi"><div>Configuración personal</div></a></li>
<li><a href="{$tsConfig.url}/int/cuenta/?preg=global&action=mi"><div>Configuración general</div></a></li>
<li><a href="{$tsConfig.url}/int/list/?preg=bloqs&action=mi"><div>Bloqueados</div></a></li>
<li><a href="{$tsConfig.url}/int/list/?preg=bw_fav"><div>Bworts Favoritos</div></a></li>
</ol>
</li>{/if}
<li><a href="{$tsConfig.url}/?bworts=true"><div>Ultimos Bworts</div></a></li>
<li><a href="{$tsConfig.url}/notas/"><div>Ultimas noticias</div></a></li>
<li><a href="{$tsConfig.url}/roombox/" class="otip" title="Mensajes privados"><div>Roombox</div></a></li>
<li><a href="{$tsConfig.url}/int/calendario/?preg=global"><div>Mi Calendario</div></a>
<ol>
<li><a href="{$tsConfig.url}/int/calendario/?pref=mi&preg=eventos"><div>Mis Eventos</div></a></li>
<li><a href="{$tsConfig.url}/int/calendario/?cumple=0&gevents=1"><div>Eventos De usuarios</div></a></li>
<li><a href="{$tsConfig.url}/int/calendario/?cumple=0&gevents=0&inter=1"><div>Eventos Interacionales</div></a></li>
<li><a href="{$tsConfig.url}/int/calendario/?cumple=0&gevents=0&nacion=1"><div>Eventos Nacionales</div></a></li>
<li><a href="{$tsConfig.url}/int/calendario/?cumple=1&gevents=0"><div>Cumpleaños</div></a></li>
</ol>
</li>
<li><a href="{$tsConfig.url}/int/apuntes/"><div>Mis Apuntes</div></a></li>
<li><a href="{$tsConfig.url}/int/aula/"><div>Mi aula</div></a>
<ol>
<li><a href="{$tsConfig.url}/int/aula/?list=true&pref=aula"><div>Aulas</div></a></li>
<li><a href="{$tsConfig.url}/int/aula/?list=true&pref=prof"><div>Profesores</div></a></li>
<li><a href="{$tsConfig.url}/int/aula/?list=true&pref=comp"><div>Compañeros</div></a></li>
</ol>
</li>
<li><a href="{$tsConfig.url}/soporte/"><div>Foros de soporte</div></a></li>
<li><a href="{$tsConfig.url}/foro/"><div>Foros interactivos</div></a></li>
<li><a href="{$tsConfig.url}/grupos/"><div>Grupos sociales</div></a></li>
<li><a href="{$tsConfig.url}/int/developer/?home"><div>Desarrollador</div></a>
<ol>
<li><a href="{$tsConfig.url}/int/developer/?pref=ext&preg=mi"><div>Mis extenciones</div></a></li>
<li><a href="{$tsConfig.url}/int/developer/?pref=top_ext&preg=mi"><div>Top extenciones</div></a></li>
<li><a href="{$tsConfig.url}/int/developer/?pref=list_ext&preg=mi"><div>Lista de extenciones</div></a></li>
</ol>
</li>
<li><a href="{$tsConfig.url_ads}/mostrar/?adspage=home"><div>Anuncios</div></a>
<ol>
<li><a class="otip" title="Crear campaña de anuncio" href="{$tsConfig.url_ads}/?adspage=crear&action=campaña"><div>Crear campaña</div></a></li>
<li><a href="{$tsConfig.url_ads}/anun/?adspage=crear" class="otip" title="Crear anuncio"><div>Crear anuncio</div></a></li>
<li><a class="otip" title="Anuncios" href="{$tsConfig.url_ads}/anuncios/?adspage=view"><div>Mis campañas</div></a></li>
<li><a href="{$tsConfig.url_ads}/mostrar/?adspage=estadisticas"><div>Estadisticas</div></a></li>
</ol>
</li>
</ol>
</div>