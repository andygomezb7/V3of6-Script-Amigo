{if $tsRespuestas.pages.pages > 1}
<div class="com_pagination">
    {if $tsRespuestas.pages.prev}<a class="cp_prev" href="javascript:com.pages_respuestas({$tsRespuestas.pages.prev});"></a>{/if}
    {section name=pages start=1 loop=$tsRespuestas.pages.section max=$tsRespuestas.pages.pages}
    <a {if $tsRespuestas.pages.current == $smarty.section.pages.index}class="here"{/if} href="javascript:com.pages_respuestas({$smarty.section.pages.index});">{$smarty.section.pages.index}</a>
    {/section}
    {if $tsRespuestas.pages.pages > 1 && $tsRespuestas.pages.pages > $tsRespuestas.pages.current}<a class="cp_next" onclick="com.pages_respuestas({$tsRespuestas.pages.next});"></a>{/if}
</div>
{/if}

<div class="ctc_coment_list">
    {foreach from=$tsTema.askdlwe item=r}
    <div class="com_coment_resp clearfix" id="coment_id_{$r.r_id}">
        {if $_SESSION}
        <ul class="ccr_options clearfix">
            {if $r.r_autor != $_SESSION}
            <li><a onclick="com.votar_respuesta({$r.r_id}, 'pos');return false;" class="qtip" title="Me gusta"><i class="com_icon icon_like i_like"></i></a></li>
            <li><a onclick="com.votar_respuesta({$r.r_id}, 'neg');return false;" class="qtip" title="No me gusta"><i class="com_icon icon_dislike i_dislike"></i></a></li>
            <!---- com.citar_com({$r.r_id}, '{$r.usuario_nombre}'); ----><li><a onclick="com.resp({$r.r_id});return false;" class="qtip" title="Responder"><i class="com_icon icon_reply"></i></a></li>
            <li><a onclick="bloquear({$r.r_autor}, true, 'comentarios')" class="qtip" title="Bloquear"><i class="com_icon icon_bloquear"></i></a></li>
            {/if}       
            {if $r.r_autor == $_SESSION || $tsCom.mi_rango >= 4}
            <li><a onclick="com.del_respuesta({$r.r_id});return false;" class="qtip" title="Borrar comentario"><i class="com_icon icon_del"></i></a></li>
            {/if}
        </ul>
        {/if}
        <div class="ctcf_avatar">
            <a href="{$tsConfig.direccion_url}/{$r.usuario_nombre}">
                <img style="width: 50px; height: 50px;" src="{$r.w_avatar}" />
            </a>
        </div>
        <div class="ctcf_detalles">
            <div class="ctcf_info">
                @<a href="{$tsConfig.url}/{$r.usuario_nombre}">{$r.usuario_nombre}</a>
                {if $u.rango == 3 or $u.rango == 1}<span>IP <a href="{$tsConfig.direccion_url}/moderacion/buscador/1/1/{$r.r_ip}" class="geoip" target="_blank">{$r.r_ip}</a></span>{/if}
                <span>{$r.r_fecha|hace}</span><span id="total_votos_{$r.r_id}" {if $r.r_votos_pos-$r.r_votos_neg != 0}class="qtip" title="+{$r.r_votos_pos} / -{$r.r_votos_neg}"{/if} style="font-weight: bold;font-size: 12px;color: {if $r.r_votos_pos-$r.r_votos_neg < 0}red{elseif $r.r_votos_pos-$r.r_votos_neg > 0}green{else}#999{/if};">{if $r.r_votos_pos-$r.r_votos_neg != 0}{if $r.r_votos_pos-$r.r_votos_neg > 0}+{/if}{$r.r_votos_pos-$r.r_votos_neg}{/if}</span>
            </div>
            <div class="ctcf_body">{$r.r_body|BBcode}</div>
            <div style="display:none;" id="coment_source_{$r.r_id}">{$r.r_source}</div>
        </div>
    </div>
	<div class="com_bigmsj_red_{$r.r_id}" style="display: none;"></div>
	<div id="{$r.r_id}" class="res_p" style="display: none;">
	    {if $_SESSION && $tsCom.es_miembro || $tsCom.mi_rango >= 3}
	    <div class="ctc_form clearfix" style="margin: 0px;padding: 0px;">
    	<div class="com_bigmsj_red" style="display:none;"></div>
    	<div id="procesando"></div>
    	<div class="ctcf_avatar"><a href="{$u.w_avatar}"><img src="{$u.w_avatar}" width="48" height="48" /></a></div>
        <div class="ctcf_add_coment floatL clearfix">
        	<textarea class="input_text markItUp" style="width: 535px;border-radius: 0 0 4px 4px;border-top: 0;resize: vertical;"></textarea>
            <input type="button" class="input_button floatL" id="btn_newcom" value="Comentar" onclick="com.nuevos('true', '', {$r.r_id});" />
            {* <div id="markit_emoticon" class="floatL" style="display:none;margin-left: 5px;margin-top: 8px;">{include file='modules/m.global_emoticons.tpl'}</div> *}
        </div>
    </div>
	    {elseif !$tsCom.es_miembro || !$_SESSION}
    <div class="com_bigmsj_yellow">Tienes que ser miembro para responder este comentario.</div>
    {elseif $tsCom.mi_rango < 3}
    <div class="com_bigmsj_yellow">Tu rango no te permite realizar respuestas en este foro.</div>
    {/if}
	</div>
    {/foreach}
    <div id="add_new_com"></div>
</div>

{if $tsRespuestas.pages.pages > 1}
<div class="com_pagination">
    {if $tsRespuestas.pages.prev}<a class="cp_prev" onclick="com.pages_respuestas({$tsRespuestas.pages.prev});"></a>{/if}
    {section name=pages start=1 loop=$tsRespuestas.pages.pages+1 max=$tsRespuestas.pages.pages}
    <a {if $tsRespuestas.pages.current == $smarty.section.pages.index}class="here"{/if} onclick="com.pages_respuestas({$smarty.section.pages.index});">{$smarty.section.pages.index}</a>
    {/section}
    {if $tsRespuestas.pages.pages > 1 && $tsRespuestas.pages.pages > $tsRespuestas.pages.current}<a class="cp_next" onclick="com.pages_respuestas({$tsRespuestas.pages.next});"></a>{/if}
</div>
{/if}