<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.perfil.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
        'perfil-notas' => array('n' => 2, 'p' => 'notas'),
        'perfil-temas' => array('n' => 2, 'p' => 'temas'),
        'perfil-interacciones' => array('n' => 2, 'p' => 'interacciones'),
        'perfil-interactuo' => array('n' => 2, 'p' => 'interactuo'),
        'perfil-logros' => array('n' => 2, 'p' => 'logros'),
        'perfil-actividad' => array('n' => 2, 'p' => 'actividad'),
        'perfil-images' => array('n' => 2, 'p' => 'images'),
        'perfil-info' => array('n' => 2,'p' => 'info'),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/perfil/'.$files[$action]['p'];
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
        $u = $_SESSION['uid'];
        $getu = $w->setSecure($_POST['u']);
	// CODIGO
	switch($action){
         case 'perfil-notas':
            include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
            $tsProfile =& wprofile::getInstance();
            $s['todas'] = $tsProfile->tabs($getu, $_POST['t']);         
            $smarty->assign("tsPostHome", $s);
            break;
            case 'perfil-temas':
            include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
            $tsProfile =& wprofile::getInstance();
            $s = $tsProfile->tabs($getu, $_POST['t']);         
            $smarty->assign("st", $s);
            break;
            case 'perfil-interacciones':
            include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
            $tsProfile =& wprofile::getInstance();
            $s = $tsProfile->tabs($getu, $_POST['t']);           
            $smarty->assign("st", $s);
            break;
            case 'perfil-interactuo':
            include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
            $tsProfile =& wprofile::getInstance();
            $s = $tsProfile->tabs($getu, $_POST['t']);         
            $smarty->assign("st", $s);
            break;
            case 'perfil-logros':
            include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
            $tsProfile =& wprofile::getInstance();
            $s = $tsProfile->tabs($getu, $_POST['t']);       
            $smarty->assign("st", $s);
            break;
            case 'perfil-actividad':
            $user_ids = $w->setSecure($_POST['u']);
            //if($user_ids){ $user_id = $user_ids; }else{ $user_id = 1; }
            $user_id = $user_ids;
            //<---
            /*$ac_do = $_POST['do'];
            $ac_type = empty($_POST['ac_type']) ? 0 : (int)$_POST['ac_type'];
            $start = empty($_POST['start']) ? 0 : (int)$_POST['start'];
            $actividad = $tsActividad->getActividad($user_id, $ac_type, $start);
            $smarty->assign("tsActividad",$actividad);
            $smarty->assign("tsDo",$ac_do);
            $smarty->assign("tsUserID",$user_id); 
            $smarty->assign("tsUsername", $wuser->loadUserN($user_id)); 
             */   
            $ac_do = $w->setSecure($_POST['do']);
            $ac_type = empty($_POST['ac_type']) ? 0 : (int)$_POST['ac_type'];
            $start = empty($_POST['start']) ? 0 : (int)$_POST['start'];
            //
            if($ac_do != 'borrar'){
            $actividad = $tsActividad->getActividad($user_id, $ac_type, $start);
            $smarty->assign("tsActividad",$actividad);
            $smarty->assign("tsDo",$ac_do);
            $smarty->assign("tsUserID",$user_id);
            $smarty->assign("tsUsername", $wuser->loadUserN($user_id)); 
            } else {
            echo $tsActividad->delActividad();
            die;
            }
            //--->
            break;
            case 'perfil-images':
            include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
            $tsProfile =& wprofile::getInstance();
            $s = $tsProfile->tabs($_POST['u'], $_POST['t']);       
            $smarty->assign("st", $s);
            break;
            case 'perfil-info':
            $queryinf = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$getu."'"));
            $smarty->assign('tsInfo', $queryinf);
            break;
        default:
            die('0: Esta Seccion no existe.');
        break;
	}
?>