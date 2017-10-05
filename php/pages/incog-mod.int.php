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

$tsPage = "admode/home";
$tsTitle = 'Moderación | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include('../class/admin.class.php');
$tsAdmin =& tsAdmin::getInstance();

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

if($wuser->admod || $wuser->mod){}else{
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