<h2 class="title">Rangos en {$tsConfig.name}</h2>
<p>En esta parte de la administración de {$tsConfig.name} puedes administrar todos los rangos: eliminar, editar y agregar rangos. Controlar sus acceso a cada pagina y datos especiales, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<h3 clas="tres">Lista de rangos (totales = {$rangos.num}) <a class="bg_green_3d btn color_white" onclick="ranckn.edit(0, 1, 'add');">Crear rango</a></h3>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Nombre</th>
<th>Color</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$rangos.array item=r}
<tr>
<td>{$r.id_rango}</td>
<td>{$r.name}</td>
<td><span style="color:{$r.color};">{$r.color}</span></td>
<td>
<a onclick="ranckn.edit({$r.id_rango}, 1, 'editar');" title="Editar"><img src="{$tsConfig.url}/images/icons/do/editar.png"></a>
</td>
</tr>
{/foreach}
</tbody>
</table>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css">
<script type="text/javascript" src="{$tsConfig.url}/js/admod/rangs_ckn.js"></script>
</div>
</div>