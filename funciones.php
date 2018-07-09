<?php
function compruebaForm($campo){
$name = trim($campo['name']);
$email = trim($campo['email']);
$phone = trim($campo['phone']);
$message = htmlentities(nl2br(trim($_POST['message'])));
$fiesta = isset($campo['fiesta']) ? serialize($campo['fiesta']) : '';

$datosRecibidos = "&quenombre=$name&queemail=$email&quephone=$phone&quefiesta=$fiesta&quemensaje=$message";

if (empty($campo['name']) || empty($campo['email']) || empty($campo['phone']) || empty($campo['message'])){
    header("Location:index.php?seccion=errorform&datosRecibidos=$datosRecibidos");
    die;
}else{
    header("Location:index.php?seccion=gracias&datosRecibidos=$datosRecibidos");
    die;
}}


 