
<section class="primary" id="gracias">
            <div class="row">
                            <div class="form-group col-xs-12">
                                <h3 class="exito">Faltan Campos Obligatorios:</h3>
                            </div>
                        </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" form action="" method="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <?php echo "<label>Su Nombre y Apellido: </label></br>".$_GET['quenombre']."<br>";?> 
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                              <?php echo "<label>Su Email: </label></br>".$_GET['queemail']."<br>";?> 
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <?php echo "<label>Su Telélefono: </label></br>".$_GET['quephone']."<br>";?>  
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                            <?php echo "<label>Su Nombre: </label></br>".$_GET['quemensaje']."<br>";?> 
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                     
                        <br>
                    </form>
                </div>
            </div>
    </section>