<h2 class="title">Estadisticas globales en {$tsConfig.name}</h2>
<p>En esta parte de la moderación de {$tsConfig.name} puedes llevar control de las estadisticas globales en {$tsConfig.name} y su baja y subida de actividad, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<h3 class="tres">ULTIMAS VISITAS</h3>
<canvas id="globalsStatics" width="600" height="400"></canvas>
<br><br>

<h3 class="tres">ULTIMAS ACTIVIDAD</h3>
<canvas id="actgloblastatics" class="dsnone" width="600" height="400"></canvas>

<div class="::sttr" role="sttr">
<div><script type="text/javascript" src="{$tsConfig.url}/js/code/Chart.js"></script>
<script type="text/javascript">{literal}
$(function(){
var options = { scaleBeginAtZero : true, scaleShowGridLines : true, scaleGridLineColor : "rgba(0,0,0,.05)", scaleGridLineWidth : 1, barShowStroke : true, barStrokeWidth : 2, barValueSpacing : 5, barDatasetSpacing : 1, legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>" }

var ctxglobalstats = $("#globalsStatics").get(0).getContext("2d");
var dataGlobals = {
    labels: [{/literal}{foreach from=$statics.visitas.data item=s}{if $s.data}"{$s.title}",{/if}{/foreach}{literal}],
    datasets: [{
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [{/literal}{foreach from=$statics.visitas.data item=tt}{if $tt.data}{foreach from=$tt.data item=skd}{$skd.total},{/foreach}{/if}{/foreach}{literal}]
        }, ]
};
var myLineChart = new Chart(ctxglobalstats).Line(dataGlobals, options);

var ctxglobalstatsact = $("#actgloblastatics").get(0).getContext("2d");
var dataGlobalsact = {
    labels: [{/literal}{foreach from=$statics.actividad.data item=s}{if $s.data}"{$s.title}",{/if}{/foreach}{literal}],
    datasets: [{
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [{/literal}{foreach from=$statics.actividad.data item=tt}{if $tt.data}{foreach from=$tt.data item=skd}{$skd.total},{/foreach}{/if}{/foreach}{literal}]
        }, ]
};
var myLineChartact = new Chart(ctxglobalstatsact).Line(dataGlobalsact, options);
})
{/literal}</script>
</div>
</div>