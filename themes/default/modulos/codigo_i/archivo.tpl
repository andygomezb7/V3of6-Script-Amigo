<div style="width: 19%;height: 152px;font-size: 13px;text-align: -webkit-center;padding: 6px 4px;margin: 15px 0px 0px 0px;" class="floatL">
{if $tsArc.uc_g_type == 3}<div style="background:#FFFFFF;padding: 5px;text-align:-webkit-center;">ACTUALIZACIÓN</div>{/if}
<div style="background: #FFFFFF;padding: 6px 4px;"><div style="background:#FFFFFF url('{$tsConfig.url}/images/static/options/tec/1/{$tsArc.t.up_ftype}.png') no-repeat 50% 0%;width: 100%;height: 73px;font-size: 13px;text-align: -webkit-center;padding: 0;"></div>
<div style="margin: 8px 0px 0px 0px;background: #FFFFFF;text-align: -webkit-left;">
<div class="clearfix"><i class="icons-cdg info floatL"></i> <span title="{$tsArc.t.up_vname}">{$tsArc.t.up_vname|truncate:20}</span></div>
<div class="clearfix"><i class="icons-cdg i floatL qtip cursorP" title="Inf. sobre {$tsArc.t.up_typesize}" onclick="window.open('https://es.wikipedia.org/wiki/{$tsArc.t.up_typesize}','_blanck');"></i> <span class="floatL" title="tamaño de el archivo en {$tsArc.t.up_typesize}">{$tsArc.t.up_size} {$tsArc.t.up_typesize}</span></div>
<div class="clearfix"><i class="icons-cdg user floatL"></i> <span class="floatL">{$tsArc.t.user.usuario_nombre}</span></div>
</div>
</div>
<!------MATCH------>
<div class="wooActlr">
<li style="text-align: -webkit-center;"><h1>ACTUALIZACIONES</h1></li>
{foreach from=$actualizacion item=r}
<li>
<div class="clearfix t"><i class="icons-cdg info floatL"></i> <a href="{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?prev=tru&do={$r.uc_g_ident}">{$r.uc_a_name}</a>
<div class="clearfix c">
<i class="icons-cdg i floatL qtip cursorP" title="Inf. sobre {$r.up.up_typesize}" onclick="window.open('https://es.wikipedia.org/wiki/{$r.up.up_typesize}','_blanck');"></i>
{$r.uc_a_tamano}</div>
<div class="clearfix c"><i class="icons-cdg user floatL"></i> {$r.uc_in_user}</div>
<div class="clearfix c"><i class="icons-cdg time floatL"></i> {$r.up.up_date|date_format}</div>
</li>
{/foreach}
</div>
</div>
<div class="floatL" style="background: #FFFFFF;width: 76%;padding: 8px 6px;margin: 15px 0px 0px 11px;min-height: 500px;">
{if $tsArc.t.up_ftype == 'mp4' or $tsArc.t.up_ftype == '3gp' or $tsArc.t.up_ftype == 'mp3'}
{if $tsArc.t.up_ftype == 'mp4' or $tsArc.t.up_ftype == '3gp'}
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download{if $dor.prev && $dor.do == 'tru'}&prev={$dor.prev}&do={$dor.do}{/if}', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('{$codepage}', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw{if $dor.prev && $dor.do == 'tru'}?prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download{if $dor.prev && $dor.do == 'tru'}&prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{if $tsArc.t.up_ftype == 'png' or $tsArc.t.up_ftype == 'jpg' or $tsArc.t.up_ftype == 'jpeg' or $tsArc.t.up_ftype == 'gif'}<li><b>BBcode:</b><input type=\'text\' value=\'[img]{$tsConfig.url}/files/arc/co/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{/if}</ul></div>');">Enlaces</a>
</div>

<video width="97%" height="360" id="player2" poster="../media/frameaccuracy_logo.jpg" controls="controls" preload="none"><source type="video/{$tsArc.t.up_ftype}" src="{$tsConfig.url}/files/arc/he/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}" />
<object width="100%" height="360" type="application/x-shockwave-flash" data="{$tsConfig.url}/css/code/elementjs/flashmediaelement.swf"><param name="movie" value="{$tsConfig.url}/css/code/elementjs/flashmediaelement.swf" /><param name="flashvars" value="controls=true&poster=../media/frameaccuracy_logo.jpg&file=../media/perfect-timecoded.mp4" /><img src="../media/frameaccuracy_logo.jpg" width="100%" height="360" alt="Here we are" title="No video playback capabilities" /></object></video>
{elseif $tsArc.t.up_ftype == 'mp3'}
<audio id="player2" src="{$tsConfig.url}/files/arc/he/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}" type="audio/mp3"></audio>{/if}
<div class="::fantasticol::fant:styleheets"><script type="text/javascript" src="{$tsConfig.url}/js/code/VdoElmntJs.js"></script><script>$('audio,video').mediaelementplayer({ showTimecodeFrameCount: true, framesPerSecond: 25, alwaysShowControls: true, success: function(player, node) { $('#' + node.id + '-mode').html('mode: ' + player.pluginType); } }); </script><link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/code/VdoElmntJs.css"></div>
{elseif $tsArc.t.up_ftype == 'txt' or $tsArc.t.up_ftype == 'php' or $tsArc.t.up_ftype == 'js' or $tsArc.t.up_ftype == 'html' or $tsArc.t.up_ftype == 'xml' or $tsArc.t.up_ftype == 'htm' or $tsArc.t.up_ftype == 'css'}
<div class="cdg-title-1">Contenido del archivo
<div class="floatR">
<div class="icons-cdg code floatL"></div>
<div class="icons-cdg edit floatL qtip cursorP" title="Editar" onclick="mydialog.alert('Editar archivo', '<center><div id=\'error_flat\'>Devido a problemas de seguridad, No contamos con la edición de archivos con texto.<br />No te preocupes, trabajamos en eso, si tienes ideas puedes contarnos en el boton, reportar de la parte inferior de la pagina<br /> Muchas gracias.</div></center>');"></div>
</div>
</div>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download{if $dor.prev == 'tru' && $dor.do}&prev={$dor.prev}&do={$dor.do}{/if}', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('{$codepage}', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw{if $dor.prev == 'tru' && $dor.do}?prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download&do={if $dor.prev == 'tru' && $dor.do}&prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{if $tsArc.t.up_ftype == 'png' or $tsArc.t.up_ftype == 'jpg' or $tsArc.t.up_ftype == 'jpeg' or $tsArc.t.up_ftype == 'gif'}<li><b>BBcode:</b><input type=\'text\' value=\'[img]{$tsConfig.url}/files/arc/co/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{/if}</ul></div>');">Enlaces</a>
</div>

<iframe src="{$tsConfig.url}/ajax/code-code.php?aft=viewcode&codepage={$keycodepage}" width="99%" height="600" style="border: 1px solid #CCCCCC;"></iframe>
{elseif $tsArc.t.up_ftype == 'png' or $tsArc.t.up_ftype == 'jpg' or $tsArc.t.up_ftype == 'jpeg' or $tsArc.t.up_ftype == 'gif'}
<div class="cdg-title-1"><b>{$tsArc.t.up_vname}</b> subida: {$tsArc.t.up_date|hace}
<div class="floatR">
<div class="icons-cdg edit floatL qtip cursorP" title="Editar" onclick="mydialog.alert('Editar Imagen', '<center><div id=\'error_flat\'><p>¡Ops!</p><p>Nos descubriste, bueno queremos decirte que pronto! añadiremos esta opción</p> <p>pero no rechazamos comentarios e ideas enviados</p> <p>habla con nosotros en el boton <b>reportar</b> de la parte de abajo de la pagina</p>Hasta pronto, el equipo de wortit.</div></center>');"></div>
</div>
</div>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download{if $dor.prev == 'tru' && $dor.do}&prev={$dor.prev}&do={$dor.do}{/if}', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('{$codepage}', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw{if $dor.prev == 'tru' && $dor.do}?prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download&do={if $dor.prev == 'tru' && $dor.do}&prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{if $tsArc.t.up_ftype == 'png' or $tsArc.t.up_ftype == 'jpg' or $tsArc.t.up_ftype == 'jpeg' or $tsArc.t.up_ftype == 'gif'}<li><b>BBcode:</b><input type=\'text\' value=\'[img]{$tsConfig.url}/files/arc/co/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{/if}</ul></div>');">Enlaces</a>
</div>

<center><img src="{$tsConfig.url}/files/arc/co/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}" style="max-width: 99%;"></center>
{else}
{* POR DEFECTO PARA MOSTRAR EL ARCHIVO *}
<div class="cdg-title-1"><b>Información del archivo</b>
<div class="floatR">
<div class="icons-cdg edit floatL qtip cursorP" title="Editar"></div>
</div>
</div>
<div class="clearfix">
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 31%;" onclick="window.open('{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download{if $dor.prev == 'tru' && $dor.do}&prev={$dor.prev}&do={$dor.do}{/if}', '_blank');">Descargar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="cdg.arch.add('{$codepage}', 3, 3);">Actualizar</a>
<a class="floatL btn_green" style="margin: 0;border-radius: 0;width: 30%;" onclick="mydialog.alert('Enlaces de archivo', '<div class=\'clearfix\' style=\'width: 400px;\'><ul><li><b>Principal:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw{if $dor.prev == 'tru' && $dor.do}?prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 0px 0px 0px 7px;\' /></li><li><b>Descarga:</b> <input type=\'text\' value=\'{$tsConfig.url}/int/codigo/p/archivo-{$codepage}.cw?inwoo=download&do={if $dor.prev == 'tru' && $dor.do}&prev={$dor.prev}&do={$dor.do}{/if}\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{if $tsArc.t.up_ftype == 'png' or $tsArc.t.up_ftype == 'jpg' or $tsArc.t.up_ftype == 'jpeg' or $tsArc.t.up_ftype == 'gif'}<li><b>BBcode:</b><input type=\'text\' value=\'[img]{$tsConfig.url}/files/arc/co/{$tsArc.t.up_code}.{$tsArc.t.up_ftype}[/img]\' style=\'width: 80%;margin: 7px 0px 0px 4px;\' /></li>{/if}</ul></div>');">Enlaces</a>
</div>
{if $tsArc.t.up_ftype == 'zip' or $tsArc.t.up_ftype == 'rar'}<div id="error_flat" style="margin: 15px 0px 0px 0px;">Es posible que si este archivo es de tipo <b>zip</b> o <b>rar</b> (archivo comprimido) pueda dañarse el contenido dentro este en algunas ocaciones debido a problemas en nuestro sistema de subida de archivos, solucionaremos esto cuando nos sea posible.<br />Muchas gracias.</div><br>
{$ziparc}
{/if}
{/if}
<div class="::str" role="sttr">
<div><style type="text/css">{literal}
.wooActlr{width: 97%;height:500px;overflow-y:auto;overflow-x:hidden;}
.wooActlr li{background: #FFFFFF;border: 1px solid #DDDDDD;margin: 5px 0px 0px 0px;text-align: -webkit-left;}
.wooActlr li .t{text-align: -webkit-center;}
.wooActlr li .c{text-align: -webkit-left;}
{/literal}</style></div>
</div>
</div>