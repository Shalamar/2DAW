<?php
$lang="sp";
$menu=array(
    "titulo"=>array(
      "sp"=>"Math Dice",
      "en"=>"Math Dice"
    ),
    "portada"=>array(
      "sp"=>"Inicio",
      "en"=>"Home"
    ),
    "instrucciones"=>array(
      "sp"=>"Instrucciones",
      "en"=>"Instructions"
    ),
    "tiposJuego"=>array(
      "sp"=>"Tipos juego",
      "en"=>"Game choice",
      "submenu"=>array(
          "tipo1"=>array(
             "sp"=>"Juego Tradicional",
             "en"=>"Traditional game",
           ),
          "tipo2"=>array(
             "sp"=>"Juego modificado",
             "en"=>"Game modified",
           ),
          "tipo3"=>array(
             "sp"=>"Juego infantil",
             "en"=>"Kid game",
           )
           
        )
    
    
    )
    
  )
?>

<html>
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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


</body>
</html>