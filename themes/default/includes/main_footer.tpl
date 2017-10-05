{if !$get_.hdrPott && $get_.hdrPott != 'httpost'}
</div>
	
	<div id="footer" class="footer">
	<div class="footerg">WORTIT © {$smarty.now|date_format:"%Y"} <div style="float: right; text-align: right;"> ¿Problemas? <a onclick="bugs.form()" target="_blank">Reportalo</a> | <a href="{$tsConfig.direccion_url}/int/terminos-y-condiciones" target="_blank">Terminos y condiciones</a> | <a onclick="mydialog.alert('Licencia CC', $('#licenceCC').html());">Licencia C.C</a>  <div id="licenceCC" style="display: none;"><center style="width: 257px;"><a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Wortit</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.wortit.com" property="cc:attributionName" rel="cc:attributionURL">Wortit Developers</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Creative Commons Reconocimiento-SinObraDerivada 4.0 Internacional License</a>.</div></div></div>
	</center>
	</div>
<style type="text/css">{literal}
.hover:hover, .hover:hover a{background: #07f!important;color:#ffffff!important;}
.over:hover, .over:hover a{color:#07f!important;}
.overmenu a:hover{border-bottom: 4px solid #07f!important;color: #07f!important;}
{/literal}</style>
</div> 
<div class="uiCntnToo dsnone" data-role="tooltip"><div class="tololtipo"></div><div class="cnToo"></div></div>
<script type="text/javascript">
//{literal}
$(document).ready(function(){
    $('.vctip').tipsy({gravity: 'n'});
    $('.qtip').tipsy({gravity: 's'});
    $('.etip').tipsy({gravity: 'e'});
	  $('.otip').tipsy({gravity: 'w'});
    {/literal}{if $_SESSION}{literal}$('.wortip').tooltip({  offset: [ -50, -30 ],  content: 'uid' });{/literal}{/if}{literal}
    //$("img").lazyload();
    {/literal}
   {* {if $_SESSION}{literal}$('#wysibb').markItUp(mySettings);
  $('#r_comment').markItUp(mySettings);{/literal}{/if} *}
{literal}});{/literal}
</script>
</body>
</html>
{/if}