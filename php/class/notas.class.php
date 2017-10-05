<?php if (!defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para pedir servicio
 *
 * @name    bwort.class.php
 * @author  Wortit developers
 */
class tsNotas
{
    // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsNotas();
        }
        return $instance;
    }

   function loadNotas($filters){
    global $wuser,$w;
    $max = 20;
    $filters = (isset($filters)) ? $filters : '';
    $query = mysql_query("SELECT * FROM u_m_notas WHERE um_user='".$wuser->uid."' ".$filters." ");
    $data = result_array($query);

        $pages = '';
        $datos = mysql_num_rows($query);
        $num_rows = $datos;//Consultamos cuantos post hay
        $post_pp = $max;//Consultamos cuantos post hay
        $lastpage = ceil($num_rows / $post_pp);//Calculamos cuantos ennlaces habra
        //Obtenemos el valor de la pagina actual
        if(!$_GET["page"]){ $page=1; }else{ $page = $_GET["page"]; }
        //Creamos el array de la paginación
        for($i=0;$i<=$lastpage;$i++){ $mpag[$i]=$i; }
        //Calculamos cuantas pestañas mostrar
        $v = $page + 9; for($c=9;$v>$lastpage; $c--){ $v=$page+$c; }
        //Enlace a pagina anterior
        if($page>1){ $anterior = $page - 1; $pages .= "<a class='navPages' href=\"".$w->settings['url']."/int/apuntes/?preg=mi&page=".$anterior."\" title=\"Página anterior\">&laquo;</a>"; }
        //Mostramos los enlaces de la paginación
        for($i=$page; $i<=$v; $i++){ if($mpag[$i] == $_GET['page']){ $cha = 'style="background: #4A4F55;'; $ja = $mpag[$i]; }else{ $cha = ""; $ja = $mpag[$i]; } $pages .= "<a ".$cha." href=\"".$w->settings['url']."/int/apuntes/?preg=mi&page=".$mpag[$i]."\">".$ja."</a>"; }
        //Enlace a pagina siguiente
        if($page<$lastpage){ $siguiente = $page + 1; $pages .= "<a class='navPages' href=\"".$w->settings['url']."/int/apuntes/?preg=mi&page=".$siguiente."\" title=\"Página siguiente\">&raquo;</a>"; }
    $data['pages'] = $pages;
    $data['num'] = mysql_num_rows($query);
    $i = 0; 
    foreach($data AS $row){
    if($row['um_state'] == 1){ $ppc = 'Activo'; }elseif($row['um_state'] == 2){ $ppc = 'Revisión'; }elseif($row['um_state'] == 3){ $ppc = 'Desactivado'; }else{ $ppc = 'Indefinido'; }
    $data[$i]['state'] = $ppc;
    $i++;
    }
    return $data;
   }

    /* AGREGAR NOTAS(APUNTES) */
   function add($type = 1){
    global $wuser, $w, $tsWeb, $tsActividad;
    $time = time();
    $user = $wuser->uid;
    $list = isset($_POST['lt']) ? $_POST['lt'] : 'None';
    $d = array(
    'n' => array(
    'name' => $w->setSecure($_POST['name']),
    'text' => $w->setSecure($_POST['t']),
    'list' => $list,
    'type' => $w->setSecure($_POST['ty']),
    'state' => $w->setSecure($_POST['stt']),
    'public' => $w->setSecure($_POST['pblc'])
    ),
    'l' => array(
    'name' => $w->setSecure($_POST['name']),
    'text' => $w->setSecure($_POST['t']),
    'list' => $list,
    'type' => $w->setSecure($_POST['ty']),
    'state' => $w->setSecure($_POST['stt']),
    'public' => $w->setSecure($_POST['pblc'])
    )
    );
    if($type == 1){
    $kasl = ''; foreach($d['n'] AS $fs => $dd){ if(!$dd or $dd == '') $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; }
    if($kasl){ return $kasl;
    }else{
    if(mysql_query("INSERT INTO u_m_notas(um_user, um_name, um_text, um_date, um_list, um_type, um_state, um_public) VALUES('".$user."','".$d['n']['name']."','".$d['n']['text']."','".$time."','".$d['n']['list']."','".$d['n']['type']."','".$d['n']['state']."','".$d['n']['public']."')")){
    $sqlIntoIdQuery = mysql_insert_id(); 
    $tsWeb->getNotifis($wuser->uid, 55, $sqlIntoIdQuery, 0); 
    $tsActividad->setActividad(61,$sqlIntoIdQuery);
    return '1: Apunte agregado correctamente.';
    }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
    }
    }elseif($type == 2){
    $kasl = ''; foreach($d['l'] AS $fs => $dd){ if(!$dd or $dd == '') $kasl .= 'el campo <b>'.$fs.'</b> esta vacio.<br />'; }
    if($kasl){ return $kasl;
    }else{
    if(mysql_query("INSERT INTO u_list_notas(uml_user, uml_name, uml_text, uml_date, uml_list, uml_type, uml_state, uml_public) VALUES('".$user."','".$d['l']['name']."','".$d['l']['text']."','".$time."','".$d['l']['list']."','".$d['l']['type']."','".$d['l']['state']."','".$d['l']['public']."')")){
    $sqlIntoIdQuery = mysql_insert_id(); 
    $tsWeb->getNotifis($wuser->uid, 55, $sqlIntoIdQuery, 0); 
    $tsActividad->setActividad(61,$sqlIntoIdQuery);
    return '1: Apunte agregado correctamente.';
    }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
    }
    }else{}
   }

}
?>