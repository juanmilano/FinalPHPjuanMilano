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

header("Content-Type: application/json; charset=UTF-8");
$formularioJSON = json_encode($formulario);

file_put_contents("formulario.json",$formularioJSON);

$datosRecibidos = "&quenombre=$formulario[name]&queemail=$formulario[email]&quephone=$formulario[phone]&quefiesta=$formulario[fiesta]&quemensaje=$formulario[message]";

if (empty($formulario['name']) || empty($formulario['email']) || empty($formulario['phone']) || empty($formulario['message'])){
    header("Location:index.php?seccion=errorform&datosRecibidos=$datosRecibidos");
    die;
}else{
    header("Location:index.php?seccion=gracias&datosRecibidos=$datosRecibidos");
    die;
}}


 