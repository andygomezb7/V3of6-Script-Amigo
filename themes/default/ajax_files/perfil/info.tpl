<div class="div-clinfoh hidden">
<div class="dodoke-div hidden">
<div class="dvcli-le floatL">

<div class="cotow" style="border-top-color: #fbcb43;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Informaci&oacute;n de contacto</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Correo electronico</div>
<div class="coto-UiCon-Ds">{if $tsInfo.usuario_email}{$tsInfo.usuario_email}{else}<u>Sin email definido</u>{/if}</div>
</div>


<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Sitio web/blog</div>
<div class="coto-UiCon-Ds">{if $tsInfo.p_sitio}{$tsInfo.p_sitio}{else}<u>Sin sitio web/blog</u>{/if}</div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

<div class="cotow" style="border-top-color: #4dbfd9;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Informaci&oacute;n personal</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Nacimiento</div>
<div class="coto-UiCon-Ds">{$tsInfo.nac_anio} / {$tsInfo.nac_mes} / {$tsInfo.nac_dia}</div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Alias</div>
<div class="coto-UiCon-Ds">{if $tsInfo.alias}{$tsInfo.alias}{else}<u>Sin alias definido</u>{/if}</div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Estado</div>
<div class="coto-UiCon-Ds">
{if $tsInfo.p_estado == 1}Soltero(a)
{elseif $tsInfo.p_estado == 2}Casado(a)
{elseif $tsInfo.p_estado == 3}Divorciado(a)
{elseif $tsInfo.p_estado == 4}Viudo(a)
{else}<u>Indefinido</u>{/if}</div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Sexo</div>
<div class="coto-UiCon-Ds">{if $tsInfo.usuario_sexo == 0}Hombre{elseif $tsInfo.usuario_sexo == 1}Mujer{else}Indefinido{/if}</div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

</div>

<div class="dvcli-ri floatR">

<div class="cotow" style="border-top-color: #e46f61;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Descripci&oacute;n personal</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-Ds">{if $tsInfo.descripcion}{$tsInfo.descripcion}{else}<div id="error_flat" class="blue_flat">No comparte informaci&oacute;n personal</div>{/if}</div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

<div class="cotow" style="border-top-color: #8cc474;">
<div class="coto-title"><div class="coto-ctitl"><div class="coto-tltc">Informaci&oacute;n extra</div></div></div>
<div class="coto-UiCon">
<div class="coto-UiCon-ofc">

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Se Registro</div>
<div class="coto-UiCon-Ds">{$tsInfo.identi|hace}</div>
</div>

<div class="coto-UiCon-Wor">
<div class="coto-UiCon-TW">Ultima actividad</div>
<div class="coto-UiCon-Ds">{$tsInfo.active_ult|hace}</div>
</div>

</div>
</div>
<div class="coto-foo"></div>
</div>

</div>

<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/inf-pr.css"></div>
</div>
</div>