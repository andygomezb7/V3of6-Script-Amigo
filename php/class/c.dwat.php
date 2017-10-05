<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Modelo para el control denuncias
 *
 * @name    c.swat.php
 * @author  PHPost Team
 */
class tsSwat{

	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsSwat();
    	}
		return $instance;
	}

	
	
	function setDenuncia($obj_id, $type = 'posts'){
	global $w;
	// VARS
        $razon = $tsCore->setSecure($_POST['razon']);
        $extras = $tsCore->setSecure($_POST['extras']);
        $date = time();
	 switch($type){
	 
	 // COMUNIDADES
			case 'comunidad':
				// ¿ES MI COMUNIDAD O ESTÁ OCULTA?
				$query = mysql_query('SELECT c_id, c_autor, c_estado FROM c_comunidades WHERE c_id = \''.(int)$obj_id.'\' LIMIT 1') or die(mysql_error());
				$my_comu = mysql_fetch_assoc($query);
				
				if(empty($my_comu['c_id'])) return '0: Esta comunidad no existe';	
				if($my_comu['c_autor'] == $tsUser->uid) return '0: No puedes denunciar tus propias comunidades.';			
				if($my_comu['c_estado'] == '1') return '0: No puedes denunciar comunidades ocultas.';
				// YA HA REPORTADO?
				$query = mysql_query('SELECT `did` FROM `w_denuncias` WHERE `obj_id` = \''.(int)$obj_id.'\' AND `d_user` = '.$tsUser->uid.' AND `d_type` = \'5\'');
				$denuncio = mysql_num_rows($query);
				
				if(!empty($denuncio)) return '0: Ya hab&iacute;as denunciado esta comunidad.';
				// INSERTAR NUEVA DENUNCIA
				if(mysql_query('INSERT INTO `w_denuncias` (`obj_id`, `d_user`, `d_razon`, `d_extra`, `d_type`, `d_date`) VALUES (\''.(int)$obj_id.'\', \''.$tsUser->uid.'\', \''.$razon.'\', \''.$extras.'\', \'5\', \''.$date.'\')')){
				return '1: La denuncia fue enviada.';
				} else return '0: Error, int&eacute;ntalo m&aacute;s tarde.';
            break;
			// TEMAS
			case 'tema':
				// ¿ES MI TEMA O ESTÁ OCULTO?
				$query = mysql_query('SELECT t_id, t_autor, t_estado FROM c_temas WHERE t_id = \''.(int)$obj_id.'\' LIMIT 1') or die(mysql_error());
				$my_tema = mysql_fetch_assoc($query);
				
				if(empty($my_tema['t_id'])) return '0: Este tema no existe';	
				if($my_tema['t_autor'] == $tsUser->uid) return '0: No puedes denunciar tus propios temas.';			
				if($my_tema['t_estado'] == '1') return '0: No puedes denunciar temas ocultos.';
				// YA HA REPORTADO?
				$query = mysql_query('SELECT `did` FROM `w_denuncias` WHERE `obj_id` = \''.(int)$obj_id.'\' AND `d_user` = '.$tsUser->uid.' AND `d_type` = \'6\'');
				$denuncio = mysql_num_rows($query);			
				if(!empty($denuncio)) return '0: Ya hab&iacute;as denunciado este tema.';
				// CUANTAS DENUNCIAS LLEVA?
				$denuncias = mysql_num_rows(mysql_query('SELECT `did` FROM `w_denuncias` WHERE `obj_id` = \''.(int)$obj_id.'\' AND `d_type` = \'6\''));
				// OCULTAMOS EL COMENTARIO SI YA LLEVA MÁS DE 3 DENUNCIAS
				if($denuncias >= 2){
					mysql_query('UPDATE c_temas SET t_estado = \'2\' WHERE t_id = \''.(int)$obj_id.'\'') or die(mysql_error());
				}
				// INSERTAR NUEVA DENUNCIA
				if(mysql_query('INSERT INTO `w_denuncias` (`obj_id`, `d_user`, `d_razon`, `d_extra`, `d_type`, `d_date`) VALUES (\''.(int)$obj_id.'\', \''.$tsUser->uid.'\', \''.$razon.'\', \''.$extras.'\', \'6\', \''.$date.'\')')){
				return '1: La denuncia fue enviada.';
				} else return '0: Error, int&eacute;ntalo m&aacute;s tarde.';
			break;
	
	 }
	
	}



/** FIN CLASS ***/
}
?>