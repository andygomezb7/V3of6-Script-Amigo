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

$tsPage = "registro";
$tsTitle = 'Registrate en '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;
$postRequire = $w->setSecure($_POST['require']);

if($wuser->uid){
	$tsPage = "aviso";
	$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'Ya estas registrado, cierra sesión antes de poder acceder a esta pagina.', 'but' => 'Ir al inicio', 'link' => "".$w->settings['direccion_url']."/"));
/*}elseif($postRequire != '1315'){
	$tsPage = "aviso";
	$smarty->assign("tsAviso",array('titulo' => 'Antes de entrar', 'mensaje' => '<form method="POST" action="'.$w->settings['url'].'/registro"><input type="text" name="require" placeholder="key de acceso" /><br><br > <input type="submit" value="Entrar" class="input_button" /></form>'));
*/}

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

$paisessql = result_array(mysql_query("SELECT * FROM u_paises"));
$smarty->assign('paises', $paisessql);

$smarty->assign('postrequire', $postrequire);

if($_SESSION['uid']){ $w->visitasAdd(1, 13); }else{ 
$w->visitasAdd(1, 14); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>