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

$tsPage = "codigo";
$tsTitle = 'Codigo | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

include'../class/codigo.class.php';
$tsCode =& tsCode::getInstance();

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Meta Descripcion
$tsBodyp = $w->settings['name']." Codigo | Administra tus archivos y editalos, configura tus ejecuciones ¡Entra ya! code.".$w->settings['name'].'.net';
//Meta Tags
$tsBodytags = $w->settings['name'].", codigo, administrar, administración, administracion, code, spanish, español";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];
// GETS
$codepage = $w->setSecure($_GET['codepage']);
$action = $w->setSecure($_GET['action']);
$codepuf = $w->setSecure($_GET['codepuf']);
$codInWoo = $w->setSecure($_GET['inwoo']);
// TIMEPO DE EJECUCIÓN DE EL SCRIPT
$tiempo_inicio = $tsCode->microtime_float();
for ($i=0; $i<3000000; $i++){ }
$tiempo_fin = $tsCode->microtime_float();
$tiempo = $tiempo_fin - $tiempo_inicio;
$scriptejecution = ($tiempo_fin - $tiempo_inicio);

// VARIABLES SMARTY
$smarty->assign("tsTitle",$tsTitle);
$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);
$smarty->assign("tsUrl", $tsUrl);
$smarty->assign('codepage', $codepage);
$smarty->assign('codepuf', $codepuf);
$smarty->assign('action', $action);
$smarty->assign("ejecution", $scriptejecution);

if($action == 'prof'){
$tsArchivesCode = $tsCode->loadRegis($codepage, 2);
$tsIcodeInt = $tsCode->loadRegis($codepage, 4);
$smarty->assign('tsArchivesCode', $tsArchivesCode);
$smarty->assign('tsICode', $tsIcodeInt);
}elseif($action == 'profarc'){
/* VARIABLES DE ACCESO A MOSTRAR ACTUALIZACIÓN */
$dor['prev'] = $w->setSecure($_GET['prev']);
$dor['do'] = $w->setSecure($_GET['do']);
/* END "VARIABLES DE ACCESO A MOSTRAR ACTUALIZACIÓN" */
if($dor['do'] && $dor['prev'] == 'tru'){ $tsArcInfo = $tsCode->loadRegis($dor['do'], 3, 3); }else{ $tsArcInfo = $tsCode->loadRegis($codepage, 3); }
$smarty->assign('tsArc', $tsArcInfo);
if($tsArcInfo['num'] >= 1){
if(!$codInWoo or $codInWoo != 'download'){
if($tsArcInfo['t']['up_ftype'] == 'php' or $tsArcInfo['t']['up_ftype'] == 'html' or $tsArcInfo['t']['up_ftype'] == 'js' or $tsArcInfo['t']['up_ftype'] == 'htm' or $tsArcInfo['t']['up_ftype'] == 'xml' or $tsArcInfo['t']['up_ftype'] == 'txt' or $tsArcInfo['t']['up_ftype'] == 'css'){
$codekeyp = substr(md5(uniqid(mt_rand(), false)),0, 23); 
$namekeycode = substr(md5(uniqid(mt_rand(), false)),0, 44);
$keycodepage = substr(md5(uniqid(mt_rand(), false)),0, 17);
mysql_query("INSERT INTO u_code_visit(uc_v_nombre, uc_v_ident, uc_v_hace, uc_v_arc, uc_v_state, uc_v_user, uc_v_userad, uc_v_key, uc_v_code) VALUES('".$namekeycode."','".substr(md5(uniqid(mt_rand(), false)),0, 8)."','".time()."','".$tsArcInfo['uc_type_3_content']."','0','".$wuser->uid."','".$wuser->uid."','".$keycodepage."','".$codekeyp."')");
$smarty->assign('keycodepage', $keycodepage);
}elseif($tsArcInfo['t']['up_ftype'] == 'zip' || $tsArcInfo['t']['up_ftype'] == 'rar'){
$zip = zip_open('../../files/arc/he/'.$tsArcInfo['t']['up_code'].'.'.$tsArcInfo['t']['up_ftype']);
$ziparc = '';
while ($entrada = zip_read($zip)) { 
$ziparc .= "<li>" . zip_entry_name($entrada) . "</li>"; 
} 
$smarty->assign('ziparc', $ziparc);
zip_close($zip);  
}
$actualizacionQuRySlQ = $tsCode->loadRegis($codepage, 5);
$smarty->assign('actualizacion', $actualizacionQuRySlQ);
$smarty->assign('dor', $dor);
}else{
$typefile = $tsArcInfo['t']['up_ftype'];
if($typefile == 'jpg' or $typefile == 'png' or $typefile == 'gif' or $typefile == 'jpeg' or $typefile == 'PNG' or $typefile == 'JPG' or $typefile == 'JPEG' or $typefile == 'GIF'){ 
$tipearcpeta = TS_ROOT.'/files/arc/co/';
$typefileDOWN = $typefile;
}elseif($typefile == 'js' or $typefile == 'php' or $typefile == 'css' or $typefile == 'docx' or $typefile == 'zip' or $typefile == 'rar' or $typefile == 'txt' or $typefile == 'psd' or $typefile == 'html' or $typefile == 'mp4' or $typefile == 'mp3' or $typefile == 'pdf' or $typefile == '3gp' or $typefile == '3gpp' or $typefile == 'avi' or $typefile == 'flv' or $typefile == 'meta' or $typefile == 'pptx' or $typefile == 'xls' or $typefile == 'wav' or $typefile == 'swf'){
$tipearcpeta = TS_ROOT.'/files/arc/he/';
if($tsArcInfo['t']['up_ftype'] == 'php' or $tsArcInfo['t']['up_ftype'] == 'html' or $tsArcInfo['t']['up_ftype'] == 'js' or $tsArcInfo['t']['up_ftype'] == 'htm' or $tsArcInfo['t']['up_ftype'] == 'xml' or $tsArcInfo['t']['up_ftype'] == 'txt' or $tsArcInfo['t']['up_ftype'] == 'css'){
$typefileDOWN = 'txt';
}else{ $typefileDOWN = $typefile; }
}else{
$tsPage = "aviso";
$smarty->assign("tsAviso",array('titulo' => '¡Ups!', 'mensaje' => 'Este archivo no tiene una extención permitida en nuestro sistema, reporta algun error o problema dando <a onclick="bugs.form()">click aqui</a>.', 'but' => 'Volver', 'link' => "".$w->settings['url']."/int/codigo/"));
}
$enlace = $tipearcpeta.$tsArcInfo['t']['up_code'].'.'.$typefileDOWN;
$tsCode->descLogg($tsArcInfo['uc_id']);
header ("Content-Disposition: attachment; filename=".$tsArcInfo['t']['up_vname']." "); 
header ("Content-Type: application/octet-stream");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);
}
}else{
$tsPage = "aviso";
$smarty->assign("tsAviso",array('titulo' => '¡Ups!', 'mensaje' => 'Este archivo no existe, vuelve y verifica que el url sea el indicado.', 'but' => 'Volver', 'link' => "".$w->settings['url']."/int/codigo/"));
}
}else{}

$tsRegis = $tsCode->loadRegis($wuser->uid, 1);
$smarty->assign('tsRegis', $tsRegis);

if($_SESSION['uid']){ $w->visitasAdd(1, 46); }else{ 
$w->visitasAdd(1, 48); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>