<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 14:32:20
         compiled from "C:\xampp\htdocs\w\themes\default\includes\main_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131045453f46344aa23-72365444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfef15db661af69eb02873f432205a954eb53b66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\includes\\main_footer.tpl',
      1 => 1417287310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131045453f46344aa23-72365444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f4634c4b47_22496335',
  'variables' => 
  array (
    'get_' => 0,
    'tsConfig' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f4634c4b47_22496335')) {function content_5453f4634c4b47_22496335($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php if (!$_smarty_tpl->tpl_vars['get_']->value['hdrPott']&&$_smarty_tpl->tpl_vars['get_']->value['hdrPott']!='httpost') {?>
</div>
	
	<div id="footer" class="footer">
	<div class="footerg">WORTIT © <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <div style="float: right; text-align: right;"> ¿Problemas? <a onclick="bugs.form()" target="_blank">Reportalo</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/int/terminos-y-condiciones" target="_blank">Terminos y condiciones</a> | <a onclick="mydialog.alert('Licencia CC', $('#licenceCC').html());">Licencia C.C</a>  <div id="licenceCC" style="display: none;"><center style="width: 257px;"><a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Wortit</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.wortit.com" property="cc:attributionName" rel="cc:attributionURL">Wortit Developers</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Creative Commons Reconocimiento-SinObraDerivada 4.0 Internacional License</a>.</div></div></div>
	</center>
	</div>
<style type="text/css">
.hover:hover, .hover:hover a{background: #07f!important;color:#ffffff!important;}
.over:hover, .over:hover a{color:#07f!important;}
.overmenu a:hover{border-bottom: 4px solid #07f!important;color: #07f!important;}
</style>
</div> 
<div class="uiCntnToo dsnone" data-role="tooltip"><div class="tololtipo"></div><div class="cnToo"></div></div>
<script type="text/javascript">
//
$(document).ready(function(){
    $('.vctip').tipsy({gravity: 'n'});
    $('.qtip').tipsy({gravity: 's'});
    $('.etip').tipsy({gravity: 'e'});
	  $('.otip').tipsy({gravity: 'w'});
    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>$('.wortip').tooltip({  offset: [ -50, -30 ],  content: 'uid' });<?php }?>
    //$("img").lazyload();
    
   
});
</script>
</body>
</html>
<?php }?><?php }} ?>
