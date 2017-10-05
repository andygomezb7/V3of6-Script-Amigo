<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.files.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'files-up' => array('n' => 2, 'p' => ''),
		'files-upArc' => array('n' => 2, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/p.files.'.$files[$action]['p'];
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
	// CLASE
	require('../class/c.files.php');
	$tsFiles =& tsFiles::getInstance();
	// CODIGO
	switch($action){
		case 'files-up':
		$folderfile = $w->setSecure($_REQUEST['f']);
		$dondel = ($folderfile) ? $folderfile : 1;
        echo $tsFiles->newFile($_FILES['file'], $dondel);
		break;
		case 'files-upArc':
		$folderfile = $w->setSecure($_REQUEST['f']);
		$dondel = ($folderfile) ? $folderfile : 1;
		echo $tsFiles->newFileArc($_FILES['file'], $dondel);
		break;
		default:
        echo '0: El archivo no existe.';
		break;
	}