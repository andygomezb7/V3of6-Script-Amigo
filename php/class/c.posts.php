<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/*
*  Control de Post | Control seccion NEW
*
*  @name      c.posts.php
*  @author    Wortit Developers
*
*/
class tsPosts {
/*  INCIO DE LA CLASS  */

	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsPosts();
    	}
		return $instance;
	}
	
 function cambiar($cadena){
 $cadena = str_replace("'", '"', $cadena);
return $cadena;
}

     /* EXISTE? */

     function not_exist($id, $title, $cat){
     global $w;
     $querycat = mysql_fetch_assoc(mysql_query("SELECT * FROM categorias WHERE wdefined='".$cat."'"));
     $catnm = $querycat['id_categoria'];
     $query = mysql_query("SELECT * FROM noticia WHERE id='".$id."' AND post_wdefined='".$title."' AND categoria='".$catnm."'");
     $num = mysql_num_rows($query);
     if($num >= 1) return 'Ok'; else return 'None';
     }

     /*
	 *----------------------------
	 *  Nuevo Posts | Editar Posts
	 *  @access public
     *  @param string
     *  @return array
	 *
	 */
      function newPost($type, $objeto){
	  global $w, $tsWall, $tsWeb, $tsActividad, $u, $wuser; 
	  
	  // DEFINICIÓN DE DATOS RECIBIDOS
	   $title = $w->setSecure($_POST['title']); // TITULO
	   $text = $this->cambiar($_POST['text']); // TEXTO
	   $tags = $w->setSecure($_POST['tags']); // TAGS
	   $hace = time(); // TIEMPO
	   $banner = $w->setSecure($_POST['imagen']); // PORTADA
	   $url = $w->setSecure($_POST['url']); // FUENTE DE LA NOTA
	   $cat = $w->setSecure($_POST['cat']); // CATEGORIA
	   $seo = $w->wrecorte($w->setSEO($_POST['title']), 74); // SEO OFICIAL
	   $dataNotaVip = $w->setSecure($_POST['vipers']); $dataNoteSticky = $w->setSecure($_POST['sticky']);
	   $postData['vip'] = ($dataNotaVip) ? $dataNotaVip : 0; // ¿ES NOTA V.I.P?
	   $postData['sticky'] = ($dataNoteSticky) ? $dataNoteSticky : 0; // ¿TIENE STICKY?

       // VALIDACIÓN DE DATOS
	   $queryValid20 = mysql_query("SELECT * FROM noticia WHERE titulo='".$title."'");
	   $queryVaalid = mysql_fetch_assoc($queryValid20);
	   $queryValid = mysql_num_rows($queryValid20);
	   $dataCatExist = mysql_num_rows(mysql_query("SELECT * FROM categorias WHERE id_categoria='".$cat."'"));
	   if(!$title){ $v['error'] = '0: Agregale un titlo a tu nota';
	   }elseif(!$text){ $v['error'] = '0: Agregale una descripción a tu nota';
	   }elseif(!$tags){ $v['error'] = '0: Agregale algunas tags a tu nota';
	   }elseif(!$banner){ $v['error'] = '0: Agregale una portada a tu nota';
	   }elseif(!$url){ $v['error'] = '0: Agregale una url(enlace a sitio web/blog) de referencia a tu nota';
	   }elseif(!$cat){ $v['error'] = '0: Selecciona una categoria para tu nota';
	   }elseif($dataCatExist <= 0){ $v['error'] = '0: La categoria que escogiste no existe, prueba otra.';
	   }elseif($queryValid >= 1 && !$objeto && $type != 1){ $v['error'] = '0: Ya existe una nota con el mismo titulo, prueba con otras palabras y evita el repost';
	   }else{
	   	// EJECUCIONES Y AGREGADO DE LA NOTA
	if($type == 1){
		$querInfoEdNot = mysql_query("SELECT * FROM noticia WHERE id='".$objeto."'");
		$objExistNota = mysql_num_rows($querInfoEdNot);
		$fetcthNot = mysql_fetch_assoc($querInfoEdNot);
		if(!$objeto){
			$v['error'] = '0: Objeto no definido';
		}elseif($objExistNota <= 0){
			$v['error'] = '0: La nota no existe';
		}elseif($fetcthNot['id_usuario'] == $wuser->uid || $wuser->admod || $wuser->mod){
		if(mysql_query("UPDATE noticia SET
			titulo = '".$title."', 
			detalle = '".$text."', 
			tags = '".$tags."', 
			banner = '".$banner."', 
			fuente = '".$url."', 
			categoria = '".$cat."', 
			post_wdefined = '".$seo."', 
			post_vip = '".$postData['vip']."', 
			sticky = '".$postData['sticky']."'
			WHERE id='".$objeto."' ")){ 
			if($wuser->admod && $querInfoEdNot['id_usuario'] != $wuser->uid || $wuser->mod && $querInfoEdNot['id_usuario'] != $wuser->uid){
				$tsActividad->setModActividad(82, $objeto);
				$tsWeb->getNotifis($wuser->uid, 63, $objeto, $querInfoEdNot['id_usuario']);
			}else{ $tsActividad->setModActividad(48, $objeto); }
		     $psql = mysql_query('SELECT nombre, wdefined FROM categorias WHERE id_categoria = \''.(int)$_POST['cat'].'\'');
             $q = mysql_fetch_assoc($psql);
             $pCat = $q['wdefined']; 
		     $v['url'] = $w->settings['direccion_url'].'/notas/'.$pCat.'/'.$objeto.'/'.$seo.'.html';
             $v['id'] = $objeto;	
             $v['title'] = $title;
		    $v['error'] = '1:'.$v['url'].'*'.$v['id'].'*'.$v['title']; 
		}else{ $v['error'] = '0: Ocurrio un error, intenta nuevamente.'; }
	}else{
		$v['error'] = '0: No tienes permisos para editar esta nota';
	}
	}else{
	   if(mysql_query("INSERT INTO noticia(titulo, detalle, tags, banner, fuente, categoria, id_usuario, post_wdefined, post_vip, hace, sticky) VALUES('".$title."', '".$text."', '".$tags."', '".$banner."', '".$url."', '".$cat."', '".$wuser->uid."', '".$seo."', '".$postData['vip']."', '".$hace."', '".$postData['sticky']."')")){
	   $postID = mysql_insert_id();
	   
	   // ACTUALIZAR DATOS POR NOTA
	   $wuser->darPuntos($postID, $wuser->puntos['nota'], 2);
       $psql = mysql_query('SELECT nombre, wdefined FROM categorias WHERE id_categoria = \''.(int)$_POST['cat'].'\'');
       $q = mysql_fetch_assoc($psql);
       $pCat = $q['wdefined'];
	   $v['aviso']  = $postID;
	   $this->setnNot($wuser->uid, 17, $postID);
	   $tsActividad->setActividad(17, $postID);
	   $v['url'] = $w->settings['direccion_url'].'/notas/'.$pCat.'/'.$postID.'/'.$seo.'.html';
       $v['id'] = $postID;	
       $v['title'] = $title;
       $v['error'] = '1:'.$v['url'].'*'.$v['id'].'*'.$v['title'];
       }else{ $v['error'] = '0: Ocurrio un error, intenta nuevamente.'; }
   }
	   }		
	   return $v['error'];
/*** FIN DE LA FUNCION ADD newPost(); ***/
	  }

      /*
      *---------------------------
      *        COMENTAR NOTA
      *---------------------------
      */

      function comentar(){
global $w, $tsWeb, $tsActividad, $u, $wuser;
$msgnorm = $w->setSecure($_POST['msg']);
$u = $wuser->uid;
$id = $w->setSecure($_POST['for']);
$cat = $w->setSecure($_POST['cfor']);
$sadfoawnergl = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia WHERE id='".$id."'"));
if($msgnorm){
if(isset($_SESSION['uid'])){
mysql_query("INSERT INTO newcoment (idusuario, idpost, idcat, contenido, fecha, hace) VALUES('".$u."', '".$id."', '".$cat."', '".$msgnorm."', '".date("Y-m-d")."', '".time()."' )");
require_once'../libs/bbcode.inc.php';
$bbcodee = new bbcodee;
$tsWeb->getNotifis($wuser->uid, 22, $id, $sadfoawnergl['id_usuario']);
$tsActividad->setActividad(22, $id);
$this->setNotNotes($id, 40);
return '1: <div class="hidden cO"><div class="floatL HdR"><img src="'.$w->settings['url'].'/thumb/img/62/62/?file='.$wuser->info['w_avatar'].'"></div><div class="floatL CoNt"><div class="UsR">@'.$wuser->nick.' <span class="color_gray size11">hace 1 segundo</span></div> <div class="TxR"><span>'.$bbcodee->start($msgnorm).'</span></div></div></div>';
}else{
return '0: Esta accion es solo usuarios registrados.';
}
}else{ return '0: Escribe algo en tu comentario.'; }
      }

        /*
	  *------------------------------------------------------
	  *        Todo cats
	  *------------------------------------------------------
	  */

        function todCats(){
          $query = mysql_query("SELECT * FROM categorias WHERE game=''");
          $data = result_array($query);

           $i = 0;
           foreach ($data as $key => $v) {
           	$sdfiu = mysql_num_rows(mysql_query("SELECT * FROM noticia WHERE categoria='".$v['id_categoria']."'"));
           $data[$i]['notas'] = $sdfiu;
           $i++;
           }

        	return $data;
        }

        /*
	  *------------------------------------------------------
	  *        NOTIFICAR A LOS SEGUIDORES DE UNA NOTA
	  *------------------------------------------------------
	  */

        function setNotNotes($notaid, $notype){
        global $tsWeb;
	  	$query = mysql_query("SELECT * FROM u_follows WHERE f_id='".$notaid."' AND f_type='1'");
	  			//
		while($row = mysql_fetch_assoc($query)){
        	$tsWeb->getNotifis($_SESSION['uid'], $notType, $notaid, $row['f_user']);
		}
        }

	  /*
	  *------------------------------------------------------
	  *        NOTIFICAR A LOS SEGUIDORES DE UN USUARIO
	  *------------------------------------------------------
	  */

	  function setnNot($autor, $noType, $notaid, $excluir){
	  	global $tsWeb, $wuser;
	  	$query = mysql_query("SELECT id_emisor, id_receptor FROM suscriptores WHERE id_receptor='".$autor."'");
	  			//
		while($row = mysql_fetch_assoc($query)){
        	$tsWeb->getNotifis($wuser->uid, $notType, $notaid, $row['id_emisor']);
		}
	  }
	  
	  /*
	  *---------------------------------------------------
	  *              getEditNote();
	  *           @action Editar Notas
	  *---------------------------------------------------
	  */
	  function getEditNote(){
	 global $w, $tsActividad;
	$queryo = mysql_query("SELECT n.*, c.* FROM noticia AS n LEFT JOIN categorias AS c ON n.categoria = c.id_categoria WHERE id='".$_POST['pes']."'");
	$data = mysql_fetch_assoc($queryo);
	
	   $title = $_POST['title'];
	   // htmlspecialchars();
	   $text = $this->cambiar($_POST['text']);
	   $tags = $_POST['tags'];
	   $banner = $_POST['imagen'];
	   $url = $_POST['url'];
	   $cat = $_POST['cat'];
	   $seo = $w->wrecorte($w->setSEO($_POST['title']), 74);
	   if($_POST['vipers']){ $postData['vip'] = 1; }else{
	   $postData['vip'] = 0;
       }   
	mysql_query("UPDATE noticia SET `post_vip` ='".$postData['vip']."', titulo='".$title."', detalle='".$text."', fuente='".$url."', categoria='".$cat."', banner='".$banner."', tags='".$tags."' WHERE id='".$_POST['pes']."'");
	$tsActividad->setActividad(48, $data['id']);
	return '1: Felicidades!<br> Nota editada Correctamente<br> <a href="'.$w->settings['direccion_url'].'/new/nota/'.$data['wdefined'].'/'.$data['id'].'/'.$data['post_wdefined'].'.html">Ver la nota.</a>';
	  }
	 
	 /*
	 *-------------------------------------
	 *           LoadPosts()
	 *-------------------------------------
	 */
	function loadPosts($type, $obj){
    global $w,$wuser;
      $max = 21; // MAXIMO A MOSTRAR
      $limit = $w->setPageLimit($max, true);

    require_once'../libs/bbcode.inc.php';
	$bbcodee = new bbcodee;

	$query = mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.post_vip='0' AND p.estado='1' AND p.categoria='25' or p.categoria='26' or p.categoria='30' ORDER BY p.id DESC");
	$data = result_array($query);

	$e = 0;
    foreach ($data as $key => $row) {
    $queryrango = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$row['rango']."'"));
	 $data['permisos'] = $queryrango;
    $data[$e]['rangou'] = $data['permisos']['name'];
    $data[$e]['rangocolor'] = $data['permisos']['color'];
    $e++;
    }
    $skldfalsdsd = ($wuser->admod || $wuser->mod) ? "" : "AND p.estado='1'";
    $querytodosT = mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.post_vip='0' ".$skldfalsdsd." ORDER BY p.id");
    $data['Ttodas'] = result_array($querytodosT);
	$apCats = ($type == 2) ? "AND c.wdefined='".$obj."'" : '';
	$apCatsDos = ($type == 2) ? "AND c.nombre='".$obj."'" : '';
	$querytodos = mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.post_vip='0' ".$skldfalsdsd." ".$apCats." ORDER BY p.id DESC LIMIT ".$limit."");
	$data['todas'] = result_array($querytodos);

     $skldfal = ($wuser->admod || $wuser->mod) ? "" : "WHERE estado='1'";
    $i = 0;
    foreach ($data['todas'] as $key => $value){
    $qst = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia ".$skldfal." ORDER BY visitas DESC LIMIT 1"));
    $data['kfj'] = $qst['visitas'];
    $rank =  ($value['visitas']*$value['visitas'])/$data['kfj'];
    $data['todas'][$i]['rank'] = round($rank);
    $data['todas'][$i]['tag_ss'] = explode(',', str_replace(array(', ', ' ,', ' '), ',', $value['tags']));
    $queryrango = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$value['rango']."'"));
	 $data['permisos'] = $queryrango;
    $data['todas'][$i]['rangou'] = $data['permisos']['name'];
    $data['todas'][$i]['rangocolor'] = $data['permisos']['color'];
    $i++;
    }
     // PAGINAS
    $queryes = mysql_query('SELECT COUNT(id) FROM noticia '.$skldfal.' '.$apCatsDos.'');
      list($total) = mysql_fetch_row($queryes);
	$data['todas']['pages'] = $w->pageIndex($w->settings['direccion_url'].'/notas/?',$_GET['s'], $total, $max);

	$query2 = mysql_query("SELECT COUNT(p.id) AS total ,u.*, p.* FROM usuarios AS u LEFT JOIN noticia AS p ON u.usuario_id = p.id_usuario GROUP BY u.usuario_id ORDER BY total DESC LIMIT 10");
	$data['users']  = result_array($query2);

	$query3 = mysql_query("SELECT c.*, u.*, p.*, cc.* FROM newcoment AS c LEFT JOIN usuarios AS u ON u.usuario_id = c.idusuario LEFT JOIN noticia AS p ON c.idpost = p.id LEFT JOIN categorias AS cc ON p.categoria = cc.id_categoria ORDER BY c.id DESC LIMIT 12");
	$data['comments'] = result_array($query3);

    $query4 = mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.post_vip='0' ORDER BY p.visitas DESC LIMIT 12");
	$data['notas'] = result_array($query4);
	
	return $data;
	}
	
	/*
	*-------------------------------------------------------------------
	*                  getLoadPost(); 
	*              :Cargar post por un GET
	*-------------------------------------------------------------------
	*/
	function getLoadPost($id){
	global $w, $u, $wuser;

    require_once'../libs/bbcode.inc.php';
	$bbcodee = new bbcodee;

	$query = mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.id='".$id."'");
	$data = mysql_fetch_assoc($query);
	
    if(!$wuser->is_member){
    $replacement = '<div class="emptyData">Para poder ver los links necesitas estar <a href="'.$w->settings['url'].'/registro"> Registrado </a> . O.. ya tienes cuenta? <a href="'.$w->settings['url'].'/"> Logueate!</a></div>';
    $data[detalle] = preg_replace('/[url[^>]+\]\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$][\/url[^>]+\]/i', $replacement, $data[detalle]);
    }

	$data['tagst'] = explode(',', str_replace(array(', ', ' ,', ' '), ',', $data['tags']));
	$data['detalle'] = $bbcodee->start($w->setSecure($data['detalle']));

	$queryrango = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$data['rango']."'"));
	$data['permisos'] = $queryrango;
    $querypais = mysql_fetch_assoc(mysql_query("SELECT * FROM u_paises WHERE p_prefijo='".$data['pais']."'"));
	$data['pais'] = $querypais['p_opcion'];
	$data['pai'] = $querypais;
	if($data['user_sexo'] == 0){ $data['usuario_sexo'] = "Hombre"; $data['usuario_sexo_icon'] = "male"; }else if($data['user_sexo'] == 1){ $data['usuario_sexo'] = "Mujer"; $data['usuario_sexo_icon'] = "female"; }else{ $data['usuario_sexo'] = "Indefinido"; $data['usuario_sexo_icon'] = 'female'; }
	if($data['w_avatar'] == NULL){ $data['w_avatar'] = $w->settings['direccion_url'].'/images/avatar/group.png'; }else{ $data['w_avatar'] = $data['w_avatar']; }
	$qn = mysql_query("SELECT * FROM noticia WHERE id_usuario='".$data['usuario_id']."'");
	$qc = mysql_query("SELECT * FROM  newcoment WHERE idpost='".$data['id']."'");
	$qcm = mysql_query("SELECT * FROM  newcoment WHERE idusuario='".$data['usuario_id']."'");
	$qst = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia ORDER BY visitas DESC LIMIT 1"));
	// VOTOS GLOBALES
	$qlik = mysql_query("SELECT * FROM me_encanta WHERE idpost='".$data['id']."'");
	$qdislik = mysql_query("SELECT * FROM no_megusta WHERE idpost='".$data['id']."'");
	$favnote = mysql_num_rows(mysql_query("SELECT * FROM n_favoritos WHERE favn_type='1' AND favn_nota='".$data['id']."'"));
	$segnote = mysql_num_rows(mysql_query("SELECT * FROM u_follows WHERE f_type='1' AND f_id='".$data['id']."'"));
	// VOTOS POR USUARIO
	$qlikU = mysql_query("SELECT * FROM me_encanta WHERE idpost='".$data['id']."' AND idusuario='".$wuser->uid."'");
	$qdislikU = mysql_query("SELECT * FROM no_megusta WHERE idpost='".$data['id']."' AND idusuario='".$wuser->uid."'");
	$favnoteU = mysql_num_rows(mysql_query('SELECT * FROM n_favoritos WHERE favn_type="1" AND favn_nota= \''.(int)$data['id'].'\' AND favn_user =\''.(int)$wuser->uid.'\''));
	$segnoteU = mysql_num_rows(mysql_query("SELECT * FROM u_follows WHERE f_user='".$wuser->uid."' AND f_type='1' AND f_id='".$data['id']."'"));

	$data['usuario']['notas'] = mysql_num_rows($qn);
	$data['stats']['coments'] = mysql_num_rows($qc);
	$data['stats']['visitas'] = mysql_num_rows(mysql_query("SELECT * FROM visitas WHERE type='5' AND id_v='".$data['id']."'"));
	// DATOS GLOBALES
	$data['stats']['fav'] = $favnote;
	$data['stats']['seg'] = $segnote;
	$data['stats']['likes'] = mysql_num_rows($qlik);
	$data['stats']['dislikes'] = mysql_num_rows($qdislik);
	// DATOS DE USUARIO
	$data['stats']['favU'] = $favnoteU;
	$data['stats']['segU'] = $segnoteU;
	$data['stats']['likesU'] = mysql_num_rows($qlikU);
	$data['stats']['dislikesU'] = mysql_num_rows($qdislikU);
	// EXTRAS
	$data['kfj'] = $qst['visitas'];
	$data['statics']['visitas'] = $data['visitas']*$data['visitas']/$data['kfj'];
	$data['usuario']['coments'] = mysql_num_rows($qcm);
	$data['usuario']['puntuo'] = mysql_num_rows(mysql_query("SELECT * FROM n_puntos WHERE pu_type='1' && pu_user='".$wuser->uid."' && pu_nota='".$data['id']."'"));
	$data['date'] = date('Y-m-d G:i:s',$data['hace']); ;

	$queryseguidores = mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$data['usuario_id']."'");
	$data['usuario_inter'] = mysql_num_rows($queryseguidores);
	return $data;
	}	
	
	/*
	*----------------------------------------------------------------
	*                  CARGAR CATEGORIAS
	*          @action Cargar posts por categoria
	*----------------------------------------------------------------
	*/
	function getLoadCats($c){
global $w;
          $max = 38; // MAXIMO A MOSTRAR
      $limit = $w->setPageLimit($max, true);

	$query = mysql_query("SELECT * FROM categorias WHERE wdefined='".$c."' LIMIT ".$limit."");
    $data = mysql_fetch_assoc($query);	

     // PAGINAS
        $querys = mysql_query("SELECT COUNT(id_categoria) FROM categorias WHERE wdefined='".$c."'");
        list($total) = mysql_fetch_row($querys);
	$data['pages'] = $w->pageIndex($w->settings['direccion_url'] .
            '/new/'.$_GET['c'].'/?',$_GET['s'], $total, $max);
	
	$queryposts = mysql_query("SELECT n.*, c.*, u.* FROM noticia AS n LEFT JOIN categorias AS c ON c.id_categoria = n.categoria LEFT JOIN usuarios AS u ON u.usuario_id = n.id_usuario WHERE categoria='".$data['id_categoria']."'");
	
	$data['cat_posts'] = result_array($queryposts);
	$i = 0;
	foreach($data['cat_posts'] AS $row){
    $queryrango = mysql_fetch_assoc(mysql_query("SELECT * FROM rangos WHERE id_rango='".$row['rango']."'"));
	 $data['permisos'] = $queryrango;
    $data['cat_posts'][$i]['rangou'] = $data['permisos']['name'];
		$i++;
	}
	return $data;
	}
	
	/*
	*----------------------------------------------------------------------
	*                  CARGAR POST RELACIONADOS
	*                  @action loadPrelac();
	*----------------------------------------------------------------------
	*/
	function loadPrelac($s){
	$query = mysql_query("SELECT p.*, c.* FROM noticia AS p LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.categoria='".$s."' LIMIT 6");
	$thi = result_array($query);
	return $thi;
	}

	
    /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	*
	*                           ACCIONES EN LA CLASS
	*
	++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

    
// LIKE A COMENTARIO
	function likNewCom($id, $t){
global $w ,$wuser, $tsWeb, $tsActividad;

//Si es Like
if($t == 'pos'){
$queryNimLin = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idcoment='".$id."' AND idusuario='".$wuser->uid."'"));
$queryNumDsL = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idcoment='".$id."' AND idusuario='".$wuser->uid."'"));
if($queryNimLin >= 1 or $queryNumDsL >= 1){ return '0: Ya votaste este comentario';
}else{  $iQuer = mysql_query("INSERT INTO me_encanta(idcoment, idusuario, hace) VALUES('".$id."', '".$wuser->uid."', '".time()."')");
if($iQuer){
$infocomentidnam = mysql_fetch_assoc(mysql_query("SELECT * FROM newcoment WHERE id='".$id."'"));
$tsWeb->getNotifis($wuser->uid, 23, $id, $infocomentidnam['idusuario']);
$tsActividad->setActividad(86, $id);
return '1: Agregado correctamente.'; 
}else{ return '0: Error al agregar.'; }
}

// INICIO DE DISLIKE
}elseif($t == 'neg'){
$queryNimLin = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idcoment='".$id."' AND idusuario='".$wuser->uid."'"));
$queryNumDsL = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idcoment='".$id."' AND idusuario='".$wuser->uid."'"));
if($queryNumDsL >= 1 or $queryNimLin >= 1){ return '0: Ya votaste este comentario.';
}else{ $iQuDis = mysql_query("INSERT INTO no_megusta(idcoment, idusuario, hace) VALUES('".$id."', '".$wuser->uid."', '".time()."')");
if($iQuDis){
$infocomentidnam = mysql_fetch_assoc(mysql_query("SELECT * FROM newcoment WHERE id='".$id."'"));
$tsWeb->getNotifis($wuser->uid, 69, $id, $infocomentidnam['idusuario']);
$tsActividad->setActividad(87, $id);
return '1: Agregado correctamente.'; }else{ return '0: Error al agregar.'; }
}

// FIN DE DISLIKE
}else{ return '0: Define una acción'; }
// Fin de Function
}

// LIKE A NOTA
function likNew($id, $t){
global $w ,$wuser, $tsWeb, $tsActividad;

//Si es Like
if($t == 'pos'){
$queryNimLin = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpost='".$id."' AND idusuario='".$wuser->uid."'"));
$queryNumDsL = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idpost='".$id."' AND idusuario='".$wuser->uid."'"));
if($queryNimLin >= 1 or $queryNumDsL >= 1){ return '0: Ya votaste esta noticia';
}else{  $iQuer = mysql_query("INSERT INTO me_encanta(idpost, idusuario, hace) VALUES('".$id."', '".$wuser->uid."', '".time()."')");
if($iQuer){ 
$infocomentidnam = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia WHERE id='".$id."'"));
$tsWeb->getNotifis($wuser->uid, 19, $id, $infocomentidnam['id_usuario']);
$tsActividad->setActividad(20, $id);
return '1: Agregado correctamente.'; }else{ return '0: Error al agregar.'; }
}

// INICIO DE DISLIKE
}elseif($t == 'neg'){
$queryNimLin = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpost='".$id."' AND idusuario='".$wuser->uid."'"));
$queryNumDsL = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idpost='".$id."' AND idusuario='".$wuser->uid."'"));
if($queryNumDsL >= 1 or $queryNimLin >= 1){ return '0: Ya votaste esta noticia';
}else{ $iQuDis = mysql_query("INSERT INTO no_megusta(idpost, idusuario, hace) VALUES('".$id."', '".$wuser->uid."', '".time()."')");
if($iQuDis){ 
$infocomentidnam = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia WHERE id='".$id."'"));
$tsWeb->getNotifis($wuser->uid, 20, $id, $infocomentidnam['id_usuario']);
$tsActividad->setActividad(20, $id);
return '1: Agregado correctamente.'; }else{ return '0: Error al agregar.'; }
}

// FIN DE DISLIKE
}else{ return '0: Define una acción'; }
// Fin de Function
}
    
  /** ¿YA ESTA EN FAVORITOS? **/
  function es_fav_nota($notaid){
  	global $wuser;
     $dato = mysql_num_rows(mysql_query('SELECT * FROM n_favoritos WHERE favn_type="1" AND favn_nota= \''.(int)$notaid.'\' AND favn_user =\''.(int)$wuser->uid.'\''));
    if($dato >= 1) {
      return true;
    }else{
      return false;
    }
  }

  /** AGREGAR A FAVORITOS **/
  function fav_nota($temaid){
  	global $wuser, $tsWeb, $tsActividad;
   if($temaid){
   $segnota = $this->es_fav_nota($temaid);
   $fbntT = mysql_num_rows(mysql_query("SELECT * FROM n_favoritos WHERE favn_nota='".$temaid."' AND favn_user='".$wuser->uid."' AND favn_type='0'"));
   if($segnota == true){ return '0: Ya esta en tus favoritos'; 
   }elseif($fbntT >= 1){ 
   	if(mysql_query("UPDATE n_favoritos SET favn_type='1' WHERE favn_nota='".$temaid."' AND favn_user='".$wuser->uid."'")){
   		return '1: Agregado a favoritos';
   	}else{ return '0: Ocurrio un error, intenta nuevamente.'; }
   }else{
   $i = mysql_query("INSERT INTO n_favoritos (favn_nota, favn_user, favn_date, favn_type) VALUES('".$temaid."', '".$_SESSION['uid']."', '".time()."','1')");
   if($i){ 
   	$infocomentidnam = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia WHERE id='".$temaid."'"));
    $tsWeb->getNotifis($wuser->uid, 70, $temaid, $infocomentidnam['id_usuario']);
    $tsActividad->setActividad(88, $temaid);
   	return '1: ¡Agregado a favoritos!'; }else{ return '0: Intenta nuevamente'; }
   }
  }else{ return '0: Inserta los datos.'; }
  }

     /* ¿Es seguidor? */
  function es_seguir_nota($temaid) {
    global $wuser;
    $dato = mysql_num_rows(mysql_query('SELECT * FROM u_follows WHERE f_id= \''.(int)$temaid.'\' AND f_type = \'1\' AND f_user =\''.(int)$_SESSION['uid'].'\''));
    if($dato >= 1) {
      return true;
    } else {
      return false;
    }
  }

  /* Seguir Nota */

  function seguir_nota($temaid){
  	global $w, $wuser, $tsActividad, $tsWeb;
   if($temaid){
   $segnota = $this->es_seguir_nota($temaid);
   if($segnota == true){ return '0: Ya eres seguidor de esta nota.'; }else{
   $i = mysql_query("INSERT INTO u_follows (f_id, f_type, f_user, f_date) VALUES('".$temaid."', '1', '".$_SESSION['uid']."', '".date()."' )");
   if($i){ 
   	$infocomentidnam = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia WHERE id='".$temaid."'"));
    $tsWeb->getNotifis($wuser->uid, 71, $temaid, $infocomentidnam['id_usuario']);
    $tsActividad->setActividad(89, $temaid);
   	return '1: Eres seguidor.'; }else{ return '0: Intenta nuevamente.'; }
   }
  }else{ return '0: Inserta los datos.'; }
  }

	/*
	*------------------------------------------------
	*    Obtener Admins/ Usuarios con R. New user
	*------------------------------------------------
	*/
	function getAdmins(){
	$query = mysql_query("SELECT * FROM usuarios WHERE rango='11'");
	$data = result_array($query);
	
	return $data;
	}
	
	/*
	*---------------------------------------------------------------
	*                LOAD NOTES FULL
	*         @action cargar todas las notas
	*----------------------------------------------------------------
	*/
    function loadNotes($id){
	global $w;
	
	if(isset($id)){
	$query = mysql_query("SELECT * FROM noticia WHERE id='".$id."'");
	$data = mysql_fetch_assoc($query);
	
		$qu = mysql_query("SELECT * FROM categorias");
	$data['catsto'] = result_array($qu);
	
	if(isset($_POST['save'])){

	function cambiar($cadena){
	$cadena = str_replace("'", '"', $cadena);
    return $cadena;
}
	
	mysql_query("UPDATE noticia SET
	titulo = '".$_POST['name']."',
	detalle = '".cambiar((nl2br(htmlspecialchars($_POST['text']))))."',
	fuente = '".$_POST['url']."',
	categoria = '".$_POST['cat']."',
	banner = '".$_POST['img']."',
	tags = '".$_POST['tags']."',
	estado = '".$_POST['estado']."',
	sticky = '".$_POST['stick']."' WHERE id='".$id."'
	");
	
	$w->redirectTo($w->settings['url_new'].'/admin/notas?a='.$_GET['a'].'&act='.$_GET['act'].'&save=true');
	
	}
	
	if($_GET['act'] == 'delete'){
	
	mysql_query("UPDATE noticia SET 
	estado = '1' WHERE id='".$id."'
	");
	$w->redirectTo($w->settings['url_new'].'/admin/notas?pag='.$_GET['pag'].'&save=true');
	
	}
	
	}else{
	
			$noRegistros = 40; 
    $pagina = 1;
	$pagina = $_GET["pag"];
	
	$query = mysql_query("SELECT n.*, c.* FROM noticia AS n LEFT JOIN categorias AS c ON n.categoria = c.id_categoria  LIMIT ".($pagina-1)*$noRegistros.",$noRegistros");
	$data['loadn'] = result_array($query);
	
		/***
	CARGAR NUMERO DE PAGINAS
	***/
	$sSQL = "SELECT count(*) FROM noticia"; //Cuento el total de registros
$result = mysql_query($sSQL);
$row = mysql_fetch_array($result);
$totalRegistros = $row["count(*)"]; //Almaceno el total en una variable
 
$data['notest'] = $totalRegistros;
	
	}
	
	return $data;
	}
	
	/** Dar puntos ***/

    function notepunts(){
    global $w, $u, $tsWeb, $wuser, $tsActividad;
    if(!$wuser->rango['admin_home']) $num = 5; else $num = $wuser->rango['admin_home'];
        $p = array(
    'dar' => $w->setSecure($_POST['num']),
    'user' => $wuser->uid,
    'nota' => $w->setSecure($_POST['pid']),
    'date' => time(), 
    );
        $kjsornern = mysql_fetch_assoc(mysql_query("SELECT * FROM noticia WHERE id='".$p['nota']."'"));
    if($p['dar'] > $num){ return '0: No puedes dar mas de '.$wuser->rango['admin_home'].' puntos a las notas.'; }else{
    $ksndl = mysql_query("SELECT * FROM n_puntos WHERE pu_nota='".$p['nota']."' AND pu_type='1' AND pu_user='".$p['user']."'");
    $lsnk = mysql_num_rows($ksndl);
    $kslsen = mysql_fetch_assoc($ksndl);
    if($lsnk > 0){ return '0: Ya votaste esta nota, y tu voto fue de: '.$kslsen['pu_cant'].' puntos.'; }else{
     $wuser->darPuntos($p['nota'], $p['dar'], 1);
     mysql_query("UPDATE noticia SET catw=catw+'".$p['dar']."' WHERE id='".$p['nota']."'");
     $tsWeb->getNotifis($wuser->uid, 41, $p['nota'], $kjsornern['id_usuario']);
     $tsActividad->setActividad(79, $p['nota'], $kjsornern['id_usuario']);
    return '1: Puntos agregados correctamente.'; 
    }
    }
    // Fin function
    }

	/***** en vivo *****/


 /*+++++++++ COMENTARIOS ++++++++*/

	function lastPidComments(){
         $post = mysql_fetch_assoc(mysql_query('SELECT id FROM newcoment ORDER BY id DESC LIMIT 1'));
         return $post['id'];
    }
    
    function lastPidCommentsLive(){
        global $w;
        $post = mysql_fetch_assoc(mysql_query("SELECT c.*, u.*, p.*, cc.* FROM newcoment AS c LEFT JOIN usuarios AS u ON u.usuario_id = c.idusuario LEFT JOIN noticia AS p ON c.idpost = p.id LEFT JOIN categorias AS cc ON p.categoria = cc.id_categoria ORDER BY c.id DESC LIMIT 1"));
         return json_encode(array('cid' => $post['id'], 'iduser' => $post['usuario_id'],'user_nombre' => $post['usuario_nombre'], 'avatar' => $post['w_avatar'], 'postname' => $post['titulo'], 'posturl' => $w->settings['url'].'/new/nota/'.$post['wdefined'].'/'.$post['id'].'/'.$post['post_wdefined'].'.html'));
    }


	
/*  Fin de la class  */	
}
