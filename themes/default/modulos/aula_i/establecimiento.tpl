<div class="header hidden" style="display: block;">
    <div class="content hidden" style="background: url({$tsConfig.url}/thumb/img/968/287/?file={if $tsInfo.aul_portad == 2}{$tsInfo.user.p_cabecera}{else}{$tsConfig.url}/images/avatar/port2.jpg{/if}) center;">
      <img class="avatar" src="{$tsConfig.url}/thumb/img/120/120/?file={if $tsInfo.aul_img == 2}{$tsInfo.user.w_avatar}{else}{$tsConfig.url}/images/avatar/group2.png{/if}" class="floatL">
      <div class="info floatL">
       <div class="title">{$tipo.brev}{$tsInfo.aul_name}
        {if $tsInfo.aul_verifi == 'Verifi_Ok'}<img src="{$tsConfig.url}/images/icons/truef.png" class="otip" title="Establecimiento verificado">{/if}
       </div>
       <div class="descd">{$tsInfo.aul_mdescription}</div>
      </div>
  <div class="floatR" style="margin: 7px 7px 0 0;">
  {if $tsInfo.miembro >= 1}
  <a class="input_button hidden">
  {else}<a class="adfoul input_button hidden" data-do="{$tsInfo.aul_id}" data-ko="4">{/if}
  <div class="load floatL dsnone"></div>
  {if $tsInfo.miembro >= 1}<div class="adfo1 floatL" style="display: block;">Soy miembro</div>
  {else}<div class="adfo1 floatL" style="display: block;">Unirme</div>{/if}
  </a>
  </div>
    </div>
    <link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/profile_aula.css">
  </div>

  <div class="content_pa hidden">
   <div class="lcont floatL">
   
      <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">pin</div> &nbsp; Dirección</div>
   <div class="gcontent">
    {$tsInfo.aul_location}
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">sns</div> &nbsp; Actividad</div>
   <div class="gcontent">
    <ol>
      <div class="cono">
        <div class="cono_title">Miembros</div>
    {foreach from=$tsInfo.actividus item=ko}
    <li><div class="hidden"><div class="floatL"><img src="{$ko.w_avatar}" style="width:32px;height:32px;"/></div><div class="floatL" style="margin: 0 0 0 4px;"><div>@{$ko.usuario_nombre}</div><div class="size11 color_gray">Se unio {$ko.aul_mem_hace|hace}</div></div></div></li>
    {/foreach}
  </div>
    </ol>
   </div>
   </div>
   </div>
   
   <div class="rcont floatL">

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">info</div> &nbsp; Información General</div>
   <div class="gcontent">
    <div class="g"><b>Registrado</b> {$tsInfo.aul_hace|hace}</div>
    <div class="g"><b>Registrado por</b> <a href="{$tsConfig.url}/{$tsInfo.user.usuario_nombre}">@{$tsInfo.user.usuario_nombre}</a></div>
   </div>
   </div>

    {if $tsInfo.aul_user_admin == $wuser->uid}
    <div class="gcont">
    <div class="gtitle"><div class="lsf floatL">info</div> &nbsp; Solicitudes</div>
    <div class="gcontent solicit_class">
      {if $tsInfo.solicit}
    {foreach from=$tsInfo.solicit item=c}
<li class="hidden" id="reg_{$c.aul_mem_id}_mem" style="padding: 5px 0px;border-bottom: 1px solid #DDDDDD;">
<div class="clearfix dsnone" id="error_flat"></div>
<div class="floatL"><img src="{$c.w_avatar}" style="width:32px;height:32px;"></div>
<div class="floatL" style="display: inline-block;width: 82%;">
<div class="floatL" style="margin: 0px 7px 1px 4px;">{$c.usuario_nombre}
<div class="size11 color_gray">{$c.aul_mem_hace|hace}</div></div>
<div class="list_acep dodpetead floatR">
<a class="qtip" title="Aceptar" data-res="1" data-o="{$c.aul_mem_id}" data-y="2"><i class="lsf">check</i></a>
<a class="qtip" title="Rechazar" data-res="2" data-o="{$c.aul_mem_id}" data-y="2"><i class="lsf">minus</i></a></div>
</div>
</li>
    {/foreach}
    {else}<div id="error_flat">No hay solicitudes aún.</div>{/if}
    </div>
    </div>
   {/if}

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">info</div> &nbsp; Información Personal</div>
   <div class="gcontent">
    <div class="g"><b>Fundaci&oacute;n</b> <span>{$tsInfo.aul_nac_dia}/{$tsInfo.aul_nac_mes}/{$tsInfo.aul_nac_anio}</span></div>
    <div class="g"><b>Sexo</b> {if $tsInfo.user.user_sexo == 0}Hombre{else}Mujer{/if}</div>
    <div class="g"><b>Pais</b> {$tsInfo.aul_pais|pais}</div>
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">alignadjust</div> &nbsp; Descripción personal</div>
   <div class="gcontent">
    <div class="g">{$tsInfo.aul_description}</div>
   </div>
   </div>

<div class="::stylettr" role="sttr">
<div>{if $tsInfo.aul_user_admin == $wuser->uid}
<style type="text/css">{literal}
.list_acep a{display: inline-block;margin: 0 !important;margin-left: -1px !important;border: 1px solid;border-color: #cdced0 #c5c6c8 #b6b7b9;-webkit-border-radius: 2px;-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0);-webkit-box-sizing: content-box;-webkit-font-smoothing: antialiased;font-size: 14px;position: relative;vertical-align: middle;text-decoration: none;white-space: nowrap;padding: 2px 8px;text-align: -webkit-center;}
.cono .cono_title{display: inline-block;margin: 1px 4px;border-bottom: 1px solid #DDDDDD;width: 100%;padding: 0 0 6px 0;font-weight: bold;color: #7A7A7A;text-shadow: 2px 2px 0px #DDDDDD;font-size: 15px;}
.cono li{padding: 5px 0;border-bottom: 1px solid #DDDDDD;}
{/literal}</style>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/aul_adclss.js"></script>{/if}</div>
</div>

   </div>
  </div>