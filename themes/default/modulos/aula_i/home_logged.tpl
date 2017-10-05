<div class="aul_home_l">
<div class="aul_headr">
<a class="vctip floatL" title="Mi Foto de perfil"><img style="width:62px;height:62px;" src="{$aula.member.img}"></a>
<div class="aul_info floatL"><span class="floatL">{$u.name}</span> <span class="floatL" style="margin: 3px 4px 0px 7px;"><i class="spe"></i></span> <span class="floatL">{$aula.member.tipo}</span> <div class="floatR"><a class="btn_green color_white btn adDclS ssLR">Crear clase</a> {if $aula.member.aul_mem_type == 2}<a class="btn_green color_white btn adDsTlbcmt">Registrar establecimiento</a>{/if} </div></div>
</div>
<div class="aul_con hidden">

<div class="conte_au">
<div class="ttl_au">Ultimas visitas <div class="floatR">{$ultVisit.num}</div></div>
<div class="cnt_au">
<ol class="h">
{foreach from=$ultVisit item=s}
{if $s.type == 49}
<li title="El inicio de {$tsConfig.name} Aula" alt="El inicio de {$tsConfig.name} Aula"><span>Inicio &nbsp;</span> <span class="color_gray size11">{$s.v_hace|hace}</span></li>
{elseif $s.type == '51'}
{if $s.u_v == $u.usuario_id}
<li title="Tu perfil en {$tsConfig.name} Aula" alt="Tu perfil en {$tsConfig.name} Aula"><img src="{$tsConfig.url}/thumb/img/60/60/?file={$s.avt}" class="width16 floatL"/> <span>&nbsp; Tu Perfil &nbsp;</span> <span class="color_gray size11">{$s.v_hace|hace}</span></li>
{else}
<li title="Su perfil en {$tsConfig.name} Aula" alt="Tu perfil en {$tsConfig.name} Aula"><img src="{$tsConfig.url}/thumb/img/60/60/?file={$s.avt}" class="width16 floatL"/> &nbsp; <span>Perfil de {$s.user} &nbsp;</span> <span class="color_gray size11">{$s.v_hace|hace}</span></li>
{/if}
{/if}
{/foreach}
</ol>
	</div>
</div>

<div class="conte_au" style="width: 75%;">
<div class="ttl_au">Eres miembro en:</div>
<div class="cnt_au">
{if $memin}
{foreach from=$memin item=c}
<li class="clearfix" style="margin: 5px 0px;">
<div class="floatL"><img src="{if $c.aul_img == 2}{$c.user.w_avatar}{else}{$tsConfig.url}/images/avatar/group.png{/if}" style="width:32px;height:32px;"/></div>
<div class="floatL" style="margin: 0 0 0 4px;">
<h1><a href="{$tsConfig.url}/int/aula/{$c.aul_key}/">{$c.aul_name}</a></h1>
<span class="color_gray color_white">Creada {$c.aul_hace|hace} | Registrado por @{$c.user.usuario_nombre}</span></div>
</li>
{/foreach}
{else}
<div id="error_flat">No eres miembro aun en ningun establecimiento o clase.</div>
{/if}
</div>
</div>

<div class="conte_au" style="width: 75%;">
<div class="ttl_au">Tus clases</div>
<div class="cnt_au">
{if $clsesHm}
{foreach from=$clsesHm item=c}
<li class="clearfix" style="margin: 5px 0px;">
<div class="floatL"><img src="{if $c.aul_kind_img == 2}{$c.user.w_avatar}{else}{$tsConfig.url}/images/avatar/group.png{/if}" style="width:32px;height:32px;"/></div>
<div class="floatL" style="margin: 0 0 0 4px;">
<h1><a href="{$tsConfig.url}/int/aula/{$c.aul_kind_key}.0c">{$c.aul_kind_name}</a></h1>
<span class="color_gray color_white">Creada {$c.aul_kind_hace|hace} | Registrada por @{$c.user.usuario_nombre}</span></div>
</li>
{/foreach}
{else}
<div id="error_flat">No eres miembro aun en ningun establecimiento o clase.</div>
{/if}
</div>
</div>

</div>
<div class="::role=stylesheets::" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/aula_member.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/ttr/aula_h.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/aulAdcLs.js"></script>
{if $aula.member.aul_mem_type == 2}<script type="text/javascript" src="{$tsConfig.url}/js/modo/AdDsTblCmnt.js"></script>{/if}
</div>
</div>
</div>