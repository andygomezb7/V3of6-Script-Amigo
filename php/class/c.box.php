<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/*
 * @name    c.comunidades.php
 * @author  Wortit Developers
 */
 
 class tsBox {
 	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsBox();
    	}
		return $instance;
	}
 
 function viewUmen(){
 $query = mysql_query("SELECT m.*, u.* FROM  mensaje AS m LEFT JOIN usuarios AS u ON m.de = u.usuario_id WHERE m.para='".$_SESSION['uid']."' AND m.de=u.usuario_id OR m.para=u.usuario_id AND m.de='".$_SESSION['uid']."'  GROUP BY u.usuario_id ORDER BY m.rom_id DESC");
 $querys = result_array($query);
 $querys['numero'] = mysql_num_rows($query);
 return $querys;
 }
 
 function SetMen(){
 if(!$_POST['textot'] or !$_SESSION['uid'] or !$_POST['par']){
 	 return '0: Hacen falta datos.';
 }else{
 $f = time();
 $u = $_SESSION['uid'];
 $paras = $_POST['par'];
 $text = $_POST['textot'];
 $ksjga = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$paras."'"));
 if($ksjga == 0 or $ksjga < 0){
 	return '0: El usuario no existe. (Escribe bien el nick de usuario)';
 }else{
 $ksjfwo = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$paras."'"));
 $para = $ksjfwo['usuario_id'];
 $act = mysql_query("INSERT INTO mensaje (para, de, leido, fecha, hace, texto) VALUES('".$para."', '".$u."', '0', '".$f."', '".$f."', '".$text."' )");
 return '1: Enviado Correctamente.';
 }
 }
 }

 function reromMen(){
 	global $w, $wuser;
 if($_POST['textot'] == '' or $_POST['p'] == ''){
 	 return '0: Hacen falta datos.';
 }else{
 $f = time();
 $u = $_SESSION['uid'];
 $paras = $w->setSecure($_POST['p']);
 $text = $w->setSecure($_POST['textot']);
 $s6e5f4 = $w->setSecure($_POST['app']);
 if($s6e5f4 && $s6e5f4 == 'id'){  $ksjfwo = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$paras."'")); $ksjga = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$paras."'")); }else{ $ksjga = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$paras."'"));  $ksjfwo = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$paras."'")); }
 if($ksjga <= 0){
 	return '0: El usuario no existe. (Escribe bien el nick de usuario)';
 }else{
 $para = $ksjfwo['usuario_id'];
 $act = mysql_query("INSERT INTO mensaje (para, de, leido, fecha, hace, texto) VALUES('".$para."', '".$u."', '0', '".$f."', '".$f."', '".$text."' )");
 return '1: <div id="msgg"><div class="floatL hedr"><span>'.$w->smileys($text).'</span><div class="size11 color_gray" style="margin: 2px 0 -5px 0;" title="'.$w->setHace(time()).'"><div>'.date('G').':'.date('i').' '.date('a').'</div></div></div><div class="floatR footr"><div><a><img src="'.$wuser->info['w_avatar'].'"></a></div></div></div>';
 }
 }
 }
 
 function loadUsMens($u){
 	global $w;
 $jp = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$u."'"));
 $i = $jp['usuario_id'];
 $query = mysql_query("SELECT m.*, u.* FROM mensaje AS m LEFT JOIN usuarios AS u ON m.de = u.usuario_id WHERE m.de='".$i."' AND m.para = '".$_SESSION['uid']."' OR m.para='".$i."' AND m.de='".$_SESSION['uid']."' ORDER BY rom_id DESC");
 $data = result_array($query);

$i = 0;
foreach ($data as $key) {
	$data[$i]['texto'] = $w->BBcode($key['texto']);
	$i++;
}

 return $data;
 }
 
 
 
 /***** FIN CLASS *****/
 }
 
?>