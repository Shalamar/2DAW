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
        
        <?php 
        
        //Pruebas para insercion de dado.
        
            echo dadoAleatorio();
            
        ?>
        
        <!-- Pruebas para el botón de tirar dado -->
        
        <form method="post">
            
            <div class='tirarDado'><input type="submit" name="submit" value='¡Tira el dado!' class='btn btn-primary'></input></div>
        
        </form>
        
<div class="container">
    <div class="row">
        
        <div class="col-xs-6">
            <div class="row">
                <div class="col-xs-6"><div class="mini-box">1</div></div>
                <div class="col-xs-6"><div class="mini-box">2</div></div>
                <div class="col-xs-6"><div class="mini-box">3</div></div>
                <div class="col-xs-6"><div class="mini-box">4</div></div>
            </div>
        </div>
        
        <div class="col-xs-6">
            <div class="big-box">image</div>
        </div>
        
    </div>
</div>
        
    </body>
    
</html>