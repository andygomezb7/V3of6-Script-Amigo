<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');

/*
*-----------------------------------------------------------------------
*        CARGAR PERFILES Y MAS COSAS
*-----------------------------------------------------------------------
*/

class wprofile{

// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new wprofile();
    	}
		return $instance;
	}

    /*
    *  @name      loadProfile
    *  @access    Public
	*  @uses      Load Profile
	*  @param     int
	*  @return    array
    */
    public function loadProfile($user_id = 0){
		global $wuser;
		//
		if(empty($user_id)) $user_id = $wuser->uid;
		//
		$query = mysql_query('SELECT * FROM usuarios WHERE usuario_id = \''.$user_id.'\' LIMIT 1');
		$perfilInfo = mysql_fetch_assoc($query);
        
		//
		return $perfilInfo;
	}
    /*
             LOAD HEADING INFO
	*/
		function loadHeadInfo($user_id){
		global $wuser, $w;
		// INFORMACION GENERAL
		$query = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$user_id."'");
		$data = mysql_fetch_assoc($query);
        //Definimos Variables
		$data['usuario_nombre'] = $w->setSecure($data['usuario_nombre'],true);
		$data['descripcion'] = $w->setSecure($data['descripcion'],true);
		if(!$data['p_cabecera']){ $data['p_cabecera'] = $w->settings['direccion_url'].'/images/avatar/port.jpg'; }else{$data['p_cabecera'] = $w->setSecure($data['p_cabecera'],true); }
		if(!$data['w_avatar']){ $data['w_avatar'] = $w->settings['direccion_url'].'/images/avatar/group.png'; }else{ $data['w_avatar'] = $w->setSecure($data['w_avatar'],true); }
		$data['name_original'] = $w->setSecure($data['name_original'],true);
		$data['ap_original'] = $w->setSecure($data['ap_original'],true);
		$pais['nana'] = mysql_fetch_assoc(mysql_query("SELECT * FROM u_paises WHERE p_prefijo='".$data['pais']."'"));
        $data['pais'] = $pais['nana']['p_opcion'];
		
		$data['stats']['notes'] = mysql_num_rows(mysql_query("SELECT * FROM noticia WHERE id_usuario='".$data['usuario_id']."'"));
	 $data['stats']['bworts'] = mysql_num_rows(mysql_query("SELECT * FROM bworts WHERE idusuario='".$data['usuario_id']."'"));
		
		//Quienes interactuan con el TOTAL
		$q1 = mysql_num_rows(mysql_query('SELECT * FROM suscriptores WHERE id_receptor=\''.$data['usuario_id'].'\''));
		//Con quienes Interactua el TOTAL
		$q2 = mysql_num_rows(mysql_query('SELECT * FROM suscriptores WHERE id_emisor=\''.$data['usuario_id'].'\''));
		//posts en La new TOTAL
		$q3 = mysql_num_rows(mysql_query('SELECT * FROM noticia WHERE id_usuario=\''.$data['usuario_id'].'\''));
		//Posts en la new/comunidades TOTAL
		$q4 = mysql_num_rows(mysql_query('SELECT * FROM c_temas WHERE t_autor=\''.$data['usuario_id'].'\''));
		// MEDALLAS
		$q5 = mysql_num_rows(mysql_query("SELECT * FROM admin_medals_assign WHERE ma_user='".$data['usuario_id']."'"));
		//Inteacciones para el
		$data['stats']['interacciones'] = $q1;
		//Interacciones de el
		$data['stats']['interaccionesd'] = $q2;
        //Posts totales en la new
		$data['stats']['post_new'] = $q3;
		//Posts totales en la new/comunidades
		$data['stats']['post_comun'] = $q4;
		// MEDALLAS asignadas
		$data['stats']['medal'] = $q5;
		 $queryrango = mysql_query("SELECT * FROM rangos WHERE id_rango='".$data['rango']."'");
	 $data['derechos'] = mysql_fetch_assoc($queryrango);

	 		$data['s'] = mysql_fetch_assoc(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$data['usuario_id']."'"));

		
		//
		return $data;
	}
	
	/*
	*-----------------------------------------------------------------
	*                         LOAD WALL
	*-----------------------------------------------------------------
	*/
	
	function loadWall($user_idd){
	global $w;
	
	$query = mysql_query("SELECT * FROM bworts WHERE muro='".$user_idd."'");
	$data = mysql_fetch_assoc($query);
	
	$q1 = mysql_query("SELECT u.*, b.* FROM usuarios AS u LEFT JOIN bworts AS b ON b.idusuario = u.usuario_id WHERE b.idusuario=\"".$user_idd."\" ");
	$lasWall = result_array($q1);
	
	  return $lasWall;
	}
	
	function interacciones($user_id, $limit, $i){
    if($limit > 1){
	$f = "LIMIT ".$limit;
	}else{
	$f = "";
	}
			//Hacemos WHILE'S 
	$qq75 = mysql_query('SELECT s.*, c.* FROM suscriptores AS s LEFT JOIN usuarios AS c ON s.id_emisor = c.usuario_id WHERE s.id_receptor=\''.$user_id.'\' '.$f.'');
	$data = result_array($qq75);
	
	return $data;
	}
	
/*
*--------------------------------------------------------------------------------------------------------------
*                                                 TABS PROFILE
*--------------------------------------------------------------------------------------------------------------
*/

function tabs($u, $type){
switch ($type) {
	    case 'notas':
        $query = mysql_query("SELECT p.*, c.* FROM noticia AS p LEFT JOIN categorias AS c ON p.categoria = c.id_categoria LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id WHERE p.id_usuario='".$u."'");
	    break;
	    case 'temas':
        $query = mysql_query('SELECT c.*, f.*, cc.*, u.* FROM c_temas AS c LEFT JOIN c_comunidades AS f ON c.t_comunidad = f.c_id LEFT JOIN c_categorias AS cc ON f.c_categoria = cc.cid LEFT JOIN usuarios AS u ON c.t_autor = u.usuario_id WHERE t_autor=\''.$u.'\' ORDER BY t_fecha DESC');
		break;
		case 'interacciones':
		$query = mysql_query("SELECT s.*, u.* FROM suscriptores AS s LEFT JOIN usuarios AS u ON s.id_emisor = u.usuario_id WHERE s.id_receptor ='".$u."'");
		break;
		case 'interactuo':
		$query = mysql_query("SELECT s.*, u.* FROM suscriptores AS s LEFT JOIN usuarios AS u ON s.id_receptor = u.usuario_id WHERE s.id_emisor='".$u."'");
	    break;	
	    case 'logros':
	    $query = mysql_query("SELECT a.*, m.* FROM admin_medals_assign AS a LEFT JOIN admin_medals AS m ON a.m_id = m.m_id WHERE a.ma_user='".$u."'");	
	     break;
	     case 'images':
         $query = mysql_query("SELECT * FROM rft_uploads WHERE up_user='".$u."' AND up_ftype='png' OR up_ftype='jpg' OR up_ftype='jpeg' OR up_ftype='gif' ");
         $query2 = mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.idusuario='".$u."' AND b.img != '' or b.img != 'undefined' ");
	     break;
}
$qer = result_array($query);
$qer['otro'] = $query2;
return $qer;
}

/// FIN
}
?>