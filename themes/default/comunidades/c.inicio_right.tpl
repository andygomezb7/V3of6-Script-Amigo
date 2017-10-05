<div class="com_home_right">
    {if $tsPopulares.semana}
    <div class="com_box_info" style="margin-top: 20px;">
        <div class="cbi_title">Foros destacada</div>
        <div class="cbi_body clearfix">
            {foreach from=$tsPopulares.semana item=c key=i}
            {if $i == 0}
            <div class="com_destacada">
            	<div class="cd_left floatL">
                <a href="{$tsConfig.direccion_url}/foro/{$c.c_nombre_corto}/" title="{$c.c_nombre}"><img src="{$tsConfig.direccion_url}/files/uploads/c_{$c.c_id}.jpg" alt="{$c.c_nombre}" width="120" height="120" /></a>                
            	</div>
                <div class="cd_right floatL">
                	<h2>{$c.c_nombre}</h2>
                	<ul>
                    	<li>Creada {$c.c_fecha|hace}</li>
                        <li><strong>Miembros: </strong>{$c.c_miembros}</li>
                        <li><strong>Temas: </strong>{$c.c_temas}</li>
                        <a class="input_button" href="{$tsConfig.direccion_url}/foro/{$c.c_nombre_corto}/">Ver foro</a>                      
                    </ul>
                </div>
            </div>
            {/if}
        	{/foreach}
    	</div>
    </div>
    {/if}
    
</div>