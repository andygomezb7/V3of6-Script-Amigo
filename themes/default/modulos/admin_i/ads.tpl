<h2 class="title">Ads {$tsConfig.name}</h2>
<p>En esta parte de la administración de {$tsConfig.name} puedes administrar las campañas publicitarias de cada usuario y activarlas o desactivarlas, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>

<div>
<h1>Activos</h1>
<table width="100%" class="table">
<thead>
<th>Identificador</th>
<th>Nombre de la campaña</th>
<th>Usuario</th>
<th>Info</th>
<th>Creación</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$adsquery.activos item=ad}
<tr id="doto_ad_{$ad.au_id}">
<td>{$ad.au_id}</td>
<td>{$ad.au_name}</td>
<td>{$ad.usuario_nombre} [{$ad.ua_user}]</td>
<td>{if $ad.au_type_camp == 1}Anuncio{elseif $ad.au_type_camp == 2}Campaña{else}indefinido{/if}, {if $ad.au_type == 1}display{elseif $ad.au_type == 2}Texto{else}Indefinido{/if}</td>
<td>{$ad.au_hace|hace}</td>
<td>
<a title="Activar" style="display:block;width:23px;height:23px;background:green;" class="floatL ejtDc" data-of="{$ad.au_id}" data-ofis="Active"></a>
<a title="Desactivar" style="display:block;width:23px;height:23px;background:red;margin: 0 0 0 4px;" class="floatL ejtDc" data-of="{$ad.au_id}" data-ofis="Outive"></a>
</td>
</tr>
{/foreach}
</tbody>
</table>

<br>

<h1>Incativos</h1>
<table width="100%" class="table">
<thead>
<th>Identificador</th>
<th>Nombre de la campaña</th>
<th>Usuario</th>
<th>Info</th>
<th>Creación</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$adsquery.incativos item=ads}
<tr id="doto_ad_{$ads.au_id}">
<td>{$ad.au_id}</td>
<td>{$ads.au_name}</td>
<td>{$ads.usuario_nombre} [{$ads.ua_user}]</td>
<td>{if $ads.au_type_camp == 1}Anuncio{elseif $ads.au_type_camp == 2}Campaña{else}indefinido{/if}, {if $ads.au_type == 1}display{elseif $ads.au_type == 2}Texto{else}Indefinido{/if}</td>
<td>{$ad.au_hace|hace}</td>
<td>
<a title="Activar" style="display:block;width:23px;height:23px;background:green;" class="floatL ejtDc" data-of="{$ads.au_id}" data-ofis="Active"></a>
<a title="Desactivar" style="display:block;width:23px;height:23px;background:red;margin: 0 0 0 4px;" class="floatL ejtDc" data-of="{$ads.au_id}" data-ofis="Outive"></a>
</td>
{/foreach}
</tbody>
</table>

<div class="::sttr" role="sttr">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css">
<script type="text/javascript">{literal}
var adsActions = {
setOf: function(i, act, OF) {
OF.css({'opacity':'0.3'});
$.post(global_data.url+'/ajax/admin-adsOf.php', {'iof':i,'actrn':act}, function(h){
OF.css({'opacity':'1'}); if(h.charAt(1) == 1){
$('#doto_ad_'+i).css({'border':'1px solid #CCCCCC'});
}else{ mydialog.alert('Aviso', '<div id="error_flat">'+h.substring(3)+'</div>'); }
});
}
}
$(function(){
$('.ejtDc').click(function(){ adsActions.setOf($(this).attr('data-of'), $(this).attr('data-ofis'), $(this)); });
})
{/literal}</script>
</div>
</div>