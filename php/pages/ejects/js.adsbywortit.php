<?php
$tpl = 0;
include '../../../header.php';
header("content-type: application/javascript");
error_reporting(0);
$_SERVER['REMOTE_ADDR'] = $_SERVER['X_FORWARDED_FOR'] ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

/* FUNCTIONS */
$gets = $_GET['s'];
/* END FUNCTIONS */
echo "$(function(){";
if($gets){echo "$('ins.adsbywortit').html(function(){ 
var ssdr = $(this).attr('data-ad-yum'), ssddwhthegt; 
if(ssdr == 1){ ssddwhthegt = '700x90'; }else if(ssdr == 2){ ssddwhthegt = '336x280'; }else if(ssdr == 3){ ssddwhthegt = '300x600'; }else if(ssdr == 4){ ssddwhthegt = '300x250'; }else{ ssddwhthegt = '300x250'; }
var gaDhEwhTtrSkk = ssddwhthegt.split('x'),aa=parseInt(gaDhEwhTtrSkk[0])+6,ee=parseInt(gaDhEwhTtrSkk[1])+5; 
var htmlss4 ='<iframe width=\"'+aa+'\" height=\"'+ee+'\" name=\"my-iframe_'+$(this).attr('data-ad-client')+'\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allowfullscreen=\"true\" src=\"".$w->settings['url']."/php/pages/ejects/globalads/?q='+$(this).attr('data-ad-client')+'&usk='+$(this).attr('data-ad-deb')+'&ee='+$(this).attr('data-ad-yum')+'\"></iframe>'; 
return htmlss4; });";
}else{
echo 'alert("Error: WADs No loaded script get.");';
}
echo "});";
?>