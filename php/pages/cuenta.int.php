<?php
/*
*
*    @name cuenta.php
*    Controlador de la Home
*
*/

include ('../../header.php');

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "cuenta";
$tsTitle = 'Mi cuenta | '.$w->settings['name'];
$tsLevel = 2;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

  include('../class/cuenta.class.php');
	$tsCuenta =& tsCuenta::getInstance();

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Meta Descripcion
$tsBodyp = $w->settings['name']." | Interactua con otras personas, Genera logros, Obten Rangos, Juega. Comparte, Descarga y Mas en ".$w->settings['name'].'.com';
//Meta Tags
$tsBodytags = $w->settings['name'].",apuntes, notas, foro, temas, games, juegos, downloads, mega, descarga, peliculas, musica";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];
// PAISES
$sqlpaises = result_array(mysql_query("SELECT * FROM u_paises"));

$smarty->assign("tsTitle",$tsTitle);
$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);
$smarty->assign("tsUrl", $tsUrl);
$smarty->assign("numav3", rand(1, 40));
$smarty->assign("sqlpaises", $sqlpaises);
$smarty->assign("options", $tsCuenta->opsegurit());

if($get_['pref'] == 'Referidos' || $get_['referidos']){
$queryreferdidos = result_array(mysql_query("SELECT * FROM usuarios WHERE referido='".$u['identi']."'"));
$smarty->assign("referidos", $queryreferdidos);
}elseif($get_['pref'] == 'Estadísticas' || $get_['pref'] == 'Estadisticas' || $get_['pref'] == 'estadisticas'){
$querystats = result_array(mysql_query("SELECT *, COUNT(*) AS u_total FROM u_actividad WHERE user_id='".$wuser->uid."'"));
$stats = $tsCuenta->armStaticssss($querystats);
$smarty->assign('stat', $stats);
}else{}

if($_SESSION['uid']){ $w->visitasAdd(1, 13); }else{ 
$w->visitasAdd(1, 14); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>