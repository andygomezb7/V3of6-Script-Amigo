<div class="all_news">
	<div class="home_news">
				<div id="error" class="home_new" style="display:block;">Comparte y encuentra contenido en <a href="http://www.wortit.net/new/">Wortit news</a>.</div>
				<div id="error" class="home_new" style="display:none;">Compra productos en la <a href="http://www.wortit.net/tienda/">Tienda Wortit</a>!</div>
				<div id="error" class="home_new" style="display:none;">Crea un grupo ahora en <a href="http://www.wortit.net/groups/">Grupos Wortit</a>!</div>
				<div id="error" class="home_new" style="display:none;">¿Que se celebra hoy?  Ve en <a href="http://www.wortit.net/p/calendario/">el calendario</a>!</div>
				<div id="error" class="home_new" style="display:none;">Conoce mas personas! en <a href="http://www.wortit.net/chat/">Chat Global</a>!</div>
				<div id="error" class="home_new" style="display:none;">Envia un mensaje privado, <a href="http://www.wortit.net/roombox/">¡Roombox!</a>!</div>
				<div id="error" class="home_new" style="display:none;">¿Buscas algo?, <a href="http://www.wortit.net/search/">ir al Buscador</a>!</div>
			</div>
</div>

<div class="ver_com_all">
    <div class="ver_com_temas clearfix">
        <h3 class="floatL">Ultimos Temas</h3>
        {if $tsCom.es_miembro && $tsCom.mi_rango > 2}<a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/agregar/" class="floatR input_button ibg">Nuevo tema</a>{/if}
    </div>
    <div id="result_temas">{include file='t.comus_ajax/c.pages_temas.tpl'}</div>    
</div>