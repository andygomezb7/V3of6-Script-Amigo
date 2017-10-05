<?php

if (!defined('TS_HEADER'))
    exit('No se permite el acceso directo ala web');
/**
 * Modelo para pedir servicio
 *
 * @name    c.hosting.php
 * @author  Wortit developers
 */
class tsHosting
{
    // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsHosting();
        }
        return $instance;
    }

function getTicketss(){
		global $wuser;
		//CONSULTA
		$query = mysql_query('SELECT * FROM s_tickets ORDER BY fecha DESC');
		//DATOS
		$data = result_array($query);
		//PROCESAMOS DATOS Y OBTENEMOS LAS RESPUESTAS
		foreach($data as $s){
			$query = mysql_query('SELECT * FROM s_respuestas WHERE tid = \''.$s['id'].'\' ORDER BY fecha DESC LIMIT 1');
			//
			$s['respuestas'] = result_array($query);
		}
		
		return $data;
	}

    function servicios(){
    $array = array( 
    1 => array( 'text' => 'blog', 'value' => '2'),
    2 => array( 'text' => 'BIO', 'value' => '7'),
    3 => array( 'text' => 'SM', 'value' => '12'),
    4 => array( 'text' => 'MEGA', 'value' => '19'),
    5 => array( 'text' => 'Plus', 'value' => '10'),
    6 => array( 'text' => 'Standar', 'value' => '20'),
    7 => array( 'text' => 'Timeup', 'value' => '10'),
    8 => array( 'text' => 'Upgrade', 'value' => '20'),
    9 => array( 'text' => 'Uploading', 'value' => '25'),
    );

    	return $array;
    }


    function obtservicios($s){
    $array = array( 
    1 => array( 'text' => 'blog', 'value' => '2'),
    2 => array( 'text' => 'BIO', 'value' => '7'),
    3 => array( 'text' => 'SM', 'value' => '12'),
    4 => array( 'text' => 'MEGA', 'value' => '19'),
    5 => array( 'text' => 'Plus', 'value' => '10'),
    6 => array( 'text' => 'Standar', 'value' => '20'),
        7 => array( 'text' => 'Timeup', 'value' => '10'),
    8 => array( 'text' => 'Upgrade', 'value' => '20'),
    9 => array( 'text' => 'Uploading', 'value' => '25'),
    );

    	return $array[$s];
    }


    function asunto(){
    $array = array( 
    1 => array( 'text' =>'Soporte'),
    2 => array('text' => 'Nuevo servicio'),
    3 => array('text' => 'Otros'),
    4 => array('text' => 'Compra hosting'),
    5 => array('text' => 'Diseña mi web'),
    6 => array('text' => 'Reportar webs'),
    );

    	return $array;
    }

	function getTickets(){
		global $wuser;
		//CONSULTA
		$query = mysql_query('SELECT * FROM s_tickets WHERE user = \''.$_SESSION['uid'].'\' ORDER BY fecha DESC');
		//DATOS
		$data = result_array($query);
		//PROCESAMOS DATOS Y OBTENEMOS LAS RESPUESTAS
		$i = 0;
		foreach($data as $s){
			if($s['asunto'] == 1) $data[$i]['asuntos'] = 'Soporte';
			elseif($s['asunto'] == 2) $data[$i]['asuntos'] = 'Nuevo servicio';
			elseif($s['asunto'] == 3) $data[$i]['asuntos'] = 'Otros';

			$skdf = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$s['user']."'"));
			$data[$i]['usuario'] = $skdf['usuario_nombre'];

			if($s['asunto'] == 2){ 
				$server = $this->obtservicios($s['servicio']);
				if($s['servicio'] == NULL){ $data[$i]['eservicio'] = "No especificado"; }else{ $data[$i]['eservicio'] = $server['text']; }
		     }

			$i++;
		}
		
		return $data;
	}

	function getTodoTickets(){
	$query = mysql_query('SELECT * FROM s_tickets ORDER BY fecha DESC');
    $data = result_array($query);

    	$i = 0;
		foreach($data as $s){
			if($s['asunto'] == 1) $data[$i]['asuntos'] = 'Soporte';
			elseif($s['asunto'] == 2) $data[$i]['asuntos'] = 'Nuevo servicio';
			elseif($s['asunto'] == 3) $data[$i]['asuntos'] = 'Otros';

			$skdf = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$s['user']."'"));
			$data[$i]['usuario'] = $skdf['usuario_nombre'];

			if($s['asunto'] == 2){ 
				$server = $this->obtservicios($s['servicio']);
				if($s['servicio'] == NULL){ $data[$i]['eservicio'] = "No especificado"; }else{ $data[$i]['eservicio'] = $server['text']; }
		     }

			$i++;
		}

    return $data;
	}
	
	function getTicket($id){
		global $wuser, $u;
		//CONSULTA
		$query = mysql_query('SELECT * FROM s_tickets WHERE id = \''.(int)$id.'\'') or die(mysql_error());
		//DATOS
		$data = mysql_fetch_array($query);
		
		if($data['user'] != $$_SESSION['uid'] && !$wuser->is_admin)
		return false; 
		
		if($u['rango'] == 1) mysql_query('UPDATE s_tickets SET leido = \'1\'');

		//PROCESAMOS DATOS Y OBTENEMOS LAS RESPUESTAS
			$query = mysql_query('SELECT * FROM s_respuestas WHERE tid = \''.(int)$id.'\' ORDER BY fecha DESC');
			//
			$data['respuestas'] = result_array($query);
			$res = $data['respuestas'];

				$i = 0;
		foreach($res as $s){
		$res[$i]['user'] = $wuser->loadUserN($s['user']);
		$i++;
	}
$data['respuestas'] = $res;

			
			
		
		return $data;
	}
	
	function newTicket(){
		global $wuser, $w, $u;
		$asunto = $w->setSecure($_POST['asunto']);
		$email = $w->setSecure($_POST['email']);
		$ref = $w->setSecure($_POST['ref']);
		$sdkf = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE identi='".$ref."'"));
		$refr = $sdkf['usuario_nombre'];
		$promocode = $w->setSecure($_POST['promocode']).' || y ref: '.$refr;
		if($asunto == 2){ $servicio = $w->setSecure($_POST['serv']); }else{ $servicio == 0; }
		$problema = $w->setSecure($_POST['problema']);
        if(!$asunto or !$email){ return '0: Rellena todos los datos.'; }else{
        	if($asunto == 2 && !$servicio){ return '0: Selecciona un servicio.'; }else{
		if(mysql_query('INSERT INTO s_tickets (user, asunto, problema, servicio, email, fecha, s_promocode) VALUES (\''.$_SESSION['uid'].'\', \''.$asunto.'\', \''.$problema.'\', \''.$servicio.'\', \''.$email.'\', \''.time().'\', \''.$promocode.'\')')){
return '1: Ticket enviado correctamente, En breve responderemos con un email a tu peticion.';
$cabeceras .= 'To: '.$u['usuario_nombre'].' <'.$u['usuario_email'].'>' . "\r\n";
$cabeceras .= 'From: <cloud@wortit.net>' . "\r\n";
$cabeceras .= 'Cc: cloud@wortit.net' . "\r\n";
$cabeceras .= 'Bcc: cloud@wortit.net' . "\r\n";
mail($u['usuario_email'], 'Wortit | Ticket creado correctamente.', 'Hola, '.$u['usuario_nombre'].' <br><br>Muchas gracias por Crear tu ticket, en breve responderemos a tu peticion.<br><br> Para enviar mas tickets porfavor dirigirse a: <a href="http://www.wortit.net/hosting/">www.wortit.net/hosting/</a>', $cabeceras);
}else{ return '0: Ocurrio un error en enviar el ticket, Vuelve a intentarlo.'; }
	  }
	 }
	}

	function responderTicket(){
		global $wuser, $w;
		$id = intval($_GET['id']);
		$respuesta = $w->setSecure($_POST['respuesta']);
	$data = $this->getTicket($id);
		if($data['user'] != $_SESSION['uid'] && !$wuser->is_admod)
		return false;
		
		if($wuser->is_admod)
		mysql_query('UPDATE s_tickets SET estado = \'2\'');
		
		if(mysql_query('UPDATE s_tickets SET leido = \'0\'')){
		if(mysql_query('INSERT INTO s_respuestas (tid, respuesta, user, fecha) VALUES (\''.(int)$id.'\', \''.$respuesta.'\', \''.$_SESSION['uid'].'\', \''.time().'\')'))
		return true;
		}
	}

	function deleteTicket(){
		global $wuser, $w;
		$id = (int)$_GET['id'];
		$data = $this->getTicket($id);
		if($data['user'] != $_SESSION['uid'] && !$wuser->is_admod)
		return false;

		if(mysql_query('DELETE FROM s_tickets WHERE id = \''.$id.'\'')){
			if(mysql_query('DELETE FROM s_respuestas WHERE tid = \''.$id.'\''))
			return true;
		}
	}
	
	function solucionarTicket(){
		global $wuser, $w, $u;
		$id = (int)$_POST['id'];
		$data = $this->getTicket($id);
		if($data['user'] != $_SESSION['uid'] && $u['rango'] != 1 && $u['rango'] != 19)
		return '0: No tienes derechos para hacer esta acción.';

		if(mysql_query('UPDATE s_tickets SET estado = \'3\' WHERE id = \''.$id.'\'')){
			return '1: Actualizado a Solucionado.';
		}
	}

    function newservicio(){
    	global $w;
    	$a = array(
        'user' => $w->setSecure($_POST['user']),
        'plan' => $w->setSecure($_POST['plan']),
        'valor' => $w->setSecure($_POST['valor']),
        'cont' => $w->setSecure($_POST['cont']),
        'date' => time(),
    	);

    if(!$a['user'] or !$a['plan'] or !$a['valor']){ 
    return 'Rellena los campos.';
    }else{
        if(mysql_query("INSERT INTO h_servicios(hs_user, hs_plan, hs_valor, hs_date, hs_datos) VALUES('".$a['user']."', '".$a['plan']."', '".$a['valor']."', '".$a['date']."', '".$a['cont']."' )")) return '1: Creado correctamente.';else return '0: Ocurrio un error, intenta nuevamente.';
    }
    }

    function todoserviciosh(){
    	global $w;
      $query = mysql_query("SELECT * FROM h_servicios");
      $data = result_array($query);
      
      $i = 0;
      foreach($data AS $row){
      	$sdj = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$row['hs_user']."'"));
       $data[$i]['usuario'] = $sdj['usuario_nombre'];
       $data[$i]['plan'] = $this->obtservicios($row['hs_plan']);
       $data[$i]['datos'] = $w->BBcode($row['hs_datos']);
      	$i++;
      }

    	return $data;
    }

      function todoservicioshuser(){
      	global $w;
      $query = mysql_query("SELECT * FROM h_servicios WHERE hs_user='".$_SESSION['uid']."'");
      $data = result_array($query);
      
      $i = 0;
      foreach($data AS $row){
      	$sdj = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$row['hs_user']."'"));
       $data[$i]['usuario'] = $sdj['usuario_nombre'];
       $data[$i]['plan'] = $this->obtservicios($row['hs_plan']);
       $data[$i]['datos'] = $w->BBcode($row['hs_datos']);
      	$i++;
      }

    	return $data;
    }

}
