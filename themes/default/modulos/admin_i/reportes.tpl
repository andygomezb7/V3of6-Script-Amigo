<h2 class="title">Panel de reportes</h2>
<p>En esta parte de la administración de {$tsConfig.name} puedes administrar los reportes que se hacen en la parte inferior de la pagina.</p>
<br><br>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Usuario</th>
<th>Titulo</th>
<th>Email</th>
<th>Descripci&oacute;n</th>
<th>Fecha</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$bugs item=d}
{if $d.b_id}<tr>
<td>{$d.b_id}</td>
<td>{$d.b_userr}</td>
<td>{$d.b_title}</td>
<td>{$d.b_email}</td>
<td>{$d.b_desc}</td>
<td>{$d.b_date|hace}</td>
<th><a href="{$tsConfig.url}/roombox/{$d.user.usuario_nombre}" target="_blank">Resp.</a></th>
</tr>{/if}
{/foreach}
</tbody>
</table>
<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css"></div>
</div>