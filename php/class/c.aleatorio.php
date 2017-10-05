<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.user.php
 * @author  Wortit Developers
 */
class aleatorio{
	
		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new aleatorio();
    	}
		return $instance;
	}
	
	
	function resultados($type, $num){
	
	if(!$num){ $num = 15; }else{ $num = $num; }
	
	$noRegistros = $num; //Registros por página
    $pagina = 1;
	if($_GET["pag"]) $pagina = $_GET["pag"];
	
	switch($type){
	case 'users':
	$query = mysql_query("SELECT u.*, p.* FROM usuarios AS u LEFT JOIN u_paises AS p ON p.p_prefijo = u.pais WHERE u.user_activo='1' AND u.user_baneado='0' GROUP BY u.usuario_id ORDER BY rand() DESC LIMIT ".($pagina-1)*$noRegistros.",".$noRegistros."");
	break;
	case 'temas':
	
	break;
	case 'notas':
	
	break;
	}
	
	return result_array($query);
	}
	
	}
	?>