<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Modelo para el control de los tops
 *
 * @name    c.tops.php
 * @author  PHPost Team
 */
class tsTops {

	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsTops();
    	}
		return $instance;
	}

     function notas($datas){
     $data = $this->setTime($datas);

     $query['votos'] = mysql_query('SELECT n.*, c.*, u.* FROM noticia AS n LEFT JOIN categorias AS c ON c.id_categoria = n.categoria LEFT JOIN usuarios AS u ON u.usuario_id = n.id_usuario WHERE n.hace BETWEEN \''.$date['start'].'\' AND \''.$date['end'].'\'  ORDER BY n.id DESC LIMIT 10'); 
     $query['visitas'] = mysql_query('SELECT n.*, c.*, u.*, v.*, count(v.id) AS total FROM noticia AS n LEFT JOIN categorias AS c ON c.id_categoria = n.categoria LEFT JOIN usuarios AS u ON u.usuario_id = n.id_usuario LEFT JOIN visitas AS v ON n.id = v.id_v WHERE v.type=\'5\' AND n.hace BETWEEN \''.$date['start'].'\' AND \''.$date['end'].'\' ORDER BY total DESC LIMIT 10 '); 
     
     $data['votos'] = result_array($query['votos']);
     $data['visitas'] = result_array($query['visitas']);

     return $data;
     }

     function temas($datas, $order){
     $data = $this->setTime($datas);
     $queryv = mysql_query('SELECT t.t_votos_pos AS total, t.t_id, t.t_titulo, c.c_id, c.c_nombre, c.c_nombre_corto FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id WHERE t.t_estado = \'0\' AND c.c_estado = \'0\' AND t.t_fecha BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10');
     $queryvv = mysql_query('SELECT t.t_id, t.t_titulo, c.c_id, c.c_nombre, c.c_nombre_corto, v.type, v.id_v, count(v.id) AS total FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN visitas AS v ON t.t_id = v.id_v WHERE v.type=\'6\' AND t.t_estado = \'0\' AND c.c_estado = \'0\' AND t.t_fecha BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10');
     //$queryvvv = mysql_query('SELECT count(vv.id) AS total, t.t_id, t.t_titulo, c.c_id, c.c_nombre, c.c_nombre_corto FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN visitas AS vv ON t.t_id = vv.id_v WHERE vv.type =\'6\' AND t.t_estado = \'0\' AND c.c_estado = \'0\' AND t.t_fecha BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10'); }else{ $query = mysql_query('SELECT t.t_id, t.t_titulo, c.c_id, c.c_nombre, c.c_nombre_corto, v.type, v.id_v, count(v.id) AS total FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN visitas AS v ON t.t_id = v.id_v WHERE v.type=\'6\' AND t.t_estado = \'0\' AND c.c_estado = \'0\' AND t.t_fecha BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10'); }
     
     $data['votos'] = result_array($queryv);
     $data['visitas'] = result_array($queryvv);

     $i = 0;
     foreach($data['votos'] as $td){
       $data['votos'][$i]['dia'] = date($td['t_fecha'], "d");
       $data['votos'][$i]['mes'] = date($td['t_fecha'], "M");
     	$i++;
     }

      $e = 0;
     foreach($data['visitas'] as $tsd){
       $data['visitas'][$i]['dia'] = date($tsd['t_fecha'], "d");
       $data['visitas'][$i]['mes'] = date($tsd['t_fecha'], "M");
     	$e++;
     }

     return $data;
     }

     function usuarios($datas, $order){
     $data = $this->setTime($datas);
     if($order == 'votos'){ $query = mysql_query('SELECT u.*, v.*, m.idpublicacion, count(m.idvoto) AS total FROM usuarios AS u LEFT JOIN bworts AS v ON u.usuario_id = v.idusuario LEFT JOIN me_encanta AS m ON v.id = m.idpublicacion WHERE v.hace BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10'); }else{ $query = mysql_query('SELECT u.*, v.id_v, v.type, count(v.id) AS total FROM usuarios AS u LEFT JOIN visitas AS v ON u.usuario_id = v.id_v WHERE v.type=\'1\' AND v.hace BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10'); }
     $data = result_array($query);
     return $data;
     }


     function bworts($datas, $order){
     $data = $this->setTime($datas);
     if($order == 'votos'){ $query = mysql_query('SELECT b.*, v.idvoto, count(v.idvoto) AS total, u.* FROM bworts AS b LEFT JOIN me_encanta AS v ON b.id = v.idvoto LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.hace BETWEEN '.$data['start'].' AND '.$data['end'].' ORDER BY total DESC LIMIT 10'); }else{ $query = mysql_query('SELECT b.*, v.id_v, v.type, count(v.id) AS total, u.* FROM bworts AS b LEFT JOIN visitas AS v ON b.id = v.id_v LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE v.type = \'4\' AND b.hace BETWEEN '.$data['start'].' AND '.$data['end'].'  ORDER BY total DESC LIMIT 10'); }
     $data = result_array($query);
     return $data;
     }

	/******************************************************************************/
	/*
		setTime($fecha)
	*/
	function setTime($fecha){
		// AHORA
		$tiempo = time(); $dia = (int) date("d",$tiempo); $hora = (int) date("G",$tiempo); $min = (int) date("i",$tiempo); $seg = (int) date("s",$tiempo);
		//
		$resta = $this->setSegs($hora, 'hor') + $this->setSegs($min, 'min') + $seg;
		// TRANSFORMAR
		switch($fecha){
			// HOY
			case 1: 
				//
			$data['start'] = $tiempo - $resta; $data['end'] = $tiempo;
				//
			break;
			// AYER
			case 2: 
				//
			$restaDos = $resta + $this->setSegs(1,'dia') + $this->setSegs(1,'hor'); $data['start'] = $tiempo - $restaDos; $data['end'] = $tiempo - $resta;
				//
			break;
			// SEMANA
			case 3: 
				//
			$restaDos = $resta + $this->setSegs(1,'sem')  + $this->setSegs(1,'hor'); $data['start'] = $tiempo - $restaDos; $data['end'] = $tiempo - $resta;
				//
			break;
			// MES
			case 4: 
				//
			$restaDos = $resta + $this->setSegs(1,'mes')  + $this->setSegs(1,'hor'); $data['start'] = $tiempo - $restaDos; $data['end'] = $tiempo - $resta;
				//
			break;
			// TODO EL TIEMPO
			case 5: 
				//
			$data['start'] = 0; $data['end'] = $tiempo;
				//
			break;
		}
		//
		return $data;
	}
	/*
		setSegs($tiempo, $tipo)
	*/
	function setSegs($tiempo, $tipo){
		//
		switch($tipo){
			case 'min' :
				$segundos = $tiempo * 60;
			break;
			case 'hor' :
				$segundos = $tiempo * 3600;
			break;
			case 'dia' :
				$segundos = $tiempo * 86400;
			break;
			case 'sem' :
				$segundos = $tiempo * 604800;
			break;
			case 'mes' :
				$segundos = $tiempo * 2592000;
			break;

		}
		//
		return $segundos;
	}


}