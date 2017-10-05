<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Funciones globales de AULA
 *
 * @Wortit developers is Andy Gómez (wortit.net/andyg ; fb.me/andesau)
 * @name    aulac.class.php
 * @author  Andy Gómez (wortit.net/andyg ; fb.me/andesau)
 * @exclusive To Wortit.net - Powered by Andy Gómez
 * @functions Administer for "Aula" in "Wortit" powered by Wortit developers
 */
class tsAula {
    
	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsAula();
    	}
		return $instance;
	}
	
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

  function registers($type, $key){
    global $w ,$wuser, $ip, $tsActividad, $tsWeb;
  $key_student = 'STDN1_RGSTR_2_RGSTDINT';
  $key_teacher = 'TEAHR1_RGSTR_2_RGSDTAHR';
  $key_establishment = 'STBCMT1_RGSTR_2_RGSTRDSTBCMNT';
  $key_kind = 'CLSRKIND_RGSTR_2_RGSTRCLSKIND';
  $key_members = 'KYDTOMMBRS_RGSTR_3_RGSTROFMMBRS';
  $key_acept = 'KYACPTUSRSIN_RGSTR_4_RGSTRACPTMBRSIN';
  $hace = time();
  $useragent = $w->setSecure($_SERVER['HTTP_USER_AGENT']);
  $ip = $ip;
  $nickexist = mysql_num_rows(mysql_query("SELECT * FROM u_aula WHERE aul_key='".$wuser->info['usuario_nombre']."'"));
  $keyaddrgr = substr(md5(md5('RGSTRD_ACCNAGRGTV').time()),0, 17);
  $codeaddrgr = substr(md5(md5('RGSTRD_ACCNAGRGTV_CODE').time()),0, 18);
  $d = array(
  'student' => array(
    'usuario' => $wuser->uid,
    'type' => 1,
    'verifi' => 'Verifi_Ok',
    'name' => $wuser->info['usuario_nombre'].'-'.substr(md5(md5('Student').time()),0, 7),
    'colegio' => $w->setSecure($_POST['es_ela']),
    'dia' => $w->setSecure($_POST['nc_dia']),
    'mes' => $w->setSecure($_POST['nc_mes']),
    'año' => $w->setSecure($_POST['nc_anio']),
    'key' => substr(md5(md5('Student').time()),0, 11),
    'code' => substr(md5(md5('Student').time().time()),0, 11),
    'imagen' => $w->setSecure($_POST['img']),
    'portada' => $w->setSecure($_POST['port']),
    'descripcion' => $w->setSecure($_POST['desc_1']),
    'mini_descripcion' => $w->setSecure($_POST['desc_2']),
    //'ciudad' => $w->setSecure($_POST['ciud']),
    'pais' => $w->setSecure($_POST['pas']),
  ),
  'teacher' => array(
    'usuario' => $wuser->uid,
    'type' => 2,
    'verifi' => 'Verifi_None',
    'name' => $wuser->info['usuario_nombre'].'-'.substr(md5(md5('Student').time()),0, 7),
    'colegio' => $w->setSecure($_POST['es_ela']),
    'dia' => $w->setSecure($_POST['nc_dia']),
    'mes' => $w->setSecure($_POST['nc_mes']),
    'año' => $w->setSecure($_POST['nc_anio']),
    'key' => substr(md5(md5('Teacher').time()),0, 11),
    'code' => substr(md5(md5('Teacher').time().time()),0, 11),
    'imagen' => $w->setSecure($_POST['img']),
    'portada' => $w->setSecure($_POST['port']),
    'descripcion' => $w->setSecure($_POST['desc_1']),
    'mini_descripcion' => $w->setSecure($_POST['desc_2']),
    //'ciudad' => $w->setSecure($_POST['ciud']),
    'pais' => $w->setSecure($_POST['pas']),
  ),
  'colegio' => array(
    'user' => $wuser->uid,
    'type' => 1,
    'verifi' => 'Verifi_None',
    'name' => $w->setSecure($_POST['name']),
    'colegio' => $w->setSecure($_POST['es_ela']),
    'dia' => $w->setSecure($_POST['nc_dia']),
    'mes' => $w->setSecure($_POST['nc_mes']),
    'año' => $w->setSecure($_POST['nc_anio']),
    'key' => substr(md5(md5('Establishment').time()),0, 11),
    'code' => substr(md5(md5('Establishment').time().time()),0, 11),
    'imagen' => $w->setSecure($_POST['img']),
    'portada' => $w->setSecure($_POST['port']),
    'descripcion' => $w->setSecure($_POST['desc_1']),
    'mini_descripcion' => $w->setSecure($_POST['desc_2']),
    'ciudad' => $w->setSecure($_POST['ciud']),
    'pais' => $w->setSecure($_POST['pas']),
    'Fundacion' => time($_POST['nc_dia'].'-'.$_POST['nc_mes'].'-'.$_POST['nc_anio']),
    'direccion' => $w->setSecure($_POST['loc']),
  ),
  'clase' => array(
  'user' => $wuser->uid,
  'type' => $w->setSecure($_POST['ttip']),
  'estado' => $w->setSecure($_POST['state']),
  'name' => $w->setSecure($_POST['name']),
  'escuel' => $w->setSecure($_POST['es_ela']),
  'key' => substr(md5(md5('class or group').time()),0, 11),
  'code' => substr(md5(md5('class or group').time().time()),0, 11),
  'img' => $w->setSecure($_POST['img']),
  'portad' => $w->setSecure($_POST['port']),
  'desc' => $w->setSecure($_POST['desc_1']),
  'mdesc' => $w->setSecure($_POST['desc_2']),
  'loc' => $w->setSecure($_POST['loc']),
  )
  );

  $kasl = '';
  if($type == 1 && $key == $key_student){
  foreach($d['student'] AS $fs => $dd){ 
  if(!$dd or $dd == '') $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; 
  }
  if($nickexist >= 1){ $kasl .= 'Tu nick ya esta registrado como un establecimiento, utilizaremos un nombre alternativo, luego puedes cambiarlo.'; }
  if($kasl){ return $kasl;
  }else{
  if(mysql_query(" INSERT INTO u_aula_members(aul_mem_user_admin,aul_mem_type,aul_mem_verifi,aul_mem_name,aul_mem_escuela_col,aul_mem_nac_dia,aul_mem_nac_mes,aul_mem_nac_anio,aul_mem_hace,aul_mem_key,aul_mem_code,aul_mem_img, aul_mem_portad,aul_mem_description,aul_mem_mdescription,aul_mem_ciudad,aul_mem_pais,aul_mem_useragent,aul_mem_ip_conf) VALUES('".$d['student']['usuario']."','".$d['student']['type']."','".$d['student']['verifi']."','".$d['student']['name']."','".$d['student']['colegio']."','".$d['student']['dia']."','".$d['student']['mes']."','".$d['student']['año']."','".$hace."','".$d['student']['key']."','".$d['student']['code']."','".$d['student']['imagen']."','".$d['student']['portada']."','".$d['student']['descripcion']."','".$d['student']['mini_descripcion']."','".$d['student']['ciudad']."','".$d['student']['pais']."','".$useragent."','".$ip."')")){
  $sqlintidD = mysql_insert_id(); $tsWeb->getNotifis($wuser->uid, 47, $sqlintidD, 0); $tsActividad->setActividad(52, $sqlintidD); return '1:'.$w->settings['url'].'/int/aula/'.$wuser->info['usuario_nombre'];
  }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
  }
  }elseif($type == 2 && $key == $key_teacher){
  foreach($d['teacher'] AS $fs => $dd){ if(!$dd or $dd == '') $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; }
  if($kasl){ return $kasl;
  }else{
  if(mysql_query(" INSERT INTO u_aula_members(aul_mem_user_admin,aul_mem_type,aul_mem_verifi,aul_mem_name,aul_mem_escuela_col,aul_mem_nac_dia,aul_mem_nac_mes,aul_mem_nac_anio,aul_mem_hace,aul_mem_key,aul_mem_code,aul_mem_img,aul_mem_portad,aul_mem_description,aul_mem_mdescription,aul_mem_ciudad,aul_mem_pais,aul_mem_useragent,aul_mem_ip_conf) VALUES('".$d['teacher']['usuario']."','".$d['teacher']['type']."','".$d['teacher']['verifi']."','".$d['teacher']['name']."','".$d['teacher']['colegio']."','".$d['teacher']['dia']."','".$d['teacher']['mes']."','".$d['teacher']['año']."','".$hace."','".$d['teacher']['key']."','".$d['teacher']['code']."','".$d['teacher']['imagen']."','".$d['teacher']['portada']."','".$d['teacher']['descripcion']."','".$d['teacher']['mini_descripcion']."','".$d['teacher']['ciudad']."','".$d['teacher']['pais']."','".$useragent."','".$ip."')")){
  $sqlintidD = mysql_insert_id(); $tsWeb->getNotifis($wuser->uid, 48, $sqlintidD, 0); $tsActividad->setActividad(53, $sqlintidD); return '1:'.$w->settings['url'].'/int/aula/'.$wuser->info['usuario_nombre'];
  }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
  }
  }elseif($type == 3 && $key == $key_establishment){
  foreach($d['colegio'] AS $fs => $dd){ if(!$dd or $dd == '') $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; }
  if($kasl){ return $kasl; }else{
  if(mysql_query("INSERT INTO u_aula(aul_user_admin,aul_name,aul_verifi,aul_escuela_col,aul_fundacion,aul_hace,aul_key,aul_code,aul_img,aul_portad,aul_description,aul_mdescription,aul_ciudad,aul_pais,aul_location,aul_useragent,aul_ip_conf) VALUES('".$d['colegio']['user']."','".$d['colegio']['name']."','".$d['colegio']['verifi']."','".$d['colegio']['colegio']."','".$d['colegio']['Fundacion']."','".$hace."','".$d['colegio']['key']."','".$d['colegio']['code']."','".$d['colegio']['imagen']."','".$d['colegio']['portada']."','".$d['colegio']['descripcion']."','".$d['colegio']['mini_descripcion']."','".$d['colegio']['ciudad']."','".$d['colegio']['pais']."','".$d['colegio']['direccion']."','".$useragent."','".$ip."')")){
  $sqlintidD = mysql_insert_id(); $tsWeb->getNotifis($wuser->uid, 50, $sqlintidD, 0); $tsActividad->setActividad(54, $sqlintidD); return '1:'.$w->settings['url'].'/int/aula/'.$d['colegio']['key'].'/';
  }else{ return '0: Ocurrio un error, Intenta nuevamente. :: '.$d['colegio']['Fundacion']; }
  }
  }elseif($type == 4 && $key == $key_kind){
  foreach($d['clase'] AS $fs => $dd){ if(!$dd or $dd == '') $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; }
  if($kasl){ return $kasl; }
  if(mysql_query("INSERT INTO u_aula_kind(
  aul_kind_user,
  aul_kind_type,
  aul_kind_state,
  aul_kind_name,
  aul_kind_escuela_col,
  aul_kind_hace,
  aul_kind_key,
  aul_kind_code,
  aul_kind_img,
  aul_kind_portad,
  aul_kind_description,
  aul_kind_mdescription,
  aul_kind_loc,
  aul_mem_useragent,
  aul_mem_ip_conf) VALUES(
  '".$d['clase']['user']."',
  '".$d['clase']['type']."',
  '".$d['clase']['estado']."',
  '".$d['clase']['name']."',
  '".$d['clase']['escuel']."',
  '".$hace."',
  '".$d['clase']['key']."',
  '".$d['clase']['code']."',
  '".$d['clase']['img']."',
  '".$d['clase']['portad']."',
  '".$d['clase']['desc']."',
  '".$d['clase']['mdesc']."',
  '".$d['clase']['loc']."',
  '".$useragent."',
  '".$ip."')")){ $sqlintidD = mysql_insert_id(); $tsWeb->getNotifis($wuser->uid, 49, $sqlintidD, 0); $tsActividad->setActividad(55, $sqlintidD); return '1:'.$w->settings['url'].'/int/aula/'.$d['clase']['key'].'.0c'; }else{
  return '0: Ocurrio un error, Intenta nuevamente.';
  }
  // REGISTRAR MIEMBROS DE CLASES O ESTABLECIMIENTOS
  }elseif($type == 5 && $key == $key_members){
  $tip1414ok = $w->setSecure($_POST['torip']);
  $es_elapostget = $w->setSecure($_POST['es_ela']);
  if($tip1414ok && $es_elapostget){
  $userregisterforexist = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_type='".$tip1414ok."' && aul_mem_escuela_col='".$es_elapostget."' && aul_mem_user_admin='".$wuser->uid."'"));
  if($userregisterforexist >= 1){ $kasl .= 'Ya estas registrado aqui.';  }
  if($kasl){ return $kasl;
  }else{
    /* datos a recibir: es_ela, torip
    datos: type: 3 => 'miembro en clase', 4 => 'miembro en establecimiento'.
    */
  if(mysql_query("INSERT INTO u_aula_members(aul_mem_user_admin,aul_mem_type,aul_mem_verifi,aul_mem_escuela_col,aul_mem_hace,aul_mem_key,aul_mem_code,aul_mem_useragent,aul_mem_ip_conf) VALUES('".$wuser->uid."','".$tip1414ok."','Verifi_None','".$es_elapostget."','".time()."','".$keyaddrgr."','".$codeaddrgr."','".$useragent."','".$ip."')")){
  $sqlintidD = mysql_insert_id(); 
  if($tip1414ok == 3){
  $tsWeb->getNotifis($wuser->uid, 62, $sqlintidD, 0); 
  $tsActividad->setActividad(71, $sqlintidD); 
  }elseif($tip1414ok == 4){
  $tsWeb->getNotifis($wuser->uid, 61, $sqlintidD, 0); 
  $tsActividad->setActividad(70, $sqlintidD); 
  }else{}
  return '1: Solicitud enviada';
  }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
  }
  }else{ return '0: Hacen falta datos.'; }
  // ACEPTAR USUARIOS A CLASE O ESTABLECIMIENTO
  }elseif($type == 6 && $key == $key_acept){
  $tyyyyype = $w->setSecure($_POST['dtacpt']); // TIPO DE ACTUALIZACIÓN DE REGISTRO
  $objy = $w->setSecure($_POST['oy']); // OBJETO O ID DE EL REGISTRO DE PETICIÓN
  $objyTt = $w->setSecure($_POST['oyt']); // RECHAZADA O ACEPTADA
  $typerechactp = ($objyTt == 1) ? 'Verifi_Ok' : 'Verifi_Rech';
  // VERIFICAR SI ES MIEMBRO
  // 1 => administrador de clase, 2 => administrador de establecimiento
  /* REGISTRO */ 

  // CLASE
  $queryregisi = mysql_fetch_assoc(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_type='3' AND aul_mem_id='".$objy."'"));
  // ESTABLECIMIENTO
  $queryregisiSta = mysql_fetch_assoc(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_type='4' AND aul_mem_id='".$objy."'"));

  if($tyyyyype == 1){
  $verifiacpadm = mysql_num_rows(mysql_query("SELECT * FROM u_aula_kind WHERE aul_kind_type='1' AND aul_kind_user='".$wuser->uid."' AND aul_kin_id='".$queryregisi['aul_mem_escuela_col']."'"));
  $typereturn = 'esta Clase.';
  }elseif($tyyyyype == 2){ 
  $verifiacpadm = mysql_num_rows(mysql_query("SELECT * FROM u_aula WHERE aul_type='1' AND aul_user_admin='".$wuser->uid."' AND aul_id='".$queryregisiSta['aul_mem_escuela_col']."'")); 
  $typereturn = 'este Establecimiento.';
  }else{ return '0: Datos no validos:: 1'; }
  
  if($verifiacpadm >= 1){
    if($tyyyyype == 1){
  if(mysql_query("UPDATE u_aula_members SET aul_mem_verifi='".$typerechactp."' WHERE aul_mem_type='3' AND aul_mem_id='".$queryregisi['aul_mem_id']."'")){ return '1: Actualizado.'; }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
    }elseif($tyyyyype == 2){
  if(mysql_query("UPDATE u_aula_members SET aul_mem_verifi='".$typerechactp."' WHERE aul_mem_type='4' AND aul_mem_id='".$queryregisiSta['aul_mem_id']."'")){ return '1: Actualizado.'; }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
    }else{ return '0: Datos no validos:: 2'; }
  }else{ return '0: No eres dueño de '.$typereturn; }

  }else{ return '0: Datos no validos:: Key de acceso no valida.'; }
  }
	
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
	
	
}