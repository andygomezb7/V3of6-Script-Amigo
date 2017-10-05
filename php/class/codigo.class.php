<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/** 
*   Funciones Globales 
*
*   @name codigo.class.php
*   @author Wortit Developers
*/
class tsCode {

  // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsCode();
        }
        return $instance;
    }

    /* HOME CODE WORTIT */

// TIEMPO DE EJECUCIÓN DE UN SCRIPT
function microtime_float() { list($useg, $seg) = explode(" ", microtime()); return ((float)$useg + (float)$seg); }
// END EJECUTION SCRIPT

/* VALIABLES POR DEFECTO: */
// Ubicación de el repositorio
function location($d){
    global $wuser;
if($d == 's1'){ $s = '<b>/</b>pagina principal'; }else{
$query = mysql_fetch_assoc(mysql_query("SELECT * FROM u_code_records WHERE uc_g_ident='".$d."' AND uc_g_type='1'"));
$s = '<b>/</b>'.$query['uc_name'];
}
return $s;
}
// Tipo de repositorio
function typeofset($d){
$s = array(
1 => 'Administrado/Privado',
2 => 'Cerrado/Privado',
3 => 'Administrado/Publico',
4 => 'Cerrado/Publico'
);
return $s[$d];
}
/* VARIBALES POR DEFECTO END; */

/**
 * Funcion que devuelve un array con los valores:
 *  os => sistema operativo
 *  browser => navegador
 *  version => version del navegador
 */
function detectUserAgent($uagent){
$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME",'Ie','ie','Opera','opera','Mozilla','mozilla','Netscape','NetScape','netscape','Firefox','firefox','Safari','safari','Chrome','chrome',"midp", "240x320", "blackberry", "netfront", "nokia", "panasonic", "portalmmm", "sharp", "sie-", "sonyericsson", "symbian", "windows ce", "windows phone", "benq", "mda", "mot-", "opera mini", "philips", "pocket pc", "sagem", "samsung", "sda", "sgh-", "vodafone", "xda", "iphone", "android");
$os=array("WIN","MAC","LINUX",'win','Win','Mac','mac','Linux','linux');
/*# definimos unos valores por defecto para el navegador y el sistema operativo
$info['browser'] = "OTHER";
$info['os'] = "OTHER";*/
# buscamos el navegador con su sistema operativo
foreach($browser as $parent){
$s = strpos(strtoupper($uagent), $parent);
$f = $s + strlen($parent);
$version = substr($uagent, $f, 15);
$version = preg_replace('/[^0-9,.]/','',$version);
if($s){ $info['browser'] = $parent; $info['version'] = $version; }
}
# obtenemos el sistema operativo
foreach($os as $val){
if(strpos(strtoupper($uagent),$val)!==false) $info['os'] = $val;
}
# devolvemos el array de valores
return $info;
}

// REGISTRO DE ACCIÓNES
function register($type){
    global $w, $wuser, $ip, $tsWeb, $tsActividad;
// VARIABLES RECIBIDAS Y CONFIRMACÍON
$httpusera = $this->detectUserAgent($_SERVER['HTTP_USER_AGENT']);
/* [definiciones: { 
{'global type': {1: 'repositorio', 2: 'archivo', 3: 'Actualización de archivo'}},
{'type1' : {1: 'ubicación', 2: 'repositorio donde esta', 3: 'archivo de actualización'}},
{'type2' : {1: 'tipo de repositorio', 2: 'url'}},
{'type3' : {1: 'tags', 2: 'name o identificador de archivo'}},
}] */
$c = array(
'user' => $wuser->uid,
'name' => $w->setSecure($_POST['nm']),
'gtype' => ($_POST['gt']) ? $_POST['gt'] : 0,
'type1' => array('cn' => ($_POST['t1cont']) ? $_POST['t1cont'] : 0, 'vl' => ($_POST['t1']) ? $_POST['t1'] : 0),
'type2' => array('cn' => ($_POST['t2cont']) ? $_POST['t2cont'] : 0, 'vl' => ($_POST['t2']) ? $_POST['t2'] : 0),
'type3' => array('cn' => ($_POST['t3cont']) ? $_POST['t3cont'] : 0, 'vl' => ($_POST['t3']) ? $_POST['t3'] : 0),
'date' => time(),
'ip' => $ip,
'brow' => $httpusera['browser'],
'ver' => $httpusera['version'],
'os' => $httpusera['os'],
'key' => substr(md5(uniqid(mt_rand(), false)),0, 17),
'code' => substr(md5(uniqid(mt_rand(), false)),0, 7),
'ident' => substr(md5(uniqid(mt_rand(), false)),0, 3).'-'.substr(md5(uniqid(mt_rand(), false)),0, 5).'-'.substr(md5(uniqid(mt_rand(), false)),0, 2),
);

$kasl = '';
    // Repositorio
if($type == 1){
foreach($c AS $fs => $dd){ if(!$dd or $dd == ''){ $kasl .= '<b>'.$fs.'</b><br />'; } }
if(!$kasl){
if(mysql_query("INSERT INTO u_code_records(uc_user_register,uc_name,uc_g_type,uc_type_1,uc_type_1_content,uc_type_2,uc_type_2_content,uc_type_3,uc_type_3_content,uc_date,uc_u_ip,uc_u_uag_browser,uc_u_uag_brvrsn,uc_u_uag_os,uc_g_key,uc_g_code,uc_g_ident) VALUES('".$c['user']."','".$c['name']."','".$c['gtype']."','".$c['type1']['cn']."','".$c['type1']['vl']."','".$c['type2']['cn']."','".$c['type2']['vl']."','".$c['type3']['cn']."','".$c['type3']['vl']."','".$c['date']."','".$c['ip']."','".$c['brow']."','".$c['ver']."','".$c['os']."','".$c['key']."','".$c['code']."','".$c['ident']."')")){ 
$url = $w->settings['url'].'/int/codigo/p/proyecto-'.$c['ident'].'/'; 
/* GUARDAR ACTIVIDAD */
if($c['gtype'] != 0 && $c['gtype'] == 1){
$sqlIntoIdQuery = mysql_insert_id(); 
$tsWeb->getNotifis($wuser->uid, 53, $sqlIntoIdQuery, 0); 
$tsActividad->setActividad(59,$sqlIntoIdQuery);
}
/* END GUARDAR ACTIVIDAD */
return '1: '.$url; 
}else{ return '0: Ocurrio un error, intenta nuevamente.'; }
}else{ return '0: Hacen falta los campos: '.$kasl; }
    // AGREGAR ARCHIVO
}elseif($type == 2){
foreach($c AS $fs => $dd){ if(!$dd or $dd == ''){ $kasl .= '<b>'.$fs.'</b><br />'; } }
if(!$kasl){
if(mysql_query("INSERT INTO u_code_records(uc_user_register,uc_name,uc_g_type,uc_type_1,uc_type_1_content,uc_type_2,uc_type_2_content,uc_type_3,uc_type_3_content,uc_date,uc_u_ip,uc_u_uag_browser,uc_u_uag_brvrsn,uc_u_uag_os,uc_g_key,uc_g_code,uc_g_ident) VALUES('".$c['user']."','".$c['name']."','".$c['gtype']."','".$c['type1']['cn']."','".$c['type1']['vl']."','".$c['type2']['cn']."','".$c['type2']['vl']."','".$c['type3']['cn']."','".$c['type3']['vl']."','".$c['date']."','".$c['ip']."','".$c['brow']."','".$c['ver']."','".$c['os']."','".$c['key']."','".$c['code']."','".$c['ident']."')")){ 
$url = $w->settings['url'].'/int/codigo/p/archivo-'.$c['ident'].'.cw'; 
/* GUARDAR ACTIVIDAD */
if($c['gtype'] != 0 && $c['gtype'] == 3){
$sqlIntoIdQuery = mysql_insert_id(); 
$tsWeb->getNotifis($wuser->uid, 52, $sqlIntoIdQuery, 0); 
$tsActividad->setActividad(58,$sqlIntoIdQuery);
}else{ 
$sqlIntoIdQuery = mysql_insert_id(); 
$tsWeb->getNotifis($wuser->uid, 51, $sqlIntoIdQuery, 0);  
$tsActividad->setActividad(57,$sqlIntoIdQuery);
}
/* END GUARDAR ACTIVIDAD */
return '1: '.$url; 
}else{ return '0: Ocurrio un error, intenta nuevamente.'; }
}else{ return '0: Hacen falta los campos: '.$kasl; }
}else{ return '0: Define tu acción.'; }
}
// REGISTRO DE ACCIÓNES

// ------------------------------------------------------------------------------

// CARGAR REGISTROS - HOME
function loadRegis($user, $type, $extra){ 
    global $w, $wuser;
/* REPOSITORIOS */ if($type == 1){
$query = mysql_query("SELECT * FROM u_code_records WHERE uc_user_register='".$user."' AND uc_g_type='1'");
$data = result_array($query);
$e = 0; foreach($data AS $d){ $numqwlesdk = mysql_query("SELECT * FROM u_code_records WHERE uc_user_register='".$user."' AND uc_g_type='2' AND uc_type_3='1' AND uc_type_3_content='".$d['uc_id']."'");
$data[$e]['uc_a_archives'] = mysql_num_rows($numqwlesdk);
$data[$e]['uc_a_type_reposit'] = $this->typeofset($d['uc_type_2_content']);
$data[$e]['uc_a_location'] = $this->location($d['uc_type_1_content']);
$e++;
}
}elseif($type == 2){
$query = mysql_query("SELECT * FROM u_code_records WHERE uc_type_1_content='".$user."' AND uc_type_1='2' AND uc_g_type='2'");
$data = result_array($query);
$sf = 0; foreach($data AS $s){
$inf = mysql_fetch_assoc(mysql_query("SELECT * FROM rft_uploads WHERE up_name='".$s['uc_type_3_content']."'"));
$data[$sf]['uc_a_name'] = $inf['up_vname'];
$data[$sf]['uc_a_tamano'] = $inf['up_size'].''.$inf['up_typesize'];
$data[$sf]['uc_a_tipo'] = $inf['up_ftype'];
$data[$sf]['uc_a_edicion'] = $w->setHace($inf['up_date']);
$data[$sf]['up'] = $inf;
$data[$sf]['uc_in_user'] = $wuser->loadUserN($s['uc_user_register']);
$sf++;
}
}elseif($type == 3){
    if($extra){ $ttdkek = $extra; }else{ $ttdkek = 2; }
$data = mysql_fetch_assoc(mysql_query("SELECT * FROM u_code_records WHERE uc_g_type='".$ttdkek."' AND uc_g_ident='".$user."'"));
$data['num'] = mysql_num_rows(mysql_query("SELECT * FROM u_code_records WHERE uc_g_type='".$ttdkek."' AND uc_g_ident='".$user."'"));
$data['t'] = mysql_fetch_assoc(mysql_query("SELECT * FROM rft_uploads WHERE up_name='".$data['uc_type_3_content']."'"));
$data['t']['user'] = mysql_fetch_assoc(mysql_query("SELECT usuario_nombre, w_avatar, usuario_id FROM usuarios WHERE usuario_id='".$data['t']['up_user']."'"));
}elseif($type == 4){
$data = mysql_fetch_assoc(mysql_query("SELECT * FROM u_code_records WHERE uc_g_type='1' AND uc_g_ident='".$user."'"));
}elseif($type == 5){
    // ACTUALIZACIÓN DE ARCHIVOS SUBIDOS
$query = mysql_query("SELECT * FROM u_code_records WHERE uc_type_1_content='".$user."' AND uc_type_1='3' AND uc_g_type='3'");
$data = result_array($query);
$sf = 0; foreach($data AS $s){
$inf = mysql_fetch_assoc(mysql_query("SELECT * FROM rft_uploads WHERE up_name='".$s['uc_type_3_content']."'"));
$data[$sf]['uc_a_name'] = $inf['up_vname'];
$data[$sf]['uc_a_tamano'] = $inf['up_size'].''.$inf['up_typesize'];
$data[$sf]['uc_a_tipo'] = $inf['up_ftype'];
$data[$sf]['uc_a_edicion'] = $w->setHace($inf['up_date']);
$data[$sf]['up'] = $inf;
$data[$sf]['uc_in_user'] = $wuser->loadUserN($s['uc_user_register']);
$sf++;
}
}else{ $data = '0: Undefined'; }
return $data;
}
// END CARGAR REGISTROS - HOME


// HOME REGISTRO DE DESCARGAS
function descLogg($id){
global $mysqli, $w, $wuser, $ip, $tsWeb, $tsActividad;
// si $type == 1 ? $type = mi archivo; $type = otro;
if($wuser->uid){ $obj = $wuser->uid; }else{ $obj = $ip; }
$sdkjflake = $mysqli->query("SELECT up_id, up_user FROM rft_uploads WHERE up_id='".$id."'");
$sdfjkn = $sdkjflake->fetch_assoc();
if($sdfjkn['up_user'] == $wuser->uid){ $type = 1; }elseif(!$wuser->uid){ $type = 2; }elseif($sdfjkn['up_user'] != $wuser->uid){ $type = 3; }else{ $type = 0; }
$mysqli->query("INSERT INTO rft_downloads(dow_type, dow_obj, dow_usip, dow_date) VALUES('".$type."', '".$id."' ,'".$wuser->uid."', '".time()."')");
$idInserQuerySql = $mysqli->insert_id;
$tsWeb->getNotifis($wuser->uid, 54, $idInserQuerySql, 0); 
$tsActividad->setActividad(60,$idInserQuerySql);
}
// END REGISTRO DE DESCARGAS

/* END CODE WORTIT */
}
?>