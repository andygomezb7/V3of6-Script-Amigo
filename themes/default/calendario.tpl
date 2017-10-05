{include file='includes/main_header.tpl'}
<div class="calndr_cntnt hidden">
<div class="bdy_calndr">
	{if $Dia > 0}
{if $_PREG == 'hola'}

{elseif $_PREG == 'eventos' && $Dia && $Month || $_PREG == 'eventos' && $Year || $_PREG == 'eventos' && $Month && $Year}
<div class="box_title">Eventos</div>
<div class="box_cuerpo clearfix">
    <div class="cont_left">
        {if $tsEventos.data}
        {foreach from=$tsEventos.data item=e}
        {if $e.e_privado == 1 || $e.e_user == $_SESSION}
        <div class="et_titulo clearfix">
            <a href="{$tsConfig.url}/perfil/{$e.usuario_id}" class="et_avatar"><img src="{$e.w_avatar}" width="40" height="40" /></a>
            <b id="title_{$e.eid}">{$e.e_titulo}</b>
            <span>Por <a href="{$tsConfig.url}/{$e.usuario_nombre}">{$e.usuario_nombre}</a></span>
            {if $_SESSION == $e.e_user || $wuser->is_admod}<div class="floatR" style="margin: 0px 9px 0px 0px;"><a href="{$tsConfig.url}/int/calendario/?preg=eventos&dia={$e.e_dia}&mes={$e.e_mes}&year={$e.e_year}&eid={$e.eid}&act=editar" style="background: #FFFFFF;padding: 1px 2px;border-radius: 5px;border: 1px solid #CCCCCC;">Editar</a> <a href="javascript:borrar_evento({$e.eid})" style="background: #FFFFFF;padding: 1px 2px;border-radius: 5px;border: 1px solid #CCCCCC;">Eliminar</a></div>{/if}
        </div>
        <div class="et_cuerpo">{$e.e_cuerpo}</div>
        {/if}
        {/foreach}
        {else}
        <div style="margin-right: 10px;"><div class="emptyData">No hay eventos programados para este d&iacute;a.</div></div>
        {/if}
        <div style="margin-top: 15px;margin-right: 10px;overflow: hidden;">
        <a href="{$tsConfig.url}/int/calendario/?preg=eventos&mes={$Month}&year={$Year}" class="mBtn btnOk floatL">Ver {$Month} de {$Year}</a>
        {if $_SESSION}<a href="{$tsConfig.url}/int/calendario/?preg=eventos&dia={$Dia}&mes={$Month}&year={$Year}&act=nuevo" class="mBtn floatR">Agregar nuevo evento <span style="color:red;font-size: 19px;">*</span></a>{/if}
        </div>
    </div>
    <div class="cont_right">
        <div class="cr_body cr_fecha" align="center">
            <div>{$Dia}</div>
            <span>{$Mes} {$Year}</span>
        </div>
        <div class="cr_body cr_cumple">
            <h2 style="margin-top: 0;">Cumplea&ntilde;os de este d&iacute;a</h2>
            {if $tsCumple}
            {foreach from=$tsCumple item=c}
            <div class="user_cumple">
                <a href="{$tsConfig.url}/perfil/{$c.usuario_nombre}" class="cr_avatar"><img src="{$c.w_avatar}" width="20" height="20" /></a>
                ({$c.user_ano})
                <a href="{$tsConfig.url}/{$c.usuario_nombre}">{$c.usuario_nombre}</a>
            </div>
            {/foreach}
            {else}
            <div class="emptyData">No hay celebraciones este d&iacute;a.</div>
            {/if}
        </div>
    </div>
</div>
{/if}
{else}
<div class="box_title">Eventos {$Mes} del {$Year}</div>
<div style="margin: 10px 0px 10px 6px;">
<form action="" method="GET">
<label style="padding: 0px 15px 0px 0px;">Cumpleaños 
<span><input type="radio" name="cumple" value="1" {if $mostrar.cumples == 1}checked="checked"{/if}> Si</span> 
<span><input type="radio" name="cumple" value="0" {if $mostrar.cumples == 0 || !$mostrar.cumples}checked="checked"{/if}> No</span></label>
<label style="padding: 0px 15px 0px 0px;">Eventos de usuarios 
<span><input type="radio" name="gevents" value="1" {if $mostrar.usuarios == 1}checked="checked"{/if}> Si</span> 
<span><input type="radio" name="gevents" value="0" {if $mostrar.usuarios == 0 || !$mostrar.usuarios}checked="checked"{/if}> No</span></label>
<label style="padding: 0px 15px 0px 0px;">Mes 
<select name="mes" style="padding: 5px;font-size: 12px;">
{foreach from=$Meses item=m key=i}
<option value="{$i}"{if $Mes == $m} selected{/if}>{$m}</option>
{/foreach}
</select>
</label>
<label style="padding: 0px 15px 0px 0px;">Año <select name="year" style="padding: 5px;font-size: 12px;">
            <option value="{$Year_a-2}"{if $Year == $Year_a-2} selected{/if}>{$Year_a-2}</option>
            <option value="{$Year_a-1}"{if $Year == $Year_a-1} selected{/if}>{$Year_a-1}</option>
            <option value="{$Year_a}"{if $Year == $Year_a} selected{/if}>{$Year_a}</option>
            <option value="{$Year_a+1}"{if $Year == $Year_a+1} selected{/if}>{$Year_a+1}</option>
            <option value="{$Year_a+2}"{if $Year == $Year_a+2} selected{/if}>{$Year_a+2}</option>
            <option value="{$Year_a+3}"{if $Year == $Year_a+3} selected{/if}>{$Year_a+3}</option>
            <option value="{$Year_a+4}"{if $Year == $Year_a+4} selected{/if}>{$Year_a+4}</option>
            <option value="{$Year_a+5}"{if $Year == $Year_a+5} selected{/if}>{$Year_a+5}</option>
            <option value="{$Year_a+6}"{if $Year == $Year_a+6} selected{/if}>{$Year_a+6}</option>
        </select>
</label>
<label><input type="submit" value="Mostar"></label>
</form>
</div>
    <table class="calendar" cellspacing="0" cellpadding="0">
        <thead>
        <tr class="c_header"> 
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>Domingo</th>
        </tr>
        </thead>
        <tbody>
            {$html}
        </tbody>
    </table>
{/if}
</div>
</div>
{include file='includes/main_footer.tpl'}