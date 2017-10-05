<div class="com_tema_autor clearfix" style="margin-bottom: 4px !important;background-color: #FFFFFF;box-shadow: 0px 2px 0px 0px #7C7C7C;">
	<div class="com_box_title clearfix">
        <h2><a href="{$tsConfig.direccion_url}/{$tsAutor.usuario_nombre}">{$tsAutor.usuario_nombre}</a></h2>
        <div class="cbt_right" style="background: transparent;">
            <img src="{$tsConfig.default}/images/static/options/icons/ranks/{$tsAutor.rango.icono}" class="vctip" title="{$tsAutor.rango.name}" />
            <img src="{$tsConfig.default}/images/icons/{if $tsAutor.user_sexo == 0}male{else}female{/if}.png" class="vctip" title="{if $tsAutor.user_sexo == 0}Hombre{else}Mujer{/if}" />
            <img src="{$tsConfig.default}/images/flags/{$tsAutor.paisu.p_img}.png" style="padding:2px" class="vctip" title="{$tsAutor.paisu.p_opcion}" />
        </div>
    </div>
    <div class="com_box_body clearfix">
    	<div class="cta_avatar floatL">
        	<a href="{$tsConfig.direccion_url}/{$tsAutor.usuario_nombre}">
                <img alt="Ver perfil de {$tsAutor.usuario_nombre}" src="{$tsAutor.w_avatar}" width="120" height="120" style="margin: 0px 0px 0px 62px;"/>
            </a>
            <span title="{$tsAutor.status.t}" style="margin: 0px 0px 0px 61px;font-weight:normal;color:{$tsAutor.rango.color};" class="cta_status {$tsAutor.status.css} qtip">{$tsAutor.rango.name}</span>
        </div>
        <div class="cta_detalles floatL">
        	<ul class="ctad_items">
            	<li><i class="com_icon icon_eye"></i> <strong>{$tsAutor.user_seguidores|number_format:0:",":"."}</strong> <span>Seguidores<span></li>
                <li><i class="com_icon icon_temas"></i> <strong>{$tsAutor.user_temas|number_format:0:",":"."}</strong> <span>Temas</span></li>
                <li><i class="com_icon icon_comentarios"></i> <strong>{$tsAutor.user_comentarios|number_format:0:",":"."}</strong> <span>Comentarios</span></li>
            </ul>
        </div>
    </div>
</div>

<br class="spacer"/>
{if $tsAutor.usuario_id == $_SESSION || $tsCom.mi_rango >= 4 || $u.derechos.r_mod1 == 1}
<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Opciones</h2></div>
    <div class="com_box_body clearfix">
        <center>{if $tsTema.t_estado == 1}
        	<a href="javascript:com.reactivar_tema();" class="input_button"><i class="com_icon icon_editar"></i>Reactivar</a>
        {else}
            <a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/editar-tema/{$tsTema.t_id}/" class="input_button">Editar</a>
            {if $tsAutor.user_id == $_SESSION}
            <a href="javascript:com.del_tema();" class="input_button ibr">Eliminar</a>
            {else}
            <a href="javascript:com.del_mod_tema();" class="input_button ibr">Eliminar</a>
            {/if}
        {/if}</center>
    </div>
</div>
{/if}

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Mas temas</h2></div>
    <div class="com_box_body clearfix">
        {if $masdecomun}
        {foreach from=$masdecomun item=t}
        <div class="com_list_element"><a class="cle_autor" href="{$tsConfig.direccion_url}/{$t.usuario_nombre}">{$t.usuario_nombre}</a><a class="cle_title" href="{$tsConfig.direccion_url}/foro/{$t.c_nombre_corto}/{$t.t_id}/{$t.t_titulo|seo}.html">{$t.t_titulo|limit:30}</a></div>
        {/foreach}
        {else}
        <div class="com_bigmsj_blue">No hay Temas para mostrar</div>
        {/if}
    </div>
</div>

<div class="com_new_box" style="background-color: #FFFFFF;">
    <div class="com_box_title clearfix"><h2>Comentarios recientes</h2></div>
    <div class="com_box_body clearfix">
    	{if $tsLastRespuestas}
        {foreach from=$tsLastRespuestas item=r}
        <div class="com_list_element"><a class="cle_autor" href="{$tsConfig.direccion_url}/{$r.usuario_nombre}">{$r.usuario_nombre}</a><a class="cle_title" href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/{$r.t_id}/{$r.t_titulo|seo}.html#coment_id_{$r.r_id}">{$r.t_titulo|limit:30}</a></div>
        {/foreach}
        {else}
        <div class="com_bigmsj_blue">No hay comentarios recientes</div>
        {/if}
    </div>
</div>
  
  <div class="com_new_box" style="background-color: #FFFFFF;padding: 10px 0px 12px 0px;">
  <div class="com_box_body clearfix">
<small><i class="com_icon icon_denuncia" style="vertical-align:top;margin-right:1px;opacity: 0.5;"></i><a href="#" onclick="denuncia.nueva('tema',{$tsTema.t_id}, '{$tsTema.t_titulo}', '{$tsAutor.user_name}'); return false;">Denunciar Tema</a> - <a href="{$tsConfig.direccion_url}/foro/{$tsCom.c_nombre_corto}/mod-history/">Historial</a></small>
  </div>
  </div>