<?php 
    include("ruta.php");
    include("cfg.php");
    include("notificacion_errores.php");
    include("sanitizar.php");

    session_start();
    $type_user   =  $_SESSION['type_user'];

    date_default_timezone_set('America/Mexico_City');
    $fecha                =  date("Y-m-d");
        
    if ($type_user != "administrador") {
        header("Location: $ruta");
    }

    $tipo_usuario_encabezado = $type_user;
    $dato_izquierdo          = $fecha;
    $name_area               = 'Cordinación Agencias'; 

    $sector   = sanitizar($_GET['sec']);

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $ruta ?>/Iconos/apple-touch-icon-144-precomposed.png">
    <!--Ponerle la etiqueta para que google no indexe el contenido-->
    <title>Listado de clientes</title>
    <link href="<?php echo $ruta ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta ?>/css/css_panell.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>


  </head>  
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
            <?php 
                include("panel_sys/encabezado/encabezado_sys.php");
            ?>
            <div class="row" style='margin-bottom:30px;'>
                <br>
                <div class="col-md-10 col-md-offset-1 div_clientes">

            
                <?php 
                    if (empty($sector)) {
                        ?>
                            <div class="col-md-5 col-md-offset-1">
                                <a style='width:170px;' href='?sec=privado' data-toggle='modal' class='btn btn-sm btn-ind'>
                                    Sector privado 
                                </a>
                            </div>                    

                            
                            <div class="col-md-5 col-md-offset-1">
                                <a style='width:170px;' href='?sec=publico' data-toggle='modal' class='btn btn-sm btn-ind'>
                                    Sector publico 
                                </a>
                                <br><br><br><br>
                            </div>


                        <?php
                    }

                    if ($sector == "privado") {
                        include("panel_sys/varias_funciones/portal/empresas_sectorPrivado.php");        
                    }
                    if ($sector == "publico") {
                        include("panel_sys/varias_funciones/portal/empresas_sectorPublico.php");       
                    }

                    ?>
                        
                </div>
            </div>

           
        </div>
      </div>
    </div>
  </body>
</html>


<div class="modal fade" id="hospitales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='margin-top:70px;'>
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style='background-color:#353637;border:1px solid #e06000;'>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style='color:white;'>Institutos de salud</h4>
      </div>
      <div class="modal-body" style="padding-top:45px;">
            <?php
               
                $consultaClientesH = "SELECT name_cliente,name_get FROM clientes limit 5,6";
                $consultaClientesH = mysqli_query($enlace,$consultaClientesH) or die("no");
                while ($arrayClientesH = mysqli_fetch_array($consultaClientesH)) {
                    $nameClienteH   = $arrayClientesH['name_cliente'];
                    $nameGetH       = $arrayClientesH['name_get'];

                    ?>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <a href='<?php echo $ruta."/panel/".$nameGet ?>/personal-guardias'class='btn btn-sm btn-ind'>
                                    <?php echo $nameClienteH; ?> 
                                </a>     
                            </div>                       
                        </div>
                        
                    <?php

                }
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

