<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.bwort.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
        'bwort-compmenct' => array('n' => 2, 'p' => 'compmenct'),
        'bwort-openyotu' => array('n' => 2, 'p' => 'openyotu'),
		'bwort-del' => array('n' => 2, 'p' => ''),
        'bwort-commbidi' => array('n' => 2, 'p' => ''),
        'bwort-news' => array('n' => 2, 'p' => ''),
        'bwort-add' => array('n' => 2, 'p' => 'load'),
        'bwort-live' =>array('n' => 2, 'p' => ''),
        'bwort-obj' =>array('n' => 2, 'p' => ''),
        'bwort-import' => array('n' => 2, 'p' => ''),
        'bwort-load' => array('n' => 2,'p' => 'load'),
        'bwort-nevs' => array('n' => 2,'p' => 'load'),
        'bwort-i' => array('n' => 2, 'p' => ''),
        'bwort-ocultar' => array('n' => 2, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/bworts/'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

	if($files[$action]['p']){
    include '../libs/smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/**********************************\

*	(INSTRUCCIONES DE CODIGO)		*

\*********************************/
	
	// DEPENDE EL NIVEL
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
	$id = $_POST['id'];

	// CODIGO
	switch($action){
        case 'bwort-openyotu':
		$t = $w->setSecure($_POST['type']);
		$ides = $w->setSecure($_POST['idb']);
		$v = $w->setSecure($_POST['voto']);
		
		if($v == 'pos'){
		
		if($t == 'true'){
		echo $tsWall->like_bwort($ides, 'true');
		}elseif($t == 'false'){
		echo $tsWall->like_bwort($ides, 'false');
		}else{ echo '0: No has seleccionado ninguna accion...'; }
		
		}elseif($v == 'neg'){
		
	    if($t == 'true'){
		echo $tsWall->nolike($ides, 'true');
		}elseif($t == 'false'){
		echo $tsWall->nolike($ides, 'false');
		}else{ echo '0: No has seleccionado ninguna accion...'; }
		
		}else{
		echo '0: No has seleccionado ninguna accion.';
		}
		break;
		case 'bwort-compmenct':
			$msg = $_POST['msg'];
		$tsWall->compBwort($id, $msg);
		break;
		case 'bwort-del':
        $sskmgetBID = $w->setSecure($_POST['bid']);
		echo $tsWall->delBwort($sskmgetBID);
		break;
		case 'bwort-commbidi':
		$typebidi = 0;
		$bidibidi = $w->setSecure($_POST['bid']);
		$textbidi = $w->setSecure($_POST['text']);
	    echo $tsWall->comment($bidibidi, $typebidi, $textbidi);
		break;
		case 'bwort-news':
        echo $tsWall->likNew($_POST['not'], $_POST['type']);
		break;
		case 'bwort-add':
        $dataRes = $tsWall->addBwort();
        $dataResOf = explode(':', $dataRes);
        $dataRo = $dataResOf[0];
        if($dataRo == 0){ echo $dataRes; }else{
        // HOME; BWORT-ADD
        include '../class/modos/bwort.class.php';
        $tsBwort =& tsBwort::getInstance();
        $maxhe = 1;
        $paginasbwss = $w->setSecure($_GET['getpp']);
        if($paginasbwss){ $pginahe = ($paginasbwss - 1) * $maxhe; }else{ $pginahe = 0; }
        $filterssss = $w->setSecure($_GET['fil']);
        $getbioperf = $w->setSecure($_GET['pro']);
        $qubwrts = result_array(mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.id='".$dataResOf[1]."' AND b.est_b='0' GROUP BY b.id ORDER BY b.id DESC LIMIT 1"));
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
        $smarty->assign('blobloadForeach', 'forforach');
        $smarty->assign('bload', $qubwrts);
        }
        // END; BWORT-ADD
		break;
		case 'bwort-live':
        echo json_encode(array('worts' => $tsWall->Wallhome(),));
		break;
		case 'bwort-obj':
        echo $tsWall->WallBwort();
		break;
		case 'bwort-import':
        // type
		// url
		$sdfljkna = $w->setSecure($_POST['urli']);
		$ksfkl = $w->setSecure($_POST['typei']);
        echo $wuser->import(false, $sdfljkna, $ksfkl);
		break;
		case 'bwort-load':
        include '../class/modos/bwort.class.php';
        $tsBwort =& tsBwort::getInstance();
        $maxhe = 21;
        $paginasbwss = $w->setSecure($_GET['getpp']);
        if($paginasbwss){ $pginahe = ($paginasbwss - 1) * $maxhe; }else{ $pginahe = 0; }
        $filterssss = $w->setSecure($_GET['fil']);
        $getbioperf = $w->setSecure($_GET['pro']);
        if($filterssss == 2){
        $qubwrts = result_array(mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE bw_xtras='1' AND bw_xcontent='".$getbioperf."' OR b.idusuario='".$getbioperf."' AND b.est_b='0' GROUP BY b.id ORDER BY b.id DESC LIMIT ".$pginahe.",".$maxhe));
        }elseif($filterssss == 3){
        $qubwrts = result_array(mysql_query("SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE bw_xtras='2' AND bw_xcontent='".$getbioperf."' AND b.est_b='0' GROUP BY b.id ORDER BY b.id DESC LIMIT ".$pginahe.",".$maxhe));
        }else{
		$qubwrts = result_array(mysql_query("SELECT b.*, s.*, u.* FROM bworts AS b LEFT JOIN suscriptores AS s ON b.idusuario = s.id_receptor LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE s.id_emisor='".$wuser->uid."' OR b.idusuario='".$wuser->uid."' AND b.est_b='0' ".$filters." GROUP BY b.id ORDER BY b.id DESC LIMIT ".$pginahe.",".$maxhe));
        }
        $g = 0; foreach($qubwrts as $r){
        $w->visto_1($r['id'], 1);
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
        $g++;
        }
        $smarty->assign('bload', $qubwrts);
		break;
		case 'bwort-nevs':
        include '../class/modos/bwort.class.php';
        $tsBwort =& tsBwort::getInstance();
        echo '1:';
        $qubwrts = result_array(mysql_query("SELECT b.*, s.*, u.* FROM bworts AS b LEFT JOIN suscriptores AS s ON b.idusuario = s.id_receptor LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE s.id_emisor='".$wuser->uid."' OR b.idusuario='".$wuser->uid."' AND b.est_b='0' GROUP BY b.id ORDER BY b.id DESC"));
        $g = 0; foreach($qubwrts as $r){
        $w->visto_1($r['id'], 1);
        $qubwrts[$g]['ocultar'] = mysql_num_rows(mysql_query("SELECT * FROM u_visto WHERE ue_type='4' AND ue_user='".$wuser->uid."' AND ue_obj='".$r['id']."'"));// ¿OCULTA?
        $qubwrts[$g]['images'] = result_array(mysql_query("SELECT im.*, up.* FROM bw_images AS im LEFT JOIN rft_uploads AS up ON im.bwi_loc = up.up_code WHERE im.bwi_content='".$r['id']."'"));
        $qubwrts[$g]['comments'] = result_array(mysql_query("SELECT b.*, u.* FROM b_comments AS b LEFT JOIN usuarios AS u ON b.bb_user = u.usuario_id WHERE bb_arch='".$r['id']."' AND bb_stat='0'"));       
        $qubwrts[$g]['novis'] = 1;
        $qubwrts[$g]['novistas'] = mysql_num_rows(mysql_query("SELECT * FROM u_visto WHERE ue_type='1' AND ue_obj='".$r['id']."'"));
        // Imagen
        if($r['bw_type'] == 1){ 
        $ksdflknUmRdRgsr = mysql_num_rows(mysql_query("SELECT * FROM bw_images WHERE bwi_content='".$r['id']."'"));
        $qubwrts[$g]['cntnt'] = $r['bw_content']; $qubwrts[$g]['num']['images'] = $ksdflknUmRdRgsr; $qubwrts[$g]['typei'] = 1; }
        // Video
        if($r['bw_type'] == 2){ $qubwrts[$g]['cntnt'] = $s54asd6f8q6w5e = $w->youtubeidob($r['bw_content']); $qubwrts[$g]['typei'] = 1; $qubwrts[$g]['metatags'] = @get_meta_tags('http://www.youtube.com/watch?v='.$qubwrts[$g]['cntnt']); }
        // Nota agregada
        if($r['bw_type'] == 3){ $qubwrts[$g]['nota'] = mysql_fetch_assoc(mysql_query("SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE p.id='".$r['bw_content']."'")); $qubwrts[$g]['cntnt'] = $r['bw_content']; $qubwrts[$g]['typei'] = 1; }
        // Link
        if($r['bw_type'] == 4){ 
        $data = @get_meta_tags($r['bw_content']);
        $str = file_get_contents($r['bw_content']); if(strlen($str)>0){ preg_match("@<title>(.*)</title>@",$str,$title); $ttrtitle = $title[1]; }else{ if($data['wtitle']){ $ttrtitle = $data['wtitle']; }else{ $ttrtitle = $data['title']; } }
        $iMgDlArMWEb = $wuser->getPimg($str);
        preg_match('@<meta property="og:image" content="(.*)">@',$str,$imgonone); $sdfk549wiMdf = $imgonone[1];
        if($data['wdescription']){ $ttrdescription = $data['wdescription']; }elseif($data['og:description']){ $ttrdescription = $data['og:description']; }else{ $ttrdescription = $data['description']; }
        if($data['image']){ $ksdml = $data['image']; }elseif($data['og:image']){ $ksdml = $data['og:image']; }elseif($iMgDlArMWEb){ $ksdml = $iMgDlArMWEb; }elseif($sdfk549wiMdf){ $ksdml = $sdfk549wiMdf; }else{ $ksdml = $w->settings['url'].'/images/avatar/group2.png'; }
        $data['img'] = $ksdml; $data['title'] = $ttrtitle; $data['desc'] = $ttrdescription;
        $qubwrts[$g]['cntnt'] = $data; $qubwrts[$g]['typei'] = 1; 
        }
        // Extras
        if($r['bw_xtras'] == 2){ $qubwrts[$g]['a'] = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$r['bw_xcontent']."'")); }
        if($r['bw_xtras'] == 3){ $qubwrts[$g]['g'] = mysql_fetch_assoc(mysql_query("SELECT * FROM grupos WHERE idgrupo='".$r['bw_xcontent']."'")); } 
        // likes and dislikes
        $qubwrts[$g]['ulike'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$r['id']."' AND idusuario='".$wuser->uid."' "));
        $qubwrts[$g]['udislike'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$r['id']."' AND idusuario='".$wuser->uid."'"));
        // Totals
        $qubwrts[$g]['tcomments'] = mysql_num_rows(mysql_query("SELECT * FROM b_comments WHERE bb_arch='".$r['id']."'"));
        $qubwrts[$g]['tlikes'] = mysql_num_rows(mysql_query("SELECT * FROM me_encanta WHERE idpublicacion='".$r['id']."' "));
        $qubwrts[$g]['tdislikes'] = mysql_num_rows(mysql_query("SELECT * FROM no_megusta WHERE idnopubli='".$r['id']."'"));
        $qubwrts[$g]['texto'] = $tsBwort->setHashtag($tsBwort->setMenciones($tsBwort->toLink($tsBwort->anti_xss($tsBwort->special_codes(nl2br(htmlentities($r['text'], ENT_NOQUOTES)))))));
        $g++;
        }
        $smarty->assign('bload', $qubwrts);
		break;
        case 'bwort-i':
                include '../class/modos/bwort.class.php';
        $tsBwort =& tsBwort::getInstance();
        $sGore = $w->setSecure($_POST['gore']);
        $sHe = $w->setSecure($_POST['she']);
if($sGore && $sHe){
$fonconfirmacin = mysql_fetch_assoc(mysql_query("SELECT bw.*, u.* FROM bworts AS bw LEFT JOIN usuarios AS u ON bw.idusuario = u.usuario_id WHERE bw.id ='".$sGore."' "));
$sheconfirmacin = mysql_fetch_assoc(mysql_query("SELECT wi.*, up.* FROM bw_images AS wi LEFT JOIN rft_uploads AS up ON wi.bwi_loc = up.up_code WHERE wi.bwi_content='".$fonconfirmacin['id']."' AND wi.bwi_id='".$sHe."' "));
if($fonconfirmacin['id']){
$iiEed = ($sheconfirmacin['bwi_id']) ? $w->settings['url'].'/files/arc/co/'.$sheconfirmacin['up_code'].'.'.$sheconfirmacin['up_ftype'] : $w->settings['url'].'/images/avatar/notfound.png';
$nameiiEe = ($fonconfirmacin['name_original'] && $fonconfirmacin['ap_original']) ? $fonconfirmacin['name_original'].' '.$fonconfirmacin['ap_original'] : $fonconfirmacin['usuario_nombre'];
$form = '
<div class="hidden hadderIm">
<div class="floatL iMgCo">
<div class="ii">
<img src="'.$iiEed.'" class="eeiMg">
<div class="menu-ii"><ol><li class="floatL"><a>Descargar imagen</a></li><li class="floatL"><a>Ver completa</a></li><li class="floatL"><a>Ver informaci&oacute;n</a></li></ol></div>
</div>
</div>
<div class="floatL eMCo" >
<div class="kKk">
<img src="'.$fonconfirmacin['w_avatar'].'" class="floatL AabBtRrT">
<div class="floatL gMmG">
<h3><a class="aAlIKn" href="'.$w->settings['url'].'/'.$fonconfirmacin['usuario_nombre'].'">'.$nameiiEe.'</a></h3>
<div class="size11"><a href="'.$w->settings['url'].'/'.$fonconfirmacin['usuario_nombre'].'/'.$fonconfirmacin['id'].'/" title="ver bwort">Se ha compartido publicamente</a></div><div class="size11 L">'.$w->setHace($fonconfirmacin['hace']).'</div></div>
<div class="hidden iIiFfo"><span>'.$tsBwort->setHashtag($tsBwort->setMenciones($fonconfirmacin['text'])).'</span></div>
</div>
</div><div class="::styl::" role="stylesheets"><link rel="stylesheet" type="text/css" href="'.$w->settings['url'].'/css/modo/codeim.css"/></div></div>
';
}else{ $form = '<center><h3>No existe el bwort.</h3></center>'; }
}else{ $form = '<center><h3>Ingresa datos.</h3></center>'; }
echo $form;
        break;
        case 'bwort-ocultar':
        $iJRkw = $w->setSecure($_POST['sk']);
        $w->visto_1($iJRkw, 4);
        echo '1: Agregado';
        break;
        default:
            die('0: Este archivo no existe.');
        break;
	}
?>