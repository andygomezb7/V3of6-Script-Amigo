<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.complete.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'complete-aula' => array('n' => 1, 'p' => ''),
		'complete-aulamembers' => array('n' => 1, 'p' => ''),
		'complete-tags' => array('n' => 1, 'p' => ''),
		'complete-users' => array('n' => 2, 'p' => ''),
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
    $getdata = $w->setSecure($_GET['data']);
    $m = explode(' ', $getdata);
	// CODIGO
	switch($action){
		case 'complete-aula':
		$querys = '';
        $r = 0;
		foreach($m as $q){
        $querys .= " aul_name LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
        $querys .= " aul_name LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
        $r++;
        }
        $query = mysql_query("SELECT * FROM u_aula WHERE ".$querys." LIMIT 0,23");
        while ($row = mysql_fetch_assoc($query)) {
        $result[$row['aul_name']] = $row['aul_name'];
        }
        echo json($result);
		break;
		case 'complete-aulamembers':
		$querys = '';
        $r = 0;
		foreach($m as $q){
        $querys .= " aul_mem_name LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
        $querys .= " aul_mem_name LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
        $r++;
        }
        $query = mysql_query("SELECT * FROM u_aula_members WHERE ".$querys." LIMIT 0,23");
        while ($row = mysql_fetch_assoc($query)) {
        $result[$row['aul_name']] = $row['aul_name'];
        }
        echo json($result);
		break;
		case 'complete-tags':
		$typeget = $w->setSecure($_GET['t']);
		$cn = $w->setSecure($_GET['cn']);
		// TECNOLOGIAS
		if($typeget == 1){
		$data['php']['val'] = 'php';
		$data['php']['label'] = 'Tecnologie Php';
		$data['php']['value'] = 'php';

		$data['js']['val'] = 'javascript';
		$data['js']['label'] = 'Tecnologie javascript';
		$data['js']['value'] = 'javascript';

		$data['ruby']['val'] = 'Ruby';
		$data['ruby']['label'] = 'Tecnologie Ruby';
		$data['ruby']['value'] = 'Ruby';
		echo json($data);
		}else{ echo '{"error":"no definiste nada."}'; }
		break;
		case 'complete-users':
		$q = $w->setSecure($_REQUEST['q']);
		$lis = '';
		//$querus = result_array(mysql_query("SELECT m.*, u.* FROM suscriptores AS m LEFT JOIN usuarios AS u ON m.id_receptor = u.usuario_id WHERE m.id_emisor='".$wuser->uid."'"));
		$querus = result_array(mysql_query("SELECT * FROM usuarios LIMIT 15"));
		foreach($querus AS $ro){
		$lis .= '<li><div><img src="'.$w->settings['url'].'/thumb/img/60/60/?file='.$ro['w_avatar'].'" /> &nbsp; <div id="e">@'.$ro['usuario_nombre'].'</div></div></li>';
		}
		echo $lis;
		break;
		default:
        echo '0: El archivo no existe.';
		break;
	}