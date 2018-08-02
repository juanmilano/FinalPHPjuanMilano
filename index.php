<!DOCTYPE html>
<?php
require_once("arrays.php");
require_once("funciones.php");
require_once("config.php");
?>
<html>
    <head>
    <meta charset="utf-8">
	<title>Blitz Catering</title>
    <link rel="icon" href="IMG/logo.png"> 
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="CSS/galeria.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>  
    </head>
    <?php
    if (isset($_GET['seccion'])){
    $secc = $_GET['seccion'];
    }else{
    $secc = 'home';   
    }
    $secc = isset($_GET['seccion']) ? $_GET['seccion']: 'home';
    ?>

<nav class="navbar navbar-default navbar-fixed-top" id="nav">
    <div class="container">
        <div class="navbar-header page-scroll">
            <a class="navbar-brand" href="index.php?seccion=home">Blitz Catering</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right" >
    <?php
      foreach($nav as $k => $v){
        echo '<li class="page-scroll"><a href="index.php?seccion='.$k.'" >'.$v.'</a></li>';   
      }          
    ?> 
            </ul>
        </div>

    </div>
</nav>

<?php
            switch($secc){
                case 'home':
                case 'platos':
                case 'contacto':
                case 'conoceme':
                case 'graciaslanding':
                case 'procesaform':
                case 'procesa-landing':
                case 'landing':
                case 'errorlanding':
                    include('SECCIONES/'.$secc.'.php');
                break;
               default:
               include("SECCIONES/error.php");
            }
        ?>

<footer id="footer">
     <div class="container">
       <div class="row">
       
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <span class="logo">Blitz Catering</span>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="menu">
                         <span>Menu</span>    
                         <li>
                            <a href="index.php?seccion=home">Home</a>
                          </li>
                               
                          <li>
                             <a href="index.php?seccion=platos">Platos</a>
                          </li>
                               
                          <li>
                            <a href="index.php?seccion=conoceme">¿Quiénes Somos?</a>
                          </li>
                               
                          <li>
                             <a href="index.php?seccion=contacto">Contacto</a>
                          </li>
                          <li>
                             <a href="index.php?seccion=landing">Promoción</a>
                          </li>
                     </ul>
                </div>
           
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="address">
                        <span>Contactos</span>       
                        <li>
                           <i alt=""></i> <a href="https://www.facebook.com/ganjahhman">Facebook</a>
                        </li>
                        <li>
                           <i  alt=""> </i> <a href="https://www.instagram.com/blitzcatering/">Instagram</a>
                        </li> 
                        <li>
                           <i aria-hidden="true"></i> <a href="blitzcatering@gmail.com">Email</a>
                        </li> 
                   </ul>
               </div>
           
           
           </div> 
        </div>
    </footer>

