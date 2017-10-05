<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.uplwad.php
 * @author  Wortit Developers
 */

class uplwad{
    var $type = 1;  // TIPO DE SUBIDA
    var $max_size = 1048576;    // 1MB 
    var $allow_types = array('png','gif','jpeg'); // ARCHIVOS PERMITIDOS
    var $found = 0; // VARIABLE BANDERA 
    var $file_url = ''; // URL
    var $file_size = array(); // TAMAÑO DEL ARCHIVO REMOTO
    var $image_size = array('w' => 570, 'h' => 450);
    var $image_scale = false;
    var $servers = array();
    var $server = 'imgur';  // DEFAULT IMGUR

		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new uplwad();
    	}
		return $instance;
	}

     // CONSTRUCTOR
	public function __construct(){
	   $this->servers = array(
            'imgur' => 'http://api.imgur.com/2/upload.json?key=24bf6070f45ed716e8cf9324baebddbd',
            'imgshack' => 'http://post.imageshack.us/transload.php',
       );
	}
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*\
								UPLOAD
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
	/*
		newUpload($type)
        :: $type => URL o ARCHIVO
	*/
    function newUpload($type = 1){
        $this->type = $type;
        // ARCHIVOS
        if($this->type == 1){
            foreach($_FILES as $file)
                $fReturn[] = $this->uploadFile($file);
        // DESDE URL
        }elseif($this->type == 2) {
               $fReturn[] = $this->uploadUrl();
        // CROP
        } elseif($this->type == 3){
            if(empty($this->file_url)) {
                foreach($_FILES as $file)
                    $fReturn = $this->uploadFile($file);
                    if(empty($fReturn['msg'])) return array('error' => $fReturn[1]);
            } else {
                $file = array(
                    'name' => substr($this->file_url, -4),
                    'type' => 'image/url',
                    'tmp_name' => $this->file_url,
                    'error' => 0,
                    'size' => 0
                );
                //
                $fReturn = $this->uploadFile($file, 'url');
                if(empty($fReturn['msg'])) return array('error' => $fReturn[1]);
            }
        }
        //
        if($this->found == 0) return array('error' => 'No se ha seleccionado archivo alguno.');
        else return $fReturn;
	}
	/*
        uploadFiles()
    */
    function uploadFile($file, $type = 'file'){
        // VALIDAR
        $error = $this->validFile($file, $type);
        if(!$error){
            return array(0, $error);
        }else{
            $type = explode('/',$file['type']);
            $ext = ($type[1] == 'jpeg' || $type[1] == 'url') ? 'jpg' : $type[1]; // EXTENCION
            $key = rand(0,1000);
            $newName = 'phpost_'.$key.'.'.$ext;
            // IMAGEN
            if($this->type == 1)
                return array(1, $this->sendFile($file,$newName), $type[1]);
            // CROP
            else
                return array('msg' => $this->createImage($file,$newName), 'error' => '', 'key' => $key, 'ext' => $ext);
            //
        }
    }
    /*
        uploadUrl()
    */
    function uploadUrl(){
        $error = $this->validFile(null, 'url');
        if(!empty($error)) return array(0, $error);
        else return array(1, urldecode($this->file_url));
    }
    /*
        validFile()
    */
    function validFile($file, $type = 'file'){
        // ARCHIVO
        if($type == 'file'){
            // SE ENCONTRO EL ARCHIVO 
            if(empty($file['name'])) return 'No Found';
            else $this->found = $this->found + 1;
            //
            $type = explode('/',$file['type']);
            if($file['size'] > $this->max_size) return '#'.$this->found.' pesa mas de 1 MB.';
            elseif(!in_array($type[1], $this->allow_types)) return '#'.$this->found.' no es una imagen.';
        } elseif($type == 'url'){
            $this->file_size = getimagesize($this->file_url);
            // TAMAÑO MINIMO
            $min_w = 160;
            $min_h = 120;
            // MAX PARA EVITAR CARGA LENTA
            $max_w = 1024;
            $max_h = 1024;
            $this->found = 1;
            //
            if(empty($this->file_size[0])) return 'La url ingresada no existe o no es una imagen v&aacute;lida.';
            elseif($this->file_size[0] < $min_w || $this->file_size[1] < $min_h) return 'Tu foto debe tener un tama&ntilde;o superior a 160x120 pixeles.';
            elseif($this->file_size[0] > $max_w || $this->file_size[1] > $max_h) return 'Tu foto debe tener un tama&ntilde;o menor a 1024x1024 pixeles.';
        }
        // TODO BIEN
        return false;
    }
    /*
      sendFile($file,$name)
    */
    function sendFile($file, $name){
        //
        $url = $this->createImage($file,$name);
        // SUBIMOS...
        $new_img = $this->getImagenUrl($this->uploadImagen($this->setParams($url)));
        // BORRAR
        $this->deleteFile($name);
        // REGRESAMOS
        return $new_img;
    }
    /*
        copyFile($file, $name)
    */
    function copyFile($file,$name){
        global $w;
        // COPIAMOS
        $root = TS_ROOT.'/files/uploads/'.$name;
        copy($file['tmp_name'],$root);
        // REGRESAMOS LA URL
        return $w->settings['direccion_url'].'/files/uploads/'.$name;
    }
    /*
        createImage()
    */
	function createImage($file, $name){
        global $w;
        // TAMAÑO
        $size = empty($this->file_size) ? getimagesize($file['tmp_name']) : $this->file_size;
        if(empty($size)) die('0: Intentando subir un archivo que no es válido.');
        $width = $size[0];
        $height = $size[1];
        // ESCALAR SOLO SI LA IMAGEN EXEDE EL TAMAÑO Y SE DEBE ESCALAR
        if($this->image_scale == true && ($width > $this->image_size['w'] || $height > $this->image_size['h'])){
                // OBTENEMOS ESCALA
                if($width > $height){
                    $_height = ($height * $this->image_size['w']) / $width;
                    $_width = $this->image_size['w'];
                } else {
                    $_width = ($width * $this->image_size['h']) / $height;
                    $_height = $this->image_size['h'];
                }
            	// TIPO
        		switch($file['type']){
                    case 'image/url':
                        $img = imagecreatefromstring($w->getUrlContent($file['tmp_name']));
                    break;
        			case 'image/jpeg':
        			case 'image/jpg':
        				$img = imagecreatefromjpeg($file['tmp_name']);
        				break;
        			case 'image/gif':
        				$img = imagecreatefromgif($file['tmp_name']);
        				break;
        			case 'image/png':
        				$img = imagecreatefrompng($file['tmp_name']);
        				break;
        		}
                // ESCALAMOS NUEVA IMAGEN
        		$newimg = imagecreatetruecolor($_width, $_height); 
        		imagecopyresampled($newimg, $img, 0, 0, 0, 0, $_width, $_height, $width, $height);
    			// COPIAMOS
                $root = TS_ROOT.'/files/uploads/'.$name;
                //
    			imagejpeg($newimg,$root,100);
    			imagedestroy($newimg);
    			imagedestroy($img);
                // RETORNAMOS
                return $w->settings['direccion_url'].'/files/uploads/'.$name;
        } else {
            // MANTENEMOS LAS DIMENCIONES Y SOLO COPIAMOS LA IMAGEN
            return $this->copyFile($file, $name);
        }
	}
    /**
     * @name cropAvatar()
     * @uses Creamos el avatar a partir de las coordenadas resibidas
     * @access public
     * @param int
     * @return array
    */
    public function cropAvatar($key){
        $source = TS_ROOT.'/files/uploads/phpost_'.$_POST['key'].'.'.$_POST['ext'];
        $size = getimagesize($source);
        // COORDENADAS
        $x = $_POST['x'];
        $y = $_POST['y'];
        $w = $_POST['w'];
        $h = $_POST['h'];
        // TAMAÑOS
        $_w = $_h = 120;
        $_tw = $_th = 50;
    	// CREAMOS LA IMAGEN DEPENDIENDO EL TIPO
		switch($size['mime']){
			case 'image/jpeg':
			case 'image/jpg':
				$img = imagecreatefromjpeg($source);
				break;
			case 'image/gif':
				$img = imagecreatefromgif($source);
				break;
			case 'image/png':
				$img = imagecreatefrompng($source);
				break;
		}
        if(!$img) return array('error' => 'No pudimos crear tu avatar...');
        //
        $width = imagesx($img);
        $height = imagesy($img);
        // AVATAR
        $avatar = imagecreatetruecolor($_w, $_h);
        imagecopyresampled($avatar, $img, 0, 0, $x, $y, $_w, $_h, $w, $h);
        // AVATAR THUMB
        $thumb = imagecreatetruecolor($_tw, $_th);
        imagecopyresampled($thumb, $img, 0, 0, $x, $y, $_tw, $_th, $w, $h);
        // GUARDAMOS...
        $root = TS_FILES.'avatar/'.$key.'_';
        imagejpeg($avatar,$root.'120.jpg',90);
        imagejpeg($thumb,$root.'50.jpg',90);
        // CLEAR
    	imagedestroy($img);
    	imagedestroy($avatar);
    	imagedestroy($thumb);
        // BORRAMOS LA ORIGINAL
        unlink($source);
        //
        return array('error' => 'success');
    }
    /*
        deleteFile()
    */
    function deleteFile($file){
        $root = TS_ROOT.'/files/uploads/'.$file;
        unlink($root);
        return true;
    }
    /*
        uploadImagen()
    */
    function uploadImagen($params){
    	// User agent
    	$useragent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.9) Gecko/2008052906 Firefox/3.0";
        // SERVIDOR
        $servidor = $this->servers[$this->server];
    	//Abrir conexion  
    	$ch = curl_init();  
    	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    	curl_setopt($ch,CURLOPT_URL,$servidor);
    	curl_setopt($ch,CURLOPT_POST,1);
    	curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
    	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        // ESTO ES PARA IMAGESHACK NO TODOS LOS SERVIDORES LO SOPORTAN
        if($this->server == 'imgshack')
            curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        // RESULTADO
    	$result = curl_exec($ch);
    	curl_close($ch);
    	return $result;
    }
    /*
        setParams()
    */
    function setParams($url){
        switch($this->server){
            case 'imgur':
                return 'image='.$url;
            break;
            case 'imgshack':
                return 'MAX_FILE_SIZE=13145728&refer=http://imageshack.us/&brand=&optimage=resample&url='.$url;
            break;
        }
    }
    /**
     * @name getImagenUrl($html)
     * @access public
     * @param string
     * @return string
     * @version 1.1
    */
    public function getImagenUrl($code){
        //
        switch($this->server){
            case 'imgur':
                global $w;
                //
                $image_data = $w->setJSON($code, 'decode');
                $src = $image_data->upload->links->original;
                return str_replace('//','//i.',$src); // PARA EVITAR REDIRECCIONES
            break;
            // IMAGESHACK
            case 'imgshack':
                $links = explode('Please <',$code);
                $links = explode('" />',$links[1]);
                $link = explode('"',$links[0]);
                $total = count($link);
                return $link[$total-1];
            break;
        }
    }
      
      function import_avatar($url){
        global $w;
        $img_url = $w->setSecure($url);
        $type = substr($url,-3);        
        $i = time();
        $avatarwww = '../files/avatar/'.$_SESSION['uid'].'_'.$i.'.'.$type;
        copy($img_url, $avatarwww);
        $avatarww = $w->settings['url'].'/files/avatar/'.$_SESSION['uid'].'_'.$i.'.'.$type;
      mysql_query('UPDATE usuarios SET w_avatar=\''.$avatarww.'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
          mysql_query("INSERT INTO avatar_u(uidw, linkw, datew, avtu_type) VALUES('".$_SESSION['uid']."', '".$avatarww."', '".time()."', '1')");
      return '1: '.$avatarww;
    }

    function uploadww_avatar($url){
        global $w;
        $img_url = $w->setSecure($url);
        $type = $img_url['type'];        
        $i = time();
        $avatarwww = '../files/avatar/'.$_SESSION['uid'].'_'.$i.'.'.$type;
        $avatarww = $w->settings['url'].'/files/avatar/'.$_SESSION['uid'].'_'.$i.'.'.$type;

$allowed = array('png', 'jpg', 'gif','zip');
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
if(!in_array(strtolower($extension), $allowed)){ return '0: No se pudo subir la imagen'; }
if(move_uploaded_file($_FILES['upl']['tmp_name'], $avatarwww)){ return '1: '.$avatarww; 
mysql_query('UPDATE usuarios SET w_avatar=\''.$avatarww.'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
}
}

    }

    function save_avatar(){
        global $w;
        $web = $w->settings;
        $x1 = $w->setSecure($_POST['thumb_x1']);
        $y1 = $w->setSecure($_POST['thumb_y1']);
        $x2 = $w->setSecure($_POST['thumb_x2']);
        $y2 = $w->setSecure($_POST['thumb_y2']);
        $w = $w->setSecure($_POST['thumb_w']);
        $h = $_POST['thumb_h'];
        $img_url = $_POST['img_url'];
        $data['img'] = getimagesize($img_url);
        $min_w = 120;
        $min_h = 120;
        $max_w = 2000;
        $max_h = 2000;
        //[0]
        if(!$data['img'][0]) return '0: La imagen no existe o no es una imagen v&aacute;lida'.$data['img'][0].' + '.$data['img'];
        elseif($data['img'][0] < $min_w || $data['img'][1] < $min_h) return '0: La imagen debe tener un tama&ntilde;o superior a 120x120 pixeles';
        elseif($data['img'][0] > $max_w || $data['img'][1] > $max_h) return '0: La imagen debe tener un tama&ntilde;o menor a 2000x2000 pixeles';
        $img = $this;
        $img->upload($web['url'].'/avatar/'.$_SESSION['uid'].'_120.jpg', $_SESSION['uid'].'_50', 50, 50, 0, 0, false, 120, 120, '/avatar/');
        $img->upload($web['url'].'/avatar/'.$_SESSION['uid'].'_120.jpg', $_SESSION['uid'].'_32', 32, 32, 0, 0, false, 120, 120, '/avatar/');
        $img->upload($web['url'].'/avatar/'.$_SESSION['uid'].'_120.jpg', $_SESSION['uid'].'_16', 16, 16, 0, 0, false, 120, 120, '/avatar/');
        $time = time();
        $avaasubir = $web['url'].'/avatar/'.$_SESSION['uid'].'_120.jpg';
        mysql_query('UPDATE usuarios SET w_avatar = \''.$avaasubir.'\' WHERE usuario_id = \''.$_SESSION['uid'].'\' LIMIT 1');
        return '1: '.$web['url'].'/avatar/'.$_SESSION['uid'].'_120.jpg?'.$time;
    }

    function upload($file, $name, $width, $height, $start_width, $start_height, $type, $qwidth, $qheight, $directory = '/thumbs/'){
        $tipo = substr(strtolower($file),-3);
        switch($tipo){
            case 'pjpeg':
            case 'jpeg':
            case 'jpg':
                $original = imagecreatefromjpeg($file);
            break;
            case 'gif':
                $original = imagecreatefromgif($file);
            break;
            case 'png':
            case 'x-png':
                $original = imagecreatefrompng($file);
            break;
        }
        $widthz = imagesx($original);
        $heightz = imagesy($original);
        $qwidth = empty($qwidth) ? $width : $qwidth;
        $qheight = empty($qheight) ? $height : $qheight;
        $ratio_w = 1; 
        $ratio_h = 1;
        $nw = ceil($width * $ratio_w);
        $nh = ceil($height * $ratio_h);
        $thumb = imagecreatetruecolor($nw,$nh);
        imagefilledrectangle($thumb, 0, 0, $widthz, $heightz, imagecolorallocate($thumb, 255, 255, 255));
        if($type){
            $width = imagesx($original);
            $height = imagesy($original);
            if($width > $height){
                $result_w = $height;
                $start_width = ceil(($width - $height) * '0.5');
                $start_height = 0;
            }else{
                $result_w = $width;
                $start_height = ceil(($height - $width) * '0.5');
                $start_width = 0;
            }
            imagecopyresampled($thumb,$original,0,0,$start_width,$start_height,$nw,$nh,$result_w,$result_w);
        }else imagecopyresampled($thumb,$original,0,0,$start_width,$start_height,$nw,$nh,$qwidth,$qheight);
        header("Content-type: image/jpg");
        imagejpeg($thumb,'.'.$directory.$name.'.jpg',90);
        fopen($name ,TS_ROOT.'/files');
        ImageDestroy($thumb);
    }
	
/**** FIN CLASS *****/
}
?>