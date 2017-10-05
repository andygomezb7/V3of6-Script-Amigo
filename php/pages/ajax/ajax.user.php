<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.user.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'user-register' => array('n' => 0, 'p' => ''),
        'user-passr' => array('n' => 0, 'p' => ''),
        'user-passn' => array('n' => 0, 'p' => ''),
        'user-notifism' => array('n' => 0, 'p' => ''),
        'user-sound' => array('n' => 0, 'p' => ''),
        'user-upload' => array('n' => 0, 'p' => ''),
        'user-url' => array('n' => 0, 'p' => ''),
        'user-bwortedit' => array('n' => 0, 'p' => ''),
        'user-ttnotif' => array('n' => 0, 'p' => ''),
        'user-lgt' => array('n' => 0, 'p' => ''),
        'user-ttmssgs' => array('n' => 0, 'p' => ''),
        'user-logg' => array('n' => 0, 'p' => ''),
        'user-urscht' => array('n' => 0, 'p' => ''),
        'user-atcpltusrs' => array('n' => 0, 'p' => ''),
        'user-vcard' => array('n' => 0, 'p' => ''),
        'user-bloq' => array('n' => 0, 'p' => ''),
        'user-cmbr' => array('n' => 1, 'p' => ''),
        'user-foll' => array('n' => 1, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/user/'.$files[$action]['p'];
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
		case 'user-register':
		include '../class/modos/anonimo.class.php';
		$tsAnonimo =& tsAnonimo::getInstance();
		echo $tsAnonimo->register();
		break;
		case 'user-passr':
		include '../class/modos/anonimo.class.php';
		$tsAnonimo =& tsAnonimo::getInstance();
		$email = $w->setSecure($_POST['mail']);
		echo $tsAnonimo->recuperar_contra($email);
		break;
		case 'user-passn':
		include '../class/modos/anonimo.class.php';
		$tsAnonimo =& tsAnonimo::getInstance();
		$usermail = $w->setSecure($_POST['user']);
		$passnmail = $w->setSecure($_POST['pass']);
		$keymail = $w->setSecure($_POST['key']);
		$codemail = $w->setSecure($_POST['code']);
        echo $tsAnonimo->userpassemailsdk($usermail, $passnmail, $keymail, $codemail);
		break;
		case 'user-notifism':
		$typesek = $w->setSecure($_POST['skldfj']);
		$total = $w->setSecure($_POST['n']);
		if($typesek == 1 or $typesek == '1'){ // MENSAJES
        $sifkemensajes = mysql_num_rows(mysql_query("SELECT * FROM mensaje WHERE para='".$wuser->uid."' AND de!='".$wuser->uid."' AND leido='0'"));
		if($sifkemensajes >= 1){ 
		if($total == $sifkemensajes){ 
		echo '2:'.$sifkemensajes; 
	    }else{ 
	    echo '1:'.$sifkemensajes; } 
	    }else{ echo '0:'.$sifkemensajes; }

	    }elseif($typesek == 2 or $typesek == '2'){  // NOTIFICACIONES
	    $sdkLoadQrNtifsLda = mysql_query("SELECT n.*, u.* FROM wnotifi AS n LEFT JOIN usuarios AS u ON n.id_emisor = u.usuario_id WHERE n.vista='0' AND n.id_emisor!='".$wuser->uid."' AND n.id_receptor='".$wuser->uid."' ");
	    $sifkemensajessd = mysql_num_rows($sdkLoadQrNtifsLda);
		$sdknotifsLoads = result_array($sdkLoadQrNtifsLda);
		foreach($sdknotifsLoads AS $row){
		//mysql_query("UPDATE wnotifi SET vista='1' WHERE id='".$row['id']."'");
		$alkwelka = $tsWeb->url($row['tipo'], $row['idg']);
		$kjs['ltlist'] .= '<div class="notification hover" timepub="'.time().'" style="">';
		$kjs['ltlist'] .= '<div class="close" onclick="$(this).parent().remove();">&#120;</div>';
		$kjs['ltlist'] .= '<a href="'.$w->settings['url'].'/'.$row['usuario_nombre'].'"><img href="'.$w->settings['url'].'/'.$row['usuario_nombre'].'" width="32" height="32" src="'.$row['w_avatar'].'"></a><i class="smarticon '.$row['css'].'"></i><p><a href="'.$w->settings['url'].'/'.$row['usuario_nombre'].'">'.$row['usuario_nombre'].'</a> '.$tsWeb->web[$row['tipo']]['text'].' <a href="'.$alkwelka['url'].'" class="important" title="'.$tsWeb->web[$row['tipo']]['pref'].'">'.$tsWeb->web[$row['tipo']]['pref'].' '.$alkwelka['extras'].'</a></p></div>';
	    }
        // Notificacion de prueba
        //$kjs['ltlist'] .= '<div class="notification hover" timepub="'.time().'" style="">';
		//$kjs['ltlist'] .= '<div class="close" onclick="$(this).parent().remove();">&#120;</div>';
		//$kjs['ltlist'] .= '<a href="'.$w->settings['url'].'/andy/"><img href="'.$w->settings['url'].'/andyg" width="32" height="32" src="'.$w->settings['url'].'/images/avatar/group.png"></a><i class="smarticon '.$row['css'].'"></i><p><a href="'.$w->settings['url'].'/andyg">Andy Gomez</a> - <a href="'.$w->settings['url'].'" class="important" title="notification de prueba">Notificacion de prueba</a></p></div>';

	    $kjs['total'] = $sifkemensajessd;
		$kjs['sound'] = ($kjs['ltlist']) ? 1 : 0;
        $kjs['max_time'] = time()-30;
        $kjs['where'] = ($sifkemensajessd == $total) ? 0 : 1;
        echo json($kjs);
	    }else{
	    }
		break;
		case 'user-sound':
		echo '<iframe src="'.$w->settings['url'].'/php/libs/sounds/alert.swf" ></iframe>';
        echo '<embed width="0px" height="0px" wmode="transparent" allowscriptaccess="always" quality="high" bgcolor="#000000" src="'.$w->settings['url'].'/php/libs/sounds/alert.swf" type="application/x-shockwave-flash">';
		break;
		case 'user-upload':
		$urlupp = $_FILES['file'];
        echo $wuser->import_avatarupp($urlupp);
		break;
		case 'user-url':
		$urluur = $w->setSecure($_GET['url']);
        echo file_get_contents($urluur);
		break;
		case 'user-bwortedit':
		$skowekqñsl = $w->setSecure($_POST['idpsr']);
		$skjflawlwkq5 = $w->setSecure($_POST['txbwor']);
        echo $tsWall->bEdtIUsr($skowekqñsl, $skjflawlwkq5);
		break;
		case 'user-ttnotif':
        $tsNot = $tsWeb->whitNotifis();

echo '<div class="notifihnfQL">';
$i = 1;
while($t = mysql_fetch_assoc($tsNot)){
$sfkl5545 = $tsWeb->url($t['tipo'], $t['idg']);
mysql_query("UPDATE wnotifi SET vista='1' WHERE id='".$t['id']."'");
if($i%2==0){ $til = 'background:#E4E4E4;'; }else{ $til = 'background:#FFFFFF;'; }
if($t['w_avatar'] == NULL){ $av = $w->settings['direccion_url'].'/images/avatar/group.png'; }else{ $av = $t['w_avatar']; }
	if($t['vista'] == '0' or $t['vista'] == 0){ $vers = 'background:#FFF1C7;border: 1px solid #CCC511;'; }else{ $vers = ''; }
	echo '<div id="LDFwel_'.$t['id'].'">';
	echo '<div class="KFnweonot" style="'.$til.'overflow: hidden;float: left;margin: 0px 6px;'.$vers.'">'; 
	
	echo '<div id="notenAKwenQ">';
	echo '<a href="'.$w->settings['url'].'/'.$t['usuario_nombre'].'"><img src="'.$av.'" style="margin: 3px 7px 3px 3px;width: 25px; height: 25px; float: left;" /></a>';
	echo '</div> 
	
	<div id="contenLKSAlEK">
	<div id="DFlfnOQENFCOnt">
	<i class="notifi '.$tsWeb->web[$t['tipo']]['icon'].'"></i> <a href="'.$w->settings['url'].'/'.$t['usuario_nombre'].'">'.$t['usuario_nombre'].'</a> '.$tsWeb->web[$t['tipo']]['text'].' <a href="'.$sfkl5545['url'].'" target="_blank">'.$tsWeb->web[$t['tipo']]['pref'].'</a> '.$sfkl5545['extras'].' 
	</div>
	
	</div>
	
	</div> 
	</div>';
	$i++;
}
echo '</div>';
		break;
		case 'user-lgt':
		include '../class/modos/anonimo.class.php';
		$tsAnonimo =& tsAnonimo::getInstance();
		$s3f516weq32 = $w->setSecure($_POST['kdy']);
		$sd4fa65we6q = $w->setSecure($_POST['kdyds']);
        if($s3f516weq32 == '5d46556we51f32dc15E6'){  
        if($sd4fa65we6q == 'sdf51a9r8ga653'){ echo $tsAnonimo->logoutUser($wuser->uid); }else{ echo '0: Key dos no registrada.'; } 
        }else{ echo '0: Key uno no definida.'; }
		break;
		case 'user-ttmssgs':
echo '<div class="notifihnfQL">';
//$mysqli->query("UPDATE mensaje SET leido='1'");
$sf325as16f5 = $mysqli->query('SELECT m.*, u.* FROM mensaje AS m LEFT JOIN usuarios AS u ON m.de = u.usuario_id WHERE m.para="'.$_SESSION['uid'].'" GROUP BY m.de ORDER BY m.rom_id ASC LIMIT 0,38');
$i = 1;
while($t = $sf325as16f5->fetch_assoc()){
if($i%2==0){ $til = 'background:#E4E4E4;'; }else{ $til = 'background:#FFFFFF;'; }
if($t['w_avatar'] == ''){ $av = $w->settings['direccion_url'].'/images/avatar/group.png'; }else{ $av = $t['w_avatar']; }
	if($t['leido'] == '0' or $t['leido'] == 0){ $vers = 'background:#FFF1C7;border: 1px solid #CCC511;'; }else{ $vers = ''; }
	echo '<div id="LDFwel_'.$t['id'].'">';
	echo '<div class="KFnweonot" style="'.$til.'overflow: hidden;float: left;margin: 0px 6px;'.$vers.'">'; 
	
	echo '<div id="notenAKwenQ">';
	echo '<a href="'.$w->settings['url'].'/'.$t['usuario_nombre'].'"><img src="'.$av.'" style="margin: 3px 7px 3px 3px;width: 25px; height: 25px; float: left;" /></a>';
	echo '</div> 
	
	<div id="contenLKSAlEK">
	
	<div class="titleNDLens">
	<a href="'.$w->settings['url'].'/'.$t['usuario_nombre'].'">'.$t['usuario_nombre'].'</a>
	</div> 
	
	<div id="DFlfnOQENFCOnt">
	<a onclick="ctrcht.add('.$t['usuario_id'].', '.$t['identi'].');" id="'.$t['usuario_id'].'_'.$t['identi'].'_14" data-title="'.$t['usuario_nombre'].'" style="font-size: 11px;">'.$t['texto'].'</a>
	</div>
	
	</div>
	
	</div> 
	</div>';
	$i++;
}
echo '</div>';
		break;
		case 'user-logg':
		include '../class/modos/anonimo.class.php';
		$tsAnonimo =& tsAnonimo::getInstance();
		$userlogg = $w->setSecure($_POST['usarPrLggr']);
		$passlogg = $w->setSecure($_POST['cntsniaplggr']);
	    echo $tsAnonimo->loginUser($userlogg, $passlogg);
		break;
		case 'user-urscht':
		$sa65dga65we4f = $w->setSecure($_POST['vddj']);
		$sdf8a48we4 = $w->setSecure($_POST['usr']);
		if($sa65dga65we4f == 2){
        $sklfgmlwkar4S5SF4 = mysql_query("SELECT m.*, u.* FROM mensaje AS m LEFT JOIN usuarios AS u ON m.de = u.usuario_id WHERE m.de='".$sdf8a48we4."' AND m.para = '".$_SESSION['uid']."' AND m.leido='0' ORDER BY rom_id ASC");
		$sd5f4a6w83q3wer21f2F1W5E = result_array($sklfgmlwkar4S5SF4);
		$htt['text'] = '';
		foreach($sd5f4a6w83q3wer21f2F1W5E AS $row){
		mysql_query("UPDATE mensaje SET leido='1' WHERE rom_id='".$row['rom_id']."'");
		$ks = ($row['de'] == $_SESSION['uid']) ? 1 : 2;
		$oness = ($ks == 1) ? 'R' : 'L'; $ksonextr = ($oness == 'L') ? 'style="width: 99%;"' : '';
		$twoss = ($ks == 1) ? 'L' : 'R';
		$htt['text'] .= '<div id="msgg" class="float'.$oness.'" '.$ksonextr.'><div class="float'.$twoss.' hedr"><span>'.$w->smileys($row['texto']).'</span><div class="size11 color_gray qtip" style="margin: 2px 0 -5px 0;" title="'.$w->setHace($row['hace']).'"><div>'.date('G', $row['hace']).':'.date('i', $row['hace']).' '.date('a', $row['hace']).'</div></div></div><div class="float'.$oness.' footr"><div><a><img src="'.$wuser->loadAvatarI($row['de']).'" vid="'.$row['de'].'"></a></div></div></div>';
		}
		$htt['where'] = $htt['text'] ? 1 : 0;
        echo json($htt); 
		}else{
		$sklfgmlwkar = mysql_query("SELECT m.*, u.* FROM mensaje AS m LEFT JOIN usuarios AS u ON m.de = u.usuario_id WHERE m.de='".$sdf8a48we4."' AND m.para = '".$_SESSION['uid']."' OR m.para='".$sdf8a48we4."' AND m.de='".$_SESSION['uid']."' ORDER BY rom_id ASC");
		$sd5f4a6w83q3wer21f = result_array($sklfgmlwkar);
		if($sd5f4a6w83q3wer21f){
		$htt = '';
		foreach($sd5f4a6w83q3wer21f AS $row){
		$w->visto_1($row['rom_id'], 2); mysql_query("UPDATE mensaje SET leido='1' WHERE rom_id='".$row['rom_id']."'");
		$ks = ($row['de'] == $_SESSION['uid']) ? 1 : 2;
		$oness = ($ks == 1) ? 'R' : 'L'; $ksonextr = ($oness == 'L') ? 'style="width: 99%;"' : '';
		$twoss = ($ks == 1) ? 'L' : 'R';
		$htt .= '<div id="msgg" class="float'.$oness.'" '.$ksonextr.'><div class="float'.$twoss.' hedr"><span>'.$w->smileys($row['texto']).'</span><div class="size11 color_gray qtip" style="margin: 2px 0 -5px 0;" title="'.$w->setHace($row['hace']).'"><div>'.date('G', $row['hace']).':'.date('i', $row['hace']).' '.date('a', $row['hace']).'</div></div></div><div class="float'.$oness.' footr"><div><a><img src="'.$wuser->loadAvatarI($row['de']).'" vid="'.$row['de'].'"></a></div></div></div>';
		}
	    }else{ $htt = '<span>No tienes mensajes con esta persona...</span>'; }
        echo $htt; 
        } 
		break;
		case 'user-atcpltusrs':
        $buscar = $_GET['term'];
        $frutas = 'cajacafe,werever,wero,luis,luisito,andyg,wortit';
        $array_frutas = explode(",", $frutas);
        if(in_array($buscar, $array_frutas)){
        echo 'Existe la cadena '.$buscar;
        }else{
        echo 'NO Existe la cadena '.$buscar;
        }
		break;
		case 'user-vcard':
        //<---
        # LOCALES
        $user_id = $_REQUEST['uid'];
        # PROCESOS
        $tsData = $wuser->getVCard($user_id);
        $vcardc['content'] = '<div class="hovercard-inner">';
        $vcardc['content'] .= '<div class="contenedor">';
        $vcardc['content'] .= '<div class="header">';
        $vcardc['content'] .= '<div class="imges"><div class="avatar"><img src="'.$tsData['avatar'].'" class="width32"></div>';
        $vcardc['content'] .= '<div class="postd"><img src="'.$tsData['p_cabecera'].'" style="width:100%;height:47px;"></div>';
        $vcardc['content'] .= '</div>';
        $vcardc['content'] .= '<div class="nameu">'.$tsData['usuario_nombre'].'</div>';
        $vcardc['content'] .= '</div>';
        $vcardc['content'] .= '</div>';
        $vcardc['content'] .= '<div class="more-more">';
        $vcardc['content'] .= '<a href="'.$w->settings['url'].'/'.$tsData['usuario_nombre'].'">M&aacute;s Informaci&oacute;n</a>';
        $vcardc['content'] .= '</div>';
        $vcardc['content'] .= '</div>';
        echo json($vcardc);
		//--->
		break;
		case 'user-bloq':
        echo $wuser->bloq_users($userbloq);
		break;
		case 'user-cmbr':
		$type55s = $w->setSecure($_POST['key']);
		$t55s = $w->setSecure($_POST['t']);
		$idss = $w->setSecure($_POST['sid']);
        if($t55s == 1){
        $min_w = 952;
        $min_h = 287;
        $data_cabecera = getimagesize($idss);
        if($data_cabecera[0] >= $min_w || $data_cabecera[1] >= $min_h){
        if(mysql_query("UPDATE usuarios SET p_cabecera='".$idss."' WHERE usuario_id='".$wuser->uid."'")){
        echo '1: Actualizado corretamente.';
        }else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
        }else{ echo '0: La foto de portada deve tener un tamaño igual o mayor a'.$min_w.'x'.$min_h.' pixeles'; }
        }elseif($t55s == 2){
        $min_w = 320;
        $min_h = 320;
        $data_avatar = getimagesize($idss);
        if($data_avatar[0] < $min_w || $data_avatar[1] < $min_h){
        if(mysql_query("UPDATE usuarios SET w_avatar='".$idss."' WHERE usuario_id='".$wuser->uid."'")){
        echo '1: Actualizado corretamente.';
        }else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
        }else{ echo '0: La foto de perfil deve tener un tamaño igual o menor a'.$min_w.'x'.$min_h.' pixeles, La tuya es de: '.$data_avatar[0].'x'.$data_avatar[1].''; }
        }else{
        echo '0: Define una acción';
        }
		break;
		case 'user-foll':
        $uidf = $w->setSecure($_POST['uid']);
        $numerof = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_emisor='".$wuser->uid."' AND id_receptor='".$uidf."'"));
        if($wuser->uid != $uidf){
        if($numerof >= 1){
        echo '1: Siguiendo';
        }else{
        if(mysql_query("INSERT INTO suscriptores(id_emisor, id_receptor, estado_suscripcion, hace) VALUES('".$wuser->uid."', '".$uidf."', '0', '".time()."')")){
        echo '1: Siguiendo';
        }else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
        }
        }else{ echo '1: Siguiendo'; }
		break;
        default:
            die('0: Este archivo no existe.');
        break;
	}