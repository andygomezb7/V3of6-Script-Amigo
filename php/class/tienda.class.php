<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');

/**
 * Modelo para el control de la tienda v2
 *
 * @name    c.tienda.php
 * @author  aperpen
 */

class tsTienda  {

	// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;
		
		if( is_null($instance) ){
			$instance = new tsTienda();
    	}
		return $instance;
	}
	
	function getProducto($id){
	$query = mysql_query('SELECT * FROM t_productos WHERE id =\''.(int)$id.'\'');
    $num = mysql_num_rows($query);
	if($num >= 1){
	$data = mysql_fetch_assoc($query); 

	//CONVERTIMOS TIPOS Y OBJETOS
	$data['tipose'] = $p['type']; $idProducto = $data['id'];
	$data['exist'] = ($_SESSION['tcar'][$idProducto]) ? 1 : 2;
	if($data['type'] == 1){
	$obj = mysql_fetch_array(mysql_query('SELECT name FROM rangos WHERE id_rango = \''.(int)$data['obj'].'\''));
	$data['obj'] = $obj['name'];
	$data['typee'] = 'Rango';
	}
	if($data['type'] == 2){
	$obj = mysql_fetch_array(mysql_query('SELECT m_title, m_image FROM admin_medals WHERE m_id = \''.(int)$data['obj'].'\''));
	$data['obj'] = $obj['m_title'];
	$data['typee'] = 'Medalla';
	$data['imagen'] = $obj['m_image'];
	}
	if($p['type'] == 3){
	$data['typee'] = 'Puntos para dar';
	}
	if($data['type'] == 4){
	$data['obj'] = '-';
	$data['typee'] = 'Cambio de nick';
	}
	if($data['type'] == 5){
	include("c.hosting.php");
	$tsHosting =& tsHosting::getInstance();
	$server = $this->obtservicios($s['servicio']);
	$data['typee'] = 'Cambio de nick';
    $data['obj'] = $server['text'];
	}

	return $data; 
	}else{ return '0: Error #Cep2'; }
	}
	function editProducto($id){
		global $w;
		
	$id = (int)$_GET['id'];
	$type = (int)$_POST['type'];
	$precio = (int)$_POST['precio'];
	$tipopro = $w->setSecure($_POST['obttrhe']);
	$cantpro = $w->setSecure($_POST['valuesval']);
	$tipocantpro = $w->setSecure($_POST['valuesvaltwo']);
	if(mysql_num_rows(mysql_query('SELECT id FROM t_productos WHERE id = \''.(int)$id.'\''))){

	//AGREGAR POR NOMBRE
			
				if(strlen($_POST['val']) <= 2)
			$val = (int)$_POST['val'];
			
			elseif($type == 1 || $type == 2){
				
			$val = $w->setSecure($_POST['val']);
			
	if($type == 1){
	$consulta = 'SELECT rango_id FROM u_rangos WHERE r_name = \''.$w->setSecure($val).'\'';
	$id = mysql_fetch_array(mysql_query($consulta));
				//RANGO = ID
				$val = (int)$id['rango_id'];
	}else{
	$consulta = 'SELECT medal_id FROM  w_medallas WHERE m_title = \''.$w->setSecure($val).'\'';
	$id = mysql_fetch_array(mysql_query($consulta));
				//RANGO = ID		
				$val = (int)$id['medal_id'];
  }
			}

			if(empty($val))
			return '0: Error #Cep5';
			if(mysql_query('UPDATE t_productos SET type = \''.(int)$type.'\', precio = \''.(int)$precio.'\', obj = \''.(int)$val.'\', obj_3 = \''.(int)$tipopro.'\', obj_4 = \''.(int)$cantpro.'\', obj_5 = \''.(int)$tipocantpro.'\' WHERE id = \''.(int)$id.'\''))
			return '1'; // EDITADO
			else 
			return '0';
			
			}else
			return '0';
	}
	function getProductos($filtro, $tipo){
	//Hacemos la consulta	
	if($filtro == 1) $extras = 'WHERE obj_3='.$tipo.''; elseif($filtro == 2) $extras = 'WHERE '.$tipo; else $extras = '';
	$query = mysql_query('SELECT * FROM t_productos '.$extras.'');
	//Datos o error?
	if($query){
	if(mysql_num_rows($query) >= 1){
	$data = result_array($query);
	
	//CONVERTIMOS TIPOS Y OBJETOS
	$i = 0;
	foreach($data as $p){
	$data[$i]['tipose'] = $p['type']; $idProducto = $p['id'];
	$data[$i]['exist'] = ($_SESSION['tcar'][$idProducto]) ? 1 : 2;
	$data[$i]['precioo'] = ($p['obj_3'] == 2 || $p['obj_3'] == 4) ? $p['obj_4'] : $p['precio'];
	if($p['type'] == 1){
	$obj = mysql_fetch_array(mysql_query('SELECT name FROM rangos WHERE id_rango = \''.(int)$p['obj'].'\''));
	$data[$i]['obj'] = $obj['name'];
	$data[$i]['typee'] = 'Rango';
	}
	if($p['type'] == 2){
	$obj = mysql_fetch_array(mysql_query('SELECT m_title, m_image FROM admin_medals WHERE m_id = \''.(int)$p['obj'].'\''));
	$data[$i]['obj'] = $obj['m_title'];
	$data[$i]['typee'] = 'Medalla';
	$data[$i]['imagen'] = $obj['m_image'];
	}
	if($p['type'] == 3){
	$data[$i]['typee'] = 'Puntos para dar';
	}
	if($p['type'] == 4){
	$data[$i]['obj'] = '-';
	$data[$i]['typee'] = 'Cambio de nick';
	}
	if($p['type'] == 5){
	include("c.hosting.php");
	$tsHosting =& tsHosting::getInstance();
	$server = $this->obtservicios($s['servicio']);
	$data[$i]['typee'] = 'Cambio de nick';
    $data[$i]['obj'] = $server['text'];
	}
		$i++;
	}
	
	return $data;
	}else{
	return 'No hay productos.';
	}
	}else
	return 'Error #Stp1';
	}

	function getCompras(){
	//Hacemos la consulta	
	$queryje = mysql_query("SELECT * FROM t_compras WHERE comp_user='".$_SESSION['uid']."'");
	//Datos o error?
	if($query){
	if(mysql_num_rows($query) >= 1){
	$data = result_array($queryje);
	foreach($data as $q){
    $query = mysql_query("SELECT * FROM t_productos WHERE id='".$q['comp_produc']."'");
    $datas = result_array($data);
	}
	//CONVERTIMOS TIPOS Y OBJETOS
	$i = 0;
	foreach($datas as $p){
	if($p['type'] == 1){
		$obj = mysql_fetch_array(mysql_query('SELECT name FROM rangos WHERE id_rango = \''.(int)$p['obj'].'\''));
	$data[$i]['obj'] = $obj['name'];
	$data[$i]['typee'] = 'Rango';
		}
			if($p['type'] == 2){
		$obj = mysql_fetch_array(mysql_query('SELECT m_title FROM admin_medals WHERE m_id = \''.(int)$p['obj'].'\''));
	$data[$i]['obj'] = $obj['m_title'];
	$data[$i]['typee'] = 'Medalla';
		}
		if($p['type'] == 3){
	$data[$i]['typee'] = 'Puntos para dar';
		}
		if($p['type'] == 4){
	$data[$i]['obj'] = '-';
	$data[$i]['typee'] = 'Cambio de nick';
		}
		if($p['type'] == 5){
			include("c.hosting.php");
	$tsHosting =& tsHosting::getInstance();
	$server = $this->obtservicios($s['servicio']);

			$data[$i]['typee'] = 'Cambio de nick';
			$data[$i]['obj'] = $server['text'];
		}
		$i++;
	}
	
	return $data;
	}else{
	return 'No hay productos.';
	}
	}else
	return 'Error #Stp1';	
	}
	
	function add_rango($precio, $rango, $type = 0, $tipopro, $cantpro, $tipocantpro){
		global $w, $wuser;
		//POR NOMBRE O POR ID?
		$consulta = empty($type) ? 'SELECT id_rango FROM rangos WHERE id_rango = \''.(int)$rango.'\'' : 'SELECT id_rango FROM rangos WHERE r_name = \''.$w->setSecure($rango).'\'';
		//COMPROBAMOS QUE EL RANGO EXISTE
		$rows = mysql_num_rows(mysql_query($consulta));

		if($rows == 1){
			//SE HIZO POR NOMBRE?
			if($type){
				//EN ESE CASO OBTENEMOS EL ID
				$id = mysql_fetch_array(mysql_query($consulta));
				//RANGO = ID
			
				$rango = (int)$id['id_rango'];
			}else
			$rango = (int)$rango;
	
		//PEQUEÑAS VALIDACIÓNES
		if(empty($rango))
    		return '0: No existe el rango';
			
		if($precio != 0 && empty($precio))
			return '0: No hay precio definido';
			
		if(!is_int($rango))
			return '0: No hay rango';
			
		if(!is_int($precio))
			return '0: No hay precio';



		//INTENTAMOS CREAR EL PRODUCTO
		if(mysql_query('INSERT INTO t_productos (type, precio, obj, obj_3, obj_4, obj_5, obj_2) VALUES (\'1\', \''.(int)$precio.'\', \''.(int)$rango.'\', \''.(int)$tipopro.'\', \''.(int)$cantpro.'\', \''.(int)$tipocantpro.'\', \''.$wuser->uid.'\')'))		
		return '1: Agregado'; else return '0: ocurrio un error';

		//COLUMNAS DUPLICADAS
		}elseif($rows > 1){
		return '0: Existe uno o mas iguales';

		}else{
		return '0: Quien sabe';
		}
	}
	function add_medalla($precio, $medalla, $type = 0, $tipopro, $cantpro, $tipocantpro){
		global $w, $wuser;
		//POR NOMBRE O POR ID?
		$consulta = empty($type) ? 'SELECT m_id FROM admin_medals WHERE m_id = \''.(int)$medalla.'\'' : 'SELECT m_id FROM  admin_medals WHERE m_title = \''.$w->setSecure($medalla).'\'';
		//COMPROBAMOS QUE EL RANGO EXISTE
		$rows = mysql_num_rows(mysql_query($consulta));

		if($rows == 1){
			//SE HIZO POR NOMBRE?
			if($type){
				//EN ESE CASO OBTENEMOS EL ID
				$id = mysql_fetch_array(mysql_query($consulta));
				//MEDALLA = ID
				$medalla = (int)$id['m_id'];
				
			}else
			$medalla = (int)$medalla;
	
		//PEQUEÑAS VALIDACIÓNES
		if(!is_int($medalla))
			return '0: No existe la medalla';
			
		if(empty($medalla))
    		return '0: No insertaste la medalla';
			
		if($precio != 0 && empty($precio))
			return '0: No hay precio';
			
			
		if(!is_int($precio))
			return '0: El precio no es valido';



		//INTENTAMOS CREAR EL PRODUCTO
		if(mysql_query('INSERT INTO t_productos (type, precio, obj, obj_3, obj_4, obj_5, obj_2) VALUES (\'2\', \''.(int)$precio.'\', \''.(int)$medalla.'\', \''.(int)$tipopro.'\', \''.(int)$cantpro.'\', \''.(int)$tipocantpro.'\', \''.$wuser->uid.'\')'))		
		return '1: Agregado';
		else
			return '0: Ocurrio un error';

		//COLUMNAS DUPLICADAS
		}elseif($rows > 1){
		return '0: Existe uno o mas iguales';

		}else{
		return '0: Quien sabe';
		}
	}
	
	function add_puntos($precio, $puntos, $tipopro, $cantpro, $tipocantpro){
		global $w, $wuser;
		//VALIDACIONES
		if($_POST['precio'] != 0 && empty($_POST['precio']))
		return '0 No hay precio';
		
		if(!is_int($precio))
		return '0: El precio no es valido';
		
		if(!is_int($puntos))
		return '0: Los puntos no son validos';
		
		//INTENTAMOS CREAR EL PRODUCTO
		if(mysql_query('INSERT INTO t_productos (type, precio, obj, obj_3, obj_4, obj_5, obj_2) VALUES (\'3\', \''.(int)$precio.'\', \''.(int)$puntos.'\', \''.(int)$tipopro.'\', \''.(int)$cantpro.'\', \''.(int)$tipocantpro.'\', \''.$wuser->uid.'\')'))		
	return '1: Agregado';
		else
			return '0:Ocurrion un error';
	}
	
	function add_cambio($precio, $puntos, $tipopro, $cantpro, $tipocantpro){
		global $w, $wuser;
		//VALIDACIONES
		    if($_POST['precio'] != 0 && empty($_POST['precio']))
		return '0: No hay precio';
		
		if(!is_int($precio))
		return '0: El precio no es valido';
		
		
	
		//INTENTAMOS CREAR EL PRODUCTO
		if(mysql_query('INSERT INTO t_productos (type, precio, obj, obj_3, obj_4, obj_5, obj_2) VALUES (\'4\', \''.(int)$precio.'\', \''.(int)$puntos.'\', \''.(int)$tipopro.'\', \''.(int)$cantpro.'\', \''.(int)$tipocantpro.'\', \''.$wuser->uid.'\')'))		
	return '1:Agregado';
		else
			return '0: Ocurrio un error';
	}

		function add_Hosting($precio, $obj, $tipopro, $cantpro, $tipocantpro){
		global $w, $wuser; 
		//VALIDACIONES
		    if($_POST['precio'] != 0 && empty($_POST['precio']))
		return '0: No hay precio';
		
		if(!is_int($precio))
		return '0: El precio uno es valido';
		
		
	
		//INTENTAMOS CREAR EL PRODUCTO
		if(mysql_query('INSERT INTO t_productos (type, precio, obj, obj_3, obj_4, obj_5, obj_2) VALUES (\'5\', \''.(int)$precio.'\', \''.(int)$puntos.'\', \''.(int)$tipopro.'\', \''.(int)$cantpro.'\', \''.(int)$tipocantpro.'\', \''.$wuser->uid.'\')'))		
	return '1: Agregado';
		else
			return '0: Ocurrio un error';
	}
	
	function delProducto(){
       $id = (int)$_GET['id'];
		if(mysql_num_rows(mysql_query('SELECT id FROM t_productos WHERE id = \''.(int)$id.'\''))){
		if(mysql_query('DELETE FROM t_productos WHERE id = \''.(int)$id.'\''))
		return '1';
		else
		return '0';
		}else{
		return '0';
		}
		
	}
	
	function nuevoProducto(){
		global $w;
	$type = (int)$_POST['type'];
	
	if(empty($type))
	return '0: Error #Vtn1';
	$_POST['precio'] = (int)$_POST['precio'];
	$tipopro = $w->setSecure($_POST['obttrhe']);
	$cantpro = $w->setSecure($_POST['valuesval']);
	$tipocantpro = $w->setSecure($_POST['valuesvaltwo']);
		//RANGO
	if($type == 1){
			//VALIDACIONES
			if($_POST['precio'] != 0 && empty($_POST['precio'])) return '0: Error #Vtr7';
			if($_POST['opt'] != 0 && $_POST['opt'] != 1) return '0: Error #Vtn2';
			if(empty($_POST['val'])) return '0: Error #Vtr6';

			//DATOS
			$precio = (int)$_POST['precio'];
			if(is_int($_POST['val'])) $val = (int)$_POST['val'];
			else
			$val = $w->setSecure($_POST['val']);
			$type = (int)$_POST['opt'];
			
			//RETORNAR
		return $this->add_rango($precio, $val, $type, $tipopro, $cantpro, $tipocantpro);
		}
		
		//MEDALLA
		if($type == 2){
			//VALIDACIONES
			if($_POST['precio'] != 0 && empty($_POST['precio']))
			return '0';
			
			if($_POST['opt'] != 0 && $_POST['opt'] != 1)
			return '0';
			
			if(empty($_POST['val']))
			return '0';


			//DATOS
			$precio = (int)$_POST['precio'];
	     	if(is_int($_POST['val']))
			$val = (int)$_POST['val'];
			else
			$val = $w->setSecure($_POST['val']);
			
			$type = (int)$_POST['opt'];
			
			//RETORNAR
		return $this->add_medalla($precio, $val, $type, $tipopro, $cantpro, $tipocantpro);
		}
		
		//PUNTOS PARA DAR
		if($type == 3){
			//VALIDACIONES
			if($_POST['precio'] != 0 && empty($_POST['precio']))
			return '0';
	
			if(empty($_POST['val']))
			return '0';

			//DATOS
			$precio = (int)$_POST['precio'];
			$val = (int)$_POST['val'];
			
			//RETORNAR
			return $this->add_puntos($precio, $val, $tipopro, $cantpro, $tipocantpro);
		}
		
		//CAMBIO NICK
		if($type == 4){
			//VALIDACIONES
			if($_POST['precio'] != 0 && empty($_POST['precio']))
			return '0';

			//DATOS
			$precio = (int)$_POST['precio'];
			
			//RETORNAR
			return $this->add_cambio($precio, 0, $tipopro, $cantpro, $tipocantpro);
		}

				//CAMBIO NICK
		if($type == 5){
			//VALIDACIONES
			if($_POST['precio'] != 0 && empty($_POST['precio']))
			return '0';
			//DATOS
			$val = (int)$_POST['val'];
			$precio = (int)$_POST['precio'];
			
			//RETORNAR
			return $this->add_Hosting($precio, $val, $tipopro, $cantpro, $tipocantpro);
		}
	}
	function comprarRango($id){
		$data = $this->getProducto($id);
        if($data['type'] != 1)
		return '0: #Crt1';
	
		if(mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos - \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'')){
		if(mysql_query('UPDATE `usuarios` SET rango =  \''.(int)$data['obj'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'')){ 
		mysql_query("INSERT INTO t_compras (comp_produc, comp_user, comp_hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."')"); 
		return '1: Comprado correctamente.';
		}else{
		mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos + \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
		return '0: Error #Crt3. Tus puntos te han sido devueltos.';
		}
		}else{
		return '0: Error #Crt2';
		}
	}
	
		function comprarMedalla($id){
    $data = $this->getProducto($id);
            if($data['type'] != 2) return '#Cmt1';
	
		if(mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos - \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'')){
		if(mysql_query('INSERT INTO `admin_medals_assign` (`m_id`, `ma_user`, `ma_date`) VALUES (\''.(int)$data['obj'].'\', \''.$_SESSION['uid'].'\', \''.time().'\')')){
	    mysql_query("INSERT INTO t_compras (comp_produc, comp_user, comp_hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."')");
		return '1: Comprado correctamente.';
		}else{
		mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos + \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
		return '0: Error #Cmt3. Tus puntos te han sido devueltos.';
		}
		}else{
		return '0: Error #Cmt2';
		}
	}
	function comprarHosting($id){
					global $u, $w;
		$data = $this->getProducto($id);
        if($data['type'] != 2) return '0: #Cmt1';
	
        $asunto = 4;
		$email = $u['usuario_email'];
		$promocode = 'Tiendacode1';
		$servicio = $data['obj'];
		$problema = "Hola, soy: ".$u['usuario_nombre'].' Y ve comprado un servicio de hosting, espero me lo actives. hoy: ('.$w->setHace(time()).', dia: '.date("D").':'.date("d").', mes: '.date("m").': '.date("M").', año: '.date("y").':'.date("Y").')';

		if(mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos - \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'')){
		if(mysql_query('INSERT INTO s_tickets (user, asunto, problema, servicio, email, fecha, s_promocode) VALUES (\''.$_SESSION['uid'].'\', \''.$asunto.'\', \''.$problema.'\', \''.$servicio.'\', \''.$email.'\', \''.time().'\', \''.$promocode.'\')')){
	    mysql_query("INSERT INTO t_compras (comp_produc, comp_user, comp_hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."')");
		return '1: Comprado correctamente.';
		}else{
		mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos + \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
		return '0: Error #Cmt3. Tus puntos te han sido devueltos.';
		}
		}else{
		return '0: Error #Cmt2';
		}
	}
		function comprarDar($id){
		$data = $this->getProducto($id);
        if($data['type'] != 3)
		return '#Cpt1';
	
		if(mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos - \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'')){
		if(mysql_query('UPDATE `usuarios` SET user_puntosxdar = user_puntosxdar +\''.(int)$data['obj'].'\'  WHERE usuario_id = \''.$_SESSION['uid'].'\'')){
		return '1: Comprado correctamente.';
	    mysql_query("INSERT INTO t_compras (comp_produc, comp_user, comp_hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."')");
		}else{
		mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos + \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
		return '0: Error #Cpt3. Tus puntos te han sido devueltos.';
		}
		}else{
		return '0: Error #Cpt2';
		}
	}
	function comprarCambio($id, $nuevo){
		global $w;
		$data = $this->getProducto($id);
        if($data['type'] != 4)
		return '0: #Cct1';
		
		$nuevo = $w->setSecure($nuevo);
		
		if(mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos - \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'')){
		if(mysql_query('UPDATE `usuarios` SET user_name = \'' .$nuevo. '\' WHERE usuario_id = \'' .$_SESSION['uid'].'\'')){
		return '1: Comprado correctamente.';
	    mysql_query("INSERT INTO t_compras (comp_produc, comp_user, comp_hace) VALUES('".$id."', '".$_SESSION['uid']."', '".time()."')");
		}else{
		mysql_query('UPDATE `usuarios` SET user_jpuntos = user_jpuntos + \''.(int)$data['precio'].'\' WHERE usuario_id = \''.$_SESSION['uid'].'\'');
		return '0: Error #Cct3. Tus puntos te han sido devueltos.';
		}
		}else{
		return '0: Error #Cct2';
		}
	}
	function comprarProducto($id){
	global $w;
	if($_SESSION['uid']){
	//FILTRAMOS DATOS
	$id = (int)$id;
	$data = $this->getProducto($id);
	$type = $data['type'];

	if($_SESSION['user_jpuntos'] < $data['precio']){
    return'0: No cuentas con los <b>Worts</b> Suficientes para obtener este producto.';
	}else{

	if($type == 1){ $ir = $this->comprarRango($id); }else{}
	if($type == 2){ $ir = $this->comprarMedalla($id); }else{}
	if($type == 3){ $ir = $this->comprarDar($id); }else{}
	if($type == 5){ $ir = $this->comprarHosting($id); }else{}
	if($type == 4){ $ir = $this->comprarCambio($id, $w->setSecure($_POST['nuevo'])); }else{}
	if(!$type or !$id){ return '0: Define una accion'; }else{}
	return $ir; 
}
}else{
return '0: Esta accion es solo para usuarios registrados.';
}
}

/****/
}
