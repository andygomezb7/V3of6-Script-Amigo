<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control del muro
 *
 * @name    c.muro.php
 * @author  PHPost Team
 */
class tsWall{

   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsWall();
        }
        return $instance;
    }
	
	/*****
	*-----------------------------------------------------
	*                  ADD MENCIONES 
	*     @action Agregar notificacion de mencion
	*-----------------------------------------------------
	****/
	
	function menTi2($pub_id, $data){
		 global $w, $wuser, $tsWeb, $tsActividad;

        //
		preg_match_all("/\B@([a-zA-Z0-9_-]{4,16}+)\b/",$data, $users);
        $menciones = $users[1];
        
        //
		if(!empty($users[1])) {
        foreach($menciones as $user){         
		# COMPROBAR
        $uid = $wuser->loadUserID($w->setSecure($user));     
        $tsActividad->setActividad(21, $pub_id, $uid);
        $tsWeb->getNotifis($_SESSION['uid'], 21, $pub_id, $uid);
        }
		}
        
        //  
        return true;
    }
	
    /** 
    *  +++++++++++++  TIPOS DE IMAGENES EN "AVATAR_U"
    * 1 => Avatar
    * 2 => Cabecera
    * 3 => fondo 
    * 4 => imagen post + id del bwort
    * 5 => ?
    **/

    	function anti_xss($text){
		$a = array( 
			'@< [/!]*?[^<>]*?>@si',
			'@< ![sS]*?--[ tnr]*>@',
			'/(?i)\<script\>(.*?)\<\/script\>/i',
			'/(?i)\<script (.*?)\>(.*?)\<\/script>/i',
			'/(?i)\<style\>(.*?)\<\/style\>/i',
			'/(?i)\<style (.*?)\>(.*?)\<\/style>/i'
	   ); 

	   $b = array( 
			'',
			'',
			html_entity_decode('<script>\\1</script>'),
			html_entity_decode('<script \\1>\\2</script>'),
			html_entity_decode('<style>\\1</style>'),
			html_entity_decode('<style \\1>\\2</style>')
		);

         foreach($a AS $key => $val){
			while(preg_match($val, $text)){
				$text = preg_replace($val, '', $text);
			}
		}
		$text = preg_replace($a, $b, $text);
		return $text;
	}
    
    function special_codes($text){
		$text = str_replace('\\\n', '<br />', $text);
		$text = str_replace('\\n', '<br />', $text);
		$text = str_replace('\n', '<br />', $text);
		$text = str_replace('\r', '', $text);
		//$text = str_replace('\"', '"', $text);
		//$text = str_replace("\'", "'", $text);
		$lss = substr('\/', 0, 1);
		$text = str_ireplace($lss.$lss, $lss, $text);
		//$text = str_replace('	', '<span style="margin-left:40px"></span>', $text);
		return $text;
	}

	function asd4f9685namfi($url){
    $f = explode("/", $url);
    $arch = $f[count($f)-1];
    return $arch;
    }


	/*****
	*-----------------------------------
	*             ADD BWORT
	*     @action agregar publicacion
	*------------------------------------
	******/
function addBwort(){
global $w, $tsWeb, $wuser, $tsActividad;
// Se obtubo un mensaje?
$trextmsg = $w->setSecure($_POST['trext']);
// $this->anti_xss($this->special_codes((nl2br(htmlspecialchars($dato)))))
$sas5d4f968qwe = $w->setSecure($_POST['trext']);
// Varibles de injection
if($trextmsg){
// 1 => text, 2 => img, 3 => video, 4 => link
$ttype55 = $w->setSecure($_POST['trype']);
$ttype = $ttype55 ? $ttype55 : 0;
$tcont55 = $w->setSecure($_POST['tcont']);
$tcont = $tcont55 ? $tcont55 : 0;
// 1 => perfil, 2 => grupo 
$xtras55 = $w->setSecure($_POST['xtras']);
$xtcontent55 = $w->setSecure($_POST['xcont']);
$xtras = ($xtras55) ? $xtras55 : 0;
$xtcontent = ($xtcontent55) ? $xtcontent55 : 0;
// DEFINICIONES PRINCIPALES
$msg = $w->setSecure((nl2br(htmlspecialchars($_POST['trext']))), true);
$usuario =  $w->setSecure($_SESSION['uid'], true);
$fecha = date("Y-m-d H:i:s");
$hace = time();
// Publica en un muro?
if($ttype == 2){
//obtener seguridad
$seg = mysql_fetch_assoc(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$xtcontent."'"));
if($seg['sp_bworts'] == 1){ $bmo = 1; }elseif($seg['sp_bwortsp'] == 2){ if($_SESSION['uid'] == $xtcontent){ $bmo = 1; }else{ $sewokfnwe = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_emisor='".$_SESSION['uid']."' AND id_receptor='".$xtcontent."' ")); if($sewokfnwe == 0 or $sewokfnwe < 0){ $bmo = 0; }else{ $bmo = 1; } } }
if($seg['sp_bworts'] == 3){ if($_SESSION['uid'] == $xtcontent){ $bmo = 1; }else{ $sewokfnwee = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$_SESSION['uid']."' AND id_emisor='".$xtcontent."'")); if($sewokfnwee == 0 or $sewokfnwee < 0){ $bmo = 0; }else{ $bmo = 1; } } }
if($seg['sp_bworts'] == 1 && $bmo == 1){}
if($seg['sp_bworts'] == 2 && $bmo == 0 && !$_SESSION['uid']){ return '0: No interactuas con este usuario, lo que quiere decir que no puedes publicar en su perfil'; }
if($seg['sp_bworts'] == 3 && $bmo == 0 && !$_SESSION['uid']){ return '0: Este usuario No interactua contigo, lo que quiere decir que no puedes publicar en su perfil'; }
}else{}
// Fin publica en un muro.

// Muro?
if($bmo = 0 && $xtras == 1){}else{
// Anti flood
$kj = mysql_fetch_assoc(mysql_query("SELECT * FROM bworts ORDER BY id DESC LIMIT 1"));
$w->antiFlood($kj['hace']);
// Fin antifood
if(mysql_query("INSERT INTO bworts (idusuario, fecha, hace, text, bw_type, bw_content, bw_xtras, bw_xcontent) VALUES ('".$usuario."','".$fecha."', '".$hace."','".$sas5d4f968qwe."', '".$ttype."', '".$tcont."', '".$xtras."', '".$xtcontent."')")){
$pub_id = mysql_insert_id();
if($xtras == 1){ $tsWeb->getNotifis($_SESSION['uid'], 15, $pub_id, $tcont); }else{}
// Envio una imagen?
if($ttype == 2){
//$_FILES['tcont'] = array();
$tcontImagens = explode(',',$tcont);
$p = 0;
foreach($tcontImagens AS $posicion => $val){
$a65sdf6q5w4222 = $val;
$nam6sd5f6qwe3e = $val;
$s1 = substr(md5($pref),0, 15); $s2 = substr(md5($pref),0, 7); $s3 = substr(md5($pref),0, 3); 
$vnamea54as5qw54e4557 = $s1.'_'.$s2.'__'.$s3;      
mysql_query('INSERT INTO bw_images(bwi_name, bwi_oname, bwi_loc, bwi_hace, bwi_user, bwi_content) VALUES("'.$nam6sd5f6qwe3e.'","'.$vnamea54as5qw54e4557.'","'.$a65sdf6q5w4222.'","'.time().'","'.$_SESSION['uid'].'","'.$pub_id.'")'); 
$p++;     
}   
}

// REGISTRAR DATOS
$tsActividad->setActividad(18, $pub_id);
$this->menTi2($pub_id, $trextmsg);
$tsWeb->getNotifis($wuser->uid, 18, $pub_id, 0);

// hastag
if(preg_match_all("/#([A-Za-z0-9_-ñÑçÇáÁäÄàÀâÂéÉëËèÈêÊíÍïÏìÌîÎóÓöÖòÒôÔúÚüÜùÙûÛ]+)/", $trextmsg,$tags)){ 
$tags2 = str_replace("006595",' ' ,$tags); 
$hash = $tags2[1]; 
foreach($hash as $tag){ $save_tags = "$tag"; if($save_tags=='006595'){ $save_tags='1';} if($save_tags != '1'){ mysql_query('INSERT INTO `u_muro_tags` (`p_id`, `p_tags`, `p_date`) VALUES (\''.$pub_id.'\', \''.$save_tags.'\', \''.time().'\')');} }}
//$hash = '#'.$w->settings['hashtag']; $hashtek = mysql_fetch_assoc(mysql_query("SELECT * FROM admin_medals WHERE m_id='".$hash."'")); if(preg_match_all("/#".$hashtek['m_cant']."/",$trextmsg)){ $wuser->insert_medal($hash); }

return '1:'.$pub_id;
}else{ return '0: Error al publicar el BWORT, Intenta nuevamente.'; }
}
}else{ return '0: Ingresa una descripción.'; }
}
	
	/**
	*-----------------------------
	*
	*       DELETE BWORT
	*
	*------------------------------
	**/
	 function delBwort($i){
	 	global $wuser;
	 $query = mysql_query("SELECT * FROM bworts WHERE idusuario='".$wuser->uid."' AND id='".$i."'");
	 $fawo = mysql_fetch_assoc($query);
	 $nnumer = mysql_num_rows($query);
	 if($i){
	 if($nnumer >= 1){
	 mysql_query("UPDATE bworts SET est_b='1' WHERE id='".$i."'");
	 return '1: Borrado Correctamente.';
	 }else{
	 return '0: No eres dueño de este Bwort.';
	 }
	 }else{ return '0: ingresa un identificador.'; }
	 }

    	/**
	*------------------------
	*    AGREGA AVATAR.
	*-------------------------
	***/
	function addavtjkewb($msg, $note, $type){
	global $tsWeb, $w;
	
$msg = $w->setSecure((nl2br(htmlspecialchars($msg))), true);
$usuario =  $w->setSecure($_SESSION['uid'], true);
$fecha = date("Y-m-d H:i:s");
$hace = time();
$bNote = $note;

if($type == 1){
   mysql_query("INSERT INTO bworts (idusuario, fecha, hace, text, bwort_navtar, img) VALUES ('".$usuario."','".$fecha."', '".$hace."','".$msg."', '1', '".$bNote."')");
}elseif($type == 2){
	   mysql_query("INSERT INTO bworts (idusuario, fecha, hace, text, bwort_cabe, img) VALUES ('".$usuario."','".$fecha."', '".$hace."','".$msg."', '1', '".$bNote."')");
}elseif($type == 3){
		   mysql_query("INSERT INTO bworts (idusuario, fecha, hace, text, bwort_fons, img) VALUES ('".$usuario."','".$fecha."', '".$hace."','".$msg."', '1', '".$bNote."')");
}else{}
$pub_id = mysql_insert_id();

		$data = $msg;
	
	if(preg_match_all("/#([A-Za-z0-9_-ñÑçÇáÁäÄàÀâÂéÉëËèÈêÊíÍïÏìÌîÎóÓöÖòÒôÔúÚüÜùÙûÛ]+)/",$msg,$tags)){
$tags2 = str_replace("006595",' ' ,$tags);
$hash = $tags2[1]; //Sin ##
foreach($hash as $tag){
	 $save_tags = "$tag";
if($save_tags=='006595'){ $save_tags='1';}
if($save_tags != '1'){
mysql_query('INSERT INTO `u_muro_tags` (`p_id`, `p_tags`, `p_date`) VALUES (\''.$pub_id.'\', \''.$save_tags.'\', \''.time().'\')');}
}}

 $this->menTi2($pub_id, $data);
$tsWeb->getNotifis($_SESSION['uid'], 17, $pub_id, 0);
	
	
	return $return;
	}
	
	/**
	*------------------------
	*    AGREGA NOTA.
	*-------------------------
	***/
function addNoteb($msg, $note){
global $w, $tsWeb, $wuser, $tsActividad;
// Se obtubo un mensaje?
$trextmsg = $msg;
// $this->anti_xss($this->special_codes((nl2br(htmlspecialchars($dato)))))
$sas5d4f968qwe = $msg;
// Varibles de injection
if($trextmsg){
// 1 => text, 2 => img, 3 => video, 4 => nota, 5 => link
$ttype = 4;
$tcont = $note;
// 1 => perfil, 2 => grupo 
$xtras55 = $w->setSecure($_POST['xtras']);
$xtcontent55 = $w->setSecure($_POST['xcont']);
$xtras = ($xtras55) ? $xtras55 : 0;
$xtcontent = ($xtcontent55) ? $xtcontent55 : 0;
// DEFINICIONES PRINCIPALES
$usuario =  $w->setSecure($wuser->uid, true);
$fecha = date("Y-m-d H:i:s");
$hace = time();
if(mysql_query("INSERT INTO bworts (idusuario, fecha, hace, text, bw_type, bw_content, bw_xtras, bw_xcontent) VALUES ('".$usuario."','".$fecha."', '".$hace."','".$sas5d4f968qwe."', '".$ttype."', '".$tcont."', '".$xtras."', '".$xtcontent."')")){
$pub_id = mysql_insert_id();

// REGISTRAR DATOS
$tsActividad->setActividad(16, $pub_id);
$this->menTi2($pub_id, $trextmsg);
$tsWeb->getNotifis($wuser->uid, 17, $pub_id, 0);

// hastag
if(preg_match_all("/#([A-Za-z0-9_-ñÑçÇáÁäÄàÀâÂéÉëËèÈêÊíÍïÏìÌîÎóÓöÖòÒôÔúÚüÜùÙûÛ]+)/", $trextmsg,$tags)){ 
$tags2 = str_replace("006595",' ' ,$tags); 
$hash = $tags2[1]; 
foreach($hash as $tag){ $save_tags = "$tag"; if($save_tags=='006595'){ $save_tags='1';} if($save_tags != '1'){ mysql_query('INSERT INTO `u_muro_tags` (`p_id`, `p_tags`, `p_date`) VALUES (\''.$pub_id.'\', \''.$save_tags.'\', \''.time().'\')');} } }
//$hash = '#'.$w->settings['hashtag']; $hashtek = mysql_fetch_assoc(mysql_query("SELECT * FROM admin_medals WHERE m_id='".$hash."'")); if(preg_match_all("/#".$hashtek['m_cant']."/",$trextmsg)){ $wuser->insert_medal($hash); }

return '1: Publicado correctamente.';
}else{ return '0: Error al publicar el BWORT, Intenta nuevamente.'; }
}else{ return '0: Ingresa una descripción.'; }
}
	
	
	/*
	*----------------------------------------------------------------------------------------------
	*
	*                          COMPARTIR Bwort
	*
	*----------------------------------------------------------------------------------------------
	*/
	
	function compartir($id, $msgg){
		global $w;
	$user = $_SESSION['uid'];
$fecha = date("Y-m-d H:i:s");
$hace = time();
$msg = $w->setSecure((nl2br(htmlspecialchars($msgg))), true);

$i = mysql_query("INSERT INTO bworts (idusuario, fecha, hace, text, b_compr) VALUES ('".$user."','".$fecha."', '".$hace."','".$msg."', '".$id."')");

if($i){
return '1: Compartido correctamente.';
}else{
return '0: Ocurrio un error al enviar lo solicitado.';
}
	}
	
	
	/******
	*--------------------------------------------------------------------
	*          MOSTRAR INFORMACION DE BWROT INDIVUALMENTE
	*--------------------------------------------------------------------
	*****/
    function loaderbwort($id, $u){
    global $w;
    include 'modos/bwort.class.php';
    $tsBwort =& tsBwort::getInstance();
	// $query = mysql_query("SELECT b.*, u.*, l.*, d.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id LEFT JOIN me_encanta AS l ON l.idpublicacion = b.id LEFT JOIN no_megusta AS d ON d.idnopubli = b.id WHERE b.id='".$id."' b.est_b = '0' "); 
	$query = mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.id='".$id."' AND b.idusuario='".$u."'"); 
	$data = mysql_fetch_assoc($query);
	$data['texts'] = $tsBwort->setMenciones($tsBwort->setHashtag($data['text']));
	return $data;
	}
	
	

//hashtags del momento
function hashtagsPops(){
global $w, $wuser;
	
$time = time() -(60*60*5); // son 5 horas
$q = mysql_query('SELECT id,p_date,p_tags,count(p_tags) AS total FROM `u_muro_tags` WHERE p_date >= '.$time.' GROUP BY p_tags order by total desc limit 10');
	 $data1 = result_array($q);
$q1 = mysql_query('SELECT id,p_date,p_tags,count(p_tags) AS total FROM `u_muro_tags` GROUP BY p_tags order by total desc limit 10');
$data2 = result_array($q1);
	 if(empty($data1)){
$data = $data2;
}else{
$data = $data1;}
	 return $data;
	
}
function new_pin($cuerpo){
global $tsCore, $tsUser;
$cuerpo = $tsCore->setSecure($_POST['cuerpo']);
$cuerpo = preg_replace("/#([A-Za-z0-9_-ñÑçÇáÁäÄàÀâÂéÉëËèÈêÊíÍïÏìÌîÎóÓöÖòÒôÔúÚüÜùÙûÛ]+)/", "<a href=/hashtags/result/?q=%23$1><b><font color=#006595>$0</font></b></a>", $cuerpo );
if(strlen($cuerpo) <= 0) return '0: Tu Pin debe tener al menos una letra.';
	 //Tienes ese pin?
	 if(mysql_num_rows(mysql_query('SELECT pid FROM `u_muro_tags` WHERE p_user = \''.$tsUser->uid.'\' AND p_data = \''.$cuerpo.'\' LIMIT 1'))){
		 return '0: Ya tienes ese pin.';}
	
		 //Tienes mas de 10
		 if(mysql_num_rows(mysql_query('SELECT pid FROM `u_pins` WHERE p_user = \''.$tsUser->uid.'\'')) > 10){
			 return '0: No puedes tener mas de <b>10</b> pins.';}
		
		 //Insertar
		 if(mysql_query('INSERT INTO `u_pins` (`p_user`,`p_data`,`p_fecha`) VALUES (\''.$tsUser->uid.'\',\''.$cuerpo.'\',\''.time().'\') ')){
return "1: El pin se agrego con exito";}
}

function del_pin($id){
global $tsCore, $tsUser;
$id = $tsCore->setSecure($_POST['id']);
	 //Tienes ese pin?
if (!mysql_num_rows(mysql_query('SELECT `pid` FROM `u_pins` WHERE `pid` = \''.(int)$id .'\' LIMIT 1'))) {
return '0: El id ingresado no existe.';
	 }
if(mysql_query('DELETE FROM `u_pins` WHERE `pid` = \''.(int)$id .'\'')){
return '1: Se ha eliminado con exito.';
							
							 } else return 'Ocurri&oacute; un error';
		
}
function hash_pin($id){
global $tsCore, $tsUser;
$id = $tsCore->setSecure($_POST['id']);
$q = mysql_query('SELECT p_tags,id FROM `u_muro_tags` WHERE id = \''.(int)$id.'\' LIMIT 1');
	 $data = mysql_fetch_assoc($q);
$tutan = '<a href=/hashtags/result/?q=%23'.$data['p_tags'].'><b><font color=#006595>#'.$data['p_tags'].'</font></b></a>';
	 //Tienes ese pin?
	 if(mysql_num_rows(mysql_query('SELECT pid FROM `u_pins` WHERE p_user = \''.$_SESSION['uid'].'\' AND p_data = \''.$tutan.'\' LIMIT 1'))){
		 return '0: Ya tienes ese pin.';}
	
		 //Tienes mas de 10
		 if(mysql_num_rows(mysql_query('SELECT pid FROM `u_pins` WHERE p_user = \''.$_SESSION['uid'].'\'')) > 10){
			 return '0: No puedes tener mas de <b>10</b> pins.';}
		 $pin = '<a href=/hashtags/result/?q=%23'.$data['p_tags'].'><b><font color=#006595>#'.$data['p_tags'].'</font></b></a>';
		 //Insertar
		 if(mysql_query('INSERT INTO `u_pins` (`p_user`,`p_data`,`p_fecha`) VALUES (\''.$_SESSION['uid'].'\',\''.$pin.'\',\''.time().'\') ')){
return "1: El pin se agrego con exito";}
}

function ver_pins(){
	 global $tsCore, $tsUser;
	 $q = mysql_query('SELECT p_user,p_data,pid FROM `u_pins` WHERE p_user = '.$_SESSION['uid'].' ORDER BY pid ASC LIMIT 10');
	 $data = result_array($q);
	
	 return $data;
}


function like_bwort($id, $k){
global $tsWeb;
$user = $_SESSION['uid'];
$fecha = date("Y-m-d H:i:s");
$hace = time();

if($k == 'true'){
mysql_query("INSERT INTO me_encanta (idpublicacion,idusuario,fechapubli,hace) VALUES('".$id."','".$user."','".$fecha."','".$hace."')");
$jgnasld = mysql_fetch_assoc(mysql_query("SELECT * FROM bworts WHERE id='".$id."'"));
$tsWeb->getNotifis($user, 5, $id, $jgnasld['idusuario']);
return '1: Te gusta';
}elseif($k == 'false'){
mysql_query("DELETE FROM me_encanta WHERE idpublicacion='".$id."' AND idusuario='".$user."'");
return '1: Ya no te gusta.';
}else{ return '0: No has definido una funcion.'; }

}

function nolike($id, $k){
global $tsWeb;
$user = $_SESSION['uid'];
$fecha = date("Y-m-d H:i:s");
$hace = time();

if($k == 'true'){
mysql_query("INSERT INTO no_megusta (idnopubli,idusuario,fechanopubli,hace) VALUES('".$id."','".$user."','".$fecha."','".$hace."')");
$tsWeb->getNotifis($user, 9, $id);
return '1: No te gusta';
}elseif($k == 'false'){
mysql_query("DELETE FROM no_megusta WHERE idnopubli='".$id."' AND idusuario='".$user."'");
return '1: Ejecutado correctamente la funcion...';
}else{ return '0: No has definido una funcion.'; }

}

function compBwort($id, $msg){
$i = $this->compartir($id, $msg);
if($i == true){
return true;
}else{
return false;
}
}

function Wallhome(){
$query = mysql_query("SELECT b.*, s.* FROM bworts AS b LEFT JOIN suscriptores AS s ON s.id_receptor= b.idusuario WHERE est_b='0' AND s.id_emisor='".$_SESSION['uid']."'  or b.idusuario='".$_SESSION['uid']."' ORDER BY b.id DESC");
$skd = mysql_fetch_assoc($query);
return $skd['id'];
}

function WallBwort(){
	global $w;
$query = mysql_query("SELECT b.*, s.*, u.* FROM bworts AS b LEFT JOIN suscriptores AS s ON s.id_receptor= b.idusuario LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE est_b='0' AND s.id_emisor='".$_SESSION['uid']."'  or b.idusuario='".$_SESSION['uid']."' ORDER BY b.id DESC LIMIT 1");
$da = mysql_fetch_assoc($query);
$fosenke = $this->Wallhome();
return json_encode(array('p_type' => 1, 'worts' => $fosenke,'user_name' => $da['name_original'], 'user_ap' => $da['ap_original'], 'bid' => $da['id'], 'hace' => $w->setHace($da['hace']), 'text' => $da['text'] ));
}

function comment($bidi, $type, $text){
global $tsWeb, $tsActividad, $w, $wuser;
if($type == 1 || $_GET['type'] == 1){
$query = mysql_query("SELECT b.*, u.* FROM b_comments AS b LEFT JOIN usuarios AS u ON b.bb_user = u.usuario_id WHERE bb_arch='".$_GET['bid']."' AND bb_stat='0'");
$data = result_array($query);
$i = 0;
foreach($data as $p){
$data[$i]['bb_cont'] = $w->BBcode($p['bb_cont']);
$i++;
}

return $data;
}elseif($type == 0){
$qudfnsa = mysql_num_rows(mysql_query("SELECT * FROM b_comments WHERE bb_user='".$_SESSION['uid']."' AND bb_cont='".$text."'"));
if($qudfnsa == 1 or $qudfnsa > 1){ return '0: Ya comentastes esto, intenta con otras palabras.'; }else{
if($_SESSION['uid']){
$bbimg = $w->setSecure($_POST['bim']);
if($text or $bbimg && $bbimg != 's'){
$f = time();
$u = $_SESSION['uid'];
$textMejorado = (nl2br(htmlspecialchars($text)));
$imgbval = $w->setSecure($_POST['bvimg']);
$bbtype = ($bbimg && $bbimg != 's' && $imgbval == '1.0') ? 2 : 1;
mysql_query("INSERT INTO b_comments (bb_user, bb_cont, bb_date, bb_arch, bb_stat, bb_type, bb_img) VALUES('".$u."', '".$textMejorado."', '".$f."', '".$bidi."', '0', '".$bbtype."', '".$bbimg."')");
$cPostId = mysql_insert_id();
$dsflerwio = mysql_fetch_assoc(mysql_query("SELECT * FROM bworts WHERE id='".$bidi."'"));
$tsWeb->getNotifis($wuser->uid, 32, $cPostId, $dsflerwio['idusuario']);
$tsActividad->setActividad(32, $cPostId);
$this->loadSetComWall($cPostId);
$use['bb_cont'] = $text;
return '1: Comentado correctamente.';
}else{ return '0: Rellena el campo texto de tu comentario.'; }
}else{ return '0: No has iniciado sesion.'; }
}
}else{ return '0: Accion no definida'; }
}


/* BWORT EDIT */
function bEdtIUsr($id, $text){
	global $w, $mysqli;
	if($id){
		if($text){
    $slkdjf = $mysqli->query("SELECT * FROM bworts WHERE id='".$id."'");
    $skjlawek = $slkdjf->fetch_assoc();
    if($skjlawek['id']){
    if($skjlawek['idusuario'] == $_SESSION['uid']){
    if($mysqli->query("UPDATE bworts SET text='".$text."' WHERE id='".$id."'")){ return '1: Editado correctamente.'; }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
    }else{ return '0: El bwort no te pertenece.'; }
    }else{ return '0: El bwort no existe.'; }
    }else{ return '0: No se ha recibido ningun texto.'; }
	}else{ return '0: No se ha recibido nada.'; }
}

/* Enviar notificacion para los que han comentado algo que tu comentaste tambien ;) */

function loadSetComWall($bwort){
	global $w, $tsWeb, $wuser;
	$mfasjnl = mysql_query("SELECT * FROM b_comments WHERE bb_arch='".$bwort."'");
	while($row = mysql_fetch_assoc($mfasjnl)){
    $tsWeb->getNotifis($wuser->uid, 46, $bwort, $row['bb_user']);
	}
}


/**
*-------------------------------------------------------------------------------------
*                    WALL LIVE
*-------------------------------------------------------------------------------------
**/

function lastCid(){
         $comment = mysql_fetch_assoc(mysql_query("SELECT b.*, s.* FROM bworts AS b LEFT JOIN suscriptores AS s ON s.id_receptor= b.idusuario WHERE est_b='0' AND s.id_emisor='".$_SESSION['uid']."'  or b.idusuario='".$_SESSION['uid']."' ORDER BY b.id DESC LIMIT 1"));
         return $comment['id'];
    }
     
    function lastCidLive(){
        global $w;
         $comment = mysql_fetch_assoc(mysql_query('SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id ORDER BY b.id DESC LIMIT 1'));
         return json_encode(array('user' => $comment['idusuario'], 'text' => $comment['text'], 'id' => $comment['id']));
    }

	
	/******  FIN DE LA CLASS  ******/
	}
	
	?>