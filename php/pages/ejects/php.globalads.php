<?php
/** Wortit Developers AS Andy Gómez (www.facebook.com/andesau) 
    Programed and Design total: Andy Gómez (www.facebook.com/andesau) in Wortit.net / Wortit.com
    This is Wortit Version 3
**/
$tpl = 0;
include '../../../header.php';
include '../../class/ads.class.php';
$tsAds =& tsAds::getInstance();

/* VARIABLES DE CAMPAÑA */

/* VALIABLES DE ACCESO */
$_get['q'] = $w->setSecure($_GET['q']);
$haceslknflkw = explode('-',$_get['q']);
$_get['usk'] = $w->setSecure($_GET['usk']);
$_get['avg'] = $w->setSecure($_GET['avg']);
$_get['ssa'] = $w->setSecure($_GET['ssa']);
$_get['sse'] = $w->setSecure($_GET['sse']);
$_get['abg'] = $_GET['abg'] ? $w->setSecure($_GET['abg']) : 'redirec';
/* INFORMACIÓN DE LA CAMPAÑA Y ANUNCIO */
$infocamphat = $tsAds->adsmypageIn($_get['usk'], $haceslknflkw[1], 2); // DIMESIONES POR KEY Y HACE
$_get['ee'] = $w->setSecure($_GET['ee']); // DIMENSIONES POR GET

if($_get['ssa'] == 'skkl-yvaq'){
$info = $tsAds->loadAdsFilters($_get['q'], $_get['usk'], $_get['sse'], 2);
}else{ $info = $tsAds->loadAdsFilters($_get['ee'], $infocamphat['au_idioma'], true, 1); }

$tam_1 = $tsAds->tam($info['au_dimensiones']);
$tam = explode('x', $tam_1);
// VALIDACIÓN
if($_get['ssa'] == 'skkl-yvaq'){ $valid = 1; }else{
$valid = $tsAds->vlAdMP($haceslknflkw[1], $_get['usk']); }

echo '<html><head><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><script src="'.$w->settings['url'].'/js/modo/bsfor.js"></script><link rel="stylesheet" type="text/css" href="'.$w->settings['url'].'/css/modo/ads_20x200.css" /></head><body>';
if($_get['q'] && $_get['usk'] && $valid == 1){
$wevere = base64_encode($info['au_description'].'*'.$info['au_hace']);
$audl = base64_encode($_get['avg']);
$urldirect = $w->settings['url'].'/int/adsbywortit/?abg='.$_get['abg'].'&q='.$wevere.'&sa='.$audl.'&usk='.$info['au_key'].'&ee='.$_get['usk'].'&ii='.$haceslknflkw[1];
if($info['au_type'] == 2){
	$d = '
	<table>
<tbody>
<tr><td><div class="ann_txt_ttl"><a href="'.$urldirect.'" target="_blank"><span>'.$info['au_txt_titl'].'</span></a></div></td></tr>
<tr><td><div class="ann_txt_url_lin"><a href="'.$urldirect.'" target="_blank"><span>'.$info['au_description'].'</span></a></div></td></tr>
<tr><td><div class="ann_txt_desc_ann"><span>'.$info['au_mdescription'].'</span></div></td></tr>
<tr><td><a href="'.$urldirect.'" target="_blank"><div class="ann_txt_btn_frm"><div class="cntn_we_ann_txt"><img src="'.$w->settings['url'].'/images/static/media/icons/true/icn_ns.png" /></div></div></a></td></tr>
</tbody>
</table>
	';
}elseif($info['au_type'] == 1){
	$d = '<div><a href="'.$urldirect.'" target="_blank"><img src="'.$info['au_img'].'" width="100%" height="100%"/></div>';
}else{
	$d = '
	<table>
<tbody>
<tr><td><div class="ann_txt_ttl"><a href="'.$urldirect.'" target="_blank"><span>'.$info['au_txt_titl'].'</span></a></div></td></tr>
<tr><td><div class="ann_txt_url_lin"><a href="'.$urldirect.'" target="_blank"><span>'.$info['au_description'].'</span></a></div></td></tr>
<tr><td><div class="ann_txt_desc_ann"><span>'.$info['au_mdescription'].'</span></div></td></tr>
<tr><td><a href="'.$urldirect.'" target="_blank"><div class="ann_txt_btn_frm"><div class="cntn_we_ann_txt"><img src="'.$w->settings['url'].'/images/static/media/icons/true/icn_ns.png" /></div></div></a></td></tr>
</tbody>
</table>
	';
}
$hehes = base64_encode($w->settings['url'].'/int/ads/_-1515');
echo '
<div class="ann_txt_dsply ann_txt_200x200" id="'.$info['au_dimensiones'].'" style="width:'.$tam[0].'px;height:'.$tam[1].'px;">
<table>
<tbody>
<tr>
<td>
<div class="ann_txt_ddstrt" style="width:'.$tam[0].'px;height:'.$tam[1].'px;">
<div class="ind_txt_ddstrt_snd">
<div class="asbgs">
<svg width="100%" height="100%">
<rect width="100%" height="100%" fill="lightgray"></rect>
<svg stroke="#00aecd" fill="#00aecd" x="0px" y="0px">
<circle cx="7.5px" cy="7.5px" r="5.5px" fill="none" stroke-width="1.1px"></circle><circle cx="7.5px" cy="4.75px" r="1px" stroke="none"></circle>
<line x1="7.5px" x2="7.5px" y1="6.5px" y2="11px" fill="none" stroke-width="1.75px"></line>
</svg>
</svg>
</div>
<div class="asbgc">
<a id="abgl" href="'.$w->settings['url'].'/int/adsbywortit/?abg=ads&q='.$hehes.'&usk=S54F58SD6F56Q" target="_blank"><svg width="100%" height="100%"><path fill="lightgray" d="M0,0L100,0L100,15L4,15s-4,0,-4,-4z"></path><svg overflow="visible" x="4px" y="11px" width="38px"><text fill="black" font-family="Arial" font-size="117px" transform="scale(0.09200968523002422)">Anuncios</text></svg><svg overflow="visible" x="50px" y="11px" width="38px"><text fill="black" font-family="Arial" font-size="100px" transform="scale(0.11764705882352941)">Wortit</text></svg><svg stroke="#00aecd" fill="#00aecd" x="85px" y="0px"><circle cx="7.5px" cy="7.5px" r="5.5px" fill="none" stroke-width="1.1px"></circle><circle cx="7.5px" cy="4.75px" r="1px" stroke="none"></circle><line x1="7.5px" x2="7.5px" y1="6.5px" y2="11px" fill="none" stroke-width="1.75px"></line></svg></svg></a>
</div>
</div>
'.$d.'</div>
</td>
</tr>
</tbody>
</table>
</div>
';
}else{
$hehes = base64_encode($w->settings['url'].'/int/ads/'.'_-1515');
echo '
<div class="ann_txt_dsply ann_txt_200x200">
<table>
<tbody>
<tr>
<td>
<div class="ann_txt_ddstrt" style="width:'.$tam[0].'px;height:'.$tam[1].'px;">
<div class="ind_txt_ddstrt_snd">
<div class="asbgs">
<svg width="100%" height="100%">
<rect width="100%" height="100%" fill="lightgray"></rect>
<svg stroke="#00aecd" fill="#00aecd" x="0px" y="0px">
<circle cx="7.5px" cy="7.5px" r="5.5px" fill="none" stroke-width="1.1px"></circle><circle cx="7.5px" cy="4.75px" r="1px" stroke="none"></circle>
<line x1="7.5px" x2="7.5px" y1="6.5px" y2="11px" fill="none" stroke-width="1.75px"></line>
</svg>
</svg>
</div>
<div class="asbgc">
<a id="abgl" href="'.$w->settings['url'].'/int/adsbywortit/?abg=ads&q='.$hehes.'&usk=S54F58SD6F56Q" target="_blank"><svg width="100%" height="100%"><path fill="lightgray" d="M0,0L100,0L100,15L4,15s-4,0,-4,-4z"></path><svg overflow="visible" x="5px" y="11px" width="38px"><text fill="black" font-family="Arial" font-size="100px" transform="scale(0.09200968523002422)">Anuncios</text></svg><svg overflow="visible" x="45px" y="11px" width="38px"><text fill="black" font-family="Arial" font-size="100px" transform="scale(0.11764705882352941)">Wortit</text></svg><svg stroke="#00aecd" fill="#00aecd" x="85px" y="0px"><circle cx="7.5px" cy="7.5px" r="5.5px" fill="none" stroke-width="1.1px"></circle><circle cx="7.5px" cy="4.75px" r="1px" stroke="none"></circle><line x1="7.5px" x2="7.5px" y1="6.5px" y2="11px" fill="none" stroke-width="1.75px"></line></svg></svg></a>
</div>
</div><h3>NOT FOUND</h3></div>
</td>
</tr>
</tbody>
</table>
</div>
';
}
echo '
</body></html>';
?>