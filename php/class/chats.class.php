<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control del monitor de usuario
 *
 * @name    c.web.php
 * @author  WORTIT developers
 */
 class tsChats {
 /** HOME CLASS **/
 
     /**
     * @name getInstanse
     * @access public
     * @info CREAR INSTANCIA DE LA CLASE
     */
    public static function &getInstance(){
		static $instance;
		if( is_null($instance) ){
			$instance = new tsChats();
    	}
		return $instance;
	}

  /*
  u_c_chat =>
  * uc_chat_type => 1 => chat, 2 => Mensaje, 3 => Chat en wortit aula
  */

  /* CARGAR CONTENIDO */
  function load($type, $cont, $pag){
    global $wuser, $w;
    $limit = 40;
    switch($type){
      // CARGAR TUS ULTIMOS CHATS CREADOS
    case 1:
    $query = mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='1' AND u_c_user='".$wuser->uid."' ORDER BY u_c_id DESC");
    $data = result_array($query);
    return $data;
    break;
     // CARGAR CATEGORIAS
    case 2:
    $query = mysql_query("SELECT * FROM u_c_chat_cats WHERE u_cc_type='1' AND u_cc_user='".$wuser->uid."'");
    $data = result_array($query);
    return $data;
    break;
    // CARGAR CHATS MEDIANTE ID (información)
    case 3:
    $typofcon = ($pag) ? $pag : 1;
    $query = mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='".$typofcon."' AND u_c_id='".$cont."'");
    $data = mysql_fetch_assoc($query);
    return $data;
    break;
    // CARGAR MENSAJES WHERE AND 'PAGS'
    case 4:
    $pagina = ($pag) ? $pag : 0;
    $lodpgs = $pagina.','.$limit;
    $query = mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='2' AND u_c_cat='".$cont."' LIMIT ".$lodpgs."");
    $data = result_array($query);
    $jwjw = 0; foreach($data AS $row){
      $data[$jwjw]['u'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$row['u_c_user']."'"));
      $jwjw++;
    }
    return $data;
    break;
    // CARGAR MENSAJES SIN PAGES
    case 5:
    $query = mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='2' AND u_c_cat='".$cont."'");
    $data = result_array($query);
    $jwjw = 0; foreach($data AS $row){
      $data[$jwjw]['u'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$row['u_c_user']."'"));
      $jwjw++;
    }
    return $data;
    break;
    default:
    return '0: Indefinido.';
    break;
    }
  }

  /* CREAR CONTENIDO */
 
 function create($type){
 global $w, $wuser, $tsWeb, $tsActividad;
 $time = time();
 $detec = $this->detectUserAgent($_SERVER['HTTP_USER_AGENT']);
 $nav = $detec['browser'];
 $navv = $detec['version'];
 $os = $detec['os'];
 switch($type){
  // CREAR CHAT
  case 1:
  $ypechatwe = $w->setSecure($_POST['dtyk']);
  $catpostcht = $w->setSecure($_POST['c']);
  $d = array(
  'type' => ($ypechatwe) ? $ypechatwe : 1,
  'user' => $wuser->uid,
  'name' => $w->setSecure($_POST['n']),
  'desc' => $w->setSecure($_POST['d']),
  'cat' => ($catpostcht) ? $catpostcht : 0,
  );
  $existGjwk = mysql_num_rows(mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='".$d['type']."' AND u_c_cat='".$d['cat']."'"));
  if($d['type'] == 3 && $existGjwk <= 0 or $d['name'] && $d['desc'] && $d['cat']){
  if($d['name'] && $d['desc'] && $d['cat']){
  if(mysql_query("INSERT INTO u_c_chat(u_c_type,u_c_user, u_c_contenido,u_c_desc, u_c_hace, u_c_cat, u_c_usrgn_nav, u_c_usrgn_nav_v, u_c_usrgn_os, u_c_c1) VALUES('".$d['type']."','".$d['user']."','".$d['name']."','".$d['desc']."','".$time."','".$d['cat']."','".$nav."','".$navv."','".$os."', '1')")){
  return '1: Creado correctamente.';
  }else{ return '0: Ocurrio un error, intenta de nuevo.'; }
  }else{ return '0: Rellena todos los campos.'; }
  }else{ return '0: Ya existe un chat para esta clase.'; }
  break; 
  // ENVIAR MENSAJE
  case 2:
  $d = array(
  'type' => 2,
  'user' => $wuser->uid,
  'text' => $w->setSecure($_POST['tt']),
  'chat' => $w->setSecure($_POST['c']),
  );
  if(mysql_query("INSERT INTO u_c_chat(u_c_type,u_c_user, u_c_contenido, u_c_hace, u_c_cat, u_c_usrgn_nav, u_c_usrgn_nav_v, u_c_usrgn_os) VALUES('".$d['type']."','".$d['user']."','".$d['text']."','".$time."','".$d['chat']."','".$nav."','".$navv."','".$os."')")){
  $idinsertdchtmsg = mysql_insert_id(); $w->visto_1($idinsertdchtmsg, 3);
  return '1: Enviado correctamente.';
  }else{ return '0: Ocurrio un error, intenta de nuevo.'; }
  break;
  // CREAR CATEGORIA
  case 3:
  if($wuser->admod){
    $d = array(
  'type' => 1,
  'user' => $wuser->uid,
  'name' => $w->setSecure($_POST['n']),
  'imagen' => $w->setSecure($_POST['i']),
  'portada' => $w->setSecure($_POST['p']),
  'desc' => $w->setSecure($_POST['d']),
  );
  if(mysql_query("INSERT INTO u_c_chat_cats(u_cc_type,u_cc_user, u_cc_name, u_cc_img, u_cc_port, u_cc_desc, u_cc_hace, u_cc_usrgn_nav, u_cc_usrgn_nav_v, u_cc_usrgn_os) VALUES('".$d['type']."','".$d['user']."','".$d['name']."','".$d['imagen']."','".$d['portada']."','".$d['desc']."','".$time."','".$nav."','".$navv."','".$os."')")){
  return '1: Creada correctamente.';
  }else{ return '0: Ocurrio un error, intenta de nuevo.'; }
  }else{ return '0: No tienes permisos para hacer esto.'; }
  break;
  default:
  return '0: Indefinido.';
  break;
 }
 }

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
 
 /**  FIN DE LA CLASS **/
 }
 ?>