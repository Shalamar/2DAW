<?php
    //Array multilenguaje
include 'menu.php';
    
    //Dados
include 'dado.php';
?>
<html>
    <head>
        <title>Math Dice</title>
        <meta charset="UTF-8">
 <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dado.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
    </head>
    <body>
        
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><?php echo $menu['titulo'][$lang]?> </a>
            </div>
            <div>
              <ul class="nav navbar-nav">
                <li><a href="index.php"><?php echo $menu['portada'][$lang]?></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php // Foreach anidado para generar el submenú
                    foreach( $menu['tiposJuego'] as $clave => $valor ){
                        
                        //If para comprobar si es un submenú (probablemente se puede prescindir de el)
                        if($clave == 'submenu'){
                            
                            //Con este foreach insertamos el array anteriormente recorrido en unas nuevas listas ordenadas
                        foreach ($valor as $tiposJu){ ?>
                            <li><a href="#"><?php echo $tiposJu[$lang] ?></a></li>
                    <?php } ?>
                    <?php }
                    }?>
                  </ul>
                </li>
                <li><a href="#"><?php echo $menu['instrucciones'][$lang]?></a></li>
                <li><a href="#"><?php echo $menu['acercaDe'][$lang]?></a></li>
              </ul>
            </div>
          </div>
        </nav>
    
    
    <?php
    
    //Comprobación y suma/resta de el numero introducido con el numero de los dados.
    
    echo compSumaDado($_POST['dado1'], $_POST['dado2'], $_POST['num1'], $_POST['signo'], $_POST['num2']);
    
    ?>
    
    
    </body>
</html>