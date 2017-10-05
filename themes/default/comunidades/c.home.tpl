<div class="contforum" style="background: #FFFFFF;">

<div class="all_news">
<div class="home_news" style="margin: 0px auto;
width: 83%;">   
                <div id="error" class="home_new" style="display:block;">Bienvenido al <b>foro Wortit</b></div>
				<div id="error" class="home_new" style="display:none;">Comparte y encuentra contenido en <a href="http://www.wortit.net/new/">Wortit news</a>.</div>
				<div id="error" class="home_new" style="display:none;">Compra productos en la <a href="http://www.wortit.net/tienda/">Tienda Wortit</a>!</div>
				<div id="error" class="home_new" style="display:none;">Crea un grupo ahora en <a href="http://www.wortit.net/groups/">Grupos Wortit</a>!</div>
				<div id="error" class="home_new" style="display:none;">¿Que se celebra hoy?  Ve en <a href="http://www.wortit.net/p/calendario/">el calendario</a>!</div>
				<div id="error" class="home_new" style="display:none;">Conoce mas personas! en <a href="http://www.wortit.net/chat/">Chat Global</a>!</div>
				<div id="error" class="home_new" style="display:none;">Envia un mensaje privado, <a href="http://www.wortit.net/roombox/">¡Roombox!</a>!</div>
				<div id="error" class="home_new" style="display:none;">¿Buscas algo?, <a href="http://www.wortit.net/search/">ir al Buscador</a>!</div>
			</div>
</div>

{if $_SESSION}
<div class="headerforum" style="display:none;">
<div id="floatL"><img src="{$u.w_avatar}"/> <span><b>{$u.name_original} {$u.ap_original}</b> <br>{$u.uu_posts} Temas/Notas</span></div>

</div>
{/if}

<div class="contentfr">

<div class="menus"><ul>
<li><a href="{$tsConfig.url}/foro/">Recientes</a></li> 
<li><a href="{$tsConfig.url}/foro/crear/">Nuevo</a></li> 
<li><a href="{$tsConfig.url}/foro/dir/">Filtros</a></li>
<li><a href="{$tsConfig.url}/foro/mod-history/">Historial</a></li>
<li><a href="{$tsConfig.url}/foro/borradores/">Borradores</a></li>
</ul>
</div>
<div class="sumenfr">
<ul>
<li><a href="{$tsConfig.url}/foro/">Inicio</a></li>
<li><a href="{$tsConfig.url}/foro/mis-foros/">Mis Foros</a></li>
<li><a href="{$tsConfig.url}/foro/favoritos/">Favoritos</a></li>
</ul>
</div>

<div style="width: 100%;margin: 12px auto 0px auto;overflow: hidden;">
<!---- FOROS ---->

                            {if $ultCats}
                            {foreach from=$ultCats.data item=k key=i}

<div class="ultfor"><div class="titlul"><h2>{$k.c_nombre}</h2> <h2 id="floatR" style="width: 41%;">Ultimo Tema</h2></div>

{if $k.cats}
{foreach from=$k.cats item=p}
<li style="background-image: url({$tsConfig.url}/images/com/{$k.c_img});">
<a href="{$tsConfig.direccion_url}/foro/{$p.c_nombre_corto}/" style="float: left;line-height: 10px;" title="{$p.c_nombre}"><h3 style="font-size: 14px;">{$p.c_nombre|truncate:16}</h3></a>
<div id="options">
<span><b>{$p.statics.temas}</b> Temas <br> <b>{$p.statics.respuestas}</b> Comentarios</span>
<div id="postult">
<img src="{$p.ultPost.w_avatar}" style="width:50px;height:50px;"/>
<a href="{$tsConfig.direccion_url}/foro/{$p.ultPost.c_nombre_corto}/{$p.ultPost.t_id}/{$p.ultPost.t_titulo|seo}.html"><h2 style="margin: -45px 0px 5px 59px;font-size: 12px;" title="{$p.ultPost.t_titulo}">{$p.ultPost.t_titulo|truncate:23}</h2></a>
<span style="margin: -5px 0px 0px 59px;font-size: 11px;">Por <b style="font-weight:300;cursor:pointer;color:#5b7d64;">{$p.ultPost.usuario_nombre}</b><br> {$p.ultPost.t_fecha|hace}</span>
</div>
</div>
</li>
{/foreach}
{else}
<div class="emptyData">No hay Foros aqu&iacute;</div>
{/if}

</div>

                            {/foreach}
                            {else}
                            <li class="emptyData">No hay Temas aqu&iacute;</li>
                            {/if}

<!---- FIN FOROS ---->
</div>

</div>
</div>