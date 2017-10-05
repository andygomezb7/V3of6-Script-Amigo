<div id="header">
<div class="contentheader">
<div style="float: left;"><img src="{$pagetgo.sf_img}" style="width: 64px;height: 64px;"></div>
<div style="margin: 0px 0px 0px 73px;font-size:15px;">{$pagetgo.sf_name}</div>
<div class="comillas">{$pagetgo.sf_desc}</div>
</div>
<div style="float: right;overflow: hidden;padding: 7px 7px;">
<div> {$pagetgo.temas} <b>Temas</b></div>
<div> {$pagetgo.res} <b>Respuestas</b></div>
</div>
</div>
<div id="submenu">
<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}/">Inicio</a>
{if $pagetgo.sf_creator == $_SESSION}<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}">Ultimos Tickets</a>
<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}?action=admin&act=edit">Editar proyecto</a>
<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}?action=admin">Administrar</a>
<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}?action=admin&act=cats">Categorias</a>{/if}
<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}?act=crear">Nuevo Tema</a>
</div>
<div id="contentsf">

{* PAGE TEMA *}
{if $aget}
<div style="overflow:hidden;width:100%;margin: 6px 0px 0px 0px;">
<div style="float: left;width: 100px;text-align: -webkit-center;">
<input type="hidden" value="{$pagetgo.sf_id}" id="idfpry" />
<input type="hidden" value="{$aget}" id="idtpryf" />
<a href="{$tsConfig.url}/soporte/{$infoa.p.sf_seo}"><img src="{$infoa.p.sf_img}" style="width: 64px;height: 64px;"></a>
<br>
<span>{$infoa.p.sf_name}</span><br>
<span style="font-style:italic;font-size: 11px;">{$infoa.p.sf_desc}</span>
</div>

<div style="float: left;width: 88%;">
<div style="padding: 5px 0px;border-bottom: 1px dashed #9C9999;font-size: 16px;" title="Titulo del tema." class="qtip cursorP"><span>{$infoa.sr_title}</span></div>
<div style="margin: 15px 0px 0px 15px;">{$infoa.sr_content}</div>
</div>
   
</div>
<div style="text-transform:uppercase;font-size:16px;margin: 10px 0px 10px 113px;"><span>Respuestas</span></div>
{if $inforesp}
<div id="{$infoa.sr_id}_sss">
{foreach from=$inforesp item=r}
<div style="overflow: hidden;padding: 10px 3px;border-top: 1px solid #CCCCCC;border-bottom: 1px solid #CCCCCC;">
<div style="float: left;width: 100px;text-align: -webkit-center;padding: 10px 0px;border-right: 1px solid #CCCCCC;">
<a href="{$tsConfig.url}/{$r.usuario_nombre}"><img src="{$r.w_avatar}" style="width:34px;height:34px;"></a>
<br>
<span>{$r.name_original} {$r.ap_original}</span><br>
<span style="font-style:italic;font-size: 11px;">{$r.descripcion}</span>
</div>
<div style="float: left;width: 88%;"><div style="margin: 15px 0px 0px 15px;">{$r.sr_content}</div></div>
</div>
{/foreach}
{else}
<div class="aviso" style="margin: 0px 0px 0px 111px;">No hay respuestas aun, ¡Se el primero!</div>
{/if}
</div>
<div style="margin: 21px 0px 21px 113px;" class="hidden">
<form>
<textarea class="textresp markItUp" name="cuerpo" style="width: 100%;min-height:104px;"></textarea>
<input type="button" value="Responder" onclick="supp.addresf('{$infoa.sr_id}_sss');" class="fb1 btn color_white" style="margin: 7px 0px 0px 0px;"/>
</form>
<div class="::stylehseets::sope" role="sttr">
<div><div><script type="text/javascript" src="{$tsConfig.url}/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/markItUp.css">
</div></div>
</div>
</div>
{/if}
{* END PAGE TEMA *}

{* HOME - HOME *}
{if !$tsAct && !$tsAction && !$aget}
<article style="width:70%;margin: 8px 9px 15px 0px;float:left;">
{foreach from=$catshomef.data item=f}
<div id="foroscats" style="margin:7px 0px 0px 0px;"> 
<div class="headerf">{$f.sc_name}</div> 
<div class="info"><div class="col star" style="height: 11px;width: 25px;padding: 8px 0px;"></div> <div class="col forum" style="height: 11px;">Información del tema</div><div class="col posts" style="height: 11px;padding: 9px 3px 6px 7px;">Respuestas</div> <div class="clearfix"></div> </div> 
<div id="listf"> 
{if $f.res}
{foreach from=$f.res item=s}
<div class="foro"><div class="col off">&nbsp;</div> 
<div class="col forum" style="height: auto;"> 
<a href="{$tsConfig.url}/soporte/{$pagetgo.sf_seo}?a={$s.sr_id}">{$s.sr_title}</a> 
<span class="view-info"></span><br> 
<span class="info">{$s.sr_date|hace}</span> 
</div> 
<div class="col topics" style="width: 40px;">{$s.statics.respuestas}</div> 
<div class="clearfix"></div></div> 
{/foreach}
{else}<div class="aviso">No hay temas en la categoria</div>{/if}
</div> 
</div>
{/foreach}
</article>
<article style="width:28%;float:left;margin: 8px 9px 15px 0px;">
<div id="foroscats" style="margin:7px 0px 0px 0px;"> 
 <div class="headerf">Ultimas respuestas en {$pagetgo.sf_name}</div> 
 <div class="info"><div class="col star" style="height: 11px;width: 25px;padding: 8px 0px;"></div> <div class="col forum" style="height: auto;width: 80%;">Información de la respuesta</div> <div class="clearfix"></div> </div> 
 <div id="listf"> 
{foreach from=$ultres item=r}
 <div class="foro">
  <div class="col off">&nbsp;</div> 
 <div class="col forum" style="height: auto;width: 80%;"> 
 <a href="{$tsConfig.url}/soporte/{$r.sf_seo}?a={$r.tema.sr_id}">{$r.tema.sr_title}</a> 
 <span class="view-info"></span><br> 
 <span class="info">{$r.sr_date|hace}</span> 
 </div> 
 <div class="clearfix"></div>
</div>
{/foreach}
</div> 
 </div>
</article>
{* END HOME *}
{/if}
{* HOME CREAR *}
{if $tsAct == 'crear'}
{if $_SESSION}<div class="sconrk consup"><div>
<form id="formsup" style="padding: 15px 0px 0px 0px;">
<input type="hidden" id="idproyeckt" value="{$pagetgo.sf_id}">
<table width="100%">
<tbody>
<tr>
<td><div id="titlef">Titulo del tema</div></td>
<td><input type="text" id="titletem" /><select id="cattmea" style="width: auto;padding: 5px 5px;margin: 0px 0px 0px 5px;">{foreach from=$catsp item=c}<option value="{$c.sc_id}">{$c.sc_name}</option>{/foreach}</select></td></tr>
<tr>
<td></td>
<td><textarea class="conttema markItUp" style="width: 99.7%!important;margin: 0px 0px 0px 0px;" name="cuerpo"></textarea></td></tr>
<tr><td><input type="button" class="fb1 btn color_white" value="Crear tema" onclick="supp.addfors();"/></td></tr>
</tbody>
</table>
</form>
</div>
<div class="::stylehseets::sope" role="sttr">
<div><div><script type="text/javascript" src="{$tsConfig.url}/js/modo/markItUp.js"></script>
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/markItUp.css">
</div></div>
</div>
</div>{else}{include file='modulos/altoahi.tpl'}{/if}
{* END CREAR *}
{/if}
{* HOME ADMIN*}
{if $tsAction == 'admin'}
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/admin.css">
<script type="text/javascript" src="{$tsConfig.url}/js/asoport.js"></script>
{if $pagetgo.sf_creator == $_SESSION}
{if $tsAct == 'edit'}
<form method="POST" action="#" id="formsup" style="margin: 9px 0px 0px 0px;">
<div id="titlef"><span>Nombre de tu nuevo proyecto</span></div>
<input type="text" id="name" placeholder="Escribe aqui el nombre de tu nuevo proyecto" value="{$pagetgo.sf_name}">
<br/><br/>

<div id="titlef"><span>Nombre Corto para tu proyecto ({$tsConfig.url}/soporte/<b>proyectname</b>)</span></div>
<input type="text" id="cname" placeholder="Proyectname" value="{$pagetgo.sf_seo}" disabled>
<br/><br/>

<div id="titlef"><span>Selecciona una imagen</span> <select name="gooiMg" id="gooiMg">
	<option>Que imagen usaras?</option>
<option value="1">Subir imagen</option>
<option value="2">Pre subidas</option>
</select></div>

<div class="opcion_1_UpImg option_vdval dsnone" style="display: block;">
<div class="hidden clearfix one_unImg">
<div style="border: 1px dashed rgba(0, 0, 0, 0.207843); padding: 2em; position: relative; text-align: -webkit-center; width: 70%;" class="hover cursorP ZErO_uNiMg"><div class="lsf" style="font-size: 56px;"><a>camera</a></div><input type="file" class="inputnone cursorP" id="upster_uNimg_Edtr">
</div>
</div>
<div class="tWo_unImg dsnone" style="width: 70%; display: none;">
<h1>Subiendo...</h1><div class="barloading"><div class="bar" style="width: 100%;"></div></div>
</div>
<div class="TreE_unIMg dsnone" style="width: 70%;border: 1px dashed rgb(204, 204, 204);padding: 1em;"><center></center><input type="hidden" name="img_he" value="s"></div>
</div>
<div class="opcion_2_UpImg option_vdval dsnone">
<div style="float:left;"><img src="{$pagetgo.sf_img}" style="widht:64px;height:64px;" class="m_icon"/></div>
<select style="height: 60px;" id="icon" name="icon" onchange="$('.m_icon').attr('src', $(this).val())">
<option value="{$pagetgo.sf_img}">default</option>
{foreach from=$iconss item=r}
<option value="{$tsConfig.url}/images/icons/r/{$r}" {if $pagetgo.sf_img == $r}selected="selected"{/if}>Imagen: {$r}</option>
{/foreach}
</select>
</div>

<br/><br/>

<div id="titlef"><span>Selecciona un icono</span></div>
<div style="float:left;"><img src="{$tsConfig.url}/images/icons/i/{$pagetgo.sf_icon}" class="mm_icon" style="width: 38px;height: 38px;"/></div>
<select style="height: 38px;" id="icontwo" name="icon" onchange="$('.mm_icon').attr('src', '{$tsConfig.url}/images/icons/i/'+$(this).val())">
{foreach from=$iconssi item=r}
<option value="{$r}" {if $pagetgo.sf_icon == $r}selected="selected"{/if}>Imagen: {$r}</option>
{/foreach}
</select>
<br/><br/>

<div id="titlef"><span>Describe tu proyecto</span></div>
<textarea id="desc" placeholder="Describe tu proyecto...">{$pagetgo.sf_desc}</textarea>
<input type="hidden" id="idsop" value="{$pagetgo.sf_id}">
<br /><br />
<input type="button" id="savefo" value="Enviar datos" class="buttonblue1" onclick="adsop.config();" />
</form>
{elseif $tsAct == 'cats'}
{include file='modulos/soporte_i/cats.tpl'}
{elseif $tsAct == 'users'}
admin >> users
{else}
Admin >> Home
{/if}
{else}
{include file='modulos/notfound.tpl'}
{/if}
{* file: modulos/notfound.tpl *}
{/if}
</div>