{if $tsDo == ''}
<div id="perfil_actividad" status="activo">
    <div class="widget big-info clearfix">
        <div class="title-w clearfix"><h3>&Uacute;ltima actividad de {$tsUsername}</h3></div>
        
        {if $tsActividad.total > 0}
        <div id="last-activity" class="last-activity">
            {foreach from=$tsActividad.data item=ad key=id}
            {if $ad.data}
            <div id="last-activity-date-{$id}" class="date-sep" active="true">
                <h3>{$ad.title}</h3>
                {foreach from=$ad.data item=ac}
                <div class="sep">
                    <div class="ac_cont">
                        {if $ac.style != ''}<span class="monac_icons ma_{$ac.style}"></span>{/if}
                        {$ac.text} <a href="{$ac.link}">{$ac.ltext}</a>
                        {if $tsUserID == $wuser->uid}<span class="remove dsnone"><a onclick="actividad.borrar({$ac.id}, this); return false;">x</a></span>{/if}
                    </div>
                    <span class="time">{$ac.date|hace}</span>
                </div>
                {/foreach}
            </div>
            {/if}
            {/foreach}
            {if $tsActividad.total > 0 && $tsActividad.total >= 25}
            <h3 id="last-activity-view-more">
                <a onclick="actividad.cargar({$tsUserID},'more', 0); return false;">Ver m&aacute;s actividad</a>
            </h3>
            {/if}
            <script type="text/javascript" src="{$tsConfig.url}/js/modo/act_prf.js"></script>
            <div id="total_acts" val="{$tsActividad.total}"></div>
        </div>
        {else}
        <div class="emptyData">Este usuario no tiene actividad.</div>
        {/if}
    </div>
</div>
{else}
            {foreach from=$tsActividad.data item=ad key=id}
            {if $ad.data}
            <div id="more-{$id}" nid="last-activity-date-{$id}" class="date-sep" active="false">
                <h3 style="display:none">{$ad.title}</h3>
                {foreach from=$ad.data item=ac}
                <div class="sep">
                    <div class="ac_content">
                        {if $ac.style != ''}<span class="monac_icons ma_{$ac.style}"></span>{/if}
                        {$ac.text} <a href="{$ac.link}">{$ac.ltext}</a>
                        {if $tsUserID == $_SESSION}<span class="remove"><a onclick="actividad.borrar({$ac.id}, this); return false;">x</a></span>{/if}
                    </div>
                    <span class="time">{$ac.date|hace}</span>
                </div>
                {/foreach}
            </div>
            {/if}
            {/foreach}
            {if $tsActividad.total > 0 && $tsActividad.total >= 25}
            <h3 id="last-activity-view-more">
                <a onclick="actividad.cargar({$tsUserID},'more', 0); return false;">Ver m&aacute;s actividad</a>
            </h3>
            {/if}
            <div id="total_acts" val="{$tsActividad.total}"></div>
            <div id="jsdump">
            <script type="text/javascript">
            // {literal}
            $(function(){
                /*
                    EL SIGUIENTE CODIGO SIRBE PARA NO MOSTRAR LOS SEPARADORES DE FECHA POR SI YA ESTAN,
                    ESTO FUE HECHO ASI PARA EVITAR MAS CONSULTAS AL SERVIDOR... 
                */
                var ac_dates = new Array('today', 'yesterday', 'month', 'old');
                for(var i = 0; i < ac_dates.length; i++){
                    var obj_name = 'last-activity-date-' + ac_dates[i];
                    var obj = $('#' + obj_name);
                    // MORE
                    var m_name = 'more-' + ac_dates[i];
                    var mobj = $('#' + m_name);
                    // ACTIVO
                    var active = obj.attr('active');
                    // VALIDAMOS
                    if(typeof active == 'undefined'){
                        //
                        var new_id = $(mobj).attr('nid');
                        $(mobj).attr('id',new_id);
                        $(mobj).find('h3').show();
                        $(mobj).removeAttr('nid').attr('active','true');
                        
                    } else {
                        $(mobj).find('h3').remove();
                        var html = $(mobj).html();
                        $(obj).append(html)
                        $(mobj).remove();
                    }
                }
                // ME AUTO ELIMINO
                $('#jsdump').remove();
            });
            // {/literal}
            </script>
            <script type="text/javascript" src="{$tsConfig.url}/js/modo/act_prf.js"></script>
            </div>
{/if}