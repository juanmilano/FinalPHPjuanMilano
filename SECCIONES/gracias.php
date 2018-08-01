<?php

if(file_exists("formulario.json")){
    
    $datos = file_get_contents("formulario.json");
    
    $formulario = json_decode($datos,true);
   }

?>
    
<section class="primary" id="gracias">
            <div class="row">
                            <div class="form-group col-xs-12">
                                <h3 class="exito">Gracias por contactarnos, hemos recibido los siguientes datos:</h3>
                            </div>
                        </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" form action="" method="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <?php echo "<label>Su Nombre y Apellido: </label></br>".$formulario['name']."<br>";?> 
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                              <?php echo "<label>Su Email: </label></br>".$formulario['email']."<br>";?> 
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <?php echo "<label>Su Telélefono: </label></br>".$formulario['phone']."<br>";?>  
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                            <?php echo "<label>Mensaje: </label></br>".$formulario['message']."<br>";?> 
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div>
                    <span class="help-block"><p id="characterLeft" class="help-block ">¿Sobre qué tipo de eventos queres recibir información?</p></span>
                    <?php    
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
                ?>    
                    </div>       
                        <br>
                    </form>
                </div>
            </div>
    </section>