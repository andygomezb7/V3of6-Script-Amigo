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
	global $wuser, $w;
	$query = mysql_query("SELECT * FROM grupos WHERE idadmin1='".$wuser->uid."'");
	$data = result_array($query);
	return $data;
	}

	/*****
	*--------------------------------------------------------
	*            loadGlogle();
	*    @action CARGAR GRUPOS,  SUGERIDOS etc...
	*--------------------------------------------------------
	******/

	function loadGlogle($type){
		global $wuser;
		switch($type){
		case 1: // SUGERIDOS
		$query = mysql_query("SELECT g.*, s.* FROM grupos AS g LEFT JOIN suscriptores AS s ON g.idadmin1 = s.id_receptor WHERE s.id_emisor = '".$wuser->uid."' LIMIT 20");
		$data = result_array($query);
	    break;
	    case 2: case '2': // UNISTE RECIENTEMENTE
		$query = mysql_query("SELECT g.*, m.* FROM grupos AS g LEFT JOIN member_grupos AS m ON g.idgrupo = m.id_grupos WHERE m.estado='1' AND m.idusuario='".$wuser->uid."' LIMIT 20");
		$data = result_array($query);
	    break;
	    case 3: // GRUPOS DE TUS AMIGOS
		$query = mysql_query("SELECT g.*, s.*, u.* FROM grupos AS g LEFT JOIN suscriptores AS s ON g.idgrupo = s.id_receptor LEFT JOIN usuarios AS u ON g.idadmin1 = u.usuario_id WHERE s.id_emisor ='".$wuser->uid."' LIMIT 20");
		$data = result_array($query);
	    break;
	    case 4: // GRUPOS LOCALES
		$query = mysql_query("SELECT g.*, u.* FROM grupos AS g LEFT JOIN usuarios AS u ON g.idgrupo = u.usuario_id WHERE u.pais='".$wuser->pais['p_prefijo']."' AND g.idadmin1 ='".$wuser->uid."' LIMIT 20");
		$data = result_array($query);
	    break;
	    case 5: // TUS GRUPOS
	    $query = mysql_query("SELECT * FROM grupos WHERE idadmin1='".$wuser->uid."'");
	    $data = result_array($query);
	    break;
	    case 6: // GRUPOS RECIENTEMENTE CREADOS
	    $query = mysql_query("SELECT * FROM grupos WHERE idadmin1='".$wuser->uid."'");
	    $data = result_array($query);
	    break;
	    }

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
    
	/*****
	*---------------------------------------------------------------------
	*                                 getG();
	*                  @action CARGAR GRUPO POR SU 'wdefined'
	*----------------------------------------------------------------------
	*****/
	
	function getG($i){
		global $w, $wuser;
	$query = mysql_query("SELECT * FROM grupos WHERE wdefined='".$i."'");
	$data = mysql_fetch_assoc($query);
	$querynaa = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$data['idadmin1']."'"));
	$data['admin'] = $querynaa['usuario_nombre'];
	
    $querynene = mysql_query("SELECT * FROM member_grupos WHERE id_grupos='".$data['idgrupo']."' AND idusuario='".$wuser->uid."'");
	$ksdfja = mysql_num_rows($querynene); $ksdfjas = mysql_fetch_assoc($querynene);
	$data['solit'] = $ksdfja;
	$data['soli'] = $ksdfjas['estado'];
	
	$queryadminseie = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idadmin1='".$wuser->uid."'"));
	$data['esadmin'] = $queryadminseie['nombre'];

	$data['members'] = result_array(mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos='".$data['idgrupo']."' && m.estado='1' ORDER BY m.idregistro DESC LIMIT 7"));
	$data['membersnum'] = mysql_num_rows(mysql_query("SELECT * FROM member_grupos WHERE id_grupos='".$data['idgrupo']."' AND estado='1'"));
 	if($data['idadmin1'] == $wuser->uid){
 		$data['solicitudes'] = result_array(mysql_query("SELECT m.*, u.* FROM member_grupos AS m LEFT JOIN usuarios AS u ON m.idusuario = u.usuario_id WHERE m.id_grupos='".$data['idgrupo']."' AND m.estado='0'"));
 	}
 	return $data;
	}

	/****
	*--------------------------------------------------------------
	*                   AUTENTIFICAR SOLICITUDES
	*           @action MOSTRAR Y ACEPTAR/ELIMINAR SOLICITUDES
	*---------------------------------------------------------------
	***/
	
	function getPetG($idg, $gi, $st){
	global $tsWeb, $tsActividad, $wuser;
	if($idg || $gi){
	$queryadmin = mysql_num_rows(mysql_query("SELECT * FROM grupos WHERE idadmin1='".$wuser->uid."' AND idgrupo='".$gi."'"));
	if($queryadmin >= 1){
	mysql_query("UPDATE member_grupos SET estado='".$st."' WHERE idregistro='".$idg."'");
	$ksdfmsdnl = mysql_fetch_assoc(mysql_query("SELECT * FROM member_grupos WHERE idregistro='".$idg."'"));
	if($st == 1){ $tsWeb->getNotifis($wuser->uid, 45, $ksdfmsdnl['id_grupos'], $ksdfmsdnl['idusuario']);
	$tsActividad->setActividad(51, $ksdfmsdnl['id_grupos']); }
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
	
	function addGiF($g, $go){
	global $tsActividad, $tsWeb, $wuser;
	$id = $wuser->uid;
	$gos = ($go == 2) ? 0 : 1;
	$exkelr = ($go == 1) ? "AND estado='".$gos."'" : '';
	$query = mysql_query("SELECT * FROM member_grupos WHERE id_grupos='".$g."' ".$exkelr." AND idusuario='".$wuser->uid."'");
	$j = mysql_num_rows($query);
	$jj = mysql_fetch_assoc($query);
	
	if($gos == 1){
	if($j >= 1){
	return '0: Solicitud ya enviada.';
	}else{
	$u = $wuser->uid;
	$efe = time();
	mysql_query("INSERT INTO member_grupos(estado, id_grupos, idusuario, fecha_registro) VALUES('0', '".$g."', '".$id."', '".$efe."' )");
	$skgnaelkw = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$g."'"));
	$tsWeb->getNotifis($wuser->uid, 38, $g, $skgnaelkw['idadmin1']);
	$tsActividad->setActividad(50, $g);
	return '1: Solicitud enviada';
    }
	}elseif($go == 2){
	if($j >= 1){
	$skgnaelkw = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$g."'"));
	if($skgnaelkw['idadmin1'] == $wuser->uid){
		return '0: No puedes salir por que eres el creador del grupo.';
	}else{
	$u = $wuser->uid;
	$efe = time();
	mysql_query("UPDATE member_grupos SET estado='".$gos."' WHERE idregistro='".$jj['idregistro']."'");
	$tsWeb->getNotifis($wuser->uid, 68, $g, $skgnaelkw['idadmin1']);
	$tsActividad->setActividad(85, $g);
	return '1: Haz salido';
    }
    }else{ return '0: No haz enviado ninguna solicitud.'; }
	}else{ return '0: No especifico datos.'; }
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
    	global $w, $wuser, $tsWeb, $tsActividad;
    $gd = array(
    'nom' => $w->setSecure($_POST['ngp']),
    'cat' => $w->setSecure($_POST['ccgp']),
    'nc' => $w->setSecure($_POST['cgp']),
    );

    $querynom = mysql_num_rows(mysql_query("SELECT * FROM grupos WHERE nombre='".$gd['nom']."'"));
    $querycno = mysql_num_rows(mysql_query("SELECT * FROM grupos WHERE wdefined='".$gd['cat']."'"));

     //compruebo que los caracteres sean los permitidos 
   $nombre_usuario = $gd['nc'];
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
   for ($i=0; $i<strlen($nombre_usuario); $i++){ 
   if(strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
   $comproksdl = 2;
   }else{ $comproksdl = 1; } } 

    if($wuser->uid){
    if($gd['nom'] == ''){
    return '0: Ponle un nombre a tu grupo.';
    }elseif($gd['nc'] == ''){
    return '0: Agregale un nombre corto a tu grupo.';    
    }elseif($_POST['cgp'] == ''){
    return '0: Rellena el campo: Categoria';
    }elseif($comproksdl == 2){
    return '0: El nombre corto no puedo contener caracteres especiales';
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
    $i = mysql_query("INSERT INTO grupos(nombre, wdefined, categoria, idadmin1, fecha_creacion) VALUES('".$gd['nom']."', '".$gd['nc']."', '".$gd['cat']."', '".$wuser->uid."', '".time()."')");
    $grupoid = mysql_insert_id();
    mysql_query("INSERT INTO member_grupos(estado, id_grupos, idusuario, fecha_registro) VALUES('1','".$grupoid."','".$wuser->uid."','".time()."')");
    if($i){ 
    $this->setnGrupo($wuser->uid, 39, $grupoid);
    $tsActividad->setActividad(49, $grupoid);
    return '1: Grupo creado correctamente, <a href="'.$w->settings['url'].'/grupos/'.$gd['nc'].'">Ir al grupo</a>'; 
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
global $w, $wuser;
$g = array(
'nombre' => $w->setSecure($_POST['nom']),
'avatar' => $w->setSecure($_POST['upimg']),
'portada' => $w->setSecure($_POST['port']),
'desc' => $w->setSecure($_POST['desc']),
'cat' => $w->setSecure($_POST['cat']),
'grupi' => $w->setSecure($_POST['type']),
);
if(!$g['nombre']){
return '0: Define un nombre para tu grupo';
}elseif(!$g['avatar'] || $g['avatar'] == 1){
return '0: Agrega un avatar a tu grupo';
}elseif(!$g['desc']){
return '0: Describe tu grupo.';
}elseif(!$g['cat']){
return '0: Define una categoria a tu grupo';
}else{
if(!$wuser->uid){
return '0: Esta accion es solo para usuarios de '.$w->settings['name'];
}else{
$slfmse = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$g['grupi']."'"));
if($slfmse['idadmin1'] != $wuser->uid){
return '0: No eres administrador del grupo.';
}else{
$hace = time();
$skflkn = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$g['grupi']."'"));
if(mysql_query("UPDATE grupos SET nombre='".$g['nombre']."', avatar='".$g['avatar']."', descripcion='".$g['desc']."', categoria='".$g['cat']."' WHERE idgrupo='".$g['grupi']."' ")){
return '1: Datos actualizados correctamente, Actualizando...'; }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
/* FIN DE SI ES DUEÑO */}
/* FIN DE REGISTRADO */}
/* FIN DE DATOS ENVIADOS */ }
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