{include file='includes/main_header.tpl'}
<div class="registro_i hidden">
<div class="registro_i_c">

<div class="form">
<div class="t">Nick de usuario</div>
<div class="g"><div class="mention floatL">@</div><input type="text" name="nombre" placeholder="@tunick"></div>
</div>

<div class="form">
<div class="t">Nombre/apellido</div>
<div class="g"><input type="text" name="original" placeholder="Nombre"><input type="text" name="ap" placeholder="Apellido"></div>
</div>

<div class="form">
<div class="t">Correo electronico (email)</div>
<div class="g"><input type="text" name="email" placeholder="persona@email.com"></div>
</div>

<div class="form">
<div class="t">Contraseña</div>
<div class="g"><input type="password" name="clave" placeholder="Contraseña"><br/><div class="color_gray" style="font-size: 22px;
margin: 8px 0;">Repitela</div><input type="password" name="reclave" placeholder="Contraseña"></div>
</div>

<div class="form">
<div class="t">Pais</div>
<div class="g">
<select name="pais"><option>Seleciona tu pais</option>
{foreach from=$paises item=p}
<option value="{$p.p_prefijo}">{$p.p_opcion}</option>
{/foreach}
</select></div>
</div>

<div class="form">
<div class="t">Sexo</div>
<div class="g"><select name="sexo"><option>Seleciona tu sexo</option><option value="1">Hombre</option><option value="2">Mujer</option></select></div>
</div>

<div class="form">
<div class="t">Nacimiento</div>
<div class="g">
<select name="dia"><option>Dia</option>
{for $foo=1 to 31}
<option value="{$foo}">{$foo}</option>
{/for}
</select>

<select name="mes"><option>Mes</option>
{for $foo=1 to 12}
<option value="{$foo}">{$foo}</option>
{/for}
</select>

<select name="anio"><option>Año</option>
{for $foo=1940 to 2014}
<option value="{$foo}">{$foo}</option>
{/for}
</select>
</div>
</div>

<div class="form">
<div class="t">Código de seguridad(<small><a onclick="Recaptcha.reload();">Cambiar</a></small>)</div>
<div class="g">
<script type="text/javascript">{literal}
$.getScript("http://www.google.com/recaptcha/api/js/recaptcha_ajax.js", function(){ Recaptcha.create('6LdHQvASAAAAAMvSKMC43DPFdr1fBTf3oKtPrUwq', 'recaptcha_ajax', {
theme:'custom', lang:'es', tabindex:'13', custom_theme_widget: 'recaptcha_ajax',
callback: function(){}
});
});
{/literal}</script>
<div id="recaptcha_image"></div>
<input type="text" class="input_text" name="recaptcha_response_field" id="recaptcha_response_field" placeholder="Ingresa el código de la imagen" tabindex="1">
</div>
</div>
<br><br>
<input type="button" value="Registrarme" class="bg_green_3d btn color_white" onclick="reg.set();" />
</div>
</div>
{include file='includes/main_footer.tpl'}