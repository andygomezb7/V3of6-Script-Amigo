<?php 
/**
 * Controlador AJAX
 *
 * @name    ajax.chat.php
 * @author  PHPost Team
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/


	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'tienda-addpr' => array('n' => 2, 'p' => ''), 
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/tienda/'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

    if($files[$action]['p']){
    include 'smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/**********************************\

*	(INSTRUCCIONES DE CODIGO)		*

\*********************************/
	
	// DEPENDE EL NIVEL
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
  include('../class/chats.class.php');
	$tsChats =& tsChats::getInstance();



// CODIGO
switch($action){
case 'tienda-addpr':
// AGREGAR PRODUCTO   
 $idGetGet = $w->setSecure($_REQUEST['id']); 
 $actionGetGet = $w->setSecure($_REQUEST['action']);
if (isset($idGetGet)) $id = $idGetGet;
else $id = 1;
if(isset($actionGetGet)) $action = $actionGetGet;
else $action = "empty";

switch($action){
case "add":
if(isset($_SESSION['tcar'][$id])) $_SESSION['tcar'][$id]++;
else $_SESSION['tcar'][$id]=1;
echo '1: Agregado';
break;
case "remove":
if(isset($_SESSION['tcar'][$id])){ 
$_SESSION['carro'][$id]--;
if($_SESSION['carro'][$id]==0) unset($_SESSION['tcar'][$id]);
echo '1: Se reducio el numero de este producto';
}
break;
case "removeProd":
if(isset($_SESSION['tcar'][$id])){
unset($_SESSION['tcar'][$id]);
echo '1: Producto removido';
}
break;
case "mostrar":
if(isset($_SESSION['tcar'][$id])){
continue;
}
break;
case "empty":
unset($_SESSION['tcar']);
echo '1: Carrito vaciado';
break;
}
// END AGREGAR COMPRA
break;
default:
echo '0: Este archivo no existe.';
break;
}