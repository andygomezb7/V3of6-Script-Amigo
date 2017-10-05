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

$tsPage = "chats";
$tsTitle = 'Chats | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include '../class/chats.class.php';
$tsChats =& tsChats::getInstance();

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
$smarty->assign('tsUchats', $tsChats->load(1));


if($get_['preg'] == 'view'){
$eXexI = $w->setSecure($_REQUEST['dkKlxL']);
$skdKLcdfmkLW = ($eXexI == 'xKoLEk1RL1xE2Fl') ? 3 : 1;
$viewinfocht = $tsChats->load(3, $get_['pref'], $skdKLcdfmkLW);
$smarty->assign('tsInfo', $viewinfocht);
if($viewinfocht['u_c_c1'] == 1){
$eXexIHig = $w->setSecure($_REQUEST['dkKlxLH']);
$smarty->assign('msgs', $tsChats->load(4, $get_['pref']));
$smarty->assign('eXexI', $eXexI);
$smarty->assign('eXexIHig', $eXexIHig);
}else{
$mensajeaviso = ($viewinfocht['u_c_c1'] == 2) ? 'Este chat fue desactivado por un moderador, notifica al dueño sobre nuestras politicas en los chats' : 'Este chat fue desactivado por el administrador.';
$tsPage = "aviso";
$smarty->assign("tsAviso",array('titulo' => 'Este chat no esta activo.', 'mensaje' => $mensajeaviso, 'but' => 'Volver', 'link' => "".$w->settings['direccion_url']."/int/chat/"));
}
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