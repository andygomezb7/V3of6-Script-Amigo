<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.ads.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'grupos-set' => array('n' => 2, 'p' => ''),
		'grupos-admingrup' => array('n' => 2, 'p' => ''),
		'grupos-uda' => array('n' => 2, 'p' => ''),
		'grupos-solis' => array('n' => 2, 'p' => ''),
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
	// CLASE
    include '../class/groups.class.php';
    $wgroups =& wgroups::getInstance();
	// CODIGO
	switch($action){
		case 'grupos-set':
		$gettyp = $w->setSecure($_POST['ty']);
		if($gettyp == 1){
		$sqlcats = mysql_query("SELECT * FROM c_categorias");
		$f = '<div style="width:410px;height: 360px;overflow-x:auto;overflow-y:hidden;" id="weCrtGrp"><center>
		<div style="margin:0 0 10px 0;width:300px;height: 196px;display:block;background:url('.$w->settings['url'].'/images/bg/t/add-groups.png) no-repeat;"></div>
		<table width="100%"><tbody>';
		$f .= '<tr><td>Nombre</td> <td><input type="text" name="ngp" placeholder="Nombre" style="width: 100%;font-size: 20px;height: 35px;line-height: 24px;margin: 0 0 8px 0;" /></td></tr>';
		$f .= '<tr><td>Nombre corto</td> <td><input type="text" name="cgp" style="width: 100%;font-size: 20px;height: 35px;line-height: 24px;margin: 0 0 8px 0;" placeholder="Nombre corto para el url" /></td></tr>';
		$f .= '<tr><td>Categoria</td> <td><select name="ccgp" style="width: 100%;font-size: 20px;height: 35px;line-height: 24px;" ><option>Selecciona una categoria</option>';
		while($row = mysql_fetch_assoc($sqlcats)){
		$f .= '<option value="'.$row['cid'].'">'.$row['c_nombre'].'</option>';
		}
		$f .= '</select><input type="hidden" name="ty" value="2" /></td></tr>';
		$f .= '</tbody></table></center></div>';
		echo $f;
		}elseif($gettyp == 2){
		echo $wgroups->gpnew(); }
		break;
		case 'grupos-admingrup':
		echo $wgroups->editgroup();
		break;
		case 'grupos-uda':
		$goget = $w->setSecure($_POST['goget']);
		$gegurpid = $w->setSecure($_POST['itf']);
		echo $wgroups->addGiF($gegurpid, $goget);
		break;
		case 'grupos-solis':
		$goget = $w->setSecure($_POST['goget']);
		$gegurpid = $w->setSecure($_POST['itf']);
		$gegurpids = $w->setSecure($_POST['itfs']);
		echo $wgroups->getPetG($goget, $gegurpid, $gegurpids);
		break;
		default:
        echo '0: El archivo no existe.';
		break;
	}