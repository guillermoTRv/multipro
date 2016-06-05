    <div class="row" style='margin-bottom:17px;margin-top:10px;'>
        <div class="col-md-3">
            <?php 
                if ($type_user == 'administrador') {
                    ?>
                       <a href="<?php echo $ruta ?>/portal">
                        <img style='padding:12px;' src="<?php echo $ruta ?>/Iconos/logo_empresa.png" class="img-responsive">
                       </a>
                    <?php
                }
                else{
                     ?>
                        <img style='padding:12px;' src="<?php echo $ruta ?>/Iconos/logo_empresa.png" class="img-responsive">
                    <?php   
                }
            ?>
        </div>
        <div class="col-md-3 pull-right">
            <h3 class='color_text' style='text-transform: capitalize;'>
                <?php echo $tipo_usuario_encabezado; ?>
            </h3>
            <h4><a class='color_orange_a' href="<?php echo $ruta ?>/cerrar_lg.php">Logout</a></h4>
        </div>  
    </div>

    <div class="row" style='background-color:#202122;padding-top:8px;margin-bottom:12px;padding-left:10px;'>
        <div class="col-md-3" style='font-size:1.25em;margin-left:35px;'>
            <p class="color_text">
                <?php echo $dato_izquierdo; ?>
            </p>
        </div>
        <div class="col-md-3 pull-right">
            <p class='color_text' style='font-size:1.25em;'><?php echo $name_area ?></p>
        </div>
    </div>