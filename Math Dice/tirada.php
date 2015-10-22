<?php
    $arr1=array('cara1.png','cara2.png','cara3.png','cara4.png','cara5.png','cara6.png');
    
    function dados1al6(){
        
        //Sentencia para mostrar los dados.
        
        global $arr1;
        for($i=0; $i<count($arr1); $i++) {
            
            echo '<div class="col-xs-2"><img class="dado" src="imagenes/'.$arr1[$i].'"></img></div>';
            
        }
    
    }
    
    function dadoAleatorio(){
       
        
        global $arr1;
        
        $numAleatorio = rand(0,5);
            
        echo '<div class="col-xs-2"><img class="dado" src="imagenes/'.$arr1[$numAleatorio].'"></img></div>';
   
    }
    
    $arr2=array('cara1.png','cara2.png','cara3.png');
    
    function dados1al3(){
        
        //Sentencia para mostrar los dados.
        
        global $arr2;
        for($i=0; $i<count($arr2); $i++) {
            
            echo '<div class="col-xs-2"><img class="dado" src="imagenes/'.$arr2[$i].'"></img></div>';
            
        }
    
    }
    
    function dadoAleatorio2(){
       
        
        global $arr2;
        
        $numAleatorio = rand(0,2);
            
        echo '<div class="col-xs-2"><img class="dado" src="imagenes/'.$arr2[$numAleatorio].'"></img></div>';
   
    }
    
    
    
    $arr3=array('1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png','9.png','10.png','11.png','12.png');
    
    function dados1al12(){
        
        //Sentencia para mostrar los dados.
        
        global $arr3;
        for($i=0; $i<count($arr3); $i++) {
            
            echo '<div class="col-xs-2"><img class="dado" src="imagenes/dodecaedro/'.$arr3[$i].'"></img></div>';
            
        }
    
    }
    
    function dadoAleatorio3(){
       
        
        global $arr3;
        
        $numAleatorio = rand(0,11);
            
        echo '<div class="col-xs-2"><img class="dado" src="imagenes/dodecaedro/'.$arr3[$numAleatorio].'"></img></div>';
   
    }
    
    
    
?>