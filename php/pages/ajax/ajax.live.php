<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/* VARIABLES POR DEFAULT 
@author Wortit Developers | Powered by Andy Gómez
*/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'live-logreg' => array('n' => 0, 'p' => 'logreg'),
		'live-opensourse' => array('n' => 0, 'p' => 'opensourse'),
		'live-wnotifi' => array('n' => 0, 'p' => 'wnotifi'),
		'live-home' => array('n' => 0, 'p' => 'home'),
		'live-nliked' => array('n' => 2, 'p' => 'nliked'),
		'live-dnliked' => array('n' => 2, 'p' => 'dnliked'),
		'live-getats' => array('n' => 2, 'p' => 'getats'),
		'live-cuenta' => array('n' => 2, 'p' => ''),
		'live-insgroup' => array('n' => 2, 'p' => 'insgroup'),
		'live-estat' => array('n' => 2, 'p' => 'estat'),
		'live-imgload' => array('n' => 2, 'p' => 'imgload'),
		'live-wallid' => array('n' => 2, 'p' => 'wallid'),
		'live-wall' => array('n' => 2, 'p' => 'wall'),
		'live-groupw' => array('n' => 2, 'p' => ''),
		'live-newnot' => array('n' => 2, 'p' => ''),
		'live-pachg' => array('n' => 2, 'p' => ''),
		'live-editnot' => array('n' => 2, 'p' => ''),
		'live-romenv' => array('n' => 2, 'p' => ''),
	);

/* VARIABLES LOCALES ESTE ARCHIVO */
	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/live/'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

    if($files[$action]['p']){
    include '../libs/smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/* INSTRUCCIONES DE CODIGO */
	
	// DEPENDE EL NIVEL
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
	// CODIGO
	switch($action){
		case 'live-logreg':
		echo $wuser->register();
		break;
		case 'live-opensourse':
		echo '
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript">
		$("#DJlfw").load("http://localhost/p/live-opensourse.php");
		</script>
		<div id="DJlfw"></div>
		';
		break;
		case 'live-wnotifi':

		break;
		case 'live-home':
		$smarty->assign("t", $_GET['t']);
		$smarty->assign("home", $tsWall->Wallhome());
		break;
		case 'live-livelikes':
		echo $tsWeb->tslike($_POST['voto']);
		break;
		case 'live-getats':
		$tsWeb->get_last();
		break;
		case 'live-cuenta':
	include ("../class/c.cuenta.php"); //INCLUIR EL CLASS PROFILE
	$tsCuenta =& tsCuenta::getInstance();
	
	echo $tsCuenta->getCuenta();
		break;
		case 'live-insgroup':
			include ("../class/c.groups.php"); //INCLUIR EL CLASS PROFILE
	$wgroups =& wgroups::getInstance();
	
		echo $wgroups->getPetG($_POST['rgHWK'], $_POST['sFKSLKe']);
		break;
		case 'live-estat':
		echo $tsWeb->get_last($_POST['ty']);
		break;
		case 'live-imgload':
		
		break;
		case 'live-wallid':
           $jpsdf = array('com' => $tsWall->lastCid());
         echo json_encode($jpsdf);
        break;
        case 'live-wall':
            //<--
                echo $tsWall->lastCidLive();
            
            //-->
        break;
        case 'live-groupw':
        include ("../class/c.groups.php"); //INCLUIR EL CLASS PROFILE
	$wgroups =& wgroups::getInstance();
        echo $wgroups->gpnew();
        break;
        case 'live-newnot':
         include ("../class/c.posts.php"); //INCLUIR EL CLASS PROFILE
	     $tsPosts =& tsPosts::getInstance();
	     echo $tsPosts->newPost();
        break;
        case 'live-editnot':
        include ("../class/c.posts.php"); //INCLUIR EL CLASS PROFILE
	     $tsPosts =& tsPosts::getInstance();
       echo $tsPosts->getEditNote();
        break;
        case 'live-pachg':
        include("../class/c.box.php");
	    $tsBox =& tsBox::getInstance();	
	    echo $tsBox->reromMen();
        break;
        case 'live-romenv':
        include("../class/c.box.php");
	    $tsBox =& tsBox::getInstance();	
	    echo $tsBox->SetMen();
        break;
        case 'live-mensajes':
        include("../class/c.box.php");
	    $tsBox =& tsBox::getInstance();	
	    $aja = $tsBox->viewUmen();
	    echo json_encode(array('ms' => $aja['numero'], 'nf' => 5));
        break;
        default:
            die('0: Este archivo no existe.');
        break;
	}