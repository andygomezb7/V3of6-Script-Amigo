<?php
/*
*
*    @name home.php
*    Controlador de la Home
*
*/

 include "../../header.php";
 include ("../class/c.posts.php"); //INCLUIR EL CLASS PROFILE
 $tsPosts =& tsPosts::getInstance();
$tsPage = 'notas';

/* GETS */
$appgets = $w->setSecure($_GET['ap']);
$appgetse = $w->setSecure($_GET['ape']);
$smarty->assign('apgets', $appgets);
$paggetss = $w->setSecure($_GET['pag']);
$paggets = ($paggetss) ? $paggetss : 0;
$smarty->assign('pag', $paggets);

if($appgets == 'home' || !$appgets || $appgets == 'cat'){
// Home page:
$title = 'Home';
// Categorias 
$catshomequery = result_array(mysql_query("SELECT * FROM `categorias` LIMIT 0 , 30"));
// Ultimas notas
if($appgets == 'cat'){ $tsPostsTodose = $tsPosts->loadPosts(2, $appgetse); }else{ $tsPostsTodose = $tsPosts->loadPosts(); }
$smarty->assign("tsPostHome",$tsPostsTodose);
if($_GET['pagina']) $paginanote = $_GET['pagina']; else $paginanote = 1;
$smarty->assign("paginanot", $paginanote);
$smarty->assign("tsPages", $tsPostsTodose['todas']['pages']);
$smarty->assign('catshome', $catshomequery);
$w->visitasAdd(1, 17);
// End home page;
}elseif($appgets == 'nota'){
// ASIGSN
$categ = $w->setSecure($_GET['cat']);
$idnota = $w->setSecure($_GET['post_id']);
$tsNota = $tsPosts->getLoadPost($idnota);
$ttle = $w->setSecure($_GET['title']);
$vars_Exist = $tsPosts->not_exist($idnota, $ttle, $categ);
if($vars_Exist == 'None'){
$tsPage = 'aviso';
$title = 'No existe';
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'La noticia no existe.<br /> <h1>¡No todo esta perdido!</h1>', 'but' => 'Encontrar mas resultados', 'link' => "".$w->settings['direccion_url']."/search/?q=".$ttle."&t=notas"));
}elseif($tsNota['estado'] != 1 && !$wuser->admod && !$wuser->mod){
$tsPage = 'aviso';
$title = 'Desactivada';
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'La noticia ha sido borrada, consulta con un moderador.<br /> <h1>¡No todo esta perdido!</h1>', 'but' => 'Encontrar mas resultados', 'link' => "".$w->settings['direccion_url']."/search/?q=".$ttle."&t=notas"));
}else{
	$smarty->assign('nomenu', 'sjsjs');
}
/* GADGETS */
$time_1414['hoy'] = time() -(60*60*24);
$gadgets['destacadas'] = result_array(mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria ORDER BY p.visitas DESC LIMIT 7"));
/* END GADGETS */

$pplndelpmderu = '';
for($i = 1; $i <= $wuser->rango['admin_home']; $i++){ 
$pplndelpmderu .= '<a class="qtip" title="Dar '.$i.' Puntos" p="'.$i.'">'.$i.'</a>'; 
}

// ACTIVIDAD DE LA NOTA
if($tsNota['id_usuario'] == $wuser->uid || $wuser->admod || $wuser->mod){
$actividUskLE = $tsActividad->getModActividad(0,0,0,$idnota);
$smarty->assign('modactividad', $actividUskLE);
}

//Meta Descripcion
$descBodyP = $w->wrecorte($tsNota['detalle'], 140);
$tsBodyp =  $descBodyP." | Nota publicada en ".$w->settings['name'].'.net';
//Meta Tags
$tsBodytags = $tsNota['tags'].','.$w->settings['name'].", notas, foro, temas";
//Meta Imagen
$tsBodyi = ($tsNota['banner']) ? $tsNota['banner'] : $w->settings['url'].'/images/avatar/group2.png';

$title = $tsNota['titulo'];
$smarty->assign('tsNota', $tsNota);
///$smarty->assign('nomenu', 'sjsjs');
$smarty->assign('gadgets', $gadgets);
$smarty->assign('darpuntos', $pplndelpmderu);

$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);

$w->visitasAdd($tsNota['id'], 5);
}elseif($appgets == 'editar'){
	//#EDITAR NOTA (CATEGORIAS)
	$loadcatst = result_array(mysql_query("SELECT * FROM categorias"));
    $smarty->assign('cats', $loadcatst);
    $queryLoDnote = mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.id='".$appgetse."'");
    $queryLoadNote = mysql_fetch_assoc($queryLoDnote);
    $numexist = mysql_num_rows($queryLoDnote);

if($numexist <= 0){
$tsPage = 'aviso';
$title = 'No existe';
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'La noticia no existe.', 'but' => 'Regresar al inicio', 'link' => "".$w->settings['direccion_url']."/notas/"));
}elseif($wuser->admod || $wuser->mod || $queryLoadNote['id_usuario'] == $wuser->uid){
 $smarty->assign('tsNota', $queryLoadNote);
 $smarty->assign('numnota', $numexist);
}else{
$tsPage = 'aviso';
$title = 'No tienes permisos';
$smarty->assign("tsAviso",array('titulo' => '¡ALTO!', 'mensaje' => 'No eres dueño o no tienes permisos para editar esta nota.', 'but' => 'Regresar al inicio', 'link' => "".$w->settings['direccion_url']."/notas/"));
}
}elseif($appgets == 'agregar'){
$loadcatst = result_array(mysql_query("SELECT * FROM categorias"));
$smarty->assign('cats', $loadcatst);
}elseif($appgets == 'fav'){
$loafavst = result_array(mysql_query("SELECT f.*, n.*, c.* FROM n_favoritos AS f LEFT JOIN noticia AS n ON f.favn_nota = n.id LEFT JOIN categorias AS c ON n.categoria = c.id_categoria WHERE f.favn_type='1' AND f.favn_user='".$wuser->uid."' LIMIT ".$paggets.",20"));
$ldFvTol = mysql_num_rows(mysql_query("SELECT f.*, n.*, c.* FROM n_favoritos AS f LEFT JOIN noticia AS n ON f.favn_nota = n.id LEFT JOIN categorias AS c ON n.categoria = c.id_categoria WHERE f.favn_type='1' AND f.favn_user='".$wuser->uid."'"));
$total_paginas = ($ldFvTol / 20);
if($total_paginas > 1){
if ($paggets != 1) $loafavst['pags'] = '<a href="'.$url.'?pag='.($paggets-1).'"><img src="images/izq.gif" border="0"></a>';
for($i=1;$i<=$total_paginas;$i++) {
if($paggets == $i) $loafavst['pags'] = $paggets; else $loafavst['pags'] = '  <a href="'.$url.'?pag='.$i.'">'.$i.'</a>  ';
}
if ($paggets != $total_paginas) $loafavst['pags'] = '<a href="'.$url.'?pag='.($paggets+1).'"><img src="images/der.gif" border="0"></a>';
}

$smarty->assign('favs', $loafavst);
}

/* VARIABLES DE ACCESO */
$extrat = ($title) ? $title.' - ' : '';
$tsTitle = $extrat.'Notas | '.$w->settings['name'];
$tsTitle = ($tsTitle) ? $tsTitle : $w->settings['name'].' New';
$smarty->assign("tsTitle",$tsTitle);

/* INCLUDE FINAL */
include(TS_ROOT."/footer.php");
?>