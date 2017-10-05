<h2 class="title">Usuarios en {$tsConfig.name}</h2>
<p>En esta parte de la moderación de {$tsConfig.name} puedes administrar el perfil de cada usuario, pero limitado a ciertos campos de su perfil ya que respetamos la privacidad y seguridad de cada perfil, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<table class="table" width="100%">
<thead>
<th>Identificador</th>
<th>Nombre</th>
<th>Nick</th>
<th>Registro</th>
<th>Ultima actividad</th>
<th>Acciones</th>
</thead>
<tbody>
{foreach from=$users.array item=u}
<tr>
<td>{$u.usuario_id}</td>
<td>{$u.name_original} {$u.ap_original}</td>
<td>{$u.usuario_nombre}</td>
<td>{$u.identi|hace}</td>
<td>{$u.active_ult|hace}</td>
<td><a title="Editar" onclick="adus.edit({$u.usuario_id}, 1)"><img src="{$tsConfig.url}/images/icons/do/editar.png" /></a></td>
</tr>
{/foreach}
</tbody>
</table>

{$users.pags}

<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/table_2.css" />
<script type="text/javascript" src="{$tsConfig.url}/js/admode/usr_rlr.js"></script>
<style type="text/css">{literal}
.pgbtn{display: block;
float: left;
padding: 6px 12px;
margin: 4px 0 0 0;
background: rgb(59, 213, 71);}
{/literal}</style>
</div>
</div>