<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.bugs.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
	    'bugs-form' => array('n' => 2, 'p' => ''),
		'bugs-send' => array('n' => 2, 'p' => ''),
		'bugs-delt' => array('n' => 2, 'p' => 'delt'),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/bugs/'.$files[$action]['p'];
	$tsLevel = empty($files[$action]['n']) ? 2 : $files[$action]['n'];
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

switch($action){
	case 'bugs-form':
		$permisos = $tsWeb->I_Have_Permissions();
		if($permisos){
			$data = '<div class="emptyData" style="display:none;"></div>';
			$data .= '<div class="modalForm clearfix" style="width: 520px;">';
			$data .= '<input type="text" tabindex="1" name="title" style="width: 500px;" maxlength="200" size="60" class="text cuenta-save-1 ui-corner-all form-input-text box-shadow-soft" placeholder="Introduce tu sugerencia">';
			$data .= '<textarea name="desc" tabindex="2" style="height:200px;width: 500px;padding: 4px;margin: 7px 0px;" class="text cuenta-save-1 ui-corner-all form-input-text box-shadow-soft" placeholder="Describe tu sugerencia... (opcional)"></textarea>';
			$data .= '<input type="text" tabindex="3" name="email" style="width: 500px;" maxlength="200" size="60" class="text cuenta-save-1 ui-corner-all form-input-text box-shadow-soft" placeholder="Tu direcci&oacute;n de correo electr&oacute;nico">';
			$data .= '<div style="margin: 13px 0px 0px 0px;"><a onclick="bugs.send();" class="bg_green_3d btn color_white" role="button"><span class="ui-button-text">Enviar sugerencia</span></a></div>';
			$data .= '</div>';
			echo json_encode(array('status' => 'ok', 'data' => $data));
		}else echo json_encode(array('status' => 'error', 'data' => 'No tienes permisos para reportar bugs. Int&eacute;ntalo de nuevo m&aacute;s tarde'));
	break;
	case 'bugs-send':
		echo json_encode($tsWeb->send());
	break;
	default:
		die('0: Este archivo no existe.');
	break;
}
?>