<div class="com_home_center" style="width: 310px;margin-left: 5px;margin-top: 6px;float: left;">
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix"><h2>Estad&iacute;sticas</h2></div>
        <div style="margin: 5px 18px 0px 16px;">
            <div class="clearfix">
               <div class="floatL"><strong id="stat-onl">{$tsStats.stats_online|number_format:0:',':'.'}</strong>  usuarios online</div>
               <div class="floatR"><strong id="stat-comu">{$tsStats.stats_comunidades|number_format:0:',':'.'}</strong>  Foros</div>
            </div>
            <div class="clearfix">
                <div class="floatL"><strong id="stat-tem">{$tsStats.stats_temas|number_format:0:',':'.'}</strong>  temas</div>
                <div class="floatR"><strong id="stat-com">{$tsStats.stats_respuestas|number_format:0:',':'.'}</strong>  respuestas</div>
            </div>
        </div>
    </div>
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix"><h2>Comentarios recientes</h2></div>
        <div class="com_box_body">
        	{if $tsRespuestas}
        	{foreach from=$tsRespuestas item=r}
            <div class="com_list_element" {if $r.t_estado == 1}style="opacity: 0.5;background: #000;" title="El tema ha sido eliminado"{/if}>
            <a class="cle_autor" href="{$tsConfig.direccion_url}/{$r.usuario_nombre}">{$r.usuario_nombre}</a><a class="cle_title" href="{$tsConfig.direccion_url}/foro/{$r.c_nombre_corto}/{$r.t_id}/{$r.t_titulo|seo}.html#coment_id_{$r.r_id}">{$r.t_titulo|limit:30}</a></div>
            {/foreach}
            {else}
            <div class="com_bigmsj_blue">No hay comentarios recientes</div>
            {/if}
        </div>
    </div>
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix">
            <h2>Populares</h2>
            <div class="cbt_right cbt_list"><span id="com_change_hover">Semana</span>
            	<ul id="com_change_list">
                	<li class="pop_list_semana active"><a href="javascript:com.pop_list_change('Semana');">Semana</a></li>
                    <li class="pop_list_mes"><a href="javascript:com.pop_list_change('Mes');">Mes</a></li>
                    <li class="pop_list_historico"><a href="javascript:com.pop_list_change('Historico');">Hist&oacute;rico</a></li>
                </ul>
            </div>
        </div>
        <div class="com_box_body clearfix">
            <div id="com_change_pop">
                <div id="ccp_semana" style="display: block;">
                	{if $tsPopulares.semana}
                    {foreach from=$tsPopulares.semana item=c key=i}
                    <div class="com_list_element" {if $c.c_estado == 1}style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"{/if}>
                        <span class="cle_item">{$i+1}</span>
                        <a href="{$tsConfig.direccion_url}/foro/{$c.c_nombre_corto}/">{$c.c_nombre|limit:30}</a>
                        <span class="cle_number">{$c.c_miembros}</span>
                    </div>
                    {/foreach}
                    {else}
                    <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                    {/if}
                </div>
                <div id="ccp_mes" style="display: none;">
                	{if $tsPopulares.mes}
                    {foreach from=$tsPopulares.mes item=c key=i}
                    <div class="com_list_element" {if $c.c_estado == 1}style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"{/if}>
                        <span class="cle_item">{$i+1}</span>
                        <a href="{$tsConfig.direccion_url}/foro/{$c.c_nombre_corto}/">{$c.c_nombre|limit:30}</a>
                        <span class="cle_number">{$c.c_miembros}</span>
                    </div>
                    {/foreach}
                    {else}
                    <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                    {/if}
                </div>                
                <div id="ccp_historico" style="display: none;">
                	{if $tsPopulares.historico}
                    {foreach from=$tsPopulares.historico item=c key=i}
                    <div class="com_list_element" {if $c.c_estado == 1}style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"{/if}>
                        <span class="cle_item">{$i+1}</span>
                        <a href="{$tsConfig.direccion_url}/foro/{$c.c_nombre_corto}/">{$c.c_nombre|limit:30}</a>
                        <span class="cle_number">{$c.c_miembros}</span>
                    </div>
                    {/foreach}
                    {else}
                    <div class="com_bigmsj_blue">Nada por aqu&iacute;</div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <div class="com_new_box" style="background-color: #FFFFFF;">
        <div class="com_box_title clearfix"><h2>Foros recientes</h2></div>
        <div class="com_box_body clearfix">
        	{if $tsRecientes}
            {foreach from=$tsRecientes item=c}
            <div class="com_list_element"  {if $c.c_estado == 1}style="opacity: 0.5;background: #000;" title="El foro ha sido eliminada"{/if}><a href="{$tsConfig.direccion_url}/foro/{$c.c_nombre_corto}/" style="font-weight: bold;">{$c.c_nombre}</a></div>
            {/foreach}
            {else}
            <div class="com_bigmsj_blue">No se han creado foros a&uacute;n</div>
            {/if}
        </div>
        <div align="center" style="margin-top: 20px;">
        	<a href="{$tsConfig.direccion_url}/foro/crear/" class="input_button">&iquest;Qu&eacute; esperas para crear el tuyo?</a>
        </div>
    </div>
</div>