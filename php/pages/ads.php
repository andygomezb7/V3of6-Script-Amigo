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
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

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

if($_SESSION['uid']){ $w->visitasAdd(1, 46); }else{ 
$w->visitasAdd(1, 47); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>