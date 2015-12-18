<?php
//El include de jugador va antes que el session start, si no, tira error de php incomplete class
//Incluimos la clase Jugador
include('lib/Jugador.php');
//Iniciamos la session
session_start();

if(isset($_POST['jugador2'])){
    $_SESSION['jugador']->setNombre($_POST['nombre']);
    $_SESSION['jugador']->setApellidos($_POST['apellidos']);
    $_SESSION['jugador']->setEdad($_POST['edad']);
    
}
//Se crea el objeto jugador
if(isset($_POST['jugador'])){
    //Comprobamos un objeto creado en la sesion
    if (!isset($_SESSION['jugador'])) {
        $jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego'],$_POST['lang']);
        
            //Inicializamos al jugador
        $_SESSION['jugador'] = $jugador1;
     
    }
}else{
    
    if(isset($_SESSION['jugador'])){
        
        //Inicializamos al jugador
        $jugador1 = $_SESSION['jugador'];
        
    }else{
        header('Location: indice.php');
    }
}


?>