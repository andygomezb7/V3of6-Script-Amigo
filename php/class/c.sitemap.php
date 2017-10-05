<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control del registro de usuarios
 *
 * @name    c.sitemap.php
 * @author  aperpen
 */
class tsSiteMap{

	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsSiteMap();
    	}
		return $instance;
	}
	
	 function getInst()
    {

        //
        $query = mysql_query('SELECT `stats_time_foundation` FROM `w_stats` WHERE stats_no = \'1\'');
        //
        $data = mysql_fetch_row($query);
        //
        return $data;
    }

    function CreateSiteMap(){
		global $w;
		$t = $this->getInst();
	if((int)$_GET['i']){
		$robots = fopen(TS_ROOT.'/robots.txt', 'a');
		fwrite($robots, 'Sitemap: '.$w->settings['direccion_url'].'/w/sitemap.xml');
	}
	$newsm = fopen(TS_ROOT.'/pages/sitemap.xml', 'w+');
	$sistemap = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
  <loc>'.$w->settings['direccion_url'].'</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>never</changefreq>
    <priority>1</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/posts/</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>hourly</changefreq>
  <priority>0.9</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/fotos/</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>daily</changefreq>
  <priority>0.9</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/tops/</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>daily</changefreq>
  <priority>0.9</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/buscador/</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.8</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/usuarios/</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>daily</changefreq>
  <priority>0.8</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/tops/posts</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>daily</changefreq>
  <priority>0.6</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/tops/usuarios</loc>
  <lastmod>'.date('Y-m-d', time()).'</lastmod>
  <changefreq>daily</changefreq>
  <priority>0.6</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/pages/ayuda/</loc>
  <lastmod>'.date('Y-m-d', $t[0]).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.5</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/pages/dmca/</loc>
  <lastmod>'.date('Y-m-d', $t[0]).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.5</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/pages/privacidad/</loc>
  <lastmod>'.date('Y-m-d', $t[0]).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.5</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/pages/terminos-y-condiciones/</loc>
  <lastmod>'.date('Y-m-d', $t[0]).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.5</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/pages/protocolo/</loc>
  <lastmod>'.date('Y-m-d', $t[0]).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.5</priority>
</url>
<url>
  <loc>'.$w->settings['direccion_url'].'/pages/chat/</loc>
  <lastmod>'.date('Y-m-d', $t[0]).'</lastmod>
  <changefreq>never</changefreq>
  <priority>0.4</priority>
</url>

</urlset>';
	fwrite($newsm, $sistemap);
	
	//Insertar en BD
	$url = array($w->settings['direccion_url'], $w->settings['url_new'].'/nota/', $w->settings['direccion_url'].'/fotos/', $w->settings['direccion_url'].'/tops/', $w->settings['direccion_url'].'/buscador/', $w->settings['direccion_url'].'/usuarios/', $w->settings['direccion_url'].'/tops/posts', $w->settings['direccion_url'].'/tops/usuarios', $w->settings['direccion_url'].'/pages/ayuda/', $w->settings['direccion_url'].'/pages/dmca/', $w->settings['direccion_url'].'/pages/privacidad/', $w->settings['direccion_url'].'/pages/terminos-y-condiciones/', $w->settings['direccion_url'].'/pages/protocolo/', $w->settings['direccion_url'].'/pages/chat/');
    $fecha = time();
	$frecuencia = array('never', 'hourly', 'daily', 'daily', 'never', 'daily', 'daily', 'daily', 'never', 'never', 'never', 'never', 'never', 'never');
	$prioridad = array('1', '0.9', '0.9', '0.9', '0.8', '0.8', '0.6', '0.6', '0.5', '0.5', '0.5', '0.5', '0.5', '0.4');
	
		if(mysql_query('TRUNCATE TABLE w_sitemap') or die(mysql_error())){
			for ($i=0;$i<14;$i++){ 
        mysql_query('INSERT INTO w_sitemap (url, frecuencia, fecha, prioridad) VALUES (\''.$url[$i].'\',\''.$frecuencia[$i].'\',\''.$fecha.'\', \''.$prioridad[$i].'\')') or die(mysql_error());
}  
return '<div class="mensajes ok">Sitemap restaurado correctamente</div>';
		}
	}
    /**
     * @name getSiteMap($)
     * @access public
     * @return array-urls
     */
	function getSitemap(){
	//ABRIR ARCHIVO
	$sm = simplexml_load_file(TS_ROOT.'/sitemap.xml');
	$salida = '';

	//RECOPILAR DATOS
	$i = 0;
	$direcc = array();
	foreach($sm->url as $url){
	$direcc[$i] = array(
	'url' => $url->loc
	);
    $i++;
		}

	//Array	
	return $direcc;
			}
			
	function removeUrlBD($id){
					if(mysql_query('DELETE FROM w_sitemap WHERE id = \''.(int)$id.'\'') or die(mysql_error()))
					return '<div class="mensajes ok">URL eliminada correctamente.</div>';
	}
	
	function generateSiteMap(){
		$query = mysql_query('SELECT * FROM w_sitemap');
		$data = result_array($query);
		$sitemap = fopen(TS_ROOT.'/sitemap.xml', 'w+');
		$url = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
		$url .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
	foreach($data as $l){
		$l['prioridad'] = $l['prioridad'] == 1.0 ? 1 : $l['prioridad']; 
		$url .= '<url>' . PHP_EOL;
		$url .= '<loc>'.$l['url'].'</loc>' . PHP_EOL;
		$url .= '<lastmod>'.date('Y-m-d', $l['fecha']).'</lastmod>' . PHP_EOL;
		$url .= '<changefreq>'.$l['frecuencia'].'</changefreq>' . PHP_EOL;
		$url .= '<priority>'.$l['prioridad'].'</priority>' . PHP_EOL;
		$url .= '</url>'. PHP_EOL;
	}
			$url .= '</urlset>';
	fwrite($sitemap, $url) or die('No se pudo generar el sitemap.');
	return '<div class="mensajes ok">Sitemap generado correctamente</div>';
	}
	
	function addURL($url, $prioridad, $frecuencia){
		global $w;
		$url = filter_var($w->setSecure($url), FILTER_VALIDATE_URL) or die('URL Inválida');
	$frecs = array('never', 'always', 'daily', 'hourly', 'weekly', 'monthly', 'yearly');
		$prioridades = array('1', '0.9', '0.8', '0.7', '0.6', '0.5', '0.4', '0.3', '0.2', '0.1', '0');

if(!in_array($frecuencia, $frecs))
die('Frecuencia inválida.');
elseif(!in_array($prioridad, $prioridades))
die('Prioridad inválida.');

		mysql_query('INSERT INTO w_sitemap (url, frecuencia, fecha, prioridad) VALUES (\''.$url.'\', \''.$frecuencia.'\', \''.time().'\', \''.$prioridad.'\')') or die(mysql_error());	
		return true;
	}
				
     function getURLsBD()
    {

        //
        $query = mysql_query('SELECT * FROM `w_sitemap`');
        //
        $data = result_array($query);
        //
        return $data;
    }
	
	function getUrl($id){ 
        
        //
        $query = mysql_query('SELECT * FROM w_sitemap WHERE id = \'' .(int)$id . '\' LIMIT 1');
        $data = mysql_fetch_assoc($query);

        //
        return $data;
}
	function editUrl($id, $url, $frecuencia, $prioridad){ 
        
		global $w;
		//FILTRAMOS DATOS
        $url = filter_var($w->setSecure($url), FILTER_VALIDATE_URL);
		$frecs = array('never', 'always', 'daily', 'hourly', 'weekly', 'monthly', 'yearly');
		$prioridades = array('1', '0.9', '0.8', '0.7', '0.6', '0.5', '0.4', '0.3', '0.2', '0.1', '0');

if(!in_array($frecuencia, $frecs))
die('Frecuencia inválida.');
elseif(!in_array($prioridad, $prioridades))
die('Prioridad inválida.');
		//
       mysql_query('UPDATE w_sitemap SET url = \''.$url.'\', frecuencia = \''.$w->setSecure($frecuencia).'\', fecha = \''.time().'\', prioridad = \''.$w->setSecure($prioridad).'\' WHERE id = \''.(int)$id.'\'') or die(mysql_error());

        //
        return true;
}


function addUrlsm($loc, $p = 1){
	$sm = fopen(TS_ROOT.'/sitemap.xml', 'r');
    $content = fread($sm, filesize(TS_ROOT.'/sitemap.xml'));
	fclose($sm);
	$sx = fopen(TS_ROOT.'/sitemap.xml', 'w+');
    $url = '<url>';
	$url .= '<loc>'.$loc.'</loc>'. PHP_EOL;
	$url .= '<lastmod>'.date('Y-m-d', time()).'</lastmod>'. PHP_EOL;
	$url .= '<changefreq>monthly</changefreq>' . PHP_EOL;
	
	if($p){
	$url .= '<priority>0.6</priority>' . PHP_EOL;
	$this->addURL($loc, 0.6, 'monthly');
   }else{
	$url .= '<priority>0.4</priority>' . PHP_EOL;
		$this->addURL($loc, 0.4, 'monthly');
	}
	
	$url .= '</url>'. PHP_EOL;
	$url .= '</urlset>';
	$content = str_replace('</urlset>', $url, $content);
	fwrite($sx, $content);
	fclose($sx);
	return true;
	}
	
	function updateLM($url){
		global $tsCore;
		 $url = $tsCore->setSecure(filter_var($url, FILTER_VALIDATE_URL));
		 mysql_query('UPDATE w_sitemap SET fecha = \''.time().'\' WHERE url = \''.$url.'\'') or die(mysql_error());
		 $this->generateSiteMap();
		 return true;
	}
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
}