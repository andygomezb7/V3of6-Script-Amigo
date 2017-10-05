
<div style="width: 81%;overflow: hidden;float: left;">
  {foreach from=$misproyectos item=p}
<div style="overflow: hidden;background: #fff;border: 1px solid #D1D7E6;padding: 3px 3px;overflow: hidden;margin: 0px 7px 2px 0px;  background: #E4E8ED;  position: relative;width: 48%;float: left;">
  <div style="overflow: hidden;float: left;width: 100%;">
    <a href="{$tsConfig.url}/soporte/{$p.sf_seo}/" style="float: left;" id="hoverefect1"><div id="hf1">Click aqui</div><img src="{$p.sf_img}" style="width: 64px;height: 64px;"></a>
    <div style="float: left;overflow: hidden;margin: 0px 0px 0px 7px;width: 80%;">
    <div style="font-weight: bold;font-size: 13px;"><a href="{$tsConfig.url}/soporte/{$p.sf_seo}/">{$p.sf_name}</a></div>
    <div style="font-size: 11px;">{$p.sf_desc}</div>
    </div>
  </div>
</div>
  {/foreach}
</div>

<div style="float: left;width: 19%;"><div style="min-height: 201px;padding: 8px 5px;background: #ECE055;"><b>Un poco de información</b><br> 
Un proyecto es un sistema para administrar tus pedidos o peticiones, es un sistema que te facilita la administración de peticiones via temas creados en tu proyecto.
<br /><br />
Puedes administrar tus categorias para organizar mejor tus temas...
</div></div>
