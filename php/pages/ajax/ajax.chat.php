<?php 
/**
 * Controlador AJAX
 *
 * @name    ajax.chat.php
 * @author  PHPost Team
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/


	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'chat-create' => array('n' => 2, 'p' => ''), 
    'chat-form1' => array('n' => 2, 'p' => ''), 
    'chat-load' => array('n' => 2, 'p' => ''),  
    'chat-edit' => array('n' => 2, 'p' => ''), 
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'ajax_files/chat/'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

    if($files[$action]['p']){
    include 'smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/**********************************\

*	(INSTRUCCIONES DE CODIGO)		*

\*********************************/
	
	// DEPENDE EL NIVEL
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
  include('../class/chats.class.php');
	$tsChats =& tsChats::getInstance();



	// CODIGO
	switch($action){
  case 'chat-create':
  $typeset = $w->setSecure($_POST['t']);
  echo $tsChats->create($typeset);
  break;
  case 'chat-form1':
  $querycats = result_array(mysql_query("SELECT * FROM u_c_chat_cats"));
  $fo = '<div><form><div id="error_flat">Un chat sirve para mejorar la interacci&oacute;n entre usuarios.</div><table><tbody>';
  $fo .= '<tr><td style="width: 109px;">Nombre</td><td><input type="text" id="name_dd" placeholder="Nombre de tu chat" /></td></tr>';
  $fo .= '<tr><td>Categoria</td><td><select id="cat_dd" style="margin: 11px 0px;"><option value="">Selecciona tu categoria</option>';
  foreach($querycats AS $d){
    $fo .= '<option value="'.$d['u_cc_id'].'">'.$d['u_cc_name'].'</option>';
  }
  $fo .= '</select></td></tr>';
  $fo .= '<tr><td>Descripci&oacute;n</td><td><textarea id="desc_dd" style="width: 313px;height: 147px;padding:5px;" placeholder="Describe tu chat"></textarea></td></tr>';
  $fo .= '</tbody></table></form></div>';
  echo $fo;
  break;
  case 'chat-load':
  $getloadCHts = $w->setSecure($_REQUEST['iu']);
  $getloadPagsCHts = ($_REQUEST['iup']) ? $w->setSecure($_REQUEST['iu']) : 0;
  $getloadCHtsgetmas = $w->setSecure($_REQUEST['ie']);
  $loadChats = $tsChats->load(4, $getloadCHts, $getloadPagsCHts);
  $msgs = '';
if($getloadCHtsgetmas && $getloadCHtsgetmas == 1){
  $loadChatsNOPAGE = $tsChats->load(5, $getloadCHts);
foreach($loadChatsNOPAGE AS $loadpph){
  $SbrSsAmn = mysql_fetch_assoc(mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='1' AND u_c_id='".$getloadCHts."' "));
  $vLrDlAdmns = ($SbrSsAmn['u_c_user'] == $loadpphff['u_c_user']) ? ' &nbsp; <div class="floatL qtip" title="Administrador del chat"><img src="'.$w->settings['url'].'/images/icons/star-lit4.png" /></div>' : '<div class="floatL qtip" title="Usuario"><img src="'.$w->settings['url'].'/images/icons/star4.png" /></div>';
  $numerodvischtmsng = mysql_num_rows(mysql_query("SELECT * FROM u_visto WHERE ue_user='".$wuser->uid."' AND ue_obj='".$loadpph['u_c_id']."' AND ue_type='3'"));
  if($numerodvischtmsng == 0){
    $w->visto_1($loadpph['u_c_id'], 3);
  $chatusername = ($loadpph['u']['name_original'] && $loadpph['u']['ap_original']) ? $loadpph['u']['name_original'].' '.$loadpph['u']['ap_original'] : $loadpph['u']['usuario_nombre'];
  $chatuseravatar = ($loadpph['u']['w_avatar']) ? $loadpph['u']['w_avatar'] : $w->settings['url'].'/images/avatar/group.png';
  $msgs .= '
  <div class="hidden msg">
  <div class="floatL hrd"><img src="'.$chatuseravatar.'"></div>
  <div class="floatL cnt">
  <div class="clearfix" style="clear:both;"><h1 class="floatL">'.$chatusername.'</h1> '.$vLrDlAdmns.'</div>
  <div class="dodo">
  <div class="tt">'.$loadpph['u_c_contenido'].'</div>
  <div class="size11 color_gray">'.$w->setHace($loadpph['u_c_hace']).'</div></div></div></div>';
  }
  }
}else{
  foreach($loadChats AS $loadpphff){
  $SbrSsAmn = mysql_fetch_assoc(mysql_query("SELECT * FROM u_c_chat WHERE u_c_type='1' AND u_c_id='".$getloadCHts."' "));
  $vLrDlAdmns = ($SbrSsAmn['u_c_user'] == $loadpphff['u_c_user']) ? ' &nbsp; <div class="floatL qtip" title="Administrador del chat"><img src="'.$w->settings['url'].'/images/icons/star-lit4.png" /></div>' : '<div class="floatL qtip" title="Usuario"><img src="'.$w->settings['url'].'/images/icons/star4.png" /></div>';
  $chatusername = ($loadpphff['u']['name_original'] && $loadpphff['u']['ap_original']) ? $loadpphff['u']['name_original'].' '.$loadpphff['u']['ap_original'] : $loadpphff['u']['usuario_nombre'];
  $chatuseravatar = ($loadpphff['u']['w_avatar']) ? $loadpphff['u']['w_avatar'] : $w->settings['url'].'/images/avatar/group.png'; 
  $w->visto_1($loadpphff['u_c_id'], 3);
  $msgs .= '
  <div class="hidden msg">
  <div class="floatL hrd"><img src="'.$chatuseravatar.'"></div>
  <div class="floatL cnt">
  <div class="clearfix" style="clear:both;"><h1 class="floatL">'.$chatusername.'</h1> '.$vLrDlAdmns.'</div>
  <div class="dodo">
  <div class="tt">'.$loadpphff['u_c_contenido'].'</div>
  <div class="size11 color_gray">'.$w->setHace($loadpphff['u_c_hace']).'</div></div></div></div>';
  }
}
  $datams['where'] = ($msgs) ? 1 : 0;
  $datams['msgs'] = $msgs;
if($getloadCHtsgetmas && $getloadCHtsgetmas == 1){
echo json($datams);
}else{
  echo $msgs;
}
  break;
  case 'chat-edit':
  // DATOS A RECIBIR
  $identificht = $w->setSecure($_POST['itc']);
  /* 1 => edit, 2 => desactivar, 3 => Reactivar*/
  $tyoppost = $w->setSecure($_POST['otp']); 
  /* 1 => mostrar, 2 => ejecutar */
  $tyopdate = $w->setSecure($_POST['otd']);

  $queryvaidcht = mysql_query("SELECT * FROM u_c_chat WHERE u_c_id='".$identificht."'");
  $queryvalidduen = mysql_fetch_assoc($queryvaidcht);
  $querynumcht = mysql_num_rows($queryvaidcht);

  // EJECUCIONES
  if($querynumcht >= 1){
  if($queryvalidduen['u_c_user'] == $wuser->uid){
  if($tyoppost == 1){
    if($tyopdate == 1){
  $querycats = result_array(mysql_query("SELECT * FROM u_c_chat_cats"));
  $fo = '1: <div><form><div id="error_flat">Un chat sirve para mejorar la interacci&oacute;n entre usuarios.</div><table><tbody>';
  $fo .= '<tr><td style="width: 109px;">Nombre</td><td><input type="text" id="name_dd" placeholder="Nombre de tu chat" value="'.$queryvalidduen['u_c_contenido'].'"/></td></tr>';
  $fo .= '<tr><td>Categoria</td><td><select id="cat_dd" style="margin: 11px 0px;"><option value="">Selecciona tu categoria</option>';
  foreach($querycats AS $d){
  $idchch = ($queryvalidduen['u_c_cat'] == $d['u_cc_id']) ? 'selected="selected"' : '';
  $fo .= '<option value="'.$d['u_cc_id'].'" '.$idchch.'>'.$d['u_cc_name'].'</option>';
  }
  $fo .= '</select></td></tr>';
  $fo .= '<tr><td>Descripci&oacute;n</td><td><textarea id="desc_dd" style="width: 313px;height: 147px;padding:5px;" placeholder="Describe tu chat">'.$queryvalidduen['u_c_desc'].'</textarea></td></tr>';
  $fo .= '</tbody></table></form></div>';
  echo $fo;
  }elseif($tyopdate == 2){
    // DATOS RECIBIDOS
    $catposcht = $w->setSecure($_POST['c']);
    $descpostcht = $w->setSecure($_POST['d']);
    $namepostcht = $w->setSecure($_POST['n']);
    // EJECUCIÓN
  if(mysql_query("UPDATE u_c_chat SET u_c_contenido='".$namepostcht."', u_c_desc='".$descpostcht."', u_c_cat='".$catposcht."' WHERE u_c_id='".$identificht."'")){ echo '1: Tu chat a sido editado con exito...'; }else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
  }else{ echo '0: Funcion no definida.'; }
  }elseif($tyoppost == 2){
  if(mysql_query("UPDATE u_c_chat SET u_c_c1='0' WHERE u_c_id='".$identificht."'")){ echo '1: Desactivado correctamente.'; }else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
  }elseif($tyoppost == 3){
  if(mysql_query("UPDATE u_c_chat SET u_c_c1='1' WHERE u_c_id='".$identificht."'")){ echo '1: Reactivado correctamente.'; }else{ echo '0: Ocurrio un error, intenta nuevamente.'; }
  }else{ echo '0: Funcion no definida.'; }
  }else{ echo '0: No eres dueño del chat.'; }
  }else{ echo '0: El objeto no existe.'; }
  break;
  default:
  echo '0: Este archivo no existe.';
  break;
	}