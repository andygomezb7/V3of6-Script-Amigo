<div id="error_flat" class="blue_flat"><img src="{$tsConfig.url}/images/icons/info.png"/> Las estadisticas estaran listas en unos dias, mientras tu y todos los registrados en Wortit, generen contenido y actividad.<br>A generar contenido!</div>
<!---<div class="u_account_stats">
<div>
<div><script type="text/javascript" src="{$tsConfig.url}/js/code/Chart.js"></script><div>
<script type="text/javascript">{literal}
var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
var barChartData = {
labels : [{/literal}{foreach from=$stat item=fdf}"{$fdf.title}",{/foreach}{literal}],
datasets : [{
fillColor : "rgba(220,220,220,0.5)",
strokeColor : "rgba(220,220,220,0.8)",
highlightFill: "rgba(220,220,220,0.75)",
highlightStroke: "rgba(220,220,220,1)",
data : [{/literal}{foreach from=$stat item=kk}{foreach from=$kk.data item=fd}{$fd.total},{/foreach}{/foreach}{literal}] }, {
fillColor : "rgba(151,187,205,0.5)",
strokeColor : "rgba(151,187,205,0.8)",
highlightFill : "rgba(151,187,205,0.75)",
highlightStroke : "rgba(151,187,205,1)",
data : [{/literal}{foreach from=$stat item=s}{foreach from=$s.data item=f}{$f.total},{/foreach}{/foreach}{literal}] }
]
}

window.onload = function(){
var ctx = document.getElementById("bworts").getContext("2d");
window.myBar = new Chart(ctx).Bar(barChartData, {
responsive : true
});
}
{/literal}</script>
</div></div>
</div>
<div class="u_accound_count">
<div><canvas id="bworts" height="450" width="600"></canvas></div>
</div>
</div>--->