<h2 class="title">Logros en {$tsConfig.name}</h2>
<p>En esta parte de la moderación de {$tsConfig.name} puedes administrar los logros que los usuarios podran obtener en sus perfiles, el ego de cada perfil, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<h3 class="tres">Logros (totales = {$medals.num}) <a class="bg_green_3d btn color_white DodoCreat" >Crear logro</a></h3><br>
<table class="table" width="100%">
<thead>
<th>Identificado</th>
<th>Titulo</th>
<th>imagen</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$medals.array item=m}
<tr>
<td>{$m.m_id}</td>
<td><a class="qtip" title="{$m.m_date|hace}">{$m.m_title}</a></td>
<td><img class="qtip" title="{$m.m_desc}" src="{$tsConfig.url}/images/static/options/icons/medals/{$m.m_image}" style="width:32px;height:32px;"/></td>
<td><a title="editar" class="dodoMd" data-id="{$m.m_id}"><img src="{$tsConfig.url}/images/icons/do/editar.png"></a></td>
</tr>
{/foreach}
</tbody>
</table>
<div class="::sttr" role="stt"><div>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css" />
<script type="text/javascript" src="{$tsConfig.url}/js/admode/log_attr.js"></script>
</div></div>