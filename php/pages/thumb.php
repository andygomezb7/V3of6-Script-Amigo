<?php
$file = ($_GET["file"]) ? $_GET["file"] : $_SERVER['HTTP_HOST'].'/images/avatar/group.png';
$width = $_GET["width"] ? $_GET["width"] : '120';
$height = $_GET['height'] ? $_GET['height'] : '120';

// Ponemos el . antes del nombre del archivo porque estamos considerando que la ruta está a partir del archivo thumb.php
$file_info = getimagesize($file);
// Obtenemos la relación de aspecto
$ratio = $file_info[0] / $file_info[1];

// Calculamos las nuevas dimensiones
$newwidth = $width;
//round($newwidth / $ratio)
$newheight = $height;

// Sacamos la extensión del archivo
$ext = explode(".", $file);
$ext = strtolower($ext[count($ext) - 1]);
if ($ext == "jpeg") $ext = "jpg";

// Dependiendo de la extensión llamamos a distintas funciones
switch ($ext) {
case "jpg":
$img = imagecreatefromjpeg($file);
break;
case "png":
$img = imagecreatefrompng($file);
break;
case "gif":
$img = imagecreatefromgif($file);
break;
}
// Creamos la miniatura
$thumb = imagecreatetruecolor($newwidth, $newheight);
// La redimensionamos
imagecopyresampled($thumb, $img, 0, 0, 0, 0, $newwidth, $newheight, $file_info[0], $file_info[1]);
// La mostramos como jpg

/*if($ext == 'jpg' or $ext == 'jpeg'){
header("Content-type: image/jpeg");
imagejpeg($thumb, null, 80);
}elseif($ext == 'png'){
header("Content-type: image/png");
imagepng($thumb, null, 80);
}elseif($ext == 'gif'){
header("Content-type: image/gif");
imagegif($thumb, null, 80);
}else{*/

header("Content-type: image/jpeg");
imagejpeg($thumb, null, 100);

/*
header('Content-type: image/png');
$tip = $_GET['tpdm'];
if($tip == 'avt'){
crear_Thumbnail("http://".$_SERVER['HTTP_HOST'].'/files/avatar/'.$_GET['thumbail'], 400, 400, 80, "http://".$_SERVER['HTTP_HOST'].'/files/avatar/'.$_GET['thumbail']);
}elseif($tip == 'file'){
crear_Thumbnail("http://".$_SERVER['HTTP_HOST'].'/files/uploads/'.$_GET['thumbail'], 400, 400, 80, "http://".$_SERVER['HTTP_HOST'].'/files/uploads/'.$_GET['thumbail']);
}elseif($tip == 'arc'){
crear_Thumbnail("http://".$_SERVER['HTTP_HOST'].'/files/arc/co/'.$_GET['thumbail'], 400, 400, 80, "http://".$_SERVER['HTTP_HOST'].'/files/arc/co/'.$_GET['thumbail']);
}else{}*/

?>