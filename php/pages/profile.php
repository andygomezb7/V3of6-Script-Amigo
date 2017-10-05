<?php
/*
*
*    @name profile.php
*    Controlador de Perfiles
*
*/

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

    include "../../header.php";
	include ("../class/c.profile.php"); //INCLUIR EL CLASS PROFILE
	$wprofile =& wprofile::getInstance();
	
/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/
$idb = $w->setSecure($_GET['idb']);
$userget = $w->setSecure($_GET['user']);
$getuget = $w->setSecure($_GET['u']);
$actionwk = $w->setSecure($_GET['action']);

if($idb && $userget && $actionwk == 'post'){

$tsPage = "bwort";
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;
$sdgnaowuse = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$userget."'"));
$bwortdwal = $tsWall->loaderbwort($idb, $sdgnaowuse['usuario_id']);
$tsTitle = 'Bwort de '.$bwortdwal['usuario_nombre'];
$smarty->assign("bw",$bwortdwal);
$w->visitasAdd($idb, 4);

$smarty->assign("tsTitle", $tsTitle);
/// HOME; PERMISOS DE USUARIO
$seg = mysql_fetch_assoc(mysql_query("SELECT * FROM segurityw WHERE s_uid='".$bwortdwal['usuario_id']."'"));

if($seg['sp_bworts'] == 1){ $bmo = 1; }elseif($seg['sp_bwortsp'] == 2){ 
	if($_SESSION['uid'] == $bwortdwal['usuario_id']){ $bmo = 1; }else{
$sewokfnwe = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_emisor='".$_SESSION['uid']."' AND id_receptor='".$bwortdwal['usuario_id']."' "));
 if($sewokfnwe == 0 or $sewokfnwe < 0){ $bmo = 0; }else{ $bmo = 1; }
}
}else{}
if($seg['sp_bworts'] == 3){
	if($_SESSION['uid'] == $bwortdwal['usuario_id']){ $bmo = 1; }else{
	$sewokfnwee = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$_SESSION['uid']."' AND id_emisor='".$bwortdwal['usuario_id']."'"));
     if($sewokfnwee == 0 or $sewokfnwee < 0){ $bmo = 0; }else{ $bmo = 1; }
 }
}else{}

$smarty->assign("youtubeidv", $w->youtubeidob($bwortdwal['video']));

if($seg['sp_bworts'] == 1 && $bmo == 1){}else{}
if($seg['sp_bworts'] == 2 && $bmo == 0 && !$_SESSION['uid']){
//Aviso
$tsPage = "aviso";
	$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'Este usuario no comparte sus Bworts con usuarios que no interactuan con el.', 'but' => 'Interactuar con el', 'link' => "".$w->settings['direccion_url']."/".$sdgnaowuse['usuario_nombre'].""));
}else{}
if($seg['sp_bworts'] == 3 && $bmo == 0 && !$_SESSION['uid']){
//Aviso
$tsPage = "aviso";
	$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'Este usuario no comparte sus Bworts con usuarios con quienes no interactuan.', 'but' => 'Enviar un mensaje', 'link' => "".$w->settings['direccion_url']."/roombox/".$sdgnaowuse['usuario_nombre'].""));	
}else{}
/// END; PERMISOS DE USUARIO

/// HOME; EXISTE EL BWORT
if(!$bwortdwal['id'] or !$userget or !$sdgnaowuse['usuario_id']){
$tsPage = "aviso";
$tsTitle = "Error | El bwort no existe";
if(!$bwortdwal['id']){ $gw = '1'; }else{} if(!$userget){ $gww = '0'; }else{}
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'Este <b>Bwort</b> No existe. ('.$gw.' '.$gww.')', 'but' => 'Ir al buscador', 'link' => "".$w->settings['direccion_url']."/search/?q=&t=bworts"));
}else{}
/// END; ECISTE EL BWORT


/// HOME; INFORMACIÓN DEL BWORT
    	 include TS_CLASS.'modos/bwort.class.php';
         $tsBwort =& tsBwort::getInstance();
        $maxhe = 1;
        $paginasbwss = $w->setSecure($_GET['getpp']);
        if($paginasbwss){ $pginahe = ($paginasbwss - 1) * $maxhe; }else{ $pginahe = 0; }
        $filterssss = $w->setSecure($_GET['fil']);
        $getbioperf = $w->setSecure($_GET['pro']);
        $qubwrts = result_array(mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.id='".$idb."' AND b.est_b='0' GROUP BY b.id ORDER BY b.id DESC LIMIT 1"));
$g = 0; foreach($qubwrts as $r){
        $qubwrts[$g]['ocultar'] = mysql_num_rows(mysql_query("SELECT * FROM u_visto WHERE ue_type='4' AND ue_user='".$wuser->uid."' AND ue_obj='".$r['id']."'"));// ¿OCULTA?
        $qubwrts[$g]['images'] = result_array(mysql_query("SELECT im.*, up.* FROM bw_images AS im LEFT JOIN rft_uploads AS up ON im.bwi_loc = up.up_code WHERE im.bwi_content='".$r['id']."'"));
        $qubwrts[$g]['comments'] = result_array(mysql_query("SELECT b.*, u.* FROM b_comments AS b LEFT JOIN usuarios AS u ON b.bb_user = u.usuario_id WHERE bb_arch='".$r['id']."' AND bb_stat='0'"));       
        $qubwrts[$g]['novis'] = 1;
        $qubwrts[$g]['novistas'] = 0;
        // Imagen
        if($r['bw_type'] == 2){ 
        $ksdflknUmRdRgsr = mysql_num_rows(mysql_query("SELECT * FROM bw_images WHERE bwi_content='".$r['id']."'"));
        $qubwrts[$g]['cntnt'] = $r['bw_content']; $qubwrts[$g]['num']['images'] = $ksdflknUmRdRgsr; $qubwrts[$g]['typei'] = 1; }
        // Video
        if($r['bw_type'] == 3){ $qubwrts[$g]['cntnt'] = $s54asd6f8q6w5e = $w->youtubeidob($r['bw_content']); $qubwrts[$g]['typei'] = 1; $qubwrts[$g]['metatags'] = @get_meta_tags('http://www.youtube.com/watch?v='.$qubwrts[$g]['cntnt']); }
        // Nota agregada
        if($r['bw_type'] == 4){ $qubwrts[$g]['nota'] = mysql_fetch_assoc(mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.id='".$r['bw_content']."'")); $qubwrts[$g]['cntnt'] = $r['bw_content']; $qubwrts[$g]['typei'] = 1; }
        // Link
        if($r['bw_type'] == 5){ 
        $data = @get_meta_tags($r['bw_content']);
        $str = file_get_contents($r['bw_content']); if(strlen($str)>0){ preg_match("@<title>(.*)</title>@",$str,$title); $ttrtitle = $title[1]; }else{ if($data['wtitle']){ $ttrtitle = $data['wtitle']; }else{ $ttrtitle = $data['title']; } }
        $iMgDlArMWEb = $wuser->getPimg($str);
        preg_match('@<meta property="og:image" content="(.*)">@',$str,$imgonone); $sdfk549wiMdf = $imgonone[1];
        if($data['wdescription']){ $ttrdescription = $data['wdescription']; }elseif($data['og:description']){ $ttrdescription = $data['og:description']; }else{ $ttrdescription = $data['description']; }
        if($data['image']){ $ksdml = $data['image']; }elseif($data['og:image']){ $ksdml = $data['og:image']; }elseif($iMgDlArMWEb){ $ksdml = $iMgDlArMWEb; }elseif($sdfk549wiMdf){ $ksdml = $sdfk549wiMdf; }else{ $ksdml = $w->settings['url'].'/images/avatar/group2.png'; }
        $data['img'] = $ksdml; $data['title'] = $ttrtitle; $data['desc'] = $ttrdescription; $data['url'] = $r['bw_content'];
        $qubwrts[$g]['cntnt'] = $data; $qubwrts[$g]['typei'] = 1; 
        }
        // Extras
        if($r['bw_xtras'] == 1){ $qubwrts[$g]['a'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$r['bw_xcontent']."'")); }
        if($r['bw_xtras'] == 2){ $qubwrts[$g]['g'] = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$r['bw_xcontent']."'")); } 
        // likes and dislikes
        $qubwrts[$g]['ulike'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$r['id']."' AND idusuario='".$wuser->uid."' "));
        $qubwrts[$g]['udislike'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$r['id']."' AND idusuario='".$wuser->uid."'"));
        // Totals
        $qubwrts[$g]['tcomments'] = mysql_num_rows(mysql_query("SELECT * FROM b_comments WHERE bb_arch='".$r['id']."'"));
        $qubwrts[$g]['tlikes'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$r['id']."' "));
        $qubwrts[$g]['tdislikes'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$r['id']."'")); 
        $qubwrts[$g]['texto'] = $tsBwort->setHashtag($tsBwort->setMenciones($tsBwort->toLink($tsBwort->anti_xss($tsBwort->special_codes(nl2br(htmlentities($r['text'], ENT_NOQUOTES)))))));
        }
        // end; if: bwort-add
        $smarty->assign('bload', $qubwrts);
/// END; INFORMACIÓN DEL BWORT

//Meta Description
$descBodyP = $w->wrecorte($bwortdwal['text'], 120);
$tsBodyp =  $descBodyP." | Bwort publicado en ".$w->settings['name'].'.net';
//Meta Tags
$metatagssqwortit = str_replace(' ', ',', $bwortdwal['text']);
$tsBodytags = $metatagssqwortit.','.$w->settings['name'].", notas, foro, temas";
//Meta Imagen
$tsBodyi = ($bwortdwal['w_avatar']) ? $bwortdwal['w_avatar'] : $w->settings['url'].'/images/avatar/group2.png';

$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);

}else{

$tsPage = "profile";
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

	/*
*-----------------------------------------------------------------------
*     VARIABLES DE ACCESO AL ARCHIVO
*-----------------------------------------------------------------------
*/
	//Definimos Variables


if(!$userget) $username = $w->setSecure($_SESSION['uid']);
else		$username = $w->setSecure($userget);
	$usuario = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$w->setSecure($username)."'"));
	
		$tsInfo['uid'] = $usuario['usuario_id'];
        $tsInfo['nick'] = $usuario['usuario_nombre'];
        $tsInfo['nombre'] = $usuario['name_original'].''.$usuario['ap_original'];
        $w->visitasAdd($usuario['usuario_id'], 1);
        $smarty->assign('pubprofile', 'sipublico:B');

/*
*-----------------------------------------------------------------------
*          VARIABLES PRINCIPALES
*-----------------------------------------------------------------------
*/

$tsInfo = $wprofile->loadHeadInfo($usuario['usuario_nombre']);	
$inter = $wprofile->interacciones($usuario['usuario_id']);
$inter['total'] = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$usuario['usuario_id']."'"));
$inter['yoaellos'] = result_array(mysql_query('SELECT c.*, s.* FROM usuarios AS c LEFT JOIN suscriptores AS s ON c.usuario_id = s.id_receptor WHERE s.id_emisor=\''.$usuario['usuario_id'].'\' LIMIT 15'));
$inter['forosm'] = result_array(mysql_query("SELECT * FROM c_comunidades WHERE c_autor='".$usuario['usuario_nombre']."'"));
$wall = $wprofile->loadWall($usuario['usuario_id'], '5');
$content['temas'] = mysql_num_rows(mysql_query('SELECT c.*, f.*, cc.*, u.* FROM c_temas AS c LEFT JOIN c_comunidades AS f ON c.t_comunidad = f.c_id LEFT JOIN c_categorias AS cc ON f.c_categoria = cc.cid LEFT JOIN usuarios AS u ON c.t_autor = u.usuario_id WHERE t_autor=\''.$usuario['usuario_id'].'\' ORDER BY t_fecha DESC LIMIT 15'));
$content['notas'] = mysql_num_rows(mysql_query("SELECT p.*, c.* FROM noticia AS p LEFT JOIN categorias AS c ON p.categoria = c.id_categoria LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id WHERE p.id_usuario='".$usuario['usuario_id']."'"));
$tsTitle = $usuario['usuario_nombre'].' En '.$w->settings['name'];

if($actionwk == 'post'){}else{
if($usuario['descripcion']){
$tsBodyp = $usuario['descripcion'];
}else{ $tsBodyp = $w->settings['name']." | ".$w->settings['lema']." - Crea una cuenta en ".$w->settings['name'].' y disfruta de nuestras secciones y utilidades y ademas de poder participar en concursos exclusivos.'; }
}
if($usuario['w_avatar']){
$tsBodyi = $usuario['w_avatar'];
}else{ $tsBodyi = $w->settings['direccion_url'].'/images/avatar/group2.png'; }
$tsUrl = $w->settings['direccion_url'].'/'.$usuario['usuario_nombre'].'/';

$quwerypsy = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_receptor='".$usuario['usuario_id']."' AND id_emisor='".$_SESSION['uid']."'"));
$quwerypsydos = mysql_num_rows(mysql_query("SELECT * FROM suscriptores WHERE id_emisor='".$usuario['usuario_id']."' AND id_receptor='".$_SESSION['uid']."'"));

if($tsInfo['s']['sp_bworts'] == 1 && $_SESSION['uid']){ 
	$bmo = 1; 
}elseif($tsInfo['s']['sp_bworts'] == 2 && $quwerypsy == 1 or $quwerypsy > 1 && $_SESSION['uid']){ 
	$bmo = 1; 
}elseif($tsInfo['s']['sp_bworts'] == 3 && $quwerypsydos == 1 or $quwerypsydos > 1 && $_SESSION['uid']){ 
	$bmo = 1;
}else{ 
	$bmo = 0;
 }

 if($tsInfo['s']['sp_publicpp'] == 1 or $usuario['usuario_id'] == $_SESSION['uid']){ 
	$bmod = 1; 
}elseif($tsInfo['s']['sp_publicpp'] == 2 && $quwerypsy == 1 or $quwerypsy > 1 or $usuario['usuario_id'] == $_SESSION['uid']){ 
	$bmod = 1; 
}elseif($tsInfo['s']['sp_publicpp'] == 3 && $quwerypsydos == 1 or $quwerypsydos > 1 or $usuario['usuario_id'] == $_SESSION['uid']){ 
	$bmod = 1;
}else{ 
	$bmod = 0;
 }




if(!$usuario['usuario_nombre']){
if($w->pages[$userget]){
header('location: '.$w->settings['url'].'/'.$w->pages[$userget].'');
}else{
$tsPage = "aviso";
$tsTitle = "Error | ".$w->settings['name'];
$smarty->assign("tsAviso",array('titulo' => 'Lo sentimos.', 'mensaje' => 'La pagina No existe.<br><br> Estas buscando a el usuario <b>'.$userget.'</b>?', 'but' => 'Buscar otras opciones', 'link' => "".$w->settings['direccion_url']."/search/?q=".$userget."&t=users"));
}
}

	if($w->onlineh($usuario['usuario_id']) == true){ $online = 1; }else{ $online = 0;}

	if(date('d', $usuario['active_ult']) == date('d') && date('M', $usuario['active_ult']) == date('M') && date('Y', $usuario['active_ult']) == date('Y')){
				$las_active = 'Hoy, A las '.date('g:s A', $usuario['active_ult']);
			}else{
				if(date('Y') != date('Y', $usuario['active_ult'])) $complement = ' de '.date('Y', $usuario['active_ult']);
				$las_active = date('d', $usuario['active_ult']).' de '.$time_data['meces'][date('M', $usuario['active_ult'])].$complement.' a las '.date('g:s A', $usuario['active_ult']);
			}
		$last_medals = result_array(mysql_query("SELECT a.*, m.* FROM admin_medals_assign AS a LEFT JOIN admin_medals AS m ON a.m_id = m.m_id WHERE a.ma_user='".$usuario['usuario_id']."'"));	

     $smarty->assign("tsTitle",$tsTitle);
      $smarty->assign("tsInfo",$tsInfo);
	  $smarty->assign("tsWall",$wall);
      $smarty->assign("tsInter",$inter);
	  $smarty->assign("inter",$inter['total']);
	  $smarty->assign("suscripdos", $quwerypsydos);
	  $smarty->assign("suscrip", $quwerypsy);
	  $smarty->assign("tsBodyp", $tsBodyp);
	  $smarty->assign("tsUserID", $usuario['usuario_id']);
	  $smarty->assign("tsBodyi", $tsBodyi);
	  $smarty->assign("tsUrl", $tsUrl);
	  $smarty->assign("online", $online);
	  $smarty->assign("las_active", $las_active);
	  $smarty->assign("last_medals", $last_medals);
	  $smarty->assign("content", $content);
	  $smarty->assign("interactuan", $bmo);
	  $smarty->assign("publicar", $bmod);
	  $smarty->assign("a", $w->setSecure($_GET['a']));
	  }
/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>