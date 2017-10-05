<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/** POWERED BY: Wortit Developers | Powered by Andy Gómez **/
/* VARIABLES POR DEFAULT */
	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'search-global' => array('n' => 2, 'p' => ''),
	);

/* VARIABLES LOCALES ESTE ARCHIVO | REDEFINIR VARIABLES */
	$tsPage = 'ajax_files/search/'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

	if($files[$action]['p']){
    include '../libs/smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

    include '../class/modos/autocomplete.class.php';
    $tsAuto =& tsAutocomplete::getInstance();


/* INSTRUCCIONES DE CODIGO | DEPENDE EL NIVEL */
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}

    // CODIGO
	switch($action){
	case 'search-global':
    $qsearch = $w->setSecure($_GET['q']);
    $typesearch = $w->setSecure($_GET['t']);
    echo $tsAuto->getSearchU($qsearch, $typesearch);
    break;
    default:
    die('0: Este archivo no existe.');
    break;
	}