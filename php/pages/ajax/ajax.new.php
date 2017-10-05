<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.new.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
	    'new-preview' => array('n' => 2, 'p' => ''),
		'new-send' => array('n' => 2, 'p' => ''),
		'new-sncom' => array('n' => 2, 'p' => ''),
		'new-bwort' => array('n' => 2, 'p' => ''),
		'new-favdet' => array('n' => 2, 'p' => ''),
		'new-fav' => array('n' => 2, 'p' => ''),
		'new-seg' => array('n' => 2, 'p' => ''),
		'new-comm' => array('n' => 2, 'p' => 'comm'),
		'new-come' => array('n' => 2, 'p' => ''),
		'new-darpuntos' => array('n' => 2, 'p' => ''),
		'new-likcomm' => array('n' => 2, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/new/'.$files[$action]['p'];
	$tsLevel = empty($files[$action]['n']) ? 2 : $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

	    if($files[$action]['p']){
    include '../libs/smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

         include ("../class/c.posts.php"); //INCLUIR EL CLASS PROFILE
	     $tsPosts =& tsPosts::getInstance();

/**********************************\

*	(INSTRUCCIONES DE CODIGO)		*

\*********************************/
	
	// DEPENDE EL NIVEL
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}

switch($action){
	case 'new-preview':
	require_once'../libs/bbcode.inc.php';
	$bbcodee = new bbcodee;
	$textboxnew = $w->setSecure($_POST['text']);
    echo $bbcodee->start($textboxnew);
	break;
	case 'new-send':
	$getakdsfml = $w->setSecure($_POST['wk']);
	$getakdsfmlsdfsdf = $w->setSecure($_POST['wg']);
     echo $tsPosts->newPost($getakdsfml, $getakdsfmlsdfsdf);
	break;
	case 'new-sncom':
	echo $tsPosts->comentar();
	break;
	case 'new-bwort':
	$msgn = $w->setSecure($_POST['me']);
	$postIDn = $w->setSecure($_POST['i']);
	echo $tsWall->addNoteb($msgn,$postIDn);;
	break;
	case 'new-favdet':
	$getI = $w->setSecure($_POST['gi']);
	$getO = $w->setSecure($_POST['go']);
	$queryxstL = mysql_num_rows(mysql_query("SELECT * FROM n_favoritos WHERE favn_user='".$wuser->uid."' AND favn_nota='".$getO."'"));
	if($queryxstL >= 1){
	if(mysql_query("UPDATE n_favoritos SET favn_dethace='".time()."', favn_type='0' WHERE favn_id='".$getI."'")){
	echo '1: Eliminado corretamente.';
	}else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
	}else{ echo '0: Esta nota no existe en tus favoritos'; }
	break;
	case 'new-fav':
	$notaid = $w->setSecure($_POST['ide']);
    echo $tsPosts->fav_nota($notaid);
	break;
	case 'new-seg':
	$notaid = $w->setSecure($_POST['ide']);
    echo $tsPosts->seguir_nota($notaid);
	break;
	case 'new-lik':
	$getnot = $w->setSecure($_POST['not']);
	$gettype = $w->setSecure($_POST['type']);
    echo $tsPosts->likNew($getnot, $gettype);
	break;
	case 'new-comm':
	$noteId = $w->setSecure($_REQUEST['ni']);
	$noteIdPagG = $w->setSecure($_REQUES['p']);
	$noteIdPag = ($noteIdPagG) ? $noteIdPagG : 0;
	$existNoId = mysql_num_rows(mysql_query("SELECT * FROM noticia WHERE id='".$noteId."'"));
	$existComII = mysql_num_rows(mysql_query("SELECT * FROM newcoment WHERE idpost='".$noteId."'"));
	if($existNoId >= 1){
	if($existComII){
	require_once'../libs/bbcode.inc.php';
	$bbcodee = new bbcodee;
	$commquery = result_array(mysql_query("SELECT nc.*, u.* FROM newcoment AS nc LEFT JOIN usuarios AS u ON nc.idusuario = u.usuario_id WHERE nc.idpost='".$noteId."' ORDER BY nc.id DESC LIMIT ".$noteIdPag.",10"));
	$cmm = 0; foreach($commquery AS $row){
	$commquery[$cmm]['text'] = $bbcodee->start($row['contenido']);
	$commquery[$cmm]['likes'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idcoment='".$row['id']."'"));
	$commquery[$cmm]['dislikes'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idcoment='".$row['id']."'"));
		$cmm++;
	}
	$smarty->assign('comm', $commquery);
	}else{ die('0: No hay comentarios.'); }
	}else{ die('0: La nota no existe.'); }
	break;
	case 'new-come':
	echo $tsPosts->comentar();
	break;
	case 'new-darpuntos':
	echo $tsPosts->notepunts();
	break;
	case 'new-likcomm':
	$getnot = $w->setSecure($_POST['not']);
	$gettype = $w->setSecure($_POST['type']);
	echo $tsPosts->likNewCom($getnot, $gettype);
	break;
	default:
		die('0: Este archivo no existe.');
	break;
}
?>