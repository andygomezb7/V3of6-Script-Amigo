<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.moderacion.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'moderacion-posts' => array('n' => 3, 'p' => 'main'),
		'moderacion-fotos' => array('n' => 3, 'p' => 'main'),
        'moderacion-users' => array('n' => 3, 'p' => 'main'),
		'moderacion-comunidades' => array('n' => 3, 'p' => 'comunidad'),
		'moderacion-temas' => array('n' => 3, 'p' => 'tema'),
		'moderacion-mps' => array('n' => 3, 'p' => 'main'),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
    $tsPage = 'php_files/p.moderacion.'.$files[$action]['p'];
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
	require('../../class/c.moderacion.php');
	$tsMod =& tsMod::getInstance();
    //
    $do = htmlspecialchars($_GET['do']);
	// CODIGO
	switch($action){
		case 'moderacion-comunidades':
			//<--
                $comid = (int)$_POST['comid'];
                // ACCIONES SECUNDARIAS
                switch($do){
                    case 'reboot':
                            $tsAjax = 1;
                            echo $tsMod->rebootComunidad($_POST['id']);
                    break;
                    case 'borrar':
						if($_POST['razon']){
                            $tsAjax = 1;
                            echo $tsMod->deleteComunidad($comid);
                        }else {
                            include('../ext/datos.php');
                            $smarty->assign("tsDenuncias",$tsDenuncias['comunidades']);   
                        }
                    break;
                }
			//-->
		break;
		case 'moderacion-temas':
			//<--
                switch($do){
                    case 'reboot':
                            $tsAjax = 1;
                            echo $tsMod->rebootTema($_POST['id']);
                    break;
                    case 'borrar':
						if($_POST['razon']){
                            $tsAjax = 1;
                            echo $tsMod->deleteTema($_POST['temaid']);
                        }else {
                            include('../ext/datos.php');
                            $smarty->assign("tsDenuncias",$tsDenuncias['temas']);   
                        }
                    break;
                }
			//-->
		break;

	}
?>