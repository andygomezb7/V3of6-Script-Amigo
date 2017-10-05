<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.groups.php
 * @author  Wortit Developers
 */
 
class wgroups{
/** INICIO DE LA CLASS **/


		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new wgroups();
    	}
		return $instance;
	}

	/*****
	*--------------------------------------------------------
	*            loadGlogged();
	*    @action CARGAR GRUPOS CREADOS POR EL LOGGEADO
	*--------------------------------------------------------
	******/
	
	function loadGlogged(){
	$query = mysql_query("SELECT * FROM grupos WHERE idadmin1='".$_SESSION['uid']."'");
	$data = result_array($query);
	return $data;
	}
    
	/*****
	*---------------------------------------------------------------------
	*                                 getG();
	*                  @action CARGAR GRUPO POR SU 'wdefined'
	*----------------------------------------------------------------------
	*****/
	
	function getG($i){
	$query = mysql_query("SELECT * FROM grupos WHERE wdefined='".$i."'");
	$data = mysql_fetch_assoc($query);
	$querynaa = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$data['idadmin1']."'"));
	$data['admin'] = $querynaa['usuario_nombre'];
	
    $querynene = mysql_query("SELECT * FROM member_grupos WHERE id_grupos='".$data['idgrupo']."' AND idusuario='".$_SESSION['uid']."'");
	$ksdfja = mysql_fetch_assoc($querynene);
	$data['j'] = $ksdfja['id_grupos'];
	$data['soli']['estado'] = $ksdfja['estado'];
	
	$queryadminseie = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idadmin1='".$_SESSION['uid']."'"));
	$data['esadmin'] = $queryadminseie['nombre'];
	
	return $data;
	}

	/****
	*--------------------------------------------------------------
	*                   AUTENTIFICAR SOLICITUDES
	*           @action MOSTRAR Y ACEPTAR/ELIMINAR SOLICITUDES
	*---------------------------------------------------------------
	***/
	
	function getPetG($idg, $gi){
		global $tsWeb, $tsActividad;
	if($idg || $gi){
	$queryadmin = mysql_num_rows(mysql_query("SELECT * FROM grupos WHERE idadmin1='".$_SESSION['uid']."' AND idgrupo='".$gi."'"));
	if($queryadmin){
	mysql_query("UPDATE member_grupos SET estado='1' WHERE idregistro='".$idg."'");
	$ksdfmsdnl = mysql_fetch_assoc(mysql_query("SELECT * FROM member_grupos WHERE idregistro='".$idg."'"));
	$tsWeb->getNotifis($_SESSION['uid'], 45, $ksdfmsdnl['id_grupos'], $ksdfmsdnl['idusuario']);
	$tsActividad->setActividad(51, $ksdfmsdnl['id_grupos']);
	return "1: Miembro aceptado correctamente.";
	}else{ 	return '0: El miembro no se ha podido agregar, Intenta nuevamente.'; }
	}else{
	return '0: Llena los datos solicidados';
	}
	}
	
	/***
	*---------------------------------------------------------
	*                   UPLOAD DE SOLICITUDES
	*                 @action AGREGAR SOLICITUDES
	*---------------------------------------------------------
	***/
	
	function addGiF($id, $g){
		global $tsActividad, $tsWeb;
	$query = mysql_query("SELECT * FROM member_grupos WHERE id_grupos='".$g."' AND idusuario='".$id."'");
	$j = mysql_num_rows($query);
	
	if($j == 1){
	return false;
	}else{
	
	$u = $_SESSION['uid'];
	$efe = time();
	mysql_query("INSERT INTO member_grupos(estado, id_grupos, idusuario, fecha_registro) VALUES('0', '".$g."', '".$id."', '".$efe."' )");
	$skgnaelkw = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$g."'"));
	$tsWeb->getNotifis($_SESSION['uid'], 38, $g, $skgnaelkw['idadmin1']);
	$tsActividad->setActividad(50, $g);
	return true;
	}

	}

	
	/****
	*---------------------------------------------------
	*                    MOSTRAR SOLICITUDES 
	*          @action MOSTRAR TODAS LAS SOLICITUDES
	*----------------------------------------------------
	****/
	
	function sDuAy($t){
	$query = mysql_query("SELECT s.*, u.* FROM member_grupos AS s LEFT JOIN usuarios AS u ON s.idusuario = u.usuario_id WHERE id_grupos='".$t."' AND estado='0'");
	$data = result_array($query);
	return $data;
	}
	
	/****
	*----------------------------------------------------------------
	*               MOSTRAR GRUPOS A LOS QUE PERTENECE
	*          @action MOSTRA GRUPOS A LOS QUE PERTENECE
	*----------------------------------------------------------------
	****/
	function loadergtru(){
	$query = mysql_query("SELECT m.*, g.* FROM member_grupos AS m LEFT JOIN grupos AS g ON m.id_grupos = g.idgrupo WHERE m.idusuario='".$_SESSION['uid']."' AND m.estado='1'");
	return result_array($query);
	}
	
    	/****
	*----------------------------------------------------------------
	*               MOSTRAR ULTIMOS GRUPOS
	*          @action MOSTRAR GRUPOS RECIENTES
	*----------------------------------------------------------------
	****/
	function loadrecgtru(){
	$query = mysql_query("SELECT * FROM grupos LIMIT 18");
	$data = result_array($query);
	$i = 0;
	foreach ($data as $row) {
		$s = mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1'");
    $data[$i]['members'] = result_array($s);
    $ds5fa6sd5fwee = mysql_num_rows($s);
    $arat = mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND s.id_emisor='".$_SESSION['uid']."'");
    $sdfkasldkfmasfwe = mysql_num_rows($arat);
    $ararara = result_array($arat);
    $sdkjfnslk = mysql_fetch_assoc(mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND u.usuario_id != '".$_SESSION['uid']."' AND s.id_emisor='".$_SESSION['uid']."' LIMIT 1"));
    if(!$ds5fa6sd5fwee){ $ds5fa6sd5fwe = 0; }else{ $ds5fa6sd5fwe = $ds5fa6sd5fwee; }
    $sdf1aw6e5a16wew = 9-$ds5fa6sd5fwe;
    for($e = 1; $e <= $sdf1aw6e5a16wew; $e++){
    if($e == $sdf1aw6e5a16wew){	$where[$e] .= $e; }else{ $where[$e] .= $e; } 
    }

    $countar = count($where);
    $sdkalkn = $countar+$ds5fa6sd5fwee;
    if($sdkalkn >= 10){
    	$kjsdlfknad = $sdkalkn-9;
    $kselfksm = $sdf1aw6e5a16wew-$kjsdlfknad; 
    for($o = 1; $o <= $kselfksm; $o++){
    if($o == $sdf1aw6e5a16wew){	$sdsdfsdf[$o] .= $o; }else{ $sdsdfsdf[$o] .= $o; } 
    }
    $data[$i]['members'][$i]['numero'] = $sdsdfsdf;
    }else{
    $data[$i]['members'][$i]['numero'] = $where;
    }
    $data[$i]['nunumero'] = $ds5fa6sd5fwee;
    $data[$i]['user1'] = $sdkjfnslk;
    $data[$i]['users'] = $sdfkasldkfmasfwe-1;
    $data[$i]['usersarray'] = $ararara;
    $i++;
	}
	return $data;
	}

        	/****
	*----------------------------------------------------------------
	*               Soy miembro en: 
	*          @action MOSTRAR LOS GRUPOS EN LOS QUE SOY MIEMBRO
	*----------------------------------------------------------------
	****/
	function loadmembergroupsoy(){
	$query = mysql_query("SELECT m.*, g.* FROM member_grupos AS m LEFT JOIN grupos AS g ON m.id_grupos = g.idgrupo WHERE m.estado='1'");
	$data = result_array($query);
	$i = 0;
	foreach ($data as $row) {
		$s = mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1'");
    $data[$i]['members'] = result_array($s);
    $ds5fa6sd5fwee = mysql_num_rows($s);
    $arat = mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND s.id_emisor='".$_SESSION['uid']."'");
    $sdfkasldkfmasfwe = mysql_num_rows($arat);
    $ararara = result_array($arat);
    $sdkjfnslk = mysql_fetch_assoc(mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND u.usuario_id != '".$_SESSION['uid']."' AND s.id_emisor='".$_SESSION['uid']."' LIMIT 1"));
    if(!$ds5fa6sd5fwee){ $ds5fa6sd5fwe = 0; }else{ $ds5fa6sd5fwe = $ds5fa6sd5fwee; }
    $sdf1aw6e5a16wew = 9-$ds5fa6sd5fwe;
    for($e = 1; $e <= $sdf1aw6e5a16wew; $e++){
    if($e == $sdf1aw6e5a16wew){	$where[$e] .= $e; }else{ $where[$e] .= $e; } 
    }

    $countar = count($where);
    $sdkalkn = $countar+$ds5fa6sd5fwee;
    if($sdkalkn >= 10){
    	$kjsdlfknad = $sdkalkn-9;
    $kselfksm = $sdf1aw6e5a16wew-$kjsdlfknad; 
    for($o = 1; $o <= $kselfksm; $o++){
    if($o == $sdf1aw6e5a16wew){	$sdsdfsdf[$o] .= $o; }else{ $sdsdfsdf[$o] .= $o; } 
    }
    $data[$i]['members'][$i]['numero'] = $sdsdfsdf;
    }else{
    $data[$i]['members'][$i]['numero'] = $where;
    }
    $data[$i]['nunumero'] = $ds5fa6sd5fwee;
    $data[$i]['user1'] = $sdkjfnslk;
    $data[$i]['users'] = $sdfkasldkfmasfwe-1;
    $data[$i]['usersarray'] = $ararara;
    $i++;
	}
	return $data;
	}

        	/****
	*----------------------------------------------------------------
	*               Mis grupos 
	*          @action MOSTRAR GRUPOS QUE HE CREADO YO
	*----------------------------------------------------------------
	****/
	function loadgroupsmios(){
	$query = mysql_query("SELECT * FROM grupos WHERE idadmin1='".$_SESSION['uid']."'");
	$data = result_array($query);
	$i = 0;
	foreach ($data as $row) {
		$s = mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1'");
    $data[$i]['members'] = result_array($s);
    $ds5fa6sd5fwee = mysql_num_rows($s);
    $arat = mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND s.id_emisor='".$_SESSION['uid']."'");
    $sdfkasldkfmasfwe = mysql_num_rows($arat);
    $ararara = result_array($arat);
    $sdkjfnslk = mysql_fetch_assoc(mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND u.usuario_id != '".$_SESSION['uid']."' AND s.id_emisor='".$_SESSION['uid']."' LIMIT 1"));
    if(!$ds5fa6sd5fwee){ $ds5fa6sd5fwe = 0; }else{ $ds5fa6sd5fwe = $ds5fa6sd5fwee; }
    $sdf1aw6e5a16wew = 9-$ds5fa6sd5fwe;
    for($e = 1; $e <= $sdf1aw6e5a16wew; $e++){
    if($e == $sdf1aw6e5a16wew){	$where[$e] .= $e; }else{ $where[$e] .= $e; } 
    }

    $countar = count($where);
    $sdkalkn = $countar+$ds5fa6sd5fwee;
    if($sdkalkn >= 10){
    	$kjsdlfknad = $sdkalkn-9;
    $kselfksm = $sdf1aw6e5a16wew-$kjsdlfknad; 
    for($o = 1; $o <= $kselfksm; $o++){
    if($o == $sdf1aw6e5a16wew){	$sdsdfsdf[$o] .= $o; }else{ $sdsdfsdf[$o] .= $o; } 
    }
    $data[$i]['members'][$i]['numero'] = $sdsdfsdf;
    }else{
    $data[$i]['members'][$i]['numero'] = $where;
    }
    $data[$i]['nunumero'] = $ds5fa6sd5fwee;
    $data[$i]['user1'] = $sdkjfnslk;
    $data[$i]['users'] = $sdfkasldkfmasfwe-1;
    $data[$i]['usersarray'] = $ararara;
    $i++;
	}
	return $data;
	}

	        	/****
	*----------------------------------------------------------------
	*                     Sugerir grupos
	*          @action MOSTRAR GRUPOS SUGERIDOS
	*----------------------------------------------------------------
	****/
	function loadgrosugered(){
	$query = mysql_query("SELECT * FROM grupos LIMIT 4");
	$data = result_array($query);
	$i = 0;
	foreach ($data as $row) {
		$s = mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1'");
    $data[$i]['members'] = result_array($s);
    $ds5fa6sd5fwee = mysql_num_rows($s);
    $arat = mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND s.id_emisor='".$_SESSION['uid']."'");
    $sdfkasldkfmasfwe = mysql_num_rows($arat);
    $ararara = result_array($arat);
    $sdkjfnslk = mysql_fetch_assoc(mysql_query("SELECT m.*, u.*, s.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id LEFT JOIN suscriptores AS s ON s.id_receptor = u.usuario_id WHERE m.id_grupos = '".$row['idgrupo']."' AND m.estado='1' AND u.usuario_id != '".$_SESSION['uid']."' AND s.id_emisor='".$_SESSION['uid']."' LIMIT 1"));
    if(!$ds5fa6sd5fwee){ $ds5fa6sd5fwe = 0; }else{ $ds5fa6sd5fwe = $ds5fa6sd5fwee; }
    $sdf1aw6e5a16wew = 9-$ds5fa6sd5fwe;
    for($e = 1; $e <= $sdf1aw6e5a16wew; $e++){
    if($e == $sdf1aw6e5a16wew){	$where[$e] .= $e; }else{ $where[$e] .= $e; } 
    }

    $countar = count($where);
    $sdkalkn = $countar+$ds5fa6sd5fwee;
    if($sdkalkn >= 4){
    	$kjsdlfknad = $sdkalkn-4;
    $kselfksm = $sdf1aw6e5a16wew-$kjsdlfknad; 
    for($o = 1; $o <= $kselfksm; $o++){
    if($o == $sdf1aw6e5a16wew){	$sdsdfsdf[$o] .= $o; }else{ $sdsdfsdf[$o] .= $o; } 
    }
    $data[$i]['members'][$i]['numero'] = $sdsdfsdf;
    }else{
    $data[$i]['members'][$i]['numero'] = $where;
    }
    $data[$i]['nunumero'] = $ds5fa6sd5fwee;
    $data[$i]['user1'] = $sdkjfnslk;
    $data[$i]['users'] = $sdfkasldkfmasfwe-1;
    $data[$i]['usersarray'] = $ararara;
    $i++;
	}
	return $data;
	}

	/****
	*--------------------------------------------------------
	*                CARGAR USUARIOS DE GRUPOS
	*             @action CARGAR USUARIOS DE GRUPOS
	*--------------------------------------------------------
	****/
	
	function loadergueu($i){
	$query1 = mysql_query("SELECT u.*, m.* FROM usuarios AS u  LEFT JOIN member_grupos AS m ON  u.usuario_id = m.idusuario WHERE m.id_grupos='".$i."'");
    $query['numero'] = mysql_num_rows($query1);
	$query = result_array($query1);
	//
	return $query;
	}
	
    /****
    *-------------------------------------------------------
    *                   CREAR NUEVO GRUPO
    *               @action INSERT INTO 'GROUPS'
    *--------------------------------------------------------
    ****/

    function gpnew(){
    	global $w, $tsWeb, $tsActividad;
    $querynom = mysql_num_rows(mysql_query("SELECT * FROM grupos WHERE nombre='".$_POST['ngp']."'"));
    $querycno = mysql_num_rows(mysql_query("SELECT * FROM grupos WHERE wdefined='".$_POST['ccgp']."'"));

    if($_SESSION['uid']){
    	if($_POST['ngp'] == ''){
        return '0: Rellena el campo: nombre.';
    }elseif($_POST['ccgp'] == ''){
    return '0: Rellena el campo: Nombre corto';    
    }elseif($_POST['cgp'] == ''){
    return '0: Rellena el campo: Categoria';
    }else{
    if($querynom == 1 or $querynom > 0){
    return '0: El nombre no esta disponible.';
    }else{
    if($querycno == 1 or $querycno > 0){
    return '0: El nombre corto no esta disponible';
    }else{
    	$sin_espacios = count_chars($_POST['ccgp'], 1);
    if(!empty($sin_espacios[32])){
    return '0: El nombre corto no deve contener espacios en blanco.';
    }else{
    $no = $w->setSecure($_POST['ngp']);
    $noc = $w->setSecure($_POST['ccgp']);
    $cat = $w->setSecure($_POST['cgp']);
    $i = mysql_query("INSERT INTO grupos(nombre, wdefined, categoria, idadmin1, fecha_creacion) VALUES('".$no."', '".$noc."', '".$cat."', '".$_SESSION['uid']."', '".time()."')");
    $grupoid = mysql_insert_id();
    mysql_query("INSERT INTO member_grupos(estado, id_grupos, idusuario, fecha_registro) VALUES('1','".$grupoid."','".$_SESSION['uid']."','".time()."')");
    if($i){ 
    $this->setnGrupo($_SESSION['uid'], 39, $grupoid);
    $tsActividad->setActividad(49, $grupoid);
    	return '1: Grupo creado correctamente.'; 
    }else{ return '0: No se ha podido crear el grupo, intenta nuevamente.'; }
    }
    }
    }
}
}else{
	return '0: Esta acción es solo para usuarios de '.$w->settings['name'].'.';
}

    }
      /*
	  *------------------------------------------------------
	  *                    EDTIAR GRUPO
	  *------------------------------------------------------
	  */

	  function editgroup(){
	  	global $w;

        $g = array(
        'nombre' => $w->setSecure($_POST['nom']),
        'avatar' => $w->setSecure($_POST['avt']),
        'portada' => $w->setSecure($_POST['port']),
        'desc' => $w->setSecure($_POST['desc']),
        'cat' => $w->setSecure($_POST['cat']),
	  	);

	     $typecab = substr($g['avatar'],-3);
	     $typeavt = substr($g['portada'],-3);
	  	if(!$g['nombre'] or !$g['avatar'] && !$g['portada'] && !$g['desc'] && !$g['cat']){
         return '0: Hace falta rellenar campos.';
	  	}else{
	  	if(!$_SESSION['uid']){
         return '0: Esta accion es solo para usuarios de '.$w->settings['name'];
	  	}else{
	  		$slfmse = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$_POST['type']."'"));
	  	if($slfmse['idadmin1'] != $_SESSION['uid']){
	  		return '0: No eres dueño de el grupo.';
	  	}else{
        if($typecab == 'jpg' or $typecab == 'png' or $typecab == 'gif'){ 
        if($typeavt == 'jpg' or $typeavt == 'png' or $typeavt == 'gif'){ 

	$hace = time();
	$skflkn = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$_POST['type']."'"));
    if($skflkn['avatar'] != $g['avatar']){
    $avatarwwwcab = '../files/uploads/'.$_SESSION['uid'].'_'.$hace.'_3283314.'.$typecab;
    copy($g['avatar'], $avatarwwwcab);
    $web = $w->settings['url'].'/files/uploads/'.$_SESSION['uid'].'_'.$hace.'_3283314.'.$typecab;
    mysql_query("INSERT INTO avatar_u(uidw, linkw, datew, avtu_type) VALUES('".$_SESSION['uid']."', '".$web."', '".$hace."', '7')");
	}else{ $web = $skflkn['avatar']; }
	if($skflkn['public_statics'] != $g['portada']){
    $avatarwwwavt = '../files/uploads/'.$_SESSION['uid'].'_'.$hace.'_3283314.'.$typecab;
    copy($g['avatar'], $avatarwwwavt);
    $webport = $w->settings['url'].'/files/uploads/'.$_SESSION['uid'].'_'.$hace.'_3283314.'.$typecab;
    mysql_query("INSERT INTO avatar_u(uidw, linkw, datew, avtu_type) VALUES('".$_SESSION['uid']."', '".$web."', '".$hace."', '8')");
	}else{ $webport = $skflkn['public_statics']; }
	mysql_query("UPDATE grupos SET public_statics='".$webport."', nombre='".$g['nombre']."', avatar='".$web."', descripcion='".$g['desc']."', categoria='".$g['cat']."' WHERE idgrupo='".$_POST['type']."' ");
    return '1: Datos actualizados correctamente.';
      }else{ return '0: Ocurrio un error al cambiar tu cabecera, Trata de que el enlace termine en: <b>jpg, png o gif</b> ::'.$typeavt; }
      }else{ return '0: Ocurrio un error al cambiar tu avatar, Trata de que el enlace termine en: <b>jpg, png o gif</b> ::'.$typecab; }
      }
      }
      }
	  }

	  /*
	  *------------------------------------------------------
	  *        NOTIFICAR A LOS SEGUIDORES DE UN USUARIO
	  *------------------------------------------------------
	  */

	  function setnGrupo($autor, $noType, $grupoid, $excluir){
	  	global $tsWeb;
	  	$query = mysql_query("SELECT id_emisor FROM suscriptores WHERE id_receptor='".$autor."'");
	  	$data = result_array($query);
	  			//
		foreach($data as $key => $val){
			if(!in_array($val['id_emisor'],$excluir)){
        	$tsWeb->getNotifis($_SESSION['uid'], $notType, $notaid, $val['id_emisor']);
			}
		}
	  }

/** FIN DE LA CLASS **/
}
?>