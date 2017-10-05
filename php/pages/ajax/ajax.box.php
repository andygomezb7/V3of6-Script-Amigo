<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.box.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'box-sendt' => array('n' => 2, 'p' => 'sendt'),
		'box-delt' => array('n' => 2, 'p' => 'delt'),
		'box-comprar' => array('n' => 2, 'p' => ''),
		'box-seguirn' => array('n' => 2, 'p' => ''),
		'box-favn' => array('n' => 2, 'p' => ''),
		'box-votenew' => array('n' => 2, 'p' => ''),
		'box-avt' => array('n' => 2, 'p' => ''),
		'box-nuevohst' => array('n' => 2, 'p' => ''),
		'box-soluchst' => array('n' => 2, 'p' => ''),
		'box-comentidu' => array('n' => 2, 'p' => ''),
		'box-commentult' => array('n' => 2, 'p' => ''),
		'box-movies' => array('n' => 2, 'p' => ''),
		'box-indexador' => array('n' => 2, 'p' => ''),
		'box-user' => array('n' => 2, 'p' => ''),
		'box-image' => array('n' => 2,'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/box.'.$files[$action]['p'];
	$tsLevel = empty($files[$action]['n']) ? 2 : $files[$action]['n'];
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
	// CLASE
	include('../class/c.box.php');
  	$tsBox =& tsBox::getInstance();	
	// CODIGO
	switch($action){
		case 'sendt':
		
		break;
		case 'delt':
		
		break;
		case 'box-comprar':
        include("../class/c.tienda.php");
	    $tsTienda =& tsTienda::getInstance();
	    echo $tsTienda->comprarProducto($_POST['id']);
		break;
		case 'box-seguirn':
		$notaid = $w->setSecure($_POST['ide']);
        echo $tsWeb->seguir_nota($notaid);
		break;
		case 'box-favn':
		$notaid = $w->setSecure($_POST['ide']);
        echo $tsWeb->fav_nota($notaid);
		break;
		case 'box-votenew':
        $idv = $w->setSecure($_POST['ide']);
        $typev = $w->setSecure($_POST['updows']);
        echo $tsWeb->vot_new($idv, $typev);
		break;
		case 'box-avt':
        echo $wuser->avt_aleat($u['user_sexo']);
		break;
		case 'box-nuevohst':
        include("../class/c.hosting.php");
	    $tsHosting =& tsHosting::getInstance();
        echo $tsHosting->newTicket();
		break;
		case 'box-soluchst':
		include("../class/c.hosting.php");
	    $tsHosting =& tsHosting::getInstance();
        echo $tsHosting->solucionarTicket();
		break;
		case 'box-comentidu':
		 include ("../class/c.posts.php"); //INCLUIR EL CLASS PROFILE
	$tsPosts =& tsPosts::getInstance();
         $pid = $tsPosts->lastPidComments();
         echo json_encode(array('come' => $pid));
		break;
		case 'box-commentult':
		 include ("../class/c.posts.php"); //INCLUIR EL CLASS PROFILE
	$tsPosts =& tsPosts::getInstance();
        echo $tsPosts->lastPidCommentsLive();
		break;
		case 'box-movies':
        include("../class/c.pelis.php");
	    $tsPelis =& tsPelis::getInstance();
	    echo $tsPelis->newEditPeli();
		break;
		case 'box-indexador':
	    include("../class/c.indexador.php");
	    $tsIndex =& tsIndex::getInstance();
	    $geturli = $w->setSecure($_POST['ur']);
	    echo $tsIndex->generador($geturli);
		break;
		case 'box-user':
        if($_SESSION['uid']) echo $_SESSION['uid']; else echo '0';
		break;
		case 'box-image':
        $postData = array(  
        'file'=> $_FILES['file'],
        'apikey'=> '227252e4389125fce',
        'apicode'=> 'e5f9d352a20',  
        );  
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, "http://www.wtit.biz/ajx/apiupload.php");  
  curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_POST, true);  
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  $data = curl_exec($ch);  
  print_r($data);  
  curl_close($ch);  
		break;
		default:
		echo '0: El archivo no existe.';
		break;
	}