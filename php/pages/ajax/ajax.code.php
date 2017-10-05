<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.box.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'code-form' => array('n' => 2, 'p' => ''),
		'code-upa' => array('n' => 2, 'p' => ''),
		'code-code' => array('n' => 2, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/box.'.$files[$action]['p'];
	$tsLevel = empty($files[$action]['n']) ? 2 : $files[$action]['n'];
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
	include('../class/codigo.class.php');
  	$tsCode =& tsCode::getInstance();	
	// CODIGO
	switch($action){
		case 'code-form':
		$typeoform = $w->setSecure($_POST['tts']);
		if($typeoform == 1){
		$locationofcont = ''; $s4qw24wqe = $tsCode->loadRegis($wuser->uid, 1); foreach($s4qw24wqe AS $row){
		$locationofcont .= '<option value="'.$row['uc_g_ident'].'">'.$row['uc_name'].'</option>';
	    }
		$form = '<div class="hidden formrep" style="width: 491px;">
		<div id="error_flat"><img src="'.$w->settings['url'].'/images/icons/info.png" /> Un repositorio es un almac&eacute;n donde alojas archivos registrados, ademas: puedes organizar mejor tus archivos creando mas repositorios entro de otros.</div>
		<div>
		<form style="width: 88%;margin: 0 auto;">
		<div class="clearfix">
		<div class="floatL">Ubicaci&oacute;n</div>
		<div class="floatR">
		<select name="t1">
		<option value="">Ubicaci&oacute;n de el repositorio</option>
		<option value="s1">Pagina principal</option>
		'.$locationofcont.'
		</select>
		</div>
		</div><br />

		<div class="clearfix">
		<div class="floatL">Nombre</div>
		<div class="floatR"><div style="font-size: 16px;margin: 7px 7px 0px 0px;" class="floatL">'.$wuser->info['usuario_nombre'].'\</div><input type="text" name="nm" placeholder="Nombre de tu repositorio..." class="floatL" /></div>
		</div><br />

		<div class="clearfix">
		<div class="floatL">Tipo de repositorio</div>
		<div class="floatR">
		<select name="t2">
		<option value="">Tipo de repositorio</option>
		<option value="1">Administrado/Privado</option>
		<option value="2">Cerrado/Privado</option>
		<option value="3">Administrado/Publico</option>
		<option value="4">Cerrado/Publico</option>
		</select>
		</div></div><br />
		<div class="clearfix">
		<div class="floatL">Tags</div>
		<div class="floatR"><input type="text" onfocus="tagsInput()" name="t3" id="tagnew" placeholder="tags, palabras, clave"/></div>
		</div>
		<div id="::meta::stylesheets">
		<input type="hidden" name="gt" value="1" />
		<input type="hidden" name="tts" value="2" />
		<input type="hidden" name="t1cont" value="1" />
		<input type="hidden" name="t2cont" value="1" />
		<input type="hidden" name="t3cont" value="1" />
		</div>
		</form>
		</div></div>';
		echo $form;
	    }elseif($typeoform == 2){
	    	echo $tsCode->register(1);
		}else{ echo '0: NOT FOUND; form page'; }
		break;
		case 'code-upa':
		echo $tsCode->register(2);
		break;
		case 'code-code':
		$actionsslw = $w->setSecure($_GET['aft']);
		$codepage = $w->setSecure($_GET['codepage']);
		if($actionsslw == 'viewcode'){
		$querycodepage = mysql_query("SELECT * FROM u_code_visit WHERE uc_v_key='".$codepage."' AND uc_v_state='0'"); $fetchcodepage = mysql_fetch_assoc($querycodepage);
		$confirmacion = mysql_num_rows($querycodepage);
		$confgir = mysql_fetch_assoc(mysql_query("SELECT * FROM rft_uploads WHERE up_name='".$fetchcodepage['uc_v_arc']."'"));
		if($confirmacion == 1){ 
		if($confgir['up_ftype'] == 'php' or $confgir['up_ftype'] == 'txt' or $confgir['up_ftype'] == 'html' or $confgir['up_ftype'] == 'js' or $confgir['up_ftype'] == 'xml' or $confgir['up_ftype'] == 'htm'){
		mysql_query("UPDATE u_code_visit SET uc_v_state='1' WHERE uc_v_key='".$codepage."'");
		highlight_file('../../files/arc/he/'.$confgir['up_code'].'.txt');
	    }else{ echo '<center><h3>UNREADABLE FILE :: '.$confgir['up_ftype'].'</h3></center>'; }
		}else{ echo '<center><h3>THE FILE DOES NOT EXIST - ONE</h3></center>'; }
		}else{
			echo '<center><h3>THE FILE DOES NOT EXIST - TWO</h3></center>';
		}
		break;
		default:
		echo '0: NOT FOUND; Code page';
		break;
	}