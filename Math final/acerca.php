<?php
include('sesion.php');
?>
<html>
    <head>
    <?php
        include("lib/header.php");
        include 'lib/menu.php';
        include "lib/menuUsuario.php";
    ?>
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="css/acerca.css" rel="stylesheet">


</head>

<body>
    
    <div class="container">
    	<div class="row">
    		<div class="col-lg-3 col-sm-6">
    
                <div class="card hovercard">
                    <div class="cardheader">
    
                    </div>
                  
                    <div class="info">
                        <div class="title">
                            <a target="_blank" href="http://scripteden.com/">Borja Ribes</a>
                        </div>
                        <div class="desc">Curious developer</div>
                        <div class="desc">Developer of Math Dice! and Click n' Tick</div>
                    </div>
                    
                    <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/RibesV">
                            <i class="fa fa-twitter"></i>
                        </a>
                      
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           href="https://www.facebook.com/borja.ribes.5">
                            <i class="fa fa-facebook"></i>
                        </a>
                        
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           href="https://github.com/shalamar">
                            <i class="fa fa-github"></i>
                        </a>
    
                </div>
    
            </div>
    
    	</div>
    	
    	<div class="col-lg-5 col-sm-6">
    	    
    	        <?php if($jugador1->getLang() == 'sp'){ ?>
                       <h2>Acerca de:</h2>
                    <?php }else {?>
                        <h2>About:</h2>
                    <?php } ?>
    	    
    	        <?php if($jugador1->getLang() == 'sp'){ ?>
    	                <p>Math Dices un juego de mesa adaptado para que sea una aplicación web. </p>
                    <?php }else {?>
    	                <p>Math dice is a board game adapted it to a web application.</p>
                    <?php } ?>
    	    
    	</div>
    	
    </div>
    
</body>
</html>