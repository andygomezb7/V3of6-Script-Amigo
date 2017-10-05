<?php
/** Wortit Developers AS Andy Gómez (www.facebook.com/andesau) 
    Programed and Design total: Andy Gómez (www.facebook.com/andesau) in Wortit.net / Wortit.com
    This is Wortit Version 3
**/
if( defined('TS_HEADER') ) return;
define('UNTARGETED', TRUE);
if(!isset($_SESSION)) session_start(); 
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
ini_set('display_errors', TRUE); 
ini_set("max_execution_time", 600); //300 seconds = 5 minutes
set_time_limit(600);
if(!isset($page) ) $page = '';
$tpl = isset($tpl) ? $tpl : 1;
/* DEFINIENDO LLAMADOS A ARCHIVOS */
define('TS_ROOT', realpath(dirname(__FILE__)));
define('TS_HEADER', TRUE);
define('TS_CLASS', 'php/class/');
define('TS_EXTRA', 'php/ext/');
define('TS_FILES', 'files/');
set_include_path(get_include_path() . PATH_SEPARATOR . realpath('./'));
/* LLAMADO DE ARCHIVOS GLOBALES ARCHIVOS GLOBALES */
$securekey['k'] = substr(md5('SF3_S3CUR3'.rand(0, 9)) ,0, 6);
include 'mysqli_start.php';
include 'config.w.php';
include TS_EXTRA.'functions.php'; 
include TS_CLASS.'wortit.class.php';
include TS_CLASS.'wall.class.php';
include TS_CLASS.'c.actividad.php';
include TS_CLASS.'web.class.php';
if($tpl == 1){ include 'php/libs/smarty/Smarty.class.php'; }
include TS_EXTRA.'SmartQuery.php';
include TS_CLASS.'c.user.php';
/* FUNCIONES PRINCIPALES DE WORTIT */
cleanRequest();
$w =& w::getInstance();
$tsWeb =& tsWeb::getInstance();
$tsActividad =& tsActividad::getInstance();
$tsWall =& tsWall::getInstance();
$wuser =& wuser::getInstance();
$wuser->read();
$wuser->updatew();
//$tsTema = $w->settings['tema']['t_path'];
//if(empty($tsTema)) 
$tsTema = 'default'; 
define('TS_TEMA', $tsTema);
if($tpl == 1){  $smarty = new Smarty; 
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
}
// Variables de acceso o de ayuda
/* Rand code */
if($tpl == 1){ $keyaccess = substr(md5(time().'RandAcces'.rand(5, 170)), 17);
$smarty->assign('keyaccess', $keyaccess);
$numaccess = rand(17, 1000000);
$smarty->assign('numaccess', $numaccess); }
/* ASIGNACION DE VARIABLES */	
if($tpl == 1){
  // location
$httphost[$securekey['k']] = $w->setSecure($_SERVER['HTTP_HOST']);
$requesturi[$securekey['k']] = $w->setSecure($_SERVER['REQUEST_URI']);
$smarty->assign('location', "http://".$httphost[$securekey['k']].$requesturi[$securekey['k']]);
if($wuser->uid){ $u = $wuser->loadUser($wuser->uid); $smarty->assign("u", $u); }
$smarty->assign('tsConfig',$w->settings);
$smarty->assign('wuser',$wuser);
$smarty->assign("_SESSION", $wuser->uid);
}  
//$wuser->medall_check();
//$wuser->rango_check();
if($wuser->uid){ mysql_query("UPDATE usuarios SET active_ult='".time()."' WHERE usuario_id='".$wuser->uid."'"); }
$ip = $w->getRealIP(); $iploc = $w->iploc($ip);
if($w->onlineh($wuser->uid) == true){ $uonline = 1; }else{ $uonline = 0;} 
if($tpl == 1){ $smarty->assign("uonline", $uonline); }
$cookie_name = 'LS_'.substr(md5($w->settings['url']), 0, 6);
$cookie = $w->setSecure($_COOKIE[$cookie_name]);
if($tpl == 1){ $smarty->assign("cookie", $cookie);
$smarty->assign('UsrsActvs', $wuser->activesusers()); 
$smarty->assign('_chat', 'Infrkamslkfnqawe');
/* Varibales de acceso para paginas int/ */ 
$get_['preg'] = $w->setSecure($_GET['preg']);
$get_['pref'] = $w->setSecure($_GET['pref']);
$get_['hdrPott'] = $w->setSecure($_POST['hdrPott']);
$smarty->assign('get_', $get_);
}
?>