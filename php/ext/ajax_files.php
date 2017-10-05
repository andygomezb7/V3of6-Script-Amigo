<?php
/** POWERED BY: Wortit Developers **/
$tpl = 0;
include('../../header.php');
//error_reporting(E_ALL);
$tsTitle = $w->settings['name'].' - '.$w->settings['lema'];
$tsPage = "";
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;
/* VARIABLES LOCALES ESTE ARCHIVO */
$action = htmlspecialchars($_GET['action']);
$action_type = explode('-',$action);
$action_type = $action_type[0];
/* INSTRUCCIONES DE CODIGO */
$file = '../pages/ajax/ajax.'.$action_type.'.php';
if(file_exists($file)) include($file);
else die("0: No se encontro el archivo que se ha solicitado.");
/* AGREGAR DATOS GENERADOS | SMARTY */
if($files[$action]['p']){
$smarty->template_ts = false;  $smarty->assign("tsTitle",$tsTitle);
$smarty->assign('tsConfig',$w->settings);
$smarty->assign('wuser',$wuser);
if($wuser->uid){ $smarty->assign("_SESSION", $wuser->uid); }else{}
if($w->onlineh($wuser->uid) == true){ $uonline = 1; }else{ $uonline = 0;} $smarty->assign("uonline", $uonline); 
if($wuser->uid){ $u = $wuser->loadUser($wuser->uid); $smarty->assign("u", $u); }else{}
/*++++++++ = ++++++++*/
include(TS_ROOT."/footer.php");
/*++++++++ = ++++++++*/
}