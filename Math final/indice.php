<?php
//Se borran las cookies
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
  );
}
   
    if(isset($_SESSION)){
      
      session_destroy();
    }
?>
<html>
  
<head>
        <?php
            include("lib/header.php");
        ?>
</head>

    <body>

        <img class="logo" src="img/MathDice.png"></img>

        <div class="inicio-form">
        
            <form class="form-horizontal" action="juego.php" method="post">
              
                <fieldset>
                <input type="hidden" name="jugador">
                <!-- Introducir nombre-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-4">
                  <input id="nombre" name="nombre" type="text" placeholder="Introduzca su nombre" class="form-control input-md" required="*">

                 </div>
                </div>
                
                <!-- Introducir apellidos-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>  
                  <div class="col-md-4">
                  <input id="apellidos" name="apellidos" type="text" placeholder="Introduzca sus apellidos" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Introducir Edad-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="edad">Edad</label>  
                  <div class="col-md-4">
                  <input id="edad" name="edad" type="text" placeholder="Introduzca su edad" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Modo de juego -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="tipoJuego">Tipo de juego</label>
                  <div class="col-md-4">
                    <select id="tipoJuego" name="tipoJuego" class="form-control">
                      <option value="junior">Junior</option>
                      <option value="junior+">Junior+</option>
                    </select>
                  </div>
                </div>

                <!-- Idioma -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="language">Idioma</label>
                  <div class="col-md-4"> 
                    <label class="radio-inline" for="language-0">
                      <input type="radio" name="lang" id="spanish" value="sp" checked="checked">
                      Español
                    </label> 
                    <label class="radio-inline" for="language-1">
                      <input type="radio" name="lang" id="english" value="en">
                      English
                    </label>
                  </div>
                  
                <br><br>
                
                <!-- Submit -->
                <div class="form-group">
                  <label class="col-md-5 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="submit" class="btn btn-primary">¡Jugar!</button>
                  </div>
                </div>
                

                </div>
                
                </fieldset>
            </form>
        </div>
        
    </body>    
</html>