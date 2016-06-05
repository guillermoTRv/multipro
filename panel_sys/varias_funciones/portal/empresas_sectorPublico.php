
<?php
                        
    $consultaClientes = "SELECT name_cliente,name_get FROM clientes WHERE type_cliente='publico' limit 5";
    $consultaClientes = mysqli_query($enlace,$consultaClientes) or die("no");
    while ($arrayClientes = mysqli_fetch_array($consultaClientes)) {
        $nameCliente   = $arrayClientes['name_cliente'];
        $nameGet       = $arrayClientes['name_get'];

        ?>
        <div class="col-md-5 col-md-offset-1">
             <a style='width:170px;' href='<?php echo $ruta."/panel/".$nameGet ?>/personal-guardias' class='btn btn-sm btn-ind'>
                 <?php echo $nameCliente; ?> 
             </a>
         </div>
         <?php

    }
    ?>

        <div class="col-md-5 col-md-offset-1">
            <a style='width:170px;' href='#hospitales' data-toggle='modal' class='btn btn-sm btn-ind'>
                Institutos de salud
            </a>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <a class="a_limpia" href="<?php echo $ruta."/portal"; ?>">Regresar</a><br><br>                               
        </div>
 