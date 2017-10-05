<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala Web');
/*
 * @name    c.files.php
 * @author  Kmario19
 */

class tsFiles {
	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsFiles();
    	}
		return $instance;
	}
	
	/******************************************************************************************************/
	/***********************************************FUNCIONES**********************************************/
	/******************************************************************************************************/
	
	/*
		BUSCAR EL TIPO DE ARCHIVO EN SU NOMBRE: NO HAY DE OTRA -YAO
	*/	
	function ext_archivo($nombre) {		
		// Separamos las palabras
		$palabras = explode('.',$nombre);
		// Despues del punto es la extension
		$sep = count($palabras)-1;
		// Sacamos la extension :D
		$ext = $palabras[$sep];
		//
		return $ext;
	}
	
	/*
		SACAR NOMBRE SIN EXTENSION
	*/
	function nombre_archivo($name, $type) {
		// Separar .xxx del nombre del archivo
		$file = explode('.'.$type,$name);
		// El nombre es el primero e,e
		$nombre = $file[0];
		//		
		return $nombre;
	}
	
	/*
		SIMPLE CONVERSION DE UNIDADES: KB, MB, GB
	*/
	function peso_archivo($size) {
		// Menores de 1Kb para Kb con maximo de 3 decimales
		if($size < 1024) {
			$total = $size/1024;
			$total = number_format($total, 3);
			$total = $total.'Kb';
		// Menores de 1Mb para Kb con un decimal	
		}elseif($size > 1024 && $size < 1048576) {
			$total = $size/1024;
			$total = number_format($total, 1);
			$total = $total.'Kb';		
		// Menores de 1Gb para Mb con un decimal
		}elseif($size > 1048576 && $size < 1073741824) {
			$total = $size/1048576;
			$total = number_format($total, 1);
			$total = $total.'Mb';
		// Si es mayor de 1Gb (poco probable) que muestre en Gb con dos decimales
		}elseif($size > 1073741824) {
			$total = $size/1073741824;
			$total = number_format($total, 2);
			$total = $total.'Gb';
		}
		//	
    	return $total;
	}

	 function obtTypeArch($nombre) {     
        // Separamos las palabras
        $palabras = explode('.',$nombre);
        // Despues del punto es la extension
        $sep = count($palabras)-1;
        // Sacamos la extension :D
        $ext = $palabras[$sep];
        //
        return $ext;
    }

            /*
        BUSCAR EL TIPO DE ARCHIVO EN SU NOMBRE: NO HAY DE OTRA -YAO
    */  
    function obtTypeUrl($nombre) {     
        $palabras = explode('/',$nombre);
        $sep = count($palabras)-1;
        $ext = $palabras[$sep];
        return $ext;
    }

    // Calcular el tamaño de el archivo
     function tmnarch($type ,$peso , $decimales = 2 ){
     $clase = array(" Bytes", " KB", " MB", " GB", " TB"); 
     if($type == 1){ 
    return round($peso/pow(1024,($i = floor(log($peso, 1024)))), $decimales); 
     }else{  
    $skdwo = round($peso/pow(1024,($i = floor(log($peso, 1024)))), $decimales); 
    return $clase[$i]; 
     }
     } 
	
	/******************************************************************************************************/
	/************************************************ARCHIVOS**********************************************/
	/******************************************************************************************************/

    /* VARIABLES PARA ENTENDER DE DONDE SE SACO ESTE ARCHIVO. */
    /*
    1 => Quien sabe, xD
    2 => avatar o portada de perfil.
    3 => avatar el un proyecto en soporte.
    4 => archivo en code wortit
    5 => imagen para nota
    6 => imagen para grupo
    */

	
	/*
		SUBIR NUEVO ARCHIVO
	*/
	function newFile($files, $folder = 1) {
	global $w, $mysqli, $wuser;
	$ssTipedest = $w->setSecure($_POST['ttrft']);
    $masinfoFileSizess = $w->setSecure($_POST['ggohe']);
    $sqlfile = $files;
    $filename = $sqlfile['name'];
    $typefile = $this->obtTypeArch($filename);
    $sizefiless = $sqlfile['size'];
    $sizefile = $this->tmnarch(1, $sizefiless);
    $typesizefile = $this->tmnarch(2, $sizefiless);
    $key = substr(md5(uniqid(mt_rand(), false)),0, 15);
    $kdfaw4 = time().time().rand(7, 1000000);
    $code = substr(md5(md5($kdfaw4)),0, 11);
    $date = time();
    $pref = time().time().time().time().time().rand();
    $prefigh = substr(md5($pref),0, 23);
    if($wuser->uid){
    $kmlsawe5fw = mysql_query("SELECT u_maxsize, u_size FROM rft_members WHERE u_id='".$wuser->uid."'");
    $ksjdokemw = mysql_fetch_assoc($kmlsawe5fw);
    if($typefile == 'jpg' or $typefile == 'png' or $typefile == 'gif' or $typefile == 'jpeg' or $typefile == 'PNG' or $typefile == 'JPG' or $typefile == 'JPEG' or $typefile == 'GIF'){ 
    $direct = TS_ROOT.'/files/arc/co/';
    if(copy($sqlfile['tmp_name'], $direct.$prefigh.'.'.$typefile)){ 
        $namefileske = $prefigh;
    if($ssTipedest == 2 && $ssTipedest){ $url = $prefigh; }else{ $url = $w->settings['url'].'/files/arc/co/'.$prefigh.'.'.$typefile; }
    if($wuser->uid) $typeusip = $wuser->uid; else $typeusip = $w->getRealIP();
    $typefilesnwpq = $folder;
    $sd65f4as91a6se0wa3q = $filename;
    $sd5f4a6ds1sd56se3w32 = $ksjdokemw['u_size']+$sizefiless;
    mysql_query("INSERT INTO rft_uploads(
     up_name, up_vname, up_img, up_size, up_key, up_code, up_date, up_type, up_ftype, up_typesize, up_user, up_vsize) VALUES('".$code."', '".$sd65f4as91a6se0wa3q."', '0', '".$sizefile."', '".$key."', '".$namefileske."', '".$date."', '".$typefilesnwpq."', '".$typefile."', '".$typesizefile."', '".$typeusip."', '".$sizefiless."')");  
     if($masinfoFileSizess && $masinfoFileSizess == 1){
    return '1:'.$code.'-'.$sd65f4as91a6se0wa3q.'-'.$typefile.'-'.$sizefile.' '.$typesizefile.'-'.$url;
     }else return '1:'.$url; 
     }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
     }else{ return '0: El formato no es valido, Consulta nuestras politicas  ::  '.$typefile; }
     }else{ return '0: Esta acción es solo para usuarios registrados.'; }
    /* FIN funcion  upload(); */
	}

		/*
		SUBIR NUEVO ARCHIVO
	*/
	function newFileArc($files, $folder = 1) {
	global $w, $mysqli, $wuser;
	$ssTipedest = $w->setSecure($_POST['ttrft']);
    $sqlfile = $files;
    $filename = $sqlfile['name'];
    $typefile = $this->obtTypeArch($filename);
    $sizefiless = $sqlfile['size'];
    $sizefile = $this->tmnarch(1, $sizefiless);
    $typesizefile = $this->tmnarch(2, $sizefiless);
    $key = substr(md5(uniqid(mt_rand(), false)),0, 15);
    $kdfaw4 = time().time().rand(7, 1000000);
    $code = substr(md5(md5($kdfaw4)),0, 11);
    $date = time();
    $pref = time().time().time().time().time().rand();
    $prefigh = substr(md5($pref),0, 23);
    if($wuser->uid){
    $kmlsawe5fw = mysql_query("SELECT u_maxsize, u_size FROM rft_members WHERE u_id='".$wuser->uid."'");
    $ksjdokemw = mysql_fetch_assoc($kmlsawe5fw);
    if($typefile == 'js' or $typefile == 'php' or $typefile == 'css' or $typefile == 'docx' or $typefile == 'zip' or $typefile == 'rar' or $typefile == 'txt' or $typefile == 'psd' or $typefile == 'html' or $typefile == 'mp4' or $typefile == 'mp3' or $typefile == 'pdf' or $typefile == '3gp' or $typefile == '3gpp' or $typefile == 'avi' or $typefile == 'flv' or $typefile == 'meta' or $typefile == 'pptx' or $typefile == 'xls' or $typefile == 'wav' or $typefile == 'swf'){
    $direct = TS_ROOT.'/files/arc/he/';
    if($typefile == 'js' or $typefile == 'php' or $typefile == 'css' or $typefile == 'html'){ $aofkmawokm = 'txt'; }else{ $aofkmawokm = $typefile; }
    if(copy($sqlfile['tmp_name'], $direct.$prefigh.'.'.$aofkmawokm)){ 
        $namefileske = $prefigh;
    $url = $w->settings['url'].'/files/arc/he/'.$prefigh.'.'.$typefile;
    if($wuser->uid) $typeusip = $wuser->uid; else $typeusip = $w->getRealIP();
    $typefilesnwpq = $folder;
    $sd65f4as91a6se0wa3q = $filename;
    $sd5f4a6ds1sd56se3w32 = $ksjdokemw['u_size']+$sizefiless;
    mysql_query("INSERT INTO rft_uploads(
     up_name, up_vname, up_img, up_size, up_key, up_code, up_date, up_type, up_ftype, up_typesize, up_user, up_vsize) VALUES('".$code."', '".$sd65f4as91a6se0wa3q."', '1', '".$sizefile."', '".$key."', '".$namefileske."', '".$date."', '".$typefilesnwpq."', '".$typefile."', '".$typesizefile."', '".$typeusip."', '".$sizefiless."')");  
     $rsupfl['charAt'] = 1;
     /* url - name- tipo - size */
     return '1:'.$code.'-'.$sd65f4as91a6se0wa3q.'-'.$typefile.'-'.$sizefile.' '.$typesizefile.'-'.$url; 
     }else{ return '0: Ocurrio un error, intenta nuevamente.'; }
     }else{ return '0: El formato no es valido, Consulta nuestras politicas  ::  '.$typefile; }
     }else{ return '0: Esta acción es solo para usuarios registrados.'; }
    /* FIN funcion  upload(); */
	}
	
    
}