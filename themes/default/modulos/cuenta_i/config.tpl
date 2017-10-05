<table width="100%" class="table" id="inform1" style="margin: 0;border: 0;">
<tbody>
<tr>
<td>Nombre</td>
<td><input type="text" name="n" placeholder="Nombre" value="{$u.name_original}"><input type="text" name="ap" placeholder="Apellidos" style="margin:0 0 0 3px;" value="{$u.ap_original}"/></td>
</tr>
<tr>
<td>Nombre alternativo (Alias)</td>
<td><input type="text" name="al" placeholder="Nombre alternativo" style="width: 320px;" value="{$u.alias}"></td>
</tr>
<tr>
<td>Descripción personal</td>
<td><textarea name="desc" style="width: 319px;height: 61px;padding: 4px;" placeholder="Tu descripción">{$u.descripcion}</textarea></td>
</tr>
<tr>
<td>Correo</td>
<td><input type="text" name="em" placeholder="Correo electronico" value="{$u.usuario_email}" style="width: 320px;"></td>
</tr>
<tr>
<td>Sitio web/blog</td>
<td><input type="text" name="sit" placeholder="Sitio web" value="{$u.p_sitio}" style="width: 320px;"></td>
</tr>
<tr>
<td>Color</td>
<td>
<div style="width: 265px;margin: 0 auto;">
<div style="background:{$u.color};padding: 5px;height: 16px;width: 16px;float: left;border-radius: 6px;border: 2px solid rgba(0, 0, 0, 0.15);margin: 0 7px 0 0;" class="qtip" title="{$u.color}"></div>
<input type="text" name="co" title="Color en ingles" style="float: left;width: 215px;" value="{$u.color}" placeholder="Color" />
<input type="hidden" name="tyyy" value="1" />
</td>
</tr>
<tr>
<td>Nacimiento</td>
<td>
<select name="naca"><option>Año</option>
{for $foo=1920 to 2014}
<option value="{$foo}" {if $u.nac_anio == $foo}selected="selected"{/if}>{$foo}</option>
{/for}
</select>

<select name="nacm"><option>Mes</option>
{for $foo=1 to 12}
<option value="{$foo}" {if $u.nac_mes == $foo}selected="selected"{/if}>{$foo}</option>
{/for}
</select>

<select name="nacd"><option>Dia</option>
{for $foo=1 to 31}
<option value="{$foo}" {if $u.nac_dia == $foo}selected="selected"{/if}>{$foo}</option>
{/for}
</select>

</td>
</tr>
<tr>
<td>Estado sentimental</td>
<td>
<select name="sent">
<option>Selecciona un estado</option>
<option value="1" {if $u.p_estado == 1}selected="selected"{/if}>Soltero(a)</option>
<option value="2" {if $u.p_estado == 2}selected="selected"{/if}>Casado(a)</option>
<option value="3" {if $u.p_estado == 3}selected="selected"{/if}>Divorciado(a)</option>
<option value="4" {if $u.p_estado == 4}selected="selected"{/if}>Viudo(a)</option>
</select></td>
</tr>
<tr>
<td>Sexo</td>
<td>
<select name="sex">
<option>Selecciona tu sexo</option>
<option value="0" {if $u.user_sexo == 0}selected="selected"{/if}>Hombre</option>
<option value="1" {if $u.user_sexo == 1}selected="selected"{/if}>Mujer</option>
</select></td>
</tr>
<tr>
<td>Pais</td>
<td>
<select name="pai">
<option>Selecciona tu pais ({$u.u_pais})</option>
{foreach from=$sqlpaises item=p}
<option value="{$p.p_prefijo}" {if $u.u_pais == $p.p_prefijo}selected="selected"{/if}>{$p.p_opcion}</option>
{/foreach}
</select></td>
</tr>
</tbody>
</table>
<div class="::sttryl" role="sttr">
<div>
</div>
</div>