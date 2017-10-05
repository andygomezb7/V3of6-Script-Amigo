<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/** 
*   Funciones Globales 
*
*   @name c.vip.php
*   @author Wortit Developers
*/
class tsVip {

  // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsVip();
        }
        return $instance;
    }
		

/* Usuarios Vip*/
	function act_uservip(){
	global $w, $wuser;
	$query = mysql_query('SELECT u.*, r.* FROM usuarios AS u LEFT JOIN rangos AS r ON u.rango = r.id_rango WHERE u.user_vip = "1" && u.rango_vip = "0" ORDER BY u.usuario_id ASC');
	$data = result_array($query);

	//
	return $data;
	}
/* Usuarios con Rango Vip*/
	function act_useranvip(){
	global $w, $tsUser;
	$query = mysql_query('SELECT * FROM usuarios WHERE rango_vip="0" AND user_vip="1" ORDER BY usuario_id DESC');
	$data = result_array($query);

	//
	return $data;
	}	
/* Posts Vip*/
    function act_postsvip()
     {
      global $w, $wuser;
      //
      $max = 10; // MAXIMO A MOSTRAR
      $limit = $w->setPageLimit($max, true);
      $peKSDFle = ($wuser->admod || $wuser->mod) ? '' : 'AND p.estado="1"';
      $retorno['data'] = result_array(mysql_query('SELECT p.*, u.*, c.*, r.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON c.id_categoria = p.categoria  LEFT JOIN rangos AS r ON  r.id_rango = u.rango  WHERE p.post_vip="1" '.$peKSDFle.' LIMIT '.$limit.''));

      // PAGINAS
        $query = mysql_query('SELECT COUNT(id) FROM noticia WHERE post_vip = 1');
        list($total) = mysql_fetch_row($query);

      $retorno['pages'] = $w->pageIndex($w->settings['direccion_url'] .
            '/int/vip/?',$_GET['s'], $total, $max);

      return $retorno;
     }
	 
	 
/* Comentarios Vip*/
	function act_comvip(){
	global $w, $tsUser;
	$query = mysql_query('SELECT c.*, p.*, u.*, cc.* FROM newcoment AS c LEFT JOIN noticia AS p ON c.idpost=p.id LEFT JOIN usuarios AS u ON c.idusuario = u.usuario_id LEFT JOIN categorias AS cc ON p.categoria = cc.id_categoria WHERE p.post_vip="1" ORDER BY c.id DESC LIMIT 7');
	$data = result_array($query);

	//
	return $data;
	}
	
/* Tops Posts Vip*/
	function act_toppostsvip(){
	global $w, $tsUser;
	$query = mysql_query('SELECT p.*, u.*, c.*, r.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON c.id_categoria = p.categoria  LEFT JOIN rangos AS r ON  r.id_rango = u.rango  WHERE p.post_vip = "1" ORDER BY p.visitas DESC');
	$data = result_array($query);

	//
	return $data;
	}
	
	/* Tops User Vip*/
	function act_topuservip(){
	global $w;
	$query = mysql_query('SELECT SUM(p.visitas) AS total, COUNT(p.id) AS cant ,p.id_usuario,u.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id WHERE (u.user_vip = 1 OR u.rango_vip >= 1) AND p.post_vip = 1 GROUP BY p.id_usuario ORDER BY total DESC LIMIT 7');
	$data = result_array($query);

	//
	return $data;
	}
	
	/* Estadisticas usuarios Vip*/
	function act_usercount(){
	global $w, $tsUser;
	$query = mysql_query('SELECT COUNT(usuario_id) AS total FROM usuarios  WHERE  user_vip ="1" AND rango_vip="0" ');
	$data = result_array($query);

	//
	return $data;
	}
	/* Estadisticas Rangos Vip*/
	function act_rancount(){
	global $tsCore, $tsUser;
	$query = mysql_query('SELECT COUNT(usuario_id) AS total FROM usuarios  WHERE  rango_vip >=1 ');
	$data = result_array($query);

	//
	return $data;
	}
	/* Estadisticas Posts Vip*/
	function act_postcount(){
	global $tsCore, $tsUser;
	$query = mysql_query('SELECT COUNT(id) AS total FROM noticia  WHERE  post_vip = 1 ');
	$data = result_array($query);

	//
	return $data;
	}
	/* Estadisticas Comentarios  Vip*/
	function act_comentcount(){
	global $tsCore, $tsUser;
	$query = mysql_query('SELECT COUNT(c.id) AS total, p.* FROM newcoment AS c LEFT JOIN noticia AS p ON c.idpost = p.id  WHERE post_vip = 1');
	$data = result_array($query);

	//
	return $data;
	}
	/* Posts Vip Importantes*/
	function act_stikyvip(){
	global $tsCore, $wuser;
	$sdfEstrks = ($wuser->admod || $wuser->mod) ? '' : 'AND p.estado="1"';
	$query = mysql_query('SELECT p.*, u.*, c.*, r.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON c.id_categoria = p.categoria  LEFT JOIN rangos AS r ON  r.id_rango = u.rango  WHERE p.post_vip = "1" AND p.sticky ="1" '.$sdfEstrks.' LIMIT 10');
	$data = result_array($query);

	//
	return $data;
	}
	
	
}

