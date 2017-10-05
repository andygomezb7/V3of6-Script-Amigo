<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/** POWERED BY: Wortit Developers | Powered by Andy Gómez **/
/* VARIABLES POR DEFAULT */
	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'mod-nstaff-setInActive' => array('n' => 5, 'p' => ''),
		'mod-medals' => array('n' => 5, 'p' => ''),
		'mod-emedals' => array('n' => 5, 'p' => ''),
		'mod-rangos' => array('n' => 5, 'p' => ''),
		'mod-erangos' => array('n' => 5, 'p' => ''),
		'mod-nservicio' => array('n' => 5, 'p' => ''),
		'mod-emot' => array('n' => 5, 'p' => ''),
		'mod-tienda' => array('n' => 5, 'p' => ''),
		'mod-users' => array('n' => 5, 'p' => ''),
		'mod-eusers' => array('n' => 5, 'p' => ''),
		'mod-config' => array('n' => 5, 'p' => ''),
	);

/* VARIABLES LOCALES ESTE ARCHIVO | REDEFINIR VARIABLES */
	$tsPage = 'php_files/p.admin.'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

	    if($files[$action]['p']){
    include 'smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/* INSTRUCCIONES DE CODIGO | DEPENDE EL NIVEL */
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
	include("../class/mod.class.php");
    $tsMod =& tsMod::getInstance();
        // CODIGO
	    switch($action){
	    case 'mod-nstaff-setInActive':
        echo $tsMod->setNstaff();
		break;
		case 'mod-medals':
		$getact = $w->setSecure($_POST['act']);
		$getaa = $w->setSecure($_POST['a']);
        if($getact == 'edit'){
        echo $tsMod->save_medal($getaa);
        /*}
        elseif($getact == 'delete'){
        echo $tsMod->del_medal($getaa);*/
        }
        elseif($getact == 'add'){
        echo $tsMod->add_medal($getaa);
        }else{ echo '0: Defina una accion'; }
		break;
		case 'mod-emedals':
		$getaa = $w->setSecure($_POST['a']);
		$getaact = $w->setSecure($_POST['act']);
		$tsIn = $tsMod->medal_info($getaa);
		$iranks = $w->get_icons('medals');
		$fom = '<div class="hidden" id="medl" style="width:500px;height:370px;overflow-y:auto;overflow-x:hidden;">';
		$fom .= '<table class="table" width="100%">';
		$fom .= '<tr><td>Nombre</td><td><input type="text" placeholder="Nombre" name="m_title" placeholder="" value="'.$tsIn['m_title'].'" /></td></tr>'; // NOMBRE
		$fom .= '<tr><td>Descripci&oacute;n</td><td><input type="text" placeholder="Descripci&oacute;n" name="m_desc" placeholder="" value="'.$tsIn['m_desc'].'" /></td></tr>'; // DESCRIPCIÓN
		$fom .= '<tr><td>Imagen</td><td><div id="klasdflIKs"><img src="'.$w->settings['url'].'/images/static/options/icons/medals/'.$tsIn['m_image'].'" style="width:32px;height:32px;"/></div><select name="m_icon" onchange="$(\'#mydialog #klasdflIKs img\').attr(\'src\', global_data.url+\'/images/static/options/icons/medals/\'+$(this).val());">';
		foreach($iranks AS $med){
		$skdflakwDlrk = ($tsIn['m_image'] == $med) ? 'selected="selected"' : '';
		$fom .= '<option value="'.$med.'" '.$skdflakwDlrk.'>'.$med.'</option>';
		}
		$fom .= '</select></td></tr>'; // TIPO
		// DATOS ESPECIAL
		$daklaeeEpsKE1 = ($tsIn['m_especial'] == 0) ? 'selected="selected"' : '';
		$daklaeeEpsKE2 = ($tsIn['m_especial'] == 1) ? 'selected="selected"' : '';
		// END DATOS ESPECIAL
		$fom .= '<tr><td>Especial</td><td><select name="m_especial">
		<option>Selecciona una opci&oacute;n</option>
		<option value="0" '.$daklaeeEpsKE1.'>No especial</option>
		<option value="1" '.$daklaeeEpsKE2.'>Especial</option>
		</select></td></tr>'; // CANTIDAD
		// VARIABLES
		$mtypisdiez = ($tsIn['m_type'] == 10) ? 'display:none;' : '';
		$mtypenotisdiez = ($tsIn['m_type'] != 10) ? 'display:none;' : '';
		// IFS
		$dataIFsKEL3 = ($tsIn['m_type'] == 3) ? 'selected="selected"' : '';
		$dataIFsKEL4 = ($tsIn['m_type'] == 4) ? 'selected="selected"' : '';
		$dataIFsKEL5 = ($tsIn['m_type'] == 5) ? 'selected="selected"' : '';
		$dataIFsKEL6 = ($tsIn['m_type'] == 6) ? 'selected="selected"' : '';
		$dataIFsKEL7 = ($tsIn['m_type'] == 7) ? 'selected="selected"' : '';
		$dataIFsKEL8 = ($tsIn['m_type'] == 8) ? 'selected="selected"' : '';
		$dataIFsKEL9 = ($tsIn['m_type'] == 9) ? 'selected="selected"' : '';
		$dataIFsKEL10 = ($tsIn['m_type'] == 10) ? 'selected="selected"' : '';
		$dataIFsKEL1 = ($tsIn['m_type'] == 1) ? 'selected="selected"' : '';
		// END IFS

		$fom .= '<tr><td></td><td>
        <input type="text" id="m_cant" class="inp_text" maxlength="12" name="m_cant" value="'.$tsIn['m_cant'].'" style="width:60px;display:inline-block;'.$mtypisdiez.'" autocomplete="off">
        <select id="m_type" style="width:190px;" name="m_type" class="inp_text" onchange="if($(this).val() == 10){ $(\'#m_cant\').hide();$(\'#m_rank\').slideDown();}else{$(\'#m_rank\').hide();$(\'#m_cant\').slideDown();}">
		<option value="3" '.$dataIFsKEL3.'>Posts creados</option>
		<option value="4" '.$dataIFsKEL4.'>Temas creados</option>
		<option value="5" '.$dataIFsKEL5.'>Imágenes subidas</option>
		<option value="6" '.$dataIFsKEL6.'>Comentarios en posts</option>
		<option value="7" '.$dataIFsKEL7.'>Respuestas en temas</option>
		<option value="8" '.$dataIFsKEL8.'>Comentarios en Imágenes</option>
		<option value="9" '.$dataIFsKEL9.'>Seguidores</option>
		<option value="10" '.$dataIFsKEL10.'>Rango</option>
		<option value="1" '.$dataIFsKEL1.'>Hashtag</option>
		</select>';
        $queryrangs = result_array(mysql_query("SELECT * FROM rangos"));
        $fom .= '<select id="m_rank" style="width:150px;'.$mtypenotisdiez.'" name="m_rank" class="inp_text">';
		foreach($queryrangs AS $r){
		$kslfkqwlkmLKEFMl = ($tsIn['m_rank'] == $r['id_rango']) ? 'selected="selected"' : '';
		$fom .= '<option value="'.$r['id_rango'].'" '.$kslfkqwlkmLKEFMl.' style="color:'.$r['r_color'].';">'.$r['name'].'</option>';
		}
		$fom .= '</select><input type="hidden" name="act" value="'.$getaact.'" /><input type="hidden" name="a" value="'.$getaa.'" />
		</td></tr>';
		$fom .= '</table>';
		$fom .= '</div>';
		echo $fom;
		break;
		case 'mod-rangos':
		$getaa = $w->setSecure($_POST['a']);
		$getypea = $w->setSecure($_POST['typ']);
        echo $tsMod->rangosHe($getaa, $getypea);
		break;
		case 'mod-erangos':
		$getaa = $w->setSecure($_POST['a']);
		$getActaa = $w->setSecure($_POST['act']);
		$tsRn = $tsMod->rangosHe($getaa, 'ha');
		$iranks = $w->get_icons('ranks');
		$eran = '<div class="hidden" style="width:500px;height:370px;overflow-y:auto;overflow-x:hidden;">';
		$eran .= '<h3>Rango: '.$tsRn['name'].'</h3>';
		$eran .= '<table class="table" width="100%"><tbody>';
		$eran .= '<tr><td>Nombre</td><td><input type="text" name="name" value="'.$tsRn['name'].'" /></td></tr>'; // NOMBRE
		$eran .= '<tr><td>Descripci&oacute;n</td><td><input type="text" name="des" value="'.$tsRn['descripcion'].'" /></td></tr>'; // DESCRIPCIÓN
		$eran .= '<tr><td>Puntos para dar</td><td><input type="text" name="punt" value="'.$tsRn['admin_home'].'" /></td></tr>'; // PUNTOS PARA DAR
		$eran .= '<tr><td>Icono</td><td><div id="klasdflIKs"><img src="'.$w->settings['url'].'/images/static/options/icons/ranks/'.$tsRn['icono'].'" style="width:16px;height:16px;"/><div><select name="icon" style="width: 100px;" onchange="$(\'#mydialog #klasdflIKs img\').attr(\'src\', global_data.url+\'/images/static/options/icons/ranks/\'+$(this).val());">'; // ICONO
		foreach($iranks AS $ir){
			if($tsRn['icono'] == $ir){ $dkrklw = 'selected="selected"'; }else{ $dkrklw = ''; }
		$eran .= '<option value="'.$ir.'" '.$dkrklw.'>'.$ir.'</option>';
		}
		$eran .= '</select></td></tr>'; // ICONO
		$eran .= '<tr><td>Color</td><td><input type="text" name="co" style="color:'.$tsRn['color'].';" value="'.$tsRn['color'].'" /></td></tr>'; // COLOR
		$dataRkfLEK1 = ($tsRn['r_mod1'] == 1) ? 'selected="selected"' : '';
		$dataRkfLEK2 = ($tsRn['r_mod1'] == 2) ? 'selected="selected"' : '';
		$dataRkfLEK3 = ($tsRn['r_mod1'] == 3) ? 'selected="selected"' : '';
		$dataRkfLEK4 = ($tsRn['r_mod1'] == 4) ? 'selected="selected"' : '';
		$eran .= '<tr><td>Tipo</td><td><select name="tipu">
		<option>Tipo de usuario</option>
		<option value="1" '.$dataRkfLEK1.'>Usuario promedio</option>
		<option value="2" '.$dataRkfLEK2.'>Moderador</option>
		<option value="3" '.$dataRkfLEK3.'>Administrador</option>
		<option value="4" '.$dataRkfLEK4.'>V.I.P (especial)</option>
		</select></td></tr>'; // MODERADOR, ADMIN o USUARIO
		$datalKAmkleqk1 = ($tsRn['r_mod2'] == 1) ? 'selected="selected"' : '';
		$datalKAmkleqk2 = ($tsRn['r_mod2'] == 2) ? 'selected="selected"' : '';
		$datalKAmkleqk3 = ($tsRn['r_mod2'] == 3) ? 'selected="selected"' : '';
		$eran .= '<tr><td>Lugar</td><td><input type="hidden" name="typ" value="'.$getActaa.'" /><select name="dondu">
		<option>Lugar...</option>
		<option value="1" '.$datalKAmkleqk1.'>Ningun lugar</option>
		<option value="2" '.$datalKAmkleqk2.'>Global</option>
		<option value="3" '.$datalKAmkleqk3.'>Noticias</option>
		</select></td></tr>'; // ADMOD EN "?"
		$DatoRstrcs1 = ($tsRn['admin_juegos'] == 1) ? 'selected="selected"' : '';
		$DatoRstrcs2 = ($tsRn['admin_juegos'] == 2) ? 'selected="selected"' : '';
		$DatoRstrcs3 = ($tsRn['admin_juegos'] == 3) ? 'selected="selected"' : '';
		$DatoRstrcs4 = ($tsRn['admin_juegos'] == 4) ? 'selected="selected"' : '';
		$eran .= '<tr><td>Restricci&oacute;n</td><td><select name="perm">
		<option>Restricci&oacute;n</option>
		<option value="1" '.$DatoRstrcs1.'>Temas/Notas</option>
        <option value="2" '.$DatoRstrcs2.'>Comentarios</option>
        <option value="3" '.$DatoRstrcs3.'>Bworts</option>
        <option value="4" '.$DatoRstrcs4.'>Interacciones</option>
		</select><input type="hidden" name="a" value="'.$getaa.'"" /></td></tr>'; // RESTRICCIÓN PARA CONSEGUIRLO
		$eran .= '<tr><td>Dato o cantidad</td><td><input type="text" name="cant" value="'.$tsRn['mod_new'].'" /></td></tr>'; // VALOR DE LA RESTRICCIÓN
		$eran .= '</tbody></table></div>';
		echo $eran;
		break;
		case 'mod-nservicio':
        include("../class/c.hosting.php");
	    $tsHosting =& tsHosting::getInstance();
	    echo $tsHosting->newservicio();
		break;
		case 'mod-emot':
		$type = $w->setSecure($_POST['t']);
		$id = $w->setSecure($_POST['id']);
        echo $tsMod->emot($type, $id);
		break;
		case 'mod-tienda':
		$actt = $w->setSecure($_POST['tt']);
        include('../class/c.tienda.php');
        $tsTienda = new tsTienda;
        if(empty($actt)){ echo '0: Define una acción.';
        }elseif($actt == 1 && !empty($_POST['type'])){ echo $producto = $tsTienda->nuevoProducto();
        }elseif($actt == 2){ if(!empty($_POST['type'])) echo $producto = $tsTienda->editProducto((int)$_POST['id']);
        }elseif($actt == 3){ echo $producto = $tsTienda->delProducto(); }
		break;
		case 'mod-users':
		$idadminu = $w->setSecure($_POST['id']);
        echo $tsMod->loadusersa($idadminu, 'edit');
		break;
		case 'mod-eusers':
		$getaa = $w->setSecure($_POST['a']);
		$getActaa = $w->setSecure($_POST['act']);
		$tsIn = $tsMod->loadusersa($getaa, 'display');
		$referidode = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE referido='".$tsIn['identi']."'"));
		$eran = '<div id="userdit" class="hidden" style="width:500px;height:370px;overflow-y:auto;overflow-x:hidden;">';
		$eran .= '<h3>Editar usuario: @'.$tsIn['usuario_nombre'].'</h3>';
		$eran .= '<table class="table" width="100%"><tbody>';
		$eran .= '<tr><td>Nick</td><td><input type="text" name="nm" value="'.$tsIn['usuario_nombre'].'" /></td></tr>'; // Nick
		$eran .= '<tr><td>Worts/Puntos</td><td><span class="color_gray" style="font-size:15px;">$ '.$tsIn['worts'].'</span></td></tr>'; // Correo
		$eran .= '<tr><td>Nombres</td><td><input type="text" name="nmo" value="'.$tsIn['name_original'].'" /><input type="text" name="ap" value="'.$tsIn['ap_original'].'" /></td></tr>'; // Nombres (nombre/s y apellido/s)
		$eran .= '<tr><td>Referido de</td><td><input type="text" name="punt" value="'.$referidode['usuario_nombre'].'" /></td></tr>'; // Referido de
		$eran .= '<tr><td>Correo</td><td><input type="text" name="cor" value="'.$tsIn['usuario_email'].'" /></td></tr>'; // Correo
		$isHomMujray = ($tsIn['user_sexo'] == 0) ? 'selected="selected"' : '';
		$isHomMujray1 = ($tsIn['user_sexo'] == 1) ? 'selected="selected"' : '';
		$eran .= '<tr><td>Sexo</td><td><select name="ssx">
		<option value="0" '.$isHomMujray.'>Hombre</option>
		<option value="1" '.$isHomMujray1.'>Mujer</option>
		</select></td></tr>'; // Correo
		$eran .= '</tbody></table></div>';
		echo $eran;
		break;
		case 'mod-config':
        echo $tsMod->loadConfig();
		break;
        default:
            die('0: Este archivo no existe.');
        break;
	    }