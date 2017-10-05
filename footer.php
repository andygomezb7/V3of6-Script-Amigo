<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script'); 
$tsTitle = $tsTitle ? $tsTitle : $w->settings['name'];
   /** USO DE SMARTY PARA MOSTAR PAGINAS **/
   /* Realizamos tareas para mostrar la plantilla - Powered by: Wortit Developers */
   $smarty->assign("tsPage",$tsPage);
   $smarty_next = true;

if(!$smarty->templateExists("$tsPage.tpl")){
$smarty->template_dir = TS_ROOT.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.TS_TEMA;
if($smarty->templateExists("$tsPage.tpl")) $smarty_next = true; }else $smarty_next = true;

if($smarty_next == true){ 
if($w->settings['mantenimiento'] == 2) 
if($wuser->mod || $wuser->admod){ $smarty->display("$tsPage.tpl");  }else{
$smarty->display("modulos/mantenimiento.tpl"); }
//elseif($u['usuario_nombre'] && $u['banned'] == 1) $smarty->display("t.banned.tpl");
elseif($tsLevel == 2 && !$wuser->uid) $smarty->display("modulos/login.tpl");
elseif($u['rango'] == 1) $smarty->display("$tsPage.tpl");
else $smarty->display("$tsPage.tpl"); 
}else{ die("0: Lo sentimos, se produjo un error al cargar la plantilla. Contacte al administrador"); }
?>