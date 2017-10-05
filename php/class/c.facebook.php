<?php

/**
* Facebook Connect - PHPost.net
*
* @file c.facebook.php
* @author Alan (http://www.phpost.net/user/5-alan/)
* @date 29/04/2013
*
*/

require TS_ROOT . DIRECTORY_SEPARATOR . 'ext' . DIRECTORY_SEPARATOR . 'facebook.php'; 

class FBConnect {

	private static $FBPublic = '866978713315645';
	private static $FBPrivate = 'e2c8ce905bede236698e0193d6ccfc13';
	private $fb;
	private static $fbBirthday;
	public static $fbLoginURL;
	public static $fbUID;
	public static $fbData;

	function __construct() {

		if(empty(self::$FBPublic) || empty(self::$FBPrivate)) die('Debe configurar el archivo /class/c.facebook.php');

		$this->fb = new Facebook(array('appId' => self::$FBPublic, 'secret' => self::$FBPrivate, 'cookie' => true));

		self::$fbLoginURL = $this->fb->getLoginUrl(array('scope' => 'email, offline_access, publish_stream, user_birthday, user_location, user_hometown'));

		if(self::$fbUID = $this->fb->getUser()) $s = self::$fbData = $this->fb->api('/me');

		self::$fbBirthday = $s['birthday'];
		
	}

	public static function Login() {

		if(empty(self::$fbUID)) return false;

		if(!mysql_num_rows($f = mysql_query('SELECT usuario_nombre, usuario_clave FROM usuarios WHERE user_fb = \''.self::$fbUID.'\''))) return false;

		$f = mysql_fetch_row($f);

		$GLOBALS['wuser']->loginUser($f[0], $f[1], self::$fbUID);

		return false;

	}

	public static function Register() {

		 if($_SESSION['uid']) return 'Ya tienes una cuenta en la comunidad';

		 if(empty(self::$fbUID)) return 'Error inesperado, reint&eacute;ntalo nuevamente'; // por si se pierde okkno

		 if(empty($_POST['password']) || empty($_POST['user_name']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) return 'Faltan datos';

		 if(mysql_num_rows(mysql_query('SELECT usuario_id FROM usuarios WHERE usuario_nombre = \''.$GLOBALS['w']->setSecure($_POST['user_name']).'\' || usuario_email = \''.$GLOBALS['w']->setSecure($_POST['email']).'\' || user_fb = \''.self::$fbUID.'\''))) return 'Ya existe un usuario';

		 if(empty($_POST['day']) && empty($_POST['month']) && empty($_POST['year'])) list($_POST['month'], $_POST['day'], $_POST['year']) = explode('/', self::$fbBirthday); // sé que es más lento redeclarar superglobales, pero D:

		 if(!checkdate($_POST['month'], $_POST['day'], $_POST['year'])) return 'La fecha de nacimiento es incorrecta';

		 if(!preg_match('/^[a-z0-9\-\_]{4,16}$/i', $_POST['user_name'])) return 'El nombre de usuario contiene car&aacute;cteres incorrectos';

		 $gender = (empty($_POST['gender']) || $_POST['gender'] === 'male' ? 1 : 0);

		 mysql_query('INSERT INTO usuarios (usuario_nombre, usuario_clave, usuario_email, rango, identi, user_fb, name_original) VALUES (\''.$GLOBALS['w']->setSecure($_POST['user_name']).'\', \''.md5(md5($_POST['password']).strtolower($_POST['user_name'])).'\', \''.$GLOBALS['w']->setSecure($_POST['email']).'\', \'2\', \''.time().'\', \''.self::$fbUID.'\', \''.$GLOBALS['w']->setSecure($_POST['name']).'\')') or die(mysql_error());

		 $id = mysql_insert_id();

		 $GLOBALS['wuser']->loginUser($GLOBALS['w']->setSecure($_POST['user_name']), $_POST['password'], self::$fbUID);

		 return 1;

	}

}