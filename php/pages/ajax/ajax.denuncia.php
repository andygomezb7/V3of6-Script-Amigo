<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.denuncia.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'denuncia-nota' => array('n' => 2, 'p' => 'form'),
		'denuncia-foto' => array('n' => 2, 'p' => 'form'),
        'denuncia-mensaje' => array('n' => 2, 'p' => 'form'),
        'denuncia-usuario' => array('n' => 2, 'p' => 'form'),
		'denuncia-comunidad' => array('n' => 2, 'p' => 'form'),
		'denuncia-tema' => array('n' => 2, 'p' => 'form'),
        'denuncia-bwort' => array('n' => 2, 'p' => 'form'),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/denuncia/'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;
    
    if($files[$action]['p']){
    include '../libs/smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/**********************************\

*	(INSTRUCCIONES DE CODIGO)		*

\*********************************/
	
	// DEPENDE EL NIVEL
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
    // SWAT
	include("../class/c.swat.php");
	$tsSwat =& tsSwat::getInstance();
    // VARS
    $obj_id = $w->setSecure($_POST['obj_id']);
	// CODIGO
	switch($action){
		case 'denuncia-nota':   
        	// CREAR DENUNCIA
            if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id);
            // FORMULARIO DE DENUNCIA
            } else {
                // VARS
                $tsData = array(
                    'obj_id' => $obj_id,
                    'obj_title' => $w->setSecure($_POST['obj_title']),
                    'obj_user' => $w->setSecure($_POST['obj_user']), 
                );
    			// DATOS
               include("datos.php");
    			$smarty->assign("tsData",$tsData);
    			$smarty->assign("tsDenuncias",$tsDenuncias['posts']);
            }
		break;
		case 'denuncia-foto':   
        	// CREAR DENUNCIA
            if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id, 'foto');
            // FORMULARIO DE DENUNCIA
            } else {
                // VARS
                $tsData = array(
                    'obj_id' => $obj_id,
                    'obj_title' => $w->setSecure($_POST['obj_title']),
                    'obj_user' => $w->setSecure($_POST['obj_user']), 
                );
    			// DATOS
                include("datos.php");
    			$smarty->assign("tsData",$tsData);
    			$smarty->assign("tsDenuncias",$tsDenuncias['fotos']);
            }
		break;
        case 'denuncia-mensaje':
            if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id, 'mensaje');
            }
        break;
        case 'denuncia-usuario':
            if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id, 'usuario');
            }
			// DATOS
            include("datos.php");
            $smarty->assign("tsData",array('nick' => $_POST['obj_user']));
    		$smarty->assign("tsDenuncias",$tsDenuncias['users']);
        break;
		case 'denuncia-comunidad':   
        	// CREAR DENUNCIA
            if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id, 'comunidad');
            // FORMULARIO DE DENUNCIA
            } else {
                // VARS
                $tsData = array(
                    'obj_id' => $obj_id,
                    'obj_title' => $w->setSecure($_POST['obj_title']),
                    'obj_user' => $w->setSecure($_POST['obj_user']), 
                );
    			// DATOS
               include("datos.php");
    			$smarty->assign("tsData",$tsData);
    			$smarty->assign("tsDenuncias",$tsDenuncias['comunidades']);
            }
		break;
		case 'denuncia-tema':   
        	// CREAR DENUNCIA
            if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id, 'tema');
            // FORMULARIO DE DENUNCIA
            } else {
                // VARS
                $tsData = array(
                    'obj_id' => $obj_id,
                    'obj_title' => $w->setSecure($_POST['obj_title']),
                    'obj_user' => $w->setSecure($_POST['obj_user']), 
                );
    			// DATOS
                include("datos.php");
    			$smarty->assign("tsData",$tsData);
    			$smarty->assign("tsDenuncias",$tsDenuncias['temas']);
            }
		break;
        case 'denuncia-bwort':
                    if($_POST['razon']){
                $tsAjax = 1;
                echo $tsSwat->setDenuncia($obj_id, 'bwort');
            }
            // DATOS
            include("datos.php");
            $smarty->assign("tsData",array('obj_user' => $_POST['obj_user']));
            $smarty->assign("tsDenuncias",$tsDenuncias['bwort']);
        break;
	}
    // ACCION
    $smarty->assign("tsAction",$action);
?>