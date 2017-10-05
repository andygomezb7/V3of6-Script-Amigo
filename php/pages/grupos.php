<?php
/*
*
*    @name grupos.php
*    Controlador de la Home
*
*/

include ('../../header.php');

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "grupos";
$tsTitle = 'Grupos | '.$w->settings['name'];
$tsLevel = 2;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include '../class/groups.class.php';
$wgroups =& wgroups::getInstance();

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

/* DEFINICIONES Y CONDICIONALES DE LA PAGINA */
if($get_['preg'] == 'home' || !$get_['preg']){
$gruposUnidoRec = $wgroups->loadGlogle(2);
$smarty->assign('recunin', $gruposUnidoRec);
}elseif($get_['preg'] == 'sug'){
$grupos['sugeridos'] = $wgroups->loadGlogle(1);
}elseif($get_['preg'] == 'amg'){
$grupos['amigos'] = $wgroups->loadGlogle(3);
}elseif($get_['preg'] == 'local'){
$grupos['local'] = $wgroups->loadGlogle(4);
}elseif($get_['preg'] == 'misgrupos'){
$grupos['mis'] = $wgroups->loadGlogle(5);
}elseif($get_['preg'] == 'perfil'){
$getagg = $w->setSecure($_GET['ag']);
$tsGrupo = $wgroups->getG($get_['pref']);
$smarty->assign('tsGrupo', $tsGrupo);
$smarty->assign('pubgroup', 'Sipublicaaqui');
$sqlrelacgurps = result_array(mysql_query("SELECT * FROM grupos LIMIT 4"));
$gg = 0; foreach($sqlrelacgurps AS $sk){
$sqlrelacgurps[$gg]['miembros'] = mysql_num_rows(mysql_query("SELECT * FROM member_grupos WHERE id_grupos='".$sk['idgrupo']."'"));
$gg++;
}
$smarty->assign('relacgrups', $sqlrelacgurps);
$smarty->assign('getgeta', $getagg);
if($getagg == 'miembros'){ // MIEMBROS DEL GRUPO
$maxpagsmem = 21;
$paggeetmem = $w->setSecure($_GET['agpg']);
if(!$paggeetmem){ $iniciom = 0; $getpagpag = 1; }else{ $iniciom = ($paggeetmem == 1) ? 1 : ($paggeetmem - 1) * $maxpagsmem; $getpagpag = $paggeetmem; }
$sqlmemberswhere = result_array(mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos='".$tsGrupo['idgrupo']."' && m.estado='1' ORDER BY m.idregistro DESC LIMIT ".$iniciom.",".$maxpagsmem." "));
// PAGINACIÓN
$queryMFMLkmkl = mysql_num_rows(mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos='".$tsGrupo['idgrupo']."' && m.estado='1' ORDER BY m.idregistro DESC"));
$total_paginas = ceil($queryMFMLkmkl / $maxpagsmem);
$urlmm = $w->settings['url'].'/grupos/'.$tsGrupo['wdefined'].'/?ag=miembros&';
if($total_paginas >= 1){ $rapgst = '';
if($paggeetmem != 1) $rapgst .= '<a href="'.$urlmm.'agpg='.($paggeetmem-1).'" style="font-size:28px;">&#171;</a>';
for ($i=1;$i<=$total_paginas;$i++) {
if ($paggeetmem == $i) $rapgst .= '<a>'.$paggeetmem.'</a>'; else $rapgst .= '  <a href="'.$urlmm.'agpg='.$i.'">'.$i.'</a>  ';
} 
if($paggeetmem != $total_paginas) $rapgst .= '<a href="'.$urlmm.'agpg='.($paggeetmem+1).'" style="font-size:28px;">&#187;</a>';
}
// END; PAGINACIÓN
$smarty->assign('raymembers', $sqlmemberswhere);
$smarty->assign('ragpsg', $rapgst);
} // END; MIEMBROS DEL GRUPO

}elseif($get_['preg'] == 'editar'){
$tsGrupo = $wgroups->getG($get_['pref']);
$smarty->assign('tsGrupo', $tsGrupo);
$sqlcatscu = result_array(mysql_query("SELECT * FROM c_categorias"));
$smarty->assign('catsc', $sqlcatscu);
}else{
$grupos['mios'] = $wgroups->loadGlogged();
}

$smarty->assign('grupos', $grupos);
/* END: DYCDLP */

if($_SESSION['uid']){ $w->visitasAdd(1, 13); }else{ 
$w->visitasAdd(1, 14); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>