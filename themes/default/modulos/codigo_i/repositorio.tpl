<div class="hrdCnfposnDlCARN SDKF_skek">
<div class="rspos_headr">
<div class="h1_Hdr_Onchange"><h2>{$tsICode.uc_name}</h2></div>
<div class="rspn_Hdr_OnChoge"><div class="lLii"><a onclick="cdg.arch.add('{$codepage}');" class="bg_green_3d btn color_white">¡SUBIR ARCHIVO!</a></div>
</div>
</div>
{if $tsArchivesCode}
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table" style="margin-bottom: 11px;">
<thead>
<th>SL</th>
<th>Nombre</th>
<th>Tamaño</th>
<th>Tipo de archivo</th>
<th>Ultima edición</th>
</thead>
<tbody>
{foreach from=$tsArchivesCode item=a}
<tr>
<td><i class="icons i32 qtip" title="Opciones..." onclick="mydialog.alert('Edicición De archivo #{$a.uc_a_ident}', '<a href='#'>Editar</a><br /><a href='#'>Borrar</a>');"></i></td>
<td><a href="{$tsConfig.url}/int/codigo/p/archivo-{$a.uc_g_ident}.cw">{$a.uc_a_name}</a></td>
<td>{$a.uc_a_tamano}</td>
<td>{$a.uc_a_tipo}</td>
<td>{$a.uc_a_edicion}</td>
</tr>
{/foreach}
</tbody>
</table>
{else}
<div id="error_flat">No haz subido ningun archivo aun, <a onclick="cdg.arch.add('{$codepage}');">¡Sube un ahora!</a></div>
{/if}
<div class="::stylesheets::stolesheen" role="sttr">
<div><div></div><div><div><div><div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/rpositrostyl.css"></div></div></div><div></div></div></div>
</div>
</div>