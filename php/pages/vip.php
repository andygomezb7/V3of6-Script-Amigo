<?php 
	include ("../../header.php"); // INCLUIR EL HEADER
	include("../class/c.vip.php");
	$tsVip =& tsVip::getInstance();
	
	
	$tsPage = "vip";	// tsPage.tpl -> PLANTILLA PARA MOSTRAR CON ESTE ARCHIVO.
	$tsLevel = 2;		// NIVEL DE ACCESO A ESTA PAGINA. => VER FAQs
	$tsAjax = empty($_GET['ajax']) ? 0 : 1; // LA RESPUESTA SERA AJAX?	
	$tsContinue = true;	// CONTINUAR EL SCRIPT
	
	$tsTitle = $w->settings['name'].' | '.$w->settings['lema']; 	// TITULO DE LA PAGINA ACTUAL

	// VERIFICAMOS EL NIVEL DE ACCSESO ANTES CONFIGURADO
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1){	
		$tsPage = 'aviso';
		$tsAjax = 0;
		$smarty->assign("tsAviso",$tsLevelMsg);
		$tsContinue = false;
	}

			$smarty->assign("tsUservip_u",$tsVip->act_uservip());
			$smarty->assign("tsUseranvip_u",$tsVip->act_useranvip());
			$smarty->assign("tsPostvip_p",$tsVip->act_postsvip());
			$smarty->assign("tsComvip_p",$tsVip->act_comvip());
			$smarty->assign("tsToppv_p",$tsVip->act_toppostsvip());
			$smarty->assign("tsTopuv_p",$tsVip->act_topuservip());
			$smarty->assign("tsEstvu_p",$tsVip->act_usercount());
			$smarty->assign("tsRanvu_p",$tsVip->act_rancount());
			$smarty->assign("tsEstvp_p",$tsVip->act_postcount());
			$smarty->assign("tsComvp_p",$tsVip->act_comentcount());
			$smarty->assign("tsStikiv_p",$tsVip->act_stikyvip());

    $smarty->assign("tsAction",$action);	

if(empty($tsAjax)) {	// SI LA PETICION SE HIZO POR AJAX DETENER EL SCRIPT Y NO MOSTRAR PLANTILLA, SI NO ENTONCES MOSTRARLA.
	$smarty->assign("tsTitle",$tsTitle);	// AGREGAR EL TITULO DE LA PAGINA ACTUAL
	/*++++++++ = ++++++++*/
	include(TS_ROOT."/footer.php");
	/*++++++++ = ++++++++*/
}