<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.user.php
 * @author  Wortit Developers
 */
class tsAvatar{

		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new tsAvatar();
    	}
		return $instance;
	}


	    /* Cambiar avatar actual por uno aleatorio  */
    function avt_aleat($sexo){
    global $w, $tsWall, $wuser;
    if($sexo == 0 or $sexo == '0'){
    $r = rand(1, 2);
    $number=rand(1,20);
    if($r == 1){ $name=$number.'.png'; }
    if($r == 2){ $name=$number.'.jpg'; }
    copy('../files/avatar/mont/'.$name.'','../files/avatar/'.$wuser->uid.'_120.png');
    }else{
    $number=rand(1,12);
    $name=$number.'.png';
    copy('../files/avatar/girl/'.$name.'','../files/avatar/'.$wuser->uid.'_120.png');
    }
    $avatarww = $w->settings['url'].'/files/avatar/'.$wuser->uid.'_120.png';
    mysql_query('UPDATE usuarios SET w_avatar=\''.$avatarww.'\' WHERE usuario_id = \''.$wuser->uid.'\'');
    mysql_query("INSERT INTO avatar_u(uidw, linkw, datew, avtu_type) VALUES('".$wuser->uid."', '".$avatarww."', '".time()."', '1')");
    $tsWall->addavtjkewb('', $avatarww, 1);
    return ''.$avatarww.'';
    }

        /***
    *
    *   UPLOAD VER AVATAR
    *
    ***/

    	function import_avatarupp($url){
    		global $w;
		$file = $url;
		$filename = $file['name'];
		$size = $file['size'];
		$direct = '../files/uploads/';
		$prefigh = substr(md5($pref),0, 23);
		$typefile = $this->obtTypeArch($filename);
		//if($size >= 2048){
			if($typefile == 'jpg' or $typefile == 'png' or $typefile == 'gif'){ 
             if(copy($file['tmp_name'], $direct.$prefigh.'.'.$typefile)){
              return '1:'.$w->settings['url'].'/files/uploads/'.$prefigh.'.'.$typefile;
             }else{ 
             	if(move_uploaded_file($file['tmp_name'], $direct.$prefigh.'.'.$typefile)){ return '1:'.$w->settings['url'].'/files/uploads/'.$prefigh.'.'.$typefile; }else{
             	return '0: Ocurrio un error al subir el archivo, intenta nuevamente.'; } }
			}else{ return '0: El tipo de imagen no es valida, Intenta con: Jpg, png o gif :: '.$typefile; }
		//}else{ return '0: La imagen deve ser igual o mayor a <b>2 KB</b>.'; }
	}

    /* GUARDAR AVATAR */
	function save_avatar(){
		global $w;
		$x1 = secure($_POST['thumb_x1']);
		$y1 = secure($_POST['thumb_y1']);
		$x2 = secure($_POST['thumb_x2']);
		$y2 = secure($_POST['thumb_y2']);
		$w = secure($_POST['thumb_w']);
		$h = secure($_POST['thumb_h']);
		$img_url = secure($_POST['img_url']);
		$data['img'] = getimagesize($img_url);
		$min_w = 120;
		$min_h = 120;
		$max_w = 2000;
		$max_h = 2000;
		if(empty($data['img'][0])) return '0: La imagen no existe o no es una imagen v&aacute;lida';
		elseif($data['img'][0] < $min_w || $data['img'][1] < $min_h) return '0: La imagen debe tener un tama&ntilde;o superior a 120x120 pixeles';
		elseif($data['img'][0] > $max_w || $data['img'][1] > $max_h) return '0: La imagen debe tener un tama&ntilde;o menor a 2000x2000 pixeles';
		include(TS_ROOT.'/class/images.class.php');
		$img = new img;
		$pref = substr(md5($pref),0, 15);
		$user->uid = $_SESSION['uid'];
		$web['url'] = $w->settings['url'];
		$img->upload($img_url, $user->uid.'_120', 120, 120, $x1, $y1, false, $w, $h, TS_ROOT.'/files/avatar/');
		$img->upload($web['url'].'/avatar/'.$user->uid.'_'.$pref.'_120.jpg', $user->uid.'_50', 50, 50, 0, 0, false, 120, 120, TS_ROOT.'/files/avatar/');
		$img->upload($web['url'].'/avatar/'.$user->uid.'_'.$pref.'_120.jpg', $user->uid.'_32', 32, 32, 0, 0, false, 120, 120, TS_ROOT.'/files/avatar/');
		$img->upload($web['url'].'/avatar/'.$user->uid.'_'.$pref.'_120.jpg', $user->uid.'_16', 16, 16, 0, 0, false, 120, 120, TS_ROOT.'/files/avatar/');
		$time = time();
		mysql_query('UPDATE usuarios SET w_avatar = \''.$time.'\' WHERE usuario_id = \''.$_SESSION['uid'].'\' LIMIT 1');
		return '1: '.$web['url'].'/files/avatar/'.$user->uid.'_'.$pref.'_120.jpg?'.$time;
	}

}
?>