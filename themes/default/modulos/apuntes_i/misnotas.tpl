<div class="contentedor hidden">
<div class="l_cont floatL RCont">
<div class="t_i"><div class="floatL">Mis apuntes</div> {if $notas.mi.num} <div class="booble_blue">{$notas.mi.num}</div>{else}<div class="booble_blue">0</div>{/if}</div>
<div class="c_i">
<div class="cont_ii">{if $notas.mi}
{foreach from=$notas.mi item=n key=io}
{if $io+1 <= $notas.mi.num && $n.um_id && $n.um_id != '<'}
<div class="nt_i mnt{$io+1}_{$n.um_id}">
<div class="nt_content">
<div class="nt_title">{$n.um_name}</div>
<div class="nt_cont">{$n.um_text}</div>
<div class="nt_dates">Creado {$n.um_date|hace} - Estado: {$n.state}</div>
</div>
</div>
{/if}
{/foreach}{else}<div id="error_flat" class="blue_flat">Sin apuntes en esta secci&oacute;n</div>{/if}
</div>
<div class="pags">
{$notas.mi.pages}
</div>
</div>
</div>

<div class="c_cont floatL RCont">
<div class="t_i"><div class="floatL">Apuntes publicos</div> {if $notas.public.num} <div class="booble_blue">{$notas.public.num}</div>{else}<div class="booble_blue">0</div>{/if}</div>
<div class="c_i">
<div class="cont_ii">{if $notas.public}
{foreach from=$notas.public item=n key=i}
{if $i+1 <= $notas.public.num && $n.um_id && $n.um_id != '<'}
<div class="nt_i mnt{$i+1}_{$n.um_id}">
<div class="nt_content">
<div class="nt_title">{$n.um_name}</div>
<div class="nt_cont">{$n.um_text}</div>
<div class="nt_dates">Creado {$n.um_date|hace} - Estado: {$n.state}</div>
</div>
</div>
{/if}
{/foreach}{else}<div id="error_flat" class="blue_flat">Sin apuntes en esta secci&oacute;n</div>{/if}
</div>
<div class="pags">
{$notas.public.pages}
</div>
</div>
</div>

<div class="r_cont floatL RCont">
<div class="t_i"><div class="floatL">Apuntes entre mis amigos</div> {if $notas.friends.num} <div class="booble_blue">{$notas.friends.num}</div>{else}<div class="booble_blue">0</div>{/if}</div>
<div class="c_i">
<div class="cont_ii">{if $notas.friends}
{foreach from=$notas.friends item=n key=ie}
{if $ie+1 <= $notas.friends.num && $n.um_id && $n.um_id != '<'}
<div class="nt_i mnt{$ie+1}_{$n.um_id}">
<div class="nt_content">
<div class="nt_title">{$n.um_name}</div>
<div class="nt_cont">{$n.um_text}</div>
<div class="nt_dates">Creado {$n.um_date|hace} - Estado: {$n.state}</div>
</div>
</div>
{/if}
{/foreach}{else}<div id="error_flat" class="blue_flat">Sin apuntes en esta secci&oacute;n</div>{/if}
</div>
<div class="pags">
{$notas.friends.pages}
</div>
</div>
</div>

<div class="contents_xtras::bio">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/m_notas_d.css">
</div>
</div>