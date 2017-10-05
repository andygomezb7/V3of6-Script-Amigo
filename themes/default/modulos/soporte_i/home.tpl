 <article style="width: 94%;margin: 0px auto;">
   <div id="ubc_frs">
   	 <div id="list_ubc">
      <ul>
     {foreach from=$ult.proy item=f}
      <li>
        <a href="{$tsConfig.url}/soporte/{$f.sf_seo}" title="{$f.sf_desc}">
        <img src="{$f.sf_img}" style="width: 64px;height: 64px;"/>
        <h3>{$f.sf_name}</h3>
        <div>
          <div class="floatL" style="padding: 5px 3px;">{$f.temas} <div class="color_gray size11">Temas</div></div>
          <div class="floatR" style="padding: 5px 1px;">{$f.res} <div class="color_gray size11">Respuestas</div></div>
        </div>
        </a>
      </li>
       {/foreach}
     </ul>
   </div>
 </div>
<div class="::stylesheets::">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/sup_home.css"></div>
</div>
 </article>