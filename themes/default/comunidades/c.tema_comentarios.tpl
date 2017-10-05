<div class="com_tema_comentarios clearfix">
	<div class="com_box_title clearfix"><h2><span id="cbt_val">{$tsTema.t_respuestas|number_format:0:',':'.'}</span> comentarios</h2></div>
    {if $tsTema.t_cerrado == 0 && !$tsTema.askdlwe}<div class="com_bigmsj_blue">No hay comentarios. ¡S&eacute; el primero!</div>{/if}
    {if $tsTema.t_cerrado == 1 && $_SESSION != $tsTema.t_autor}<div class="com_bigmsj_yellow">El tema est&aacute; cerrado y no se permiten comentarios</div>{/if}
    
    <div id="result_answers">{include file='t.comus_ajax/c.pages_respuestas.tpl'}</div> 
    
    {if $_SESSION && $tsCom.es_miembro || $tsCom.mi_rango >= 3}
    <div class="ctc_form clearfix">
    	<div class="com_bigmsj_red" style="display:none;"></div>
    	<div id="procesando"></div>
    	<div class="ctcf_avatar"><a href="{$u.w_avatar}"><img src="{$u.w_avatar}" width="48" height="48" /></a></div>
        <div class="ctcf_add_coment floatL clearfix" style="width: 633px;">
        	<textarea class="markItUp" style="width: 535px;border-radius: 0 0 4px 4px;border-top: 0;resize: vertical;"></textarea>
            <input type="button" class="input_button floatL" id="btn_newcom" value="Comentar" onclick="com.add_respuesta({$tsTema.t_id});" />
            {* <div id="markit_emoticon" class="floatL" style="display:none;margin-left: 5px;margin-top: 8px;">{include file='modules/m.global_emoticons.tpl'}</div> *}
        </div>
    </div>
    {elseif !$tsCom.es_miembro || !$_SESSION}
    <div class="com_bigmsj_yellow">Tienes que ser miembro para responder en este tema</div>
    {elseif $tsCom.mi_rango < 3}
    <div class="com_bigmsj_yellow">Tu rango no te permite realizar comentarios en este foro</div>
    {/if}
<div class="::style:role" role="sttr">
<div><script type="text/javascript" src="{$tsConfig.url}/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/markItUp.css"></div>
</div>
</div>
