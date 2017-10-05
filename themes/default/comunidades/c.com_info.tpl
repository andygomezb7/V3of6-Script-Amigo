<div class="com_loc_global">
	<ul class="clearfix">
    	<li><a href="{$tsConfig.direccion_url}/foro/">Foros</a></li>
        <li><a href="{$tsConfig.direccion_url}/foro/home/{$tsCom.cat.c_seo}/">{$tsCom.cat.c_nombre}</a></li>
        {if $tsTema.t_id > 0}
        <li><a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/">{$tsCom.c_nombre}</a></li>
        <li>{$tsTema.t_titulo}</li>
        {else}
        <li>{$tsCom.c_nombre}</li>
        {/if}
    </ul>
</div>
{if $tsCom.c_estado == 1}<div class="com_bigmsj_red">El foro est&aacute; suspendido, para eliminarla permanentemente ve a la administraci&oacute;n</div>{/if}
<div class="ver_com_info" style="display: none;">
	<div class="vci_left floatL">
    	<a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/" title="Ir a la comunidad"><img src="{$tsConfig.direccion_url}/images/com/{$tsCom.c_imagen}.jpg" alt="{$tsCom.c_nombre}" width="32" height="32" /></a>
    </div>
    <div class="vci_right floatL">
    	<h1><a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/" title="Ir a la comunidad">{$tsCom.c_nombre}</a></h1>
    </div>
    <a href="#" onclick="$('.ver_com_info').toggle();return false;"><i class="com_icon icon_expand"></i></a>
    <div class="clearfix"></div>	
</div>
<div class="ver_com_info">
<div id="ttielconinf">    	<h1><a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/" title="Ir a la comunidad">{$tsCom.c_nombre}</a></h1>
</div>
<div id="vci_contentove">
	<div class="vci_left floatL">
    	<a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/" title="Ir a la comunidad"><img src="{$tsConfig.direccion_url}/files/uploads/c_{$tsCom.c_id}.jpg" alt="{$tsCom.c_nombre}" style="width: 96%;height: 96%;" /></a>
    </div>
    <div class="vci_right floatL">
        <div class="vci_desc">{$tsCom.c_descripcion}</div>
        <a href="#" onclick="com.ver_mas();return false;" id="view_more">Ver m&aacute;s -che</a>
        <div class="vci_detalles" id="show_more">
        	<ul>
        		<li><strong>Categor&iacute;a:</strong> <a href="{$tsConfig.direccion_url}/foro/home/{$tsCom.cat.c_seo}/">{$tsCom.cat.c_nombre}</a> &raquo; {$tsCom.cat.s_nombre}</li>
                <li><strong>Creado:</strong> por <a href="{$tsConfig.direccion_url}/perfil/{$tsCom.user_name}/">{$tsCom.user_name}</a> {$tsCom.c_fecha|hace}</li>
                <li><strong>Tipo:</strong> {if $tsCom.c_acceso == 1}Todos pueden ver la comunidad{else}S&oacute;lo usuarios registrados pueden ver la comunidad.{/if}</li>
                <li><strong>Tipo de validaci&oacute;n:</strong> Los nuevos miembros son aceptados automaticamente<br />
				Con el rango <strong>{if $tsCom.c_permisos == 1}Visitante{elseif $tsCom.c_permisos == 2}Comentador{else}Posteador{/if}</strong></li>
           </ul>
        </div>
    </div>
	</div>
	
	        <div class="clearfix vci_bottom">
        	<div class="floatL">
            	{if $tsCom.c_autor == $u.usuario_id || $u.rango == 1 || $u.rango == 3}<a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/editar/" class="input_button"><i class="com_icon icon_editar"></i>Editar</a>{/if}
                <a href="javascript:{if $_SESSION}com.unirme(){else}registro_load_form(){/if};" class="action_comunidad input_button" style="padding:10px 11px;{if $tsCom.es_miembro}display:none;{/if}">Unirme</a>
                {if $_SESSION}
                <a href="javascript:com.abandonar();" class="action_comunidad input_button" style="padding:10px 11px;{if !$tsCom.es_miembro}display:none;{/if}">Abandonar</a>
                <a href="#" class="input_button" id="follow_com" {if $tsCom.es_seguidor}style="display:none"{/if} onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Seguir</a>
                <a href="#" class="input_button ibg" id="unfollow_com" style="{if !$tsCom.es_seguidor}display:none{/if}" onclick="com.seguir_com();return false;"><i class="com_icon icon_eye"></i>Siguiendo</a>
                <a href="#" class="input_button ibr" id="unfollow_comr" style="padding:10px 11px;display:none" onclick="com.seguir_com();return false;">Dejar de seguir</a>
                {/if}
            </div>
            <ul class="clearfix vci_stats floatR">
            	<li><span>{$tsCom.c_miembros|number_format:0:',':'.'}</span>Miembros</li>
                <li><span>{$tsCom.c_temas|number_format:0:',':'.'}</span>Temas</li>
                <li style="border-right:none;padding-right:0;"><span id="com_seguidores_total">{$tsCom.c_seguidores|number_format:0:',':'.'}</span>Seguidores</li>
            </ul>
        </div>
	
    <a href="#" onclick="$('.ver_com_info').toggle();return false;"><i class="com_icon icon_less"></i></a>
    <div class="clearfix"></div>
</div>