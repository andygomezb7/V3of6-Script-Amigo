<?php 
/**
 * @name    foro.php
 * @author  Wortit Developers | Powered by Andy Gómez
**/
/**********************************\

*	(VARIABLES POR DEFAULT)		*

\*********************************/

	$tsPage = "foro";	// tsPage.tpl -> PLANTILLA PARA MOSTRAR CON ESTE ARCHIVO.

	$tsLevel = 0;		// NIVEL DE ACCESO A ESTA PAGINA. => VER FAQs

	$tsAjax = empty($_GET['ajax']) ? 0 : 1; // LA RESPUESTA SERA AJAX?
	
	$tsContinue = true;	// CONTINUAR EL SCRIPT
	
/*++++++++ = ++++++++*/

	include "../../header.php"; // INCLUIR EL HEADER
$u = $wuser->loadUser($_SESSION['uid']);
	$tsTitle = $w->settings['name'].' - '.$w->settings['lema']; 	// TITULO DE LA PAGINA ACTUAL

/*++++++++ = ++++++++*/
    $action = htmlspecialchars($_GET['action']);
	$act = htmlspecialchars($_GET['act']);	
	// VERIFICAMOS EL NIVEL DE ACCSESO ANTES CONFIGURADO
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1){	
		$tsPage = 'aviso';
		$tsAjax = 0;
		$smarty->assign("tsAviso",$tsLevelMsg);
		//
		$tsContinue = false;
	}
	//
	if($tsContinue){
		
/**********************************\

* (VARIABLES LOCALES ESTE ARCHIVO)	*

\*********************************/

	include("../class/c.comunidades.php");
	$tsCom =& tsCom::getInstance();	

/**********************************\

*	(INSTRUCCIONES DE CODIGO)		*

\*********************************/

$tsUrl = $w->settings['direccion_url'].'/foro/';
$tsBodyp = $w->settings['name']." | Foros - Comparte contenido de todo tipo, encuentralo a la vez...";
$tsBodyi = $w->settings['direccion_url'].'/images/avatar/group2.png';
		
	if($action == '' || $action == 'home') {
		$w->visitasAdd(1, 16);
		$temas = $tsCom->getLastTemas($act);
		// ULTIMOS TEMAS
		$smarty->assign("tsLastTemas",$temas);
		// PAGINAS
		$smarty->assign("tsPages",$temas['pages']);
		// CATEGORIAS
		$smarty->assign('tsCats',$tsCom->getCats());
        // NEW FORO
        $smarty->assign("ultCats", $tsCom->getLastCatsHome());
		// ESTADISTICAS
		$smarty->assign("tsStats",$tsCom->getStats());
		// COMENTARIOS RECIENTES
    	$smarty->assign("tsRespuestas",$tsCom->getComensRecent());
		// POPULARES
    	$smarty->assign("tsPopulares",$tsCom->getPopulares());
		// COMUNIDADES RECIENTES
		$smarty->assign('tsRecientes',$tsCom->getComRecentHome());
	} elseif($action == 'crear') {
		$w->visitasAdd(1, 37);
		$smarty->assign("notsUrl", "no lo quiero");
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		if($_SESSION['uid']) {
			if(isset($_POST['nombre'])) {
				$new_com = $tsCom->nueva_comunidad();
				if($new_com > 0) {
					$tsPage = 'aviso';
					$smarty->assign("tsAviso",array('titulo' => 'YEAH!', 'mensaje' => 'El mundo entero est&aacute; ante la presencia de una nueva comunidad. Felicitaciones!', 'but' => 'Ir a mi nueva comunidad!', 'link' => "{$w->settings['direccion_url']}/foro/".$w->wrecorte($_POST['ncorto'])."/"));
				} else $tsError = $new_com;
			}
		} else return 'Debes ser miembro para poder crear foros.';
		// CATEGORIAS
		$smarty->assign('tsCats',$tsCom->getCats());
		// PAISES
		include('../ext/datos.php');
		$smarty->assign("tsPaises",$tsPaises);
	} elseif($action == 'buscar') {
		$w->visitasAdd(1, 39);
		$smarty->assign("notsUrl", "no lo quiero");
		// Nuevo titulo
		$tsTitle = 'Busqueda en foros | '.$w->settings['name'];
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		// CATEGORIAS
		$smarty->assign('tsCats',$tsCom->getCats());
		$smarty->assign('tipo',$_GET['tipo']);
		$smarty->assign('q',$_GET['q']);
		$smarty->assign('cat',$_GET['cat']);
		$smarty->assign('ord',$_GET['ord']);
		$smarty->assign('comid',$_GET['comid']);
		if(!empty($_GET['q']) && strlen($_GET['q']) > 3) {
			if(!empty($_GET['tipo'])) $smarty->assign('tsQuery',$tsCom->getQueryTipo($_GET['tipo']));
			else $smarty->assign('tsQuery',$tsCom->getQuery());
		}
	} elseif($action == 'dir') {
		$w->visitasAdd(1, 40);
		$smarty->assign("notsUrl", "no lo quiero");
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		// Nuevo titulo
		$tsTitle = 'Directorio de foros - '.$w->settings['name'];
    	$smarty->assign('tsDir',$tsCom->getDirectorio());
		$smarty->assign('tsPaises',$tsCom->getDirPaises());		 
	} elseif($action == 'mis-foros') {
		$w->visitasAdd(1, 38);
		$smarty->assign("notsUrl", "no lo quiero");
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		// Nuevo titulo
		$tsTitle = 'Mis Foros | '.$w->settings['name'];
		$smarty->assign('tsMisComus',$tsCom->getMisComunidades());
	} elseif($action == 'mod-history') {
		$w->visitasAdd(1, 42);
		$smarty->assign("notsUrl", "no lo quiero");
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		// Nuevo titulo
		$tsTitle = 'Historial de moderaci&oacute;n | '.$w->settings['name'];
		$smarty->assign('tsHistorial',$tsCom->getHistorial());
	} elseif($action == 'favoritos') {
		$w->visitasAdd(1, 43);
		$smarty->assign("notsUrl", "no lo quiero");
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		if($_SESSION['uid']) {
			// Nuevo titulo
			$tsTitle = 'Mis temas favoritos - '.$w->settings['name'];
			$smarty->assign('tsFavoritos',$tsCom->getFavoritos());
		} else $tsError = 'Solo los usuarios registrados pueden acceder.';
	} elseif($action == 'borradores') {
		$w->visitasAdd(1, 44);
		$smarty->assign("notsUrl", "no lo quiero");
		$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
		if($_SESSION['uid']) {
			// Nuevo titulo
			$tsTitle = 'Borradores - '.$w->settings['name'];
			$smarty->assign('tsBorradores',$tsCom->getBorradores());
		} else $tsError = 'Solo los usuarios registrados pueden acceder.';
	} else {
		$get_com = $tsCom->get_comunidad($action);
		$smarty->assign("tsCom",$get_com['com']);
		if(is_array($get_com)) {
			if($act == 'editar') {
				$w->visitasAdd(1, 33);
				if(isset($_POST['nombre'])) {
					$edit_com = $tsCom->editar_comunidad($get_com['com']['c_id']);
					if($edit_com > 0) {
						$w->redirectTo("{$w->settings['direccion_url']}/foro/".$action."/?edit=ok");
					} else $tsError = $edit_com;
				} else {
					$datos = $tsCom->datosCom($get_com['com']['c_id']);
					if(is_array($datos)) {
						$smarty->assign("tsDato",$datos);
						// CATEGORIAS
						$smarty->assign('tsCats',$tsCom->getCats());
						// SUBCATEGORIAS
						$sub = $tsCom->getSubcats($datos['c_categoria']);
						$smarty->assign('tsSubcats',$sub);
						// PAISES
						include('../ext/datos.php');
						$smarty->assign("tsPaises",$tsPaises);
						// AHORA LA ACCION ES "EDITAR"			
						$action = 'editar';
					} else $tsError = $datos;
				}
			} elseif($act == 'agregar') {
				$nombre = $action;
				$action = 'agregar';
				$smarty->assign("notsUrl", "no lo quiero");
				$w->visitasAdd(1, 31);
				if(!$tsCom->es_miembro($get_com['com']['c_id'])) {$tsError = 'Tienes que ser miembro para realizar esta operaci&oacute;n.';};
				if(!$tsCom->verify_permisos($get_com['com']['c_id'])) {$tsError = 'Tu rango no te permite realizar esta operaci&oacute;n.';};
				if(isset($_GET['bid'])) {
					$bid = $w->setSecure($_GET['bid']);
					$datos = $tsCom->datosBorrador($get_com['com']['c_id'], $bid);
					$smarty->assign("tsTema",$datos);
				}
				
					if(isset($_POST['titulo'])) {

						$tsCom->nuevo_tema($get_com['com']['c_id']);

							$tsPage = 'aviso';
							$smarty->assign("tsAviso",array('titulo' => 'Exito', 'mensaje' => 'El tema <strong>'.$_POST['titulo'].'</strong> ha sido creado con &eacute;xito', 'but' => 'Ir al tema', 'link' => "{$w->settings['direccion_url']}/foro/".$nombre."/".$new_tema."/".$w->setSEO($_POST['titulo']).".html"));

					}
				
			} elseif($act == 'tema') {
				$action = 'tema';
				$smarty->assign("notsUrl", "no lo quiero");
				$tema = $tsCom->getTema();
				$w->visitasAdd($tema['t_id'], 6);
				if(is_array($tema)) {
				$tsBodyp = $w->wrecorte($tema['tema']['ct_cuerpo'], 180);;
					// Nuevo titulo
					$tsTitle = $tema['tema']['t_titulo'].' - '.$w->settings['name'];
					$smarty->assign("tsTema",$tema['tema']);
					$smarty->assign("tsAutor",$tema['autor']);
					$smarty->assign("tsRespuestas",$tsCom->getRespuestas());
					$smarty->assign("tsLastRespuestas",$get_com['respuestas']);
					$smarty->assign("masdecomun", $tema['comun']['temas']);
				} else $tsError = $tema;
			}elseif($act == 'editar-tema') {
				$temaid = $w->setSecure($_GET['temaid']);
				$smarty->assign("notsUrl", "no lo quiero");
				$w->visitasAdd($temaid, 32);
				if(isset($_POST['titulo'])) {
					$edit_tema = $tsCom->editar_tema($get_com['com']['c_id'], $temaid);
					if($edit_tema) {
						$datos = $tsCom->datosTema($get_com['com']['c_id'], $temaid);
						$wrecortetitl = $w->setSEO($datos['t_titulo']);
						$w->redirectTo("".$w->settings['direccion_url']."/foro/".$action."/".$_POST['temaid']."/".$wrecortetitl.".html");
					} else $tsError = $edit_tema;
				} else {
					$datos = $tsCom->datosTema($get_com['com']['c_id'], $temaid);
					$smarty->assign("tsTema",$datos);		
					$action = 'editar-tema';
				}
			} elseif($act == 'miembros') {
				$action = 'miembros';
				$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
				$smarty->assign("tsMiembros",$tsCom->getMiembros($get_com['com']['c_id']));
				$w->visitasAdd($get_com['com']['c_id'], 34);
				$smarty->assign("tsUltimos",$get_com['miembros']);
				$smarty->assign("notsUrl", "no lo quiero");
			} elseif($act == 'mod-history') {
				$action = 'com-mod-history';
				$smarty->assign("tsModHistory",$tsCom->getComModHistory($get_com['com']['c_id']));
				$w->visitasAdd($get_com['com']['c_id'], 35);
				$smarty->assign("notsUrl", "no lo quiero");
			} else {
				// Nuevo titulo
				$tsUrl = $w->settings['direccion_url'].'/foro/'.$action.'/';
				$tsTitle = $get_com['com']['c_nombre'].' - '.$w->settings['name'];
				$w->visitasAdd($get_com['com']['c_id'], 36);
				$smarty->assign("tsTemas",$get_com['temas']);
				$smarty->assign("tsRespuestas",$get_com['respuestas']);
				$smarty->assign("tsMiembros",$get_com['miembros']);
				$smarty->assign("tsStaff",$get_com['staff']);
				$smarty->assign("tsTop",$get_com['top']);
				$smarty->assign("notsUrl", "no lo quiero");
			}
		} else $tsError = $get_com;
	}
	// HAY ERROR?
	if(!empty($tsError)) {
		$tsPage = 'aviso';
		$smarty->assign("tsAviso",array('titulo' => 'Error', 'mensaje' => $tsError, 'but' => 'Volver', 'link' => "javascript:history.back();"));	
	}
		
/**********************************\

* (AGREGAR DATOS GENERADOS | SMARTY) *

\*********************************/

	$smarty->assign("tsAction",$action); 
	$smarty->assign("tsAct",$act);
}

if(empty($tsAjax)) {	// SI LA PETICION SE HIZO POR AJAX DETENER EL SCRIPT Y NO MOSTRAR PLANTILLA, SI NO ENTONCES MOSTRARLA.

	$smarty->assign("tsTitle",$tsTitle);	// AGREGAR EL TITULO DE LA PAGINA ACTUAL
	$smarty->assign("tsUrl", $tsUrl);
	$smarty->assign("tsBodyp", $tsBodyp);
	$smarty->assign("tsBodyi", $tsBodyi);

	/*++++++++ = ++++++++*/
	include(TS_ROOT."/footer.php");
	/*++++++++ = ++++++++*/
}