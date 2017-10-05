<?php   if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/** 
*   Funciones Globales 
*
*   @name c.mod.php
*   @author Wortit Developers
*/
class tsmod{

   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsmod();
        }
        return $instance;
    }

/******* HOME CLASS *********/

/************************************** NOTICIAS PARA EL STAFF **********************************/
	
	/*
    geNoticiasStaff()
    */
    function geNoticiasStaff()
    {
        
        //
        $query = mysql_query('SELECT * FROM w_nstaff WHERE n_id >0 AND n_active= 1 ORDER BY n_id DESC');
        //
        $data = result_array($query);
        //
        return $data;
    }

	/********************************************* DENUNCIAS ************************************/
	
	function loadDenPn($type){
	switch ($type)
	{
	case 'comunidades':
                $query = mysql_query('SELECT r.*, SUM(d_total) AS total, c.c_id, c.c_nombre, c.c_nombre_corto, c.c_estado, u.usuario_id, u.usuario_nombre FROM w_denuncias AS r LEFT JOIN c_comunidades AS c ON r.obj_id = c.c_id LEFT JOIN usuarios AS u ON c.c_autor = u.usuario_id  WHERE d_type = \'5\' && c.c_estado < 2 GROUP BY r.obj_id ORDER BY total DESC, r.d_date DESC');
                $data = result_array($query);
                
                break;
			case 'temas':
                $query = mysql_query('SELECT r.*, SUM(d_total) AS total, t.t_id, t.t_titulo, t.t_estado, c.c_nombre_corto, u.usuario_id, u.usuario_nombre FROM w_denuncias AS r LEFT JOIN c_temas AS t ON r.obj_id = t.t_id LEFT JOIN c_comunidades AS c ON c.c_id = t.t_comunidad LEFT JOIN usuarios AS u ON t.t_autor = u.usuario_id  WHERE d_type = \'6\' && t.t_estado < 2 GROUP BY r.obj_id ORDER BY total DESC, r.d_date DESC');
                $data = result_array($query);
                
                break;
	}
	return $data;
	}
	
	
	/****************************************** EXTRA *************************************/
	
	function getContenido(){
	global $w;
	    $texto = $w->setSecure($_GET['texto']);
        $tipo = intval($_GET['t']);
        $metodo = intval($_GET['m']);
    if ($metodo == 1){
            $met = 'LIKE \'%' . $texto . '%\'';
    }else{
            $met = ' = \'' . $texto . '\'';
    }
        //

	//
        $query = mysql_query('SELECT c.c_id, c.c_autor, c.c_nombre, c.c_nombre_corto, c.c_fecha, c.c_ip, u.user_name FROM c_comunidades AS c LEFT JOIN u_miembros AS u ON c.c_autor = u.user_id WHERE ' .
            ($tipo == 1 ? 'c.c_ip ' . $met . '' : 'c.c_nombre ' . $met));
        $data['comunidades'] = result_array($query);
        $data['c_total'] = count($data['comunidades']);
		
		//
        $query = mysql_query('SELECT t.t_id, t.t_autor, t.t_titulo, c.c_nombre_corto, t.t_fecha, t.t_ip, u.user_name FROM c_temas AS t LEFT JOIN c_comunidades AS c ON c.c_id = t.t_comunidad LEFT JOIN u_miembros AS u ON t.t_autor = u.user_id WHERE ' .
            ($tipo == 1 ? 't.t_ip ' . $met . '' : 't.t_titulo ' . $met .
            ' OR t.t_cuerpo ' . $met));
        $data['temas'] = result_array($query);
        $data['t_total'] = count($data['temas']);
		
		//
        $query = mysql_query('SELECT r.r_id, r.r_autor, r.r_body, r.r_fecha, r.r_ip, t.t_id, t.t_titulo, c.c_nombre_corto, u.user_name FROM c_respuestas AS r LEFT JOIN c_temas AS t ON t.t_id = r.r_tema LEFT JOIN c_comunidades AS c ON c.c_id = t.t_comunidad LEFT JOIN u_miembros AS u ON r.r_autor = u.user_id WHERE ' .
            ($tipo == 1 ? 'r.r_ip ' . $met . '' : 'r.r_body ' . $met));
        $data['respuestas'] = result_array($query);
        $data['c_t_total'] = count($data['respuestas']);
	
	return $data;
	}
	
	
	function rebootComunidad($comid) {
        global $wuser;
        if ($wuser->is_admod) {
            if (mysql_query('DELETE FROM `w_denuncias` WHERE `obj_id` = \''.(int)$comid.'\' AND `d_type` = \'5\'')) {
                mysql_query('UPDATE c_comunidades SET c_estado = \'0\' WHERE c_id = \''.(int)$comid.'\'');
                return '1: Denuncia eliminada';
            } else return '0: No se pudo eliminar la denuncia';
        } else return '0: No contin&uacute;e por aqu&iacute;.';
    }
	function rebootTema($temaid) {
        global $wuser;
        if ($wuser->is_admod) {
            if (mysql_query('DELETE FROM `w_denuncias` WHERE `obj_id` = \''.(int)$temaid.'\' AND `d_type` = \'6\'')) {
                mysql_query('UPDATE c_temas SET t_estado = \'0\' WHERE t_id = \''.(int)$temaid.'\'');
                return '1: Denuncia eliminada';
            } else return '0: No se pudo eliminar la denuncia';
        } else return '0: No contin&uacute;e por aqu&iacute;.';
    }
	
	public function deleteComunidad($comid){
        global $w, $tsWeb, $wuser;
        if ($wuser->is_admod == 1) {
            // RAZON
            $razon = $w->setSecure($_POST['razon']);
            $razon_desc = $w->setSecure($_POST['razon_desc']);
            $razon_db = ($razon != 7) ? $razon : $razon_desc;
            //
            if (mysql_query('UPDATE c_comunidades SET c_estado = \'1\' WHERE c_id = \''.$comid.'\'')) {
				// ENVIAR AVISO
				$query = mysql_query('SELECT c.c_autor, c.c_nombre, u.user_name FROM c_comunidades AS c LEFT JOIN u_miembros AS u ON c.c_autor = u.user_id WHERE c.c_id = \''.(int)$comid .'\' LIMIT 1');
				$data = mysql_fetch_assoc($query);
				if ($data['c_autor'] != $_SESSION['uid']){                    
                    // RAZON
                    if (is_numeric($razon_db)){
                        include (TS_EXTRA . 'datos.php');
                        $razon_db = $tsDenuncias['comunidades'][$razon_db];
                    }
                    // AVISO
                    $aviso = 'Hola <b>' . $data['user_name'] . "</b>\n\n Lamento contarte que tu comunidad titulada <b>" .
                    $data['c_nombre'] . "</b> ha sido eliminada.\n\n Causa: <b>" . $razon_db . "</b>\n\n Te recomendamos leer el <a href=\"" .
                    $w->settings['direccion_url'] . "/pages/protocolo/\">Protocolo</a> para evitar futuras sanciones.\n\n Muchas gracias por entender!";
                    $status = $tsWeb->setAviso($data['c_autor'], 'Comunidad eliminada', $aviso, 1);
                }
                // ELIMINAR DENUNCIAS
                mysql_query('DELETE FROM `w_denuncias` WHERE `obj_id` = \''.$comid.'\' AND `d_type` = \'5\'');
                $this->setHistory('borrar', 'comunidad', $comid);
                return '1: La comunidad ha sido eliminada.';
            } else return '0: La comunidad NO pudo ser eliminada.';
        } else return '0: Solo los administradores pueden borrar una comunidad';
    }
	
	public function deleteTema($temaid) {
        global $w, $tsWeb, $wuser;
        if ($wuser->is_admod) {
            // RAZON
            $razon = $w->setSecure($_POST['razon']);
            $razon_desc = $w->setSecure($_POST['razon_desc']);
            $razon_db = ($razon != 9) ? $razon : $razon_desc;
            //
            if (mysql_query('UPDATE c_temas SET t_estado = \'1\' WHERE t_id = \''.$temaid.'\'')) {
				// ENVIAR AVISO
				$query = mysql_query('SELECT t.t_autor, t.t_titulo, u.user_name FROM c_temas AS t LEFT JOIN u_miembros AS u ON t.t_autor = u.user_id WHERE t.t_id = \''.(int)$temaid.'\' LIMIT 1');
				$data = mysql_fetch_assoc($query);
				if ($data['t_autor'] != $_SESSION['uid']) {                    
                    // RAZON
                    if (is_numeric($razon_db)) {
                        include (TS_EXTRA . 'datos.php');
                        $razon_db = $tsDenuncias['temas'][$razon_db];
                    }
                    // AVISO
                    $aviso = 'Hola <b>' . $data['user_name'] . "</b>\n\n Lamento contarte que tu tema titulado <b>" .
                    $data['t_titulo'] . "</b> ha sido eliminado.\n\n Causa: <b>" . $razon_db . "</b>\n\n Te recomendamos leer el <a href=\"" .
                    $w->settings['direccion_url'] . "/pages/protocolo/\">Protocolo</a> para evitar futuras sanciones.\n\n Muchas gracias por entender!";
                    $status = $tsWeb->setAviso($data['t_autor'], 'Tema eliminado', $aviso, 1);
                }
                // ELIMINAR DENUNCIAS
                mysql_query('DELETE FROM `w_denuncias` WHERE `obj_id` = \''.$temaid.'\' AND `d_type` = \'6\'');
                return '1: El tema ha sido eliminado.';
            } else return '0: El tema NO pudo ser eliminado.';
        } else return '0: No contin&uacute;e por aqu&iacute;.';
    }

	public function getTempelera() {
        global $wuser, $w;
        //
        $max = 20; // MAXIMO A MOSTRAR
        $limit = $w->setPageLimit($max, true);

        // PAGINAS
        $query = mysql_query('SELECT COUNT(*) FROM c_temas AS t LEFT JOIN usuarios AS u ON u.usuario_id = t.t_autor LEFT JOIN c_historial AS h ON h.h_for = t.t_id WHERE h.h_type = \'2\' AND t.t_estado = \'1\'');

        list($total) = mysql_fetch_row($query);
        
        $data['pages'] = $w->pageIndex($w->settings['direccion_url'] .
            "/mod/tempelera?", $_GET['s'], $total, $max);
        //

        $querys = mysql_query('SELECT t.*, c.*, u.*, h.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN usuarios AS u ON t.t_autor = u.usuario_id LEFT JOIN c_historial AS h ON t.t_id = h.h_for WHERE h.h_type = \'2\' AND t.t_estado = \'1\' LIMIT ' .
            $limit);
        //
        $data['datos'] = result_array($querys);
        
        $i = 0;
        foreach($data as $row){
           $data['datos'][$i]['mod_name'] = $wuser->loadUserN($row['h_mod']);
            $i++;
        }
        //
        return $data;
    }

    /****************** ADMINISTRACIÓN DE COMUNIDADES ******************/

    function GetAdminComus()
    {
        global $w;
        //
        $max = 20; // MAXIMO A MOSTRAR
        $limit = $w->setPageLimit($max, true);
        //
        $query = mysql_query('SELECT u.usuario_nombre, c.* FROM c_comunidades AS c LEFT JOIN usuarios AS u ON c.c_autor = u.usuario_id ORDER BY c.c_fecha DESC LIMIT '.$limit);
        //
        $data['data'] = result_array($query);

        // PAGINAS
        $query = mysql_query('SELECT COUNT(*) FROM c_comunidades WHERE c_id > \'0\'');
        list($total) = mysql_fetch_row($query);

        $data['pages'] = $w->pageIndex($w->settings['url']."/mod/comus?", $_GET['s'], $total, $max);
        //
        return $data;
    }
    
    // ADMINISTRAR TEMAS POR COMUNIDAD
    function GetAdminTemas()
    {
        global $w;
        //
        $comid = $w->setSecure($_GET['comid']);
        $max = 20; // MAXIMO A MOSTRAR
        $limit = $w->setPageLimit($max, true);
        //
        $query = mysql_query('SELECT u.usuario_name, c.c_nombre_corto, t.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON c.c_id = t.t_comunidad LEFT JOIN usuarios AS u ON t.t_autor = u.usuario_id WHERE t.t_comunidad = \''.(int)$comid.'\'ORDER BY t.t_fecha DESC LIMIT '.$limit);
        //
        $data['data'] = result_array($query);
        // NOMBRE DE LA COMUNIDAD
        $com = mysql_fetch_assoc(mysql_query('SELECT c_nombre FROM c_comunidades WHERE c_id = \''.(int)$comid.'\' LIMIT 1'));
        $data['c_nombre'] = $com['c_nombre'];
        // PAGINAS
        $query = mysql_query('SELECT COUNT(*) FROM c_temas WHERE t_comunidad = \''.(int)$comid.'\'');
        list($total) = mysql_fetch_row($query);

        $data['pages'] = $w->pageIndex($w->settings['url']."/mod/comus?act=temas&comid=".$_GET['comid'], $_GET['s'], $total, $max);
        //
        return $data;
    }
	

/******** FIN CLASS ********/
}

?>