<?php
                        
    $consultaClientes = "SELECT name_cliente,name_get FROM clientes WHERE type_cliente='privado'";
    $consultaClientes = mysqli_query($enlace,$consultaClientes) or die("no");
    while ($arrayClientes = mysqli_fetch_array($consultaClientes)) {
        $nameCliente   = $arrayClientes['name_cliente'];
        $nameGet       = $arrayClientes['name_get'];

        ?>
        <div class="col-md-5 col-md-offset-1">
             <a style='width:170px;' href='<?php echo $ruta."/process_cliente.php?cl=".$nameGet ?>' class='btn btn-sm btn-ind'>
                 <?php echo $nameCliente; ?> 
             </a>
         </div>
         <?php

    }
?>

<div class="col-md-5 col-md-offset-1">
            <a class="a_limpia" href="<?php echo $ruta."/portal"; ?>">Regresar</a><br><br>                               
</div>

