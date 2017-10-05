{if $action == 'home' or $action == '' or !$action}
{if $tsRegis}<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<th>Nombre</th>
<th>Tipo de repositorio</th>
<th>Ubicación</th>
<th>Archivos</th>
</thead>
<tbody>
{foreach from=$tsRegis item=a}
<tr>
<td><a href="{$tsConfig.url}/int/codigo/p/proyecto-{$a.uc_g_ident}/">{$a.uc_name}</a></td>
<td>{$a.uc_a_type_reposit}</td>
<td>{$a.uc_a_location}</td>
<td>{$a.uc_a_archives}</td>
</tr>
{/foreach}
</tbody>
</table>{else}<div id="error_flat">No hay registro de archivos aún.</div>{/if}
{else}
{include file='modulos/notfound.tpl'}
{/if}