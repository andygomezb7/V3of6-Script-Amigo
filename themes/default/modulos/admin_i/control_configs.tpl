<h2 class="title">Control de configuraciones</h2>
<p>En esta parte de la administración de {$tsConfig.name} podras administrar las configuraciones globales que controlan {$tsConfig.name} y su contenido HTML o cuerpo de toda la pagina.</p>
<br><br>
<div class="control_configs_1 stato">
<h3 class="tres">Definiciones</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Hashtag(#) del dia</td> <td><input type="text" name="hashtag" placeholder="#WortitHome" value="{$tsConfig.hashtag}"/></td></tr>
</tbody>
</table>
<h3 class="tres">Nombres</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Titulo de la pagina</td> <td><input type="text" name="titulo" placeholder="Nombre" value="{$tsConfig.name}"/></td></tr>
<tr><td>Nombre de grupos</td> <td><input type="text" name="gru_name" placeholder="{$tsConfig.name} Grupos" value="{$tsConfig.name_grupos}"/></td></tr>
<tr><td>Lema o frase de la pagina</td> <td><input type="text" name="lema" placeholder="Interactua con los demas" value="{$tsConfig.lema}"/></td></tr>
<tr><td>Logo</td> <td><input type="text" name="logo" placeholder="http://" value="{$tsConfig.logo}"/></td></tr>
</tbody>
</table>
<h3 class="tres">Direcciones urls</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Direccion url (enlace)</td> <td><input type="text" name="url" placeholder="http://" value="{$tsConfig.url}"/></td></tr>
<tr><td>Direccion de grupos</td> <td><input type="text" name="gru_url" placeholder="{$tsConfig.url}/grupos/" value="{$tsConfig.url_grupos}"/></td></tr>
<tr><td>Dirección de esta administración</td> <td><input type="text" name="ad_url" placeholder="http://" value="{if !$tsConfig.url_admin}{$tsConfig.url}/int/incog-admin/{else}{$tsConfig.url_admin}{/if}"></td></tr>
</tbody>
</table>
<h3 class="tres">Estados</h3>
<table width="100%" class="table">
<tbody>
<tr><td>Pagina en mantenimiento</td> 
<td><select name="mant">
<option>¿Estado de la pagina?</option>
<option value="1" {if $tsConfig.mantenimiento == 1}selected="selected"{/if}>Activa</option>
<option value="2" {if $tsConfig.mantenimiento == 2}selected="selected"{/if}>En mantenimiento.</option></select></td></tr>
<tr><td>Texto en mantenimiento</td> <td><input type="text" name="mntx" placeholder="La pagina esta en matenimiento" value="{$tsConfig.mant_text}"></td></tr>
</tbody>
</table>
<h3 class="tres">Pagos</h3>
<table width="100%" class="table">
<tbody>
<tr><td>(ADS) pago por click</td> <td><input type="text" name="advertad" placeholder="0.5" value="{$tsConfig.ads_wort_adv}"/></td></tr>
</tbody>
</table>
<br/><br/>
<div class="clearfix"><div class="floatL dsnone Load_ControlConfigs"><i class="load floatL" style="width:32px;height:32px;"></i></div><input type="button" class="bg_green_3d btn color_white control_configs" value="Guardar" ></div>
</div>
<div class="sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css" />
<style type="text/css">{literal}
input[type=text]{width: 227px;}
{/literal}</style>
</div>
</div>