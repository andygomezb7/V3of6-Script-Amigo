<h2 class="title">Panel de denuncias</h2>
<p>En esta parte de la administración de {$tsConfig.name} Puedes administrar las denuncias que se hacen en cada sección de {$tsConfig.name}, Administra y manten el control de cada denuncia, ya que cada denuncia se deve tomar en cuenta y tomar conversación con el denunciante.</p>
<br><br>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Usuario</th>
<th>Tipo</th>
<th>Razón</th>
<th>Descripci&oacute;n</th>
<th>Fecha</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$denuncias item=d}
{if $d.did}<tr>
<td>{$d.did}</td>
<td>{$d.user.usuario_nombre}</td>
<td>{$d.type}</td>
<td>{$d.razon}</td>
<td>{$d.d_extra}</td>
<td>{$d.d_date|hace}</td>
<th><a href="{$tsConfig.url}/roombox/{$d.user.usuario_nombre}" target="_blank">Resp.</a></th>
</tr>{/if}
{/foreach}
</tbody>
</table>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css"></div>
</div>