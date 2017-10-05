<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.user.php
 * @author  Wortit Developers
 */
class wuser{

	var $info = array();	// SI EL USUARIO ES MIEMBRO CARGAMOS DATOS DE LA TABLA
    var $is_banned = 0;
	var $nick = 'Visitante';// NOMBRE A MOSTRAR
	var $uid = 0;			// USER ID
	var $is_member = 0;
	var $is_error;			// SI OCURRE UN ERROR ESTA VARIABLE CONTENDRA EL NUMERO DE ERROR
	var $session;
	
	function wuser()
	{
		global $w;
		
		if($this->is_member)
        {
    	//AQUI ACTUALIZAREMOS TODA ESTADISTICA PARA MOSTRAR EN LA TABLA usuarios
		}
	}
    // INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new wuser();
    	}
		return $instance;
	}
	
	
	/*
        com_banned()
    */
    function com_banned(){
		global $tsCore, $tsMonitor, $wuser;
        //
		$query = mysql_query('SELECT *, c_nombre, c_nombre_corto FROM c_baneados LEFT JOIN c_comunidades ON c_id = ban_comunidad WHERE ban_user = \''.$wuser->uid.'\' LIMIT 1');
        $data = mysql_fetch_assoc($query);        
        //
        $now = time();
        //
        if($data['ban_termina'] > 1 && $data['ban_termina'] < $now){
		    mysql_query('UPDATE c_miembros SET m_permisos = \'3\' WHERE m_user = \''.$wuser->uid.'\' AND m_comunidad = \''.$data['ban_comunidad'].'\'');
			mysql_query('DELETE FROM c_baneados WHERE ban_id = \''.$data['ban_id'].'\'');
			// MANDAR AVISO AL USUARIO
			$tsMonitor =& tsMonitor::getInstance();
			$aviso = 'El tiempo de suspension ha acabado, has sido reactivado de la comunidad <b><a href="'.$w->settings['direccion_url'].'/comunidades/'.$data['c_nombre_corto'].'/"><b>'.
			$data['c_nombre'].'</b></a> y puedes seguir disfrutando de ella.<br /><br />Disculpe las molestias.';
			$tsMonitor->setAviso($wuser->uid, 'Usuario reactivado', $aviso, 2);
        }
		return true;
    }
	
	/*
	*
	*  Cargar datos de el usuario 
	*
	*  Dar permisos al usuario
	*/
	
function loadUser($login  = FALSE){
global $w, $wuser;
//Cargar
$query = mysql_query('SELECT * FROM usuarios WHERE usuario_id=\''.$login.'\'');
$data = mysql_fetch_assoc($query);
$IP = $w->getRealIP();
if($data['es_pagina_url'] == NULL){ mysql_query("UPDATE usuarios SET es_pagina_url='".$IP."' WHERE usuario_id='".$data['usuario_id']."'"); }else{}
$data['uid'] = $data['usuario_id'];
$data['nombre'] = $data['usuario_nombre'];
if($data['w_avatar'] == NULL){ $data['w_avatar'] = $w->settings['direccion_url'].'/images/avatar/group.png'; }else{ $data['w_avatar'] = $data['w_avatar']; }
if($data['w_avatar'] == NULL){ $data['avatar'] = $w->settings['direccion_url'].'/images/avatar/group.png'; }else{ if(file_exists($data['w_avatar'])){ $data['avatar'] = $data['w_avatar']; }else{ $data['avatar'] = $w->settings['direccion_url'].'/images/avatar/group.png'; } }
$data['cabecera'] = $data['p_cabecera'];
$data['u_pais'] = $data['pais'];
$JAQUE = mysql_fetch_assoc(mysql_query("SELECT * FROM u_paises WHERE p_prefijo='".$data['pais']."'"));
$data['pais'] = $JAQUE['p_opcion'];
if($data['name_original'] == NULL or $data['ap_original'] == NULL){ $data['name'] = $data['usuario_nombre']; }else{ $data['name'] = $data['name_original'].' '.$data['ap_original']; }
$queryrango = mysql_query("SELECT * FROM rangos WHERE id_rango='".$data['rango']."'"); $data['derechos'] = mysql_fetch_assoc($queryrango);
if($wuser->uid){ $_SESSION['user_jpuntos'] = $data['user_jpuntos']; }
$data['tusinteracciones'] = result_array(mysql_query("SELECT s.*, u.* FROM suscriptores AS s LEFT JOIN usuarios AS u ON u.usuario_id = s.id_receptor WHERE id_emisor='".$wuser->uid."' LIMIT 10"));
$data['sugerenciasu'] = result_array(mysql_query("SELECT * FROM usuarios WHERE user_baneado='0' LIMIT 5"));
$data['uonline'] = result_array(mysql_query("SELECT * FROM usuarios WHERE online='online'"));
if($login){ date_default_timezone_set('America/'.$JAQUE['p_opcion']); $data['dia'] = date("d"); $data['mes'] = date("m"); $data['ano'] = date("Y"); }
$data['bworts']['numbers'] = mysql_num_rows(mysql_query("SELECT b.*, s.* FROM bworts AS b LEFT JOIN suscriptores AS s ON s.id_receptor= b.idusuario WHERE est_b='0' AND s.id_emisor='".$wuser->uid."'  or b.idusuario='".$wuser->uid."' ORDER BY b.id DESC"));
$data['stats']['notes'] = mysql_num_rows(mysql_query("SELECT * FROM noticia WHERE id_usuario='".$login."'"));
$data['stats']['bworts'] = mysql_num_rows(mysql_query("SELECT * FROM bworts WHERE idusuario='".$login."'"));
// COMUNIDADES
$query = mysql_query('SELECT c.c_id, c.c_nombre, c.c_nombre_corto, c.c_miembros FROM c_comunidades AS c LEFT JOIN c_miembros AS m ON m.m_comunidad = c.c_id WHERE m.m_user = \''.(int)$user_id.'\' AND c.c_estado = \'0\' ORDER BY m.m_fecha DESC LIMIT 5');
$total = mysql_fetch_row(mysql_query('SELECT COUNT(c.c_id) AS total FROM c_comunidades AS c LEFT JOIN c_miembros AS m ON m.m_comunidad = c.c_id WHERE m.m_user = \''.(int)$user_id.'\' AND c.c_estado = \'0\''));
$data['comus'] = result_array($query);
$data['comus_total'] = $total[0];
//SEGURIDAD
$data['s'] = mysql_fetch_assoc(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$login."'"));
if($data['s']['s_uid']){}else{ mysql_query("INSERT INTO segurityw(s_uid, sp_datos, sp_bworts, sp_bwortsp, sp_temas, sp_notas, sp_publicpp, ss_notifiem) VALUES('".$login."', '1', '1', '1', '1', '1', '1', '0')"); }
// PARA DAR MEDALLAS
		$parmedN = mysql_num_rows(mysql_query("SELECT * FROM noticia WHERE id_usuario='".$login."'"));
		$parmedT = mysql_num_rows(mysql_query("SELECT * FROM c_temas WHERE t_autor='".$login."'"));
		$parmedCc = mysql_num_rows(mysql_query("SELECT * FROM newcoment WHERE idusuario='".$login."'"));
		$parmedC = mysql_num_rows(mysql_query("SELECT * FROM c_respuestas WHERE r_autor='".$login."'"));
		$parmedBb = mysql_num_rows(mysql_query("SELECT * FROM bworts WHERE idusuario='".$login."'"));
	    $data['uu_posts'] = $parmedT+$parmedN;	
		$data['uu_comments'] = $parmedCc+$parmedC;
		$data['uu_interacc'] = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$login."'"));
        $data['uu_bworts'] = $parmedBb;
        mysql_query("UPDATE usuarios SET u_posts='".$data['uu_posts']."', u_comments='".$data['uu_comments']."', u_bworts='".$data['uu_bworts']."', u_interacc='".$data['uu_interacc']."' WHERE usuario_id='".$wuser->uid."'");

		// ESTADO DE BAN EN COMUNIDADES
		$this->com_banned;
	 
	   return $data;
	   }

/* DAR PUNTOS */
function darPuntos($n, $c, $t){
global $w, $wuser, $tsActividad;
/* TIPOS DE DATOS
$n = objeto;
$c = cantidad;
$t = tipo; // 
1 => Puntos a notas, 
2 => Puntos por notas, 
3 => Puntos por likes en bworts, 
4 => puntos regalados por admin o moderador
*/
if(mysql_query("INSERT INTO n_puntos(pu_nota,pu_user,pu_cant,pu_type,pu_date,pu_key,pu_code) VALUES('".$n."','".$wuser->uid."','".$c."','".$t."','".time()."','".substr(md5(uniqid(mt_rand(), false)),0, 15)."','".substr(md5(uniqid(mt_rand(), false)),0, 5)."')")){
if(mysql_query("UPDATE usuarios SET user_jpuntos='".$wuser->info['user_jpuntos']."'+1 WHERE usuario_id='".$wuser->uid."'")){
$tsActividad->setActividad(74, $t, $c);
return 1;
}else{ return 0; }
}else{ return 0; }
}

/* ASSIGN rango */
function rango_check(){
global $u;
$q_medals = mysql_query('SELECT * FROM rangos');
while($row = mysql_fetch_assoc($q_medals)){
if($wuser->rango['r_mod1'] == 1 && $u['u_posts'] >= $row['mod_new'] && $row['mod_juegos'] == '1' && $row['mod_new']) $this->insert_rango($row['id_rango']); 
if($wuser->rango['r_mod1'] == 1 && $u['u_comments'] >= $row['mod_new'] && $row['mod_juegos'] == '2' && $row['mod_new']) $this->insert_rango($row['id_rango']);
if($wuser->rango['r_mod1'] == 1 && $u['u_interacc'] >= $row['mod_new'] && $row['mod_juegos'] == '4' && $row['mod_new']) $this->insert_rango($row['id_rango']);
if($wuser->rango['r_mod1'] == 1 && $u['u_bworts'] >= $row['mod_new'] && $row['mod_juegos'] == '3' && $row['mod_new']) $this->insert_rango($row['id_rango']);
}
}

/* INSERT RANGO */
function insert_rango($m_id){
global $tsWeb, $u, $wuser, $tsActividad;
$lsknf = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$m_id."'"));
mysql_query("UPDATE usuarios SET rango='".$m_id."' WHERE usuario_id='".$wuser->uid."'");
$tsWeb->getNotifis(1, 34, $m_id, $wuser->uid);
$tsActividad->setActividad(73, $m_id);
return true;
}

/* ASSIGN medalls */
function medall_check(){
global $u;
$q_medals = mysql_query('SELECT m_id, m_cant, m_rank, m_type FROM admin_medals');
while($row = mysql_fetch_assoc($q_medals)){
if($u['u_posts'] == $row['m_cant'] or $u['u_posts'] >= $row['m_cant'] && $row['m_type'] == 3 && $row['m_especial'] != 1){ $this->insert_medal($row['m_id']); }else{ $this->delete_medal($row['m_id']); }
if($u['u_topics'] == $row['m_cant'] or $u['u_posts'] >= $row['m_cant'] && $row['m_type'] == 4 && $row['m_especial'] != 1){ $this->insert_medal($row['m_id']); }else{ $this->delete_medal($row['m_id']); }
if($u['u_comments'] == $row['m_cant'] or $u['u_comments'] >= $row['m_cant'] && $row['m_type'] == 6 && $row['m_especial'] != 1){ $this->insert_medal($row['m_id']); }else{ $this->delete_medal($row['m_id']); }
if($u['u_comments'] == $row['m_cant'] or $u['u_comments'] >= $row['m_cant'] && $row['m_type'] == 7 && $row['m_especial'] != 1){ $this->insert_medal($row['m_id']); }else{ $this->delete_medal($row['m_id']); }
if($u['u_interacc'] == $row['m_cant'] or $u['u_interacc'] >= $row['m_cant'] && $row['m_type'] == 9 && $row['m_especial'] != 1){ $this->insert_medal($row['m_id']); }else{ $this->delete_medal($row['m_id']); }
if($row['m_rank'] == $u['rango'] && $row['m_type'] == '10'){ $this->insert_medal($row['m_id']); }else{ $this->delete_medal($row['m_id']); }
}
}
  
/* INSERT MEDAL */
function insert_medal($m_id){
global $tsWeb, $wuser, $tsActividad;
$i_get = mysql_query('SELECT * FROM admin_medals_assign WHERE m_id = \''.$m_id.'\' AND ma_user = \''.$wuser->uid.'\'');
$num_get = mysql_num_rows($i_get);
$iesespecial= mysql_fetch_assoc(mysql_query("SELECT * FROM admin_medals WHERE m_id='".$m_id."'"));
if($num_get < 0 && $iesespecial['m_especial'] != 1 ){
$slsei = mysql_fetch_assoc(mysql_query("SELECT * FROM admin_medals WHERE m_id='".$m_id."'"));
if($slsei['m_type'] == 10){ if($u['rango'] == $slsei['m_rank']){ $ie = 'true'; }else{ $ie = 'false'; } }else{ $ie = 'true'; }
if($ie == 'true'){
mysql_query('INSERT INTO admin_medals_assign (m_id, ma_user, ma_date) VALUES(\''.$m_id.'\', \''.$wuser->uid.'\', \''.time().'\')');
$tsWeb->getNotifis(1, 33, 0, $wuser->uid);
$tsActividad->setActividad(72, $m_id);
}
}
}

/* borar medallas */ 
function delete_medal($m_id){ } 

/* CARGAR CUMPLEAÑOS */
function getBirthday(){	
global $tsUser, $tsCore;
// ZONA HORARIA
date_default_timezone_set("America/".$this->loadUser['pais']);
// TIEMPO	
$mes = date("m",time());
$dia = date("d",time());
$ano = date("Y",time());        
// DATOS
$query = mysql_query('SELECT usuario_id, usuario_nombre, nac_anio FROM usuarios WHERE nac_mes = \''.$mes.'\' AND nac_dia = \''.$dia.'\'');
$data['data'] = result_array($query);
// TOTAL
$data['total'] = count($data['data']);
// AÑO ACTUAL
$data['ano'] = $ano;			
// RETORNO
return $data;
}

/* BUSCAR EL TIPO DE ARCHIVO EN SU NOMBRE: NO HAY DE OTRA -YAO */  
function obtTypeArch($nombre) {     
$palabras = explode('.',$nombre);
$sep = count($palabras)-1;
$ext = $palabras[$sep];
return $ext;
}
/* CARGAR ID POR NOMBRE */
function loadUserID($d){
$query = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$d."'");
$no = mysql_fetch_assoc($query);
$data = $no['usuario_id'];
return $data;
}

/* CARGAR NOMBRE POR ID */
function loadUserN($d){
$query = mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$d."'");
$data = mysql_fetch_assoc($query);
return $data['usuario_nombre'];
}

/* CARGAR AVATAR POR ID */
function loadAvatarI($d){
	global $w;
$query = mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$d."'");
$data = mysql_fetch_assoc($query);
return ($data['w_avatar']) ? $data['w_avatar'] : $w->settings['url'].'/images/avatar/group.png';
}

/* CARGAR SESSIONES */
function read(){
global $w, $mysqli;
$cookie_name = 'LS_'.substr(md5($w->settings['url']), 0, 6);
$cookie = $w->setSecure($_COOKIE[$cookie_name]);
if($cookie || $_SESSION['uid']){
// +5915
$key_3 = str_replace('_', '', strstr($cookie, '__'));
$part_1 = strstr($cookie, '__', true);
$key_2 = str_replace('_', '', strstr($part_1, '_'));
$key_1 = strstr($part_1, '_', true);
$query = $mysqli->query('SELECT s_user FROM w_sessions WHERE s_user = \''.$key_1.'\' AND s_key = \''.$key_2.'\' AND s_date = \''.$key_3.'\' LIMIT 1');
$data = $query->fetch_assoc();
if($data['s_user'] || $_SESSION['uid']){
$query = mysql_query("SELECT * FROM usuarios WHERE usuario_id='".($data['s_user'] || $_SESSION['uid'])."'");
$datas = mysql_fetch_assoc($query);
$querydatarngo = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$datas['rango']."'"));
$querpsisql = mysql_fetch_assoc(mysql_query("SELECT * FROM u_paises WHERE p_prefijo='".$datas['pais']."'"));
$this->info = $datas;
$this->uid = $datas['usuario_id'];
$this->nick = $datas['usuario_nombre'];
$this->uavatar = $datas['w_avatar'];
$this->is_member = $this->uid;
$this->pais = $querpsisql;
if($querydatarngo['r_mod1'] == 2){ $this->is_mod = $this->uid; $this->mod = $this->uid; }
if($querydatarngo['r_mod1'] == 3){ $this->is_admod = $this->uid; $this->admod = $this->uid; }
if($querydatarngo['r_mod1'] == 4){ $this->is_vip = $this->uid; $this->vip = $this->uid; }
$this->rango = $querydatarngo;
$this->puntos = array('nota' => 3,'likesb' => 50,'blikes' => 7);
$_SESSION['uid'] = $datas['usuario_id'];
$_SESSION['nombre'] = $datas['usuario_nombre'];	
$_SESSION['user_jpuntos'] = $datas['user_jpuntos']; 
}
}else{
/*if(!$mysqli->query('SELECT s_user FROM w_sessions WHERE s_ip = \''.$_SERVER['REMOTE_ADDR'].'\' LIMIT 1')->num_rows){
$time = time();
$cookie_name = 'LS_'.substr(md5($w->settings['url']), 0, 6);
$cookie_time = 60*60*24*7*12*10;
$key_1 = 0;
$key_2 = substr(sha1(md5($time).'RFT'), 0, 15);;
$key_3 = $time-5915;
$key = $key_1.'_'.$key_2.'__'.$key_3;
if($mysqli->query('INSERT INTO w_sessions (s_key, s_user, s_ip, s_date, s_update, s_remember) VALUES (\''.$key_2.'\', \'0\', \''.$_SERVER['REMOTE_ADDR'].'\', \''.$time.'\', \''.$time.'\', \'0\')')){
$host = parse_url($w->settings['url']);
$host = str_replace('www.', '' , strtolower($host['host']));
$this_domain = ($host == 'localhost') ? '' : '.' . $host;
setcookie($cookie_name, $key, (time() + $cookie_time), '/', $this_domain);
				}
			}*/
		}
     }

function updatew(){
global $mysqli;
if($this->uid){
$data_sess = $this->get_session();
if($data_sess['s_id']){
$mysqli->query('UPDATE w_sessions SET s_update = '.time().' WHERE s_id = \''.$data_sess['s_id'].'\' LIMIT 1');
} }
}
	
	function get_session(){
		global $mysqli, $w;
		$cookie_name = 'LS_'.substr(md5($w->settings['url']), 0, 6);
		$cookie = $w->setSecure($_COOKIE[$cookie_name]);
		if($cookie){
			$key_3 = str_replace('_', '', strstr($cookie, '__'))+5915;
			$part_1 = strstr($cookie, '__', true);
			$key_2 = str_replace('_', '', strstr($part_1, '_'));
			$key_1 = strstr($part_1, '_', true);
			$query = $mysqli->query('SELECT s_user, s_id FROM w_sessions WHERE s_user = \''.$key_1.'\' AND s_key = \''.$key_2.'\' AND s_date = \''.$key_3.'\' LIMIT 1');
			$data = $query->fetch_assoc();
			if($data) return $data;
			else return false;
		}else return false;
	}
	
	/*
	MOSTRAR TODOS LOS PAISES REGISTRADOS.
	paisverifi();
	*/
	function paisverifi(){
	$query = mysql_query("SELECT * FROM u_paises");
	$data = result_array($query);
	return $data;
	}

	/*
    BLoquear usuarios
	*/
	function bloq_users($u){


		return '0: No se definio nada.';
	}

     /* IMPROT */

     function getPimg($texto) {
    $foto = '';
    ob_start();
    ob_end_clean();
    preg_match_all("/<img[\s]+[^>]*?src[\s]?=[\s\"\']+(.*\.([gif|jpg|png|jpeg]{3,4}))[\"\']+.*?>/", $texto, $array);
    $foto = $array [1][0];
    if(empty($foto)){
        $foto = '';
    }
    return $foto;
    }

     	function import($return = false, $urlin = null, $type){
     		global $w;
		$type = empty($type) ? $w->setSecure($_POST['type']) : $w->setSecure($type);
		$url = empty($urlin) ? $w->setSecure($_POST['url']) : $w->setSecure($urlin);
		if(empty($url)) return '0: No haz ingresado la url';
		if(strlen($url) > 500) return '0: La url ingresada es demasiado larga';
		switch($type){
			case 'img':
				$data = getimagesize($url);
				$min_w = 130;
				$min_h = 130;
				$max_w = 1024;
				$max_h = 1024;
				if(empty($data[0])) return '0: La url ingresada no existe o no es una imagen v&aacute;lida';
				elseif($data[0] < $min_w || $data[1] < $min_h) return '0: Tu foto debe tener un tama&ntilde;o superior a 130x130 pixeles';
				elseif($data[0] > $max_w || $data[1] > $max_h) return '0: Tu foto debe tener un tama&ntilde;o menor a 1024x1024 pixeles';
				else{
					if($return == false) return '1: <div class="s_import"><center><img class="i_img" src="'.$w->setSecure($url).'"/></center></div>';
					else return array('URL' => $url);
				}
			break;
			case 'video':
				$video_id = explode('watch?v=',$url);
				if(!is_array($video_id)) return '0: La direcci&oacute;n del video no es v&aacute;lida';
				$video_id = substr($video_id[1],0,11);
				if(strlen($video_id) != 11) return '0: La direcci&oacute;n del video no es v&aacute;lida';
				$data = @get_meta_tags('http://www.youtube.com/watch?v='.$video_id);
				if(empty($data['title'])) return '0: La URL contiene un ID de video incorrecto o el video ha sido eliminado';
				else{
					if($return == false) return '1: <div class="s_import"><center><div class="video_player hidden"><img class="i_img" src="http://img.youtube.com/vi/'.$video_id.'/mqdefault.jpg"/><i class="player_icon"></i><span class="vid_title" style="top: 0;left: 1px;">'.$data['title'].'</span></div></center></div>';
					else return array('ID' => $video_id, 'title' => $data['title']);
				}
			break;
			case 'link':
            $data = @get_meta_tags($urlin);
            $str = file_get_contents($urlin); if(strlen($str)>0){ preg_match("@<title>(.*)</title>@",$str,$title); $ttrtitle = $title[1]; }else{ if($data['wtitle']){ $ttrtitle = $data['wtitle']; }else{ $ttrtitle = $data['title']; } }
            $iMgDlArMWEb = $this->getPimg($str);
            preg_match('@<meta property="og:image" content="(.*)">@',$str,$imgonone); $sdfk549wiMdf = $imgonone[1];
            if($data['wdescription']){ $ttrdescription = $data['wdescription']; }elseif($data['og:description']){ $ttrdescription = $data['og:description']; }else{ $ttrdescription = $data['description']; }
            if($data['image']){ $ksdml = $data['image']; }elseif($data['og:image']){ $ksdml = $data['og:image']; }elseif($iMgDlArMWEb){ $ksdml = $iMgDlArMWEb; }elseif($sdfk549wiMdf){ $ksdml = $sdfk549wiMdf; }else{ $ksdml = $w->settings['url'].'/images/avatar/group2.png'; }
            return '1: <div class="s_import"><div class="linkb_enlace hidden"><div class="imge floatL"><img src="'.$ksdml.'" /></div><div class="contente floatL"><div class="titlee">'.$ttrtitle.'</div><div class="descripe">'.$ttrdescription.'</div><div class="DsnrlUlrin">'.$urlin.'</div></div></div></div>';
			break;
			default:
				return '0: El campo type es obligatorio.';
			break;
		}
	}

	function activesusers(){
		$query = mysql_query("SELECT * FROM usuarios WHERE user_activo='1'");
		$data = result_array($query);
		return $data;
	}

	
/***** FIN DE LA CLASS ****/	
}
?>