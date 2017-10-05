{if $blobloadForeach}1:{/if}
{foreach from=$bload item=b key=i}
{if $b.novistas == 0 && $b.novis == 1 && $b.ocultar <= 0}
<div class="bworts hidden" id="{$b.id}{$b.id}_L">
<div class="content hidden">
<div class="header hidden">
<div class="img floatL wortip" uid="{$b.usuario_id}"><img src="{$tsConfig.url}/thumb/img/42/42/?file={if $b.w_avatar}{$b.w_avatar}{else}http://www.wortit.net/images/avatar/group.png{/if}" />
<div class="submenu dsnone"><ul><li><a class="hover" onclick="msg.add('{$b.usuario_nombre}');">Enviar mensaje</a></li><li><a class="hover">Bloquear</a></li></ul></div>
</div>
<div class="head floatL">
<h3><a href="{$tsConfig.url}/{$b.usuario_nombre}/">{if $b.usuario_nombre}{$b.usuario_nombre}{else}Anonimo{/if}</a></h3>
<span><a href="{$tsConfig.url}/{$b.usuario_nombre}/{$b.id}/">
{if $b.a.usuario_id && $b.a.usuario_id != $b.usuario_id}Publico via <span class="b wortip" uid="{$b.a.usuario_id}">{$b.a.usuario_nombre}</span>
{elseif $b.g.idgrupo}Publico en Grupo #{$b.g.idgrupo}{else}Publico un bwort{/if}

{if $b.bw_type == 2} · {$b.num.images} imagenes{elseif $b.bw_type == 3} · un video{elseif $b.bw_type == 4} · una nota{elseif $b.bw_type == 5} · un enlace{/if}</a> - <span class="b">{$b.hace|hace}</span></span>
</div>
<div class="floatR options">
<div class="buttton"><a onclick="if($('.sbmn#1515_{$i}{literal}').css('display') == 'none'){$({/literal}'.sbmn#1515_{$i}{literal}').fadeIn();}else{$({/literal}'.sbmn#1515_{$i}{literal}').fadeOut(250);}{/literal}">
<i class="optbwort"></i></a>
<div class="sbmn dsnone" id="1515_{$i}"><ul><li><a class="hover" onclick="acbw.delet({$b.id});">Eliminar</a></li><li><a class="hover" onclick="acbw.edtBwrt_Send({$b.id}, 1);">Editar</a></li><li><a class="hover" onclick="acbw.ocu({$b.id});">Ocultar</a></li></ul></div>
</div>
</div>
</div>
<div class="cont hidden" id="edtrBwrt_{$b.id}_{$b.id}{$b.id}">
<div class="txtraEdtr_{$b.id}{$b.id} txtraedt hidden dsnone">{if $b.idusuario == $_SESSION}<div class="dsnone" id="error"></div><textarea class="txtra_val_{$b.id}">{$b.texto}</textarea><input type="button" class="btn_green floatL" id="btn_edtbwrt1_{$bid}" onclick="acbw.edtBwrt_Send({$b.id});" value="Editar Bwort" /><input type="button" onclick="acbw.edtBwrt_Send({$b.id}, 2);" class="input_button" value="cancelar" />{else}<div id="error">Este bwort no te pertenece.</div>{/if}</div>
<span class="cont_{$b.id}_context">{$b.texto}</span>
{if $b.typei == 1}
<div class="cet">
	{if $b.bw_type == 2}
    {foreach from=$b.images item=i}
    {if $b.num.images == 1}
    <center><img onclick="acbw.iiE({$b.id}, {$i.bwi_id});" src="{$tsConfig.url}/files/arc/co/{$i.up_code}.{$i.up_ftype}" style="max-width: 100%;max-height: 375px;border: 1px solid #E7E7E7;cursor: -webkit-zoom-in;" class="cursorP"></center>
    {else}
    <div class="img_loaded floatL hidden cursorP" onclick="acbw.iiE({$b.id}, {$i.bwi_id});"><img src="{$tsConfig.url}/files/arc/co/{$i.up_code}.{$i.up_ftype}" style="cursor: -webkit-zoom-in;" /></div>
    {/if}
    {/foreach}
    {elseif $b.bw_type == 3}
    <center><div class="video_player" vid="{$b.cntnt}">
    <a target="_blank" href="{$b.bw_content}"><img class="i_img" src="http://img.youtube.com/vi/{$b.cntnt}/mqdefault.jpg"></a>
    <i class="player_icon"></i>
    <span class="vid_title" style="top: 0;left: 1px;"><a target="_blank" class="cwhite" href="{$b.bw_content}">{$b.metatags.title}</a></span>
    </div></center>
    {elseif $b.bw_type == 4}
    <div class="nota hidden">
    <div class="img floatL"><img src="{$tsConfig.url}/thumb/img/200/200/?file={$b.nota.banner}" /></div>
    <div class="content floatL hidden">
    <div class="title hidden"><a href="{$tsConfig.url}/notas/{$b.nota.wdefined}/{$b.nota.id}/{$b.nota.post_wdefined}.html">{$b.nota.titulo}</a></div>
    <div class="text hidden">{$b.nota.detalle|truncate:230}</div>
    <div class="info color_gray size11">@{$b.nota.usuario_nombre} - {$b.nota.nombre}</div>
    </div>
    </div>
    {elseif $b.bw_type == 5}
    <div class="linkb_enlace hidden">
    <div class="imge floatL"><img src="{$b.cntnt.img}"></div>
    <div class="contente floatL">
    <div class="titlee">{$b.cntnt.title}</div>
    <div class="descripe">{$b.cntnt.desc}</div>
    <div class="DsnrlUlrin" title="{$b.cntnt.url}"><a href="{$tsConfig.url}/int/url/?u={$b.cntnt.url}" target="_blank">{$b.cntnt.url|truncate:36}</a></div>
    </div></div>
	{/if}
</div>
{/if}
</div>
<div class="buttons hidden">
<div class="ejects floatL">
<ul>
{if $b.ulike >= 1}
<li class="qtip" title="Me gusta"><a onclick="acbw.vtn({$b.id}, 'pos', 'false');"><span id="up{$b.id}" class="color_green floatL">{if $b.tlikes}{$b.tlikes}{else}0{/if}</span> <i class="like"></i></a></li>
{else}
<li class="qtip" title="Me gusta"><a onclick="acbw.vtn({$b.id}, 'pos', 'true');"><span id="up{$b.id}">{if $b.tlikes}{$b.tlikes}{else}0{/if}</span> <i class="like"></i></a></li>
{/if}
{if $b.udislike >= 1}
<li class="qtip" title="No me gusta"><a onclick="acbw.vtn({$b.id}, 'neg', 'false');"><span id="dow{$b.id}" class="color_green floatL">{if $b.tdislikes}{$b.tdislikes}{else}0{/if}</span> <i class="dislike"></i></a></li>
{else}
<li class="qtip" title="No me gusta"><a onclick="acbw.vtn({$b.id}, 'neg', 'true'); return false;"><span id="dow{$b.id}" class="floatL">{if $b.tdislikes}{$b.tdislikes}{else}0{/if}</span> <i class="dislike"></i></a></li>
{/if}
<li class="qtip" title="Comentar"><a onclick="acbw.ldcmts({$b.id});"><span id="com{$b.id}" class="floatL">{if $b.tcomments}{$b.tcomments}{else}0{/if}</span> <i class="comment"></i></a></li>
</ul>
</div>
<div class="floatR denun">
<a href="#denunciar-{$b.id}" class="qtip" title="Denunciar" style="display:block;" onclick="denuncia.nueva('bwort', {$b.id}, 'Bwort #{$b.id}', '{$b.usuario_nombre}');"><i class="denun"></i></a>
</div>
</div>
<div class="bw_comments" id="bw_comments_{$b.id}">
{if $b.comments}<div class="ocult_mos_comments" id="ocult_mos_comm_{$b.id}" onclick="acbw.ocmoscomm({$b.id});">
<span class="one hidden"><span class="floatL">Ocultar comentarios</span> <i class="upopt floatL"></i></span> 
<span class="two dsnone hidden"><span class="floatL">Mostrar comentarios</span> <i class="dowopt floatL"></i></span>
</div>{/if}
<div class="content" id="commbwislwe_{$b.id}">
{foreach from=$b.comments item=cw key=i}
<div class="coment hidden">
<div class="img floatL"><img src="{$tsConfig.url}/thumb/img/50/50/?file={$cw.w_avatar}"></div>
<div class="content floatL">
<div class="title floatL">{if $cw.name_original && $cw.ap_original}{$cw.name_original} {$cw.ap_original}{else}{$cw.usuario_nombre}{/if}</div><div class="info floatL">{$cw.bb_date|hace}</div>
<div class="text hidden"><span>{$cw.bb_cont}</span>
{if $cw.bb_type == 2}<div class="clearfix hidden" style="margin: 12px 0 0 0;margin: 26px 0 0 0;text-align: -webkit-center;">
<img src="{$cw.bb_img}" style="max-width: 90%;max-height: 328px;border: 1px solid #DBD9D9;">
</div>{/if}
</div>
</div>
</div>
{/foreach}
</div>
<div class="form dsnone" id="form_{$b.id}">
<div id="error_flat" class="dsnone">Error</div>
<div style="margin: 0 0 10px 0;padding: 0 0 0 8px;" class="hidden clearfix zoom">
<div class="zoom" style="position: relative;">
<div class="zoom" style="position: relative;">
<div class="hidden" style="position: relative;background-color: #fff;">
<div style="border: solid #bdc7d8;border-width: 1px 1px;-webkit-transition: border-color 1s ease-out;border-color: #dcdee3;">
<div class="zoom hidden" style="padding-right: 46px;">
<textarea class="floatL hidden"></textarea></div></div></div>
<div class="zoom clearfix" style="bottom: 0;position: absolute;right: 0;top: 0;">
<div class="floatL hidden cursorP" style="cursor: pointer;position:relative;">
<i class="im_photo cursorP"><input type="file" name="incomfi" filen="{$b.id}" id="incomfi_{$b.id}" onchange="acbw.chnimgcm($(this));" class="inputnone cursorP"/></i>
</div></div></div></div>
<div class="enviewcm hidden dsnone nbm_cm_preview_{$b.id}"><center><input type="hidden" name="valimcom_d" value="s"/><input type="hidden" name="valimcom_vb" value="2.0" /></center></div>
</div>

<input type="button" class="btn_green floatL" onclick="acbw.commbw({$b.id});" placeholder="Escribe un comentario..." value="Publicar comentario">
<input type="button" onclick="acbw.ldcmts({$b.id});" class="input_button" value="Cancelar">
</div>
<div class="preform" id="preform_{$b.id}">
<input type="text" name="preform" onfocus="acbw.ldcmts({$b.id});" placeholder="Escribe un comentario..." id="preform" />
</div>
</div>
</div>
</div>
{/if}
{/foreach}