<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.upload.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
        'upload-avatar' => array('n' => 2, 'p' => ''),
        'upload-crop' => array('n' => 2, 'p' => ''),
		'upload-images' => array('n' => 2, 'p' => ''),
		'upload-import' => array('n' => 2, 'p' => ''),
		'upload-avts' => array('n' => 2, 'p' => ''),
		'upload-saveav' => array('n' => 2, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/p.upload.'.$files[$action]['p'];
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
	
	$tsUpload = $uplwad;
	// CODIGO
	switch($action){
        case 'upload-avatar':
            // <--
            $tsUpload->image_scale = true;
            $tsUpload->image_size['w'] = 640;
            $tsUpload->image_size['h'] = 480;
            //
            $tsUpload->file_url = $_POST['url'];
            //
            $result = $tsUpload->newUpload(3);
            echo $w->setJSON($result);
            // -->
        break;
        case 'upload-crop':
            // <--
            echo $w->setJSON($tsUpload->cropAvatar($_SESSION['uid']));
			// PARA EL PERFIL
			$total = mysql_fetch_assoc(mysql_query('SELECT p_total FROM u_perfil WHERE user_id = \''.$_SESSION['uid'].'\' LIMIT 1'));
			$total = unserialize($total['p_total']);
			$total[5] = 1;
			$total = serialize($total);
			mysql_query('UPDATE u_perfil SET p_avatar = \'1\', p_total = \''.$total.'\' WHERE user_id = \''.$_SESSION['uid'].'\'');
            // -->
        break;
		case 'upload-images':
            echo $w->setJSON($tsUpload->newUpload(1));
		break;
		case 'upload-import':
        $url = $w->setSecure($_POST['url']);
		echo $tsUpload->import_avatar($url);
		break;
		case 'upload-avts':
        $url = $w->setSecure($_FILES['url']);
		echo $tsUpload->uploadww_avatar($url);
		break;
		case 'upload-saveav':
      echo $tsUpload->save_avatar();
		break;
	}