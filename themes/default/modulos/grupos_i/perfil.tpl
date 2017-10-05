<div class="grupos_perf_i">
<div class="grupos_perf_i_c">
<div class="grupos_perf_hdr">
<div class="htd">
{if $tsGrupo.members}
{foreach from=$tsGrupo.members item=g}
<div class="gmm">
<img src="{$g.w_avatar}">
<div class="tx">{$g.usuario_nombre}</div>
</div>
{/foreach}{else}
{for $foo=1 to 7}
<div class="gmm">
<img src="{$tsConfig.url}/images/avatar/group.png">
<div class="tx">Usuario</div>
</div>
{/for}
{/if}
</div>

<div class="vat">
<a href="{$tsConfig.url}/grupos/{$tsGrupo.wdefined}/"><img src="{if $tsGrupo.avatar}{$tsGrupo.avatar}{else}{$tsConfig.url}/images/avatar/group.png{/if}"></a>
<div class="txt_d"> <div class="floatL"><a href="{$tsConfig.url}/grupos/{$tsGrupo.wdefined}/">{$tsGrupo.nombre}</a></div>
<ul>
{if $tsGrupo.idadmin1 == $wuser->uid}<li><a href="{$tsConfig.url}/grupos/{$tsGrupo.wdefined}/editar">Editar grupo</a></li>{/if}
<li><a href="{$tsConfig.url}/grupos/{$tsGrupo.wdefined}/?ag=miembros">Miembros</a></li>
</ul>
</div>
</div>
</div>

<div class="grupos_perf_foo">
{if $get_.preg == 'editar'}
{if $tsGrupo.idadmin1 == $wuser->uid}
<div class="formuadmin dosneloksl">
<fieldset>
<dl>
<dt><label>Nombre</label><br><span>Nombre identificador del grupo</span></dt>
<dd><input type="text" name="nom" value="{$tsGrupo.nombre}"/></dd></dl>

<dl>
<dt><label>Nombre corto</label><br> <span>El nombre corto no se puede editar.</span></dt>
<dd><input type="text" value="{$tsGrupo.wdefined}" disabled="disabled" disable/></dd>
</dl>

<dl>
<dt><label>Avatar</label><br><span>Sube una imagen de tu escritorio.</span></dt>
<dd>
<div class="updvt_gru">
<div class="updvt_lodt dsnone">
<h1>Subiendo...</h1>
<div class="barloading"><div class="bar" style="width: 5%;"></div></div>
</div>

<div class="updvt_show_d {if !$tsGrupo.avatar}dsnone{/if}">
<div style="position:relative;width:175px;height:175px;">
<center><div style="position:absolute;float:center;font-size:23px;left:8px;top:8px;" class="lsf"><a onclick="$('.updvt_show_d').fadeOut(250);$('.updvt_shound').fadeIn(250);">close</a></div></center>
<img src="{$tsGrupo.avatar}" style="width:175px;height:175px;"></div>
<input type="hidden" name="upimg" value="{if $tsGrupo.avatar}{$tsGrupo.avatar}{else}1{/if}">
</div>

<div class="updvt_shound {if $tsGrupo.avatar}dsnone{/if}">
<div style="border: 1px dashed rgba(0, 0, 0, 0.207843); padding: 2em; position: relative; text-align: -webkit-center; width: 70%;" class="hover cursorP ZErO_uNiMg"><div class="lsf" style="font-size: 56px;"><a>camera</a></div><input type="file" class="inputnone cursorP" id="upster_uNGrimg_Edtr">
</div>
</div>

</div>
</dd>
</dl>

<dl>
<dt><label>Descripcion</label><br><span>Descripción breve o larga del grupo (información sobre el).</span></dt>  
<dd><textarea name="desc" id="descgg" style="width: 451px;
height: 190px;">{$tsGrupo.descripcion}</textarea></dd>
</dl>

<dl>
<dt><label>Categoria</label><br><span>Categoria del grupo</span></dt>
<dd><select id="cattg" name="cat">
{foreach from=$catsc item=c}
<option value="{$c.cid}" {if $tsGrupo.categoria == $c.cid}selected="selected"{/if}>{$c.c_nombre}</option>
{/foreach}
</select><input type="hidden" name="type" value="{$tsGrupo.idgrupo}" /></dd>
</dl>
</fieldset>
<center><input type="button" class="bg_green_3d btn color_white" name="dnlwkd" value="Guardar cambios"></center>
</div>
{else}<h1>No eres administrador de este grupo...</h1>{/if}
{elseif $getgeta == 'miembros'}
<div class="pub_ongroup floatL">
<div class="clearfix hidden">{foreach from=$raymembers item=ug}
<div class="floatL hidden" style="margin: 5px;">
<a href="{$tsConfig.url}/{$ug.usuario_nombre}/" title="{$ug.usuario_nombre}" style="display:block;">
<img src="{$ug.w_avatar}" style="width: 120px;height:120px;padding:3px;border:2px solid #CCCCCC;"/>
</a>
</div>
{/foreach}</div>
<div class="pags hidden clearfix">{$ragpsg}</div>
</div>

<!----GADGETS MEIMBROS-->
<div class="pub_gadgts floatL">
{if $tsGrupo.idadmin1 == $wuser->uid}
<div class="box">
<div class="t">Administración del grupo</div>
<div>
<div class="clearfix"><b>Identificador</b> {$tsGrupo.idgrupo}</div>
<div class="clearfix"><b>Administrador</b> {$tsGrupo.admin}</div>
<div class="clearfix"><b>Miembros</b> {$tsGrupo.membersnum}</div>
</div>
</div>
<div class="box">
<div class="t">Solicitudes</div>
<div id="goGDM">{if $tsGrupo.solicitudes}
{foreach from=$tsGrupo.solicitudes item=m}
<div class="list hidden" id="soDMG{$m.idregistro}"><div class="img floatL"><img src="{$tsConfig.url}/thumb/img/60/60/?file={$m.w_avatar}"></div>
<div class="text floatL"><div><a href="{$tsConfig.url}/{$m.usuario_nombre}/">@{$m.usuario_nombre}</a></div><div class="color_gray size11">{$m.fecha_registro|hace}</div>
<div><a class="so input_button ibg" data-o='{$m.idregistro}' data-i='1'>Añadir</a> &nbsp; | &nbsp; <a class="so input_button ibr" data-o='{$m.idregistro}' data-i='2'>Rechazar</a></div>
</div></div>
{/foreach}{else}<div id="error_flat" class="blue_flat">No hay solicitudes aún.</div>{/if}
</div>
</div>
{/if}

<div class="box">
<div class="t">Ultimos miembros
{if $tsGrupo.solit}
{if $tsGrupo.soli.estado == 1}
<a class="input_button btn floatR folg" data-o="2">Abandonar</a>{else}<a class="input_button ibg btn floatR folg" data-o="2" title="Haz click y saldras del grupo">Solicitud enviada</a>{/if}
{else}<a class="input_button ibg btn floatR folg" data-o="1">Unirme</a>{/if}
</div>
<div>{if $tsGrupo.members}
{foreach from=$tsGrupo.members item=m}
<div class="list hidden"><div class="img floatL"><img src="{$tsConfig.url}/thumb/img/60/60/?file={$m.w_avatar}"></div>
<div class="text floatL"><div><a href="{$tsConfig.url}/{$m.usuario_nombre}/">@{$m.usuario_nombre}</a></div><div class="color_gray size11">{$m.fecha_registro|hace}</div></div></div>
{/foreach}{else}<div id="error_flat" class="blue_flat">No hay miembros aún.</div>{/if}
</div>
</div>

<div class="box">
<div class="t">Grupos relacionados</div>
<div>
{foreach from=$relacgrups item=g}
<div class="list hidden"><div class="img floatL"><a href="{$tsConfig.url}/grupos/{$g.wdefined}/"><img src="{$g.avatar}"></a></div>
<div class="text floatL"><div><a href="{$tsConfig.url}/grupos/{$g.wdefined}/" title="Ir al grupo">{$g.nombre}</a></div><div class="color_gray size11">{$g.miembros} {if $g.miembros <= 1}miembro{else}miembros{/if}</div></div></div>
{/foreach}
</div>
</div>

</div>
<!----GADGETS MEIMBROS-->

{else}
<div class="pub_ongroup floatL"><div class="dorLork"><input type="hidden" name="pGt" value="2" /><input type="hidden" name="pGtScrooll" value="2" /></div>{if $tsGrupo.solit && $tsGrupo.soli.estado == 1}
{include file='modulos/home_i/publicador.tpl'}{/if}
<div class="pub_load_BWorts">Cargando bworts...</div>
</div>
<div class="pub_gadgts floatL">
{if $tsGrupo.idadmin1 == $wuser->uid}
<div class="box">
<div class="t">Administración del grupo</div>
<div>
<div class="clearfix"><b>Identificador</b> {$tsGrupo.idgrupo}</div>
<div class="clearfix"><b>Administrador</b> {$tsGrupo.admin}</div>
<div class="clearfix"><b>Miembros</b> {$tsGrupo.membersnum}</div>
</div>
</div>
<div class="box">
<div class="t">Solicitudes</div>
<div id="goGDM">{if $tsGrupo.solicitudes}
{foreach from=$tsGrupo.solicitudes item=m}
<div class="list hidden" id="soDMG{$m.idregistro}"><div class="img floatL"><img src="{$tsConfig.url}/thumb/img/60/60/?file={$m.w_avatar}"></div>
<div class="text floatL"><div><a href="{$tsConfig.url}/{$m.usuario_nombre}/">@{$m.usuario_nombre}</a></div><div class="color_gray size11">{$m.fecha_registro|hace}</div>
<div><a class="so input_button ibg" data-o='{$m.idregistro}' data-i='1'>Añadir</a> &nbsp; | &nbsp; <a class="so input_button ibr" data-o='{$m.idregistro}' data-i='2'>Rechazar</a></div>
</div></div>
{/foreach}{else}<div id="error_flat" class="blue_flat">No hay solicitudes aún.</div>{/if}
</div>
</div>
{/if}

{if $wuser->uid}<div class="box">
<div class="t">Agrega miembros</div>
<div>
<input type="text" style="margin: 0 5px 0 0;width: 79%;" class="addusgr" placeholder="Escribe el nombre del usuario"><input type="button" class="bg_green_3d btn color_white" value="Invitar">
</div>
</div>{/if}

<div class="box">
<div class="t">Ultimos miembros
{if $tsGrupo.solit}
{if $tsGrupo.soli.estado == 1}
<a class="input_button btn floatR folg" data-o="2">Abandonar</a>{else}<a class="input_button ibg btn floatR folg" data-o="2" title="Haz click y saldras del grupo">Solicitud enviada</a>{/if}
{else}<a class="input_button ibg btn floatR folg" data-o="1">Unirme</a>{/if}
</div>
<div>{if $tsGrupo.members}
{foreach from=$tsGrupo.members item=m}
<div class="list hidden"><div class="img floatL"><img src="{$tsConfig.url}/thumb/img/60/60/?file={$m.w_avatar}"></div>
<div class="text floatL"><div><a href="{$tsConfig.url}/{$m.usuario_nombre}/">@{$m.usuario_nombre}</a></div><div class="color_gray size11">{$m.fecha_registro|hace}</div></div></div>
{/foreach}{else}<div id="error_flat" class="blue_flat">No hay miembros aún.</div>{/if}
</div>
</div>

<div class="box">
<div class="t">Grupos relacionados</div>
<div>
{foreach from=$relacgrups item=g}
<div class="list hidden"><div class="img floatL"><a href="{$tsConfig.url}/grupos/{$g.wdefined}/"><img src="{$g.avatar}"></a></div>
<div class="text floatL"><div><a href="{$tsConfig.url}/grupos/{$g.wdefined}/" title="Ir al grupo">{$g.nombre}</a></div><div class="color_gray size11">{$g.miembros} {if $g.miembros <= 1}miembro{else}miembros{/if}</div></div></div>
{/foreach}
</div>
</div>

</div>
{/if}
</div>

<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/gru_prf.css"></div>
{if $tsGrupo.idadmin1 == $wuser->uid}<script type="text/javascript" src="{$tsConfig.url}/js/modo/grup_ditG.js"></script>{/if}
<script type="text/javascript" src="{$tsConfig.url}/js/modo/grupad.js"></script>
<script type="text/javascript">{literal}
var gloGru = {{/literal}
iten: {$tsGrupo.idgrupo}{literal}
}
{/literal}</script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/pub.css"/>
{if $tsGrupo.solit && $tsGrupo.soli.estado == 1}<script type="text/javascript" src="{$tsConfig.url}/js/pub.js"></script>{/if}
<script type="text/javascript" src="{$tsConfig.url}/js/modo/bwort.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/bwts.css" />
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/pubcontents.css">
</div>
</div>
</div>