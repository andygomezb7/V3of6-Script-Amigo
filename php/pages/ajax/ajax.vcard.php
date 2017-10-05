<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.vcard.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'vcard-form' => array('n' => 1, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/p.files.'.$files[$action]['p'];
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
		case 'vcard-form':
$vid = $_REQUEST['uid']; 
$vcardu = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$vid."'"));
$usernames = ($vcardu['name_original'] && $vcardu['ap_original']) ? $vcardu['name_original'].' '.$vcardu['ap_original'] : $vcardu['usuario_nombre'];
$paisu = mysql_fetch_assoc(mysql_query("SELECT * FROM u_paises WHERE p_prefijo='".$vcardu['pais']."'"));
$sqguidores = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$vcardu['usuario_id']."' GROUP BY id_emisor"));
$yosigo = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$vcardu['usuario_id']."' AND id_emisor='".$wuser->uid."'"));
$v = '<div class="vcard">';
$v .= '<div class="content">';
$v .= '<div class="header hidden" style="background-image: url('.$vcardu['p_cabecera'].');">';
$v .= '<div class="portada floatL"><img src="'.$vcardu['w_avatar'].'" class="floatL"></div>';
$v .= '<div class="title floatL">';
$v .= '<span>'.$usernames.'</span>';
$v .= '<div class="info">';
$v .= '<span class="clearfix">Vive en '.$paisu['p_opcion'].'</span>';
$v .= '<span>'.$w->posnum($sqguidores).' seguidores</span>';
$v .= '</div></div></div>';
$v .= '<div class="follow_v hidden">';
if($wuser->uid != $vcardu['usuario_id']){
if($yosigo <= 0){
$v .= '<a class="follow floatL input_button hidden noactive" id="f'.$vcardu['usuario_id'].'" fi-source="'.$vcardu['usuario_id'].'">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;">Seguir</div>
</a>';
}else{
$v .= '<a class="follow floatL input_button hidden active" id="f'.$vcardu['usuario_id'].'" fi-source="'.$vcardu['usuario_id'].'">
<div class="load floatL"></div>
<div class="foll1 floatL" style="display: block;"><span class="sp1">Siguiendo</span> <span class="sp2">Dejar de seguir</span></div>
</a>';
}
}else{
$v .= '<a class="input_button hidden" href="'.$w->settings['url'].'/'.$vcardu['usuario_nombre'].'">Ver perfil</a>';
}
$v .= '</div></div></div>';
		echo $v;
		break;
		default:
        echo '0: El archivo no existe.';
		break;
	}