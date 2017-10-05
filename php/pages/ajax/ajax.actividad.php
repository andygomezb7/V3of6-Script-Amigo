<?php 
/**
 * Controlador AJAX
 *
 * @name    ajax.actividad.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/


	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'actividad-load' => array('n' => 2, 'p' => 'load'),
        
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/live/act.'.$files[$action]['p'];
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

	// CODIGO
	switch($action){
     case 'actividad-load':
            $user_ids = $w->setSecure($_POST['u']);
            //if($user_ids){ $user_id = $user_ids; }else{ $user_id = 1; }
            $user_id = $user_ids;
            //<---
             /*           $ac_do = $_POST['do'];
            $ac_type = empty($_POST['ac_type']) ? 0 : (int)$_POST['ac_type'];
            $start = empty($_POST['start']) ? 0 : (int)$_POST['start'];

                $actividad = $tsActividad->getActividad($user_id, $ac_type, $start);
                $smarty->assign("tsActividad",$actividad);
                $smarty->assign("tsDo",$ac_do);
                $smarty->assign("tsUserID",$user_id); 
                $smarty->assign("tsUsername", $wuser->loadUserN($user_id)); 
             */   
            $ac_do = $_REQUEST['do'];
            $ac_type = empty($_REQUEST['ac_type']) ? 0 : (int)$_REQUEST['ac_type'];
            $start = empty($_REQUEST['start']) ? 0 : (int)$_REQUEST['start'];
            //
                $actividad = $tsActividad->getTotalActividad($ac_type, $start);
                $smarty->assign("tsActividad",$actividad);
                $smarty->assign("tsDo",$ac_do);
                $smarty->assign("tsUserID",$user_id);
                $smarty->assign("tsUsername", $wuser->loadUserN($user_id)); 
            //--->
     break;
     default:
     echo '0: No existe el archivo.';
     break;   
	}