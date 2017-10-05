<?php   if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/** 
*   Funciones Globales 
*
*   @name c.admin.php
*   @author Wortit Developers
*/
class tsMod{
   
   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsMod();
        }
        return $instance;
    }

    /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            Inicio de Acciones 
    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

    /*
	*-------------------------------------
	*    Obtener mas administradores
	*-------------------------------------
	*/
	function getAdmins(){
	$query = mysql_query("SELECT * FROM usuarios WHERE rango='1'");
	$data = result_array($query);
	
	return $data;
	}
	
    /*
	*--------------------------------------------------
	*            LOAD configuraciones
	*--------------------------------------------------
	*/
	function loadConfig(){
	global $w;
   
    $mant = 0;
	$c = array(
	'titulo' => $w->setSecure($_POST['titulo']),
	'url' => $w->setSecure($_POST['url']),
	'logo' => $w->setSecure($_POST['logo']),
	'lema' => $w->setSecure($_POST['lema']),
	'ad_url' => $w->setSecure($_POST['ad_url']),
	'new_name' => $w->setSecure($_POST['new_name']),
	'gru_url' => $w->setSecure($_POST['gru_url']),
	'gru_name' => $w->setSecure($_POST['gru_name']),
	'mantenimiento' => $w->setSecure($_POST['mant']),
	'mant_text' => $w->setSecure($_POST['mntx']),
	'config_jpuntos' => $w->setSecure($_POST['jpuntos']),
	'hashtag' => $w->setSecure($_POST['hashtag']),
	'ads_advr' => $w->setSecure($_POST['advertad']),
	);
	if(mysql_query("UPDATE `wconfig` SET 
    name = '".$c['titulo']."',
	lema = '".$c['lema']."',
	direccion_url = '".$c['url']."',
	logo = '".$c['logo']."',
	url_admin = '".$c['ad_url']."',
	url_grupos = '".$c['gru_url']."',
	name_grupos = '".$c['gru_name']."',
	mantenimiento = '".$c['mantenimiento']."',
	hashtag = '".$c['hashtag']."', 
	mant_text='".$c['mant_text']."', 
	ads_wort_adv='".$c['ads_advr']."' WHERE id='3'")){ return '1: Editado correctamente.'; }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
	}

    
    /*
	*-----------------------------------------------------
	*               support();
	*         @action actions in soporte section
	*-----------------------------------------------------
	*/

	function support(){
     global $w;
     $s = array(
     'name' => $w->setSecure($_POST['name']),
     'seo' => $w->setSecure($_POST['seo']),
     'img' => $w->setSecure($_POST['img']),
     'icon' => $w->setSecure($_POST['icon']),
     'creator' => $w->setSecure($_POST['creator']),
     'desc' => $w->setSecure($_POST['desc']),
     );

	}
	

	/*
	*-----------------------------------------------------
	*               loadStatics();
	*             @action load static
	*-----------------------------------------------------
	*/
	function loadStaticsA(){
	$q1 = mysql_query("SELECT * FROM usuarios");
	$q2 = mysql_query("SELECT * FROM noticia");
	$q3 = mysql_query("SELECT * FROM bworts");
	$q4 = mysql_query("SELECT * FROM t_productos");
	$q5 = mysql_query("SELECT * FROM suscriptores");
	$q6 = mysql_query("SELECT * FROM newcoment");
	$q7 = mysql_query("SELECT * FROM categorias");
	$q8 = mysql_query("SELECT * FROM me_encanta");
	$q9 = mysql_query("SELECT * FROM no_megusta");
	
	$data['users'] = mysql_num_rows($q1);
	$data['news'] = mysql_num_rows($q2);
	$data['bworts'] = mysql_num_rows($q3);
	$data['products'] = mysql_num_rows($q4);
	$data['inter'] = mysql_num_rows($q5);
	$data['coments'] = mysql_num_rows($q6);
	$data['cats'] = mysql_num_rows($q7);
	$data['mee'] = mysql_num_rows($q8);
	$data['men'] = mysql_num_rows($q9);
	
	return $data;
	}
	/*
	*------------------------------------------------------------------
	*                     CARGAR/EDITAR Categorias
	*                        @action load/edit
	*------------------------------------------------------------------
	*/
	function catsg($edit, $action){
	global $w;
		
		if(isset($edit)){
$query = mysql_query("SELECT * FROM categorias WHERE id_categoria='".$edit."'");	
$data = mysql_fetch_assoc($query);

	if(isset($_POST['save'])){
	
			$g = array(
	'name' => $w->setSecure($_POST['name']),
	'game' => $w->setSecure($_POST['game']),
	'icon' => $w->setSecure($_POST['icon']),
	'descri' => $w->setSecure($_POST['descri']),
	'color' => $w->setSecure($_POST['color']),
	'seo' => $w->setSecure($_POST['seo']),
	'micon' => $w->setSecure($_POST['micon'])
	);
	
	mysql_query("UPDATE categorias SET
	nombre = '".$g['name']."',
	game = '".$g['game']."',
	Descripcion = '".$g['descri']."',
	color = '".$g['color']."',
	cat_micon = '".$g['micon']."',
	wdefined = '".$g['seo']."' WHERE id_categoria ='".$edit."'
	");
	$w->redirectTo($w->settings['direccion_url'].'/admin/cats?a='.$_GET['a'].'&act='.$_GET['act'].'&save=true');
	}
	
	if($action == 'delete'){
	mysql_query("DELETE FROM categorias WHERE id_categoria='".$edit."'");
	}
	
	}else{
    $query = mysql_query("SELECT * FROM categorias");
	$data = mysql_fetch_assoc($query);
	}
	
	$data['tcats'] = result_array($query);
	
		if(isset($_POST['add'])){
	$gt = array(
	'name' => $w->setSecure($_POST['name']),
	'game' => $w->setSecure($_POST['game']),
	'icon' => $w->setSecure($_POST['icon']),
	'descri' => $w->setSecure($_POST['descri']),
	'color' => $w->setSecure($_POST['color']),
	'seo' => $w->setSecure($_POST['seo']),
	'micon' => $w->setSecure($_POST['micon'])
	);
	
	mysql_query("INSERT INTO categorias(nombre, game, icono, Descripcion, color, wdefined, cat_micon) VALUES('".$gt['name']."', '".$gt['game']."', '".$gt['icon']."', '".$gt['descri']."', '".$gt['color']."', '".$gt['seo']."', '".$gt['micon']."' )");
	
	$w->redirectTo($w->settings['direccion_url'].'/admin/cats?save=true');
	}
	
	return $data;
	}
	
	/**
	*-------------------------------------------------------------
	*                   loadUsersa();
	*       @action cargar usuarios y paginacion
	*-------------------------------------------------------------
	**/
	function loadusersa($id, $type){
	global $w, $wuser;
	
	if($id){
	
	// EDITAR USUARIO
	if($type == 'edit'){
	$edu = array(
	'nombre' => $w->setSecure($_POST['nm']),
	'ap' => $w->setSecure($_POST['ap']),
	'nm' => $w->setSecure($_POST['nmo']),
	'rga' => $w->setSecure($_POST['rg']),
	'em' => $w->setSecure($_POST['cor']),
	'sx' => $w->setSecure($_POST['ssx']),
	);

	$obWortsIU = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".(int)$id."'"));
	$wotsInrK = ($obWortsIU['worts']) ? $obWortsIU['worts'] : 0;
    if(mysql_query("UPDATE `usuarios` SET
	`usuario_nombre` = \"".$edu['nombre']."\",
	`name_original` = \"".$edu['nm']."\",
	`ap_original` = \"".$edu['ap']."\",
	`usuario_email` = \"".$edu['em']."\",
	`user_sexo` = \"".$edu['sx']."\"
    WHERE `usuario_id` = \"".$id."\"")){ $data = '1: Editado correctamente.'; }else{ $data = '0: Ocurrio un error, Intenta nuevamente.'; }
	}
    // END EDITAR USUARIO
	
	// MOSTRAR USUARIO
	if($type == 'display'){
	$query = mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$id."'");
	$data = mysql_fetch_assoc($query);
	$data['loadpaises'] = result_array(mysql_query("SELECT * FROM u_paises"));
	$data['loadrangos'] = result_array(mysql_query("SELECT * FROM rangos"));
	}
	// END MOSTRAR USUARIO

	// MOSTRAR USUARIOS BANEADOS
	if($type == 'baneds'){
	$data['array'] = result_array(mysql_query("SELECT * FROM usuarios WHERE banned='1'"));
	}
	// END MOSTRAR USUARIOS BANEADOS
	}else{ $data = '0: Identificador no existe.'; }

	return $data;
	}
	
	/*
	*-------------------------------------------------------------
	*                CARGAR RANGOS & EDITAR
	*                  @action LOAD/EDIT
	*-------------------------------------------------------------
	*/
	function rangosHe($id, $type){
	global $w;
	
	$query = mysql_query("SELECT * FROM rangos");
	$data['display'] = result_array($query);
	
	// EDITAR
	if($type == 'editar'){
	$r = array(
    'name' => $w->setSecure($_POST['name']),
    'des' => $w->setSecure($_POST['des']),
    'icon' => $w->setSecure($_POST['icon']),
    'co' => $w->setSecure($_POST['co']),
    'type' => $w->setSecure($_POST['type']),
    'cant' => $w->setSecure($_POST['cant']),
    'puntos' => $w->setSecure($_POST['punt']),
    'permisos' => $w->setSecure($_POST['perm']),
    'tipus' => $w->setSecure($_POST['tipu']),
    'dondus' => $w->setSecure($_POST['dondu'])
	);
	
	if(mysql_query("UPDATE rangos SET
	name = '".$r['name']."',
	descripcion = '".$r['des']."',
	icono = '".$r['icon']."',
	mod_juegos = '".$r['type']."',
	mod_new ='".$r['cant']."',
	admin_home = '".$r['puntos']."',
	admin_juegos = '".$r['permisos']."',
	color = '".$r['co']."',
	r_mod1 = '".$r['tipus']."',
	r_mod2 = '".$r['dondus']."'
	WHERE id_rango='".$id."'
	")) $data = '1: Cambios guardados correctamente.'; else $data = '0: Ocurrio un error, intenta nuevamente.';
	}
    // END EDITAR

    // INFO POR RANGO
	if($type == 'ha'){
	$query = mysql_query("SELECT * FROM rangos WHERE id_rango='".$id."'");
	$data = mysql_fetch_assoc($query);
	}
	// END INFO POR RANGO

	// AGREGAR
	if($type == 'add'){
	$r = array(
    'name' => $w->setSecure($_POST['name']),
    'des' => $w->setSecure($_POST['des']),
    'icon' => $w->setSecure($_POST['icon']),
    'co' => $w->setSecure($_POST['co']),
    'type' => $w->setSecure($_POST['type']),
    'cant' => $w->setSecure($_POST['cant']),
    'puntos' => $w->setSecure($_POST['punt']),
    'permisos' => $w->setSecure($_POST['perm']),
    'tipus' => $w->setSecure($_POST['tipu']),
    'dondus' => $w->setSecure($_POST['dondu'])
	);
	if(mysql_query("INSERT INTO rangos(
	name,
	descripcion,
	icono,
	mod_juegos,
	mod_new,
	admin_home,
	admin_juegos,
	color,
	r_mod1,
	r_mod2
	) VALUES(
    '".$r['name']."',
    '".$r['des']."',
    '".$r['icon']."',
    '".$r['type']."',
    '".$r['cant']."',
    '".$r['puntos']."',
    '".$r['permisos']."',
    '".$r['co']."',
    '".$r['tipus']."',
    '".$r['dondus']."')")) $data = '1: Creado correctamente.'; else $data = '0: Ocurrio un error, intenta nuevamente.';
	}
	// END AGREGAR

	return $data;
	}
	
/*** OBTENER IMAGENES DE CARPETAS ***/

function get_icons($f = 'cats', $size = null){
		global $web;
        $arr_ext = array('jpg', 'png', 'gif');
        $mydir = opendir(TS_ROOT.'/images/icons/'.$f);
        while($file = readdir($mydir)){
            $ext = substr($file, -3);
            if(in_array($ext, $arr_ext)){
                if(!empty($size)){
                    $im_size = substr($file, -6, 2);
                    if ($size == $im_size)
                        $icons[] = substr($file, 0, -7);
                }else $icons[] = $file;
            }
        }
        return $icons;
    }

    /*
    * 
    * ESTADISTICAS 
    *
    */

    function statics($type){
    if($type == 1){
    	// ESTADISTICAS GLOBALES
    	  // VISITAS
    $queryvi = result_array(mysql_query("SELECT *, COUNT(*) AS total FROM visitas GROUP BY type"));
    $data['visitas'] = $this->armStatics($queryvi, 1, 'v_hace');
         // ACTIVIDAD
    $queryactsql = result_array(mysql_query("SELECT COUNT(*) AS total FROM u_actividad GROUP BY ac_date"));
    $data['actividad'] = $this->armStatics($queryactsql, 2, 'ac_hace');
    }else{ $data = '0: Datos indefinidos.'; }
    	return $data;
    }

    /*
    * 
    * END ESTADISTICAS
    *
    */

    /****************** Visitas  *****************/

    function whits(){
        /* 24 HRS */
        $time = time()-(60*60*24);

 $data['horas'] = mysql_query('SELECT * FROM visitas WHERE v_hace > \''.$time.'\'');
$data = mysql_num_rows($data['horas']); 

    	return $data;
    }

     /****************** LOGROS (MEDALLAS)  *****************/

//=> MEDALLAS
	
	function get_medals(){
		$query = mysql_query('SELECT m.* FROM admin_medals AS m');
		$i = 0;
		while($row = mysql_fetch_assoc($query)){
			$query_users = mysql_query('SELECT ma_id FROM admin_medals_assign WHERE m_id = \''.$row['m_id'].'\'')->num_rows;
			$data[$i] = $row;
			$data[$i]['m_users'] = $query_users;
			$i++;
		}
		return $data;
	}
	
	function see_medal($m_id){
		global $mysqli;
		$query = mysql_query('SELECT m_title FROM admin_medals WHERE m_id = \''.$m_id.'\' LIMIT 1');
		while($row = mysql_fetch_assoc($query)) $data['m'][] = $row;
		$query_users =  mysql_query('SELECT ma.ma_id, ma.ma_date, u.u_id, u.u_nick, u.u_email, u.u_last_active, u.u_date FROM admin_medals_assign AS ma LEFT JOIN users AS u ON u.u_id = ma.ma_user WHERE ma.m_id = \''.$m_id.'\' ORDER BY ma.ma_id DESC');
		while($row = mysql_fetch_assoc($query_users)) $data['users'][] = $row;
		return $data;
	}
	
	function medals_types(){
		$array_types = array(
							1 => 'Puntos recibidos',
							2 => 'Puntos dados',
							3 => 'Posts creados',
							4 => 'Temas creados',
							5 => 'Im&aacute;genes subidas',
							6 => 'Comentarios en posts',
							7 => 'Respuestas en temas',
							8 => 'Comentarios en Im&aacute;genes',
							9 => 'Seguidores',
							10 => 'Rango',
							11 => 'hashtag'
						);
		return $array_types;
	}
	
	function add_medal(){
		global $w, $wuser;
		$m_title = $w->setSecure($_POST['m_title']);
		$m_desc = $w->setSecure($_POST['m_desc']);
		$m_cant = $w->setSecure($_POST['m_cant']);
		$m_type = intval($_POST['m_type']);
		$m_rank = $w->setSecure($_POST['m_rank']);
		$m_image = $w->setSecure($_POST['m_icon']);
		$m_especial = $w->setSecure($_POST['m_especial']);
		$m_types = $this->medals_types();
		
		if($m_title == '') return '0: Ingresa el t&iacute;tulo de la medalla';
		if($m_desc == '') return '0: Ingresa la descripci&oacute;n de la medalla';
		if($m_types[$m_type] == '') return '0: El tipo de medalla no es v&aacute;lido';
		
		if($m_type == 10) $m_cant = 0;
		else $m_rank = 0;
		
		mysql_query('INSERT INTO admin_medals (m_title, m_desc, m_autor, m_image, m_cant, m_type, m_rank, m_date, m_especial) VALUES (\''.$m_title.'\', \''.$m_desc.'\', \''.$_SESSION['uid'].'\', \''.$m_image.'\', \''.$m_cant.'\', \''.$m_type.'\', \''.$m_rank.'\', \''.time().'\', \''.$m_especial.'\')');
		return '1: Medal is ADD!';
	}
	
	function save_medal($m_id){
		global $w;
		
		// DATOS DE LA MEDALLA
		$query = mysql_query('SELECT m_id FROM admin_medals WHERE m_id = \''.$m_id.'\'');
		if(mysql_num_rows($query) == '' or mysql_num_rows($query) == 0) return '0: Esta medalla no existe';
		
		// VARIABLES
		$m_title = $w->setSecure($_POST['m_title']);
		$m_desc = $w->setSecure($_POST['m_desc']);
		$m_cant = $w->setSecure($_POST['m_cant']);
		$m_type = intval($_POST['m_type']);
		$m_rank = $w->setSecure($_POST['m_rank']);
		$m_image = $w->setSecure($_POST['m_icon']);
		$m_especial = $w->setSecure($_POST['m_especial']);
		$m_types = $this->medals_types();
		
		// CAMPOS VACIOS
		if($m_title == '') return '0: Ingresa el t&iacute;tulo de la medalla';
		if($m_desc == '') return '0: Ingresa la descripci&oacute;n de la medalla';
		if($m_types[$m_type] == '') return '0: El tipo de medalla no es v&aacute;lido';
		if($m_type == 10) $m_cant = 0;
		else $m_rank = 0;
		
		// NUEVOS DATOS
		mysql_query('UPDATE admin_medals SET m_especial=\''.$m_especial.'\', m_title = \''.$m_title.'\', m_desc = \''.$m_desc.'\', m_image = \''.$m_image.'\', m_cant = \''.$m_cant.'\', m_type = \''.$m_type.'\', m_rank = \''.$m_rank.'\' WHERE m_id = \''.$m_id.'\' LIMIT 1');
		
		// RETORNAMOS
		return '1: Ok save';
	}
	
	function medal_info($m_id){
		global $mysqli;
		$query = $mysqli->query('SELECT m.* FROM admin_medals AS m WHERE m.m_id = \''.$m_id.'\'');
		$data = $query->fetch_assoc();
		//if(empty($data['m_id'])) die('La medalla seleccionada no existe');
		return $data;
	}
	
	function del_medal($m_id){
		global $mysqli;
		$query = $mysqli->query('SELECT m_id FROM admin_medals AS m WHERE m.m_id = \''.$m_id.'\'');
		$data = $query->fetch_assoc();
		if(empty($data['m_id'])) return '0: La medalla seleccionada no existe';
		$mysqli->query('DELETE FROM admin_medals WHERE m_id = \''.$m_id.'\'');
		$mysqli->query('DELETE FROM admin_medals_assign WHERE m_id = \''.$m_id.'\'');
		return '1: Ok del';
	}
	
	function del_medal_assign($ma_id){
		global $mysqli;
		$query = $mysqli->query('SELECT ma_id FROM admin_medals_assign WHERE ma_id = \''.$ma_id.'\'');
		$data = $query->fetch_assoc();
		if(empty($data['ma_id'])) return '0: La asignaci&oacute;n que busca no existe';
		$mysqli->query('DELETE FROM admin_medals_assign WHERE ma_id = \''.$ma_id.'\'');
		return '1: Ok del assign';
	}

	/****************** ADMINISTRACIÓN DE BUGS, DENUNCIAS ******************/

	function getBugs(){
		$query = mysql_query("SELECT * FROM bugs");
		$data = result_array($query);
        $i = 0;
        foreach($data as $row){
        	$hel = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$row['b_user']."'"));
        $data[$i]['b_userr'] = $hel['usuario_nombre'];
        $i++;	
        }
		return $data;
	}

	function getDenuncias(){
		$query = mysql_query("SELECT * FROM w_denuncias");
		$data = result_array($query);
 
        $i = 0;
        foreach ($data as $key => $row) {
        	if($row['d_type'] == 1 or $row['d_type'] == '1'){  $data[$i]['type'] = "Nota"; }
        	if($row['d_type'] == 3 or $row['d_type'] == '3'){  $data[$i]['type'] = "Usuario/Miembro"; }
        	if($row['d_type'] == 5 or $row['d_type'] == '5'){  $data[$i]['type'] = "Foro/Comunidad"; }
        	if($row['d_type'] == 6 or $row['d_type'] == '6'){  $data[$i]['type'] = "Tema"; }

            if($row['d_type'] == 1 or $row['d_type'] == '1'){  $tipoes = "posts"; }
        	if($row['d_type'] == 3 or $row['d_type'] == '3'){  $tipoes = "usuario"; }
        	if($row['d_type'] == 5 or $row['d_type'] == '5'){  $tipoes = "comunidad"; }
        	if($row['d_type'] == 6 or $row['d_type'] == '6'){  $tipoes = "tema"; }

        include("../ext/datos.php");
        $e = 0;
        foreach($tsDenuncias[$tipoes] as $rey){
        if($row['d_razon'] == $e){ $data[$e]['razon'] = $rey; }else{}
        $e++;
         }

        $i++;
        }

		return $data;
	}

	/****************** ADMINISTRACIÓN DE COMUNIDADES ******************/

    function GetAdminComus()
    {
        global $w;
        //
        $max = 20; // MAXIMO A MOSTRAR
        $limit = $w->setPageLimit($max, true);
        //
        $query = mysql_query('SELECT u.usuario_nombre, c.* FROM c_comunidades AS c LEFT JOIN usuarios AS u ON c.c_autor = u.usuario_id ORDER BY c.c_fecha DESC LIMIT '.$limit);
        //
        $data['data'] = result_array($query);

        // PAGINAS
        $query = mysql_query('SELECT COUNT(*) FROM c_comunidades WHERE c_id > \'0\'');
        list($total) = mysql_fetch_row($query);

        $data['pages'] = $w->pageIndex($w->settings['direccion_url']."/admin/comunidades?", $_GET['s'], $total, $max);
        //
        return $data;
    }
	
	// ADMINISTRAR TEMAS POR COMUNIDAD
	function GetAdminTemas()
    {
        global $w;
        //
		$comid = $w->setSecure($_GET['comid']);
        $max = 20; // MAXIMO A MOSTRAR
        $limit = $w->setPageLimit($max, true);
        //
        $query = mysql_query('SELECT u.usuario_nombre, c.c_nombre_corto, t.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON c.c_id = t.t_comunidad LEFT JOIN usuarios AS u ON t.t_autor = u.usuario_id WHERE t.t_comunidad = \''.(int)$comid.'\'ORDER BY t.t_fecha DESC LIMIT '.$limit);
        //
        $data['data'] = result_array($query);
		// NOMBRE DE LA COMUNIDAD
		$com = mysql_fetch_assoc(mysql_query('SELECT c_nombre FROM c_comunidades WHERE c_id = \''.(int)$comid.'\' LIMIT 1'));
		$data['c_nombre'] = $com['c_nombre'];
        // PAGINAS
        $query = mysql_query('SELECT COUNT(*) FROM c_temas WHERE t_comunidad = \''.(int)$comid.'\'');
        list($total) = mysql_fetch_row($query);

        $data['pages'] = $w->pageIndex($w->settings['direccion_url']."/admin/comunidades?act=temas&comid=".$_GET['comid'], $_GET['s'], $total, $max);
        //
        return $data;
    }
	
	/******************************* NOTICIAS PARA EL STAFF ***********************************/
	
	/*
    getNotistaff()
    */
	function getNotistaff()
    {
        global $tsCore;
        //
        $n_id = $tsCore->setSecure($_GET['nid']);
        //
        $query = mysql_query('SELECT `n_id`, `n_body`, `n_date`, `n_active` FROM w_nstaff WHERE n_id = \'' .
            (int)$n_id . '\' LIMIT 1');
        $data = mysql_fetch_assoc($query);

        //
        return $data;
    }
  
  /*
    getNstaff()
    */
	
	function getNstaff()
    {

        //
        $query = mysql_query('SELECT * FROM w_nstaff WHERE n_id >0 ORDER BY n_id DESC');
        $data = result_array($query);

        //
        return $data;
    }

  /*
    newNstaff()
    */
    function newNstaff()
    {
        global $w, $wuser;
        //
        $n_body = $w->setSecure(substr($_POST['n_body'],
            0, 300));
        $n_active = empty($_POST['n_active']) ? 0 : 1;
        if (!empty($n_body))
        {
            if (mysql_query('INSERT INTO `w_nstaff` (`n_body`, `n_date`, `n_active`) VALUES (\'' .
                $n_body . '\', \'' . time() . '\', \'' . $n_active .'\')'))
                return true;
        }
        //
        return false;
    }
	

	
	/*
    editNstaff()
    */
    function editNstaff()
    {
        global $tsCore, $tsUser;
        //
        $n_id = intval($_GET['nid']);
        $n_body = $w->setSecure(substr($_POST['n_body'], 0,300));
        $n_active = empty($_POST['n_active']) ? 0 : 1;
        //
        if (!empty($n_body))
        {
            if (mysql_query('UPDATE `w_nstaff` SET `n_body` = \'' .
                $n_body . '\', n_active = \'' . $n_active . '\' WHERE n_id = \'' . (int)
                $n_id . '\''))
                return true;
        }
    }
	
	/*
    delNstaff();
    */
    function delNstaff()
    {
        $n_id = $_GET['nid'];
        if (!mysql_num_rows(mysql_query('SELECT `n_id` FROM `w_nstaff` WHERE `n_id` = \'' .
            (int)$n_id . '\' LIMIT 1')))
        {
            return 'El id ingresado no existe.';
        }
        mysql_query('DELETE FROM `w_nstaff` WHERE `n_id` = \'' . (int)$n_id . '\'');
    }
	
	function setNstaff()
    {
        global $wuser;

        $nstaff = $_POST['nid'];

        $query = mysql_query('SELECT n_active FROM w_nstaff WHERE n_id = \'' . (int)
            $nstaff . '\'');
        $data = mysql_fetch_assoc($query);


        // COMPROBAMOS
        if ($data['n_active'] == 1)
        {
            if (mysql_query('UPDATE w_nstaff SET n_active = \'0\' WHERE n_id = \'' . (int)
                $nstaff . '\''))
            {
                return '2: Noticia desactivada';
            } else
                return '0: Ocurri&oacute, un error';
        } else
        {
            if (mysql_query('UPDATE w_nstaff SET n_active = \'1\' WHERE n_id = \'' . (int)
                $nstaff . '\''))
            {
                return '1: Noticia activada.';
            } else
                return 'Ocurri&oacute; un error';
        }
    }
	
	
		/*********************************************************************************/
	/*                     ZONA VIP                               */
    /*********************************************************************************/
	
	 	/*
    Miembros Vip Global()
    */
    function miembrosvip()
    {

        //
        $query = mysql_query('SELECT u.usuario_id, u.usuario_nombre, u.rango, u.user_vip, r.rango_id, r.r_name, r.r_color FROM usuarios AS u LEFT JOIN u_rangos AS r ON u.rango = r.rango_id WHERE u.user_vip = 1  ORDER BY user_id ASC');
        $data = result_array($query);

        //
        return $data;
    }
	
	// Vip..
	function rangos_vip()
    {

        //
        $query = mysql_query('SELECT r.rango_id, r.r_name, r.r_color, u.usuario_id, u.rango_vip, COUNT(u.rango_vip) as total FROM u_rangos AS r LEFT JOIN usuarios AS u ON r.rango_id = u.rango_vip WHERE rango_vip >=1 GROUP BY r.rango_id ORDER BY u.usuario_id ASC');
        $data = result_array($query);

        //
        return $data;
    }
	
    // Quitar Usuarios Vip
	function quitar_vip()
    {
        $quitar = $_GET['nid'];
		$design=0;
        if (!mysql_num_rows(mysql_query('SELECT `usuario_id` FROM `usuarios` WHERE `usuario_id` = \'' .
            (int)$quitar . '\' LIMIT 1')))
        {
            return (mysql_error());
        }
            mysql_query('UPDATE `usuarios` SET `usuario_id` = \'' . $quitar . '\', `user_vip` = \'' .
                $design .'\' WHERE usuario_id = \'' . (int)$quitar . '\'');
    }
	
	// Quitar Rangos Vip
	function quitar_rvip()
    {
        $quitar = $_GET['nid'];
		$design=0;
        if (!mysql_num_rows(mysql_query('SELECT `rango_id` FROM `u_rangos` WHERE `rango_id` = \'' .
            (int)$quitar . '\' LIMIT 1')))
        {
            return  'El id ingresado no existe.';
        }
            mysql_query('UPDATE `usuarios` SET `rango` = \'' . $quitar . '\', `rango_vip` = \'' .
                $design .'\' WHERE rango = \'' . (int)$quitar . '\'');
    }
	
	/*
    Agregar Usuarios Vip()
    */
    function agregar_vip()
    {
        global $w;
        //
		$agregar= $w->setSecure($_POST['iduser']);
		$design=1;
        if (!empty($agregar))
        {
            if (mysql_query('UPDATE `usuarios` SET `usuario_id` = \'' . $agregar . '\', `user_vip` = \'' .
                $design .'\' WHERE usuario_id = \'' . (int)$agregar . '\''))
                return true;
        }
        //
        return false;
    }
	
	// New Rangos Vip
	function rango_vip()
    {
        global $w;
        //
		$agregar= $w->setSecure($_POST['idran']);
        if (!empty($agregar))
        {
            if (mysql_query('UPDATE `usuarios` SET `rango_vip` = \'' .
                $agregar .'\' WHERE rango = \'' . (int)$agregar . '\''))
                return true;
        }
        //
        return false;
    }



    /********* ------------------------------------------------------------
	*
	*                    Emoticones Administrables
	*
	*********--------------------------------------------------------------/
 
    /*
    */

    function emot($type, $id){
    global $w;

    if($type == 'add'){
        $ei = array(
    'id' => $w->setSecure($_POST['id']),
    'nombre' => $w->setSecure($_POST['nom']),
    'pref' => $w->setSecure($_POST['pref']),
    'pref2' => $w->setSecure($_POST['pref2']),
    'img' => $w->setSecure($_POST['img']),
    'mem' => $w->setSecure($_POST['mem']),
    'edadmin' => $_SESSION['uid'],
    'eadmin' => $_SESSION['uid'],
    'hace' => time(),
    );
    if(mysql_query("INSERT INTO emoticones(e_nombre, e_prefijo, e_prefijo2, e_imagen, e_meme, e_admin, e_edadmin, e_hace) VALUES(
    '".$ei['nombre']."',
    '".$ei['pref']."', 
    '".$ei['pref2']."',
    '".$ei['img']."',
    '".$ei['mem']."',
    '".$ei['adadmin']."',
    '".$ei['eadmin']."',
    '".$ei['hace']."'
     )")) return '1: Agregado correctamente.'; else return '0: Ocurrio un error Intenta nuevamente.';
    }elseif($type == 'edit'){
    $ei = array(
    'id' => $w->setSecure($_POST['id']),
    'nombre' => $w->setSecure($_POST['nom']),
    'pref' => $w->setSecure($_POST['pref']),
    'pref2' => $w->setSecure($_POST['pref2']),
    'img' => $w->setSecure($_POST['img']),
    'mem' => $w->setSecure($_POST['mem']),
    'edadmin' => $_SESSION['uid'],
    'hace' => time(),
    );
    if(mysql_query("UPDATE emoticones SET 
    e_nombre='".$ei['nom']."', 
    e_prefijo='".$ei['pref']."', 
    e_prefijo2='".$ei['pref2']."',
    e_imagen='".$ei['img']."',
    e_meme='".$ei['mem']."',
    e_edadmin='".$ei['adadmin']."'
    WHERE e_id='".$ei['id']."'")) return '1: Editado correctamente.'; else return '0: Ocurrio un error, Intenta nuevamente.';
    }elseif($type == 'delet'){
     if(mysql_query("DELETE FROM emoticones WHERE e_id='".$id."'")) return '1: Borrado correctamente.'; else return '0: OCurrio un error, Intenta nuevamente.';
    }elseif($type == 'view') {
    	$query = mysql_query("SELECT * FROM emoticones ");
    	$data = result_array($query);
    	return $data;
    }elseif($type == 'views'){
    	$query = mysql_query("SELECT * FROM emoticones WHERE e_id='".$id."'");
    	$data = result_array($query);
    	return $data;
    }else{

    	return '0: Define una acción.';
    }

    }
	
	/********* ------------------------------------------------------------
	*
	*                    SISTEMAPS
	*
	*********--------------------------------------------------------------/
	
		/*
   Sitemap y SEO administrables
    */
	//GET URLs SITEMAP
	function smUrls(){
	global $tsSiteMap;
	return $tsSiteMap->getSitemap();
	}
	
	//Generar sitemap
	function generateSitemap(){
	global $tsSiteMap;
	return $tsSiteMap->generateSiteMap();
	} 
	
	//Generar sitemap
	function addUrl(){
	global $tsSiteMap, $tsCore;
	return $tsSiteMap->addURL(filter_var($_POST['url'], FILTER_VALIDATE_URL), $tsCore->setSecure($_POST['prioridad']), $tsCore->setSecure($_POST['frecuencia']));
	} 
	
	//Obtener URls de la BD
	function smUrlsBD(){
	global $tsSiteMap;
	return $tsSiteMap->getURLsBD();
	}
	
	//Restaurar SiteMap
	function restaurarSitemap(){
	global $tsSiteMap;
	return $tsSiteMap->CreateSiteMap();
	}
	
	//Borrar URL
	function deleteUrl(){
	global $tsSiteMap;
	return $tsSiteMap->removeUrlBD((int)$_GET['id']);
	} 
	
		//Borrar URL
	function getUrl(){
	global $tsSiteMap;
	return $tsSiteMap->getUrl((int)$_GET['id']);
	} 
	
	function editUrl(){
	global $tsSiteMap, $w;
	return $tsSiteMap->editUrl((int)$_GET['id'], filter_var($w->setSecure($_POST['url']), FILTER_VALIDATE_URL), $w->setSecure($_POST['frecuencia']), $w->setSecure($_POST['prioridad']));
	}
	
	//Guardar Configuración
		function save_conf(){
        global $w;
        //
        $c = array(
            'sm_posts' => empty($_POST['sm_posts']) ? 0 : 1,
            'sm_fotos' => empty($_POST['sm_fotos']) ? 0 : 1,
            'sm_update_p' => empty($_POST['sm_update_p']) ? 0 : 1,
            'sm_update_f' => empty($_POST['sm_update_f']) ? 0 : 1,
           );
        // UPDATE
        if (mysql_query('UPDATE `wconfig` SET `sm_posts` = \'' . $c['sm_posts'] . '\', `sm_fotos` = \'' .
            $c['sm_fotos'] . '\', `sm_update_p` = \'' . $c['sm_update_p'] . '\', sm_update_f = \''.$c['sm_update_f'].'\' WHERE `id` = \'1\''))
            return true;
        else
            die(mysql_error());
    
	}

	/* PARA ESTADISTICAS */
	 
        function armStatics($data, $type, $hacet){
        $Statics = array(
            'total' => count($data),
            'data' => array(
            'today' => array('title' => 'Hoy', 'data' => array()),
            'yesterday' => array('title' => 'Ayer', 'data' => array()),
            'week' => array('title' => 'D&iacute;as Anteriores', 'data' => array()),
            'month' => array('title' => 'Este mes', 'data' => array()),
            'monthd' => array('title' => 'Hace 2 meses', 'data' => array()),
            'old' => array('title' => 'Estadisticas m&aacute;s antiguas', 'data' => array())
            )
        );
         # PARA CADA VALOR CREAR UNA CONSULTA
        foreach($data as $key => $val){
                // AGREGAMOS AL ARRAY ORIGINAL
                $dato = array_merge($val);
                // VARIBALES EXTRAS
                $oracion = $this->armOracion($dato);
                // DONDE PONERLO?
                $ac_date = $this->makeFecha($val[$hacet]);
                // PONER
                $Statics['data'][$ac_date]['data'][] = $oracion; 
        }
        return $Statics;
        }

     function armOracion($data){
     	$oracion = $data;
     $oracion['total'] = $data['total'];
     return $oracion;
     }

	 /**     
      * @name makeFecha
     * @access private
     * @params int
     * @return string
     */
    private function makeFecha($time){
        # VARIABLES LOCALES
        $tiempo = time() - $time; 
        $dias = round($tiempo / 86400);
        $hrs = round($tiempo / 3600);
        //
        if($dias <= 1) return 'today';
        elseif($dias >= 2 && $dias <= 2) return 'yesterday';
        elseif($dias <= 7) return 'week';
        elseif($dias <= 30) return 'month';
        elseif($dias <= 61) return 'monthd';
        else return 'old';
        #
    }

	/*FIN DE LA CLASS*/
}

?>