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

$tsPage = "apuntes";
$tsTitle = 'Apuntes | '.$w->settings['name'];
$tsLevel = 2;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include '../class/notas.class.php';
$tsNotas =& tsNotas::getInstance();

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

//Ultimas notas
$smadfiwe4 = result_array(mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.post_vip='0' ORDER BY p.id DESC LIMIT 5"));
$i = 0; foreach($smadfiwe4 AS $row) {
$smadfiwe4[$i]['detalles']  = $row['detalle'];
$i++;
}
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

if($get_['preg'] == 'mi'){
$dnts['mi'] = $tsNotas->loadNotas("AND um_public = '4'");
$dnts['public'] = $tsNotas->loadNotas("AND um_public = '1'");
$dnts['friends'] = $tsNotas->loadNotas(" AND um_public = '3' or um_public = '2'");
$smarty->assign('notas', $dnts);
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