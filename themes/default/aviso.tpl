{include file='includes/main_header.tpl'}		
<div style="margin: 10px auto 0 auto;" class="container400">
<div class="box_title">
<div class="box_txt show_error">{$tsAviso.titulo}</div>
<div class="box_rrs"><div class="box_rss"></div></div>
</div>
<div align="center" class="box_cuerpo"><br />
{$tsAviso.mensaje}
<br /><br />
{if $tsAviso.but}
<input type="button" onclick="location.href='{if $tsAviso.link}{$tsAviso.link}{else}{$tsConfig.url}{/if}'" value="{$tsAviso.but}" style="font-size:13px" class="input_button">
{/if}
{if $tsAviso.return}
<input type="button" onclick="history.go(-{$tsAviso.return})" title="Volver" value="Volver" style="font-size:13px" class="input_button">
{/if}
<br /><br />
</div>	
</div>
<br /><br /><br /><br />
<div style="clear:both"></div>
<style type="text/css">{literal}
.container400{width: 400px;}
.box_title{background:url('../images/box_titlebg2.gif');padding:3px 2px;height:25px;-moz-border-radius-topleft: 5px;-moz-border-radius-topright: 5px;-webkit-border-top-left-radius: 5px;-webkit-border-top-right-radius: 5px;border: 1px solid #CCC;text-align: -webkit-center;font-size: 14px;line-height: 21px;}
.box_txt.publicidad_ultimos_comentarios_de{width:190px;}
.box_cuerpo {background:#E9E9E9;padding:8px;margin:0 auto;white-space: normal;border: 1px solid #CCC;border-top: none;-moz-border-radius-bottomleft: 5px;-moz-border-radius-bottomright: 5px;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;}
{/literal}</style>    
{include file='includes/main_footer.tpl'}