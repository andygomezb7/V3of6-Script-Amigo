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

	$u = array(
	'ap' => $w->setSecure($_POST['ap']),
	'no' => $w->setSecure($_POST['n']),
	'em' => $w->setSecure($_POST['em']),
	'pai' => $w->setSecure($_POST['pai']),
	'd' => $w->setSecure($_POST['nacd']),
	'm' => $w->setSecure($_POST['nacm']),
	'a' => $w->setSecure($_POST['naca']),
	'sit' => $w->setSecure($_POST['sit']),
	'est' => $w->setSecure($_POST['sent']),
	'desc' => $w->setSecure($_POST['desc']),
	'sex' => $w->setSecure($_POST['sex']),
	'al' => $w->setSecure($_POST['al']),
  'col' => $w->setSecure($_POST['co']),
	'sdatos' => $w->setSecure($_POST['sdatos']),
	'sbworts' => $w->setSecure($_POST['sbworts']),
	'sbwortsp' => $w->setSecure($_POST['sbwortsp']),
	'stemas' => $w->setSecure($_POST['stemas']),
	'snotas' => $w->setSecure($_POST['snotas']),
	'spublicpp' => $w->setSecure($_POST['spublicpp']),
	'ssnotifiem' => $w->setSecure($_POST['ssnotifiem']),
  'smsg' => $w->setSecure($_POST['smsg']),
  'adflyuid' => $w->setSecure($_POST['adflyuid']), 
	);
  $typeregi = $w->setSecure($_POST['tyyy']);
	switch ($typeregi) {
	case 1:
	case '1':
  $mailexist = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario_id!='".$_SESSION['uid']."' AND usuario_email='".$u['em']."'"));
	if(!$_POST['n'] or !$_POST['ap']){
    return '0: porfavor rellena los datos.';
  }elseif($mailexist >= 1){
    return '0: Este correo ya esta en uso.';
  }else{
	mysql_query("UPDATE usuarios SET 
	name_original='".$u['no']."', 
	ap_original='".$u['ap']."', 
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
  color='".$u['col']."',
	alias='".$u['al']."' WHERE usuario_id='".$_SESSION['uid']."'");
	return '1: Datos actualizados correctamente.';
	}
    break;
    case 2:
    case '2':
    $data['s'] = mysql_num_rows(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$_SESSION['uid']."'"));
    if($data['s'] == 0 or $data['s'] < 0){
    mysql_query("INSERT INTO segurityw(s_uid, sp_datos, sp_bworts, sp_bwortsp, sp_temas, sp_notas, sp_publicpp, ss_notifiem, sp_msg) VALUES(
        '".$_SESSION['uid']."',
        '".$u['sdatos']."',
        '".$u['sbworts']."',
        '".$u['sbwortsp']."',
        '".$u['stemas']."',
        '".$u['snotas']."',
        '".$u['spublicpp']."',
        '".$u['ssnotifiem']."',
        '".$u['smsg']."'
    )");
    return '1: Datos actualizados correctamente.';
    }else{
    mysql_query("UPDATE segurityw SET 
       sp_datos='".$u['sdatos']."',
       sp_bworts='".$u['sbworts']."',
       sp_bwortsp='".$u['sbwortsp']."',
       sp_temas='".$u['stemas']."',
       sp_notas='".$u['snotas']."',
       sp_publicpp='".$u['spublicpp']."',
       ss_notifiem='".$u['ssnotifiem']."',
       sp_msg='".$u['smsg']."'
       WHERE s_uid='".$_SESSION['uid']."'
    ");
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

  function armStaticssss($data){
$Statics = array(
'total' => count($data),
'data' => array(
'hr' => array('title' => '1 Hora', 'data' => array()),
'hrs' => array('title' => '5 Horas', 'data' => array()),
'today' => array('title' => 'Hoy', 'data' => array()),
'yesterday' => array('title' => 'Ayer', 'data' => array()),
'week' => array('title' => 'D&iacute;as Anteriores', 'data' => array()),
'month' => array('title' => 'Semanas Anteriores', 'data' => array()),
'old' => array('title' => 'Estadisticas m&aacute;s antiguas', 'data' => array())
)
);
 # PARA CADA VALOR CREAR UNA CONSULTA
foreach($data as $key => $val){
// AGREGAMOS AL ARRAY ORIGINAL
$dato = array_merge($val);
// VARIBALES EXTRAS
$oracion = $this->armOracion($dato);
// DONDE PONERLO?
$ac_date = $this->makeFecha($val['ac_date']);
// PONER
$Statics['data'][$ac_date]['data'][] = $oracion; 
}
return $Statics;
}

function armOracion($data){
$oracion['total'] = $data['u_total'];
return $oracion;
}


     /**
     * @name makeFecha
     * @access private
     * @params int
     * @return string
     */
    private function makeFecha($time){
        # VARIABLES LOCALES
        $tiempo = time() - $time; 
        $dias = round($tiempo / 86400);
        $hrs = round($tiempo / 3600);
        //
        if($hrs <= 1) return 'hr';
        elseif($hrs <= 5) return 'hrs';
        elseif($dias <= 1) return 'today';
        elseif($dias <= 2) return 'yesterday';
        elseif($dias <= 7) return 'week';
        elseif($dias <= 30) return 'month';
        else return 'old';
        #
    }
  
	
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