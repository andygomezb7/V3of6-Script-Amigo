<?php 
/**
 * Controlador
 *
 * @name    admin.php
 * @author  Wortit developers
*/

/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	$tsPage = "soporte";	// tsPage.tpl -> PLANTILLA PARA MOSTRAR CON ESTE ARCHIVO.
	$tsAjax = empty($_GET['ajax']) ? 0 : 1; // LA RESPUESTA SERA AJAX?
	$tsLevel = 0;
	$tsContinue = true;	// CONTINUAR EL SCRIPT
	
/*++++++++ = ++++++++*/

	include "../../header.php"; // INCLUIR EL HEADER
	$tsTitle = 'Soporte interactivo | '.$w->settings['name']; 	// TITULO DE LA PAGINA ACTUAL
    include("../class/c.support.php");
	$tsSoporte =& tsSoporte::getInstance();

/*++++++++ = ++++++++*/
 
    // DEFINIMOS VARIABLES DE ACCESO
    $action = $w->setSecure($_GET['action']);
    $act = $w->setSecure($_GET['act']);
    $aget = $w->setSecure($_GET['a']);
    $paepaes = $w->setSecure($_GET['soportep']);
	// ACCION?
	$smarty->assign("tsAction",$action);
	//
	$smarty->assign("tsAct",$act);
	//
	$smarty->assign("aget",$aget);
	//

	$smarty->assign("misproyectos", $tsSoporte->most(11, $_SESSION['uid']));
	$smarty->assign("ult", $tsSoporte->most(3));

	if($paepaes){
	$infodesoppa = $tsSoporte->most(2 ,$paepaes);
	$smarty->assign("pagetgo", $infodesoppa);
	$smarty->assign("soportep", $paepaes);
	$smarty->assign("ultres", $tsSoporte->most(6, $infodesoppa['sf_id']));

   if($aget && $aget > 0){
    $smarty->assign("infoa", $tsSoporte->most(10, $aget));
    $smarty->assign("inforesp", $tsSoporte->most(7, $aget));
    }

     }else{}

     if($action == 'admin'){
       if($act == 'edit'){
       }elseif($act == 'cat'){
       }else{}
     }

		$smarty->assign("iconss", $w->get_icons('r'));
		$smarty->assign("iconssi", $w->get_icons('i'));
		$smarty->assign("iconscats", $w->get_icons('cats'));
		$smarty->assign('catshomef', $tsSoporte->most(9, $infodesoppa['sf_id']));
        $smarty->assign('catsp', $tsSoporte->most(8, $infodesoppa['sf_id']));

	// VERIFICAMOS EL NIVEL DE ACCSESO ANTES CONFIGURADO
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1){	
		$tsPage = 'aviso';
		$tsAjax = 0;
		$smarty->assign("tsAviso",$tsLevelMsg);
		//
		$tsContinue = false;
	}
	//
	if($tsContinue){

/**********************************\

* (AGREGAR DATOS GENERADOS | SMARTY) *

\*********************************/
    //
	}

if(empty($tsAjax)) {	// SI LA PETICION SE HIZO POR AJAX DETENER EL SCRIPT Y NO MOSTRAR PLANTILLA, SI NO ENTONCES MOSTRARLA.
    // AGREGAR EL TITULO DE LA PAGINA ACTUAL
	$smarty->assign("tsTitle",$tsTitle);
	$smarty->assign("tsSave",$_GET['save']);
	$smarty->assign("nomenu", 'no');
	
	/*++++++++ = ++++++++*/
	include(TS_ROOT."/footer.php");
	/*++++++++ = ++++++++*/
}