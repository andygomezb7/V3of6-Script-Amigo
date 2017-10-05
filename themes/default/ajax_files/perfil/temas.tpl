{foreach from=$st item=t}
 <div class="com_list_element clearfix" {if $c.c_estado == 1 || $t.t_estado == 1}style="opacity: 0.5;background: #000;" title="La tema ha sido eliminado"{/if}>
          <i class="com_icon {$t.c_seo}" class="qtip" title="{$t.c_}" style="position: relative;left: -50px;top: 3px;z-index: 20;"></i>
      <a href="#" style="position: relative;float: left;"><img src="{if $t.w_avatar == NULL}{$tsConfig.direccion_url}/images/avatar/group.png{else}{$t.w_avatar}{/if}" style="width: 50px; height: 50px;" /></a>
            <a href="{$tsConfig.direccion_url}/foro/{$t.c_nombre_corto}/{$t.t_id}/{$t.t_titulo|seo}.html" title="Ir al tema" class="qtip" style="position: relative;font-family: wortit,arial,sans-serif;  font-weight: normal;color: #2D2E2E;">{$t.t_titulo|truncate:70}</a>
            <div class="cli_info" style="left: 9px;top: 5px;font-size: 13px;position: relative;">{$t.t_fecha|hace} ·  En <a href="{$tsConfig.direccion_url}/foro/{$t.c_nombre_corto}/" style="font-size: 13px;">{$t.c_nombre}</a> Por <a href="{$tsConfig.direccion_url}/{$t.usuario_nombre}/" style="font-size: 13px;">{$t.usuario_nombre}</a></div>
        </div>
{/foreach}