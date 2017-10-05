<?php
/*
*
*    @name incog-admin.int.php
*    Controlador de la Home
*
*/

include ('../../header.php');

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "admod/home";
$tsTitle = 'Administración | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include('../class/admin.class.php');
$tsAdmin =& tsAdmin::getInstance();

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

if($wuser->admod){}else{
$tsPage = 'aviso';
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'La pagina No existe, Verifica que la URL(enlace) este bien escrita', 'but' => 'ir al inicio', 'link' => "".$w->settings['direccion_url']."/"));
}


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

if($get_['preg'] == 'rangos'){
$rangostotaless = mysql_query("SELECT * FROM rangos");
$rangostotales['num'] = mysql_num_rows($rangostotaless);
$rangostotales['array'] = result_array($rangostotaless);
$smarty->assign('rangos', $rangostotales);
}elseif($get_['preg'] == 'logros'){
$querlogrss = mysql_query("SELECT * FROM admin_medals");
$querlogrs['array'] = result_array($querlogrss);
$querlogrs['num'] = mysql_num_rows($querlogrss);
$smarty->assign('medals', $querlogrs);
}elseif($get_['preg'] == 'usuarios'){
	$paggets = ($get_['pref']) ? $get_['pref'] : 1;
$querUserss = mysql_query("SELECT * FROM usuarios LIMIT ".$paggets.", 25");
$querUsersstoto = mysql_num_rows(mysql_query("SELECT * FROM usuarios"));
$querUsers['array'] = result_array($querUserss);
$querUsers['num'] = mysql_num_rows($querUserss);
// PAGINAS
$urlss = $w->settings['url'].'/int/incog-admin/?preg=usuarios';
$querUsers['pags'] = '';
$total_paginas = ($querUsersstoto / 20);
if($total_paginas > 1){
if ($paggets != 1) $querUsers['pags'] .= '<a href="'.$urlss.'&pref='.($paggets-1).'"><img src="'.$w->settings['url'].'/images/icons/Backward-32.png" border="0"></a>';
for($i=1;$i<=$total_paginas;$i++) {
if($paggets == $i) $querUsers['pags'] .= '<div class="pgbtn">'.$paggets.'</div>'; else $loafavst['pags'] .= '  <a href="'.$urlss.'&pref='.$i.'">'.$i.'</a>  ';
}
if ($paggets != $total_paginas) $querUsers['pags'] .= '<a href="'.$urlss.'&pref='.($paggets+1).'"><img src="'.$w->settings['url'].'/images/icons/Forward-32.png" border="0"></a>';
}
// END PAGINAS
$smarty->assign('users', $querUsers);
// USUARIOS BANEADOS/SUSPENDIDOS
}elseif($get_['preg'] == 'baneados_usuarios'){
	$paggets = ($get_['pref']) ? $get_['pref'] : 1;
$querUserss = mysql_query("SELECT * FROM usuarios WHERE banned='1' LIMIT ".$paggets.", 25");
$querUsersstoto = mysql_num_rows(mysql_query("SELECT * FROM usuarios"));
$querUsers['array'] = result_array($querUserss);
$querUsers['num'] = mysql_num_rows($querUserss);
// PAGINAS
$urlss = $w->settings['url'].'/int/incog-admin/?preg=baneados_usuarios';
$querUsers['pags'] = '';
$total_paginas = ($querUsersstoto / 20);
if($total_paginas > 1){
if ($paggets != 1) $querUsers['pags'] .= '<a href="'.$urlss.'&pref='.($paggets-1).'"><img src="'.$w->settings['url'].'/images/icons/Backward-32.png" border="0"></a>';
for($i=1;$i<=$total_paginas;$i++) {
if($paggets == $i) $querUsers['pags'] .= '<div class="pgbtn">'.$paggets.'</div>'; else $loafavst['pags'] .= '  <a href="'.$urlss.'&pref='.$i.'">'.$i.'</a>  ';
}
if ($paggets != $total_paginas) $querUsers['pags'] .= '<a href="'.$urlss.'&pref='.($paggets+1).'"><img src="'.$w->settings['url'].'/images/icons/Forward-32.png" border="0"></a>';
}
// END PAGINAS
$smarty->assign('users', $querUsers);
}elseif($get_['preg'] == 'estadisticas'){
$sqlstats = $tsAdmin->statics(1);
$smarty->assign('statics', $sqlstats);
}elseif($get_['preg'] == 'reportes'){
$smarty->assign('bugs', $tsAdmin->getBugs());
}elseif($get_['preg'] == 'denuncias'){
$smarty->assign('denuncias', $tsAdmin->getDenuncias());
}elseif($get_['preg'] == 'modactividad'){
$smarty->assign('act', $tsAdmin->getModActivida());
}elseif($get_['preg'] == 'cssEdit'){
$cssEditLodT = $tsAdmin->cssTot(1);
$smarty->assign('arvs', $cssEditLodT);
$getarch = $w->setSecure($_REQUEST['arc']);
$smarty->assign('getarc', $getarch);
if($getarch){ // SI QUIERE VERLO
include '../class/modos/extras.class.php'; // CLASS; EXTRAS
$tsExtras =& tsExtras::getInstance(); // CLASS; EXTRAS
$cssiy = file_get_contents($w->settings['url']. '/css/' . $getarch);
$cssi = $tsExtras->colorearcode($cssiy, 'CSS');
$smarty->assign('cssi', $cssi);
} // END; SI QUIERE VERLO
}elseif($get_['preg'] == 'sqlTester'){
$smartKey = $w->setSecure($_GET['smartkey']);
if(!empty($smartkey)){
}else{
$smartKeyDefined = substr(md5(uniqid(mt_rand(), false)),0, 4).'_'.substr(md5(uniqid(mt_rand(), false)),0, 14);
//header('location: '.$w->settings['url'].'/int/incog-admin/?preg=sqlTester&smartkey='.$smartKeyDefined);
}
}elseif($get_['preg'] == 'ads'){
$sqlqueryads['activos'] = $tsAdmin->loadAdsW(1, 'Ok_Active');
$sqlqueryads['incativos'] = $tsAdmin->loadAdsW(1, 'Ok_Outive');
$smarty->assign("adsquery", $sqlqueryads);
}elseif($get_['preg'] == 'tienda'){
// TIENDA
include('../class/tienda.class.php');
$tsTienda = new tsTienda;

$actt = $w->setSecure($_GET['act']);
$geid = $w->setSecure($_GET['id']);
$postSave = $w->setSecure($_POST['save']);
$gohget = $w->setSecure($_GET['goh']);
$Addpost = $w->setSecure($_POST['add']);
$smarty->assign("tsAct", $actt);
$smarty->assign("gohget", $gohget);

if(!$actt){
$productos = $tsTienda->getProductos();
if(is_array($productos))
$smarty->assign("tsProductos", $productos); 
else
$smarty->assign("tsError", $productos); 
}elseif($actt == 'editar' || $actt == 'nuevo'){
$producto = $tsTienda->getProducto($geid);
if($postSave){
$postCQu = $tsTienda->editProducto($geid); $postCcC = explode(':', $porCQu);
$postC = $postCcC[0];
$w->redirectTo($w->settings['url'].'/int/incog-admin/?preg=tienda&save='.$postCcC[1].'&goh='.$postC);
}elseif($Addpost){
$porCQu = $tsTienda->nuevoProducto(); $postCcC = explode(':', $porCQu);
$postC = $postCcC[0];
$w->redirectTo($w->settings['url'].'/int/incog-admin/?preg=tienda&save='.$postCcC[1].'&goh='.$porC);
}else{
$smarty->assign("tsProducto",$producto); }
}else{}
// END TIENDA
}else{}

if($wuser->is_admod){ 
$w->visitasAdd(1, 53); }else{ 
$w->visitasAdd(1, 54); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>