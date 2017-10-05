<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');
/** POWERED BY: Wortit Developers **/
/* VARIABLES POR DEFAULT */
	// NIVELES DE ACCESO Y PLANTILLAS DE CADA ACCIÓN
	$files = array(
		'captcha-load' => array('n' => 1, 'p' => ''),
	);

/* VARIABLES LOCALES ESTE ARCHIVO | REDEFINIR VARIABLES */
	$tsPage = 'php_files/p.admin.'.$files[$action]['p'];
	$tsLevel = $files[$action]['n'];
	$tsAjax = empty($files[$action]['p']) ? 1 : 0;

	    if($files[$action]['p']){
    include 'smarty/Smarty.class.php';
    $smarty = new Smarty;
    }else{}

/* INSTRUCCIONES DE CODIGO | DEPENDE EL NIVEL */
	$tsLevelMsg = $w->setLevel($tsLevel, true);
	if($tsLevelMsg != 1) { echo '0: '.$tsLevelMsg['mensaje']; die();}
        // CODIGO
	    switch($action){
	    case 'captcha-load':
	    header('Content-Type: image/png');
$im = imagecreatetruecolor(270, 47);
$blanco = imagecolorallocate($im, 255, 255, 255);
$gris = imagecolorallocate($im, 128, 128, 128); $dnaskjeqwl = rand(1, 3);
$saber[1] = imagecolorallocate($im, 590, 0, 0);
$saber[2] = imagecolorallocate($im, 10, 20, 0);
$saber[3] = imagecolorallocate($im, 40, 40, 50);
$negro = imagecolorallocate($im, 10, 40, 100);
imagefilledrectangle($im, 0, 0, 399, 47, $saber[$dnaskjeqwl]);
imagefilledrectangle($im, 90, 0, 399, 47, $blanco);

function generateString ($length = 8){
  $string = "";
  $lksdfq = rand(1, 2);
  $possible[1] = "0123456789aAbBcCdDfFgGhHjJkKmMnNpPqQrRsStTvVwWxXyYzZ";
  $possible[2] = "0123456789";
  $i = 0; while ($i < $length) { $char = substr($possible[$lksdfq], mt_rand(0, strlen($possible[$lksdfq])-1), 1); $string .= $char; $i++; }
  return $string; }

$skl = rand(2, 3);
$alslw = rand(4, 6);
$texto = generateString($alslw);
$texto3 = generateString($skl);

$ds = rand(1, 4);
$f[1] = '../libs/fonts/recaptchaFont.ttf';
$f[2] = '../libs/fonts/MOMS.ttf';
/*$f[3] = 'fonts/murder.ttf';*/
$f[3] = '../libs/fonts/rebucked.ttf';
/*$f[5] = 'fonts/MadeWithB.ttf';*/
/*$f[5] = 'fonts/Cnftstrm.ttf';*/
$f[4] = '../libs/fonts/Sixties.ttf';

imagettftext($im, 20, 0, 10, 30, $blanco, $f[$ds], $texto3);
imagettftext($im, 20, 0, 110, 30, $negro, $f[$ds], $texto);
imagepng($im);
imagedestroy($im);
	    break;
        default:
            die('0: Este archivo no existe.');
        break;
	    }