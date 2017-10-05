<?php

if (!defined('TS_HEADER'))
    exit('No se permite el acceso directo ala web');
/**
 * Modelo para pedir servicio
 *
 * @name    c.hosting.php
 * @author  Wortit developers
 */
class tsSoporte
{
    // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsSoporte();
        }
        return $instance;
    }
  /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

    
    /*++
    + Types the respuestas.
    + * 1 => temas publicados
    + * 2 => Repuestas
    ++*/


    /*
    *-----------------------------------------------------
    *               most();
    *         @action actions in soporte section
    *-----------------------------------------------------
    */
     
     function most($typee, $objj){
        global $w;
        $type = $w->setSecure($typee);
        $obj = $w->setSecure($objj);
        if($type == 1){
            // Display Foros
            $query = mysql_query("SELECT * FROM s_foros WHERE sf_estado='1'");
            $data = result_array($query);
            return $data;
        }elseif($type == 2){
            // Display info the forum support.
            $query = mysql_query("SELECT * FROM s_foros WHERE sf_seo='".$obj."'");
            $data = mysql_fetch_assoc($query);
            $data['estado'] = mysql_num_rows($query);
            $data['temas'] = mysql_num_rows(mysql_query("SELECT * FROM s_respuestas WHERE sr_foro='".$data['sf_id']."' AND sr_type='1'"));
            $data['res'] = mysql_num_rows(mysql_query("SELECT * FROM s_respuestas WHERE sr_foro='".$data['sf_id']."' AND sr_type='2'"));
            return $data;
        }elseif($type == 3){
            // Display themes publics 
            $data['temas'] = result_array(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='1' LIMIT 15"));
            $a = 0; foreach($data['temas'] AS $row){  
            $data['temas'][$a]['foro'] = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$row['sr_foro']."'")); 
            $data['temas'][$a]['res'] = mysql_num_rows(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='2' AND sr_tema='".$row['sr_id']."'")); 
            $a++; }
            
            $data['res'] = result_array(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='2' LIMIT 15")); 
            $i = 0; foreach($data['res'] as $key){ 
            $data['res'][$i]['tema'] = mysql_fetch_assoc(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='1' AND sr_id='".$key['sr_tema']."'")); 
            $data['res'][$i]['foro'] = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$key['sr_foro']."'")); 
            $data['res'][$i]['tema']['res'] = mysql_num_rows(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='2' AND sr_tema='".$key['sr_id']."'")); 
            $i++; }

            $data['proy'] = result_array(mysql_query("SELECT * FROM s_foros WHERE sf_estado='1' LIMIT 15")); 
            $e = 0; foreach($data['proy'] as $key){ 
            $data['proy'][$e]['temas'] = mysql_num_rows(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='2' AND sr_foro='".$key['sf_id']."'")); 
            $data['proy'][$e]['res'] = mysql_num_rows(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='1' AND sr_foro='".$key['sf_id']."'")); 
            $e++; }
            return $data;
        }elseif($type == 4){
            // Display answers publics 
            $query = mysql_query("SELECT * FROM s_respuestas WHERE sr_type='2'");
            $data = result_array($query);
            return $data;
        }elseif($type == 5){
           // Display themes where id forum
            $query = mysql_query("SELECT * FROM s_respuestas WHERE sr_type='1' AND sr_foro='".$obj."'");
            $data = result_array($query);
            return $data;
        }elseif($type == 6){
          // Display answers where id forum   
            $query = mysql_query("SELECT s.*, f.* FROM s_respuestas AS s LEFT JOIN s_foros AS f ON s.sr_foro=f.sf_id WHERE s.sr_type='2' AND s.sr_foro='".$obj."' LIMIT 15");
            $data = result_array($query);
            $i = 0;
            foreach ($data as $key) {
            $data[$i]['tema'] = mysql_fetch_assoc(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='1' AND sr_id='".$key['sr_tema']."'"));
            $i++;
            }
            return $data;
        }elseif($type == 7){  
            // Display answers where id theme
            $query = mysql_query("SELECT s.*, u.* FROM s_respuestas AS s LEFT JOIN usuarios AS u ON s.sr_user=u.usuario_id WHERE s.sr_type='2' AND s.sr_tema='".$obj."'");
            $data = result_array($query);
            return $data;  
        }elseif($type == 8){
            //Display cats from cat id
          $query = mysql_query("SELECT * FROM s_categorias WHERE sc_foro='".$obj."'");
          $data = result_array($query);
          return $data;
        }elseif($type == 9){
        $query = mysql_query("SELECT * FROM s_categorias WHERE sc_foro='".$obj."'");
        $data['data'] = result_array($query);
        $i = 0;
        foreach($data['data'] as $val => $key){
        $data['data'][$i]['res'] = result_array(mysql_query("SELECT * FROM s_respuestas WHERE sr_type='1' AND sr_cat='".$key['sc_id']."'"));
        $e = 0;
        foreach($data['data'][$i]['res'] as $te => $row){
        $data['data'][$i]['res'][$e]['statics']['respuestas'] = mysql_num_rows(mysql_query("SELECT sr_id FROM s_respuestas WHERE sr_type='2' AND sr_tema='".$row['sr_id']."'"));
        $e++;
        }
        $i++;
        }
        return $data; 
        }elseif($type == 10){
         // Display info the theme where id
         $query = mysql_query("SELECT * FROM s_respuestas WHERE sr_id='".$obj."'");
         $data  = mysql_fetch_assoc($query);
         $data['p'] = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$data['sr_foro']."'"));
         return $data; 
        }elseif($type == 11){
          // load proyects where id user
          $query = mysql_query("SELECT * FROM s_foros WHERE sf_creator='".$obj."'");
          $data = result_array($query);
          return $data;
        }else{ return '0: Define una acción.'; }
     }
   
    /*
    *-----------------------------------------------------
    *               newsup();
    *         @action action new theme or answer
    *-----------------------------------------------------
    */

    function newsup($typee){
    global $w, $tsWeb, $tsActividad;
    $type = $w->setSecure($typee);
    $rt = array(
    'foro' => $w->setSecure($_POST['foro']),
    'user' => $_SESSION['uid'],
    'content' => $w->setSecure($_POST['cont']),
    'type' => $w->setSecure($_POST['type']),
    'date' => time(),
    'tema' => $w->setSecure($_POST['tema']),
    'title' => $w->setSecure($_POST['title']),
    'cat' => $w->setSecure($_POST['cat']),
    );

    if($type == 1){
        // Add answer
        if(!$rt['tema']){ return '0: No se define ningun tipo de acción.';
        }elseif(!$rt['user']){ return '0: Esta acción es solo para registrados.';
        }elseif(!$rt['content']){ return '0: No haz escrito nada, Redacta algo en el campo descripción.';
        }else{
        if(mysql_query("INSERT INTO s_respuestas( sr_type,  sr_foro,  sr_user,  sr_content,  sr_date,  sr_tema) VALUES('2', '".$rt['foro']."', '".$rt['user']."','".$rt['content']."','".$rt['date']."','".$rt['tema']."')")){ 
         $idintosql = mysql_insert_id();
         $lsdkfmask = mysql_fetch_assoc(mysql_query("SELECT * FROM s_respuestas WHERE sr_id='".$rt['tema']."'"));
         $tsWeb->getNotifis($_SESSION['uid'], 42, $idintosql, $lsdkfmask['sr_user']);
         $tsActividad->setActividad(63,$idintosql);
        return '1: Repuesta agregada correctamente.'; }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
        }
     }elseif($type == 2){
         // Add Theme in page
        if(!$rt['foro']){ return '0: No estas publicando en una pagina, comprueba la pagina.';
        }elseif(!$rt['user']){ return '0: Esta acción es solo para registrados.';
        }elseif(!$rt['content']){ return '0: No haz escrito nada, Redacta algo en el campo descripción.';
        }else{
        if(mysql_query("INSERT INTO s_respuestas(sr_type ,sr_title, sr_user, sr_content, sr_date, sr_foro, sr_cat) VALUES('1', '".$rt['title']."','".$rt['user']."','".$rt['content']."','".$rt['date']."','".$rt['foro']."','".$rt['cat']."')")){ 
         $idintosqle = mysql_insert_id();
         $lsdkfmaskfw = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$rt['foro']."'"));
         $tsWeb->getNotifis($_SESSION['uid'], 43, $idintosqle, $lsdkfmaskfw['sr_user']); 
         $tsActividad->setActividad(64,$idintosqle);
         $Cnfgrcndlpyctslsl = mysql_fetch_assoc(mysql_query("SELECT sf_seo, sf_id FROM s_foros WHERE sf_id='".$rt['foro']."'"));$Cnfgrcndlpyct = $Cnfgrcndlpyctslsl['sf_seo'];
        return '1:'.$w->settings['url'].'/soporte/'.$Cnfgrcndlpyct.'?a='.$idintosqle; }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
        }   
    }else{ return '0: Define una acción antes de continuar.'; }
    }

    /*
	*-----------------------------------------------------
	*               support();
	*         @action actions in soporte section
	*-----------------------------------------------------
	*/

	function support($type){
     global $w, $tsWeb, $tsActividad;
     $s = array(
     'name' => $w->setSecure($_POST['name']),
     'seo' => $w->setSecure($_POST['seo']),
     'img' => $w->setSecure($_POST['img']),
     'icon' => $w->setSecure($_POST['icon']),
     'creator' => $_SESSION['uid'],
     'desc' => $w->setSecure($_POST['desc']),
     'date' => time(),
     'idsop' => $w->setSecure($_POST['idsop']),
     );

     $c = array(
      'foro' => $w->setSecure($_POST['p']),
      'name' => $w->setSecure($_POST['name']),
      'seo' => $w->setSecure($_POST['seo']),
      'desc' => $w->setSecure($_POST['desc']),
      'img' => $w->setSecure($_POST['img']),
      );
      $text ='/^[a-z0-9 .,()üÜáéíóúÁÉÍÓÚñÑ]{5,100}$/i';

     $sin_espacios = count_chars($s['seo'], 1);
    if(preg_match($text,$s['seo'])){ $caractesfnc = 1; }else{ $caractesfnc = 0; }

    $sin_espacioscat = count_chars($c['seo'], 1);
    if(preg_match($text,$c['seo'])){ $caractesfncat = 1; }else{ $caractesfncat = 0; }

    if($type == 1){
      //Add proyect
    if(!$s['name']){  return '0: Escribe un nombre para tu pagina.';
    }elseif(!$s['seo']) { return '0: Escribe un nombre corto para tu pagina';
    }elseif(!empty($sin_espacios[32])){ return '0: El nombre corto no puede contener espacios.';
    //     }elseif($caractesfnc == 0){ return '0: No se permiten caracteres especiales en el nombre corto.';
    }elseif(!$s['img']){ return '0: Agrega una imagen.';
    }elseif($s['img'] == 's'){ return '0: La imagen no es valida.';
    }elseif(!$s['icon']){ return '0: Selecciona un icono.';
    }elseif(!$s['creator']){ return '0: Esta accion es solo para usuario registrados.';
    }elseif(!$s['desc']){ return '0: Agrega una descripción.';
    }else{
     $snfglk = mysql_num_rows(mysql_query("SELECT * FROM s_foros WHERE sf_seo='".$s['seo']."'"));
     if($snfglk > 0){ return '0: Este nombre corto ya esta registrado, Prueba con otro nombre.'; }else{
      if(mysql_query("INSERT INTO s_foros(sf_name, sf_seo, sf_img, sf_icon, sf_creator, sf_desc, sf_date) VALUES('".$s['name']."', '".$s['seo']."', '".$s['img']."', '".$s['icon']."', '".$s['creator']."', '".$s['desc']."', '".$s['date']."')")){ 
      $foroidin = mysql_insert_id();
     mysql_query("INSERT INTO s_categorias(sc_foro, sc_name, sc_seo, sc_desc, sc_img) VALUES('".$foroidin."', 'General', 'general', 'Categoria por defecto', 'ebook.png')");
         $tsWeb->getNotifis('2', 44, $foroidin, $_SESSION['uid']);
         $tsActividad->setActividad(62,$foroidin);
     return '1: Pagina creada correctamente, Seras redirigido de inmediato a tu nuevo proyecto.'; }else{ return '0: Ocurrio un error al ejecutar lo solicitado, Prueba nuevamente.'; }
     }
    } 
    }elseif($type == 2){
      //Edit proyect
      $sndkfj = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$s['idsop']."'"));
        if(!$s['name']){  return '0: Escribe un nombre para tu pagina.';
    }elseif(!$s['seo']) { return '0: Escribe un nombre corto para tu pagina';
    }elseif($s['seo'] != $sndkfj['sf_seo']){ return '0: No se puede editar el nombre corto.';
    }elseif(!$s['img']){ return '0: Agrega una imagen.';
    }elseif(!$s['icon']){ return '0: Selecciona un icono.';
    }elseif(!$s['creator']){ return '0: Esta accion es solo para usuario registrados.';
    }elseif(!$s['desc']){ return '0: Agrega una descripción.';
    }elseif($sndkfj['sf_creator'] != $_SESSION['uid']){ return '0: El proyecto que intentas editar no es tuyo.';
    }else{
     $snfglk = mysql_num_rows(mysql_query("SELECT * FROM s_foros WHERE sf_seo='".$s['seo']."'"));
      if(mysql_query("UPDATE s_foros SET sf_name = '".$s['name']."', sf_img ='".$s['img']."', sf_icon = '".$s['icon']."', sf_creator = '".$s['creator']."', sf_desc = '".$s['desc']."' WHERE sf_seo='".$s['seo']."' ")){ 
        $skeklwlgs21 = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_seo='".$s['seo']."'"));
        $tsWeb->getNotifis($wuser->uid, 56, $skeklwlgs21['sf_id'], 0); 
        $tsActividad->setActividad(65,$skeklwlgs21['sf_id']);
        return '1: Pagina Editada correctamente, Se actualizara la pagina. Espera un momento...'; 
      }else{ return '0: Ocurrio un error al ejecutar lo solicitado, Prueba nuevamente.'; }
    }     
    }elseif($type == 3){
      //Add category
     if(!$c['foro']){ return '0: No se ha definido un proyecto padre.';
     }elseif(!$c['name']){ return '0: Agrega un nombre.';
     }elseif(!$c['seo']){ return '0: Agrega un nombre corto';
     }elseif(!empty($sin_espacioscat[32])){ return '0: El nombre corto no puede contener espacios.';
     }elseif($caractesfnc == 0){ return '0: El nombre corto no puede contener caracteres especiales.';
     }elseif(!$c['desc']){ return '0: agrega una descripción.';
     }else{
       $snfglkwe = mysql_num_rows(mysql_query("SELECT * FROM s_categorias WHERE sc_seo='".$c['seo']."' AND sc_foro='".$c['foro']."'"));
       if($snfglkwe > 0){ return '0: La categoria ya existe en este foro.'; }else{
       if(mysql_query("INSERT INTO s_categorias(sc_foro, sc_name, sc_seo, sc_desc, sc_img) VALUES('".$c['foro']."', '".$c['name']."', '".$c['seo']."', '".$c['desc']."', '".$c['img']."')")){ 
        $asafaIdInserQueSql = mysql_insert_id();
        $tsWeb->getNotifis($wuser->uid, 57, $asafaIdInserQueSql, 0); 
        $tsActividad->setActividad(66,$asafaIdInserQueSql);
        return '1: Categoria agregada correctamente.'; 
       }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
       }
     }
   }elseif($type == 4){
    // Delete category
    $objsd = $w->setSecure($_POST['objs']);
    $forosd = $w->setSecure($_POST['forsd']);
    $kldfksmw = mysql_fetch_assoc(mysql_query("SELECT * FROM s_categorias WHERE sc_id='".$objsd."'"));
    $ksofkgne = mysql_fetch_assoc(mysql_query("SELECT * FROM s_foros WHERE sf_id='".$forosd."'"));
    if($kldfksmw['sc_foro'] != $forosd){ return '0: Esta categoria no pertenece a tu proyecto.';
    }elseif($ksofkgne['sf_creator'] != $_SESSION['uid']){ return '0: Este proyecto no es tuyo...';
    }else{
      $knsofnoler = mysql_fetch_assoc(mysql_query("SELECT * FROM s_categorias WHERE sc_foro='".$forosd."' ORDER BY sc_id DESC LIMIT 1"));
    if($objsd != $knsofnoler['sc_id']){
    if(mysql_query("UPDATE s_respuestas SET sr_cat='".$knsofnoler['sc_id']."' WHERE sr_foro='".$forosd."' AND sr_cat='".$objsd."'")){
    if(mysql_query("DELETE FROM s_categorias WHERE sc_id='".$objsd."'")){
    $skfnmbctgrelmnda = mysql_fetch_assoc(mysql_query("SELECT * FROM s_categorias WHERE sc_id='".$objsd."'")); 
      $tsWeb->getNotifis($wuser->uid, 58, $objsd, "{name'".$skfnmbctgrelmnda['sc_name']."', seo:'".$skfnmbctgrelmnda['sc_seo']."', img:'".$skfnmbctgrelmnda['sc_img']."', desc: '".$skfnmbctgrelmnda['sc_desc']."'}"); 
      $tsActividad->setActividad(67,$objsd, "{name'".$skfnmbctgrelmnda['sc_name']."', seo:'".$skfnmbctgrelmnda['sc_seo']."', img:'".$skfnmbctgrelmnda['sc_img']."', desc: '".$skfnmbctgrelmnda['sc_desc']."'}");
    return '1: Eliminado correctamentes.'; 
    }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
    }else{ return '0: Ocurrio un error, Intenta nuevamente.'; }
    }else{ return '0: La categoria por defecto no se puede eliminar.'; }
    }
    }else{
        return '0: Define una acción.';
    }

	}
	

}
