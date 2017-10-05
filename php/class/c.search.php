<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control del muro
 *
 * @name    c.search.php
 * @author  PHPost Team
 */
class tsSearch{

   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsSearch();
        }
        return $instance;
    }
	
   function palabb($mos, $var){
        $t = 0; 
   		foreach($mos as $n){ 
   			if($t<(count($mos)-1)){ $a = str_replace($n, '<strong>'.$n.'</strong>', $var); }else{
				$t++; }
		}
   	return $a;
   }

	// Busqueda
	function searchG($type, $q){
    global $w;
	$max = 20; // MAXIMO A MOSTRAR
	$tsStart = empty($_GET['page']) ? 1 : $_GET['page'];
    $limit = $tsStart.','.$max;

   $mm = explode(' ', $q);
   if($mm){ $m = $mm; }else{ $m = explode('-', $q); }

	switch($type){
	// Usuarios
	case 1:
	$querys = '';
    $r = 0;
    foreach($m as $q){
    $querys .= " u.usuario_nombre LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " u.name_original LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " u.ap_original LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
    $r++;
    }
	$extras = " GROUP BY u.usuario_id LIMIT ".$limit."";
	$query = mysql_query("SELECT u.*, p.* FROM usuarios AS u LEFT JOIN u_paises AS p ON p.p_prefijo = u.pais WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT u.*, p.* FROM usuarios AS u LEFT JOIN u_paises AS p ON p.p_prefijo = u.pais WHERE ".$querys.' GROUP BY u.usuario_id');
	break;
	case 2:
	// Foro
	$querys = '';
    $r = 0;
    foreach($m as $q){
    $querys .= " t.t_titulo LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " t.t_cuerpo LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
    $r++;
    }
	$extras = " ORDER BY t.t_votos_pos DESC LIMIT ".$limit."";
	$query = mysql_query("SELECT t.*, c.*, cc.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN c_categorias AS cc ON c.c_categoria = cc.cid WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT t.*, c.*, cc.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN c_categorias AS cc ON c.c_categoria = cc.cid WHERE ".$querys.' ORDER BY t.t_votos_pos DESC');
	break;
	case 3:
	// New
   $querys = '';
   $h = 0;
   foreach($m as $q){
   $querys .= "n.titulo LIKE '%$q%' ".($h<(count($m)-1) ? 'or ' : 'or ');
   $querys .= "n.detalle LIKE '%$q%' ".($h<(count($m)-1) ? 'or ' : '');
   $h++;
   }
	$extras = " ORDER BY n.visitas DESC LIMIT ".$limit."";
	$query = mysql_query("SELECT n.*, u.*, c.* FROM noticia AS n LEFT JOIN usuarios AS u ON n.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON n.categoria = c.id_categoria WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT n.*, u.* FROM noticia AS n LEFT JOIN usuarios AS u ON n.id_usuario = u.usuario_id WHERE ".$querys);
	break;
	case 4:
	// Juegos
	$querys = '';
    $r = 0;
    foreach($m as $q){
    $querys .= " j.j_title LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " j.j_description LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
    $r++;
    }
	$extras = " LIMIT ".$limit."";
	$query = mysql_query("SELECT j.*, u.*, c.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON j.j_user = u.usuario_id LEFT JOIN j_categorias AS c ON j.j_cat = c.cat_id WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT j.*, u.*, c.* FROM j_juegos AS j LEFT JOIN usuarios AS u ON j.j_user = u.usuario_id LEFT JOIN j_categorias AS c ON j.j_cat = c.cat_id WHERE ".$querys.$extras);
	break;
	case 5:
	// Bworts
	$querys = '';
    $r = 0;
    foreach($m as $q){
    $querys .= " b.text LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : ' ');
    $r++;
    }
	$extras = " LIMIT ".$limit."";
	$query = mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE ".$querys);
	break;
	case 6:
	$query = mysql_query("");
	break;
	}

	$data = result_array($query);
	$data['query'] = $query;
	if($type == 5){
		$i = 0;
		foreach ($data as $key => $row) {
		$data[$i]['me_gusta'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$row['id']."'"));
		$data[$i]['no_megusta'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$row['id']."'"));
		$data[$i]['texts'] = $w->setMenciones($w->setHashtag($row['text']));
		$data[$i]['u_megusta'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$row['id']."' AND idusuario='".$_SESSION['uid']."'"));
		$data[$i]['u_nomegusta'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$row['id']."' AND idusuario='".$_SESSION['uid']."'"));
		$i++;
		}
	}

	if($type == 1){
     $e = 0;
     foreach($data as $poo => $row){
        $data[$e]['interacciones'] = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$row['usuario_id']."'"));
        $data[$e]['notas'] = mysql_num_rows(mysql_query("SELECT * FROM noticia WHERE id_usuario='".$row['usuario_id']."'"));
        $data[$e]['temas'] = mysql_num_rows(mysql_query("SELECT * FROM c_temas WHERE t_autor='".$row['usuario_id']."'"));
     	$e++;
     }
	}
    
   if($type == 3){
  // $p = 0; 
  // foreach($data as $row){ 
  //      $data[$p]['titulos'] = $this->palabb($m, $row['titulo']);
//		$p++; 
 // }
   }
	$data['num_rows'] = mysql_num_rows($query2);
    
	// PAGINAS
    $queryes = $query2;
    $total = mysql_num_rows($queryes);
    // "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].''
	$data['paginas'] = $w->getPages($total, $max);

    		//Variables principales
	$pages = '';
		$c_max_posts = mysql_query("SELECT c_max_posts FROM w_configuracion");
		$datos = mysql_num_rows(mysql_query("SELECT id FROM noticia"));
		$num_rows = $datos;//Consultamos cuantos post hay
		$post_pp = $max;//Consultamos cuantos post hay
		$lastpage = ceil($num_rows / $post_pp);//Calculamos cuantos ennlaces habra
		//Obtenemos el valor de la pagina actual
		if(!$_GET["page"]){
			$page=1;
		}else{
			$page = $_GET["page"];
		}
		//Creamos el array de la paginación
		for($i=0;$i<=$lastpage;$i++){
			$mpag[$i]=$i;
		}
		//Calculamos cuantas pestañas mostrar
		$v = $page + 9;
		for($c=9;$v>$lastpage; $c--){
			$v=$page+$c;
		}
		//Enlace a pagina anterior
		if($page>1){
			$anterior = $page - 1;
			$pages .= "<a class='navPages' href=\"".$w->settings['url']."/search/?q=".$_GET['q']."&t=".$_GET['t']."&page=".$anterior."\" title=\"Página anterior\">&laquo;</a>";
		}
		//Mostramos los enlaces de la paginación
		for($i=$page; $i<=$v; $i++){
			if($mpag[$i] == $_GET['page']){ $cha = 'style="background: #4A4F55;'; $ja = $mpag[$i]; }else{ $cha = ""; $ja = $mpag[$i]; }
			$pages .= "<a ".$cha." href=\"".$w->settings['url']."/search/?q=".$_GET['q']."&t=".$_GET['t']."&page=".$mpag[$i]."\">".$ja."</a>";
		}
		//Enlace a pagina siguiente
		if($page<$lastpage){
			$siguiente = $page + 1;
			$pages .= "<a class='navPages' href=\"".$w->settings['url']."/search/?q=".$_GET['q']."&t=".$_GET['t']."&page=".$siguiente."\" title=\"Página siguiente\">&raquo;</a>";
		}

    $data['pages'] = $pages;		

	return $data;
	/***** FIN FUNCTION searchG ****/
	}
	
	
	
	
	
	
	
	
	
	/***** FIN CLASS ****/
	}
	?>