<?php
$tpl = 0;
include('../../../../header.php');
require 'src/facebook.php';  // Include facebook SDK file
//require 'functions.php';  // Include functions
$facebook = new Facebook(array(
  'appId'  => '866978713315645',   // Facebook App ID 
  'secret' => 'e2c8ce905bede236698e0193d6ccfc13',  // Facebook App Secret
  'cookie' => false,	
));
$user = $facebook->getUser();

if ($user){
  try {
$user_profile = $facebook->api('/me');
$fbid = $user_profile['id'];                 // To Get Facebook ID
$fbuname = $user_profile['username'];  // To Get Facebook Username
$fbfullname = $user_profile['name']; // To Get Facebook full name
$femail = $user_profile['email'];    // To Get Facebook email ID
/* ---- Session Variables -----*/
include '../../../class/modos/anonimo.class.php';
$tsAnonimo =& tsAnonimo::getInstance();

$tsAnonimo->register_fb($fbid, $fbuname, $fbfullname, $femail);
//var_dump($user_profile);

//$dkadjsl = ($fbuname) ? $fbuname : $fbid;
//$user_apifeed = $facebook->api('/me/feed', "POST", array(
//"message" => "Me he unido a www.wortit.net, sigueme!",
//"link" => "https://wortit.net/".$dkadjsl,
//));

header("Location: ".$w->settings['url']."");
// 
} catch (FacebookApiException $e) {
error_log($e);
$user = null;
}
}else{
	// REGISTER
$loginUrl = $facebook->getLoginUrl();
var_dump($loginUrl);
header("Location: ".$loginUrl);
}
?>
