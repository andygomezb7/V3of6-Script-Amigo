<table width="100%" class="table" id="inform1" style="border:0;margin:0;">
<tbody>
<tr>
<td>Notificaciones via email</td>
<td>
<select name="ssnotifiem" id="ssnotifiem">
	<option value="0">¿Deseas recibir emails?</option>
	<option value="1" {if $u.s.ss_notifiem == 1 or $u.s.ss_notifiem == '1'}selected="selected"{/if}>Sí recibir</option>
	<option value="0" {if $u.s.ss_notifiem == 0 or $u.s.ss_notifiem == '0'}selected="selected"{/if}>No recibir</option>
</select>
</td>
</tr>
<tr>
<td><label for="sdatos">Enviarme mensajes:</label></td>
<td><select name="smsg" id="smsg" >
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_datos}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select></td>
</tr>
<tr>
<td><label for="sdatos">Mi datos personales:</label></td>
<td><select name="sdatos" id="sdatos" >
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_datos}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select></td>
</tr>
<tr><td><label for="sbworts">Bworts:</label></td>
<td><select name="sbworts" id="sbworts">
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_bworts}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select></td>
</tr>
<tr>
<td><label for="sbwortsp">Bworts en mi perfil:</label></td>
<td><select name="sbwortsp" id="sbwortsp">
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_bwortsp}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select></td>
</tr>
<tr>
<td><label for="stemas">Temas:</label></td>
<td><select name="stemas" id="stemas">
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_temas}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select>
</td></tr>
<tr>
<td><label for="snotas">Notas:</label></td>
<td><select name="snotas" id="snotas">
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_notas}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select><input type="hidden" name="tyyy" value="2" /></td>
</tr>
<tr>
<td><label for="spublicpp">Publicar en mi perfil:</label></td>
<td><select name="spublicpp" id="spublicpp">
	{foreach from=$options item=m key=i}
   <option value="{$i}" {if $i == $u.s.sp_publicpp}selected="selected"{/if}>{$m}</option>
	{/foreach}
</select></td>
</tr>
</tbody>
</table>