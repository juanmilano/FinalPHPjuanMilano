<?php

if(file_exists("../formulario.json")){
    
    $datos = file_get_contents("../formulario.json");
    
    $formulario = json_decode($datos,true);
    
   echo $formulario['name'];
   echo "</br>";
   echo $formulario['email'];
   echo "</br>";
   echo $formulario['phone'];
   echo "</br>";
   echo $formulario['message'];
   echo "</br>";
    
    if(empty($formulario['fiesta'])){
        echo "Aun no decidió el tipo de evento";
    }else {   
        $fiestas = unserialize($formulario['fiesta']);
        echo "<ul>";
    foreach($fiestas as $valor){
        echo "<li>$valor</li>";            
                }
        echo "</ul>";    
                }
      }          
?>
    