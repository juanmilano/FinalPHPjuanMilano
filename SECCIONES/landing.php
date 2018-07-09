<div class="container-fluid">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 
 

<!--Item slider text-->
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>Participa y podes ganar un Catering para 10 personas</h2>
    </div>
  </div>
</div>


    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        <div class="container">

</div>
        <h3 class="dark-grey">Participa:</h3>
 <form enctype="multipart/form-data" action="index.php?seccion=procesa-landing" method = "POST">       
        <div class="form-group col-lg-12">
          <label>Nombre y Apellido</label>
          <input type="" name="nombre" class="form-control" id="" value="">
        </div>        
        <div class="form-group col-lg-6">
          <label>Email</label>
          <input type="" name="email" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Deja tu testimonio</label>
        <textarea id="mensaje" class="form-control" name="mensaje" rows="3" placeholder="Ingrese su mensaje"></textarea>
        </div>      
      </div>
      </div>
      <div class="form-group col-lg-6">
          <label for="foto">Subi tu plato:</label>
                  <input id="adjunto" type="file" name="foto" class="form-control" placeholder="Foto">
      </div> 
    
      <div class="col-md-6">
        <h3 class="dark-grey">Terminos y Condiciones</h3>
        <p>
          Haciendo click en "Registrate" usted esta de acuerdo con nuestros Terminos y Condiciones.
        </p>
        <p>
        Participa contandonos cual es tu plato favorito y el porque. Podes ganar un catering para diez(10) personas totalmente gratis. Compartí con tu testimonio como te gusta que se haga ese plato y compartinos una foto del mismo.
        </p>
        <p>
          El ganador se dara a conocer el 17/07/2018 por nuestra página web y redes sociales.
        </p>
        <button type="submit" id="enviar" class="btn btn-primary">Registrate</button>
      </div>
    </div>
    </form>
  </section>
</div> 
 
      <div class="container">
        <div class="row" id="slider-text">
          <div class="col-md-6" >
            <h2>Testimonios</h2>
          </div>
        </div>
      </div>

 <?php
    $carpeta = opendir("secciones/testimonios"); 
    
    while($persona = readdir($carpeta)):
        
        if($persona != "." &&
           $persona != ".." &&
           $persona != ".DS_Store"):
               
         $subcarpeta = opendir("secciones/testimonios/$persona");
            
        while($imagen = readdir($subcarpeta)):
                  
           if($imagen != "." &&
           $imagen != ".." &&
           $imagen != ".DS_Store" &&
            $imagen != "testimonio.txt" ):
             
echo ' <figure class="snip0051">
  <img src="secciones/testimonios/'.$persona.'/'.$imagen.' "alt="sample1"/> 
  <div class="icons">
    <a href="#"><i class="ion-ios-home-outline"></i></a>
    <a href="#"><i class="ion-ios-email-outline"></i></a>
    <a href="#"><i class="ion-ios-telephone-outline"></i></a>
  </div>
  <figcaption>
    <h2>'.$persona.'</h2> 
    <p>'.file_get_contents("secciones/testimonios/$persona/testimonio.txt").'</p>
  </figcaption> 
</figure>
<script>
    /* Demo purposes only */  
$("figure").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>';
               endif;          


        endwhile;                
        closedir($subcarpeta); 
                  
        endif;          
    
    endwhile; 
    closedir($carpeta);              
     
                  
                  
                  
 ?>
</div>