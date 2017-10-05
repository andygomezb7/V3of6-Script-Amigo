<div class="header hidden" style="display: block;">
    <div class="content hidden" style="background: url({$tsConfig.url}/thumb/img/968/287/?file={if $tsInfo.aul_mem_portad == 2}{$info.p_cabecera}{else}{$tsConfig.url}/images/avatar/port2.jpg{/if}) center;">
      <img class="avatar" src="{$tsConfig.url}/thumb/img/120/120/?file={if $tsInfo.aul_mem_img == 2}{$info.w_avatar}{else}{$tsConfig.url}/images/avatar/group2.png{/if}" class="floatL">
      <div class="info floatL">
       <div class="title">{$tipo.brev}{if $info.name_original && $info.ap_original}{$info.name_original} {$info.ap_original}{else}{$info.usuario_nombre}{/if}
        {if $tsInfo.aul_mem_verifi == 'Verifi_Ok'}<img src="{$tsConfig.url}/images/icons/truef.png" class="otip" title="{$tipo.name} verificado">{/if}
       </div>
       <div class="descd">{$tsInfo.aul_mem_mdescription}</div>
      </div>
    </div>
    <link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/profile_aula.css">
  </div>

  <div class="content_pa hidden">
   <div class="lcont floatL">
   <div class="gcont">
   <div class="gtitle">Publicaciones</div>
   <div class="gcontent"></div>
   </div>
   </div>
   
   <div class="rcont floatL">

   <div class="gcont">
   <div class="gtitle">Información General</div>
   <div class="gcontent">
    <div class="g"><b>Registrado</b> {$tsInfo.aul_mem_hace|hace}</div>
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle">Información Personal</div>
   <div class="gcontent">
    <div class="g"><b>Nacimiento</b> <span>{$tsInfo.aul_mem_nac_dia}/{$tsInfo.aul_mem_nac_mes}/{$tsInfo.aul_mem_nac_anio}</span></div>
    <div class="g"><b>Sexo</b> {if $info.user_sexo == 0}Hombre{else}Mujer{/if}</div>
    <div class="g"><b>Pais</b> {$tsInfo.aul_mem_pais|pais}</div>
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle">Descripción personal</div>
   <div class="gcontent">
    <div class="g">{$tsInfo.aul_mem_description}</div>
   </div>
   </div>

   </div>
  </div>