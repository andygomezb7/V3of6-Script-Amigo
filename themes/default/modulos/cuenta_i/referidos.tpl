{if $referidos}
<table width="100%" class="table" style="border:0;margin:0;">
<thead>
<th>Nick</th>
<th>Nombre completo</th>
<th>Registro</th>
</thead>
<tbody>
{foreach from=$referidos item=h}
<tr>
  <td>{$h.usuario_nombre}</td>
  <td>{$h.name_original} {$h.ap_original}</td>
  <td>{$h.identi|hace}</td>
</tr>
{/foreach}
</tbody>
</table>
{else}<div id="error_flat">No tienes referidos aún.</div>{/if}