<div class="cntn_adsmypage">
<div class="obj_cnt_ddso">
{* INFORME DE ANUNCIOS *}
{* INFORME DE CAMPAÑAS *}
{if $tsInfoA.au_type_camp == 2 or $tsInfoA.au_type_camp == 1}
<div class="cntn_ddso_cncn">

<h2 style="text-align: -webkit-center;margin: 8px 0px 0px 0px;font-weight: normal;">
Informe: {$tsInfoA.au_name}</h2>
<div class="floatR"><a class="btn_green btn color_white rcrd_pgds_h">Recorrido</a></div>
<div class="size11 color_gray" style="text-align: -webkit-center;margin: 6px 0px 0px 0px;"><span class="rdrd_info1 clearfix" style="padding: 2px 3px;background:#FFFFFF;">Las estadisticas no estan en vivo, puede que estas estadisticas no sean exactas.</span>
{* {if $tsInfoA.au_type_camp == 1} *}
<span class="clearfix">Monto total del mes {if $tsInfoA.au_type_camp == 1}a pagar{else}a recibir{/if}: <b>{$pago}</b> WRTS</span>
{* {/if} *}
</div>
<div class="ttl_m" style="padding: 6px 0px;"></div>

<div class="rlst">
<div class="rlst_tt"><h3>Clics en los ultimos dias</h3></div>
<div class="rlst_cnt">
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table txtinfot2">
<thead>
<th>Tiempo</th>
<th>Clics</th>
<th>Fecha</th>
</thead>
<tbody>{if $stat.data}
{foreach from=$stat.data item=ad}
{if $ad.data}<tr>
<td class="th">{$ad.title}</td>
{foreach from=$ad.data item=as}
<td>{$as.ads_total}</td>
<td>{$as.hace|hace}</td>
{/foreach}
</tr>{/if}
{/foreach}{else}No hay registro{/if}
</tbody>
</table>
</div>
<div class="rlst_right">
<div id="stat_1" class="floatL" style="width:97%;height: 326px; margin: 0 auto"></div>
</div>
</div>

<div class="rlst">
<div class="rlst_tt"><h3>Navegadores</h3></div>
<div class="rlst_cnt">
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<th>Navegador</th>
<th>Clics</th>
<th>Fecha</th>
</thead>
<tbody>
{foreach from=$stat.nav.data item=af}
{if $af.data}<tr>
<td class="th">{$af.title}</td>
{foreach from=$af.data item=afd}
<td>{$afd.ads_total}</td>
<td>{$afd.hace|hace}</td>
{/foreach}
</tr>{/if}
{/foreach}
</tbody>
</table>
</div>
<div class="rlst_right">
<div id="stat_2" class="floatL" style="width:97%;height: 326px; margin: 0 auto"></div>
</div>
</div>

<div class="rlst">
<div class="rlst_tt"><h3>Sistema operativo</h3></div>
<div class="rlst_cnt">
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<th>Sistema</th>
<th>Clics</th>
<th>Fecha</th>
</thead>
<tbody>
{foreach from=$stat.os.data item=af}
{if $af.data}<tr>
<td class="th">{$af.title}</td>
{foreach from=$af.data item=afd}
<td>{$afd.ads_total}</td>
<td>{$afd.hace|hace}</td>
{/foreach}
</tr>{/if}
{/foreach}
</tbody>
</table>
</div>
<div class="rlst_right">
<div id="stat_3" class="floatL" style="width:97%;height: 326px; margin: 0 auto"></div>
</div>
</div>

</div>
<div class="::sstr_ddos_::ssd">
<div><div><div></div><div></div></div><div><div></div><div>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css" />
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/adsmyp_ddso.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/adsmyp_ddso.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/ttr/ads_pg_h.js"></script>
<script type="text/javascript">{literal}
$(function () {
$('#stat_1').highcharts({ chart: { type: 'column' }, title: { text: 'Clics en tu anuncio los ultimos dias' },
subtitle: { text: '' },xAxis: {
categories: [{/literal}{foreach from=$stat.data item=ad}{if $ad.data}'{$ad.title}',{/if}{/foreach}{literal}] },
yAxis: { min: 0, title: { text: 'Clics los ultimos dias' } },
tooltip: {
headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:.1f} clicks</b></td></tr>',
footerFormat: '</table>', shared: true, useHTML: true },
plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
series: [{ name: 'Clics',
data: [{/literal}{foreach from=$stat.data item=ad}{if $ad.data}{foreach from=$ad.data item=as}{if !$as.ads_total}0{else}{$as.ads_total}{/if},{/foreach}{/if}{/foreach}{literal}] }] 
 });  $('#stat_2').highcharts({ chart: { plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false }, title: { text: 'Navegadores' }, tooltip: { pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' }, plotOptions: { pie: { allowPointSelect: true, cursor: 'pointer', dataLabels: { enabled: false }, showInLegend: true } },
series: [{ type: 'pie', name: 'Visitas', data: [ /*{ name: 'Chrome', y: 12.8, sliced: true, selected: true },*/
{/literal}{foreach from=$stat.nav.data item=af}{if $af.data}['{$af.title}', {foreach from=$af.data item=afd}{$afd.ads_total}],{/foreach}{/if}{/foreach}
{literal}
] }] }); $('#stat_3').highcharts({ chart: { plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false }, title: { text: 'Sistemas operativos' }, tooltip: { pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' }, plotOptions: { pie: { allowPointSelect: true, cursor: 'pointer', dataLabels: { enabled: false }, showInLegend: true } },
series: [{ type: 'pie', name: 'Visitas', data: [ /*{ name: 'Chrome', y: 12.8, sliced: true, selected: true },*/
{/literal}{foreach from=$stat.os.data item=af}{if $af.data}['{$af.title}', {foreach from=$af.data item=afd}{$afd.ads_total}],{/foreach}{/if}{/foreach}
{literal}
] }] });
});
{/literal}</script>
</div></div></div>
</div>
{/if}
</div>
</div>