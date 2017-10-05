<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Controlador AJAX
 *
 * @name    ajax.aula.php
 * @author  Wortit Developers | Powered by Andy Gómez
*/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'aula-regis' => array('n' => 2, 'p' => ''),
		'aula-form1' => array('n' => 2, 'p' => ''),
		'aula-form2' => array('n' => 2, 'p' => ''),
		'aula-form3' => array('n' => 2, 'p' => ''),
        'aula-form4' => array('n' => 2, 'p' => ''),
		'aula-geo' => array('n' => 2, 'p' => ''),
        'aula-verifi' => array('n' => 2, 'p' => ''),
	);

/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	// REDEFINIR VARIABLES
	$tsPage = 'php_files/p.files.'.$files[$action]['p'];
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
	include('datos.php');
	// CLASE
	require('../class/aulac.class.php');
	$tsAula =& tsAula::getInstance();
	// CODIGO
	switch($action){
		case 'aula-regis':
		$typeraula = $w->setSecure($_POST['t_a']);
		$keyraula = $w->setSecure($_POST['k_a']);
        echo $tsAula->registers($typeraula, $keyraula);
		break;
		case 'aula-form1':
		$tsPaises = mysql_query("SELECT * FROM u_paises");
        $f = '<div class="registro"><div class="student">';
        $f .= '<table width="474px"><tbody>';
        $f .= '<tr><td>Fecha de nacimiento</td><td>';
        $f .= '<select name="nc_dia"><option value="">Dia</option>';
        for($i = 1;$i <= 31; $i++){
        $f .= '<option value="'.$i.'">'.$i.'</option>';
        }
        $f .= '</select>';
        $f .= '<select name="nc_mes"><option value="">Mes</option>';
        $me = 1;foreach($tsMeces AS $mes){
        $f .= '<option value="'.$me.'">'.$mes.'</option>';
        $me++;
        }
        $f .= '</select>';
        $f .= '<select name="nc_anio"><option value="">A&ntilde;o</option>';
        for($anio = 1950;$anio <= 2014; $anio++){
        $f .= '<option value="'.$anio.'">'.$anio.'</option>';
        }
        $f .= '</select>';
        $f .= '</td></tr>';
        $f .= '<tr><td>Imagen de perfil</td><td><select name="img"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Portada de perfil</td><td><select name="port"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n</td><td><textarea name="desc_1"></textarea></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n corta</td><td><textarea name="desc_2"></textarea></td></tr>';
        $f .= '<tr><td>Establecimiento</td><td><input type="text" data-source="aula" class="autCmplt" name="es_ela" /></td></tr>';
        $f .= '<tr><td>Pa&iacute;s</td><td><select name="pas"><option value="">Selecciona tu Pa&iacute;s</option>';
        while($row = mysql_fetch_assoc($tsPaises)){ $f .= '<option value="'.$row['p_prefijo'].'">'.$row['p_opcion'].'</option>'; }
        $f .= '</select></td></tr>';
        //$f .= '<tr><td>Regi&oacute;n</td><td><select name="ciud"><option value="0">Region</option></select></td></tr>';
        $f .= '</tbody></table><input type="hidden" name="t_a" value="1" /><input type="hidden" name="k_a" value="STDN1_RGSTR_2_RGSTDINT" /></div></div>';
        $f .= '<script type="text/javascript" src="'.$w->settings['url'].'/js/modo/atcmpltVfre.js"></script><link rel="stylesheet" type="text/css" href="'.$w->settings['url'].'/css/modo/Aut.Cmplt.css">';
        echo $f;
		break;
		case 'aula-form2':
        $tsPaises = mysql_query("SELECT * FROM u_paises");
        $f = '<div class="registro"><div class="student">';
        $f .= '<table width="474px"><tbody>';
        $f .= '<tr><td>Fecha de nacimiento</td><td>';
        $f .= '<select name="nc_dia"><option value="">Dia</option>';
        for($i = 1;$i <= 31; $i++){
        $f .= '<option value="'.$i.'">'.$i.'</option>';
        }
        $f .= '</select>';
        $f .= '<select name="nc_mes"><option value="">Mes</option>';
        $me = 1;foreach($tsMeces AS $mes){
        $f .= '<option value="'.$me.'">'.$mes.'</option>';
        $me++;
        }
        $f .= '</select>';
        $f .= '<select name="nc_anio"><option value="">A&ntilde;o</option>';
        for($anio = 1950;$anio <= 2014; $anio++){
        $f .= '<option value="'.$anio.'">'.$anio.'</option>';
        }
        $f .= '</select>';
        $f .= '</td></tr>';
        $f .= '<tr><td>Imagen de perfil</td><td><select name="img"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Portada de perfil</td><td><select name="port"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n</td><td><textarea name="desc_1"></textarea></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n corta</td><td><textarea name="desc_2"></textarea></td></tr>';
        $f .= '<tr><td>Establecimiento</td><td><input type="text" data-source="aula" class="autCmplt" name="es_ela" /></td></tr>';
        $f .= '<tr><td>Pa&iacute;s</td><td><select name="pas"><option value="">Selecciona tu Pa&iacute;s</option>';
        while($row = mysql_fetch_assoc($tsPaises)){ $f .= '<option value="'.$row['p_prefijo'].'">'.$row['p_opcion'].'</option>'; }
        $f .= '</select></td></tr>';
        //$f .= '<tr><td>Regi&oacute;n</td><td><select name="ciud"><option value="0">Region</option></select></td></tr>';
        $f .= '</tbody></table><input type="hidden" name="t_a" value="2" /><input type="hidden" name="k_a" value="TEAHR1_RGSTR_2_RGSDTAHR" /></div></div>';
        $f .= '<script type="text/javascript" src="'.$w->settings['url'].'/js/modo/atcmpltVfre.js"></script><link rel="stylesheet" type="text/css" href="'.$w->settings['url'].'/css/modo/Aut.Cmplt.css">';
        echo $f;
		break;
		case 'aula-form3':
        $tsPaises = mysql_query("SELECT * FROM u_paises");
        $f = '<div class="registro"><div class="student">';
        $f .= '<table width="474px"><tbody>';
        $f .= '<tr><td>Nombre del establecimiento</td><td><input type="text" name="name" placeholder="Nombre..." /></td></tr>';
        $f .= '<tr><td>Fecha de nacimiento</td><td>';
        $f .= '<select name="nc_dia"><option value="">Dia</option>';
        for($i = 1;$i <= 31; $i++){
        $f .= '<option value="'.$i.'">'.$i.'</option>';
        }
        $f .= '</select>';
        $f .= '<select name="nc_mes"><option value="">Mes</option>';
        $me = 1;foreach($tsMeces AS $mes){
        $f .= '<option value="'.$me.'">'.$mes.'</option>';
        $me++;
        }
        $f .= '</select>';
        $f .= '<select name="nc_anio"><option value="">A&ntilde;o</option>';
        for($anio = 1950;$anio <= 2014; $anio++){
        $f .= '<option value="'.$anio.'">'.$anio.'</option>';
        }
        $f .= '</select>';
        $f .= '</td></tr>';
        $f .= '<tr><td>Imagen</td><td><select name="img"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Portada de perfil</td><td><select name="port"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n</td><td><textarea name="desc_1"></textarea></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n corta</td><td><textarea name="desc_2"></textarea></td></tr>';
        $f .= '<tr><td>Establecimiento</td><td><input type="text" data-source="aula" class="autCmplt" name="es_ela" /></td></tr>';
        $f .= '<tr><td>Pa&iacute;s</td><td><select name="pas" onchange="r_a.blur($(this));"><option value="">Selecciona tu Pa&iacute;s</option>';
        while($row = mysql_fetch_assoc($tsPaises)){ $f .= '<option value="'.$row['p_prefijo'].'">'.$row['p_opcion'].'</option>'; }
        $f .= '</select></td></tr>';
        $f .= '<tr><td>Regi&oacute;n</td><td><select name="ciud"><option value="0">Region</option></select></td></tr>';
        $f .= '<tr><td>Direcci&oacute;n del establecimiento</td><td><input type="text" name="loc" placeholder="Localidad, Casa" /></td></tr>';
        $f .= '</tbody></table><input type="hidden" name="t_a" value="3" /><input type="hidden" name="k_a" value="STBCMT1_RGSTR_2_RGSTRDSTBCMNT" /></div></div>';
        $f .= '<script type="text/javascript" src="'.$w->settings['url'].'/js/modo/atcmpltVfre.js"></script><link rel="stylesheet" type="text/css" href="'.$w->settings['url'].'/css/modo/Aut.Cmplt.css">';
        echo $f;
		break;
        case 'aula-form4':
                $tsPaises = mysql_query("SELECT * FROM u_paises");
                $myclasses = mysql_query("SELECT am.*, al.* FROM u_aula_members AS am LEFT JOIN u_aula AS al ON am.aul_mem_escuela_col = al.aul_id WHERE am.aul_mem_type='4' AND am.aul_mem_verifi='Verifi_Ok'");
        $f = '<div class="registro"><div class="student">';
        $f .= '<table width="474px"><tbody>';
        $f .= '<tr><td>Estado</td><td><select name="state"><option>Estado de la clase</option><option value="1">Activa</option><option value="2">En espera</option><option value="3">Desactivada</option></select></td></tr>';
        $f .= '<tr><td>Nombre</td><td><input type="text" name="name" placeholder="Nombre..." /></td></tr>';
        $f .= '<tr><td>Imagen de perfil</td><td><select name="img"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Portada de perfil</td><td><select name="port"><option value="">Selecciona una opci&oacute;n</option><option value="1">Imagen por defecto</option><option value="2">Imagen de mi perfil</option></select></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n</td><td><textarea name="desc_1"></textarea></td></tr>';
        $f .= '<tr><td>Descripci&oacute;n corta</td><td><textarea name="desc_2"></textarea></td></tr>';
        $f .= '<tr><td>Establecimiento</td><td><select data-source="aula" class="autCmplt" name="es_ela"><option>Selecciona el establecimiento</option>';
        while($row = mysql_fetch_assoc($myclasses)){
        $f .= '<option value="'.$row['aul_id'].'">'.$row['aul_name'].'</option>';
        }
        $f .= '</select></td></tr>';
        $f .= '<tr><td>Direcci&oacute;n del establecimiento</td><td><input type="text" name="loc" placeholder="Localidad, Casa" /></td></tr>';
        $f .= '</tbody></table><input type="hidden" name="t_a" value="4" /><input type="hidden" name="ttip" value="1"/><input type="hidden" name="k_a" value="CLSRKIND_RGSTR_2_RGSTRCLSKIND" /></div></div>';
        $f .= '<script type="text/javascript" src="'.$w->settings['url'].'/js/modo/atcmpltVfre.js"></script><link rel="stylesheet" type="text/css" href="'.$w->settings['url'].'/css/modo/Aut.Cmplt.css">';
        echo $f;
        break;
		case 'aula-geo':
		//<--
	    include("geodata.php");
		$pais = htmlspecialchars($_GET['pais_code']);
		//
		if($pais) $html = '1: '; else $html = '0: El campo <b>pais_code</b> es requerido para esta operacion';
		foreach($estados[$pais] as $key => $estado){ $html .= '<option value="'.($key+1).'">'.$estado.'</option>'."\n"; }
		//
		if(strlen($html) > 3) echo $html; else echo '0: Código de pais incorrecto.';
		//-->
		break;
		case 'aula-verifi':
        $typeverifi = $w->setSecure($_POST['ty']);
        $contentverifi = $w->setSecure($_POST['cont']);
        if($typeverifi == 1){
        $vacontinuesco = mysql_num_rows(mysql_query("SELECT * FROM u_aula_members WHERE aul_mem_name='".$contentverifi."'"));
        if($vacontinuesco >= 1){
        echo '0: El nombre no esta disponible. <a target="_blank" href="'.$w->settings['url'].'/int/aula/'.$contentverifi.'/">Ver miembro con este nombre</a>';
        }else{ echo '1: El nombre es valido.'; }
        }elseif($typeverifi == 2){
        $vacontinuesco = mysql_num_rows(mysql_query("SELECT * FROM u_aula WHERE aul_name='".$contentverifi."'"));
        if($vacontinuesco >= 1){
        echo '0: El nombre no esta disponible. <a target="_blank" href="'.$w->settings['url'].'/int/aula/'.$contentverifi.'/">Ver miembro con este nombre</a>';
        }else{ echo '1: El nombre es valido.'; }
        }else{ echo '0: No se definio nada.'; }
		break;
		default:
        echo '0: El archivo no existe.';
		break;
	}