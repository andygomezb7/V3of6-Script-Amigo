<h2 class="title">Actividad de los moderadores</h2>
<p>En esta parte de la administración de {$tsConfig.name} puedes administrar los reportes que se hacen en la parte inferior de la pagina.</p>
<br><br>
        {if $act.total > 0}
        <div id="last-activity" class="last-activity">
            {foreach from=$act.data item=ad key=id}
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
            {if $act.total > 0 && $act.total >= 25}
            <h3 id="last-activity-view-more">
                <a onclick="actividad.cargar({$tsUserID},'more', 0); return false;">Ver m&aacute;s actividad</a>
            </h3>
            {/if}
            <script type="text/javascript" src="{$tsConfig.url}/js/modo/act_prf.js"></script>
            <div id="total_acts" val="{$act.total}"></div>
        </div>
        {else}
        <div class="emptyData">Este usuario no tiene actividad.</div>
        {/if}
        <div class="::sttr" role="sttr">
        	<div>
<style type="text/css">{literal}
#last-activity{} #perfil_actividad .title-w{margin: 5px 0 1px 16px;} #last-activity .date-sep{} #last-activity .date-sep h3{background: none repeat scroll 0 0 #EEEEEE;border-bottom: 1px solid #CCCCCC;color: #FF6600;font-size: 13px;font-weight: bold;margin: 0;padding: 8px;} #last-activity .date-sep .sep{background: none repeat scroll 0 0 #FFFFFF !important;border-bottom: 1px dotted #CCCCCC;color: #333333;font-size: 12px;padding: 8px;position: relative;} #last-activity .date-sep .sep .ac_cont{overflow: hidden;height: 16px;width: 585px;} #last-activity .date-sep .sep .time{background: none repeat scroll 0 0 #FFFFFF;color: #999999;display: block;font-size: 11px;padding: 5px 5px 5px 10px;position: absolute;right: 0;top: 3px;}
{/literal}</style>
        	</div>
        </div>