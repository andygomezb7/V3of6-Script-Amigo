<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');

class tsCuenta {

   
   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsCuenta();
        }
        return $instance;
    }

    /**
     * @name loadPerfil()
     * @access public
     * @uses Cargamos el perfil de un usuario
     * @param int
     * @return array
     */
	public function loadPerfil($user_id = 0){
		//
		if($user_id == 0 or !$user_id) $user_id = $_SESSION['uid'];
		//
		$query = mysql_query('SELECT * FROM usuarios WHERE usuario_id = \''.(int)$user_id.'\' LIMIT 1');
		$perfilInfo = mysql_fetch_assoc($query);
        
		$perfilInfo['s'] = mysql_fetch_assoc(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$user_id."'"));

		// CAMBIOS
        $perfilInfo = $this->unData($perfilInfo);
		// PORCENTAJE
        $total = unserialize($perfilInfo['p_total']);
		//
		return $perfilInfo;
	}
    /*
        loadExtras()
    */
    private function unData($data){
        //
		$data['email'] = $data['usuario_email'];
		$data['nombre'] = $data['name_original'];
		$data['apellido'] = $data['ap_original'];
		$data['avatar'] = $data['w_avatar'];
        //
		$data['unombre'] = $data['usuario_nombre'];
			$data['loadpaises'] = result_array(mysql_query("SELECT * FROM u_paises"));
        //
        return $data;
    }

    function opsegurit(){
     $ar = array(
      1 => 'Todos',
      2 => 'Quienes interactuan conmigo',
      3 => 'Con quienes interactuo',
           	);
    	return $ar;
    }
	
	/***
	***---------------------------------------------------
	*
	*      ACTUALIZAR OPCIONES O _POST
	*
	**----------------------------------------------------
	***/
	
	
	function getCuenta(){
  global $w, $tsWall, $u;
$hace = time();

$fondotod = $w->setSecure($_POST['fon']);
   if($fondotod != $u['p_fondo']){
    $typefon = substr($fondotod,-3); 
    $avatarwwwfon = '../files/uploads/'.$_SESSION['uid'].'_'.$hace.'_32833514.'.$typefon;
    if($typefon != 'jpg' or $typefon != 'png' or $typefon == 'gif'){ return '0: Ocurrio un error al cambiar tu fondo de perfil, Trata de que el enlace termine en: <b>jpg, png o gif</b>.'; }else{}
    copy($fondotod, $avatarwwwfon);
    $fondo = $w->settings['url'].'/files/uploads/'.$_SESSION['uid'].'_'.$hace.'_32833514.'.$typefon;
        mysql_query("INSERT INTO avatar_u(uidw, linkw, datew, avtu_type) VALUES('".$_SESSION['uid']."', '".$fondo."', '".time()."', '3')");
    $tsWall->addavtjkewb('', $fondo, 3);
   }else{ $fondo = $u['p_fondo']; }

$cabeceratod = $w->setSecure($_POST['ape']);
   if($cabeceratod != $u['p_cabecera']){
    $typecab = substr($cabeceratod,-3); 
    if($typecab != 'jpg' or $typecab != 'png' or $typecab == 'gif'){ return '0: Ocurrio un error al cambiar tu portada de perfil, Trata de que el enlace termine en: <b>jpg, png o gif</b>.'; }else{}
    $avatarwwwcab = '../files/uploads/'.$_SESSION['uid'].'_'.$hace.'_3283314.'.$typecab;
    copy($cabeceratod, $avatarwwwcab);
    $cabecera = $w->settings['url'].'/files/uploads/'.$_SESSION['uid'].'_'.$hace.'_3283314.'.$typecab;
    mysql_query("INSERT INTO avatar_u(uidw, linkw, datew, avtu_type) VALUES('".$_SESSION['uid']."', '".$cabecera."', '".time()."', '2')");
    $tsWall->addavtjkewb('', $cabecera, 2);
   }else{ $cabecera = $u['p_cabecera']; }


	$u = array(
    'avtii' => $_POST['wavatari'],
	'ap' => $_POST['ap'],
	'no' => $_POST['n'],
	'cab' => $cabecera,
	'fon' => $fondo,
	'em' => $_POST['em'],
	'pai' => $_POST['pai'],
	'd' => $_POST['nacd'],
	'm' => $_POST['nacm'],
	'a' => $_POST['naca'],
	'sit' => $_POST['sit'],
	'est' => $_POST['sent'],
	'desc' => $_POST['desc'],
	'sex' => $_POST['sex'],
	'al' => $_POST['al'],
	'sdatos' => $_POST['sdatos'],
	'sbworts' => $_POST['sbworts'],
	'sbwortsp' => $_POST['sbwortsp'],
	'stemas' => $_POST['stemas'],
	'snotas' => $_POST['snotas'],
	'spublicpp' => $_POST['spublicpp'],
	'ssnotifiem' => $_POST['ssnotifiem'],
  'adflyuid' => $_POST['adflyuid'] 
	);

	switch ($_POST['type']) {
		case 1:
		case '1':
			if($_POST['n'] and $_POST['ap']){
	mysql_query("UPDATE usuarios SET 
	name_original='".$u['no']."', 
	ap_original='".$u['ap']."', 
	p_cabecera='".$u['cab']."', 
	p_fondo='".$u['fon']."', 
	usuario_email='".$u['em']."', 
	pais='".$u['pai']."', 
	nac_dia='".$u['d']."', 
	nac_mes='".$u['m']."', 
	nac_anio='".$u['a']."', 
	p_sitio='".$u['sit']."', 
	p_estado='".$u['est']."', 
	descripcion='".$u['desc']."', 
	user_sexo='".$u['sex']."', 
  user_adfly='".$u['adflyuid']."',
	alias='".$u['al']."' WHERE usuario_id='".$_SESSION['uid']."'");
		return '1: Datos actualizados correctamente.';
		}else{ return '0: porfavor rellena los datos.'; }
    break;
    case 2:
    case '2':
      $data['s'] = mysql_num_rows(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$_SESSION['uid']."'"));
       if($data['s'] == 0 or $data['s'] < 0){
       mysql_query("INSERT INTO segurityw(s_uid, sp_datos, sp_bworts, sp_bwortsp, sp_temas, sp_notas, sp_publicpp) VALUES(
        '".$_SESSION['uid']."',
        '".$u['sdatos']."',
        '".$u['sbworts']."',
        '".$u['sbwortsp']."',
        '".$u['stemas']."',
        '".$u['snotas']."',
        '".$u['spublicpp']."',
       	)");
       	return '1: Datos actualizados correctamente.';
       }else{
       mysql_query("UPDATE segurityw SET 
       sp_datos='".$u['sdatos']."',
       sp_bworts='".$u['sbworts']."',
       sp_bwortsp='".$u['sbwortsp']."',
       sp_temas='".$u['stemas']."',
       sp_notas='".$u['snotas']."',
       sp_publicpp='".$u['spublicpp']."'
       WHERE s_uid='".$_SESSION['uid']."'
       	");
       	return '1: Datos actualizados correctamente.';
       }
       break;
       case 3:
       case '3':
      $data['s'] = mysql_num_rows(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$_SESSION['uid']."'"));
       if($data['s'] == 0 or $data['s'] < 0){
       mysql_query("INSERT INTO segurityw(s_uid,ss_notifiem) VALUES(
       	'".$_SESSION['uid']."',
        '".$u['ssnotifiem']."'
       	)");
       	return '1: Datos actualizados correctamente.';
       }else{
       mysql_query('UPDATE segurityw SET ss_notifiem=\''.$u['ssnotifiem'].'\' WHERE s_uid=\''.$_SESSION['uid'].'\'');
       	return '1: Datos actualizados correctamente.';
       }
       break;
       case '':
       return '0: Define una acción';
       break;
   }
	}

	
	/*
	*-----------------------------------
	*          FIN FUNCTION
	*-----------------------------------
	*/
	
    /*
        loadBloqueos()
    */
    function loadBloqueos(){
        global $tsUser;
        //
        $query = mysql_query('SELECT b.*, u.user_name FROM u_miembros AS u LEFT JOIN u_bloqueos AS b ON u.user_id = b.b_auser WHERE b.b_user = \''.(int)$tsUser->uid.'\'');
        $data = result_array($query);
        
        //
        return $data;
    }

}