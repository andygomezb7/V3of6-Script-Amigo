<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.user.php
 * @author  Wortit Developers
 */
class tsAnonimo{

		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new tsAnonimo();
    	}
		return $instance;
	}


	    	 function login($id){
		global $w;
			$time = time();
			$cookie_name = 'LS_'.substr(md5($w->settings['url']), 0, 6);
			$cookie_time = 60*60*24*7;
			$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CLIENT_IP'] || 
$_SERVER['HTTP_X_FORWARDED_FOR'] || 
$_SERVER['HTTP_X_FORWARDED'] || 
$_SERVER['HTTP_FORWARDED_FOR'] || 
$_SERVER['HTTP_FORWARDED'] || 
$_SERVER['REMOTE_ADDR'];
			$ksa5f6qe6 = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE user_fb='".$fbid."'")); 
			if($fbid && $ksa5f6qe6['usuario_id']){ 
			$key_1 = $ksa5f6qe6['usuario_id']; 
		    }else{ $key_1 = $id; }
			$key_2 = substr(sha1(md5($time).'RFT'), 0, 15);
			$key_3 = $time-5915;
			$key = $key_1.'_'.$key_2.'__'.$key_3;
                        $rem = '0';
			if(mysql_query('INSERT INTO w_sessions (s_key, s_user, s_ip, s_date, s_update, s_remember) VALUES (\''.$key_2.'\', \''.$key_1.'\', \''.$_SERVER['REMOTE_ADDR'].'\', \''.$key_3.'\', \''.$time.'\', \''.$rem.'\')')){
				$host = parse_url($w->settings['url']);
				$host = str_replace('www.', '' , strtolower($host['host']));
				$this_domain = ($host == 'localhost') ? '' : '.' . $host;
				setcookie($cookie_name, $key, time() + $cookie_time);
				mysql_query('UPDATE usuarios SET user_activo = \'1\' WHERE usuario_id = \''.$key_1.'\'');
				mysql_query("UPDATE usuarios SET active_ult='".time()."' WHERE usuario_id='".$key_1."'");
				return array('return' => 1, 'cookie_name' => $cookie_name, 'cookie_key' => $key); 
			}else return array('return' => 1);
	        }


		function cerrar($user_id = 0, $all_sessions = false){
		global $w;
		$user_id = empty($user_id) ? $this->uid : $user_id;
		if($user_id != $this->uid){
			$query = mysql_query('DELETE FROM w_sessions WHERE s_user = \''.$user_id.'\' LIMIT 1');
			return '1: OKAY';
		}
		$cookie_name = 'LS_'.substr(md5($w->settings['url']), 0, 6);
		$cookie = $w->setSecure($_COOKIE[$cookie_name]);
		if($cookie && $user_id){
			//$sdd = explode($cookie, '_');
			//$key_1 = $sdd[0];
			//$key_2 = $sdd[1];
			//$key_3 = $sdd[2];
			// +5915
            $key_3 = str_replace('_', '', strstr($cookie, '__'));
			$part_1 = strstr($cookie, '__', true);
			$key_2 = str_replace('_', '', strstr($part_1, '_'));
			$key_1 = strstr($part_1, '_', true);
			$query = mysql_query('SELECT s_id, s_user FROM w_sessions WHERE s_user = \''.$key_1.'\' AND s_key = \''.$key_2.'\' AND s_date = \''.$key_3.'\' LIMIT 1');
			$data = mysql_fetch_assoc($query);
			if($data['s_user']){
				mysql_query('UPDATE usuarios SET user_activo = \'0\' WHERE usuario_id = \''.$user_id.'\'');
				mysql_query('DELETE FROM w_sessions WHERE s_user= \''.$data['s_user'].'\'');
				if($all_sessions) mysql_query('DELETE FROM w_sessions WHERE s_user = \''.intval($data['s_user']).'\'');
				$host = parse_url($w->settings['url']);
				$host = str_replace('www.', '' , strtolower($host['host']));
				$this_domain = ($host == 'localhost') ? '' : '.' . $host;
				setcookie($cookie_name, '', (time() - 999*999), '/', $this_domain);
				return 1;
			}else return $key_1.' - '.$key_2.' - '.$key_3.' _- '.$data['s_user'];
		}else return 3;
	   }

	   	      	/*
		CERRAR SESSION
		logoutUser($redirectTo)
	*/
	function logoutUser($user_id, $redirectTo = '/'){
		global $w;
		session_start();  $_SESSION['uid'] = '';  session_destroy(); 
	    $last_active = time();
		mysql_query('UPDATE usuarios SET active_ult=\''.$last_active.'\' WHERE usuario_id = \''.$user_id.'\'');
		$je = $this->cerrar($user_id, true);
		if($je == 1){ $c = '1: Redireccionando...'; 
		}elseif($je == 3){ $c = '0: Al parecer ya no estas loggeado...'; }else{ 
		$c = '0: '.$je; }
		return $c;
	}
	
	
		  //LOGGEAMOS AL USUARIO 
	  function loginUser($username, $password, $fbid = false){
	  global $w;
	  if($username && $password){
        $username = $username;
		if($fbid == false) $pp_password = md5($password); else $pp_password = $password;
		$query = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$username."' AND usuario_clave='".$pp_password."'");
        if(!mysql_num_rows($query)) $query = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$username."' AND usuario_clave='".$pp_password."'");
		$data = mysql_fetch_assoc($query);
        $sdfleuaesk = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$username."'"));
        $SD65F4S6513 = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$username."'"));
		if($sdfleuaesk >= 1){ 
		if($data['usuario_clave'] != $pp_password){ return '0: Tu contrase&ntilde;a es incorrecta.'; }else{
        session_start();
        $_SESSION['uid'] = $data['usuario_id'];
        $s4df5w4e = $this->login($SD65F4S6513['usuario_id']);			
        if($s4df5w4e['return'] == 1){ 
        if(setcookie($s4df5w4e['cookie_name'], $s4df5w4e['cookie_key'], (time() - 60*60*24*7), '/', '.wortit.net') || $_SESSION['uid']){
        return '1: Redireccionando... ('.$_SESSION['uid'].''; }else{ return '0: error.'; } }else{ return '0: Ocurrio un error, intenta nuevamente. ('.$s4df5w4e['text'].')'; }
		}
		}else{ return '0: El usuario no existe.'; }
		}else{
		return '<html><head><title>'.$w->settings['name'].'</title><meta http-equiv="refresh" content="1;url='.$w->settings['direccion_url'].'" /></head><body></body>';
		}
	  }
	   /*VALIDA EMAIL */
	   function valida_email($correo) {
       if (preg_match_all("^[_.0-9a-z-]+@[0-9a-z._-]+.[a-z]{2,4}$", $correo)) return true; else return false;
      }

            /****
	  *------------------------------------------------------------------
	  *                         register_fb($id, $username, $fullname, $email);
	  *                 @action Registrar Usuarios
	  *------------------------------------------------------------------
	  ****/

	  function register_fb($id, $usernamee, $fullname, $email){
	  	global $w;
      $fullnamess = explode(' ', $fullname);
      $fullpname = $fullnamess[0];
      $fullapell = $fullnamess[1];
      $referido = 'faceboook';
      $username = ($usernamee) ? $usernamee : $id;
       $s5qa64we = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE user_fb='".$id."'"));
      if($s5qa64we >= 1){
       $this->login($s5qa64we['usuario_id'], $id);
      }else{
      mysql_query("INSERT INTO usuarios(usuario_nombre, name_original, ap_original, usuario_email, user_fb) VALUES(
      '".$username."',
      '".$fullpname."',
      '".$fullapell."',
      '".$email."',
      '".$id."'
      )");
      $idsfklwe = mysql_insert_id();
      $this->login($idsfklwe, $id);
      }
	  }

      /****
	  *------------------------------------------------------------------
	  *                         register();
	  *                 @action Registrar Usuarios
	  *------------------------------------------------------------------
	  ****/
	function register(){
	global $w, $wuser;
    $usuario_nombre = $w->setSecure($_POST['nombre']);
    $usuario_clave = $w->setSecure($_POST['clave']);
    $usuario_email = $w->setSecure($_POST['email']);
    $pais = $w->setSecure($_POST['pais']);
    $sexo = $w->setSecure($_POST['sexo']);
    $original = $w->setSecure($_POST['original']);
    $ap = $w->setSecure($_POST['ap']);
    $identi = time();
    $referido = "";
    $diac = $w->setSecure($_POST['dia']);
    $mesc = $w->setSecure($_POST['mes']);
    $anioc = $w->setSecure($_POST['anio']);
    $sjdokf = $w->setSecure($_POST['clave']);

    $scode = $w->setSecure($_POST['recaptcha_response_field']);
	$scode2 =$w->setSecure($_POST['recaptcha_challenge_field']);
	require '../libs/recaptchalib.php';
	$robot = recaptcha_check_answer('6LdHQvASAAAAADBKFRROyYyN58FkXluGPm1Nb-7o', $_SERVER['REMOTE_ADDR'], $scode2, $scode);		
	if(!$robot->is_valid){ return '0: El c&oacute;digo de seguridad no es correcto'; }else{
    if($usuario_nombre == NULL or $sjdokf == NULL or $_POST['reclave'] == NULL or $original == NULL or $ap == NULL or $usuario_email == NULL or $diac == NULL or $mesc == NULL or $anioc == NULL or $pais == NULL or $sexo == NULL){
    return '0: Por favor llene todos los campos.';
    }else{ $rec = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'"); $verificarusuario = mysql_num_rows($rec); if($verificarusuario == 1 or $verificarusuario > 0){ 
	return "0: Este usuario no esta disponible. <a href='mydialog.close();'>Reintentar</a>.";   
    }else{ if($usuario_nombre == 'p' or $usuario_nombre == 'foro' or $usuario_nombre == 'new' or $usuario_nombre == 'roombox' or $usuario_nombre == 'groups' or $usuario_nombre == 'chat' or $usuario_nombre == 'juegos' or $usuario_nombre == 'search' or $usuario_nombre == 'editar' or $usuario_nombre == 'ver' or $usuario_nombre == 'notificaciones' or $usuario_nombre == 'aleatorio' or $usuario_nombre == 'admin' or $usuario_nombre == 'mod' or $usuario_nombre == 'files' or $usuario_nombre == 'vip' or $usuario_nombre == 'tienda' or $usuario_nombre == 'porn' or $usuario_nombre == 'porno' or $usuario_nombre == 'login.recuperar'){ 
	return '0: Este nombre de usuario no esta disponible.';
    }else{ if($usuario_nombre == 'administrador' or $usuario_nombre == 'moderador' or $usuario_nombre == 'Moderador' or $usuario_nombre == 'registro' or $usuario_nombre == 'login' or $usuario_nombre == 'top' or $usuario_nombre == 'editor' or $usuario_nombre == 'pages' or $usuario_nombre == 'fanpages' or $usuario_nombre == 'tops' or $usuario_nombre == 'live' or  $usuario_nombre == 'rand' or $usuario_nombre == 'profile' or $usuario_nombre == 'perfil' or $usuario_nombre == 'grupos' or $usuario_nombre == 'groups' or $usuario_nombre == 'searchg' or $usuario_nombre == 'publi' or $usuario_nombre == 'roombox'){ 
	return '0: El nombre de usuario no esta disponible. 2';
    }else{ if($_POST['clave'] != $_POST['reclave']){ 
	return '0: Las contraseñas no son iguales.';
    }else{ $sin_espacios = count_chars($usuario_nombre, 1); if(!empty($sin_espacios[32])){ 
	return "0: El campo <em>Nick de usuario</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
    }else{ $emailnaca = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario_email='".$_POST['email']."'")); $emaill = $emailnaca; if($emaill == 1 or $emaill > 1){ 
	return "0: La Direccion De Email elegida ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
    }else{

$usuario_clave = md5($usuario_clave); $IP = $w->getRealIP(); $re = $w->setSecure($_POST['r']); if($re){ $r = $re; }else{ $r = ''; }
if(mysql_query("INSERT INTO usuarios(usuario_nombre, usuario_clave, usuario_email, usuario_freg, pais, user_sexo, name_original, ap_original, identi, nac_dia, nac_mes, nac_anio, es_pagina_url, referido) VALUES('".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."', '".$identi."', '".$pais."', '".$sexo."', '".$original."', '".$ap."', '".$identi."', '".$diac."','".$mesc."', '".$anioc."', '".$IP."', '".$r."')")){
$insertId = mysql_insert_id();
mysql_query("INSERT INTO segurityw(s_uid, sp_datos, sp_bworts, sp_bwortsp, sp_temas, sp_notas, sp_publicpp, ss_notifiem) VALUES('".$insertId."', '1', '1', '1', '1', '1', '1', '0')");

//// ENVIAR CORREO ////
$para = $usuario_email;
$titulo = 'Bienvenido a WORTIT';
$cabeceras = 'From: contacto@wortit.net' . "\r\n" .
    'Reply-To: contacto@wortit.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, '<div style="overflow:hidden;font-family: arial, helvetica;font-weight: normal;">
	<meta charset="utf-8"/>
<div style="background:#07f;padding: 7px 11px;text-align:-webkit-center;color: #FFFFFF;font-size: 22px;text-transform: uppercase;font-family: verdana;">WORTIT</div>
<div style="padding: 6px 0 0 0;">
<div>BIEVENIDO! a <span style="font-family:verdana;">WORTIT</span>, Esperamos que tu experiencia en el sea se lo mejor, te damos tus datos para que no los pierdas, si no te haz registrado en nuestro sistema no hagas caso o miso a este correo. Muchas gracias</div><br>

<div title="Empleado de Wortit" style="overflow: hidden;">
<div style="font-size:16px;font-family: ve;margin:0 6px 0 0;float: left;"><b>Usuario</b></div> '.$usuario_nombre.'</div>

<div title="Previa Respuesta">
<div style="font-size:16px;font-family: ve;margin:0 6px 0 0;float: left;"><b>Contraseña</b></div> '.$sjdokf.'</div>
<br><br>

<div style="overflow:hidden;">
<div style="font-size:16px;font-family: ve;margin:0 6px 0 0;"><b>
Información que te podria interesar</b> <div style="color:gray;font-size:12px;">Te damos información de nuestras paginas y proyectos que podrian ayudarte a mejorar tus proyectos, Recuerda que antes de usar cada una de nuestras paginas o en general debes leer las condiciones de uso y politicas y condiciones de cada sección y globales.</div></div><br>
<ul>
<li><a href="https://wortit.net/int/aula/">Aula de Wortit</a></li>
<li><a href="https://wortit.net/soporte/">Foros de soporte interactivo</a></li>
<li><a href="https://wortit.net/foro/">Foros interactivos</a></li>
<li><a href="https://wortit.net/int/codigo/">Codigo Wortit (alojador de archivos)</a></li>
<li><a href="https://wortit.net/int/apuntes/">Apuntes en Wortit</a></li>
<li><a href="https://wortit.net/grupos/">Grupos sociales</a></li>
</ul>
</div>
<br><br>
<span>El equipo de <span style="font-family:verdana;">WORTIT</span></span><br>
<span><a href="'.$w->settings['url'].'">www.wortit.net</a></span>
</div></div>', $cabeceras);
/// END CORREO /////

/////////////////////AVATAR ALEATORIO/////////////////////
if($sexo == 0 or $sexo == '0'){ $r = rand(1, 2); $number=rand(1,20); if($r == 1){ $name=$number.'.png'; } if($r == 2){ $name=$number.'.jpg'; } copy('../files/avatar/mont/'.$name.'','../files/avatar/'.$insertId.'_120.png'); }else{ $number=rand(1,24); $name=$number.'.png'; copy('../files/avatar/girl/'.$name.'','../files/avatar/'.$insertId.'_120.png'); }
$avatarww = $w->settings['url'].'/files/avatar/'.$wuser->uid.'_120.png';
mysql_query('UPDATE usuarios SET w_avatar=\''.$avatarww.'\' WHERE usuario_id = \''.$insertId.'\'');
////////////////FIN ALEATORIO/////////////

//////////// ENVIO DE EMAIL DE BIENVENIDA ////////////
$this->login($insertId);
$this->is_member = $insertId;			   
return '1: Registrado correctamente'; 	     
}else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
        } } } } } } } }
// Fin de la función
}


	/****
	*---------------------------------------------------
	*            Recuperar Contraseña
	*  @action Enviar nuevos datos y actualizarlos
	*---------------------------------------------------
	****/

	function recuperar_contra($email){
	global $w, $ip;
    $res=mysql_query("SELECT * FROM usuarios WHERE usuario_email='".$email."'"); 
    $row=mysql_fetch_assoc($res); 
    if($email){ $sdfasdfwaefw = $email;
    if($row['usuario_nombre']){
    $better_tokenn = md5(uniqid(mt_rand(), true));
    $better_tokenchi = md5(substr($better_tokenn, 0, 6));
    $passfnwieou = md5(md5(time()));
    $better_token = substr(md5(sha1($passfnwieou).'WortitNet'), 0, 35);
    $loginname = $row['usuario_nombre'];
    $loginid = $row['usuario_id'];
    $loginmail = $row['usuario_email'];
    //mysql_query("UPDATE usuarios SET usuario_clave='".$better_tokenchi."' WHERE usuario_id='".$rowd['usuario_id']."' ");
				$time = time();
				$key = $time+$time;
				$key3 = $time-573;
				$code = substr(md5($time.$loginid.$loginmail), 0, 20);
				$pass = substr(md5($time.$loginid.$loginmail), 0, 15);
				$link = $w->settings['url'].'/login/recuperar/?type=act&key='.$key.'&code='.$better_token;
				$email_to = $email;
				$email_subject = $w->settings['name'].' - Paso final para activar tu cuenta';
				$email_body = '<div style="background:#0f7dc1;padding:10px;font-family:Arial, Helvetica,sans-serif;color:#000">';
				$email_body .= '<h1 style="color:#FFFFFF; font-weight:bold; font-size:30px;">'.$w->settings['name'].'</h1>';
				$email_body .= '<div style="background:#FFF;padding:10px;font-size:14px">';
				$email_body .= '<h2 style="font-family:Arial, Helvetica,sans-serif;color:#000;font-size:22px">Hola '.$loginname.'</h2>';
				$email_body .= '<p style="font-family:Arial, Helvetica,sans-serif;color:#000">&iexcl;Te damos la bienvenida a '.$w->settings['name'].'!</p>';
				$email_body .= '<p>Para finalizar con el proceso de recuperación de tu contraseña, confirma tu direcci&oacute;n de email accediendo a <a href="'.$link.'">'.$link.'</a>';
				$email_body .= '</p><br /> <br />';
				$email_body .= '<p>Te recordamos que tienes 30 minutos para recuperar tu contraseña, De lo contrario deveras volver a solicitar una nueva key.</p>';
				$email_body .= '<p>Antes de continuar interactuando con la comunidad, te recomendamos que visites el <a target="_blank" href="'.$w->settings['url'].'/protocolo">Protocolo</a> del sitio.</p>';
				$email_body .= '<p>Esperamos que disfrutes enormemente tu visita.</p>';
				$email_body .= '<p>&iexcl;Te Damos Muchas gracias por utilizar nuestro sistema!</p>';
				$email_body .= '<p>Staff de '.$w->settings['name'].'.</p>';
				$email_body .= '<div style="border-top:#CCC solid 1px;padding:10px 0">';
				$email_body .= '<span style="color:#666;font-size:11px">';
				$email_body .= '<center>El staff de <strong>'.$w->settings['name'].'</strong></center>';
				$email_body .= '</span>';
				$email_body .= '</div>';
				$email_body .= '</div>';
				$email_body .= '</div>';
				$sender = $web['title']." <no-reply@".str_replace('www.', '', $w->settings['url']).">";
				$email_headers = "MIME-Version: 1.0"."\n";
				$email_headers .= "Content-type: text/html; charset=utf-8"."\n";
				$email_headers .= "Content-Transfer-Encoding: 8bit"."\n";
				$email_headers .= "From: $sender"."\n";
				$email_headers .= "Return-Path: $sender"."\n";
				$email_headers .= "Reply-To: $sender\n";
				if(mail($email_to, $email_subject, $email_body, $email_headers)){
					mysql_query("INSERT INTO user_emails(ue_user, ue_identi, ue_date, ue_ip, ue_type, ue_email, ue_key) VALUES('".$loginname."', '".$better_token."', '".time()."', '".$ip."', '1', '".$email_to."', '".$key."')");
				$help = "1: Tu Nueva contraseña se ha enviado correctamente a tu correo. <br /> Si no ves tu correo en el inicio de tu bandeja de entrada ve a 'Correo no deseado', Puede ser que se alla filtrado.<br /> Si en caso no llega tu correo inmediatamente espera cierto tiempo, sino: Reporta un 'Bug' dando click en el boton de el fin de la pagina.";
				}else{ $help = '0: Ocurrio un error al enviar el correo. Intenta nuevamente.'; }
                }else{ $help = '0: Los datos no se encontraron en nuestro sistema.'; }
                }else{ $help = '0: Inserta los datos porfavor...'; }
                return $help;
                }

                
	 /**
     * @name Cambiar contraseña
     * @access public
     * @param int
     * @return array
     * @info CAMBIA LA CONTRASEÑA DE UN USUARIO DESEADO
     */

     function userpassemailsdk($user, $passnew, $key, $code){
       $userconfig = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$user."'"));
       $keyconfig = mysql_fetch_assoc(mysql_query("SELECT * FROM user_emails WHERE ue_key='".$key."'"));
       $codeconfig = mysql_fetch_assoc(mysql_query("SELECT * FROM user_emails WHERE ue_identi='".$code."'"));
       $coincidencias = mysql_fetch_assoc(mysql_query("SELECT * FROM user_emails WHERE usuario_nombre='".$user."' AND ue_key='".$key."' AND ue_identi='".$code."' "));
      if($userconfig['usuario_nombre']){
       if($keyconfig['ue_user']){
         if($codeconfig['ue_user']){
         	if($coincidencias['ue_id']){
        $fechamail = $codeconfig['ue_date']; 
		$ahoramail = time();
		$tiempomail = $ahoramail-$fechamail; 
	    $canmail = round($tiempomail / 60); 
          if($canmail <= 30){ return '0: La key ya esta vencida. Vuelve a solicitar una nueva.'; }else{
          	$newpass = md5($passnew);
            if(mysql_query("UPDATE usuarios SET usuario_clave='".$newpass."' WHERE usuario_nombre='".$user."'")) return '1: Contraseña reestablecida correctamente. Ya puedes iniciar sesion.'; else return '0: Ocurrio un error, intenta nuevamente.';
          }
          }else{ return '0: Los datos no coinciden en nuestro sistema.'; }
         }else{ return '0: La Key no es valida.'; }
       }else{ return '0: La key no es valida.'; }
      }else{ return '0: El usuario no existe.'; }
     }


}
?>