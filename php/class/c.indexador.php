<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control del muro
 *
 * @name    c.muro.php
 * @author  PHPost Team
 */
class tsIndex{

   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsIndex();
        }
        return $instance;
    }
	
	/*****
	*-----------------------------------------------------
	*                  ADD MENCIONES URLS
	*  @action  Indexar los enlaces en la base de datos
	*-----------------------------------------------------
	****/


    function simpleono($cadena){
  $p1=strpos($cadena,"\"");
  $p2=strpos($cadena,"'");
  if($p1!==false && $p2!==false){
    if($p1<$p2) return $p1; else return $p2;
  } else return 0;
}
 
function searchanddestroy($cadena,$buscar,$separador){
  $arr=explode($cadena,$separador);
  for($i=0;$i<count($arr);$i++){
    if($arr[$i]==$buscar) return true;
  }
  return false;
}

function getTitle($Url){
    $data = @get_meta_tags($Url);
    return $data['title'];
}
function get_meta_tags($url){
$desc= get_meta_tags($url);
$res['description'] = ($desc["description"]); 
$red['keywords'] = ($desc['keywords']);
return $res;
}

function generador($direccion){  
$p_inicio=$direccion;
$c_inicio=file_get_contents($p_inicio);
$c1=strpos($c_inicio,"href=");
//BUSCAMOS UN ENLACE
while($c1!==false){
  $curret_pos=$c1;
  //INTENTAMOS EXTRAER EL ENLACE
  $url=substr($c_inicio,$c1+6);
  $c2=$this->simpleono($url);
  if($c2!==false){
    //echo $url."before";
    $url=substr($url,0,$c2);
    if(strpos($url,"http://")===0 || strpos($url,"www.")===0 || strpos($url,"https://")===0){
      if($url!=$p_inicio){
        if(strpos($enlaces,$url)===false){
        	$knsodlakf = mysql_num_rows(mysql_query("SELECT * FROM sw_pages WHERE sw_url='".$url."'"));
        	if($knsodlakf > 0){}else{
            $infisdk = $this->get_meta_tags($url);
            $title = $this->getTitle($url);
            mysql_query("INSERT INTO sw_pages(sw_title ,sw_url, sw_desc, sw_cat) VALUES('".$title."' ,'".$url."', '".$infisdk['description']."', '0')"); 
            echo $url."<br>"; 
            }
          $this->generador($url);
        }
      }
    }else{
      $newurl=$p_inicio.$url; //lolz.com/#
      if($url!=""){   
        if($url!="#"){
             $knsodlakf = mysql_num_rows(mysql_query("SELECT * FROM sw_pages WHERE sw_url='".$newurl."'"));
          if($knsodlakf > 0){}else{
            $infisdk = $this->get_meta_tags($url);
            $dfgnwerlñk = $this->getTitle($url);
            mysql_query("INSERT INTO sw_pages(sw_title ,sw_url, sw_desc, sw_cat) VALUES('".$dfgnwerlñk."' ,'".$newurl."', '".$infisdk['description']."', '".$infisdk['keywords']."')"); 
            echo $newurl."<br>";
            } 
          $this->generador($url);
        } 
      }
    }
  }
  else
  {
    echo "0: Cierre de etiqueta no encontrado<br>";
  }
  $c1=strpos($c_inicio,"href=",$c1+1);
}
}

	
	/******  FIN DE LA CLASS  ******/
	}
	
	?>