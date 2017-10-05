<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.juegos.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'juegos-new_coment' => array('n' => 2, 'p' => 'new_coment'),
		'juegos-borrar_com' => array('n' => 2, 'p' => ''),
		'juegos-borrar_juego' => array('n' => 2, 'p' => ''),
		'juegos-add_juego_fav' => array('n' => 2, 'p' => ''),
		'juegos-del_juego_fav' => array('n' => 2, 'p' => ''),
		'juegos-votar' => array('n' => 2, 'p' => ''),
		
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/p.juegos.'.$files[$action]['p'];
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
    // CLASES
	include("../class/c.juegos.php");
    $tsJuegos = new tsJuegos();
    //
	switch($action){		
		case 'juegos-new_coment':
			$tsComment = $tsJuegos->newComentario();
			if(is_array($tsComment)) $smarty->assign("tsComment",$tsComment);
			else die($tsComment);
		break;
		case 'juegos-borrar_com':
			echo $tsJuegos->delComentario();
		break;
		case 'juegos-borrar_juego':
			echo $tsJuegos->delJuego();
		break;
		case 'juegos-add_juego_fav':
			echo $tsJuegos->add_fav();
		break;
		case 'juegos-del_juego_fav':
			echo $tsJuegos->del_fav();
		break;
		case 'juegos-votar':
			echo $tsJuegos->votarJuego();
		break;
        default:
            die('0: Este archivo no existe.');
        break;
	}