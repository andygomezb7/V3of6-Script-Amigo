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

$tsPage = "home";
if($wuser->uid) $tsTitle = $w->settings['name'].' '.$w->settings['lema']; else $tsTitle = 'Bienvenido a '.$w->settings['name'].' | '.$w->settings['lema'];
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
$smarty->assign('bload', $sa54df54qw32eq13we);

if(isset($_POST['bwort'])){
$tsWall->addBwort();
}else{}

if($_SESSION['uid']){ $w->visitasAdd(1, 13); }else{ 
$w->visitasAdd(1, 14); 
}

if($wuser->uid){
$lksdf54usnefl = mysql_fetch_assoc(mysql_query("SELECT u.*, s.* FROM usuarios AS u LEFT JOIN suscriptores AS s ON u.usuario_id = s.id_receptor WHERE s.id_emisor='".$wuser->uid."' AND u.usuario_id != '".$wuser->uid."' ORDER BY rand() DESC LIMIT 0,1"));
$skelkwUsrPdrGhr = $lksdf54usnefl['usuario_id'];
$relacv = result_array(mysql_query("SELECT u.*, s.* FROM usuarios AS u LEFT JOIN suscriptores AS s ON u.usuario_id = s.id_receptor WHERE s.id_emisor = '".$skelkwUsrPdrGhr."' AND u.usuario_id != '".$wuser->uid."' ORDER BY rand() DESC LIMIT 0,5"));
$wwf = 0; foreach($relacv AS $st){
$relacv[$wwf]['sigo'] = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$st['usuario_id']."' AND id_emisor='".$wuser->uid."'"));
$wwf++;
}
$smarty->assign('relacv', $relacv);
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>