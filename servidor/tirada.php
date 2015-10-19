<?php
    $arr1=array('cara1.png','cara2.png','cara3.png','cara4.png','cara5.png','cara6.png');
    
    function dados1al6(){
        
        //Sentencia para mostrar los dados.
        
        global $arr1;
        for($i=0; $i<count($arr1); $i++) {
            
            echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$i].'"></img></div>';
            
        }
    
    }
    
    function dadoAleatorio(){
       
        
        global $arr1;
        
        $numAleatorio = rand(0,5);
            
        echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
   
    }
    
?>