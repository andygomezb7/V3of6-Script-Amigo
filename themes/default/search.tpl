{include file='includes/main_header.tpl'}
<div class="search_i hidden">
<div class="search_i_content hidden clearfix">
<div class="search_i_l floatL iconbg"><h2 class="title">filtros</h2></div>
<div class="search_i_c floatL">
<div><form method="GET" action="{$tsConfig.url}/search/"><input type="text" name="q" placeholder="Buscar..." class="input_search"></form></div>
<div class="hidden iconbg"><h2 class="title">Resultados</h2>
	<div class="iotions results">
{if $q}
{if $result.num_rows == 1 || $result.num_rows > 1}
{if $type == 1}
{foreach from=$result item=q}
{if !$q.usuario_nombre}{else}
<div class="result">
<div class="hoverhackd">
<a class="wortip" uid="{$q.usuario_id}"><img src="{if $q.w_avatar == NULL}{$tsConfig.direccion_url}/images/avatar/group.png{else}{$q.w_avatar}{/if}"></a>
<div style="float: left;margin: -1px 0px 0px 6px;">
<a class="wortip" uid="{$q.usuario_id}" id="q" href="{$tsConfig.url}/{$q.usuario_nombre}/">{if $q.name_original && $q.ap_original}{$q.name_original} {$q.ap_original} ({$q.usuario_nombre}) {else} {$q.usuario_nombre} {/if}</a>
<div class="size11 floatL">{$q.p_opcion}</div>
<div class="size11">
<span>{$q.interacciones} Interacciones</span> - <span>{$q.notas} Noticias</span> - <span>{$q.temas} Temas</span>
</div>
</div>
</div>
</div>
{/if}
{/foreach}
{elseif $type == 2}
{foreach from=$result item=q}
{if !$q.t_titulo}{else}
<div class="result">
<div class="hoverhackd">
<a><img src="{$tsConfig.direccion_url}/images/com/{$q.c_img}"></a>
<div style="float: left;margin: -1px 0px 0px 6px;">
<i class="com_icon {$q.c_seo}" title="{$q.c_nombre}" style="vertical-align: top;"></i><a target="_blank" href="{$tsConfig.direccion_url}/foro/{$q.c_nombre_corto}/{$q.t_id}/{$q.t_titulo|seo}.html" id="q">{$q.t_titulo|truncate:80}</a>
<div class="size11 floatL">{$q.t_fecha|hace}</div>
<div class="size11">
<span>{$q.t_respuestas} Respuestas </span> - <span>{$q.t_votos_pos} Me gusta</span>
</div>
</div>
</div>
</div>
{/if}
{/foreach}

{elseif $type == 3}
{foreach from=$result item=q}
{if !$q.titulo}{else}
<div class="result">
<div class="hoverhackd">
<a><img src="{$q.banner}" id="sdknoteimg" /></a>
<div style="float: left;margin: -1px 0px 0px 6px;width: 87%;">
<a target="_blank" id="q" href="{$tsConfig.direccion_url}/notas/{$q.wdefined}/{$q.id}/{$q.post_wdefined}.html">{$q.titulo|truncate:60}</a>
<div style="overflow: hidden;float: left;clear: both;">
<div class="size11 floatL">{$q.hace|hace}</div>
<div class="size11">
<span>Por: {$q.usuario_nombre}</span> <span>{$q.visitas} Visitas </span>
</div>
</div>
</div>
</div>
</div>
{/if}
{/foreach}

{elseif $type == 4}
{foreach from=$result item=q}
{if !$q.j_title}{else}
<div class="result">
<div class="hoverhackd">
<a target="_blank" href="{$tsConfig.direccion_url}/juegos/{$q.juego_id}/{$q.j_title|seo}.html"><img src="{$q.j_imagen}"></a>
<div style="float: left;margin: -1px 0px 0px 6px;">
<a target="_blank" id="q" href="{$tsConfig.direccion_url}/juegos/{$q.juego_id}/{$q.j_title|seo}.html">{$q.j_title}</a>
<div class="size11 floatL">{$q.j_date|hace}</div>
<div class="size11">
<span>Por: <b class="wortip" uid="{$q.usuario_id}">{$q.usuario_nombre}</b></span> - <span>{$q.cat_title}</span>
</div>
</div>
</div>
</div>
{/if}
{/foreach}

{elseif $type == 5}
{foreach from=$result item=q}
{if !$q.usuario_nombre}{else}
<div class="post_1" id="rowsefwewrw_2" style="margin: 11px 0px !important; color: #94;width: 600px;text-align: -webkit-left;">
<div class="conhispph">
<div class="hostorycs">
<div id="hostoryub">
<div class="headpubhostory" style="width: 93.3% !important;">
<a href="#" onclick="" style="float: left;"><img src="{$tsConfig.url}/pages/scripts/thum.php?src={$q.w_avatar}&h=50&w=50" id="headpubavat"></a>
<div class="headconwname">
<a onclick="boxmuro2()" id="q" class="wortip" uid="1">{if $q.name_original == NULL || $q.p_original}{$q.usuario_nombre}{else}{$q.name_original} {$q.ap_original}{/if}</a>
<div style="font-size: 11px; width: 98%; overflow: hidden; font-weight: 100;">Compartio un estado.  </div>
<div style="font-weight: normal;font-size: 11px;color: #686767;">{$q.hace|hace}</div>
</div>
</div>

<div class="contbodypubna">
<div id="contyoubodyhe" style="width: 94% !important;">
<span id="q">{$q.texts}</span> <div style="margin-top: 10px;margin-bottom: 10px;text-align: -webkit-center;max-width: 100%;overflow: hidden;max-height: 370px;">
</div>
</div>

<div id="likNEknsa">
<div id="dfNELFkqeflsdf">
<div id="AnasALKANoMenctplus94"><i class="like"></i> <span>{$q.me_gusta}</span></div><div id="NanadknaMenctplus94"><i class="dislike"></i> <span>{$q.no_megusta}</span></div>
</div>
<div id="asdfnWEFNQlq">
{if $q.u_megusta >= 1}
<div id="AnasALKANoMenct94">
<span style="display:none;" id="loadingbw_{$q.id}"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort({$q.id}, 'false','pos');" style="color: #07F; font-weight: bold;">+Me gusta</a></div>
{else}
<div id="AnasALKANoMenct94">
<span style="display:none;" id="loadingbw_{$q.id}"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort({$q.id}, 'true','pos');">+Me gusta</a></div>
{/if}
{if $q.u_nomegusta >= 1}
<div id="NanadknaMenct94">
<span style="display:none;" id="loadingbw_{$q.id}"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort({$q.id}, 'false','neg')" style="color: #07F; font-weight: bold;">+No me gusta</a></div>
{else}
<div id="NanadknaMenct94">
<span style="display:none;" id="loadingbw_{$q.id}"><img src="http://i.imgur.com/RYEpUeD.gif" style="width: 15px;height: 15px;"></span>
<a onclick="hoverw.v_wort({$q.id}, 'true','neg')">+No me gusta</a></div>
{/if}
<div><a href="{$tsConfig.url}/{$q.usuario_nombre}/{$q.id}/" class="qtip" title="Ver Bwort">Ver Bwort</a></div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
{/if}
{/foreach}
{elseif $type == 6}
Esto es global
{else}
<div class="zerores"><span>Selecciona una opcion de busqueda...</span></div>
{/if}
{else $result.num_rows == '0' || $result.num_rows == ''}
<div class="zerores">No se encontraron resultados para <b>{$q}</b>, Prueba con otras palabras.</div>
{/if}
{else}
<div class="zerores"><span>Escribe las palabras clave de tu busqueda...</span></div>
{/if}

</div>
</div>
<div class="pags">{$result.pages}</div>
</div>
<div class="search_i_r floatL iconbg"><h2 class="title">gadgets</h2></div>
</div>
</div>
{include file='includes/main_footer.tpl'}