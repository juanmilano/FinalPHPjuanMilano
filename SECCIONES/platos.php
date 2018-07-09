<section>
<?php
    $limite = count($galeria) -1;
    $aleatorio = rand(0, $limite);
    
    ?>
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>Plato del día</h2>
    </div>
  </div>
</div>

	<div> 
    <img id="plato" src="img/<?= $galeria[$aleatorio]['img'] ?>" alt="">
	</div> 
	
<div class="galeria">
    <ul class="contenedor-gal">
    <?php
    foreach($galeria as $categoria):
    ?>
       <li class="item-gal">          
            <img  src="img/<?= $categoria['img'] ?>" alt="">
       </li>                
    <?php
      endforeach;  
    ?>
    </ul>
</div> 


</section>     
 
               
