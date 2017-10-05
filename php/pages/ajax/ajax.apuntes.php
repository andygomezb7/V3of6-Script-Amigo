<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/** POWERED BY: Wortit Developers **/
/* VARIABLES POR DEFAULT */
	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'apuntes-add' => array('n' => 2, 'p' => ''),
	);

/* VARIABLES LOCALES ESTE ARCHIVO | REDEFINIR VARIABLES */
	$tsPage = 'php_files/p.admin.'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

	    if($files[$action]['p']){
    include 'smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/* INSTRUCCIONES DE CODIGO | DEPENDE EL NIVEL */
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
	include("../class/notas.class.php");
    $tsNotas =& tsNotas::getInstance();
        // CODIGO
	    switch($action){
	    case 'apuntes-add':
	    echo $tsNotas->add();
	    break;
        default:
            die('0: Este archivo no existe.');
        break;
	    }