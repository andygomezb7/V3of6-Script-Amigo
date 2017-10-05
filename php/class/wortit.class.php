<?php   if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/** FUNCIONES GLOBALES | POWERED BY: Wortit Developers **/

class w{
	var $settings;
	var $querys = 0;
	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
	static $instance;
	if( is_null($instance) ){ $instance = new w(); }
	return $instance;
	}

	public function isMobile() {
    $mobiles = array( "midp", "240x320", "blackberry", "netfront", "nokia", "panasonic", "portalmmm", "sharp", "sie-", "sonyericsson", "symbian", "windows ce", "windows phone", "benq", "mda", "mot-", "opera mini", "philips", "pocket pc", "sagem", "samsung", "sda", "sgh-", "vodafone", "xda", "iphone", "android" );
    foreach($mobiles as $mobileClient){ if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), $mobileClient)) return true; }
    return false;
    }
	
	// FUNCION MOSTRAR	
	function w(){
		// CARGANDO CONFIGURACIONES
		$this->settings = $this->getSettings();		
        $this->idconfigs = 3; // ID DE EL REGISTRO DE WCONFIG
		$this->settings['domain'] = str_replace('http://','',$this->settings['direccion_url']);
		$this->settings['hashtag'] = $this->settings['hashtag'];
		$this->settings['categorias'] = $this->getCategorias();
		$this->settings['vip'] = $this->getVip();
	    $this->settings['rvip'] = $this->getRVip();
		$this->settings['default'] = $this->settings['direccion_url'].'';
		$this->settings['tema'] = $this->getTema();
		$this->settings['images'] = $this->settings['direccion_url'].'/images';
        $this->settings['css'] = $this->settings['direccion_url'].'/css';
		$this->settings['js'] = $this->settings['direccion_url'].'/js';
		$this->settings['url'] = $this->settings['direccion_url'];
		$this->settings['url_ads'] = 'http://'.$this->settings['domain'].'/int/ads';
		$this->settings['isMobile'] = $this->isMobile();
		$this->version = '3.1';
		// Paginas para redireccionar
		$this->pages['new'] = 'notas';
		$this->pages['juegos'] = 'notas';
		$this->pages['ads'] = 'int/ads/';
		$this->pages['login'] = 'int/login/';
        //
	          }
	
	
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function youtubeidob($url){
$url_string = parse_url($url, PHP_URL_QUERY);
parse_str($url_string, $args);
return isset($args['v']) ? $args['v'] : false;
}
/* getSettings() :: CARGA DESDE LA DB LAS CONFIGURACIONES DEL SITIO */
function getSettings(){
$query = mysql_query('SELECT * FROM wconfig WHERE id="3"'); return mysql_fetch_assoc($query);
}
/* getCategorias() */
function getCategorias(){
$query = mysql_query('SELECT id_categoria, nombre, game, icono, Descripcion, color, wdefined FROM categorias');
$categorias = mysql_fetch_array($query);
return $categorias;
}
/* getVip() */
function getVip(){
$query = mysql_query('SELECT  rango_id, r_name, r_color FROM u_rangos ORDER BY rango_id ASC');
$vip = result_array($query);
return $vip;
}
/* getRVip() */
function getRVip(){
$query = mysql_query('SELECT  COUNT(r.rango_id) AS total, u.rango, u.rango_vip, r.r_name, r.r_color FROM usuarios AS u LEFT JOIN u_rangos AS r ON  u.rango = r.rango_id GROUP BY r.rango_id  ORDER BY r.rango_id ASC');
$vip = result_array($query);
return $vip;
}
/* getTema() */
function getTema(){
$query = mysql_query('SELECT * FROM wconfig');
$data = mysql_fetch_assoc($query);
if($this->isMobile()){ $data['t_path'] = 'mobile'; }else{ $data['t_path'] = 'default'; }
$data['t_url'] = $this->settings['direccion_url'].'/pages/themes/'.$data['t_path'];
return $data;
}
/* ES USUARIO ONLINE */
function onlineh($user){
$i = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$user."'"));
$online_timetos = time() - $i['active_ult'];
$online_time = round($online_timetos/60);
if($online_time <= 5) return true;
else return false;
}
/* *  Numeros en 15k  => 15 mil , 1M => 1 millon */
function posnum($number){
$pre = 'KMG';
if ($number >= 1000) { for ($i=-1; $number>=1000; ++$i) { $number /= 1000; }
return round($number,1).$pre[$i];
} else return $number;
}
	
/* setLevel($tsLevel) :: ESTABLECE EL NIVEL DE LA PAGINA | MIEMBROS o VISITANTES */
function setLevel($tsLevel, $msg = false){
global $wuser, $u;
// CUALQUIERA
if($tsLevel == 0) return true;
// SOLO VISITANTES
elseif($tsLevel == 1){ if($wuser->uid){ return true; }else { if($msg) $mensaje = 'Esta pagina solo es vista por los visitantes.'; else $this->redirect('/'); }
}
// SOLO MIEMBROS
elseif($tsLevel == 2){
if($wuser->uid) return true; else { if($msg) $mensaje = 'Para poder ver esta pagina debes iniciar sesi&oacute;n.'; else $this->redirect('/login/?r='.$this->currentUrl()); }
}
// SOLO MODERADORES
elseif($tsLevel == 3){
if($wuser->is_mod) return true; else { if($msg) $mensaje = 'Estas en un area restringida solo para moderadores.'; else $this->redirect('/login/?r='.$this->currentUrl()); }
}
// SOLO ADMIN
elseif($tsLevel == 4){
if($wuser->is_admod) return true; 
else { 
if($msg) $mensaje = 'Estas intentando algo no permitido. ::'.$wuser->is_admod; else $this->redirect('/login/?r='.$this->currentUrl()); 
}
}
// SOLO ADMINS Y MODERADORES
elseif($tsLevel == 5){
if($wuser->is_admod || $wuser->is_mod) return true; 
else { 
if($msg) $mensaje = 'Estas intentando algo no permitido. ::'.$wuser->is_admod; else $this->redirect('/login/?r='.$this->currentUrl()); 
}
}
//
return array('titulo' => 'Error', 'mensaje' => $mensaje);
}
	
/* replace() */
function replace($mostrar, $var1, $var2, $c1, $c2){
$c = str_replace($var1, $var2, $mostrar);
$c = str_replace($c1, $c2, $mostrar);
return $c;	
}

        function smileys($text){
		$bbcode = array();
		$html = array();
		$patht = $this->settings['url'].'/images/static/media/icmem/';
        $pre = '<img style="max-width: 46px;max-height: 46px;" src="'.$patht;
        $end = '" align="absmiddle" ';
        $query = mysql_query("SELECT * FROM emoticones WHERE e_meme='0'");
		while($reg=mysql_fetch_array($query)){
        $bbcode[] = $reg['e_prefijo']; $html[] = $pre.$reg['e_imagen'].$end.' title="'.$reg['e_nombre'].'"/>';
        $bbcode[] = $reg['e_prefijo2']; $html[] = $pre.$reg['e_imagen'].$end.' title="'.$reg['e_nombre'].'"/>';
        }
		return str_replace($bbcode, $html, $text);
        }

/* antiFlood() */
public function antiFlood($fetch ,$print = true, $type = 'post', $msg = ''){
$now = time();
$msg = empty($msg) ? 'No puedes realizar tantas acciones en tan poco tiempo.' : $msg;
$limit = 15;
$resta = $now - $fetch;
if($resta < $limit) {
$msg = '0: '.$msg.' Int&eacute;ntalo en '.($limit - $resta).' segundos.';
if($print) die($msg); else return $msg;
}else {
// ANTIFLOOD
if(empty($_SESSION['flood'][$type])) { $_SESSION['flood'][$type] = time(); } else $_SESSION['flood'][$type] = $now;
// TODO BIEN
return true;
}
}
	
/* setHace() */
	function setHace($fecha, $show = false){
		$fecha = $fecha; 
		$ahora = time();
		$tiempo = $ahora-$fecha; 
		if($fecha <= 0){
			return 'Nunca';
		}
		elseif(round($tiempo / 31536000) <= 0){ 
			if(round($tiempo / 2678400) <= 0){ 
				 if(round($tiempo / 86400) <= 0){ 
					 if(round($tiempo / 3600) <= 0){ 
						if(round($tiempo / 60) <= 0){ 
							if($tiempo <= 60){ $hace = 'instantes'; } 
						} else  { 
							$can = round($tiempo / 60); 
							if($can <= 1) {    $word = 'minuto'; } else { $word = 'minutos'; } 
							$hace = $can. " ".$word; 
						} 
					} else { 
						$can = round($tiempo / 3600); 
						if($can <= 1) {    $word = 'hora'; } else {    $word = 'horas'; } 
						$hace = $can. " ".$word; 
					} 
				} else  { 
					$can = round($tiempo / 86400); 
					if($can <= 1) {    $word = 'd&iacute;a'; } else {    $word = 'd&iacute;as'; } 
					$hace = $can. " ".$word;
				} 
			} else  { 
				$can = round($tiempo / 2678400);  
				if($can <= 1) {    $word = 'mes'; } else { $word = 'meses'; } 
				$hace = $can. " ".$word; 
			}
		 }else  {
			$can = round($tiempo / 31536000); 
			if($can <= 1) {    $word = 'a&ntilde;o';} else { $word = 'a&ntilde;os'; } 
			$hace = $can. " ".$word; 
		 }
		 //
		 if($show == true) return 'Hace '.$hace;
		 else return 'Hace '.$hace;
	}
		/*
		setSEO($string, $max) $max : MAXIMA CONVERSION
		: URL AMIGABLES
	*/
	function setSEO($string, $max = false) {
		$string = str_replace(' ', '-', $string);
		// ESPAÑOL
		$espanol = array('á','é','í','ó','ú','ñ');
		$ingles = array('a','e','i','o','u','n');
		// MINUS
		$string = str_replace($espanol,$ingles,$string);
		$string = trim($string);
		$string = trim(preg_replace('/[^ A-Za-z0-9_]/', '-', $string));
		$string = preg_replace('/[ \t\n\r]+/', '-', $string);
		$string = preg_replace('/[ -]+/', '-', $string);
		//
		if($max) {
			$string = str_replace('-','',$string);
			$string = strtolower($string);
		}
		//
		return $string;
	}

/** DIAS TRANSCURRIDOS ENTRE DOS FECHAS **/
function daystr($fecha_i,$fecha_f){
$dias = (strtotime($fecha_i)-strtotime($fecha_f))/86400;
$dias = abs($dias); $dias = floor($dias);
return $dias;
}

/* setSecure() */
public function setSecure($var, $xss = FALSE){
$var = mysql_real_escape_string(function_exists('magic_quotes_gpc') ? stripslashes($var) : $var);
return $var;
}

/*** OBTENER IMAGENES DE CARPETAS ***/

function get_icons($f = 'cats', $size = null){
global $web;
$arr_ext = array('jpg', 'png', 'gif');
$mydir = opendir(TS_ROOT.'/images/static/options/icons/'.$f);
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

/* parseBBCode($bbcode) */
function BBcode($bbcode, $type = 'normal'){
require_once('../libs/bbcode.inc.php');
$bbcodee = new bbcodee;
$t = $bbcodee->start($bbcodee);
return $t;
}
	
/* redirectTo($tsDir) */
function redirectTo($tsDir){
$tsDir = urldecode($tsDir);
header("Location: $tsDir");
exit();
}

/* redirect($tsDir) */
public function redirect($tsDir){
$tsDir = urldecode($tsDir);
header("Location: $tsDir");
exit();
}

/* VISTO DE WORTIT */
function visto_1($id, $type){
global $wuser, $w;
/*
1 => bwort
2 => mensaje
3 => mensaje en chat
4 => no quiero ver este bwort
*/
$m = mysql_num_rows(mysql_query("SELECT * FROM u_visto WHERE ue_type='".$type."' AND ue_user='".$wuser->uid."' AND ue_obj='".$id."'"));
if($m <= 0){
mysql_query("INSERT INTO u_visto(ue_user, ue_type, ue_hace, ue_useragent, ue_obj) VALUES(
'".$wuser->uid."',
'".$type."',
'".time()."',
'".$_SERVER['HTTP_USER_AGENT']."',
'".$id."')");
}
} 
	 
function wrecorte($texto, $limite=100){   
$texto = trim($texto);
$texto = strip_tags($texto);
$tamano = strlen($texto);
$resultado = '';
if($tamano <= $limite){
return $texto;
}else{
$texto = substr($texto, 0, $limite);
$palabras = explode(' ', $texto);
$resultado = implode(' ', $palabras);
$resultado .= '...';
}   
return $resultado;
}
	
	/*
	 IP ORIGINAL
	   */
	   function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
       
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
   
    return $_SERVER['REMOTE_ADDR'];
}

function iploc($ip) {
$html = file_get_contents("http://ipinfodb.com/ip_locator.php?ip=".$ip);
preg_match("/<li>Country : (.*?) <img/",$html,$data);
$d['pais'] = $data[1];
preg_match("/<li>State\/Province : (.*?)<\/li>/",$html,$data);
$d['state'] = $data[1];
preg_match("/<li>City : (.*?)<\/li>/",$html,$data);
$d['city'] = $data[1];
return ($d);
}

		/*
		setPagesLimit($tsPages, $start = false)
	*/
	function setPageLimit($tsLimit, $start = false, $tsMax = 0){
		if($start == false)
		$tsStart = empty($_GET['page']) ? 0 : (int) (($_GET['pagina'] - 1) * $tsLimit);
		else {
    		$tsStart = (int) $_GET['s'];
            $continue = $this->setMaximos($tsLimit, $tsMax);
            if($continue == true) $tsStart = 0;
        }
		//
		return $tsStart.','.$tsLimit;
	}
    /*
        setMaximos()
        :: MAXIMOS EN LAS PAGINAS
    */
    function setMaximos($tsLimit, $tsMax){
        // MAXIMOS || PARA NO EXEDER EL NUMERO DE PAGINAS
        $ban1 = ($_GET['page'] * $tsLimit);
        if($tsMax < $ban1){
            $ban2 = $ban1 - $tsLimit;
            if($tsMax < $ban2) return true;
        } 
        //
        return false;
    }
	    /**/
	// Constructs a page list.
	// $pageindex = constructPageIndex($scripturl . '?board=' . $board, $_REQUEST['start'], $num_messages, $maxindex, true);
	function pageIndex($base_url, &$start, $max_value, $num_per_page, $flexible_start = false){
        // QUITAR EL S de la base_url
        $base_url = explode('&s=',$base_url);
        $base_url = $base_url[0];
		// Save whether $start was less than 0 or not.
		$start_invalid = $start < 0;
	
		// Make sure $start is a proper variable - not less than 0.
		if ($start_invalid)
			$start = 0;
		// Not greater than the upper bound.
		elseif ($start >= $max_value)
			$start = max(0, (int) $max_value - (((int) $max_value % (int) $num_per_page) == 0 ? $num_per_page : ((int) $max_value % (int) $num_per_page)));
		// And it has to be a multiple of $num_per_page!
		else
			$start = max(0, (int) $start - ((int) $start % (int) $num_per_page));
	
		$base_link = '<a class="navPages" href="' . ($flexible_start ? $base_url : strtr($base_url, array('%' => '%%')) . '&s=%d') . '">%s</a> ';
	
			// If they didn't enter an odd value, pretend they did.
			$PageContiguous = (int) (5 - (5 % 2)) / 2;
	
			// Show the first page. (>1< ... 6 7 [8] 9 10 ... 15)
			if ($start > $num_per_page * $PageContiguous)
				$pageindex = sprintf($base_link, 0, '1');
			else
				$pageindex = '';
	
			// Show the ... after the first page.  (1 >...< 6 7 [8] 9 10 ... 15)
			if ($start > $num_per_page * ($PageContiguous + 1))
				$pageindex .= '<b> ... </b>';
	
			// Show the pages before the current one. (1 ... >6 7< [8] 9 10 ... 15)
			for ($nCont = $PageContiguous; $nCont >= 1; $nCont--)
				if ($start >= $num_per_page * $nCont)
				{
					$tmpStart = $start - $num_per_page * $nCont;
					$pageindex.= sprintf($base_link, $tmpStart, $tmpStart / $num_per_page + 1);
				}
	
			// Show the current page. (1 ... 6 7 >[8]< 9 10 ... 15)
			if (!$start_invalid)
				$pageindex .= '[<b>' . ($start / $num_per_page + 1) . '</b>] ';
			else
				$pageindex .= sprintf($base_link, $start, $start / $num_per_page + 1);
	
			// Show the pages after the current one... (1 ... 6 7 [8] >9 10< ... 15)
			$tmpMaxPages = (int) (($max_value - 1) / $num_per_page) * $num_per_page;
			for ($nCont = 1; $nCont <= $PageContiguous; $nCont++)
				if ($start + $num_per_page * $nCont <= $tmpMaxPages)
				{
					$tmpStart = $start + $num_per_page * $nCont;
					$pageindex .= sprintf($base_link, $tmpStart, $tmpStart / $num_per_page + 1);
				}
	
			// Show the '...' part near the end. (1 ... 6 7 [8] 9 10 >...< 15)
			if ($start + $num_per_page * ($PageContiguous + 1) < $tmpMaxPages)
				$pageindex .= '<b> ... </b>';
	
			// Show the last number in the list. (1 ... 6 7 [8] 9 10 ... >15<)
			if ($start + $num_per_page * $PageContiguous < $tmpMaxPages)
				$pageindex .= sprintf($base_link, $tmpMaxPages, $tmpMaxPages / $num_per_page + 1);
	
		return $pageindex;
	}
		/*
		getPages($tsTotal, $tsLimit)
		: PAGINACION
	*/
	function getPages($tsTotal, $tsLimit){
		//
		$tsPages = ceil($tsTotal / $tsLimit);
		// PAGINA
		$tsPage = empty($_GET['pagina']) ? 1 : $_GET['pagina'];
		// ARRAY
		$pages['current'] = $tsPage;
		$pages['pages'] = $tsPages;
		$pages['section'] = $tsPages + 1;
		$pages['prev'] = $tsPage - 1;
		$pages['next'] = $tsPage + 1;
        $pages['max'] = $this->setMaximos($tsLimit, $tsTotal);
		// RETORNAMOS HTML
		return $pages;
	}
	
	    /*
        getPagination($total, $per_page)
    */
    function getPagination($total, $per_page = 10){
        // PAGINA ACTUAL
        $page = empty($_GET['page']) ? 1 : (int) $_GET['page'];
        // NUMERO DE PAGINAS
        $num_pages = ceil($total / $per_page);
        // ANTERIOR
        $prev = $page - 1;
        $pages['prev'] = ($page > 0) ? $prev : 0;
        // SIGUIENTE 
        $next = $page + 1;
        $pages['next'] = ($next <= $num_pages) ? $next : 0;
        // LIMITE DB
        $pages['limit'] = (($page - 1) * $per_page).','.$per_page; 
        // TOTAL
        $pages['total'] = $total;
        //
        return $pages;
    }
	
	/****
	ADD VISITAS
	***/

	function visitasAdd($id, $type, $con){

    /*
    * 1 => perfil -
    * 2 => grupo -
    * 3 => juego - 
    * 4 => bwort -
    * 5 => nota -
    * 6 => tema -
    * 7 => registro -
    * 8 => notificaciones -
    * 9 => tienda
    * 10 => mensajes entre -
    * 11 => home mensajes -
    * 12 => home grupos -
    * 13 => home logeado -
    * 14 => home inlogeado -
    * 15 => buscador -
    * 16 => foro home -
    * 17 => new home -
    * 18 => editar/cuenta -
    * 19 => editar/privacidad -
    * 20 => editar/seguridad -
    * 21 => chat global -
    * 22 => calendario -
    * 23 => recuperar contraseña -
    * 24 => tops juegos -
    * 25 => albums juegos -
    * 26 => favoritos juegos -
    * 27 => editar juego -
    * 28 => agregar juego -
    * 29 => home juegos -
    * 30 => agregar agregado juego -
    * 31 => agregar tema -
    * 32 => editar tema -
    * 33 => editar foro -
    * 34 => miembros de foro -
    * 35 => mod history de foro -
    * 36 => foro -
    * 37 => Nuevo foro -
    * 38 => mis foros -
    * 39 => buscador foro -
    * 40 => directorio foro -
    * 42 => mod history foro home -
    * 43 => favoritos foro home -
    * 44 => borradores foro home -
    * 45 => terminos y condiciones
    * 46 => Ads
    - 47 => Ads no loggeado
    * 48 => codigo wortit home
    * 49 => Aula loggeado
    * 50 => Aula desloggeado
    * 51 => Perfil aula
    * 52 => clase "aula de wortit"
    * 53 => administración oficial
    * 54 => administración no oficial
    */

	$hace = time();
	if($_SESSION['uid']){
	$u = $_SESSION['uid'];
	}else{
	$u = $this->getRealIP();
	}
	$viscon = ($con) ? $con : '';
	
	//mysql_query("INSERT INTO visitas (id_v, type, v_hace, u_v, vis_con) VALUES('".$id."', '".$type."', '".$hace."', '".$u."', '".$viscon."')");
	}
	
	/***
	TIPOS DE VISITAS
	***/
	
	function typeV($type){
	$typ = array(
	1 => 'perfil',
	2 => 'home',
	3 => 'grupo',
	4 => 'comun',
	5 => 'nota',
	6 => 'bwort',
	7 => 'juego',
	);
	
	}
	
		/* 
		getIUP()
	*/
	function getIUP($array, $prefix = ''){
		// NOMBRE DE LOS CAMPOS
		$fields = array_keys($array);
		// VALOR PARA LAS TABLAS
		$valores = array_values($array);
		// NUMERICOS Y CARACTERES
		foreach($valores as $i => $val) {
			if(!is_numeric($val)) $sets[$i] = $prefix.$fields[$i]." = '".$val."'";
			else $sets[$i] = $prefix.$fields[$i]." = ".$val;
		}
		$values = implode(', ',$sets);
		//
		return $values;
	}
	
	
/*** FIN CLASS ****/	
}
?>