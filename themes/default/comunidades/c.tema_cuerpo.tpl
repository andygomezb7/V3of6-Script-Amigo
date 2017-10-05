<div class="com_tema_cuerpo clearfix" style="padding: 11px 1px 1px 7px;">
    <div class="ctc_share clearfix">
        <span class="ctc_date floatL vctip" title="{$tsTema.t_fecha_all}">{$tsTema.t_fecha|hace}</span>
    </div>
    <h1 class="ctc_h1" style="padding: 5px 0px 3px 0px;margin-top: 0px;font: 300 25px 'Droid Sans', sans-serif;border-bottom: 1px dashed #CCCCCC;">{$tsTema.t_titulo}</h1>
    <div>{include file='modulos/m.popup_users.tpl'}</div>
    <div class="ctc_body" style="padding: 18px 0px 0px 0px;">{$tsTema.ct_cuerpo}</div>
</div>
<div class="com_tema_share clearfix">
<div class="floatL"><a style="float:left;"><img src="{$tsConfig.direccion_url}/images/com/{$tsCom.c_imagen}.jpg" style="width: 52px;height: 52px;margin: 2px 4px 0px 3px;"></a>
<div><a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/" title="Ir a la comunidad">{$tsCom.c_nombre}</a><br>
<span style="font-style: italic;">{$tsCom.c_descripcion}</span>
</div></div>
<div class="floatR" style="margin: 12px 10px 0px 2px;">
                {if $_SESSION}
                <a href="javascript:com.abandonar();" class="action_comunidad input_button" style="padding:10px 11px;{if !$tsCom.es_miembro}display:none;{/if}">Abandonar</a>
                <a href="#" class="input_button" id="follow_com" {if $tsCom.es_seguidor}style="display:none"{/if} onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Seguir</a>
                <a href="#" class="input_button ibg" id="unfollow_com" style="{if !$tsCom.es_seguidor}display:none{/if}" onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Siguiendo</a>
                <a href="#" class="input_button ibr" id="unfollow_comr" style="padding:10px 11px;display:none" onclick="com.seguir_com();return false;">Dejar de seguir</a>
                {/if}
</div>
</div>
<div class="com_tema_options clearfix">
	{if $_SESSION}
	{if $tsTema.t_autor != $_SESSION}
	<a href="javascript:com.votar_tema('pos');" class="input_button {if !$_SESSION}require-login{/if}"><i class="com_icon icon_like {if !$_SESSION} require-login{/if}"></i> Me gusta</a>
    <a href="javascript:com.votar_tema('neg');" class="input_button"><i class="com_icon icon_dislike {if !$_SESSION} require-login{/if}"></i></a>
    <a href="javascript:com.seguir_tema();" class="input_button {if !$_SESSION}require-login{/if}" id="follow_tema" {if $tsTema.es_seguidor}style="display:none"{/if}><i class="com_icon icon_eye"></i>Seguir</a>
    <a href="javascript:com.seguir_tema();" class="input_button ibg {if !$_SESSION}require-login{/if}" id="unfollow_tema" style="{if !$tsTema.es_seguidor}display:none{/if}"><i class="com_icon icon_eye"></i>Siguiendo</a>
    <a href="javascript:com.seguir_tema();" class="input_button ibr {if !$_SESSION}require-login{/if}" id="unfollow_temar" style="display:none;padding: 7px 10px;">Dejar de seguir</a>
    <a href="javascript:com.add_favorito();" class="input_button add_favorito {if !$_SESSION}require-login{/if}" {if $tsTema.mi_fav}style="display:none;"{/if} title="A&ntilde;adir a mis favoritos"><i class="com_icon icon_favs"></i></a>
    <a href="javascript:void(0);" class="input_button ibg add_favorito {if !$_SESSION}require-login{/if}" {if !$tsTema.mi_fav}style="display:none;"{/if} title="Lo tienes en tus favoritos"><i class="com_icon icon_favs"></i></a>
    {/if}
    {else}
    <a onclick="registro_load_form(); return false" class="input_button {if !$_SESSION}require-login{/if}"><i class="com_icon icon_like"></i> Me gusta</a>
    {/if}
    <ul class="cts_stats clearfix floatR">
    	<li>
        	<span id="favs_total">{$tsTema.t_favoritos|number_format:0:',':'.'}</span><i class="com_icon icon_favs"></i>
            <div>Favoritos</div>
        </li>
        <li>
        	<span>{$tsTema.t_visitas|number_format:0:',':'.'}</span><i class="com_icon icon_visitas"></i>
            <div>Visitas</div>
        </li>
        <li>
        	<span id="segs_total">{$tsTema.t_seguidores|number_format:0:',':'.'}</span><i class="com_icon icon_eye"></i>
            <div>Seguidores</div>
        </li>
        <li>
        	<span id="votos_total" style="color:{if $tsTema.t_votos_pos-$tsTema.t_votos_neg > 0}green{elseif $tsTema.t_votos_pos-$tsTema.t_votos_neg < 0}red{else}#222{/if}">{$tsTema.t_votos_pos-$tsTema.t_votos_neg|number_format:0:',':'.'}</span><i class="com_icon icon_like"></i>
            <div>Calificaci&oacute;n</div>
        </li>
    </ul>
</div>
