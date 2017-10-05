<?php
/*
*
*    @name home.php
*    Controlador de la Home
*
*/
$tpl = 0;
include '../../header.php';
include '../class/ads.class.php';
$tsAds =& tsAds::getInstance();

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

// PAGINA DE CLICKS, VARIBLES
$geta = '';
$abg = $w->setSecure($_GET['abg']);
$q = $w->setSecure($_GET['q']);
$usk = $w->setSecure($_GET['usk']);
$sa = $w->setSecure($_GET['sa']);

/* INFORMACIÓN DE LA CAMPAÑA */
$ee = $w->setSecure($_GET['ee']);
$ii = $w->setSecure($_GET['ii']);
/* END TO */
$sa_e = base64_decode($sa);
$url_s = base64_decode($q);
$url_n = explode('*', $url_s);

/* VALIABLES TOTALMENTE DEFINIDAS */
$url = $url_n[0];
$hace = $url_n[1];
$key = $usk;
$type = $abg;
$refered = $sa_e;

if($url && $hace && $key && $type){

/* INSERTAR TODO EN LA BASE DE DATOS */
$tsAds->ejectVisits($key, $hace, $type, $url, $ee, $ii);

/*
*-----------------------------------------------------------------------
*      REDIRECCIÓN AUTOMATICA
*-----------------------------------------------------------------------
*/
}else{
	$url = $w->settings['url'].'/int/ads/';
}

header('location: '.$url);

/*echo '
URL = '.$url.'<br />
Hace = '.$hace.'<br />
Key = '.$key.'<br />
Type = '.$type.'<br />
Refered = '.$refered.'<br />
';*/

?>