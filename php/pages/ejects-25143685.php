<?php
if( defined('TS_HEADER') ) return;
define('UNTARGETED', TRUE);
define('HEADER', TRUE);
include '../../mysqli_start.php';
error_reporting(0);
$stt = $_POST['stt'];
// 'SQLS' AND 'PHPs'
if($stt == 1){
	// BWORTS OF VERSION 2.7
    $mysql = $mysqli->query("SELECT * FROM bworts");
    $offs = '<h3>Ejecuciones: </h3>';
    while ($row = $mysql->fetch_assoc()){
    if($row['img'] == '' or $row['img'] == 'undefined' && $row['video'] == '' or $row['video'] == 'undefined' && $row['b_note'] == '' or $row['b_note'] == 'undefined'){ $ttpr = 0; $hept = 0; }else{
    if($row['img'] == NULL or $row['img'] == 'undefined' or $row['bwort_navtar'] == 0 or $row['bwort_navtar'] == '' or $row['bwort_cabe'] == 0 or $row['bwort_cabe'] == '' or $row['bwort_fons'] == 0 or $row['bwort_fons'] == ''){ }else{ $ttpr = 1; $hept = $row['img']; }
    if($row['video'] == NULL or $row['video'] == 'undefined'){ }else{ $ttpr = 2; $hept = $row['video']; }
    if($row['b_note'] == NULL or $row['b_note'] == 'undefined'){ }else{ $ttpr = 3; $hept = $row['b_note']; }
    }  

    if($row['muro'] == '' && $row['grupo'] == ''){ $gxtrass = 1; $gxtras = 0; }else{
    if($row['muro'] == NULL or $row['muro'] == ''){ }else{ $gxtrass = 2; $gxtras = $row['muro']; }
    if($row['grupo'] == NULL or $row['grupo'] == ''){ }else{ $gxtrass = 3; $gxtras = $row['grupo']; }
    }
    //$ksdflkqls = $mysqli->query("ALTER TABLE  `bworts` ADD  `bw_type` TEXT NOT NULL ;");
    //$sdkskwl = $mysqli->query('ALTER TABLE  `bworts` ADD  `bw_content` TEXT NOT NULL ;');
    //$ksaldf65s2 = $mysqli->query('ALTER TABLE  `bworts` ADD  `bw_xtras` TEXT NOT NULL ;');
    //$skql54sef65 = $mysqli->query('ALTER TABLE  `bworts` ADD  `bw_xcontent` TEXT NOT NULL ;');
    //if($ksdflkqls && $sdkskwl && $ksaldf65s2 && $skql54sef65){
    $sddfr = $mysqli->query("UPDATE bworts SET bw_content='".$hept."', bw_type='".$ttpr."', bw_xtras ='".$gxtrass."', bw_xcontent ='".$gxtras."' WHERE id='".$row['id']."'");
    if($sddfr){ $offs .= 'Bwort NO.'.$row['id'].': Ejecuciones...'; }else{ $offs .= 'Bwort NO.'.$row['id'].': No ofss contents'; }
    //}else{ $offs .= 'No se agregaron los campos a la base de datos: "bw_type" and "bw_content"'; }
    }
}elseif($stt == 2){   
$offs = '<h3>Ejecuciones:</h3>'; 
$lkasdmfl = $mysqli->query('ALTER TABLE `bworts` DROP `grupo`;');
if($lkasdmfl){ $offs .= '<b style="color:green;">Grupo elimined</b><br />'; }else{ $offs .= '<b style="color:red;">Error: grupo</b><br />'; }
$s54fads6a5 = $mysqli->query('ALTER TABLE `bworts` DROP `muro`;');
if($s54fads6a5){ $offs .= '<b style="color:green;">Muro elimined</b><br />'; }else{ $offs .= '<b style="color:red;">Error: muro</b><br />'; }
$a5sd4f = $mysqli->query('ALTER TABLE `bworts` DROP `img`;');
if($a5sd4f){ $offs .= '<b style="color:green;">img elimined</b><br />'; }else{ $offs .= '<b style="color:red;">Error: img</b><br />'; }
$sad65f4 = $mysqli->query('ALTER TABLE `bworts` DROP `video`;');
if($sad65f4){ $offs .= '<b style="color:green;">video elimined</b><br />'; }else{ $offs .= '<b style="color:red;">Error: video</b><br />'; }
$s4as5asd = $mysqli->query('ALTER TABLE `bworts` DROP `b_note`;');
if($s4as5asd){ $offs .= '<b style="color:green;">b_note elimined</b><br />'; }else{ $offs .= '<b style="color:red;">Error: b_note</b><br />'; }
$sas456awe = $mysqli->query('ALTER TABLE `bworts` DROP `b_compr`;');
if($sas456awe){ $offs .= '<b style="color:green;">b_compr elimined</b><br />'; }else{ $offs .= '<b style="color:red;">Error_ b_compr</b><br />'; }
}elseif($stt == 3){
$offs = '<h3>Ejecuciones...</h3>';
if($mysqli->query('DROP TABLE a_files')){ $offs .= '<b style="color: green;">a_files</b><br />'; }else{ $offs .= '<b style="color: red;">a_files</b></br />'; }
if($mysqli->query('DROP TABLE a_comentarios')){ $offs .= '<b style="color: green;">a_comentarios</b><br />'; }else{ $offs .= '<b style="color: red;">a_comentarios</b></br />'; }
if($mysqli->query('DROP TABLE a_descargas')){ $offs .= '<b style="color: green;">a_descargas</b><br />'; }else{ $offs .= '<b style="color: red;">a_descargas</b></br />'; }
if($mysqli->query('DROP TABLE a_favoritos')){ $offs .= '<b style="color: green;">a_favoritos</b><br />'; }else{ $offs .= '<b style="color: red;">a_favoritos</b></br />'; }
if($mysqli->query('DROP TABLE a_folder_files')){ $offs .= '<b style="color: green;">a_folder_files</b><br />'; }else{ $offs .= '<b style="color: red;">a_folder_files</b></br />'; }
if($mysqli->query('DROP TABLE a_visitas')){ $offs .= '<b style="color: green;">a_visitas</b><br />'; }else{ $offs .= '<b style="color: red;">a_visitas</b></br />'; }
if($mysqli->query('DROP TABLE comunidades')){ $offs .= '<b style="color: green;">comunidades</b><br />'; }else{ $offs .= '<b style="color: red;">comunidades</b></br />'; }
if($mysqli->query('DROP TABLE groups_admins')){ $offs .= '<b style="color: green;">groups_admins</b><br />'; }else{ $offs .= '<b style="color: red;">groups_admins</b></br />'; }
if($mysqli->query('DROP TABLE ipsk')){ $offs .= '<b style="color: green;">ipsk</b><br />'; }else{ $offs .= '<b style="color: red;">ipsk</b></br />'; }
if($mysqli->query('DROP TABLE j_categorias')){ $offs .= '<b style="color: green;">j_categorias</b><br />'; }else{ $offs .= '<b style="color: red;">j_categorias</b></br />'; }
if($mysqli->query('DROP TABLE j_comentarios')){ $offs .= '<b style="color: green;">j_comentarios</b><br />'; }else{ $offs .= '<b style="color: red;">j_comentarios</b></br />'; }
if($mysqli->query('DROP TABLE j_favoritos')){ $offs .= '<b style="color: green;">j_favoritos</b><br />'; }else{ $offs .= '<b style="color: red;">j_favoritos</b></br />'; }
if($mysqli->query('DROP TABLE j_juegos')){ $offs .= '<b style="color: green;">j_juegos</b><br />'; }else{ $offs .= '<b style="color: red;">j_juegos</b></br />'; }
if($mysqli->query('DROP TABLE j_votos')){ $offs .= '<b style="color: green;">j_votos</b><br />'; }else{ $offs .= '<b style="color: red;">j_votos</b></br />'; }
if($mysqli->query('DROP TABLE medallas')){ $offs .= '<b style="color: green;">medallas</b><br />'; }else{ $offs .= '<b style="color: red;">medallas</b></br />'; }
if($mysqli->query('DROP TABLE p_pelis')){ $offs .= '<b style="color: green;">p_pelis</b><br />'; }else{ $offs .= '<b style="color: red;">p_pelis</b></br />'; }
if($mysqli->query('DROP TABLE denuncias')){ $offs .= '<b style="color: green;">denuncias</b><br />'; }else{ $offs .= '<b style="color: red;">denuncias</b></br />'; }
//if($mysqli->query('DROP TABLE c_chat')){ $offs .= '<b style="color: green;"></b><br />'; }else{ $offs .= '<b style="color: red;"></b></br />'; }
//if($mysqli->query('DROP TABLE c_chat_admod')){ $offs .= '<b style="color: green;"></b><br />'; }else{ $offs .= '<b style="color: red;"></b></br />'; }
//if($mysqli->query('DROP TABLE c_chat_conectados')){ $offs .= '<b style="color: green;"></b><br />'; }else{ $offs .= '<b style="color: red;"></b></br />'; }
//if($mysqli->query('DROP TABLE c_chat_suspendidos')){ $offs .= '<b style="color: green;"></b><br />'; }else{ $offs .= '<b style="color: red;"></b></br />'; }
//if($mysqli->query('DROP TABLE c_chat_fondos')){ $offs .= '<b style="color: green;"></b><br />'; }else{ $offs .= '<b style="color: red;"></b></br />'; }
//if($mysqli->query('DROP TABLE ')){ $offs .= '<b style="color: green;"></b><br />'; }else{ $offs .= '<b style="color: red;"></b></br />'; }
}elseif($stt == 4){
$bloqueosu = 'CREATE TABLE IF NOT EXISTS `u_bloqueos` (
  `uq_id` int(11) NOT NULL AUTO_INCREMENT,
  `uq_name` text NOT NULL,
  `uq_razon` text NOT NULL,
  `uq_key` text NOT NULL,
  `uq_user` text NOT NULL,
  `uq_a` text NOT NULL,
  PRIMARY KEY (`uq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$vistou = 'CREATE TABLE IF NOT EXISTS `u_visto` (
  `ue_id` int(11) NOT NULL AUTO_INCREMENT,
  `ue_user` text NOT NULL,
  `ue_type` text NOT NULL,
  `ue_hace` text NOT NULL,
  `ue_useragent` text NOT NULL,
  `ue_obj` text NOT NULL,
  PRIMARY KEY (`ue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$imagesbw = 'CREATE TABLE IF NOT EXISTS `bw_images` (
  `bwi_id` int(11) NOT NULL AUTO_INCREMENT,
  `bwi_name` text NOT NULL,
  `bwi_oname` text NOT NULL,
  `bwi_loc` text NOT NULL,
  `bwi_hace` text NOT NULL,
  `bwi_user` text NOT NULL,
  `bwi_content` text NOT NULL,
  PRIMARY KEY (`bwi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$rftuploads = 'CREATE TABLE IF NOT EXISTS `rft_uploads` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `up_name` text NOT NULL,
  `up_vname` text NOT NULL,
  `up_img` text NOT NULL,
  `up_size` text NOT NULL,
  `up_vsize` text NOT NULL,
  `up_key` text NOT NULL,
  `up_code` text NOT NULL,
  `up_date` text NOT NULL,
  `up_type` text NOT NULL,
  `up_ftype` text NOT NULL,
  `up_typesize` text NOT NULL,
  `up_user` text NOT NULL,
  `up_state` int(11) NOT NULL DEFAULT "1",
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$uads = 'CREATE TABLE IF NOT EXISTS `u_ads` (
  `au_id` int(11) NOT NULL AUTO_INCREMENT,
  `au_user` text NOT NULL,
  `au_name` text NOT NULL,
  `au_date_one` text NOT NULL,
  `au_date_two` text NOT NULL,
  `au_hace` text NOT NULL,
  `au_key` text NOT NULL,
  `au_code` text NOT NULL,
  `au_img` text NOT NULL,
  `au_description` text NOT NULL,
  `au_mdescription` text NOT NULL,
  `au_useragent` text NOT NULL,
  `au_ip_conf` text NOT NULL,
  PRIMARY KEY (`au_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($bloqueosu)){ $offs .= '<b style="color: green;">u_bloqueos</b><br />'; }else{ $offs .= '<b style="color:red;">u_bloqueos</b><br />'; }
if($mysqli->query($vistou)){ $offs .= '<b style="color: green;">u_visto</b><br />'; }else{ $offs .= '<b style="color:red;">u_visto</b><br />'; }
if($mysqli->query($imagesbw)){ $offs .= '<b style="color: green;">bw_images</b><br />'; }else{ $offs .= '<b style="color:red;">bw_images</b><br />'; }
if($mysqli->query($rftuploads)){ $offs .= '<b style="color: green;">rft_uploads</b><br />'; }else{ $offs .= '<b style="color:red;">rft_uploads</b><br />'; }
if($mysqli->query($uads)){ $offs .= '<b style="color: green;">u_ads</b><br />'; }else{ $offs .= '<b style="color:red;">u_ads</b><br />'; }
}elseif($stt == 5){
$primeraula1 = 'CREATE TABLE IF NOT EXISTS `u_aula` (
  `aul_id` int(11) NOT NULL AUTO_INCREMENT,
  `aul_type` INT NOT NULL DEFAULT  "1",
  `aul_user_admin` text NOT NULL,
  `aul_name` text NOT NULL,
  `aul_verifi` text NOT NULL,
  `aul_escuela_col` text NOT NULL,
  `aul_fundacion` text NOT NULL,
  `aul_hace` text NOT NULL,
  `aul_key` text NOT NULL,
  `aul_code` text NOT NULL,
  `aul_img` text NOT NULL,
  `aul_portad` text NOT NULL,
  `aul_description` text NOT NULL,
  `aul_mdescription` text NOT NULL,
  `aul_ciudad` text NOT NULL,
  `aul_pais` text NOT NULL,
  `aul_location` text NOT NULL,
  `aul_useragent` text NOT NULL,
  `aul_ip_conf` text NOT NULL,
  PRIMARY KEY (`aul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$segundoaula2 = 'CREATE TABLE IF NOT EXISTS `u_aula_members` (
  `aul_mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `aul_mem_user_admin` text NOT NULL,
  `aul_mem_type` text NOT NULL,
  `aul_mem_verifi` text NOT NULL,
  `aul_mem_name` text NOT NULL,
  `aul_mem_escuela_col` text NOT NULL,
  `aul_mem_nac_dia` text NOT NULL,
  `aul_mem_nac_mes` text NOT NULL,
  `aul_mem_nac_anio` text NOT NULL,
  `aul_mem_hace` text NOT NULL,
  `aul_mem_key` text NOT NULL,
  `aul_mem_code` text NOT NULL,
  `aul_mem_img` text NOT NULL,
  `aul_mem_portad` text NOT NULL,
  `aul_mem_description` text NOT NULL,
  `aul_mem_mdescription` text NOT NULL,
  `aul_mem_ciudad` text NOT NULL,
  `aul_mem_pais` text NOT NULL,
  `aul_mem_useragent` text NOT NULL,
  `aul_mem_ip_conf` text NOT NULL,
  PRIMARY KEY (`aul_mem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($primeraula1)){ $offs .= '<b style="color: green;">u_aula</b><br />'; }else{ $offs .= '<b style="color:red;">u_aula</b><br />'; }
if($mysqli->query($segundoaula2)){ $offs .= '<b style="color: green;">u_aula_members</b><br />'; }else{ $offs .= '<b style="color:red;">u_aula_members</b><br />'; }
}elseif($stt == 6){
$prim1 = 'CREATE TABLE IF NOT EXISTS `u_m_notas` (
  `um_id` int(11) NOT NULL AUTO_INCREMENT,
  `um_user` text NOT NULL,
  `um_name` text NOT NULL,
  `um_text` text NOT NULL,
  `um_date` text NOT NULL,
  `um_list` text NOT NULL,
  `um_type` text NOT NULL,
  `um_state` text NOT NULL,
  `um_public` text NOT NULL,
  PRIMARY KEY (`um_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$priml2 = 'CREATE TABLE IF NOT EXISTS `u_list_notas` (
  `uml_id` int(11) NOT NULL AUTO_INCREMENT,
  `uml_user` text NOT NULL,
  `uml_name` text NOT NULL,
  `uml_text` text NOT NULL,
  `uml_date` text NOT NULL,
  `uml_list` text NOT NULL,
  `uml_type` text NOT NULL,
  `uml_state` text NOT NULL,
  `uml_public` text NOT NULL,
  PRIMARY KEY (`uml_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($prim1)){ $offs .= '<b style="color: green;">u_m_notas</b><br />'; }else{ $offs .= '<b style="color:red;">u_m_notas</b><br />'; }
if($mysqli->query($priml2)){ $offs .= '<b style="color: green;">u_list_notas</b><br />'; }else{ $offs .= '<b style="color:red;">u_list_notas</b><br />'; }
}elseif($stt == 7){
  $sql_base1_ads = 'CREATE TABLE IF NOT EXISTS `u_ads_statics` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_banr` text NOT NULL,
  `ads_ip` text NOT NULL,
  `ads_hace_d` text NOT NULL,
  `ads_useragent` text NOT NULL,
  `ads_user` text NOT NULL,
  `ads_type` text NOT NULL,
  `ads_logg` text NOT NULL,
  `ads_dest` text NOT NULL,
  `ads_anun` text NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$sql_base2_ads = 'ALTER TABLE u_ads ADD au_dimensiones text NOT NULL';
$sql_base3_ads = 'ALTER TABLE u_ads ADD au_dimensiones text';
if($mysqli->query($sql_base1_ads)){ $offs .= '<b style="color: green;">u_ads_statics</b><br />'; }else{ $offs .= '<b style="color:red;">u_ads_statics</b><br />'; }
if($mysqli->query($sql_base2_ads) or $mysqli->query($sql_base3_ads)){ $offs .= '<b style="color: green;">u_ads ADD au_dimensiones</b><br />'; }else{ $offs .= '<b style="color:red;">u_ads ADD au_dimensiones</b><br />'; }
}elseif($stt == 8){
  $delete_sql_cats = "DELETE FROM categorias WHERE game='1'";
if($mysqli->query($delete_sql_cats) or $mysqli->query($sql_base3_ads)){ $offs .= '<b style="color: green;">Delete database cats (game=1)</b><br />'; }else{ $offs .= '<b style="color:red;">Delete database cats (game=1)</b><br />'; }
}elseif($stt == 9){
  $sql_ad102 = 'ALTER TABLE  `u_ads` ADD  `au_dond` TEXT NOT NULL ,
ADD  `au_idioma` TEXT NOT NULL ,
ADD  `au_an_reverva` TEXT NOT NULL ,
ADD  `au_presupuesto` TEXT NOT NULL ,
ADD  `au_type` TEXT NOT NULL ,
ADD `au_txt_titl` TEXT NOT NULL;';
if($mysqli->query($sql_ad102)){ $offs .= '<b style="color: green;">ADD a database u_ads</b><br />'; }else{ $offs .= '<b style="color:red;">ADD a database u_ads</b><br />'; }
}elseif($stt == 10){
    $sql_ad103 = 'ALTER TABLE  `u_ads` ADD  `au_type_camp` TEXT NOT NULL;';
if($mysqli->query($sql_ad103)){ $offs .= '<b style="color: green;">ADD a database u_ads campañas</b><br />'; }else{ $offs .= '<b style="color:red;">ADD a database u_ads campañas</b><br />'; }
}elseif($stt == 11){
$sql_vrsion_ss = 'ALTER TABLE  `u_ads_statics` ADD  `ads_agent_browser` TEXT NOT NULL , ADD  `ads_agent_version` TEXT NOT NULL , ADD  `ads_agent_io` TEXT NOT NULL ;';
if($mysqli->query($sql_vrsion_ss)){ $offs .= '<b style="color: green;">ADD a u_ads_statics in adds</b><br />'; }else{ $offs .= '<b style="color:red;">ADD a u_ads_statics in adds</b><br />'; }
}elseif($stt == 12){
  $sql_1_codew = 'CREATE TABLE IF NOT EXISTS `u_code_records` (
  `uc_id` int(11) NOT NULL AUTO_INCREMENT,
  `uc_user_register` text NOT NULL,
  `uc_g_type` text NOT NULL,
  `uc_type_1` text NOT NULL,
  `uc_type_1_content` text NOT NULL,
  `uc_type_2` text NOT NULL,
  `uc_type_2_content` text NOT NULL,
  `uc_type_3` text NOT NULL,
  `uc_type_3_content` text NOT NULL,
  `uc_date` text NOT NULL,
  `uc_u_ip` text NOT NULL,
  `uc_u_uag_browser` text NOT NULL,
  `uc_u_uag_brvrsn` text NOT NULL,
  `uc_u_uag_os` text NOT NULL,
  `uc_g_key` text NOT NULL,
  `uc_g_code` text NOT NULL,
  `uc_g_ident` text NOT NULL,
  PRIMARY KEY (`uc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($sql_1_codew)){ $offs .= '<b style="color: green;">ADD TABLE u_code_records</b><br />'; }else{ $offs .= '<b style="color:red;">ADD TABLE u_code_records</b><br />'; }
}elseif($stt == 13){
$slq_code_www_1 = 'ALTER TABLE u_code_records ADD uc_name text NOT NULL';
if($mysqli->query($slq_code_www_1)){ $offs .= '<b style="color: green;">ALTER TABLE u_code_records = name</b><br />'; }else{ $offs .= '<b style="color:red;">ALTER TABLE u_code_records = name</b><br />'; }
}elseif($stt == 14){
$sql_code_w_visit = 'CREATE TABLE IF NOT EXISTS `u_code_visit` (
  `uc_v_id` int(11) NOT NULL AUTO_INCREMENT,
  `uc_v_nombre` text NOT NULL,
  `uc_v_ident` text NOT NULL,
  `uc_v_hace` text NOT NULL,
  `uc_v_arc` text NOT NULL,
  `uc_v_state` text NOT NULL,
  `uc_v_user` text NOT NULL,
  `uc_v_userad` text NOT NULL,
  `uc_v_key` text NOT NULL,
  `uc_v_code` text NOT NULL,
  PRIMARY KEY (`uc_v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($sql_code_w_visit)){ $offs .= '<b style="color: green;">ADD visitas a CODE W</b><br />'; }else{ $offs .= '<b style="color:red;">ADD visitas a CODE W</b><br />'; }
}elseif($stt == 15){
$ksdflkq_sql = "ALTER TABLE  `b_comments` ADD  `bb_type` INT( 11 ) NOT NULL DEFAULT  '1', ADD  `bb_img` TEXT NOT NULL ;";
if($mysqli->query($ksdflkq_sql)){ $offs .= '<b style="color: green;">ADD TO img IN b_comments</b><br />'; }else{ $offs .= '<b style="color:red;">ADD TO img IN b_comments</b><br />'; }
}elseif($stt == 16){
  $sql_visitas_ad = 'ALTER TABLE `visitas` ADD `vis_con` text NOT NULL';
  if($mysqli->query($sql_visitas_ad)){ $offs .= '<b style="color: green;">ADD "vis_con" TO visitas</b>'; }else{ $offs .= '<b style="color: red;">ADD "vis_con" TO visitas</b>'; }
}elseif($stt == 17){
  $sql_kind_aula = 'CREATE TABLE IF NOT EXISTS `u_aula_kind` (
  `aul_kin_id` int(11) NOT NULL AUTO_INCREMENT,
  `aul_kind_user` text NOT NULL,
  `aul_kind_type` text NOT NULL,
  `aul_kind_state` text NOT NULL,
  `aul_kind_name` text NOT NULL,
  `aul_kind_escuela_col` text NOT NULL,
  `aul_kind_hace` text NOT NULL,
  `aul_kind_key` text NOT NULL,
  `aul_kind_code` text NOT NULL,
  `aul_kind_img` text NOT NULL,
  `aul_kind_portad` text NOT NULL,
  `aul_kind_description` text NOT NULL,
  `aul_kind_mdescription` text NOT NULL,
  `aul_kind_loc` text NOT NULL,
  `aul_mem_useragent` text NOT NULL,
  `aul_mem_ip_conf` text NOT NULL,
  PRIMARY KEY (`aul_kin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($sql_kind_aula)){ $offs .= '<b style="color: green;">CREATE TABLE "u_aula_kind"</b>'; }else{ $offs .= '<b style="color: red;">CREATE TABLE "u_aula_kind"</b>'; }
}elseif($stt == 18){
  $sql_donw_rft = 'CREATE TABLE IF NOT EXISTS `rft_downloads` (
  `dow_id` int(11) NOT NULL AUTO_INCREMENT,
  `dow_type` text NOT NULL,
  `dow_obj` text NOT NULL,
  `dow_usip` text NOT NULL,
  `dow_date` text NOT NULL,
  PRIMARY KEY (`dow_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;';
if($mysqli->query($sql_donw_rft)){ $offs .= '<b style="color: green;">CREATE TABLE "rft_downloads"</b>'; }else{ $offs .= '<b style="color: red;">CREATE TABLE "rft_downloads"</b>'; }
}elseif($stt == 19){
  // CHATS TABLES
$cchatsql = 'CREATE TABLE IF NOT EXISTS `u_c_chat` (
  `u_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_c_type` text NOT NULL,
  `u_c_user` text NOT NULL,
  `u_c_contenido` text NOT NULL,
  `u_c_c1` text NOT NULL,
  `u_c_c2` text NOT NULL,
  `u_c_c3` text NOT NULL,
  `u_c_desc` text NOT NULL,
  `u_c_hace` text NOT NULL,
  `u_c_cat` text NOT NULL,
  `u_c_usrgn_nav` text NOT NULL,
  `u_c_usrgn_nav_v` text NOT NULL,
  `u_c_usrgn_os` text NOT NULL,
  PRIMARY KEY (`u_c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
$cchatsqlcats = 'CREATE TABLE IF NOT EXISTS `u_c_chat_cats` (
  `u_cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_cc_type` text NOT NULL,
  `u_cc_name` text NOT NULL,
  `u_cc_user` text NOT NULL,
  `u_cc_img` text NOT NULL,
  `u_cc_port` text NOT NULL,
  `u_cc_desc` text NOT NULL,
  `u_cc_hace` text NOT NULL,
  `u_cc_usrgn_nav` text NOT NULL,
  `u_cc_usrgn_nav_v` text NOT NULL,
  `u_cc_usrgn_os` text NOT NULL,
  PRIMARY KEY (`u_cc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
if($mysqli->query($cchatsql)){ $offs .= '<b style="color: green;">CREATE TABLE "u_c_chat"</b>'; }else{ $offs .= '<b style="color: red;">CREATE TABLE "u_c_chat"</b>'; }
if($mysqli->query($cchatsqlcats)){ $offs .= '<b style="color: green;">CREATE TABLE "u_c_chat_cats"</b>'; }else{ $offs .= '<b style="color: red;">CREATE TABLE "u_c_chat_cats"</b>'; }
}elseif($stt == 20){
  // EXTRAS
$segurityw_sp_msg = 'ALTER TABLE  `segurityw` ADD  `sp_msg` INT NOT NULL DEFAULT  '1';';
$puntoscodekey = 'ALTER TABLE  `n_puntos` ADD  `pu_key` TEXT NOT NULL ,
ADD  `pu_code` TEXT NOT NULL ;';
$queryfavn = 'ALTER TABLE  `n_favoritos` ADD  `favn_type` TEXT NOT NULL ,
ADD  `favn_dethace` TEXT NOT NULL ;';
$querymodactivity = 'CREATE TABLE IF NOT EXISTS  `mod_actividad` (
 `ac_id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
 `user_id` INT( 11 ) NOT NULL ,
 `obj_uno` INT( 11 ) NOT NULL ,
 `obj_dos` INT( 11 ) NOT NULL ,
 `ac_type` INT( 2 ) NOT NULL ,
 `ac_date` INT( 10 ) NOT NULL ,
PRIMARY KEY (  `ac_id` )
) ENGINE = MYISAM DEFAULT CHARSET = utf8 AUTO_INCREMENT =1';
$queyagrgropcnsalstore = 'ALTER TABLE  `t_productos` ADD  `obj_3` TEXT NOT NULL ,
ADD  `obj_4` TEXT NOT NULL, `obj_5` TEXT NOT NULL, `obj_6` TEXT NOT NULL ;';
// AQUI IRA EL SQL
}elseif($stt == 21){
$querymudstate = "UPDATE noticia SET estado='1' WHERE post_vip='1'";
if($mysqli->query($querymudstate)){ $offs .= '<b style="color: green;">ACTUALIZE "noticia" vip</b>'; }else{ $offs .= '<b style="color: red;">ACTUALIZE "noticia" vip</b>'; }
}else{}
// END 'SQLS' AND 'PHPs'

$t = '<html><head><meta charset="utf-8" /><title>Ejecuciones</title><link rel="stylesheet" type="text/css" href="https://sites.google.com/site/wortsaljdr/normalize.css"></head><body>';
$t .= '<center><h1>¡Bievenido!</h1><span>Ejecuciones php de <b>WORTIT</b> - Escoje una ejecucion</span></center><br />';
if(!$_POST['sttfr']){
$t .= '<center><form action="" method="POST"><select name="stt">';
$t .= '<option value="">Selecciona una ejecucion</option>';
$t .= '<option value="1">Actualizar Bworts a Version 2.7</option>';
$t .= '<option value="2">Borrar campos de bworts v1.0</option>';
$t .= '<option value="3">Borrar bases de datos que no sirven</option>';
$t .= '<option value="4">Agregar bases de datos extras</option>';
$t .= '<option value="5">Agregar bases de datos de "Aula"</option>';
$t .= '<option value="6">Agregar bases de datos para Mini Notas</option>';
$t .= '<option value="7">Agregar bases de dats de ADs</option>';
$t .= '<option value="8">Borrar categorias para juegos V1</option>';
$t .= '<option value="9">Agregar cosas a ADs para ADs V1.0.2</option>';
$t .= '<option value="10">Agregar campos de campáña en ADs V1.0.2</option>';
$t .= '<option value="11">Agregar extras a visitas en ADs V1.0.3</option>';
$t .= '<option value="12">Agregar bases de datos para "CODE WORTIT"</option>';
$t .= '<option value="13">Agregar extras a "CODE WORTIT"</option>';
$t .= '<option value="14">Visitas a archivos en "CODE WORTIT"</option>';
$t .= '<option value="15">Agregar imagen en b_comments (bworts comments)</option>';
$t .= '<option value="16">Agregar extras a "visitas"</option>';
$t .= '<option value="17">Agregar table "u_aula_kind"</option>';
$t .= '<option value="18">Agregar table "rft_downloads"</option>';
$t .= '<option value="19">Agregar tables Chats</option>';
$t .= '<option value="20">ADD XTRAS SQLs</option>';
$t .= '<option value="21">Actualize "noticia" V.I.P</option>';
$t .= '</select>';
$t .= '<br /><input type="submit" value="enviar" name="sttfr" /></form></center>';
}else{
if($stt){
	// MOSTRAR EJECUCIONES
$t .= '<h2>EJECUCIONES PHP</h2>';
$t .= $offs;
}else{}
}
$t .= '</body></html>';

echo $t;

?>