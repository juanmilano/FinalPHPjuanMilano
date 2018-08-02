
<script>
    $(document).ready(function(){
       
        console.log("El formulario está listo");
    })
</script>   
<section class="primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="container">
                  <div class="row" id="slider-text">
                    <div class="col-md-6" >
                      <h2>Contacto</h2>
                    </div>
                  </div>
                </div>
                <div id="Msj"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" form action="index.php?seccion=procesaform" method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre y Apellido</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" name="name">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Teléfono</label>
                                <input type="tel" class="form-control" placeholder="Teléfono" id="phone" name="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Dejanos un mensaje" id="message" name="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div>
                    <span class="help-block"><p id="characterLeft" class="help-block ">¿Sobre qué tipo de eventos queres recibir información?</p></span>
                    <input type="checkbox" name="fiesta[]" value="Eventos"> <label for="cbox2"> Eventos Corporativos</label><br>
                    <input type="checkbox" name="fiesta[]" value="Casamientos"> <label for="cbox3"> Casamientos</label><br>
                    <input type="checkbox" name="fiesta[]" value="Cumpleaños"><label for="cbox4"> Cumpleaños</label><br>
                    <input type="checkbox" name="fiesta[]" value="Infantiles"><label for="cbox4"> Fiestas Infantiles</label><br>
                    </div>       
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button id="enviar" type="submit" value="enviar" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <script>
     
 $("#contactForm").submit(function(e){
     e.preventDefault();
     
     var queurl = $(this).attr('action');
     var quedata = $(this).serialize();
     
     var peticion = $.ajax({         
         type : 'POST',
         url :  queurl,
         data: quedata,
     })
     .done(function(respuesta){
         
         $("#Msj").html(respuesta)
         .hide()
         .fadeIn();
     })
     .fail(function(){
         console.log("error");
     })
     .always(function(){
         console.log("completó la petición");
         
     });
     
     
 });
</script>
    </section>