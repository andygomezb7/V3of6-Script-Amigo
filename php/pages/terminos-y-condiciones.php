<?php
/*
*
*    @name home.php
*    Controlador de la Home
*
*/

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/
include '../../header.php';
$tsPage = "terminos";
$tsTitle = $w->settings['name'].' '.$w->settings['lema'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Meta Descripcion
$tsBodyp = $w->settings['name']." | Interactua con otras personas, Genera logros, Obten Rangos, Juega. Comparte, Descarga y Mas en ".$w->settings['name'].'.com';
//Meta Tags
$tsBodytags = $w->settings['name'].", notas, foro, temas, games, juegos, downloads, mega, descarga, peliculas, musica";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];

$smarty->assign("tsTitle",$tsTitle);

if($_SESSION['uid']){ $w->visitasAdd(1, 13); }else{ 
$w->visitasAdd(1, 45); 
}

$domain = str_ireplace(array('http://', 'https://', 'www.'), '', $w->settings['url']);
$smarty->assign('domain', $domain);
$smarty->assign('web', $w->settings);

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>