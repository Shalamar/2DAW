<?php

include 'tirada.php';
include 'menu.php';

?>

<html>
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/dado.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $menu['titulo'][$lang]?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><?php echo $menu['portada'][$lang]?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?><span class="caret"></span></a>
          <ul class="dropdown-menu">
                    <?php 
                    foreach( $menu['tiposJuego'] as $clave => $valor ){
                      
                      if($clave == 'submenu'){
                         
                        foreach ($valor as $juegos){ ?>
                            <li><a href="#"><?php echo $juegos[$lang] ?></a></li>
                    <?php } 
                         }
                    } ?>
                  </ul>
        </li>
        <li><a href="#"><?php echo $menu['instrucciones'][$lang]?></a></li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="container">
    
    <div class="row" style="display:none;">
        <?php 
        //Aquí hacemos que nos muestre de forma automática las imágenes de los dados.
        echo dados1al6(); ?>
    </div>
  
    <div class="row">
        <div class='col-xs-7'><h1>Resultado aleatorio dado 6 caras:</h1></div>
    </div>
    
    <div class="row">
        <?php 
            
            //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.
        
            echo dadoAleatorio();
            
        ?>
        
        
       
        
        <div class="tirarDado">
            <form method="post">
            
                <input type="submit" name="submit" value='¡Haz tu tirada!' class='btn btn-primary'></input>
        
            </form>
        </div>
        
    </div>
  
</div>




<div class="container">
    
    <div class="row" style="display:none;">
        <?php 
        //Aquí hacemos que nos muestre de forma automática las imágenes de los dados.
        echo dados1al3(); ?>
    </div>
  
    <div class="row">
        <div class='col-xs-7'><h1>Resultado aleatorio dado 3 caras:</h1></div>
    </div>
    
    <div class="row">
        <?php 
            
            //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.
        
            echo dadoAleatorio2();
            
        ?>
        
        
       
        
        <div class="tirarDado">
            <form method="post">
            
                <input type="submit" name="submit" value='¡Haz tu tirada!' class='btn btn-primary'></input>
        
            </form>
        </div>
        
    </div>
  
</div>

<div class="container">
    
    <div class="row" style="display:none;">
        <?php 
        //Aquí hacemos que nos muestre de forma automática las imágenes de los dados.
        echo dados1al12(); ?>
    </div>
  
    <div class="row">
        <div class='col-xs-7'><h1>Resultado aleatorio dado dodecaedro:</h1></div>
    </div>
    
    <div class="row">
        <?php 
            
            //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.
        
            echo dadoAleatorio3();
            
        ?>
      
        <div class="tirarDado">
            <form method="post">
            
                <input type="submit" name="submit" value='¡Haz tu tirada!' class='btn btn-primary'></input>
        
            </form>
        </div>
        
    </div>
  
</div>



</body>
</html>