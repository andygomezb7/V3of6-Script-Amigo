<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Funciones globales de Seccion peliculas
 *
 * @name    pelis.php
 * @author  Andy Gómez (wortit.net/andyg ; fb.me/andesau)
 * @exclusive To Zoomber.org - Powered by Andy Gómez
 */
class tsPelis {
    
	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsPelis();
    	}
		return $instance;
	}
	
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
	
	function obtPelis(){
		$query = mysql_query("SELECT * FROM p_pelis WHERE pe_estado='1'");
        $data = result_array($query);
		return $data;
	}

  function obtPelisAleat(){
    // Obtener para mostrar "Peliculas relacionadas".
    $query = mysql_query("SELECT * FROM p_pelis WHERE pe_estado='1' LIMIT 15");
        $data = result_array($query);
    return $data;
  }

	function obtInfoP($id){
		$query = mysql_query("SELECT * FROM p_pelis WHERE pe_id='".$id."'");
		$data = mysql_fetch_assoc($query);
		return $data;
	}

	function filtrarPelis($type, $dato){
    if($type == 1){
    	$query = mysql_query("SELECT * FROM p_pelis WHERE pe_down='".$dato."'");
    }elseif($type == 2){
    	$query = mysql_query("SELECT * FROM p_pelis WHERE pe_title='".$dato."'");
    }else{ $data['aviso'] = 'Define un filtro.'; }

    $data = result_array($query);
		return $data;
	}

    // Funcion para editar y agregar Peliculas
	function newEditPeli(){
      global $w;
      //Acción definida
      $type = $w->setSecure($_POST['tt']);
      // Datos obtenidos  en un array
      $pe = array(
      'title' => $w->setSecure($_POST['title']),
      'port' => $w->setSecure($_POST['port']),
      'dat' => $w->setSecure($_POST['dat']),
      'tag' => $w->setSecure($_POST['tag']),
      'idio' => $w->setSecure($_POST['idio']),
      'tplay' => $w->setSecure($_POST['tplay']),
      'peli' => $w->setSecure($_POST['peli']),
      'estado' => $w->setSecure($_POST['est']),
      );
      $tplay = array(
      1 => 'Repoductor Youtube.',
      2 => 'Vimeo',
      3 => 'VK',
      4 => 'vimple',
      5 => 'video mail ru'
      );
      $sdf4w5q6q = substr($pe['port'],-3); 
      // Posibles errores, Los mostramos especificos.
      if(!$pe['title']){ return '0: Agrega un titulo a tu pelicula.';
      }elseif(!$pe['port']){ return '0: Agrega una portada a tu pelicula.';
      }elseif(!$pe['dat']){ return '0: Agrega los datos de tu pelicula.';
      }elseif(!$pe['tag']){ return '0: Agrega tags a tu pelicula, Esto ayudara a encontrarla en los buscadores.';
      }elseif(!$pe['idio']){ return '0: Agrega un idioma a tu pelicula.';
      }elseif(!$pe['tplay']){ return '0: Agrega el tipo de reproductor que deseas a tu pelicula.';
      }elseif(!$tplay[$pe['tplay']]){ return '0: Escoge un tipo de reproductor existente.';
      }else{ 
      	// Vemos la accion que desea ejecutar
      	if($type == 1){
      		// Si es "1" Agregamos.
      // Todo esta bien y procedemos a agregar la pelicula a la base de datos. 

      if($pe['port']){
      $typecab = substr($pe['port'],-3); 
      $hace = time();
      $avatarwwwcab = '../files/uploads/'.$_SESSION['uid'].'_1424_'.$hace.'_9057.'.$typecab;
      copy($pe['port'], $avatarwwwcab);
      $banner = $w->settings['url'].'/files/uploads/'.$_SESSION['uid'].'_1424_'.$hace.'_9057.'.$typecab;
      }else{}

      if(mysql_query("INSERT INTO p_pelis(
      pe_title,
      pe_url,
      pe_port,
      pe_datos,
      pe_tags,
      pe_idio,
      pe_retype,
      pe_estado) VALUES(
      '".$pe['title']."',
      '".$pe['peli']."',
      '".$banner."',
      '".$pe['dat']."',
      '".$pe['tag']."',
      '".$pe['idio']."',
      '".$pe['tplay']."',
      '1' )")){ 
      return '1: Agregada correctamente, Estas siendo redirigido a la sección.'; }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
      }elseif($type == 2){
       // Si es "2" Editamos.
      if(mysql_query("UPDATE p_pelis SET 
      pe_title = '".$pe['title']."',
      pe_url = '".$pe['peli']."',
      pe_port = '".$pe['port'].",
      pe_datos = '".$pe['dat']."',
      pe_tags = '".$pe['tag']."',
      pe_idio = '".$pe['idio']."',
      pe_retype = '".$pe['tplay']."',
      pe_estado = '".$pe['estado']."'
      ")){ return '1: Pelicula editada correctamente, Estas siendo redirigido a la sección.'; }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
      }else{ return '0: Define una acción.'; }
     }
	}

	
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
	
	
}