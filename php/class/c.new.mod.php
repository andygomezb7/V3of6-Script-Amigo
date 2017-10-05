<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/*
*  Control de Post | Control seccion NEW
*
*  @name      c.posts.php
*  @author    Wortit Developers
*
*/
class tsAdminNew{
/** INICIO DE LA CLASE **/


	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsAdminNew();
    	}
		return $instance;
	}

    /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	*
	*                           ACCIONES EN LA CLASS
	*
	++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


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
	
	$w->redirectTo($w->settings['url_new'].'/mod/notas?a='.$_GET['a'].'&act='.$_GET['act'].'&save=true');
	
	}
	
	if($_GET['act'] == 'delete'){
	
	mysql_query("UPDATE noticia SET 
	estado = '1' WHERE id='".$id."'
	");
	$w->redirectTo($w->settings['url_new'].'/mod/notas?pag='.$_GET['pag'].'&save=true');
	
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
	


/** FIN DE LA CLASE **/
}

?>