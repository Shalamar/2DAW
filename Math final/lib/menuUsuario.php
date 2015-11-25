<div class="container">
    <div class="infoUsu">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="prueba">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img src="https://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4><?php echo "".$jugador1->getNombre()." ".$jugador1->getApellidos(); ?></h4>
                                <p>
                                    <br />
                                    
                                    <?php if($jugador1->getLang() == 'sp'){ ?>
                                       Tipo de juego:
                                    <?php }else {?>
                                        Game mode:
                                    <?php } ?> <?php echo " ".$jugador1->getTipo(); ?>
                                    <br />
                                    <?php if($jugador1->getLang() == 'sp'){ ?>
                                       Edad:
                                    <?php }else {?>
                                        Age:
                                    <?php } ?> <?php echo " ".$jugador1->getEdad(); ?>
                                    <br />
                                    <?php if($jugador1->getLang() == 'sp'){ ?>
                                       Puntos:
                                    <?php }else {?>
                                        Points:
                                    <?php } ?> <?php echo " ".$_SESSION['jugador']->getPuntos(); ?><br><br>
                                <!-- Botón -->
                                
                                <?php if($jugador1->getLang() == 'sp'){ ?>
                                   <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cerrar sesión</button>
                                <?php }else {?>
                                    <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Sign off</button>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>