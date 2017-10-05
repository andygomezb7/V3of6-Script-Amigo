<?php
 if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    vcard.class.php
 * @author  Wortit Developers
 */
class tsVcard{

			// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new tsVcard();
    	}
		return $instance;
	}

	    /**
     * @name getVCard
     * @access public
     * @param int
     * @return array
     * @info OBTIENE LA INFORMACION DE UN USUARIO PARA UNA VCARD
     */
    public function getVCard($user_id){
        # GLOBALES
        global $w;
        # LOCALES
        $is_online = (time() - ($w->settings['c_last_active'] * 60));
        $is_inactive = (time() - (($w->settings['c_last_active'] * 60) * 2)); // DOBLE DEL ONLINE
		// INFORMACION GENERAL
		$query = mysql_query('SELECT * FROM usuarios WHERE usuario_id = \''.$user_id.'\'');
		$data = mysql_fetch_assoc($query);
        
		if($data['w_avatar'] == NULL){
		$data['avatar'] = $w->settings['direccion_url'].'/images/avatar/group.png';
		}else{
		$data['avatar'] = $data['w_avatar'];
		}
		
        $data['p_cabecera'] = $data['p_cabecera'];

		//  STATS
		$query =  mysql_query('SELECT u.*, r.* FROM usuarios AS u LEFT JOIN u_rangos AS r ON u.rango = r.rango_id WHERE u.usuario_id = \''.$user_id.'\' LIMIT 1');
		$data['stats'] = mysql_fetch_assoc($query);
        
		$q1 = mysql_num_rows(mysql_query('SELECT COUNT(id) AS p FROM noticia WHERE id_usuario = \''.(int)$user_id.'\''));;
        $q2 = mysql_fetch_row(mysql_query('SELECT COUNT(cid) AS c FROM p_comentarios WHERE c_user = \''.(int)$user_id.'\' && c_status = \'0\''));;
		$q3 = mysql_num_rows(mysql_query('SELECT * FROM suscriptores WHERE id_receptor = \''.(int)$user_id.'\''));
		$q4 = mysql_fetch_assoc(mysql_query("SELECT * FROM u_paises WHERE p_prefijo='".$data['pais']."'")); 
		$q5 = mysql_num_rows(mysql_query('SELECT * FROM c_temas WHERE t_autor=\''.(int)$user_id.'\' ')); 
		 
        $data['stats']['user_posts'] = $q1+$q5;
        $data['stats']['user_comentarios'] = $q2[0];
        $data['stats']['user_seguidores'] = $q3;
		$data['stats']['r_name'] = $q4['p_opcion'];
        // STATUS
        if($data['user_lastactive'] > $is_online) $data['status'] = array('t' => 'Online', 'css' => 'online');
        elseif($data['user_lastactive'] > $is_inactive) $data['status'] = array('t' => 'Inactivo', 'css' => 'inactive');
        else $data['status'] = array('t' => 'Offline', 'css' => 'offline');
		// SIGUIENDO
        $data['follow'] = 12;
        //
		return $data;
    }

}
?>