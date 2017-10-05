<?php
/*
*
*    @name apuntes.php
*    Controlador de la Home
*
*/

include ('../../header.php');

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "search";
$tsTitle = 'Buscador | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include '../class/search.class.php';
$tsSearch =& tsSearch::getInstance();

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Creamos la variable al comienzo de la rutina
$inicio= microtime(true);  
$sdijflk = time();

$gett = $w->setSecure($_GET['t']);
switch($gett){
case 'users':
$t = 1;
break;
case 'temas':
$t = 2;
break;
case 'new':
$t = 3;
break;
case 'juegos':
$t = 4;
break;
case 'bworts':
$t = 5;
break;
case 'global':
$t = 6;
break;
case 'img':
$t = 7;
break;
}

$q = $w->setSecure($_GET['q']);
$search = $tsSearch->searchG($t, $q);

//Por ultimo el tiempo al culminar
$final = microtime(true);
 //La resta del final - inicio nos dará el tiempo de ejecución
$total= $final- $inicio;
$chocos = str_replace('.', ',',substr($total, 0, 4));
$time = $chocos;
$pagesmdlk = $w->setSecure($_GET['page']);
if($pagesmdlk){ $slpage = $pagesmdlk; }else{ $slpage = 1; }
$totalres = ($slpage*20);

$smarty->assign("result", $search);
$smarty->assign("type", $t);
$smarty->assign("t", $w->setSecure($_GET['t']));
$smarty->assign("q", $q);
$smarty->assign("total", $totalres);
$smarty->assign("time", $time);	

//Meta Descripcion
$tsBodyp = $w->settings['name']." | Interactua con otras personas, Genera logros, Obten Rangos, Juega. Comparte, Descarga y Mas en ".$w->settings['name'].'.com';
//Meta Tags
$tsBodytags = $w->settings['name'].",apuntes, notas, foro, temas, games, juegos, downloads, mega, descarga, peliculas, musica";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];

$smarty->assign("tsTitle",$tsTitle);

// HASHTAGS Y PINS
$smarty->assign("tsHas",$tsWall->hashtagsPops());
$smarty->assign("ultnotashome", $smadfiwe4);
$smarty->assign("tsPins",$tsWall->ver_pins());
$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);
$smarty->assign("tsUrl", $tsUrl);
$smarty->assign("numav3", rand(1, 40));

if($_SESSION['uid']){ $w->visitasAdd(1, 13); }else{ 
$w->visitasAdd(1, 14); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>