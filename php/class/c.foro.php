<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.foro.php
 * @author  Wortit Developers
 */
class tsForo{

		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new tsForo();
    	}
		return $instance;
	}

   /**
    LOAD CATS
	@action loadCats();
   ***/
   function loadCats(){
   $query = mysql_query("SELECT * FROM cat_foro");
   $data['t'] = result_array($query);
   
   return $data;
   }
   
   /**
   *-------------------------------------------------
   *              LOAD THEMES AND CATS
   *       @action cargar temas y categorias
   *             @author WORTIT developers
   *-------------------------------------------------
   **/
   
   function catstemesLoad(){
   $query = mysql_query("SELECT * FROM cat_foro");
   $data = result_array($query);
   return $data;
   }









}

?>