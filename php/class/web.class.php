<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control del monitor de usuario
 *
 * @name    c.web.php
 * @author  WORTIT developers
 */
 class tsWeb {
 /** HOME CLASS **/
 
     /**
     * @name getInstanse
     * @access public
     * @info CREAR INSTANCIA DE LA CLASE
     */
    public static function &getInstance(){
		static $instance;
		if( is_null($instance) ){
			$instance = new tsWeb();
    	}
		return $instance;
	}
 
   /***
   DEFINE VARIABLES
   ****/
   function tsWeb(){
   $this->web = array(
   1 => array('text' => 'Empezo a interactuar', 'pref' => 'contigo', 'icon' => 'follow'),
   2 =>  array('text' => 'Ha dejado de interactuar', 'pref' => 'contigo', 'icon' => 'follow'),
   3 => array('text' => 'Le gusta tu', 'pref' => 'video', 'icon' => 'like'),
   4 => array('text' => 'Le gusta tu', 'pref' => 'foto', 'icon' => 'like'),
   5 => array('text' => 'Le gusta tu', 'pref' => 'bwort', 'icon' => 'like'),
   6 => array('text' => 'Le gusta tu', 'pref' => 'enlace', 'icon' => 'like'),
   7 => array('text' => 'No le gusta tu', 'pref' => 'video', 'icon' => 'dislike'),
   8 => array('text' => 'No le gusta tu', 'pref' => 'foto', 'icon' => 'dislike'),
   9 => array('text' => 'No le gusta tu', 'pref' => 'bwort', 'icon' => 'dislike'),
   10 => array('text' => 'No le gusta tu', 'pref' => 'enlace', 'icon' => 'dislike'),
   11 => array('text' => 'Compartio tu', 'pref' => 'video', 'icon' => 'share'),
   12 => array('text' => 'Compartio tu', 'pref' => 'foto', 'icon' => 'share'),
   13 => array('text' => 'Compartio tu', 'pref' => 'bwort', 'icon' => 'share'),
   14 => array('text' => 'Compartio tu', 'pref' => 'enlace', 'icon' => 'share'),
   15 => array('text' => 'Publico en tu', 'pref' => 'perfil', 'icon' => 'publi'),
   16 => array('text' => 'Publico en el', 'pref' => 'grupo', 'icon' => 'publi'),
   17 => array('text' => 'Creo una nueva', 'pref' => 'nota', 'icon' => 'note'),
   18 => array('text' => 'Publico un nuevo', 'pref' => 'bwort', 'icon' => 'publi'),
   19 => array('text' => 'Le gusta tu', 'pref' => 'nota', 'icon' => 'like'),
   20 => array('text' => 'No le gusta tu', 'pref' => 'nota', 'icon' => 'dislike'),
   21 => array('text' => 'Te menciono en su', 'pref' => 'bwort', 'icon' => 'publi'),
   22 => array('text' => 'Comento tu', 'pref' => 'nota', 'icon' => 'comment'),
   23 => array('text' => 'Le gusta tu comentario en la', 'pref' => 'nota', 'icon' => 'like'),
   24 => array('text' => 'Subi&oacute; el', 'pref' => 'juego', 'icon' => 'game'),
   25 => array('text' => 'Coment&oacute; el', 'pref' => 'juego', 'icon' => 'game'),
   26 => array('text' => 'Vot&oacute; el', 'pref' => 'juego', 'icon' => 'game'),
   27 => array('text' => 'Agreg&oacute; a favoritos el', 'pref' => 'juego', 'icon' => 'game'),
   28 => array('text' => 'Publico un nuevo', 'pref' => 'tema', 'icon' => 'note'),
   29 => array('text' => 'Le gusta tu', 'pref' => 'tema', 'icon' => 'like'),
   30 => array('text' => 'No le gusta tu', 'pref' => 'tema', 'icon' => 'dislike'),
   31 => array('text' => 'Repondio a tu comentario en tu', 'pref' => 'archivo', 'icon' => 'archive'),
   32 => array('text' => 'Comento tu', 'pref' => 'bwort', 'icon' => 'comment'),
   33 => array('text' => 'Haz ganado una nueva', 'pref' => 'medalla', 'icon' => 'plus'),
   34 => array('text' => 'Haz acendido a un nuevo', 'pref' => 'rango', 'icon' => 'plus'),
   35 => array('text' => 'Sigue tu', 'pref' => 'tema', 'icon' => 'follow'),
   36 => array('text' => 'Agrego a favoritos tu', 'pref' => 'tema', 'icon' => 'fav'),
   37 => array('text' => 'Te menciono en un comentario en un.', 'pref' => 'tema', 'icon' => 'publi'),
   38 => array('text' => 'Solicito unirse a tu.', 'pref' => 'grupo', 'icon' => 'group'),
   39 => array('text' => 'Creo un nuevo', 'pref' => 'grupo', 'icon' => 'group'),
   /* PARTE DE NOTAS */
   40 => array('text' => 'Comento una ', 'pref' => 'nota', 'icon' => 'comment'),
   41 => array('text' => 'Dejo puntos en tu ', 'pref' => 'nota', 'icon' => 'plus'),
   /* SOPORTE DE WORTIT */
   42 => array('text' => 'Repondio tu tema en un ', 'pref' => 'proyecto', 'icon' => 'comment'),
   43 => array('text' => 'Creo un nuevo tema en tu ', 'pref' => 'proyecto', 'icon' => 'note'),
   44 => array('text' => 'Tu nuevo proyecto fue creado con exito!', 'pref' => 'verlo', 'icon' => 'plus'),
   /* END SOPORTE DE WORTIT */
   45 => array('text' => 'Te haz unido a un ', 'pref' => 'grupo', 'icon' => 'group'),
   46 => array('text' => 'Comento tambien en un ', 'pref' => 'bwort', 'icon' => 'comment'),
   // AULA DE WORTIT
   47 => array('text' => 'Se registro en aula de wortit como ', 'pref' => 'Estudiante', 'icon' => 'plus'),
   48 => array('text' => 'Se registro en aula de wortit como ', 'pref' => 'Profesor', 'icon' => 'plus'),
   49 => array('text' => 'Registro una ', 'pref' => 'clase', 'icon' => 'plus'),
   50 => array('text' => 'Registro un ', 'pref' => 'establecimiento', 'icon' => 'plus'),
   // CODIGO WORTIT
   51 => array('text' => 'Subio un ', 'pref' => 'Archivo', 'icon' => 'plus'),
   52 => array('text' => 'Actualizo un', 'pref' => 'Archivo', 'icon' => 'plus'),
   53 => array('text' => 'Creo un ', 'pref' => 'Repositorio', 'icon' => 'plus'),
   54 => array('text' => 'Descargo un ', 'pref' => 'Archivo', 'icon' => 'plus'),
   // APUNTES DE WORTIT
   55 => array('text' => 'Creo un ', 'pref' => 'Apunte', 'icon' => 'plus'),
   /* EXTRAS DE SOPORTE DE WORTIT */
   56 => array('text' => 'Edito un ', 'pref' => 'proyecto', 'icon' => 'edit'),
   57 => array('text' => 'Creo un categoria', 'pref' => 'en un proyecto', 'icon' => 'plus'),
   58 => array('text' => 'Elimino una categoria ', 'pref' => 'en un proyecto', 'icon' => 'delete'),
   /* ADS WORTIT */
   59 => array('text' => 'Creo un ', 'pref' => 'anuncio', 'icon' => 'plus'),
   60 => array('text' => 'Creo un ', 'pref' => 'Bloque de anuncios', 'icon' => 'plus'),
   /* EXTRAS AULA DE WORTIT */
   61 => array('text' => 'Se registro en ', 'pref' => 'un establecimiento', 'icon' => 'follow'),
   62 => array('text' => 'Se registro en ', 'pref' => 'una clase', 'icon' => 'follow'),
   /* MOD ACTIVIDAD */
   63 => array('text' => 'Un moderador edito tu', 'pref' => 'nota', 'icon' => 'plus'),
   64 => array('text' => 'Un moderador desactivo tu', 'pref' => 'nota', 'icon' => 'plus'),
   65 => array('text' => 'Un moderador Reactivo tu', 'pref' => 'nota', 'icon' => 'plus'),
   66 => array('text' => 'Se ha fijado tu', 'pref' => 'nota', 'icon' => 'plus'),
   67 => array('text' => 'Se ha desfijado tu', 'pref' => 'nota', 'icon' => 'plus'),
   /* GRUPOS */
   68 => array('text' => 'Ha salido de tu', 'pref' => 'grupo', 'icon' => 'follow'),
   /* NOTAS + */
   69 => array('text' => 'No Le gusta tu comentario en la', 'pref' => 'nota', 'icon' => 'like'),
   70 => array('text' => 'Agreg&oacute; a favoritos tu', 'pref' => 'nota', 'icon' => 'plus'),
   71 => array('text' => 'Esta siguiendo tu', 'pref' => 'nota', 'icon' => 'follow'),
   );
   }
   
   /**
   *--------------------------------------------------
   *           OBTENER URL
   *    @action Obtener url de la notifiación.
   *--------------------------------------------------
   ***/

   function url($tipo, $id){
    global $w;
    $t['idg'] = $id;
   switch ($tipo) {
  case 1:
  case 2:
  $red = $w->settings['url'].'/';
  break;
  case 3:
  case 4:
  case 5:
  case 6:
  case 7:
  case 8:
  case 9:
  case 10:
  case 11:
  case 12:
  case 13:
  case 14:
  case 15:
  case 16:
  case 17:
  case 18:
  case 21:
  $quer = mysql_fetch_assoc(mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario=u.usuario_id WHERE b.id='".$t['idg']."'"));
  $red = $w->settings['url'].'/'.$quer['usuario_nombre'].'/'.$t['idg'].'/';
  break;
  case 32:
  case 46:
  $sdjflkn = mysql_fetch_assoc(mysql_query("SELECT * FROM b_comments WHERE bb_id='".$t['idg']."'"));
  $quer = mysql_fetch_assoc(mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario=u.usuario_id WHERE b.id='".$sdjflkn['bb_arch']."'"));
  $red = $w->settings['url'].'/'.$quer['usuario_nombre'].'/'.$t['idg'].'/';
  break;
  case 19:
  case 20:
  case 22:
  case 23:
  case 41:
  case 70:
  case 71:
    $quer = mysql_fetch_assoc(mysql_query("SELECT n.*, c.* FROM noticia AS n LEFT JOIN categorias AS c ON n.categoria = c.id_categoria WHERE n.id='".$t['idg']."'"));
  $red = $w->settings['url'].'/notas/'.$quer['wdefined'].'/'.$quer['id'].'/'.$quer['post_wdefined'].'.html';
  break;
  case 24:
  case 25:
  case 26:
  case 27:
    $quer = mysql_fetch_assoc(mysql_query("SELECT * FROM j_juegos WHERE juego_id='".$t['idg']."'"));
    $red = $w->settings['url'].'/juegos/'.$quer['juego_id'].'/'.$w->setSEO($quer['j_title']).'.html';
  break;
  case 28:
  case 29:
  case 30:
  case 35:
  case 36:
  case 37:
    $query = mysql_query('SELECT c.c_nombre, c.c_nombre_corto, c.c_sub_categoria, t.t_estado, t.t_id, t.t_titulo, t.t_autor, t.t_fecha, u.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON c.c_id = t.t_comunidad LEFT JOIN usuarios AS u ON u.usuario_id = t.t_autor WHERE t.t_id > \'0\' AND t.t_estado = \'0\' AND c.c_estado = \'0\' AND t.t_id=\''.$t['idg'].'\' ORDER BY t.t_fecha DESC');
    $temase = mysql_fetch_assoc($query);
    $red = $w->settings['url'].'/foro/'.$temase['c_nombre_corto'].'/'.$temase['t_id'].'/'.$w->setSEO($temase['t_titulo']).'.html';
  break;
  case 38:
  case 39:
  case 68:
  case 45:
  $ksjnl = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$t['idg']."'"));
  $red = $w->settings['url'].'/grupos/'.$ksjnl['wdefined'];
  break;
  case 33:
    $quer = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$t['id_receptor']."'"));
    $red = $w->settings['url'].'/'.$quer['usuario_nombre'];
  break;
  case 34:
  $kdfjsei = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$t['idg']."'"));
     $xtras = $kdfjsei['name'];
  break;
  case 42:
  $kmsdl = mysql_fetch_assoc(mysql_query("SELECT * FROM s_respuestas WHERE sr_id='".$t['idg']."'"));
  $msdlkmwelk = mysql_fetch_assoc(mysql_query("SELECT * FROM s_respuestas WHERE sr_id='".$kmsdl['sr_tema']."'"));
  $slaelw = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$msdlkmwelk['sr_foro']."'"));
    $red = $w->settings['url'].'/soporte/'.$slaelw['sf_seo'].'/?a='.$msdlkmwelk['sr_id']; 
  break;
  case 43:
    $kmsdl = mysql_fetch_assoc(mysql_query("SELECT * FROM s_respuestas WHERE sr_id='".$t['idg']."'"));
  $slaelww = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$kmsdl['sr_foro']."'"));
    $red = $w->settings['url'].'/soporte/'.$slaelww['sf_seo'].'/?a='.$kmsdl['sr_id']; 
  break;
  case 44:
  $slaelww = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$t['idg']."'"));
    $red = $w->settings['url'].'/soporte/'.$slaelww['sf_seo'].'/'; 
  break;
   }
   $data['url'] = $red;
   $data['extras'] = $xtras;
   return $data;
   }
   
   /*** 
   *----------------------------------
   *           getWebn();
   *  @action Enviar notificaciones
   *-----------------------------------
   ***/
    function getNotifis($iduser, $type, $idg, $para){
      global $wuser;
    if($type && $idg && $wuser->uid){	
    $quesgkk = mysql_num_rows(mysql_query("SELECT * FROM wnotifi WHERE tipo='".$type."' && id_emisor='".$wuser->uid."' && idg='".$idg."' "));
    $e = 1;
    $id = ($iduser == 0) ? $wuser->uid : $iduser;
    if($quesgkk){ if($quesgkk > 1){ mysql_query("DELETE FROM wnotifi WHERE tipo='".$type."' && id_emisor='".$wuser->uid."' && idg='".$idg."'"); } }else{
    if($e == 1){
    if(mysql_query("INSERT INTO wnotifi (id_emisor, tipo, vista, fecha, hace, id_receptor, idg) VALUES('".$wuser->uid."', '".$type."', '0', '".date("")."', '".time()."', '".$para."', '".$idg."' )")){
    $awek = mysql_insert_id();
    // ENVIAR VIA EMAL
    $seg = mysql_fetch_assoc(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$wuser->uid."'"));
    if($seg['ss_notifiem'] == 1){
    $this->userNotif($awek);
    }
    }
    }
    }
    // FIN ENVIAR VIA EMAIL
   }
   }  

       /**
     * @name setAviso
     * @access public
     * @param int, string, string
     * @return bool
     * @info ENVIA UN AVISO/ALERTA
    */
    function setAviso($user_id, $subject = '(sin asunto)', $body, $type = 0){
  global $tsCore;
        # VERIFICAMOS QUE SE PUEDA ENVIAR EL AVISO
    $query = mysql_query('SELECT banned FROM usuarios WHERE usuario_id = \''.(int)$user_id.'\' LIMIT 1');
        $data = mysql_fetch_assoc($query);
        
        # NO PODEMOS ENVIAR A UN USUARIO BANEADO
        if($data['banned'] == 1) return true;
        # INSERTAMOS EL AVISO
    if(mysql_query('INSERT INTO u_avisos (user_id, av_subject, av_body, av_date, av_type) VALUES (\''.(int)$user_id.'\', \''.$w->setSecure($subject).'\', \''.$w->setSecure($body).'\', \''.time().'\', \''.$type.'\' )')) return true;
        else return false;
    } 

   /*
   *---------------------------------------------
   *            NOTIFIACIONES VIA EMAIL
   *---------------------------------------------
   */

function userNotif($id){
global $w, $wuser, $tsWeb;
$usdfo = mysql_fetch_assoc(mysql_query("SELECT * FROM wnotifi WHERE id='".$id."'"));
if($usdfo['id_emisor'] != $wuser->uid){
$uskfjwlkeinfo = mysql_fetch_assoc(mysql_query("SELECT * FROM  usuarios WHERE usuario_id='".$usdfo['id_emisor']."'"));
$kg = $uskfjwlkeinfo['usuario_nombre'].' '.$this->web[$usdfo['tipo']]['text'].' '.$this->web[$usdfo['tipo']]['pref'];
//     'X-Mailer: PHP/' . phpversion()
$headers = 'From: contacto@wortit.net' . "\r\n" .
    'Reply-To: contacto@wortit.net' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1';
$sfkl5545 = $tsWeb->url($usdfo['tipo'], $usdfo['idg']);
mail($wuser->info['usuario_email'], "".$w->wrecorte($kg, 40)." | Wortit", "<style type='text/css'>body{margin:0px;padding: 0px;}</style><meta charset='utf-8' /><div style=''><div style='width: 100%;background: url(http://www.wortit.net/images/bg/menu-f5.png);'><div style='margin: 11px 0px 0px 19px;padding: 0px 0px 15px 0px;overflow: hidden;clear: both;'>Wortit</div><div style='margin: -38px 0px 0px 170px;position: absolute;color: #FFFFFF;font-weight: bold;font-family: verdana;'>Notificacion Por Correo</div></div><div style='margin: 8px;'><div style=''>Gracias por utilizar el sistema de notificaciones por email de WORTIT.</div><br><div style=''>".$kg."  ".$sfkl5545['extras']."</div><br><div style=''><span><a href='".$sfkl5545['url']."' style='font-size:23px;'>Ver la notificacion en WORTIT</a></b></span></div></div></div>", $headers);
}
}
 
    /*
	*--------------------------------------------------------------
	*                         whitNotifis();
	*                    @Action Obtener notificaciones
	*---------------------------------------------------------------
	*/
	
	function whitNotifis(){
    global $wuser;
	//     $query1 = mysql_query("SELECT u.*, w.*, s.* FROM usuarios AS u LEFT JOIN wnotifi AS w ON w.id_emisor = u.usuario_id LEFT JOIN suscriptores AS s ON u.usuario_id = s.id_receptor WHERE w.id_receptor='".$_SESSION['uid']."' or s.id_emisor='".$_SESSION['uid']."' GROUP BY w.id ORDER BY w.id DESC");
     $query = mysql_query("SELECT w.*, u.* FROM wnotifi AS w LEFT JOIN usuarios AS u ON w.id_emisor = u.usuario_id WHERE w.id_receptor='".$wuser->uid."' AND w.id_emisor !='".$wuser->uid."' GROUP BY w.id ORDER BY w.id DESC");
	 return $query;
	}

 
    function tslike($type){
	$kdfnaw = mysql_fetch_assoc(mysql_query("SELECT * FROM bworts WHERE b_note='".$_POST['post_id']."' LIMIT 1"));
	$f = time();
	if($type == 1){
	$queryu = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$kdfnaw['id']."' AND idusuario='".$_SESSION['uid']."'"));
	if($queryu){
	return '0: Ya votastes esta noticia.';
	}else{
	mysql_query("INSERT INTO me_encanta (idpublicacion, idusuario, hace) VALUES('".$_POST['post_id']."', '".$_SESSION['uid']."', '".$f."') ");
	return '1: Te gusta.';
	}
	
	}elseif($type == 0){
	$queryu = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$kdfnaw['id']."' AND idusuario='".$_SESSION['uid']."'"));

	if($queryu){
	return '0: Ya votastes esta noticia.';
	}else{
	mysql_query("INSERT INTO no_megusta (idnopubli, idusuario, hace) VALUES('".$_POST['post_id']."', '".$_SESSION['uid']."', '".$f."') ");
	return '1: No te gusta';
	}
	
	}else{
	return '0: Define una accion.';
	}
	}
 
 
     /**
     *-------------------------------
     *         GET STATS
     *-------------------------------
     **/	 
	 
	 	function get_last($type){
		if($type == 'noti'){
	    $query = mysql_query("SELECT u.*, w.*, s.* FROM usuarios AS u LEFT JOIN wnotifi AS w ON w.id_emisor = u.usuario_id LEFT JOIN suscriptores AS s ON u.usuario_id = s.id_receptor WHERE w.id_receptor='".$_SESSION['uid']."' or s.id_emisor='".$_SESSION['uid']."' GROUP BY w.id ");
		}
		
		$return = '1: '.mysql_num_rows($query);
		return $return;
	    }
 
    /**
   *---------------------------------------
   *       Mostrar resultados entre id X y id X
   *---------------------------------------
   **/   
 
   function loadentre($type, $iu, $id){
    
   switch($type){
   case 'bworts':
   $query = mysql_query("SELECT * FROM bworts WHERE ");
   break;
   }   
 
   return $result;
   }
   /*
   *-------------------------------------------------------------------------------------------
   *                                @action SEGUIR NOTA - FAVORITOS
   *                              @eject Seguir, Favoritos y opciones
   *-------------------------------------------------------------------------------------------
   */
   

   
  /** ¿YA VOTO? **/

  function is_votenew($id, $type){
 $queryup = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idcoment='".$id."' AND idusuario='".$_SESSION['uid']."'")); 
 $querydown = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idcoment='".$id."' AND idusuario='".$_SESSION['uid']."'")); 

    if($queryup == 1 or $queryup > 0 or $querydown== 1 or $querydown > 0){
    return false;
    }else{
      return true;
    }
  }

  /** VOTAR **/

  function vot_new($id, $type){
    if($id && $type){
   $idevot = $this->is_votenew($id, $type);
   if($idevot == true){
    if($type == 'up'){ $i = mysql_query("INSERT INTO me_encanta(idcoment, idusuario, hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."' )"); }else{}
    if($type == 'down'){ $i = mysql_query("INSERT INTO no_megusta(idcoment, idusuario, hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."' )"); }else{}
    if($i){ return '1: Agregado correctamente.'; }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
   }else{ return '0: Ya haz votado este comentario.'; }
   }else{ return '0: Inserta los datos.'; }
  }


   /*********
   *-------------------------------------------------------------------------------------------
   *   REPORTE DE BUGS
   *-------------------------------------------------------------------------------------------
   **/
 
 
   function I_Have_Permissions(){
	return true;
}

function send(){
	global $wuser, $w;
	$user = empty($_SESSION['uid']) ? 0 : $_SESSION['uid'];
	$date = time();
	$title = $w->setSecure($_POST['title']);
	$desc = $w->setSecure($_POST['desc']);
	$email = $w->setSecure($_POST['email']);
	$ip = $_SERVER['X_FORWARDED_FOR'] ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	$cookie = substr(md5(rand(0, (999*889))), -10);
	$time_day = time() - 60*60*24;
	$flood_1 = mysql_query('SELECT b_ip FROM bugs WHERE b_ip = \''.$ip.'\' AND b_date > \''.$time_day.'\' LIMIT 1');
	$flood_2 = mysql_query('SELECT b_cookie FROM bugs WHERE b_cookie = \''.$_COOKIE['bsend'].'\' AND b_date > \''.$time_day.'\' LIMIT 1');
	if(mysql_num_rows($flood_1) == 1 || mysql_num_rows($flood_2) == 1) return array('status' => 'error', 'data' => 'No puedes enviar m&aacute;s sugerencias por el momento');
	if(!$ip) return array('status' => 'error', 'data' => 'Su IP no es v&aacute;lida');
	if(!$title) return array('status' => 'error', 'data' => 'Ingrese la sugerencia');
	if(!$email) return array('status' => 'error', 'data' => 'Ingrese su correo');
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) return array('status' => 'error', 'data' => 'El correo ingresado no es v&aacute;lido');
	$sql['insert'] = mysql_query('INSERT INTO bugs (b_title, b_desc, b_email, b_user, b_ip, b_date, b_cookie) VALUES (\''.$title.'\', \''.$desc.'\', \''.$email.'\', \''.$user.'\', \''.$ip.'\', \''.$date.'\', \''.$cookie.'\')');
	$cookie['insert'] = setcookie("bsend", $cookie, time()+(60*60*24*999), '/');
	if($sql['insert'] && $cookie['insert']){
		return array('status' => 'ok', 'data' => 'Sugerencia enviada, muchas gracias!');
	}else return array('status' => 'error', 'data' => mysql_error());
}

function bugs(){
	global $fun;
	$max = 30;
	$page = intval($_GET['page']);
	if(empty($page)){
		$inicio = 0;
		$page = 1;
	}else $inicio = ($page - 1) * $max;
	$query = mysql_query('SELECT * FROM bugs');
	$total = mysql_num_rows($query);
	$data['pages'] = $fun->normalPagination($page, $total, $max);
	$query = 'SELECT * FROM bugs ORDER BY b_id DESC LIMIT '.$inicio.', '.$max;
    $data['data'] = result_array(mysql_query($query));
	return $data;
}

function getBug($id){
	$query = mysql_query('SELECT b.b_id, b.b_title, b.b_desc, b.b_email, b.b_ip, u.usuario_nombre FROM bugs AS b LEFT JOIN usuarios AS u ON u.usuario_id = b.b_user WHERE b.b_id = \''.$id.'\' LIMIT 1');
	$data = mysql_fetch_assoc($query);
	return $data;
}

function delBug($id){
	mysql_query('DELETE FROM bugs WHERE b_id = \''.$id.'\'');
	return '1: Bug eliminado';
}
 
 /**  FIN DE LA CLASS **/
 }
 ?>