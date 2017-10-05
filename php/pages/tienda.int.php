<?php 
include ("../../header.php"); // INCLUIR EL HEADER
include('../class/tienda.class.php');
$tsTienda = new tsTienda;
	
$tsPage = "tienda";	// tsPage.tpl -> PLANTILLA PARA MOSTRAR CON ESTE ARCHIVO.
$tsLevel = 2;		// NIVEL DE ACCESO A ESTA PAGINA. => VER FAQs
$tsAjax = empty($_GET['ajax']) ? 0 : 1; // LA RESPUESTA SERA AJAX?	
$tsContinue = true;	// CONTINUAR EL SCRIPT
$tsTitle = 'Tienda | '.$w->settings['name']; 	// TITULO DE LA PAGINA ACTUAL
// VERIFICAMOS EL NIVEL DE ACCSESO ANTES CONFIGURADO
$tsLevelMsg = $w->setLevel($tsLevel, true);
if($tsLevelMsg != 1){ $tsPage = 'aviso'; $tsAjax = 0; $smarty->assign("tsAviso",$tsLevelMsg); $tsContinue = false; }


// VARIABLES
$productoscompleto = count($_SESSION['tcar']);
$smarty->assign('prodctsprcmpr', $productoscompleto);

// ACCESOS Y DEFINCIONES
if($get_['preg'] == 'car'){
$car = 1; foreach($_SESSION['tcar'] as $id => $x){
$info = $tsTienda->getproducto($id);
$carprodu[$car] = $info;
$precioso = ($info['obj_3'] == 2 || $info['obj_3'] == 4) ? $info['obj_4'] : $info['precio'];
$precio = $precioso * $x;
$costepaypal = $precio/$w->settings['ads_wort_adv']*0.05+$x;
//Coste total del carro
$totalcostepaypale = $totalcostepaypale + $costepaypal + $x;
$totalcoste = $totalcoste + $precio;
$car++;
}
$smarty->assign('tsProductos', $carprodu);

$totalapagarPaypal = $totalcostepaypale/$w->settings['ads_wort_adv']*0.05; // /$w->settings['ads_wort_adv']*0.05
// DEFINIMOS SESIONES
unset($_SESSION['totPgrInPy']); unset($_SESSION['totPgrInWrts']);
$_SESSION['totPgrInPy'] = $totalapagarPaypal;
$_SESSION['totPgrInWrts'] = $totalcoste;
$smarty->assign('totalapagar', $totalcoste);
$smarty->assign('totalapagarPaypal', $totalapagarPaypal);
}elseif($get_['preg'] == 'ofert'){
$productos = $tsTienda->getProductos(2, 'obj_3="2" || obj_3 ="4"');
$smarty->assign('tsProductos', $productos);
}elseif($get_['preg'] == 'pagar'){
$postPaga = $w->setSecure($_POST['hhtk']);
$smarty->assign('postPaga', $postPaga);
if($postPaga && $postPaga == 'kklk'){
$datesofpagesenv = '';
$contador = 1; foreach($_SESSION['tcar'] as $identificador => $xdentador){
$info = $tsTienda->getproducto($identificador);
$id = $info['id'];
$producto = $info['typee'].':'.$info['obj'];
$producto = substr($producto,0,40);
$coste = ($info['obj_3'] == 2 || $info['obj_3'] == 4) ? $info['obj_4'] : $info['precio'];
$precioso = $coste * $xdentador;
$preciocho = $precioso/$w->settings['ads_wort_adv']*0.05;
$preciocoso = $preciocho/$w->settings['ads_wort_adv']*0.05;
$precio = $preciocoso;
$datesofpagesenv .= '
<input name="item_number_'.$contador.'" type="hidden" value="'.$identificador.'">
<input name="item_name_'.$contador.'" type="hidden" value="'.$producto.'"> 
<input name="amount_'.$contador.'" type="hidden" value="'.$precio.'"> 
<input name="quantity_'.$contador.'" type="hidden" value="'.$xdentador.'"> ';
$contador++;
}
$smarty->assign('datesofset', $datesofpagesenv);
}

$varTypePref = explode('-', $get_['pref']);
$varType = $varTypePref[0];
$smarty->assign('varType', $varType);
$smarty->assign("_SESSION", $_SESSION);
}else{
$productos = $tsTienda->getProductos();
$smarty->assign('tsProductos', $productos);
}

$smarty->assign("tsAction",$action);	

if(empty($tsAjax)) {	// SI LA PETICION SE HIZO POR AJAX DETENER EL SCRIPT Y NO MOSTRAR PLANTILLA, SI NO ENTONCES MOSTRARLA.
$smarty->assign("tsTitle",$tsTitle);	// AGREGAR EL TITULO DE LA PAGINA ACTUAL
/*++++++++ = ++++++++*/
include(TS_ROOT."/footer.php");
/*++++++++ = ++++++++*/
}