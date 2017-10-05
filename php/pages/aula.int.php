<?php
/*
*
*    @name home.php
*    Controlador de la Home
*
*/
  
include '../../header.php';

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "aula";
$tsTitle = 'Aula | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Meta Descripcion
$tsBodyp = $w->settings['name']." Aula | Comparte con tus compañeros de escuela y profesores, Aprende gracias a nuestras herramientas para estudiantes y maestros - ¡Entra ya!  ".$w->settings['name'].'.net';
//Meta Tags
$tsBodytags = $w->settings['name'].", notas, foro, temas, games, juegos, downloads, mega, descarga, peliculas, musica";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];
// Esta registrado?
$aula['register'] = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_user_admin='".$wuser->uid."'"));

$aula['member'] = mysql_fetch_assoc(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_user_admin='".$wuser->uid."'"));;
if($aula['member']['aul_mem_img'] == 1) $aula['member']['img'] =$tsBodyi; else $aula['member']['img'] = $wuser->info['w_avatar'];
$aula['member']['tipo'] = ($aula['member']['aul_mem_type'] == 1) ?  ($u['user_sexo'] == 1) ? 'Alumna' : 'Alumno' : ($u['user_sexo'] == 1) ? 'Profesora' : 'Profesor';
$aula['member']['verifi'] = ($aula['member']['aul_mem_verifi'] == 'Verifi_Ok') ? '<img src="" />' : '';
$smarty->assign("tsTitle",$tsTitle);
$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);
$smarty->assign("tsUrl", $tsUrl);
$smarty->assign('aula', $aula);


if($get_['preg'] == 'profile'){
$idruser = $wuser->loadUserID($get_['pref']);
$existee = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_user_admin='".$idruser."'"));
$existeealtr = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_name='".$get_['pref']."'"));
$stableexist = mysql_num_rows(mysql_query("SELECT * FROM u_aula WHERE aul_key='".$get_['pref']."'"));
if($existee >= 1 or $existeealtr >= 1 or $stableexist >= 1){
if($existeealtr >= 1){ 
$validid = explode('-', $get_['pref']); $vvkekwl = $validid[0]; }else{ $vvkekwl = $idruser; }
$infouser = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$vvkekwl."'"));
if($stableexist >= 1){ 
$infouserdefec = mysql_fetch_assoc(mysql_query("SELECT * FROM u_aula WHERE aul_key='".$get_['pref']."'"));
$infouserdefec['user'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$infouserdefec['aul_user_admin']."'")); 
$infouserdefec['clases'] = result_array(mysql_query("WHERE '".$infouserdefec['aul_id']."' "));
$infouserdefec['aul_nac_dia'] = date('d', $infouserdefec['aul_fundacion']); $infouserdefec['aul_nac_mes'] = date('m', $infouserdefec['aul_fundacion']); $infouserdefec['aul_nac_anio'] = date('o', $infouserdefec['aul_fundacion']);
$infouserdefec['solicit'] = result_array(mysql_query("SELECT um.*, u.* FROM u_aula_members AS um LEFT JOIN usuarios AS u ON um.aul_mem_user_admin = u.usuario_id WHERE um.aul_mem_type='4' AND um.aul_mem_verifi='Verifi_None' AND um.aul_mem_escuela_col='".$infouserdefec['aul_id']."'"));
$infouserdefec['miembro'] = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_type='4' AND aul_mem_user_admin='".$wuser->uid."' AND aul_mem_verifi='Verifi_Ok' AND aul_mem_escuela_col='".$infouserdefec['aul_id']."'"));
$infouserdefec['actividus'] = result_array(mysql_query("SELECT um.*, u.* FROM u_aula_members AS um LEFT JOIN usuarios AS u ON um.aul_mem_user_admin = u.usuario_id WHERE um.aul_mem_type='4' AND um.aul_mem_verifi='Verifi_Ok' AND um.aul_mem_escuela_col='".$infouserdefec['aul_id']."'"));
}else{ 
$infouserdefec = mysql_fetch_assoc(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_user_admin='".$idruser."'"));
}
$smarty->assign('info', $infouser);
$smarty->assign('tsInfo', $infouserdefec);
}else{
$tsPage = 'aviso';
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'Nos parece que <b>'.$get_['pref'].'</b> Aun no conoce o no hace uso de Aula de wortit.', 'but' => 'Cuentale sobre Aula de wortit', 'link' => "".$w->settings['direccion_url']."/roombox/".$get_['pref'].""));
}
$tipo['name'] = ($infouserdefec['aul_mem_type'] == 1) ? 'Estudiante' : 'Profesor/a';
$tipo['abrev'] = ($infouserdefec['aul_mem_type'] == 1) ? 'Est. ' : 'Prof. ';
$smarty->assign('tipo', $tipo);
$smarty->assign('estable', $stableexist);
}elseif($get_['preg'] == 'class'){
$visitclassudw = mysql_num_rows(mysql_query("SELECT * FROM visitas WHERE type='52'"));
$infotsLclssaulkind = mysql_fetch_assoc(mysql_query("SELECT * FROM u_aula_kind WHERE aul_kind_key='".$get_['pref']."'"));
$infosolicitsql = result_array(mysql_query("SELECT am.*, u.* FROM u_aula_members AS am LEFT JOIN usuarios AS u ON am.aul_mem_user_admin = u.usuario_id WHERE am.aul_mem_type='3' AND am.aul_mem_verifi='Verifi_None' AND am.aul_mem_escuela_col='".$infotsLclssaulkind['aul_kin_id']."'"));
$sqlmimbroisnowerdad = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_type='3' AND aul_mem_user_admin='".$wuser->uid."' AND aul_mem_verifi='Verifi_Ok' AND aul_mem_escuela_col='".$infotsLclssaulkind['aul_kin_id']."'"));
$sdfkwlekMCLmDKFlqwek = mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='3' AND u_c_cat='".$infotsLclssaulkind['aul_kin_id']."'");
$queryMembersofTheClass = result_array(mysql_query("SELECT * FROM u_aula_members AS au LEFT JOIN usuarios AS u ON au.aul_mem_user_admin = u.usuario_id WHERE au.aul_mem_type='3' AND au.aul_mem_verifi='Verifi_Ok' AND au.aul_mem_escuela_col='".$infotsLclssaulkind['aul_kin_id']."'"));
$eXstChtIncrt = mysql_num_rows($sdfkwlekMCLmDKFlqwek);
$datofedkkfto = mysql_fetch_assoc($sdfkwlekMCLmDKFlqwek);
$IsaDMinqui = ($infotsLclssaulkind['aul_kind_user'] == $wuser->uid) ? 1 : 0;
$smarty->assign('visitclassudw', $visitclassudw); 
$smarty->assign('tsInfo', $infotsLclssaulkind);
$smarty->assign('solicit', $infosolicitsql);
$smarty->assign('miembro', $sqlmimbroisnowerdad);
$smarty->assign('iseXcht', $eXstChtIncrt);
$smarty->assign('datofedkkfto', $datofedkkfto);
$smarty->assign('IsaDM', $IsaDMinqui);
$smarty->assign("memebersultclas", $queryMembersofTheClass);
}else{
	$timeforhu = 60*60*24-time();
	$meminsql = result_array(mysql_query("SELECT um.*, ua.* FROM u_aula_members AS um LEFT JOIN u_aula AS ua ON um.aul_mem_escuela_col = ua.aul_id WHERE um.aul_mem_type='3' OR um.aul_mem_user_admin='".$wuser->uid."'"));
	$doromimin = 0; foreach ($meminsql as $key) {
        $meminsql[$doromimin]['user'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$key['aul_user_admin']."'"));
    $doromimin++;
    }
    $queryultvisitlL = mysql_query("SELECT * FROM visitas WHERE type='49' or type='51' AND u_v='".$wuser->uid."' AND v_hace >= '".$timeforhu."' ORDER BY id DESC");
	$queryultvisit = result_array($queryultvisitlL);
	$queryultvisit['num'] = mysql_num_rows($queryultvisitlL);
    $sr = 0; foreach($queryultvisit AS $us){
    $queryultvisit[$sr]['user'] = $wuser->loadUserN($us['u_v']);
    $queryultvisit[$sr]['avt'] = $wuser->loadAvatarI($us['u_v']);
    $sr++; }
    $clsesHm = result_array(mysql_query("SELECT * FROM u_aula_kind WHERE aul_kind_user='".$wuser->uid."'"));
    $erkf = 0; foreach($clsesHm AS $rrer){
    $clsesHm[$erkf]['user'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$rrer['aul_kind_user']."'"));
    	$erkf++;
    }
	$smarty->assign('ultVisit', $queryultvisit);
	$smarty->assign('memin', $meminsql);
	$smarty->assign('clsesHm', $clsesHm);
}

if($_SESSION['uid']){
if($get_['preg'] == 'profile' && $existee >= 1  or $existeealtr >= 1 or $stableexist >= 1) 
if($stableexist >= 1){ $w->visitasAdd(1, 51, $get_['pref']); }else{ $w->visitasAdd(1, 51, $idruser); } 
elseif($get_['preg'] == 'class') $w->visitasAdd(1, 52, $get_['pref']); else $w->visitasAdd(1, 49);
}else{ 
$w->visitasAdd(1, 50); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>