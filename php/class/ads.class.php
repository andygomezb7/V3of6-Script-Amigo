<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/** 
*   Funciones Globales 
*
*   @name c.vip.php
*   @author Wortit Developers
*/
class tsAds {

  // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsAds();
        }
        return $instance;
    }


/* DEFINICIONES DE FUNCIONES */
function tsAds(){
$this->idioma = array(
1 => 'español',
2 => 'ingles',
);
$this->reserva = array(
1 => 'blanco',
2 => 'color fuente',
);
}

function tam($d){
  $ds = array(
1 => '700x90',
2 => '336x280',
3 => '300x600',
4 => '300x250', 
);
  return $ds[$d];
}

function tipo($d){
$ds = array(
1 => 'display',
2 => 'texto',
);
return $ds[$d];
}

function tipo2($d){
    $ds = array(
    1 => 'anuncio',
    2 => 'campaña'
    );
}

function state($d){
  $ds = array(
'Ok_Outive' => 'Inactivo',
'Ok_Active' => 'Activo',
);
  return $ds[$d];
}

		/*
        * Funciones principales y globales de Wortit ADS
		*/	

		function loadAds(){
			$query = mysql_query("SELECT * u_ads WHERE au_code='Ok_Active'");
            $data = result_array($query);
			return $data;
		}

		/*
		*   FILTROS DE LOAD ADS
		*/

		function loadAdsFilters($filtre, $filtre2, $filtre3, $type){
        if($type == 1){ /* dates */ $tyfilters = "AND au_dimensiones='".$filtre."' AND au_idioma='".$filtre2."' AND au_dond='1'"; }elseif($type == 2){ $tyfilters = "AND au_dimensiones='".$filtre."' AND au_idioma='".$filtre2."' AND au_dond='".$filtre3."'"; }elseif($type == 3){ $tyfilters = ''; }else{ $tyfilters = ''; }
		$query = mysql_query("SELECT * FROM  `u_ads` WHERE au_type_camp='1' AND au_code='Ok_Active' ".$tyfilters." ORDER BY rand() DESC LIMIT 0 , 1");
        $data = mysql_fetch_assoc($query);
        return $data;
		}

		function loadWhtUsr($u){
			global $w, $wuser;
			$query = mysql_query("SELECT * FROM u_ads WHERE ua_user='".$wuser->uid."'");
            $data = result_array($query);
            $i = 0; foreach($data AS $row){
            $data[$i]['state'] = $this->state($row['au_code']);
            $data[$i]['tipo'] = $this->tipo($row['au_type']);
            $data[$i]['dimen'] = $this->tam($row['au_dimensiones']);
                $i++;
            }
			return $data;
		}

        /* VALIDACIÓN DE ENTRADA A ADSMYPAGE */
        function vlAdMP($q, $usk){
            $hace = $q;
            $key = $usk;
            $query_1 = mysql_num_rows(mysql_query("SELECT * FROM u_ads WHERE au_key='".$key."' AND au_type_camp='2'"));
            $query_2 = mysql_num_rows(mysql_query("SELECT * FROM u_ads WHERE au_hace='".$hace."' AND au_type_camp='2'"));
            if($query_2 <= 0){ $data = 3; }elseif($query_1 <= 0){
            $data = 4; }else{ $data = 1; }
            return $data;
        }

        /* LOAD STATICS FOR ADSMYPAGE */
        function statics($id, $type = 1){
        // VALUES PRINCIPALES
        if($type == 1){
            // DOBLES FILTERS FROM TIME()
            $data_1 = result_array(mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_anun='".$id."' GROUP BY ads_ip"));
            $data_2 = result_array(mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_anun='".$id."' GROUP BY ads_agent_browser"));
            $data_3 = result_array(mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, ads_agent_io, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_anun='".$id."' GROUP BY ads_agent_io"));
            $data_pago = mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_anun='".$id."' GROUP BY ads_ip");
            $data = $this->armStatics($data_1, 1);
            $data['nav'] = $this->armStatics($data_2, 2);
            $data['os'] = $this->armStatics($data_3, 3);
            $data['pago'] = mysql_num_rows($data_pago);
        }elseif($type == 2){
            // DOBLES FILTERS FROM TIME()
            $ultimes = time() - 2419200;
            $data_1 = result_array(mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_banr='".$id."' GROUP BY ads_ip"));
            $data_2 = result_array(mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_banr='".$id."' GROUP BY ads_agent_browser"));
            $data_3 = result_array(mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, ads_agent_io, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE ads_banr='".$id."' GROUP BY ads_agent_io"));
            /* info sql: month(dato) = month(getdate()) || year(dato) = year(getdate()) */
            $data_pago = mysql_query("SELECT ads_ip, ads_anun, ads_hace_d, ads_user, ads_banr, ads_agent_browser, COUNT(*) AS ads_total FROM `u_ads_statics` WHERE datepart(mm, ads_hace) = datepart(mm, getdate()) AND ads_banr='".$id."' GROUP BY ads_ip");
            $data = $this->armStatics($data_1, 1);
            $data['nav'] = $this->armStatics($data_2, 2);
            $data['os'] = $this->armStatics($data_3, 3);
            $data['pago'] = mysql_num_rows($data_pago);
        }else{}
            return $data;
        }

        function armStatics($data, $type){
        if($type == 1){
            $Statics = array(
            'total' => count($data),
            'data' => array(
            'hr' => array('title' => '1 Hora', 'data' => array()),
            'hrs' => array('title' => '3 Horas', 'data' => array()),
            'today' => array('title' => 'Hoy', 'data' => array()),
            'yesterday' => array('title' => 'Ayer', 'data' => array()),
            'week' => array('title' => 'D&iacute;as Anteriores', 'data' => array()),
            'month' => array('title' => 'Semanas Anteriores', 'data' => array()),
            'old' => array('title' => 'Estadisticas m&aacute;s antiguas', 'data' => array())
            )
        );
        }elseif($type == 2){
        $Statics = array(
            'total' => count($data),
            'data' => array(
            'IE' => array('title' => 'IE', 'data' => array()),
            'OPERA' => array('title' => 'Opera', 'data' => array()),
            'MOZILLA' => array('title' => 'Mozilla', 'data' => array()),
            'NETSCAPE' => array('title' => 'NetScape', 'data' => array()),
            'FIREFOX' => array('title' => 'Firefox', 'data' => array()),
            'SAFARI' => array('title' => 'Safari', 'data' => array()),
            'CHROME' => array('title' => 'Chrome', 'data' => array())
            )
        );
        }else{
        $Statics = array(
            'total' => count($data),
            'data' => array(
            'WIN' => array('title' => 'Windows', 'data' => array()),
            'MAC' => array('title' => 'Mac', 'data' => array()),
            'LINUX' => array('title' => 'Linux', 'data' => array())
            )
        );
        }
         # PARA CADA VALOR CREAR UNA CONSULTA
        foreach($data as $key => $val){
                // AGREGAMOS AL ARRAY ORIGINAL
                $dato = array_merge($val);
                // VARIBALES EXTRAS
                $oracion = $this->armOracion($dato);
                // DONDE PONERLO?
                $ac_date = $this->makeFecha($val['ads_hace_d']);
                // PONER
                if($type == 1){ 
                $Statics['data'][$ac_date]['data'][] = $oracion; 
                }elseif($type == 2){ 
                $Statics['data'][$val['ads_agent_browser']]['data'][] = $oracion;  
                }else{ 
                $Statics['data'][$val['ads_agent_io']]['data'][] = $oracion; 
                }
        }
        return $Statics;
        }

        function armOracion($data){
            $sqluser = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$data['ads_user']."'"));
            $oracion['user'] = $sqluser['usuario_nombre'];
            $oracion['campana'] = $data['ads_banr'];
            $oracion['ads_total'] = $data['ads_total'];
            $oracion['hace'] = $data['ads_hace_d'];
            $oracion['useragent'] = $data['ads_agent_browser'];
            return $oracion;
        }

        /* CARGAR INFORMACIÓN DE UN ANUNCIO */
        function adsmypageIn($id, $hace, $type = 1){
            if($type == 1){ $he = "au_id='".$id."'"; }elseif($type == 2){ $he = "au_key='".$id."'"; }else{ $he = "au_id='".$id."'"; }
            $query = mysql_query("SELECT * FROM u_ads WHERE ".$he." AND au_hace='".$hace."'");
            $data = mysql_fetch_assoc($query);
            $data['num'] = mysql_num_rows($query);
            return $data;
        }

        /* CARGAR ALEATORIOAMENTE */

        function loadAdsByFilters($country){
            global $w;
            $query = mysql_query("SELECT * FROM u_ads WHERE au_code='Ok_Active' AND au_type_camp='1'");
            $he = mysql_fetch_assoc($query);
            $url = "http://api.wipmania.com/".$he['au_ip_conf'];
            $country = file_get_contents($url);
            $_SERVER['REMOTE_ADDR'] = $_SERVER['X_FORWARDED_FOR'] ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
            $url_s = "http://api.wipmania.com/".$_SERVER['REMOTE_ADDR'];
            $country_s = file_get_contents($url_s);
            if($country == $country_s){
                $dimen = explode('x', $he['au_dimensiones']);
                $data = '<a href="'.$w->settings['url'].'/php/pages/ejects/globalhe/?attr='.$he['au_key'].'&da='.time().'" class="display:block;" target="_blank">';
                $data .= '<div>';
                $data .= '<img src="'.$he['au_img'].'" width="" height=""/>';
                $data .= '</div>';
                $data .= '</a>';
            }
            return $data;
        }

        /* INSERTAR VISITAS A ANUNCIOS */

        function ejectVisits($key, $hace, $tipo, $direc, $keycam, $hacecam){
            global $ip, $w, $wuser, $tsWeb, $tsActividad;
            $tyypo = $tipo ? $tipo : 'notas';
            $campagh = mysql_fetch_assoc(mysql_query("SELECT * FROM u_ads WHERE au_key='".$key."' AND au_hace='".$hace."' AND au_type_camp='1'"));
            $campaghcmapa = mysql_fetch_assoc(mysql_query("SELECT * FROM u_ads WHERE au_key='".$keycam."' AND au_hace='".$hacecam."' AND au_type_camp='2'"));
            $anun_sdk = ($tyypo == 'notas') ? 0 : $campaghcmapa['au_id'];
            $infouseragnt = $this->detectUserAgent($_SERVER['HTTP_USER_AGENT']);
            $is = array(
            'key' => $key,
            'hace' => $hace,
            'tipo' => $tyypo,
            'direc' => $direc,
            'anun' => $anun_sdk,
            'campa' => $campagh['au_id'],
            'ip' => $ip,
            'uagent' => $w->setSecure($_SERVER['HTTP_USER_AGENT']),
            'haces' => time(),
            'user' => $wuser->uid,
            'browser' => $infouseragnt['browser'],
            'version' => $infouseragnt['version'],
            'os' => $infouseragnt['os'],
            );
            if(mysql_query("INSERT INTO u_ads_statics(ads_banr,ads_ip,ads_hace_d,ads_useragent,ads_user,ads_type, ads_logg,ads_dest,ads_anun,ads_agent_browser,ads_agent_version,ads_agent_io) VALUES('".$is['anun']."','".$is['ip']."','".$is['haces']."','".$is['uagent']."','".$is['user']."','".$is['tipo']."','1','".$is['direc']."','".$is['campa']."','".$is['browser']."','".$is['version']."','".$is['os']."')")){ 
            return '1: Insertado correctamente.'; 
            }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
        }

        /* CREACIÓN DE CAMPAÑA */

        function ejectsAdsCmp($type = 1){
        global $ip, $w, $mysqli, $wuser, $tsWeb, $tsActividad;
        // AGREGAR
        if($type == 1){
        $akls['asdkf'] = $w->setSecure($_POST['date']);
        $ads = array(
        'name' => $w->setSecure($_POST['name']),
        'date_one' => time(),
        'date_two' => time($akls['asdkf']),
        'key' => substr(md5(uniqid(mt_rand(), false)),0, 27),
        'code' => 'Ok_Active',
        'descripcion' => $w->setSecure($_POST['desc']),
        'agent' => $w->setSecure($_SERVER['HTTP_USER_AGENT']),
        'dimen' => $w->setSecure($_POST['dimen']),
        'ipp_conf' => $ip,
        'user' => $wuser->uid,
        'idioma' => $w->setSecure($_POST['idddoomw']),
        'reserva' => $w->setSecure($_POST['reservSLWL']),
        'tipo' => $w->setSecure($_POST['tiposss']),
        );
        $kasl = '';
        foreach($ads AS $fs => $dd){
        if(!$dd or $dd == ''){ 
        $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />';  
        }
        }
        if($kasl){
        return $kasl;
        }else{
        if($mysqli->query("INSERT INTO u_ads(ua_user,au_name, au_date_one, au_hace, au_key, au_code, au_description, au_useragent, au_ip_conf, au_dimensiones, au_idioma, au_an_reverva, au_type, au_type_camp) VALUES('".$ads['user']."','".$ads['name']."','".$ads['date_one']."','".$ads['date_one']."','".$ads['key']."','".$ads['code']."','".$ads['descripcion']."','".$ads['agent']."','".$ads['ipp_conf']."','".$ads['dimen']."', '".$ads['idioma']."', '".$ads['reserva']."', '".$ads['tipo']."', '2')")){
        $idInserQuerySql = $mysqli->insert_id;
        $tsWeb->getNotifis($wuser->uid, 60, $idInserQuerySql, 0); 
        $tsActividad->setActividad(69,$idInserQuerySql);
        $totals['key'] = $ads['key'];
        $totals['date_as'] = $ads['date_two'];
        return '1:'.json($totals);
        }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
        }
        // BORRAR
        }elseif($type == 0){

        }else{
        return '0: No se definio ninguna ejecución.';   
        }
        }

        /* CREACION DE ANUNCIO */

		function ejectsAds($type = 1){
			global $ip, $w, $mysqli, $wuser, $tsWeb, $tsActividad;
			// AGREGAR
        if($type == 1){
        $akls['asdkf'] = $w->setSecure($_POST['date']);
        $ads = array(
        'name' => $w->setSecure($_POST['name']),
        'date_one' => time(),
        'date_two' => time($akls['asdkf']),
        'key' => substr(md5(uniqid(mt_rand(), false)),0, 27),
        'code' => ($wuser->admod) ? 'Ok_Active' : 'Ok_Outive',
        'img' => $w->setSecure($_POST['img']),
        'descripcion' => $w->setSecure($_POST['desc']),
        'mini_descripcion' => $w->setSecure($_POST['mdesc']),
        'agent' => $w->setSecure($_SERVER['HTTP_USER_AGENT']),
        'dimen' => $w->setSecure($_POST['dimen']),
        'ipp_conf' => $ip,
        'user' => $wuser->uid,
        'ubicacion' => $w->setSecure($_POST['ubicdds']),
        'idioma' => $w->setSecure($_POST['idddoomw']),
        'reserva' => $w->setSecure($_POST['reservSLWL']),
        'presupuesto' => $w->setSecure($_POST['presup']),
        'tipo' => $w->setSecure($_POST['tiposss']),
        'titulo_banner' => $w->setSecure($_POST['bnttls']),
        );
        $kasl = '';
        foreach($ads AS $fs => $dd){
        if(!$dd or $dd == ''){ 
        if($ads['tipo'] == 1 && !$ads['titulo_banner'] or !$ads['descripcion'] or !$ads['mini_descripcion']){ 
        }elseif($ads['tipo'] == 2 && !$ads['img']){
        }else{
        $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; 
        } 
        }
        }
        if($kasl){
        return $kasl;
        }else{
        if($mysqli->query("INSERT INTO u_ads(ua_user ,au_name, au_date_one, au_date_two, au_hace, au_key, au_code, au_img, au_description, au_mdescription, au_useragent, au_ip_conf, au_dimensiones, au_dond, au_idioma, au_an_reverva, au_presupuesto, au_type, au_txt_titl, au_type_camp) VALUES('".$ads['user']."','".$ads['name']."','".$ads['date_one']."','".$ads['date_two']."','".$ads['date_one']."','".$ads['key']."','".$ads['code']."','".$ads['img']."','".$ads['descripcion']."','".$ads['mini_descripcion']."','".$ads['agent']."','".$ads['ipp_conf']."', '".$ads['dimen']."', '".$ads['ubicacion']."', '".$ads['idioma']."', '".$ads['reserva']."', '".$ads['presupuesto']."', '".$ads['tipo']."', '".$ads['titulo_banner']."', '1')")){
        $idInserQuerySql = $mysqli->insert_id;
        $tsWeb->getNotifis($wuser->uid, 59, $idInserQuerySql, 0); 
        $tsActividad->setActividad(68,$idInserQuerySql);
        $totals['key'] = $ads['key'];
        $totals['date_as'] = $ads['date_two'];
        return '1:'.json($totals);
        }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
        }
        // BORRAR
        }elseif($type == 0){

        }else{
        return '0: No se definio ninguna ejecución.';	
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
        if($hrs <= 1) return 'hr';
        elseif($hrs <= 3) return 'hrs';
        elseif($dias <= 1) return 'today';
        elseif($dias <= 2) return 'yesterday';
        elseif($dias <= 7) return 'week';
        elseif($dias <= 30) return 'month';
        else return 'old';
        #
    }
	
}

