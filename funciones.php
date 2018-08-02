<?php
function compruebaForm($campo){

$name = trim($campo['name']);
$email = trim($campo['email']);
$phone = trim($campo['phone']);
$message = htmlentities(nl2br(trim($_POST['message'])));
$fiesta = isset($campo['fiesta']) ? serialize($campo['fiesta']) : '';

$formulario = [];
$formulario  = [
	"name" => $name,
	"email" => $email,
	"phone" => $phone,
	"message" => $message,
	"fiesta" => $fiesta

];

if (empty($formulario['name']) || empty($formulario['email']) || empty($formulario['phone']) || empty($formulario['message'])){
    header("Location:SECCIONES/errorform.php");
    die;
}else{
	header("Content-Type: application/json; charset=UTF-8");
	$formularioJSON = json_encode($formulario);
	file_put_contents("formulario.json",$formularioJSON);
    header("Location:SECCIONES/gracias.php");

}}


 