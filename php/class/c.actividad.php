<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/**
 * Modelo para el control de la actividad
 *
 * @name    c.actividad.php
 * @author  Wortit developers
 */

/**
 * ACTIVIDAD
 * // POSTS
 * 1 => Creó un nuevo post
 * 2 => Agregó a favoritos el post
 * 3 => Dejó 10 puntos en el post
 * 4 => Recomend&oacute; el post
 * 5 => Comentó el post
 * 6 => Votó positivo/negativo un comentario en el post
 * 7 => Est&aacute; siguiendo el post
 * // FOLLOWS
 * 8 => Está siguiendo a
 * // FOTOS
 * 9 => Subió una nueva foto
 * // MURO
 * 10 => 
 *      0 => Publicó en su muro
 *      1 => Comentó su publicación
 *      2 => Publicó en el muro de
 *      3 => Comentó la publicación de
 * 11 => Le gusta
 *      0 => su publicación
 *      1 => su comentario
 *      2 => la publicación de
 *      3 => el comentario de
*/
class tsActividad {
	private $actividad = array();
    /*
        CONSTRUCTOR
    */
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsActividad();
    	}
		return $instance;
	}
    public function __construct(){
        # NO ES NESESARIO HACER ALGO EN EL CONSTRUCTOR
    }
    /**
     * @name makeActividad
     * @access private
     * @params none
     * @return none
     */
    private function makeActividad(){
        # ACTIVIDAD CON FORMATO | ID => array(TEXT, LINK, CSS_CLASS)
        $this->actividad = array(
            // INTERACCIONES
   1 => array( 'text' => 'Empezo a interactuar contigo.'),
   2 =>  array( 'text' => 'Ha dejado de interactuar contigo.'),
   // BWORTS
   3 => array( 'text' => 'Le gusta tu '),
   4 => array( 'text' => 'Le gusta tu '),
   5 => array( 'text' => 'Le gusta tu '),
   6 => array( 'text' => 'Le gusta tu '),
   7 => array( 'text' => 'No le gusta tu '),
   8 => array( 'text' => 'No le gusta tu '),
   9 =>  array( 'text' => 'No le gusta tu '),
   10 => array( 'text' => 'No le gusta tu '),
   11 => array( 'text' => 'Compartio tu '),
   12 => array( 'text' => 'Compartio tu '),
   13 => array( 'text' => 'Compartio tu '),
   14 => array( 'text' => 'Compartio un'),
   15 => array( 'text' => 'Publico en tu perfil un'),
   16 => array( 'text' => 'Publico en el grupo un'),
   17 => array( 'text' => 'Cre&oacute; nueva '),
   18 => array( 'text' => 'Publico un nuevo '),
   19 => array( 'text' => 'Le gusta tu nota.'),
   20 => array( 'text' => 'No le gusta tu nota.'),
   21 => array( 'text' => 'Menciono a un usuario en un'),
   //  NOTAS
   22 => array( 'text' => 'Comento una '), // nota
   23 => array( 'text' => 'Le gusta tu comentario en la'), //nota
   79 => array('text' => 'Dejo puntos en una'), // Nota
   // JUEGOS
   24 => array( 'text' => 'Subi&oacute; el juego'),
   25 => array( 'text' => 'Coment&oacute; el juego'),
   26 => array( 'text' => 'Vot&oacute; el juego'),
   27 => array( 'text' => 'Agrego&oacute; a favoritos el juego'),
   // COMUNIDADES
   28 => array('text' => 'Cre&oacute; un nuevo tema', 'css' => 'nota'),
   29 => array('text' => 'Le gusta tu tema.'),
   30 => array('text' =>'No le gusta tu tema.'),
   // FILES 
   31 => array('text' => 'Repondio a tu comentario en tu archivo'),
   // bworts +
   32 => array('text' => 'Comento un '),
            // POSTS
   33 => array('text' => 'Recomend&oacute; el tema', 'css' => 'share'),
   34 => array('text' => array('Vot&oacute;', 'un comentario en el post'), 'css' => 'voto_'),
   35 => array('text' => 'Est&aacute; siguiendo el post', 'css' => 'follow_post'),
   // MURO
   36 => array(
    0 => array('text' => 'Public&oacute; en su', 'link' => 'muro', 'css' => 'status'),
    1 => array('text' => 'Coment&oacute; su', 'link' => 'publicaci&oacute;n', 'css' => 'w_comment'),
    2 => array('text' => 'Public&oacute; en el muro de', 'css' => 'wall_post'),
    3 => array('text' => 'Coment&oacute; la publicaci&oacute;n de', 'css' => 'w_comment')
   ),
   37 => array('text' => 'Le gusta', 'css' => 'w_like',
    0 => array('text' => 'su', 'link' => 'publicaci&oacute;n'),
    1 => array('text' => 'su comentario'),
    2 => array('text' => 'la publicaci&oacute;n de'),
    3 => array('text' => 'el comentario'),
    ),
	// COMUNIDADES
	38 => array('text' => 'Cre&oacute; un nuevo foro', 'css' => 'post'),
	39 => array('text' => 'Cre&oacute; un nuevo tema', 'css' => 'post'),
    40 => array('text' => 'Agreg&oacute; a favoritos el tema', 'css' => 'star'),
	41 => array('text' => 'Recomend&oacute; el tema', 'css' => 'share'),
    42 => array('text' => array('Coment&oacute;', 'el tema'), 'css' => 'blue_ball'),
	43 => array('text' => array('Vot&oacute;', 'el tema'), 'css' => 'voto_'),
    44 => array('text' => array('Vot&oacute;', 'un comentario en el tema'), 'css' => 'voto_'),
	45 => array('text' => 'Est&aacute; siguiendo el tema', 'css' => 'follow_post'),
	46 => array('text' => 'Est&aacute; siguiendo la comunidad', 'css' => 'follow_post'),
	47 => array('text' => 'Se uni&oacute; a la comunidad', 'css' => 'follow_post'),
    48 => array('text' =>'Edito una nota.'),
    // GRUPOS
    49 => array('text' => 'Creo un nuevo grupo'),
    50 => array('text' => 'Solicito unirse a un grupo'),
    51 => array('text' => 'Fue aceptado en un grupo.'),
    // AULA DE WORTIT
    52 => array('text' => 'Se registro en Aula de Wortit como estudiante'),
    53 => array('text' => 'Se registro en Aula de Wortit como profesor'),
    54 => array('text' => 'Registro un establecimiento'),
    55 => array('text' => 'Registro una clase'),
    56 => array('text' => 'Esta en vivo con una clase'),
    // CODIGO WORTIT
    57 => array('text' => 'Subio un archivo'),
    58 => array('text' => 'Actualizo un archivo'),
    59 => array('text' => 'Creo un repositorio'),
    60 => array('text' => 'Descargo un archivo'),
    // APUNTES DE WORTIT
    61 => array('text' => 'Creo un apunte'),
    /* SOPORTE DE WORTIT */
    62 => array('text' => 'Creo un '), // proyecto de soporte
    63 => array('text' => 'Respondio tu tema en un ', 'style' => 'add'), // proyecto de soporte
    64 => array('text' => 'Creo un tema en tu '), // proyecto de soporte
    65 => array('text' => 'Edito un '), // proyecto de soporte
    66 => array('text' => 'Agreo un categoria en un '), // proyecto de soporte
    67 => array('text' => 'Elimino una categoria en un '), // proyecto de soporte
    /* ADS WORTIT */
    68 => array('text' => 'Creo un anuncio'),
    69 => array('text' => 'Creo un bloque de anuncios'),
    /* EXTRAS AULA DE WORTIT */
    70 => array('text' => 'Se registro en un establecimiento'),
    71 => array('text' => 'Se registro en una clase'),
    72 => array('text' => 'Se le asigno una medalla'),
    /* EXTRAS DE USUARIO */
    73 => array('text' => 'Accendio al rango'),
    74 => array('text' => 'Ha ganado '), // $$ puntos
    // MOD ACTIVIDAD
    75 => array('text' => 'Verifico a un'), // USUARIO
    76 => array('text' => 'Banneo a un'), // USUARIO
    77 => array('text' => 'Desverifico a un'), // USUARIO
    78 => array('text' => 'Desbaneo a un'), // USUARIO
    // 79 => ya ta
    80 => array('text' => 'Fijo una '), // NOTA
    81 => array('text' => 'DesFijo una '), // NOTA
    82 => array('text' => 'Edito una '), // NOTA
    83 => array('text' => 'Desactivo una '), // NOTA
    84 => array('text' => 'Reactivo una '), // NOTA
    /* GRUPOS */
    85 => array('text' => 'Salio de tu '), // GRUPO
    // NOTAS +
    86 => array('text' => 'Le gusta un '), // COMENTARIO
    87 => array('text' => 'No le gusta un '), // COMENTARIO
    88 => array('text' => 'Agreg&oacute; a favoritos una '), // NOTA
    89 => array('text' => 'Esta siguiendo una '), // NOTA
    );
    }
     /**
     * @name setActividad
     * @access public
     * @params none
     * @return void
     */
    public function setActividad($ac_type, $obj_uno, $obj_dos = 0){
        # VARIABLES GLOBALES
        global $wuser, $w;
        # VARIABLES LOCALES{
        $ac_date = time();
        # BUSCAMOS ACTIVIDADES              
        $query = mysql_query('SELECT `ac_id` FROM `u_actividad` WHERE user_id = \''.$_SESSION['uid'].'\' ORDER BY ac_date DESC');
        $data = result_array($query);
        //
        $ntotal = count($data);
        $delid = $data[$ntotal-1]['ac_id']; // ID DE ULTIMA NOTIFICACION
        
        # SE HACE UN CONTEO PROGRESIVO SI HACE ESTA ACCON MAS DE 1 VEZ AL DIA
        if($ac_type == 5) { //
        $query = mysql_query('SELECT `ac_id, ac_date` FROM `u_actividad` WHERE user_id = '.$_SESSION['uid'].' AND obj_uno = '.$obj_uno.' AND ac_type = '.$ac_type.' LIMIT 1');
        $data = mysql_fetch_assoc($query);
        // esxtras
        /*$hace = $this->makeFecha($data['ac_date']);
        if($hace == 'today'){                
        if(mysql_query('UPDATE `u_actividad` SET obj_dos = obj_dos + 1 WHERE ac_id = '.$data['ac_id'].'')) return true;         
        }*/
        }
        # INSERCION DE DATOS        
        if(mysql_query('INSERT INTO `u_actividad` (`user_id`, `obj_uno`, `obj_dos`, `ac_type`, `ac_date`) VALUES ('.$_SESSION['uid'].', '.$obj_uno.', '.$obj_dos.', '.$ac_type.', '.$ac_date.')')) return true;
                else return false;
    }
         /**
     * @name setActividad
     * @access public
     * @params none
     * @return void
     */
    public function setModActividad($ac_type, $obj_uno, $obj_dos = 0){
        # VARIABLES GLOBALES
        global $wuser, $w;
        # VARIABLES LOCALES{
        $ac_date = time();
        # BUSCAMOS ACTIVIDADES              
        $query = mysql_query('SELECT `ac_id` FROM `mod_actividad` WHERE user_id = \''.$_SESSION['uid'].'\' ORDER BY ac_date DESC');
        $data = result_array($query);
        //
        $ntotal = count($data);
        $delid = $data[$ntotal-1]['ac_id']; // ID DE ULTIMA NOTIFICACION
        
        # SE HACE UN CONTEO PROGRESIVO SI HACE ESTA ACCON MAS DE 1 VEZ AL DIA
        if($ac_type == 5) { //
        $query = mysql_query('SELECT `ac_id, ac_date` FROM `mod_actividad` WHERE user_id = '.$_SESSION['uid'].' AND obj_uno = '.$obj_uno.' AND ac_type = '.$ac_type.' LIMIT 1');
        $data = mysql_fetch_assoc($query);
        // esxtras
        /*$hace = $this->makeFecha($data['ac_date']);
        if($hace == 'today'){                
        if(mysql_query('UPDATE `u_actividad` SET obj_dos = obj_dos + 1 WHERE ac_id = '.$data['ac_id'].'')) return true;         
        }*/
        }
        # INSERCION DE DATOS        
        if(mysql_query('INSERT INTO `mod_actividad` (`user_id`, `obj_uno`, `obj_dos`, `ac_type`, `ac_date`) VALUES ('.$_SESSION['uid'].', '.$obj_uno.', '.$obj_dos.', '.$ac_type.', '.$ac_date.')')) return true;
                else return false;
    }
    /**
     * @name getActividad
     * @access public
     * @params int(3)
     * @return array
     */
    public function getActividad($user_id, $ac_type = 0, $start = 0, $v_type){
        # CREAR ACTIVIDAD
        $this->makeActividad();
        # VARIABLES LOCALES
        $ac_type = ($ac_type != 0) ? ' AND ac_type = \''.$ac_type.'\'' : '';
        # CONSULTA
        // ESTO ERA PARA ACTIVIDAD ADMIN => $query = mysql_query('SELECT a.*, u.* FROM u_actividad AS a LEFT JOIN u_miembros AS u ON a.user_id = u.user_id WHERE ORDER BY a.ac_date DESC LIMIT '.$start.', 25');
        $query = mysql_query('SELECT `ac_id`, `user_id`, `obj_uno`, `obj_dos`, `ac_type`, `ac_date` FROM `u_actividad` WHERE user_id = '.$user_id.' '.$ac_type.' ORDER BY ac_date DESC LIMIT '.$start.', 25');
        $data = result_array($query);
        
        # ARMAR ACTIVIDAD
        $actividad = $this->armActividad($data);
        # RETORNAR ACTIVIDAD
        return $actividad;
    }
        /**
     * @name getActividad
     * @access public
     * @params int(3)
     * @return array
     */
    public function getModActividad($user_id, $ac_type = 0, $start = 0, $v_type){
        # CREAR ACTIVIDAD
        $this->makeActividad();
        # VARIABLES LOCALES
        $ac_type = ($ac_type != 0) ? ' AND ac_type = \''.$ac_type.'\'' : '';
        $xtras = ($v_type) ? ' WHERE obj_uno=\''.$v_type.'\'' : '';
        # CONSULTA
        // ESTO ERA PARA ACTIVIDAD ADMIN => $query = mysql_query('SELECT a.*, u.* FROM u_actividad AS a LEFT JOIN u_miembros AS u ON a.user_id = u.user_id WHERE ORDER BY a.ac_date DESC LIMIT '.$start.', 25');
        $query = mysql_query('SELECT `ac_id`, `user_id`, `obj_uno`, `obj_dos`, `ac_type`, `ac_date` FROM `mod_actividad`'.$xtras.' ORDER BY ac_date DESC LIMIT '.$start.', 50');
        $data = result_array($query);
        
        # ARMAR ACTIVIDAD
        $actividad = $this->armActividad($data);
        # RETORNAR ACTIVIDAD
        return $actividad;
    }
        /**
     * @name getActividad
     * @access public
     * @params int(3)
     * @return array
     */
    public function getTotalActividad($ac_type = 0, $start = 0, $v_type){
        # CREAR ACTIVIDAD
        $this->makeActividad();
        # VARIABLES LOCALES
        $ac_type = ($ac_type != 0) ? ' ac_type = \''.$ac_type.'\'' : '';
        # CONSULTA
        // ESTO ERA PARA ACTIVIDAD ADMIN => $query = mysql_query('SELECT a.*, u.* FROM u_actividad AS a LEFT JOIN u_miembros AS u ON a.user_id = u.user_id WHERE ORDER BY a.ac_date DESC LIMIT '.$start.', 25');
        $query = mysql_query('SELECT `ac_id`, `user_id`, `obj_uno`, `obj_dos`, `ac_type`, `ac_date` FROM `u_actividad` WHERE '.$ac_type.' ORDER BY ac_date DESC LIMIT '.$start.', 25');
        $data = result_array($query);
        
        # ARMAR ACTIVIDAD
        $actividad = $this->armActividad($data);
        # RETORNAR ACTIVIDAD
        return $actividad;
    }
    /**
     * @name getActividadFollows
     * @access public
     * @param none
     * @return array
     */
    public function getActividadFollows($start = 0){
        # VARIABLES GLOBALES
        global $tsUser;
        // SOLO MOSTRAREMOS LAS ULTIMAS 100 ACTIVIDADES
        if($start > 90) return array('total' => '-1');
        // SEGUIDORES
        $query = mysql_query('SELECT `f_id` FROM `u_follows` WHERE f_user = '.$tsUser->uid.' AND f_type = 1');
        $follows = result_array($query);
        
        // ORDENAMOS 
        foreach($follows as $key => $val){
            $amigos[] = "'".$val['f_id']."'";
        }
        $amigos = implode(', ',$amigos);
        // OBTENEMOS LAS ULTIMAS PUBLICACIONES
        $query = mysql_query('SELECT a.*, u.user_name AS usuario FROM u_actividad AS a LEFT JOIN u_miembros AS u ON a.user_id = u.user_id WHERE a.user_id IN('.$amigos.') ORDER BY ac_date DESC LIMIT '.$start.', 25');
        $data = result_array($query);
        
        # ARMAR ACTIVIDAD
        if(empty($data)) return 'No hay actividad o no sigues a ning&uacute;n usuario.';
        $actividad = $this->armActividad($data);
        # RETORNAR ACTIVIDAD
        return $actividad;
    }
    /**
     * @name delActividad
     * @access public
     * @param none
     * @return string
     */
    public function delActividad(){
        # VARIABLES GLOBALES
        global $tsUser;
        # VARIABLES LOCALES
        $ac_id = $_POST['acid'];
        # CONSULTAS     
        $query = mysql_query('SELECT user_id FROM u_actividad WHERE ac_id = \''.intval($ac_id).'\' LIMIT 1');
        $data = mysql_fetch_assoc($query);
        
        # COMPROBAMOS
        if($data['user_id'] == $tsUser->uid){           
        if(mysql_query('DELETE FROM `u_actividad` WHERE ac_id = \''.intval($ac_id).'\'')) return '1: Actividad borrada';
        }
        //
        return '0: No puedes borrar esta actividad.';
    }
    /**
     * @name armActividad
     * @access private
     * @params array
     * @return array
     */
    private function armActividad($data){
        # VARIABLES LOCALES
        $actividad = array(
            'total' => count($data),
            'data' => array(
            'today' => array('title' => 'Hoy', 'data' => array()),
            'yesterday' => array('title' => 'Ayer', 'data' => array()),
            'week' => array('title' => 'D&iacute;as Anteriores', 'data' => array()),
            'month' => array('title' => 'Semanas Anteriores', 'data' => array()),
            'old' => array('title' => 'Actividad m&aacute;s antigua', 'data' => array())
            )
        );
        # PARA CADA VALOR CREAR UNA CONSULTA
        foreach($data as $key => $val){
            // CREAR CONSULTA
            $sql = $this->makeConsulta($val);
            // CONSULTAMOS
            $query = mysql_query($sql);
            $dato = mysql_fetch_assoc($query);
            if($sql['dos']){
                $queryd = mysql_query($sql['dos']);
                $datod = mysql_fetch_assoc($queryd);
            }
            
            //
            if(!empty($dato)) {
                // AGREGAMOS AL ARRAY ORIGINAL
                $dato = array_merge($dato, $val);
                // ARMAMOS LOS TEXTOS
                $oracion = $this->makeOracion($dato, $datod);
                // DONDE PONERLO?
                $ac_date = $this->makeFecha($val['ac_date']);
                // PONER
                $actividad['data'][$ac_date]['data'][] = $oracion;
            }
        }
        #RETORNAMOS LOS VALORES
        //return $sql;
        return $actividad;
    }
    /**
     * @name makeConsulta
     * @access private
     * @params array
     * @return string/array
     */
    private function makeConsulta($data){
        # CON UN SWITCH ESCOGEMOS LA CONSULTA APROPIADA
        switch($data['ac_type']){
            // DEL TIPO 1 al 7 USAMOS LA MISMA CONSULTA
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 13:
            case 14:
            case 15:
            case 16:
            case 18:
            case 32:
            return 'SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.id = '.$data['obj_uno'].'';
            break;
            case 21:
            $query = 'SELECT b.*, u.* FROM bworts AS b LEFT JOIN usuarios AS u ON b.idusuario = u.usuario_id WHERE b.id = '.$data['obj_uno'].'';
            $query['dos'] = 'SELECT * FROM usuarios WHERE usuario_id = '.$data['obj_dos'].'';
            return $query;
            break;
            case 17:
            case 22:
            case 79:
            case 48:
            case 80:
            case 81:
            case 82:
            case 83:
            case 84:
            case 19:
            case 20:
            case 88:
            case 89:
            return "SELECT p.*, u.*, c.* FROM noticia AS p LEFT JOIN usuarios AS u ON p.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON p.categoria = c.id_categoria WHERE id='".$data['obj_uno']."'";
            break;
            case 25:
            case 26:
            case 27:
            case 28:
                return 'SELECT j_title, j_url, juego_id FROM j_juegos WHERE juego_id = \''.(int)$data['obj_uno'].'\' LIMIT 1';
            break;
            case 62:
            case 63:
            case 64:
            case 65:
            case 66:
            case 67:
            return 'SELECT * FROM s_foros WHERE sf_id="'.$data['obj_uno'].'"';
            break;
            case 75:
            case 76:
            case 77:
            case 78:
            return 'SELECT * FROM usuarios WHERE usuario_id="'.$data['obj_uno'].'"';
            case 85:
            return 'SELECT * FROM grupos WHERE idgrupo="'.$data['obj_uno'].'"';
            break;
            case 86:
            case 87:
            return 'SELECT * FROM newcoment WHERE id="'.$data['obj_uno'].'"';
            break;
            break;
        }
    }
    /**
     * @name makeOracion
     * @access private
     * @params array
     * @return array
     **/
    private function makeOracion($data, $dato){
        # VARIABLES GLOBALES
        global $w;
        # VARIABLES LOCALES
        $ac_type = $data['ac_type'];
        $site_url =  $w->settings['url'];
        $oracion['id'] = $data['ac_id'];
        $oracion['style'] = $this->actividad[$ac_type]['css'];
        $oracion['date'] = $data['ac_date'];
        $oracion['user'] = $data['usuario'];
        $oracion['uid'] = $data['user_id'];
        $oracion['ac_type'] = $data['ac_type'];
        $dataUserK = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$data['user_id']."'"));
        $oracion['creador'] = $dataUserK['usuario_nombre'];
        # CON UN SWITCH ESCOGEMOS QUE ORACION CONSTRUIR
        switch($ac_type){
            # DEL TIPO 1-2, 4 y 7 USAMOS LA MISMA
            case 1:
            case 2:
            case 4:
            case 7:
                $oracion['text'] = $this->actividad[$ac_type]['text'];
                $oracion['link'] = $site_url.'/posts/'.$data['c_seo'].'/'.$data['post_id'].'/'.$w->setSEO($data['post_title']).'.html';
                $oracion['ltext'] = $data['post_title'];
            break;
            # DEL TIPO 3, 5 y 6 USAMOS EL MISMO
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 13:
            case 14:
            case 15:
            case 16:
            case 18:
            case 32:
            $oracion['text'] = $this->actividad[$ac_type]['text'];
            $oracion['ltext'] = 'Bwort';
            $oracion['link'] = $w->settings['url'].'/'.$data['usuario_nombre'].'/'.$data['id'].'/';   
            break;
            case 21:
            $oracion['text'] = $this->actividad[$ac_type]['text'];
            $oracion['ltext'] = 'Bwort';
            $oracion['link'] = $w->settings['url'].'/'.$data['usuario_nombre'].'/'.$data['id'].'/';   
            break;
            case 17:
            case 22:
            case 79:
            case 48:
            case 80:
            case 81:
            case 82:
            case 83:
            case 84:
            case 19:
            case 20:
            case 88:
            case 89:
            $oracion['text'] = $this->actividad[$ac_type]['text'];
            $oracion['ltext'] = 'Nota';
            $oracion['link'] = $w->settings['direccion_url'].'/notas/'.$data['wdefined'].'/'.$data['id'].'/'.$data['post_wdefined'].'.html';               
            break;
            case 25:
            case 26:
            case 27:
            case 28:
            //
            if($ac_type == 26) {
            $extra_text = ($data['obj_dos'] == 0) ? '' : ($data['obj_dos']+1).' veces';
            $oracion['text'] = $this->actividad[$ac_type]['text'][0]." <b>{$extra_text}</b> ".$this->actividad[$ac_type]['text'][1];
            } elseif($ac_type == 27) {
            $extra_text = ($data['obj_dos'] == 0) ? 'negativo' : 'positivo';
            $oracion['text'] = $this->actividad[$ac_type]['text'][0]." <b>{$extra_text}</b> ".$this->actividad[$ac_type]['text'][1];
            } else {
            $oracion['text'] = $this->actividad[$ac_type]['text'];
            }
           //
            $oracion['link'] = $site_url.'/juegos/'.$data['juego_id'].'/'.$w->setSEO($data['j_title']).'.html';
            $oracion['ltext'] = $data['j_title'];
            $oracion['style'] = ($ac_type == 27) ? 'voto_'.$extra_text : $oracion['style'];
            break;
            case 62:
            case 63:
            case 64:
            case 65:
            case 66:
            case 67:
            $oracion['text'] = $this->actividad[$ac_type]['text'];
            $oracion['ltext'] = 'Proyecto de soporte';
            $oracion['link'] = $w->settings['url'].'/soporte/'.$data['sf_seo'].'/'; 
            break;
            case 75:
            case 76:
            case 77:
            case 78:
            $ksdflkKEFML = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$data['user_id']."'"));
            $oracion['text'] = '<a href="'.$w->settings['url'].'/'.$ksdflkKEFML['usuario_nombre'].'/">'.$ksdflkKEFML['usuario_nombre'].'</a> '.$this->actividad[$ac_type]['text'];
            $oracion['ltext'] = $data['usuario_nombre'];
            $oracion['link'] = $w->settings['url'].'/'.$data['usuario_nombre'].'/'; 
            break;
            case 85:
            $ksdflkKEFML = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$data['user_id']."'"));
            $oracion['text'] = '<a href="'.$w->settings['url'].'/'.$ksdflkKEFML['usuario_nombre'].'/">'.$ksdflkKEFML['usuario_nombre'].'</a> '.$this->actividad[$ac_type]['text'];
            $oracion['ltext'] = $data['nombre'];
            $oracion['link'] = $w->settings['url'].'/grupos/'.$data['wdefined'].'/'; 
            break;
            case 86:
            case 87:
            $ksdflkKEFML = mysql_fetch_assoc(mysql_query("SELECT n.*, c.* FROM noticia AS n LEFT JOIN categorias AS c ON n.categoria=c.id_categoria WHERE n.id='".$data['idcoment']."'"));
            $oracion['text'] = '<a href="'.$w->settings['url'].'/'.$ksdflkKEFML['usuario_nombre'].'/">'.$ksdflkKEFML['usuario_nombre'].'</a> '.$this->actividad[$ac_type]['text'].' comentario en la nota';
            $oracion['ltext'] = $w->wrecorte($ksdflkKEFML['titulo'], 74);
            $oracion['link'] = $w->settings['url'].'/notas/'.$ksdflkKEFML['wdefined'].'/'.$ksdflkKEFML['id'].'/'.$ksdflkKEFML['post_wdefined'].'.html#'.$data['id']; 
            break;
            default:
            $oracion['text'] = $this->actividad[$ac_type]['text'];
            $oracion['ltext'] = 'Indefined';
            $oracion['link'] = $w->settings['url'].'/'; 
            break;
        }
        //
        return $oracion;
    }
    /**
     * @name makeFecha
     * @access private
     * @params int
     * @return string
     */
    private function makeFecha($time){
        # VARIABLES LOCALES
        $tiempo = time() - $time; 
        $dias = round($tiempo / 86400);
        //
        if($dias < 1) return 'today';
        elseif($dias < 2) return 'yesterday';
        elseif($dias <= 7) return 'week';
        elseif($dias <= 30) return 'month';
        else return 'old';
        #
    }
}