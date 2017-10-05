   <!---------------- ULTIMOS TEMAS -------------->
      <div id="foroscats">
    <div class="headerf">Ultimos temas</div>
    <div class="info">
          <div class="col star" style="height: 11px;width: 25px;padding: 8px 0px;"></div>
          <div class="col forum" style="height: 11px;">Foro</div>
          <div class="col posts" style="height: 11px;padding: 9px 3px 6px 7px;width: 131px;">Respuestas</div>
          <div class="clearfix"></div>
      </div>
     <div id="listf">
    {foreach from=$ult.temas item=t}
      <div class="foro">
         <div class="col off">&nbsp;</div>
         <div class="col forum" style="height: 29px;">
         <a href="{$tsConfig.url}/soporte/{$t.foro.sf_seo}?a={$t.sr_id}">{$t.sr_title}</a> <span class="view-info"></span><br />
          <span class="info">{$t.sr_date|hace}</span>
         </div>
         <div class="col posts" style="padding: 23px 18px 9px 22px;width: 131px;">{$t.res}</div>
         <div class="clearfix"></div>
      </div>
      {/foreach}
     </div>
   </div>


   <!------------------ ULTIMAS RESPUESTAS -------------------->

      <div id="foroscats">
    <div class="headerf">Ultimas respuestas</div>
    <div class="info">
          <div class="col star" style="height: 11px;width: 25px;padding: 8px 0px;"></div>
          <div class="col forum" style="height: 11px;">Foro</div>
          <div class="col posts" style="height: 11px;padding: 9px 3px 6px 7px;width: 131px;">Respuestas en el tema</div>
          <div class="clearfix"></div>
      </div>
     <div id="listf">
   {foreach from=$ult.res item=f}
      <div class="foro">
         <div class="col off">&nbsp;</div>
         <div class="col forum" style="height: 29px;">
         <a href="{$tsConfig.url}/soporte/{$f.foro.sf_seo}?a={$f.tema.sr_id}">En: {$f.tema.sr_title}</a> <span class="view-info"></span><br />
          <span class="info">{$f.sr_date|hace}</span>
         </div>
         <div class="col posts" style="padding: 23px 18px 9px 22px;width: 131px;">{$f.tema.res}</div>
         <div class="clearfix"></div>
      </div>
        {/foreach}
     </div>
   </div>