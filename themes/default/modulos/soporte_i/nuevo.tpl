{if $_SESSION}<form method="POST" action="#" id="formsup" style="width: 77%;">
<div id="titlef"><span>Nombre de tu nuevo proyecto</span></div>
<input type="text" id="name" placeholder="Escribe aqui el nombre de tu nuevo proyecto">

<br/><br/>

<div id="titlef"><span>Nombre Corto para tu proyecto ({$tsConfig.url}/soporte/<b>proyectname</b>)</span></div>
<input type="text" id="cname" placeholder="Proyectname">

<br/><br/>

<div id="titlef"><span>Selecciona una imagen
<select name="gooiMg" onchange="$('.opcion_1_UpImg').hide();$('.opcion_2_UpImg').hide();$('.opcion_'+$(this).val()+'_UpImg').show();">
	<option>Que imagen usaras?</option>
<option value="1">Subir imagen</option>
<option value="2">Pre subidas</option>
</select>
</span></div>
<div class="opcion_1_UpImg option_val dsnone">
<div class="hidden clearfix one_unImg">
<div style="border:1px dashed rgba(0, 0, 0, 0.21);padding:2em;position: relative;text-align:-webkit-center;width: 70%" class="hover cursorP ZErO_uNiMg"><div class="lsf" style="font-size: 56px;"><a>camera</a></div><input type="file" class="inputnone cursorP" id="upster_uNimg"/></div>
</div>
<div class="tWo_unImg dsnone" style="width: 70%;">
<h1>Subiendo...</h1><div class="barloading"><div class="bar"></div></div>
</div>
<div class="TreE_unIMg dsnone" style="width: 70%;border: 1px dashed #CCCCCC;padding: 1em;">
<center></center><input type="hidden" name="img_he" value="s" />
</div>
</div>
<div class="opcion_2_UpImg option_val dsnone">
<div style="float:left;"><img src="{$tsConfig.url}/images/icons/r/0.png" class="m_icon"/></div>
<select style="height: 60px;" id="icon" name="icon" onchange="$('.m_icon').attr('src', $(this).val())">
{foreach from=$iconss item=r}
<option value="{$tsConfig.url}/images/icons/r/{$r}">Imagen: {$r}</option>
{/foreach}
</select>
</div>

<br/><br/>

<div id="titlef"><span>Selecciona un icono</span></div>
<div style="float:left;"><img src="{$tsConfig.url}/images/icons/r/0.png" class="mm_icon" style="width: 38px;height: 38px;"/></div>
<select style="height: 38px;" id="icontwo" name="icon" onchange="$('.mm_icon').attr('src', '{$tsConfig.url}/images/icons/i/'+$(this).val())">
{foreach from=$iconssi item=r}
<option value="{$r}">Imagen: {$r}</option>
{/foreach}
</select>

<br/><br/>

<div id="titlef"><span>Describe tu proyecto</span></div>
<textarea id="desc" placeholder="Describe tu proyecto..."></textarea>

<br /><br />
<div class="::stylesheets">
<div><script type="text/javascript" src="{$tsConfig.url}/js/modo/add_proy.js"></script></div></div>
<input type="button" id="savefo" value="Crear proyecto" class="buttonblue1" onclick="supp.aggfor();" />
</form>{else}{include file='modulos/altoahi.tpl'}{/if}