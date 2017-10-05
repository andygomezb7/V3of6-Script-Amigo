<?php
/*
*
*    @name home.php
*    Controlador de la Home
*
*/
  
include '../../header.php';

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "ads";
$tsTitle = 'Ads | '.$w->settings['name'];
$tsLevel = 2;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include'../class/ads.class.php';
$tsAds =& tsAds::getInstance();

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Meta Descripcion
$tsBodyp = $w->settings['name']." Ads | Comparte tu contenido promocionandolo por medio de un anuncio en nuestro sistema de administración de anuncios en nuestra pagina - ¡Entra ya!  ads.".$w->settings['name'].'.net';
//Meta Tags
$tsBodytags = $w->settings['name'].", notas, foro, temas, games, juegos, downloads, mega, descarga, peliculas, musica";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];

$smarty->assign("tsTitle",$tsTitle);

$adspage = $w->setSecure($_GET['adspage']);
$action = $w->setSecure($_GET['action']);
$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);
$smarty->assign("tsUrl", $tsUrl);
$smarty->assign('nomenu', 'no');
$smarty->assign('adspage', $adspage);
$smarty->assign('action', $action);
$smarty->assign('tsAds', $tsAds);

if($adspage == 'view' && $action == 'anuncios' || !$action && !$adspage){
	$smarty->assign('anun', $tsAds->loadWhtUsr());
}elseif($adspage && $action == 'informe'){
/* VARIABLES DEL ANUNCIO O ADSMYPAGE */
$adsmypage = explode('_', $adspage);
$adsid = $adsmypage[2];
$adshace = $adsmypage[1];
$smarty->assign('adsid', $adsid);
$smarty->assign('adshace', $adshace);
/* END TO ANUNCIO O ADSMYPAGE */
// Información del anuncio
$tsInfoA = $tsAds->adsmypageIn($adsid, $adshace);
$stats = $tsAds->statics($adsid, $tsInfoA['au_type_camp']);
$smarty->assign('tsInfoA', $tsInfoA);
$smarty->assign('stat', $stats);
/* PAGO */
$pagosetPa = ($stats['pago']*$w->settings['ads_wort_adv']);
$smarty->assign('pago', $pagosetPa);
/* END PAGO */
if($tsInfoA['num'] <= 0){
$tsPage = 'aviso';
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos', 'mensaje' => 'El aviso no existe o no se ha definido bien las variables, porfavor regresa y confirma el url.', 'but' => 'Regresar', 'link' => $w->settings['url']."/int/ads/?adspage=my&action=anuncios"));
}
}else{}

if($_SESSION['uid']){ $w->visitasAdd(1, 46); }else{ 
$w->visitasAdd(1, 47); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>