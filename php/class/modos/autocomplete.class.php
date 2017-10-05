<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    autocomplete.class.php
 * @author  Wortit Developers
 */
class tsAutocomplete{

			// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new tsAutocomplete();
    	}
		return $instance;
	}

	 /**
     * @name getSearchU
     * @access public
     * @param int
     * @return array
     * @info OBTIENE RESULTADOS DE BUSQUEDA EN "AUTOCOMPLETE"
     */ 

     function getSearchU($q, $t){
     global $w;
	 $max = 15; // MAXIMO A MOSTRAR
     $limit = $max;

    $m = explode(' ', $q);
     if($q){
    switch($t){
	// Usuarios
	case 'users':
	$querys = '';
    $r = 0;
    foreach($m as $q){
    $querys .= " u.usuario_nombre LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " u.name_original LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " u.ap_original LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
    $r++;
    }
	$extras = " GROUP BY u.usuario_id LIMIT ".$limit."";
	$query = mysql_query("SELECT u.*, p.* FROM usuarios AS u LEFT JOIN u_paises AS p ON p.p_prefijo = u.pais WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT u.*, p.* FROM usuarios AS u LEFT JOIN u_paises AS p ON p.p_prefijo = u.pais WHERE ".$querys.' GROUP BY u.usuario_id');
	
	$data = '';
	while ($row = mysql_fetch_assoc($query)) {
	$nameuserhehe = ($row['name_original'] && $row['ap_original']) ? $row['name_original'].' '.$row['ap_original'] : $row['usuario_nombre'];
	$data .= '<div class="display_boxsearch hover" onclick="location.href=\''.$w->settings['url'].'/'.$row['usuario_nombre'].'\';">';
	$data .= '<img src="'.$row['w_avatar'].'" style="width:25px;height:25px;margin-right:6px" class="floatL">';
	$data .= '<div style="margin: 0px;padding: 0px;line-height: 15px;" class="floatL hidden">'.$nameuserhehe.' <br /> <span style="font-size:9px; color:#999999;margin:0;">@'.$row['usuario_nombre'].'</span></div><br />';
	$data .= '</div>';
	}

	break;
	case 'temas':
	// Foro
	$querys = '';
    $r = 0;
    foreach($m as $q){
    $querys .= " t.t_titulo LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : 'or ');
    $querys .= " t.t_cuerpo LIKE '%$q%' ".($r<(count($m)-1) ? 'or ' : '');
    $r++;
    }
	$extras = " ORDER BY t.t_votos_pos DESC LIMIT ".$limit."";
	$query = mysql_query("SELECT t.*, c.*, cc.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN c_categorias AS cc ON c.c_categoria = cc.cid WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT t.*, c.*, cc.* FROM c_temas AS t LEFT JOIN c_comunidades AS c ON t.t_comunidad = c.c_id LEFT JOIN c_categorias AS cc ON c.c_categoria = cc.cid WHERE ".$querys.' ORDER BY t.t_votos_pos DESC');
	
    $data = '';
	while ($row = mysql_fetch_assoc($query)) {
	$data .= '<div class="display_boxsearch hover" onclick="location.href=\''.$w->settings['url'].'/foro/'.$row['c_nombre_corto'].'/'.$row['t_id'].'/'.$w->setSEO($row['t_titulo']).'.html\';">';
	$data .= '<div class="clearfix">'.$row['t_titulo'].'</div>';
	$data .= '<span style="font-size:9px; color:#999999;margin: 7px 0 0 0;">'.$row['t_respuestas'].' Respuestas</span>';
	$data .= '</div>';
	}

	break;
	case 'new':
	// New
   $querys = '';
   $h = 0;
   foreach($m as $q){
   $querys .= "n.titulo LIKE '%$q%' ".($h<(count($m)-1) ? 'or ' : 'or ');
   $querys .= "n.detalle LIKE '%$q%' ".($h<(count($m)-1) ? 'or ' : '');
   $h++;
   }
	$extras = " ORDER BY n.visitas DESC LIMIT ".$limit."";
	$query = mysql_query("SELECT n.*, u.*, c.* FROM noticia AS n LEFT JOIN usuarios AS u ON n.id_usuario = u.usuario_id LEFT JOIN categorias AS c ON n.categoria = c.id_categoria WHERE ".$querys.$extras);
	$query2 = mysql_query("SELECT n.*, u.* FROM noticia AS n LEFT JOIN usuarios AS u ON n.id_usuario = u.usuario_id WHERE ".$querys);
	
    $data = '';
	while ($row = mysql_fetch_assoc($query)) {
	$data .= '<div class="display_boxsearch hover" onclick="location.href=\''.$w->settings['url'].'/notas/'.$row['wdefined'].'/'.$row['id'].'/'.$row['post_wdefined'].'.html\';">';
	$data .= '<div class="clearfix">'.$row['titulo'].'</div>';
	$data .= '<span style="font-size:9px; color:#999999;margin: 7px 0 0 0;">'.$row['visitas'].' Visitas</span>';
	$data .= '</div>';
	}
	break;
	}
    }else{ $data = 'Introduce una busqueda.'; }
     return $data;
     }

}
?>