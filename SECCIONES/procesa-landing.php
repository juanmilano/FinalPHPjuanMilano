<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$file = $_FILES['foto'];

if (empty($nombre) || empty($email) || empty($mensaje) || empty($file)){
    header("Location:index.php?seccion=errorlanding&faltancampos");
	die;
}else if ($file['type'] == "image/jpeg"){
	$nombrecarpeta = $nombre;

	mkdir ("secciones/testimonios/$nombrecarpeta");

	file_put_contents("secciones/testimonios/$nombrecarpeta/testimonio.txt", $mensaje);

	$original = imagecreatefromjpeg($file['tmp_name']); 

	$ancho_o = imagesx($original);
	$alto_o = imagesy($original);

	$ancho_n = 200;
	$alto_n = round($ancho_n * $alto_o / $ancho_o);

	$nueva = imagecreatetruecolor($ancho_n,$alto_n);

	imagecopyresampled($nueva,$original,0,0,0,0,$ancho_n,$alto_n,$ancho_o,$alto_o); 

	$destino = "secciones/testimonios/$nombrecarpeta/".$file['name'];
	$calidad = 100;

	imagejpeg($nueva,$destino,$calidad);

	$respuesta = move_uploaded_file($original, $destino);

	header("Location:index.php?seccion=graciaslanding&datosRecibidos");
    die;
}elseif ($file['type'] == "image/png"){
	$nombrecarpeta = $nombre;

	mkdir ("secciones/testimonios/$nombrecarpeta");

	file_put_contents("secciones/testimonios/$nombrecarpeta/testimonio.txt", $mensaje);

	$original = imagecreatefrompng($file['tmp_name']); 

	$ancho_o = imagesx($original);
	$alto_o = imagesy($original);

	$ancho_n = 200;
	$alto_n = round($ancho_n * $alto_o / $ancho_o);

	$nueva = imagecreatetruecolor($ancho_n,$alto_n);

	imagecopyresampled($nueva,$original,0,0,0,0,$ancho_n,$alto_n,$ancho_o,$alto_o); 

	$destino = "secciones/testimonios/$nombrecarpeta/".$file['name'];
	$calidad = 9;

	imagepng($nueva,$destino,$calidad);

	$respuesta = move_uploaded_file($original, $destino);

	header("Location:index.php?seccion=graciaslanding&datosRecibidos");
    die;
}elseif ($file['type'] == "image/gif") {
	$nombrecarpeta = $nombre;

	mkdir ("secciones/testimonios/$nombrecarpeta");

	file_put_contents("secciones/testimonios/$nombrecarpeta/testimonio.txt", $mensaje);

	$original = imagecreatefromgif($file['tmp_name']); 

	$ancho_o = imagesx($original);
	$alto_o = imagesy($original);

	$ancho_n = 200;
	$alto_n = round($ancho_n * $alto_o / $ancho_o);

	$nueva = imagecreate($ancho_n,$alto_n);

	imagecopyresampled($nueva,$original,0,0,0,0,$ancho_n,$alto_n,$ancho_o,$alto_o); 

	$destino = "secciones/testimonios/$nombrecarpeta/".$file['name'];
	$calidad = 9;

	imagegif($nueva,$destino,$calidad);

	$respuesta = move_uploaded_file($original, $destino);

	header("Location:index.php?seccion=graciaslanding&datosRecibidos");
    die;
}else{
    header("Location:index.php?seccion=errorlanding&errorformato");
	die;
}

?>


