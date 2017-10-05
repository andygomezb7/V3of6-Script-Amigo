<div class="rftl_ads_ss floatL">
<div id="error_flat">Nuestro sistema de publicidad esta en version <b class="color_red">BETA</b>, Cualquier problema no dudes en reportarlo en la parte inferior de nuestro sitio.<br />Muchas gracias.</div>
</div>
<div class="fltLf_ads_ss floatL">
<div class="tablecont_ads_view">
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<tr>
<th>Nombre</th>
<th>Identificador</th>
<th>Tipo</th>
<th>Estado</th>
<th>Resumen</th>
<th>Fecha</th>
</tr>
</thead>
<tbody>
{foreach from=$anun item=a}
<tr>
<td>
<a href="{$tsConfig.url}/int/ads/informe/?adspage=pub_{$a.au_hace}_{$a.au_id}" class="qtip" title="Ver informe">{$a.au_name}</a><br />
<div {if $a.au_type_camp == 2}style="text-align:-webkit-left;">
<a href="#codeTo_-pub_{$a.au_hace}_{$a.au_id}" onclick="loadincogt.set({$a.au_id}, '{$a.au_key}', '{$a.au_hace}', '{$a.au_dimensiones}');" class="floatL">Obtener codigo</a>
<div style="padding:0px 7px;" class="floatL">|</div>{else}>{/if}
<a href="{$tsConfig.url}/int/ads/informe/?adspage=pub_{$a.au_hace}_{$a.au_id}" {if $a.au_type_camp == 2}class="floatL"{/if}>Ver informe</a>
</div>
</td>
<td>{$a.au_hace}</td>
<td>{if $a.au_type_camp == 1}<a class="qtip" title="<span>Anuncio pagado.</span><br />Obtener trafico atravez de este anuncio.">Anuncio</a>{elseif $a.au_type_camp == 2}<a class="qtip" title="<span>Anuncio en mi pagina o blog.</span><br />Mostrar anuncio en mi pagina web/blog.">Campaña</a>{else}Indefinido{/if}</td>
<td>{$a.state}</td>
<td>{$a.tipo},<br />{$a.dimen}</td>
<td>{if $a.au_type_camp == 1}Finaliza: <b>{$a.au_date_two|date_format}</b>{elseif $a.au_type_camp == 2}Creado: <b>{$a.au_date_one|date_format}</b>{else}Indefinido{/if}</td>
</tr>
{/foreach}
</tbody>
</table>
</div>
<div class="::contnts_biochek:_sd1">
<div><div></div><div><div>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_1.css" />
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/cntn_ads1.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/myadspage.js"></script>
</div></div></div>
</div>
</div>