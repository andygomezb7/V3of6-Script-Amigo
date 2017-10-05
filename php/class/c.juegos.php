<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Modelo para el control de los juegos
 *
 * @name    c.juegos.php
 * @author  PHPost Team
 * By Kmario19
 */
class tsJuegos {

   /**
     * @name getInstanse
     * @access public
     * @info CREAR INSTANCIA DE LA CLASE
     */
    public static function &getInstance(){
		static $instance;
		if( is_null($instance) ){
			$instance = new tsJuegos();
    	}
		return $instance;
	}
	
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*\
								PUBLICAR JUEGOS
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
	/*
		newjuego()
	*/
	function newJuego(){
		global $w, $wuser, $tsWeb, $tsActividad;
		//
		$jData = array(
			'titulo' => $w->setSecure($_POST['titulo']),
			'url' => $w->setSecure($_POST['url']),
			'img' => $w->setSecure($_POST['img']),
			'desc' => $w->setSecure($_POST['desc']),
			'cat' => intval($_POST['cat']),
			'closed' => empty($_POST['closed']) ? 0 : 1,
			'visitas' => empty($_POST['visitas']) ? 0 : 1,
		);
		// COMPROBAR CAMPOS
		if(!empty($jData['titulo']) && !empty($jData['url']) && !empty($jData['img']) && !empty($jData['cat'])) {
			// ANTI FLOOD original (?)

			// INSERTAMOS
			$_SERVER['REMOTE_ADDR'] = $_SERVER['X_FORWARDED_FOR'] ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
			if(!filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)) { die('0: Su ip no se pudo validar.'); }
			if(mysql_query('INSERT INTO `j_juegos` (j_title, j_date, j_description, j_imagen, j_url, j_cat, j_user, j_closed, j_visitas, j_ip) VALUES (\''.$jData['titulo'].'\', \''.time().'\', \''.$jData['desc'].'\', \''.$jData['img'].'\',  \''.$jData['url'].'\',  \''.$jData['cat'].'\', \''.$_SESSION['uid'].'\', \''.$jData['closed'].'\', \''.$jData['visitas'].'\', \''.$_SERVER['REMOTE_ADDR'].'\')')) {
				$jid = mysql_insert_id();
				$jpuntosUser = $u['user_jpuntos'] + $w->settings['config_jpuntos'];
				mysql_query("UPDATE usuarios SET user_jpuntos='".$jpuntosUser."' WHERE usuario_id='".$_SESSION['uid']."'");
				// AGREGAR AL MONITOR DE LOS USUARIOS QUE ME SIGUEN
				$tsWeb->getNotifis($_SESSION['uid'], 24, $jid);
				// ACTIVIDAD
				
				//
				return $jid;
			} else die(mysql_error());			
		} else return '0: Completa los datos.';
	}
 

 /*
        getJuegoEdit()
    */
    function getJuegoEdit() {
        global $w, $wuser;
        //
        $jid = $w->setSecure($_GET['id']);
        // DATOS
		$query = mysql_query('SELECT * FROM `j_juegos` WHERE juego_id = \''.(int)$jid.'\'');
        $data = mysql_fetch_assoc($query);
        
        //
        if(!empty($data['j_user'])){
            // ES EL DUEÑO DEL JUEGO?
            if($data['j_user'] == $_SESSION['uid'] || $u['rango']){
                return $data;
            } else return 'El juego que intentas editar no es tuyo.';
        } else return 'El juego que intentas editar no existe.';
    }
    /*
        editJuego()
    */
    function editJuego(){
        global $w, $wuser, $tsMonitor, $tsActividad;
        //
        $jid = (int)$_GET['id'];
        // DATOS
        $query = mysql_query('SELECT j.juego_id, j.j_title, j.j_user, u.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON j.j_user = u.usuario_id WHERE j.juego_id = \''.(int)$jid.'\'');
        $data = mysql_fetch_assoc($query);
        
        //
        if(!empty($data['j_user'])){
            // ES EL DUEÑO DEL JUEGO?
            if($data['j_user'] == $_SESSION['uid'] || $u['rango']){
        		$jData = array(
                    'titulo' => $w->setSecure($_POST['titulo']),
                    'desc' => $w->setSecure($_POST['desc']),
                    'img' => $w->setSecure($_POST['img']),
					'cat' => intval($_POST['cat']),
                    'privada' => empty($_POST['privada']) ? 0 : 1,
                    'closed' => empty($_POST['closed']) ? 0 : 1,
					'visitas' => empty($_POST['visitas']) ? 0 : 1,
					'razon' => empty($_POST['razon']) ? 'undefined' : $w->setSecure($_POST['razon'], true),
                );
                // UPDATES
				mysql_query('UPDATE `j_juegos` SET j_title = \''.$jData['titulo'].'\', j_description = \''.$jData['desc'].'\', j_imagen = \''.$jData['img'].'\', j_cat = \''.$jData['cat'].'\',  j_closed = \''.$jData['closed'].'\', j_visitas = \''.$jData['visitas'].'\' WHERE juego_id = \''.(int)$jid.'\'');
				
				if($data['j_user'] != $_SESSION['uid']){
				$aviso = 'Hola <b>'.$wuser->loadUserN($data['j_user'])."</b>\n\n Te informo que tu juego <a href=".$w->settings['direccion_url'].'/juegos/'.$data['user_name'].'/'.$data['juego_id'].'/'.$w->wrecorte($data['j_title']).'.html'."><b>".$data['j_title']."</b></a> ha sido editado por <a href=\"#\" class=\"hovercard\" uid=\"".$_SESSION['uid']."\">".$u['usuario_nombre']."</a>\n\n Causa: <b>".$jData['razon']."</b>.\n\n Muchas gracias por entender!";
                $tsMonitor->setAviso($data['j_user'], 'Juego editado', $aviso, 2);				
				}
				// REDIRIGIMOS
                $url = $w->settings['direccion_url'].'/juegos/'.$jid.'/'.$w->wrecorte($jData['titulo']).'.html';
                //
                $w->redirectTo($url);
            } else return 'El juego que intentas editar no es tuyo.';
        } else return 'El juego que intentas editar no existe.';
    }
/*
        delJuego()
    */
    function delJuego(){
        global $w, $wuser;
        //
        $jid = $w->setSecure($_POST['jid']);
        // DATOS
		$query = mysql_query('SELECT `j_user` FROM `j_juegos` WHERE juego_id = \''.(int)$jid.'\'');
        $data = mysql_fetch_assoc($query);
        
        //
        if(!empty($data['j_user'])){
            // ES EL DUEÑO DEL JUEGO?
            if($data['j_user'] == $_SESSION['uid'] || $u['rango']){
			    if(mysql_query('DELETE FROM j_juegos WHERE juego_id = \''.(int)$jid.'\'')){
                    // BORRAMOS LOS COMENTARIOS
					mysql_query('DELETE FROM `j_comentarios` WHERE c_juego_id = \''.(int)$jid.'\'');
					// BORRAMOS LOS FAVORITOS
					mysql_query('DELETE FROM `j_favoritos` WHERE fav_juego = \''.(int)$jid.'\'');
					// BORRAMOS LOS VOTOS
					mysql_query('DELETE FROM `j_votos` WHERE v_juego_id = \''.(int)$jid.'\'');
                    return '1: OK';
                } else return '0: Ocurri&oacute; un error al intentar borrar';
            } else return '0: Este no es tu juego.';
        } else return '0: El juego no existe.';
    }

    /*
        getHomeJuegos()
    */
 function getHomeJuegos(){
        global $w, $wuser;
        //	
	$query = 'SELECT j.juego_id, j.j_title, j.j_imagen, j.j_status, u.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE j.j_status = \'0\' ORDER BY RAND() ASC LIMIT 5';
        $data['data'] = result_array(mysql_query($query));
        
	$q1 = mysql_fetch_row(mysql_query('SELECT COUNT(u.usuario_nombre) AS c FROM usuarios AS u LEFT JOIN j_comentarios AS c ON u.usuarios_id = c.c_user WHERE c.c_juego_id = \''.(int)$juego_id.'\' && c.c_status = \'0\' '));
	$data['juego_comments'] = $q1[0];
        //
        return $data;
    }

    /*
        getLastJuegos()
    */
    function getLastJuegos(){
        global $w, $wuser;
        //
		$cat = $w->setSecure($_GET['cat']);
		if(!empty($cat)) {
			$cat = mysql_fetch_assoc(mysql_query('SELECT cat_id, cat_title FROM j_categorias WHERE LOWER(cat_img) = \''.$cat.'\' LIMIT 1'));			
			$data['cat'] = $cat['cat_title'];
			$cat = ' AND j_cat = \''.$cat['cat_id'].'\' ';
		} else $cat = '';
		//
	$max = 15; // MAXIMO A MOSTRAR
	$limit = $w->setPageLimit($max, true);	
	// PAGINAS
	$query = mysql_query('SELECT COUNT(j.juego_id) FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE juego_id > \'0\' AND j.j_status = \'0\' '.$cat);
	list ($total) = mysql_fetch_row($query);
	$data['total'] = $total;	
	$data['pages'] = $w->pageIndex($w->settings['direccion_url']."/juegos/?",$_GET['s'],$total, $max);
        //
        
	$query = 'SELECT j.juego_id, j.j_title, j.j_date, j.j_description, j.j_imagen, j.j_hits, j.j_votos_pos, j.j_url, j.j_status, u.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE juego_id > \'0\' AND j.j_status = \'0\' '.$cat.' ORDER BY j.juego_id DESC LIMIT '.$limit;
        $data['data'] = result_array(mysql_query($query)); 
        return $data;
    }

	/*
		getMostJuegos()
    */
	function getMostJuegos(){
		global $w, $wuser;
		//
		$query = mysql_query('SELECT j.juego_id, j.j_user, j.j_hits, j.j_title, j.j_imagen, j.j_date, j.j_url, u.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE j.j_status = \'0\' ORDER BY j.j_hits DESC LIMIT 6');    
		//
		$data = result_array($query);
		//
		return $data;
   }
	 /*
        getLastComments()
    */
    function getLastComments(){
        global $wuser, $w;
        //
        $query = mysql_query('SELECT c.cid, c.c_date, c.c_user, j.juego_id, j.j_title, u.* FROM j_comentarios AS c LEFT JOIN j_juegos AS j ON c.c_juego_id = j.juego_id LEFT JOIN usuarios AS u ON c.c_user = u.usuario_id WHERE j.j_status = \'0\' ORDER BY c.c_date DESC LIMIT 10');
        $data = result_array($query);
        
        //
        return $data;
    }
      /*
        getJuegos($user_id)
    */
    function getJuegos($user_id){
        global $w, $wuser;
        //
        $query = 'SELECT j.juego_id, j.j_title, j.j_hits, j.j_votos_pos, j.j_date, j.j_description, j.j_imagen, j.j_url, j.j_status, u.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE j.j_user = \''.(int)$user_id.'\' && j.j_status = \'0\' ORDER BY j.juego_id DESC';
        // PAGINAR
        $total = mysql_num_rows(mysql_query($query));
        $pages = $w->getPagination($total, 12);
        $data['pages'] = $pages;
        $data['total'] = $total;
        //
        $data['data'] = result_array(mysql_query($query.' LIMIT '.$pages['limit']));        
        //
        return $data;
    }
	/*
        getJuego()
    */
    function getJuego(){
        global $w, $wuser;
        //
        $jid = $_GET['jid'];
        // MORE JUEGO
        $query = mysql_query('SELECT j.*,u.*, r.*, c.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user LEFT JOIN rangos AS r ON u.rango = r.id_rango LEFT JOIN j_categorias AS c ON j.j_cat = c.cat_id WHERE j.juego_id = \''.$jid.'\' AND j.j_status = \'0\' LIMIT 1');
        $data['juego'] = mysql_fetch_assoc($query);
        
        $q1 = mysql_fetch_row(mysql_query('SELECT COUNT(cid) AS cj FROM j_comentarios WHERE c_user = \''.$data['juego']['usuario_id'].'\''));
		$q2 = mysql_fetch_row(mysql_query('SELECT COUNT(juego_id) AS j FROM j_juegos WHERE j_user = \''.$data['juego']['j_user'].'\' && j_status = \'0\''));
		$q3 = mysql_fetch_row(mysql_query('SELECT COUNT(fav_id) AS j FROM j_favoritos WHERE fav_juego = \''.(int)$jid.'\''));
        $qseguid = mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$data['juego']['usuario_id']."'");
		$data['juego']['user_juego_comments'] = $q1[0];
        $data['juego']['user_juegos'] = $q2[0];
		$data['juego']['favoritos'] = $q3[0];
		$data['juego']['exist'] = mysql_num_rows($query);
        $data['juego']['j_description'] = $w->BBcode($data['juego']['j_description']);
		$data['juego']['v_total'] = $data['juego']['j_votos_pos']+$data['juego']['j_votos_neg'];
		$data['juego']['v_pos'] = number_format(($data['juego']['j_votos_pos']/$data['juego']['v_total'])*100, 0);
		$data['juego']['v_neg'] = number_format(($data['juego']['j_votos_neg']/$data['juego']['v_total'])*100, 0);
		$data['juego']['user_seguidores'] = mysql_num_rows($qseguid);
        
        include('../ext/datos.php');
        $pais = $data['juego']['user_pais'];
        $data['juego']['user_pais'] = array($pais, $tsPaises[$pais]);
        // FOLLOW
		$data['juego']['follow'] = mysql_num_rows(mysql_query('SELECT `follow_id` FROM `u_follows` WHERE f_user = \''.$_SESSION['uid'].'\' AND f_id = \''.(int)$data['juego']['j_user'].'\' AND f_type = \'1\' LIMIT 1'));
        
		// FAVORITOS
        $query = mysql_query('SELECT j.fav_fecha, u.usuario_id, u.usuario_nombre, u.w_avatar FROM usuarios AS u LEFT JOIN j_favoritos AS j ON j.fav_user = u.usuario_id WHERE fav_juego = \''.(int)$jid.'\' LIMIT 15');
        $data['favoritos'] = result_array($query);
        
        // ULTIMOS JUEGOS
        $query = mysql_query('SELECT j.juego_id, j.j_title, j.j_imagen, j.j_date, j.j_status, j.j_url, u.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE j.j_user = \''.$data['juego']['j_user'].'\' AND j.j_status = \'0\' ORDER BY j.juego_id DESC LIMIT 6');
        $data['last'] = result_array($query);
        
        // COMENTARIOS
        $query = mysql_query('SELECT c.*, u.* FROM j_comentarios AS c LEFT JOIN usuarios AS u ON c.c_user = u.usuario_id WHERE c.c_juego_id = \''.(int)$jid.'\' ORDER BY c.c_date ASC');
        $comments = result_array($query);
        foreach($comments as $key => $val){
        $val['c_body'] = $w->BBcode($val['c_body']);
        $data['comments'][] = $val;
        }
        $data['juego']['j_comments'] = count($comments);
        
		//VISITANTES RECIENTES
		if($data['juego']['j_visitas']){
		$data['visitas'] = result_array(mysql_query('SELECT j.*, u.* FROM w_visitas AS j LEFT JOIN usuarios AS u ON j.user = u.usuario_id WHERE j.for = \''.(int)$jid.'\' && j.type = \'4\' && j.user > 0 ORDER BY j.date DESC LIMIT 15'));
		}
		// FAVORITOS
		$fav = mysql_fetch_assoc(mysql_query('SELECT fav_id FROM j_favoritos WHERE fav_juego = \''.(int)$jid.'\' AND fav_user = \''.$_SESSION['uid'].'\' LIMIT 1'));
		if($fav['fav_id']) {
			$data['juego']['myfav'] = 1;
		} else {
			$data['juego']['myfav'] = 0;
		}
        // UPDATES
		$visitado = mysql_num_rows(mysql_query('SELECT id FROM `w_visitas` WHERE `for` = \''.(int)$jid.'\' && `type` = \'4\' && '.$_SESSION['uid'] ? '(`user` = \''.$_SESSION['uid'].'\' OR `ip` LIKE \''.$_SERVER['REMOTE_ADDR'].'\'' : '`ip` LIKE \''.$_SERVER['REMOTE_ADDR'].'\' LIMIT 1'));
		if($_SESSION['uid'] && $visitado == 0) {
			mysql_query('INSERT INTO w_visitas (`user`, `for`, `type`, `date`, `ip`) VALUES (\''.$_SESSION['uid'].'\', \''.(int)$jid.'\', \'4\', \''.time().'\', \''.$_SERVER['REMOTE_ADDR'].'\')');
			mysql_query('UPDATE j_juegos SET j_hits = j_hits + 1 WHERE juego_id = \''.(int)$jid.'\' AND j_user != \''.$_SESSION['uid'].'\'');		
		}else{
		mysql_query('UPDATE `w_visitas` SET `date` = \''.time().'\', ip = \''.$_SERVER['REMOTE_ADDR'].'\' WHERE `for` = \''.(int)$jid.'\' && `type` = \'4\'');
		}
		if( !$_SESSION['uid'] && !$visitado) {
			mysql_query('INSERT INTO w_visitas (`user`, `for`, `type`, `date`, `ip`) VALUES (\'0\', \''.(int)$jid.'\', \'4\', \''.time().'\', \''.$_SERVER['REMOTE_ADDR'].'\')');
			mysql_query('UPDATE j_juegos SET j_hits = j_hits + 1 WHERE juego_id = \''.(int)$jid.'\'');
		}
		//
        return $data;
    }
	
	/*
		getCategorias
	*/
	function getCategorias() {
		global $w;
		$query = mysql_query('SELECT * FROM j_categorias ORDER BY cat_title');
		$data = result_array($query);
		return $data;
	}
	
	/*
		Total juegos de la categoria
	*/
	function cat_total($cid) {
		$cid = intval($cid);
		$total = mysql_fetch_row(mysql_query('SELECT COUNT(juego_id) FROM j_juegos WHERE j_status = 0 AND j_cat = '.(int)$cid));
		return $total[0];
	}
	 
	/*
        votarJuego()
    */
    function votarJuego(){
        global $w, $wuser, $tsWeb, $tsActividad;
        // SOLO MIEMBROS
		if($_SESSION['uid']){
			// VOTAR
			$jid = $w->setSecure($_POST['juegoid']);
			$voto = $w->setSecure($_POST['voto']);
			
			if($voto == 'pos'){
			 $voto = 'j_votos_pos = j_votos_pos + 1';
             $type = 1;
			}else{
			 $voto = 'j_votos_neg = j_votos_neg + 1';
             $type = 0;
			}
            //
			$query = mysql_query('SELECT j_user FROM j_juegos WHERE juego_id = \''.(int)$jid.'\'');
			$data = mysql_fetch_assoc($query);
			
			// NO ES MI JUEGO, PUEDO VOTAR
			if($data['j_user'] != $_SESSION['uid']){
				// YA LO VOTE?
				$query = mysql_query('SELECT vid FROM j_votos WHERE v_juego_id = \''.(int)$jid.'\'  AND v_user = \''.$_SESSION['uid'].'\' LIMIT 1');
				$votado = mysql_num_rows($query);
				
				if(empty($votado)){
					// SUMAR VOTO
					mysql_query('UPDATE j_juegos SET '.$voto.' WHERE juego_id = \''.(int)$jid.'\'');
					// INSERTAR EN TABLA
					if(mysql_query('INSERT INTO `j_votos` (`v_juego_id`, `v_user`, `v_type`, `v_date`) VALUES (\''.(int)$jid.'\', \''.$_SESSION['uid'].'\', \''.$type.'\', \''.time().'\')')) {
						// NOTIFICAR AL USUARIO
						$tsWeb->getNotifis($_SESSION['26'], 26, $jid, $data['j_user']);
						$tsActividad->setActividad(26, $jid, $type);
						return '1: Votado';
					} else return '0: ocurrio un error, intentalo m&aacute;s tarde.';
					//
				} return '0: Ya has votado este juego.';
			} else return '0: No puedes votar tu propio juego...';
		} else return '0: Lo sentimos, para poder votar debes estar registrado.';
    }
	
	/************ COMENTARIOS *******************/
	
    /*
        newComentario()
    */
    function newComentario(){
        global $w, $wuser, $tsWeb, $tsActividad;
		$comentario = $w->setSecure(substr($_POST['comentario'],0,1500), true);
		$jid = (int)$_POST['juegoid'];
        /* COMPROVACIONES */
        $tsText = preg_replace('# +#',"",$comentario);
        $tsText = str_replace(array("\n","\t"),"",$tsText);
        if($tsText == '') return '0: El campo <b>Mensaje</b> es requerido para esta operaci&oacute;n';
        /* DE QUIEN ES EL JUEGO */
		$query = mysql_query('SELECT j_user, j_closed FROM j_juegos WHERE juego_id = \''.(int)$jid.'\' LIMIT 1');
		$data = mysql_fetch_assoc($query);		
        //
        $fecha = time();

        if($data['j_user']){
            if($data['j_closed'] != 1 || $data['j_user'] == $_SESSION['uid']){
                // ANTI FLOOD

                //
				$_SERVER['REMOTE_ADDR'] = $_SERVER['X_FORWARDED_FOR'] ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
                if(!filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)) { die('0: Su ip no se pudo validar.'); }
				if(mysql_query('INSERT INTO j_comentarios (c_juego_id, c_user, c_date, c_body, c_ip) VALUES (\''.(int)$jid.'\', \''.$_SESSION['uid'].'\', \''.$fecha.'\', \''.$comentario.'\', \''.$_SERVER['REMOTE_ADDR'].'\')')) {
        		  	$cid = mysql_insert_id();
                    $tsWeb->getNotifis($_SESSION['uid'], 25, $jid, $data['j_user']);
					// NOTIFICAR AL USUARIO
				
					// ACTIVIDAD
                     $tsActividad->setActividad(25, $jid);
        		  	//
        			return array($cid,$w->BBcode($comentario), $fecha, $_POST['auser']);
        		} else return '0: Ocurri&oacute; un error int&eacute;ntalo m&aacute;s tarde.';
            } else return '0: El juego se encuentra cerrado y no se permiten comentarios.';
        } else return '0: El juego no existe.';
   }
    /*
        delComentario()
    */
    function delComentario(){
        global $w, $wuser;
        //
        $cid = (int)$_POST['cid'];
        // DATOS
        $query = mysql_query('SELECT c.cid, c.c_user, j.juego_id, j.j_user FROM j_comentarios AS c LEFT JOIN j_juegos AS j ON c.c_juego_id = j.juego_id WHERE c.cid = \''.(int)$cid.'\' LIMIT 1');
        $data = mysql_fetch_assoc($query);
        
        //
        if(!empty($data['cid'])){
            // ES EL DUEÑO DEL COMENTARIO O TIENE PERMISOS?
            if($data['j_user'] == $_SESSION['uid'] || $$u['rango'] || $data['c_user'] == $_SESSION['uid']){
				if(mysql_query('DELETE FROM j_comentarios WHERE cid = \''.(int)$cid.'\'')){
					 return '1: Borrado';
				} else return '0: Ocurri&oacute; un error, intentalo m&aacute;s tarde.';
            } else return '0: Hmmm... &iquest;Haciendo pruebas?';
        } else return '0: El comentario no existe.';
	}
	
	/************ FAVORITOS *******************/
	
	/*
		AGREGAR A FAVORITOS
	*/
	function add_fav() {
		global $w, $wuser, $tsWeb, $tsActividad;
		$juegoid = intval($_POST['juegoid']);
		//
		$query = mysql_query('SELECT juego_id, j_user, j_title FROM j_juegos WHERE juego_id = \''.(int)$juegoid.'\'');		
		$data = mysql_fetch_assoc($query);
		//
		if(!empty($data['juego_id'])) {
			if($data['j_user'] != $_SESSION['uid']) {
				$q = mysql_fetch_row(mysql_query('SELECT COUNT(fav_id) FROM j_favoritos WHERE fav_juego = \''.(int)$juegoid.'\' AND fav_user ='.$_SESSION['uid'].''));
				if($q[0] == 0) {
					if(mysql_query('INSERT INTO `j_favoritos` (fav_juego, fav_user, fav_fecha) VALUES (\''.(int)$juegoid.'\', \''.$_SESSION['uid'].'\', \''.time().'\')')) {
						$tsWeb->getNotifis($_SESSION['uid'], 27, $juegoid, $data['j_user']);
						$tsActividad->setActividad(27, $juegoid);
						return '1: <b>'.$data['j_title'].'</b> a&ntilde;adido a tus favoritos.';				
					} else return '0: Ocurri&oacute; un error al intentar procesar lo solicitado.';
				} else return '0: Ya has agregado este archivo a favoritos.';
			} else return '0: No puedes agregar tus juegos a favoritos.';
		} else return '0: El juego no existe.';
	}
	
	/* 
		BORRAR FAVORITOS [SOLO EL AUTOR]
	*/
	function del_fav(){
		global $w, $wuser;
		//
		$favid = $w->setSecure($_POST['favid']);
		// CONSULTAR
		$query = mysql_query('SELECT fav_id, fav_user FROM j_favoritos WHERE fav_juego = \''.(int)$favid.'\' AND fav_user = \''.$_SESSION['uid'].'\'');
		$data = mysql_fetch_assoc($query);
		// ES MIO O TIENE PERMISOS
		if(!empty($data['fav_id'])){
			if($data['fav_user'] == $_SESSION['uid']) {
				if(mysql_query('DELETE FROM j_favoritos WHERE fav_juego = \''.(int)$favid.'\'')) {
					return '1: Favorito removido con exito.';
				} else return '0: Ocurri&oacute; un error al intentar procesar lo solicitado.';
			} else return '0: Lo que intentas hacer no est&aacute; permitido.';
		} else return '0: El favorito no existe o ya lo eliminaste.';
	}
	
	/*
		FAVORITOS DEL AUTOR
	*/
	function getFavs() {
		global $w, $wuser;
		//
		$query = 'SELECT j.juego_id, j.j_title, j.j_hits, j.j_votos_pos, j.j_date, j.j_imagen, j.j_url, u.* FROM j_juegos AS j LEFT JOIN j_favoritos AS f ON f.fav_juego = j.juego_id LEFT JOIN usuarios AS u ON u.usuario_id = j.j_user WHERE f.fav_user = \''.$_SESSION['uid'].'\' AND j.j_status = \'0\' ORDER BY j.juego_id DESC';
        // PAGINAR
        $total = mysql_num_rows(mysql_query($query));
        $pages = $w->getPagination($total, 12);
        $data['pages'] = $pages;
        $data['total'] = $total;
        //
        $data['data'] = result_array(mysql_query($query.' LIMIT '.$pages['limit']));        
        //
        return $data;
	}
	
	/************ TOPS *******************/
	
	function getTopJuegos(){
		// VISITAS
        $query = mysql_query('SELECT juego_id, j_title, j_visitas, cat_title, cat_img FROM j_juegos LEFT JOIN j_categorias ON cat_id = j_cat WHERE j_visitas > 0 ORDER BY j_visitas DESC LIMIT 10');
        $array['visitas'] = result_array($query);
        
        // VOTOS POSITIVOS
        $query = mysql_query('SELECT juego_id, j_title, j_votos_pos, cat_title, cat_img FROM j_juegos LEFT JOIN j_categorias ON cat_id = j_cat WHERE j_votos_pos > 0 ORDER BY j_votos_pos DESC LIMIT 10');
        $array['votos'] = result_array($query);
        
		// COMENTARIOS
        $query = mysql_query('SELECT COUNT(c.c_juego_id) AS total, j.juego_id, j.j_title, j.j_visitas, i.cat_title, i.cat_img  FROM j_juegos AS j LEFT JOIN j_comentarios AS c ON c.c_juego_id = j.juego_id LEFT JOIN j_categorias AS i ON i.cat_id = j.j_cat GROUP BY c.c_juego_id ORDER BY total DESC LIMIT 10');
		$array['comentarios'] = result_array($query);
		
		// FAVORITOS
        $query = mysql_query('SELECT COUNT(f.fav_juego) AS total, j.juego_id, j.j_title, j.j_visitas, i.cat_title, i.cat_img FROM j_juegos AS j LEFT JOIN j_favoritos AS f ON f.fav_juego = j.juego_id LEFT JOIN j_categorias AS i ON i.cat_id = j.j_cat GROUP BY f.fav_juego ORDER BY total DESC LIMIT 10');
		$array['favoritos'] = result_array($query);        
        //
        return $array;
    }


}